<?php
    session_start();
    //$session_value=(isset($_SESSION['loggedin']))?$_SESSION['loggedin']:''; 
    //session_destroy();
    if(isset($_SESSION['loggedin']))
    {
        $session_value = $_SESSION['loggedin'];
        //$_SESSION['login'] = $session_value;
        $_SESSION['logged_time'] = time();
        echo $_SESSION['logged_time'];
    }
    else
    {
        $session_value = '';
    }
    
?>

<html lang="en">
<head>
<title>Login</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/registerStyles.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script>
    function reload(){	        
        var container;
        var content;
        container = document.getElementById('login');
        content = container.innerHTML;
        container.innerHTML= content; 

        container = document.getElementById('pwd');
        content = container.innerHTML;
        container.innerHTML= content; 
     }
     function validateData(){
        reload();      
        
        var login = $('#login').val();
        var pwd = $('#pwd').val();

        if(login ==='' | pwd ===''){
            $("#errMessage").html('<center>Email Address or password missing. Please supply these fields and try again.</center>');
            $("#errMessage").css("display", "");
            sessionStorage.clear();
            return false;
        }
        return true;
    }
    
    function logonStatus(){       
        var myvar='<?php echo $session_value;?>';
       //alert(myvar);
        if(myvar=='null'){ 
            $("#errMessage").html('<center>Incorrect username & password combination.</center>');
            $("#errMessage").css("display", "");
            sessionStorage.clear();
        }    
          
    }
   
</script>

</head>
<body onload="logonStatus()">
    <div class="loginDiv">
        <header id="header">
            <div id="leftheaderdiv">
               <h2 style="display:flex;vertical-align: middle;"><label style="border-radius: 3px;border-style:solid; border-width:1px; border-color:white;padding:5px; color:white">FinServPro</label></h2>
            </div>
            <div id="rightheaderdiv">
                <h4 style="display:flex;vertical-align: bottom;"><a type="button" style="text-decoration-line: none;border-radius: 3px;background-color: steelblue ; border-style: solid;border-width:1px; border-color:steelblue;padding:10 15 10 15; color:black;" href="index.html">Home</a></h4>
            </div>

            <div class="wrapper fadeInDown">
                <br>
                <br>
                <br>
                <br>
                <br>
                <div id="formContent">
                    <div class="fadeIn first">
                        <div class="divHeader">SERVICE PROVIDER LOGIN</div>
                        
                    </div>
                    <form method="post" action="../usr/auth_fspusr.php" onsubmit="return validateData();">
                      <br>
                      <input type="text" class="fadeIn second" id="login" name="login" placeholder="email address">
                      <input type="password" class="fadeIn third" id="pwd" name="pwd" placeholder="password">
                      <input type="hidden" id="flag" name="flg" value="attempt">
                      <input type="submit" class="fadeIn fourth" value="Log In">
                      <br>
                        <label id="errMessage"  style="border:none;margin-top:0.4rem;width:100%;height:2rem; color:white;background-color:red;display:none;"></label>
                    </form>
                    <div id="formFooter">
                        <a class="underlineHover" href="#">Forgot Password?</a>
                    </div>
                </div>
            </div> 
        </header> 
    </div>
</body>

</html>
 


