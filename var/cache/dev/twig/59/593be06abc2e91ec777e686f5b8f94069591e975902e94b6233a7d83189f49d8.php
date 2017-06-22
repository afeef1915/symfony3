<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_bd86434503ade905cc09d6fb69c012a4b0692db34219f3b9e19019f854a5cac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_986666f7c3a31f553d50568d7796011af0f0dd5254a218d701fc6c8ed6e33757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986666f7c3a31f553d50568d7796011af0f0dd5254a218d701fc6c8ed6e33757->enter($__internal_986666f7c3a31f553d50568d7796011af0f0dd5254a218d701fc6c8ed6e33757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_29c40d831a208f74aecc185575aca2f6a5fda0c9e7d2a38a04766144fba24c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c40d831a208f74aecc185575aca2f6a5fda0c9e7d2a38a04766144fba24c00->enter($__internal_29c40d831a208f74aecc185575aca2f6a5fda0c9e7d2a38a04766144fba24c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_986666f7c3a31f553d50568d7796011af0f0dd5254a218d701fc6c8ed6e33757->leave($__internal_986666f7c3a31f553d50568d7796011af0f0dd5254a218d701fc6c8ed6e33757_prof);

        
        $__internal_29c40d831a208f74aecc185575aca2f6a5fda0c9e7d2a38a04766144fba24c00->leave($__internal_29c40d831a208f74aecc185575aca2f6a5fda0c9e7d2a38a04766144fba24c00_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_093c9d8be56f9a93d92ee80b795612ad6463943769945e7fe8a87061af179e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093c9d8be56f9a93d92ee80b795612ad6463943769945e7fe8a87061af179e57->enter($__internal_093c9d8be56f9a93d92ee80b795612ad6463943769945e7fe8a87061af179e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_258e807a180a742f4c48950829a47ce6247790120cb0c7f7a8ee55e23f504356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258e807a180a742f4c48950829a47ce6247790120cb0c7f7a8ee55e23f504356->enter($__internal_258e807a180a742f4c48950829a47ce6247790120cb0c7f7a8ee55e23f504356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_258e807a180a742f4c48950829a47ce6247790120cb0c7f7a8ee55e23f504356->leave($__internal_258e807a180a742f4c48950829a47ce6247790120cb0c7f7a8ee55e23f504356_prof);

        
        $__internal_093c9d8be56f9a93d92ee80b795612ad6463943769945e7fe8a87061af179e57->leave($__internal_093c9d8be56f9a93d92ee80b795612ad6463943769945e7fe8a87061af179e57_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_5d1af3d3dc707ae9e3cb6ab4e9d369a3bfa5e8213d0fc707cb7643721dfc1f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1af3d3dc707ae9e3cb6ab4e9d369a3bfa5e8213d0fc707cb7643721dfc1f86->enter($__internal_5d1af3d3dc707ae9e3cb6ab4e9d369a3bfa5e8213d0fc707cb7643721dfc1f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_acebc31c7f2ce4c2675d7e1de9067df4dbd995392b1944174c5b95d00b4d0e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acebc31c7f2ce4c2675d7e1de9067df4dbd995392b1944174c5b95d00b4d0e55->enter($__internal_acebc31c7f2ce4c2675d7e1de9067df4dbd995392b1944174c5b95d00b4d0e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_acebc31c7f2ce4c2675d7e1de9067df4dbd995392b1944174c5b95d00b4d0e55->leave($__internal_acebc31c7f2ce4c2675d7e1de9067df4dbd995392b1944174c5b95d00b4d0e55_prof);

        
        $__internal_5d1af3d3dc707ae9e3cb6ab4e9d369a3bfa5e8213d0fc707cb7643721dfc1f86->leave($__internal_5d1af3d3dc707ae9e3cb6ab4e9d369a3bfa5e8213d0fc707cb7643721dfc1f86_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_b64c99b00f11f7d6b34e6ef5566cdef9663797272f4d64e4414c2816fc2b14f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64c99b00f11f7d6b34e6ef5566cdef9663797272f4d64e4414c2816fc2b14f5->enter($__internal_b64c99b00f11f7d6b34e6ef5566cdef9663797272f4d64e4414c2816fc2b14f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_496255f1ea9bc7dc296f925f623c5c577ee788919c635db2a812bd56308345b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496255f1ea9bc7dc296f925f623c5c577ee788919c635db2a812bd56308345b4->enter($__internal_496255f1ea9bc7dc296f925f623c5c577ee788919c635db2a812bd56308345b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 29
            echo "            ";
            $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method"), ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_496255f1ea9bc7dc296f925f623c5c577ee788919c635db2a812bd56308345b4->leave($__internal_496255f1ea9bc7dc296f925f623c5c577ee788919c635db2a812bd56308345b4_prof);

        
        $__internal_b64c99b00f11f7d6b34e6ef5566cdef9663797272f4d64e4414c2816fc2b14f5->leave($__internal_b64c99b00f11f7d6b34e6ef5566cdef9663797272f4d64e4414c2816fc2b14f5_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_e1c77ea49cab959b9a159cff6a8a177f12f05e57d2f4342ca65419761d8c33d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c77ea49cab959b9a159cff6a8a177f12f05e57d2f4342ca65419761d8c33d7->enter($__internal_e1c77ea49cab959b9a159cff6a8a177f12f05e57d2f4342ca65419761d8c33d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_defd8e089bf25b3b250183bce78de2d8c567c81a188ee98d383e811146e523a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defd8e089bf25b3b250183bce78de2d8c567c81a188ee98d383e811146e523a3->enter($__internal_defd8e089bf25b3b250183bce78de2d8c567c81a188ee98d383e811146e523a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "keep_open"), "method", true, true) ||  !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "keep_open"), "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_defd8e089bf25b3b250183bce78de2d8c567c81a188ee98d383e811146e523a3->leave($__internal_defd8e089bf25b3b250183bce78de2d8c567c81a188ee98d383e811146e523a3_prof);

        
        $__internal_e1c77ea49cab959b9a159cff6a8a177f12f05e57d2f4342ca65419761d8c33d7->leave($__internal_e1c77ea49cab959b9a159cff6a8a177f12f05e57d2f4342ca65419761d8c33d7_prof);

    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        $__internal_1f40731ba6e7f3eda11db67f61710e92c7b7e547112b86bc1891d72b7edb3272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f40731ba6e7f3eda11db67f61710e92c7b7e547112b86bc1891d72b7edb3272->enter($__internal_1f40731ba6e7f3eda11db67f61710e92c7b7e547112b86bc1891d72b7edb3272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_fe873cd4b82dbbb584d43f1503c15d95b8ba3c8d2e5977c25273109167b81e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe873cd4b82dbbb584d43f1503c15d95b8ba3c8d2e5977c25273109167b81e9c->enter($__internal_fe873cd4b82dbbb584d43f1503c15d95b8ba3c8d2e5977c25273109167b81e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && (isset($context["is_link"]) ? $context["is_link"] : $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_fe873cd4b82dbbb584d43f1503c15d95b8ba3c8d2e5977c25273109167b81e9c->leave($__internal_fe873cd4b82dbbb584d43f1503c15d95b8ba3c8d2e5977c25273109167b81e9c_prof);

        
        $__internal_1f40731ba6e7f3eda11db67f61710e92c7b7e547112b86bc1891d72b7edb3272->leave($__internal_1f40731ba6e7f3eda11db67f61710e92c7b7e547112b86bc1891d72b7edb3272_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 53,  196 => 49,  193 => 47,  191 => 46,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set translation_domain = item.extra('translation_domain', 'messages') %}
            {% set icon = item.extra('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            {%- if item.extra('keep_open') is not defined or not item.extra('keep_open') -%}
                <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
            {%- endif -%}
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
