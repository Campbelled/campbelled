<?php namespace Modules\Entry\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Media\Support\Traits\MediaRelation;

class Entry extends Model
{
    use MediaRelation;

    protected $table = 'entry__entries';
    protected $fillable = ['is_active', 'url'];

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * @return bool
     */
    public function isLiked() :\bool
    {
        $ip = request()->ip();
        if ($this->likes()->whereIpAddress($ip)->whereEntryId($this->id)->first()) {
            return true;
        }
        return false;
    }

    /**
     * @param string $ip
     * @return integer
     */
    public function incrementLikesForIp(string $ip) :\integer
    {
        if ($like = $this->likes()->whereIpAddress($ip)->whereEntryId($this->id)->first()) {
            $like->delete();
            return $this->likes()->count();
        }
        $this->likes()->create([
            'entry_id' => $this->id,
            'ip_address' => $ip,
        ]);

        return $this->likes()->count();
    }
}
