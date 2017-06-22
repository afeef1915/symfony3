<?php

/* SonataAdminBundle:CRUD:dashboard__action.html.twig */
class __TwigTemplate_e7c8617b2aa86bc4ba5da0241782dc77f2562944ebe2bed550859a7e83abebe1 extends Twig_Template
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
        $__internal_4c1b0785d7d326d92e05a9f789422bbc0b860903e1039f7156e7b109aa5eea05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1b0785d7d326d92e05a9f789422bbc0b860903e1039f7156e7b109aa5eea05->enter($__internal_4c1b0785d7d326d92e05a9f789422bbc0b860903e1039f7156e7b109aa5eea05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:dashboard__action.html.twig"));

        $__internal_b2438f7ebdb7bf47e77d4fa1da46235b3b5c9f03c9e1d318cf3196f12148d6e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2438f7ebdb7bf47e77d4fa1da46235b3b5c9f03c9e1d318cf3196f12148d6e7->enter($__internal_b2438f7ebdb7bf47e77d4fa1da46235b3b5c9f03c9e1d318cf3196f12148d6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:dashboard__action.html.twig"));

        // line 1
        echo "<a class=\"btn btn-link btn-flat\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "url", array()), "html", null, true);
        echo "\">
    <i class=\"fa fa-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_4c1b0785d7d326d92e05a9f789422bbc0b860903e1039f7156e7b109aa5eea05->leave($__internal_4c1b0785d7d326d92e05a9f789422bbc0b860903e1039f7156e7b109aa5eea05_prof);

        
        $__internal_b2438f7ebdb7bf47e77d4fa1da46235b3b5c9f03c9e1d318cf3196f12148d6e7->leave($__internal_b2438f7ebdb7bf47e77d4fa1da46235b3b5c9f03c9e1d318cf3196f12148d6e7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:dashboard__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"btn btn-link btn-flat\" href=\"{{ action.url }}\">
    <i class=\"fa fa-{{ action.icon }}\" aria-hidden=\"true\"></i>
    {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
</a>
", "SonataAdminBundle:CRUD:dashboard__action.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/dashboard__action.html.twig");
    }
}
