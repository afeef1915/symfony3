<?php

// src/AppBundle/Admin/BlogPostAdmin.php

namespace App1Bundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class BlogPostAdmin extends AbstractAdmin {

    public function toString($object) {
        return $object instanceof BlogPost ? $object->getTitle() : 'Blog Post'; // shown in the breadcrumb on the create view
      
        return $object instanceof Category ? $object->getname() : 'category'; // shown in the breadcrumb on the create view
    
    }

    protected function configureFormFields(FormMapper $formMapper) {
        // ... configure $formMapper

        $formMapper
                ->tab('Post')
                ->with('Content', array('class' => 'col-md-9'))
                ->add('title', 'text')
                ->add('body', 'textarea')
                ->end()
                ->with('Meta data', array('class' => 'col-md-3'))
                ->add('category', 'sonata_type_model', array(
                    'class' => 'App1Bundle\Document\Category',
                    'property' => 'name',
                ))
                ->end()
//                ->tab('Publish Options')
//      
//    ->end()
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        // ... configure $listMapper
        $listMapper
                ->add('title')
                ->add('draft')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('title')
//                ->add('category', 'sonata_type_model', array(
//                    'class' => 'App1Bundle\Document\Category',
//                    'property' => 'name',
//                ))
        ;
    }

}
