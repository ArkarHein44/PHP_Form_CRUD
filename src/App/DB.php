<?php

namespace App;

use PDO;
use PDOException;

class DB{

    protected $pdo;

    public function __construct()
    {
        try{
            $host = "localhost";
            $dbname = "test";
            $username = "arkarhein";
            $password = "Ayemarmar1995#";

            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $err) {
            echo "Connection failed: " . $err->getMessage();
        }        

    }

    public function index(){

        $query = "SELECT * FROM studentsdb";
        $statement = $this->pdo->query($query);            
            
        return $statement->fetchAll(PDO::FETCH_OBJ);                 
    }

    public function store($data){
        
        $statemnt = $this->pdo->prepare("
            INSERT INTO studentsdb (name, email, password, dob, age, city) 
            VALUES (:name, :email, :password, :dob, :age, :city)");

        $statemnt->bindParam(':name', $data['name']);
        $statemnt->bindParam(':email', $data['email']);
        $statemnt->bindParam(':password', $data['password']);
        $statemnt->bindParam(':dob', $data['dob']);
        $statemnt->bindParam(':age', $data['age']);
        $statemnt->bindParam(':city', $data['city']);

        if($statemnt->execute()){
            header('Location: index.php');
        }
    }

    // used in show and edit  
    public function show($id){

        $statement = $this->pdo->prepare("
        SELECT * FROM studentsdb WHERE id=:id");
        $statement->bindParam(':id', $id); 
     
        if($statement->execute()){
            return $statement->fetch(PDO::FETCH_OBJ);      
        }                   
    }

    public function update($data){

        $statemnt = $this->pdo->prepare("
            UPDATE studentsdb 
            SET name=:name, email=:email, password=:password, dob=:dob, age=:age, city=:city
            WHERE id=:id    
        ");

        $statemnt->bindParam(':id', $data['id']);
        $statemnt->bindParam(':name', $data['name']);
        $statemnt->bindParam(':email', $data['email']);
        $statemnt->bindParam(':password', $data['password']);
        $statemnt->bindParam(':dob', $data['dob']);
        $statemnt->bindParam(':age', $data['age']);
        $statemnt->bindParam(':city', $data['city']);  

        if($statemnt->execute()){
            header('Location: index.php');
        }  
        
    }

    public function destroy($id){

        $statement = $this->pdo->prepare("DELETE FROM studentsdb WHERE id=:id");
        $statement->bindParam(":id", $id);

        if($statement->execute()){
            header("location: index.php");
        }
    }

}


