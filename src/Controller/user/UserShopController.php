<?php

namespace App\Controller\user;

use App\Repository\ProductDetailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/user', name: 'user_')]
class UserShopController extends AbstractController
{
    #[Route('/shop', name: 'shop_page')]
    public function shop(ProductDetailRepository $productDetailRepository): Response
    {
        $userView = $productDetailRepository->findAll();
        return $this->render('user/shop/shop_page.html.twig', [
            'products' => $userView,
        ]);
    }
}
