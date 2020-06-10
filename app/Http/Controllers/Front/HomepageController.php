<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomepageController extends Controller
{

    /**
     * @return View
     */
    public function index(): View
    {
        return view('front.home.index', [
            'heroBanner' => $this->getHeroBanner()
        ]);
    }

    /**
     * @return Pages|null
     */
    private function getHeroBanner(): ?Pages
    {
        return Pages::getPage(Pages::PAGE_BANIERE_HOME);
    }
}
