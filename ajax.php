<?php
    include "back/objetos.php";
    $formulario = $_POST['formulario'];

    //busca estados del país seleccionado
    if($formulario == "buscaEstado"){
        $id = $_POST['id'];
        $es = $_POST['es'];
        $objBen = new DatosPersonales();
        $objBen->buscaEstado($id,$es);
    }
    //busca ciudades de el estado seleccionado
    if($formulario == "buscaCiudad"){
        $id = $_POST['id'];
        $c = $_POST['c'];
        $objBen = new DatosPersonales();
        $objBen->buscaCiudad($id,$c); 
    }
    //busca parentesco del tutor con el beneficiario
    /*if($formulario == "buscaParentesco"){
        $objBen = new Tutor();
        $objBen->buscaParentesco();
    }*/
    //envia el formulario de contacto 
    if($formulario == "contactForm"){
        $to = "info@fundacionmarkoptic.org.mx";
        //$to = "jparra@markoptic.mx";
        $subject = "Markoptic página Web Correo de información";
        $message = "<strong>correo: </strong>".$_POST['emailContacto']."<br><strong>Nombre: </strong>".$_POST['nombreContacto']."<br><strong>Teléfono: </strong>".$_POST['telefonoContacto']."<br><strong>Comentario: </strong>".$_POST['comentarioContacto'];
        $headers = "From: Página Web Markoptic";
        $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
        $headers .= "CC: susan@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $result = mail($to, utf8_decode($subject), utf8_decode($message), utf8_decode($headers));
        if(!$result) {   
             echo "Disculpa tu mensaje no pudo ser enviado";   
        } else {
            echo "<p class='text-dark'>Mensaje Enviado<p>";
        }    
    }
    //busca beneficiarios 
    if($formulario == "buscaBeneficiario"){
        $nombre = trim($_POST['nombre']," ");
        $estatus = $_POST['estatus'];
        if($nombre == ""){
            echo "";
        }else{
            $strCount = strlen($nombre);
            if( $strCount < 3 ){
                echo "minimo tres caracteres";
            }else{
                $objBen = new beneficiario;
                $objBen->buscaBeneficiario($nombre,$estatus);
            }
        }
    }
    //genera edad del beneficiario
    if($formulario == "generaEdad"){
        $fecha = $_POST['fecha'];
        $objBen = new Beneficiario;
        $edad = $objBen->generaEdadBeneficiario($fecha);
        echo "<script>alert('".$edad."')</script>"; 
    }
?>