<?php session_start();
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


        <title>FSP::Register | Contact Details</title>
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
                                REGISTER - Contact Details
                            </h2>
                        </div>
                    </div>

                    <div style="margin-top: 1rem; width: 100%;">
                    </div>

                    <form method="post" action="../usr/address/create_address.php" onsubmit="return validateData();">   
                        <!--First Plate-->
                        <div class="wrapperFields">

                            <div class="row">
                                <div class="col-sm-12" >                        
                                    <div class="card-body">
                                        <label style="background-color: navy; padding: 0.25em; border-radius: 5px; width:98.5%; text-align: center;"><h4 style="font-family: Ubuntu;color:yellow;">Current Address</h4></label>
                                    </div>
                                </div>                                    
                            </div>
                            <div class="row">
                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">Suburb:</h4>
                                        <input style="font-size: 13px;" class="form-control" type="text" name="suburbname" id="suburb" placeholder="Suburb">
                                    </div>
                                </div>

                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">City:</h4>
                                        <input style="font-size: 13px;" class="form-control" type="text" name="cityname" id="city" placeholder="City">
                                    </div>
                                </div>
                            </div>

                            <!--Second Row-->
                            <div class="row">    

                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">Province:</h4>
                                            <?php
                                            $stmt = Helper::getProvinces();
                                            ?>
                                        <select name='province' id='optProvince' class='form-control' style="width: 85%; margin-left: 0.33em;">
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
                                        <h4 style="font-family: Ubuntu;color:navy;">Country</h4>
                                        <!--<input style="font-size: 13px;" class="form-control" type="text" name="email" id="emailaddress" placeholder="Email Address">-->
<?php
$arr = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
//$selected='South African';
?>
                                        <select name='cntry' id='country' class='form-control' style="width: 85%; margin-left: 0.33em;">
                                            <option value=''>--- Select One ---</option>
                                            <?php
                                            foreach ($arr as $item) {
                                                echo "<option value='$item'>$item</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">Residence Type:</h4>
                                        <select name='ResType' id='optResType' class='form-control' style="width: 85%; margin-left: 0.33em;">
                                            <option value=''>--- Select One ---</option>
                                            <option value='RS'>Suburb</option>
                                            <option value='CO'>Complex</option>
                                            <option value='ES'>Estate</option>
                                            <option value='SH'>Smallholding</option>
                                            <option value='OT'>Other</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">Ownership:</h4>
                                        <select name='Ownership' id='optOwnership' class='form-control' style="width: 85%; margin-left: 0.33em;">
                                            <option value=''>--- Select One ---</option>
                                            <option value='O'>Owner</option>
                                            <option value='T'>Tenant</option>
                                            <option value='D'>Dependent</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">Since:</h4>
                                        <input style="font-size: 13px;width: 86%;" value ="<?php echo date('Y-m-d');?>" class="form-control" type="date" name="dos" id="startdate">
                                            
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!--End First Plate-->

                        <!--Second Plate-->
                        <div class="wrapperFields">

                            <div class="row">
                                <div class="col-sm-12" >                        
                                    <div class="card-body">
                                        <label style="background-color: navy; padding: 0.25em; border-radius: 5px; width:98.5%; text-align: center;"><h4 style="font-family: Ubuntu;color:yellow;">Previous Address</h4></label>
                                    </div>
                                </div>                                    
                            </div>
                            <div class="row">
                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">Suburb:</h4>
                                        <input style="font-size: 13px;" class="form-control" type="text" name="psuburbname" id="psuburb" placeholder="Suburb">
                                    </div>
                                </div>

                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">City:</h4>
                                        <input style="font-size: 13px;" class="form-control" type="text" name="pcityname" id="pcity" placeholder="City">
                                    </div>
                                </div>
                            </div>

                            <!--Second Row-->
                            <div class="row">    

                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">Province:</h4>
                                            <?php
                                            $stmt = Helper::getProvinces();
                                            ?>
                                        <select name='pprovince' id='poptProvince' class='form-control' style="width: 85%; margin-left: 0.33em;">
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
                                        <h4 style="font-family: Ubuntu;color:navy;">Country</h4>
                                        <!--<input style="font-size: 13px;" class="form-control" type="text" name="email" id="emailaddress" placeholder="Email Address">-->
                                        <?php
                                        $arr = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
//$selected='South African';
                                        ?>
                                        <select name='pcntry' id='pcountry' class='form-control' style="width: 85%; margin-left: 0.33em;">
                                            <option value=''>--- Select One ---</option>
                                            <?php
                                            foreach ($arr as $item) {
                                                echo "<option value='$item'>$item</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">For (Years):</h4>
                                        <select name='for' id='optFor' class='form-control' style="width: 85%; margin-left: 0.33em;">
                                            <option value=''> --- Select One --- </option>
                                            <option value='0'>under 1</option>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                            <option value='6'>over 5</option>
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of Second Plate-->      
                        <!--Third Plate-->
                        <div class="wrapperFields">

                            <div class="row">
                                <div class="col-sm-12" >                        
                                    <div class="card-body">
                                        <label style="background-color: navy; padding: 0.25em; border-radius: 5px; width:98.5%; text-align: center;"><h4 style="font-family: Ubuntu;color:yellow;">Telephone Details:</h4></label>
                                    </div>
                                </div>                                    
                            </div>
                            <div class="row">
                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">Home Phone:</h4>
                                        <input style="font-size: 13px;" class="form-control" type="text" name="hphone" id="homephone" placeholder="HomePhone">
                                    </div>
                                </div>

                                <div class="col-sm-6">                        
                                    <div class="card-body">
                                        <h4 style="font-family: Ubuntu;color:navy;">Work Phone:</h4>
                                        <input style="font-size: 13px;" class="form-control" type="text" name="wphone" id="workphone" placeholder="WorkPhone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Third Plate-->
                        
                        <div class="wrapperFields">
                            <div class="row" style='height: 7.5vh;'>
                                <div class="col-sm-12">                  
                                    <div class="card-body rightaligned">                                        
                                        <button  style="background-color: navy;width: 120px;height: 50px; font-size: 1.5em;border-radius: 4px; color: orangered;">Next</button>
                                    </div>
                                </div> 
                            </div>
                        </div> 
                        
                    </form>                           
                </div>
            </div>
        </div>       
    </body>
</html>
