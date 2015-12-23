<?php namespace Modules\Entry\Repositories\Cache;

use Modules\Entry\Repositories\EntryRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheEntryDecorator extends BaseCacheDecorator implements EntryRepository
{
    public function __construct(EntryRepository $entry)
    {
        parent::__construct();
        $this->entityName = 'entry.entries';
        $this->repository = $entry;
    }
}
