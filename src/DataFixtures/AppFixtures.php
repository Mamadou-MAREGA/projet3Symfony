<?php

namespace App\DataFixtures;
use App\Entity\Aliment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

       /* $a1 = new Aliment();
        $a1->setNom("Carotte")
           ->setPrix(1.80)
           ->setCalorie(36)
           ->setImage("aliments/carotte.png")
           ->setProteine(0.77)
           ->setGlucide(6.45)
           ->setLipide(0.26)
        ;
        $manager->persist($a1);

        $a2 = new Aliment();
        $a2->setNom("Patate")
           ->setPrix(2.80)
           ->setCalorie(20)
           ->setImage("aliments/patate.jpg")
           ->setProteine(0.80)
           ->setGlucide(7.45)
           ->setLipide(0.45)
        ;
        $manager->persist($a2);

        $a3 = new Aliment();
        $a3->setNom("Pomme")
           ->setPrix(0.80)
           ->setCalorie(30)
           ->setImage("aliments/pomme.png")
           ->setProteine(0.90)
           ->setGlucide(6.50)
           ->setLipide(0.30)
        ;
        $manager->persist($a3);

        $a4 = new Aliment();
        $a4->setNom("Tomate")
           ->setPrix(0.50)
           ->setCalorie(30)
           ->setImage("aliments/tomate.png")
           ->setProteine(1.77)
           ->setGlucide(5.45)
           ->setLipide(0.50)
        ;
        $manager->persist($a4);

        $manager->flush();*/
    }
}
