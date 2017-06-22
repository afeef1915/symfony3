<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_fcc84a88890443e3a411bc094d2d90f369a694539f20c65f959f839b2c29589c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdd098c6a8f0d06984bf16cae1e308b792b3b8d4e07e1700582b0df8b8bb6c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd098c6a8f0d06984bf16cae1e308b792b3b8d4e07e1700582b0df8b8bb6c5f->enter($__internal_bdd098c6a8f0d06984bf16cae1e308b792b3b8d4e07e1700582b0df8b8bb6c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $__internal_475546db8658ae678f2402721365427f0d4f16abccfe32621420caeb8f5a787b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475546db8658ae678f2402721365427f0d4f16abccfe32621420caeb8f5a787b->enter($__internal_475546db8658ae678f2402721365427f0d4f16abccfe32621420caeb8f5a787b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdd098c6a8f0d06984bf16cae1e308b792b3b8d4e07e1700582b0df8b8bb6c5f->leave($__internal_bdd098c6a8f0d06984bf16cae1e308b792b3b8d4e07e1700582b0df8b8bb6c5f_prof);

        
        $__internal_475546db8658ae678f2402721365427f0d4f16abccfe32621420caeb8f5a787b->leave($__internal_475546db8658ae678f2402721365427f0d4f16abccfe32621420caeb8f5a787b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
", "SonataAdminBundle:CRUD:list_inner_row.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_inner_row.html.twig");
    }
}
