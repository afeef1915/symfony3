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
        $__internal_a69f4a6ec0633a06adeeaa3b8ac7389ca01ccd8bb894faaf388322f1c942630e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69f4a6ec0633a06adeeaa3b8ac7389ca01ccd8bb894faaf388322f1c942630e->enter($__internal_a69f4a6ec0633a06adeeaa3b8ac7389ca01ccd8bb894faaf388322f1c942630e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_420d181610e6c598b719a31a727fa0c5a295a153681b2fafab59b4035883fa91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420d181610e6c598b719a31a727fa0c5a295a153681b2fafab59b4035883fa91->enter($__internal_420d181610e6c598b719a31a727fa0c5a295a153681b2fafab59b4035883fa91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a69f4a6ec0633a06adeeaa3b8ac7389ca01ccd8bb894faaf388322f1c942630e->leave($__internal_a69f4a6ec0633a06adeeaa3b8ac7389ca01ccd8bb894faaf388322f1c942630e_prof);

        
        $__internal_420d181610e6c598b719a31a727fa0c5a295a153681b2fafab59b4035883fa91->leave($__internal_420d181610e6c598b719a31a727fa0c5a295a153681b2fafab59b4035883fa91_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e86ccad8e4b110f6b351793d968ee60abf9b55e1a0052518f536046d550d675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e86ccad8e4b110f6b351793d968ee60abf9b55e1a0052518f536046d550d675->enter($__internal_3e86ccad8e4b110f6b351793d968ee60abf9b55e1a0052518f536046d550d675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4be7cfc74a035b4a1f9ae7e8e6e71678cd5e158a4a64e8f66b23a44f93c9d756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be7cfc74a035b4a1f9ae7e8e6e71678cd5e158a4a64e8f66b23a44f93c9d756->enter($__internal_4be7cfc74a035b4a1f9ae7e8e6e71678cd5e158a4a64e8f66b23a44f93c9d756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_4be7cfc74a035b4a1f9ae7e8e6e71678cd5e158a4a64e8f66b23a44f93c9d756->leave($__internal_4be7cfc74a035b4a1f9ae7e8e6e71678cd5e158a4a64e8f66b23a44f93c9d756_prof);

        
        $__internal_3e86ccad8e4b110f6b351793d968ee60abf9b55e1a0052518f536046d550d675->leave($__internal_3e86ccad8e4b110f6b351793d968ee60abf9b55e1a0052518f536046d550d675_prof);

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
