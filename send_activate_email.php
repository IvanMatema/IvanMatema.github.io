<?php
if(isset($_POST['email'])) {

    $email_to = "ivan.matema@gmail.com";
    $email_subject = "Application: Membership for Life Assistance";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}
 
    // validation expected data exists
    /*if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }*/
 
     
	$socname=$_POST['socname'];
	$title=$_POST['title'];
	$fname=$_POST['fname'];
	$sname=$_POST['sname'];
	$dob=$_POST['dob'];
	$aas=$_POST['aas'];
	$idnum=$_POST['idnum'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$mobile=$_POST['mobile'];
	$streetaddress=$_POST['streetaddress'];
	$suburb=$_POST['suburb'];
	$region=$_POST['region'];
	
	$IdNumber0=$_POST['IdNumber0'];
	$DoB0=$_POST['DoB0'];
	$Title0=$_POST['Title0'];
	$Name0=$_POST['Name0'];
    $Surname0 = $_POST['Surname0']; 
    $Relationship0 = $_POST['Relationship0']; 
	
	$IdNumber1=$_POST['IdNumber1'];
	$DoB1=$_POST['DoB1'];
	$Title1=$_POST['Title1'];
	$Name1=$_POST['Name1'];
    $Surname1 = $_POST['Surname1']; 
    $Relationship1 = $_POST['Relationship1'];
	
	$IdNumber2=$_POST['IdNumber2'];
	$DoB2=$_POST['DoB2'];
	$Title2=$_POST['Title2'];
	$Name2=$_POST['Name2'];
    $Surname2 = $_POST['Surname2']; 
    $Relationship2 = $_POST['Relationship2'];
	
	$IdNumber3=$_POST['IdNumber3'];
	$DoB3=$_POST['DoB3'];
	$Title3=$_POST['Title3'];
	$Name3=$_POST['Name3'];
    $Surname3 = $_POST['Surname3']; 
    $Relationship3 = $_POST['Relationship3'];
	
	$IdNumber4=$_POST['IdNumber4'];
	$DoB4=$_POST['DoB4'];
	$Title4=$_POST['Title4'];
	$Name4=$_POST['Name4'];
    $Surname4 = $_POST['Surname4']; 
    $Relationship4 = $_POST['Relationship4'];
	
	$IdNumber5=$_POST['IdNumber5'];
	$DoB5=$_POST['DoB5'];
	$Title5=$_POST['Title5'];
	$Name5=$_POST['Name5'];
    $Surname5 = $_POST['Surname5']; 
    $Relationship5 = $_POST['Relationship5'];
	
	$IdNumber6=$_POST['IdNumber6'];
	$DoB6=$_POST['DoB6'];
	$Title6=$_POST['Title6'];
	$Name6=$_POST['Name6'];
    $Surname6 = $_POST['Surname6']; 
    $Relationship6 = $_POST['Relationship6'];
	
	$IdNumber7=$_POST['IdNumber7'];
	$DoB7=$_POST['DoB7'];
	$Title7=$_POST['Title7'];
	$Name7=$_POST['Name7'];
    $Surname7 = $_POST['Surname7']; 
    $Relationship7 = $_POST['Relationship7'];
	
	$IdNumber8=$_POST['IdNumber8'];
	$DoB8=$_POST['DoB8'];
	$Title8=$_POST['Title8'];
	$Name8=$_POST['Name8'];
    $Surname8 = $_POST['Surname8']; 
    $Relationship8 = $_POST['Relationship8'];
	
	$IdNumber9=$_POST['IdNumber9'];
	$DoB9=$_POST['DoB9'];
	$Title9=$_POST['Title9'];
	$Name9=$_POST['Name9'];
    $Surname9 = $_POST['Surname9']; 
    $Relationship9 = $_POST['Relationship9'];
	
	$IdNumber10=$_POST['IdNumber10'];
	$DoB10=$_POST['DoB10'];
	$Title10=$_POST['Title10'];
	$Name10=$_POST['Name10'];
    $Surname10 = $_POST['Surname10']; 
    $Relationship10 = $_POST['Relationship10'];
	
	$IdNumber11=$_POST['IdNumber11'];
	$DoB11=$_POST['DoB11'];
	$Title11=$_POST['Title11'];
	$Name11=$_POST['Name11'];
    $Surname11 = $_POST['Surname11']; 
    $Relationship11 = $_POST['Relationship11'];
    $message = $_POST['message']; 
 
	$po=$_POST['po'];
	$dod=$_POST['dod'];
	$bankname=$_POST['bankname'];
	$branchname=$_POST['branchname'];
    $branchcode = $_POST['branchcode']; 
    $accname = $_POST['accname'];
    $accnum = $_POST['accnum'];
	$acctype = $_POST['acctype'];
        
      
	// Compose a simple HTML email message
	$email_message = '<html><body>';
	$email_message.= '<h1 style="color:#f40;">Membership Application</h1>';
	$email_message.= '<p style="color:#080;font-size:18px;">Please find below, a new application for membership for life assistance.</p>';
	$email_message.= '<table><tr>';
	$email_message.= '<td>'.clean_string($socname).'</td></tr>';
	$email_message.= '<td>Member</td></tr>';
	$email_message.= '<td>'.clean_string($title).' '.clean_string($fname).' '.clean_string($sname).'</td></tr><tr>';
	$email_message.= '<td>Id Number: '.clean_string($idnum).'</td><td>Date of Birth: '.clean_string($dob).'</td><td>Age at Start: ' .clean_string($aas).'</td></tr><tr>';
	$email_message.= '<td>Email: '.clean_string($email).'</td><td>Phone: '.clean_string($phone).'</td><td>Mobile: ' .clean_string($mobile).'</td></tr><tr>';
	$email_message.= '<td>Address: '.clean_string($streetaddress).'</td><td>Suburb: '.clean_string($suburb).'</td><td>Region: ' .clean_string($region).'</td></tr><table><p/>';
	
        
        
	$email_message.= '<table><tr>';
	$email_message.= '<td>Dependents</td></tr><tr>';
        
        echo $IdNumber0;
	if($IdNumber0!='')
	{
		$email_message.= '<td>Id Number: '.clean_string($IdNumber0).'</td><td>DoB: '.clean_string($DoB0).'</td><td>Name: '.clean_string($Title0).' '.clean_string($Name0).' ' .clean_string($Surname0).'</td><td>Relationship: '.clean_string($Relationship0).'</td></tr><tr>';
	}
	if($IdNumber1!='')
	{
		$email_message.= '<td>Id Number: '.clean_string($IdNumber1).'</td><td>DoB: '.clean_string($DoB1).'</td><td>Name: '.clean_string($Title1).' '.clean_string($Name1).' ' .clean_string($Surname1).'</td><td>Relationship: '.clean_string($Relationship1).'</td></tr><tr>';
	}
	if($IdNumber2!='')
	{
		$email_message.= '<td>Id Number: '.clean_string($IdNumber2).'</td><td>DoB: '.clean_string($DoB2).'</td><td>Name: '.clean_string($Title2).' '.clean_string($Name2).' ' .clean_string($Surname2).'</td><td>Relationship: '.clean_string($Relationship2).'</td></tr><tr>';
	}
	if($IdNumber3!='')
	{
		$email_message.= '<td>Id Number: '.clean_string($IdNumber3).'</td><td>DoB: '.clean_string($DoB3).'</td><td>Name: '.clean_string($Title3).' '.clean_string($Name3).' ' .clean_string($Surname3).'</td><td>Relationship: '.clean_string($Relationship3).'</td></tr><tr>';
	}
	if($IdNumber4!='')
	{
		$email_message.= '<td>Id Number: '.clean_string($IdNumber4).'</td><td>DoB: '.clean_string($DoB4).'</td><td>Name: '.clean_string($Title4).' '.clean_string($Name4).' ' .clean_string($Surname4).'</td><td>Relationship: '.clean_string($Relationship4).'</td></tr><tr>';
	}
	if($IdNumber5!='')
	{
		$email_message.= '<td>Id Number: '.clean_string($IdNumber5).'</td><td>DoB: '.clean_string($DoB5).'</td><td>Name: '.clean_string($Title5).' '.clean_string($Name5).' ' .clean_string($Surname5).'</td><td>Relationship: '.clean_string($Relationship5).'</td></tr><tr>';
	}
	if($IdNumber6!='')
	{
		$email_message.= '<td>Id Number: '.clean_string($IdNumber6).'</td><td>DoB: '.clean_string($DoB6).'</td><td>Name: '.clean_string($Title6).' '.clean_string($Name6).' ' .clean_string($Surname6).'</td><td>Relationship: '.clean_string($Relationship6).'</td></tr><tr>';
	}
	if($IdNumber7!='')
	{
		$email_message.= '<td>Id Number: '.clean_string($IdNumber7).'</td><td>DoB: '.clean_string($DoB7).'</td><td>Name: '.clean_string($Title7).' '.clean_string($Name7).' ' .clean_string($Surname7).'</td><td>Relationship: '.clean_string($Relationship7).'</td></tr><tr>';
	}
	if($IdNumber8!='')
	{
		$email_message.= '<td>Id Number: '.clean_string($IdNumber8).'</td><td>DoB: '.clean_string($DoB8).'</td><td>Name: '.clean_string($Title8).' '.clean_string($Name8).' ' .clean_string($Surname8).'</td><td>Relationship: '.clean_string($Relationship8).'</td></tr><tr>';
	}
	if($IdNumber9!='')
	{
		$email_message.= '<td>Id Number: '.clean_string($IdNumber9).'</td><td>DoB: '.clean_string($DoB9).'</td><td>Name: '.clean_string($Title9).' '.clean_string($Name9).' ' .clean_string($Surname9).'</td><td>Relationship: '.clean_string($Relationship9).'</td></tr><tr>';
	}
	if($IdNumber10!='')
	{
		$email_message.= '<td>Id Number: '.clean_string($IdNumber10).'</td><td>DoB: '.clean_string($DoB10).'</td><td>Name: '.clean_string($Title10).' '.clean_string($Name10).' ' .clean_string($Surname10).'</td><td>Relationship: '.clean_string($Relationship10).'</td></tr><tr>';
	}
	if($IdNumber11!='')
	{
		$email_message.= '<td>Id Number: '.clean_string($IdNumber11).'</td><td>DoB: '.clean_string($DoB11).'</td><td>Name: '.clean_string($Title11).' '.clean_string($Name11).' ' .clean_string($Surname11).'</td><td>Relationship: '.clean_string($Relationship11).'</td></tr><tr>';
	}
	$email_message.='</tr></table><p/>';
	
	$email_message.= '<table><tr>';
	$email_message.= '<td>Payment Details</td></tr><tr>';
	$email_message.= '<td>Payment Option: '.clean_string($po).'</td><td></td><td>Date of Debit: '.clean_string($dod).'</td></tr><tr>';
	$email_message.= '<td>Bank Name: '.clean_string($bankname).'</td><td>BranchName: '.clean_string($branchname).'</td><td>Branch Code: ' .clean_string($branchcode).'</td></tr><tr>';
	$email_message.= '<td>Account Name: '.clean_string($accname).'</td><td>Account Number: '.clean_string($accnum).'</td><td>Account Type: ' .clean_string($acctype).'</td></tr><tr>';
	$email_message.= '</tr></table>';
	$email_message.= '</body>';
	$email_message.= '</html>';
	$email_message.= '<p/>';
	$email_message.= 'Sincerely,<p/>';
	$email_message.= clean_string($fname).' '.clean_string($sname).'<br>';
	$email_message.= '<i>Sent via Royal Funeral Services Web Portal</i>';	
	$email_message.= '</body></html>'; 
	  
	        			 
	// create email headers
	$headers = 'From: '.$email."\r\n".
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	 	 
	// To send HTML mail, the Content-type header must be set
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 
	//echo $headers;
        
	// Sending email
	if(mail($email_to, $email_subject, $email_message, $headers)){
		echo 'Your mail has been sent successfully.';
	} else{
		echo 'Unable to send email. Please try again.';
	}
	//or
	//@mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<!-- include your own success html here 
 
Thank you for contacting us. We will be in touch with you very soon.
<button onclick="javascript:history.back();" class="w3-button w3-round-xlarge w3-theme w3-hover-teal" title="Contact">Back</button>
-->
 
<?php
 
}

?>