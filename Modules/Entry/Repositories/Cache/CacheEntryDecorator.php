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

    public function allActive()
    {
        return $this->cache
            ->tags($this->entityName, 'global')
            ->remember("{$this->locale}.{$this->entityName}.allActive", $this->cacheTime,
                function () {
                    return $this->repository->allActive();
                }
            );
    }

    public function mostPopular($amount)
    {
        return $this->cache
            ->tags($this->entityName, 'global')
            ->remember("{$this->locale}.{$this->entityName}.mostPopular.$amount", $this->cacheTime,
                function () use ($amount) {
                    return $this->repository->mostPopular($amount);
                }
            );
    }
}
