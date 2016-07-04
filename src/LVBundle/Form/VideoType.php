<?php

namespace LVBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VideoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array(
                    'label' => 'Titre',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control titre-video',
                        'autocomplete' => 'off',
                    )
                )
            )
            ->add('idVideo', 'text', array(
                    'label' => '',
                    'attr' => array(
                        'class' => 'form-control id-video hide',
                        'placeholder' => 'Login',
                        'autocomplete' => 'off'
                    ),
                )
            ) ->add('description', 'text', array(
                    'label' => '',
                    'attr' => array(
                        'class' => 'form-control description-video hide',
                        'placeholder' => 'Login',
                        'autocomplete' => 'off'
                    ),
                )
            )
            ->add('subTitle', 'collection', array(
                    'label' => '',
                    'required' => false,
                    'type' => new SubTitleType(),
                    'allow_add' => true,
                    'allow_delete' => true,
                    'delete_empty' => true
                )
            )
            /*->add('lyrics', 'hidden', array(
                    'label' => 'lyrics',
                    'disabled' => true,
                    'attr' => array(
                        'class' => 'form-control',
                        'autocomplete' => 'off',
                    )
                )
            )*/;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LVBundle\Entity\Video'
        ));
    }
}
