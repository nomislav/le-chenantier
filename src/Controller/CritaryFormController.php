<?php

namespace App\Controller;

use App\Entity\CritaryForm;
use App\Form\CritaryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CritaryFormController extends AbstractController
{
    public function new()
    {
        $critary = new CritaryForm();
        $form = $this->createForm(CritaryType::class, $critary);
        $formView = $form->createView();
        return $this->render('critary_form/new.html.twig', [
            "form" => $formView,
        ]);
    }
}
