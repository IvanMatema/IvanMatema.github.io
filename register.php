<?php
    session_start();
    //echo session_id();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/fsp_logo.png" type="image/x-icon">
        <meta name="description" content="">


        <title>FSP::Register | Login Details</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="css/registerStyles.css" rel="stylesheet">
        <link href="css/butn.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/tether/tether.min.css">
        <link rel="stylesheet" href="assets/dropdown/css/style.css">
        <link rel="stylesheet" href="assets/theme/css/style.css">
        <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
        <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Include the above in your HEAD tag -->
        <script>
           /* $(document).ready(function () {
            // Listen to submit event on the <form> itself!
            $('#main').submit(function (e) {
    
              e.preventDefault();
    
              var emailaddress = $("#emailaddress").val();
              var cellphone = $("#cellphone").val();
              
              //check emailaddress
              if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(emailaddress))
              {
                  $("#emailaddress").on("change keyup paste click", function(){
                    changebackground('emailaddress','white');})
                return true;
              }
              else{
                  $("#emailaddress").on("change keyup paste click", function(){
                    changebackground('emailaddress','hotpink');})
                //document.getElementById("emailaddress").style.background = 'red';
                //alert(document.getElementById("emailaddress").style.backgroundColor );
                return false;
              }
              
              function changebackground(elementId, color){
                  //alert(color);
                document.getElementById(elementId).style.backgroundColor = color ; 
              }
    
              //$.post("process.php", {
                //name: name,
                //email: email
              //}).complete(function() {
                  //console.log("Success");
                //});
            });
          });  */      
    
        $(document).ready(function(){
            $('label').inFieldLabels({fadeOpacity: 0.0});
        });
    </script>
    <script>
        function resetForm() {
            document.getElementById("wrongEmail").style.visibility = "hidden";
        } 
        function reload(){	        
            var container;
            var content;
            container = document.getElementById('emailaddress');
            content = container.innerHTML;
            container.innerHTML= content; 

            container = document.getElementById('cellphone');
            content = container.innerHTML;
            container.innerHTML= content; 
            
        }
        function CheckPassword(inputtxt, coninputtxt) 
        { 
            var passw=  /^[A-Za-z]\w{7,14}$/;
            if(inputtxt.value.match(passw)&& inputtxt===coninputtxt) 
            { 
                alert('Correct, try another...')
                return true;
            }
            else
            { 
                alert('Wrong...!')
                return false;
            }
        }
                
        function CheckCellphone(inputtxt) 
        { 
            alert(inputtxt.length)
            if (/0-9/.test(inputtxt)&&  (inputtxt.length===10))
            {
                return (true)
            }
            else{  alert("You have entered an invalid email address!")
                return (false)
            }
        }
        function validateData(){
            
            CheckEmail(document.getElementById('emailaddress').value);
            //CheckPassword(document.getElementById('password').value, document.getElementById('conpassword').value);
            //CheckCellphone(document.getElementById('cellphone').value);
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
        /*function myFunction() {
            //if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(document.getElementById("emailaddress").value))
            if ((document.getElementById("emailaddress").value)!='ivan.matema@gmail.com')
            {
                $('#emailaddress').css('background-color','red');                
            }
            else{
                //$('#emailaddress').css('background-color','#2AFF17');
                $('#emailaddress').css('background-color','white');
                                
            }
            
        }*/
        
        $(document).ready(function(){
                //Email Address
                $("#emailaddress").on("blur keyup change paste click ",function(){
                    if(document.getElementById("emailaddress").value.length<1){
                        document.getElementById("emailaddress").style.backgroundColor = "white";
                    }
                    else if(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(document.getElementById("emailaddress").value))
                    {                         
                        var v=document.getElementById("emailaddress").value+"x"
                        v=v.substring(0,v.length-1);
                        document.getElementById("emailaddress").value=v;                        
                        document.getElementById("emailaddress").style.backgroundColor = "white";
                                               
                    }
                    else
                    {
                        document.getElementById("emailaddress").style.backgroundColor = "pink";
                    }
                });
                //Cell Phone
                $("#cellphone").on("blur keyup change paste click ",function(){
                    if(document.getElementById("cellphone").value.length<1){
                        document.getElementById("cellphone").style.backgroundColor = "white";
                    }
                    else if (/^\s*(?:\+?(\d{1,3}))?[- (]*(\d{3})[- )]*(\d{3})[- ]*(\d{4})(?: *[x/#]{1}(\d+))?\s*$/.test(document.getElementById("cellphone").value))
                    {                         
                        var v=document.getElementById("cellphone").value+"x"
                        v=v.substring(0,v.length-1);
                        document.getElementById("cellphone").value=v;                        
                        document.getElementById("cellphone").style.backgroundColor = "white";
                                               
                    }
                    else
                    {
                        document.getElementById("cellphone").style.backgroundColor = "pink";
                    }
                });
                //Password
                $("#password").on("blur keyup change paste click ",function(){
                    if(document.getElementById("password").value.length<1){
                        document.getElementById("password").style.backgroundColor = "white";
                    }
                    else if (/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/.test(document.getElementById("password").value))
                    {                         
                        var v=document.getElementById("password").value+"x"
                        v=v.substring(0,v.length-1);
                        document.getElementById("password").value=v;                        
                        document.getElementById("password").style.backgroundColor = "white";
                                               
                    }
                    else
                    {
                        document.getElementById("password").style.backgroundColor = "pink";
                    }
                });
                //Confirm Password
                $("#conpassword").on("blur keyup change paste click ",function(){
                    if(document.getElementById("conpassword").value.length<1){
                        document.getElementById("conpassword").style.backgroundColor = "white";
                    }
                    else if (document.getElementById("password").value===document.getElementById("conpassword").value)
                    {                         
                        var v=document.getElementById("conpassword").value+"x"
                        v=v.substring(0,v.length-1);
                        document.getElementById("conpassword").value=v;                        
                        document.getElementById("conpassword").style.backgroundColor = "white";
                                               
                    }
                    else
                    {
                        document.getElementById("conpassword").style.backgroundColor = "pink";
                    }
                });
            });
          
         
    </script>
    </head>
    
    <body onload="resetForm()">
    <div class="mainDiv">
            <header id="header">
            <div id="leftheaderdiv">
               <h2 style="display:flex;vertical-align: bottom;"><label style="border-radius: 3px;border-style:solid; border-width:1px; border-color:white;padding:5px; color:white">FinServPro</label></h2>
            </div>
            <div id="rightheaderdiv">
                <h4 style="display:flex;vertical-align: bottom;"><button  style="background-color: whitesmoke;width: 85px;height: 43px; font-size: 1em;border-radius: 3px;background-color: steelblue ; border-style: solid;border-width:1px; border-color:steelblue;padding:10 15 10 15; color:black;" href="index.html">Home</button></h4>
            </div>
            </header>            
                                       
               <div class="container" style="font-family: Ubuntu;overflow-y:auto;color:white">
                <!--<div class="media-container-column mbr-white col-lg-12 col-md-12" style="margin-top: -4em;">-->
                    <div class="centered" style="margin-top: 1em;">
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>
                                    REGISTER | Login Details
                                </h2>
                            </div>
                        </div>
                        
                        <div style="margin-top: 1rem; width: 100%;">
                        </div>
                        
                       
                        <!--<form id="main" method="post">-->
                        <div class="wrapperFields"> 
                            <form method="post" action="../usr/create_usr.php"> <!--onsubmit="return validateData();"-->
                                <div class="row">
                                    <div class="col-sm-6">                        
                                            <div class="card-body">
                                                <h4 style="font-family: Ubuntu;color:white;opacity: 1;">Email Address:</h4>
                                                <input style="opacity: 1;font-size: 13px;" class="form-control" type="text" name="email" id="emailaddress" placeholder="Email Address" autocomplete="off">
                                            </div>
                                    </div>
                                    <div class="col-sm-5">                        
                                            <div class="card-body">
                                            </div>
                                    </div>
                                </div>

                                <!--Second Row-->
                                <div class="row">
                                    <div class="col-sm-6">                        
                                            <div class="card-body">
                                                <h4 style="opacity: 1;font-family: Ubuntu;color:white;">Cellphone Number:</h4>
                                                <input style="opacity: 1;font-size: 13px;" class="form-control" type="text" name="cellnum" id="cellphone" placeholder="Cellphone Number" autocomplete="off">
                                            </div>
                                    </div>

                                    <div class="col-sm-5">                        
                                            <div class="card-body">
                                            </div>
                                    </div>
                                </div>
                                <!--Third Row-->
                                <div class="row">
                                    <div class="col-sm-6">                        
                                            <div class="card-body">
                                                <h4 style="opacity: 1;font-family: Ubuntu;color:white;">Password:</h4>
                                                <input style="opacity: 1;font-size: 13px;" class="form-control" type="password" name="pwd" id="password" placeholder="Password" autocomplete="off">
                                            </div>
                                    </div>
                                    <div class="col-sm-5">                        
                                            <div class="card-body">
                                            </div>
                                    </div>
                                </div>
                                <!--Fourth Row-->
                                <div class="row">
                                    <div class="col-sm-6">                        
                                            <div class="card-body">
                                                <h4 style="opacity: 1;font-family: Ubuntu;color:white;">Confirm Password:</h4>
                                                <input style="opacity: 1;font-size: 13px;" class="form-control" type="password" name="conpwd" id="conpassword" placeholder="Confirm Password" autocomplete="off">
                                            </div>
                                    </div>
                                    <div class="col-sm-6">                        
                                            <div class="card-body rightaligned">
                                                <h4 style="opacity: 1;font-family: Ubuntu;color:navy;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            </h4>
                                                <button type="submit" style="opacity: 2;background-color: navy;width: 120px;height: 50px; font-size: 1.5em;border-radius: 4px; color: white;">Next</button>
                                            </div>
                                    </div>
                                </div>
                                <!--Buffer Row-->
                                <div class="row">
                                    <div class="col-sm-6">                        
                                            <div class="card-body">
                                                <input type="hidden"/>
                                            </div>
                                    </div>
                                    <div class="col-sm-5">                        
                                            <div class="card-body">
                                            </div>
                                    </div>
                                </div>
                            </form>
                        </div>   
                    </div>
                </div>
            </div>       
    </body>
</html>