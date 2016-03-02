<?php

namespace Vworkit\VworkitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VworkitBundle:Default:index.html.twig');
    }
}
