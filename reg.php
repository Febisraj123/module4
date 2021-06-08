<?php

$ID = $name = $address = $mob = $email = $comment = $gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$ID = test_input($_POST["ID"]);
$name = test_input($_POST["name"]);
$comment = test_input($_POST["comment"]);
$mob = test_input($_POST["mob"]);
$email = test_input($_POST["email"]);




$gender = test_input($_POST["gender"]);
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<html>
<Link rel="stylesheet" href="reg.css">
<h2 class="regi">Registration Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p class="id">ID:</p> <input class="id1" type="number" name="ID"><br><br>
<p class="name">Name:</p><input class="name1" type="text" name="name"><br><br>
<p class="add">Address:</p> <textarea class="add1" name="comment" rows="5" cols="40"></textarea><br><br>

<p class="mob">Mobilenumber:</p> <input class="mob1" type="number" name="mob"><br><br>
<p class="email">E-mail:</p> <input class="email1" type="text" name="email"><br><br>
<br><br>



<p class="gen">Gender:</p>
<input class="fem1" type="radio" name="gender" value="female"><p class="fem">Female</p> <br><br>


<input class="male1" type="radio" name="gender" value="male"><p class="male">Male</p> <br><br>
<input class="other1" type="radio" name="gender" value="other"><p class="other">Other</p> <br><br>
<br><br>
<input class="sub" type="submit" name="submit" value="Submit">
</form>
<p class="lo"><a href="log1.html">admin.php</a></p>
</html>
<?php
echo "<h2>Your Input:</h2>";
echo $ID;
echo "<br>";
echo $name;
echo "<br>";
echo $comment;
echo "<br>";
echo $mob;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
?>
