<?php
//src/Controller/Formularz1.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class Formularz1 extends AbstractController
{
    public function form1()
    {
        $number = random_int(0,100);

        return $this->render('Formularz1/Formularz1.html.twig',[
            'number' => $number
            ]);
    }
}