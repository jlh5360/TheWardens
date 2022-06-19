<?php
    $page = 'Homepage PHP';
    $css = 'index_styles.css';
    include 'assets/inc/header_&_nav.php';
?>

        <div id="content">
            <div id="section1">
                <h1>Welcome</h1>

                <h2>Learn Unix for Web Development</h2>
            </div>

            <div id="section2">
                <div id="mission_statement">
                    <h2>Mission Statement</h2>
                    <p>
                        The Wardens is a site dedicated to teaching Unix to users with all levels 
                        of understanding.  Our main goal is to be an educational tool for web 
                        development.  We strive for the information to be easy to comprehend while 
                        also challenging the users' knowledge.
                    </p>
                </div><br>
                
                <div id="prerequisites">
                    <h2>Prerequisites</h2>
                    <p>
                        There are no necessary prior skills to understanding Unix.  But, if you 
                        do have some exposure to Operating Systems and their functionalities or 
                        basic knowledge of computers will help you in understanding the various 
                        exercises given in this tutorial.
                    </p>
                </div><br>
            </div><br><br>

            <button onclick="location.href='getting_started.php';" id="getting_started">Getting Started!</button><br><br>

            <h2>Unix Syllabus</h2>
            <div>

            </div>
        </div>

<?php
    include 'assets/inc/footer.php';
?>