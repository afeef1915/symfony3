<?php

/* SonataAdminBundle:CRUD:dashboard__action_create.html.twig */
class __TwigTemplate_0a8e9e2e9e11601081867b0b517181e5cc127bbbd3396ce83d4a5374aa013a6f extends Twig_Template
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
        $__internal_cc7bb96426741df4ea8a6ed9b802c8f713e1636b6b30c321ad06637949cdf476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7bb96426741df4ea8a6ed9b802c8f713e1636b6b30c321ad06637949cdf476->enter($__internal_cc7bb96426741df4ea8a6ed9b802c8f713e1636b6b30c321ad06637949cdf476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:dashboard__action_create.html.twig"));

        $__internal_b56d28240d072c3e469a482a970e2e94e04cd96a89143f9ce5eec3f07914451c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56d28240d072c3e469a482a970e2e94e04cd96a89143f9ce5eec3f07914451c->enter($__internal_b56d28240d072c3e469a482a970e2e94e04cd96a89143f9ce5eec3f07914451c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:dashboard__action_create.html.twig"));

        // line 1
        if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses", array()))) {
            // line 2
            echo "    <a class=\"btn btn-link btn-flat\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "url", array()), "html", null, true);
            echo "\">
        <i class=\"fa fa-";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
    </a>
";
        } else {
            // line 7
            echo "    <a class=\"btn btn-link btn-flat dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"fa fa-";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                // line 14
                echo "            <li>
                <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), (($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </ul>
";
        }
        
        $__internal_cc7bb96426741df4ea8a6ed9b802c8f713e1636b6b30c321ad06637949cdf476->leave($__internal_cc7bb96426741df4ea8a6ed9b802c8f713e1636b6b30c321ad06637949cdf476_prof);

        
        $__internal_b56d28240d072c3e469a482a970e2e94e04cd96a89143f9ce5eec3f07914451c->leave($__internal_b56d28240d072c3e469a482a970e2e94e04cd96a89143f9ce5eec3f07914451c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:dashboard__action_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  63 => 15,  60 => 14,  56 => 13,  49 => 9,  45 => 8,  42 => 7,  36 => 4,  32 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if admin.subClasses is empty %}
    <a class=\"btn btn-link btn-flat\" href=\"{{ action.url }}\">
        <i class=\"fa fa-{{ action.icon }}\" aria-hidden=\"true\"></i>
        {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
    </a>
{% else %}
    <a class=\"btn btn-link btn-flat dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"fa fa-{{ action.icon }}\" aria-hidden=\"true\"></i>
        {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu\">
        {% for subclass in admin.subclasses|keys %}
            <li>
                <a href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">{{ subclass|trans({}, action.translation_domain|default('SonataAdminBundle')) }}</a>
            </li>
        {% endfor %}
    </ul>
{% endif %}
", "SonataAdminBundle:CRUD:dashboard__action_create.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/dashboard__action_create.html.twig");
    }
}
