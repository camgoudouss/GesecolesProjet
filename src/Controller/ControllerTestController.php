<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ControllerTestController extends AbstractController
{
    /**
     * @Route("/", name="controller_test")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }
}
