<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_f2a70a6cf99fd5bf7247246f46bc510b70e2b5ca87a3e91bd6aef90dc82e7486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_633eb4f3d2209238b74190fc2e00c79f27238cfbad4ae35e07e735fff2c96d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633eb4f3d2209238b74190fc2e00c79f27238cfbad4ae35e07e735fff2c96d7c->enter($__internal_633eb4f3d2209238b74190fc2e00c79f27238cfbad4ae35e07e735fff2c96d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_field.html.twig"));

        $__internal_d90e27bbe48a8c37fe23d1b3fe754d6dd7f118b6932edac92483b9d6e48a5024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90e27bbe48a8c37fe23d1b3fe754d6dd7f118b6932edac92483b9d6e48a5024->enter($__internal_d90e27bbe48a8c37fe23d1b3fe754d6dd7f118b6932edac92483b9d6e48a5024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_field.html.twig"));

        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "row_align", array(), "any", true, true)) {
            echo " style=\"text-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "row_align", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 13
        $context["route"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array()), null)) : (null));
        // line 14
        echo "
    ";
        // line 15
        if (((($this->getAttribute($this->getAttribute(        // line 16
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) &&         // line 17
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route"))) && $this->getAttribute(        // line 18
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route"))), "method")) && $this->getAttribute(        // line 19
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 1 => ((twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), array(0 => "show", 1 => "edit"))) ? ((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))) : (null))), "method"))) {
            // line 21
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">
            ";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            // line 23
            $this->displayBlock('field', $context, $blocks);
            // line 38
            echo "</a>
    ";
        } else {
            // line 40
            echo "        ";
            $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
            // line 41
            echo "        ";
            $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
            // line 42
            echo "
        ";
            // line 43
            if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
                // line 44
                echo "            ";
                $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_set_object_field_value", twig_array_merge((($this->getAttribute(                // line 46
(isset($context["admin"]) ? $context["admin"] : null), "getPersistentParameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getPersistentParameters", array()), array())) : (array())), array("context" => "list", "field" => $this->getAttribute(                // line 48
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "objectId" => $this->getAttribute(                // line 49
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "code" => $this->getAttribute(                // line 50
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))));
                // line 53
                echo "
            ";
                // line 54
                if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()) == "date") &&  !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                    // line 55
                    echo "                ";
                    $context["data_value"] = $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "format", array(0 => "Y-m-d"), "method");
                    // line 56
                    echo "            ";
                } elseif ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()) == "boolean") && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                    // line 57
                    echo "                ";
                    $context["data_value"] = 0;
                    // line 58
                    echo "            ";
                } else {
                    // line 59
                    echo "                ";
                    $context["data_value"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                    // line 60
                    echo "            ";
                }
                // line 61
                echo "
            <span ";
                // line 62
                $this->displayBlock('field_span_attributes', $context, $blocks);
                // line 67
                echo ">
                ";
                // line 68
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 71
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 73
            echo "    ";
        }
        // line 74
        echo "</td>
