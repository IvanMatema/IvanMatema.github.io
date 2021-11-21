<?php session_start();?>
<!DOCTYPE html>
<html>    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/royal-logo.jpeg" type="image/x-icon">
        <meta name="description" content="">


        <title>FSP::Register | Personal Details</title>
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
    <div class="mainDiv">
            <header id="header">
            <div id="leftheaderdiv">               
               <h2 style="display:flex;vertical-align: bottom;"><label style="border-radius: 3px;border-style:solid; border-width:1px; border-color:white;padding:5px; color:white">FinServPro</label></h2>
            </div>
            <div id="rightheaderdiv"> 
                <label style="color: white;font-family: Ubuntu;"><?php echo $_SESSION['login'];?></label>&nbsp;
                <button  style="background-color: whitesmoke;width: 85px;height: 43px; font-size: 1.5em;border-radius: 3px;background-color: whitesmoke ; border-style: solid;border-width:1px; border-color:orangered;padding:10 15 10 15; color:black;">Home</button>
            </div>
            </header>            
                                       
                <div class="container"style="font-family: Ubuntu;">
                    <div class="media-container-column mbr-white col-lg-12 col-md-12" style="margin-top: -4em;">
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>
                                    REGISTER | Personal Details
                                </h2>
                            </div>
                        </div>
                        
                        <div style="margin-top: 1rem; width: 100%;">
                        </div>
                            
                        <div class="wrapperFields">
                            <form method="post" action="../usr/identity/create_identity.php" onsubmit="return validateData();"> 
                                <!--first-->
                                <div class="row">
                                    <div class="col-sm-6">                        
                                            <div class="card-body">
                                                <h4 style="font-family: Ubuntu;color:navy;">Name(s):</h4>
                                                <input style="font-size: 13px;" class="form-control" type="text" name="firstname" id="fname" placeholder="Firstname(s)">
                                            </div>
                                    </div>

                                    <div class="col-sm-6">                        
                                            <div class="card-body">
                                                <h4 style="font-family: Ubuntu;color:navy;">Surname</h4>
                                                <input style="font-size: 13px;" class="form-control" type="text" name="surname" id="sname" placeholder="Surname">
                                            </div>
                                    </div>
                                </div>
                                
                                <!--1.5 Row-->
                                <div class="row">
                                    <div class="col-sm-6">                        
                                         <div class="card-body">
                                            <h4 style="font-family: Ubuntu;color:navy;">Alias</h4>
                                            <input style="font-size: 13px;" class="form-control" type="text" name="alias" id="aka" placeholder="Alias">
                                        </div>   
                                    </div>
                                    <div class="col-sm-6">                        
                                        <div class="card-body">
                                            <h4 style="font-family: Ubuntu;color:navy;">Date of Birth</h4>
                                            <input style="font-size: 13px;width: 86%;" value ="<?php echo date('Y-m-d');?>" class="form-control" type="date" name="dob" id="dateofbirth">
                                        </div>  
                                    </div>
                                </div>
                                
                                <!--Second Row-->
                                <div class="row">    

                                    <div class="col-sm-6">                        
                                            <div class="card-body">
                                                <h4 style="font-family: Ubuntu;color:navy;">Identification Type:</h4>
                                                <?php
                                                    $arr = array('SA Id','Foreign Id','Passport','Other');
                                                    //$selected='South African';
                                                    ?>
                                                        <select name='idtype' id='optId' class='form-control' style="width: 85%; margin-left: 0.33em;">
                                                            <option value=''>--- Select One ---</option>
                                                            <option value='SI'>South African Id</option>
                                                            <option value='SP'>South African Passport</option>
                                                            <option value='FI'>Foreign Id</option>
                                                            <option value='FP'>Foreign Passport</option>
                                                            <option value='OT'>Other</option>
                                                    
                                                        </select>
                                            </div>
                                    </div>
                                    <div class="col-sm-6">                        
                                            <div class="card-body">
                                                <h4 style="font-family: Ubuntu;color:navy;">Id Number</h4>
                                                <input style="font-size: 13px;" class="form-control" type="text" name="idnumber" id="idnum" placeholder="Id Number">
                                            </div>
                                    </div>
                                </div>
                                <!--third-->
                                <div class="row">
                                    <div class="col-sm-6">                        
                                            <div class="card-body">
                                                <h4 style="font-family: Ubuntu;color:navy;">Nationality:</h4>
                                                <!--<input style="font-size: 13px;" class="form-control" type="text" name="email" id="emailaddress" placeholder="Email Address">-->
                                                <?php
                                                    $arr = array('Afghan','Albanian','Algerian','American','Andorran','Angolan','Antiguans','Argentinean','Armenian','Australian','Austrian','Azerbaijani','Bahamian','Bahraini','Bangladeshi','Barbadian','Barbudans','Batswana','Belarusian','Belgian','Belizean','Beninese','Bhutanese','Bolivian','Bosnian','Brazilian','British','Bruneian','Bulgarian','Burkinabe','Burmese','Burundian','Cambodian','Cameroonian','Canadian','Cape Verdean','Central African','Chadian','Chilean','Chinese','Colombian','Comoran','Congolese','Costa Rican','Croatian','Cuban','Cypriot','Czech','Danish','Djibouti','Dominican','Dutch','East Timorese','Ecuadorean','Egyptian','Emirian','Equatorial Guinean','Eritrean','Estonian','Ethiopian','Fijian','Filipino','Finnish','French','Gabonese','Gambian','Georgian','German','Ghanaian','Greek','Grenadian','Guatemalan','Guinea-Bissauan','Guinean','Guyanese','Haitian','Herzegovinian','Honduran','Hungarian','Icelander','Indian','Indonesian','Iranian','Iraqi','Irish','Israeli','Italian','Ivorian','Jamaican','Japanese','Jordanian','Kazakhstani','Kenyan','Kittian and Nevisian','Kuwaiti','Kyrgyz','Laotian','Latvian','Lebanese','Liberian','Libyan','Liechtensteiner','Lithuanian','Luxembourger','Macedonian','Malagasy','Malawian','Malaysian','Maldivan','Malian','Maltese','Marshallese','Mauritanian','Mauritian','Mexican','Micronesian','Moldovan','Monacan','Mongolian','Moroccan','Mosotho','Motswana','Mozambican','Namibian','Nauruan','Nepalese','Netherlander','New Zealander','Ni-Vanuatu','Nicaraguan','Nigerian','Nigerien','North Korean','Northern Irish','Norwegian','Omani','Pakistani','Palauan','Panamanian','Papua New Guinean','Paraguayan','Peruvian','Polish','Portuguese','Qatari','Romanian','Russian','Rwandan','Saint Lucian','Salvadoran','Samoan','San Marinese','Sao Tomean','Saudi','Scottish','Senegalese','Serbian','Seychellois','Sierra Leonean','Singaporean','Slovakian','Slovenian','Solomon Islander','Somali','South African','South Korean','Spanish','Sri Lankan','Sudanese','Surinamer','Swazi','Swedish','Swiss','Syrian','Taiwanese','Tajik','Tanzanian','Thai','Togolese','Tongan','Trinidadian or Tobagonian','Tunisian','Turkish','Tuvaluan','Ugandan','Ukrainian','Uruguayan','Uzbekistani','Venezuelan','Vietnamese','Welsh','Yemenite','Zambian','Zimbabwean');
                                                    //$selected='South African';
                                                    ?>
                                                        <select name='national' id='nationality' class='form-control' style="width: 85%; margin-left: 0.33em;">
                                                            <option value=''>--- Select One ---</option>
                                                    <?php  
                                                        foreach($arr as $item){
                                                            echo "<option value='$item'>$item</option>";
                                                        }
                                                        
                                                    ?>
                                                        </select>
                                            </div>
                                    </div>
                                    <div class="col-sm-6"> 
                                            <div class="card-body">
                                                <h4 style="font-family: Ubuntu;color:navy;">Citizenship:</h4>
                                                <!--<input style="font-size: 13px;" class="form-control" type="text" name="email" id="emailaddress" placeholder="Email Address">-->
                                                <?php
                                                    $arr = array('Afghan','Albanian','Algerian','American','Andorran','Angolan','Antiguans','Argentinean','Armenian','Australian','Austrian','Azerbaijani','Bahamian','Bahraini','Bangladeshi','Barbadian','Barbudans','Batswana','Belarusian','Belgian','Belizean','Beninese','Bhutanese','Bolivian','Bosnian','Brazilian','British','Bruneian','Bulgarian','Burkinabe','Burmese','Burundian','Cambodian','Cameroonian','Canadian','Cape Verdean','Central African','Chadian','Chilean','Chinese','Colombian','Comoran','Congolese','Costa Rican','Croatian','Cuban','Cypriot','Czech','Danish','Djibouti','Dominican','Dutch','East Timorese','Ecuadorean','Egyptian','Emirian','Equatorial Guinean','Eritrean','Estonian','Ethiopian','Fijian','Filipino','Finnish','French','Gabonese','Gambian','Georgian','German','Ghanaian','Greek','Grenadian','Guatemalan','Guinea-Bissauan','Guinean','Guyanese','Haitian','Herzegovinian','Honduran','Hungarian','Icelander','Indian','Indonesian','Iranian','Iraqi','Irish','Israeli','Italian','Ivorian','Jamaican','Japanese','Jordanian','Kazakhstani','Kenyan','Kittian and Nevisian','Kuwaiti','Kyrgyz','Laotian','Latvian','Lebanese','Liberian','Libyan','Liechtensteiner','Lithuanian','Luxembourger','Macedonian','Malagasy','Malawian','Malaysian','Maldivan','Malian','Maltese','Marshallese','Mauritanian','Mauritian','Mexican','Micronesian','Moldovan','Monacan','Mongolian','Moroccan','Mosotho','Motswana','Mozambican','Namibian','Nauruan','Nepalese','Netherlander','New Zealander','Ni-Vanuatu','Nicaraguan','Nigerian','Nigerien','North Korean','Northern Irish','Norwegian','Omani','Pakistani','Palauan','Panamanian','Papua New Guinean','Paraguayan','Peruvian','Polish','Portuguese','Qatari','Romanian','Russian','Rwandan','Saint Lucian','Salvadoran','Samoan','San Marinese','Sao Tomean','Saudi','Scottish','Senegalese','Serbian','Seychellois','Sierra Leonean','Singaporean','Slovakian','Slovenian','Solomon Islander','Somali','South African','South Korean','Spanish','Sri Lankan','Sudanese','Surinamer','Swazi','Swedish','Swiss','Syrian','Taiwanese','Tajik','Tanzanian','Thai','Togolese','Tongan','Trinidadian or Tobagonian','Tunisian','Turkish','Tuvaluan','Ugandan','Ukrainian','Uruguayan','Uzbekistani','Venezuelan','Vietnamese','Welsh','Yemenite','Zambian','Zimbabwean');
                                                    //$selected='South African';
                                                    ?>
                                                        <select name='citizen' id='citizenship' class='form-control' style="width: 85%; margin-left: 0.33em;">
                                                            <option value=''>--- Select One ---</option>
                                                    <?php  
                                                        foreach($arr as $item){
                                                            echo "<option value='$item'>$item</option>";
                                                        }
                                                        
                                                    ?>
                                                        </select>
                                            </div>
                                    </div>
                                </div>

                                <!--Fourth Row-->
                                <div class="row">
                                    <div class="col-sm-6">                        
                                            <div class="card-body">
                                                <h4 style="font-family: Ubuntu;color:navy;">Race:</h4>
                                               
                                                        <select name='race' id='optRace' class='form-control' style="width: 85%; margin-left: 0.33em;">
                                                            <option value=''>--- Select One ---</option>
                                                            <option value='B'>Black</option>
                                                            <option value='C'>Coloured</option>
                                                            <option value='C'>Asian</option>
                                                            <option value='W'>White</option>
                                                            <option value='I'>Indian</option>
                                                            
                                                            <option value='U'>Unspecifed</option>
                                                        </select>
                                            </div>
                                    </div>
                                    <div class="col-sm-6">                        
                                            <div class="card-body">
                                                <h4 style="font-family: Ubuntu;color:navy;">Gender:</h4>
                                                
                                                        <select name='gender' id='optGender' class='form-control' style="width: 85%; margin-left: 0.33em;">
                                                            <option value=''>--- Select One ---</option>
                                                            <option value='M'>Male</option>
                                                            <option value='F'>Female</option>
                                                            <option value='T'>Transgender</option>
                                                            <option value='U'>Unspecified</option>                                                   
                                                        </select>
                                            </div>
                                    </div>
                                </div>
                                <!--Sixth Row-->
                                <div class="row">
                                    <div class="col-sm-6">                        
                                        <div class="card-body">
                                                
                                        </div>
                                    </div>
                                    <div class="col-sm-6">                        
                                            <div class="card-body rightaligned">
                                                <h4 style="font-family: Ubuntu;color:navy;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            </h4>
                                                <button  style="background-color: navy;width: 120px;height: 50px; font-size: 1.5em;border-radius: 4px; color: orangered;">Next</button>
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
