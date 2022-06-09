<?php

namespace App\Form;

use App\Entity\Pregunta;
use PhpParser\Node\Stmt\Label;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PreguntaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('parametromedicion',TextareaType::class,['label' => 'Texto pregunta'])
            ->add('rojo')
            ->add('amarillo')
            ->add('verde')
            ->add('fecha', DateType::class, [
                'label' => 'Fecha',
                'widget' => 'single_text',
                'html5' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pregunta::class,
        ]);
    }
}
