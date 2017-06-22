<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_122a421d392ee59940cd35602623a009c4e28745e2205ecae7c0479634172782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_form_action_url' => array($this, 'block_sonata_form_action_url'),
            'sonata_form_attributes' => array($this, 'block_sonata_form_attributes'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
            'sonata_form_actions' => array($this, 'block_sonata_form_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72be9d1cbae03272173fb3453818d26b4acd06397cc8691aed0ed72a064b5858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72be9d1cbae03272173fb3453818d26b4acd06397cc8691aed0ed72a064b5858->enter($__internal_72be9d1cbae03272173fb3453818d26b4acd06397cc8691aed0ed72a064b5858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        $__internal_9b9dfa784ed1857bd22dae783d199c282828f90aafa4019d60b62b1ab1016fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9dfa784ed1857bd22dae783d199c282828f90aafa4019d60b62b1ab1016fc5->enter($__internal_9b9dfa784ed1857bd22dae783d199c282828f90aafa4019d60b62b1ab1016fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        // line 1
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_72be9d1cbae03272173fb3453818d26b4acd06397cc8691aed0ed72a064b5858->leave($__internal_72be9d1cbae03272173fb3453818d26b4acd06397cc8691aed0ed72a064b5858_prof);

        
        $__internal_9b9dfa784ed1857bd22dae783d199c282828f90aafa4019d60b62b1ab1016fc5->leave($__internal_9b9dfa784ed1857bd22dae783d199c282828f90aafa4019d60b62b1ab1016fc5_prof);

    }

    public function block_form($context, array $blocks = array())
    {
        $__internal_e4669acadb43aad76c1a30e46f8da4af7e1657ac7c7f45bcd77950eb7afdd266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4669acadb43aad76c1a30e46f8da4af7e1657ac7c7f45bcd77950eb7afdd266->enter($__internal_e4669acadb43aad76c1a30e46f8da4af7e1657ac7c7f45bcd77950eb7afdd266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_82acc8d8fd04bbdb1c619fffd41d3846fb7a98026414dc3be7cc69843fb1461a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82acc8d8fd04bbdb1c619fffd41d3846fb7a98026414dc3be7cc69843fb1461a->enter($__internal_82acc8d8fd04bbdb1c619fffd41d3846fb7a98026414dc3be7cc69843fb1461a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 2
        echo "    ";
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit_form.html.twig", 2);
        // line 3
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

    ";
        // line 5
        $context["url"] = (( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) ? ("edit") : ("create"));
        // line 6
        echo "
    ";
        // line 7
        if ( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))), "method")) {
            // line 8
            echo "        <div>
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 12
            echo "        <form
              ";
            // line 13
            if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 14
            echo "              role=\"form\"
              action=\"";
            // line 15
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 16
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 17
            echo "              method=\"POST\"
              ";
            // line 18
            if ( !$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 19
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 20
            echo "              >

            ";
            // line 22
            echo twig_include($this->env, $context, "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig");
            echo "

            ";
            // line 24
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 27
            echo "
            ";
            // line 28
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 60
            echo "
            ";
            // line 61
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 64
            echo "
            ";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

            ";
            // line 67
            $this->displayBlock('formactions', $context, $blocks);
            // line 111
            echo "        </form>
    ";
        }
        // line 113
        echo "
    ";
        // line 114
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

";
        
        $__internal_82acc8d8fd04bbdb1c619fffd41d3846fb7a98026414dc3be7cc69843fb1461a->leave($__internal_82acc8d8fd04bbdb1c619fffd41d3846fb7a98026414dc3be7cc69843fb1461a_prof);

        
        $__internal_e4669acadb43aad76c1a30e46f8da4af7e1657ac7c7f45bcd77950eb7afdd266->leave($__internal_e4669acadb43aad76c1a30e46f8da4af7e1657ac7c7f45bcd77950eb7afdd266_prof);

    }

    // line 15
    public function block_sonata_form_action_url($context, array $blocks = array())
    {
        $__internal_c34585300597609afbfff041084222d7f7129da8fd4c8fb365796d5d447121d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34585300597609afbfff041084222d7f7129da8fd4c8fb365796d5d447121d2->enter($__internal_c34585300597609afbfff041084222d7f7129da8fd4c8fb365796d5d447121d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        $__internal_e583753eb407b6ef4b01c4a3d1ab0cc1eec6ebf18a8955569b3f73c55ad300e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e583753eb407b6ef4b01c4a3d1ab0cc1eec6ebf18a8955569b3f73c55ad300e2->enter($__internal_e583753eb407b6ef4b01c4a3d1ab0cc1eec6ebf18a8955569b3f73c55ad300e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        
        $__internal_e583753eb407b6ef4b01c4a3d1ab0cc1eec6ebf18a8955569b3f73c55ad300e2->leave($__internal_e583753eb407b6ef4b01c4a3d1ab0cc1eec6ebf18a8955569b3f73c55ad300e2_prof);

        
        $__internal_c34585300597609afbfff041084222d7f7129da8fd4c8fb365796d5d447121d2->leave($__internal_c34585300597609afbfff041084222d7f7129da8fd4c8fb365796d5d447121d2_prof);

    }

    // line 19
    public function block_sonata_form_attributes($context, array $blocks = array())
    {
        $__internal_1e2acfd53674e1476677bcfbe328e6fa3a6aa3d54c6daefc2a6668c58a814e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2acfd53674e1476677bcfbe328e6fa3a6aa3d54c6daefc2a6668c58a814e61->enter($__internal_1e2acfd53674e1476677bcfbe328e6fa3a6aa3d54c6daefc2a6668c58a814e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        $__internal_15f3fdcb52dd99b4132dd4588ae767c859097a957716f867e91d0d830701f6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f3fdcb52dd99b4132dd4588ae767c859097a957716f867e91d0d830701f6c5->enter($__internal_15f3fdcb52dd99b4132dd4588ae767c859097a957716f867e91d0d830701f6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        
        $__internal_15f3fdcb52dd99b4132dd4588ae767c859097a957716f867e91d0d830701f6c5->leave($__internal_15f3fdcb52dd99b4132dd4588ae767c859097a957716f867e91d0d830701f6c5_prof);

        
        $__internal_1e2acfd53674e1476677bcfbe328e6fa3a6aa3d54c6daefc2a6668c58a814e61->leave($__internal_1e2acfd53674e1476677bcfbe328e6fa3a6aa3d54c6daefc2a6668c58a814e61_prof);

    }

    // line 24
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        $__internal_e79e3aab39357d10de60b554d3d910c0fa1663988d44e355fd2c603fd7182577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79e3aab39357d10de60b554d3d910c0fa1663988d44e355fd2c603fd7182577->enter($__internal_e79e3aab39357d10de60b554d3d910c0fa1663988d44e355fd2c603fd7182577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        $__internal_19cabff8f7dd5c8f302f74e740b5fcfc6cd6cbf2105143b3c6cf2e1f079a40db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19cabff8f7dd5c8f302f74e740b5fcfc6cd6cbf2105143b3c6cf2e1f079a40db->enter($__internal_19cabff8f7dd5c8f302f74e740b5fcfc6cd6cbf2105143b3c6cf2e1f079a40db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 25
        echo "                <div class=\"row\">
            ";
        
        $__internal_19cabff8f7dd5c8f302f74e740b5fcfc6cd6cbf2105143b3c6cf2e1f079a40db->leave($__internal_19cabff8f7dd5c8f302f74e740b5fcfc6cd6cbf2105143b3c6cf2e1f079a40db_prof);

        
        $__internal_e79e3aab39357d10de60b554d3d910c0fa1663988d44e355fd2c603fd7182577->leave($__internal_e79e3aab39357d10de60b554d3d910c0fa1663988d44e355fd2c603fd7182577_prof);

    }

    // line 28
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        $__internal_3b16839208cf5c5f05f6d6f8e08b513362c4041e4fb86e50bea4cbacb5f86213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b16839208cf5c5f05f6d6f8e08b513362c4041e4fb86e50bea4cbacb5f86213->enter($__internal_3b16839208cf5c5f05f6d6f8e08b513362c4041e4fb86e50bea4cbacb5f86213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        $__internal_1b6e4e339076c59933f88eec42f0be0797e8238b5f0685c4980c30164ee08fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6e4e339076c59933f88eec42f0be0797e8238b5f0685c4980c30164ee08fda->enter($__internal_1b6e4e339076c59933f88eec42f0be0797e8238b5f0685c4980c30164ee08fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 29
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())) > 1));
        // line 30
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 32
        if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
            // line 33
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 36
                echo "                                    <li";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#tab_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), (($this->getAttribute($context["form_tab"], "translation_domain", array())) ? ($this->getAttribute($context["form_tab"], "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 41
                echo "                                    <div class=\"tab-pane fade";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\" id=\"tab_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 44
                if (($this->getAttribute($context["form_tab"], "description", array()) != false)) {
                    // line 45
                    echo "                                                    <p>";
                    echo $this->getAttribute($context["form_tab"], "description", array());
                    echo "</p>
                                                ";
                }
                // line 47
                echo "
                                                ";
                // line 48
                echo $context["form_helper"]->getrender_groups((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["form_tab"], "groups", array(), "array"), (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab")));
                echo "
                                            </div>
                                        </div>
                                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 56
            echo "                        ";
            echo $context["form_helper"]->getrender_groups((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()), "default", array(), "array"), "groups", array()), (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab")));
            echo "
                    ";
        }
        // line 58
        echo "                </div>
            ";
        
        $__internal_1b6e4e339076c59933f88eec42f0be0797e8238b5f0685c4980c30164ee08fda->leave($__internal_1b6e4e339076c59933f88eec42f0be0797e8238b5f0685c4980c30164ee08fda_prof);

        
        $__internal_3b16839208cf5c5f05f6d6f8e08b513362c4041e4fb86e50bea4cbacb5f86213->leave($__internal_3b16839208cf5c5f05f6d6f8e08b513362c4041e4fb86e50bea4cbacb5f86213_prof);

    }

    // line 61
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        $__internal_8a425d7cdfd83d12d61a08c2d9592467b07eb2bd7f5477e048bfcd36e5ceacc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a425d7cdfd83d12d61a08c2d9592467b07eb2bd7f5477e048bfcd36e5ceacc1->enter($__internal_8a425d7cdfd83d12d61a08c2d9592467b07eb2bd7f5477e048bfcd36e5ceacc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        $__internal_5b349a300b4c0134687093a51ac08ebbff1f5b209d8d2aa988c53d811588016c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b349a300b4c0134687093a51ac08ebbff1f5b209d8d2aa988c53d811588016c->enter($__internal_5b349a300b4c0134687093a51ac08ebbff1f5b209d8d2aa988c53d811588016c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 62
        echo "                </div>
            ";
        
        $__internal_5b349a300b4c0134687093a51ac08ebbff1f5b209d8d2aa988c53d811588016c->leave($__internal_5b349a300b4c0134687093a51ac08ebbff1f5b209d8d2aa988c53d811588016c_prof);

        
        $__internal_8a425d7cdfd83d12d61a08c2d9592467b07eb2bd7f5477e048bfcd36e5ceacc1->leave($__internal_8a425d7cdfd83d12d61a08c2d9592467b07eb2bd7f5477e048bfcd36e5ceacc1_prof);

    }

    // line 67
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_bf90b04924f024a0e938581838c22d1fdbeccd2737c66c3f56568a7da4fadb98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf90b04924f024a0e938581838c22d1fdbeccd2737c66c3f56568a7da4fadb98->enter($__internal_bf90b04924f024a0e938581838c22d1fdbeccd2737c66c3f56568a7da4fadb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_64440fc497d42fb8e766650fee16a203c9ae429afdd24886d514d6bb799ffcc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64440fc497d42fb8e766650fee16a203c9ae429afdd24886d514d6bb799ffcc6->enter($__internal_64440fc497d42fb8e766650fee16a203c9ae429afdd24886d514d6bb799ffcc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 68
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 69
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 109
        echo "                </div>
            ";
        
        $__internal_64440fc497d42fb8e766650fee16a203c9ae429afdd24886d514d6bb799ffcc6->leave($__internal_64440fc497d42fb8e766650fee16a203c9ae429afdd24886d514d6bb799ffcc6_prof);

        
        $__internal_bf90b04924f024a0e938581838c22d1fdbeccd2737c66c3f56568a7da4fadb98->leave($__internal_bf90b04924f024a0e938581838c22d1fdbeccd2737c66c3f56568a7da4fadb98_prof);

    }

    // line 69
    public function block_sonata_form_actions($context, array $blocks = array())
    {
        $__internal_0b7de1ce019472a933aa04c114abeb97f9e2a93f200eac576e4171a1c57dc90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7de1ce019472a933aa04c114abeb97f9e2a93f200eac576e4171a1c57dc90b->enter($__internal_0b7de1ce019472a933aa04c114abeb97f9e2a93f200eac576e4171a1c57dc90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        $__internal_3bbab76c30fc9854b6fd11f38a9ccbb7dcb1031228002fe1cc9417ec2e132dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbab76c30fc9854b6fd11f38a9ccbb7dcb1031228002fe1cc9417ec2e132dd8->enter($__internal_3bbab76c30fc9854b6fd11f38a9ccbb7dcb1031228002fe1cc9417ec2e132dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        // line 70
        echo "                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isxmlhttprequest", array())) {
            // line 71
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                // line 72
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 74
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 76
            echo "                    ";
        } else {
            // line 77
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "supportsPreviewMode", array())) {
                // line 78
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                ";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 83
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                // line 84
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 86
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
                    // line 87
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 89
                echo "
                            ";
                // line 90
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 91
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 94
                echo "
                            ";
                // line 95
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 96
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 98
                echo "                        ";
            } else {
                // line 99
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit"), "method"))) {
                    // line 100
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 102
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
                    // line 103
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 105
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 107
            echo "                    ";
        }
        // line 108
        echo "                ";
        
        $__internal_3bbab76c30fc9854b6fd11f38a9ccbb7dcb1031228002fe1cc9417ec2e132dd8->leave($__internal_3bbab76c30fc9854b6fd11f38a9ccbb7dcb1031228002fe1cc9417ec2e132dd8_prof);

        
        $__internal_0b7de1ce019472a933aa04c114abeb97f9e2a93f200eac576e4171a1c57dc90b->leave($__internal_0b7de1ce019472a933aa04c114abeb97f9e2a93f200eac576e4171a1c57dc90b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  525 => 108,  522 => 107,  516 => 105,  510 => 103,  507 => 102,  501 => 100,  498 => 99,  495 => 98,  487 => 96,  485 => 95,  482 => 94,  475 => 92,  470 => 91,  468 => 90,  465 => 89,  459 => 87,  457 => 86,  451 => 84,  448 => 83,  442 => 80,  438 => 78,  435 => 77,  432 => 76,  426 => 74,  420 => 72,  417 => 71,  414 => 70,  405 => 69,  394 => 109,  392 => 69,  389 => 68,  380 => 67,  369 => 62,  360 => 61,  349 => 58,  343 => 56,  338 => 53,  319 => 48,  316 => 47,  310 => 45,  308 => 44,  295 => 41,  278 => 40,  274 => 38,  249 => 36,  232 => 35,  228 => 33,  226 => 32,  222 => 30,  219 => 29,  210 => 28,  199 => 25,  190 => 24,  173 => 19,  155 => 15,  142 => 114,  139 => 113,  135 => 111,  133 => 67,  128 => 65,  125 => 64,  123 => 61,  120 => 60,  118 => 28,  115 => 27,  113 => 24,  108 => 22,  104 => 20,  101 => 19,  97 => 18,  94 => 17,  90 => 16,  86 => 15,  83 => 14,  79 => 13,  76 => 12,  70 => 9,  67 => 8,  65 => 7,  62 => 6,  60 => 5,  54 => 3,  51 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form %}
    {% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}
    {{ sonata_block_render_event('sonata.admin.edit.form.top', { 'admin': admin, 'object': object }) }}

    {% set url = admin.id(object) is not null ? 'edit' : 'create' %}

    {% if not admin.hasRoute(url)%}
        <div>
            {{ \"form_not_available\"|trans({}, \"SonataAdminBundle\") }}
        </div>
    {% else %}
        <form
              {% if sonata_admin.adminPool.getOption('form_type') == 'horizontal' %}class=\"form-horizontal\"{% endif %}
              role=\"form\"
              action=\"{% block sonata_form_action_url %}{{ admin.generateUrl(url, {'id': admin.id(object), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}{% endblock %}\"
              {% if form.vars.multipart %} enctype=\"multipart/form-data\"{% endif %}
              method=\"POST\"
              {% if not sonata_admin.adminPool.getOption('html5_validate') %}novalidate=\"novalidate\"{% endif %}
              {% block sonata_form_attributes %}{% endblock %}
              >

            {{ include('SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig') }}

            {% block sonata_pre_fieldsets %}
                <div class=\"row\">
            {% endblock %}

            {% block sonata_tab_content %}
                {% set has_tab = ((admin.formtabs|length == 1 and admin.formtabs|keys[0] != 'default') or admin.formtabs|length > 1 ) %}

                <div class=\"col-md-12\">
                    {% if has_tab %}
                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                {% for name, form_tab in admin.formtabs %}
                                    <li{% if loop.index == 1 %} class=\"active\"{% endif %}><a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> {{ name|trans({}, form_tab.translation_domain ?: admin.translationDomain) }}</a></li>
                                {% endfor %}
                            </ul>
                            <div class=\"tab-content\">
                                {% for code, form_tab in admin.formtabs %}
                                    <div class=\"tab-pane fade{% if loop.first %} in active{% endif %}\" id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                {% if form_tab.description != false %}
                                                    <p>{{ form_tab.description|raw }}</p>
                                                {% endif %}

                                                {{ form_helper.render_groups(admin, form, form_tab['groups'], has_tab) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    {% else %}
                        {{ form_helper.render_groups(admin, form, admin.formtabs['default'].groups, has_tab) }}
                    {% endif %}
                </div>
            {% endblock %}

            {% block sonata_post_fieldsets %}
                </div>
            {% endblock %}

            {{ form_rest(form) }}

            {% block formactions %}
                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                {% block sonata_form_actions %}
                    {% if app.request.isxmlhttprequest %}
                        {% if admin.id(object) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update'|trans({}, 'SonataAdminBundle') }}</button>
                        {% else %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% else %}
                        {% if admin.supportsPreviewMode %}
                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                {{ 'btn_preview'|trans({}, 'SonataAdminBundle') }}
                            </button>
                        {% endif %}
                        {% if admin.id(object) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>

                            {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_update_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}

                            {% if admin.hasRoute('delete') and admin.hasAccess('delete', object) %}
                                {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}
                                <a class=\"btn btn-danger\" href=\"{{ admin.generateObjectUrl('delete', object) }}\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}

                            {% if admin.isAclEnabled() and admin.hasRoute('acl') and admin.hasAccess('acl', object) %}
                                <a class=\"btn btn-info\" href=\"{{ admin.generateObjectUrl('acl', object) }}\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}
                        {% else %}
                            {% if admin.hasroute('edit') and admin.hasAccess('edit') %}
                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            {% if admin.hasroute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_create_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create_and_create_a_new_one'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% endif %}
                {% endblock %}
                </div>
            {% endblock formactions %}
        </form>
    {% endif%}

    {{ sonata_block_render_event('sonata.admin.edit.form.bottom', { 'admin': admin, 'object': object }) }}

{% endblock %}
", "SonataAdminBundle:CRUD:base_edit_form.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_edit_form.html.twig");
    }
}
