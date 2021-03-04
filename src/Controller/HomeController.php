<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        //$category = $this->getDoctrine()->getRepository(Category::class)->findAll();

        return $this->render('home/index.html.twig', [
            //'category' => $category,
        ]);
    }

    /**
     * @Route("/Myroko", name="myroko")
     */

    public function myroko(): Response
    {
        return $this->render('home/membres/myroko.html.twig');
    }

    /**
     * @Route("/Fyrox", name="fyrox")
     */

    public function fyrox(): Response
    {
        return $this->render('home/membres/fyrox.html.twig');
    }

    /**
     * @Route("/cazertox", name="cazertox")
     */

    public function cazertox(): Response
    {
        return $this->render('home/membres/cazertox.html.twig');
    }



    /**
     * @Route("/leetro", name="leetro")
     */

    public function leetro(): Response
    {
        return $this->render('home/membres/leetro.html.twig');
    }
}
