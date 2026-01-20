<!DOCTYPE html>
<html lang="en">
    <?php define('BASE_URL', '/project/kabeer/BunkersiT/');  ?>
    <head>
        
        <meta charset="utf-8">
        <title>BunkerIT - IT Solutions Website </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <style lang="">
        .logo-slider {
            overflow: hidden;
            background: #fff;
            padding: 20px 0;
            }

        .logo-track {
            display: flex;
            width: calc(200px * 10);
            animation: scroll 25s linear infinite;
            }

        .logo-track img {
            width: 200px;
            height: 60px;
            object-fit: contain;
            margin: 0 20px;
            }

            /* animation */
            @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
            }

        .logo-slider:hover .logo-track {
            animation-play-state: paused;
            }

    </style>