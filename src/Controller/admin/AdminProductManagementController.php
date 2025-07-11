<?php

namespace App\Controller\admin;

use App\Entity\ProductDetail;
use App\Form\ProductDetailType;
use App\Repository\ProductDetailRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/admin', name: 'admin_')]
class AdminProductManagementController extends AbstractController
{
    #[Route('/', name: 'products')]
    public function product(Request $request, ProductDetailRepository $productDetailRepository, EntityManagerInterface $em): Response
    {
        $viewProduct = $productDetailRepository->findAll();

        $createProduct = new ProductDetail();
        $form = $this->createForm(ProductDetailType::class, $createProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($createProduct);
            $em->flush();
            return $this->redirectToRoute('admin_products');
        }
        return $this->render('admin/shop/index.html.twig', [
            'form' => $form->createView(),
            'products' => $viewProduct,
        ]);
    }

    #[Route('/edit/{id}', name: 'editProduct')]
    public function edit(Request $request, ProductDetailRepository $productDetailRepository, EntityManagerInterface $em, $id): Response
    {
        $editProductView = $productDetailRepository->findAll();
        $edit = $productDetailRepository->find($id);
        $form = $this->createForm(ProductDetailType::class, $edit);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($edit);
            $em->flush();
            return $this->redirectToRoute('admin_editProduct', ['id' => $id]);
        }
        return $this->render('admin/shop/editForm.html.twig', [
            'form' => $form->createView(),
            'products' => $editProductView
        ]);
    }

    #[Route('/delete/{id}', name: 'deleteProduct')]
    public function delete(ProductDetailRepository $productDetailRepository, EntityManagerInterface $em, $id): Response
    {
        $delete = $productDetailRepository->find($id);
        $em->remove($delete);
        $em->flush();
        return $this->redirectToRoute('admin_products');
    }
}
