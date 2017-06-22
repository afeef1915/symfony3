<?php

/* SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig */
class __TwigTemplate_ddf7309782579d751664b4479c615e71cca30e04781e91584d51bc70d1edea67 extends Twig_Template
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
        $__internal_79025a09e73061d148efe925371b9f93a8e9c39d592d29ef012b5b9b95c98c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79025a09e73061d148efe925371b9f93a8e9c39d592d29ef012b5b9b95c98c4c->enter($__internal_79025a09e73061d148efe925371b9f93a8e9c39d592d29ef012b5b9b95c98c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig"));

        $__internal_1167d4f36da82ba0752142289be5388d602a638fc7644f75834c141bd4b88dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1167d4f36da82ba0752142289be5388d602a638fc7644f75834c141bd4b88dba->enter($__internal_1167d4f36da82ba0752142289be5388d602a638fc7644f75834c141bd4b88dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 2
            echo "    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_79025a09e73061d148efe925371b9f93a8e9c39d592d29ef012b5b9b95c98c4c->leave($__internal_79025a09e73061d148efe925371b9f93a8e9c39d592d29ef012b5b9b95c98c4c_prof);

        
        $__internal_1167d4f36da82ba0752142289be5388d602a638fc7644f75834c141bd4b88dba->leave($__internal_1167d4f36da82ba0752142289be5388d602a638fc7644f75834c141bd4b88dba_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for error in form.vars.errors %}
    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        {{ error.message }}
    </div>
{% endfor %}
", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/Helper/render_form_dismissable_errors.html.twig");
    }
}
