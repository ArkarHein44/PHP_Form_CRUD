<?php

namespace App;

use Illuminate\Database\Capsule\Manager as DB;

class Database{   

    public function __construct(){
        $db = new DB();
    
        $db->addConnection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'test',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);

        
        // Make this Capsule instance available globally via static methods... (optional)
        $db->setAsGlobal();

        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $db->bootEloquent();

    }
    
    public function index(){

        $students = DB::table('studentsdb')->get();
        return $students;
       
    }

    public function store($data){

        $result = DB::table('studentsdb')->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'dob' => $data['dob'],
            'age' => $data['age'],
            'city' => $data['city']
        ]);

        if($result){
            header('Location: index.php');
        }
    
    }

    public function show($data){
        $student = DB::table('studentsdb')->where('id', $data)->first();
        return $student;
    }

    public function edit($data){
        $student = DB::table('studentsdb')->where('id', $data)->first();
        return $student;
    }
    
   public function update($data){
        $result = DB::table('studentsdb')
            ->where('id', $data['id'])
            ->update([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password'],
                'dob' => $data['dob'],
                'age' => $data['age'],
                'city' => $data['city']
            ]);

        if($result){
            header('Location: index.php');
        }
   }

   public function destroy($data){
        $result = DB::table('studentsdb')->where('id', $data)->delete();
        if($result){
            header('location: index.php');
        }

   }

}



