<?php


namespace App\Controller;


use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(EntityManagerInterface $em)
    {
        $repository = $em->getRepository(Article::class);
        $articles = $repository->findAllPublishedOrderedByNewest();
        return $this->render('article/homepage.html.twig', ['articles' => $articles]);
    }

    /**
     * @Route("/news/{slug}", name="article_show")
     */

    public function show(Article $article)
    {
        $comments = [
            'Whoop whoop whoop',
            'Something else yet',
            'Yet something more'
        ];


        return $this->render('article/show.html.twig',[
            'title' => ucwords(str_replace('-', ' ', $article->getSlug())),
            'article' => $article,
            'slug' => $article->getSlug(),
            'comments' => $comments,
        ]);
    }

    /**
     * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
     */
    public function toggleArticleHeart($slug, LoggerInterface $logger)
    {
        // TO DO - actually heart/unheart the article!
        $logger->info('Article is being hearted!');

        return new JsonResponse(['hearts' => rand(5, 100)]);
    }
}