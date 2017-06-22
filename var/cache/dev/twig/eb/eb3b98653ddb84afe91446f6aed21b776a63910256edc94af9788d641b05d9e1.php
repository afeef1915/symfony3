<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_148097011f122e8e2667ecb1bb9771d0285e5e11c34df7531dbc5eb3357f58c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7d353c0395c7b9677649d239f595260a6ed8a3b2c9c68244f0310ca71aeceeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d353c0395c7b9677649d239f595260a6ed8a3b2c9c68244f0310ca71aeceeb->enter($__internal_f7d353c0395c7b9677649d239f595260a6ed8a3b2c9c68244f0310ca71aeceeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8620dd184504a070a7955f62b2dafbe7973f7e258a54ae3471b1e79f3200b4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8620dd184504a070a7955f62b2dafbe7973f7e258a54ae3471b1e79f3200b4e7->enter($__internal_8620dd184504a070a7955f62b2dafbe7973f7e258a54ae3471b1e79f3200b4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7d353c0395c7b9677649d239f595260a6ed8a3b2c9c68244f0310ca71aeceeb->leave($__internal_f7d353c0395c7b9677649d239f595260a6ed8a3b2c9c68244f0310ca71aeceeb_prof);

        
        $__internal_8620dd184504a070a7955f62b2dafbe7973f7e258a54ae3471b1e79f3200b4e7->leave($__internal_8620dd184504a070a7955f62b2dafbe7973f7e258a54ae3471b1e79f3200b4e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9eabba734b93247a9cacfc5ad4044481582517f9125897d70af4f26fc9dd7d8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eabba734b93247a9cacfc5ad4044481582517f9125897d70af4f26fc9dd7d8a->enter($__internal_9eabba734b93247a9cacfc5ad4044481582517f9125897d70af4f26fc9dd7d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1af04a9c27201ff3f75631613eab294904df145b374fb811e00e18539fc8a2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af04a9c27201ff3f75631613eab294904df145b374fb811e00e18539fc8a2ff->enter($__internal_1af04a9c27201ff3f75631613eab294904df145b374fb811e00e18539fc8a2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1af04a9c27201ff3f75631613eab294904df145b374fb811e00e18539fc8a2ff->leave($__internal_1af04a9c27201ff3f75631613eab294904df145b374fb811e00e18539fc8a2ff_prof);

        
        $__internal_9eabba734b93247a9cacfc5ad4044481582517f9125897d70af4f26fc9dd7d8a->leave($__internal_9eabba734b93247a9cacfc5ad4044481582517f9125897d70af4f26fc9dd7d8a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
