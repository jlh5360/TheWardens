<?php
    $page = 'Homepage';
    $css = 'index_styles.css';
    // $css = 'subpage.css';
    $script = '';
    include 'assets/inc/header_&_nav.php';
?>
<script>
    function radio(q, a, b){
        let question = document.getElementsByName(q);
        for(i=0; i<question.length;i++){
            if(question[i].checked){
                if(question[i].id == a){
                    question[i].parentElement.style.backgroundColor = "lightgreen";
                    document.getElementById(b).style.display = "none";
                } else{
                    question[i].parentElement.style.backgroundColor = "#ff726f";
                }
            }
        }
    }
</script>

<h1>Modifying Directories Quiz</h1>
<h2>Question 1</h2>
<p>What does the following command do? <br> <em>chmod u+x filename</em></p>
<form>
    <div id="a1">
        <label for="answer1">Allows all users permission to execute the file</label>
        <input type="radio" id="answer1" name="q1"/><br>
    </div>
    <div id="a2">
        <label for="answer2">Gives the owner of the file permission to read, write, and execute it </label>
        <input type="radio" id="answer2" name="q1"/><br>
    </div>
    <div id="a3">
        <label for="answer3">Sets the file permission to read only for all users besides the owner</label>
        <input type="radio" id="answer3" name="q1"/><br>
    </div>
    <div id="a4">
        <label for="answer4">Adds the execute permission for the owner of the file</label>
        <input type="radio" id="answer4" name="q1"/><br>
    </div>
    <input type="button" value="Submit" id="q1b" onclick="radio('q1', 'answer4', 'q1b')">
</form>

<h2>Question 2</h2>
<p>Directories with content in them can be deleted with the rmdir command</p>
<form>
    <div id="a1">
        <label for="answer1">True</label>
        <input type="radio" id="answer1" name="q2"/><br>
    </div>
    <div id="a2">
        <label for="answer2">False </label>
        <input type="radio" id="answer2" name="q2"/><br>
    </div>
    <input type="button" value="Submit" id="q2b" onclick="radio('q2', 'answer2', 'q2b')">
</form>

<h2>Question 3</h2>
<p>What numeric value is assigned to the “write” permission?</p>
<form>
    <div id="a1">
        <label for="answer1">0</label>
        <input type="radio" id="answer1" name="q3"/><br>
    </div>
    <div id="a2">
        <label for="answer2">1 </label>
        <input type="radio" id="answer2" name="q3"/><br>
    </div>
    <div id="a3">
        <label for="answer3">2</label>
        <input type="radio" id="answer3" name="q3"/><br>
    </div>
    <div id="a4">
        <label for="answer4">4</label>
        <input type="radio" id="answer4" name="q3"/><br>
    </div>
    <input type="button" value="Submit" id="q3b" onclick="radio('q3', 'answer3', 'q3b')">
</form>

<h2>Question 4</h2>
<p>What is the purpose of the command mkdir?</p>
<form>
    <div id="a1">
        <label for="answer1">To create a new directory</label>
        <input type="radio" id="answer1" name="q4"/><br>
    </div>
    <div id="a2">
        <label for="answer2">To make changes to an existing directory </label>
        <input type="radio" id="answer2" name="q4"/><br>
    </div>
    <div id="a3">
        <label for="answer3">To rename a directory</label>
        <input type="radio" id="answer3" name="q4"/><br>
    </div>
    <div id="a4">
        <label for="answer4">To delete the content of a directory</label>
        <input type="radio" id="answer4" name="q4"/><br>
    </div>
    <input type="button" value="Submit" id="q4b" onclick="radio('q4', 'answer1', 'q4b')">
</form>

<?php
    include 'assets/inc/footer.php';
?>