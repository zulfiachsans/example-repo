<?php 
session_start();
	/*daftar disini*/
	$akun = [
		'admin'=>[
			'username'=>'Zulfi Achsan Sani',
			'password'=>'admin',
			'login'=>'admin',
			],
		'user'=>[
			'username'=>'Zulfi',
			'password'=>'user',
			'login'=>'user',
			]
		];

		/*jika tombol login di klik*/
		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$user = 0;
			$pass = 0;
			foreach ($akun as $key => $value) {
				if ($username==$value['username']) {
					$user = 1;
				}

				if ($password==$value['password']) {
					$pass = 1;
				}
			}

			/*Proses cek input / validasi*/
			if (empty($username) || empty($password)) {
					$_SESSION['user_input'] = $username;
					$_SESSION['pass_input'] = $password;
					$msg = "Username atau Password kosong ";
					$_SESSION['alert'] = "<div class='alert'>".$msg."</div>";					
					header('location: login.php');
			}else{

				if (!$user==1) {
					$msg = "Username tidak Terdaftar ";
					$_SESSION['alert_user'] = "<div class='alert'>".$msg."</div>";
					header('location: login.php');
				}
				
				if (!$pass==1) {
					$msg = "Password tidak Terdaftar ";
					$_SESSION['alert_pass'] = "<div class='alert'>".$msg."</div>";
					header('location: login.php');
				}

				if ($user==1 && $pass==1) {
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;

					header('location: index.php');
				}
			}

	
		}?>