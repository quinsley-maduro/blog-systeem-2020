<?php

namespace App\Controller;

use App\Repository\BlogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(blogRepository $blogRepository)
    {
        $memo = 'U moet inloggen om een melding te kunnen ontvangen';
        return $this->render('default/index.html.twig', [
            'Album_titel' => 'Het actuele voetbal nieuws',
            'blogs'=> $blogRepository->findAll(),
        ]);
    }
}
