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

class TicketType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom',            TextType::class)
        ->add('prenom',            TextType::class)
        ->add('dtNaissance',  DateType::class, array(
            'widget' => 'single_text',
            'format' => 'dd/MM/yyyy',
            
            'html5' => false,

            
            'attr' => ['id' => 'datepicker1']))
        ->add('nationalite',    ChoiceType::class, array(
            'choices' => array(
                'France'  => 'France',
                'Belgique' => 'Belgique',
                'Suisse'  =>  'Suisse',
                'Autres'  =>  'Autres'
            )))
        ->add('tReduit',  CheckboxType::class, array(
    'required' => false,
));/*
        ->add('tpTarif',    ChoiceType::class, array(
            'choices' => array(
                '1'  => 1,
                '2' => 2,
                '3' => 3,)));*/
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MK\LouvreBundle\Entity\Ticket'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mk_louvrebundle_ticket';
    }


}
