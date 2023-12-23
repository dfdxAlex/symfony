<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/', name: 'app_test')]
    public function test(Request $request): Response
    {
        $rez = '';

        $name = $request->query->get('name');

        if ($name) {
            $rez = 'Привет '.$name.' к сожалению у нас ремонт.';
        }
        // return $this->render('test/index.html.twig', [
        //     'controller_name' => 'Привет, это метод test',
        // ]);
        return new Response('

<html>
  <body>
    '.$rez.'
    <img src="/images/repair.png">
  </body>
</html>

    ');
    }
}
