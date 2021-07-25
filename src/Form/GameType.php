<?php

namespace App\Form;

use App\Entity\Game;
use App\Entity\GameCategory;
use App\Entity\Platform;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('image')
            ->add('name')
            ->add('platform', null, ['choice_label' => 'name'])
            ->add('category', null, ['choice_label' => 'name'])
            ->add('isAvailable')
            ->add('releaseDate')
            ->add('link');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Game::class,
        ]);
    }
}
