<?php

namespace AppBundle\Form;

use AppBundle\Entity\ActivityData;
use AppBundle\Entity\ActivityDataDefs;
use AppBundle\Entity\ActivityExportDefs;
use AppBundle\Entity\Applications;
use AppBundle\Entity\GiodoDefinition;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;

class ActivityApplicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('application', EntityType::class, [
                'class' => Applications::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('a')
                        ->orderBy('a.id', 'DESC');
                },
                'choice_label' => function ($application) {
                    /** @var Applications $application */
                    return '[' . $application->getAppId() . '] ' . $application->getName();
                },
                'multiple' => true,
                'attr' => ['class' => 'form-control selectpicker', 'data-live-search' => 'true']
            ])
            ->add('code', TextType::class, ['attr' => ['placeholder' => 'SKMOMA2017-submit']])
            ->add('name', TextType::class, ['attr' => ['placeholder' => 'Formularz zgłoszeniowy do konkursu']])
            ->add('description', TextType::class, ['required' => false, 'attr' => ['placeholder' => 'Oferta lojlanościowa 2017 dla duchownych z możliwością wypełlnienia formularza ofertowego lub jazdy próbnej']])
            ->add('actionName', TextType::class, ['required' => false, 'attr' => ['placeholder' => '201704_w_dobra_strone_ze_skoda']])
            ->add('actionType', TextType::class, ['attr' => ['placeholder' => 'zapis_konkurs/OF/JP']])
            ->add('url', UrlType::class, ['required' => false, 'attr' => ['placeholder' => 'http://facebook.com']])
            ->add('channel', ChoiceType::class, ['choices' => array_flip([
                'Internet',
                'Event',
                'Emailing',
                'Ipad',
                'Callcenter',
                'Mobile',
                'SMS',
                'TV'
            ])])
            ->add('activityExportDef', EntityType::class, [
                'class' => ActivityExportDefs::class,
                'choice_label' => 'name',
                'label' => 'Eksport do CRM',
                'required' => false,
                'multiple' => true,
                'attr' => ['class' => 'form-control selectpicker', 'data-live-search' => 'true']
            ])
            ->add('activityDataRequired', EntityType::class, [
                'class' => ActivityDataDefs::class,
                'choice_label' => function ($ctivityDataDefs) {
                    /** @var ActivityDataDefs $ctivityDataDefs */
                    return '[' . $ctivityDataDefs->getName() . '] ' . $ctivityDataDefs->getDescription();
                },
                'label' => 'Wymagane dane',
                'required' => false,
                'mapped' => false,
                'multiple' => true,
                'attr' => ['class' => 'form-control selectpicker', 'data-live-search' => 'true']
            ])
            ->add('activityDataOptional', EntityType::class, [
                'class' => ActivityDataDefs::class,
                'choice_label' => function ($ctivityDataDefs) {
                    /** @var ActivityDataDefs $ctivityDataDefs */
                    return '[' . $ctivityDataDefs->getName() . '] ' . $ctivityDataDefs->getDescription();
                },
                'label' => 'Opcjonalne dane',
                'required' => false,
                'mapped' => false,
                'multiple' => true,
                'attr' => ['class' => 'form-control selectpicker', 'data-live-search' => 'true']
            ])
            ->add('activityGiodoRequired', EntityType::class, [
                'class' => GiodoDefinition::class,
                'choice_label' => function ($giodoDefinition) {
                    /** @var GiodoDefinition $giodoDefinition */
                    return '[' . $giodoDefinition->getCode() . '] ' . $giodoDefinition->getDescription();
                },
                'label' => 'Wymagane zgody',
                'required' => false,
                'mapped' => false,
                'multiple' => true,
                'attr' => ['class' => 'form-control selectpicker', 'data-live-search' => 'true']
            ])
            ->add('activityGiodoOptional', EntityType::class, [
                'class' => GiodoDefinition::class,
                'choice_label' => function ($giodoDefinition) {
                    /** @var GiodoDefinition $giodoDefinition */
                    return '[' . $giodoDefinition->getCode() . '] ' . $giodoDefinition->getDescription();
                },
                'label' => 'Opcjonalne zgody',
                'required' => false,
                'mapped' => false,
                'multiple' => true,
                'attr' => ['class' => 'form-control selectpicker', 'data-live-search' => 'true']
            ])
//            ->add('activityGiodoRequired', ActivityGiodoDefsType::class, [
//                'data_class' => ActivityGiodoDefsType::class,
//                'required' => true,
//                'label' => 'Wymagane zgody'
//            ])
//            ->add('activityGiodoOptional', ActivityGiodoDefsType::class, [
//                'data_class' => ActivityGiodoDefsType::class,
//                'required' => false,
//                'label' => 'Opcjonalne zgody'
//            ])
            ->add('save', SubmitType::class, ['label' => 'Dodaj', 'attr' => ['class' => 'btn btn-success']]);
    }

}