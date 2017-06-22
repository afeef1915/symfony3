<?php

// src/AppBundle/Admin/BlogPostAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BlogPostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        // ... configure $formMapper
      
      $formMapper
        ->with('Content')
            ->add('title', 'text')
            ->add('body', 'textarea')
        ->end()

        ->with('Meta data')
            ->add('category', 'sonata_type_model', array(
                'class' => 'AppBundle\Document\Category',
                'property' => 'name',
            ))
        ->end()
    ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        // ... configure $listMapper
    }
}