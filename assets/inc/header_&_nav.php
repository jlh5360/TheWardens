<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $page;?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/general_styles.css">
        <link rel="stylesheet" href="assets/css/<?php echo $css;?>">
    </head>
    <body>
        <nav id="nav_bar">
            <img src="assets/img/wardens_logo.png" id="logo" width="85" height="70" alt="Wardens logo">

            <ul>
                <li id="home"><a href="index.php">Home</a></li>
                
                <hr id="horizontal_line_1">

                <div class="tag">
                    <li id="getting_started" class="tag_option"><a href="getting_started.php">Getting Started</a></li>
                    <div class="options">
                        <!-- in the quotes (href) add link to the page on solace this added the "is current" color change in php -->
                        <li><a class="link <?php echo((isset($page) && $page=='gettingstarted')? ' active"' : ''); ?>   " href="">What is Unix?</a></li>
                        <li><a class="link <?php echo((isset($page) && $page=='filestructure')? ' active"' : ''); ?>   " href="">File Structure</a></li>
                        <li><a class="link <?php echo((isset($page) && $page=='terminal')? ' active"' : ''); ?>   " href="">Terminal</a></li>
                    </div>
                </div>

                <hr id="horizontal_line_2">
                
                <div class="tag">
                    <li id="references" class="tag_option">References</li>
                    <div class="options">
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                    </div>
                </div>

                <hr id="horizontal_line_3">
                
                <div class="tag">
                    <li id="quizzes" class="tag_option">Quizzes</li>
                    <div class="options">
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                    </div>
                </div>
            </ul>
        </nav>