<?php

namespace Vworkit\VworkitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function contactAction()
    {
        return $this->render('VworkitBundle:Pages:contact.html.twig');
    }
}
