<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Sport;
use App\Entity\Articles;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ArticlesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleArticle')
            ->add('textArticle', CKEditorType::class)
            ->add('photoArticle', FileType::class, [
                'label' => 'Photo',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                        'image/*',
                        ],
                        'mimeTypesMessage' => 'Veuillez entrer un format de documentvalide',
                    ])
                ],
            ])
            ->add('Sport', EntityType::class, [
                'class' => Sport::class,
                'choice_label' => 'nomSport',
                ])
            ->add('User', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'nomUser',
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Articles::class,
        ]);
    }
}
