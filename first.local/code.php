 
  <?php
  		
  		define("computer", "computer");
  		define("maus", "maus");
  		define("scanner", "scanner");
  		$password = '';
  		if (ord(computer[strlen(computer)-1]) == 122) {
  			$password .= chr(97);
  		}
  		else{
  		$first = ord(computer[strlen(computer)-1])+1;
  		$firstt = chr($first);
  		$password.=$firstt;
  		}
  		if (ord(computer[strlen(computer)-1]) == 97) {
  			$password .=chr(122);
  		}
  		else{
  		$second = ord(maus[strlen(maus)-1])+1;
  		$secondd = chr($second);
  		$password.=$secondd;
  		}

  		$check = ord(scanner[ceil(intval(strlen(scanner)/2))])+5;

  		if ( $check > 122) {
  			  $password .= chr(97 + ($check%122)-1);
  		}	
  			  		$id = 0;
  		if (strlen(scanner) %2 == 1) {
  			$id = ceil(strlen(scanner)/2);
  			 $third = ord(scanner[intval($id)-1])+5;
  			 $thirdd = chr($third);
  			 $password .= $thirdd;
  		}
  		else {
  			$id = (strlen(scanner)/2);
  			$third = ord(scanner[intval($id)-1])-1;
  			$thirdd = chr($third);
  			
  			if ($third == 96) {
  				
  				$password .= chr(122);
  			}
  			else $password .= $thirdd;

  		}

  		$sum = strlen(maus) + strlen(scanner);
  		
  		if ($sum > 26) {
  				$sum = $sum%26;
  			}
  			$fourth = (97 + $sum);
  			$password .= chr($fourth-1);
  		

  		
  		
  		
    
    	 if (($_POST['email'] == 'vitalik.rogalik@nure.ua') && ($_POST['password'] == $password)){
    		
    	 	 echo '<div id="yes">Авторизация успешна</div>';
    	 }
     
    	 else echo '<div id="no">Неверный логин и/или пароль</div>';
	
  ?>
  <!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="index.css">
	<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>


	<form action="/index.php">
 <button class="button">Bернуться к авторизации</button>

 	</form>
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
