<?php
 session_start();
 $_SESSION['xxxname'] = $_POST['fname'];
?>

<?php
 if(empty($_SESSION['xxxname']))
 {
  echo "Please Enter Your Name !!! Not set yet";
 }
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
<center>
 <h1> Welcome <?php echo ucwords ($_POST["fname"]) ?>! <br></h1>
 <div>
 <form action="numsubject.php" method="post">
       <h3>How many subjects do you take?</h3>
       <input type="number" name="numsubj" placeholder="no subj" size="10"
       min = "1"
       max = "10"
       value = "number subject..."  >
</label>
<br><br><br>

       <input type="submit" name="submit" value="Next">
       <input type="submit" name="cancel" value="Cancel" formaction="hello.html">
 </form>
 </div>
</center>

 </body>
</html>