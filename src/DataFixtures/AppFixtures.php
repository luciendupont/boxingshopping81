<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $user = new User();
        $user->setNom('dupont')
              ->setPrenom('lucien')
              ->setEmail('lucienluludupont@gmail.com')
              ->setTelephone('0610041848')
              ->setPassword(password_hash('Amiens80', PASSWORD_DEFAULT))
              ->setRoles(['ROLE_ADMIN', 'ROLE_USER'])
              ->setAdresse('7 mail rogersalengro apt 55')
              ->setCp('80090')
              ->setVille('Amiens');
        $manager->persist($user);


        $user1 = new User();
        $user1->setPrenom('brigitte')
              ->setNom('dupont')
              ->setEmail('kelly@gmail.com')
              ->setTelephone('7896547800')
              ->setPassword(password_hash('password', PASSWORD_DEFAULT))
              ->setRoles(['ROLE_USER'])
              ->setAdresse('308 Post Avenue')
              ->setCp('69000')
              ->setVille('Lugdunum');
        $manager->persist($user1);

        $user2 = new User();
        $user2->setPrenom('nadine')
              ->setNom('dupont')
              ->setEmail('thom@gmail.com')
              ->setTelephone('7410001450')
              ->setPassword(password_hash('password', PASSWORD_DEFAULT))
              ->setRoles(['ROLE_USER'])
              ->setAdresse('1277 Sunburst Drive')
              ->setCp('69000')
              ->setVille('Lugdunum');
        $manager->persist($user2);

        $user3 = new User();
        $user3->setPrenom('pierre')
              ->setNom('dupont')
              ->setEmail('martha@gmail.com')
              ->setTelephone('78540001200')
              ->setPassword(password_hash('password', PASSWORD_DEFAULT))
              ->setRoles(['ROLE_USER'])
              ->setAdresse('478 Avenue Street')
              ->setCp('13000')
              ->setVille('Massalia');
        $manager->persist($user3);

        $user4 = new User();
        $user4->setPrenom('Ch')
              ->setNom('Dupont')
              ->setEmail('charlie@gmail.com')
              ->setTelephone('7458965550')
              ->setPassword(password_hash('password', PASSWORD_DEFAULT))
              ->setRoles(['ROLE_USER'])
              ->setAdresse('3140 Bartlett Avenue')
              ->setCp('75000')
              ->setVille('Lutetia');
        $manager->persist($user4);

        $user5 = new User();
        $user5->setPrenom('Claudia')
              ->setNom('dupont')
              ->setEmail('hedley@gmail.com')
              ->setTelephone('7451114400')
              ->setPassword(password_hash('password', PASSWORD_DEFAULT))
              ->setRoles(['ROLE_USER'])
              ->setAdresse('1119 Kinney Street')
              ->setCp('80000')
              ->setVille('Samarobriva');
        $manager->persist($user5);

        $user6 = new User();
        $user6->setPrenom('Vernon')
              ->setNom('dupont')
              ->setEmail('vonno@gmail.com')
              ->setTelephone('7414744440')
              ->setPassword(password_hash('password', PASSWORD_DEFAULT))
              ->setRoles(['ROLE_USER'])
              ->setAdresse('1234 Hazelwood Avenue')
              ->setCp('75000')
              ->setVille('Lutetia');
        $manager->persist($user6);

        $user7 = new User();
        $user7->setPrenom('Carlos')
              ->setNom('dupont')
              ->setEmail('carlos@gmail.com')
              ->setTelephone('7401456980')
              ->setPassword(password_hash('password', PASSWORD_DEFAULT))
              ->setRoles(['ROLE_USER'])
              ->setAdresse('2969 Hartland Avenue')
              ->setCp('13000')
              ->setVille('Massalia');
        $manager->persist($user7);

        $user8 = new User();
        $user8->setPrenom('Jonathan')
              ->setNom('dupont')
              ->setEmail('jonathan@gmail.com')
              ->setTelephone('7410256996')
              ->setPassword(password_hash('password', PASSWORD_DEFAULT))
              ->setRoles(['ROLE_USER'])
              ->setAdresse('1959 Limer Street')
              ->setCp('80000')
              ->setVille('Samarobriva');
        $manager->persist($user8);



        $manager->flush();
    }
}
