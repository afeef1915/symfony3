<?php

/* SonataAdminBundle:CRUD:base_list_inner_row.html.twig */
class __TwigTemplate_d00bcc73c8b0bb73aaa5f4e9eaca08bb45838fad7e34e66d3605c99850fd96ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cd0c524f6d1a34a00b3209482a73710219a0713163bd1ac4f5839d153d4bb2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd0c524f6d1a34a00b3209482a73710219a0713163bd1ac4f5839d153d4bb2a->enter($__internal_6cd0c524f6d1a34a00b3209482a73710219a0713163bd1ac4f5839d153d4bb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_inner_row.html.twig"));

        $__internal_015ed0431e57cef446a38e7cd60909197c33c2a2f2d10843cd294cf20853a1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015ed0431e57cef446a38e7cd60909197c33c2a2f2d10843cd294cf20853a1cb->enter($__internal_015ed0431e57cef446a38e7cd60909197c33c2a2f2d10843cd294cf20853a1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_inner_row.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 13
            echo "    ";
            if ((($this->getAttribute($context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 14
                echo "        ";
                // line 15
                echo "    ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 16
                echo "        ";
                // line 17
                echo "    ";
            } else {
                // line 18
                echo "        ";
                echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $context["field_description"]);
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6cd0c524f6d1a34a00b3209482a73710219a0713163bd1ac4f5839d153d4bb2a->leave($__internal_6cd0c524f6d1a34a00b3209482a73710219a0713163bd1ac4f5839d153d4bb2a_prof);

        
        $__internal_015ed0431e57cef446a38e7cd60909197c33c2a2f2d10843cd294cf20853a1cb->leave($__internal_015ed0431e57cef446a38e7cd60909197c33c2a2f2d10843cd294cf20853a1cb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 17,  40 => 16,  37 => 15,  35 => 14,  32 => 13,  28 => 12,  25 => 11,);
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

{% for field_description in admin.list.elements %}
    {% if field_description.name == '_action' and app.request.isXmlHttpRequest %}
        {# Action buttons disabled in ajax view! #}
    {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}
        {# Disable fields with 'ajax_hidden' option set to true #}
    {% else %}
        {{ object|render_list_element(field_description) }}
    {% endif %}
{% endfor %}
", "SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_list_inner_row.html.twig");
    }
}
