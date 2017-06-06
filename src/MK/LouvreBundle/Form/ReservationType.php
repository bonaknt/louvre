<?php

namespace MK\LouvreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
class ReservationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

        ->add('dtReservation',  DateType::class, array(
    'widget' => 'single_text',

    // do not render as type="date", to avoid HTML5 date pickers
    'html5' => false,

    // add a class that can be selected in JavaScript
    'attr' => ['id' => 'datepicker']))

        ->add('tpBillet',     ChoiceType::class, array(
            'choices' => array(
                'Journée'  => 1,
                'Demi-journée' => 2,
            )))

        ->add('nbBillet',       ChoiceType::class, array(
            'choices' => array(
                '1'  => 1,
                '2' => 2,
                '3' => 3,
                '4'  => 4,
                '5'  => 5,
                '6' => 6,
                '7' => 7,
                '8'  => 8,
                '9'  => 9,
                '10' => 10,
            )))

        ->add('email',     EmailType::class)

        ->add('tickets', CollectionType::class, array(
            'entry_type' => TicketType::class
        ));
    }

    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MK\LouvreBundle\Entity\Reservation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mk_louvrebundle_reservation';
    }


}
