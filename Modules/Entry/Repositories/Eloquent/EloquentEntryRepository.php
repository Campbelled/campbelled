<?php namespace Modules\Entry\Repositories\Eloquent;

use Modules\Entry\Repositories\EntryRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentEntryRepository extends EloquentBaseRepository implements EntryRepository
{
    public function allActive()
    {
        return $this->model->where('is_active', 1)->get();
    }
}
