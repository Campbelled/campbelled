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
}
