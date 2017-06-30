<?php

namespace AppBundle\Form;

use AppBundle\Entity\Activities;
use AppBundle\Entity\ActivityExportDefs;
use AppBundle\Entity\Applications;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;

class ActivityDataDefsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('activity', EntityType::class, [
                'class' => Activities::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('a')
                        ->orderBy('a.id', 'DESC');
                },
                'choice_label' => function ($activity) {
                    /** @var Activities $activity */
                    return sprintf('[%s] %s', $activity->getCode(), $activity->getName() );
                },
                'multiple' => true,
                'attr' => ['class' => 'form-control selectpicker', 'data-live-search' => 'true']
            ])
            ->add('data', EntityType::class, [
                'class' => ActivityExportDefs::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('a')
                        ->orderBy('a.id', 'DESC');
                },
                'choice_label' => function ($activity) {
                    /** @var Activities $activity */
                    return sprintf('[%s] %s', $activity->getCode(), $activity->getName() );
                },
                'multiple' => true,
                'attr' => ['class' => 'form-control selectpicker', 'data-live-search' => 'true']
            ])
            ->add('save', SubmitType::class, ['label' => 'Dodaj', 'attr' => ['class' => 'btn btn-success']]);
    }

}