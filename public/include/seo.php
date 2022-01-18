<?php if(!isset($title)){
        $title = "ABA | Association de Basketball d’Aire-La-Ville";
    }
    if(!isset($description)){
        $description = "L’ABA est un club créé pour les amateurs et les passionnés de basket de tous âges et tous niveaux. Les entraînements ont lieu les mercredi de 16h à 18h. ";
    }
    if(!isset($preview_image)){
        $preview_image = "";
    }?>    

    <!-- SEO Tags -->
    <title><?php echo $title ?></title>
    <meta name="title" content="<?php echo $title ?>">
    <meta name="description" content="<?php echo $description ?>">

    <!-- Favicons -->
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="">
    <link rel="icon" type="image/png" sizes="32x32" href="">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
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

    <!-- Analytics -->
    
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-805RZT9LLW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GOOGLE TAG');
    </script> -->