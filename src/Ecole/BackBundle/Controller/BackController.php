<?php

namespace Ecole\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcoleBackBundle:Default:index.html.twig');
    }
}
