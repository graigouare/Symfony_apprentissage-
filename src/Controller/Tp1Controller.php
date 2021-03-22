<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Tp1Controller extends AbstractController
{
    /**
     * @Route("/tp1_1", name="tp1_1")
     */
    public function index(): Response
    {
        return $this->render('tp1/index.html.twig', [
            'controller_name' => 'Tp1Controller',
        ]);
    }
    
    /**
     * @Route("/tp1_2", name="tp1_2")
     */
    public function index1(): Response
    {
        return $this->render('tp1/index1.html.twig', [
            'names' => ['Fabricio', 'Vcitor', 'greg', 'df'],


        ]);
    }
}


