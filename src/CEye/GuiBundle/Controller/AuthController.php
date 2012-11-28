<?php

namespace CEye\GuiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthController extends Controller
{
    public function loginAction($name)
    {
        return $this->render('CEyeGuiBundle:Default:index.html.twig', array('name' => $name));
    }
}
