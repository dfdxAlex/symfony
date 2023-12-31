<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/name', name: 'app_test')]
    public function test(string $name = ''): Response
    {
        $rez = '';
        if ($name) {
            $rez = 'Привет '.$name.' к сожалению у нас ремонт.';
        }
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
