<html>
<form action="" method="post">

<label for="num1">First nmbr:</label><br>
<input type = "text" id="num1" name="num1" value="5"> <br>
<label for="num2">second nmbr:</label><br>
<input type = "text" id="num2" name="num2" value="45"> <br>
<input  type="submit" name="submit1" value="Add">  
<input  type="submit" name="submit2" value="substract"> 
<input  type="submit" name="submit3" value="multiply"> 
<input  type="submit" name="submit4" value="division">  
</form>
</html>
<?php
if(isset($_POST['submit1']))
{
$var1= $_POST['num1'];
$var2= $_POST['num2'];
$sum= $var1+$var2;
echo "The addition of $var1 and $var2 is: ".$sum;
}

if(isset($_POST['submit2']))
{
$var1= $_POST['num1'];
$var2= $_POST['num2'];
$sub= $var1-$var2;
echo "The substraction of $var1 and $var2 is: ".$sub;
}

if(isset($_POST['submit3']))
{
$var1= $_POST['num1'];
$var2= $_POST['num2'];
$mul= $var1*$var2;
echo "The multiply of $var1 and $var2 is: ".$mul;
}

if(isset($_POST['submit4']))
{
$var1= $_POST['num1'];
$var2= $_POST['num2'];
$div= $var1/$var2;
echo "The division of $var1 and $var2 is: ".$div;
}
?>  









