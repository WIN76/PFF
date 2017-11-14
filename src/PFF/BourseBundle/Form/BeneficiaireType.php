<?php

namespace PFF\BourseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BeneficiaireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numMlle','text',array('required'=>false))
            ->add('nom','text')
            ->add('prenom','text')
            ->add('dateNais','date', array('widget'=>'single_text','format' => 'dd/MM/yyyy'))
            ->add('adresse','text')
            ->add('numTel','text')
            ->add('sexe','choice', array('choices'=>array('M'=>'Masculin','F'=>'Feminin')))
            ->add('email','email')
            ->add('niveau','choice', array('placeholder'=>'-- Choisissez un niveau --','choices'=>array('Licence'=>'Licence','Master'=>'Master','Doctorat'=>'Doctorat')))
            ->add('statut','choice', array('placeholder'=>'-- Choisissez un statut --','choices'=>array('Etudiant'=>'Etudiant','Maitre Assistant'=>'Maitre Assistant')))
            ->add('faculte','entity', array('class'=>'PFFBourseBundle:Faculte', 'property'=>'codeFac', 'placeholder'=>'-- Choisissez une faculté --'))
            ->add('anenr','text',array('required'=>false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PFF\BourseBundle\Entity\Beneficiaire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pff_boursebundle_beneficiaire';
    }
}
