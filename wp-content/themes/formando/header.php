
<?php

$send = false;
if ($_POST['_token'] == '$KJMM99osods$=)/') {
    $send = true;
    $to = 'juan2ramos@gmail.com';
    $subject = 'Formulario Formando Digital';
    $message = '<h1> Mensaje enviado de Formando Digital   </h1> <br>';
    $message .= '<p>Nombre : ' . $_POST['name'] . '</p>';
    $message .= '<p>Email:' . $_POST['email'] . '</p>';
    $message .= '<p>Celular:' . $_POST['phone'] . '</p>';
    $headers = array('From: Formando <info@formandodigital.com>;',);
    wp_mail($to, $subject, $message,$headers);
}



?><!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?php the_title(); ?> </title>

    <meta name="description" content="<?php bloginfo('description'); ?>"/>

    <link rel="apple-touch-icon" sizes="57x57"
          href="<?php bloginfo('template_url') ?>/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
          href="<?php bloginfo('template_url') ?>/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?php bloginfo('template_url') ?>/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
          href="<?php bloginfo('template_url') ?>/assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php bloginfo('template_url') ?>/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
          href="<?php bloginfo('template_url') ?>/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
          href="<?php bloginfo('template_url') ?>/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
          href="<?php bloginfo('template_url') ?>/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php bloginfo('template_url') ?>/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
          href="<?php bloginfo('template_url') ?>/assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php bloginfo('template_url') ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
          href="<?php bloginfo('template_url') ?>/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php bloginfo('template_url') ?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
          content="<?php bloginfo('template_url') ?>/assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300i,400,500,500i,700,700i,900,900i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/main.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-urlBody="<?php bloginfo('url') ?>">
<header class="Header <?php if (is_front_page()) echo 'Header-index' ?>">
    <section class="Header-bar ">
        <div class="row around container">
            <figure class="Header-logo col-8 small-4 medium-8">
                <img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt="logo formando digital">
            </figure>
            <article class="row end col-8 small-12 medium-8">
                <div class="Header-containerNumber">
                    <p>¡Llamanos al celular!</p>
                    <a href="tel:+57013687918">(+57) 301 368 79 18</a>
                </div>
                <figure class="Header-partner">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/partner.png" alt="Somos partner">
                </figure>
            </article>
        </div>
    </section>
    <section class="row around container middle Header-Container">
        <article class="col-9 small-16 medium-8">
            <h1>GANA DINERO CON GOOGLE ADSENSE</h1>
            <div class="Header-video">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/DnHna33idns" frameborder="0"
                        allowfullscreen></iframe>
            </div>
        </article>
        <div class="col-7 row center" style="text-align: left">
            <?php if(!$send){ ?>
            <form action="" method="post" >
                <input type="hidden" name="_token" value="$KJMM99osods$=)/">
                <h2>Regístrate y recibe más información</h2>
                <label for="">Nombre completo</label>
                <input type="text" required name="name">
                <label for="">Email</label>
                <input type="email" required name="email">
                <label for="" >Celular</label>
                <input type="text" name="phone">
                <button type="submit">QUÍERO QUE ME CONTACTEN</button>
            </form>
            <?php }else{?>
                <h2>!Mensaje enviado!</h2>
            <?php } ?>
        </div>
    </section>
</header>


<main>
