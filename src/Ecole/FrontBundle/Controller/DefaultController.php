<?php

namespace Ecole\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcoleFrontBundle:Default:index.html.twig');
    }
}
