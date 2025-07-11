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

    #[Route('/productDetails', name: 'productDetails_page')]
    public function productDetails(): Response
    {
        return $this->render('user/pages/productDetails.html.twig');
    }

    #[Route('/cart', name: 'cart_page')]
    public function cart(): Response
    {
        return $this->render('user/pages/cart.html.twig');
    }
}
