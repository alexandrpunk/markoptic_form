<?php
    //header
    $title='Donar';
    $root = $_SERVER['DOCUMENT_ROOT'];
    include 'mod/header.php';
    include 'inc/objetos/solicitud.php'; 
    //número de solicitudes
    $estatus = 1;
    $objSolicitud = new Solicitud;
    $valor = $objSolicitud->muestraSolicitudes();
?>

</head>
<body>
<?php include 'mod/menu.php';?>
<!-- Titulo principal -->
    <div class="t-shadow-2-black text-white bg-cover-center text-center bg-cover-cabecera">
            <h1 class="p-5 mb-0 opacity-green">Donar</h1>
    </div>

<!-- first-block -->
    <div class="container-fluid text-center py-3">
        <h3 class="text-markoptic text-center">
            Agradecemos tu participación como donador.<br>Selecciona cualquiera de nuestras opciones y se parte de esta gran causa.
        </h3>
        <hr class="w-75">
    <!-- contador -->
            <p class=" contador font-weight-bold text-center">
                Tenemos <span class='text-markoptic' id="contador" valor="<?php echo $valor;?>"></span> Solicitudes por atender
            </p>

    <!-- botones -->
        <div class="row mx-0 text-white">
            <!-- motor de pagos Banwire -->
            <div class="col-12 col-md-6 col-lg-3 p-3">
                <div class="mx-auto mx-md-0 ml-md-auto mx-xl-auto pointer c-align-middle flex-column" data-toggle="modal" data-target=".banwire" style="background-color:#337ab7;height:300px;max-width:300px">
                    <img src="/img/banwire.png" class="" style="height:150px;display:block" alt="">
                    <h3 class='mb-0 mx-3'>Donativo con tarjeta</h3>
                </div>
            </div>
            <!-- transferencia electronica -->
            <div class="col-12 col-md-6 col-lg-3 p-3">
                <div class="mx-auto mx-md-0 mr-md-auto mx-xl-auto pointer c-align-middle flex-column" data-toggle="modal" data-target=".transferencia" style="background-color:#ff8d2c;height:300px;max-width:300px">
                    <img src="/img/transferencia.png" class="" style="height:150px;display:block" alt="">
                    <h3 class='mb-0 mx-3'>Transferencia Electrónica</h3>
                </div>
            </div>
            <!-- paypal -->
            <div class="col-12 col-md-6 col-lg-3 p-3">
                <div class="mx-auto mx-md-0 ml-md-auto mx-xl-auto pointer c-align-middle flex-column" data-toggle="modal" data-target=".paypal" style="background-color:#63c62f;height:300px;max-width:300px">
                    <img src="/img/paypal.png" class="" style="height:150px;display:block" alt="logo paypal">
                    <h3 class='mb-0 mx-3'>paypal</h3>
                </div>
            </div>
            <!-- deposito en efectivo -->
            <div class="col-12 col-md-6 col-lg-3 p-3">
                <div class="mx-auto mx-md-0 mr-md-auto mx-xl-auto pointer c-align-middle flex-column" data-toggle="modal" data-target=".deposito-efectivo" style="background-color:#25AAE3;height:300px;max-width:300px">
                    <img src="/img/deposito.png" class="" style="height:150px;display:block" alt="">
                    <h3 class='mb-0 mx-3'>Deposito en efectivos</h3>
                </div>
            </div>
        </div>
    </div>    
    <!--/contenido-->
    <?php 
        //modales de donación
        include "mod/donar/modalPaypal.php";
        include "mod/donar/modalDepositoEfectivo.php";
        include "mod/donar/modalBanwire.php";
        include "mod/donar/modalTransferenciaElectronica.php";
        include "mod/donar/modalExcedente.php";
        include "mod/donar/modalFinal.php";
    ?>
    <?php
        include 'mod/footer.php';
    ?>
        <script type="text/javascript" src="https://sw.banwire.com/checkout.js"></script>
        <script src="/js/motorPago.js"></script>
        <script src="/js/contador.js"></script>        
    </body>
</html>