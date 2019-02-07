<!DOCTYPE html>
<html>
<head>
<style>
</style>
<title>Page Title</title>
</head>
<body>
<center style="color:green"><font size="16">SET YOUR PATH</h1>
</font>
</center>
<center>
<form method="post">
<fieldset>
<!--to create a  seperate fieldspace-->
<legend>Trip Information
</legend><!--inorder to give name-->
Enter your from adress :<br>
<input type="text" name="FROM" autofocus r >
<br>
enter your to address :<br>
<input type="text" name="TO" required>
<br>
date of traveling :<br>
<input type="date" name="date">
<br>
time of travelling :<br>
<input type="time" name="time">

 <input type="submit"name="submit" value="path">
</form><br>
<br>
</fieldset>
</center>
<div align='center' style="color:blue;font-size:30px;font-family:calibri ;">
<?php
    if(isset($_POST['submit']))
    {
       $fro = $_POST['FROM'];
 $t = $_POST['TO'];
      $d=$_POST['date'];
     $t=$_POST['time'];
        echo "your trip is from ".$fro;
     echo "       to ".$t;
   echo  "         on  " .$d;
echo "          at  " .$t;
}
?>
</div>
</center>
</body>
</html>
