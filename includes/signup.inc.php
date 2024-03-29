<?php

if (isset($_POST["submit"])) {

  // Få data fra "form" html
  $name = $_POST["name"];
  $klasse = $_POST["klasse"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];

  // Derefter kører vi en masse "error handlers", som fanger fejl brugeren har begået såsom brugt brugernavn eller tomme felter
  // Funktionerne kan findes i functions.inc.php

  require_once "dbh.inc.php";
  require_once 'functions.inc.php';


  // Vi har sat funktionerne til "!== false" da "=== true" har en risiko for, at give os et forkert resultat

  // Hvis der er tomme felter --> exit
  if (emptyInputSignup($name, $klasse, $email, $username, $pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=emptyinput");
		exit();
  }
	// Hvis det ikke er et ordenligt username --> exit
  if (invalidUid($uid) !== false) {
    header("location: ../signup.php?error=invaliduid");
		exit();
  }
  // Hvis det ikke er en ordenlig email --> exit
  if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidemail");
		exit();
  }
  // Hvis pwd ikke matcher --> exit
  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=passwordsdontmatch");
		exit();
  }
  // Hvis usernamed er taget --> exit
  if (uidExists($conn, $username) !== false) {
    header("location: ../signup.php?error=usernametaken");
		exit();
  }

  // Hvis vi når hertil betyder det, at der er ingen fejl begået af brugeren ved signup

  // Nu indsætter vi brugeren i databasen "users"
  createUser($conn, $name, $klasse, $email, $username, $pwd);

} else {
	header("location: ../signup.php");
    exit();
}
