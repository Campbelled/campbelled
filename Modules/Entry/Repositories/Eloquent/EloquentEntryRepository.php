<?php namespace Modules\Entry\Repositories\Eloquent;

use Illuminate\Support\Facades\DB;
use Modules\Entry\Repositories\EntryRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentEntryRepository extends EloquentBaseRepository implements EntryRepository
{
    public function allActive()
    {
        return $this->model->where('is_active', 1)->orderBy('created_at', 'desc')->get();
    }

    public function mostPopular($amount)
    {
        return $this->model->where('is_active', 1)
            ->where('total_likes', '!=', 0)
            ->orderBy('created_at', 'desc')
            ->orderBy('total_likes', 'desc')
            ->take($amount)->get();
    }
}
