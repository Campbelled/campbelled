<?php namespace Modules\Entry\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Entry\Entities\Entry;
use Modules\Entry\Repositories\EntryRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class EntryController extends AdminBaseController
{
    /**
     * @var EntryRepository
     */
    private $entry;

    public function __construct(EntryRepository $entry)
    {
        parent::__construct();

        $this->entry = $entry;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $entries = $this->entry->all();

        return view('entry::admin.entries.index', compact('entries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('entry::admin.entries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->entry->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('entry::entries.title.entries')]));

        return redirect()->route('admin.entry.entry.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Entry $entry
     * @return Response
     */
    public function edit(Entry $entry)
    {
        return view('entry::admin.entries.edit', compact('entry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Entry $entry
     * @param  Request $request
     * @return Response
     */
    public function update(Entry $entry, Request $request)
    {
        $this->entry->update($entry, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('entry::entries.title.entries')]));

        return redirect()->route('admin.entry.entry.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Entry $entry
     * @return Response
     */
    public function destroy(Entry $entry)
    {
        $this->entry->destroy($entry);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('entry::entries.title.entries')]));

        return redirect()->route('admin.entry.entry.index');
    }
}
