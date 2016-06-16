<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace MC\MyCurieBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
  public function indexAction()
  {
    $content = $this->get('templating')->render('MCMyCurieBundle:Advert:index.html.twig', array('nom' => 'nico'));
    
    return new Response($content);
  }
}

