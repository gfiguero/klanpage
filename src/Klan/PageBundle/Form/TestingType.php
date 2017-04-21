<?php

namespace Klan\PageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestingType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder 
            ->add('a_string', null, array(
                'label' => 'testing.form.a_string',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'KlanPageBundle',
            )) 
            ->add('a_integer', null, array(
                'label' => 'testing.form.a_integer',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'KlanPageBundle',
            )) 
            ->add('a_boolean', null, array(
                'label' => 'testing.form.a_boolean',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'KlanPageBundle',
            )) 
            ->add('a_decimal', null, array(
                'label' => 'testing.form.a_decimal',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'KlanPageBundle',
            )) 
            ->add('a_float', null, array(
                'label' => 'testing.form.a_float',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'KlanPageBundle',
            )) 
            ->add('a_date', null, array(
                'label' => 'testing.form.a_date',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'KlanPageBundle',
            )) 
            ->add('a_time', null, array(
                'label' => 'testing.form.a_time',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'KlanPageBundle',
            )) 
            ->add('a_datetime', null, array(
                'label' => 'testing.form.a_datetime',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'KlanPageBundle',
            )) 
            ->add('a_text', null, array(
                'label' => 'testing.form.a_text',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'KlanPageBundle',
            )) 
            ->add('a_file', null, array(
                'label' => 'testing.form.a_file',
                'attr'  => array( 'label_col' => 4, 'widget_col' => 8 ),
                'translation_domain' => 'KlanPageBundle',
            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Klan\PageBundle\Entity\Testing'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'klan_pagebundle_testing';
    }


}
