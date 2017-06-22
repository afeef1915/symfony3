<?php
// src/Acme/AccountBundle/Form/Type/RegistrationType.php
namespace Acme\AccountBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder->add('user', UserType::class);
      $builder->add('terms', CheckboxType::class, array('property_path' => 'termsAccepted'));
    }
    public function getName()
    {
        return 'registration';
    }
}