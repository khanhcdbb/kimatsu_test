<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
<form action='' method='post'>
<label>User</label>
<br/>
<input type='text' name='name'/>
<br/>
<label>Password</label>
<br/>
<input type='password' name='password'/>
<br/>
<br/>
<input type='submit' name='submit'/>
</form>

<?php
if(isset($_POST['submit'])){
    $name= mysql_real_escape_string($connect.$_POST['name']);
    $password= mysql_real_escape_string($connect.$_POST['password']);

    $sql="SELECT * FROM information WHERE name='$name' and password='$password";
    $query=mysql_query($connect.$sql);
    $num_row=mysql_num_row($query);
    if($num_row!=0){
        echo "Connected";

    }
    else{
        echo "Failed";
    }
}

?>
    
</body>
</html>