<?php

namespace Aristote\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AristoteCoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
