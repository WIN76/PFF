<?php

namespace PFF\BourseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FaculteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomFac','text')
            ->add('codeFac','text')
            ->add('universite', 'entity', array(
                'class'   =>'PFFBourseBundle:Universite',
                'property'=>'CodeUniv',
                'multiple'=>false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PFF\BourseBundle\Entity\Faculte'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pff_boursebundle_faculte';
    }
}
