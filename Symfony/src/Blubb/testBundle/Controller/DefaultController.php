<?php

namespace Blubb\testBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BlubbtestBundle:Default:index.html.twig', array('name' => $name));
    }
}
