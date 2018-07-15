<?php
$page = 'contact';
include 'header.php';
$error = '';

    if(isset($_POST["submit"]))
    {
        $message=
        'Full Name:	'.$_POST['name'].'<br />
        Subject:	'.$_POST['subject'].'<br />
        Phone:	'.$_POST['phone'].'<br />
        Email:	'.$_POST['email'].'<br />
        Message:	'.$_POST['message'].'<br />
        Address:	'.$_POST['address'].'
        ';
            require 'class.PHPMailer.php';
            $mail = new PHPMailer;
            //$mail->SMTPDebug = 0;                                      // Enable verbose debug output
            $mail->isSMTP();                                           // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                            // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                                    // Enable SMTP authentication
            $mail->Username = 'saxenaa043@gmail.com';              // SMTP username
            $mail->Password = 'saxena084971167';                              // SMTP password
            $mail->SMTPSecure = 'tls';                                 // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;
             
            $mail->SetFrom($_POST['email'], $_POST['name']);
            $mail->AddReplyTo($_POST['email'], $_POST['name']);
            $mail->Subject = $_POST['subject'];
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com'); 
            $mail->MsgHTML($message); 
            $mail->WordWrap = 50;
            $mail->isHTML(true);
        
            $mail->AddAddress("saxena.ashish.ashu4@gmail.com", $_POST['name']); // Where to send it - Recipient
            $result = $mail->Send();		// Send!  
            $message = $result ? '<div class="alert alert-success" role="alert"><strong>Success!</strong>Message Sent Successfully!</div>' : '<div class="alert alert-danger" role="alert"><strong>Error!</strong>There was a problem delivering the message.</div>';  
            unset($mail);
            
           
     }
    
?><br>
<?php 
    if(!empty($message))
    {
?>
<h4 style="color:green;" class="center"><?php echo $message?></h4>
<?php
    }
?>
<body class="">
<div class="container">
        <div class="row" id="login-page">
            <div class="col l4 s12 m12 col l4 offset-l4 z-depth-5 card-panel">
                <div class=" center">
                <h4>Get In Touch</h4>
                <p class="center">Join to our community now !</p>
              </div>
                <form action="" method="post">
                <div class="input-field">
                    <i class="material-icons prefix">person</i>
                  <input placeholder="Enter Your Name" id="icon_prefix" type="text" class="validate form-control" name="name"  required>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">email</i>
                  <input id="icon_prefix" type="text" class="validate form-control" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">subject</i>
                  <input id="icon_prefix" class="validate form-control" name="subject" placeholder="Enter Your Subject" required>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">mode_edit</i>
                <textarea id="icon_prefix2" class="materialize-textarea form-control" name="message" placeholder="Enter Your Message" required></textarea>
                </div>
                    <div class="input-field">
                      <i class="material-icons prefix">phone</i>
                      <input id="icon_telephone" type="tel" class="validate form-control" placeholder="Enter Your Phone" name="phone" required>
                    </div>
                    <div class="input-field">
                    <i class="material-icons prefix">add_location</i>
                    <textarea id="icon_prefix2" class="materialize-textarea form-control" name="address" placeholder="Enter Your Address" required></textarea>
                    </div>
                    <div class="input-field center">
                        <button class="btn waves-effect waves-light" id="submit" type="submit" name="submit" value="Submit">Submit
                        <i class="material-icons right">send</i>
                      </button>
                  </div>
                    </form>
            </div>
                
        </div>
    
</div>
<?php
include 'footer.php';
?>