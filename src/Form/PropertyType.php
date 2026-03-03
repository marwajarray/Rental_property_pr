<?php

namespace App\Form;

use App\Entity\Property;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('number')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Single Property' => 'Single Property',
                    'Double Property' => 'Double Property',
                    'Twin Property' => 'Twin Property',
                    'Triple Property' => 'Triple Property',
                    'Suite' => 'Suite',
                    'Presidential Suite' => 'Presidential Suite',
                    'Penthouse' => 'Penthouse',
                ],
                'placeholder' => 'Choose a Property Type',
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
            'data_class' => Property::class,
        ]);
    }
}
