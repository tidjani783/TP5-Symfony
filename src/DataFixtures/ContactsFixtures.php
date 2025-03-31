<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker=Factory::create("fr_FR");
        $genres=["male","female"];
        $sxe=mt_rand(0,1);
        if ($sexe==0) {
            $type="men";
        }else {
            $type="women";
        }

        $contact=new Contact();
        $contact->setNom($faker->lastName())
                ->setPrenom($faker->firstName($genres[mt_rand(0,1)]))
                ->setRue($faker->streetAddress())
                ->setCp($faker->numberBetween(75000,92000))
                ->setVille($faker->city())
                ->setMail($faker->email())
                ->setAvatar("https://randomuser.me/api/portraits/men");

        $manager->flush();
    }
}

