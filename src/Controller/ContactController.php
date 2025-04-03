<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contactscontroller', name: 'app_contacts_controller', methods:'GET')]
    public function listeContact(ContactRepository $repo): Response
    { 
        $lesContacts=$repo->findAll();
        return $this->render('contact_controller/listeContacts.html.twig',[
            'lesContacts' => $lesContacts
        ]);
    }
}
