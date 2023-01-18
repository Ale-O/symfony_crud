<?php

namespace App\Form;

use App\Entity\Subelement;
use App\Form\Type\TagsInputType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubelementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        if (in_array('ROLE_ADMIN', $options['role'])) {
            $builder
            ->add('title', null, [
                'attr' => ['autofocus' => true],
                'label' => 'label.title',
            ])
            ->add('content', TextareaType::class, [
                'help' => 'help.subelement_content',
                'label' => 'label.content',
            ])
            ->add('tags', TagsInputType::class, [
                'label' => 'label.tags',
                'required' => false,
            ]);
        } else {
            $builder
            ->add('title', null, [
                'attr' => ['autofocus' => true],
                'label' => 'label.title',
            ])
            ->add('content', TextareaType::class, [
                'help' => 'help.subelement_content',
                'label' => 'label.content',
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Subelement::class,
            'role' => ['ROLE_USER'],
            'allow_extra_fields' => true,
        ]);
    }
}
