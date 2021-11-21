<?php 
    session_start();
    $login_session_duration = 60; // 1 minute 
    
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
        <link href="css/portfolioStyles.css" rel="stylesheet">
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
         
        <div class="mainDiv">                      

            <div class="container"style="font-family: Ubuntu;">
                <div class="media-container-column mbr-white col-lg-12 col-md-12" style="margin-top: -1em;">
                    
                    <form method="post" action="../usr/employment/create_employment.php" onsubmit="return validateData();">   
                        <!--First Plate-->
                        <div class="wrapperFields">
                            
                            <div class="row">v      
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
                       
                        </div>
                        
                    </form>                           
                </div>
            </div>
        </div>       
    </body>
</html>
