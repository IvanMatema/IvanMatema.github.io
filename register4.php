<?php 
    session_start();
    $login_session_duration = 60; // 1 minute 
    if($_SESSION['logged_time']){
        
       if((time() - $_SESSION['logged_time']) > $login_session_duration){ 
          //echo 'session expired';
          header('Location: ../_ui/login.php');
       }else{
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


        <title>FSP::Register | Employment Details</title>
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
        </script>
    </head>
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
} ?></label>&nbsp;
                <button  style="background-color: whitesmoke;width: 85px;height: 43px; font-size: 1.5em;border-radius: 3px;background-color: whitesmoke ; border-style: solid;border-width:1px; border-color:orangered;padding:10 15 10 15; color:black;">Home</button>
            </div>
        </header>     
        <div class="mainDiv">                      

            <div class="container"style="font-family: Ubuntu;">
                <div class="media-container-column mbr-white col-lg-12 col-md-12" style="margin-top: -1em;">

                    <div class="row">
                        <div class="col-sm-12">
                            <h2>
<!--                                REGISTER - Contact Details-->
                            </h2>
                        </div>
                    </div>

                    <div style="margin-top: 1rem; width: 100%;">
                    </div>

                    <form method="post" action="../usr/employment/create_employment.php" onsubmit="return validateData();">   
                        <!--First Plate-->
                        <div class="wrapperFields">

                            <div class="row">
                                <div class="col-sm-12" >                        
                                    <div class="card-body">
                                        <label style="background-color: navy; padding: 0.25em; border-radius: 5px; width:98.5%; text-align: center;"><h4 style="font-family: Ubuntu;color:yellow;">Employment Details</h4></label>
                                    </div>
                                </div>                                    
                            </div>
                            <div class="row">
                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">Employment Type:</h4>
                                        <?php
                                            $stmt = Helper::getEmploymentTypes();
                                            ?>
                                        <select name='emptypes' id='eTypes' class='form-control' style="width: 85%; margin-left: 0.33em;">
                                            <option value=''>--- Select One ---</option>
                                            <?php
                                            while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                                                echo "<option value='$row[0]'>$row[1]</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">Industry:</h4>
                                        <?php
                                            $stmt = Helper::getIndustries();
                                            ?>
                                        <select name='industries' id='ind' class='form-control' style="width: 85%; margin-left: 0.33em;">
                                            <option value=''>--- Select One ---</option>
                                            <?php
                                            while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                                                echo "<option value='$row[0]'>$row[1]</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--Second Row-->
                            <div class="row">    

                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">Start Date:</h4>
                                        <input style="font-size: 13px;width: 86%;" value ="<?php echo date('Y-m-d');?>" class="form-control" type="date" name="dos" id="startdate">
                                    </div>
                                </div>
                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">Job Title</h4>
                                        <input style="font-size: 13px;" class="form-control" type="text" name="jobtitle" id="jtitle" placeholder="Job Title">
                                    </div>
                                </div>
                            </div>
                             
                            <!--Third Row-->
                            <div class="row">    

                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">Income Sources:</h4>
                                        <select id="is" name="incomesources" multiple size="2"  class='form-control' style="width: 85%; margin-left: 0.33em;"> 
                                            <option value="BO">BONUS</option>
                                            <option value="CM">COMMISSION</option>
                                            <option value="DV">DIVIDENDS</option>                                            
                                            <option value="PR">PROFIT</option>
                                            <option value="SA">SALARY</option>
                                            <option value="OT">OTHER</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">Monthly Income Band (USD):</h4>
                                        <select id="ib" name="incomeband" class='form-control' style="width: 85%; margin-left: 0.33em;"> 
                                            <option value="200">1-200</option>
                                            <option value="400">201-400</option>
                                            <option value="600">401-600</option>                                            
                                            <option value="800">601-800</option>
                                            <option value="999">801-999</option>
                                            <option value="1000">1000+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <!--End First Plate-->
                       
                        
                        <div class="wrapperFields">
                            <div class="row" style='height: 7.5vh;'>
                                <div class="col-sm-12">                  
                                    <div class="card-body rightaligned">                                        
                                        <button  style="background-color: navy;width: 120px;height: 50px; font-size: 1.5em;border-radius: 4px; color: orangered;">Next</button>
                                    </div>
                                </div> 
                            </div>
                        </div> 
                        <input type="hidden" id="0" name="bonus"/>
                        <input type="hidden" id="1" name="commission"/>
                        <input type="hidden" id="2" name="dividends"/>
                        <input type="hidden" id="3" name="profits"/>
                        <input type="hidden" id="4" name="salary"/>
                        <input type="hidden" id="5" name="other"/>
                    </form>                           
                </div>
            </div>
        </div>       
    </body>
</html>
