<html>

<head>
</head>

<body>
<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);


$answers = array( 'q1' => 3,
                  'q2' => 4,
                  'q3' => 1,
                  'q4' => 3,
                  'q5' => 2);

$questions = array('q1' => "2+2?",
                   'q2' => "What is the capital of Japan?",
                   'q3' => "What is the language spoken in Brazil?",
                   'q4' => "What is KU's mascot?",
                   'q5' => "How many days are there in February in 2016?");

$score = 0;

foreach ($_POST as $question => $response)
{
   echo "Question: " . $questions[$question] . "<br>";
   echo "You answered: " . $response . "<br>";
   echo "Correct answer: " . $answers[$question] . "<br><br>";
   if($answers[$question] == $response)
    {
        $score = $score + 1;
    }
}

echo "You scored " . $score . " /5 or " . ($score/5)*100 . "%";

 ?>
</body>
 
</html>
