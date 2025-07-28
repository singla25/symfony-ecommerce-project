<?php

namespace App\Controller\user;

use App\Repository\Shop\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/user', name: 'user_')]
class UserShopController extends AbstractController
{
    #[Route('/shop', name: 'shop_page')]
    public function shop(ProductRepository $productRepository): Response
    {
        $userView = $productRepository->findAll();
        return $this->render('user/shop/shop_page.html.twig', [
            'products' => $userView,
        ]);
    }

    #[Route('/productDetails/{id}', name: 'productDetails')]
    public function productDetails(ProductRepository $productRepository, $id): Response
    {
        $productDetail = $productRepository->find($id);

        $relatedProducts = $productRepository->createQueryBuilder('p')
            ->where('p.productType = :type')
            ->andWhere('p.id != :id')
            ->setParameter('type', $productDetail->getProductType())
            ->setParameter('id', $id)
            ->setMaxResults(4)
            ->getQuery()
            ->getResult();

        return $this->render('user/product/productDetails.html.twig', [
            'product' => $productDetail,
            'relatedProducts' => $relatedProducts,
        ]);
    }

    #[Route('/add-to-cart/{id}', name: 'addToCart', methods: ['POST'])]
    public function addToCart(Request $request,ProductRepository $productRepository, $id): Response
    {
        if(!$this->getUser())
        {
            return  $this->json([
                'status' => false,
                'msg' => 'You are not logged in',
                'redirect' => '/login'
            ]);
        }
    }

    #[Route('/cart', name: 'cart_page')]
    public function cart(): Response
    {
        return $this->render('user/product/cart.html.twig');
    }
}
