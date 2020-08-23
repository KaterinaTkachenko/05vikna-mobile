<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function about()
    {
        return view('o-nas.about');
    }

    public function sertifikaty()
    {
        return view('o-nas.sertifikaty');
    }

    public function stati()
    {
        return view('o-nas.stati');
    }

    public function otzyvy()
    {
        return view('o-nas.otzyvy');
    }

    public function nashitseny()
    {
        return view('nashi-tseny.nashi-tseny');
    }

    public function kalkulyatoronlayn()
    {
        return view('nashi-tseny.kalkulyator-onlayn');
    }

    public function nashiraboty()
    {
        return view('nashi-raboty');
    }

    public function aktsii()
    {
        return view('aktsii-i-skidki');
    }

    public function kontakty()
    {
        return view('kontakty.kontakty');
    }
    
    public function zaporozhye()
    {
        return view('kontakty.zaporozhye');
    }   

    public function dnepr()
    {
        return view('kontakty.dnepr');
    }

    public function plastikovyyeokna()
    {
        return view('plastikovyye-okna.plastikovyye-okna');
    }

    public function rehaueuro60()
    {
        return view('plastikovyye-okna.rehau-euro-60');
    }

    public function rehaueuro70()
    {
        return view('plastikovyye-okna.rehau-euro-70');
    }

    public function brillant()
    {
        return view('plastikovyye-okna.rehau-brillant');
    }

    public function synego()
    {
        return view('plastikovyye-okna.rehau-synego');
    }

    public function geneo()
    {
        return view('plastikovyye-okna.rehau-geneo');
    }

    public function laminatsiyey()
    {
        return view('plastikovyye-okna.okna-s-laminatsiyey');
    }

    public function steklopakety()
    {
        return view('plastikovyye-okna.steklopakety');
    }

    public function setki()
    {
        return view('plastikovyye-okna.moskitnyye-setki');
    }

    public function podokonniki()
    {
        return view('plastikovyye-okna.podokonniki');
    }

    public function otlivy()
    {
        return view('plastikovyye-okna.otlivy');
    }

    public function furnitura()
    {
        return view('plastikovyye-okna.furnitura');
    }

    public function derevyannyyeokna()
    {
        return view('derevyannyye-okna');
    }

    public function balkonyilodzhii()
    {
        return view('balkony-i-lodzhii');
    }

    public function oknadlyadoma()
    {
        return view('okna-dlya-doma');
    }

    public function dveri()
    {
        return view('dveri.dveri');
    }

    public function vkhodnyye()
    {
        return view('dveri.vkhodnyye');
    }

    public function mezhkomnatnyye()
    {
        return view('dveri.mezhkomnatnyye');
    }

    public function balkonnyye()
    {
        return view('dveri.balkonnyye');
    }

    public function uslugi()
    {
        return view('uslugi-i-servis.uslugi-i-servis');
    }

    public function vyzov()
    {
        return view('uslugi-i-servis.vyzov-zamershchika');
    }

    public function ustanovka()
    {
        return view('uslugi-i-servis.ustanovka-okon');
    }

    public function dostavka()
    {
        return view('uslugi-i-servis.dostavka-i-oplata');
    }

    public function garantiya()
    {
        return view('uslugi-i-servis.garantiya-i-servis');
    }
}
