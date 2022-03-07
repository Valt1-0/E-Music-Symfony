<?php

namespace App\Form;

use App\Entity\Instrument;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class InstrumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('intitule', TextType::class)
            ->add('prixAchat', TextType::class)
            ->add('marque', TextType::class)
            ->add('couleurDominante', TextType::class)
            ->add('NumeroSerie', TextType::class)
            ->add('utilisation', ChoiceType::class, [ 'choices'  => [ '' => '','Prêt' => 'Prêt', 'Cours' => 'Cours' , 'Concert' => 'Concert']])

            ->add('typeInstrument',EntityType::class, array('class' => 'App\Entity\TypeInstrument','choice_label' => 'libelle'))
	        ->add('enregistrer', SubmitType::class, array('label' => 'Nouvel Instrument'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Instrument::class,
        ]);
    }
}
