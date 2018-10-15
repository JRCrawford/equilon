<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class HomeController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
         return new Response('OMG! My first page already! WOOO!');
    }

}