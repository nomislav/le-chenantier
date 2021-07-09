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
                ->to('tanoxej309@godpeed.com')
                ->subject('Le Chenantier : Nouvelle demande')
                ->htmlTemplate('contact\contact_email.html.twig')
                ->context([
                    'contactFormDataName'         => $contactFormData->getName(),
                    'contactFormDataEmail'         => $contactFormData->getEmail(),
                    'contactFormDataPhone'         => $contactFormData->getPhone(),
                    'contactFormDataMessage'       => $contactFormData->getMessage(),
                ]);
            $mailer->send($message);
            $this->addFlash('success', 'Votre message a bien été envoyé');

            return $this->redirectToRoute('contact');
        }
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
