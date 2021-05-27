<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MapController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('map/map.html.twig', [
            'map' => 'MapController',
        ]);
    }
}
