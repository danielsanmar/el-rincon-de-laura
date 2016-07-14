<?php

namespace MyRecipesDosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyRecipesDosBundle:Default:index.html.twig');
    }
}
