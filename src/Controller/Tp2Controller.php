<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Tp2Controller extends AbstractController
{
    /**
     * @Route("/tp2", name="tp2")
     */
    public function index(): Response
    {
        return $this->render('tp2/index.html.twig', [
            'controller_name' => 'Tp2Controller',
        ]);
    }
}
