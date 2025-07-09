<?php

namespace App\Controller;

use App\Entity\NewLetter;
use App\Form\NewLetterType;
use App\Repository\NewLetterRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home_page')]
    public function home(Request $request, NewLetterRepository $newLetterRepository, EntityManagerInterface $em): Response
    {
        $newLetter = new NewLetter();
        $form = $this->createForm(NewLetterType::class, $newLetter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($newLetter);
            $em->flush();
            return $this->redirectToRoute('home_page');
        }
        return $this->render('pages/index.html.twig', [
            'form' => $form,
            'newLetter' => $newLetter,
        ]);
    }

    #[Route('/shop', name: 'shop_page')]
    public function shop(): Response
    {
        return $this->render('pages/shop.html.twig');
    }

    #[Route('/productDetails', name: 'productDetails_page')]
    public function productDetails(): Response
    {
        return $this->render('pages/productDetails.html.twig');
    }

    #[Route('/blog', name: 'blog_page')]
    public function blog(): Response
    {
        return $this->render('pages/blog.html.twig');
    }

    #[Route('/about', name: 'about_page')]
    public function about(Request $request, NewLetterRepository $newLetterRepository, EntityManagerInterface $em): Response
    {
        $newLetterAbout = new NewLetter();
        $form = $this->createForm(NewLetterType::class, $newLetterAbout);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($newLetterAbout);
            $em->flush();
            return $this->redirectToRoute('about_page');
        }
        return $this->render('pages/about.html.twig', [
            'form' => $form,
            'newLetter' => $newLetterAbout,
        ]);
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
