<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'title_blog' => 'Pollena Minima | Blog',
        ]);
    }

    /**
     * @Route("/article1", name="article1")
     */
    public function article1()
    {
        return $this->render('blog/article1.html.twig', [
            'title_article' => 'Blog | Article',
        ]);
    }

    /**
     * @Route("/article2", name="article2")
     */
    public function article2()
    {
        return $this->render('blog/article2.html.twig', [
            'title_article' => 'Blog | Article',
        ]);
    }

    /**
     * @Route("/article3", name="article3")
     */
    public function article3()
    {
        return $this->render('blog/article3.html.twig', [
            'title_article' => 'Blog | Article',
        ]);
    }

    /**
     * @Route("/article4", name="article4")
     */
    public function article4()
    {
        return $this->render('blog/article4.html.twig', [
            'title_article' => 'Blog | Article',
        ]);
    }



}
