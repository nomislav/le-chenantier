<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StoryboardController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('storyboard/index.html.twig', [
            'controller_name' => 'StoryboardController',
        ]);
    }
}
