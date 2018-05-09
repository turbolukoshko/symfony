<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    /**
     * @Route("/about", name="about")
     */
    public function index()
    {
        return $this->render('about/index.html.twig', [
            'title_about' => 'Pollena Minima | About',
        ]);
    }

    /**
     * @Route("/news1", name="news1")
     */
    public function news1()
    {
        return $this->render('about/news1.html.twig', [
            'title_news' => 'About | News',
        ]);
    }

    /**
     * @Route("/news2", name="news2")
     */
    public function news2()
    {
        return $this->render('about/news2.html.twig', [
            'title_news' => 'About | News',
        ]);
    }

    /**
     * @Route("/news3", name="news3")
     */
    public function news3()
    {
        return $this->render('about/news3.html.twig', [
            'title_news' => 'About | News',
        ]);
    }

    /**
     * @Route("/news4", name="news4")
     */
    public function news4()
    {
        return $this->render('about/news4.html.twig', [
            'title_news' => 'About | News',
        ]);
    }
}
