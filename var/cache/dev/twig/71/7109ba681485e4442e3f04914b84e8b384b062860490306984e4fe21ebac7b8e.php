<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_89edebbad8488683d22e94b42b8777f2f83eb57f43b62ea76fb0a23ed9aafc43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62a95049c99b3eac4da58410be428e75963e9d726a1cc935892e4a43f406f10c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a95049c99b3eac4da58410be428e75963e9d726a1cc935892e4a43f406f10c->enter($__internal_62a95049c99b3eac4da58410be428e75963e9d726a1cc935892e4a43f406f10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_0e45d764726e5d8751b86dbf1e0e3a498e7901f53ab133a709810d75e68850d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e45d764726e5d8751b86dbf1e0e3a498e7901f53ab133a709810d75e68850d6->enter($__internal_0e45d764726e5d8751b86dbf1e0e3a498e7901f53ab133a709810d75e68850d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_62a95049c99b3eac4da58410be428e75963e9d726a1cc935892e4a43f406f10c->leave($__internal_62a95049c99b3eac4da58410be428e75963e9d726a1cc935892e4a43f406f10c_prof);

        
        $__internal_0e45d764726e5d8751b86dbf1e0e3a498e7901f53ab133a709810d75e68850d6->leave($__internal_0e45d764726e5d8751b86dbf1e0e3a498e7901f53ab133a709810d75e68850d6_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_8864c280257f81d7ee134ac680bfeedd8eddc6deab67b02d9f9ad4915ff2f036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8864c280257f81d7ee134ac680bfeedd8eddc6deab67b02d9f9ad4915ff2f036->enter($__internal_8864c280257f81d7ee134ac680bfeedd8eddc6deab67b02d9f9ad4915ff2f036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_ef26d461e695fb4985eaebad02d1b84ed061a2a1e886e60954f2a0279b3fa171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef26d461e695fb4985eaebad02d1b84ed061a2a1e886e60954f2a0279b3fa171->enter($__internal_ef26d461e695fb4985eaebad02d1b84ed061a2a1e886e60954f2a0279b3fa171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_ef26d461e695fb4985eaebad02d1b84ed061a2a1e886e60954f2a0279b3fa171->leave($__internal_ef26d461e695fb4985eaebad02d1b84ed061a2a1e886e60954f2a0279b3fa171_prof);

        
        $__internal_8864c280257f81d7ee134ac680bfeedd8eddc6deab67b02d9f9ad4915ff2f036->leave($__internal_8864c280257f81d7ee134ac680bfeedd8eddc6deab67b02d9f9ad4915ff2f036_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
