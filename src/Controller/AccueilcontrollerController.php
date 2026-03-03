<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccueilcontrollerController extends AbstractController
{
    #[Route('/accueilcontroller', name: 'app_accueilcontroller')]
    public function index(): Response
    {
        return $this->render('accueilcontroller/index.html.twig', [
            'controller_name' => 'AccueilcontrollerController',
        ]);
    }

    #[Route('/bonjour/{prenom}', name: 'app_bonjour')]
public function bonjour(string $prenom): Response
{
    return new Response("<h1>Bonjour $prenom ! Bienvenue sur Symfony 7.4</h1>");
}
#[Route('/profil/{id}', name: 'app_profil', requirements: ['id' => '\d+'], defaults: ['id' => 1])]
public function profil(int $id): Response
{
    return new Response("<h1>Profil de l'utilisateur n°$id</h1>");
}
}
