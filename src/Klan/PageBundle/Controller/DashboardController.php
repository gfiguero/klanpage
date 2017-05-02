<?php

namespace Klan\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('KlanPageBundle:Dashboard:index.html.twig');
    }
}
