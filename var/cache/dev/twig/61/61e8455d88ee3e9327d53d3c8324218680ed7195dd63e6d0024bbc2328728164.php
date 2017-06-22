<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_d6db822bb667fca7164fb87a0bf17e7649a22fa20d375b57a0fc3345fc6d3bf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c801be7d65c6c1ff5770706dc15cafda1ceb67cc8a77120c39506145f44c6cc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c801be7d65c6c1ff5770706dc15cafda1ceb67cc8a77120c39506145f44c6cc4->enter($__internal_c801be7d65c6c1ff5770706dc15cafda1ceb67cc8a77120c39506145f44c6cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $__internal_2ae630007b0e8e007429db563005c3d80f72de7d84fe0f004fc1c54fbf4f9caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae630007b0e8e007429db563005c3d80f72de7d84fe0f004fc1c54fbf4f9caa->enter($__internal_2ae630007b0e8e007429db563005c3d80f72de7d84fe0f004fc1c54fbf4f9caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c801be7d65c6c1ff5770706dc15cafda1ceb67cc8a77120c39506145f44c6cc4->leave($__internal_c801be7d65c6c1ff5770706dc15cafda1ceb67cc8a77120c39506145f44c6cc4_prof);

        
        $__internal_2ae630007b0e8e007429db563005c3d80f72de7d84fe0f004fc1c54fbf4f9caa->leave($__internal_2ae630007b0e8e007429db563005c3d80f72de7d84fe0f004fc1c54fbf4f9caa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
