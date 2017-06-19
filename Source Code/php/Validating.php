<?php

include_once("child_class.php");

Class validating

{	
		public function validate($child)
			
	{
		
		$retrun_array = array("success"=>true,"message"=>"");
		$return_array['success']=true;
		$return_array['message']="";
		
		if(!preg_match("/^[a-zA-Z0-9]+$/",$child->getUname()))
	{
			$return_array['success']=false;
			$return_array['message'].="Username must contain only letters and numbers</br>";
		}
	
		if(!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/",$child->getPword()))
		{
			$return_array['success']=false;
			$return_array['message'].="Password must be more than 8 characters, must contain at least one capital letter, must contain at least one number.</br>";
		}

	
		if(!preg_match("/^[a-z\d\._-]+@([a-z\d-]+\.)+[a-z]{2,6}$/i",$child->getEmail()))
		{
			$return_array['success']=false;
			$return_array['message'].="Email address not in proper format</br>";
		}
		
		if(!preg_match("/^[0-9]{8}$/",$child->getAmza()))
		{
			$return_array['success']=false;
			$return_array['message'].="Amza must contain only numbers, 8 numbers</br>";
		}
		
		if(!preg_match("/^[0-9]{1,4}$/",$child->getNo()))
		{
			$return_array['success']=false;
			$return_array['message'].="Numri i shtepise must contain maximumi 4 numbers</br>";
		}
		
		if(!preg_match("/^[0-9]{4,}$/",$child->getPostno()))
		{
			$return_array['success']=false;
			$return_array['message'].="Posta must contain only numbers, at least 4 numbers</br>";
		}
	
		if(!preg_match("/^[a-zA-Z]+$/",$child->getName()))
		{
			$return_array['success']=false;
			$return_array['message'].="Name must conatin only letters</br>";
		}
		
			if(!preg_match("/^[a-zA-Z\.-]+$/",$child->getVaks()))
		{
			$return_array['success']=false;
			$return_array['message'].="Vaksina must conatin only letters</br>";
		}
		
			if(!preg_match("/^[a-zA-Z\.-]+$/",$child->getAler()))
		{
			$return_array['success']=false;
			$return_array['message'].="Alergji must conatin only letters</br>";
		}
		
			if(!preg_match("/^[a-zA-Z\.-]+$/",$child->getOther()))
		{
			$return_array['success']=false;
			$return_array['message'].="tjera must conatin only letters</br>";
		}
		
		if(!preg_match("/^[a-zA-Z]+$/",$child->getSurname()))
		{
			$return_array['success']=false;
			$return_array['message'].="Surname must conatin only letters</br>";
		}
		
		if(!preg_match("/^[a-zA-Z]+$/",$child->getFname()))
		{
			$return_array['success']=false;
			$return_array['message'].="Fname must conatin only letters</br>";
		}
		
		if(!preg_match("/^[a-zA-Z]+$/",$child->getMname()))
		{
			$return_array['success']=false;
			$return_array['message'].="mname must conatin only letters</br>";
		}
		
		if(!preg_match("/^[a-zA-Z]+$/",$child->getFwork()))
		{
			$return_array['success']=false;
			$return_array['message'].="fwork must conatin only letters</br>";
		}
		
		if(!preg_match("/^[a-zA-Z]+$/",$child->getMwork()))
		{
			$return_array['success']=false;
			$return_array['message'].="mwork must conatin only letters</br>";
		}
		
		if(!preg_match("/^[a-zA-Z\.-]+$/",$child->getStreet()))
		{
			$return_array['success']=false;
			$return_array['message'].="street must contain only letters and numbers, - and .</br>";
		}
		if(!preg_match("/^[a-zA-Z\.-]+$/",$child->getCity()))
		{
			$return_array['success']=false;
			$return_array['message'].="city must contain only letters and numbers, - and .</br>";
		}
		
		if(!preg_match("/^[0-9]{3}-{1}[0-9]{2}-{1}[0-9]{2}-{1}[0-9]{3}$/",$child->getCno1()))
		{
			$return_array['success']=false;
			$return_array['message'].="Contact1 number in the format 0xx-xx-xx-xxx</br>";
		}
		
		if(!preg_match("/^[0-9]{3}-{1}[0-9]{2}-{1}[0-9]{2}-{1}[0-9]{3}$/",$child->getCno2()))
		{
			$return_array['success']=false;
			$return_array['message'].="Contact2 number in the format 0xx-xx-xx-xxx</br>";
		}
		
	
		return $return_array;
		
	}
	
	
}

?>