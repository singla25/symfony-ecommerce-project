<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home_page')]
    public function home(): Response
    {
        return $this->render('pages/index.html.twig');
    }

    #[Route('/shop', name: 'shop_page')]
    public function shop(): Response
    {
        return $this->render('pages/shop.html.twig');
    }

    #[Route('/blog', name: 'blog_page')]
    public function blog(): Response
    {
        return $this->render('pages/blog.html.twig');
    }

    #[Route('/about', name: 'about_page')]
    public function about(): Response
    {
        return $this->render('pages/about.html.twig');
    }

    #[Route('/contact', name: 'contact_page')]
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig');
    }

    #[Route('/cart', name: 'cart_page')]
    public function cart(): Response
    {
        return $this->render('pages/cart.html.twig');
    }
}
