<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class TestController extends AbstractController
{
    /**
     * @Route("/test/{id}", name="test1",defaults={"id"="ines"}, requirements={"id"="ines"})
     */
    public function index1($id): Response
    {
        var_dump($id);
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);

    }

    /**
     * @Route("/test/{id}", name="test2", requirements={"id"="\d"})
     */
    public function index2($id): Response
    {
        var_dump($id);
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);

    }
}
