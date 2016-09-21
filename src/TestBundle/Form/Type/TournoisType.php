<?php

namespace TestBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;



class TournoisType extends AbstractType
{
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name', null, array('label' => 'Nom du Jeu'))
            ->add('jeux')
            ->add('date')
            //->add('Type', null, array('mapped'=> false))
           
            ->add('Valider','submit')
        ;
    }

    public function setDefaultOption(OptionResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
           'data_class' => 'TestBundle\Entity\Tournois'
            ));
    }



	public function getName()
	{
	return 'tournois_form';
	}
}