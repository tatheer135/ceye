<?php

namespace CEye\GuiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CEyeGuiBundle:Default:index.html.twig', array('name' => "Herp Derp", "page_title" => "Welcome!"));
    }
}
