<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_15e189fc61817cd99f7f37bc01557da46724db21af2d3e96da7bdd38168b624b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_7d26b5bca32950f637c733716040b7e172eeb437caee2e3cc727c1445fec06d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d26b5bca32950f637c733716040b7e172eeb437caee2e3cc727c1445fec06d2->enter($__internal_7d26b5bca32950f637c733716040b7e172eeb437caee2e3cc727c1445fec06d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1f69f4a7ef886bcf8905d543a725f7eaab4367b14c14d41f6de594b6097a8e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f69f4a7ef886bcf8905d543a725f7eaab4367b14c14d41f6de594b6097a8e5b->enter($__internal_1f69f4a7ef886bcf8905d543a725f7eaab4367b14c14d41f6de594b6097a8e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d26b5bca32950f637c733716040b7e172eeb437caee2e3cc727c1445fec06d2->leave($__internal_7d26b5bca32950f637c733716040b7e172eeb437caee2e3cc727c1445fec06d2_prof);

        
        $__internal_1f69f4a7ef886bcf8905d543a725f7eaab4367b14c14d41f6de594b6097a8e5b->leave($__internal_1f69f4a7ef886bcf8905d543a725f7eaab4367b14c14d41f6de594b6097a8e5b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49fb2e8b24dda84275cac93e7f6a1403e29f4228312b973295b85b6661ede952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49fb2e8b24dda84275cac93e7f6a1403e29f4228312b973295b85b6661ede952->enter($__internal_49fb2e8b24dda84275cac93e7f6a1403e29f4228312b973295b85b6661ede952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aeb0809f350a5fd8ab45e354232efd2263b8bfbc7cdcb9e0d7e9cbe67807fb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb0809f350a5fd8ab45e354232efd2263b8bfbc7cdcb9e0d7e9cbe67807fb48->enter($__internal_aeb0809f350a5fd8ab45e354232efd2263b8bfbc7cdcb9e0d7e9cbe67807fb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aeb0809f350a5fd8ab45e354232efd2263b8bfbc7cdcb9e0d7e9cbe67807fb48->leave($__internal_aeb0809f350a5fd8ab45e354232efd2263b8bfbc7cdcb9e0d7e9cbe67807fb48_prof);

        
        $__internal_49fb2e8b24dda84275cac93e7f6a1403e29f4228312b973295b85b6661ede952->leave($__internal_49fb2e8b24dda84275cac93e7f6a1403e29f4228312b973295b85b6661ede952_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e16b7706307952feb2bddf80a48631126b05c15377231c5b2a404a70aab67f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16b7706307952feb2bddf80a48631126b05c15377231c5b2a404a70aab67f9b->enter($__internal_e16b7706307952feb2bddf80a48631126b05c15377231c5b2a404a70aab67f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_91a63b35324aecf6842eee1d099dd54b18acb7ce4aa7dfd06f442283d81952d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a63b35324aecf6842eee1d099dd54b18acb7ce4aa7dfd06f442283d81952d1->enter($__internal_91a63b35324aecf6842eee1d099dd54b18acb7ce4aa7dfd06f442283d81952d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_91a63b35324aecf6842eee1d099dd54b18acb7ce4aa7dfd06f442283d81952d1->leave($__internal_91a63b35324aecf6842eee1d099dd54b18acb7ce4aa7dfd06f442283d81952d1_prof);

        
        $__internal_e16b7706307952feb2bddf80a48631126b05c15377231c5b2a404a70aab67f9b->leave($__internal_e16b7706307952feb2bddf80a48631126b05c15377231c5b2a404a70aab67f9b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_871c587762300a6eb2fc4dbd8f74420c9263db55551d91fa057310cb14217ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871c587762300a6eb2fc4dbd8f74420c9263db55551d91fa057310cb14217ef5->enter($__internal_871c587762300a6eb2fc4dbd8f74420c9263db55551d91fa057310cb14217ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_658c2dd6a54b9bfd1e91da836bd192d4f0cc91984600284fbef0689d58581ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658c2dd6a54b9bfd1e91da836bd192d4f0cc91984600284fbef0689d58581ba8->enter($__internal_658c2dd6a54b9bfd1e91da836bd192d4f0cc91984600284fbef0689d58581ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_658c2dd6a54b9bfd1e91da836bd192d4f0cc91984600284fbef0689d58581ba8->leave($__internal_658c2dd6a54b9bfd1e91da836bd192d4f0cc91984600284fbef0689d58581ba8_prof);

        
        $__internal_871c587762300a6eb2fc4dbd8f74420c9263db55551d91fa057310cb14217ef5->leave($__internal_871c587762300a6eb2fc4dbd8f74420c9263db55551d91fa057310cb14217ef5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
