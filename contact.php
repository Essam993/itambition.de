<?php
$name = $_POST['your-name'];
$email = $_POST['your-email'];
$subject = $_POST['subject'];
$message = $_POST['your-message'];


$message_sent =         "Name: ". $name. "\n".
                        "email: ".$email. "\n".
                        "subject: ".$subject. "\n".
                        "message: ".$message;
if($name = null || $email == null || $purpose == null || $message == null)
{
    echo "<script type='text/javascript'>alert('All Fields are Required');</script>";    
}

else
{
    
mail('info@itambitionde.com','New message',$message_sent,'from: noreply@itambitionde.com');

echo "<script type='text/javascript'>alert('Thanks for Your Message');</script>";    

}

?>