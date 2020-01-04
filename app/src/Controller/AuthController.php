<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class AuthController extends AbstractController
{
    /**
     * @Route("/register")
     */
    public function Register()
    {
        return $this->render("Auth/register.html.twig");
    }


}