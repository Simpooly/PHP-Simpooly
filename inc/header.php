<?php 
$company_name = 'SimpOoly';


//
?>

<!doctype>
<html>
<head>
    <title><?php echo $company_name; ?> </title>
    <link rel="stylesheet" href="inc/style.css" type="text/css">
</head>

<body >
    <head>
        <div class="navigation">
            
            <ul class="main-menu">
                <li class="<?php if ($section == "home"){echo "on";}?>"><a href="index.php">Home</a></li>
                <li class="<?php if ($section == "portfolio"){echo "on";}?>"><a href="portfolio.php">Portfolio</a></li>
                <li class="<?php if ($section == "about"){echo "on";}?>"><a href="about.php">About me</a></li>
                <li class="<?php if ($section == "contact"){echo "on";}?>"><a href="contact.php">Contact</a></li>            
            </ul>

            <div class="nav-toggle">
					
				<div class="bars">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</div>
				
		    </div> <!-- /nav-toggle -->
        </div>
        
    </head>
    
