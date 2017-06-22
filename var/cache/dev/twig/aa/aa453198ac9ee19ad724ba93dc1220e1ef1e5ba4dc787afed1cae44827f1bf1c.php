<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_cacecfe6408591223a8ae3d637e759df806180af6b6dccc065a22cdb900c201f extends Twig_Template
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
        $__internal_b927e681685c66f24572e00505c65ff62d681cfc42d3a2d191cf7be597ddfa63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b927e681685c66f24572e00505c65ff62d681cfc42d3a2d191cf7be597ddfa63->enter($__internal_b927e681685c66f24572e00505c65ff62d681cfc42d3a2d191cf7be597ddfa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_82951d148b286e7079884c9a08edebe8e5c9b9c5b1a3687a96cad67921256bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82951d148b286e7079884c9a08edebe8e5c9b9c5b1a3687a96cad67921256bc7->enter($__internal_82951d148b286e7079884c9a08edebe8e5c9b9c5b1a3687a96cad67921256bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_b927e681685c66f24572e00505c65ff62d681cfc42d3a2d191cf7be597ddfa63->leave($__internal_b927e681685c66f24572e00505c65ff62d681cfc42d3a2d191cf7be597ddfa63_prof);

        
        $__internal_82951d148b286e7079884c9a08edebe8e5c9b9c5b1a3687a96cad67921256bc7->leave($__internal_82951d148b286e7079884c9a08edebe8e5c9b9c5b1a3687a96cad67921256bc7_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_base.html.twig");
    }
}
