<?php
    $page = 'Homepage';
    $css = 'index_styles.css';
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
        
<p>Question#</p>
<form>
    <div id="a1">
        <label for="answer1">Answer 1 </label>
        <input type="radio" id="answer1" name="q1"/><br>
    </div>
    <div id="a2">
        <label for="answer2">Answer 2 </label>
        <input type="radio" id="answer2" name="q1"/><br>
    </div>
    <div id="a3">
        <label for="answer3">Answer 3 </label>
        <input type="radio" id="answer3" name="q1"/><br>
    </div>
    <div id="a4">
        <label for="answer4">Answer 4 </label>
        <input type="radio" id="answer4" name="q1"/><br>
    </div>
    <input type="button" value="Submit" id="q1b" onclick="radio('q1', 'answer3', 'q1b')">
</form>

<p>What permissions are given to the owner in the numeric code 644?</p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="quizForm2" onsubmit="checkAnswer1()">
    <label for="perm1">Answer 1 </label>
    <input type="checkbox" id="perm1" name="permissions" value="Read"/><br>
    <label for="perm2">Answer 2 </label>
    <input type="checkbox" id="perm2" name="permissions" value="Write"/><br>
    <label for="perm3">Answer 3 </label>
    <input type="checkbox" id="perm3" name="permissions" value="Execute"/><br>
</form>

<?php
    include 'assets/inc/footer.php';
?>