<?php 
$company_name = 'SimpOoly';


//
?>

<!doctype>
<html>
<head>
    <title><?php echo $company_name; ?> </title>
    <link rel="stylesheet" href="inc/style.css" type="text/css">
    <link rel="stylesheet" href="inc/reportcard/css/badges.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
</head>

<body>
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
    
