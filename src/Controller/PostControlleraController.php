<?php

namespace App\Controller;

//composer require symfony/twig-bundle

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PostControlleraController extends AbstractController
{
    #[Route('/all', name: 'all_news')]
    public function index()
    {
        return new Response('
            <h1>
              Список всех статей:
            </h1>
            <h3>
              Link:
              '.$this->generateUrl('all_news').'
            </h3>
        ');
    }

    #[Route('/user/{id}', name: 'user_id')]
    public function index_user($id)
    {
        return new Response('
            <h1>
              Список статей пользователя:'.$id.'
            </h1>
            <h3>
              Link:
              '.$this->generateUrl('user_id', ['id' => $id]).'
            </h3>
        ');
    }

    #[Route('/toogleFollowStatus/{id}', name: 'toogleFollowStatus_id')]
    public function indexToogleFollowStatus($id)
    {
        return new Response('
            <h1>
              Отслеживаем автора:'.$id.'
            </h1>
            <h3>
              Link:
              '.$this->generateUrl('toogleFollowStatus_id', ['id' => $id]).'
            </h3>
        ');
    }
}
