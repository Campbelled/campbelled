<?php namespace Modules\Entry\Composers;

use Illuminate\Contracts\View\View;
use Modules\Entry\Repositories\EntryRepository;

class PopularEntriesComposer
{
    /**
     * @var EntryRepository
     */
    private $entry;

    public function __construct(EntryRepository $entry)
    {
        $this->entry = $entry;
    }

    public function compose(View $view)
    {
        //dd($this->entry->mostPopular(5));
        $view->with('popularEntries', $this->entry->mostPopular(5));
    }
}
