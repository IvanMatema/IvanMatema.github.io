<?php
    
    include_once '../usr/Helper.php';
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v4.12.3, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/royal-logo.jpeg" type="image/x-icon">
    <meta name="description" content="">
    
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
    <style>
        @font-face {
            font-family: Roboto;
            src: url('fonts/Roboto/Roboto.ttf');
        }

        @font-face {
            font-family: Ubuntu;
            src: url('fonts/Ubuntu/Ubuntu.ttf');
        }
		
		.applyHeader1{
		    background-color:#0000ff;
		    color:yellow;
		    border-radius:5px;
		    margin:8px;
		    text-align:center;
		    font-size:1.4rem;
		    font-weight:bold;
		}
		
		.applyHeader2{
		    background-color:#0000ff;
		    color:yellow;
		    border-radius:5px;
		    margin:5px;
		    text-align:center;
		    font-size:1.2rem;
		}
		
	</style>

    <!--<script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("applyform").submit();
        }
    </script>-->
    
    
	<script>
		
	    var rowCount=0;
	    var errMessage;
	    
	    function reload(){	                  
                    var container;
                    var content;
                    container = document.getElementById('appDate');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('startDate');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('socName');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('title');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('fname');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('sname');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('dob');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('aas');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('idnum');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('email');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('phone');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('mobile');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('streetaddress');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('suburb');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('region');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                   /* container = document.getElementById('po');
                    content = container.innerHTML;
                    container.innerHTML= content; */

                    container = document.getElementById('dod');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('bankname');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('branchname');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('branchcode');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('accname');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('accnum');
                    content = container.innerHTML;
                    container.innerHTML= content; 

                    container = document.getElementById('acctype');
                    content = container.innerHTML;
                    container.innerHTML= content;                       
            }
	    
	    function validateData(){
	        //reload();
                
	       	var socname = $('#socName').val();
                var dob = $('#dep_dob').val();
                var gender = $('#dep_gender').val();
                var relation = $('#dep_relation').val();
                var po = $('#po').val();
                var dod = $('#dod').val();
                var defBank = $('#dBank').val();
                var bankname = $('#bankname').val();
                var branchcode  = $('#bcode').val();
                var accname = $('#aname').val();
                var accnum = $('#anumber').val();
                var acctype = $('#atype').val();
                var authDebit = $('#doac').val();
                var authAccess = $('#aacc').val();
                var unAuthAccess = $('#uacc').val();

                alert($('#dBank').is(":checked"));    

                if (!$('#doa').is(":checked")){
                    $("#errMessage").html('<center>Please acknowledge the declaration before proceeding..</center>');
                    $("#errMessage").css("display", "");
                    return false;
                }            
                if(po =='')
                {
                    $("#errMessage").html('<center>The payment option field is mandatory.</center>');
                    $("#errMessage").css("display", "");
                    return false;
                }
                if((po == 'Debit Order' && !$('#dBank').is(":checked")) && (bankname =='' | accname ==''  | accnum ==''  | acctype =='')){
                    $("#errMessage").html('<center>Debit Orders from an alternative account requires bank details to be completed.</center>');
                    $("#errMessage").css("display", "");
                    return false;
                }
                //create dummy dependents
                for(i=1;i<13;i++)
                {
                    if(!document.getElementById('dependent'+i)){
                        // the 2nd, 3rd and 4th column, will have textbox.
                        var depString="N/A" ;
                        var ele = document.createElement('input');
                        ele.setAttribute('type', 'hiddem');
                        ele.setAttribute('value', depString);
                        ele.setAttribute('text', depString);
                        ele.setAttribute('id', 'dependent'+i);
                        ele.setAttribute('name', 'dependent'+i);					
                    }
                }

                return true;
	    }
		
		function checkTable() {
			var arrHead = new Array();
			arrHead = ['', 'Dependent Details']; // table headers.

			var empTable = document.createElement('table');
			empTable.setAttribute('id', 'dependentsTable');  // table id.
			empTable.setAttribute('width', '100%'); 
			empTable.setAttribute('font-family', 'calibri');
			

			var tr = empTable.insertRow(-1);

			/*for (var h = 0; h < arrHead.length; h++) {
				var th = document.createElement('th'); // the header object.
				if(h==0)
					{th.setAttribute('style','color:red; font-size:14pt;border-bottom: 1px solid silver; width:7%;');}
				else
					{th.setAttribute('style','color:red; font-size:14pt;border-bottom: 1px solid silver;width:17%;');}
				th.innerHTML = arrHead[h];
				tr.appendChild(th);		
			}*/

			var div = document.getElementById('dependentsDiv');
			div.appendChild(empTable);    // add table to a container.
			
			//now make it invisible
//			var deps=document.getElementById('dependentsTable');
//			deps.style.display='none';
		}
                
		function addRow() {
                    if($('#fullname').val()=='' | $('#idnumber').val()=='' | $('#dep_dob').val()=='' | $('#dep_relation').val()=='')
                    {
                        alert('Some mandatory fields have been ommitted. Please rectify.');
                        return;
                    }
                    if(rowCount>11)
                    {
                            alert('Maximum number of dependents reached','Dependents');
                            return;
                    }
                    var id=document.getElementById('idnumber').value;
                    var nm=document.getElementById('fullname').value;
                    var dob=document.getElementById('dep_dob').value;
                    var gender=document.getElementById('dep_gender').value;
                    var relation=document.getElementById('dep_relation').value;
                    if(dob==='')
                    {
                            var utc = new Date().toJSON().slice(0,10);//.replace(/-/g,'/');

                            dob = utc;
                    }
                    var arrCols = new Array();
                    arrCols = ['','Dependent Details']; // table headers.

                    var empTab = document.getElementById('dependentsTable');

                    var rowCnt = empTab.rows.length;    // get the number of rows.
                    var tr = empTab.insertRow(rowCnt); // table row.
                    tr = empTab.insertRow(rowCnt);

                    for (var c = 0; c < arrCols.length; c++) {
                            var td = document.createElement('td');          // TABLE DEFINITION.

                            td.setAttribute('style','width:auto;cellpadding:10px;');				

                            td = tr.insertCell(c);

                            if (c == 0) {   // if its the first column of the table.
                                alert ('first col');
                                    td.setAttribute('style','width:5rem;');
                                    // add a button control.
                                    var button = document.createElement('input');

                                    // set the attributes.
                                    button.setAttribute('type', 'button');
                                    button.setAttribute('value', 'Remove');
                                    button.setAttribute('text-align','right');
                                    button.setAttribute('style','style=margin-top:0;width:5rem;height:2rem; color:yellow;background-color:steelblue;');

                                    // add button's "onclick" event.
                                    button.setAttribute('onclick', 'removeRow(this)');

                                    td.appendChild(button);
                            }
                            else {
                                    // the 2nd, 3rd and 4th column, will have textbox.
                                    var depString="ID Number:  " + id + "  |  ";
                                    depString+="Full Name:  " + nm +  "  |  ";
                                    depString+="DoB:  " + dob + "  |  ";					
                                    depString+="Gender:  " + gender +  "  |  ";
                                    depString+="Relationship:  " + relation ;

                                    var ele = document.createElement('input');
                                    ele.setAttribute('type', 'text');
                                    ele.setAttribute('value', depString);
                                    ele.setAttribute('text', depString);
                                    ele.setAttribute('id', 'dependent'+rowCount);
                                    ele.setAttribute('name', 'dependent'+rowCount);
                                    ele.setAttribute('style','border:none;style=margin-top:0;float:left;width:100%;height:2rem; color:red;background-color:whitesmoke;');
                                    //background-color:#eee;
                                    td.appendChild(ele);
                            }

			}
			var x = document.getElementById('dependentsTable').rows.length;
			
			if (x>0)
			{
				//now make it invisible
				rowCount+=1;				
				var deps=document.getElementById('dependentsTable');
				deps.style.display='';
			}
			else{
				//now make it invisible
				var deps=document.getElementById('dependentsTable');
				deps.style.display='none';
			}
		}
		
		// function to delete a row.
		function removeRow(oButton) {
			var empTab = document.getElementById('dependentsTable');
			empTab.deleteRow(oButton.parentNode.parentNode.rowIndex); // buttton -> td -> tr
			
			rowCount-=1;
			if(rowCount==0)
			{
				var deps=document.getElementById('deps');
				deps.style.display='none';
			}
							
			/*var x = document.getElementById('dependentsTable').rows.length;
			if (x>2)
			{
				//now make it invisible
				var deps=document.getElementById('deps');
				deps.style.display='';
			}
			else{
				//now make it invisible
				var deps=document.getElementById('deps');
				deps.style.display='none';
			}*/
		}
                    
                function toggleBdPanel(){     
                    var x = document.getElementById('bnk');
                    //var y = document.getElementById('bd2');
                    if (document.getElementById('dBank').checked === false) {
                      x.style.display = "inherit";
                      x.scrollIntoView(false);
                    } else {
                      x.style.display = "none";
                    } 

//                    if (document.getElementById("dBank").checked === false) {
//                      y.style.display = "run-in";
//                      y.scrollIntoView(false);
//                    } else {
//                      y.style.display = "none";
//                    }   
                }
		// function to extract and submit table data.
		function submit() {
			var myTab = document.getElementById('dependentsTable');
			var arrValues = new Array();

			// loop through each row of the table.
			for (row = 1; row < myTab.rows.length - 1; row++) {
				// loop through each cell in a row.
				for (c = 0; c < myTab.rows[row].cells.length; c++) {
					var element = myTab.rows.item(row).cells[c];
					if (element.childNodes[0].getAttribute('type') == 'text') {
						arrValues.push("'" + element.childNodes[0].value + "'");
					}
				}
			}
			
			// finally, show the result in the console.
			console.log(arrValues);
		}
