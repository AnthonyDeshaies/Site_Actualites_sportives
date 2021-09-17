<?php

namespace App\Controller;

use App\Repository\ArticlesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(ArticlesRepository $articlesRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'articles' => $articlesRepository->findByNumber(6),
        ]);
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function admin(ArticlesRepository $articlesRepository): Response
    {
        return $this->render('admin/index.html.twig', [
            'articles' => $articlesRepository->findByNumber(6),
        ]);
    }
    /**
     * @Route("/escalade", name="escalade")
     */
    public function escalade(ArticlesRepository $articlesRepository): Response
    {
        return $this->render('escalade/index.html.twig', [
            'articles' => $articlesRepository->findByNumber(6),
        ]);
    }
    /**
     * @Route("/surf", name="surf")
     */
    public function surf(ArticlesRepository $articlesRepository): Response
    {
        return $this->render('surf/index.html.twig', [
            'articles' => $articlesRepository->findByNumber(6),
        ]);
    }
    /**
     * @Route("/snowboard", name="snowboard")
     */
    public function snowboard(ArticlesRepository $articlesRepository): Response
    {
        return $this->render('snowboard/index.html.twig', [
            'articles' => $articlesRepository->findByNumber(6),
        ]);
    }
    /**
     * @Route("/VTT", name="VTT")
     */
    public function VTT(ArticlesRepository $articlesRepository): Response
    {
        return $this->render('VTT/index.html.twig', [
            'articles' => $articlesRepository->findByNumber(6),
        ]);
    }
}
