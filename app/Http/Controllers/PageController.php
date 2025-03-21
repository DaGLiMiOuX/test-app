<?php

namespace App\Http\Controllers;

use App\Models\PageArray\Page;
use App\Models\RelationPage\RelationPage;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Summary of pageArray
     *
     * @param \App\Models\PageArray\Page $pageArray
     * @return \Illuminate\Contracts\View\View
     */
    public function pageArray(Page $pageArray): View
    {
        return view('page', [ 'page' => $pageArray ]);
    }

    /**
     * Summary of relationPage
     *
     * @param \App\Models\RelationPage\RelationPage $relationPage
     * @return \Illuminate\Contracts\View\View
     */
    public function relationPage(RelationPage $relationPage): View
    {
        return view('page', [ 'page' => $relationPage ]);
    }
}
