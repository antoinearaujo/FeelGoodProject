<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TestBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('TestBundle:Post');
        $posts = $repository->getAll();

        return $this->render('TestBundle:Default:index.html.twig', array('posts' => $posts));
    }



    public function postAction(Request $request)
    {
    	$form = $this->createFormBuilder(new Post())
           ->add('pseudo')
           ->add('message')
           ->add('submit','submit')
           ->getForm();

        $form->handleRequest($request);

        if ($request->isMethod('post')&& $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em-> persist($form->getData());
            $em->flush();

            return $this->redirect($this->generateUrl('user_homepage'));
        }
      return $this->render('TestBundle:Post:post.html.twig', array('form' => $form->createView()));
    }
}
