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
        $__internal_dcb3619e649c5fdde2ebb93f799822db9fbe40f7366f096e4e5d02901803ef64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb3619e649c5fdde2ebb93f799822db9fbe40f7366f096e4e5d02901803ef64->enter($__internal_dcb3619e649c5fdde2ebb93f799822db9fbe40f7366f096e4e5d02901803ef64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_535f65ec2948eac2d14eb1e3fdc88318291e449d9dd0b6cb3c4f9c4dee360526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535f65ec2948eac2d14eb1e3fdc88318291e449d9dd0b6cb3c4f9c4dee360526->enter($__internal_535f65ec2948eac2d14eb1e3fdc88318291e449d9dd0b6cb3c4f9c4dee360526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcb3619e649c5fdde2ebb93f799822db9fbe40f7366f096e4e5d02901803ef64->leave($__internal_dcb3619e649c5fdde2ebb93f799822db9fbe40f7366f096e4e5d02901803ef64_prof);

        
        $__internal_535f65ec2948eac2d14eb1e3fdc88318291e449d9dd0b6cb3c4f9c4dee360526->leave($__internal_535f65ec2948eac2d14eb1e3fdc88318291e449d9dd0b6cb3c4f9c4dee360526_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab4bfbaa50e01cad34301924515a8e8184154029e30a05c4daeb9dd87f7ad526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab4bfbaa50e01cad34301924515a8e8184154029e30a05c4daeb9dd87f7ad526->enter($__internal_ab4bfbaa50e01cad34301924515a8e8184154029e30a05c4daeb9dd87f7ad526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2e26595a019b5d6700f6dbdc900cf6027e213e6f8e63ff7b147712c67024c9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e26595a019b5d6700f6dbdc900cf6027e213e6f8e63ff7b147712c67024c9cb->enter($__internal_2e26595a019b5d6700f6dbdc900cf6027e213e6f8e63ff7b147712c67024c9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2e26595a019b5d6700f6dbdc900cf6027e213e6f8e63ff7b147712c67024c9cb->leave($__internal_2e26595a019b5d6700f6dbdc900cf6027e213e6f8e63ff7b147712c67024c9cb_prof);

        
        $__internal_ab4bfbaa50e01cad34301924515a8e8184154029e30a05c4daeb9dd87f7ad526->leave($__internal_ab4bfbaa50e01cad34301924515a8e8184154029e30a05c4daeb9dd87f7ad526_prof);

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
