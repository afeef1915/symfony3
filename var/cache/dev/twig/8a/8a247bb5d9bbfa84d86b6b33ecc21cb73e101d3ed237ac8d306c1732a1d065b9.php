<?php

/* DoctrineMongoDBBundle:Collector:mongodb.html.twig */
class __TwigTemplate_90ab83cd6e2b58b1b5177944bc7c1de2f8680c8f7e665516afb22859515f2d93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "DoctrineMongoDBBundle:Collector:mongodb.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aae8fc0a9593a738b390d291e35aa315438b3c100fb640b31f9d13b9b2f6f3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae8fc0a9593a738b390d291e35aa315438b3c100fb640b31f9d13b9b2f6f3ae->enter($__internal_aae8fc0a9593a738b390d291e35aa315438b3c100fb640b31f9d13b9b2f6f3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineMongoDBBundle:Collector:mongodb.html.twig"));

        $__internal_c4e00820b3af93c9afbf6b5d8985732290b591e7ab3e1a8e47348d379dc68ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e00820b3af93c9afbf6b5d8985732290b591e7ab3e1a8e47348d379dc68ebc->enter($__internal_c4e00820b3af93c9afbf6b5d8985732290b591e7ab3e1a8e47348d379dc68ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineMongoDBBundle:Collector:mongodb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aae8fc0a9593a738b390d291e35aa315438b3c100fb640b31f9d13b9b2f6f3ae->leave($__internal_aae8fc0a9593a738b390d291e35aa315438b3c100fb640b31f9d13b9b2f6f3ae_prof);

        
        $__internal_c4e00820b3af93c9afbf6b5d8985732290b591e7ab3e1a8e47348d379dc68ebc->leave($__internal_c4e00820b3af93c9afbf6b5d8985732290b591e7ab3e1a8e47348d379dc68ebc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_98558f51f7b81b69a2fc2f87e170cbca2924c8fff9c862631dc9ddf2cc3fb801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98558f51f7b81b69a2fc2f87e170cbca2924c8fff9c862631dc9ddf2cc3fb801->enter($__internal_98558f51f7b81b69a2fc2f87e170cbca2924c8fff9c862631dc9ddf2cc3fb801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4bb40f29ba408d55074038eb3a75b60db6a263b730c015ee1cb549c2f20a08ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb40f29ba408d55074038eb3a75b60db6a263b730c015ee1cb549c2f20a08ed->enter($__internal_4bb40f29ba408d55074038eb3a75b60db6a263b730c015ee1cb549c2f20a08ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queryCount", array()) > 0)) {
            // line 5
            echo "        ";
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
            // line 6
            echo "
        ";
            // line 7
            ob_start();
            // line 8
            echo "            ";
            if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
                // line 9
                echo "                <img width=\"20\" height=\"28\" alt=\"Mongo\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\"/>
                <span class=\"sf-toolbar-status\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queryCount", array()), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 12
                echo "                ";
                echo twig_include($this->env, $context, "@DoctrineMongoDB/Collector/icon.svg");
                echo "
                <span class=\"sf-toolbar-value\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queryCount", array()), "html", null, true);
                echo "</span>
            ";
            }
            // line 15
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 16
            echo "        ";
            ob_start();
            // line 17
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queryCount", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 22
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "DoctrineMongoDBBundle:Collector:mongodb.html.twig", 22)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 23
            echo "    ";
        }
        
        $__internal_4bb40f29ba408d55074038eb3a75b60db6a263b730c015ee1cb549c2f20a08ed->leave($__internal_4bb40f29ba408d55074038eb3a75b60db6a263b730c015ee1cb549c2f20a08ed_prof);

        
        $__internal_98558f51f7b81b69a2fc2f87e170cbca2924c8fff9c862631dc9ddf2cc3fb801->leave($__internal_98558f51f7b81b69a2fc2f87e170cbca2924c8fff9c862631dc9ddf2cc3fb801_prof);

    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfa62ca15a24608306152dffbf6aecde349226ab194222ab21dc70c4fa8d9030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa62ca15a24608306152dffbf6aecde349226ab194222ab21dc70c4fa8d9030->enter($__internal_dfa62ca15a24608306152dffbf6aecde349226ab194222ab21dc70c4fa8d9030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_15581660a80a67897f4e252e4fba5958b48c94337c3db680b169fe3cd4c0a921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15581660a80a67897f4e252e4fba5958b48c94337c3db680b169fe3cd4c0a921->enter($__internal_15581660a80a67897f4e252e4fba5958b48c94337c3db680b169fe3cd4c0a921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 27
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"Mongo\" /></span>
    <strong>Doctrine MongoDB</strong>
    <span class=\"count\">
        <span>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queryCount", array()), "html", null, true);
        echo "</span>
    </span>
</span>
";
        
        $__internal_15581660a80a67897f4e252e4fba5958b48c94337c3db680b169fe3cd4c0a921->leave($__internal_15581660a80a67897f4e252e4fba5958b48c94337c3db680b169fe3cd4c0a921_prof);

        
        $__internal_dfa62ca15a24608306152dffbf6aecde349226ab194222ab21dc70c4fa8d9030->leave($__internal_dfa62ca15a24608306152dffbf6aecde349226ab194222ab21dc70c4fa8d9030_prof);

    }

    // line 36
    public function block_panel($context, array $blocks = array())
    {
        $__internal_390358e725a2687d89119aadf006125b743111cd641639852a4a620b4c5d0700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_390358e725a2687d89119aadf006125b743111cd641639852a4a620b4c5d0700->enter($__internal_390358e725a2687d89119aadf006125b743111cd641639852a4a620b4c5d0700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bd151629aebf78d7ea36c12537bb650b45f347ee859eee18633bb65d6b0b61dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd151629aebf78d7ea36c12537bb650b45f347ee859eee18633bb65d6b0b61dd->enter($__internal_bd151629aebf78d7ea36c12537bb650b45f347ee859eee18633bb65d6b0b61dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 37
        echo "    <h2>Queries</h2>

    ";
        // line 39
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array()))) {
            // line 40
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 44
            echo "        <ul class=\"alt\">
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 46
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">
                    <div>
                        <code>";
                // line 48
                echo twig_escape_filter($this->env, $context["query"], "html", null, true);
                echo "</code>
                    </div>
                </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </ul>
    ";
        }
        
        $__internal_bd151629aebf78d7ea36c12537bb650b45f347ee859eee18633bb65d6b0b61dd->leave($__internal_bd151629aebf78d7ea36c12537bb650b45f347ee859eee18633bb65d6b0b61dd_prof);

        
        $__internal_390358e725a2687d89119aadf006125b743111cd641639852a4a620b4c5d0700->leave($__internal_390358e725a2687d89119aadf006125b743111cd641639852a4a620b4c5d0700_prof);

    }

    public function getTemplateName()
    {
        return "DoctrineMongoDBBundle:Collector:mongodb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 52,  189 => 48,  183 => 46,  166 => 45,  163 => 44,  157 => 40,  155 => 39,  151 => 37,  142 => 36,  128 => 31,  122 => 27,  113 => 26,  102 => 23,  99 => 22,  93 => 19,  89 => 17,  86 => 16,  83 => 15,  78 => 13,  73 => 12,  68 => 10,  65 => 9,  62 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% if collector.queryCount > 0 %}
        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% if profiler_markup_version == 1 %}
                <img width=\"20\" height=\"28\" alt=\"Mongo\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\"/>
                <span class=\"sf-toolbar-status\">{{ collector.queryCount }}</span>
            {% else %}
                {{ include('@DoctrineMongoDB/Collector/icon.svg') }}
                <span class=\"sf-toolbar-value\">{{ collector.queryCount }}</span>
            {% endif %}
        {% endset %}
        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status\">{{ collector.queryCount }}</span>
            </div>
        {% endset %}
        {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}
    {% endif %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"Mongo\" /></span>
    <strong>Doctrine MongoDB</strong>
    <span class=\"count\">
        <span>{{ collector.queryCount }}</span>
    </span>
</span>
{% endblock %}

{% block panel %}
    <h2>Queries</h2>

    {% if collector.queries is empty %}
        <p>
            <em>No queries.</em>
        </p>
    {% else %}
        <ul class=\"alt\">
            {% for query in collector.queries %}
                <li class=\"{{ cycle(['odd', 'even'], loop.index) }}\">
                    <div>
                        <code>{{ query }}</code>
                    </div>
                </li>
            {% endfor %}
        </ul>
    {% endif %}
{% endblock %}
", "DoctrineMongoDBBundle:Collector:mongodb.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\doctrine\\mongodb-odm-bundle/Resources/views/Collector/mongodb.html.twig");
    }
}
