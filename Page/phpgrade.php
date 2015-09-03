<html >

<head>
	
	<title> </title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body>

	<div id="wrap">
        <blockquote>
		  <h1 class="head">PHP Quiz Result</h1>
		</blockquote>
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
            if ($answer6 == "C") { $totalCorrect++; }
            if ($answer7 == "D") { $totalCorrect++; }
            if ($answer8 == "C") { $totalCorrect++; }
            if ($answer9 == "A") { $totalCorrect++; }
            if ($answer10 == "B") { $totalCorrect++; }
            $tamil=$totalCorrect;

            echo "<div id='results'>$tamil / 10 correct</div>";
             
                 
                 echo "the corrrect answers are all given by <b>C,A,A,B,B,C,D,C,A,B</b>";
               
            

            
        ?>
        <br><br><br><br><br>
        <blockquote>
       <a href="../index.php"><button>home</button></a>
	   </blockquote>
	</div>
	
</body>

</html>