<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\UserPasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ProfilController extends AbstractController
{
    #[Route('/profil/{id}', name: 'app_profil')]
    #[Security('user === users')]
    public function index(User $users): Response
    {
        return $this->render('profil/index.html.twig', [
            'user' => $users,
        ]);
    }

    #[Route('/profil/modification/{id}', name: 'app_profil_modif')]
    #[Security('user === users')]
    public function modif(User $users, Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $hasher): Response
    {
        $form = $this->createForm(UserType::class, $users);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $users = $form->getData();
            $manager->persist($users);
            $manager->flush();

            return $this->redirectToRoute('app_profil',['id' => $users->getId()]);
        }

        return $this->render('profil/modification.html.twig', [
            'form' => $form->createView(),
            'user' => $users,
        ]);
    }

    #[Route('/password/{id}', name: 'app_password')]
    #[Security('user === users')]
    public function motDePasse(User $users, Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $hasher): Response
    {
        $form = $this->createForm(UserPasswordType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            if ($hasher->isPasswordValid($users,$form->getData()->getPlainPassword())) {
                $users->setPlainPassword(
                    $form->getData()->getNewPassword()
                );

                $users->setPassword(
                    $hasher->hashPassword(
                        $users,
                        $users->getPlainPassword()
                    )
                );

                $users->setPlainPassword(null);

                $manager->persist($users);
                $manager->flush();


                return $this->redirectToRoute('app_index');
            }
        }

        return $this->render('profil/password.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}