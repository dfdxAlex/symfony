<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewTestController extends AbstractController
{
    #[Route('/new/test', name: 'app_new_test')]
    public function index(): Response
    {
        $mas = [
            'news1'=>['title'=>'news1',
                      'test'=>'Text For News1 Text For News1 Text For News1 Text For News1 Text For News1 Text For News1'],
            'news2'=>['title'=>'news2',
                      'test'=>'Text For News2 Text For News2 Text For News2 Text For News2 Text For News2 Text For News2'],
            'news3'=>['title'=>'news3',
                      'test'=>'Text For News3 Text For News3 Text For News3 Text For News3 Text For News3 Text For News3'],
        ];
        return $this->render('new_test/index.html.twig', [
            'news' => $mas,
        ]);
    }
}
