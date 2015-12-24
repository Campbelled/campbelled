<?php namespace Modules\Entry\Http\Controllers\Frontend;

use Illuminate\Routing\Controller;
use Modules\Entry\Entities\Entry;

class EntryController extends Controller
{
    public function show(Entry $entry)
    {
        return view('single-entry', compact('entry'));
    }
}
