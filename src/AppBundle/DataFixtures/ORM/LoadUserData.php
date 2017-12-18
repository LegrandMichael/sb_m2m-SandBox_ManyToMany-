<?php 

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load (ObjectManager $manager)
    {
        //Create 20 users
        for ($i = 0; $i < 20; $i++){
            $user = new User();
            $user->setFirstname('utilisateur');
            $user->setLastName("lastname");
            $user->setPhoneNumber("0402030405");
            $user->setAddress("Chemin de Sainte Marie");
            $user->setZipCode("11000");
            $user->setCity("Carcassonne");
            $manager->persist($user);
        }
        $manager->flush();
    }
}