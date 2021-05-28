<?php

class User {
    public $name;
    public $lastname;
    public $eta;
    public $email;
    public $password;

    public function __construct($name, $lastname, $password) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->password = $password;
    }

    public static function getNewPassword() {
        return "password_01";
    }
}

// Istanza n.1 - Francesca
$password = User::getNewPassword();
$francesca = new User('Francesca', 'Bianchi', $password);
$francesca->eta = 23;
$francesca->email = 'francesca@gmail.com';
// var_dump($francesca); 

// Istanza n.2 - Elisa
$password = User::getNewPassword();
$elisa = new User('Elisa', 'Gialli', $password);
$elisa->eta = 24;
$elisa->email = 'elisa@hotmail.com';
// var_dump($elisa);

// Istanza n.3 - Marco
$password = User::getNewPassword();
$marco = new User('Marco', 'Rossi', $password);
$marco->eta = 36;
$marco->email = 'marco@hotmail.it';
// var_dump($marco);

// Istanza n.4 - Giovanni
$password = User::getNewPassword();
$giovanni = new User('Giovanni', 'Verdi', $password);
$giovanni->eta = 58;
$giovanni->email = 'giovanni@libero.it';
// var_dump($giovanni);

// Istanza n.5 - Pietro
$password = User::getNewPassword();
$pietro = new User('Pietro', 'Arancio', $password);
$pietro->eta = 19;
$pietro->email = 'pietro@yahoo.com';
// var_dump($pietro);


$users = [$francesca, $elisa, $marco, $giovanni, $pietro];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Users</title>
</head>
<body>

<h1>Top 5 Users:</h1>

<ul>
    <?php foreach($users as $user) {?>
        <li>
            Nome : <?php echo $user->name; ?> <br>
            Cognome : <?php echo $user->lastname; ?> <br>
            Età : <?php echo $user->eta; ?> <br>
            Email : <?php echo $user->email; ?> <br>

        </li>
    <?php } ?>
</ul>
    
</body>
</html>