<?php
    //header
    include 'mod/header.php';
    $menuBack = "Gracias";
    if(isset($_GET['solicitud'])){     
    }else{
        header('Location: ../');
    }

    include 'mod/menu.php';
?>

<!-- Titulo principal -->
<div class="t-shadow-2-black w100 h-25 text-white bg-cover-center" style="background-image:url('/imagenes/fundación/valores.jpg');">
    <div class="w-100 h-100 c-align-middle opacity-green text-center">
        <h1>Gracias</h1>
    </div>
</div>
<?php
    if($_GET['solicitud'] == 'exito'){
        echo'
        <div class="w-100 text-center p-4">
            <img class="img-fluid" src="/imagenes/respuesta heart.svg" alt="solicitud exitosa">
        </div>
        ';
    }else{
        echo'
            <h2 class="text-center">Disculpa, algo salio mal, inténtalo de nuevo más tarde</h2>
        ';
    }
?>
<!--footer-->
<?php
    include 'mod/footer.php';
?>
<!--/footer-->
    <script src="/js/js-fundacion-proyectos.js"></script>
    <script src="/js/no-back.js"></script>
    </body>
</html>