<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Sets the document mode to edge (latest rendering engine) in Internet Explorer -->
    <title><?php bloginfo("name");?></title>  
  
    <?php wp_head(); ?>
    <!-- WordPress function that allows plugins and themes to insert scripts, styles, and other elements into the <head> section -->
</head>
<body>
    <header>
        <h1><?php blogInfo("name");?></h1>
        <!-- Displays the site's name dynamically using WordPress PHP function -->
        <nav>
            <?php wp_nav_menu(array("theme" => "main-menu"));?>
            <!-- WordPress function to display a navigation menu. 
                 The array parameter specifies the theme location (e.g., "main-menu") for the menu to be displayed -->
        </nav>
    </header>
    <!-- End of the header section -->