</script>

</head>

<body onload="checkTable();">

    <form id="apply" class="form-group" action="../funeralcover/create_funeralcover.php" method="POST" onsubmit="return validateData();">

        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(255, 255, 255);">
        </div>

        <div style="font-family: Ubuntu;" class="container">
               <!-- second row starts here-->
               <div class="row">                        
		    <div class="col-sm-12">
                        <div class="applyHeader2">
                             SECTION A: Burial Society Name (if applicable):
                        </div>
                    </div>
                </div>    
                <div class="row">  		    
                    <div class="col-sm-4">                        
                        <div class="card-body">
                            <input style="font-size: 13px;" class="form-control" type="text" name="socName" id="socName"  placeholder="Society Name">
                        </div>                    
                    </div>
                    
                    <div class="col-sm-4">                        
                        <div class="card-body">								
                        </div>                    
                    </div>
                    
                    <div class="col-sm-4">                        
                        <div class="card-body">								
                        </div>                    
                    </div>
                </div>
                    `<!--new row-->
                <div class="row">                        
		    <div class="col-sm-12">
                        <div class="applyHeader2">
                             SECTION B: Dependents covered in this application:
                        </div>
                    </div>
                </div>    				
		<!-- second row starts here-->
                <div class="row">
                    <div style="margin-top: 1rem; width: 100%;">

                    </div>
					
                    <div class="col-sm-8">                        
                            <div class="card-body">
                                <h6 style="font-family: Ubuntu;color:navy;">Full Name:</h6>
                                <input style="font-size: 13px;" class="form-control" type="text" name="fullname"  id="fullname"  placeholder="Full Name">
                            </div>                    
                    </div>

                    <div class="col-sm-4">
                        <div class="card-body">
                            <h6 style="font-family: Ubuntu;color:navy;">Id Number:</h6>
                            <input style="font-size: 13px;" class="form-control" type="text" name="idnumber"  id="idnumber"  placeholder="Id Number">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style="margin-top: 1rem; width: 100%;">

                    </div>
					
                    <div class="col-sm-4">                        
                            <div class="card-body">
                                <h6 style="font-family: Ubuntu;color:navy;">Date of Birth:</h6>
                                <input style="font-size: 13px;" class="form-control" type="date" name="dob" id="dep_dob" placeholder="Date of Birth">
                            </div>                    
                    </div>

                    <div class="col-sm-4">
                        <div class="card-body">
                            <h6 style="font-family: Ubuntu;color:navy;">Gender:</h6>
                            <select title="Gender" id="dep_gender" name="gender" style="font-size: 13px;" class="form-control">
                                <option value="U" selected>Unspecified</option>
                                <option value="F">Female</option>
                                <option value="M">Male</option>
                                <option value="T">Transgender</option>                                
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card-body">
                            <h6 style="font-family: Ubuntu;color:navy;">Relationship to Main Member:</h6>
                            <select title="Title" id="dep_relation" name="relation" style="font-size: 13px;" class="form-control">
                                <option value="CH" selected>Child</option>
                                <option value="SP">Spouse</option>
                                <option value="SB">Sibling</option>
                                <option value="CO">Cousin</option>
                                <option value="PA">Parent</option>
                                <option value="GP">Grandparent</option>
                                <option value="SM">Society Member</option>
                            </select>
                            <button type="button" style="border:none;margin-top:0.4rem;float:right;width:5rem;height:3rem; color:yellow;background-color:steelblue;" id="btnAddRow" onclick="addRow();">Add</button>

                        </div>
                    </div>

                </div>    										
                <!-- dependents table-->
                <div class="row">
                    <div style="margin-top: 1rem; width: 100%;">

                    </div>
                        <div class="col-sm-12">
                        <div style="margin-left: 1.5rem; margin-right:1.5rem; " id="dependentsDiv">
			 </div>
                    </div>
                </div>    
		
                <!-- SECTION C-->
                <div class="row">    
		    <div class="col-sm-12">
                        <div class="applyHeader2">
                            SECTION C: Payment Options:
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">                        
                        <div class="card-body">
                            <h6 style="font-family: Ubuntu;color:navy;">Preferred Payment Option:</h6>
                            <select title="Title" id="po" name="po" style="font-size: 13px;" class="form-control">
                              <option value="Cash">Cash</option>
                              <option value="Debit Order" selected>Debit Order</option>
                              <option value="EFT">Bank Transfer</option>
                            </select>
                        </div>                    
                    </div>
                   
                    <div class="col-sm-4">
                        <div class="card-body">
                            <h6 style="font-family: Ubuntu;color:navy;">If Debit Order, please specify date:</h6>
                            <select title="Title" id="dod" name="dod" style="font-size: 13px;" class="form-control">
                              <option value="" selected></option>
                              <option value="1">1</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="25">25</option>
                              <option value="Last Day of Month">Last Day of Month</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card-body">
                            <h6 style="font-family: Ubuntu;color:navy;">Banking Details:</h6>
                            <input type="checkbox" id="dBank" name="defBank" onclick="toggleBdPanel();"><font face="calibri" size=2 color="navy" ></font></input>
                            <h8 style="font-family: Ubuntu;color:navy;">Use my default banking details.</h8>
                        </div>
                    </div>
                </div>
                <div id="bnk">
                    <div id="bd1" class="row">
                        <div class="col-sm-4">                        
                            <div class="card-body">
                                <h6 style="font-family: Ubuntu;color:navy;">Bank Name:</h6>
                                <input style="font-size: 13px;" class="form-control" type="text" name="bankname"  id="bankname"  placeholder="Bank Name">				
                                
                            </div>                    
                        </div> 
                        <div class="col-sm-4">                        
                            <div class="card-body">
                                <h6 style="font-family: Ubuntu;color:navy;">Account Number:</h6>
                                <input style="font-size: 13px;" class="form-control" type="text" name="accnumber"  id="anumber"  placeholder="Account Number">				
                                <label>
                            </div>                    
                        </div> 
                        <div class="col-sm-4">                        
                            <div class="card-body">
                                <h6 style="font-family: Ubuntu;color:navy;">Account Type:</h6>
                                <input style="font-size: 13px;" class="form-control" type="text" name="acctype"  id="atype"  placeholder="Account Type">				
                                <label>
                            </div>                    
                        </div> 
                    </div>
                    <div id="bd2" class="row" >
                        <div class="col-sm-4">                        
                            <div class="card-body">
                                <h6 style="font-family: Ubuntu;color:navy;">Branch Code:</h6>
                                <input style="font-size: 13px;" class="form-control" type="text" name="branchcode"  id="bcode"  placeholder="Branch Code">				
                                <label>
                            </div>                    
                        </div> 
                        <div class="col-sm-8">                        
                            <div class="card-body">
                                <h6 style="font-family: Ubuntu;color:navy;">Account Name:</h6>
                                <input style="font-size: 13px;" class="form-control" type="text" name="accname"  id="aname"  placeholder="Account Name">				
                                <label>
                            </div>                    
                        </div> 

                    </div>
                </div>
		<!-- authorisations-->
                <div class="row">
		    <div class="col-sm-12">
                        <div class="applyHeader2">
                            SECTION D: Authorisations:
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div style="margin-left: 1.5rem; margin-right:1.5rem; ">
                            <table width="100%">
                                <tr>
                                    <td margin-top="0" style="vertical-align:top;">
                                        <input type="checkbox" id="doa" name="doac"><font face="calibri" size=2 color="navy"></font></input>
                                    </td>
                                    <td>
                                        <h7  style="font-family:calibri;color:red;">I do hereby authorise the use of my details by duly authorised accessors of said details</h7>	
                                    </td>
                                </tr> 
                                <tr>
                                    <td margin-top="0" style="vertical-align:top;">
                                        <input type="checkbox" name="authacc" id="aacc"><font face="calibri" size=2 color="navy"></font></input>
                                    </td>
                                    <td>
                                        <h7  style="font-family:calibri;color:red;">I confirm that I am ACTIVELY seeking life assurance.</h7>	
                                    </td>
                                </tr>
                                <tr>
                                    <td margin-top="0" style="vertical-align:top;">
                                        <input type="checkbox" name="unauthacc" id="uacc"><font face="calibri" size=2 color="navy"></font></input>
                                    </td>
                                    <td>
                                        <h7  style="font-family:calibri;color:red;">I confirm that I am NOT seeking life assurance at present.</h7>	
                                    </td>
                                </tr>
                            </table>
			</div>
                     </div> 
                     <!--Submit-->
                     <div class="col-sm-12">
                            <div style="margin-left: 1.5rem; margin-right:1.5rem; ">
                                <table width="100%">
                                    <tr>
                                        <td style="width:50%;">
                                            <!--<input type="button" style="font:family:calibri;width:6rem;" onclick="window.history.back();" class="btn btn-sm btn-primary" value="Back"></input>-->
                                        </td>
                                        <td>
                                            <button  type="submit" style="border:none;margin-top:0.4rem;float:right;width:6rem;height:2.8rem; color:white;background-color:green;border-radius:5px;font-family: calibri;" id="btnAddRow">Save</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                    </div>
					
                    <!--Error Display-->
                    <div class="col-sm-12">
                        <div style="margin-left: 1.5rem; margin-right:1.5rem; ">
                                <label id="errMessage"  style="border:none;margin-top:0.4rem;width:100%;height:2rem; color:white;background-color:red;display:none;"></label>
                        </div>
                    </div>
                    
                </div>
            </form>
   	
<!--        <div style="height: 70px;" class="footer bg-primary">
            <div style="width: 80%; margin-left: auto; margin-right: auto; text-align: center; font-size: 14px; font-family: Ubuntu;">
                <br>
                <p class="text-light">Funeral Cover Portfolio <a style="margin-left: .5rem;" class="text-light" href=""><i class="fab fa-instagram"></i></a> <a style="margin-left: .5rem;" class="text-light" href=""><i class="fab fa-twitter"></i></a></p>
            </div>
        </div>	-->

        <script src="assets/web/assets/jquery/jquery.min.js"></script>
        <script src="assets/popper/popper.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/tether/tether.min.js"></script>
        <script src="assets/smoothscroll/smooth-scroll.js"></script>
        <script src="assets/dropdown/js/nav-dropdown.js"></script>
        <script src="assets/dropdown/js/navbar-dropdown.js"></script>
        <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
        <script src="assets/parallax/jarallax.min.js"></script>
        <script src="assets/theme/js/script.js"></script>

    </body>

</html>