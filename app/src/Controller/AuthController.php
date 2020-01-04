<?php


namespace App\Controller;


use App\Auth\Form\RegistrationType;
use App\Auth\Model\UserModel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AuthController extends AbstractController
{
    /**
     * @Route("/register")
     * @param Request $request
     * @return Response
     */
    public function Register(Request $request)
    {
        $userModel = new UserModel();

        $form = $this->createForm(RegistrationType::class, $userModel);

        return $this->render(
            "Auth/register.html.twig",
            [
                'registrationForm' => $form->createView(),
            ]
        );
    }


}