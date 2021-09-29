<?php

namespace App\Form;

use App\Entity\Epreuve;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EpreuveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_epreuve')
            ->add('description')
            ->add('heure_epreuve')
            ->add('medaille_epreuve')
            ->add('id_competition')
            ->add('id_categorie')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Epreuve::class,
        ]);
    }
}
