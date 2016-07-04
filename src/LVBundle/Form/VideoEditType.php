<?php

namespace LVBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VideoEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           // ->remove('subTitle')
            ->add('lyrics', 'hidden', array(
                    'label' => 'lyrics',
                    'disabled' => true,
                    'attr' => array(
                        'class' => 'form-control',
                        'autocomplete' => 'off',
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
            'data_class' => 'LVBundle\Entity\Video'
        ));
    }
    
     public function getParent()
    {
        return new VideoType();
    }
}
