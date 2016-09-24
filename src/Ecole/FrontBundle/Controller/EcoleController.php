<?php

namespace Ecole\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EcoleController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $entities = $this
            ->get('doctrine')
            ->getRepository('EcoleFrontBundle:Etablissement')
            ->findAll();
        return $this->render('EcoleFrontBundle:Ecole:index.html.twig', array(
            'entities' => $entities
        ));
    }

}