";
        
        $__internal_633eb4f3d2209238b74190fc2e00c79f27238cfbad4ae35e07e735fff2c96d7c->leave($__internal_633eb4f3d2209238b74190fc2e00c79f27238cfbad4ae35e07e735fff2c96d7c_prof);

        
        $__internal_d90e27bbe48a8c37fe23d1b3fe754d6dd7f118b6932edac92483b9d6e48a5024->leave($__internal_d90e27bbe48a8c37fe23d1b3fe754d6dd7f118b6932edac92483b9d6e48a5024_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_55120085a4df3fead81a247074cbd374d78f10edbbd9f665ac35645fa41a677c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55120085a4df3fead81a247074cbd374d78f10edbbd9f665ac35645fa41a677c->enter($__internal_55120085a4df3fead81a247074cbd374d78f10edbbd9f665ac35645fa41a677c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_885d6f0ba9e235b7b76a1130383ca1a87c71b6979cfdfb29f5d7d95e0b6a6751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885d6f0ba9e235b7b76a1130383ca1a87c71b6979cfdfb29f5d7d95e0b6a6751->enter($__internal_885d6f0ba9e235b7b76a1130383ca1a87c71b6979cfdfb29f5d7d95e0b6a6751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 24
        echo "                ";
        ob_start();
        // line 25
        echo "                ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) {
            // line 26
            echo "                    ";
            echo "if";
            echo "
                    ";
            // line 27
            $context["collapse"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "collapse", array());
            // line 28
            echo "                    <div class=\"sonata-readmore\"
                          data-readmore-height=\"";
            // line 29
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                          data-readmore-more=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                          data-readmore-less=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</div>
                ";
        } else {
            // line 33
            echo "                    ";
            echo "else";
            echo "
                    ";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
                ";
        }
        // line 36
        echo "                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 37
        echo "            ";
        
        $__internal_885d6f0ba9e235b7b76a1130383ca1a87c71b6979cfdfb29f5d7d95e0b6a6751->leave($__internal_885d6f0ba9e235b7b76a1130383ca1a87c71b6979cfdfb29f5d7d95e0b6a6751_prof);

        
        $__internal_55120085a4df3fead81a247074cbd374d78f10edbbd9f665ac35645fa41a677c->leave($__internal_55120085a4df3fead81a247074cbd374d78f10edbbd9f665ac35645fa41a677c_prof);

    }

    // line 62
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_3c7be51fedcdb07b40e6cf8929f76b318b1469d75f3edbf22687393fbbfd4c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c7be51fedcdb07b40e6cf8929f76b318b1469d75f3edbf22687393fbbfd4c71->enter($__internal_3c7be51fedcdb07b40e6cf8929f76b318b1469d75f3edbf22687393fbbfd4c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_7e8413e3f780399f706bbfbe3a1d0c6707167c122a887355fe51e40448192a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8413e3f780399f706bbfbe3a1d0c6707167c122a887355fe51e40448192a8c->enter($__internal_7e8413e3f780399f706bbfbe3a1d0c6707167c122a887355fe51e40448192a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        echo "class=\"x-editable\"
                  data-type=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")), "html", null, true);
        echo "\"
                  data-value=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["data_value"]) ? $context["data_value"] : $this->getContext($context, "data_value")), "html", null, true);
        echo "\"
                  data-title=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "html", null, true);
        echo "\"
                  data-pk=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"
                  data-url=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" ";
        
        $__internal_7e8413e3f780399f706bbfbe3a1d0c6707167c122a887355fe51e40448192a8c->leave($__internal_7e8413e3f780399f706bbfbe3a1d0c6707167c122a887355fe51e40448192a8c_prof);

        
        $__internal_3c7be51fedcdb07b40e6cf8929f76b318b1469d75f3edbf22687393fbbfd4c71->leave($__internal_3c7be51fedcdb07b40e6cf8929f76b318b1469d75f3edbf22687393fbbfd4c71_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 67,  227 => 66,  223 => 65,  219 => 64,  215 => 63,  204 => 62,  194 => 37,  191 => 36,  186 => 34,  181 => 33,  174 => 31,  170 => 30,  166 => 29,  163 => 28,  161 => 27,  156 => 26,  153 => 25,  150 => 24,  141 => 23,  130 => 74,  127 => 73,  121 => 71,  115 => 68,  112 => 67,  110 => 62,  107 => 61,  104 => 60,  101 => 59,  98 => 58,  95 => 57,  92 => 56,  89 => 55,  87 => 54,  84 => 53,  82 => 50,  81 => 49,  80 => 48,  79 => 46,  77 => 44,  75 => 43,  72 => 42,  69 => 41,  66 => 40,  62 => 38,  60 => 23,  58 => 22,  53 => 21,  51 => 19,  50 => 18,  49 => 17,  48 => 16,  47 => 15,  44 => 14,  42 => 13,  30 => 12,  27 => 11,);
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

<td class=\"sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }}\" objectId=\"{{ admin.id(object) }}\"{% if field_description.options.row_align is defined %} style=\"text-align:{{ field_description.options.row_align }}\"{% endif %}>
    {% set route = field_description.options.route.name|default(null) %}

    {% if
        field_description.options.identifier is defined
        and route
        and admin.hasRoute(route)
        and admin.hasAccess(route, route in ['show', 'edit'] ? object : null)
    %}
        <a class=\"sonata-link-identifier\" href=\"{{ admin.generateObjectUrl(route, object, field_description.options.route.parameters) }}\">
            {{dump(value)}}
            {%- block field %}
                {% spaceless %}
                {% if field_description.options.collapse is defined %}
                    {{\"if\"}}
                    {% set collapse = field_description.options.collapse %}
                    <div class=\"sonata-readmore\"
                          data-readmore-height=\"{{ collapse.height|default(40) }}\"
                          data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                          data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">{{ value }}</div>
                {% else %}
                    {{\"else\"}}
                    {{ value }}
                {% endif %}
                {% endspaceless %}
            {% endblock -%}
        </a>
    {% else %}
        {% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.hasAccess('edit', object) %}
        {% set xEditableType = field_description.type|sonata_xeditable_type %}

        {% if isEditable and xEditableType %}
            {% set url = path(
                'sonata_admin_set_object_field_value',
                admin.getPersistentParameters|default([])|merge({
                    'context': 'list',
                    'field': field_description.name,
                    'objectId': admin.id(object),
                    'code': admin.code(object)
                })
            ) %}

            {% if field_description.type == 'date' and value is not empty %}
                {% set data_value = value.format('Y-m-d') %}
            {% elseif field_description.type == 'boolean' and value is empty %}
                {% set data_value = 0 %}
            {% else %}
                {% set data_value = value %}
            {% endif %}

            <span {% block field_span_attributes %}class=\"x-editable\"
                  data-type=\"{{ xEditableType }}\"
                  data-value=\"{{ data_value }}\"
                  data-title=\"{{ field_description.label|trans({}, field_description.translationDomain) }}\"
                  data-pk=\"{{ admin.id(object) }}\"
                  data-url=\"{{ url }}\" {% endblock %}>
                {{ block('field') }}
            </span>
        {% else %}
            {{ block('field') }}
        {% endif %}
    {% endif %}
</td>
", "SonataAdminBundle:CRUD:base_list_field.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_list_field.html.twig");
    }
}
