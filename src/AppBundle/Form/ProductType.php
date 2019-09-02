<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label' => 'Nom', 'data' => "Ex: Côte de boeuf"])
            ->add('alt', TextType::class, ['label' => 'Affichage si l\'image a un problème'])
            ->add('price', TextType::class, ['label' => 'Prix (avec €)', "data" => "9€"])
            ->add('unit', ChoiceType::class, ['label' => 'Unité', "choices" => [
                "Par kilogramme" => "Le kg",
                "La pièce" => "La pièce"
            ]])
            ->add('description', TextareaType::class, ['label' => 'Description'])
            ->add('animal', ChoiceType::class, ['label' => 'Dans quel animal ?', "choices" => [
                "boeuf" => "boeuf",
                "agneau" => "agneau",
                "veau" => "veau",
                "volaille" => "volaille"
            ]]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_product';
    }


}
