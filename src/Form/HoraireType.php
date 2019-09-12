<?php

namespace App\Form;

use App\Entity\Horaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class HoraireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		 
		
        $builder
            ->add('idrestaurant',HiddenType::class)
            ->add('lundi',ChoiceType::class,['choices'=>['choose'=>'','18:30 - 20:00'=>'18:30 - 20:00','12:00 - 14:00 , 18:30 - 20:00'=>'12:00 - 14:00 , 18:30 - 20:00','fermer'=>'fermer']])
            ->add('mardi',ChoiceType::class,['choices'=>['choose'=>'','18:30 - 20:00'=>'18:30 - 20:00','12:00 - 14:00 , 18:30 - 20:00'=>'12:00 - 14:00 , 18:30 - 20:00','fermer'=>'fermer']])
            ->add('mercredi',ChoiceType::class,['choices'=>['choose'=>'','18:30 - 20:00'=>'18:30 - 20:00','12:00 - 14:00 , 18:30 - 20:00'=>'12:00 - 14:00 , 18:30 - 20:00','fermer'=>'fermer']])
            ->add('jeudi',ChoiceType::class,['choices'=>['choose'=>'','18:30 - 20:00'=>'18:30 - 20:00','12:00 - 14:00 , 18:30 - 20:00'=>'12:00 - 14:00 , 18:30 - 20:00','fermer'=>'fermer']])
            ->add('vendredi',ChoiceType::class,['choices'=>['choose'=>'','18:30 - 20:00'=>'18:30 - 20:00','12:00 - 14:00 , 18:30 - 20:00'=>'12:00 - 14:00 , 18:30 - 20:00','fermer'=>'fermer']])
            ->add('samedi',ChoiceType::class,['choices'=>['choose'=>'','18:30 - 20:00'=>'18:30 - 20:00','12:00 - 14:00 , 18:30 - 20:00'=>'12:00 - 14:00 , 18:30 - 20:00','fermer'=>'fermer']])
            ->add('dimanche',ChoiceType::class,['choices'=>['choose'=>'','18:30 - 20:00'=>'18:30 - 20:00','12:00 - 14:00 , 18:30 - 20:00'=>'12:00 - 14:00 , 18:30 - 20:00','fermer'=>'fermer']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Horaire::class,
        ]);
    }
}
