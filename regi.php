<!DOCTYPE html>
<html>
    <head>
        <title>reg</title>
        <link rel="stylesheet" href="regi.css">
    </head>
    <body>
        <div>
            <?php
            if(isset($_POST['create']))
            {
                echo 'user submitted';
            }
            ?>
        </div>
        <div>
            <p class="head">REGISTRATION FORM<p><br><br>
            <form>
                <label class="id">ID</label><input class="id1" type="number" name="id"><br><br><br>
                <label class="name">Name</label><input class="name1" type="text" name="name"><br><br><br>
                
                <label class="mob">Mobile number</label><input class="mob1" type="number" name="Mobile"><br><br><br>
                <p class="add">Address:<p> <textarea class="add" name="Address" rows="5" cols="40"></textarea>
  <br><br><br>

                <p class="gen">Gender:</p><br><br>
  <input class="female" type="radio" name="gender" value="female">Female<br><br>
  <input class="male" type="radio" name="gender" value="male">Male<br><br>
  <input class="other" type="radio" name="gender" value="other">Other<br><br><br>
  <input class="sub" type="submit" name="create" value="sign up"> 
            </form>
        </div>
    </body>
</html>