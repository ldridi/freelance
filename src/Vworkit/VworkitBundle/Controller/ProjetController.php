<?php

namespace Vworkit\VworkitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjetController extends Controller
{
    public function deposerAction()
    {
        return $this->render('VworkitBundle:Projet:deposer.html.twig');
    }
}
