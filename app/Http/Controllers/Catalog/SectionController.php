<?php

namespace App\Http\Controllers\Catalog;

use App\Models\Catalog\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.catalog.sections.index', [
            'sections' => Section::orderBy('active', 'desc')->orderBy('sort')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.catalog.sections.create', [
            'section' => [],
            'sections' => Section::with('children')->where('parent_id', 0)->get(),
            'delimiter' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'active' => ['integer', 'max:1'],
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255', 'unique:sections'],
            'sort' => ['integer']
        ]);
        Section::create($request->all());
        return redirect()->route('main.catalog.sections.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalog\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalog\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        return view('main.catalog.sections.edit', [
            'section' => $section,
            'sections' => Section::with('children')->where('parent_id', '0')->get(),
            'delimiter' => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalog\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        $request->validate([
            'active' => ['integer', 'max:1'],
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255'],
            'sort' => ['integer']
        ]);
        $section->active = $request['active'];
        $section->name = $request['name'];
        $section->code = $request['code'];
        $section->sort = $request['sort'];
        $section->description = $request['description'];
        $section->parent_id = $request['parent_id'];
        $section->update();

        return redirect()->route('main.catalog.sections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Section $section
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Section $section)
    {
        $section->products()->detach();
        $section->delete();

        return redirect()->route('main.catalog.sections.index');
    }
}
