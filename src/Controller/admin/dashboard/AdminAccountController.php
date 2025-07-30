<?php

namespace App\Controller\admin\dashboard;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin', name: 'admin_')]
class AdminAccountController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function dashboard(): Response
    {
        return $this->render('admin/dashboard/dashboard.html.twig');
    }

    #[Route('/profile', name: 'profile')]
    public function profile(): Response
    {
        return $this->render('admin/dashboard/profile.html.twig');
    }

    #[Route('/revenue', name: 'revenue')]
    public function revenue(): Response
    {
        return $this->render('admin/dashboard/revenue.html.twig');
    }

    #[Route('/blog', name: 'blog')]
    public function blog(): Response
    {
        return $this->render('admin/dashboard/blog.html.twig');
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        // This method can be blank - Symfony handles logout automatically
        throw new \Exception('This should not be reached.');
    }
}
