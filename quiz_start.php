<script>
    function checkAnswer(){
        if (document.getElementById("quiz").value == "answer3"){
            //tell user they're right
            document.getElementById("quizStatus").innerHTML ="CORRECT!";
            document.getElementById("quizStatus").style.fontSize = "2em";
        } else{
            //get selection = red
        }
        //correct answer turns green regardless
        document.getElementById("answer3").style.backgroundColor = "green";
    }
</script>

    <body>
        <p id="quizStatus"></p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="quiz" onsubmit="checkAnswer()">
            <input type="radio" id="answer1" name="name_of_quiz_section" value="potential_answer1"/><br>
            <label for="answer1">Answer 1</label>
            <input type="radio" id="answer2" name="name_of_quiz_section" value="potential_answer2"/><br>
            <label for="answer2">Answer 2</label>
            <input type="radio" id="answer3" name="name_of_quiz_section" value="potential_answer3"/><br>
            <label for="answer3">Answer 3</label>
            <input type="radio" id="answer4" name="name_of_quiz_section" value="potential_answer4"/><br>
            <label for="answer4">Answer 4</label>
            <input type="submit" value="Submit">
        </form>