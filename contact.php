 <?php

include 'config.php'; // include the file with emails, to keep the script secure

error_reporting (E_ALL ^ E_NOTICE); // turn on error reporting
 
$post = (!empty($_POST)) ? true : false; // checking if the form values are empty

// if (empty($post)) //redirects to homepage if somoene tries to access the script directly
// {
//   header("Location: ../");

// } 


$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
$subject = stripslashes($_POST['subject']);
$message = stripslashes($_POST['message']);


$vals = array('name' => $name, 'email' => $email, 'subject' => $subject, 'message' => $message );
// $vals = array('name' => $name ."<br />".$email, 'email' => $email, 'subject' => $subject, 'message' => $message );

print_r($vals); // print the array as a whole
print("<br />");
print("<br />");
print("Your name is: "); 
print_r($vals ['name']); // print name
print("<br />");
print("<br />");
print("Your email is: ");
print_r($vals ['email']); //print email
print("<br />");
print("<br />");
print("The subject of your message is: ");
print_r($vals ['subject']); //print subject
print("<br />");
print("<br />");
print("What you said:  - (All together for message body) ");
print_r($vals ['message']); //print message


// if ($post) {
//   $name = stripslashes($_POST['name']);
//   $email = trim($_POST['email']);
//   $subject = stripslashes($_POST['subject']);
//   $message = stripslashes($_POST['name' . 'email' . 'subject' .'message']); //Assign values from the form to variables which will be used to send an email
   
//   $error = '';
 
//   if (!$error) { //if no error send email
//     $mail = mail(WEBMASTER_EMAIL, $subject, $message, //mail the following 
//       "From: ".$name." <".$email.">\r\n"
//         ."Reply-To: ".$email."\r\n" 
//         ."X-Mailer: PHP/" . phpversion()); //PHP Version
 
//     if ($mail) {
//       header("Location: ../?success"); //if successful, reidrect to homepage and show success alert
//     }
//     else {  
//       header("Location: ../?fail"); // if unsuccessful, redirect to homepage and show danger alert, prompting user to try again
//     }
//   }
// }

?>