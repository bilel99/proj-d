<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\View\View;

/**
 * HomepageController
 */
class HomepageController extends Controller
{

    /**
     * @return View
     */
    public function index(): View
    {
        // Get Pages
        $homeHeroBanner = Pages::getPage(Pages::PAGE_BANIERE_HOME);
        $contactHeroBanner = Pages::getPage(Pages::PAGE_BANIERE_CONTACT);
        $aboutHeroBanner = Pages::getPage(Pages::PAGE_BANIERE_QUI_SOMME_NOUS);
        $priceHeroBanner = Pages::getPage(Pages::PAGE_BANIERE_TARIFS);
        $informations = Pages::getPage(Pages::PAGE_INFORMATIONS);
        $medicalHouse = Pages::getPage(Pages::PAGE_MAISON_MEDICAL_GARDE);
        $tarif = Pages::getPage(Pages::PAGE_TARIFS);
        $appointment = Pages::getPage(Pages::PAGE_COMMENT_PRENDRE_RDV);
        $services = Pages::getPage(Pages::PAGE_NOS_SERVICES);
        $about = Pages::getPage(Pages::PAGE_QUI_SOMME_NOUS);
        $detailContact = Pages::getPage(Pages::PAGE_CONTACTS);
        $detaildoctors = Pages::getPage(Pages::PAGE_CE_QUE_LES_DOCTEUR_NE_FONT_PAS);
        $detailRdv = Pages::getPage(Pages::PAGE_UN_RDV_QUEL_DELAI);
        $detailRefound = Pages::getPage(Pages::PAGE_SUIS_JE_REMBOURSER);

        return view('front.home.index', compact(
            'homeHeroBanner',
            'contactHeroBanner',
            'aboutHeroBanner',
            'priceHeroBanner',
            'informations',
            'medicalHouse',
            'tarif',
            'appointment',
            'services',
            'about',
            'detailContact',
            'detaildoctors',
            'detailRdv',
            'detailRefound'
        ));
    }
}
