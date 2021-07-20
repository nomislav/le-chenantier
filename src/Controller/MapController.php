<?php

namespace App\Controller;

use App\Entity\Map;
use App\Form\MapType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class MapController extends AbstractController
{

    public function new
    (
        Request $request
    ): Response
    {
        /* create new Map object */
        $critary = new Map();

        /* new form */
        $form = $this->createForm(MapType::class, $critary);

        /* handle request */
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $critary->setIsValided('true')
                    ->setAvailable('true');

            $em = $this->getDoctrine()->getManager();
            $em->persist($critary);
            $em->flush();

            return $this->redirectToRoute('registration');
        }

        return $this->render('map/map.html.twig', [
            'form'  => $form->createView(),
        ]);
    }
}
