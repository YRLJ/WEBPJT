<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>CoEd - Quiz</title>
    <link rel="stylesheet" href="./styles/stylequiz.css">
</head>

<body>
    <div class=" text-center container">
        <br>
        <br>
        <form id="quiz">


        </form>

        <br>
        <br>
    </div>

    <script>
        //let url = "./quiz/j1il6ukeba.json";
        //recuperer data depuis le json 
        //name = index+"ans";
        function loadQuiz(url, quizid) {
            var QuizData = "";
            fetch(url)
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    QuizData = data;
                    let data1 = [QuizData.Q1, QuizData.Q2, QuizData.Q3, QuizData.Q4, QuizData.Q5, QuizData.Q6, QuizData.Q7, QuizData.Q8, QuizData.Q9, QuizData.Q10];
                    data1.map((question) => {
                        let index = data1.indexOf(question);
                        let questionTitle = "<div class=\"text-justify rounded container containerquiz\"><h2>" + question.question + "</h2><label>" + question.answer1 + "</label> <input name=\"" + index + "\" type=\"radio\" value=\"" + question.answer1 + "\"><br><label>" + question.answer2 + "</label> <input type=\"radio\" name=\"" + index + "\" value=\"" + question.answer2 + "\"><br><label>" + question.answer3 + "</label> <input name=\"" + index + "\" type=\"radio\" value=\"" + question.answer3 + "\"><br><input name=\"" + index + "ans\" type=\"hidden\" value=\"" + question.rightAnswer + "\"></div>";
                        $("#quiz").append(questionTitle);
                    })
                    $("#quiz").append("<br><button class=\" logbtn\" onclick=\"handleSubmit(" + quizid + ")\" type=\"button\">Submit</button>")


                })
        }

        function handleSubmit(quizid) {
            let score = 0;
            for (let i = 0; i < 10; i++) {
                var question = "input[name=\"" + i + "\"]:checked";
                var rightAns = "input[name=\"" + i + "ans\"]";
                question = $(question).val();
                // console.log(question);
                rightAns = $(rightAns).val();
                //console.log(rightAns);
                if (rightAns === question) {
                    score++;
                }
            }
            score = score * 10;
            window.location.href = "./controller/scorecontroller.php?score=" + score + "&id=" + quizid;
        }

        //loadQuiz(url,"3232");
    </script>
    <?php

    $url = $_GET['url'];
    $id = $_GET['id'];
    $url = "./quiz/" . $url;
    echo "<script>loadQuiz(\"" . $url . "\",\"" . $id . "\")</script>";



    ?>

</body>

</html>