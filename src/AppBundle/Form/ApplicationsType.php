<?php

namespace AppBundle\Form;

use AppBundle\Entity\BrandSets;
use AppBundle\Entity\Campaigns;
use AppBundle\Entity\Companies;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ApplicationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('company', EntityType::class, [
                'class' => Companies::class,
                'choice_label' => function($company){
                    /** @var Companies $company */
                    return '[id:' . $company->getId() . '] ' . $company->getName();
                },
                'attr' => ['class' => 'form-control selectpicker', 'data-live-search' => 'true']
            ])
            ->add('campaign', EntityType::class, [
                'class' => Campaigns::class,
                'required' => false,
                'choice_label' => 'code'
            ])
            ->add('brandSetId', EntityType::class, [
                'class' => BrandSets::class,
                'choice_label' => 'id',
//                'data_class' => null,
//                'mapped' => false,

            ])
            ->add('name', TextType::class, ['attr' => ['placeholder' => 'Akcja - Moto Mama']])
            ->add('description', TextType::class, ['attr' => ['placeholder' => 'Oferta lojlanościowa 2017 dla duchownych z możliwością wypełlnienia formularza ofertowego lub jazdy próbnej. ']])
            ->add('appId', TextType::class, ['attr' => ['placeholder' => 'SKMOMA2017']])
            ->add('order', ChoiceType::class, ['choices' => array_combine(range(0, 1), range(0, 1))])
            ->add('active', ChoiceType::class, ['choices' => array_combine(range(0, 1), range(0, 1))])
            ->add('copyIps', CheckboxType::class, ['label' => 'Skopiuj adresy IP z poprzedniej aplikacji agencji', 'mapped' => false, 'required' => false])
            ->add('save', SubmitType::class, ['label' => 'Dodaj', 'attr' => ['class' => 'btn btn-success']]);
    }
}