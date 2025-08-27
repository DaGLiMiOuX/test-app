<?php

namespace App\Http\Controllers\PageArray;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageArray\PageUpdateRequest;
use App\Models\PageArray\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return Page::all();
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page): Page
    {
        return $page;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PageUpdateRequest $request, Page $page): bool
    {
        return $page->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Returns an array of sections ordered by index
     *
     * @param \App\Models\PageArray\Page $page
     * @return array
     */
    public function sections(Page $page): array
    {
        return $page->orderedSections;
    }
}
