<?php

namespace App\Http\Controllers;

use App\Mail\EnviarListadoQuejasSugerencias;
use App\Models\Archivo;
use App\Models\Carpeta;
use App\Models\QuejaSugerencia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class EstaticasController extends Controller
{
    public function tramites(){
        $data = array(
            'carpeta'=>Carpeta::where('nombre','TRAMITES')->first(),
            'titulo'=>'Tramites'
        );
        return view('estaticas.tramites',$data);
    }

    public function descargarArchivo($id) {
        $arc=Archivo::find($id);
        return Storage::download($arc->url, $arc->nombre.'.pdf');
    }

    public function carpeta($id) {
        $tra=Carpeta::find($id);
        
        $data = array(
            'carpeta'=>$tra,
            'titulo'=>$tra->nombre
        );
        return view('estaticas.tramites',$data);
    }

    public function quejasSugerencias(){
        return view('estaticas.quejasSugerencias');
    }

    public function quejasSugerenciasIngresar(Request $request) {
        return view('estaticas.quejasSugerenciasIngresar');
    }

    public function quejasSugerenciasConsultar(Request $request) {
        if($request->email && $request->cedula){
            $qs=QuejaSugerencia::where(['email'=>$request->email,'cedula'=>$request->cedula])->get();
            if($qs->count()>0){
                $user=new User();
                $user->email=$request->email;
                Mail::to($user)->send(new EnviarListadoQuejasSugerencias($qs));

                Session::flash('success','Por razones de seguridad, se ha enviado un listado de las quejas y sugerencias ingresadas a su dirección de correo electrónico.');
                return redirect()->route('quejasSugerenciasConsultar');
            }else{
                Session::flash('info','Usted no tiene ingresado ninguna Queja o sugerencia.!');
            }
            
        }
        return view('estaticas.quejasSugerenciasConsultar');
    }
    public function enviarQuejaSugerencia(Request $request) {
        
        $request->validate([
            'email'=>'required|email|string|max:255',
            'cedula'=>'required|string|max:255',
            'apellidosnombres'=>'required|string|max:255',
            'telefonocelular'=>'required|digits:10',
            'quejasugerencia'=>'required',
            'dependencia'=>'required|string|max:255',
            'descripcion'=>'required',
            'termino'=>'required',
        ]);

        QuejaSugerencia::create($request->all());
        Session::flash('success','Gracias por presentar su '.$request->quejasugerencia.'. Queremos informarle que hemos recibido su retroalimentación y estamos trabajando en ello. Su caso ha sido registrado y será tratado con seriedad. Le mantendremos al tanto de cualquier avance.');
        return redirect()->route('quejasSugerenciasIngresar');
    }

    public function noticias() {
        return view('estaticas.noticias');
    }
}
