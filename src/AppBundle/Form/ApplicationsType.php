<?php

namespace AppBundle\Form;

use AppBundle\Entity\Companies;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Config\Definition\IntegerNode;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ApplicationsType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('company', EntityType::class, [
                'choice_label' => function($company){
                    /** @var Companies $company */
                    return '[id: ' . $company->getId() . ']' . $company->getName();
                },
                'class' => 'AppBundle:Companies',
                'attr' => ['class' => 'form-control selectpicker', 'data-live-search' => 'true']
            ])
            ->add('campaign', EntityType::class, [
                'required' => false,
                'choice_label' => 'code',
                'class' => 'AppBundle:Campaigns'
            ])
            ->add('brandSet', EntityType::class, [
                'choice_label' => 'id',
                'class' => 'AppBundle:BrandSets'
            ])
            ->add('name', TextType::class, ['attr' => ['placeholder' => 'Akcja - Moto Mama']])
            ->add('description', TextType::class, ['attr' => ['placeholder' => 'Oferta lojlanościowa 2017 dla duchownych z możliwością wypełlnienia formularza ofertowego lub jazdy próbnej. ']])
            ->add('appId', TextType::class, ['attr' => ['placeholder' => 'SKMOMA2017']])
            ->add('order', ChoiceType::class, ['choices' => array_combine(range(0, 1), range(0, 1))])
            ->add('active', ChoiceType::class, ['choices' => array_combine(range(0, 1), range(0, 1))])
            ->add('copyIps', CheckboxType::class, ['mapped' => false, 'required' => false])
            ->add('save', SubmitType::class, ['label' => 'Dodaj', 'attr' => ['class' => 'btn btn-success']]);
    }
}