<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\View\View;

class PagesController extends Controller
{

    /**
     * @return View
     */
    public function appointment(): View
    {
        // Get Pages
        $aboutHeroBanner = Pages::getPage(Pages::PAGE_BANIERE_QUI_SOMME_NOUS);
        $appointment = Pages::getPage(Pages::PAGE_COMMENT_PRENDRE_RDV);
        $detaildoctors = Pages::getPage(Pages::PAGE_CE_QUE_LES_DOCTEUR_NE_FONT_PAS);
        $detailRdv = Pages::getPage(Pages::PAGE_UN_RDV_QUEL_DELAI);

        return view('front.appointement.index', compact(
            'aboutHeroBanner',
            'appointment',
            'detaildoctors',
            'detailRdv'
        ));
    }

    /**
     * @return View
     */
    public function price(): View
    {
        // Get Pages
        $priceHeroBanner = Pages::getPage(Pages::PAGE_BANIERE_TARIFS);
        $tarif = Pages::getPage(Pages::PAGE_TARIFS);
        $detailRefound = Pages::getPage(Pages::PAGE_SUIS_JE_REMBOURSER);

        return view('front.prices.index', compact(
            'priceHeroBanner',
            'tarif',
            'detailRefound'
        ));
    }

    /**
     * @return View
     */
    public function contact(): View
    {
        // Get Pages
        $contactHeroBanner = Pages::getPage(Pages::PAGE_BANIERE_CONTACT);
        $detailContact = Pages::getPage(Pages::PAGE_CONTACTS);

        return view('front.contact.index', compact(
            'contactHeroBanner',
            'detailContact'
        ));
    }
}