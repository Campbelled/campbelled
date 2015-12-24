<?php namespace Modules\Entry\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Media\Support\Traits\MediaRelation;

class Entry extends Model
{
    use MediaRelation;

    protected $table = 'entry__entries';
    protected $fillable = ['is_active', 'url', 'repository'];
    protected $with = ['likes', 'files'];

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * @return bool
     */
    public function isLiked()
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
    public function incrementLikesForIp(string $ip)
    {
        if ($like = $this->likes()->whereIpAddress($ip)->whereEntryId($this->id)->first()) {
            $like->delete();
            $this->decrementTotalLikes();
            return $this->likes()->count();
        }
        $this->likes()->create([
            'entry_id' => $this->id,
            'ip_address' => $ip,
        ]);
        $this->incrementTotalLikes();

        return $this->likes()->count();
    }

    private function incrementTotalLikes()
    {
        $this->total_likes++;
        $this->save();
    }

    private function decrementTotalLikes()
    {
        $this->total_likes--;
        $this->save();
    }
}
