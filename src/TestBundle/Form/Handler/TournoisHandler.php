<?php

namespace TestBundle\Form\Handler;


use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class TournoisHandler
{
    protected $formm;
    protected $request;
    protected $em;

    /**
     * @param Form $formm
     * @param Request $request
     */
    public function __construct(Form $formm, Request $request, EntityManager $em)
    {
        $this->formm = $formm;
        $this->request = $request;
        $this->em = $em;
    }

    /**
     * @return bool
     */
    public function process()
    {
        $this->formm->handleRequest($this->request);

        if ($this->request->isMethod('post') && $this->formm->isValid()) {
            $this->onSuccess();

            return true;
        }

        return false;
    }

    /**
     * @return Form
     */
    public function getForm()
    {
        return $this->formm;
    }

    /**
     *
     */
    protected function onSuccess()
    {
       
        $this->em->persist($this->formm->getData());
        $this->em->flush();
    
    }
}