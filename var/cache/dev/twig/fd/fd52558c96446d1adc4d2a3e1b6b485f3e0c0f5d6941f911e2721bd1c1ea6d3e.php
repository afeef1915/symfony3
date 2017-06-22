<?php

/* knp_menu.html.twig */
class __TwigTemplate_362f28adbbad05eabb6e57611a551ec7dcf49b8b35cab3cdac5e69f8ed754af6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a27110c1f3962d6db67abb817d3ce8bb9c665588d32100dbbd4d77be07afe2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27110c1f3962d6db67abb817d3ce8bb9c665588d32100dbbd4d77be07afe2f1->enter($__internal_a27110c1f3962d6db67abb817d3ce8bb9c665588d32100dbbd4d77be07afe2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_b13cfc81f71ac56b2df3beae5f01337ca5d4d9871907ebfb5823852a4eb819b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13cfc81f71ac56b2df3beae5f01337ca5d4d9871907ebfb5823852a4eb819b0->enter($__internal_b13cfc81f71ac56b2df3beae5f01337ca5d4d9871907ebfb5823852a4eb819b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a27110c1f3962d6db67abb817d3ce8bb9c665588d32100dbbd4d77be07afe2f1->leave($__internal_a27110c1f3962d6db67abb817d3ce8bb9c665588d32100dbbd4d77be07afe2f1_prof);

        
        $__internal_b13cfc81f71ac56b2df3beae5f01337ca5d4d9871907ebfb5823852a4eb819b0->leave($__internal_b13cfc81f71ac56b2df3beae5f01337ca5d4d9871907ebfb5823852a4eb819b0_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_147acf79e82af9cdbe9c1b2837404525124434da27fecf2bd93c1ac3a9700890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147acf79e82af9cdbe9c1b2837404525124434da27fecf2bd93c1ac3a9700890->enter($__internal_147acf79e82af9cdbe9c1b2837404525124434da27fecf2bd93c1ac3a9700890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_f1620911b32bb24d60f752f00520e641eb1a989d8d1c0a1632181a033f988ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1620911b32bb24d60f752f00520e641eb1a989d8d1c0a1632181a033f988ec7->enter($__internal_f1620911b32bb24d60f752f00520e641eb1a989d8d1c0a1632181a033f988ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f1620911b32bb24d60f752f00520e641eb1a989d8d1c0a1632181a033f988ec7->leave($__internal_f1620911b32bb24d60f752f00520e641eb1a989d8d1c0a1632181a033f988ec7_prof);

        
        $__internal_147acf79e82af9cdbe9c1b2837404525124434da27fecf2bd93c1ac3a9700890->leave($__internal_147acf79e82af9cdbe9c1b2837404525124434da27fecf2bd93c1ac3a9700890_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_1b6952d80bd9221f762862b4508524eea6811057beb9f1ff8a9c7d012cbd7b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6952d80bd9221f762862b4508524eea6811057beb9f1ff8a9c7d012cbd7b08->enter($__internal_1b6952d80bd9221f762862b4508524eea6811057beb9f1ff8a9c7d012cbd7b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_004d9f6ad48587db473d2a0ab7d80e1187f21b13ab43b95ba2b3e796374cba9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004d9f6ad48587db473d2a0ab7d80e1187f21b13ab43b95ba2b3e796374cba9c->enter($__internal_004d9f6ad48587db473d2a0ab7d80e1187f21b13ab43b95ba2b3e796374cba9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_004d9f6ad48587db473d2a0ab7d80e1187f21b13ab43b95ba2b3e796374cba9c->leave($__internal_004d9f6ad48587db473d2a0ab7d80e1187f21b13ab43b95ba2b3e796374cba9c_prof);

        
        $__internal_1b6952d80bd9221f762862b4508524eea6811057beb9f1ff8a9c7d012cbd7b08->leave($__internal_1b6952d80bd9221f762862b4508524eea6811057beb9f1ff8a9c7d012cbd7b08_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_5323ce012a43beea6531fd2600a18a59821774bf54c7409d9750a4986c405676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5323ce012a43beea6531fd2600a18a59821774bf54c7409d9750a4986c405676->enter($__internal_5323ce012a43beea6531fd2600a18a59821774bf54c7409d9750a4986c405676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_0f3a2bb363ab809e9f86c071c100e8a186d053193838b81fa704870580ee7ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3a2bb363ab809e9f86c071c100e8a186d053193838b81fa704870580ee7ca6->enter($__internal_0f3a2bb363ab809e9f86c071c100e8a186d053193838b81fa704870580ee7ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_0f3a2bb363ab809e9f86c071c100e8a186d053193838b81fa704870580ee7ca6->leave($__internal_0f3a2bb363ab809e9f86c071c100e8a186d053193838b81fa704870580ee7ca6_prof);

        
        $__internal_5323ce012a43beea6531fd2600a18a59821774bf54c7409d9750a4986c405676->leave($__internal_5323ce012a43beea6531fd2600a18a59821774bf54c7409d9750a4986c405676_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_21e1e762d3799241a8c015e019876dc3dced809c133513a58abedf4403a0aa22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e1e762d3799241a8c015e019876dc3dced809c133513a58abedf4403a0aa22->enter($__internal_21e1e762d3799241a8c015e019876dc3dced809c133513a58abedf4403a0aa22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_c077530aa9d538c65288ee96ec69edd221e3f25e2d27598d4961950e5cf41410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c077530aa9d538c65288ee96ec69edd221e3f25e2d27598d4961950e5cf41410->enter($__internal_c077530aa9d538c65288ee96ec69edd221e3f25e2d27598d4961950e5cf41410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
        
        $__internal_c077530aa9d538c65288ee96ec69edd221e3f25e2d27598d4961950e5cf41410->leave($__internal_c077530aa9d538c65288ee96ec69edd221e3f25e2d27598d4961950e5cf41410_prof);

        
        $__internal_21e1e762d3799241a8c015e019876dc3dced809c133513a58abedf4403a0aa22->leave($__internal_21e1e762d3799241a8c015e019876dc3dced809c133513a58abedf4403a0aa22_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_7090fe56c5199f636293dae797a352d2f3e9f574cd57871651ff4d40d351c617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7090fe56c5199f636293dae797a352d2f3e9f574cd57871651ff4d40d351c617->enter($__internal_7090fe56c5199f636293dae797a352d2f3e9f574cd57871651ff4d40d351c617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_55b91af32587c6e4e3e1a36081ec1f3ace28e306513edb7db46efc243604d29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b91af32587c6e4e3e1a36081ec1f3ace28e306513edb7db46efc243604d29d->enter($__internal_55b91af32587c6e4e3e1a36081ec1f3ace28e306513edb7db46efc243604d29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method") || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_55b91af32587c6e4e3e1a36081ec1f3ace28e306513edb7db46efc243604d29d->leave($__internal_55b91af32587c6e4e3e1a36081ec1f3ace28e306513edb7db46efc243604d29d_prof);

        
        $__internal_7090fe56c5199f636293dae797a352d2f3e9f574cd57871651ff4d40d351c617->leave($__internal_7090fe56c5199f636293dae797a352d2f3e9f574cd57871651ff4d40d351c617_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_2466c5850ec266c6490eba8c3d55b802dbcb2becd5a38773a94535d357cdecfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2466c5850ec266c6490eba8c3d55b802dbcb2becd5a38773a94535d357cdecfb->enter($__internal_2466c5850ec266c6490eba8c3d55b802dbcb2becd5a38773a94535d357cdecfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_8648e19453a8bd91f06cae0c00595f273a4cd0f0433c30dcf391b67fed27d376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8648e19453a8bd91f06cae0c00595f273a4cd0f0433c30dcf391b67fed27d376->enter($__internal_8648e19453a8bd91f06cae0c00595f273a4cd0f0433c30dcf391b67fed27d376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_8648e19453a8bd91f06cae0c00595f273a4cd0f0433c30dcf391b67fed27d376->leave($__internal_8648e19453a8bd91f06cae0c00595f273a4cd0f0433c30dcf391b67fed27d376_prof);

        
        $__internal_2466c5850ec266c6490eba8c3d55b802dbcb2becd5a38773a94535d357cdecfb->leave($__internal_2466c5850ec266c6490eba8c3d55b802dbcb2becd5a38773a94535d357cdecfb_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_aa6e440109a76f1151be41f7501c33bc48c79b4baaeeca05c6981841b5627e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6e440109a76f1151be41f7501c33bc48c79b4baaeeca05c6981841b5627e6a->enter($__internal_aa6e440109a76f1151be41f7501c33bc48c79b4baaeeca05c6981841b5627e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_50e00bcb2418b5cba664c721f9f72ab78c46c160fe9b1f692133c0efb70ac307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e00bcb2418b5cba664c721f9f72ab78c46c160fe9b1f692133c0efb70ac307->enter($__internal_50e00bcb2418b5cba664c721f9f72ab78c46c160fe9b1f692133c0efb70ac307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_50e00bcb2418b5cba664c721f9f72ab78c46c160fe9b1f692133c0efb70ac307->leave($__internal_50e00bcb2418b5cba664c721f9f72ab78c46c160fe9b1f692133c0efb70ac307_prof);

        
        $__internal_aa6e440109a76f1151be41f7501c33bc48c79b4baaeeca05c6981841b5627e6a->leave($__internal_aa6e440109a76f1151be41f7501c33bc48c79b4baaeeca05c6981841b5627e6a_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_8e9724fdacc69322cd785029b5ad536a3f66a89546ca2e9fb96eef0fcc994b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9724fdacc69322cd785029b5ad536a3f66a89546ca2e9fb96eef0fcc994b80->enter($__internal_8e9724fdacc69322cd785029b5ad536a3f66a89546ca2e9fb96eef0fcc994b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_ca0aaca13ec03159af35f290402167ea288dfc4b8b9e61c6c738b39e612bbd9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0aaca13ec03159af35f290402167ea288dfc4b8b9e61c6c738b39e612bbd9f->enter($__internal_ca0aaca13ec03159af35f290402167ea288dfc4b8b9e61c6c738b39e612bbd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_ca0aaca13ec03159af35f290402167ea288dfc4b8b9e61c6c738b39e612bbd9f->leave($__internal_ca0aaca13ec03159af35f290402167ea288dfc4b8b9e61c6c738b39e612bbd9f_prof);

        
        $__internal_8e9724fdacc69322cd785029b5ad536a3f66a89546ca2e9fb96eef0fcc994b80->leave($__internal_8e9724fdacc69322cd785029b5ad536a3f66a89546ca2e9fb96eef0fcc994b80_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c490cd109898e80cf6956f4edf52488d377686bbdaeb5084ac7a7c79f4e9cd69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c490cd109898e80cf6956f4edf52488d377686bbdaeb5084ac7a7c79f4e9cd69->enter($__internal_c490cd109898e80cf6956f4edf52488d377686bbdaeb5084ac7a7c79f4e9cd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_f7d0f6211da361e3655a9a7986f4135cd3fb3366f69024b61e14dcb11368a4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f7d0f6211da361e3655a9a7986f4135cd3fb3366f69024b61e14dcb11368a4a8->enter($__internal_f7d0f6211da361e3655a9a7986f4135cd3fb3366f69024b61e14dcb11368a4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_f7d0f6211da361e3655a9a7986f4135cd3fb3366f69024b61e14dcb11368a4a8->leave($__internal_f7d0f6211da361e3655a9a7986f4135cd3fb3366f69024b61e14dcb11368a4a8_prof);

            
            $__internal_c490cd109898e80cf6956f4edf52488d377686bbdaeb5084ac7a7c79f4e9cd69->leave($__internal_c490cd109898e80cf6956f4edf52488d377686bbdaeb5084ac7a7c79f4e9cd69_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu.html.twig");
    }
}
