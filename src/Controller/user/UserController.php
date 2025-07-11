<?php

namespace App\Controller\user;

use App\Entity\ContactUs;
use App\Entity\NewLetter;
use App\Form\ContactUsType;
use App\Form\NewLetterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/user', name: 'user_')]
class UserController extends AbstractController
{
    #[Route('/', name: 'home_page')]
    public function home(Request $request, EntityManagerInterface $em): Response
    {
        $newsLetter = new NewLetter();
        $form = $this->createForm(NewLetterType::class, $newsLetter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($newsLetter);
            $em->flush();
            return $this->redirectToRoute('user_home_page');
        }
        return $this->render('user/pages/index.html.twig', [
            'form' => $form,
            'newLetter' => $newsLetter,
        ]);
    }

    #[Route('/productDetails', name: 'productDetails_page')]
    public function productDetails(): Response
    {
        return $this->render('user/pages/productDetails.html.twig');
    }

    #[Route('/blog', name: 'blog_page')]
    public function blog(): Response
    {
        return $this->render('user/pages/blog.html.twig');
    }

    #[Route('/about', name: 'about_page')]
    public function about(Request $request, EntityManagerInterface $em): Response
    {
        $newLetterAbout = new NewLetter();
        $form = $this->createForm(NewLetterType::class, $newLetterAbout);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($newLetterAbout);
            $em->flush();
            return $this->redirectToRoute('user_about_page');
        }
        return $this->render('user/pages/about.html.twig', [
            'form' => $form,
            'newLetter' => $newLetterAbout,
        ]);
    }

    #[Route('/contact', name: 'contact_page')]
    public function contact(Request $request, EntityManagerInterface $em): Response
    {
        // First form: Contact form
        $contactUs = new ContactUs();
        $contactForm = $this->createForm(ContactUsType::class, $contactUs);
        $contactForm->handleRequest($request);

        if ($contactForm->isSubmitted() && $contactForm->isValid()) {
            $em->persist($contactUs);
            $em->flush();
            return $this->redirectToRoute('user_contact_page');
        }

        // Second form: Newsletter form
        $newsletter = new NewLetter();
        $newsletterForm = $this->createForm(NewLetterType::class, $newsletter);
        $newsletterForm->handleRequest($request);

        if ($newsletterForm->isSubmitted() && $newsletterForm->isValid()) {
            $em->persist($newsletter);
            $em->flush();
            return $this->redirectToRoute('user_contact_page');
        }

        return $this->render('user/pages/contact.html.twig', [
            'contactForm' => $contactForm->createView(),
            'newsletterForm' => $newsletterForm->createView(),
        ]);
    }

    #[Route('/cart', name: 'cart_page')]
    public function cart(): Response
    {
        return $this->render('user/pages/cart.html.twig');
    }
}
