<?php

namespace App\Form\Fields;

use App\Entity\Subelement;
use App\Entity\SubelementFields;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubelementFieldsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $element = $options['data']->getFilter()->getSubelements();
        $builder
            ->add('content', EntityType::class, [
                'class' => subelement::class,
                'choice_label' => 'title',
                'choices' => $element,
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SubelementFields::class,
        ]);
    }
}
