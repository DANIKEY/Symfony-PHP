<?php

namespace ProjetWestaflex\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjetWestaflexPlatformBundle:Default:index.html.twig');
    }
}
