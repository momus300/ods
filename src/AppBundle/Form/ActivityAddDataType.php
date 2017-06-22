<?php

namespace AppBundle\Form;

use AppBundle\Entity\ActivityExportDefs;
use AppBundle\Entity\Applications;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;

class ActivityAddDataType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('application', CollectionType::class, [
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
//            ->add('name', TextType::class, ['attr' => ['placeholder' => 'Formularz zgłoszeniowy do konkursu']])
//            ->add('activityExportDef', EntityType::class, [
//                'class' => ActivityExportDefs::class,
//                'choice_label' => 'name',
//                'label' => 'Eksport do CRM',
//                'required' => false,
//                'multiple' => true,
//                'attr' => ['class' => 'form-control selectpicker', 'data-live-search' => 'true']
//            ])
            ->add('save', SubmitType::class, ['label' => 'Dodaj', 'attr' => ['class' => 'btn btn-success']]);
    }

}