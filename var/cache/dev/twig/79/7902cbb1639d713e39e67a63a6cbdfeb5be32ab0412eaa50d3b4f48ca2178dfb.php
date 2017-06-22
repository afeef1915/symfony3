<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_dbed029c2c5ffdc62a68ada7e8706686a145680f583dfc751ff581297e51aa98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86c09ef4fe907afbfdb3287325029258ae550ccefa554c4f6eea969363fede64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c09ef4fe907afbfdb3287325029258ae550ccefa554c4f6eea969363fede64->enter($__internal_86c09ef4fe907afbfdb3287325029258ae550ccefa554c4f6eea969363fede64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6825f88ece7db16ed47587a19794bce308ab3295dd02049b48088eff3537f0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6825f88ece7db16ed47587a19794bce308ab3295dd02049b48088eff3537f0f8->enter($__internal_6825f88ece7db16ed47587a19794bce308ab3295dd02049b48088eff3537f0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86c09ef4fe907afbfdb3287325029258ae550ccefa554c4f6eea969363fede64->leave($__internal_86c09ef4fe907afbfdb3287325029258ae550ccefa554c4f6eea969363fede64_prof);

        
        $__internal_6825f88ece7db16ed47587a19794bce308ab3295dd02049b48088eff3537f0f8->leave($__internal_6825f88ece7db16ed47587a19794bce308ab3295dd02049b48088eff3537f0f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9bd61fccbbf26b15b4a98dab32404e697d79cf26b323b0e33aa2979f17c92d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9bd61fccbbf26b15b4a98dab32404e697d79cf26b323b0e33aa2979f17c92d1->enter($__internal_d9bd61fccbbf26b15b4a98dab32404e697d79cf26b323b0e33aa2979f17c92d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4e42935a5a81af28cf7aa82c3922017a5d3d3693c6c70bf49952dd53914ef3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e42935a5a81af28cf7aa82c3922017a5d3d3693c6c70bf49952dd53914ef3af->enter($__internal_4e42935a5a81af28cf7aa82c3922017a5d3d3693c6c70bf49952dd53914ef3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4e42935a5a81af28cf7aa82c3922017a5d3d3693c6c70bf49952dd53914ef3af->leave($__internal_4e42935a5a81af28cf7aa82c3922017a5d3d3693c6c70bf49952dd53914ef3af_prof);

        
        $__internal_d9bd61fccbbf26b15b4a98dab32404e697d79cf26b323b0e33aa2979f17c92d1->leave($__internal_d9bd61fccbbf26b15b4a98dab32404e697d79cf26b323b0e33aa2979f17c92d1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92df0482feb204be9b54fc4ebb863b68745cdc05f1ef67b9ba305569abdc25b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92df0482feb204be9b54fc4ebb863b68745cdc05f1ef67b9ba305569abdc25b4->enter($__internal_92df0482feb204be9b54fc4ebb863b68745cdc05f1ef67b9ba305569abdc25b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0e80c0107178d04c3a23833889535b3ab2872ffde1d60774632bb1c684e4e460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e80c0107178d04c3a23833889535b3ab2872ffde1d60774632bb1c684e4e460->enter($__internal_0e80c0107178d04c3a23833889535b3ab2872ffde1d60774632bb1c684e4e460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0e80c0107178d04c3a23833889535b3ab2872ffde1d60774632bb1c684e4e460->leave($__internal_0e80c0107178d04c3a23833889535b3ab2872ffde1d60774632bb1c684e4e460_prof);

        
        $__internal_92df0482feb204be9b54fc4ebb863b68745cdc05f1ef67b9ba305569abdc25b4->leave($__internal_92df0482feb204be9b54fc4ebb863b68745cdc05f1ef67b9ba305569abdc25b4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d88eb2d8ba1562b4a6628260e87963d72bea49ed4e0d00add724fc07ad572229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88eb2d8ba1562b4a6628260e87963d72bea49ed4e0d00add724fc07ad572229->enter($__internal_d88eb2d8ba1562b4a6628260e87963d72bea49ed4e0d00add724fc07ad572229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cde4663a469a7b8717e7e88a32f4d5ddd08d98ba75e5fbbccaf080f9fded1da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde4663a469a7b8717e7e88a32f4d5ddd08d98ba75e5fbbccaf080f9fded1da1->enter($__internal_cde4663a469a7b8717e7e88a32f4d5ddd08d98ba75e5fbbccaf080f9fded1da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cde4663a469a7b8717e7e88a32f4d5ddd08d98ba75e5fbbccaf080f9fded1da1->leave($__internal_cde4663a469a7b8717e7e88a32f4d5ddd08d98ba75e5fbbccaf080f9fded1da1_prof);

        
        $__internal_d88eb2d8ba1562b4a6628260e87963d72bea49ed4e0d00add724fc07ad572229->leave($__internal_d88eb2d8ba1562b4a6628260e87963d72bea49ed4e0d00add724fc07ad572229_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
