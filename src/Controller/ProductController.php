<?php

namespace App\Controller;

use App\Entity\ProductDetail;
use App\Form\ProductDetailType;
use App\Repository\ProductDetailRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function user(ProductDetailRepository $productDetailRepository): Response
    {
        $userView = $productDetailRepository->findAll();

        return $this->render('index.html.twig', [
            'products' => $userView,
        ]);

    }


}

