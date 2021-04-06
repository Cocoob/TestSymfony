<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\TestRepository;

class BrandNewController extends AbstractController
{
    /**
     * @Route("/", name="brand_new")
     */
    public function index(TestRepository $TestRepository): Response
    {
        return $this->render('brand_new/index.html.twig', [
            'controller_name' => 'Corentin',
            'test'=>$TestRepository->findAll(),
        ]);
    }
}


