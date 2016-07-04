<?php

namespace LVBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubTitleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('startTime', 'time', array(
                    'label' => 'Début',
                    'required' => true,
                    'widget' => 'single_text',
                    'attr' => array(
                        'class' => 'start_time form-control input-sm',
                        'autocomplete' => 'off',
                    )
                )
            )
            ->add('endTime', 'time', array(
                    'label' => 'Fin',
                    'required' => true,
                    'widget' => 'single_text',
                    'attr' => array(
                        'class' => 'end_time form-control input-sm',
//                        'class' => 'form-control',
                        'autocomplete' => 'off',
                    )
                )
            )
            ->add('text', 'textarea', array(
                    'label' => '',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control',
                        'autocomplete' => 'off',
                        'rows' => '1'
                    )
                )
            );
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LVBundle\Entity\SubTitle'
        ));
    }
}
