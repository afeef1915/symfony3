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
        $__internal_347ed24fa97e3174e577da57a2360a8baf2366dfb6fc6fe0321c8fd9461d8d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347ed24fa97e3174e577da57a2360a8baf2366dfb6fc6fe0321c8fd9461d8d62->enter($__internal_347ed24fa97e3174e577da57a2360a8baf2366dfb6fc6fe0321c8fd9461d8d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineMongoDBBundle:Collector:mongodb.html.twig"));

        $__internal_84bc43b37fa937b542fb632e26dcbcf9edce036f5f69a3b8ba7ba473c8cc61c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84bc43b37fa937b542fb632e26dcbcf9edce036f5f69a3b8ba7ba473c8cc61c1->enter($__internal_84bc43b37fa937b542fb632e26dcbcf9edce036f5f69a3b8ba7ba473c8cc61c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineMongoDBBundle:Collector:mongodb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_347ed24fa97e3174e577da57a2360a8baf2366dfb6fc6fe0321c8fd9461d8d62->leave($__internal_347ed24fa97e3174e577da57a2360a8baf2366dfb6fc6fe0321c8fd9461d8d62_prof);

        
        $__internal_84bc43b37fa937b542fb632e26dcbcf9edce036f5f69a3b8ba7ba473c8cc61c1->leave($__internal_84bc43b37fa937b542fb632e26dcbcf9edce036f5f69a3b8ba7ba473c8cc61c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3536e6bf91ccdb37ddc12eb7b64eaf8e4f48cf03da373919bf8128eba126c158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3536e6bf91ccdb37ddc12eb7b64eaf8e4f48cf03da373919bf8128eba126c158->enter($__internal_3536e6bf91ccdb37ddc12eb7b64eaf8e4f48cf03da373919bf8128eba126c158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5c8d273abaf77306808824e79f594064bbdb6431864c7556466effc8bd483621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8d273abaf77306808824e79f594064bbdb6431864c7556466effc8bd483621->enter($__internal_5c8d273abaf77306808824e79f594064bbdb6431864c7556466effc8bd483621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5c8d273abaf77306808824e79f594064bbdb6431864c7556466effc8bd483621->leave($__internal_5c8d273abaf77306808824e79f594064bbdb6431864c7556466effc8bd483621_prof);

        
        $__internal_3536e6bf91ccdb37ddc12eb7b64eaf8e4f48cf03da373919bf8128eba126c158->leave($__internal_3536e6bf91ccdb37ddc12eb7b64eaf8e4f48cf03da373919bf8128eba126c158_prof);

    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cca7bce86a38503d0817c10d59ea74dc19b16f6386f7641c56641ee37b47b4a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca7bce86a38503d0817c10d59ea74dc19b16f6386f7641c56641ee37b47b4a1->enter($__internal_cca7bce86a38503d0817c10d59ea74dc19b16f6386f7641c56641ee37b47b4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cc200f27b1755e63759ea61a68452770ff9c9be0e91021fb8ccec7233de31534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc200f27b1755e63759ea61a68452770ff9c9be0e91021fb8ccec7233de31534->enter($__internal_cc200f27b1755e63759ea61a68452770ff9c9be0e91021fb8ccec7233de31534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cc200f27b1755e63759ea61a68452770ff9c9be0e91021fb8ccec7233de31534->leave($__internal_cc200f27b1755e63759ea61a68452770ff9c9be0e91021fb8ccec7233de31534_prof);

        
        $__internal_cca7bce86a38503d0817c10d59ea74dc19b16f6386f7641c56641ee37b47b4a1->leave($__internal_cca7bce86a38503d0817c10d59ea74dc19b16f6386f7641c56641ee37b47b4a1_prof);

    }

    // line 36
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6414399c8ea3239593f4450a0a4965e0d07282a6a38307edbf58be6425c6113d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6414399c8ea3239593f4450a0a4965e0d07282a6a38307edbf58be6425c6113d->enter($__internal_6414399c8ea3239593f4450a0a4965e0d07282a6a38307edbf58be6425c6113d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_821cf60aff567a45ef5cd270578275d713e0023ebacebb05098fc4a51e9af555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821cf60aff567a45ef5cd270578275d713e0023ebacebb05098fc4a51e9af555->enter($__internal_821cf60aff567a45ef5cd270578275d713e0023ebacebb05098fc4a51e9af555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_821cf60aff567a45ef5cd270578275d713e0023ebacebb05098fc4a51e9af555->leave($__internal_821cf60aff567a45ef5cd270578275d713e0023ebacebb05098fc4a51e9af555_prof);

        
        $__internal_6414399c8ea3239593f4450a0a4965e0d07282a6a38307edbf58be6425c6113d->leave($__internal_6414399c8ea3239593f4450a0a4965e0d07282a6a38307edbf58be6425c6113d_prof);

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
