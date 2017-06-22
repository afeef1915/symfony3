<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace App1Bundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CategoryAdmin extends AbstractAdmin
{
//    public function toString($object) {
//        return $object instanceof Category ? $object->getName() : 'Blog Post'; // shown in the breadcrumb on the create view
//    }
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('name', 'text');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
         $listMapper
            ->addIdentifier('name')
             //->add('blog_posts')
            //->add('draft')
        ;
            //->add('draft');
       // $listMapper->addIdentifier('name');
    }
}