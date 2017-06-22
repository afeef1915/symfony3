<?php

/* SonataAdminBundle:Core:tab_menu_template.html.twig */
class __TwigTemplate_62457f7ab6c83eb458239dc3c5a91d7a06c900e90e7e481fce43027944d87f1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3503e2a415fe995846600a8baee205f894f6afb0550c1a516844a4f538237c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3503e2a415fe995846600a8baee205f894f6afb0550c1a516844a4f538237c4->enter($__internal_d3503e2a415fe995846600a8baee205f894f6afb0550c1a516844a4f538237c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:tab_menu_template.html.twig"));

        $__internal_0b105ad51e793bc7ff04263b15c72b9c8be0942ea4f4c8f0d3bd58542eb57c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b105ad51e793bc7ff04263b15c72b9c8be0942ea4f4c8f0d3bd58542eb57c10->enter($__internal_0b105ad51e793bc7ff04263b15c72b9c8be0942ea4f4c8f0d3bd58542eb57c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:tab_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3503e2a415fe995846600a8baee205f894f6afb0550c1a516844a4f538237c4->leave($__internal_d3503e2a415fe995846600a8baee205f894f6afb0550c1a516844a4f538237c4_prof);

        
        $__internal_0b105ad51e793bc7ff04263b15c72b9c8be0942ea4f4c8f0d3bd58542eb57c10->leave($__internal_0b105ad51e793bc7ff04263b15c72b9c8be0942ea4f4c8f0d3bd58542eb57c10_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_c6fc54ff9fd28c4d1fd95be4ff563f3188b821c8cb54ac0639a11797efde7092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6fc54ff9fd28c4d1fd95be4ff563f3188b821c8cb54ac0639a11797efde7092->enter($__internal_c6fc54ff9fd28c4d1fd95be4ff563f3188b821c8cb54ac0639a11797efde7092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_cfe7ba6294075e03a803d832ab9a11bb2a073b5ba0b812826007caf8af292bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe7ba6294075e03a803d832ab9a11bb2a073b5ba0b812826007caf8af292bf3->enter($__internal_cfe7ba6294075e03a803d832ab9a11bb2a073b5ba0b812826007caf8af292bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 4);
        // line 5
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 6
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 7
            $context["is_dropdown"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array()), false)) : (false));
            // line 8
            $context["divider_prepend"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array()), false)) : (false));
            // line 9
            $context["divider_append"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array()), false)) : (false));
            // line 10
            echo "
";
            // line 12
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if ((isset($context["divider_prepend"]) ? $context["divider_prepend"] : $this->getContext($context, "divider_prepend"))) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
";
            // line 19
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 21
            if (array_key_exists("matcher", $context)) {
                echo " ";
                // line 22
                if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                    // line 23
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 24
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array())), "method")) {
                    // line 25
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
                }
            } else {
                // line 27
                echo " ";
                // line 28
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array())) {
                    // line 29
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 30
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currentAncestor", array())) {
                    // line 31
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
                }
            }
            // line 35
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 36
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 38
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 39
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 41
            echo "
";
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 44
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 45
            echo "
";
            // line 47
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                // line 48
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown"));
                // line 49
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
            }
            // line 51
            echo "
";
            // line 53
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 54
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 56
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 57
            echo "
