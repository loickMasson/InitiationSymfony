<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType ::class,[
                'label' => 'Titre de l\'article',
                'attr' => [
                    'placeholder' => 'Tapez le titre ici..'
                ]
            ])

            ->add('contenu',TextareType::class,[
                'label' => 'Contenu de l\'article'
            ])
            ->add('createdAt',DateType::class,[
                'label' => 'Date de publication'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
