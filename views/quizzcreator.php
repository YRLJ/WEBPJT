<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz Creator</title>
</head>
<body>
    <form method="POST">
        <div class="container question text-center">
        <h2>Q1</h2>
        <input type="text" name="Q1">
        <span>A </span><input type="text" name="1">
        <span>B </span><input type="text" name="2">
        <span>C </span><input type="text" name="3">
        <select name="rightq1">
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C</option>
        </select>
        </div>
        <!---<div class="container question text-center">
        <h2>Q2</h2>
        <input type="text" name="Q2">
        <span>A </span><input type="text" name="4">
        <span>B </span><input type="text" name="5">
        <span>C </span><input type="text" name="6">
        <select name="rightanswer">
            <option value="4">A</option>
            <option value="5">B</option>
            <option value="6">C</option>
        </select>
        </div>
        <div class="container question text-center">
        <h2>Q3</h2>
        <input type="text" name="Q3">
        <span>A </span><input type="text" name="7">
        <span>B </span><input type="text" name="8">
        <span>C </span><input type="text" name="9">
        <select name="rightanswer">
            <option value="7">A</option>
            <option value="8">B</option>
            <option value="9">C</option>
        </select>
        </div>
        <div class="container question text-center">
        <h2>Q4</h2>
        <input type="text" name="Q4">
        <span>A </span><input type="text" name="10">
        <span>B </span><input type="text" name="11">
        <span>C </span><input type="text" name="12">
        <select name="rightanswer">
            <option value="10">A</option>
            <option value="11">B</option>
            <option value="12">C</option>
        </select>
        </div>--->
    <input type="submit" class="btn btn-primary">
    </form>
    <?php
    $url;
    function createXMLName(){
       $letters = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9'];
       $title = "";
       for($i = 0 ; $i < 10 ;$i++){
            $title = $title.$letters[(rand()/getrandmax())*count($letters)];

       }
       return $title.".xml";
    }
    
    function createXML($question , $url){
        $dom = new DOMDocument();

		$dom->encoding = 'utf-8';

		$dom->xmlVersion = '1.0';

		$dom->formatOutput = true;

	$xml_file_name = $url;

		$root = $dom->createElement('Quizz');

        $movie_node = $dom->createElement('Question');
        
        

		

		

	$dom->save($xml_file_name);

	echo "$xml_file_name has been successfully created";
    }
    if(isset($_POST['Q1'])){
        if(isset($_POST['1']) && isset($_POST['1']) && isset($_POST['1']) && isset($_POST['rightq1'])){

        }
    }
    
    ?>
</body>
</html>