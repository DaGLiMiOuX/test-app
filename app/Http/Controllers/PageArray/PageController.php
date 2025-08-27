<?php

namespace App\Http\Controllers\PageArray;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageArray\PageUpdateRequest;
use App\Models\PageArray\ElementSecond;
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Page::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page): Page
    {
        return $page;
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
    public function destroy(Page $page)
    {
        if ($page->firstElement()->exists()) {
            $page->firstElement->delete();
        }
        if ($page->secondElements()->exists()) {
            $page->secondElements->each(fn (ElementSecond $secondElement) => $secondElement->delete());
        }
        if ($page->thirdElement()->exists()) {
            $page->thirdElement->delete();
        }

        return $page->delete();
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
