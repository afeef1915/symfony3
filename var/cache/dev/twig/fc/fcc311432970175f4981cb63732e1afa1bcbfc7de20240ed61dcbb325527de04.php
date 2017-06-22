<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_ada559dec142f589a868a1f3fcbae237e85f38f9f3756dd30a674696e70f61f7 extends Twig_Template
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
        $__internal_55a93eb9fe61e0c6d88b152c8e1223eed076fd0fefaff6146b87102e7316d670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a93eb9fe61e0c6d88b152c8e1223eed076fd0fefaff6146b87102e7316d670->enter($__internal_55a93eb9fe61e0c6d88b152c8e1223eed076fd0fefaff6146b87102e7316d670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

        $__internal_3f24f6d7f88e945622171def05f500df69a79b0b21f6a406e265fedd995b019b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f24f6d7f88e945622171def05f500df69a79b0b21f6a406e265fedd995b019b->enter($__internal_3f24f6d7f88e945622171def05f500df69a79b0b21f6a406e265fedd995b019b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_55a93eb9fe61e0c6d88b152c8e1223eed076fd0fefaff6146b87102e7316d670->leave($__internal_55a93eb9fe61e0c6d88b152c8e1223eed076fd0fefaff6146b87102e7316d670_prof);

        
        $__internal_3f24f6d7f88e945622171def05f500df69a79b0b21f6a406e265fedd995b019b->leave($__internal_3f24f6d7f88e945622171def05f500df69a79b0b21f6a406e265fedd995b019b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 16,  33 => 14,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.hasAccess('list') and admin.hasRoute('list') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('list') }}\">
            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
            {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:list_button.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/Button/list_button.html.twig");
    }
}
