<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LegalController extends AbstractController
{
    public function legal_notices(): Response
    {
        return $this->render('legal\legal_notices.html.twig', [
            'controller_name' => 'LegalController',
        ]);
    }

    public function terms_services(): Response
    {
        return $this->render('legal/tos.html.twig', [
            'controller_name' => 'LegalController',
        ]);
    }
}