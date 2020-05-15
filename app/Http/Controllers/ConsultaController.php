<?php

namespace App\Http\Controllers;
use App\Http\Requests\ValidarRequest;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index(){
        $tok = csrf_token();
        return $tok;
    }

    public function store(ValidarRequest $request){
        $data = $request->all();
        return $data;
    }

}
