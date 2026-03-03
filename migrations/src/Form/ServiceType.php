<?php

namespace App\Form;

use App\Entity\Service;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('price')
            ->add('description')
            ->add('category', ChoiceType::class, [
                'choices' => [
                    'Wellness' => 'SPA',
                    'Food & Drink' => 'RESTAURANT',
                    'Cleaning' => 'LAUNDRY',
                    'Transport' => 'SHUTTLE',
                ],
            ])
            ->add('day_of_week', ChoiceType::class, [
                'choices' => [
                    'Monday' => 'Monday',
                    'Tuesday' => 'Tuesday',
                    'Wednesday' => 'Wednesday',
                    'Thursday' => 'Thursday',
                    'Friday' => 'Friday',
                    'Saturday' => 'Saturday',
                    'Sunday' => 'Sunday',
                ],
                'mapped' => false,
                'label' => 'Day',
            ])
            ->add('start_time', TimeType::class, [
                'widget' => 'single_text',
                'mapped' => false,
                'label' => 'From',
            ])
            ->add('end_time', TimeType::class, [
                'widget' => 'single_text',
                'mapped' => false,
                'label' => 'To',
            ])
            ->add('location');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Service::class,
        ]);
    }
}
