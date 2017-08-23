<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a51062904eb2c5b25faea4d02b9cdc7faf6acc42f72c1bb331d344acd10ef3d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c03057181f0493e1c334a3218839dd8927271762f7f89c014a021c24bb374e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c03057181f0493e1c334a3218839dd8927271762f7f89c014a021c24bb374e54->enter($__internal_c03057181f0493e1c334a3218839dd8927271762f7f89c014a021c24bb374e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_3560c2255192654e767cce71c26070ae4a4423fc7da8b03b54254de26ac05f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3560c2255192654e767cce71c26070ae4a4423fc7da8b03b54254de26ac05f43->enter($__internal_3560c2255192654e767cce71c26070ae4a4423fc7da8b03b54254de26ac05f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c03057181f0493e1c334a3218839dd8927271762f7f89c014a021c24bb374e54->leave($__internal_c03057181f0493e1c334a3218839dd8927271762f7f89c014a021c24bb374e54_prof);

        
        $__internal_3560c2255192654e767cce71c26070ae4a4423fc7da8b03b54254de26ac05f43->leave($__internal_3560c2255192654e767cce71c26070ae4a4423fc7da8b03b54254de26ac05f43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7125d72260285ff2484b0473ef4af0e2a62dc4d02da78e1febb6b2327a87e04d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7125d72260285ff2484b0473ef4af0e2a62dc4d02da78e1febb6b2327a87e04d->enter($__internal_7125d72260285ff2484b0473ef4af0e2a62dc4d02da78e1febb6b2327a87e04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bd07389b57271402545e5ef917d6eb7187acc2c888fcdc5cf6350a57d92802f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd07389b57271402545e5ef917d6eb7187acc2c888fcdc5cf6350a57d92802f1->enter($__internal_bd07389b57271402545e5ef917d6eb7187acc2c888fcdc5cf6350a57d92802f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_bd07389b57271402545e5ef917d6eb7187acc2c888fcdc5cf6350a57d92802f1->leave($__internal_bd07389b57271402545e5ef917d6eb7187acc2c888fcdc5cf6350a57d92802f1_prof);

        
        $__internal_7125d72260285ff2484b0473ef4af0e2a62dc4d02da78e1febb6b2327a87e04d->leave($__internal_7125d72260285ff2484b0473ef4af0e2a62dc4d02da78e1febb6b2327a87e04d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
