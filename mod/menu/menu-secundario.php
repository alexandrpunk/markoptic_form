<?php
    // $redireccion = 'onclick="window.history.back();"';
    // if($url == "/gracias"){
    //     $redireccion = 'href="/"';
    // }elseif($url == "/beneficiarios" && $url2 == "?"){
    //     $redireccion = 'href="/"';
    // }elseif($url == "/apadrina" && $url2 == "?"){
    //     $redireccion = 'href="/"';
    // }elseif($url == "/apadrina" && $url2 != "?"){
    //     $redireccion = 'href="/apadrina"';
    // }elseif($url == "/formulario"){
    //     $redireccion = "href=/solicitud";
    // }elseif($url == "/solicitud"){
    //     $redireccion = "href=/";
    // }
    // echo "<script>console.log('".$redireccion."');</script>";
    // echo "<script>console.log('".$url."');</script>";
    // echo "<script>console.log('".$url2."');</script>";
?>
<nav id="menu" class="bg-light <?php echo ($url != "/")? " fixed-top" : ""; ?>">
    <div class="row mx-0">
    <!--regresar-->
        <!-- <div class="col-auto p-0 h-100 bordes">
            <a class="c-align-middle w-100 h-100 px-4 px-md-2 pointer" <?php echo $redireccion; ?> >
                <svg class="mr-md-2" height="33%" viewBox="0 0 448 512">
                    <path class="svg-mark" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
                </svg>
                <span class="d-none d-md-inline-block">regresar</span>
            </a>
        </div> -->
    <!--inicio-->
        <div class="col-auto  p-0 bordes">
            <a class="c-align-middle" href="../">
                <!-- <i class="fa fa-home fa-2x fa-fw" aria-hidden="true"></i> -->
                <!-- <svg class="px-2" height="33%" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                    <path class="svg-mark" d="M488 312.7V456c0 13.3-10.7 24-24 24H348c-6.6 0-12-5.4-12-12V356c0-6.6-5.4-12-12-12h-72c-6.6 0-12 5.4-12 12v112c0 6.6-5.4 12-12 12H112c-13.3 0-24-10.7-24-24V312.7c0-3.6 1.6-7 4.4-9.3l188-154.8c4.4-3.6 10.8-3.6 15.3 0l188 154.8c2.7 2.3 4.3 5.7 4.3 9.3zm83.6-60.9L488 182.9V44.4c0-6.6-5.4-12-12-12h-56c-6.6 0-12 5.4-12 12V117l-89.5-73.7c-17.7-14.6-43.3-14.6-61 0L4.4 251.8c-5.1 4.2-5.8 11.8-1.6 16.9l25.5 31c4.2 5.1 11.8 5.8 16.9 1.6l235.2-193.7c4.4-3.6 10.8-3.6 15.3 0l235.2 193.7c5.1 4.2 12.7 3.5 16.9-1.6l25.5-31c4.2-5.2 3.4-12.7-1.7-16.9z"></path>
                </svg> -->
                <img src="/img/logo.svg" alt="fundacion markoptic" class='logo mx-2'>
            </a>
        </div>
    <!-- nombre página -->
        <div class="col p-0 c-align-middle">
            <h5 class="mb-0 ml-2 ml-md-0 text-markoptic">
            <?php
                if(isset($title)){
                    echo $title;
                }else {
                    echo'
                    <cms:if k_template_is_clonable>
                        <cms:if k_is_page>
                            <cms:show k_page_title />
                        <cms:else />
                            <cms:if k_is_folder>
                            <cms:show k_folder_title />
                            <cms:else />
                                <cms:show k_template_title />
                            </cms:if>
                        </cms:if>
                    <cms:else />
                        <cms:show k_template_title />
                    </cms:if>
                    ';
                }
            ?></h5>
        </div>
    <!-- donar -->
        <div class="col-auto d-none d-md-block bg-verde-menu">
            <a href="/donar" class="w-100 h-100 px-3 px-md-4 c-align-middle">
                <strong class="text-white">Donar</strong>
            </a>
        </div>
    </div>
    </nav>
<div class="push"></div>