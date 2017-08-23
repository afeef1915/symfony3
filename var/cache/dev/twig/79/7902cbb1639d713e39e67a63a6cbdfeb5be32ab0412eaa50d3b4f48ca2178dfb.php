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
        $__internal_51dde978ea7b2c4c811354ea5caf271aa8018278440149df04236b0ceae5f89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51dde978ea7b2c4c811354ea5caf271aa8018278440149df04236b0ceae5f89b->enter($__internal_51dde978ea7b2c4c811354ea5caf271aa8018278440149df04236b0ceae5f89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_df5a59982e0546d5c4417f0f07623b237fc775e1e48a6267911a03b0fa0a6bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5a59982e0546d5c4417f0f07623b237fc775e1e48a6267911a03b0fa0a6bd8->enter($__internal_df5a59982e0546d5c4417f0f07623b237fc775e1e48a6267911a03b0fa0a6bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51dde978ea7b2c4c811354ea5caf271aa8018278440149df04236b0ceae5f89b->leave($__internal_51dde978ea7b2c4c811354ea5caf271aa8018278440149df04236b0ceae5f89b_prof);

        
        $__internal_df5a59982e0546d5c4417f0f07623b237fc775e1e48a6267911a03b0fa0a6bd8->leave($__internal_df5a59982e0546d5c4417f0f07623b237fc775e1e48a6267911a03b0fa0a6bd8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41fe5a854e2706c1b559e02ab511e5e4f9fbe3b2f3feee2e227bf4f85fd5f497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41fe5a854e2706c1b559e02ab511e5e4f9fbe3b2f3feee2e227bf4f85fd5f497->enter($__internal_41fe5a854e2706c1b559e02ab511e5e4f9fbe3b2f3feee2e227bf4f85fd5f497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cab3169e6292b88db53bdc2b35c2195b93311e82e883ee285e13419bd428a681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab3169e6292b88db53bdc2b35c2195b93311e82e883ee285e13419bd428a681->enter($__internal_cab3169e6292b88db53bdc2b35c2195b93311e82e883ee285e13419bd428a681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cab3169e6292b88db53bdc2b35c2195b93311e82e883ee285e13419bd428a681->leave($__internal_cab3169e6292b88db53bdc2b35c2195b93311e82e883ee285e13419bd428a681_prof);

        
        $__internal_41fe5a854e2706c1b559e02ab511e5e4f9fbe3b2f3feee2e227bf4f85fd5f497->leave($__internal_41fe5a854e2706c1b559e02ab511e5e4f9fbe3b2f3feee2e227bf4f85fd5f497_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f455f615b11d0fb7e76543c6567ec366f9ff262ed250f0c14a4d1d792fd4db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f455f615b11d0fb7e76543c6567ec366f9ff262ed250f0c14a4d1d792fd4db1->enter($__internal_9f455f615b11d0fb7e76543c6567ec366f9ff262ed250f0c14a4d1d792fd4db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4c0807bc7b3ab0ea7f04a583ba7737d3673d5b80ff72613da69a528ef8216d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0807bc7b3ab0ea7f04a583ba7737d3673d5b80ff72613da69a528ef8216d57->enter($__internal_4c0807bc7b3ab0ea7f04a583ba7737d3673d5b80ff72613da69a528ef8216d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4c0807bc7b3ab0ea7f04a583ba7737d3673d5b80ff72613da69a528ef8216d57->leave($__internal_4c0807bc7b3ab0ea7f04a583ba7737d3673d5b80ff72613da69a528ef8216d57_prof);

        
        $__internal_9f455f615b11d0fb7e76543c6567ec366f9ff262ed250f0c14a4d1d792fd4db1->leave($__internal_9f455f615b11d0fb7e76543c6567ec366f9ff262ed250f0c14a4d1d792fd4db1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71d067ad8ba1f16b93472dfdf1fd3466a0fa3c243d68400f92afb6f55ac90af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d067ad8ba1f16b93472dfdf1fd3466a0fa3c243d68400f92afb6f55ac90af7->enter($__internal_71d067ad8ba1f16b93472dfdf1fd3466a0fa3c243d68400f92afb6f55ac90af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7128ceb46aad6839f7f06ae27428de055c18282bbfa35c7c33d6a2f7e4fadb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7128ceb46aad6839f7f06ae27428de055c18282bbfa35c7c33d6a2f7e4fadb9a->enter($__internal_7128ceb46aad6839f7f06ae27428de055c18282bbfa35c7c33d6a2f7e4fadb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7128ceb46aad6839f7f06ae27428de055c18282bbfa35c7c33d6a2f7e4fadb9a->leave($__internal_7128ceb46aad6839f7f06ae27428de055c18282bbfa35c7c33d6a2f7e4fadb9a_prof);

        
        $__internal_71d067ad8ba1f16b93472dfdf1fd3466a0fa3c243d68400f92afb6f55ac90af7->leave($__internal_71d067ad8ba1f16b93472dfdf1fd3466a0fa3c243d68400f92afb6f55ac90af7_prof);

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
