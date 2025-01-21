<?php	
	$con=mysqli_connect('localhost','root','','sklep1');
	$login=$_POST['login'];
	$email=$_POST['email'];
	$sql="SELECT * FROM Użytkownicy WHERE LOGIN = '$login'";
	if(mysqli_query($con, $sql)){
		echo "Jesteś już zarejestrowany!";
	}else{
		echo "Błąd podczas dodawania daty logowania:".mysqli_error($con);
	}
	}else{
		$sql = "INSERT INTO Użytkownicy (LOGIN,EMAIL) Values ('$login','$email')";
		if (mysqli_query($con,$sql)){
			echo "Rejestracja zakończona pomyślnie!";
		}else{
				echo "Błąd podczas dodawania daty logowania:" . mysqli_error($con);
		}
	}else{
		echo "Błąd podczas rejestracji:" . mysqli_error($con);
	}
	}
	mysqli_close($con);
	?>