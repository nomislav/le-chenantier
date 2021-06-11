<?php

namespace App\Controller;

use App\Entity\Map;
use App\Form\MapType;
use App\Repository\MapRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class MapController extends AbstractController
{
    public function newSelectedPlace
    (
        MapRepository $mapRepository,
        Request $request
    ): Response
    {
        /* create new Map */
        $place = new Map();

        /* new form */
        $form = $this->createForm(MapType::class, $place);

        /* handle request */
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($place);
            $entityManager->flush();

            /* set place isValided by user */
            $place->setIsValided(true);

            /* set datetime when user valid his place */
            $place->setStart(new \DateTimeImmutable('now'));

            /* add flash message on success */
            $this->addFlash('success', 'Votre emplacement a été selectionner');

            /* redirect to map_place route after sending */
            return $this->redirectToRoute('map_place');
        }

        return $this->render('map/map.html.twig', [
            'map' => $place,
            'form' => $form->createView(),
        ]);
    }
}
