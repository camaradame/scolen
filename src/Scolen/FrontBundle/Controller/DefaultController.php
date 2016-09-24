<?php

namespace Scolen\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ScolenFrontBundle:Default:index.html.twig');
    }
}
