<?php

namespace App\Form;

use App\Entity\Resultat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResultatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('medaille')
            ->add('rang')
            ->add('temps')
            ->add('ecart')
            ->add('vitesse')
            ->add('poids')
            ->add('nombre_participants')
            ->add('id_athlete')
            ->add('id_epreuve')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Resultat::class,
        ]);
    }
}
