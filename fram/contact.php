<?php
session_start();

/////// On form submit ///////////////
if (!empty($_POST)) {
  ///////////////////// save inputs ///////////////////////////
      $_SESSION['firstName'] = $_POST['firstName'];
      $_SESSION['lastName'] = $_POST['lastName'];
      $_SESSION['tel'] = $_POST['tel'];
      $_SESSION['mail'] = $_POST['email'];
      $_SESSION['message'] = $_POST['message'];
////////////////////////////////////////////////// recaptcha //////////////////////////////////////////
    // secret-key
  	$secret = "6Ld0e4wUAAAAAGQPUsRE3XDfTYBcvp1PD5j7-K1Y";
  	$api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
  	    . $secret
  	    . "&response=" . $_POST['g-recaptcha-response']
  	    . "&remoteip=" . $_SERVER['REMOTE_ADDR'] ;
    // decode response
  	$decode = json_decode(file_get_contents($api_url), true);
  ///////////////////////////////////// end recaptcha //////////////////////////////////////////////////
  include ('FormValidator.php');
  $validator = new FormValidator();

  $checkMessage = $validator->checkMessage($_SESSION['message']);
  $checkFirstName = $validator->checkFirstName($_SESSION['firstName']);
  $checkLastName = $validator->checkLastName($_SESSION['lastName']);
  $checkMail = $validator->checkMail($_SESSION['mail']);
  $checkTel = $validator->checkTel($_SESSION['tel']);
  $checkCaptcha = $validator->checkCaptcha($decode);
// $validator check fields
  if ($checkLastName && $checkFirstName && $checkMail && $checkTel && $checkMessage && $checkCaptcha){
///////////////////////////////// All is ok ... create mail with fields data /////////////////////////////////
    $fullMail = '<div align=center>Nom et prénom : '
                . $_SESSION['lastName'] . ' ' . $_SESSION['firstName'] . '</div></br>
                 <div align=center>Téléphone : ' . $_SESSION['tel'] . '</div>
                 <div align=center>Mail : ' . $_SESSION['mail'] . '</div></br>
                 <div>Message : <br>' . $_SESSION['message'] . '</div>';

    $header ="MIME-Version: 1.0\r\n";
    $header.='From:"ADN.fr"<support@adn.fr>'."\n";
    $header.='Content-Type:text/html; charset="uft-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';
// send mail
    mail('dr.pc@outlook.fr', 'Contact '
        . $_SESSION['firstName'] . ' '
        . $_SESSION['lastName'] . ' du site web',
        $fullMail,
        $header
      );

// reset inputs and errors
    session_destroy();
    session_start();
// Success message
    $_SESSION['mailValid'] = 'Votre message nous est parvenu. <br>
                              Nous vous contacterons dès que possible. Merci!';
    header('Location: ../index.php');// redirect to home page
    exit();
  }else{
//////////////////////////// Errors ///////////////////////////////////
    $_SESSION['formNotValid'] = "Il y a une ou des erreur(s) de saisie
                                dans le formulaire, veuillez corriger."; // Error message

    header('Location: ../pages/contact.php'); // redirect to contact form and show errors
  }

}
