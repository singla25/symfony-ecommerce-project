<?php

namespace App\Controller\user;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/user', name: 'user_')]
class UserBlogController extends AbstractController
{
    #[Route('/blog', name: 'blog_page')]
    public function blog(): Response
    {
        return $this->render('user/pages/blog.html.twig');
    }
}
