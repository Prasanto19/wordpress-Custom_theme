<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head()?><!--Add header from functions.php-->
    <title>Wordpress Custom Theme</title>
</head>

<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="<?php echo site_url('') //display front page?>"
                <?php if(is_front_page()) echo 'class="active"' ?>
                >Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog') //display index page?>"
                <?php if(get_post_type()=='post') echo 'class="active"' ?>
                >Blog</a>
            </li>
            <li>
                <a href="<?php echo site_url('/projects') //display archive-projects page?>"
                <?php if(get_post_type()=='projects') echo 'class="active"' ?>
                >Projects</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about') //display page-about page?>"
                <?php if(is_page('about')) echo 'class="active"' ?>
                >About</a>
            </li>
            <li>
                <a href="<?php echo site_url('/contact') //display page-contact page?>"
                <?php if(is_page('contact')) echo 'class="active"' ?>
                >Contact</a>
            </li>
            <div class = "searchbox-slide-menu">
                <?php get_search_form();?>
            </div>
        </ul>
    </div>

    <nav>
        <div id = "logo-img">
            <a href="https://github.com/Prasanto19" target = "_blank">
                &lt;Prashanta/&gt;
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="<?php echo site_url('') //display front page?>"
                <?php if(is_front_page()) echo 'class="active"' ?>
                >Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog') //display index page?>"
                <?php if(get_post_type()=='post') echo 'class="active"' ?>
                >Blog</a>
            </li>
            <li>
                <a href="<?php echo site_url('/projects') //display archive-projects page?>"
                <?php if(get_post_type()=='projects') echo 'class="active"' ?>
                >Projects</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about') //display page-about page?>"
                <?php if(is_page('about')) echo 'class="active"' ?>
                >About</a>
            </li>
            <li>
                <a href="<?php echo site_url('/contact') //display page-contact page?>"
                <?php if(is_page('contact')) echo 'class="active"' ?>
                >Contact</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>

    <div id="searchbox">
        <?php get_search_form();?>
    </div>
<?php 
    if(!is_front_page() )
    {
?>
    <main>
<?php } ?>