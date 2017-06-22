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
        $__internal_6fb28198ef573ea4dd2f33c2b831ccd5f891f909526d4e2833a928d855e3b1b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb28198ef573ea4dd2f33c2b831ccd5f891f909526d4e2833a928d855e3b1b7->enter($__internal_6fb28198ef573ea4dd2f33c2b831ccd5f891f909526d4e2833a928d855e3b1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_de8c26c0495f57338fc6b91f3d8f8c29370cc91afd8d267dab30ea1d4d10a912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8c26c0495f57338fc6b91f3d8f8c29370cc91afd8d267dab30ea1d4d10a912->enter($__internal_de8c26c0495f57338fc6b91f3d8f8c29370cc91afd8d267dab30ea1d4d10a912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fb28198ef573ea4dd2f33c2b831ccd5f891f909526d4e2833a928d855e3b1b7->leave($__internal_6fb28198ef573ea4dd2f33c2b831ccd5f891f909526d4e2833a928d855e3b1b7_prof);

        
        $__internal_de8c26c0495f57338fc6b91f3d8f8c29370cc91afd8d267dab30ea1d4d10a912->leave($__internal_de8c26c0495f57338fc6b91f3d8f8c29370cc91afd8d267dab30ea1d4d10a912_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50eaefe03bb4c9ff568426c288545b31b67b7931074da5fc5ae7bebe11ef8286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50eaefe03bb4c9ff568426c288545b31b67b7931074da5fc5ae7bebe11ef8286->enter($__internal_50eaefe03bb4c9ff568426c288545b31b67b7931074da5fc5ae7bebe11ef8286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4a888ec113b6f310d76cd246395419606262ae5d761b706585faf88d398d3f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a888ec113b6f310d76cd246395419606262ae5d761b706585faf88d398d3f32->enter($__internal_4a888ec113b6f310d76cd246395419606262ae5d761b706585faf88d398d3f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a888ec113b6f310d76cd246395419606262ae5d761b706585faf88d398d3f32->leave($__internal_4a888ec113b6f310d76cd246395419606262ae5d761b706585faf88d398d3f32_prof);

        
        $__internal_50eaefe03bb4c9ff568426c288545b31b67b7931074da5fc5ae7bebe11ef8286->leave($__internal_50eaefe03bb4c9ff568426c288545b31b67b7931074da5fc5ae7bebe11ef8286_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37af45bc14d3cf101931977251d8d9cfce1b52042303d74a831af6fec118ae2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37af45bc14d3cf101931977251d8d9cfce1b52042303d74a831af6fec118ae2b->enter($__internal_37af45bc14d3cf101931977251d8d9cfce1b52042303d74a831af6fec118ae2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_39503f60aab71ffc1c3a423d916d5a53223b3cabeec476310d1d56aa98ee3dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39503f60aab71ffc1c3a423d916d5a53223b3cabeec476310d1d56aa98ee3dc8->enter($__internal_39503f60aab71ffc1c3a423d916d5a53223b3cabeec476310d1d56aa98ee3dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_39503f60aab71ffc1c3a423d916d5a53223b3cabeec476310d1d56aa98ee3dc8->leave($__internal_39503f60aab71ffc1c3a423d916d5a53223b3cabeec476310d1d56aa98ee3dc8_prof);

        
        $__internal_37af45bc14d3cf101931977251d8d9cfce1b52042303d74a831af6fec118ae2b->leave($__internal_37af45bc14d3cf101931977251d8d9cfce1b52042303d74a831af6fec118ae2b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77ae83c21268c9124ca24df02746d92985ca1b46fa4822b2b3560272abd68b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ae83c21268c9124ca24df02746d92985ca1b46fa4822b2b3560272abd68b90->enter($__internal_77ae83c21268c9124ca24df02746d92985ca1b46fa4822b2b3560272abd68b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef9a38be74784c76c1f41ca7c77ab33e15d067ee5fed83b5be4b207028953b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9a38be74784c76c1f41ca7c77ab33e15d067ee5fed83b5be4b207028953b75->enter($__internal_ef9a38be74784c76c1f41ca7c77ab33e15d067ee5fed83b5be4b207028953b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ef9a38be74784c76c1f41ca7c77ab33e15d067ee5fed83b5be4b207028953b75->leave($__internal_ef9a38be74784c76c1f41ca7c77ab33e15d067ee5fed83b5be4b207028953b75_prof);

        
        $__internal_77ae83c21268c9124ca24df02746d92985ca1b46fa4822b2b3560272abd68b90->leave($__internal_77ae83c21268c9124ca24df02746d92985ca1b46fa4822b2b3560272abd68b90_prof);

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
