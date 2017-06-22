<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_2e77639eb4de14e3d06a1a3633b2cf8e3b6e050638ac40647f4552dd58489f48 extends Twig_Template
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
        $__internal_b5630435751bfa1d7a5629519e0e772dc03e732da8963d5d34dc0a973ee17667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5630435751bfa1d7a5629519e0e772dc03e732da8963d5d34dc0a973ee17667->enter($__internal_b5630435751bfa1d7a5629519e0e772dc03e732da8963d5d34dc0a973ee17667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_e3c522dc1bd4e0a59b3d4539d6ca02e56e05e4926b2c8d6a3adb8cdd37a0ce11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c522dc1bd4e0a59b3d4539d6ca02e56e05e4926b2c8d6a3adb8cdd37a0ce11->enter($__internal_e3c522dc1bd4e0a59b3d4539d6ca02e56e05e4926b2c8d6a3adb8cdd37a0ce11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_b5630435751bfa1d7a5629519e0e772dc03e732da8963d5d34dc0a973ee17667->leave($__internal_b5630435751bfa1d7a5629519e0e772dc03e732da8963d5d34dc0a973ee17667_prof);

        
        $__internal_e3c522dc1bd4e0a59b3d4539d6ca02e56e05e4926b2c8d6a3adb8cdd37a0ce11->leave($__internal_e3c522dc1bd4e0a59b3d4539d6ca02e56e05e4926b2c8d6a3adb8cdd37a0ce11_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
