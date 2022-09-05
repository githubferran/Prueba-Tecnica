<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

    /**
     * Update date of user.
     *
     * @return void
     */
    public function update(Request $request)
    {
        $var = 0;
        //Validamos el campo iban con el metodo Validator
        $validator = Validator::make($request->all(), [
             'iban' => 'iban',
        ]);

        //Comprovamos la validacion
        if ($validator->fails()) {
            return redirect('home')
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            
        //Recogemos los datos enviados por el formulario
        $iban = $request->iban;
        $dni = $request->dni;
        $calle = $request->calle;
        $numeroDireccion = $request->numeroDireccion;
        $pisoDireccion = $request->pisoDireccion;
        $puertaDireccion = $request->puertaDireccion;
        $codigopostal = $request->codigopostal;

        $user = Auth::user();
        $id_user = $user->id;

        $user=User::where('id', '=', $id_user)->first();
        // Seteamos un nuevo iban
        $user->iban = $iban;
        // Seteamos un nuevo dni
        $user->dni = $dni;
        // Seteamos un nuevo calle
        $user->calle = $calle;
        // Seteamos un nuevo numero
        $user->numeroDireccion = $numeroDireccion;
        // Seteamos un nuevo piso
        $user->pisoDireccion = $pisoDireccion;
        // Seteamos un nuevo puerta
        $user->puertaDireccion = $puertaDireccion;
        // Seteamos un nuevo titulo
        $user->codigopostal = $codigopostal;
        // Guardamos en base de cp
        $user->save();

        return view('home');

    }

        

        
    }
}
