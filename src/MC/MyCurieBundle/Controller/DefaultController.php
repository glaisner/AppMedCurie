<?php

namespace MC\MyCurieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MCMyCurieBundle:Default:index.html.twig');
    }
}
