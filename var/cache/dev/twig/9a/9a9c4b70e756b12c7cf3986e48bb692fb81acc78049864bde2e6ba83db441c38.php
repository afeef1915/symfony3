<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_7270bbd8734a078688de908cf95862b6fd8478834000b49af60080497b5ee221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e64511dd4bf8c0aa9873c3863b6d049e806fd1867d7746a67d4773c793e881d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64511dd4bf8c0aa9873c3863b6d049e806fd1867d7746a67d4773c793e881d6->enter($__internal_e64511dd4bf8c0aa9873c3863b6d049e806fd1867d7746a67d4773c793e881d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_c6347ea5c1f5d131b5418cde4abb3779b491789b6bd788b4f7b25bad7ffc1744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6347ea5c1f5d131b5418cde4abb3779b491789b6bd788b4f7b25bad7ffc1744->enter($__internal_c6347ea5c1f5d131b5418cde4abb3779b491789b6bd788b4f7b25bad7ffc1744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e64511dd4bf8c0aa9873c3863b6d049e806fd1867d7746a67d4773c793e881d6->leave($__internal_e64511dd4bf8c0aa9873c3863b6d049e806fd1867d7746a67d4773c793e881d6_prof);

        
        $__internal_c6347ea5c1f5d131b5418cde4abb3779b491789b6bd788b4f7b25bad7ffc1744->leave($__internal_c6347ea5c1f5d131b5418cde4abb3779b491789b6bd788b4f7b25bad7ffc1744_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
