<?php

/* SonataAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_9dcea7cd8dd424fb0b2c173a41cd2bf7997e167736469e2f93f589c3cf6bedb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13af2b09b264bfc80a75f66e2469c813811a4a14d76c8f0ede6dc669b9b17f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13af2b09b264bfc80a75f66e2469c813811a4a14d76c8f0ede6dc669b9b17f56->enter($__internal_13af2b09b264bfc80a75f66e2469c813811a4a14d76c8f0ede6dc669b9b17f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:filter_admin_fields.html.twig"));

        $__internal_389d5d6814f586b445ecbec11b5cc4505dbfece1204e82b5289397cae1ec685f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389d5d6814f586b445ecbec11b5cc4505dbfece1204e82b5289397cae1ec685f->enter($__internal_389d5d6814f586b445ecbec11b5cc4505dbfece1204e82b5289397cae1ec685f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13af2b09b264bfc80a75f66e2469c813811a4a14d76c8f0ede6dc669b9b17f56->leave($__internal_13af2b09b264bfc80a75f66e2469c813811a4a14d76c8f0ede6dc669b9b17f56_prof);

        
        $__internal_389d5d6814f586b445ecbec11b5cc4505dbfece1204e82b5289397cae1ec685f->leave($__internal_389d5d6814f586b445ecbec11b5cc4505dbfece1204e82b5289397cae1ec685f_prof);

    }

    // line 18
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_20c4b07d952115ccec8726cd0d31b295c3a7cbf93e2b76b91c3c9abc7e8e6eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c4b07d952115ccec8726cd0d31b295c3a7cbf93e2b76b91c3c9abc7e8e6eb0->enter($__internal_20c4b07d952115ccec8726cd0d31b295c3a7cbf93e2b76b91c3c9abc7e8e6eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_ad92deb6603f6c7fc3e61a08ff2f265c2aa2e6b4620f459a5fa0ab29c7ae2ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad92deb6603f6c7fc3e61a08ff2f265c2aa2e6b4620f459a5fa0ab29c7ae2ea4->enter($__internal_ad92deb6603f6c7fc3e61a08ff2f265c2aa2e6b4620f459a5fa0ab29c7ae2ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 20
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_ad92deb6603f6c7fc3e61a08ff2f265c2aa2e6b4620f459a5fa0ab29c7ae2ea4->leave($__internal_ad92deb6603f6c7fc3e61a08ff2f265c2aa2e6b4620f459a5fa0ab29c7ae2ea4_prof);

        
        $__internal_20c4b07d952115ccec8726cd0d31b295c3a7cbf93e2b76b91c3c9abc7e8e6eb0->leave($__internal_20c4b07d952115ccec8726cd0d31b295c3a7cbf93e2b76b91c3c9abc7e8e6eb0_prof);

    }

    // line 23
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d9915bfb6dd0f7a18df2577a06a53630d07b8247c267b848de993c9a696cf3eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9915bfb6dd0f7a18df2577a06a53630d07b8247c267b848de993c9a696cf3eb->enter($__internal_d9915bfb6dd0f7a18df2577a06a53630d07b8247c267b848de993c9a696cf3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_aee469bba462ff2176e22b6ba985d931ed6f0e2b071d334f5a0ee3c2e62c66c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee469bba462ff2176e22b6ba985d931ed6f0e2b071d334f5a0ee3c2e62c66c8->enter($__internal_aee469bba462ff2176e22b6ba985d931ed6f0e2b071d334f5a0ee3c2e62c66c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 25
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_aee469bba462ff2176e22b6ba985d931ed6f0e2b071d334f5a0ee3c2e62c66c8->leave($__internal_aee469bba462ff2176e22b6ba985d931ed6f0e2b071d334f5a0ee3c2e62c66c8_prof);

        
        $__internal_d9915bfb6dd0f7a18df2577a06a53630d07b8247c267b848de993c9a696cf3eb->leave($__internal_d9915bfb6dd0f7a18df2577a06a53630d07b8247c267b848de993c9a696cf3eb_prof);

    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_fe83816ac89d3ad3652b29e2c450f942339b6d035ac61b5ae90e4b07a716f2cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe83816ac89d3ad3652b29e2c450f942339b6d035ac61b5ae90e4b07a716f2cb->enter($__internal_fe83816ac89d3ad3652b29e2c450f942339b6d035ac61b5ae90e4b07a716f2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_1fcaf57abc66e9b1583a8941f4b2d286f1a7093bbfbc84562c64abee5fbb2a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fcaf57abc66e9b1583a8941f4b2d286f1a7093bbfbc84562c64abee5fbb2a8b->enter($__internal_1fcaf57abc66e9b1583a8941f4b2d286f1a7093bbfbc84562c64abee5fbb2a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 29
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 30
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_1fcaf57abc66e9b1583a8941f4b2d286f1a7093bbfbc84562c64abee5fbb2a8b->leave($__internal_1fcaf57abc66e9b1583a8941f4b2d286f1a7093bbfbc84562c64abee5fbb2a8b_prof);

        
        $__internal_fe83816ac89d3ad3652b29e2c450f942339b6d035ac61b5ae90e4b07a716f2cb->leave($__internal_fe83816ac89d3ad3652b29e2c450f942339b6d035ac61b5ae90e4b07a716f2cb_prof);

    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_39e8958dd54e9ef392412ad2f67f850b14a43fef83ce978f16667b08df44c71a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e8958dd54e9ef392412ad2f67f850b14a43fef83ce978f16667b08df44c71a->enter($__internal_39e8958dd54e9ef392412ad2f67f850b14a43fef83ce978f16667b08df44c71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_ca67e3283850c69e9de7713600b5ceb3cae310454ba4db9c7921bfa33efbecf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca67e3283850c69e9de7713600b5ceb3cae310454ba4db9c7921bfa33efbecf7->enter($__internal_ca67e3283850c69e9de7713600b5ceb3cae310454ba4db9c7921bfa33efbecf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 36
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "class", array()) . " ") . (((array_key_exists("widget_type", $context) && ((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != ""))) ? ((((((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")))) : ("")))));
        // line 37
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 38
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 39
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
        }
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "            ";
            if ((array_key_exists("widget_type", $context) && ((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline"))) {
                // line 43
                echo "                <div class=\"";
                echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio"));
                echo "\">
            ";
            }
            // line 45
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 46
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")))));
            echo "
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </label>
            ";
            // line 49
            if ((array_key_exists("widget_type", $context) && ((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline"))) {
                // line 50
                echo "                </div>
            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        ";
        if (        $this->hasBlock("form_message", $context, $blocks)) {
            // line 54
            echo "            ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
        ";
        }
        // line 56
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 57
            echo "            </div>
        ";
        }
        // line 59
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ca67e3283850c69e9de7713600b5ceb3cae310454ba4db9c7921bfa33efbecf7->leave($__internal_ca67e3283850c69e9de7713600b5ceb3cae310454ba4db9c7921bfa33efbecf7_prof);

        
        $__internal_39e8958dd54e9ef392412ad2f67f850b14a43fef83ce978f16667b08df44c71a->leave($__internal_39e8958dd54e9ef392412ad2f67f850b14a43fef83ce978f16667b08df44c71a_prof);

    }

    // line 62
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_01f22f7da4ec98861d6d954ff6030e68f7cfe1fe4aea1d4126bbd5a011a8b72a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f22f7da4ec98861d6d954ff6030e68f7cfe1fe4aea1d4126bbd5a011a8b72a->enter($__internal_01f22f7da4ec98861d6d954ff6030e68f7cfe1fe4aea1d4126bbd5a011a8b72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b5e6700f6caad4378901aa998138d292fbfe14010524f661405ae3c57315e1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e6700f6caad4378901aa998138d292fbfe14010524f661405ae3c57315e1f9->enter($__internal_b5e6700f6caad4378901aa998138d292fbfe14010524f661405ae3c57315e1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 63
        echo "    ";
        ob_start();
        // line 64
        echo "        ";
        if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
            // line 65
            echo "            ";
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 66
            echo "        ";
        }
        // line 67
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 68
            echo "            <div class=\"checkbox\">
        ";
        }
        // line 70
        echo "
        ";
        // line 71
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) && array_key_exists("label_render", $context))) {
            // line 72
            echo "            <label class=\"";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
                echo "checkbox-inline";
            }
            echo "\">
        ";
        }
        // line 74
        echo "
        <input type=\"checkbox\" ";
        // line 75
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 76
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 77
            echo "            ";
            if ((array_key_exists("label_render", $context) && twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget")))) {
                // line 78
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 81
            echo "        ";
        }
        // line 82
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 83
            echo "            </div>
            ";
            // line 84
            if (            $this->hasBlock("form_message", $context, $blocks)) {
                // line 85
                echo "                ";
                $this->displayBlock("form_message", $context, $blocks);
                echo "
            ";
            }
            // line 87
            echo "        ";
        }
        // line 88
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b5e6700f6caad4378901aa998138d292fbfe14010524f661405ae3c57315e1f9->leave($__internal_b5e6700f6caad4378901aa998138d292fbfe14010524f661405ae3c57315e1f9_prof);

        
        $__internal_01f22f7da4ec98861d6d954ff6030e68f7cfe1fe4aea1d4126bbd5a011a8b72a->leave($__internal_01f22f7da4ec98861d6d954ff6030e68f7cfe1fe4aea1d4126bbd5a011a8b72a_prof);

    }

    // line 91
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_bfb9c71c59db1ed2df1484f2de442411c1f71758b0f39e8b790d8fd72243e25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb9c71c59db1ed2df1484f2de442411c1f71758b0f39e8b790d8fd72243e25b->enter($__internal_bfb9c71c59db1ed2df1484f2de442411c1f71758b0f39e8b790d8fd72243e25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        $__internal_86784dd656bc1efcea2163a173d02cef2a35383dc8186aa3581067dce5729a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86784dd656bc1efcea2163a173d02cef2a35383dc8186aa3581067dce5729a39->enter($__internal_86784dd656bc1efcea2163a173d02cef2a35383dc8186aa3581067dce5729a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 92
        echo "    ";
        $this->loadTemplate((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "SonataAdminBundle:Form:filter_admin_fields.html.twig", 92)->display($context);
        
        $__internal_86784dd656bc1efcea2163a173d02cef2a35383dc8186aa3581067dce5729a39->leave($__internal_86784dd656bc1efcea2163a173d02cef2a35383dc8186aa3581067dce5729a39_prof);

        
        $__internal_bfb9c71c59db1ed2df1484f2de442411c1f71758b0f39e8b790d8fd72243e25b->leave($__internal_bfb9c71c59db1ed2df1484f2de442411c1f71758b0f39e8b790d8fd72243e25b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 92,  327 => 91,  316 => 88,  313 => 87,  307 => 85,  305 => 84,  302 => 83,  299 => 82,  296 => 81,  289 => 78,  286 => 77,  284 => 76,  272 => 75,  269 => 74,  261 => 72,  259 => 71,  256 => 70,  252 => 68,  249 => 67,  246 => 66,  243 => 65,  240 => 64,  237 => 63,  228 => 62,  217 => 59,  213 => 57,  210 => 56,  204 => 54,  201 => 53,  195 => 52,  191 => 50,  189 => 49,  184 => 47,  180 => 46,  164 => 45,  158 => 43,  155 => 42,  150 => 41,  144 => 39,  141 => 38,  138 => 37,  135 => 36,  132 => 35,  129 => 34,  120 => 33,  107 => 30,  104 => 29,  95 => 28,  82 => 25,  79 => 24,  70 => 23,  57 => 20,  54 => 19,  45 => 18,  11 => 12,);
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

{% extends 'form_div_layout.html.twig' %}

{#
    Inspired from MopaBootstrapBundle: https://github.com/phiamo/MopaBootstrapBundle
#}

{% block choice_widget_collapsed %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock choice_widget_collapsed %}

{% block textarea_widget %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock textarea_widget %}

{% block form_widget_simple %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock form_widget_simple %}

{% block choice_widget_expanded %}
    {% spaceless %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class|default(''))}) %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class ~ ' ' ~ (widget_type is defined and widget_type != '' ? (multiple ? 'checkbox' : 'radio') ~ '-' ~ widget_type : ''))}) %}
        {% if expanded %}
            {% set attr = attr|merge({'class': attr.class|default('')}) %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {% for child in form %}
            {% if widget_type is defined and widget_type != 'inline' %}
                <div class=\"{{ multiple ? 'checkbox' : 'radio' }}\">
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{ form_widget(child, {'attr': {'class': attr.widget_class|default('')}}) }}
            {{ child.vars.label|trans({}, translation_domain) }}
            </label>
            {% if widget_type is defined and widget_type != 'inline' %}
                </div>
            {% endif %}
        {% endfor %}
        {% if block('form_message') is defined %}
            {{ block('form_message') }}
        {% endif %}
        {% if expanded %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock choice_widget_expanded %}

{% block checkbox_widget %}
    {% spaceless %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            <div class=\"checkbox\">
        {% endif %}

        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes and label_render is defined %}
            <label class=\"{% if inline is defined and inline %}checkbox-inline{% endif %}\">
        {% endif %}

        <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %}/>
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            {% if label_render is defined and widget_checkbox_label in ['both', 'widget'] %}
                {{ label|trans({}, translation_domain) }}
                </label>
            {% endif %}
        {% endif %}
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            </div>
            {% if block('form_message') is defined %}
                {{ block('form_message') }}
            {% endif %}
        {% endif %}
    {% endspaceless %}
{% endblock checkbox_widget %}

{% block sonata_type_model_autocomplete_widget %}
    {% include template %}
{% endblock sonata_type_model_autocomplete_widget %}
", "SonataAdminBundle:Form:filter_admin_fields.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
