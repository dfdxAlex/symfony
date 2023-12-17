<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function test(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'Привет, это метод test',
        ]);
    }

    #[Route('/test1', name: 'app_test1')]
    public function test1(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'Привет, это метод test 1',
        ]);
    }
}
