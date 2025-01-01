<?php

namespace App;

use Illuminate\Database\Capsule\Manager as DB;
use App\Models\Student;

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

        return Student::get();
               
    }

    public function store($data){

        $result = Student::create($data);
    
        if($result){
            header('Location: index.php');
        }
    
    }

    public function show($id){
        return Student::find($id);
    }

    public function edit($id){
        return Student::find($id);
    }
    
   public function update($data){
        $result = Student::where('id', $data['id'])->update($data);

        if($result){
            header('Location: index.php');
        }
   }

   public function destroy($id){
        $result = Student::destroy($id);
        
        if($result){
            header('location: index.php');
        }

   }

}



