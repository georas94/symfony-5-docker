<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route(path="/", name="home")
     */
    public function index(ProductRepository $productRepository): Response
    {
        $products = [];
        foreach ($productRepository->findAll() as $pdt) {

            $products[] = [
                'Nom' => $pdt->getName(),
                'Prix' => $pdt->getPrice(),
                'Référence' => $pdt->getReference()
            ];
        }

        return new JsonResponse($products);
    }
}
