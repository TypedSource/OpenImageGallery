<?php

namespace App\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalleryViewController extends AbstractController
{
    #[Route('/gallery/', name: 'fron_gallery_view')]
    public function index(): Response
    {
        return $this->render('frontend/gallery/view.html.twig',
            []
        );
    }
}
