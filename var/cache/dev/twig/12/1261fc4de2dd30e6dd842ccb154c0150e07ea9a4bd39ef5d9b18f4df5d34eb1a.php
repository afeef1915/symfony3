<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_834853e6dc5d4f907560b7836d9915248bb52e80b80df3689741c90606bef209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cd23578b7a98f2b65a577deccd0fa4048d0b16c5bc3bdca35360e4b13d30dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd23578b7a98f2b65a577deccd0fa4048d0b16c5bc3bdca35360e4b13d30dd0->enter($__internal_3cd23578b7a98f2b65a577deccd0fa4048d0b16c5bc3bdca35360e4b13d30dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_6d24ade7c2d95c15a09a5318a09e1e08a1ebc4049cb08bf66882ede4c4debd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d24ade7c2d95c15a09a5318a09e1e08a1ebc4049cb08bf66882ede4c4debd2c->enter($__internal_6d24ade7c2d95c15a09a5318a09e1e08a1ebc4049cb08bf66882ede4c4debd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cd23578b7a98f2b65a577deccd0fa4048d0b16c5bc3bdca35360e4b13d30dd0->leave($__internal_3cd23578b7a98f2b65a577deccd0fa4048d0b16c5bc3bdca35360e4b13d30dd0_prof);

        
        $__internal_6d24ade7c2d95c15a09a5318a09e1e08a1ebc4049cb08bf66882ede4c4debd2c->leave($__internal_6d24ade7c2d95c15a09a5318a09e1e08a1ebc4049cb08bf66882ede4c4debd2c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f8b65220bb00d0564deebc76a3c0350473d3349fdb65c8250703bfd27da50b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8b65220bb00d0564deebc76a3c0350473d3349fdb65c8250703bfd27da50b0->enter($__internal_2f8b65220bb00d0564deebc76a3c0350473d3349fdb65c8250703bfd27da50b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f2f08e370d5fba81b0a117c839e5f42be63bdc07bccc8d0b833c11d2b5a1fd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f08e370d5fba81b0a117c839e5f42be63bdc07bccc8d0b833c11d2b5a1fd76->enter($__internal_f2f08e370d5fba81b0a117c839e5f42be63bdc07bccc8d0b833c11d2b5a1fd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f2f08e370d5fba81b0a117c839e5f42be63bdc07bccc8d0b833c11d2b5a1fd76->leave($__internal_f2f08e370d5fba81b0a117c839e5f42be63bdc07bccc8d0b833c11d2b5a1fd76_prof);

        
        $__internal_2f8b65220bb00d0564deebc76a3c0350473d3349fdb65c8250703bfd27da50b0->leave($__internal_2f8b65220bb00d0564deebc76a3c0350473d3349fdb65c8250703bfd27da50b0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d61d7e09bae0dee57a21a92858c9558f504e718053ec2f33a3075478ccf1acc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61d7e09bae0dee57a21a92858c9558f504e718053ec2f33a3075478ccf1acc0->enter($__internal_d61d7e09bae0dee57a21a92858c9558f504e718053ec2f33a3075478ccf1acc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ccaf511ddd16e3a5dfd80ef51dd231de9b9abd2e1df16dccdefda688278c445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ccaf511ddd16e3a5dfd80ef51dd231de9b9abd2e1df16dccdefda688278c445->enter($__internal_2ccaf511ddd16e3a5dfd80ef51dd231de9b9abd2e1df16dccdefda688278c445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_2ccaf511ddd16e3a5dfd80ef51dd231de9b9abd2e1df16dccdefda688278c445->leave($__internal_2ccaf511ddd16e3a5dfd80ef51dd231de9b9abd2e1df16dccdefda688278c445_prof);

        
        $__internal_d61d7e09bae0dee57a21a92858c9558f504e718053ec2f33a3075478ccf1acc0->leave($__internal_d61d7e09bae0dee57a21a92858c9558f504e718053ec2f33a3075478ccf1acc0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
