 
  <?php
  		
  		define("mathematic", "mathematic");
  		define("physic", "physic");
  		define("hemi", "hemi");
  		$password = '';
      $check = ord(mathematic[ceil(intval(strlen(mathematic)/2))])+3;


    if (strlen(mathematic) % 2 == 1) {
    $id = ceil(strlen(mathematic)/2);
    $first = ord(mathematic[intval($id)-1])+3;
    $password .= chr($first);
  }
      else {
        $id = (strlen(mathematic)/2);
        $first = ord(mathematic[intval($id)-1])-1;
        $firstt = chr($first);
        
        if ($first == 96) {
          
          $password .= chr(122);
        }
        else $password .= $firstt;

      }

      if (ord(physic[strlen(physic)-1]) == 97) {
        $password .= chr(122);
      }
      else{
        $second = ord(physic[strlen(physic)-1])-1;
        $password .= chr($second);
      }

      if (ord(hemi[0]) == 122) {
        $password .= chr(97);
      }
      else{
        $third = ord(hemi[0])+1;
          $password .= chr($third);
      }
      $sum = (strlen(mathematic) + strlen(physic)) -1;
      
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


	<form action="/index1.php">
 <button class="button">Bернуться к авторизации</button>

 	</form>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
