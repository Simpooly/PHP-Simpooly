<?php
$company_name = 'Simpooly';


//
?>

<!doctype>
<html>
<head>
    <title><?php echo $company_name; ?> </title>
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="http://www.southeastpsych.com/wp-content/uploads/2015/05/s-no-background-1024x1024.png">
    <link rel="stylesheet" href="inc/style.css" type="text/css">
    <link rel="stylesheet" href="inc/reportcard/css/badges.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Cagliostro|Dosis|Inconsolata|Palanquin|Tenor+Sans|Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Milonga|Monofett|Monoton|Oleo+Script+Swash+Caps" rel="stylesheet">

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
			<ul class="nav-small hide">
                <li class="<?php if ($section == "home"){echo "on";}?>"><a href="index.php">Home</a></li>
                <li class="<?php if ($section == "portfolio"){echo "on";}?>"><a href="portfolio.php">Portfolio</a></li>
                <li class="<?php if ($section == "about"){echo "on";}?>"><a href="about.php">About</a></li>
                <li class="<?php if ($section == "contact"){echo "on";}?>"><a href="contact.php">Contact</a></li>
            </ul>
		    </div> <!-- /nav-toggle -->
        </div>

    </head>

