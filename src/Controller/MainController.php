<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/subscribe')]
    public function index()
    {
        return new Response(content:'<h1>First time Symfony</h1>');
    }

    #[Route('/subscribe/{email}')]
    public function subscribe(string $email)
    {
        return new Response('email: '.$email);
    }
}
