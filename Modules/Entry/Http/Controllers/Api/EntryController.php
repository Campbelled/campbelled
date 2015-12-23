<?php namespace Modules\Entry\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Entry\Repositories\EntryRepository;

class EntryController extends Controller
{
    /**
     * @var EntryRepository
     */
    private $entry;

    public function __construct(EntryRepository $entry)
    {
        $this->entry = $entry;
    }

    public function like(Request $request)
    {
        $entry = $this->entry->find($request->get('entryId'));
        $entry->incrementLikes();
    }
}
