<?php

class Database{

    //attribut 
    private $pdo;


    //constructeur
    public function __construct(){

        $servername = "localhost";
        $username = "calliope";
        $password = "123";
        $dbname = "calliopeDb";
        try{
            $this->pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Success";
        }catch(PDOException $e) {
            echo  $e->getMessage();
        }

    }

    //getter
    public function getPdo(){
        return $this->pdo;
    }

    private function initUserTable(){
        $sql = "CREATE TABLE IF NOT EXISTS user (
            user_id INT UNSIGNED auto_increment primary key,
            user_email VARCHAR(50),
            user_firstname VARCHAR(20),
            user_lastname VARCHAR(20),
            user_password VARCHAR(300)
            )";
        $this->pdo->exec($sql);
    }

    public function addUser($name, $firstname, $email, $password){
        //cas table pas encore créer
        $this->initUserTable();

        //test si adresse email déjà présente
        if($this->testEmail($email)){
            $sql2 = "INSERT INTO user (user_email, user_firstname, user_lastname, user_password)VALUES ('$email','$name','$firstname', '$password')";
            $this->pdo->exec($sql2);
            header('Location: http://calliopeFront/PageConnexion/inscription.php?reg_err=success');
            die(); 
        }else{
            header('Location: http://calliopeFront/PageConnexion/inscription.php?reg_err=already');
            die(); 
        }
    }

    private function testEmail($email){
        $test = $this->pdo->prepare("SELECT * FROM user where user_email=?");
        $test->execute([$email]);
        $user = $test->fetch(); 
        if($user){
            return false; //email existe déjà
        }else{
            return true; //email non existant
        }
    }


    public function connectUser($email, $password){
        $test = $this->pdo->prepare('SELECT user_id, user_email, user_password FROM user WHERE user_email = ?');
        $test->execute(array($email));
        $data = $test->fetch();
        $row = $test->rowCount();
        if($row == 1){
            if(password_verify($password, $data['user_password'])){
                //$_SESSION['user'] = $data['user_email'];
                $user_reg =$data['user_email'];
                //header page compte
                $_SESSION['user'] = $data['user_email'];
                header("Location: http://calliopeFront/PageConnexion/connexion.php?reg_user=$user_reg");
                die();
            }else{
                header('Location: http://calliopeFront/PageConnexion/connexion.php?reg_err=password');
                //password invalid
            }

        }else{
            //compte n'existe pas
            header('Location: http://calliopeFront/PageConnexion/connexion.php?reg_err=email');
        }

    }

    private function initHistoric(){
        $sql = "CREATE TABLE IF NOT EXISTS historic (
            historic_id INT UNSIGNED auto_increment primary key,
            user_id INT UNSIGNED NOT NULL,
            museum_id INT UNSIGNED NOT NULL,
            FOREIGN KEY (user_id)
                REFERENCES user (user_id),
            FOREIGN KEY (museum_id)
                REFERENCES museum (museum_id)
            )";
        $this->pdo->exec($sql);
    }

    public function addHistoric($email, $museum_name){
        $this->initHistoric();
        //recupération id de user et museum
        $id_user = $this->getUser_idByEmail($email);
        $id_museum = $this->getMuseum_idByName($museum_name);
        //test historique déjà présent
        if($this->testHistoric($id_user, $id_museum)){   
            //ajout dans la table de l'historique
            $sql = "INSERT INTO historic (user_id, museum_id)VALUES ('$id_user','$id_museum')";
            $this->pdo->exec($sql);
        }
        header('Location: http://calliopeFront/PageConnexion/compte.php');
    }

    private function getUser_idByEmail($email){
        $sql = 'SELECT user_id FROM user WHERE user_email= ? ';
        $test = $this->pdo->prepare($sql);
        $test->execute(array($email));
        $data = $test->fetch();
        return $data['user_id'];
    }

    private function getMuseum_idByName($name){
        $sql = 'SELECT museum_id FROM museum WHERE museum_name= ? ';
        $test = $this->pdo->prepare($sql);
        $test->execute(array($name));
        $data = $test->fetch();
        return $data['museum_id'];
    }

    private function testHistoric($user_id, $museum_id){
       $test = $this->pdo->prepare("SELECT museum_id FROM historic where user_id=?");
       $test->execute(array($user_id));
       $historic = $test->fetchAll();
        for($i =0 ; $i < $test->rowCount(); $i++){
           if($historic[$i]['museum_id']==$museum_id){
               echo "historique déjà présent";
               return false; //déjà présent
           }
        }
        return true; //pas présent on peut rajouter
    }

    public function getHistoric($email){
        $id_user = $this->getUser_idByEmail($email);
        $sql = "SELECT museum_name FROM historic JOIN museum USING (museum_id) WHERE user_id=?";
        $test = $this->pdo->prepare($sql);
        $test->execute(array($id_user));
        $array = $test->fetchAll();
        //convertir array en string
        $string = "";
        for($i =0; $i<$test->rowCount(); $i++){
            $string = $string.$array[$i]['museum_name'];
            $string = $string."<br>";
        }
        header("Location: http://calliopeFront/PageConnexion/compte.php?string=$string");
    }
}