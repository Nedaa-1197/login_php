<?php
	
	session_start();
	session_destroy();
	session_start();

	$admins = array('Nedaa','Yasmeen','Rawan','Ihsan');

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$user = $_POST['username'];
		if (in_array($user, $admins)) {
			$_SESSION['user'] = $user;
			echo 'Welcome ' . $_SESSION['user'] . ' You Will Be Redirected To The Control Panal Area';
			header('REFRESH:4;URL=control.php');
		}else {
			echo 'Sorry You Are Not Admin';
		}


	}else {
		echo 'You Can Not Browes This Page Directly';
	}