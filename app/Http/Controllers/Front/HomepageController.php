<?php

namespace App\Http\Controllers\Front;

use App\Models\Pages;
use Illuminate\View\View;
use App\Models\Informations;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * @todo Attention je suis sur une grosse refacto qui va prendre plusieurs jours,
 * Le but et de passer tout en Ajax method et de plus utilisé l'API, mais je supprime pas l'API il pourrai servir un jour
 * donc j'ai déjà commencer avec le heroBanner faut juste bien refacto 1 class = method de la meme famille
 * ensuite refacto le js aussi
 * @todo fin
 *
 * HomepageController
 */
class HomepageController extends Controller
{

    /**
     * @todo Refacto je crois qu'on a juste besoin de passer l'id au html pour vue
     * @todo donc on peux pluck('id') pour amélioerer la requete
     *
     * @return View
     */
    public function index(): View
    {
        // Get Pages





        $detailContact = Pages::getPage(Pages::PAGE_CONTACTS);
        $detaildoctors = Pages::getPage(Pages::PAGE_CE_QUE_LES_DOCTEUR_NE_FONT_PAS);
        $detailRdv = Pages::getPage(Pages::PAGE_UN_RDV_QUEL_DELAI);
        $detailRefound = Pages::getPage(Pages::PAGE_SUIS_JE_REMBOURSER);

        return view('front.home.index', compact(
            'detailContact',
            'detaildoctors',
            'detailRdv',
            'detailRefound'
        ));
    }




}
