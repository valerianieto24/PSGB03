<?php
session_start();
$varsesion = $_SESSION['usuario'];
if ($varsesion == null || $varsesion=''){
    echo "Usted no tiene autorizacion";
    die();
}

?>

<!DOCTYPE html>

<html dir="ltr" lang="es" class="home_page home_page_design s_layout2 isFreePackage  in-management js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths parallax-active page-loaded"><head>  

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="dns-prefetch preconnect" href="https://cdn-cms-s.f-static.net/" crossorigin="anonymous"> 
    <link rel="dns-prefetch preconnect" href="https://cdn-cms.f-static.net/" crossorigin="anonymous"> 
    <link rel="dns-prefetch preconnect" href="https://fonts.googleapis.com/" crossorigin="anonymous"> 
    <link rel="dns-prefetch preconnect" href="https://fonts.gstatic.com/" crossorigin="anonymous"> 
    <link rel="dns-prefetch preconnect" href="https://cdn-cms-k.f-static.net/" crossorigin="anonymous"> 
    <link rel="dns-prefetch preconnect" href="https://cdn-cms-s-k.f-static.net/" crossorigin="anonymous"> 
   
    <link rel="shortcut icon" href="https://cdn-cms-s.f-static.net/manager/site123_website/files/logos/brand_files/favicon-blue.png?v=n6573" type="image/x-icon"> 
    <link rel="icon" href="https://cdn-cms-s.f-static.net/manager/site123_website/files/logos/brand_files/favicon-blue.png?v=n6573" type="image/x-icon"> 
    
   <meta name="theme-color" content="#1abc9c"> 
    
    <title class="s123-js-pjax">Smart List - Bienvenido a Smart List</title> 
    <meta name="description" content="Smart List - Bienvenido a Smart List" class="s123-js-pjax"> 
    <meta name="keywords" content="" class="s123-js-pjax"> 
    <link rel="canonical" href="https://app.site123.com/" class="s123-js-pjax"> 
   
    <!-- Facebook Meta Info --> <meta property="og:url" content="https://app.site123.com/" class="s123-js-pjax"> 
    <meta property="og:image" content="https://cdn-cms.f-static.net/uploads/3813408/800_5ef3ce5bcf7f7.jpg" class="s123-js-pjax"> 
    <meta property="og:description" content="Smart List - Bienvenido a Smart List" class="s123-js-pjax"> 
    <meta property="og:title" content="Smart List - Bienvenido a Smart List" class="s123-js-pjax"> 
    <meta property="og:site_name" content="Smart List" class="s123-js-pjax"> 
    <meta property="og:see_also" content="https://app.site123.com" class="s123-js-pjax">
   
    <!-- Google+ Meta Info --> <meta itemprop="name" content="Smart List - Bienvenido a Smart List" class="s123-js-pjax"> 
    <meta itemprop="description" content="Smart List - Bienvenido a Smart List" class="s123-js-pjax"> 
    <meta itemprop="image" content="https://cdn-cms.f-static.net/uploads/3813408/800_5ef3ce5bcf7f7.jpg" class="s123-js-pjax"> 
    
    <!-- Twitter Meta Info --> <meta name="twitter:card" content="summary" class="s123-js-pjax"> 
    <meta name="twitter:url" content="https://app.site123.com/" class="s123-js-pjax"> 
    <meta name="twitter:title" content="Smart List - Bienvenido a Smart List" class="s123-js-pjax"> 
    <meta name="twitter:description" content="Smart List - Bienvenido a Smart List" class="s123-js-pjax"> 
    <meta name="twitter:image" content="https://cdn-cms.f-static.net/uploads/3813408/800_5ef3ce5bcf7f7.jpg" class="s123-js-pjax">    
    
    <!-- Website CSS variables --> <style>    :root {
        --global_main_color: #1abc9c;
        --home_text_color: #ffffff;
        --home_third_background_color: #000000;
        --home_custom_image_size: px;
        --home_text_size_px: 69px;
        --home_text_size_2_px: 54px;
        --slogan_text_size_px: 37px;
        --home_text_size: 69;
        --home_text_size_2: 54;
        --slogan_text_size: 37;
        --home_text_size_px_media: 69px;
        --home_text_size_2_px_media: 54px;
        --slogan_text_size_px_media: 37px;
        --layout_text_align: left;
        --layout_text_align_rtl: right;
        --layout_text_box_width: 100%;
        --layout_left_side_width: 50%;
        --layout_left_side_width_vh: 50vh;
        --homepage_layout_height: 75%;
        --homepage_layout_height_vh: 75vh;
        --homepage_layout_height_menu_space: 0px;
        --mainNavMobileHeight: 0px;
        --homepage_layout_height_opacity_space_top: 0px;
        --homepage_layout_height_opacity_space_bottom: 0px;
        --mobileMenuFontSize: 20px;
        --mobileMenuPagesSpace: 5px;
        --homepageShapeDividerList_Size: 17%;
        --homepage_goal_space: 15px;
        --homepage_second_goal_space: 0px;
        --layout_bottom_spacing: 0px;
        --window-height: 100vh;
        --window-width: 100vw;
    } 
    </style>
    <link rel="stylesheet" href="./Smart List - Bienvenido a Smart List_files/minimize.css" type="text/css" crossorigin="anonymous">
    <link rel="stylesheet" href="./Smart List - Bienvenido a Smart List_files/websiteCSS.css" class="reloadable-css" type="text/css"> 
     <style type="text/css" id="-style">
      .treeview 
      .list-group-item{cursor:pointer}
      .treeview span
      .indent{margin-left:10px; margin-right:10px}
      .treeview span.icon{width:12px;margin-right:5px}
      .treeview .node-disabled{color:silver; cursor:not-allowed}
      .node-{color:#428bca;background-color:#428bca00;border:none;}
      .node-:not(.node-disabled)
      :hover{background-color:#F5F5F5;} 
      </style></head><body id="page-top" data-aos-easing="ease" data-aos-duration="200" data-aos-delay="0" style="background-color: rgba(0, 0, 0, 0);">
        <div class="parallax-mirror" id="parallax_home_opacity" style="visibility: visible; z-index: -100; position: fixed; top: 161px; left: 0px; overflow: hidden; background-color: rgb(0, 0, 0); transform: translate3d(0px, 0px, 0px); height: 371px; width: 1583px;">
            <img class="parallax-slider" src="./Smart List - Bienvenido a Smart List_files/2000_5ef3ce5bcf7f7.jpg" style="opacity: 0.5; transform: translate3d(0px, 0px, 0px); position: absolute; top: -693.8px; left: 0px; height: 1629px; width: 1583px; max-width: none;">
        </div>
        <div class="body"> <div id="websiteHeader"> 
        <nav id="mainNav" class="hidden-xs navbar-default navbar-fixed-top columnHeader opacity-no">

        <div class="site_container">


        <div class="navbar-header"> 

        <a class="navbar-brand page-scroll logo_name  weight700 " href="https://app.site123.com/?w=3813408#page-top">

        <span class="website-name">Hola <?php echo $_SESSION['usuario']; ?> </span> 
    </a> </div>
    



    <div class="navbar-header">
 <a href="cerrarsesion.php" style="te">cerrar sesion</a>


</div>




        <div id="top-menu" class="affix-top"> 
        <ul class="navPages nav navbar-nav" style="opacity: 1;">
        <li class="moduleMenu active">
        <a class="page-scroll homepageMenu" href="https://app.site123.com/?w=3813408#page-top">Página de inicio</a>
        </li>
        <li class="moduleMenu" data-menu-module-id="5b1cf2c16ca47">
        <a class="page-scroll" href="https://app.site123.com/?w=3813408#section-5b1cf2c16ca47">
        <span class="txt-container">¿Quiénes somos? </span>
        </a></li>
              <li class="moduleMenu" data-menu-module-id="5b1cf2c198cb4">
              <a class="page-scroll" href="https://app.site123.com/?w=3813408#section-5b1cf2c198cb4">
              <span class="txt-container">activos de los miembros</span></a>
              </li>
              <li class="moduleMenu" data-menu-module-id="5b1cf2c185c7d"><a class="page-scroll" href="https://app.site123.com/?w=3813408#section-5b1cf2c185c7d">
              <span class="txt-container">Contacto</span></a>
              </li> </ul> 
              <ul class="navActions nav navbar-nav" style="opacity: 1;">
           
              <li class="header-address-wrapper">
             <a data-close-location="right" class="actionButton" role="button" data-container="body" data-toggle="address_menuCallActionIcons"><i class="fa fa-location-arrow"></i></a></li>
             <li class="header-cart-wrapper orderOpenCart " style="display: none;"><a class="actionButton btn-primary-action-button-4" role="button">
             <i class="fa fa-shopping-cart">
             <span class="count" style="display: none;"></span></i></a></li> 
                                        
            <li class="header-email-wrapper" data-style="1">
            <a data-close-location="right" class="actionButton" role="button" data-container="body" data-toggle="email_menuCallActionIcons">
            <i class="fa fa-envelope"></i></a>
            </li> 
            <li class="header-phone-wrapper" data-style="1"> 
            <a data-close-location="right" class="actionButton" role="button" data-container="body" data-toggle="phone_menuCallActionIcons"> 
            <i class="fa fa-phone"></i> 
            </a> </li> 
                                                    
            </ul> </div> </div> </nav>
                                                
             <input type="hidden" id="stickyMenu" name="stickyMenu" value="on"> </div> 
            <nav id="mainNavMobile" class="navbar-fixed-top" style="opacity: 1;"> 
            <div class="navPagesLeft"> <div class="header-menu-wrapper">
            <a data-close-location="left" data-menu-color="" data-menu-type="0" data-menu-align="center" data-is-mobile="true" class="mobile-menu-btn actionButton" role="button" data-container="body" data-toggle="menuCallActionIcons">
            <i class="fa fa-bars"></i>
            </a></div> </div> 
            <div class="navbar-header"> 
            <a class="navbar-brand page-scroll logo_name  weight700 " href="https://app.site123.com/?w=3813408#page-top"> 
            <span class="website-name">Smart List</span >
            </a> </div> 
            <div class="navPagesRight"> 
            <ul class="navActions nav navbar-nav"> 
                                                                            
            <li class="header-phone-wrapper"> 
            <a data-close-location="right" class="actionButton" role="button" data-container="body" data-toggle="phone_menuCallActionIcons"> 
            <i class="fa fa-phone"></i> </a> </li> 
                                                                              
            <li class="header-email-wrapper">
            <a data-close-location="right" class="actionButton" role="button" data-container="body" data-toggle="email_menuCallActionIcons">
            <i class="fa fa-envelope"></i></a></li> 
                                                                                        
            <li class="header-address-wrapper"><a data-close-location="right" class="actionButton" role="button" data-container="body" data-toggle="address_menuCallActionIcons">
            <i class="fa fa-location-arrow">
                                                                                                
            </i></a></li> 
                                                                                            
            <li class="header-cart-wrapper orderOpenCart " style="display: none;">
            <a class="actionButton btn-primary-action-button-4" role="button">
            <i class="fa fa-shopping-cart"><span class="count" style="display: none;">
                                                                                                        
            </span></i></a></li> </ul> </div> </nav>
            <div id="top-menu-mobile" style="display:none;">
            <ul> 
            <li class="moduleMenu active">
            <a class="page-scroll homepageMenu" href="https://app.site123.com/?w=3813408#page-top">Página de inicio</a></li>
            <li class="moduleMenu" data-menu-module-id="5b1cf2c16ca47"><a class="page-scroll" href="https://app.site123.com/?w=3813408#section-5b1cf2c16ca47">
            <span class="txt-container">¿Quiénes somos? </span>
            </a></li>
            <li class="moduleMenu" data-menu-module-id="5b1cf2c185c7d">
            <a class="page-scroll" href="https://app.site123.com/?w=3813408#section-5b1cf2c185c7d">
            <span class="txt-container">Contacto</span>
            </a></li> </ul> </div> 
            <div id="s123PjaxMainContainer">
            <section id="top-section" class="homepage_style_1 top_magic_homepage_kind_1  parallax-on old_homepage_layout_log old_homepage_layout_structure_log">
            <div class="previewManageButton" data-type="homepage">
            <a data-action="edit" title="Texto">
            <i class="fa fa-font"></i>
            </a>
            <a data-action="image" title="Imagen">
            <i class="fa fa-picture-o"></i>
            </a> 
            <a data-action="homepage_goal" title="Acción de la página de inicio">
            <i class="fa fa-cube" aria-hidden="true">
            </i></a>
            <a data-action="buttons" title="Botones">
            <i class="fa fa-link">
            </i></a>
            <a data-action="video" title="Vídeo">
            <i class="fa fa-video-camera">
            </i></a>
            <a data-action="form" title="Formulario">
            <i class="fa fa-list-alt">
                
            </i></a>







            <a data-action="layouts" title="Plantillas">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="palette" class="svg-inline--fa fa-palette fa-w-12" style="width:15px;height:15px;" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M204.3 5C104.9 24.4 24.8 104.3 5.2 203.4c-37 187 131.7 326.4 258.8 306.7 41.2-6.4 61.4-54.6 42.5-91.7-23.1-45.4 9.9-98.4 60.9-98.4h79.7c35.8 0 64.8-29.6 64.9-65.3C511.5 97.1 368.1-26.9 204.3 5zM96 320c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm32-128c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128-64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z">
                
            </path></svg></a></div>
            <div class="home_background_wrapper parallax-on">
            <div class="parallax-window home-image-bg" data-parallax="scroll" data-bleed="0" data-idele="parallax_home_opacity" data-opacity="0.5" data-filter="" data-backgroundcolor="#000000" data-image-src="https://cdn-cms.f-static.net/uploads/3813408/2000_5ef3ce5bcf7f7.jpg" data-position="center center" data-background-position="48.35% 50.44%" style="background-position:center center">
                
            </div></div>
            <div class="magic_homepage magic_homepage_kind_simple magic_homepage_kind_1 homepage-layout-24 container parent_simple_object_position_bottom_left">

            <div class="home_main_wrapper main_ele_place_bottom simple_object_position_bottom_left">
            <div class="box_container boxStyle_">
            <div class="boxBorder  ele_align_left">
            <h1 id="home_siteSlogan" class=" weight400  shadow1  0 10">Bienvenido a Smart List</h1>
            <h2 id="home_siteSlogan_2" class=" weight400  shadow1  0 10" style="display:none"></h2>
            <p id="home_SecondSiteSlogan" class=" weight400    0 20">Un entorno que conecta a expertos creativos y profesionales</p>
            </div>
            <div class="homepage_goal space_from_bottom_mainGoal ele_align_left" style="position: relative;max-width: 100%;">
            <div class="promoButtons align_left">
            <a id="home_buttonText" class="btn btn-primary btn-xl " onclick="MoveFirstSection(5);">
            <span class="h-b-container">
            <span class="h-b-t">
            <span class="h-b-t">Miembros</span>
            </span></span></a>
            <a id="home_buttonText_1" class="btn btn-primary btn-xl " style="display:none" onclick="MoveFirstSection();">
            <span class="h-b-container">
            <span class="h-b-t">
            <span class="h-b-t">
            </span></span></span></a></div></div></div></div></div></section>
            <div id="s123ModulesContainer" class="s123-modules-container">
            <section id="section-5b1cf2c16ca47" class="s123-module s123-module-about layout-2 layout-3 bg-primary"> 
            <div data-aos="fade-up" class="container-fluid page_header_style page_header_style_ aos-init aos-animate">
            <div class="row">
            <div class="container">
            <div class="row modulesTitle">
            <div class="col-xs-12 text-center">
            <h2 id="section-5b1cf2c16ca47-title" class="s123-page-header">¿Quiénes somos? </h2> 
            <hr class="small"> 
            <h4 id="section-5b1cf2c16ca47-slogan" class="s123-page-slogan"></h4> 
            </div> </div> </div> </div> </div> 
            <div class="previewManageButton">
            <a class="edit" data-module-id="5b1cf2c16ca47" data-module-type="16" data-item-unique-id="" title="Administrar la página">
            <i class="fa fa-file">
            </i></a>
            <a class="design" data-module-id="5b1cf2c16ca47" data-module-type="16" title="Diseño de página">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="palette" class="svg-inline--fa fa-palette fa-w-12" style="width:15px;height:15px;" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M204.3 5C104.9 24.4 24.8 104.3 5.2 203.4c-37 187 131.7 326.4 258.8 306.7 41.2-6.4 61.4-54.6 42.5-91.7-23.1-45.4 9.9-98.4 60.9-98.4h79.7c35.8 0 64.8-29.6 64.9-65.3C511.5 97.1 368.1-26.9 204.3 5zM96 320c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm32-128c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128-64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z">
                
            </path></svg></a></div> 
            <div class="container aos-init" data-aos="fade-up"> 
            <div class="row sides"><div class="col-xs-12 col-md-6"> 
            <div class="responsive-handler fr-view breakable">Somos una consultaría dedicada a la creación que diseña un software para facilitar las actividades educativas. &nbsp;<br>
            <br>
            <strong>Slogan .</strong>
            <br><br>¡Con Smart List nada es imposible!<br>&nbsp;
            <br>Azul Este color representa la seguridad, confiabilidad, responsabilidad. Ya que transmitiremos un trabajo de confianza, seguridad y madurez ante los espectadores.&nbsp;<br>Verde Este color representa la tranquilidad, armonía, crecimiento. Ya que cada día impulsaremos el crecimiento de la consultoría. &nbsp;
            <br>Negro Este color representa el poder, valentía, elegancia, sobriedad, estatus de alta calidad. Ya que transmitiremos una enseñanza con sinceridad ante los espectadores.&nbsp;<br>
            <br><br>
            </div> </div> 
            <div class="col-xs-12 col-md-6"> 
            <div class="separateImages text-center">
            <img src="./Smart List - Bienvenido a Smart List_files/800_5ef3cfcb510a1.jpg" class="img-rounded img-responsive" style="max-height:400px;max-width:80%;display:inline-block;" alt="¿Quiénes somos? ">
            </div> </div> </div> </div></section>
            <section id="section-5b1cf2c198cb4" class="s123-module s123-module-services layout-1"> 
            <div data-aos="fade-up" class="container-fluid page_header_style page_header_style_ aos-init">
            <div class="row">
            <div class="container">
            <div class="row modulesTitle">
            <div class="col-xs-12 text-center"> 
            <h2 id="section-5b1cf2c198cb4-title" class="s123-page-header">Miembros</h2> 
            <hr class="small"> 
            <h4 id="section-5b1cf2c198cb4-slogan" class="s123-page-slogan">
            </h4> </div> </div> </div> </div> </div> 
            <div class="previewManageButton"><a class="edit" data-module-id="5b1cf2c198cb4" data-module-type="3" data-item-unique-id="" title="Administrar la página">
            <i class="fa fa-file">
            </i></a>
            <a class="design" data-module-id="5b1cf2c198cb4" data-module-type="3" title="Diseño de página">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="palette" class="svg-inline--fa fa-palette fa-w-12" style="width:15px;height:15px;" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M204.3 5C104.9 24.4 24.8 104.3 5.2 203.4c-37 187 131.7 326.4 258.8 306.7 41.2-6.4 61.4-54.6 42.5-91.7-23.1-45.4 9.9-98.4 60.9-98.4h79.7c35.8 0 64.8-29.6 64.9-65.3C511.5 97.1 368.1-26.9 204.3 5zM96 320c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm32-128c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128-64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z">
                
            </path></svg></a></div> 
            <div class="container aos-init" > 
            <div class="row text-center">
            <div class="col-md-3 col-sm-6 col-centered">
            <div class="service-item">
            <h4>
            <img src="img/img4.jpg" style="width:50%; height:50%;">
            <br>
            <strong>Karen Itzel Martinez Cortes</strong>
            </h4>
            <p>Programadora</p>
            </div></div>
            <div class="col-md-3 col-sm-6 col-centered">
            <div class="service-item">
            <h4>
            <img src="img/img2.jpg" style="width:50%; height:50%;">
            <br>
            <strong>Valeria Adamari Nieto Gonzalez</strong>
            </h4>
            <p>Diseñadora</p>
            </div></div>
            <br>
            <br>
            <div class="col-md-3 col-sm-6 col-centered">
            <div class="service-item">
            <h4>
            <img src="img/img3.jpg" style="width:50%; height:50%;"> 
            <br>  
            <strong>Monserrat Vásquez Herrera</strong>
            </h4>
            <p>Documentista</p>
            </div></div> 
              </div> 
             </section>
             <section id="section-5b1cf2c185c7d" class="s123-module s123-module-contact layout-1 bg-primary"> 
            <div data-aos="fade-up" class="container-fluid page_header_style page_header_style_ aos-init">
            <div class="row"><div class="container">
            <div class="row modulesTitle">
            <div class="col-xs-12 text-center"> 
            <h2 id="section-5b1cf2c185c7d-title" class="s123-page-header">Contacto</h2>
            <hr class="small"> 
            <h4 id="section-5b1cf2c185c7d-slogan" class="s123-page-slogan">
            </h4> </div> </div> </div> </div> </div> 
            <div class="previewManageButton">
            <a class="edit" data-module-id="5b1cf2c185c7d" data-module-type="7" data-item-unique-id="" title="Administrar la página">
            <i class="fa fa-file">
            </i></a>
            <a class="design" data-module-id="5b1cf2c185c7d" data-module-type="7" title="Diseño de página">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="palette" class="svg-inline--fa fa-palette fa-w-12" style="width:15px;height:15px;" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M204.3 5C104.9 24.4 24.8 104.3 5.2 203.4c-37 187 131.7 326.4 258.8 306.7 41.2-6.4 61.4-54.6 42.5-91.7-23.1-45.4 9.9-98.4 60.9-98.4h79.7c35.8 0 64.8-29.6 64.9-65.3C511.5 97.1 368.1-26.9 204.3 5zM96 320c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm32-128c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128-64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"></path></svg></a></div> 
            <div class="container aos-init" data-aos="fade-up"> 
            <div class="row text-center"> 
            <div class="col-md-5" style="text-align: center;"> 
            <ul class="list-unstyled contact-as-details-container"> 
            <li>Calle Miguel Negrete S/N, San Rafael Chamapa, 54690 Naucalpan de Juárez, Méx.</li> 
            </ul> 
            <ul class="list-unstyled contact-as-details-container"> 
            <li>
            <a href="tel:5550754516">
            <i class="fa fa-phone">
            </i>
            <span dir="ltr">5550754516</span>
            </a></li> 
            <li>
            <a href="mailto:Smart_List@gmail.com">
            <i class="fa fa-envelope-o fa-fw">
            </i>Smart_List@gmail.com</a>
            </li> </ul> </div> 
            <form class="contactUsForm " data-date-format="d/m/Y" novalidate="novalidate"> 
            <div class="col-md-6 col-md-offset-1"> 
            <div class="row"> 
            <div class="col-md-6"> 
            <div class="form-group"> 
            <input type="text" name="contact_name" placeholder="Nombre" class="form-control" required="" data-msg-required="Este campo es necesario" aria-required="true"> 
            </div> 
            </div>
            <div class="col-md-6"> 
            <div class="form-group"> 
            <input type="text" name="contact_phone" placeholder="Teléfono" class="form-control"> 
            </div> </div> </div> 
            <div class="form-group"> 
            <input type="text" name="contact_email" placeholder="Dirección de correo electrónico" class="form-control" required="" data-msg-required="Este campo es necesario" data-rule-email="true" data-msg-email="Introduzca una dirección de correo electrónico válida." aria-required="true"> 
            </div> 
            <div class="form-group"> 
            <textarea class="form-control" name="contact_message" placeholder="Mensaje" style="min-height: 100px;">
            </textarea> 
            </div> 
            <button type="submit" class="btn btn-primary btn-block">Contacto</button> 
            </div> 
            <input type="hidden" name="w" value="3813408"> 
            <input type="hidden" name="websiteID" value="3813408"> 
            <input type="hidden" name="moduleID" value="5b1cf2c185c7d"> 
            <input type="hidden" name="layout" value="1"> 
            </form> </div> </div> 
            <div class="s123-module-contact-map"> 
            <iframe id="contact_5ef3f9b8bbc3e" class="map-container iframeLazyload" data-src="https://maps.site123.com/include/globalMapDisplay.php?q=Calle+Miguel+Negrete+S%2FN%2C+San+Rafael+Chamapa%2C+54690+Naucalpan+de+Ju%C3%A1rez%2C+M%C3%A9x.&amp;z=15&amp;l=es&amp;ilfc=" frameborder="0" style="pointer-events: none;" src="./Smart List - Bienvenido a Smart List_files/saved_resource.html">
            </iframe> </div> </section></div>
            <footer class="global_footer footer_1"> 
            <div class="container"> 
            <div class="row"> 
            <div class="side1 col-xs-12 col-sm-6 col-md-6"> 
            <div> 
            <span class="footer_name website-name-preview-helper">Smart List</span> 
            </div>                             
            <a rel="nofollow" target="_blank" href="">
            </a></div></div> 
            <div class="side2 col-xs-12 col-sm-6 col-md-6">
            <ul class="navPages nav navbar-nav hidden-xs" style="opacity: 1;"> 
            <li class="moduleMenu active"><a class="page-scroll homepageMenu" href="">Página de inicio</a>
            </li>
            <li class="moduleMenu" data-menu-module-id="5b1cf2c16ca47">
            <a class="page-scroll" href="https://app.site123.com/?w=3813408#section-5b1cf2c16ca47">
            <span class="txt-container">¿Quiénes somos? </span>
            </a></li> 
            <li class="moduleMenu extra-nav-more dropdown-submenu">
            <a href="https://app.site123.com/?w=3813408#" aria-haspopup="true" aria-expanded="true">más <span class="fa fa-caret-up"></span>
            </a> 
            <ul class="site-dropdown-menu dropdown-side-open-up">
            <li class="moduleMenu" data-menu-module-id="5b1cf2c198cb4">
            <a class="page-scroll" href="https://app.site123.com/?w=3813408#section-5b1cf2c198cb4">
            </a></li>
            <li class="moduleMenu" data-menu-module-id="5b1cf2c185c7d">
            <a class="page-scroll" href="https://app.site123.com/?w=3813408#section-5b1cf2c185c7d">
            <span class="txt-container">Contacto</span>
            </a></li></ul></li></ul></div> </div> </div> </footer> </div> </div> 
            <div> 
            <div id="header-phone-content" style="display:none;"> 
            <div class="popover_phone_icons"> 
            <div class="global-contact-details-container text-center"> 
            <ul class="list-unstyled"> 
            <li>
            <a href="tel:5550754516">
            <i class="fa fa-phone">
            </i>
            <span dir="ltr">5550754516</span>
            </a></li> </ul> </div> </div> 
            <input type="hidden" id="multiPhonesSettings" value="[{&quot;uniqid&quot;:&quot;mp-5ef3cd6b782c1&quot;,&quot;number&quot;:&quot;5550754516&quot;,&quot;dialCode&quot;:&quot;&quot;,&quot;countryData&quot;:&quot;&quot;,&quot;note&quot;:&quot;&quot;,&quot;type&quot;:&quot;1&quot;}]"> 
            </div> 
            <div id="header-email-content" style="display:none;">
            <div class="popover_email_icons"> 
            <div class="global-contact-details-container text-center"> 
            <ul class="list-unstyled"> 
            <li>
            <a href="mailto:Smart_List@gmail.com">
            <i class="fa fa-envelope fa-fw">
            </i>&nbsp;
            <span dir="ltr">Smart_List@gmail.com</span>
            </a></li> </ul> </div> </div></div> 
            <input type="hidden" id="globalContactEmailSettings" value="{&quot;contact_email&quot;:&quot;Smart_List@gmail.com&quot;,&quot;custom_form_html&quot;:&quot;&quot;}">
            <div id="header-address" style="display:none;">
            <div class="popover_address_icons"> 
            <div class="global-contact-details-container text-center">
            <ul class="list-unstyled"> 
            <li>
            <a href="http://maps.google.com/?q=Calle+Miguel+Negrete+S%2FN%2C+San+Rafael+Chamapa%2C+54690+Naucalpan+de+Ju%C3%A1rez%2C+M%C3%A9x." target="_blank">
            <i class="fa fa-location-arrow">
            </i> Calle Miguel Negrete S/N, San Rafael Chamapa, 54690 Naucalpan de Juárez, Méx.</a>
            </li> </ul> </div> </div>
            <div class="popover_icons">
            <div class="social-icons">
            <ul class="list-inline">
            <li>
            <a href="https://maps.google.com/?q=Calle+Miguel+Negrete+S%2FN%2C+San+Rafael+Chamapa%2C+54690+Naucalpan+de+Ju%C3%A1rez%2C+M%C3%A9x." target="_blank">
            <img src="./Smart List - Bienvenido a Smart List_files/google_map_white_small.png" style="width: 40px;height: auto;padding-bottom: 7px;">
            </a></li><li>
            <a href="https://waze.com/ul?ll=19.4443581,-99.2723328&amp;navigate=yes" target="_blank">
            <img src="./Smart List - Bienvenido a Smart List_files/waze_white_small.png" style="width: 40px;height: auto;padding-bottom: 7px;">
            </a>
            </li>
            <li class="visible-xs-inline-block">
            <a href="moovit://directions?dest_lat=19.4443581&amp;dest_lon=-99.2723328" target="_blank">
            <img src="./Smart List - Bienvenido a Smart List_files/moovit_white_small.png" style="width: 40px;height: auto;padding-bottom: 7px;">
            </a></li>
            <li class="visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
            <a href="https://moovit.com/?to=Calle+Miguel+Negrete+S%2FN%2C+San+Rafael+Chamapa%2C+54690+Naucalpan+de+Ju%C3%A1rez%2C+M%C3%A9x.&amp;tll=19.4443581_-99.2723328&amp;metroId=1" target="_blank">
            <img src="./Smart List - Bienvenido a Smart List_files/moovit_white_small.png" style="width: 40px;height: auto;padding-bottom: 7px;">
            </a></li></ul></div></div></div> </div>  
            <script>        var menuScrollOffset = 60;
        var packageNUM = 1;
        var subDomainUrl = 'site123.me';
        var domain = '5ef3cb7713c57';
        var languageCode = 'es';
        var multiLanCode = '';
        var globalLanguageChildLan          = '';
        var websiteLanguageCode             = '';
        var websiteLanguageCountryCode      = '';
        var websiteLanguageCountryFullCode  = '';
        var IsManagment                     = '2'

        var $GLOBALS = {
            'cdn-user-files' : '//cdn-cms.f-static.net',
            'maps-display-domain' : 'https://maps.site123.com',
            'cdn-system-files' : '//cdn-cms-s.f-static.net',
            'v-cache' : 'n6573',
        };
        var longFreeCustomer = false;
              
    </script> 

    <script>
        var translations = {
        "sent"             : "\u00a1Enviado!",
        "enterYourQuery"       : "Introduzca su consulta",
        "loading"          : "Cargando...",
        "closeEsc"         : "Cerrar (Esc)",
        "previousLeftArrowKey"     : "Anterior (flecha izquierda)",
        "NextRightArrowKey"    : "Siguiente (flecha derecha)",
        "of"               : "de",
        "more"             : "M\u00c1S",
        "cart"             :"Carrito",
        "SearchResult"         : "Resultado de la b\u00fasqueda",
        "ChooseTheAmountDonate"    : "Elija la cantidad que quiere donar",
        "blogReviewMessage"    : "\u00a1Gracias! Tu comentario ser\u00e1 publicado despu\u00e9s de ser aprobado por el administrador.",
        "productReviewMessage"     : "\u00a1Gracias! Su opini\u00f3n se publicar\u00e1 despu\u00e9s de haber sido aprobada por el administrador.",
        "ConfirmMailingSubscrive"  : "Confirme su direcci\u00f3n de correo electr\u00f3nico para completar la suscripci\u00f3n",
        "subscribeTellAboutYou"  : "Por favor, cu\u00e9ntenos acerca de usted",
        "imageCouldNotLoaded"      : "<a href=\"%url%\">La imagen<\/a> no ha podido cargarse.",
        "searchInputValidation"    : "Por favor, ingrese una consulta v\u00e1lida.",
        "jqueryValidMsgRequire"    : "Este campo es necesario",
        "jqueryValidMsgRemote"     : "Por favor arregle este campo.",
        "jqueryValidMsgEmail"      : "Introduzca una direcci\u00f3n de correo electr\u00f3nico v\u00e1lida.",
        "jqueryValidMsgUrl"        : "Por favor, introduzca una URL v\u00e1lida.",
        "jqueryValidMsgDate"       : "Por favor introduzca una fecha v\u00e1lida.",
        "jqueryValidMsgDateISO"    : "Por favor introduzca una fecha v\u00e1lida (ISO).",
        "jqueryValidMsgNumber"     : "Introduzca un n\u00famero v\u00e1lido",
        "jqueryValidMsgDigits"     : "Introduzca solo d\u00edgitos",
        "jqueryValidMsgCreditcard" : "Por favor, introduzca un n\u00famero de tarjeta de cr\u00e9dito.",
        "jqueryValidMsgEqualTo"    : "Introduzca otra vez el mismo valor.",
        "jqueryValidMsgAccept"     : "Por favor, introduzca un valor con una extensi\u00f3n v\u00e1lida.",
        "jqueryValidMsgMaxlength"  : "Introduzca un m\u00e1ximo de {0} caracteres.",
        "jqueryValidMsgMinlength"  : "Por favor ingrese al menos {0} caracteres.",
        "jqueryValidMsgRangelength":"Por favor, introduzca un valor entre {0} y {1} caracteres largo.",
        "jqueryValidMsgRange"      : "Por favor, introduzca un valor entre {0} y {1}.",
        "jqueryValidMsgMax"    : "Introduzca un valor menor o igual a {0}.",
        "jqueryValidMsgMin"    : "Por favor, introduzca un valor mayor o igual a {0}.",
        "sending"          : "Env\u00edando",
        "firstName"        : "Nombre",
        "lastName"         : "Apellido",
        "phone"            : "Tel\u00e9fono",
        "emailAddress"         : "Direcci\u00f3n de correo electr\u00f3nico",
        "fileUpload"           : "Carga de archivos",
        "send"             : "Enviar",
        "search"           : "B\u00fasqueda",
        "productvalidatorPopover"  : "Campo obligatorio",
        "SpecialRequest"       : "Petici\u00f3n especial",
        "restaurantReservation"    : "Reserva de restaurante",
        "ThankYouAuto"         : "\u00a1Pedido terminado, gracias por su pedido!",
        "ThankYouManual"       : "El pedido a\u00fan no se ha completado, nos contactaremos con usted pronto",
        "Ok"               : "Vale",
        "OrderNumber"          : "N\u00famero de pedido",
        "Date"             : "Fecha",
        "Hour"             : "Hora",
        "TableSize"        : "Tama\u00f1o de la tabla",
        "NoAvailableTime"      : "Lo sentimos, no hay tiempo disponible para esta fecha, intente con otra fecha.",
        "message"              : "Mensaje",
        "ThankYou"             : "Gracias",
        "error_title"          : "Error",
        "error_body"           : "Uy algo sali\u00f3 mal",
        "limitTickets"     : "Limite de:",
        "tickets"      : "Entradas",
        "registrationClosed"       : "Registro esta cerrado Por favor cont\u00e1ctenos para m\u00e1s informaci\u00f3n.",
        "Sunday"           : "Domingo",
        "Monday"           : "Lunes",
        "Tuesday"          : "Martes",
        "Wednesday"        : "Mi\u00e9rcoles",
        "Thursday"         : "Jueves",
        "Friday"           : "Viernes",
        "Saturday"         : "S\u00e1bado",
        "foodDeliverybootBoxTitle" : "Ventana de orden",
        "addToCart"                : "A\u00f1adir a la cesta",
        "save"                     : "Guardar",       
        "ThankYouAfterSubmmit"     : "Gracias por contactarnos. Hemos recibido su mensaje y le responderemos pronto.",    
        "country"                   : "Pa\u00eds",
        "productQuntityLimit"       : "El producto est\u00e1 limitado a un m\u00e1ximo de {{units_limitation}} unidades.",
        "productQuntityLimitMin"        : "El producto se limita a un m\u00ednimo de {{units_limitation}} unidades.",
        "forumDeleteTopic"      : "Eliminar un tema tambi\u00e9n permanentemente eliminar\u00e1 todas las respuestas relacionadas. \u00bfEst\u00e1 seguro de que desea eliminarlo?",
        "forumDeleteTopicTitle"     : "Borrar tema",
        "forumDeleteReply"      : "\u00bfEst\u00e1 seguro que desea eliminar esta respuesta?",
        "forumDeleteReplyTitle"     : "Borrar respuesta",
        "forumNewTopic"     : "Nuevo tema",
        "forumCreateNewTopic"   : "Crear un nuevo tema",
        "forumCountOfTotalPosts"    : "Publicar un total de {{numbers_of_posts}} publicaciones",
        "forumSearchPlaceholder"    : "buscar temas, publicaciones o categor\u00edas",
        "forumLastReply"    : "\u00daltima respuesta",
        "follow"    : "Seguir",
        "following"     : "Siguientes",
        "forumReplies"  : "Respuestas",
        "forumFrequentPosters"  : "",
        "chooseCategory"    : "Elegir categor\u00eda",
        "linkCopiedToClipboard"     : "Enlace copiado en el portapapeles",
        "edit"  : "Editar",
        "created"   : "Creado",
        "seeMore"   : "Ver m\u00e1s",
        "options"   : "Opciones",
        "joined"    : "Se uni\u00f3 a",
        "posted"    : "Publicada",
        "category"  : "Categor\u00eda",
        "yes"   : "S\u00ed",
        "no"    : "No",
        "insertTopicTitle"  : "Introduzca el t\u00edtulo del tema",
        "insertTopicMessage"    : "Insertar tema de mensaje",
        "reply"     : "Respuesta",
        "addReply"  : "A\u00f1adir respuesta",
        "address"   : "Direcci\u00f3n:",
        "city"  : "Ciudad:",
        "state"     : "Estado:",
        "zipCode"   : "C\u00f3digo Postal:",
        "instructions"  : "Instrucciones:",
        "country_v2" : "Pa\u00eds:",
        "chooseDate": "Seleccionar fecha",
        "chooseDateAndTime": "Elija fecha y hora",
        "chooseTime": "Elija el tiempo",
        "total" : "Total:",
        "reviewBad": "Malo",
        "reviewPoor": "Pobre",
        "reviewRegular": "Regular",
        "reviewGood": "Bueno",
        "reviewGorgeous": "Espl\u00e9ndido",
        "popupButtonSelected": "Seleccione",
        "editHeader": "Editar encabezado",
        "editFooter": "Editar pie de p\u00e1gina",
        "eCommerceSort": {
            "sortBy": "Ordenar por",
            "recommended": "Recomendado",
            "byHighPrice": "Precio, Alto a Bajo",
            "byLowerPriceBy": "Precio, bajo a alto",
        },
        "globalContactEmail": {
            "fullName": "Nombre completo",
            "description": "Descripci\u00f3n",
            "subject": "Asunto",
            "contactUs": "Contacto",
            "infoBox": "Complete el formulario o env\u00ede un correo electr\u00f3nico directo a: {{email_address}}",
            "thankYouMessage": "Gracias por contactarnos.",
            "thankYouCloseBtn": "Cerrar"        },
        "editStructure": "Editar estructura",
        "editLogo": "Editar Logo",
        "eventNumberOfTickets": "Elija cu\u00e1ntos tickets desea comprar.",
        "magicBtn": {
            "contactUs": {
                "title": "Contacto",
                "submitBtn": "Contacto",
                "ThankYouAfterSubmmit": "Gracias por contactarnos. Hemos recibido su mensaje y le responderemos pronto.",
                "fields": {
                    "name": "Nombre",
                    "phone": "Tel\u00e9fono",
                    "emailAddress": "Direcci\u00f3n de correo electr\u00f3nico",
                    "emailAddressValidationdMsg": "Introduzca una direcci\u00f3n de correo electr\u00f3nico v\u00e1lida.",
                    "message": "Mensaje",
                    "requiredMsg": "Este campo es necesario",
                }
            },
            "copyLink": {
                "success": "Link copiado al portapapeles.",
            },
            "ExternalLinksPreventor": {
                "title": "Publicar solo versi\u00f3n",
                "previewExternalLinkMsg": "Est\u00e1 intentando salir a un enlace externo desde el modo de vista previa de su sitio web. Publique su sitio web e intente nuevamente desde la URL de su sitio web.",
            }
        }
    };
</script>
   <link rel="stylesheet" href="./Smart List - Bienvenido a Smart List_files/minimize-bottom.css" type="text/css" crossorigin="anonymous"> 
   <script src="./Smart List - Bienvenido a Smart List_files/minimize.js.descarga" crossorigin="anonymous">
   </script> 
   
   <div> 
    <div class="magic-button-container"> 
     <input type="hidden" id="magicButtonSettings" value="{&quot;active&quot;:false,&quot;items&quot;:{&quot;contactUs&quot;:{&quot;order&quot;:0,&quot;value&quot;:&quot;valeria_nieto@gmail.com&quot;,&quot;hasInput&quot;:true}},&quot;greeter&quot;:{&quot;value&quot;:&quot;&quot;,&quot;active&quot;:false},&quot;siteLogo&quot;:&quot;&quot;,&quot;siteName&quot;:&quot;Smart List&quot;}">
      <input type="hidden" id="shareMagicButtonSettings" value="{&quot;active&quot;:false,&quot;items&quot;:{&quot;faceBook&quot;:{&quot;order&quot;:1,&quot;value&quot;:&quot;&quot;}},&quot;siteLogo&quot;:&quot;&quot;,&quot;siteName&quot;:&quot;Smart List&quot;}">
      <div class="all-magic-buttons">
          
      </div> </div></div>
      <link rel="stylesheet" href="./Smart List - Bienvenido a Smart List_files/magic-button-min.css" type="text/css" crossorigin="anonymous">
      <script src="./Smart List - Bienvenido a Smart List_files/magic-button-min.js.descarga" crossorigin="anonymous">
          
      </script>

      <div class="s123-front-last-element hidden">
          
      </div>
      <div id="cboxOverlay" style="display: none;">
          
      </div>
      <div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
     <div id="cboxWrapper">
    <div>
        <div id="cboxTopLeft" style="float: left;">
            
        </div>
        <div id="cboxTopCenter" style="float: left;">
            
        </div>
        <div id="cboxTopRight" style="float: left;">
            
        </div>
    </div>
    <div style="clear: left;">
    <div id="cboxMiddleLeft" style="float: left;">
        
    </div>
    <div id="cboxContent" style="float: left;">
    <div id="cboxTitle" style="float: left;">
        
    </div>
    <div id="cboxCurrent" style="float: left;">
        
    </div>
    <button type="button" id="cboxPrevious">
        
    </button>
    <button type="button" id="cboxNext">
        
    </button>
    <button type="button" id="cboxSlideshow">
        
    </button>
    <div id="cboxLoadingOverlay" style="float: left;">
        
    </div>
    <div id="cboxLoadingGraphic" style="float: left;">
        
    </div>
</div>
<div id="cboxMiddleRight" style="float: left;">
    
</div>
</div>
<div style="clear: left;">
    <div id="cboxBottomLeft" style="float: left;">
        
    </div>
    <div id="cboxBottomCenter" style="float: left;">
        
    </div>
    <div id="cboxBottomRight" style="float: left;">
        
    </div>
</div>
</div>
<div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;">
    
</div>
</div>

</body>
</html>