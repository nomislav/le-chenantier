<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;

class ContactController extends AbstractController
{
    public function index(Request $request, MailerInterface $mailer)
    {
        $contactFormData = new Contact();

        $form = $this->createForm(ContactType::class, $contactFormData);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $contactFormData = $form->getData();

            $message = (new TemplatedEmail())
                ->from($contactFormData->getEmail())
                ->to('porekiw306@ovooovo.com')
                ->subject('Vous avez reçu un email')
                ->htmlTemplate('contact\contact_email.html.twig')
                ->context([
                    'contactFormDataEmail'         => $contactFormData->getEmail(),
                    'contactFormDataMessage'       => $contactFormData->getMessage(),
                ]);
            $mailer->send($message);
            $this->addFlash('success', 'Votre message a été envoyé');

            return $this->redirectToRoute('contact');
        }
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
