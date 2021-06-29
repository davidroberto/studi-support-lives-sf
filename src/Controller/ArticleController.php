<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    /**
     * @Route("/articles", name="articles_list")
     */
    public function articleList()
    {
        $articles = [
            [
                'id' => 1,
                'title' => 'Article 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam assumenda aut cum distinctio explicabo facilis fugit magnam tempora tempore? Aliquid blanditiis commodi delectus ea hic nihil quam qui ratione'
            ],
            [
                'id' => 2,
                'title' => 'Article 2',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam assumenda aut cum distinctio explicabo facilis fugit magnam tempora tempore? Aliquid blanditiis commodi delectus ea hic nihil quam qui ratione'
            ],
            [
                'id' => 3,
                'title' => 'Article 3',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam assumenda aut cum distinctio explicabo facilis fugit magnam tempora tempore? Aliquid blanditiis commodi delectus ea hic nihil quam qui ratione'
            ],
            [
                'id' => 4,
                'title' => 'Article 4',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam assumenda aut cum distinctio explicabo facilis fugit magnam tempora tempore? Aliquid blanditiis commodi delectus ea hic nihil quam qui ratione'
            ]
        ];

        $isSidebarDisplayed = true;

        return $this->render('articleList.html.twig', [
            'articles' => $articles,
            'isSidebarDisplayed' => $isSidebarDisplayed
        ]);
    }

    /**
     * @Route("/articles/{id}", name="article_show")
     */
    public function articleShow($id)
    {

        $articles = [
            [
                'id' => 1,
                'title' => 'Article 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam assumenda aut cum distinctio explicabo facilis fugit magnam tempora tempore? Aliquid blanditiis commodi delectus ea hic nihil quam qui ratione'
            ],
            [
                'id' => 2,
                'title' => 'Article 2',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam assumenda aut cum distinctio explicabo facilis fugit magnam tempora tempore? Aliquid blanditiis commodi delectus ea hic nihil quam qui ratione'
            ],
            [
                'id' => 3,
                'title' => 'Article 3',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam assumenda aut cum distinctio explicabo facilis fugit magnam tempora tempore? Aliquid blanditiis commodi delectus ea hic nihil quam qui ratione'
            ],
            [
                'id' => 4,
                'title' => 'Article 4',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam assumenda aut cum distinctio explicabo facilis fugit magnam tempora tempore? Aliquid blanditiis commodi delectus ea hic nihil quam qui ratione'
            ]
        ];

        $article = $articles[$id - 1];

        return $this->render('articleShow.html.twig', [
            'article' => $article
        ]);
    }

}
