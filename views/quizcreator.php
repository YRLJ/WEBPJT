<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz Creator</title>
</head>

<body>
    <form class="text-center" id="json">
        <input type="text" name="Q1.question" placeholder="Question 1" />
        <br>
        <br>
        <input type="text" name="Q1.answer1" placeholder="Reponse 1" />
        <br>
        <br>
        <input type="text" name="Q1.answer2" placeholder="Reponse2" />
        <br>
        <br>
        <input type="text" name="Q1.answer3" placeholder="Reponse 3" />
        <br>
        <br>
        <input type="text" name="Q1.rightAnswer" placeholder="Bonne Reponse" />
        <br>
        <br>
        <input type="text" name="Q2.question" placeholder="Question 2" />
        <br>
        <br>
        <input type="text" name="Q2.answer1" placeholder="Reponse 1" />
        <br>
        <br>
        <input type="text" name="Q2.answer2" placeholder="Reponse2" />
        <br>
        <br>
        <input type="text" name="Q2.answer3" placeholder="Reponse 3" />
        <br>
        <br>
        <input type="text" name="Q2.rightAnswer" placeholder="Bonne Reponse" />
        <br>
        <br>
        <input type="text" name="Q3.question" placeholder="Question 3" />
        <br>
        <br>
        <input type="text" name="Q3.answer1"  placeholder="Reponse 1" />
        <br>
        <br>
        <input type="text" name="Q3.answer2" placeholder="Reponse 2" />
        <br>
        <br>
        <input type="text" name="Q3.answer3" placeholder="Reponse 3" />
        <br>
        <br>
        <input type="text" name="Q3.rightAnswer" placeholder="Bonne Reponse" />
        <br>
        <br>
        <input type="text" name="Q4.question" placeholder="Question 4" />
        <br>
        <br>
        <input type="text" name="Q4.answer1" placeholder="Reponse 1" />
        <br>
        <br>
        <input type="text" name="Q4.answer2" placeholder="Reponse 2" />
        <br>
        <br>
        <input type="text" name="Q4.answer3" placeholder="Reponse 3" />
        <br>
        <br>
        <input type="text" name="Q4.rightAnswer" placeholder="Bonne reponse"  />
        <br>
        <br>
        <input type="text" name="Q5.question" placeholder="Question 5" />
        <br>
        <br>
        <input type="text" name="Q5.answer1" placeholder="Reponse 1" />
        <br>
        <br>
        <input type="text" name="Q5.answer2" placeholder="Reponse 2" />
        <br>
        <br>
        <input type="text" name="Q5.answer3" placeholder="Reponse 3" />
        <br>
        <br>
        <input type="text" name="Q5.rightAnswer" placeholder="Bonne Reponse" />
        <br>
        <br>
        <input type="text" name="Q6.question" placeholder="Question 6" />
        <br>
        <br>
        <input type="text" name="Q6.answer1" placeholder="Reponse 1" />
        <br>
        <br>
        <input type="text" name="Q6.answer2" placeholder="Reponse 2" />
        <br>
        <br>
        <input type="text" name="Q6.answer3" placeholder="Reponse 3" />
        <br>
        <br>
        <input type="text" name="Q6.rightAnswer" placeholder="Bonne Reponse" />
        <br>
        <br>
        <input type="text" name="Q7.question" placeholder="Question 7" />
        <br>
        <br>
        <input type="text" name="Q7.answer1" placeholder="Reponse 1" />
        <br>
        <br>
        <input type="text" name="Q7.answer2" placeholder="Reponse 2" />
        <br>
        <br>
        <input type="text" name="Q7.answer3" placeholder="Reponse 3" />
        <br>
        <br>
        <input type="text" name="Q7.rightAnswer" placeholder="Bonne Reponse" />
        <br>
        <br>
        <input type="text" name="Q8.question" placeholder="Question 8" />
        <br>
        <br>
        <input type="text" name="Q8.answer1" placeholder="Reponse 1" />
        <br>
        <br>
        <input type="text" name="Q8.answer2" placeholder="Reponse 2" />
        <br>
        <br>
        <input type="text" name="Q8.answer3" placeholder="Reponse 3" />
        <br>
        <br>
        <input type="text" name="Q8.rightAnswer" placeholder="Bonne Reponse" />
        <br>
        <br>
        <input type="text" name="Q9.question" placeholder="Question 9" />
        <br>
        <br>
        <input type="text" name="Q9.answer1" placeholder="Reponse 1" />
        <br>
        <br>
        <input type="text" name="Q9.answer2" placeholder="Reponse 2" />
        <br>
        <br>
        <input type="text" name="Q9.answer3" placeholder="Reponse 3" />
        <br>
        <br>
        <input type="text" name="Q9.rightAnswer" placeholder="Bonne Reponse" />
        <br>
        <br>
        <input type="text" name="Q10.question" placeholder="Question 10" />
        <br>
        <br>
        <input type="text" name="Q10.answer1" placeholder="Reponse 1" />
        <br>
        <br>
        <input type="text" name="Q10.answer2" placeholder="Reponse 2" />
        <br>
        <br>
        <input type="text" name="Q10.answer3" placeholder="Reponse 3" />
        <br>
        <br>
        <input type="text" name="Q10.rightAnswer" placeholder="Bonne Reponse" />
        <br>
        <br>
    </form>
    <button id="getDataBtn">Get JSON Data</button>
    <script>
        
        const generateObj = (obj, arr, val) => {
            if (arr.length === 1) {
                obj[arr[0]] = val;
                return;
            }

            if (!obj[arr[0]]) {
                obj[arr[0]] = {};
            }

            const restArr = arr.splice(1);
            generateObj(obj[arr[0]], restArr, val);
        }
        const getData = (id) => {
            const form = document.getElementById(id);
            const inputCollection = form.getElementsByTagName('input');
            const inputArray = [...inputCollection];
            const data = {};

            inputArray.map(input => {
                const {
                    name,
                    value
                } = input;
                const splitName = name.split('.');
                generateObj(data, splitName, value);
            })
            

            return data;
        }

        const getDataBtn = document.getElementById('getDataBtn');
        getDataBtn.addEventListener('click', () => {
            const quiz = getData('json');
            console.log(quiz);
           /* $.ajax({
                url: './controller/handlequiz.php',
                type: 'post',
                dataType: 'json',
                contentType: 'application/json',
                success: function(){
                    alert("success");

                },

                data: JSON.stringify(quiz)
            });*/
            fetch("./controller/handlequiz.php",{
                method: 'post',
                body: JSON.stringify(quiz)
            })
            .then((response) => {
              console.log(response);

            })
            
                
        })
    </script>
    <?php

    if (isset($_POST)) {
        var_dump($_POST);
    }


    ?>

</body>

</html>