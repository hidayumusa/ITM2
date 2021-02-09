<?php
 session_start();
?>

<html>
 <head>
  <title>CGPA CALCULATOR</title>
 <link rel="stylesheet" href="layoutstyle.css" >
 </head>

<style type = "text/css">
html{ background: url(background.jpg) no-repeat center fixed;
background-size: cover;
}
</style>

 <body>
 <h1 id="result">Result of CGPA</h1>

 <?php
  $total_credit = 0;
  $total_point = 0;
  $quality_point_total = 0;

  echo "<center>";

  echo "<table id=output border=1 width=350>";
  echo "<tr>
	<td>Name: </td>
	<td>".ucwords ($_SESSION['xxxname'])."</td>
	</tr>";
  echo "<tr>
	<td>Number of subject: </td>
	<td>".ucwords ($_SESSION['xxxnumsubj'])."</td>
	</tr>";
  echo "</table>";
  
  echo "<br>";
	for ($i=0; $i<count($_POST['subjname']); $i++)
	{
	if($_POST["subjscore"][$i] >= 80 && $_POST["subjscore"][$i] <=100)
	{
		$point = 4.0;
		$grade = "A";
	}
	elseif($_POST["subjscore"][$i] >=75 && $_POST["subjscore"][$i] <=79)
	{
		$point = 3.7;
		$grade = "A-";
	}
	elseif($_POST["subjscore"][$i] >=70 && $_POST["subjscore"][$i] <=74)
	{
		$point = 3.3;
		$grade = "B+";
	}
	elseif($_POST["subjscore"][$i] >=65 && $_POST["subjscore"][$i] <=69)
	{
		$point = 3.0;
		$grade = "B";
	}
	elseif($_POST["subjscore"][$i] >=60 && $_POST["subjscore"][$i] <=64)
	{
		$point = 2.7;
		$grade = "B-";
	}
	elseif($_POST["subjscore"][$i] >=55 && $_POST["subjscore"][$i] <=59)
	{
		$point = 2.3;
		$grade = "C+";
	}
	elseif($_POST["subjscore"][$i] >=50 && $_POST["subjscore"][$i] <=54)
	{
		$point = 2.0;
		$grade = "C";
	}
	elseif($_POST["subjscore"][$i] >=47 && $_POST["subjscore"][$i] <=49)
	{
		$point = 1.7;
		$grade = "C-";
		echo "Credit point: .$point <br>";
		echo "Grade C- <br>";
	}
	elseif($_POST["subjscore"][$i] >=44 && $_POST["subjscore"][$i] <=46)
	{
		$point = 1.3;
		$grade = "D+";
	}
	elseif($_POST["subjscore"][$i] >=40 && $_POST["subjscore"][$i] <=43)
	{
		$point = 1.0;
		$grade = "D";
	}
	elseif($_POST["subjscore"][$i] >=0 && $_POST["subjscore"][$i] <=39)
	{
		$point = 0.0;
		$grade = "E";
	}
	else
	{
		echo "<br>";
		echo "Error !!!";
		echo "<br>";
	}

if($_POST["subjscore"][$i] >=0 && $_POST["subjscore"][$i] <=100)
{
  $quality_point = $point * $_POST['subjcredit'][$i];
  $quality_point_total = $quality_point_total + $quality_point;
  $total_credit = $total_credit + $_POST['subjcredit'][$i];
  $total_point = $total_point + $point;

  echo "<table id=output border=1 width=250 >";
  echo "<tr>
	<td>Subject Name: </td>
	<td>".ucwords ($_POST["subjname"][$i])."</td>
	</tr>";

  echo "<tr>
	<td>Subject Credit: </td>
	<td>".$_POST['subjcredit'][$i]."</td>
	</tr>";

  echo "<tr>
	<td>Subject Score: 	</td>
	<td>".$_POST["subjscore"][$i]."</td>
	</tr>";

  echo "<tr>
	<td>Subject grade: </td>
	<td>".$grade."</td>
	</tr>";

  echo "<tr>
	<td>Credit point: </td>
	<td>".$quality_point."</td>
	</tr>";
		
  echo "<br>";
  echo "</table>";
}
 }
 echo "</center>";
 ?>

 <?php

  echo "<center>";

  $gpa = $quality_point_total / $total_credit;
  echo "<br>";
  echo "<table id=gpa border=1 width=250>";
  echo "<tr> 
	<td><h3>Your GPA is: ".round($gpa,2)."</h3></td></tr>";
  echo "</table>";

  /* test calculation start
  echo "quality point: $quality_point<br>";
  echo "quality point total: $quality_point_total<br>";
  echo "total credit: $total_credit<br>";
  echo "total point : $total_point";
  end test calculation */

  echo "</center>";
 ?>
 

</br>
<input class="button" type="button" onclick="window.location.replace('http://localhost/ITM/hello.html')" value="Home" />


 </body>
</html>
