<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StoryboardController extends AbstractController
{
    public function index()
    {
        return $this->render('storyboard/index.html.twig', [
            'controller_name' => 'StoryboardController',
        ]);
    }
}
