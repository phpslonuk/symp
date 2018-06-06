<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SAloIdController extends AbstractController
{
    /**
     * @Route("/s/alo/id", name="s_alo_id")
     */
    public function index()
    {
        return $this->render("welcome/index.html.twig", ['blala' => "bla"]);
    }
}
