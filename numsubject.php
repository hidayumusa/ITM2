<?php
 session_start();
 $_SESSION['xxxnumsubj'] = $_POST['numsubj'];
?>

<?php
 if(empty($_SESSION['xxxnumsubj']))
 {
  echo "Please Enter Number Subject !! Not set yet";
 }
?>

<html>
 <head>
  <title>CGPA CALCULATOR</title>
<link rel="stylesheet" href="layoutstyle.css">
 </head>

<style type = "text/css">

html{ background: url(background.jpg) no-repeat center fixed;
background-size: cover;
}
</style>

 <body>
 <h1 id="numbers">Enter the details for your <?php echo $_POST["numsubj"] ?> subject : </h1><br><br>
 <div>
 <form action="subjdetail.php" method="post">
 <?php
  $myArray = array();
  for($i = 0; $i < $_POST["numsubj"]; $i++)
  { 
?>
   <label for="subjname">Subject Name:</label>
   <input type="text" name='subjname[]' required>
   <label for="subjname">Credit Hours:</label>
   <input type="text" name="subjcredit[]" required>
   <label for="subjname">Subject Score:</label>
   <input type="number" name="subjscore[]" 
       min = "0"
       max = "100"
       required><br><br><br>
  <?php
  }
  ?>


<input type="submit" name="submit" value="Next">
<input class="button" type="button" onclick="window.location.replace('http://localhost/ITM/hello.html')" value="Cancel" />

 </form>
 </div>
 </body>
</html>