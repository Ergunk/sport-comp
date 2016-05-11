<?php

namespace CampsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CampsBundle:Default:index.html.twig');
    }
}
