<?php

namespace AppBundle\Form;

use AppBundle\Entity\GiodoDefinition;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivityGiodoDefsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('activityGiodoOptional', EntityType::class, [
                'class' => GiodoDefinition::class,
                'choice_label' => function ($giodoDefinition) {
                    /** @var GiodoDefinition $giodoDefinition */
                    return '[' . $giodoDefinition->getCode() . '] ' . $giodoDefinition->getDescription();
                },
                'mapped' => false,
                'multiple' => true,
                'attr' => ['class' => 'form-control selectpicker', 'data-live-search' => 'true']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'inherit_data' => true
        ));
    }

}