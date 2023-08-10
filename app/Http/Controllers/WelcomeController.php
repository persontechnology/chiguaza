<?php

namespace App\Http\Controllers;
use App\Models\Autoridad;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index() {
        // Artisan::call('cache:clear');
        // Artisan::call('config:clear');
        // Artisan::call('config:cache');
        // Artisan::call('storage:link');
        // Artisan::call('key:generate');
        // Artisan::call('migrate:fresh --seed');
        
        $slider=Slider::where('vista','SI')->latest()->take(5)->get();
        $data = array(
            'sliders'=>$slider,
            'autoridad'=>Autoridad::first(),
            
        );
        return view('welcome',$data);
    }

    function resenahistorica() {
        
        $aut=Autoridad::first();
        return view('municipalidad.resenahistorica',['autoridad'=>$aut]);
    }

    function misionvision() {
        
        $aut=Autoridad::first();
        return view('municipalidad.misionvision',['autoridad'=>$aut]);
    }

    function himno() {
        
        $aut=Autoridad::first();
        return view('municipalidad.himno',['autoridad'=>$aut]);
    }
    function autoridades() {
        
        $aut=Autoridad::first();
        return view('municipalidad.autoridades',['autoridad'=>$aut]);
    }

    function organigrama() {
        
        $aut=Autoridad::first();
        return view('municipalidad.organigrama',['organigrama'=>$aut]);
    }
    function turismo() {
        
        $aut=Autoridad::first();
        return view('municipalidad.turismo',['turismo'=>$aut]);
    }
}
