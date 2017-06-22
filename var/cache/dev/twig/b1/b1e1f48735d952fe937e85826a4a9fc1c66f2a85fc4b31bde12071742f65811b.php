<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_178e6b5f6d50e97c03306b5291a88dc451d9004e2cf796b4aab987cbeff09fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5eb4d7f4dff54cab913b444b2253c969aebf78b00e592fd851542f88c69e323a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb4d7f4dff54cab913b444b2253c969aebf78b00e592fd851542f88c69e323a->enter($__internal_5eb4d7f4dff54cab913b444b2253c969aebf78b00e592fd851542f88c69e323a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_4c3b157db7ff18933e00160e8b6971bc9ac6b0818f7338f95d41c17cc0b3f4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3b157db7ff18933e00160e8b6971bc9ac6b0818f7338f95d41c17cc0b3f4de->enter($__internal_4c3b157db7ff18933e00160e8b6971bc9ac6b0818f7338f95d41c17cc0b3f4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eb4d7f4dff54cab913b444b2253c969aebf78b00e592fd851542f88c69e323a->leave($__internal_5eb4d7f4dff54cab913b444b2253c969aebf78b00e592fd851542f88c69e323a_prof);

        
        $__internal_4c3b157db7ff18933e00160e8b6971bc9ac6b0818f7338f95d41c17cc0b3f4de->leave($__internal_4c3b157db7ff18933e00160e8b6971bc9ac6b0818f7338f95d41c17cc0b3f4de_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f1890ce4e65dcee30f31e28e074dc55d7ea8a29441ca04336456ba4b17ec8be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1890ce4e65dcee30f31e28e074dc55d7ea8a29441ca04336456ba4b17ec8be5->enter($__internal_f1890ce4e65dcee30f31e28e074dc55d7ea8a29441ca04336456ba4b17ec8be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ea62eda9e5207f2df93548e5150d963064795a53a6467873b23f58a234b84477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea62eda9e5207f2df93548e5150d963064795a53a6467873b23f58a234b84477->enter($__internal_ea62eda9e5207f2df93548e5150d963064795a53a6467873b23f58a234b84477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_ea62eda9e5207f2df93548e5150d963064795a53a6467873b23f58a234b84477->leave($__internal_ea62eda9e5207f2df93548e5150d963064795a53a6467873b23f58a234b84477_prof);

        
        $__internal_f1890ce4e65dcee30f31e28e074dc55d7ea8a29441ca04336456ba4b17ec8be5->leave($__internal_f1890ce4e65dcee30f31e28e074dc55d7ea8a29441ca04336456ba4b17ec8be5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
