<?php
$s=$_POST['n1'];
$dbcnx=mysqli_connect("localhost","root","","python");
$sql="select * from stud where name='".$s."'";
$result=mysqli_query($dbcnx,$sql);
?>
<form method="post" action="update.php">
<?php
while($row1=mysqli_fetch_array($result))
{
echo "Student name <input type='text' name='n1' value='";
echo $row1['name'];
echo "'> <br>";
echo "Marks<input type='text' name='n1' value='";
echo $row1['marks'];
echo "'><br>";
echo "class<input type='text' name='n1' value='";
echo $row1['class'];
echo "'><br>";
}
?>
<input type="submit" value="update">
</form>
