<?php

namespace AppBundle\Form;

use AppBundle\Entity\Applications;
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
                'choice_label' => function ($application) {
                    /** @var Applications $application */
                    return '[app_id:' . $application->getAppId() . '] ' . $application->getName();
                },
                'class' => Applications::class,
                'multiple' => true,
                'attr' => ['class' => 'form-control selectpicker', 'data-live-search' => 'true']
            ])
            ->add('code', TextType::class, ['attr' => ['placeholder' => 'Przykład: SKMOMA2017-submit']])
            ->add('name', TextType::class, ['attr' => ['placeholder' => 'Przykład: Formularz zgłoszeniowy do konkursu']])
            ->add('description', TextType::class, ['required' => false, 'attr' => ['placeholder' => 'Przykład: Oferta lojlanościowa 2017 dla duchownych z możliwością wypełlnienia formularza ofertowego lub jazdy próbnej']])
            ->add('actionName', TextType::class, ['required' => false, 'attr' => ['placeholder' => 'Przykład: 201704_w_dobra_strone_ze_skoda']])
            ->add('actionType', TextType::class, ['attr' => ['placeholder' => 'Przykład: zapis_konkurs/OF/JP']])
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
            ->add('active', ChoiceType::class, ['choices' => array_combine(range(0, 1), range(0, 1))])
            ->add('save', SubmitType::class, ['label' => 'Dodaj', 'attr' => ['class' => 'btn btn-success']]);
    }

}