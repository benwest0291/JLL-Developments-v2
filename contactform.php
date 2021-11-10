  <?php
 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 $message = $_POST['message'];

 $email_form = 'lea-jarrett@outlook.com';

 $email_subject = "Message from JLL Developments";

 $email_body = "Name of Contact: $name.\n".
               "Email address: $visitor_email.\n".
                    "Message: $message.\n";


                $to = "new_domain@ionos.com";

                $headers = "Form: $email_from \r\n";
                $headers = "Reply-To: $vistitor_email \r\n";
                mail($to,$email_subject,$email_body,$headers);
                header("Location: index.html");
?>
