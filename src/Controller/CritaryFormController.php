<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CritaryFormController extends AbstractController
{
    /**
     * @Route("/critary/form", name="critary_form")
     */
    public function index(): Response
    {
        return $this->render('critary_form/index.html.twig', [
            'controller_name' => 'CritaryFormController',
        ]);
    }
}
