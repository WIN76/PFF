<?php

namespace PFF\BourseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('diplome','text')
            ->add('dateDebut','integer')
            ->add('dateFin','integer')
            ->add('montF','number')
            ->add('lieuF','text')
            ->add('specialite','text')
            ->add('Beneficiaire', 'entity', array(
                'class'   =>'PFFBourseBundle:Beneficiaire',
                'property'=>'NumMlle',
                'multiple'=>false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PFF\BourseBundle\Entity\Formation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pff_boursebundle_formation';
    }
}
