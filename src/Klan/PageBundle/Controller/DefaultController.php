<?php

namespace Klan\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KlanPageBundle:Default:index.html.twig');
    }
}
