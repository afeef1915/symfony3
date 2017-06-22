<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_14268dce19a122ec7fa381980fb5afb590d72cfdef79280834fc88c41a6efb0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6704b3b775f452fd1c22b1b4e2749ec97c5097d9928894f28c07800bc5c6c986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6704b3b775f452fd1c22b1b4e2749ec97c5097d9928894f28c07800bc5c6c986->enter($__internal_6704b3b775f452fd1c22b1b4e2749ec97c5097d9928894f28c07800bc5c6c986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_3ffb654684d048c30c8bf640958983f6a35ee25d15b899b06536fa07e8be7f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffb654684d048c30c8bf640958983f6a35ee25d15b899b06536fa07e8be7f65->enter($__internal_3ffb654684d048c30c8bf640958983f6a35ee25d15b899b06536fa07e8be7f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6704b3b775f452fd1c22b1b4e2749ec97c5097d9928894f28c07800bc5c6c986->leave($__internal_6704b3b775f452fd1c22b1b4e2749ec97c5097d9928894f28c07800bc5c6c986_prof);

        
        $__internal_3ffb654684d048c30c8bf640958983f6a35ee25d15b899b06536fa07e8be7f65->leave($__internal_3ffb654684d048c30c8bf640958983f6a35ee25d15b899b06536fa07e8be7f65_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_4de8a8d5d22e85d6cd0971663ee482a603acb3b3f5a0f4e3afb545f6d7aeb4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de8a8d5d22e85d6cd0971663ee482a603acb3b3f5a0f4e3afb545f6d7aeb4cf->enter($__internal_4de8a8d5d22e85d6cd0971663ee482a603acb3b3f5a0f4e3afb545f6d7aeb4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4c2dd52dda28b2219248cd042b5eac9f7f261103108a87c60631bdf0df77a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c2dd52dda28b2219248cd042b5eac9f7f261103108a87c60631bdf0df77a5c->enter($__internal_b4c2dd52dda28b2219248cd042b5eac9f7f261103108a87c60631bdf0df77a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b4c2dd52dda28b2219248cd042b5eac9f7f261103108a87c60631bdf0df77a5c->leave($__internal_b4c2dd52dda28b2219248cd042b5eac9f7f261103108a87c60631bdf0df77a5c_prof);

        
        $__internal_4de8a8d5d22e85d6cd0971663ee482a603acb3b3f5a0f4e3afb545f6d7aeb4cf->leave($__internal_4de8a8d5d22e85d6cd0971663ee482a603acb3b3f5a0f4e3afb545f6d7aeb4cf_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_9008149a45c036dc6a3327e7b41001a49f1342de3197186d3c2bb08f8f0dd461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9008149a45c036dc6a3327e7b41001a49f1342de3197186d3c2bb08f8f0dd461->enter($__internal_9008149a45c036dc6a3327e7b41001a49f1342de3197186d3c2bb08f8f0dd461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_1e24de51e039c2a96eb6b9195a58b1b945274ee9dc68cffcaab5d5cab4834e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e24de51e039c2a96eb6b9195a58b1b945274ee9dc68cffcaab5d5cab4834e25->enter($__internal_1e24de51e039c2a96eb6b9195a58b1b945274ee9dc68cffcaab5d5cab4834e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1e24de51e039c2a96eb6b9195a58b1b945274ee9dc68cffcaab5d5cab4834e25->leave($__internal_1e24de51e039c2a96eb6b9195a58b1b945274ee9dc68cffcaab5d5cab4834e25_prof);

        
        $__internal_9008149a45c036dc6a3327e7b41001a49f1342de3197186d3c2bb08f8f0dd461->leave($__internal_9008149a45c036dc6a3327e7b41001a49f1342de3197186d3c2bb08f8f0dd461_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_9732a19dc14d91f5d35574a09eeb6345f91469e1b6158c6ec4358088ce340516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9732a19dc14d91f5d35574a09eeb6345f91469e1b6158c6ec4358088ce340516->enter($__internal_9732a19dc14d91f5d35574a09eeb6345f91469e1b6158c6ec4358088ce340516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_8b1b774c6b4daf651ef31c37fdc99dce0758eb54544ea8ee014945c7c30c77cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1b774c6b4daf651ef31c37fdc99dce0758eb54544ea8ee014945c7c30c77cf->enter($__internal_8b1b774c6b4daf651ef31c37fdc99dce0758eb54544ea8ee014945c7c30c77cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_8b1b774c6b4daf651ef31c37fdc99dce0758eb54544ea8ee014945c7c30c77cf->leave($__internal_8b1b774c6b4daf651ef31c37fdc99dce0758eb54544ea8ee014945c7c30c77cf_prof);

        
        $__internal_9732a19dc14d91f5d35574a09eeb6345f91469e1b6158c6ec4358088ce340516->leave($__internal_9732a19dc14d91f5d35574a09eeb6345f91469e1b6158c6ec4358088ce340516_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_053d322eb7787e726d01f64503c14012f4231452106f35c7acf0829dc63b0f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053d322eb7787e726d01f64503c14012f4231452106f35c7acf0829dc63b0f5b->enter($__internal_053d322eb7787e726d01f64503c14012f4231452106f35c7acf0829dc63b0f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_9f72a84ab6573b7a7caf3e3b444c3e12fe7bb0cb9a8f9d72bf6f0abc12eeffd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f72a84ab6573b7a7caf3e3b444c3e12fe7bb0cb9a8f9d72bf6f0abc12eeffd8->enter($__internal_9f72a84ab6573b7a7caf3e3b444c3e12fe7bb0cb9a8f9d72bf6f0abc12eeffd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_9f72a84ab6573b7a7caf3e3b444c3e12fe7bb0cb9a8f9d72bf6f0abc12eeffd8->leave($__internal_9f72a84ab6573b7a7caf3e3b444c3e12fe7bb0cb9a8f9d72bf6f0abc12eeffd8_prof);

        
        $__internal_053d322eb7787e726d01f64503c14012f4231452106f35c7acf0829dc63b0f5b->leave($__internal_053d322eb7787e726d01f64503c14012f4231452106f35c7acf0829dc63b0f5b_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_013e4f7c42b72485603bd4f4c60cfc1e6d94e222bdebef20a26b9f2b42504bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013e4f7c42b72485603bd4f4c60cfc1e6d94e222bdebef20a26b9f2b42504bb1->enter($__internal_013e4f7c42b72485603bd4f4c60cfc1e6d94e222bdebef20a26b9f2b42504bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_dc06a21b96f364ae1aca1ecc9f27774cdf33747493669e02925406c7b8d1f51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc06a21b96f364ae1aca1ecc9f27774cdf33747493669e02925406c7b8d1f51f->enter($__internal_dc06a21b96f364ae1aca1ecc9f27774cdf33747493669e02925406c7b8d1f51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_dc06a21b96f364ae1aca1ecc9f27774cdf33747493669e02925406c7b8d1f51f->leave($__internal_dc06a21b96f364ae1aca1ecc9f27774cdf33747493669e02925406c7b8d1f51f_prof);

        
        $__internal_013e4f7c42b72485603bd4f4c60cfc1e6d94e222bdebef20a26b9f2b42504bb1->leave($__internal_013e4f7c42b72485603bd4f4c60cfc1e6d94e222bdebef20a26b9f2b42504bb1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 35,  152 => 34,  134 => 30,  124 => 27,  115 => 26,  102 => 23,  93 => 22,  79 => 18,  73 => 16,  70 => 15,  61 => 14,  40 => 12,  12 => 32,);
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

{% extends base_template %}

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
