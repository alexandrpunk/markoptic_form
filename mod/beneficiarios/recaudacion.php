<?php 
    $recabado = $objBen->recabado($id);   
    $precioProtesis = $result['precio']; 
    //if($recabado == 0){ $por = 0; }else{ $por = (($recabado / $precioProtesis)*100); }
    $por = ($recabado == 0)? 0 : (($recabado / $precioProtesis)*100);
    //if($por > 100){ $por = 100; }
    $por = ($por > 100)? 100 : $por;
    $porciento = number_format($por,2);
    //porcentaje del circulo
    // $dashoffset =(628/100)*(100 - $porciento);
?>
    <!-- información del porcentaje recaudado -->
        <div class="row w-100">
            <div class="col-12 col-lg-auto">
                <p class="mb-0">
                    <strong>porcentaje de recaudación</strong>
                </p>
            </div>
            <div class="col-12 col-lg">
                <p class="mb-0 text-lg-right">
                    <span id="cRecabado">
                        <strong>Recabado: </strong>
                        $<span id="recabado"></span> MXN
                    </span>
                    <br class="d-block d-lg-none">
                    <strong> Total: </strong>
                    $<span id="precio"></span> MXN
                </p>
            </div>
        </div>
        <div class="row mx-0 w-100 align-self-end">
            <div id="porciento" class="col-auto px-0 pr-2 text-center d-flex align-items-center">0.00%</div>
            <div class=" col px-0 progress rounded-0 rounded-left" style="height:38px">
                <div id="progress" class="progress-bar progress-bar-striped" role="progressbar" style="width:0%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
            </div>    
            <div class="">
                <button id="apadrinar" class="btn bg-verde-menu text-white" data-toggle="modal" data-target=".banwire">Apadrinar</button>                            
            </div>
        </div>
    <script>
        porcentaje();

        let progress = document.getElementById('progress');
        let porciento = document.getElementById('porciento');
        let cRecabado = document.getElementById('cRecabado');// coontenedor
        let recabado = document.getElementById('recabado');// total recabado
        let precio = document.getElementById('precio');
        let btnApadrinar = document.getElementById('apadrinar');

        function porcentaje(){
            http_request = (window.XMLHttpRequest)? new XMLHttpRequest(): new ActiveXObject('Microsoft.XMLHTTP'); 
            http_request.open('POST','/back/ajax.php', true);
            let data = new FormData();
            data.append('formulario', 'recaudacion');
            data.append('id', get('b'));
            http_request.overrideMimeType('text/plain');
            http_request.onreadystatechange = function(){
                if (http_request.readyState == 4) {//el servidor respondio
                    let bio = document.getElementById('bio');
                    if (http_request.status == 200) {//el cliente termino
                        
                        //Recolección de datos ajax
                        let result = JSON.parse(http_request.responseText);
                        
                        // colocar el precio del dispositivo en la vista
                        precio.innerHTML = result.precio;

                        //verificar si el solicitante tiene el 100% recabado
                        if(result.porciento >= 100){
                            //ocultar información recabado y botón apadrinar
                            apadrinar.setAttribute('disabled',true);
                            apadrinar.style.display ="none";
                            cRecabado.style.display ="none";
                            progress.style.width = 100 + "%";
                            porciento.innerHTML = 100.00 + "%";
                        }else{
                            //mostrar información recabada por el solicitante
                            recabado.innerHTML = result.recabado;
                            progress.style.width = result.por + "%";
                            porciento.innerHTML = result.porciento + "%";

                        }
                    } else {//ocurrio un error en el cliente
                        alert('Hubo problemas con la petición.');
                    }
                }
            }
            http_request.send(data);
        }
            //funcion para obtener valores get por url
            function get(name) {
                name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
                return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
            }
        // });                
    </script>