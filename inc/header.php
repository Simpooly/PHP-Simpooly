<?php
$company_name = 'Simpooly';


//
?>

<!doctype>
<html lang="en">
<head>
    <title><?php echo $company_name; ?> | Web Development focused on creating a website for your buisness </title>

    <meta charset="utf-8">
    <meta name="description" content="At Simpooly our web development expertise shines with creating fully customizable websites for your business and personal use. Focusing on simple web designs, usability, and user experience.">
    <meta name="keywords" content="Simpooly, Web Development, Krista Jekel">
    <meta name="author" content="Krista Jekel">
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <!-- Updated Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Allow responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="http://www.southeastpsych.com/wp-content/uploads/2015/05/s-no-background-1024x1024.png"><!--  Tab Icon -->
    <link rel="stylesheet" href="inc/style.css" type="text/css"> Stylesheet
    <link rel="stylesheet" href="inc/reportcard/css/badges.css"> <!-- treehouse badges -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MWR8HLS');</script>
    <!-- End Google Tag Manager -->
</head>


<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWR8HLS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <head>
        <div class="navigation">
            <ul class="main-menu">
                <li class="<?php if ($section == "home"){echo "on";}?>"><a href="index.php">Home</a></li>
                <li class="<?php if ($section == "portfolio"){echo "on";}?>"><a href="portfolio.php">Portfolio</a></li>
                <li class="<?php if ($section == "about"){echo "on";}?>"><a href="about.php">About</a></li>
                <li class="<?php if ($section == "contact"){echo "on";}?>"><a href="contact.php">Contact</a></li>
            </ul>

            <div class="nav-toggle">
				<div class="bars">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</div>

    			<ul class="nav-small" style="display: none;">
                    <li class="<?php if ($section == "home"){echo "on";}?>"><a href="index.php">Home</a></li>
                    <li class="<?php if ($section == "portfolio"){echo "on";}?>"><a href="portfolio.php">Portfolio</a></li>
                    <li class="<?php if ($section == "about"){echo "on";}?>"><a href="about.php">About</a></li>
                    <li class="<?php if ($section == "contact"){echo "on";}?>"><a href="contact.php">Contact</a></li>
                </ul>
		    </div> <!-- /nav-toggle -->
        </div>

    </head>

