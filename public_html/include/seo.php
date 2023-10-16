<?php if(!isset($title)){
        $title = "Boilerplate";
    }
    if(!isset($description)){
        $description = "Boilerplate";
    }
    if(!isset($preview_image)){
        $preview_image = "";
    }?>    

    <!-- SEO Tags -->
    <title><?php echo $title ?></title>
    <meta name="title" content="<?php echo $title ?>">
    <meta name="description" content="<?php echo $description ?>">

    <!-- Favicons -->
    <link rel="shortcut icon" href="https://thingstodoingeneva.com/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="https://thingstodoingeneva.com/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://thingstodoingeneva.com/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://thingstodoingeneva.com/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://thingstodoingeneva.com/img/favicon/site.webmanifest">
    <link rel="canonical" href="URL">

    <!-- Index -->
    <?php if(!isset($nofollow)){
        echo '<meta name="robots" content="index, follow">';
    }else{
        echo '<meta name="robots" content="noindex, nofollow">';
    } ?>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="URL">
    <meta property="og:title" content="<?php echo $title ?>">
    <meta property="og:description" content="<?php echo $description ?>">
    <meta property="og:image" content="<?php echo $preview_image; ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="URL">
    <meta property="twitter:title" content="<?php echo $title ?>">
    <meta property="twitter:description" content="<?php echo $description ?>">
    <meta property="twitter:image" content="<?php echo $preview_image; ?>">