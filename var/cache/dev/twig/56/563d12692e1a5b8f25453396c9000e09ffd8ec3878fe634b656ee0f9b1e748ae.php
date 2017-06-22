<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f4176b8706f715edbb7c2df8c1abadb789d890dd50e4028e439ea6c6e364f5a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bec7463b28b7dda58f1cb3c49b7fdaa2cd26821366db83de9be445255b002256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec7463b28b7dda58f1cb3c49b7fdaa2cd26821366db83de9be445255b002256->enter($__internal_bec7463b28b7dda58f1cb3c49b7fdaa2cd26821366db83de9be445255b002256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ed647975fb348779c6535ed57ad11e697f1eff26e3eeb93a3e496bc857599b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed647975fb348779c6535ed57ad11e697f1eff26e3eeb93a3e496bc857599b93->enter($__internal_ed647975fb348779c6535ed57ad11e697f1eff26e3eeb93a3e496bc857599b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bec7463b28b7dda58f1cb3c49b7fdaa2cd26821366db83de9be445255b002256->leave($__internal_bec7463b28b7dda58f1cb3c49b7fdaa2cd26821366db83de9be445255b002256_prof);

        
        $__internal_ed647975fb348779c6535ed57ad11e697f1eff26e3eeb93a3e496bc857599b93->leave($__internal_ed647975fb348779c6535ed57ad11e697f1eff26e3eeb93a3e496bc857599b93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9dc4c2d6f102676609da2779eb860a1b41fac38f6c77b1d5b397b5a08052c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9dc4c2d6f102676609da2779eb860a1b41fac38f6c77b1d5b397b5a08052c07->enter($__internal_a9dc4c2d6f102676609da2779eb860a1b41fac38f6c77b1d5b397b5a08052c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_05c1f6bc0ba0aba61b1c3457d4520866986477c953d091eb635227268d68d926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c1f6bc0ba0aba61b1c3457d4520866986477c953d091eb635227268d68d926->enter($__internal_05c1f6bc0ba0aba61b1c3457d4520866986477c953d091eb635227268d68d926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_05c1f6bc0ba0aba61b1c3457d4520866986477c953d091eb635227268d68d926->leave($__internal_05c1f6bc0ba0aba61b1c3457d4520866986477c953d091eb635227268d68d926_prof);

        
        $__internal_a9dc4c2d6f102676609da2779eb860a1b41fac38f6c77b1d5b397b5a08052c07->leave($__internal_a9dc4c2d6f102676609da2779eb860a1b41fac38f6c77b1d5b397b5a08052c07_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2a6e9428811730f9a782f3917cfddafb57da40e327b128ad3da4ed04050d49a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a6e9428811730f9a782f3917cfddafb57da40e327b128ad3da4ed04050d49a->enter($__internal_f2a6e9428811730f9a782f3917cfddafb57da40e327b128ad3da4ed04050d49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ed9cfaeea028040781a70a7e575676940baae8b4081c9344e5296405cf4a32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed9cfaeea028040781a70a7e575676940baae8b4081c9344e5296405cf4a32c->enter($__internal_7ed9cfaeea028040781a70a7e575676940baae8b4081c9344e5296405cf4a32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7ed9cfaeea028040781a70a7e575676940baae8b4081c9344e5296405cf4a32c->leave($__internal_7ed9cfaeea028040781a70a7e575676940baae8b4081c9344e5296405cf4a32c_prof);

        
        $__internal_f2a6e9428811730f9a782f3917cfddafb57da40e327b128ad3da4ed04050d49a->leave($__internal_f2a6e9428811730f9a782f3917cfddafb57da40e327b128ad3da4ed04050d49a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf75a02bb061e05313e5cbe200e5d2c3f77eda448771357737a1951e7514b52c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf75a02bb061e05313e5cbe200e5d2c3f77eda448771357737a1951e7514b52c->enter($__internal_cf75a02bb061e05313e5cbe200e5d2c3f77eda448771357737a1951e7514b52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf4992c299be670d56d7d774dfbbb9802aa02e5428a9a369b1731906ffa2af06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4992c299be670d56d7d774dfbbb9802aa02e5428a9a369b1731906ffa2af06->enter($__internal_bf4992c299be670d56d7d774dfbbb9802aa02e5428a9a369b1731906ffa2af06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bf4992c299be670d56d7d774dfbbb9802aa02e5428a9a369b1731906ffa2af06->leave($__internal_bf4992c299be670d56d7d774dfbbb9802aa02e5428a9a369b1731906ffa2af06_prof);

        
        $__internal_cf75a02bb061e05313e5cbe200e5d2c3f77eda448771357737a1951e7514b52c->leave($__internal_cf75a02bb061e05313e5cbe200e5d2c3f77eda448771357737a1951e7514b52c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
