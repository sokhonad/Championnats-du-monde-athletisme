<?php

namespace App\Form;

use App\Entity\Athlete;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AthleteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_athlete')
            ->add('prenom_athlete')
            ->add('sexe_athlete')
            ->add('nationalite_athlete')
            ->add('code_pays_athlete')
            ->add('taille_athlete')
            ->add('poids_athlete')
            ->add('ville_athlete')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Athlete::class,
        ]);
    }
}
