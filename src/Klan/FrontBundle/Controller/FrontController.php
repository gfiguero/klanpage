<?php

namespace Klan\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function indexAction()
    {
        return $this->render(':Front:index.html.twig');
    }
}
