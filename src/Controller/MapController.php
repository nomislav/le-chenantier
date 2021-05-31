<?php

namespace App\Controller;

use App\Repository\MapRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MapController extends AbstractController
{
    public function index
    (
        MapRepository $mapRepository
    ): Response
    {

        $isValided = $mapRepository->findAll();

        return $this->render('map/map.html.twig', [
            'map' => $isValided,
        ]);
    }
}
