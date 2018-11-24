<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        $a = 2 + 2;
        $b = 2 + 2 * 2;
        $c = $a * $b;
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
            'hello' => "Hello world",
            'calculated' => $c,
        ]);
    }
    /**
     * @Route("/about", name="about")
     */
    public function indexAction()
    {
        $a = 2 + 2;
        $b = 2 + 2 * 2;
        $c = $a * $b;
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
            'hello' => "Hello world",
            'calculated' => $c,
        ]);
    }
    /**
     * @Route("/post", name="post")
     */
    public function indexAction()
    {
        $a = 2 + 2;
        $b = 2 + 2 * 2;
        $c = $a * $b;
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
            'hello' => "Hello world",
            'calculated' => $c,
        ]);
    }
    /**
     * @Route("/posts", name="posts")
     */
    public function indexAction()
    {
        $a = 2 + 2;
        $b = 2 + 2 * 2;
        $c = $a * $b;
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
            'hello' => "Hello world",
            'calculated' => $c,
        ]);
    }
}
