<?php namespace Modules\Entry\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Media\Support\Traits\MediaRelation;

class Entry extends Model
{
    use MediaRelation;

    protected $table = 'entry__entries';
    protected $fillable = ['is_active', 'url', 'likes'];
    protected $casts = [
        'likes' => 'int',
    ];

    public function incrementLikes()
    {
        $this->likes++;
        $this->save();
    }
}
