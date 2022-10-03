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
            [
                'Images' => [
                    '15-59-03-1214-Hochzeit-A&F.jpg',
                    '2022_07_30_Steinburg_Hochzeit_Mara_Sebastian_Foto_xtrakt_media_Lukas_Seufert-37-von-61.jpg',
                    'Feiern_Hochz5.jpg',
                    'hochzeit-2.jpg',
                    'hochzeit-4.jpg',
                    'hochzeit-auf-den-ersten-blick.jpg',
                    'Verlobung-bis-zur-Hochzeit.jpg',
                    'vonderpragmatischenehezurromantischentraumhochzeit100__v-ARDFotogalerie.jpg'
                ]
            ]
        );
    }
}
