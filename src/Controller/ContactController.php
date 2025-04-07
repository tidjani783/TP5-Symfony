<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contactscontroller', name: 'app_contacts_controller', methods:'GET')]
    public function listeContact(ContactRepository $repo)
    { 
        $lesContacts=$repo->findAll();
        ($lesContacts);
        return $this->render('contact_controller/listeContacts.html.twig',[
            'lesContacts' => $lesContacts
        ]);
    }

   #[Route('/contactcontroller/{id}', name: 'app_ficheContact_controller', methods:'GET')]
    public function ficheContact(leContact $leContact )
    { 
        return $this->render('contact_controller/ficheContact.html.twig',[
            'leContact' => $leContact
        ]);
    } 
}
