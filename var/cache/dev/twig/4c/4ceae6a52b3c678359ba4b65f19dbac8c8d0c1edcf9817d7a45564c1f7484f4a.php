<?php

/* SonataCoreBundle:FlashMessage:render.html.twig */
class __TwigTemplate_7ebff9271eaae07cb4a585cd30552466602daa590ac54d63f9894ea37f6b445c extends Twig_Template
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
        $__internal_a1962f32b778888334c555eb6cee1fea18a7983255938e7fde01fb05faa36c25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1962f32b778888334c555eb6cee1fea18a7983255938e7fde01fb05faa36c25->enter($__internal_a1962f32b778888334c555eb6cee1fea18a7983255938e7fde01fb05faa36c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:FlashMessage:render.html.twig"));

        $__internal_a4b95781cf77979385c1e3900a2f6140f6055002459fd992e0c1c398a7785ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b95781cf77979385c1e3900a2f6140f6055002459fd992e0c1c398a7785ec8->enter($__internal_a4b95781cf77979385c1e3900a2f6140f6055002459fd992e0c1c398a7785ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:FlashMessage:render.html.twig"));

        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sonata\CoreBundle\Twig\Extension\FlashMessageExtension')->getFlashMessagesTypes());
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "    ";
            $context["domain"] = ((array_key_exists("domain", $context)) ? ((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))) : (null));
            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sonata\CoreBundle\Twig\Extension\FlashMessageExtension')->getFlashMessages($context["type"], (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\CoreBundle\Twig\Extension\StatusExtension')->statusClass($context["type"]), "html", null, true);
                echo " alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
                // line 16
                echo $context["message"];
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a1962f32b778888334c555eb6cee1fea18a7983255938e7fde01fb05faa36c25->leave($__internal_a1962f32b778888334c555eb6cee1fea18a7983255938e7fde01fb05faa36c25_prof);

        
        $__internal_a4b95781cf77979385c1e3900a2f6140f6055002459fd992e0c1c398a7785ec8->leave($__internal_a4b95781cf77979385c1e3900a2f6140f6055002459fd992e0c1c398a7785ec8_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:FlashMessage:render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  37 => 14,  32 => 13,  29 => 12,  25 => 11,);
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
{% for type in sonata_flashmessages_types() %}
    {% set domain = domain is defined ? domain : null %}
    {% for message in sonata_flashmessages_get(type, domain) %}
        <div class=\"alert alert-{{ type|sonata_status_class }} alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            {{ message|raw }}
        </div>
    {% endfor %}
{% endfor %}
", "SonataCoreBundle:FlashMessage:render.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\core-bundle/Resources/views/FlashMessage/render.html.twig");
    }
}
