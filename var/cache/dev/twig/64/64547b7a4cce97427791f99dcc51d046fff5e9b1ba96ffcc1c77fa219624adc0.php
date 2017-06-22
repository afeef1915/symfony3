<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_944bd8f9baa538a5ccf23d2bae5c7542050a506fd9cbd9fd94fcc0f2ded6d679 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94979033ba9ff2655018eee2b3a7d5cae1e902885a5dddb1c68f7741628687c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94979033ba9ff2655018eee2b3a7d5cae1e902885a5dddb1c68f7741628687c8->enter($__internal_94979033ba9ff2655018eee2b3a7d5cae1e902885a5dddb1c68f7741628687c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_d11166687ad279037de8b4a6e8125aa0242747573c6462f5accbf2b8a51d1b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11166687ad279037de8b4a6e8125aa0242747573c6462f5accbf2b8a51d1b0b->enter($__internal_d11166687ad279037de8b4a6e8125aa0242747573c6462f5accbf2b8a51d1b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_94979033ba9ff2655018eee2b3a7d5cae1e902885a5dddb1c68f7741628687c8->leave($__internal_94979033ba9ff2655018eee2b3a7d5cae1e902885a5dddb1c68f7741628687c8_prof);

        
        $__internal_d11166687ad279037de8b4a6e8125aa0242747573c6462f5accbf2b8a51d1b0b->leave($__internal_d11166687ad279037de8b4a6e8125aa0242747573c6462f5accbf2b8a51d1b0b_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_b7bc1b3f31d421b6326929e09b7720473c00d2172664413b8cf359a3777dd942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7bc1b3f31d421b6326929e09b7720473c00d2172664413b8cf359a3777dd942->enter($__internal_b7bc1b3f31d421b6326929e09b7720473c00d2172664413b8cf359a3777dd942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_1a880780ab76c9c11c0e63689c4986411512458aae787bfba589e880c9e4fd85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a880780ab76c9c11c0e63689c4986411512458aae787bfba589e880c9e4fd85->enter($__internal_1a880780ab76c9c11c0e63689c4986411512458aae787bfba589e880c9e4fd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_1a880780ab76c9c11c0e63689c4986411512458aae787bfba589e880c9e4fd85->leave($__internal_1a880780ab76c9c11c0e63689c4986411512458aae787bfba589e880c9e4fd85_prof);

        
        $__internal_b7bc1b3f31d421b6326929e09b7720473c00d2172664413b8cf359a3777dd942->leave($__internal_b7bc1b3f31d421b6326929e09b7720473c00d2172664413b8cf359a3777dd942_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_8d7b8c046220373b768ca80b59e57d99687a5787b54accfeecc2861a970e7257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7b8c046220373b768ca80b59e57d99687a5787b54accfeecc2861a970e7257->enter($__internal_8d7b8c046220373b768ca80b59e57d99687a5787b54accfeecc2861a970e7257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_5e9bc9fb1f5b2ce6a99687f37e5def150589b6463aaadf8bc47ea5e143bafcb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9bc9fb1f5b2ce6a99687f37e5def150589b6463aaadf8bc47ea5e143bafcb3->enter($__internal_5e9bc9fb1f5b2ce6a99687f37e5def150589b6463aaadf8bc47ea5e143bafcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_5e9bc9fb1f5b2ce6a99687f37e5def150589b6463aaadf8bc47ea5e143bafcb3->leave($__internal_5e9bc9fb1f5b2ce6a99687f37e5def150589b6463aaadf8bc47ea5e143bafcb3_prof);

        
        $__internal_8d7b8c046220373b768ca80b59e57d99687a5787b54accfeecc2861a970e7257->leave($__internal_8d7b8c046220373b768ca80b59e57d99687a5787b54accfeecc2861a970e7257_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_c7f4e86e51826423cfb27b7cbd51bbb9baa74cd9450a35f2e2b596e8e7e60348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f4e86e51826423cfb27b7cbd51bbb9baa74cd9450a35f2e2b596e8e7e60348->enter($__internal_c7f4e86e51826423cfb27b7cbd51bbb9baa74cd9450a35f2e2b596e8e7e60348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_c645662f19ffe6b2f068ef11e18e818cecac18bc15cda1914e653954c2342b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c645662f19ffe6b2f068ef11e18e818cecac18bc15cda1914e653954c2342b31->enter($__internal_c645662f19ffe6b2f068ef11e18e818cecac18bc15cda1914e653954c2342b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            // line 28
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_c645662f19ffe6b2f068ef11e18e818cecac18bc15cda1914e653954c2342b31->leave($__internal_c645662f19ffe6b2f068ef11e18e818cecac18bc15cda1914e653954c2342b31_prof);

        
        $__internal_c7f4e86e51826423cfb27b7cbd51bbb9baa74cd9450a35f2e2b596e8e7e60348->leave($__internal_c7f4e86e51826423cfb27b7cbd51bbb9baa74cd9450a35f2e2b596e8e7e60348_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  133 => 28,  131 => 27,  123 => 26,  119 => 25,  115 => 24,  108 => 23,  99 => 22,  88 => 19,  85 => 18,  76 => 17,  60 => 13,  51 => 12,  41 => 22,  38 => 21,  36 => 17,  33 => 16,  31 => 12,  28 => 11,);
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

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{- per_page -}}
            </option>
        {% endfor %}
    </select>
{% endblock %}
", "SonataAdminBundle:Pager:base_results.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}
