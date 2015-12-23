<?php namespace Modules\Entry\Composers;

use Illuminate\Contracts\View\View;
use Modules\Entry\Repositories\EntryRepository;

class EntriesComposer
{
    /**
     * @var EntryRepository
     */
    private $entryRepository;

    public function __construct(EntryRepository $entryRepository)
    {
        $this->entryRepository = $entryRepository;
    }

    public function compose(View $view)
    {
        $view->with('entries', $this->entryRepository->all());
    }
}
