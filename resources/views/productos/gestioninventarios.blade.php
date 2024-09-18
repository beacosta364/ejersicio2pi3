<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Esta es la vista index de productos</h1>
</body>
</html> -->
@extends('layouts.plantilla')

@section('contenido')


<h3>todo el contenido de gestion de inventarios</h3>


<!-- Controles electonica -->
<section class="Controles">
        <!-- control de acceso a bodega -->
         <div>
            <div class="control-acceso">
            <h2>Control de acceso a bodega</h2>
            <button id="ingresarBodegaBtn">Ingresar a bodega</button>
            <button id="salirBodegaBtn">Salir de bodega</button>
            <p id="statusAcceso">Estado de la puerta: Desconocido</p>
            </div>
            <!-- Control de estado de alarma -->
         
            <div class="control-alarma">
                <h2>Control de estado de alarma</h2>
                <button id="activarAlarmaBtn">Activar Alarma</button>
                <button id="desactivarAlarmaBtn">Desactivar Alarma</button>
                <p id="statusAlarma">Estado de alarma: Desconocido</p>
            </div>
            
</section>

    <section class="container-cards">
        <!-- Gestion del sistema -->
         <div class="card">
            <div class="cabecera">
                <img src="img/box1.png" alt="">
                <div class="cabecera-text">
                </div>
               
            </div>
            <h2>Gestion del sistema</h2>
         </div>
          <!-- Monitoreo y seguridad -->
         <div class="card">
            <div class="cabecera">
                <img src="img/security.png" alt="">
                <div class="cabecera-text">
                </div>
               
            </div>
            <h2>Monitoreo y seguridad</h2>
         </div>
           <!-- Configuración y soporte -->
           <div class="card">
            <div class="cabecera">
                <img src="img/Configutration1.png" alt="">
                <div class="cabecera-text">
                </div>
               
            </div>
            <h2>Configuración y soporte</h2>
        </div>   
        <!-- Reportes -->
        <div class="card">
            <div class="cabecera">
                <img src="img/Reports.png" alt="">
                <div class="cabecera-text">
                </div>
               
            </div>
            <h2>Reportes</h2>
         </div>
    </section >
<!-- graficas -->
    <section class="container-graficas">
        <div class="card">
            <h3>Ventas por mes</h3>
            <div class="contenedor-imagen">
                <img src="img/vntasmes.png" alt="">
            </div>
            <p>Periodo : 2024</p>
        </div>
        
            <div class="card">
                <h3>Compras por mes</h3>
                <div class="contenedor-imagen">
                    <img src="img/vntasmes.png" alt="">
                </div>
                <p>Periodo : 2024</p>
            </div>

    </section>
@endsection