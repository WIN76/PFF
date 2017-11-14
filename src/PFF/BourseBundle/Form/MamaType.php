<?php

namespace PFF\BourseBundle\Form;


use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MamaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text')
            ->add('email', 'email')
            ->add('password', 'password')
            ->add('repeatPassword', 'password')
            ;
    }

    public function getName()
    {
        return 'pff_Mama';
    }

}
