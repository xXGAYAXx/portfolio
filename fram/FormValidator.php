<?php

class FormValidator
{

	public function checkFirstName($firstName)
	{
		if(!empty($firstName)){
			unset($_SESSION['firstNameEmpty']);
			return true;
		}else {
			$_SESSION['firstNameEmpty'] ='Veuillez rentrer un prénom.';
		}
	}

	public function checkLastName($lastName)
	{
		if(!empty($lastName)){
			unset($_SESSION['lastNameEmpty']);
			return true;
		}else {
			$_SESSION['lastNameEmpty'] ='Veuillez rentrer un nom.';
		}
	}

	public function checkMessage($message)
	{
		if(!empty($message)){
			unset($_SESSION['messageEmpty']);
			return true;
		}else {
			$_SESSION['messageEmpty'] ='Veuillez rentrer un message.';
		}
	}

	public function checkMail($email)
	{
		if(preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)){
			unset($_SESSION['mailIsNot']);
			return true;
		}else {
			$_SESSION['mailIsNot'] ='Veuillez rentrer une adresse mail valide.';
		}
	}

  public function checkTel($tel)
	{
		if(preg_match('#^0[1-9][0-9]{8}$#', $tel)){
			unset($_SESSION['telIsNot']);
			return true;
		}else {
			$_SESSION['telIsNot'] ='Veuillez rentrer un numéro de téléphone valide.';
		}
	}

	public function checkCaptcha($decode)
	{
		if ($decode['success'] == true) {
			unset($_SESSION['captchaFail']);
    		return true;
    }
  	else {
  		$_SESSION['captchaFail'] ='Veuillez effectuer le conrôle anti-spam.';
  	}
	}

}
