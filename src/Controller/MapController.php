<?php

namespace App\Controller;

use App\Entity\Map;
use App\Form\MapType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class MapController extends AbstractController
{
    public function newSelectedPlace
    (
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

            /* add flash message on success */
            $this->addFlash('success', 'Votre emplacement a été selectionner');

            /* redirect to register route after chosing placeNo */
            return $this->redirectToRoute('map_place');
        }

        return $this->render('map/map.html.twig', [
            'map' => $place,
            'form' => $form->createView(),
        ]);
    }
}
