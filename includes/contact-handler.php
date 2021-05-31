<?php     
	$f_contact_name 		= addslashes($_POST['name']);
	$f_contact_email		= addslashes($_POST['email']);
	$f_contact_phone		= addslashes($_POST['phone']);
	$f_contact_message		= addslashes($_POST['message']);
	
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message']) )
	{
		if(!isset($_POST['name']) || empty($_POST['name']))
		{
			echo "Name";
		}
		else if(!isset($_POST['email']) || empty($_POST['email']))
		{
			echo "Email";
		}
		else if(!isset($_POST['phone']) || empty($_POST['phone']))
		{
			echo "phone";
		}
		else if(!isset($_POST['message']) || empty($_POST['message']))
		{
			echo "Message";
		}
	
		
		
		 
		$message = "<html><body>";
		$message .= "<h1>Taraana</h1>";
		$message .= "</body></html>";
		$message .= "<html><body><p>A message was submitted from the Contact form. The following information was provided.</p>";
		$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';	
		$message .= '<tr><td> Full Name : </td><td>'.$f_contact_name.'</td></tr>';					
		$message .= '<tr><td> Email : </td><td>'.$f_contact_email.'</td></tr>';
		$message .= '<tr><td> Phone no. : </td><td>'.$f_contact_phone.'</td></tr>';
		$message .= '<tr><td> Message : </td><td>'.$f_contact_message.'</td></tr>';

			
		$message .= '</table></body></html>';	
		     
	}	
?>

<?php
require 'PHPMailer_5.2.4/class.phpmailer.php';
$mail = new PHPMailer;
$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'localhost'; 
$mail->Port       = 587;
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'muralivjumm@gmail.com';              // SMTP username
$mail->Password = 'mvcscool14';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->From = 'info@taraanaacademy.in';
$mail->FromName = 'Taraana';
$mail->AddAddress('contact@taraanaacademy.in');  
             // Name is optional
$mail->AddBCC('shritha@taraanaacademy.in');
$mail->AddBCC('muralivjumm@gmail.com');
$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->IsHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Enquiry Details';
$mail->Body    = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->Send()) {
  echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 else 
 {
 echo "Thank you. One of our representative will call you back!!";
}
			
	
?>

