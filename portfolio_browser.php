<?php 
    session_start();
    $login_session_duration = 6000; // 1 minute 
    if (isset($_SESSION['logged_time'])) {
        if($_SESSION['logged_time']){
           if((time() - $_SESSION['logged_time']) > $login_session_duration){ 
              //echo 'session expired';
              header('Location: ../_ui/login.php');
            }
            else{
                
            }
    }
    else{
          //echo 'session alive'; all good here;
       }
    }
    include_once '../usr/Helper.php';
?>
<!DOCTYPE html>
<html>    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/royal-logo.jpeg" type="image/x-icon">
        <meta name="description" content="">


        <title>FSP::Portfolio Manager</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="css/registerStyles.css" rel="stylesheet">
        <link href="css/butn.css" rel="stylesheet">

        <!--date picker-->
        <link href="assets/datepicker/the-datepicker.css" rel="stylesheet" />
        <script src="assets/datepicker/the-datepicker.js"></script>

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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <!------ Include the above in your HEAD tag ---------->
        <script>
            function validateData(){
                for(i = 0; i < document.getElementById("is").options.length; i++)
                    if (document.getElementById("is").options[i].selected ){
                        document.getElementById(i.toString()).value = document.getElementById("is").options[i].value;
                    }
                    else{
                        document.getElementById(i.toString()).value = '';
                    }
                }
            function collapsePanels(){
                document.getElementById('cc').style.display="none";
                document.getElementById('fc').style.display="none";
            }    
            function togglePanel(pnl){   
                
                var x = document.getElementById(pnl);alert(x.style.display);
                if (x.style.display === "") {                                      
                    if (pnl==='fc')
                    {
                        $(document).ready(function() {
                            $("div#fc").removeClass("hidden");});
                    }                           
                }
                else 
                {
                    if (pnl==='fc')
                    {
                         $(document).ready(function() {
                            $("div#fc").addClass("hidden");});
                    }
                }
            }

        </script>
    </head>
<!--    <body onload="togglePanel('fc');togglePanel('cc');">-->
    <body>
        <header id="header">
            <div id="leftheaderdiv">               
                <h2 style="display:flex;vertical-align: bottom;"><label style="border-radius: 3px;border-style:solid; border-width:1px; border-color:white;padding:5px; color:white">FinServPro</label></h2>
            </div>
            <div id="rightheaderdiv"> 
                <label style="color: white;font-family: Ubuntu;"><?php if (session_status() === PHP_SESSION_NONE) {
                        echo 'logged out';
                    } else {
                        echo $_SESSION['login'];
                    } ?>
                </label>&nbsp;
                <a href="logout.php">Logout</a>
            </div>
        </header>     
        <div class="mainDiv">                      

            <div class="container"style="font-family: Ubuntu;">
                <div class="media-container-column mbr-white col-lg-12 col-md-12" style="margin-top: -1em;">
                    
                    <div style="margin-top: 0rem; width: 100%;">
                    </div>

<!--                    <form method="post" action="../usr/employment/create_employment.php" onsubmit="return validateData();">   -->
                        <!--First Plate-->
<!--                        <div class="wrapperFields">-->
                            <!--Fun Cover-->
                            <div class="row">
                                <div class="col-sm-12" >                        
                                   <label onclick="togglePanel('fc');" style="background-color: navy; padding: 0.25em; border-radius: 5px; width:100%; text-align: center;"><h4 style="font-family: Ubuntu;color:yellow;">Funeral Cover Details</h4></label>
                                   
                                </div>                                    
                            </div>
                            <div class="row hidden" id='fc'>
                                <div class="col-sm-12">                        
                                    <div class="card-body">
                                       <embed src="_fun_cover.php" style="width: 64.2vw;height:70vh;border-radius: 3px;"/>
                                    </div>
                                </div>
                            </div>

                            <!--Car Cover-->
                            <div class="row">
                                <div class="col-sm-12" >                        
                                    <div class="card-body">
                                        <label onclick="collapsePanels();togglePanel('cc');" style="background-color: navy; padding: 0.25em; border-radius: 5px; width:98.5%; text-align: center;"><h4 style="font-family: Ubuntu;color:yellow;">Car Insurance Details</h4></label>
                                    </div>
                                </div>                                    
                            </div>
                            <div class="row hidden" id='cc' style="align-items: center;margin-left: 0rem;" >
                                <div class="row">
                                    <div class="col-sm-12" style="align-items: center; ">                        
<!--                                        <div class="card-body">-->
                                                <embed src="_car_cover.php" style="width: 65vw;height:70vh;border-radius: 3px;"/>
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
<!--                        </div>-->
<!--                    </form>                           -->
                </div>
            </div>
        </div>       
    </body>
</html>
