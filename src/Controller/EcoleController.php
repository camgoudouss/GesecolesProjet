<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class EcoleController extends AbstractController
{

    public function index()
    {
        return $this->render('ecole/index.html.twig');
    }

    public function gesecole()
    {
        return $this->render('ecole/gesecole.html.twig');
    }

    public function gespaye()
    {
        return $this->render('ecole/gespaye.html.twig');
    }

    public function gesperso()
    {
        return $this->render('ecole/gesperso.html.twig');
    }

    public function gesfinance()
    {
        return $this->render('ecole/gesfinance.html.twig');
    }
}
