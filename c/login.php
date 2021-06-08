<h1 "color:blue">Please enter your Username and password</h1>
<br>
<form name="login" method="post" action="index.php?page=admin">
    <p>Username: <input name="username" type="text" maxlength=30 /></p><br>
    <p>Password: <input name="password" type="password" maxlength=30 /></p>
    <br>
    <?php 
	if (isset($_GET['error'])) {
		?>
    <p><span class="error">Incorrect username or password!</span></p>
    <?php

}
?>

    <p><input type="submit" name="login" value="Submit" /></p>
</form> 