<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz Creator</title>
</head>

<body>
    <form id="json">
        <input type="text" name="Q1.question" />
        <br>
        <input type="text" name="Q1.answer1" />
        <br>
        <input type="text" name="Q1.answer2" />
        <br>
        <input type="text" name="Q1.answer3" />
        <br>
        <input type="text" name="Q1.rightAnswer" />
        <br>
        <input type="text" name="Q2.question" />
        <br>
        <input type="text" name="Q2.answer1" />
        <br>
        <input type="text" name="Q2.answer2" />
        <br>
        <input type="text" name="Q2.answer3" />
        <br>
        <input type="text" name="Q2.rightAnswer" />
        <br>
        <input type="text" name="Q3.question" />
        <br>
        <input type="text" name="Q3.answer1" />
        <br>
        <input type="text" name="Q3.answer2" />
        <br>
        <input type="text" name="Q3.answer3" />
        <br>
        <input type="text" name="Q3.rightAnswer" />
        <br>
        <input type="text" name="Q4.question" />
        <br>
        <input type="text" name="Q4.answer1" />
        <br>
        <input type="text" name="Q4.answer2" />
        <br>
        <input type="text" name="Q4.answer3" />
        <br>
        <input type="text" name="Q4.rightAnswer" />
        <br>
        <input type="text" name="Q5.question" />
        <br>
        <input type="text" name="Q5.answer1" />
        <br>
        <input type="text" name="Q5.answer2" />
        <br>
        <input type="text" name="Q5.answer3" />
        <br>
        <input type="text" name="Q5.rightAnswer" />
        <br>
        <input type="text" name="Q6.question" />
        <br>
        <input type="text" name="Q6.answer1" />
        <br>
        <input type="text" name="Q6.answer2" />
        <br>
        <input type="text" name="Q6.answer3" />
        <br>
        <input type="text" name="Q6.rightAnswer" />
        <br>
        <input type="text" name="Q7.question" />
        <br>
        <input type="text" name="Q7.answer1" />
        <br>
        <input type="text" name="Q7.answer2" />
        <br>
        <input type="text" name="Q7.answer3" />
        <br>
        <input type="text" name="Q7.rightAnswer" />
        <br>
        <input type="text" name="Q8.question" />
        <br>
        <input type="text" name="Q8.answer1" />
        <br>
        <input type="text" name="Q8.answer2" />
        <br>
        <input type="text" name="Q8.answer3" />
        <br>
        <input type="text" name="Q8.rightAnswer" />
        <br>
        <input type="text" name="Q9.question" />
        <br>
        <input type="text" name="Q9.answer1" />
        <br>
        <input type="text" name="Q9.answer2" />
        <br>
        <input type="text" name="Q9.answer3" />
        <br>
        <input type="text" name="Q9.rightAnswer" />
        <br>
        <input type="text" name="Q10.question" />
        <br>
        <input type="text" name="Q10.answer1" />
        <br>
        <input type="text" name="Q10.answer2" />
        <br>
        <input type="text" name="Q10.answer3" />
        <br>
        <input type="text" name="Q10.rightAnswer" />
        <br>
    </form>
    <button id="getDataBtn">Get JSON Data</button>
    <script>
        function createName() {
            let letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
            let title;
            for (let i = 0; i < 10; i++) {
                title += letters[Math.floor(Math.random() * letters.length())];
            }
            return title;

        }
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
            const data = getData('json');
            console.log(data);
           /* $.post("./views/quizcreator.php",() => {
                console.log(data);

            });*/
        })
    </script>
    <?php

    if (isset($_POST)) {
        var_dump($_POST);
    }


    ?>

</body>

</html>