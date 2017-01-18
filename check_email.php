<?php 

	if(isset($_POST['email'])){
		$email = $_POST['email'];

		if(!empty($email)){

			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				echo ' <span style="color:red">Sorry, email belum valid</span>';
			}else{
				echo ' &#128076; email sudah valid';
			}

		}
	}

?>