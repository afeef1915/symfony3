<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_67f8d8f7626593d6be4df4b2709c18a0010f073510c008c3741887d9ed037857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0baf54144df81ebe6073b2495635aab0322536cbd0633241cc9fdf1360ee506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0baf54144df81ebe6073b2495635aab0322536cbd0633241cc9fdf1360ee506->enter($__internal_a0baf54144df81ebe6073b2495635aab0322536cbd0633241cc9fdf1360ee506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $__internal_d15fe6e8bac89cbced5d181db09a1c06872c29a3d65df21891aee88deec3ccb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15fe6e8bac89cbced5d181db09a1c06872c29a3d65df21891aee88deec3ccb3->enter($__internal_d15fe6e8bac89cbced5d181db09a1c06872c29a3d65df21891aee88deec3ccb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0baf54144df81ebe6073b2495635aab0322536cbd0633241cc9fdf1360ee506->leave($__internal_a0baf54144df81ebe6073b2495635aab0322536cbd0633241cc9fdf1360ee506_prof);

        
        $__internal_d15fe6e8bac89cbced5d181db09a1c06872c29a3d65df21891aee88deec3ccb3->leave($__internal_d15fe6e8bac89cbced5d181db09a1c06872c29a3d65df21891aee88deec3ccb3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
