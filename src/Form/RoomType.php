<?php

namespace App\Form;

use App\Entity\Room;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RoomType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('number')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Single Room' => 'Single Room',
                    'Double Room' => 'Double Room',
                    'Twin Room' => 'Twin Room',
                    'Triple Room' => 'Triple Room',
                    'Suite' => 'Suite',
                    'Presidential Suite' => 'Presidential Suite',
                    'Penthouse' => 'Penthouse',
                ],
                'placeholder' => 'Choose a Room Type',
            ])
            ->add('price')
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Available' => 'available',
                    'Not Available' => 'not_available',
                    'Maintenance' => 'maintenance',
                ],
                'placeholder' => 'Choose Status',
            ])
            ->add('capacity')
            ->add('size')
            ->add('shortdescription')
            ->add('longdescription')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Room::class,
        ]);
    }
}
