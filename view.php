<html>
<body>


<p align="center">
<font size= "8">


<form action="view.php" method="post">
<input type="submit" name="submit" value="View_voltage">
</form>

</p>
<?php

include 'connect.php';

if(isset($_POST['submit']))
{
echo "Volt:"." ". $read."<br/>";
}
 
 
 

?>

<a href ="index.html">return</a>


</body>
</html>