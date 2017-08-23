<?php

/* AcmeAccountBundle:Default:index.html.twig */
class __TwigTemplate_951f8f363ce116ee3676b6352bed1c2d91dd5661220d3c1ed23b778ed51a38aa extends Twig_Template
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
        $__internal_8ff25315df2d13a8d3de178547f95e67096849fff6c591e286c92fae8fe5053f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff25315df2d13a8d3de178547f95e67096849fff6c591e286c92fae8fe5053f->enter($__internal_8ff25315df2d13a8d3de178547f95e67096849fff6c591e286c92fae8fe5053f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeAccountBundle:Default:index.html.twig"));

        $__internal_22a66ff2bdc8648b531e6cc68d91704b0cb8f19f1c7d215c9d380511b28b5982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a66ff2bdc8648b531e6cc68d91704b0cb8f19f1c7d215c9d380511b28b5982->enter($__internal_22a66ff2bdc8648b531e6cc68d91704b0cb8f19f1c7d215c9d380511b28b5982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeAccountBundle:Default:index.html.twig"));

        // line 1
        echo "
                
          Hello You are Now Login as      <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">
                    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "
                </a>";
        
        $__internal_8ff25315df2d13a8d3de178547f95e67096849fff6c591e286c92fae8fe5053f->leave($__internal_8ff25315df2d13a8d3de178547f95e67096849fff6c591e286c92fae8fe5053f_prof);

        
        $__internal_22a66ff2bdc8648b531e6cc68d91704b0cb8f19f1c7d215c9d380511b28b5982->leave($__internal_22a66ff2bdc8648b531e6cc68d91704b0cb8f19f1c7d215c9d380511b28b5982_prof);

    }

    public function getTemplateName()
    {
        return "AcmeAccountBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
                
          Hello You are Now Login as      <a href=\"{{ path('fos_user_security_login') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>", "AcmeAccountBundle:Default:index.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\src\\Acme\\AccountBundle/Resources/views/Default/index.html.twig");
    }
}
