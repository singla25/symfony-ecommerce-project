<?php

namespace App\Controller\user;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
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

    #[Route('/productDetails', name: 'productDetails_page')]
    public function productDetails(): Response
    {
        return $this->render('user/pages/productDetails.html.twig');
    }

    #[Route('/cart', name: 'cart_page')]
    public function cart(SessionInterface $session): Response
    {
        $cart = $session->get('cart', []);
        return $this->render('user/pages/cart.html.twig', [
            'cart' => $cart,
        ]);
    }

    #[Route('/add-to-cart/{id}', name: 'add_to_cart')]
    public function addToCart(Product $product, Request $request, SessionInterface $session): Response
    {
        $cart = $session->get('cart', []);

        $productId = $product->getId();
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += 1;
        } else {
            $cart[$productId] = [
                'product' => $product,
                'quantity' => 1,
            ];
        }

        $session->set('cart', $cart);

        $this->addFlash('success', $product->getProductName().' added to cart!');

        return $this->redirect($request->headers->get('referer'));
    }

    #[Route('/remove-from-cart/{id}', name: 'remove_cart')]
    public function removeFromCart(int $id, SessionInterface $session): Response
    {
        $cart = $session->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }
        $session->set('cart', $cart);

        return $this->redirectToRoute('user_cart_page');
    }
}
