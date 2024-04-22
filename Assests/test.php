

<?php
// this is a php Tryit ?php

// winner is set to n initially until x or o 
$winner = 'n';

// an array box with empty chars for x or o to take the place instead
$box = array('','','','','','','','','');

// condition of winning is having x or o in these boxes
// (0,1,2),(3,4,5),(6,7,8) [horizontal case] or (0,3,6),(1,4,7),(2,5,8) [vertical case] 
// or (0,4,8), (2,4,6)[diagonal case] 

// isset - detetminr if a var is declared and is diff than null 
// isset to _POST[gobtn] is an http var to stop the game from running since it ended 
if (isset($_POST["game"]))
	{
		// POST is http post variables in order to have assigned boxes
		$box[0] = $_POST["box0"];
		$box[1] = $_POST["box1"];
		$box[2] = $_POST["box2"];
		$box[3] = $_POST["box3"];
		$box[4] = $_POST["box4"];
		$box[5] = $_POST["box5"];
		$box[6] = $_POST["box6"];
		$box[7] = $_POST["box7"];
		$box[8] = $_POST["box8"];

		// the conditions to win game for x 
		if(($box[0] == 'x' && $box[1] == 'x' && $box[2] == 'x')  || ($box[3] == 'x' && $box[4] == 'x' && $box[5] == 'x') || ($box[6] == 'x' && $box[7] == 'x' && $box[8] == 'x') || ($box[0] == 'x' && $box[3] == 'x' && $box[6] == 'x')  || ($box[1] == 'x' && $box[4] == 'x' && $box[7] == 'x') || ($box[2] == 'x' && $box[5] == 'x' && $box[8] == 'x') || ($box[0] == 'x' && $box[4] == 'x' && $box[8] == 'x') || ($box[2] == 'x' && $box[4] == 'x' && $box[6] == 'x') )
		{
			$winner = 'x';
			Print "<h1>X Wins!</h1>";
			 
		}

		// if any of the boxes are empty blank = 1
		$blank = 0;
		for ($i = 0; $i <= 8 ; $i++)
		{
			if($box[$i] == '')
			{
				$blank = 1;
			}
		}
		if($blank == 1)
		{
			// if a box is blank and x hasn't won 'o' looks starts lookin for a empty box
			// when an empty box is found 'o' will take that box array index
			$i = rand() % 8;
			while($box[$i] != '')
			{
				$i = rand() % 8;
			}
			$box[$i] = 'o';

			// conditions to win the game for 'o' 
			if(($box[0] == 'o' && $box[1] == 'o' && $box[2] == 'o')  || ($box[3] == 'o' && $box[4] == 'o' && $box[5] == 'o') || ($box[6] == 'o' && $box[7] == 'o' && $box[8] == 'o') || ($box[0] == 'o' && $box[3] == 'o' && $box[6] == 'o')  || ($box[1] == 'o' && $box[4] == 'o' && $box[7] == 'o') || ($box[2] == 'o' && $box[5] == 'o' && $box[8] == 'o') || ($box[0] == 'o' && $box[4] == 'o' && $box[8] == 'o') || ($box[2] == 'o' && $box[4] == 'o' && $box[6] == 'o') )
			{
				$winner = 'o';
				Print "<h1>O Wins!</h1>";
			}
			
		}
		else if ($winner == 'n')
		{
			$winner = 't';
			Print "<h1>Game Tied!</h1>";
		}
	}
?>
<html>
<head>
	<title>Tic Tac Toe</title>
	<style>
	body {
		background-color: brown;
		text-align: center;
	}
	#ip{
		border-radius: 50px;
    	border: 2px solid black;
    	padding: 50px; 
    	width: 200px;
    	height: 15px;
    	margin-bottom: 20px;
    	margin-top: 20px;
    	margin-right: 20px;
    	font-size: 30px;
	}
	#go{
		 
    	width: 200px;
    	height: 15px;
    	margin-top: 20px;
    	padding: 50px;
    	border-radius: 50px;
	}
	</style>
</head>
<body>
	<div style="margin:0 auto;width:75%;text-align:center;">
	<form name = "ticktactoe" method = "post" action = "test.php">
		<?php
		// the frontend, creating the box image and setting the box values
			for($i = 0; $i <=8; $i++)
			{
				printf('<input type = "text" id = "ip" name = "box%s" value = "%s">', $i, $box[$i]);
				if ($i == 2 || $i == 5 || $i == 8){
				print("<br>");
				}
			}
		// frontend, next move btn 
			if($winner == 'n')
			{
				print('<input type = "submit" name = "game" value = "Next Move" id = "go">');
			}
			else
			{
				print('<input type = "button" name = "newgamebtn" value = "Play Again" id = "go" onclick = "window.location.href=\'test.php\'">');
			}
	
		?>
	</form>
	</div>
</body>
</html>