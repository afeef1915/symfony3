<?php

/* SonataDoctrineMongoDBAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_7f06a4564a55f40a2ab9a21487096f02f7d66dee66369d752fb2a700b4e97804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "SonataDoctrineMongoDBAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cf65e03e996fcb6ff9a2e93e9bc50b48869d556fcf3d7abc69e5f949c3d5ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf65e03e996fcb6ff9a2e93e9bc50b48869d556fcf3d7abc69e5f949c3d5ab6->enter($__internal_9cf65e03e996fcb6ff9a2e93e9bc50b48869d556fcf3d7abc69e5f949c3d5ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineMongoDBAdminBundle:Form:filter_admin_fields.html.twig"));

        $__internal_d120ddd47088bdce7af0dd3efe1c41fdf93426ed42dd8a82fe1b2bd3881ad8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d120ddd47088bdce7af0dd3efe1c41fdf93426ed42dd8a82fe1b2bd3881ad8ef->enter($__internal_d120ddd47088bdce7af0dd3efe1c41fdf93426ed42dd8a82fe1b2bd3881ad8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineMongoDBAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cf65e03e996fcb6ff9a2e93e9bc50b48869d556fcf3d7abc69e5f949c3d5ab6->leave($__internal_9cf65e03e996fcb6ff9a2e93e9bc50b48869d556fcf3d7abc69e5f949c3d5ab6_prof);

        
        $__internal_d120ddd47088bdce7af0dd3efe1c41fdf93426ed42dd8a82fe1b2bd3881ad8ef->leave($__internal_d120ddd47088bdce7af0dd3efe1c41fdf93426ed42dd8a82fe1b2bd3881ad8ef_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineMongoDBAdminBundle:Form:filter_admin_fields.html.twig";
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
", "SonataDoctrineMongoDBAdminBundle:Form:filter_admin_fields.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\doctrine-mongodb-admin-bundle\\Sonata\\DoctrineMongoDBAdminBundle/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
