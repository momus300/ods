<?php

namespace AppBundle\Form;

use AppBundle\Entity\ActivityExportDefs;
use AppBundle\Entity\Applications;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
                    return '[app_id:' . $application->getAppId() . '] ' . $application->getName();
                },
                'multiple' => true,
                'attr' => ['class' => 'form-control selectpicker', 'data-live-search' => 'true']
            ])
            ->add('code', TextType::class, ['attr' => ['placeholder' => 'SKMOMA2017-submit']])
            ->add('name', TextType::class, ['attr' => ['placeholder' => 'Formularz zgłoszeniowy do konkursu']])
            ->add('description', TextType::class, ['required' => false, 'attr' => ['placeholder' => 'Oferta lojlanościowa 2017 dla duchownych z możliwością wypełlnienia formularza ofertowego lub jazdy próbnej']])
            ->add('actionName', TextType::class, ['required' => false, 'attr' => ['placeholder' => '201704_w_dobra_strone_ze_skoda']])
            ->add('actionType', TextType::class, ['attr' => ['placeholder' => 'zapis_konkurs/OF/JP']])
            ->add('url', TextType::class, ['required' => false, 'attr' => ['placeholder' => 'http://facebook.com']])
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
//            ->add('active', ChoiceType::class, ['choices' => array_combine(range(0, 1), range(0, 1))])
            ->add('activityExportDef', EntityType::class, [
                'class' => ActivityExportDefs::class,
                'choice_label' => 'name',
                'label' => 'Eksport do CRM',
                'required' => false,
                'multiple' => true,
                'attr' => ['class' => 'form-control selectpicker', 'data-live-search' => 'true']
            ])
            ->add('save', SubmitType::class, ['label' => 'Dodaj', 'attr' => ['class' => 'btn btn-success']]);
    }

}