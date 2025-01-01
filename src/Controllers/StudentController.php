<?php

namespace App\Controllers;
use Symfony\Component\HttpFoundation\Request;

use App\Models\Student;
use Symfony\Component\VarDumper\Cloner\Stub;

class StudentController{

    private $query, $post;

    public function __construct()
    {
        $request = Request::createFromGlobals();
        $this->query = $request->query;
        $this->post = $request->request;
    }

    public function index(){       
         
        $students = Student::get();   
        return view("index.php", ["students"=>$students]);
    }

    public function show(){
        $student = Student::find($this->query->get('id'));
        return view('show.php', ["student"=>$student]);
    }

    public function create(){
        return view("create.php");
    }

    public function store(){
        $result = Student::create($this->post->all());
    
        if($result){
            header('Location: index');
        }    
    }

    public function edit(){
        $student = Student::find($this->query->get('id'));  
        // dd($student);
        return view("edit.php", ["student"=> $student]);
    }

    public function update(){
        $result = Student::where('id', $this->post->get('id'))->update($this->post->all());

        if($result){
            header('Location: index');
        }
    }

    public function destroy(){
        $result = Student::destroy($this->query->get('id'));
        
        if($result){
            header('location: index');
        }
    }

}


?>