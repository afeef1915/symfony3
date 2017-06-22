<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_d2b2a0fce044afc730314d1a8415fe155496187a58d874bcdb6d26b48cc372dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45e50688483b72978a7419bbf4f2fe91b7301fdae17071d455430b26d569389e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e50688483b72978a7419bbf4f2fe91b7301fdae17071d455430b26d569389e->enter($__internal_45e50688483b72978a7419bbf4f2fe91b7301fdae17071d455430b26d569389e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_2c057aa529dead135f555cc6d77786aeafb9f116cc68bd3ff85be84cfdb0184f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c057aa529dead135f555cc6d77786aeafb9f116cc68bd3ff85be84cfdb0184f->enter($__internal_2c057aa529dead135f555cc6d77786aeafb9f116cc68bd3ff85be84cfdb0184f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 24
        echo "
<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body ";
        // line 118
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 122
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 221
        echo "
        ";
        // line 222
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 355
        echo "    </div>

    ";
        // line 357
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 358
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 364
            echo "    ";
        }
        // line 365
        echo "
    </body>
</html>
";
        
        $__internal_45e50688483b72978a7419bbf4f2fe91b7301fdae17071d455430b26d569389e->leave($__internal_45e50688483b72978a7419bbf4f2fe91b7301fdae17071d455430b26d569389e_prof);

        
        $__internal_2c057aa529dead135f555cc6d77786aeafb9f116cc68bd3ff85be84cfdb0184f->leave($__internal_2c057aa529dead135f555cc6d77786aeafb9f116cc68bd3ff85be84cfdb0184f_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_a44869dab7cdcbaf2b0557a2c4a9b5bd0b73360f5e26672f8fee374ae70f0caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44869dab7cdcbaf2b0557a2c4a9b5bd0b73360f5e26672f8fee374ae70f0caf->enter($__internal_a44869dab7cdcbaf2b0557a2c4a9b5bd0b73360f5e26672f8fee374ae70f0caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_e7b1be63eab5122ecc1b950a04cd81bea1edb529e6a9ab40473372e8dad59670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b1be63eab5122ecc1b950a04cd81bea1edb529e6a9ab40473372e8dad59670->enter($__internal_e7b1be63eab5122ecc1b950a04cd81bea1edb529e6a9ab40473372e8dad59670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_e7b1be63eab5122ecc1b950a04cd81bea1edb529e6a9ab40473372e8dad59670->leave($__internal_e7b1be63eab5122ecc1b950a04cd81bea1edb529e6a9ab40473372e8dad59670_prof);

        
        $__internal_a44869dab7cdcbaf2b0557a2c4a9b5bd0b73360f5e26672f8fee374ae70f0caf->leave($__internal_a44869dab7cdcbaf2b0557a2c4a9b5bd0b73360f5e26672f8fee374ae70f0caf_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_04c06f0bd580323dddb8ed20ac7644dc5f02571f814e0591f2e5d8cbbdc9cdb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c06f0bd580323dddb8ed20ac7644dc5f02571f814e0591f2e5d8cbbdc9cdb1->enter($__internal_04c06f0bd580323dddb8ed20ac7644dc5f02571f814e0591f2e5d8cbbdc9cdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_96f892a050aecec56f511c7854fa039869715446797c1118c07adfb80d8add14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f892a050aecec56f511c7854fa039869715446797c1118c07adfb80d8add14->enter($__internal_96f892a050aecec56f511c7854fa039869715446797c1118c07adfb80d8add14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_96f892a050aecec56f511c7854fa039869715446797c1118c07adfb80d8add14->leave($__internal_96f892a050aecec56f511c7854fa039869715446797c1118c07adfb80d8add14_prof);

        
        $__internal_04c06f0bd580323dddb8ed20ac7644dc5f02571f814e0591f2e5d8cbbdc9cdb1->leave($__internal_04c06f0bd580323dddb8ed20ac7644dc5f02571f814e0591f2e5d8cbbdc9cdb1_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_78bf1d3a949f064d2e292af89d6f0f1cda39d39be15ec35f21de57d8af90f0f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78bf1d3a949f064d2e292af89d6f0f1cda39d39be15ec35f21de57d8af90f0f9->enter($__internal_78bf1d3a949f064d2e292af89d6f0f1cda39d39be15ec35f21de57d8af90f0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3134816df542774aa9043284f2d3386b32955e7b3086f9b2a6f3e9ba1ffdc703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3134816df542774aa9043284f2d3386b32955e7b3086f9b2a6f3e9ba1ffdc703->enter($__internal_3134816df542774aa9043284f2d3386b32955e7b3086f9b2a6f3e9ba1ffdc703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_3134816df542774aa9043284f2d3386b32955e7b3086f9b2a6f3e9ba1ffdc703->leave($__internal_3134816df542774aa9043284f2d3386b32955e7b3086f9b2a6f3e9ba1ffdc703_prof);

        
        $__internal_78bf1d3a949f064d2e292af89d6f0f1cda39d39be15ec35f21de57d8af90f0f9->leave($__internal_78bf1d3a949f064d2e292af89d6f0f1cda39d39be15ec35f21de57d8af90f0f9_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8fdbbec4f2646d53355f37ed490217a6518776c2145cdd9661f5b3c5fce44b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fdbbec4f2646d53355f37ed490217a6518776c2145cdd9661f5b3c5fce44b2d->enter($__internal_8fdbbec4f2646d53355f37ed490217a6518776c2145cdd9661f5b3c5fce44b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4860fa4e246f923c2f9f4f4f37ee264da4cb9421f08ae3af135d94e8ce0716a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4860fa4e246f923c2f9f4f4f37ee264da4cb9421f08ae3af135d94e8ce0716a6->enter($__internal_4860fa4e246f923c2f9f4f4f37ee264da4cb9421f08ae3af135d94e8ce0716a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
(isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_4860fa4e246f923c2f9f4f4f37ee264da4cb9421f08ae3af135d94e8ce0716a6->leave($__internal_4860fa4e246f923c2f9f4f4f37ee264da4cb9421f08ae3af135d94e8ce0716a6_prof);

        
        $__internal_8fdbbec4f2646d53355f37ed490217a6518776c2145cdd9661f5b3c5fce44b2d->leave($__internal_8fdbbec4f2646d53355f37ed490217a6518776c2145cdd9661f5b3c5fce44b2d_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_c38fa28731e4288e511befe1951ddb24c89e748d273401d2c1e4b9b7bb8b3640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38fa28731e4288e511befe1951ddb24c89e748d273401d2c1e4b9b7bb8b3640->enter($__internal_c38fa28731e4288e511befe1951ddb24c89e748d273401d2c1e4b9b7bb8b3640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_04432611a00d373930bb0271f2ae38fe316045fefbac81e609bdbb7e2af67a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04432611a00d373930bb0271f2ae38fe316045fefbac81e609bdbb7e2af67a98->enter($__internal_04432611a00d373930bb0271f2ae38fe316045fefbac81e609bdbb7e2af67a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_04432611a00d373930bb0271f2ae38fe316045fefbac81e609bdbb7e2af67a98->leave($__internal_04432611a00d373930bb0271f2ae38fe316045fefbac81e609bdbb7e2af67a98_prof);

        
        $__internal_c38fa28731e4288e511befe1951ddb24c89e748d273401d2c1e4b9b7bb8b3640->leave($__internal_c38fa28731e4288e511befe1951ddb24c89e748d273401d2c1e4b9b7bb8b3640_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_3829a7080c71b4d0c0694b022d8b5528d3829036c650b49bd5ff994d4ff86336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3829a7080c71b4d0c0694b022d8b5528d3829036c650b49bd5ff994d4ff86336->enter($__internal_3829a7080c71b4d0c0694b022d8b5528d3829036c650b49bd5ff994d4ff86336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_21b7b25940de8c02485e19226722c90f4f44a677201a5c181e57a4f56282fe80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b7b25940de8c02485e19226722c90f4f44a677201a5c181e57a4f56282fe80->enter($__internal_21b7b25940de8c02485e19226722c90f4f44a677201a5c181e57a4f56282fe80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
        
        $__internal_21b7b25940de8c02485e19226722c90f4f44a677201a5c181e57a4f56282fe80->leave($__internal_21b7b25940de8c02485e19226722c90f4f44a677201a5c181e57a4f56282fe80_prof);

        
        $__internal_3829a7080c71b4d0c0694b022d8b5528d3829036c650b49bd5ff994d4ff86336->leave($__internal_3829a7080c71b4d0c0694b022d8b5528d3829036c650b49bd5ff994d4ff86336_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_e46860d4fb9526df616416a47e1092d5dadc1935f3f7eb67a739a79aa69316cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46860d4fb9526df616416a47e1092d5dadc1935f3f7eb67a739a79aa69316cd->enter($__internal_e46860d4fb9526df616416a47e1092d5dadc1935f3f7eb67a739a79aa69316cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_efe77ca812261a0eede104c6190e18adb14cad3697b8cf5249c6ddd02758684b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe77ca812261a0eede104c6190e18adb14cad3697b8cf5249c6ddd02758684b->enter($__internal_efe77ca812261a0eede104c6190e18adb14cad3697b8cf5249c6ddd02758684b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 94
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 106
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
        
        $__internal_efe77ca812261a0eede104c6190e18adb14cad3697b8cf5249c6ddd02758684b->leave($__internal_efe77ca812261a0eede104c6190e18adb14cad3697b8cf5249c6ddd02758684b_prof);

        
        $__internal_e46860d4fb9526df616416a47e1092d5dadc1935f3f7eb67a739a79aa69316cd->leave($__internal_e46860d4fb9526df616416a47e1092d5dadc1935f3f7eb67a739a79aa69316cd_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_0a949fc2b2b6a57ecbb6195c8c71c1af1a448ccc0dc612fd4eda894162579612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a949fc2b2b6a57ecbb6195c8c71c1af1a448ccc0dc612fd4eda894162579612->enter($__internal_0a949fc2b2b6a57ecbb6195c8c71c1af1a448ccc0dc612fd4eda894162579612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_74313993bcb87b7db6d3137299be6f5188e76a84f5618eb2bec1e71a76e5c074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74313993bcb87b7db6d3137299be6f5188e76a84f5618eb2bec1e71a76e5c074->enter($__internal_74313993bcb87b7db6d3137299be6f5188e76a84f5618eb2bec1e71a76e5c074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_74313993bcb87b7db6d3137299be6f5188e76a84f5618eb2bec1e71a76e5c074->leave($__internal_74313993bcb87b7db6d3137299be6f5188e76a84f5618eb2bec1e71a76e5c074_prof);

        
        $__internal_0a949fc2b2b6a57ecbb6195c8c71c1af1a448ccc0dc612fd4eda894162579612->leave($__internal_0a949fc2b2b6a57ecbb6195c8c71c1af1a448ccc0dc612fd4eda894162579612_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_4df787df8dfd512b23c775627dab50f2ba5247d27cec24fe96e83cea972288dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df787df8dfd512b23c775627dab50f2ba5247d27cec24fe96e83cea972288dd->enter($__internal_4df787df8dfd512b23c775627dab50f2ba5247d27cec24fe96e83cea972288dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_08351951d76918054562a147322b284e627e8943b88aa77070a624c4e2cb935c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08351951d76918054562a147322b284e627e8943b88aa77070a624c4e2cb935c->enter($__internal_08351951d76918054562a147322b284e627e8943b88aa77070a624c4e2cb935c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 123
        echo "            <header class=\"main-header\">
                ";
        // line 124
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 143
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 219
        echo "            </header>
        ";
        
        $__internal_08351951d76918054562a147322b284e627e8943b88aa77070a624c4e2cb935c->leave($__internal_08351951d76918054562a147322b284e627e8943b88aa77070a624c4e2cb935c_prof);

        
        $__internal_4df787df8dfd512b23c775627dab50f2ba5247d27cec24fe96e83cea972288dd->leave($__internal_4df787df8dfd512b23c775627dab50f2ba5247d27cec24fe96e83cea972288dd_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_8252013ddd0fb4a5a0eeaa5119fa7027839088a6c524ceb231bac40b1c537bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8252013ddd0fb4a5a0eeaa5119fa7027839088a6c524ceb231bac40b1c537bbd->enter($__internal_8252013ddd0fb4a5a0eeaa5119fa7027839088a6c524ceb231bac40b1c537bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_29dff8d39a99b1b993a699502445966af7964f45bf3b13a294517d62974ac15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29dff8d39a99b1b993a699502445966af7964f45bf3b13a294517d62974ac15b->enter($__internal_29dff8d39a99b1b993a699502445966af7964f45bf3b13a294517d62974ac15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 125
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_29dff8d39a99b1b993a699502445966af7964f45bf3b13a294517d62974ac15b->leave($__internal_29dff8d39a99b1b993a699502445966af7964f45bf3b13a294517d62974ac15b_prof);

        
        $__internal_8252013ddd0fb4a5a0eeaa5119fa7027839088a6c524ceb231bac40b1c537bbd->leave($__internal_8252013ddd0fb4a5a0eeaa5119fa7027839088a6c524ceb231bac40b1c537bbd_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_800d1965335ec966ce72a831d6168901f1bdaa5b4249ee60e923329393ec805f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800d1965335ec966ce72a831d6168901f1bdaa5b4249ee60e923329393ec805f->enter($__internal_800d1965335ec966ce72a831d6168901f1bdaa5b4249ee60e923329393ec805f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_37831adf6895570c6a533e101bb86928c59e348a907b1f1334d9df9f93dc1bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37831adf6895570c6a533e101bb86928c59e348a907b1f1334d9df9f93dc1bcb->enter($__internal_37831adf6895570c6a533e101bb86928c59e348a907b1f1334d9df9f93dc1bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 137
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 138
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 140
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 142
        echo "                ";
        
        $__internal_37831adf6895570c6a533e101bb86928c59e348a907b1f1334d9df9f93dc1bcb->leave($__internal_37831adf6895570c6a533e101bb86928c59e348a907b1f1334d9df9f93dc1bcb_prof);

        
        $__internal_800d1965335ec966ce72a831d6168901f1bdaa5b4249ee60e923329393ec805f->leave($__internal_800d1965335ec966ce72a831d6168901f1bdaa5b4249ee60e923329393ec805f_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_68fdc2ecc9f9b78c957b6dd9839844878ab049075d23254b66ca5d12da4ed7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68fdc2ecc9f9b78c957b6dd9839844878ab049075d23254b66ca5d12da4ed7c1->enter($__internal_68fdc2ecc9f9b78c957b6dd9839844878ab049075d23254b66ca5d12da4ed7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_a1427ac4624145b61ecbdf49ff36804c8972f97be7fefd531dcbbe4d9a957ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1427ac4624145b61ecbdf49ff36804c8972f97be7fefd531dcbbe4d9a957ffb->enter($__internal_a1427ac4624145b61ecbdf49ff36804c8972f97be7fefd531dcbbe4d9a957ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 144
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 150
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 189
        echo "                        </div>

                        ";
        // line 191
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 217
        echo "                    </nav>
                ";
        
        $__internal_a1427ac4624145b61ecbdf49ff36804c8972f97be7fefd531dcbbe4d9a957ffb->leave($__internal_a1427ac4624145b61ecbdf49ff36804c8972f97be7fefd531dcbbe4d9a957ffb_prof);

        
        $__internal_68fdc2ecc9f9b78c957b6dd9839844878ab049075d23254b66ca5d12da4ed7c1->leave($__internal_68fdc2ecc9f9b78c957b6dd9839844878ab049075d23254b66ca5d12da4ed7c1_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_92b57b58f10ad6b2038bfc9433f007d5d5ca3aed73cb2c75282a9aa1e9cf272e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b57b58f10ad6b2038bfc9433f007d5d5ca3aed73cb2c75282a9aa1e9cf272e->enter($__internal_92b57b58f10ad6b2038bfc9433f007d5d5ca3aed73cb2c75282a9aa1e9cf272e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_161c9fbedaf10ceaf002f0f55319cb1fade4ea110889deb7cccddf554c1ac190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161c9fbedaf10ceaf002f0f55319cb1fade4ea110889deb7cccddf554c1ac190->enter($__internal_161c9fbedaf10ceaf002f0f55319cb1fade4ea110889deb7cccddf554c1ac190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 151
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 152
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 153
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 154
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 155
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 156
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 157
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 158
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 159
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 160
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 163
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 164
                            echo "                                                            <li>
                                                                ";
                            // line 165
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 166
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 167
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 168
                                    echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                                } else {
                                    // line 170
                                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 172
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 174
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 176
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 178
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 180
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                                                ";
                }
                // line 182
                echo "                                            ";
            } else {
                // line 183
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 185
            echo "                                        </ol>
                                    ";
        }
        // line 187
        echo "                                </div>
                            ";
        
        $__internal_161c9fbedaf10ceaf002f0f55319cb1fade4ea110889deb7cccddf554c1ac190->leave($__internal_161c9fbedaf10ceaf002f0f55319cb1fade4ea110889deb7cccddf554c1ac190_prof);

        
        $__internal_92b57b58f10ad6b2038bfc9433f007d5d5ca3aed73cb2c75282a9aa1e9cf272e->leave($__internal_92b57b58f10ad6b2038bfc9433f007d5d5ca3aed73cb2c75282a9aa1e9cf272e_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_217ccbf1945fb807fb4a443b2b7c0e2dd40604bdcb05a29e5b5ac8b7079bc913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217ccbf1945fb807fb4a443b2b7c0e2dd40604bdcb05a29e5b5ac8b7079bc913->enter($__internal_217ccbf1945fb807fb4a443b2b7c0e2dd40604bdcb05a29e5b5ac8b7079bc913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_8ceb4423dd43608ef1a189cdb177e9d31c45376cc10a308d4705c0e90974969f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ceb4423dd43608ef1a189cdb177e9d31c45376cc10a308d4705c0e90974969f->enter($__internal_8ceb4423dd43608ef1a189cdb177e9d31c45376cc10a308d4705c0e90974969f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 192
        echo "                            ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 193
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 195
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 203
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 213
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 216
        echo "                        ";
        
        $__internal_8ceb4423dd43608ef1a189cdb177e9d31c45376cc10a308d4705c0e90974969f->leave($__internal_8ceb4423dd43608ef1a189cdb177e9d31c45376cc10a308d4705c0e90974969f_prof);

        
        $__internal_217ccbf1945fb807fb4a443b2b7c0e2dd40604bdcb05a29e5b5ac8b7079bc913->leave($__internal_217ccbf1945fb807fb4a443b2b7c0e2dd40604bdcb05a29e5b5ac8b7079bc913_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_3c05d9ff898f753a1f379a06c39f021becd3a7b1e8b0acce617e7c2413211fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c05d9ff898f753a1f379a06c39f021becd3a7b1e8b0acce617e7c2413211fd3->enter($__internal_3c05d9ff898f753a1f379a06c39f021becd3a7b1e8b0acce617e7c2413211fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_283cde026ef782a2a196eece460efbc650250809826c293ac04fc36699095d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283cde026ef782a2a196eece460efbc650250809826c293ac04fc36699095d83->enter($__internal_283cde026ef782a2a196eece460efbc650250809826c293ac04fc36699095d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 196
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 200
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 200)->display($context);
        // line 201
        echo "                                            </li>
                                        ";
        
        $__internal_283cde026ef782a2a196eece460efbc650250809826c293ac04fc36699095d83->leave($__internal_283cde026ef782a2a196eece460efbc650250809826c293ac04fc36699095d83_prof);

        
        $__internal_3c05d9ff898f753a1f379a06c39f021becd3a7b1e8b0acce617e7c2413211fd3->leave($__internal_3c05d9ff898f753a1f379a06c39f021becd3a7b1e8b0acce617e7c2413211fd3_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_42c71589da638a73171267ff0d5050765800e8c0a882bc6087482ee7cdf32cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c71589da638a73171267ff0d5050765800e8c0a882bc6087482ee7cdf32cc3->enter($__internal_42c71589da638a73171267ff0d5050765800e8c0a882bc6087482ee7cdf32cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_5461e90a2c0c512220cb1d0309d007af87af0a455ac289563b5d879d564c5535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5461e90a2c0c512220cb1d0309d007af87af0a455ac289563b5d879d564c5535->enter($__internal_5461e90a2c0c512220cb1d0309d007af87af0a455ac289563b5d879d564c5535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 204
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 209
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 209)->display($context);
        // line 210
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_5461e90a2c0c512220cb1d0309d007af87af0a455ac289563b5d879d564c5535->leave($__internal_5461e90a2c0c512220cb1d0309d007af87af0a455ac289563b5d879d564c5535_prof);

        
        $__internal_42c71589da638a73171267ff0d5050765800e8c0a882bc6087482ee7cdf32cc3->leave($__internal_42c71589da638a73171267ff0d5050765800e8c0a882bc6087482ee7cdf32cc3_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_8231f2f645f9dea79f12acbd61c83fd21ca1cf34c4406cff30d0e5b77463155e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8231f2f645f9dea79f12acbd61c83fd21ca1cf34c4406cff30d0e5b77463155e->enter($__internal_8231f2f645f9dea79f12acbd61c83fd21ca1cf34c4406cff30d0e5b77463155e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_7fd8305578cfd67624fd96b73c6e57832baaf85c31e18f7cb242008351e9783c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd8305578cfd67624fd96b73c6e57832baaf85c31e18f7cb242008351e9783c->enter($__internal_7fd8305578cfd67624fd96b73c6e57832baaf85c31e18f7cb242008351e9783c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 223
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 255
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 257
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 353
        echo "            </div>
        ";
        
        $__internal_7fd8305578cfd67624fd96b73c6e57832baaf85c31e18f7cb242008351e9783c->leave($__internal_7fd8305578cfd67624fd96b73c6e57832baaf85c31e18f7cb242008351e9783c_prof);

        
        $__internal_8231f2f645f9dea79f12acbd61c83fd21ca1cf34c4406cff30d0e5b77463155e->leave($__internal_8231f2f645f9dea79f12acbd61c83fd21ca1cf34c4406cff30d0e5b77463155e_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_24f1469e6588a5a9a96e0240638fc93a88b77c46375019d2ddacf05875d77121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f1469e6588a5a9a96e0240638fc93a88b77c46375019d2ddacf05875d77121->enter($__internal_24f1469e6588a5a9a96e0240638fc93a88b77c46375019d2ddacf05875d77121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_2868ceb78836572f85446a4c8f50d9d3d5c4381c43362e584249fabaa29f46e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2868ceb78836572f85446a4c8f50d9d3d5c4381c43362e584249fabaa29f46e9->enter($__internal_2868ceb78836572f85446a4c8f50d9d3d5c4381c43362e584249fabaa29f46e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 224
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 226
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 252
        echo "                    </section>
                </aside>
            ";
        
        $__internal_2868ceb78836572f85446a4c8f50d9d3d5c4381c43362e584249fabaa29f46e9->leave($__internal_2868ceb78836572f85446a4c8f50d9d3d5c4381c43362e584249fabaa29f46e9_prof);

        
        $__internal_24f1469e6588a5a9a96e0240638fc93a88b77c46375019d2ddacf05875d77121->leave($__internal_24f1469e6588a5a9a96e0240638fc93a88b77c46375019d2ddacf05875d77121_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_b0d3ef9751dffa75351637f4e3ba740ecad274d0506d2f1328ac4b3d69338673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d3ef9751dffa75351637f4e3ba740ecad274d0506d2f1328ac4b3d69338673->enter($__internal_b0d3ef9751dffa75351637f4e3ba740ecad274d0506d2f1328ac4b3d69338673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_e2338c0c1101dece849dc96f148079ce5a1da78c389d8164edb7351e18ac2a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2338c0c1101dece849dc96f148079ce5a1da78c389d8164edb7351e18ac2a3f->enter($__internal_e2338c0c1101dece849dc96f148079ce5a1da78c389d8164edb7351e18ac2a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 227
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 239
        echo "
                            ";
        // line 240
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 241
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 244
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 251
        echo "                        ";
        
        $__internal_e2338c0c1101dece849dc96f148079ce5a1da78c389d8164edb7351e18ac2a3f->leave($__internal_e2338c0c1101dece849dc96f148079ce5a1da78c389d8164edb7351e18ac2a3f_prof);

        
        $__internal_b0d3ef9751dffa75351637f4e3ba740ecad274d0506d2f1328ac4b3d69338673->leave($__internal_b0d3ef9751dffa75351637f4e3ba740ecad274d0506d2f1328ac4b3d69338673_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_995822bc724126f2b3692d4fa39f8659515be7c8ac088e99b1e357e50669c1e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995822bc724126f2b3692d4fa39f8659515be7c8ac088e99b1e357e50669c1e8->enter($__internal_995822bc724126f2b3692d4fa39f8659515be7c8ac088e99b1e357e50669c1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_ab53b5dfec5b65f275d6d5cfa8b06b5b4031f14c48640122b6e37f761fd8fccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab53b5dfec5b65f275d6d5cfa8b06b5b4031f14c48640122b6e37f761fd8fccc->enter($__internal_ab53b5dfec5b65f275d6d5cfa8b06b5b4031f14c48640122b6e37f761fd8fccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 228
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_ab53b5dfec5b65f275d6d5cfa8b06b5b4031f14c48640122b6e37f761fd8fccc->leave($__internal_ab53b5dfec5b65f275d6d5cfa8b06b5b4031f14c48640122b6e37f761fd8fccc_prof);

        
        $__internal_995822bc724126f2b3692d4fa39f8659515be7c8ac088e99b1e357e50669c1e8->leave($__internal_995822bc724126f2b3692d4fa39f8659515be7c8ac088e99b1e357e50669c1e8_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_6fa90f03103d6d879151b100e9b6d26294fab750b3c9563b17f18a83e2a1736c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa90f03103d6d879151b100e9b6d26294fab750b3c9563b17f18a83e2a1736c->enter($__internal_6fa90f03103d6d879151b100e9b6d26294fab750b3c9563b17f18a83e2a1736c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_edc03b1a2bc5c27103b0e0d96834d6701fe91f114aa60834792af97a52817e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc03b1a2bc5c27103b0e0d96834d6701fe91f114aa60834792af97a52817e20->enter($__internal_edc03b1a2bc5c27103b0e0d96834d6701fe91f114aa60834792af97a52817e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_edc03b1a2bc5c27103b0e0d96834d6701fe91f114aa60834792af97a52817e20->leave($__internal_edc03b1a2bc5c27103b0e0d96834d6701fe91f114aa60834792af97a52817e20_prof);

        
        $__internal_6fa90f03103d6d879151b100e9b6d26294fab750b3c9563b17f18a83e2a1736c->leave($__internal_6fa90f03103d6d879151b100e9b6d26294fab750b3c9563b17f18a83e2a1736c_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_83aa125e90bb86e57e5a4c8c8d6caa8bc9f902c7506e6e8322a50b0ca02d8133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83aa125e90bb86e57e5a4c8c8d6caa8bc9f902c7506e6e8322a50b0ca02d8133->enter($__internal_83aa125e90bb86e57e5a4c8c8d6caa8bc9f902c7506e6e8322a50b0ca02d8133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_d68c42e873e5ce5c275f0a7561426442b302b47f43074d6c650894bb9892ca0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68c42e873e5ce5c275f0a7561426442b302b47f43074d6c650894bb9892ca0c->enter($__internal_d68c42e873e5ce5c275f0a7561426442b302b47f43074d6c650894bb9892ca0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_d68c42e873e5ce5c275f0a7561426442b302b47f43074d6c650894bb9892ca0c->leave($__internal_d68c42e873e5ce5c275f0a7561426442b302b47f43074d6c650894bb9892ca0c_prof);

        
        $__internal_83aa125e90bb86e57e5a4c8c8d6caa8bc9f902c7506e6e8322a50b0ca02d8133->leave($__internal_83aa125e90bb86e57e5a4c8c8d6caa8bc9f902c7506e6e8322a50b0ca02d8133_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_7d6f806791036d1d1e45958276247c4dbff666c95d4c8258af8b19d0325bd653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6f806791036d1d1e45958276247c4dbff666c95d4c8258af8b19d0325bd653->enter($__internal_7d6f806791036d1d1e45958276247c4dbff666c95d4c8258af8b19d0325bd653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_cf4fb3dc00ed6745b62097fcc5812c452b089729341aef97b5fac0fadd397b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4fb3dc00ed6745b62097fcc5812c452b089729341aef97b5fac0fadd397b67->enter($__internal_cf4fb3dc00ed6745b62097fcc5812c452b089729341aef97b5fac0fadd397b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_cf4fb3dc00ed6745b62097fcc5812c452b089729341aef97b5fac0fadd397b67->leave($__internal_cf4fb3dc00ed6745b62097fcc5812c452b089729341aef97b5fac0fadd397b67_prof);

        
        $__internal_7d6f806791036d1d1e45958276247c4dbff666c95d4c8258af8b19d0325bd653->leave($__internal_7d6f806791036d1d1e45958276247c4dbff666c95d4c8258af8b19d0325bd653_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_999f3d31e881ab6d1bce902d1755d23352df1a04ae3e20fdedf0c5c58b5ffc8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999f3d31e881ab6d1bce902d1755d23352df1a04ae3e20fdedf0c5c58b5ffc8d->enter($__internal_999f3d31e881ab6d1bce902d1755d23352df1a04ae3e20fdedf0c5c58b5ffc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_68c623d8a397cfa709fca8b8aa8c12a8743723551b3ba9d6e8e0167faa6ad509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c623d8a397cfa709fca8b8aa8c12a8743723551b3ba9d6e8e0167faa6ad509->enter($__internal_68c623d8a397cfa709fca8b8aa8c12a8743723551b3ba9d6e8e0167faa6ad509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_68c623d8a397cfa709fca8b8aa8c12a8743723551b3ba9d6e8e0167faa6ad509->leave($__internal_68c623d8a397cfa709fca8b8aa8c12a8743723551b3ba9d6e8e0167faa6ad509_prof);

        
        $__internal_999f3d31e881ab6d1bce902d1755d23352df1a04ae3e20fdedf0c5c58b5ffc8d->leave($__internal_999f3d31e881ab6d1bce902d1755d23352df1a04ae3e20fdedf0c5c58b5ffc8d_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_31e378aaf555c5fe4eb4400a82113c5e4491e2768521f7215090549c561e7365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e378aaf555c5fe4eb4400a82113c5e4491e2768521f7215090549c561e7365->enter($__internal_31e378aaf555c5fe4eb4400a82113c5e4491e2768521f7215090549c561e7365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_4d25bf4f51e6f05e16ca504a03c7388e5dd11a8fcc0d614eb9139fcd2a2cbe28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d25bf4f51e6f05e16ca504a03c7388e5dd11a8fcc0d614eb9139fcd2a2cbe28->enter($__internal_4d25bf4f51e6f05e16ca504a03c7388e5dd11a8fcc0d614eb9139fcd2a2cbe28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 258
        echo "                    <section class=\"content-header\">

                        ";
        // line 260
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 314
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 317
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 351
        echo "                    </section>
                ";
        
        $__internal_4d25bf4f51e6f05e16ca504a03c7388e5dd11a8fcc0d614eb9139fcd2a2cbe28->leave($__internal_4d25bf4f51e6f05e16ca504a03c7388e5dd11a8fcc0d614eb9139fcd2a2cbe28_prof);

        
        $__internal_31e378aaf555c5fe4eb4400a82113c5e4491e2768521f7215090549c561e7365->leave($__internal_31e378aaf555c5fe4eb4400a82113c5e4491e2768521f7215090549c561e7365_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_cca0698f2e172b268a2753b36b67080340949fc67f4a756649588040edbc2a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca0698f2e172b268a2753b36b67080340949fc67f4a756649588040edbc2a61->enter($__internal_cca0698f2e172b268a2753b36b67080340949fc67f4a756649588040edbc2a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_73d4063e29616e258d8b095b7a69429d2c3d3e1d90b967dc92fb1a0400b24000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d4063e29616e258d8b095b7a69429d2c3d3e1d90b967dc92fb1a0400b24000->enter($__internal_73d4063e29616e258d8b095b7a69429d2c3d3e1d90b967dc92fb1a0400b24000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_73d4063e29616e258d8b095b7a69429d2c3d3e1d90b967dc92fb1a0400b24000->leave($__internal_73d4063e29616e258d8b095b7a69429d2c3d3e1d90b967dc92fb1a0400b24000_prof);

        
        $__internal_cca0698f2e172b268a2753b36b67080340949fc67f4a756649588040edbc2a61->leave($__internal_cca0698f2e172b268a2753b36b67080340949fc67f4a756649588040edbc2a61_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_08fb788818cd9176d3b13256f85f2bef667cba6002723ca0df7b324dd7fe9206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08fb788818cd9176d3b13256f85f2bef667cba6002723ca0df7b324dd7fe9206->enter($__internal_08fb788818cd9176d3b13256f85f2bef667cba6002723ca0df7b324dd7fe9206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_7ba6f63346b4d3530b7ba380945242b81adb9cc5f3951b86cd0130199fdf594e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba6f63346b4d3530b7ba380945242b81adb9cc5f3951b86cd0130199fdf594e->enter($__internal_7ba6f63346b4d3530b7ba380945242b81adb9cc5f3951b86cd0130199fdf594e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 262
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
            // line 263
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 265
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 272
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 274
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 275
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 276
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    </div>
                                                ";
            }
            // line 279
            echo "
                                                ";
            // line 280
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 281
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 283
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                echo "                                                    </div>
                                                ";
            }
            // line 287
            echo "
                                                ";
            // line 288
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 304
            echo "
                                                ";
            // line 305
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 306
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 308
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 312
        echo "                            ";
        
        $__internal_7ba6f63346b4d3530b7ba380945242b81adb9cc5f3951b86cd0130199fdf594e->leave($__internal_7ba6f63346b4d3530b7ba380945242b81adb9cc5f3951b86cd0130199fdf594e_prof);

        
        $__internal_08fb788818cd9176d3b13256f85f2bef667cba6002723ca0df7b324dd7fe9206->leave($__internal_08fb788818cd9176d3b13256f85f2bef667cba6002723ca0df7b324dd7fe9206_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_f942255151d5743da6ceaa3214c004dd855b386183d85b178562a837cd26f6de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f942255151d5743da6ceaa3214c004dd855b386183d85b178562a837cd26f6de->enter($__internal_f942255151d5743da6ceaa3214c004dd855b386183d85b178562a837cd26f6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_8ccafa96ec4b6e3123b0f257bad08cf0fed57a6aab8b72a557769a8224d1992a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ccafa96ec4b6e3123b0f257bad08cf0fed57a6aab8b72a557769a8224d1992a->enter($__internal_8ccafa96ec4b6e3123b0f257bad08cf0fed57a6aab8b72a557769a8224d1992a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 266
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 267
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 268
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 271
        echo "                                            ";
        
        $__internal_8ccafa96ec4b6e3123b0f257bad08cf0fed57a6aab8b72a557769a8224d1992a->leave($__internal_8ccafa96ec4b6e3123b0f257bad08cf0fed57a6aab8b72a557769a8224d1992a_prof);

        
        $__internal_f942255151d5743da6ceaa3214c004dd855b386183d85b178562a837cd26f6de->leave($__internal_f942255151d5743da6ceaa3214c004dd855b386183d85b178562a837cd26f6de_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_bb090e32a350ee92a8dfed2b72414ce23ade126f55099b8a60c25d469791d386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb090e32a350ee92a8dfed2b72414ce23ade126f55099b8a60c25d469791d386->enter($__internal_bb090e32a350ee92a8dfed2b72414ce23ade126f55099b8a60c25d469791d386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_e6bf135d18e740c91d4a6f1c98b46e557723e0b43f0ae6b3a2070bb477159825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6bf135d18e740c91d4a6f1c98b46e557723e0b43f0ae6b3a2070bb477159825->enter($__internal_e6bf135d18e740c91d4a6f1c98b46e557723e0b43f0ae6b3a2070bb477159825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 289
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 290
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 291
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 292
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 295
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 299
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 301
            echo "                                                        </ul>
                                                    ";
        }
        // line 303
        echo "                                                ";
        
        $__internal_e6bf135d18e740c91d4a6f1c98b46e557723e0b43f0ae6b3a2070bb477159825->leave($__internal_e6bf135d18e740c91d4a6f1c98b46e557723e0b43f0ae6b3a2070bb477159825_prof);

        
        $__internal_bb090e32a350ee92a8dfed2b72414ce23ade126f55099b8a60c25d469791d386->leave($__internal_bb090e32a350ee92a8dfed2b72414ce23ade126f55099b8a60c25d469791d386_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_97d0e1d5cb405bcc02a647fdb58cd013a7ebdb915091bc0a242f11eb5df31e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d0e1d5cb405bcc02a647fdb58cd013a7ebdb915091bc0a242f11eb5df31e8e->enter($__internal_97d0e1d5cb405bcc02a647fdb58cd013a7ebdb915091bc0a242f11eb5df31e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_aee36a6181fe03ba54ad5664bf8b4a37e806db406ca7067bd8db78df2bc499a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee36a6181fe03ba54ad5664bf8b4a37e806db406ca7067bd8db78df2bc499a9->enter($__internal_aee36a6181fe03ba54ad5664bf8b4a37e806db406ca7067bd8db78df2bc499a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 318
        echo "
                            ";
        // line 319
        $this->displayBlock('notice', $context, $blocks);
        // line 322
        echo "
                            ";
        // line 323
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 324
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 326
        echo "
                            ";
        // line 327
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 328
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 330
        echo "
                            ";
        // line 331
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 332
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 336
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 338
        echo "
                            ";
        // line 339
        if ( !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
            // line 340
            echo "                                <div class=\"row\">
                                    ";
            // line 341
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
            echo "
                                </div>
                            ";
        }
        // line 344
        echo "
                            ";
        // line 345
        if ( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table")))) {
            // line 346
            echo "                                <div class=\"row\">
                                    ";
            // line 347
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>
                            ";
        }
        // line 350
        echo "                        ";
        
        $__internal_aee36a6181fe03ba54ad5664bf8b4a37e806db406ca7067bd8db78df2bc499a9->leave($__internal_aee36a6181fe03ba54ad5664bf8b4a37e806db406ca7067bd8db78df2bc499a9_prof);

        
        $__internal_97d0e1d5cb405bcc02a647fdb58cd013a7ebdb915091bc0a242f11eb5df31e8e->leave($__internal_97d0e1d5cb405bcc02a647fdb58cd013a7ebdb915091bc0a242f11eb5df31e8e_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_1df21cfcde0bd0b9c739440b8eef1e59e8aa7bea94de5c9161a24c6c395106de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df21cfcde0bd0b9c739440b8eef1e59e8aa7bea94de5c9161a24c6c395106de->enter($__internal_1df21cfcde0bd0b9c739440b8eef1e59e8aa7bea94de5c9161a24c6c395106de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_a1c285d1f743d36eb27bb1239d055195ac01deb41788e7c8e50cdff2f3882ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c285d1f743d36eb27bb1239d055195ac01deb41788e7c8e50cdff2f3882ef1->enter($__internal_a1c285d1f743d36eb27bb1239d055195ac01deb41788e7c8e50cdff2f3882ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_a1c285d1f743d36eb27bb1239d055195ac01deb41788e7c8e50cdff2f3882ef1->leave($__internal_a1c285d1f743d36eb27bb1239d055195ac01deb41788e7c8e50cdff2f3882ef1_prof);

        
        $__internal_1df21cfcde0bd0b9c739440b8eef1e59e8aa7bea94de5c9161a24c6c395106de->leave($__internal_1df21cfcde0bd0b9c739440b8eef1e59e8aa7bea94de5c9161a24c6c395106de_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_1e25c398447ed2d1320589520bbd6a6155fffd2e47cf1e0e0da32f0b8f4f3add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e25c398447ed2d1320589520bbd6a6155fffd2e47cf1e0e0da32f0b8f4f3add->enter($__internal_1e25c398447ed2d1320589520bbd6a6155fffd2e47cf1e0e0da32f0b8f4f3add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_7c4adc8d4d0ff5bd8de7ec205ff5bcb506e8ced7e130b40b2207ad38b640fa48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4adc8d4d0ff5bd8de7ec205ff5bcb506e8ced7e130b40b2207ad38b640fa48->enter($__internal_7c4adc8d4d0ff5bd8de7ec205ff5bcb506e8ced7e130b40b2207ad38b640fa48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_7c4adc8d4d0ff5bd8de7ec205ff5bcb506e8ced7e130b40b2207ad38b640fa48->leave($__internal_7c4adc8d4d0ff5bd8de7ec205ff5bcb506e8ced7e130b40b2207ad38b640fa48_prof);

        
        $__internal_1e25c398447ed2d1320589520bbd6a6155fffd2e47cf1e0e0da32f0b8f4f3add->leave($__internal_1e25c398447ed2d1320589520bbd6a6155fffd2e47cf1e0e0da32f0b8f4f3add_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1458 => 360,  1456 => 359,  1447 => 358,  1437 => 321,  1434 => 320,  1425 => 319,  1415 => 350,  1409 => 347,  1406 => 346,  1404 => 345,  1401 => 344,  1395 => 341,  1392 => 340,  1390 => 339,  1387 => 338,  1381 => 336,  1379 => 335,  1376 => 334,  1370 => 332,  1368 => 331,  1365 => 330,  1359 => 328,  1357 => 327,  1354 => 326,  1348 => 324,  1346 => 323,  1343 => 322,  1341 => 319,  1338 => 318,  1329 => 317,  1319 => 303,  1315 => 301,  1309 => 299,  1302 => 295,  1297 => 293,  1294 => 292,  1292 => 291,  1289 => 290,  1286 => 289,  1277 => 288,  1267 => 271,  1261 => 268,  1258 => 267,  1255 => 266,  1246 => 265,  1236 => 312,  1230 => 308,  1224 => 306,  1222 => 305,  1219 => 304,  1217 => 288,  1214 => 287,  1210 => 285,  1195 => 283,  1191 => 282,  1188 => 281,  1186 => 280,  1183 => 279,  1177 => 276,  1174 => 275,  1172 => 274,  1168 => 272,  1166 => 265,  1162 => 263,  1159 => 262,  1150 => 261,  1140 => 313,  1137 => 261,  1128 => 260,  1117 => 351,  1115 => 317,  1110 => 314,  1108 => 260,  1104 => 258,  1095 => 257,  1084 => 247,  1075 => 246,  1064 => 249,  1062 => 246,  1059 => 245,  1050 => 244,  1037 => 242,  1028 => 241,  1010 => 240,  989 => 230,  983 => 228,  974 => 227,  964 => 251,  961 => 244,  958 => 241,  956 => 240,  953 => 239,  950 => 227,  941 => 226,  929 => 252,  927 => 226,  923 => 224,  914 => 223,  903 => 353,  901 => 257,  897 => 255,  894 => 223,  885 => 222,  873 => 210,  871 => 209,  864 => 204,  855 => 203,  844 => 201,  842 => 200,  836 => 196,  827 => 195,  817 => 216,  812 => 213,  809 => 203,  807 => 195,  803 => 193,  800 => 192,  791 => 191,  780 => 187,  776 => 185,  770 => 183,  767 => 182,  764 => 181,  750 => 180,  744 => 178,  740 => 176,  734 => 174,  730 => 172,  727 => 170,  724 => 168,  722 => 167,  717 => 166,  715 => 165,  712 => 164,  710 => 163,  707 => 160,  705 => 159,  703 => 158,  701 => 157,  683 => 156,  680 => 155,  678 => 154,  675 => 153,  673 => 152,  670 => 151,  661 => 150,  650 => 217,  648 => 191,  644 => 189,  642 => 150,  634 => 144,  625 => 143,  615 => 142,  611 => 140,  605 => 138,  602 => 137,  594 => 135,  592 => 134,  587 => 133,  584 => 132,  575 => 131,  561 => 127,  557 => 125,  548 => 124,  537 => 219,  534 => 143,  531 => 131,  529 => 124,  526 => 123,  517 => 122,  499 => 118,  489 => 115,  486 => 114,  483 => 113,  469 => 112,  464 => 110,  461 => 107,  459 => 106,  457 => 105,  455 => 104,  451 => 101,  448 => 100,  445 => 99,  428 => 98,  425 => 97,  422 => 96,  416 => 94,  414 => 93,  408 => 91,  399 => 90,  389 => 66,  380 => 64,  375 => 63,  366 => 62,  345 => 50,  341 => 48,  335 => 47,  327 => 46,  319 => 45,  311 => 44,  307 => 42,  298 => 41,  288 => 87,  285 => 86,  279 => 84,  276 => 83,  273 => 81,  268 => 80,  265 => 79,  262 => 77,  258 => 75,  256 => 73,  254 => 71,  251 => 70,  249 => 69,  247 => 68,  244 => 67,  242 => 62,  239 => 61,  236 => 41,  227 => 40,  217 => 38,  208 => 36,  203 => 35,  194 => 34,  181 => 29,  172 => 28,  154 => 26,  141 => 365,  138 => 364,  135 => 358,  133 => 357,  129 => 355,  127 => 222,  124 => 221,  122 => 122,  115 => 118,  111 => 116,  109 => 90,  105 => 88,  103 => 40,  100 => 39,  98 => 34,  95 => 33,  93 => 28,  88 => 26,  84 => 24,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  57 => 11,);
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

{% set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
