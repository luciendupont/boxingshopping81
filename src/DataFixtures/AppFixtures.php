<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Client;
use App\Entity\Article;
use App\Entity\Commande;
use App\Entity\Categorie;
use App\Entity\Fournisseur;
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
                  ->setAdresse('7 mail roger salengro apt 55')
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


            $client = new Client();
            $client->setNomClient('dupont')
                  ->setPrenomClient('jean')
                  ->setAdresseClient('1 mail roger salengro')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('dupontjean@gmail.com');
            $manager->persist($client);

            $client1 = new Client();
            $client1->setNomClient('dupont')
                  ->setPrenomClient('pierre')
                  ->setAdresseClient('2 mail roger salengro')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('pierredupont@gmail.com');
            $manager->persist($client1);

            $client2 = new Client();
            $client2->setNomClient('dupont')
                  ->setPrenomClient('lucien')
                  ->setAdresseClient('3 mail roger salengro')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('dupontlucien@gmail.com');
            $manager->persist($client2);

            $client3 = new Client();
            $client3->setNomClient('dupont')
                  ->setPrenomClient('luc')
                  ->setAdresseClient('1 rue victorine autier')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('ldupont@gmail.com');
            $manager->persist($client3);

            $client4 = new Client();
            $client4->setNomClient('dupont')
                  ->setPrenomClient('louis')
                  ->setAdresseClient('11 rue victorine autier')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('lodupont@gmail.com');
            $manager->persist($client4);

            $client5 = new Client();
            $client5->setNomClient('dupont')
                  ->setPrenomClient('andre')
                  ->setAdresseClient('2 rue victorine autier')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('andredupont@gmail.com');
            $manager->persist($client5);

            $client = new Client();
            $client->setNomClient('dupont')
                  ->setPrenomClient('michel')
                  ->setAdresseClient('3 rue victorine autier')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('dupontmichel@gmail.com');
            $manager->persist($client);


            $client1 = new Client();
            $client1->setNomClient('dupont')
                  ->setPrenomClient('pierre')
                  ->setAdresseClient('2 mail roger salengro')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('pierredupont@gmail.com');
            $manager->persist($client1);

            $client2 = new Client();
            $client2->setNomClient('dupont')
                  ->setPrenomClient('lucien')
                  ->setAdresseClient('3 mail roger salengro')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('dupontlucien@gmail.com');
            $manager->persist($client2);

            $client3 = new Client();
            $client3->setNomClient('dupont')
                  ->setPrenomClient('luc')
                  ->setAdresseClient('1 rue victorine autier')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('ldupont@gmail.com');
            $manager->persist($client3);

            $client4 = new Client();
            $client4->setNomClient('dupont')
                  ->setPrenomClient('louis')
                  ->setAdresseClient('11 rue  victorine  autier')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('lodupont@gmail.com');
            $manager->persist($client4);

            $client5 = new Client();
            $client5->setNomClient('dupont')
                  ->setPrenomClient('andre')
                  ->setAdresseClient('2 rue victorine autier')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('andredupont@gmail.com');
            $manager->persist($client5);



            $client6 = new Client();
            $client6->setNomClient('dupont')
                  ->setPrenomClient('jacqueline')
                  ->setAdresseClient('11 mail roger salengro')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('dupontjacqueline@gmail.com');
            $manager->persist($client6);

            $client7 = new Client();
            $client7->setNomClient('dupont')
                  ->setPrenomClient('joelle')
                  ->setAdresseClient('12 mail roger salengro')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('dupontjoelle@gmail.com');
            $manager->persist($client7);

            $client8 = new Client();
            $client8->setNomClient('dupont')
                  ->setPrenomClient('joel')
                  ->setAdresseClient('13 mail roger salengro')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('dupontjoel@gmail.com');
            $manager->persist($client8);

            $client9 = new Client();
            $client9->setNomClient('dupont')
                  ->setPrenomClient('thierry')
                  ->setAdresseClient('15 mail roger salengro')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('tdupont@gmail.com');
            $manager->persist($client9);

            $client10 = new Client();
            $client10->setNomClient('dupont')
                  ->setPrenomClient('edouard')
                  ->setAdresseClient('14 mail roger salengro')
                  ->setCodePostalClient('80090')
                  ->setVilleClient('amiens')
                  ->setMailClient('duponte@gmail.com');
            $manager->persist($client10);

            $client11 = new Client();
            $client11->setNomClient('durand')
                  ->setPrenomClient('nina')
                  ->setAdresseClient('1 avenue henri martin')
                  ->setCodePostalClient('75016')
                  ->setVilleClient('paris')
                  ->setMailClient('durrandni@gmail.com');
            $manager->persist($client11);

            $client12 = new Client();
            $client12->setNomClient('durand')
                  ->setPrenomClient('ninon')
                  ->setAdresseClient('10 avenue henri martin')
                  ->setCodePostalClient('75016')
                  ->setVilleClient('paris')
                  ->setMailClient('durandnino@gmail.com');
            $manager->persist($client12);

            $client13 = new Client();
            $client13->setNomClient('durand')
                  ->setPrenomClient('sabrina')
                  ->setAdresseClient('11 avenue henri martin')
                  ->setCodePostalClient('75016')
                  ->setVilleClient('paris')
                  ->setMailClient('dusab@gmail.com');
            $manager->persist($client13);

            $client14 = new Client();
            $client14->setNomClient('durand')
                  ->setPrenomClient('sabine')
                  ->setAdresseClient('12 avenue henri martin')
                  ->setCodePostalClient('75016')
                  ->setVilleClient('paris')
                  ->setMailClient('sabined@gmail.com');
            $manager->persist($client14);

            $client15 = new Client();
            $client15->setNomClient('durand')
                  ->setPrenomClient('mohaed')
                  ->setAdresseClient('13 avenue henri martin')
                  ->setCodePostalClient('75016')
                  ->setVilleClient('paris')
                  ->setMailClient('momod@gmail.com');
            $manager->persist($client15);

            $client16 = new Client();
            $client16->setNomClient('durand')
                  ->setPrenomClient('boubker')
                  ->setAdresseClient('14 avenue henri martin')
                  ->setCodePostalClient('75016')
                  ->setVilleClient('paris')
                  ->setMailClient('bobdu@gmail.com');
            $manager->persist($client16);

            $client17 = new Client();
            $client17->setNomClient('durand')
                  ->setPrenomClient('ali')
                  ->setAdresseClient('15 avenue henri martin')
                  ->setCodePostalClient('75016')
                  ->setVilleClient('paris')
                  ->setMailClient('alid@gmail.com');
            $manager->persist($client17);

            $client18 = new Client();
            $client18->setNomClient('durand')
                  ->setPrenomClient('hedi')
                  ->setAdresseClient('16 avenue henri martin')
                  ->setCodePostalClient('75016')
                  ->setVilleClient('paris')
                  ->setMailClient('hedid@gmail.com');
            $manager->persist($client18);

            $client19 = new Client();
            $client19->setNomClient('durand')
                  ->setPrenomClient('mehdi')
                  ->setAdresseClient('17 avenue henri martin')
                  ->setCodePostalClient('75016')
                  ->setVilleClient('paris')
                  ->setMailClient('med@gmail.com');
            $manager->persist($client19);

            $client20 = new Client();
            $client20->setNomClient('durand')
                  ->setPrenomClient('kelly')
                  ->setAdresseClient('18 avenue henri martin')
                  ->setCodePostalClient('75016')
                  ->setVilleClient('paris')
                  ->setMailClient('keld@gmail.com');
            $manager->persist($client20);

            $client21 = new Client();
            $client21->setNomClient('durand')
                  ->setPrenomClient('fleur')
                  ->setAdresseClient('19 avenue henri martin')
                  ->setCodePostalClient('75016')
                  ->setVilleClient('paris')
                  ->setMailClient('dfleur@gmail.com');
            $manager->persist($client21);

            $client22 = new Client();
            $client22->setNomClient('durand')
                  ->setPrenomClient('perle')
                  ->setAdresseClient('21 avenue henri martin')
                  ->setCodePostalClient('75016')
                  ->setVilleClient('paris')
                  ->setMailClient('perled@gmail.com');
            $manager->persist($client22);

            $categorie = new Categorie();
            $categorie->setNomCategorie('equipement')
                  ->setImageArticle('1.jpg')

                  ->setCategorie(null);
            $manager->persist($categorie);

            $categorie1 = new Categorie();
            $categorie1->setNomCategorie('protection')
                  ->setImageArticle('2.jpg')
                  ->setCategorie(null);
            $manager->persist($categorie1);

            $categorie2 = new Categorie();
            $categorie2->setNomCategorie('gant')
                  ->setImageArticle('3.jpg')
                  ->setCategorie($categorie);
            $manager->persist($categorie2);

            $categorie3 = new Categorie();
            $categorie3->setNomCategorie('short')
                  ->setImageArticle('4.jpg')
                  ->setCategorie($categorie);
            $manager->persist($categorie3);

            $categorie4 = new Categorie();
            $categorie4->setNomCategorie('chaussure')
                  ->setImageArticle('5.jpg')
                  ->setCategorie($categorie);
            $manager->persist($categorie4);

            $categorie5 = new Categorie();
            $categorie5->setNomCategorie('casque')
                  ->setImageArticle('6.jpg')
                  ->setCategorie($categorie1);
            $manager->persist($categorie5);

            $categorie6 = new Categorie();
            $categorie6->setNomCategorie('protege dent')
                  ->setImageArticle('7.jpg')
                  ->setCategorie($categorie1);
            $manager->persist($categorie6);

            $categorie7 = new Categorie();
            $categorie7->setNomCategorie('coquille')
                  ->setImageArticle('8.jpg')
                  ->setCategorie($categorie1);
            $manager->persist($categorie7);

            $article = new Article();
            $article->setNomArticle('gant ffb')
                  ->setCategorie($categorie2)
                  ->setDescriptionArticle('gant de marque adidas sigle ffb')
                  ->setMarqueArticle('adidas')
                  ->setPrixArticle('95.00')
                  ->setImageArticle('g1.jpg');

            $manager->persist($article);


            $article1 = new Article();
            $article1->setNomArticle(' gant reyes  rouge')
                  ->setCategorie($categorie2)
                  ->setDescriptionArticle('gant reyes pour les  combats  professionnelles ')
                  ->setMarqueArticle('reyes')
                  ->setPrixArticle('219.00')
                  ->setImageArticle('g2.jpg');

            $manager->persist($article1);


            $article2 = new Article();
            $article2->setNomArticle('gant adidas  gold')
                  ->setCategorie($categorie2)
                  ->setDescriptionArticle('gant d entrainement')
                  ->setMarqueArticle('adidas')
                  ->setPrixArticle('55.00')
                  ->setImageArticle('g3.jpg');
            $manager->persist($article2);


            $article3 = new Article();
            $article3->setNomArticle('gant reyes bleu')
                  ->setCategorie($categorie2)
                  ->setDescriptionArticle('gant bleu   pour les combat professionelles ')
                  ->setMarqueArticle('reyes')
                  ->setPrixArticle('219.00')
                  ->setImageArticle('g4.jpg');
            $manager->persist($article3);

            $article4 = new Article();
            $article4->setNomArticle('short1')
                  ->setCategorie($categorie3)
                  ->setDescriptionArticle('short noir everlast')
                  ->setMarqueArticle('evrlast')
                  ->setPrixArticle('45.00')
                  ->setImageArticle('s1.jpg');
            $manager->persist($article4);

            $article5 = new Article();
            $article5->setNomArticle('short2')
                  ->setCategorie($categorie3)
                  ->setDescriptionArticle('short blanc reyes')
                  ->setMarqueArticle('reyes')
                  ->setPrixArticle('39.00')
                  ->setImageArticle('s2.jpg');
            $manager->persist($article5);

            $article6 = new Article();
            $article6->setNomArticle('short3')
                  ->setCategorie($categorie3)
                  ->setDescriptionArticle('short rouge elion')
                  ->setMarqueArticle('elion')
                  ->setPrixArticle('24.90')
                  ->setImageArticle('s3.jpg');
            $manager->persist($article6);

            $article7 = new Article();
            $article7->setNomArticle('short4')
                  ->setCategorie($categorie3)
                  ->setDescriptionArticle('short tricolore')
                  ->setMarqueArticle('adidas')
                  ->setPrixArticle('45.00')
                  ->setImageArticle('s4.jpg');
            $manager->persist($article7);

            $article8 = new Article();
            $article8->setNomArticle('chaussure1')
            ->setCategorie($categorie4)
                  ->setDescriptionArticle('chaussure blanche nike')
                  ->setMarqueArticle('nike')
                  ->setPrixArticle('189.00')
                  ->setImageArticle('ch1.jpg');
            $manager->persist($article8);

            $article9 = new Article();
            $article9->setNomArticle('chaussure2')
            ->setCategorie($categorie4)
                  ->setDescriptionArticle('chaussure bleu nike')
                  ->setMarqueArticle('nike')
                  ->setPrixArticle('189.00')
                  ->setImageArticle('ch2.jpg');
            $manager->persist($article9);

            $article10 = new Article();
            $article10->setNomArticle('chaussure3')
            ->setCategorie($categorie4)
                  ->setDescriptionArticle('chaussure adidas')
                  ->setMarqueArticle('adidas')
                  ->setPrixArticle('75.00')
                  ->setImageArticle('ch3.jpg');
            $manager->persist($article10);

            $article11 = new Article();
            $article11->setNomArticle('chaussure4')
            ->setCategorie($categorie4)
                  ->setDescriptionArticle('chaussure champboxing')
                  ->setMarqueArticle('champboxing')
                  ->setPrixArticle('68.90')
                  ->setImageArticle('ch4.jpg');
            $manager->persist($article11);

            $article12 = new Article();
            $article12->setNomArticle('casque1')
            ->setCategorie($categorie5)
                  ->setDescriptionArticle('casque elion marron')
                  ->setMarqueArticle('elion')
                  ->setPrixArticle('99.00')
                  ->setImageArticle('c1.jpg');
            $manager->persist($article12);

            $article13 = new Article();
            $article13->setNomArticle('casque2')
            ->setCategorie($categorie5)
                  ->setDescriptionArticle('gant amateur everlast')
                  ->setMarqueArticle('everlast')
                  ->setPrixArticle('95.00')
                  ->setImageArticle('c2.jpg');
            $manager->persist($article13);

            $article14 = new Article();
            $article14->setNomArticle('casque3')
            ->setCategorie($categorie5)
                  ->setDescriptionArticle('casque sparring')
                  ->setMarqueArticle('leone')
                  ->setPrixArticle('95.00')
                  ->setImageArticle('c3.jpg');
            $manager->persist($article14);

            $article15 = new Article();
            $article15->setNomArticle('casque4')
            ->setCategorie($categorie5)
                  ->setDescriptionArticle('casque adidas')
                  ->setMarqueArticle('adidas')
                  ->setPrixArticle('79.00')
                  ->setImageArticle('c4.jpg');
            $manager->persist($article15);

            $article16 = new Article();
            $article16->setNomArticle('protegedent1')
            ->setCategorie($categorie6)
                  ->setDescriptionArticle('protege dent enfant')
                  ->setMarqueArticle('shockdoctor')
                  ->setPrixArticle('7.95')
                  ->setImageArticle('pd1.jpg');
            $manager->persist($article16);

            $article17 = new Article();
            $article17->setNomArticle('protegedent2')
            ->setCategorie($categorie6)
                  ->setDescriptionArticle('protege dent adulte')
                  ->setMarqueArticle('shockdoctor')
                  ->setPrixArticle('9.95')
                  ->setImageArticle('pd2.jpg');
            $manager->persist($article17);

            $article18 = new Article();
            $article18->setNomArticle('protegedent3')
            ->setCategorie($categorie6)
                  ->setDescriptionArticle('protege dent bleu evol')
                  ->setMarqueArticle('shockdoctor')
                  ->setPrixArticle('28.95')
                  ->setImageArticle('pd3.jpg');
            $manager->persist($article18);

            $article19 = new Article();
            $article19->setNomArticle('protegedent4')
            ->setCategorie($categorie6)
                  ->setDescriptionArticle('protege dent noir')
                  ->setMarqueArticle('shockdoctor')
                  ->setPrixArticle('14.90')
                  ->setImageArticle('pd4.jpg');
            $manager->persist($article19);

            $article20 = new Article();
            $article20->setNomArticle('coquille1')
            ->setCategorie($categorie7)
                  ->setDescriptionArticle('coquille reyes')
                  ->setMarqueArticle('reyes')
                  ->setPrixArticle('129.00')
                  ->setImageArticle('co1.jpg');
            $manager->persist($article20);

            $article21 = new Article();
            $article21->setNomArticle('coquille2')
            ->setCategorie($categorie7)
                  ->setDescriptionArticle('coquille shockdoctor')
                  ->setMarqueArticle('shockdoctor')
                  ->setPrixArticle('29.95')
                  ->setImageArticle('co2.jpg');
            $manager->persist($article21);

            $article22 = new Article();
            $article22->setNomArticle('coquille3')
            ->setCategorie($categorie7)
                  ->setDescriptionArticle('coquille champboxing simple')
                  ->setMarqueArticle('champboxing')
                  ->setPrixArticle('10.00')
                  ->setImageArticle('co3.jpg');
            $manager->persist($article22);

            $article23 = new Article();
            $article23->setNomArticle('coquille4')
            ->setCategorie($categorie7)
                  ->setDescriptionArticle('coquillle adidas pro')
                  ->setMarqueArticle('adidas')
                  ->setPrixArticle('79.90')
                  ->setImageArticle('co4.jpg');
            $manager->persist($article23);


            $fournisseur = new Fournisseur();
            $fournisseur->setNomFournisseur('adidas')
                  ->setAdresseFournisseur('rue champs elysées')
                  ->setCodePostalFournniseur('75008')
                  ->setContactFournisseur('mohamed abdel ')
                  ->setVilleFournnisseur('paris')
                  ->setTelephoneFournniseur('01.03.05.04.09');
            $manager->persist($fournisseur);

            $fournisseur1 = new Fournisseur();
            $fournisseur1->setNomFournisseur('everlast')
                  ->setAdresseFournisseur('rue montaigne')
                  ->setCodePostalFournniseur('75008')
                  ->setContactFournisseur('michel dubloc')
                  ->setVilleFournnisseur('paris')
                  ->setTelephoneFournniseur('01.03.04.05.09');
            $manager->persist($fournisseur1);



            $fournisseur2 = new Fournisseur();
            $fournisseur2->setNomFournisseur('shockdoctor')
                  ->setAdresseFournisseur('boulevard  saint denis ')
                  ->setCodePostalFournniseur('75010')
                  ->setContactFournisseur(' sandrine delplanque')
                  ->setVilleFournnisseur('paris')
                  ->setTelephoneFournniseur('01.03.09.05.04');
            $manager->persist($fournisseur2);


            $fournisseur3 = new Fournisseur();
            $fournisseur3->setNomFournisseur('nike')
                  ->setAdresseFournisseur('rue general foch')
                  ->setCodePostalFournniseur('75008')
                  ->setContactFournisseur(' pierre forge')
                  ->setVilleFournnisseur('paris')
                  ->setTelephoneFournniseur('01.03.05.04.09');
            $manager->persist($fournisseur3);

            $fournisseur4 = new Fournisseur();
            $fournisseur4->setNomFournisseur('leone')
                  ->setAdresseFournisseur('rue du marais')
                  ->setCodePostalFournniseur('75006')
                  ->setContactFournisseur('sebastiano macini')
                  ->setVilleFournnisseur('paris')
                  ->setTelephoneFournniseur('01.09.05.04.03');
            $manager->persist($fournisseur4);

            $fournisseur5 = new Fournisseur();
            $fournisseur5->setNomFournisseur('reyes')
                  ->setAdresseFournisseur('rue montaigne')
                  ->setCodePostalFournniseur('75016')
                  ->setContactFournisseur('edouard plein')
                  ->setVilleFournnisseur('paris')
                  ->setTelephoneFournniseur('01.04.05.03.09');
            $manager->persist($fournisseur5);


            $fournisseur6 = new Fournisseur();
            $fournisseur6->setNomFournisseur('elion')
                  ->setAdresseFournisseur('rue barbes')
                  ->setCodePostalFournniseur('75018')
                  ->setContactFournisseur('mohamed  el galouchi ')
                  ->setVilleFournnisseur('paris')
                  ->setTelephoneFournniseur('01.05.03.04.09');
            $manager->persist($fournisseur6);

            $commande = new Commande();
            $commande->setNomCommande('dupont')
                  ->setDateCommande(new \DateTimeImmutable())
                  ->setDescriptionCommande('gant,casque')
                  ->setTotal(124.32)
                  ->setEtat(3);
            $manager->persist($commande);




































            $manager->flush();
      }
}
