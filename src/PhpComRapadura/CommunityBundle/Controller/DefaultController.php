<?php

namespace PhpComRapadura\CommunityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CommunityBundle:Default:index.html.twig');
    }
}
