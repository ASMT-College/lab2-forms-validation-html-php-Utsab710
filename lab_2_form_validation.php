<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="get" onsubmit="return validateForm()">
    <div>Signup</div>
    <div>Username:<input type="text" name="un" id="un" required minLength="6"></div>
    <div>Password:<input type="password" name="pw" id="pw" required ></div>
    <div>Email1:<input type="email1" name="email1" name="em" required ></div>
    
    <div>Email2(JS validation):<input type="text" name="email2" id="email2" required ></div>
    <div id="erroremail"></div>
    <div><input type="submit" value="Signup" name="submit"></div>


</form>
<script>
    function validateForm(){
        var emailRegex=/[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/;
        var email2=document.getElementById('email2').value;
        if(emailRegex.test(email2)){
            return true;
        }else{
            document.getElementById('erroremail').innerHTML="Invalid email";
            return false;
        }
    }
</script>
</body>

</html>