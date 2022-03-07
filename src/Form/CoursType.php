<?php

namespace App\Form;

use App\Entity\Cours;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelle', TextType::class)
            ->add('ageMini', TextType::class)
            ->add('ageMaxi', TextType::class)
            ->add('nbPlaceMaxi', TextType::class)
            ->add('jour',EntityType::class, array('class' => 'App\Entity\Jour','choice_label' => 'libelle'))
            ->add('professeur',EntityType::class, array('class' => 'App\Entity\Professeur','choice_label' => 'nom'))
            ->add('typeInstrument',EntityType::class, array('class' => 'App\Entity\TypeInstrument','choice_label' => 'libelle'))
            ->add('enregistrer', SubmitType::class, array('label' => 'Ajout d\'un Cours'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}
