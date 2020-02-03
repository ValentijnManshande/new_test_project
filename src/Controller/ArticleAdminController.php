<?php


namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @IsGranted("ROLE_ADMIN_ARTICLE")
 */

class ArticleAdminController extends BaseController
{
    /**
     * @Route("/admin/article/new", name="admin_article_new")
     */
    public function new(EntityManagerInterface $em)
    {
        die('to do');

        return new Response(sprintf('Hiya, new article id: %d slug: %s',
        $article->getID(),
        $article->getSlug()));
    }
}