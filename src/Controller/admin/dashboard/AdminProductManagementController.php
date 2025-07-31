<?php

namespace App\Controller\admin\dashboard;

use App\Entity\Shop\Product;
use App\Form\Shop\ProductType;
use App\Repository\Shop\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/admin', name: 'admin_')]
class AdminProductManagementController extends AbstractController
{
    #[Route('/shop', name: 'addProduct')]
    public function product(Request $request, ProductRepository $productRepository, EntityManagerInterface $em): Response
    {
        $viewProduct = $productRepository->findAll();

        $createProduct = new Product();
        $form = $this->createForm(ProductType::class, $createProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($createProduct);
            $em->flush();
            return $this->redirectToRoute('admin_addProduct');
        }
        return $this->render('admin/shop/index.html.twig', [
            'form' => $form->createView(),
            'products' => $viewProduct,
        ]);
    }

    #[Route('/edit/{id}', name: 'editProduct')]
    public function edit(Request $request, ProductRepository $productRepository, EntityManagerInterface $em, $id): Response
    {
        $editProductView = $productRepository->findAll();
        $edit = $productRepository->find($id);
        $form = $this->createForm(ProductType::class, $edit);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($edit);
            $em->flush();
            return $this->redirectToRoute('admin_addProduct');
        }
        return $this->render('admin/shop/editForm.html.twig', [
            'form' => $form->createView(),
            'products' => $editProductView
        ]);
    }

    #[Route('/delete/{id}', name: 'deleteProduct')]
    public function delete(ProductRepository $productRepository, EntityManagerInterface $em, $id): Response
    {
        $delete = $productRepository->find($id);
        $em->remove($delete);
        $em->flush();
        return $this->redirectToRoute('admin_addProduct');
    }
}
