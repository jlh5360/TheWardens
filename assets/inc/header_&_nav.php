<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $page;?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/general_styles.css">
        <link rel="stylesheet" href="assets/css/<?php echo $css;?>">
        <script type="text/javascript" defer src="assets/js/<?php echo $script;?>"></script>

        <link rel="icon" type="image/x-icon" href="/assets/img/wardens_icon.ico">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&family=Roboto:wght@300&display=swap');
        </style>
    </head>
    <body>
        <nav id="nav_bar">
            <img src="assets/img/wardens_logo.png" id="logo" width="85" height="70" alt="Wardens logo">

            <ul>
                <hr id="horizontal_line_1">

                <li id="home"><a href="index.php">Home</a></li>
                
                <hr id="horizontal_line_2">

                <div class="tag">
                    <li id="getting_started" class="tag_option"><a href="getting_started.php">Getting Started</a></li>
                    <div class="options">
                        <!-- in the quotes (href) add link to the page on solace this added the "is current" color change in php -->
                        <li><a class="link <?php echo((isset($page) && $page=='gettingstarted')? ' active"' : ''); ?>   " href="https://solace.ist.rit.edu/~iste240t02/">What is Unix?</a></li>
                        <li><a class="link <?php echo((isset($page) && $page=='filestructure')? ' active"' : ''); ?>   " href="https://solace.ist.rit.edu/~iste240t02/">File Structure</a></li>
                        <li><a class="link <?php echo((isset($page) && $page=='terminal')? ' active"' : ''); ?>   " href="https://solace.ist.rit.edu/~iste240t02/">Terminal</a></li>
                        <li><a class="link <?php echo((isset($page) && $page=='sshsftp')? ' active"' : ''); ?>   " href="https://solace.ist.rit.edu/~iste240t02/">SSH and SFTP</a></li>
                    </div>
                </div>

                <hr id="horizontal_line_3">

                <div class="tag">
                    <li id="tutorials" class="tag_option">Tutorials</li>
                    <div class="options">
                        <li><a href="basic_commands.php">Basic Commands</a></li>
                        <li><a href="permissions.php">Permissions</a></li>
                        
                    </div>
                </div>

                <hr id="horizontal_line_4">
                
                <div class="tag">
                    <li id="references" class="tag_option">References</li>
                    <div class="options">
                        <li><a href="https://www.guru99.com/unix-linux-tutorial.html">UNIX / Linux Tutorial for Beginners: Learn Online in 7 days (guru99.com)</a></li>
                        <li><a href="https://www.guru99.com/must-know-linux-commands.html">Basics Linux/Unix Commands with Examples & Syntax (List)</a></li>
                        <li><a href="https://www.softwaretestinghelp.com/ls-command-in-unix/">Ls Command in Unix with Syntx and Options and Practical Examples</a></li>
                        <li><a href="https://www.computerhope.com/unix/ucat.htm#:~:text=Copy%20a%20text%20file,shell%20redirection%20symbol%20%22%3E%22.">Linux cat command help and examples.</a></li>
                        <li><a href="https://www.guru99.com/file-permissions.html#linux_file_ownership">File Permissions in Linux / Unix: How to Read, Write & Change?</a></li>
                        <li><a href="https://www.ssh.com/academy/ssh/protocol">SSH protocol is the standard for strong authentication, secure connection, and encrypted file transfers. We developed it.</a></li>
                        <li><a href="https://ubuntu.com/tutorials/command-line-for-beginners#2-a-brief-history-lesson">The Linux command line for beginners | Ubuntu </a></li>
                    </div>
                </div>

                <hr id="horizontal_line_5">
                
                <div class="tag">
                    <li id="quizzes" class="tag_option">Quizzes</li>
                    <div class="options">
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                    </div>
                </div>

                <hr id="horizontal_line_6">
            </ul>
        </nav>