<?php


namespace App\Controller;


use Symfony\Component\Routing\Annotation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
     * @Route("")
     */
    public function homepage()
    {
        return new Response('Hello');
    }

    public function show()
    {
    }
}