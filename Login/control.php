<?php

	session_start();
		if(isset($_SESSION['user'])){
			echo 'Welcome ' . $_SESSION['user'] . ' You Are In Control Panal Area Now';
		}else{
			echo 'You Are Not Adim You Are Not Premitted To See This Page';
		}