<?php 
$json =  file_get_contents('php://input');
function createName() {
     $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
     $title ="";
    for ($i = 0; $i < 10; $i++) {
        $title= $title.$letters[floor(rand()/getrandmax() * count($letters))];
    }
    return "../quiz/".$title.".json";

}

    $myfile = fopen(createName(), "w");
    fwrite($myfile,$json);


    




?>