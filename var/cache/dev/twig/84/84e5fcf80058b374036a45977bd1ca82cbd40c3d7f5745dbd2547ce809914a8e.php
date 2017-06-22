<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_41bd959d65e11c8078d91421e37a63bf97cfdbe0ae70622a76d5579490d33b16 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a182e2bc8826fd2d5a3c9cfe96d04971c2ee61032f466252e8cadf309448fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a182e2bc8826fd2d5a3c9cfe96d04971c2ee61032f466252e8cadf309448fea->enter($__internal_7a182e2bc8826fd2d5a3c9cfe96d04971c2ee61032f466252e8cadf309448fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_6e31d7be3bc726a3dca0166dc9dccdff98e5adbbb376b1660e77abd2c9f5c30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e31d7be3bc726a3dca0166dc9dccdff98e5adbbb376b1660e77abd2c9f5c30d->enter($__internal_6e31d7be3bc726a3dca0166dc9dccdff98e5adbbb376b1660e77abd2c9f5c30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a182e2bc8826fd2d5a3c9cfe96d04971c2ee61032f466252e8cadf309448fea->leave($__internal_7a182e2bc8826fd2d5a3c9cfe96d04971c2ee61032f466252e8cadf309448fea_prof);

        
        $__internal_6e31d7be3bc726a3dca0166dc9dccdff98e5adbbb376b1660e77abd2c9f5c30d->leave($__internal_6e31d7be3bc726a3dca0166dc9dccdff98e5adbbb376b1660e77abd2c9f5c30d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}
", "SonataAdminBundle:CRUD:list_string.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
