<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>PHP Quiz</title>

	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<style>
ul {
    list-style-type: none;
    margin: 0px;
    padding: 0px;
    overflow: hidden;
    background-color: #001a1a;
    top: 40%;
		left:30%;
    width: 30%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 56px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: red;
}

.active {
    background-color: red;
}
</style>

<body>

	<div id="page-wrap">

		<h1>RESULTS</h1>

        <?php

            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];

            $totalCorrect = 0;

            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 =="B") { $totalCorrect++; }

            echo "<div id='results'>$totalCorrect / 5 correct</div>";
						echo"<br>";
						echo"<br>";
						if($totalCorrect < "2")
						{
							echo "You Are assinged to begginner level";
							echo"<br>";
							echo "Choose Level-1 Course";

						}
						elseif ($totalCorrect <"4")
						{
						echo "You Are assinged to intermediate level";
						echo"<br>";
						echo "Choose Level-2 Course";
						}
						else {
							echo"COURSE COMPLETED";
						}

        ?>
				<br>
				<br>
				<ul>
				<li><a href="tutor.php">LEVEL 1</a></li><br><br>
				<li><a href="tutor2.php">LEVEL 2</a></li>
				<li><a href="video5.php">LEVEL 3</a></li>
			</ul>
	</div>

	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>
