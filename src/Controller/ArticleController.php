<?php


namespace App\Controller;


use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    /**
     * @Route("/articles", name="articles_list")
     */
    public function articleList(ArticleRepository $articleRepository)
    {
        $articles = $articleRepository->findAll();

        return $this->render('articleList.html.twig', [
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/articles/{id}", name="article_show")
     */
    public function articleShow($id, ArticleRepository $articleRepository)
    {
        $article = $articleRepository->find($id);

        return $this->render('articleShow.html.twig', [
            'article' => $article
        ]);
    }

}
