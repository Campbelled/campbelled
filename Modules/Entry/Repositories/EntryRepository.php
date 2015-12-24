<?php namespace Modules\Entry\Repositories;

use Modules\Core\Repositories\BaseRepository;

interface EntryRepository extends BaseRepository
{
    public function allActive();

    public function mostPopular($amount);
}
