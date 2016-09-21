<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function loginAction()
    {
        return $this->render('UserBundle:User:login.html.twig');
    }

     public function inscriptionAction()
    {
        return $this->render('UserBundle:User:inscription.html.twig');
    }
}
