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
    function checkbox(q, a, b, n){
                let options = document.getElementsByName(q);
                let sum = 0;
                for(i=0; i<options.length;i++){
                        if(options[i].parentElement.style.backgroundColor == "lightgreen"){
                            options[i].parentElement.style.backgroundColor = "white";
                        }
                    }
                for(i=0; i<options.length;i++){
                    if(options[i].checked){
                        for(j=0; j<a.length;j++){
                            if(options[i].id == a[j]){
                                options[i].parentElement.style.backgroundColor = "lightgreen";
                                sum += 1;
                            } else if(options[i].parentElement.style.backgroundColor != "lightgreen"){
                                options[i].parentElement.style.backgroundColor = "#ff726f";
                            }
                        }
                    }
                }
                if(sum >= parseInt(n)){
                    document.getElementById(b).style.display = "none";
                }
                sum = 0;
            }
</script>
        
<p>Question#</p>
<form>
    <div>
        <label for="answer1">Answer 1 </label>
        <input type="radio" id="answer1" name="q1"/><br>
    </div>
    <div>
        <label for="answer2">Answer 2 </label>
        <input type="radio" id="answer2" name="q1"/><br>
    </div>
    <div >
        <label for="answer3">Answer 3 </label>
        <input type="radio" id="answer3" name="q1"/><br>
    </div>
    <div>
        <label for="answer4">Answer 4 </label>
        <input type="radio" id="answer4" name="q1"/><br>
    </div>
    <input type="button" value="Submit" id="q1b" onclick="radio('q1', 'answer3', 'q1b')">
</form>

<p>What permissions are given to the owner in the numeric code 644?</p>
<form>
    <div>
        <label for="perm1">Read </label>
        <input type="checkbox" id="perm1" name="q2"/><br>
    </div>
    <div>
        <label for="perm2">Write </label>
        <input type="checkbox" id="perm2" name="q2"/><br>
    </div>
    <div>
    <label for="perm3">Execute </label>
    <input type="checkbox" id="perm3" name="q2"/><br>
    </div>
        <input type="button" value="Submit" id="q2b" onclick="checkbox('q2', ['perm1', 'perm2'], 'q2b', '2')">
    </form>

<?php
    include 'assets/inc/footer.php';
?>