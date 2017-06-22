<?php

/* SonataAdminBundle:CRUD:list_outer_rows_list.html.twig */
class __TwigTemplate_2f0f0368e7b6c2a68c19a08b8e6f80b7318c7c5a242074cb4a875e181c4f6dc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2d7cdc9c2b1bf263848c76fbbcbc047252c897dc7f717560e2b294565184c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d7cdc9c2b1bf263848c76fbbcbc047252c897dc7f717560e2b294565184c95->enter($__internal_c2d7cdc9c2b1bf263848c76fbbcbc047252c897dc7f717560e2b294565184c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_outer_rows_list.html.twig"));

        $__internal_7b7d08364792e1a462ee9c0ca59a9b14967fc44e14af5991d119b24226d98259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7d08364792e1a462ee9c0ca59a9b14967fc44e14af5991d119b24226d98259->enter($__internal_7b7d08364792e1a462ee9c0ca59a9b14967fc44e14af5991d119b24226d98259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_outer_rows_list.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 13
            echo "    <tr>
        ";
            // line 14
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "inner_list_row"), "method"), "SonataAdminBundle:CRUD:list_outer_rows_list.html.twig", 14)->display($context);
            // line 15
            echo "    </tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c2d7cdc9c2b1bf263848c76fbbcbc047252c897dc7f717560e2b294565184c95->leave($__internal_c2d7cdc9c2b1bf263848c76fbbcbc047252c897dc7f717560e2b294565184c95_prof);

        
        $__internal_7b7d08364792e1a462ee9c0ca59a9b14967fc44e14af5991d119b24226d98259->leave($__internal_7b7d08364792e1a462ee9c0ca59a9b14967fc44e14af5991d119b24226d98259_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_outer_rows_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  48 => 14,  45 => 13,  28 => 12,  25 => 11,);
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

{% for object in admin.datagrid.results %}
    <tr>
        {% include admin.getTemplate('inner_list_row') %}
    </tr>
{% endfor %}
", "SonataAdminBundle:CRUD:list_outer_rows_list.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_outer_rows_list.html.twig");
    }
}
