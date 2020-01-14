<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeiroController extends Controller
{
    //
    public function index(){
        $primeiros = ["teste1", "teste2", "teste2"];
        return $primeiros;
    }
    public function show(){
    
        return "show";
    }
    public function edit(){
    
        return "edit";
    }
    public function store(){
    
        return "store";
    }
    public function update(){
    
        return "update";
    }
    public function create(){
        
        return "create";
    }
    
}
