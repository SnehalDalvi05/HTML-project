<?php
$un = $_GET["n1"];
$pwd = $_GET["p1"];

$db = mysqli_connect("localhost", "root", "", "validuser");
$sql = "select * from vuser";
$result = mysqli_query($db, $sql);

$validUser = false;

while ($r = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    if (($un == $r['username']) && ($pwd == $r['password'])) {
        $validUser = true;
        break;
    }
}
if ($validUser)
    header("Location: http://localhost/website/wonders.html");
 else
    header("Location: http://localhost/website/login1.html");

?>