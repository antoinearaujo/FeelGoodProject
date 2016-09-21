<?php

namespace TestBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;



class SheetType extends AbstractType
{
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name', null, array('label' => 'Nom du Jeu'))
            ->add('Console')
            ->add('Etat')
            //->add('Type', null, array('mapped'=> false))
            ->add('Prix')
            ->add('Valider','submit')
        ;
    }

    public function setDefaultOption(OptionResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
           'data_class' => 'TestBundle\Entity\Sheet'
            ));
    }



	public function getName()
	{
	return 'sheet_form';
	}
}