";
            // line 59
            echo "    <li";
            echo $context["macros"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 60
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                // line 61
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 62
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array()) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 63
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if ((isset($context["divider_append"]) ? $context["divider_append"] : $this->getContext($context, "divider_append"))) {
                // line 72
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
        
        $__internal_cfe7ba6294075e03a803d832ab9a11bb2a073b5ba0b812826007caf8af292bf3->leave($__internal_cfe7ba6294075e03a803d832ab9a11bb2a073b5ba0b812826007caf8af292bf3_prof);

        
        $__internal_c6fc54ff9fd28c4d1fd95be4ff563f3188b821c8cb54ac0639a11797efde7092->leave($__internal_c6fc54ff9fd28c4d1fd95be4ff563f3188b821c8cb54ac0639a11797efde7092_prof);

    }

    // line 77
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_9e714ec0f9b47f981ce278dbbba2d37cf47b8a84c17bdb6538a8f09358b3890f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e714ec0f9b47f981ce278dbbba2d37cf47b8a84c17bdb6538a8f09358b3890f->enter($__internal_9e714ec0f9b47f981ce278dbbba2d37cf47b8a84c17bdb6538a8f09358b3890f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        $__internal_80111a438f4be9d0d337cd311817119ac1837fcd8bc21d8fa9ce4d6eda95f5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80111a438f4be9d0d337cd311817119ac1837fcd8bc21d8fa9ce4d6eda95f5ed->enter($__internal_80111a438f4be9d0d337cd311817119ac1837fcd8bc21d8fa9ce4d6eda95f5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 78
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>
";
        }
        
        $__internal_80111a438f4be9d0d337cd311817119ac1837fcd8bc21d8fa9ce4d6eda95f5ed->leave($__internal_80111a438f4be9d0d337cd311817119ac1837fcd8bc21d8fa9ce4d6eda95f5ed_prof);

        
        $__internal_9e714ec0f9b47f981ce278dbbba2d37cf47b8a84c17bdb6538a8f09358b3890f->leave($__internal_9e714ec0f9b47f981ce278dbbba2d37cf47b8a84c17bdb6538a8f09358b3890f_prof);

    }

    // line 85
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_4eed22d7366f88cd391f1de0e7a954e57cbebade13e708625ec244cd54401c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eed22d7366f88cd391f1de0e7a954e57cbebade13e708625ec244cd54401c77->enter($__internal_4eed22d7366f88cd391f1de0e7a954e57cbebade13e708625ec244cd54401c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_6054af87c772e2cbab56b81f760c56580c4016cc9dd01f374155cf62de8a2718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6054af87c772e2cbab56b81f760c56580c4016cc9dd01f374155cf62de8a2718->enter($__internal_6054af87c772e2cbab56b81f760c56580c4016cc9dd01f374155cf62de8a2718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 86
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 86);
        // line 87
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["macros"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">
        ";
        // line 88
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 89
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 91
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_6054af87c772e2cbab56b81f760c56580c4016cc9dd01f374155cf62de8a2718->leave($__internal_6054af87c772e2cbab56b81f760c56580c4016cc9dd01f374155cf62de8a2718_prof);

        
        $__internal_4eed22d7366f88cd391f1de0e7a954e57cbebade13e708625ec244cd54401c77->leave($__internal_4eed22d7366f88cd391f1de0e7a954e57cbebade13e708625ec244cd54401c77_prof);

    }

    // line 95
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_79a012ac5e891e21c73ecdc1bdbb9de7e189d258d1b6f2a6860b6f8ff9f89275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a012ac5e891e21c73ecdc1bdbb9de7e189d258d1b6f2a6860b6f8ff9f89275->enter($__internal_79a012ac5e891e21c73ecdc1bdbb9de7e189d258d1b6f2a6860b6f8ff9f89275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_69e0ffd152fd346bc00908caa6a130912362044dcae2343dd8eff91825f46c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e0ffd152fd346bc00908caa6a130912362044dcae2343dd8eff91825f46c12->enter($__internal_69e0ffd152fd346bc00908caa6a130912362044dcae2343dd8eff91825f46c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 96
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 96);
        // line 97
        echo "    <span ";
        echo $context["macros"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">
        ";
        // line 98
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 99
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 101
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
        
        $__internal_69e0ffd152fd346bc00908caa6a130912362044dcae2343dd8eff91825f46c12->leave($__internal_69e0ffd152fd346bc00908caa6a130912362044dcae2343dd8eff91825f46c12_prof);

        
        $__internal_79a012ac5e891e21c73ecdc1bdbb9de7e189d258d1b6f2a6860b6f8ff9f89275->leave($__internal_79a012ac5e891e21c73ecdc1bdbb9de7e189d258d1b6f2a6860b6f8ff9f89275_prof);

    }

    // line 105
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_81aa9f6e1a3eef18aaae5c058927a35fa2aa02de963d98804f8666f226e9ea17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81aa9f6e1a3eef18aaae5c058927a35fa2aa02de963d98804f8666f226e9ea17->enter($__internal_81aa9f6e1a3eef18aaae5c058927a35fa2aa02de963d98804f8666f226e9ea17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        $__internal_c878001335aaf779b762562eb4158c26270ba0fd53e13f123e364db50bfc3543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c878001335aaf779b762562eb4158c26270ba0fd53e13f123e364db50bfc3543->enter($__internal_c878001335aaf779b762562eb4158c26270ba0fd53e13f123e364db50bfc3543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 106
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 106);
        // line 107
        $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 108
        $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown-toggle"));
        // line 109
        $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array());
        // line 110
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
        // line 111
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("data-toggle" => "dropdown"));
        // line 112
        echo "    <a href=\"#\"";
        echo $context["macros"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
        echo ">
        ";
        // line 113
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 114
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 116
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
        
        $__internal_c878001335aaf779b762562eb4158c26270ba0fd53e13f123e364db50bfc3543->leave($__internal_c878001335aaf779b762562eb4158c26270ba0fd53e13f123e364db50bfc3543_prof);

        
        $__internal_81aa9f6e1a3eef18aaae5c058927a35fa2aa02de963d98804f8666f226e9ea17->leave($__internal_81aa9f6e1a3eef18aaae5c058927a35fa2aa02de963d98804f8666f226e9ea17_prof);

    }

    // line 121
    public function block_label($context, array $blocks = array())
    {
        $__internal_9ede9bae3ffe2786b256a42b08c10e7266a4adc42fe4b329617d38a473d420f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ede9bae3ffe2786b256a42b08c10e7266a4adc42fe4b329617d38a473d420f6->enter($__internal_9ede9bae3ffe2786b256a42b08c10e7266a4adc42fe4b329617d38a473d420f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_bb455c0a25761d2695f33980ac0c77deeadd0a0705f406cf6c74cab6ba36a5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb455c0a25761d2695f33980ac0c77deeadd0a0705f406cf6c74cab6ba36a5d1->enter($__internal_bb455c0a25761d2695f33980ac0c77deeadd0a0705f406cf6c74cab6ba36a5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 123
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), $this->getAttribute(        // line 124
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute(        // line 125
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_domain", 1 => (($this->getAttribute(        // line 127
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getParent", array(), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getParent", array(), "method"), "getExtra", array(0 => "translation_domain"), "method")) : (null))), "method")), "html", null, true);
        
        $__internal_bb455c0a25761d2695f33980ac0c77deeadd0a0705f406cf6c74cab6ba36a5d1->leave($__internal_bb455c0a25761d2695f33980ac0c77deeadd0a0705f406cf6c74cab6ba36a5d1_prof);

        
        $__internal_9ede9bae3ffe2786b256a42b08c10e7266a4adc42fe4b329617d38a473d420f6->leave($__internal_9ede9bae3ffe2786b256a42b08c10e7266a4adc42fe4b329617d38a473d420f6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 127,  355 => 125,  354 => 124,  353 => 123,  352 => 122,  343 => 121,  328 => 116,  322 => 114,  320 => 113,  315 => 112,  313 => 111,  311 => 110,  309 => 109,  307 => 108,  305 => 107,  302 => 106,  293 => 105,  279 => 101,  273 => 99,  271 => 98,  266 => 97,  263 => 96,  254 => 95,  240 => 91,  234 => 89,  232 => 88,  225 => 87,  222 => 86,  213 => 85,  201 => 81,  197 => 79,  195 => 78,  186 => 77,  173 => 72,  171 => 71,  166 => 68,  162 => 65,  158 => 63,  156 => 62,  153 => 61,  151 => 60,  147 => 59,  144 => 57,  142 => 56,  139 => 54,  137 => 53,  134 => 51,  131 => 49,  129 => 48,  127 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  114 => 39,  112 => 38,  109 => 36,  107 => 35,  103 => 31,  101 => 30,  99 => 29,  97 => 28,  95 => 27,  91 => 25,  89 => 24,  87 => 23,  85 => 22,  82 => 21,  80 => 19,  77 => 17,  73 => 15,  71 => 14,  69 => 12,  66 => 10,  64 => 9,  62 => 8,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  45 => 3,  11 => 1,);
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

