<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    /**
     * @Route("/welcome/{name}", name="welcome",
     defaults = {"name" = "world"},
     requirements={"name"="[A-Za-z]+"})
	*
     * @param $name
     * @return Response
     */
    public function index($name)
    {
    	
        return $this->render('welcome/index.html.twig', 
    		['some_var' => 'Worlddddd', 
    		'some_var2' => $name
    	]);
    }

    /**
    *@Route("/", name="helo_page")
    */
    public function homepage()
    {
    	return $this->render('hello_page.html.twig');
    }
}
