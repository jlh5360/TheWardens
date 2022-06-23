<?php
$page = 'Getting Started';
$css = 'getting_started_styles.css';
$script = '';
include 'assets/inc/header_&_nav.php';
?>

<div id="content">
    <div id="section1">
        <h1>Getting Started</h1>
        <p>
            Welcome to the first part of your journey to learning Unix. Here you will learn all the
            things you need to know before starting with commands. The topics will include an
            explanation of what Unix is, why we are using it, an introduction to file structure, and
            what the terminal is.
        </p><br><br>
    </div>

    <h2>What is Unix</h2>
    <p>
        Unix is a computer operating system that can handle activities from multiple users at the
        same time. Multitasking can be done by a user. Unix is also the first operating system to
        be written in a higher-level language (C Language). Being written in C allowed the
        operating system to be ported to other machines with minimal adaptations.
    </p>

    <h3>Why use Unix?</h3>
    <p>
        Unix is designed to share! In web development, you usually work in groups and need
        to share information easily with your peers. It is easy to install and more than one
        person can log in at a time to do work. Unix is also more secure than other operating
        systems. This is because you can control all processes in Unix.
    </p><br>

    <h2>File Structure</h2>
    <p>
        Unix is organized in a hierarchical file structure. This allows for easier access and
        maintenance of data. This should be familiar to Microsoft Windows users because they
        use the same structure.
    </p><br>

    <p>The top-level directory is called root(written as slash /). From the root, the tree grows downward.</p><br>

    <p>At the end of each path, an ordinary file or directory will be found. In this diagram, ordinary files are rectangles and directories have curved edges.</p><br>

    <p>Ordinary files are normal files. They are files that can hold documents, pictures, programs, and other kinds of data but do not support other paths.</p><br>

    <p>Directories can hold ordinary files or more directories allowing growth. They are also known as folders. Directories directly connected by a path are called parents (closer to the root) and children (farther from the root).</p><br>

    <img src="assets/img/unixfilestructurediagram.png" width="600" height="600" alt="Unix files structure diagram" id="unix_file_structure_diagram">


    <h3>Filenames</h3>
    <p>
        All files have a name. The names for files can reach up to 255 characters long. No two names in a directory
        are the same. If files are in separate directories they can share the same name. In Unix, the operating
        system is case-sensitive. This means you can name a file <strong>monday, Monday, or MONDAY</strong> and this
        would represent three different files.
    </p><br>

    <p>These are the characters you can use to name your files.</p>

    <ul id="characters_list">
        <li>Uppercase letters (A-Z)</li>
        <li>Lowercase letters (a-z)</li>
        <li>Numbers (0-9)</li>
        <li>Underscore( _ )</li>
        <li>Period ( . )</li>
        <li>Comma ( , )</li>
    </ul><br>

    <p>
        A file that begins with a period is called a hidden file. When using the command “ls”, hidden files
        will not appear. Do not worry, you can still see these files if you use the command “ls -a”. We will
        go in-depth about this in a later section.
    </p>

    <h3>Pathnames</h3>
    <p>
        Every file has a pathname. A pathname is a statement of the location of a file or other item in a hierarchy of directories.
    </p>

    <p>
        A file can either have a full, also known as an absolute, pathname, or a relative pathname. Full paths give the entire 
        pathname and point the computer to the same location no matter what the working directory is. It is always given in reference to 
        the root directory. A relative path gives only part of the pathname. This leaves the computer to “assume” that the file is in the 
        same directory as the working directory.
    </p>

    <br>
</div>

<?php
include 'assets/inc/footer.php';
?>