{% block item %}
{% import \"knp_menu.html.twig\" as macros %}
{% if item.displayed %}
    {%- set attributes = item.attributes %}
    {%- set is_dropdown = attributes.dropdown|default(false) %}
    {%- set divider_prepend = attributes.divider_prepend|default(false) %}
    {%- set divider_append = attributes.divider_append|default(false) %}

{# unset bootstrap specific attributes #}
    {%- set attributes = attributes|merge({'dropdown': null, 'divider_prepend': null, 'divider_append': null }) %}

    {%- if divider_prepend %}
        {{ block('dividerElement') }}
    {%- endif %}

{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}

    {%- if matcher is defined %} {# KnpMenu 2.0#}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- else %} {# KnpMenu 1.X #}
        {%- if item.current %}
        {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif item.currentAncestor %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- endif %}

    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

{# building the class of the children #}
    {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
    {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}

{# adding classes for dropdown #}
    {%- if is_dropdown %}
        {%- set classes = classes|merge(['dropdown']) %}
        {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}
    {%- endif %}

{# putting classes together #}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}

{# displaying the item #}
    <li{{ macros.attributes(attributes) }}>
        {%- if is_dropdown %}
            {{ block('dropdownElement') }}
        {%- elseif item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {{ block('list') }}
    </li>

    {%- if divider_append %}
        {{ block('dividerElement') }}
    {%- endif %}
{% endif %}
{% endblock %}

{% block dividerElement %}
{% if item.level == 1 %}
    <li class=\"divider-vertical\"></li>
{% else %}
    <li class=\"divider\"></li>
{% endif %}
{% endblock %}

{% block linkElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    <a href=\"{{ item.uri }}\"{{ macros.attributes(item.linkAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </a>
{% endblock %}

{% block spanElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    <span {{ macros.attributes(item.labelAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </span>
{% endblock %}

{% block dropdownElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    {%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}
    {%- set classes = classes|merge(['dropdown-toggle']) %}
    {%- set attributes = item.linkAttributes %}
    {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- set attributes = attributes|merge({'data-toggle': 'dropdown'}) %}
    <a href=\"#\"{{ macros.attributes(attributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
        <b class=\"caret\"></b>
    </a>
{% endblock %}

{% block label %}
{{-
    item.label|trans(
        item.getExtra('translation_params', {}),
        item.getExtra(
            'translation_domain',
            item.getParent() ? item.getParent().getExtra('translation_domain') : null
        )
    )
-}}
{% endblock %}
", "SonataAdminBundle:Core:tab_menu_template.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/Core/tab_menu_template.html.twig");
    }
}
