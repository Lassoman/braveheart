<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController 
{
    public function index()
    {
        var_dump("Ca fonctionne");
        die();
    }
    public function test( Request $request)
    {
        dump($request);
        //$request = Request::createFromGlobals();
        //dump($request); (le dump me permet de voir ce quil y a dans l'objet $requete)

        // $age = 0;
        // if(!empty($_GET['age'])) {
        //    $age= $_GET['age'];
        // }
        $age = $request->attributes->get('age'); //ici on dit que la variable $age ='age' = a ce qu"on ma envoyé dans la requete
        return new Response("vous avez $age ans");
        
    }
}
