<?php
//src/Controller/Formularz1.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
class Formularz1
{
    public function form1()
    {
        $number = random_int(0,100);
        return new Response(
            '<html><body>Lucky number:'.$number.'</body></html>'

        );
    }
}