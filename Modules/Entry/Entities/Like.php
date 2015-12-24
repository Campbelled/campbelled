<?php namespace Modules\Entry\Entities;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'entry__entry_likes';
    protected $fillable = ['entry_id', 'ip_address'];

    public function entry()
    {
        return $this->belongsTo(Entry::class);
    }
}
