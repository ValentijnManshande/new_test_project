<?php


namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{

    public function homepage()
    {
        return new Response('Hello');
    }

    /**
     * @Route("/news/{slug}")
     */

    public function show($slug)
    {
        $comments = [
            'Whoop whoopw whoop',
            'Something else yet',
            'Yet something more'
        ];

        return $this->render('article/show.html.twig',[
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }
}