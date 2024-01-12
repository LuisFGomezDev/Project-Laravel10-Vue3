<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\RegisteredFacturaController;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\Auth\Validator;

use App\Models\Factura;
use App\Models\Pedido;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use Inertia\Inertia;
use Inertia\Response;

class RegisteredFacturaController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //{"email":"test-user@r8write.tech","clave":"r8write$$","confirma_clave":"r8write$$","nombre":"LUIS FERNANDO","apellido":"GOMEZ","empresa":"ALGUNA","telefono":"3055177077"}
        //return request();

        //return response()->json(['status' => 'error', 'message' => '¡Algo salió mal!']);
        //return Inertia::render('Auth/Register');
        //return Inertia::render('Auth/VerifyEmail');
        


        //ZONA DE VALIDACIÓN DE CAMPOS
        /*
        $validated = $request->validate([
            'email' => 'required|string|lowercase|email|max:255|unique:'.Factura::class,
            //'password' => ['required', 'confirmed', Rules\Password::defaults()],
            //'confirm_password' => ['required', 'confirmed', Rules\Password::defaults()],
            'pname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            //'phone' => 'required|string|max:15',
            'phone' => 'required|max:15|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'security_question' => 'required|string|max:255'
        ]);
        */
        /*
        try
        {
            $request->validate([
         
                //'email' => 'required|unique:users',
                //'password' => 'required|min:8',
                //'pname' => 'required',
                //'lastname' => 'required'


                //'phone' => 'required|string|max:16',
                //'security_question' => 'required|string|max:255'
                    //'name' => 'required',
                    //'email' => 'nullable|unique:vendors',
                    //'phone' => 'required|unique:vendors'

            ]);

        }
        
        catch(\Exception $e)
        {
            return response()->json(['status'=>'error','message'=>'¡Hubo errores en la validación de campos!']);
        }
        */

        // -----FASE 1 DEL PROCESO:

        //PASO 1: CONCATENAR EL INDICATIVO CON EL TELEFONO - OK
        
        $indicative = "+1";
        $telephone = $request->input('telefono');
        
        $fullphone = $indicative. " " .$telephone;
        $pregseg = "Pablito";

        //return $pregseg;

        //return $telephone = $request->input('telefono');


        //PASO 2: GENERAR LOS DATOS FAKE-ALEATORIOS PARA GUARDAR EN LA TABLA PEDIDOS - OK

        // Los genero con Factories y seeders


        //PASO 3: GUARDAR EN LA TABLA FACTURA LOS DATOS
        /*
        $request->validate([
            'email' => 'required|string|lowercase|email|max:255|unique:'.Factura::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'confirm_password' => ['required', 'confirmed', Rules\Password::defaults()],
            'pname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            //'phone' => 'required|string|max:15',
            'phone' => 'required|max:15|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'security_question' => 'required|string|max:255'
        ]);
        */

        /*
        $factura = Factura::create([
            'email' => $request->email,
            'password' => Hash::make($request->clave),
            'confirm_password' => Hash::make($request->confirma_clave),
            'pname' => $request->nombre,
            'lastname' => $request->apellido,
            'company' => $request->empresa,
            'phone' => $fullphone,
            'security_question' => $pregseg,
        ]);
        */
        
            $factura = new Factura;

            $factura->email = $request->email;
            $factura->password = Hash::make($request->clave);
            $factura->confirm_password = Hash::make($request->confirma_clave);
            $factura->pname = $request->nombre;
            $factura->lastname = $request->apellido;
            $factura->company = $request->empresa;
            $factura->phone = $fullphone;
            $factura->security_question = $pregseg;
            
            $factura->save();

            //EN ESTA LINEA GENERO EL REPORTE PDF CON DOMPDF
            //return to_route('reportepdf');
            
            //IBAMOS ACA
            return redirect('reportepdf');

            //***************************************************************************
            //***************************************************************************
            //***************************************************************************
/*
            $Factura_User = Factura::find(auth()->id());
            $Pedido_User = Pedido::find(auth()->id());

            //return response()->json($Pedido_User);
            
            $vistaurl='pdf.reportePdf';

            $pdf = \App::make( 'dompdf.wrapper' );

            $view = \View::make($vistaurl, compact('Factura_User', 'Pedido_User'));

            $pdf->loadHTML($view);

            return $pdf->download( 'REPORTENUEVO.pdf' );                
*/

            //***************************************************************************
            //***************************************************************************
            //***************************************************************************


            //return response()->json(['status'=>'success','message'=>'Factura Agregada Ok!']);
        
         
            //return response()->json(['status'=>'error','message'=>'¡Algo salió mal!']);


        //$factura->save();
        //event(new Registered($factura));

        //{"email":"test-user@r8write.tech","clave":"r8write$$","confirma_clave":"r8write$$","nombre":"LUIS FERNANDO",
        //"apellido":"GOMEZ","empresa":"ALGUNA","telefono":"3055177077"}


        //return redirect(RouteServiceProvider::HOME);
        //return $factura;

        // -----FASE 2 DEL PROCESO:

        //PASO 6: CREAR EL REPORTE PDF Y DESCARGARLO
        //-6.1 Consultar los datos con OrderBy Raw a la tabla Pedidos que ya esta llena con FAKE
        //EXAMPLE:

        /*
        $pedido_especifico = DB::table('pedidos')
                            ->orderByRaw('id - ASC')
                            ->get();

        $pedido_random = Pedido::orderByRaw("RAND()")->limit(1)
                        ->pluck("")

        */

        //-6.2 Generar reporte PDF
        //$product_name = $pedido_random->product_name

        //event(new Registered($factura));
        //return redirect(RouteServiceProvider::HOME);
    }

}
