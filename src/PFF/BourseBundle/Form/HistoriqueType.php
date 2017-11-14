<?php

namespace PFF\BourseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HistoriqueType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date','date', array('widget'=>'single_text','format' => 'dd/MM/yyyy'))
            ->add('beneficiaire','entity', array(
                'class'   =>'PFFBourseBundle:Beneficiaire',
                'property'=>'numMlle',
                'multiple'=>false,
                'required'=>false))
            ->add('fonds','entity', array(
                'class'   =>'PFFBourseBundle:Fonds',
                'property'=>'type'+'montant'+'annee',
                'multiple'=>false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PFF\BourseBundle\Entity\Historique'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pff_boursebundle_historique';
    }
}
