<?php

/* SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_a185c3d728bf2f0cd50d445fdf270460a7cb9f72c2a6066a55a5dc42bbef5dff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig", 13);
        $this->blocks = array(
            'sonata_admin_mongo_one_widget' => array($this, 'block_sonata_admin_mongo_one_widget'),
            'sonata_admin_mongo_many_widget' => array($this, 'block_sonata_admin_mongo_many_widget'),
            'sonata_admin_mongo_collection' => array($this, 'block_sonata_admin_mongo_collection'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24fa988e22ab4c07d0ca277f9828576fa460edbcea358c387c7e25371346c341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24fa988e22ab4c07d0ca277f9828576fa460edbcea358c387c7e25371346c341->enter($__internal_24fa988e22ab4c07d0ca277f9828576fa460edbcea358c387c7e25371346c341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig"));

        $__internal_fd9bd05c816b502b143cb7b9a5c77c0febe14e4d9583ce852387b5d06e10b51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9bd05c816b502b143cb7b9a5c77c0febe14e4d9583ce852387b5d06e10b51c->enter($__internal_fd9bd05c816b502b143cb7b9a5c77c0febe14e4d9583ce852387b5d06e10b51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24fa988e22ab4c07d0ca277f9828576fa460edbcea358c387c7e25371346c341->leave($__internal_24fa988e22ab4c07d0ca277f9828576fa460edbcea358c387c7e25371346c341_prof);

        
        $__internal_fd9bd05c816b502b143cb7b9a5c77c0febe14e4d9583ce852387b5d06e10b51c->leave($__internal_fd9bd05c816b502b143cb7b9a5c77c0febe14e4d9583ce852387b5d06e10b51c_prof);

    }

    // line 17
    public function block_sonata_admin_mongo_one_widget($context, array $blocks = array())
    {
        $__internal_3bf001217ca63545eab5ca93194ac7ebb0deeceedffb5c8c376930fce469e1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf001217ca63545eab5ca93194ac7ebb0deeceedffb5c8c376930fce469e1e1->enter($__internal_3bf001217ca63545eab5ca93194ac7ebb0deeceedffb5c8c376930fce469e1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_mongo_one_widget"));

        $__internal_faedacc6c93edbff61049beae53cf7d99d5a25f83d7a859d8c6a68771d492135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faedacc6c93edbff61049beae53cf7d99d5a25f83d7a859d8c6a68771d492135->enter($__internal_faedacc6c93edbff61049beae53cf7d99d5a25f83d7a859d8c6a68771d492135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_mongo_one_widget"));

        // line 18
        echo "    ";
        $this->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_one.html.twig", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig", 18)->display($context);
        
        $__internal_faedacc6c93edbff61049beae53cf7d99d5a25f83d7a859d8c6a68771d492135->leave($__internal_faedacc6c93edbff61049beae53cf7d99d5a25f83d7a859d8c6a68771d492135_prof);

        
        $__internal_3bf001217ca63545eab5ca93194ac7ebb0deeceedffb5c8c376930fce469e1e1->leave($__internal_3bf001217ca63545eab5ca93194ac7ebb0deeceedffb5c8c376930fce469e1e1_prof);

    }

    // line 21
    public function block_sonata_admin_mongo_many_widget($context, array $blocks = array())
    {
        $__internal_24046a930e88272456dd1ac6aad6d768ed1b3d508298f05a278293fe3495bca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24046a930e88272456dd1ac6aad6d768ed1b3d508298f05a278293fe3495bca9->enter($__internal_24046a930e88272456dd1ac6aad6d768ed1b3d508298f05a278293fe3495bca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_mongo_many_widget"));

        $__internal_f50f4acac1a857cad2f5f2091d3dc60a743ab3a63d7dfdd92e17157065efb669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50f4acac1a857cad2f5f2091d3dc60a743ab3a63d7dfdd92e17157065efb669->enter($__internal_f50f4acac1a857cad2f5f2091d3dc60a743ab3a63d7dfdd92e17157065efb669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_mongo_many_widget"));

        // line 22
        echo "    ";
        $this->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_many.html.twig", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig", 22)->display($context);
        
        $__internal_f50f4acac1a857cad2f5f2091d3dc60a743ab3a63d7dfdd92e17157065efb669->leave($__internal_f50f4acac1a857cad2f5f2091d3dc60a743ab3a63d7dfdd92e17157065efb669_prof);

        
        $__internal_24046a930e88272456dd1ac6aad6d768ed1b3d508298f05a278293fe3495bca9->leave($__internal_24046a930e88272456dd1ac6aad6d768ed1b3d508298f05a278293fe3495bca9_prof);

    }

    // line 25
    public function block_sonata_admin_mongo_collection($context, array $blocks = array())
    {
        $__internal_64a0473425a52705d3d2be9fac0c19e637168ecfeb353207bdef2a4976768f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a0473425a52705d3d2be9fac0c19e637168ecfeb353207bdef2a4976768f4b->enter($__internal_64a0473425a52705d3d2be9fac0c19e637168ecfeb353207bdef2a4976768f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_mongo_collection"));

        $__internal_123a925dad48743e2f60f86baa7c238b514fa54a23cfda1faff8142533c8cec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123a925dad48743e2f60f86baa7c238b514fa54a23cfda1faff8142533c8cec4->enter($__internal_123a925dad48743e2f60f86baa7c238b514fa54a23cfda1faff8142533c8cec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_mongo_collection"));

        // line 26
        echo "    ";
        $this->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_collection.html.twig", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig", 26)->display($context);
        
        $__internal_123a925dad48743e2f60f86baa7c238b514fa54a23cfda1faff8142533c8cec4->leave($__internal_123a925dad48743e2f60f86baa7c238b514fa54a23cfda1faff8142533c8cec4_prof);

        
        $__internal_64a0473425a52705d3d2be9fac0c19e637168ecfeb353207bdef2a4976768f4b->leave($__internal_64a0473425a52705d3d2be9fac0c19e637168ecfeb353207bdef2a4976768f4b_prof);

    }

    // line 29
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        $__internal_50071cd8164b09dddc5e34c602d48293fce228d7ff16cfe2ecf1216f7e8e344e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50071cd8164b09dddc5e34c602d48293fce228d7ff16cfe2ecf1216f7e8e344e->enter($__internal_50071cd8164b09dddc5e34c602d48293fce228d7ff16cfe2ecf1216f7e8e344e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_widget"));

        $__internal_519c18fa3f18ab1d90d4d1c0bc9e6fbcf7e31537bf416d513174eba8206e655b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519c18fa3f18ab1d90d4d1c0bc9e6fbcf7e31537bf416d513174eba8206e655b->enter($__internal_519c18fa3f18ab1d90d4d1c0bc9e6fbcf7e31537bf416d513174eba8206e655b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_widget"));

        // line 30
        echo "    ";
        // line 34
        echo "
    ";
        // line 36
        echo "
    ";
        // line 37
        if (twig_test_empty($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()))) {
            // line 38
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 39
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "one")) {
            // line 40
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 41
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "many")) {
            // line 42
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 44
            echo "        ";
            // line 45
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_519c18fa3f18ab1d90d4d1c0bc9e6fbcf7e31537bf416d513174eba8206e655b->leave($__internal_519c18fa3f18ab1d90d4d1c0bc9e6fbcf7e31537bf416d513174eba8206e655b_prof);

        
        $__internal_50071cd8164b09dddc5e34c602d48293fce228d7ff16cfe2ecf1216f7e8e344e->leave($__internal_50071cd8164b09dddc5e34c602d48293fce228d7ff16cfe2ecf1216f7e8e344e_prof);

    }

    // line 49
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        $__internal_e8d6326944286ba3581a85b3e3394cbf390c3fd56ebce0382d6cc429823dc568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d6326944286ba3581a85b3e3394cbf390c3fd56ebce0382d6cc429823dc568->enter($__internal_e8d6326944286ba3581a85b3e3394cbf390c3fd56ebce0382d6cc429823dc568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        $__internal_1a8b645bb1c5a7569222cf6238e18ac8939016feba1599c048f661b89d2b9a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8b645bb1c5a7569222cf6238e18ac8939016feba1599c048f661b89d2b9a21->enter($__internal_1a8b645bb1c5a7569222cf6238e18ac8939016feba1599c048f661b89d2b9a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        // line 50
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_actions_";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-actions\">
            <span id=\"field_widget_";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-short-description\">
                ";
        // line 53
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value", array())), "method")) {
            // line 54
            echo "                  
                    ";
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 58
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "code", array()), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 59
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 60
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "uniqid", array()))));
            // line 63
            echo "
                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 64
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()))) {
            // line 65
            echo "                    <span class=\"inner-field-short-description\">
                        ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </span>
                ";
        }
        // line 69
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 72
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")))) {
            // line 73
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                       onclick=\"return start_field_dialog_form_list_";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                       class=\"btn btn-info btn-sm sonata-ba-action\"
                       title=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-list\"></i>
                        ";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 82
        echo "
                ";
        // line 83
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
            // line 84
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                       onclick=\"return start_field_dialog_form_add_";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                       class=\"btn btn-success btn-sm sonata-ba-action\"
                       title=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 93
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 96
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "DELETE"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")))) {
            // line 97
            echo "                    <a href=\"\"
                       onclick=\"return remove_selected_element_";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                       class=\"btn btn-danger btn-sm sonata-ba-action\"
                       title=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 106
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">

        </div>
    </div>

    ";
        // line 118
        $this->loadTemplate("SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_association_script.html.twig", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig", 118)->display($context);
        
        $__internal_1a8b645bb1c5a7569222cf6238e18ac8939016feba1599c048f661b89d2b9a21->leave($__internal_1a8b645bb1c5a7569222cf6238e18ac8939016feba1599c048f661b89d2b9a21_prof);

        
        $__internal_e8d6326944286ba3581a85b3e3394cbf390c3fd56ebce0382d6cc429823dc568->leave($__internal_e8d6326944286ba3581a85b3e3394cbf390c3fd56ebce0382d6cc429823dc568_prof);

    }

    // line 121
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        $__internal_58842442364e98f416b39a4ffda6f13269c528ea7bebf18b469c3ead3ac60a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58842442364e98f416b39a4ffda6f13269c528ea7bebf18b469c3ead3ac60a80->enter($__internal_58842442364e98f416b39a4ffda6f13269c528ea7bebf18b469c3ead3ac60a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_admin_widget"));

        $__internal_121fa6975a86f3fd58081012fffbe5ab32552605e272f5ffd6fece24ac4573e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121fa6975a86f3fd58081012fffbe5ab32552605e272f5ffd6fece24ac4573e6->enter($__internal_121fa6975a86f3fd58081012fffbe5ab32552605e272f5ffd6fece24ac4573e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_admin_widget"));

        // line 122
        echo "    ";
        // line 123
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "one")) {
            // line 124
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 125
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "many")) {
            // line 126
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 128
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_121fa6975a86f3fd58081012fffbe5ab32552605e272f5ffd6fece24ac4573e6->leave($__internal_121fa6975a86f3fd58081012fffbe5ab32552605e272f5ffd6fece24ac4573e6_prof);

        
        $__internal_58842442364e98f416b39a4ffda6f13269c528ea7bebf18b469c3ead3ac60a80->leave($__internal_58842442364e98f416b39a4ffda6f13269c528ea7bebf18b469c3ead3ac60a80_prof);

    }

    // line 132
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        $__internal_5de76c54093ac191f58651d41265a2c1d1cf31d8216a676ab89f5959d9d5fd81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de76c54093ac191f58651d41265a2c1d1cf31d8216a676ab89f5959d9d5fd81->enter($__internal_5de76c54093ac191f58651d41265a2c1d1cf31d8216a676ab89f5959d9d5fd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_collection_widget"));

        $__internal_b19d6b3874b695f6a379878754b428c694b9008bd57de2395218e7648676446c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19d6b3874b695f6a379878754b428c694b9008bd57de2395218e7648676446c->enter($__internal_b19d6b3874b695f6a379878754b428c694b9008bd57de2395218e7648676446c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_collection_widget"));

        // line 133
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == "many")) {
            // line 134
            echo "        ";
            $this->displayBlock("sonata_admin_mongo_collection", $context, $blocks);
            echo "
    ";
        } else {
            // line 136
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b19d6b3874b695f6a379878754b428c694b9008bd57de2395218e7648676446c->leave($__internal_b19d6b3874b695f6a379878754b428c694b9008bd57de2395218e7648676446c_prof);

        
        $__internal_5de76c54093ac191f58651d41265a2c1d1cf31d8216a676ab89f5959d9d5fd81->leave($__internal_5de76c54093ac191f58651d41265a2c1d1cf31d8216a676ab89f5959d9d5fd81_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 136,  373 => 134,  370 => 133,  361 => 132,  347 => 128,  341 => 126,  339 => 125,  334 => 124,  331 => 123,  329 => 122,  320 => 121,  310 => 118,  302 => 113,  296 => 110,  290 => 106,  284 => 103,  278 => 100,  273 => 98,  270 => 97,  268 => 96,  263 => 93,  257 => 90,  251 => 87,  246 => 85,  241 => 84,  239 => 83,  236 => 82,  230 => 79,  224 => 76,  219 => 74,  214 => 73,  212 => 72,  207 => 69,  201 => 66,  198 => 65,  196 => 64,  193 => 63,  191 => 60,  190 => 59,  189 => 58,  188 => 55,  185 => 54,  183 => 53,  179 => 52,  175 => 51,  170 => 50,  161 => 49,  147 => 45,  145 => 44,  139 => 42,  137 => 41,  132 => 40,  130 => 39,  125 => 38,  123 => 37,  120 => 36,  117 => 34,  115 => 30,  106 => 29,  95 => 26,  86 => 25,  75 => 22,  66 => 21,  55 => 18,  46 => 17,  11 => 13,);
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
(c) Kévin Dunglas <dunglas@gmail.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:Form:form_admin_fields.html.twig' %}


{# Custom Sonata Admin Extension #}
{% block sonata_admin_mongo_one_widget %}
    {% include 'SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_one.html.twig' %}
{% endblock %}

{% block sonata_admin_mongo_many_widget %}
    {% include 'SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_many.html.twig' %}
{% endblock %}

{% block sonata_admin_mongo_collection %}
    {% include 'SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_collection.html.twig' %}
{% endblock %}

{% block sonata_type_model_widget %}
    {#
        This is not the best way to do if
        TODO : improve this part
    #}

    {#model {{ sonata_admin.field_description.mappingtype }}#}

    {% if sonata_admin.field_description is empty %}
        {{ block('choice_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == 'one' %}
        {{ block('sonata_admin_mongo_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == 'many' %}
        {{ block('sonata_admin_mongo_many_widget') }}
    {% else %}
        {#INVALID MODE : {{ id }}#}
        {{ block('choice_widget') }}
    {% endif %}
{% endblock %}

{% block sonata_type_model_list_widget %}
    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        <span id=\"field_actions_{{ id }}\" class=\"field-actions\">
            <span id=\"field_widget_{{ id }}\" class=\"field-short-description\">
                {% if sonata_admin.field_description.associationadmin.id(sonata_admin.value) %}
                  
                    {{render(url
                            ('sonata_admin_short_object_information', 
                        {
                        'code':     sonata_admin.field_description.associationadmin.code,
                        'objectId': sonata_admin.field_description.associationadmin.id(sonata_admin.value),
                        'uniqid':   sonata_admin.field_description.associationadmin.uniqid
                        }
                    ))
}}
                {% elseif sonata_admin.field_description.options.placeholder is defined and sonata_admin.field_description.options.placeholder %}
                    <span class=\"inner-field-short-description\">
                        {{ sonata_admin.field_description.options.placeholder|trans({}, 'SonataAdminBundle') }}
                    </span>
                {% endif %}
            </span>

            <span class=\"btn-group\">
                {% if sonata_admin.field_description.associationadmin.hasroute('list') and sonata_admin.field_description.associationadmin.isGranted('LIST') and btn_list %}
                    <a href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('list') }}\"
                       onclick=\"return start_field_dialog_form_list_{{ id }}(this);\"
                       class=\"btn btn-info btn-sm sonata-ba-action\"
                       title=\"{{ btn_list|trans({}, btn_catalogue) }}\"
                            >
                        <i class=\"fa fa-list\"></i>
                        {{ btn_list|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}

                {% if sonata_admin.field_description.associationadmin.hasroute('create') and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}
                    <a href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create') }}\"
                       onclick=\"return start_field_dialog_form_add_{{ id }}(this);\"
                       class=\"btn btn-success btn-sm sonata-ba-action\"
                       title=\"{{ btn_add|trans({}, btn_catalogue) }}\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        {{ btn_add|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
            </span>

            <span class=\"btn-group\">
                {% if sonata_admin.field_description.associationadmin.hasRoute('delete') and sonata_admin.field_description.associationadmin.isGranted('DELETE') and btn_delete %}
                    <a href=\"\"
                       onclick=\"return remove_selected_element_{{ id }}(this);\"
                       class=\"btn btn-danger btn-sm sonata-ba-action\"
                       title=\"{{ btn_delete|trans({}, btn_catalogue) }}\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        {{ btn_delete|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
            </span>
        </span>

        <span style=\"display: none\" >
            {{ form_widget(form) }}
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_{{ id }}\">

        </div>
    </div>

    {% include 'SonataDoctrineMongoDBAdminBundle:CRUD:edit_mongo_association_script.html.twig' %}
{% endblock %}

{% block sonata_type_admin_widget %}
    {#admin {{ sonata_admin.field_description.mappingtype }}#}
    {% if sonata_admin.field_description.mappingtype == 'one' %}
        {{ block('sonata_admin_mongo_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == 'many' %}
        {{ block('sonata_admin_mongo_many_widget') }}
    {% else %}
        INVALID MODE : {{ id }}
    {% endif %}
{% endblock %}

{% block sonata_type_collection_widget %}
    {% if sonata_admin.field_description.mappingtype == 'many' %}
        {{ block('sonata_admin_mongo_collection') }}
    {% else %}
        INVALID MODE : {{ id }} - type : sonata_type_collection - mapping : {{ sonata_admin.field_description.mappingtype }}
    {% endif %}
{% endblock %}
", "SonataDoctrineMongoDBAdminBundle:Form:form_admin_fields.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\doctrine-mongodb-admin-bundle\\Sonata\\DoctrineMongoDBAdminBundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
