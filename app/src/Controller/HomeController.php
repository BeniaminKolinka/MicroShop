<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/welcome", name="welcome_page")
     * @param Request $request
     * @return Response
     */
    public function Welcome(Request $request)
    {
        $name = $request->query->get('name');
        return $this->render(
            "Home/welcome.html.twig",
            [
                'name' => $name

            ]
        );
    }
}