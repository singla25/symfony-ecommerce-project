<?php

namespace App\Controller\user;

use App\Entity\NewLetter;
use App\Form\NewLetterType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/user', name: 'user_')]
class UserHomePageController extends AbstractController
{
    #[Route('/', name: 'home_page')]
    public function home(Request $request, ProductRepository $productRepository, EntityManagerInterface $em): Response
    {
        $newsLetter = new NewLetter();
        $form = $this->createForm(NewLetterType::class, $newsLetter);
        $form->handleRequest($request);

        $newArrivals = $productRepository->findBy(['productType' => 'new']);
        $oldArrivals = $productRepository->findBy(['productType' => 'old']);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($newsLetter);
            $em->flush();
            return $this->redirectToRoute('user_home_page');
        }
        return $this->render('user/pages/index.html.twig', [
            'form' => $form,
            'newLetter' => $newsLetter,
            'newArrivals' => $newArrivals,
            'oldArrivals' => $oldArrivals,
        ]);
    }
}
