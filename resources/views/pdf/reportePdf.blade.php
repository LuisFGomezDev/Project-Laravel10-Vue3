<!doctype html>

<head>
    <!-- Required meta tags application/pdf ó text/html   -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>

    <div class="col-md-12">
        
        <div class="box">

            <div class="box-body">

                <!--REPORTE FACTURACION -->
            <div class="box-header with-border">
                <h2>REPORTE FACTURACION</h2>
            </div><!-- /.box-header -->


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
                            <td style="width: 10px" >{{ $Factura_User->email }}</td>
                            <td style="width: 10px" >{{ $Factura_User->pname }}</td>
                            <td style="width: 10px" >{{ $Factura_User->lastname }}</td>
                            <td style="width: 10px" >{{ $Factura_User->company }}</td>
                            <td style="width: 10px" >{{ $Factura_User->phone }}</td>
                            <td style="width: 10px" >{{ $Factura_User->security_question }}</td>
                        </tr>
                                        
                    </tbody>

                </table>

                <!--REPORTE PEDIDOS -->
                <div class="box-header with-border">
                    <h2>REPORTE PEDIDOS</h2>
                </div><!-- /.box-header -->
   
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
                            <td style="width: 10px" >{{ $Pedido_User->product_name }}</td>
                            <td style="width: 10px" >{{ $Pedido_User->quantity }}</td>
                            <td style="width: 10px" >{{ $Pedido_User->unit_price }}</td>
                        </tr>
                                        
                    </tbody>

                </table>
                
            </div><!-- /.box-body -->

        </div><!-- /.box -->
              
    </div>
	
</body>

</html>