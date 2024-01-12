<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use App\Http\Controllers\RegisterReporteController;
use App\Http\Controllers\Controller;


use App\Models\User;
use App\Models\Factura;
use App\Models\Pedido;

use Illuminate\View\View;

//use Barryvdh\DomPDF\Facade as PDF;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Pdf;


class RegisterReporteController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    //JsonResponse
    public function generatePdf()
    {
        //{"email":"test-user@r8write.tech","clave":"r8write$$","confirma_clave":"r8write$$","nombre":"LUIS FERNANDO","apellido":"GOMEZ","empresa":"ALGUNA","telefono":"3055177077"}
        //return request();
        //return response()->json(['status'=>'success','message'=>'ACA GENERA EL REPORTE PDF!']);

        //funcion para cargar los datos de cada usuario en la ficha

            //$id_user = auth()->id();
            //return response()->json(auth()->user());
            //return response()->json(auth()->user()->email);

            $Factura_User = Factura::find(auth()->id());
            $Pedido_User = Pedido::find(auth()->id());

            //return response()->json($Pedido_User);
            $vistaurl='pdf.reportePdf';

            //$view =  \View::make($vistaurl, compact('Factura_User', 'Pedido_User'))->render();
            //$pdf = \App::make('dompdf.wrapper');
            //$pdf->loadHTML($view);
            //$pdf = Pdf::loadView($vistaurl, compact('Factura_User', 'Pedido_User'));
            
            //Para verlo por pantalla como PDF
            //return $pdf->stream('reporte.pdf');
            //$pdf = PDF::setOptions(['isRemoteEnabled'=>true])->loadView($vistaurl, compact('Factura_User', 'Pedido_User'));
         
            //Para descargarlo como PDF
            //return $pdf->download('reporte.pdf');

            //$pdf = Pdf::loadView($vistaurl, compact('Factura_User', 'Pedido_User'));

            //return $pdf->stream('reporte.pdf');
/*
            $dompdf = new Dompdf(); //crear el objeto de la clase Dompdf
            $dompdf->set_option('defaultFont', 'Courier');
            $view =  \View::make($vistaurl, compact('Factura_User', 'Pedido_User'))->render();
            
            $html = mb_convert_encoding($view, 'HTML-ENTITIES', 'UTF-8');

            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadView('view', $array);
            $pdf->render();
            return $pdf->stream();
*/
            //$pdf = PDF::loadView($vistaurl, compact('Factura_User', 'Pedido_User'));

            //return $pdf->download('reporteNEW.pdf');

            //ESTA CONFIGURACION NO FUNCIONO, SACA ERRORES DE CSS
            /*
            $view = \View::make($vistaurl, compact('Factura_User', 'Pedido_User'))->render();
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view);

            return $pdf->download('reporteNEW.pdf');
            */
            /*
            return new Response($pdf->stream('reportePdf.pdf'), 200, [
                'Content-Type' => 'application/pdf; charset=utf-8',
                'Content-Disposition' => 'inline; filename="reportePdf.pdf"',
            ]);
            */

            //EXPERIMENTO 2
            /*
            $pdf = \App::make( 'dompdf.wrapper' );

            $view = \View::make($vistaurl, compact('Factura_User', 'Pedido_User'));

            $pdf->loadHTML($view);

            return $pdf->download( 'quotePRUEBA222.pdf' );    
            */

/*
            //EXPERIMENTO 3
            $dompdf = new Pdf(); //crear el objeto de la clase Dompdf
            //$dompdf->set_option('defaultFont', 'Courier');
            $view =  \View::make($vistaurl, compact('Factura_User', 'Pedido_User'));
            
            $html = mb_convert_encoding($view, 'HTML-ENTITIES', 'UTF-8');

            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($html);
            $pdf->render();
            
            //return $pdf->stream();
            return $pdf->download('Reporte-Facturacion45.pdf');   
*/
            //CONFIG ALTERNA
/*
            $pdf = \App::make('dompdf.wrapper');
            $html ='<!DOCTYPE html> 
          
            <html> 
                    <head>
                    
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

                    </head>
                    
                <body>
                    <div class="">
                        <div>
                            <div>

                                <div>

                                     <div class="">Dashboard</div>

                                </div>

                                <div class="panel-body">

                                    <table class="table">
                                        <thead>
                                            <th>Product Name</th>
                                        </thead>
                                        
                                        <tbody>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </body>
            </html>';

            $pdf->loadHTML($html);
            return $pdf->stream( 'Reporte-FacturacionNew.pdf' );       
*/ 
       
            //CONFIG DATOS MAQUETEADOS

            $pdf = \App::make('dompdf.wrapper');
            $html ='<!DOCTYPE html> 
          
            <html> 
                    <head>
                    
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

                    </head>
                    
                    <body>

                    <div class="col-md-12">
                        
                        <div class="box">
                
                            <div class="box-body">
                
                                
                            <div class="box-header with-border">
                                <h2>REPORTE FACTURACION</h2>
                            </div>
                
                
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 40px">Email</th>
                                            <th style="width: 40px">Primer Nombre</th>
                                            <th style="width: 40px">Apellido</th>
                                            <th style="width: 40px">Empresa</th>
                                            <th style="width: 40px">Teléfono</th>
                                            <th style="width: 40px">Pregunta Seg</th>
                                        </tr>
                                    </thead>
                
                                    <tbody>
                
                                        <tr>
                                            <td style="width: 10px" >r8write@tech.com</td>
                                            <td style="width: 10px" >John</td>
                                            <td style="width: 10px" >Doe</td>
                                            <td style="width: 10px" >R8write</td>
                                            <td style="width: 10px" >+1234567890</td>
                                            <td style="width: 10px" >Pablito</td>
                                        </tr>
                                                        
                                    </tbody>
                
                                </table>
                
                                <!--REPORTE PEDIDOS -->
                                <div class="box-header with-border">
                                    <h2>REPORTE PEDIDOS</h2>
                                </div>
                   
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 40px">Producto</th>
                                            <th style="width: 40px">Cantidad</th>
                                            <th style="width: 40px">Precio Unitario</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                
                                        <tr>
                                            <td style="width: 10px" >Tenis Adidas</td>
                                            <td style="width: 10px" >120</td>
                                            <td style="width: 10px" >130000</td>
                                        </tr>
                                                        
                                    </tbody>
                
                                </table>
                                
                            </div>
                
                        </div>
                              
                    </div>
                    
                </body>
            </html>';

            $pdf->loadHTML($html);
            return $pdf->stream( 'Reporte-FacturacionBOT.pdf' );       



/*
        $usuario=User::find($id);


        $contador=count($usuario);
        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
*/

        /*
        $data = [];
        $pdf = PDF::loadView('pdf.example', $data);
        return $pdf->download('reporte.pdf');
        */
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
    }//Fin procedimiento 
}