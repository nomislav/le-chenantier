<?php

namespace App\Controller;

use App\Entity\CritaryForm;
use App\Form\CritaryType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CritaryFormController extends AbstractController
{
    public function new(Request $request)
    {
        // creates a new data
        $critary = new CritaryForm();

        // gets the form
        $form = $this->createForm(CritaryType::class, $critary);
        $form->handleRequest($request);

        // if the form has been submitted and has been validated
        if($form->isSubmitted() && $form->isValid()){
            // saves in database
            $em = $this->getDoctrine()->getManager();
            $em->persist($critary);
            $em->flush();
            // displays the map
            return $this->redirectToRoute('map_place');
        }

        // displays the view
        $formView = $form->createView();
        return $this->render('critary_form/new.html.twig', [
            "form" => $formView,
        ]);
    }
}
