<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_49c74caadd6c111265355f75a1147a2a6593400f706b00fed7693d2ae44e1d65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'no_result_content' => array($this, 'block_no_result_content'),
            'list_footer' => array($this, 'block_list_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
            'sonata_list_filter_group_class' => array($this, 'block_sonata_list_filter_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_368a3f2022b645fc3f04d985aabdd46fd078105a2feb9c279d3bfd3e2224202a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368a3f2022b645fc3f04d985aabdd46fd078105a2feb9c279d3bfd3e2224202a->enter($__internal_368a3f2022b645fc3f04d985aabdd46fd078105a2feb9c279d3bfd3e2224202a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $__internal_13100bfa481b6c0b8ab45f65b5de54aafa0f8a808c2f4e86bf292c17f968bcf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13100bfa481b6c0b8ab45f65b5de54aafa0f8a808c2f4e86bf292c17f968bcf4->enter($__internal_13100bfa481b6c0b8ab45f65b5de54aafa0f8a808c2f4e86bf292c17f968bcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_368a3f2022b645fc3f04d985aabdd46fd078105a2feb9c279d3bfd3e2224202a->leave($__internal_368a3f2022b645fc3f04d985aabdd46fd078105a2feb9c279d3bfd3e2224202a_prof);

        
        $__internal_13100bfa481b6c0b8ab45f65b5de54aafa0f8a808c2f4e86bf292c17f968bcf4->leave($__internal_13100bfa481b6c0b8ab45f65b5de54aafa0f8a808c2f4e86bf292c17f968bcf4_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_74f12acb73fd9fd1a489b81b7f3e2fd518a9bbb6aebf86578ba2e241ebae582c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f12acb73fd9fd1a489b81b7f3e2fd518a9bbb6aebf86578ba2e241ebae582c->enter($__internal_74f12acb73fd9fd1a489b81b7f3e2fd518a9bbb6aebf86578ba2e241ebae582c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_e8418981eebe122d3ceb2d36cfb7acb437f9b1271ff4d26d57a13e718a684837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8418981eebe122d3ceb2d36cfb7acb437f9b1271ff4d26d57a13e718a684837->enter($__internal_e8418981eebe122d3ceb2d36cfb7acb437f9b1271ff4d26d57a13e718a684837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 15)->display($context);
        
        $__internal_e8418981eebe122d3ceb2d36cfb7acb437f9b1271ff4d26d57a13e718a684837->leave($__internal_e8418981eebe122d3ceb2d36cfb7acb437f9b1271ff4d26d57a13e718a684837_prof);

        
        $__internal_74f12acb73fd9fd1a489b81b7f3e2fd518a9bbb6aebf86578ba2e241ebae582c->leave($__internal_74f12acb73fd9fd1a489b81b7f3e2fd518a9bbb6aebf86578ba2e241ebae582c_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_bceae3dcb5840941506f61d2b075e971f4a296f3036f3fc39967728c12bbf0bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bceae3dcb5840941506f61d2b075e971f4a296f3036f3fc39967728c12bbf0bc->enter($__internal_bceae3dcb5840941506f61d2b075e971f4a296f3036f3fc39967728c12bbf0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_be7b0d5e6b19a6e238b7dee67cae074602c7a464a44ce8d69a0b5519be52f754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7b0d5e6b19a6e238b7dee67cae074602c7a464a44ce8d69a0b5519be52f754->enter($__internal_be7b0d5e6b19a6e238b7dee67cae074602c7a464a44ce8d69a0b5519be52f754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_be7b0d5e6b19a6e238b7dee67cae074602c7a464a44ce8d69a0b5519be52f754->leave($__internal_be7b0d5e6b19a6e238b7dee67cae074602c7a464a44ce8d69a0b5519be52f754_prof);

        
        $__internal_bceae3dcb5840941506f61d2b075e971f4a296f3036f3fc39967728c12bbf0bc->leave($__internal_bceae3dcb5840941506f61d2b075e971f4a296f3036f3fc39967728c12bbf0bc_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_1971e69a637473693847aacd0602bf0ae239b1951fa6e215b9bd0988622b72e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1971e69a637473693847aacd0602bf0ae239b1951fa6e215b9bd0988622b72e2->enter($__internal_1971e69a637473693847aacd0602bf0ae239b1951fa6e215b9bd0988622b72e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_afdcc4328e01d728c38f7c1cfb2c7badbf3e0f587ee78b9eafdcb904a5e7d478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdcc4328e01d728c38f7c1cfb2c7badbf3e0f587ee78b9eafdcb904a5e7d478->enter($__internal_afdcc4328e01d728c38f7c1cfb2c7badbf3e0f587ee78b9eafdcb904a5e7d478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 21
        echo "    ";
        // line 25
        echo "
    ";
        // line 26
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "parent", array()), "subject", array()))) {
            // line 27
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "parent", array()), "toString", array(0 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "parent", array()), "subject", array())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_afdcc4328e01d728c38f7c1cfb2c7badbf3e0f587ee78b9eafdcb904a5e7d478->leave($__internal_afdcc4328e01d728c38f7c1cfb2c7badbf3e0f587ee78b9eafdcb904a5e7d478_prof);

        
        $__internal_1971e69a637473693847aacd0602bf0ae239b1951fa6e215b9bd0988622b72e2->leave($__internal_1971e69a637473693847aacd0602bf0ae239b1951fa6e215b9bd0988622b72e2_prof);

    }

    // line 31
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_0d47f140307e75533f55431f11bae3f6bc237da18e8bc2e1b046da8e0229eef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d47f140307e75533f55431f11bae3f6bc237da18e8bc2e1b046da8e0229eef8->enter($__internal_0d47f140307e75533f55431f11bae3f6bc237da18e8bc2e1b046da8e0229eef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_5ce8efe5b5ae4921c7939eb7d7cacbc8026c210916ae07f732aea47d0ca9ddc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce8efe5b5ae4921c7939eb7d7cacbc8026c210916ae07f732aea47d0ca9ddc4->enter($__internal_5ce8efe5b5ae4921c7939eb7d7cacbc8026c210916ae07f732aea47d0ca9ddc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 32
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5ce8efe5b5ae4921c7939eb7d7cacbc8026c210916ae07f732aea47d0ca9ddc4->leave($__internal_5ce8efe5b5ae4921c7939eb7d7cacbc8026c210916ae07f732aea47d0ca9ddc4_prof);

        
        $__internal_0d47f140307e75533f55431f11bae3f6bc237da18e8bc2e1b046da8e0229eef8->leave($__internal_0d47f140307e75533f55431f11bae3f6bc237da18e8bc2e1b046da8e0229eef8_prof);

    }

    // line 35
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_42a72828690e20310adbf0a7e3a01c2dcca041bbcba57c07eda272570ae1ffbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42a72828690e20310adbf0a7e3a01c2dcca041bbcba57c07eda272570ae1ffbb->enter($__internal_42a72828690e20310adbf0a7e3a01c2dcca041bbcba57c07eda272570ae1ffbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        $__internal_f53374032267b2a55b76fe0fd1354ece5f35b5dc2a6039664ca9bf3ee743ccf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53374032267b2a55b76fe0fd1354ece5f35b5dc2a6039664ca9bf3ee743ccf2->enter($__internal_f53374032267b2a55b76fe0fd1354ece5f35b5dc2a6039664ca9bf3ee743ccf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 36
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 37
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 38
        echo "        ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))))) {
            // line 39
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\">
        ";
        }
        // line 42
        echo "
        ";
        // line 44
        echo "        <div class=\"box box-primary\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 45
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 46
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "

                ";
        // line 48
        $this->displayBlock('list_header', $context, $blocks);
        // line 49
        echo "
                ";
        // line 50
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 51
            echo "                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        ";
            // line 52
            $this->displayBlock('table_header', $context, $blocks);
            // line 88
            echo "
                        ";
            // line 89
            $this->displayBlock('table_body', $context, $blocks);
            // line 94
            echo "
                        ";
            // line 95
            $this->displayBlock('table_footer', $context, $blocks);
            // line 97
            echo "                    </table>
                ";
        } else {
            // line 99
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 117
            echo "                ";
        }
        // line 118
        echo "
                ";
        // line 119
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "
            </div>
            ";
        // line 121
        $this->displayBlock('list_footer', $context, $blocks);
        // line 221
        echo "        </div>
        ";
        // line 222
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))))) {
            // line 223
            echo "            </form>
        ";
        }
        // line 225
        echo "    </div>
";
        
        $__internal_f53374032267b2a55b76fe0fd1354ece5f35b5dc2a6039664ca9bf3ee743ccf2->leave($__internal_f53374032267b2a55b76fe0fd1354ece5f35b5dc2a6039664ca9bf3ee743ccf2_prof);

        
        $__internal_42a72828690e20310adbf0a7e3a01c2dcca041bbcba57c07eda272570ae1ffbb->leave($__internal_42a72828690e20310adbf0a7e3a01c2dcca041bbcba57c07eda272570ae1ffbb_prof);

    }

    // line 48
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_87c71e9578c36796e35a0a82a7d7ca8b78f7c34c55d69bf7d4aaf10fe2001ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c71e9578c36796e35a0a82a7d7ca8b78f7c34c55d69bf7d4aaf10fe2001ca6->enter($__internal_87c71e9578c36796e35a0a82a7d7ca8b78f7c34c55d69bf7d4aaf10fe2001ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        $__internal_4c3230144772fc94b6b0194a7d7bb9006a2d5ef4ba04fd83d28621fcbde77ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3230144772fc94b6b0194a7d7bb9006a2d5ef4ba04fd83d28621fcbde77ea8->enter($__internal_4c3230144772fc94b6b0194a7d7bb9006a2d5ef4ba04fd83d28621fcbde77ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_4c3230144772fc94b6b0194a7d7bb9006a2d5ef4ba04fd83d28621fcbde77ea8->leave($__internal_4c3230144772fc94b6b0194a7d7bb9006a2d5ef4ba04fd83d28621fcbde77ea8_prof);

        
        $__internal_87c71e9578c36796e35a0a82a7d7ca8b78f7c34c55d69bf7d4aaf10fe2001ca6->leave($__internal_87c71e9578c36796e35a0a82a7d7ca8b78f7c34c55d69bf7d4aaf10fe2001ca6_prof);

    }

    // line 52
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_61d796080590dfe8a76eeae66f79062fa3de6b09ba45692f1b77b47c0efb02bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d796080590dfe8a76eeae66f79062fa3de6b09ba45692f1b77b47c0efb02bf->enter($__internal_61d796080590dfe8a76eeae66f79062fa3de6b09ba45692f1b77b47c0efb02bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        $__internal_aface8fbb8b4a8ac1827e9ecdd758c664fa0cbe6b28e2dbf454951d4c1cf2fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aface8fbb8b4a8ac1827e9ecdd758c664fa0cbe6b28e2dbf454951d4c1cf2fac->enter($__internal_aface8fbb8b4a8ac1827e9ecdd758c664fa0cbe6b28e2dbf454951d4c1cf2fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 53
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 56
            echo "                                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 57
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute(            // line 60
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 61
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute(            // line 62
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 63
                echo "                                            ";
                // line 64
                echo "                                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 65
                echo "                                            ";
                // line 66
                echo "                                        ";
            } else {
                // line 67
                echo "                                            ";
                $context["sortable"] = false;
                // line 68
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 69
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 70
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 71
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 72
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 73
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 74
                    echo "                                            ";
                }
                // line 75
                echo "
                                            ";
                // line 76
                ob_start();
                // line 77
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_class", array()), "html", null, true);
                }
                echo "\"";
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_style", array(), "any", true, true)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_style", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 78
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 79
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["field_description"], "label", array()), array(), $this->getAttribute($context["field_description"], "translationDomain", array())), "html", null, true);
                echo "
                                                    ";
                // line 80
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 81
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 83
                echo "                                        ";
            }
            // line 84
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_aface8fbb8b4a8ac1827e9ecdd758c664fa0cbe6b28e2dbf454951d4c1cf2fac->leave($__internal_aface8fbb8b4a8ac1827e9ecdd758c664fa0cbe6b28e2dbf454951d4c1cf2fac_prof);

        
        $__internal_61d796080590dfe8a76eeae66f79062fa3de6b09ba45692f1b77b47c0efb02bf->leave($__internal_61d796080590dfe8a76eeae66f79062fa3de6b09ba45692f1b77b47c0efb02bf_prof);

    }

    // line 89
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_b8d6cabb17304f244aed316f47e584112e57222ab375359e39403501f52d7a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d6cabb17304f244aed316f47e584112e57222ab375359e39403501f52d7a91->enter($__internal_b8d6cabb17304f244aed316f47e584112e57222ab375359e39403501f52d7a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_13c188604be7534363aea28829148699646e3aa15f65adf051959370eac57099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c188604be7534363aea28829148699646e3aa15f65adf051959370eac57099->enter($__internal_13c188604be7534363aea28829148699646e3aa15f65adf051959370eac57099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 90
        echo "                            <tbody>
                                ";
        // line 91
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => ("outer_list_rows_" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method"))), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 91)->display($context);
        // line 92
        echo "                            </tbody>
                        ";
        
        $__internal_13c188604be7534363aea28829148699646e3aa15f65adf051959370eac57099->leave($__internal_13c188604be7534363aea28829148699646e3aa15f65adf051959370eac57099_prof);

        
        $__internal_b8d6cabb17304f244aed316f47e584112e57222ab375359e39403501f52d7a91->leave($__internal_b8d6cabb17304f244aed316f47e584112e57222ab375359e39403501f52d7a91_prof);

    }

    // line 95
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_140a8fe51ef2e86a1fda1a9a9b12ed96c6e3a1d5df4edda627c6ab5b2a022cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140a8fe51ef2e86a1fda1a9a9b12ed96c6e3a1d5df4edda627c6ab5b2a022cad->enter($__internal_140a8fe51ef2e86a1fda1a9a9b12ed96c6e3a1d5df4edda627c6ab5b2a022cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_460f09666bce60de0356b434e34d7f2551174ec3fb85f7623e62347510e6cb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460f09666bce60de0356b434e34d7f2551174ec3fb85f7623e62347510e6cb0a->enter($__internal_460f09666bce60de0356b434e34d7f2551174ec3fb85f7623e62347510e6cb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 96
        echo "                        ";
        
        $__internal_460f09666bce60de0356b434e34d7f2551174ec3fb85f7623e62347510e6cb0a->leave($__internal_460f09666bce60de0356b434e34d7f2551174ec3fb85f7623e62347510e6cb0a_prof);

        
        $__internal_140a8fe51ef2e86a1fda1a9a9b12ed96c6e3a1d5df4edda627c6ab5b2a022cad->leave($__internal_140a8fe51ef2e86a1fda1a9a9b12ed96c6e3a1d5df4edda627c6ab5b2a022cad_prof);

    }

    // line 99
    public function block_no_result_content($context, array $blocks = array())
    {
        $__internal_2b0df63df7a0ac8573db43ad14458f6c8feef19a0f5a20311cab84a6864affc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0df63df7a0ac8573db43ad14458f6c8feef19a0f5a20311cab84a6864affc5->enter($__internal_2b0df63df7a0ac8573db43ad14458f6c8feef19a0f5a20311cab84a6864affc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        $__internal_ae3e90a12a0c7a32c35bd2e9e37aeb567a23c57fca4360782f92fdb1ecce1153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3e90a12a0c7a32c35bd2e9e37aeb567a23c57fca4360782f92fdb1ecce1153->enter($__internal_ae3e90a12a0c7a32c35bd2e9e37aeb567a23c57fca4360782f92fdb1ecce1153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        // line 100
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    ";
        // line 108
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "xmlHttpRequest", array())) {
            // line 109
            echo "                                    <ul class=\"list-unstyled\">
                                        ";
            // line 110
            $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 110)->display($context);
            // line 111
            echo "                                    </ul>
                                    ";
        }
        // line 113
        echo "                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
        
        $__internal_ae3e90a12a0c7a32c35bd2e9e37aeb567a23c57fca4360782f92fdb1ecce1153->leave($__internal_ae3e90a12a0c7a32c35bd2e9e37aeb567a23c57fca4360782f92fdb1ecce1153_prof);

        
        $__internal_2b0df63df7a0ac8573db43ad14458f6c8feef19a0f5a20311cab84a6864affc5->leave($__internal_2b0df63df7a0ac8573db43ad14458f6c8feef19a0f5a20311cab84a6864affc5_prof);

    }

    // line 121
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_3ed1082f6daed4fba1c5cfd64750d57ab10893d483446ab00102656e2e7faaa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed1082f6daed4fba1c5cfd64750d57ab10893d483446ab00102656e2e7faaa1->enter($__internal_3ed1082f6daed4fba1c5cfd64750d57ab10893d483446ab00102656e2e7faaa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        $__internal_24dacbb79e1025165a277dc0dbfafea7372ccfb80f9194352ea5974e186ffd00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24dacbb79e1025165a277dc0dbfafea7372ccfb80f9194352ea5974e186ffd00->enter($__internal_24dacbb79e1025165a277dc0dbfafea7372ccfb80f9194352ea5974e186ffd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        // line 122
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 123
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 125
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
                // line 126
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 127
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                    // line 128
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 175
                    echo "                                    ";
                }
                // line 176
                echo "                                </div>


                                ";
                // line 180
                echo "                                ";
                $context["export_formats"] = ((array_key_exists("export_formats", $context)) ? (_twig_default_filter((isset($context["export_formats"]) ? $context["export_formats"] : $this->getContext($context, "export_formats")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "exportFormats", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "exportFormats", array())));
                // line 181
                echo "
                                <div class=\"pull-right\">
                                    ";
                // line 183
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "export"), "method")) && twig_length_filter($this->env, (isset($context["export_formats"]) ? $context["export_formats"] : $this->getContext($context, "export_formats"))))) {
                    // line 184
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                ";
                    // line 187
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 191
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["export_formats"]) ? $context["export_formats"] : $this->getContext($context, "export_formats")));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 192
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 193
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 195
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("export_format_" . $context["format"]), array(), "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                <li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 204
                echo "
                                    ";
                // line 205
                $this->displayBlock('pager_results', $context, $blocks);
                // line 208
                echo "                                </div>
                            ";
            }
            // line 210
            echo "                        </div>

                        ";
            // line 212
            $this->displayBlock('pager_links', $context, $blocks);
            // line 218
            echo "                    </div>
                ";
        }
        // line 220
        echo "            ";
        
        $__internal_24dacbb79e1025165a277dc0dbfafea7372ccfb80f9194352ea5974e186ffd00->leave($__internal_24dacbb79e1025165a277dc0dbfafea7372ccfb80f9194352ea5974e186ffd00_prof);

        
        $__internal_3ed1082f6daed4fba1c5cfd64750d57ab10893d483446ab00102656e2e7faaa1->leave($__internal_3ed1082f6daed4fba1c5cfd64750d57ab10893d483446ab00102656e2e7faaa1_prof);

    }

    // line 128
    public function block_batch($context, array $blocks = array())
    {
        $__internal_fb72e618e64fcd4eed1716345e54b50a7a1abd40c7c1527b96626dbbcbe18e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb72e618e64fcd4eed1716345e54b50a7a1abd40c7c1527b96626dbbcbe18e73->enter($__internal_fb72e618e64fcd4eed1716345e54b50a7a1abd40c7c1527b96626dbbcbe18e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        $__internal_f4642c877a4c423b7174c8c1ae3c92ed398c2e18918d8025d7198606b48134e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4642c877a4c423b7174c8c1ae3c92ed398c2e18918d8025d7198606b48134e8->enter($__internal_f4642c877a4c423b7174c8c1ae3c92ed398c2e18918d8025d7198606b48134e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        // line 129
        echo "                                            <script>
                                                ";
        // line 130
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 157
        echo "                                            </script>

                                        ";
        // line 159
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 172
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_f4642c877a4c423b7174c8c1ae3c92ed398c2e18918d8025d7198606b48134e8->leave($__internal_f4642c877a4c423b7174c8c1ae3c92ed398c2e18918d8025d7198606b48134e8_prof);

        
        $__internal_fb72e618e64fcd4eed1716345e54b50a7a1abd40c7c1527b96626dbbcbe18e73->leave($__internal_fb72e618e64fcd4eed1716345e54b50a7a1abd40c7c1527b96626dbbcbe18e73_prof);

    }

    // line 130
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_a7a59f577a42e063a95101bb6e3372c57e469c4a9ba90b4d7b6f0d092508fed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7a59f577a42e063a95101bb6e3372c57e469c4a9ba90b4d7b6f0d092508fed4->enter($__internal_a7a59f577a42e063a95101bb6e3372c57e469c4a9ba90b4d7b6f0d092508fed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        $__internal_08e2baaf8f193ae38ea9003d52bbbb48c17f53daa871eaeb8383abd019abe2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e2baaf8f193ae38ea9003d52bbbb48c17f53daa871eaeb8383abd019abe2f8->enter($__internal_08e2baaf8f193ae38ea9003d52bbbb48c17f53daa871eaeb8383abd019abe2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 131
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
        
        $__internal_08e2baaf8f193ae38ea9003d52bbbb48c17f53daa871eaeb8383abd019abe2f8->leave($__internal_08e2baaf8f193ae38ea9003d52bbbb48c17f53daa871eaeb8383abd019abe2f8_prof);

        
        $__internal_a7a59f577a42e063a95101bb6e3372c57e469c4a9ba90b4d7b6f0d092508fed4->leave($__internal_a7a59f577a42e063a95101bb6e3372c57e469c4a9ba90b4d7b6f0d092508fed4_prof);

    }

    // line 159
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_6b11cb48769c944c792b0dac4b8a9c38d70b9dbb6eb0d49467674b1323b0e0f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b11cb48769c944c792b0dac4b8a9c38d70b9dbb6eb0d49467674b1323b0e0f8->enter($__internal_6b11cb48769c944c792b0dac4b8a9c38d70b9dbb6eb0d49467674b1323b0e0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_7ba809b76dcd41a9421f13b2a2cbe2c21a37e77237dce5ba2af965357db5344c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba809b76dcd41a9421f13b2a2cbe2c21a37e77237dce5ba2af965357db5344c->enter($__internal_7ba809b76dcd41a9421f13b2a2cbe2c21a37e77237dce5ba2af965357db5344c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 160
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 168
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["options"], "label", array()), array(), (($this->getAttribute($context["options"], "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["options"], "translation_domain", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                                            </select>
                                        ";
        
        $__internal_7ba809b76dcd41a9421f13b2a2cbe2c21a37e77237dce5ba2af965357db5344c->leave($__internal_7ba809b76dcd41a9421f13b2a2cbe2c21a37e77237dce5ba2af965357db5344c_prof);

        
        $__internal_6b11cb48769c944c792b0dac4b8a9c38d70b9dbb6eb0d49467674b1323b0e0f8->leave($__internal_6b11cb48769c944c792b0dac4b8a9c38d70b9dbb6eb0d49467674b1323b0e0f8_prof);

    }

    // line 205
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_df5f65468be50167f9580fa0e3faa7c02674a247cba88bd6b40bbdfd3f045a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5f65468be50167f9580fa0e3faa7c02674a247cba88bd6b40bbdfd3f045a2b->enter($__internal_df5f65468be50167f9580fa0e3faa7c02674a247cba88bd6b40bbdfd3f045a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        $__internal_159c0eff0e8cfa96498ab4eab84ba20bc56adfb2c2223a7717a58dc89c9a3e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159c0eff0e8cfa96498ab4eab84ba20bc56adfb2c2223a7717a58dc89c9a3e0f->enter($__internal_159c0eff0e8cfa96498ab4eab84ba20bc56adfb2c2223a7717a58dc89c9a3e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 206
        echo "                                        ";
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 206)->display($context);
        // line 207
        echo "                                    ";
        
        $__internal_159c0eff0e8cfa96498ab4eab84ba20bc56adfb2c2223a7717a58dc89c9a3e0f->leave($__internal_159c0eff0e8cfa96498ab4eab84ba20bc56adfb2c2223a7717a58dc89c9a3e0f_prof);

        
        $__internal_df5f65468be50167f9580fa0e3faa7c02674a247cba88bd6b40bbdfd3f045a2b->leave($__internal_df5f65468be50167f9580fa0e3faa7c02674a247cba88bd6b40bbdfd3f045a2b_prof);

    }

    // line 212
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_8c4a3149d906e4c768b90acddaa21a7afc572a2223176c26a4557c992f0b5ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4a3149d906e4c768b90acddaa21a7afc572a2223176c26a4557c992f0b5ad6->enter($__internal_8c4a3149d906e4c768b90acddaa21a7afc572a2223176c26a4557c992f0b5ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        $__internal_9fcfad5bf542fc6e41e6e78d86a07ff478cea1b0c5dc802e542929691661d00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcfad5bf542fc6e41e6e78d86a07ff478cea1b0c5dc802e542929691661d00a->enter($__internal_9fcfad5bf542fc6e41e6e78d86a07ff478cea1b0c5dc802e542929691661d00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 213
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 214
            echo "                                <hr/>
                                ";
            // line 215
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 215)->display($context);
            // line 216
            echo "                            ";
        }
        // line 217
        echo "                        ";
        
        $__internal_9fcfad5bf542fc6e41e6e78d86a07ff478cea1b0c5dc802e542929691661d00a->leave($__internal_9fcfad5bf542fc6e41e6e78d86a07ff478cea1b0c5dc802e542929691661d00a_prof);

        
        $__internal_8c4a3149d906e4c768b90acddaa21a7afc572a2223176c26a4557c992f0b5ad6->leave($__internal_8c4a3149d906e4c768b90acddaa21a7afc572a2223176c26a4557c992f0b5ad6_prof);

    }

    // line 228
    public function block_list_filters_actions($context, array $blocks = array())
    {
        $__internal_12f024e196e98136bc04505ce3702d40f18438780c063a8ffdd593046b695815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f024e196e98136bc04505ce3702d40f18438780c063a8ffdd593046b695815->enter($__internal_12f024e196e98136bc04505ce3702d40f18438780c063a8ffdd593046b695815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        $__internal_569a0a8491bdad1b0bd95ef31574dd3e328dd3a9be12bf4e913ef16edb579eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569a0a8491bdad1b0bd95ef31574dd3e328dd3a9be12bf4e913ef16edb579eb5->enter($__internal_569a0a8491bdad1b0bd95ef31574dd3e328dd3a9be12bf4e913ef16edb579eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        // line 229
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))) {
            // line 230
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) {
                    // line 240
                    echo "                        ";
                    $context["filterActive"] = (($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")) &&  !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                    // line 241
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 242
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 243
                    echo ((($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        
        $__internal_569a0a8491bdad1b0bd95ef31574dd3e328dd3a9be12bf4e913ef16edb579eb5->leave($__internal_569a0a8491bdad1b0bd95ef31574dd3e328dd3a9be12bf4e913ef16edb579eb5_prof);

        
        $__internal_12f024e196e98136bc04505ce3702d40f18438780c063a8ffdd593046b695815->leave($__internal_12f024e196e98136bc04505ce3702d40f18438780c063a8ffdd593046b695815_prof);

    }

    // line 253
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_eb1215b6e7f9f6fb5b630128199f789de422a18c0a759dab28492f4313a5a2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb1215b6e7f9f6fb5b630128199f789de422a18c0a759dab28492f4313a5a2f2->enter($__internal_eb1215b6e7f9f6fb5b630128199f789de422a18c0a759dab28492f4313a5a2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        $__internal_99e8c2bb22f75e6dbbe3acc36f510129eb7dbd6cd6dd2bf4ca1a3db8f064f393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e8c2bb22f75e6dbbe3acc36f510129eb7dbd6cd6dd2bf4ca1a3db8f064f393->enter($__internal_99e8c2bb22f75e6dbbe3acc36f510129eb7dbd6cd6dd2bf4ca1a3db8f064f393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 254
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 255
            echo "        ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "filter"), "method")));
            // line 256
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 257
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 260
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 261
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 265
            $context["withAdvancedFilter"] = false;
            // line 266
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 267
                echo "                                    ";
                $context["filterActive"] = ((($this->getAttribute($context["filter"], "isActive", array(), "method") && (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) || ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true)) &&  !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                // line 268
                echo "                                    ";
                $context["filterVisible"] = (($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")));
                // line 269
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (((isset($context["filterVisible"]) ? $context["filterVisible"] : $this->getContext($context, "filterVisible"))) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if ((isset($context["filterActive"]) ? $context["filterActive"] : $this->getContext($context, "filterActive"))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 270
                if ( !($this->getAttribute($context["filter"], "label", array()) === false)) {
                    // line 271
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 273
                echo "                                        ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 274
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 276
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr"))));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 280
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 285
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 292
                if ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "advanced_filter", array(), "array")) {
                    // line 293
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 294
                    echo "                                    ";
                }
                // line 295
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 300
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 301
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> ";
            // line 305
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 309
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 313
            if ((isset($context["withAdvancedFilter"]) ? $context["withAdvancedFilter"] : $this->getContext($context, "withAdvancedFilter"))) {
                // line 314
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 317
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 321
            echo "                            </div>
                        </div>

                        ";
            // line 324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 325
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_99e8c2bb22f75e6dbbe3acc36f510129eb7dbd6cd6dd2bf4ca1a3db8f064f393->leave($__internal_99e8c2bb22f75e6dbbe3acc36f510129eb7dbd6cd6dd2bf4ca1a3db8f064f393_prof);

        
        $__internal_eb1215b6e7f9f6fb5b630128199f789de422a18c0a759dab28492f4313a5a2f2->leave($__internal_eb1215b6e7f9f6fb5b630128199f789de422a18c0a759dab28492f4313a5a2f2_prof);

    }

    // line 269
    public function block_sonata_list_filter_group_class($context, array $blocks = array())
    {
        $__internal_37757424ab8f4e08391ad124436967427e759835b86913321dce4e40591014c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37757424ab8f4e08391ad124436967427e759835b86913321dce4e40591014c6->enter($__internal_37757424ab8f4e08391ad124436967427e759835b86913321dce4e40591014c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        $__internal_97c574de98e92c898fa4fad04e621c2c554c008eee512b91739b50ee97ec042d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c574de98e92c898fa4fad04e621c2c554c008eee512b91739b50ee97ec042d->enter($__internal_97c574de98e92c898fa4fad04e621c2c554c008eee512b91739b50ee97ec042d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        
        $__internal_97c574de98e92c898fa4fad04e621c2c554c008eee512b91739b50ee97ec042d->leave($__internal_97c574de98e92c898fa4fad04e621c2c554c008eee512b91739b50ee97ec042d_prof);

        
        $__internal_37757424ab8f4e08391ad124436967427e759835b86913321dce4e40591014c6->leave($__internal_37757424ab8f4e08391ad124436967427e759835b86913321dce4e40591014c6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1098 => 269,  1083 => 327,  1072 => 325,  1068 => 324,  1063 => 321,  1056 => 317,  1051 => 314,  1049 => 313,  1042 => 309,  1038 => 308,  1032 => 305,  1024 => 301,  1022 => 300,  1016 => 296,  1002 => 295,  999 => 294,  996 => 293,  994 => 292,  980 => 285,  972 => 280,  965 => 276,  961 => 274,  958 => 273,  950 => 271,  948 => 270,  931 => 269,  928 => 268,  925 => 267,  907 => 266,  905 => 265,  898 => 261,  892 => 260,  884 => 257,  881 => 256,  878 => 255,  875 => 254,  866 => 253,  852 => 247,  839 => 243,  831 => 242,  828 => 241,  825 => 240,  820 => 239,  813 => 235,  806 => 230,  804 => 229,  795 => 228,  785 => 217,  782 => 216,  780 => 215,  777 => 214,  774 => 213,  765 => 212,  755 => 207,  752 => 206,  743 => 205,  732 => 170,  721 => 168,  717 => 167,  710 => 163,  706 => 162,  702 => 161,  697 => 160,  688 => 159,  653 => 131,  644 => 130,  632 => 173,  629 => 172,  627 => 159,  623 => 157,  621 => 130,  618 => 129,  609 => 128,  599 => 220,  595 => 218,  593 => 212,  589 => 210,  585 => 208,  583 => 205,  580 => 204,  573 => 199,  563 => 195,  558 => 193,  555 => 192,  551 => 191,  544 => 187,  539 => 184,  537 => 183,  533 => 181,  530 => 180,  525 => 176,  522 => 175,  519 => 128,  517 => 127,  514 => 126,  512 => 125,  508 => 123,  505 => 122,  496 => 121,  483 => 113,  479 => 111,  477 => 110,  474 => 109,  472 => 108,  464 => 103,  459 => 100,  450 => 99,  440 => 96,  431 => 95,  420 => 92,  418 => 91,  415 => 90,  406 => 89,  394 => 85,  388 => 84,  385 => 83,  381 => 81,  377 => 80,  372 => 79,  366 => 78,  344 => 77,  342 => 76,  339 => 75,  336 => 74,  333 => 73,  330 => 72,  327 => 71,  324 => 70,  321 => 69,  318 => 68,  315 => 67,  312 => 66,  310 => 65,  307 => 64,  305 => 63,  303 => 62,  300 => 61,  298 => 60,  293 => 57,  290 => 56,  286 => 55,  282 => 53,  273 => 52,  256 => 48,  245 => 225,  241 => 223,  239 => 222,  236 => 221,  234 => 121,  229 => 119,  226 => 118,  223 => 117,  220 => 99,  216 => 97,  214 => 95,  211 => 94,  209 => 89,  206 => 88,  204 => 52,  201 => 51,  199 => 50,  196 => 49,  194 => 48,  189 => 46,  183 => 45,  176 => 44,  173 => 42,  168 => 40,  163 => 39,  160 => 38,  158 => 37,  155 => 36,  146 => 35,  133 => 32,  124 => 31,  110 => 27,  108 => 26,  105 => 25,  103 => 21,  94 => 20,  76 => 18,  66 => 15,  57 => 14,  36 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block title %}
    {#
        The list template can be used in nested mode,
        so we define the title corresponding to the parent's admin.
    #}

    {% if admin.isChild and admin.parent.subject %}
        {{ \"title_edit\"|trans({'%name%': admin.parent.toString(admin.parent.subject)|truncate(15) }, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{% block list_table %}
    <div class=\"col-xs-12 col-md-12\">
        {% set batchactions = admin.batchactions %}
        {% if admin.hasRoute('batch') and batchactions|length %}
            <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">
        {% endif %}

        {# Add a margin if no pager to prevent dropdown cropping on window #}
        <div class=\"box box-primary\" {% if admin.datagrid.pager.lastPage == 1 %}style=\"margin-bottom: 100px;\"{% endif %}>
            <div class=\"box-body {% if admin.datagrid.results|length > 0 %}table-responsive no-padding{% endif %}\">
                {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}

                {% block list_header %}{% endblock %}

                {% if admin.datagrid.results|length > 0 %}
                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        {% block table_header %}
                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    {% for field_description in admin.list.elements %}
                                        {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        {% elseif field_description.getOption('code') == '_select' %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}
                                            {# Action buttons disabled in ajax view! #}
                                        {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}
                                            {# Disable fields with 'ajax_hidden' option set to true #}
                                        {% else %}
                                            {% set sortable = false %}
                                            {% if field_description.options.sortable is defined and field_description.options.sortable %}
                                                {% set sortable             = true %}
                                                {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}
                                                {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}
                                                {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}
                                                {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}
                                            {% endif %}

                                            {% spaceless %}
                                                <th class=\"sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}{% if field_description.options.header_class is defined %} {{ field_description.options.header_class }}{% endif %}\"{% if field_description.options.header_style is defined %} style=\"{{ field_description.options.header_style }}\"{% endif %}>
                                                    {% if sortable %}<a href=\"{{ admin.generateUrl('list', sort_parameters) }}\">{% endif %}
                                                    {{ field_description.label|trans({}, field_description.translationDomain) }}
                                                    {% if sortable %}</a>{% endif %}
                                                </th>
                                            {% endspaceless %}
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </thead>
                        {% endblock %}

                        {% block table_body %}
                            <tbody>
                                {% include admin.getTemplate('outer_list_rows_' ~ admin.getListMode()) %}
                            </tbody>
                        {% endblock %}

                        {% block table_footer %}
                        {% endblock %}
                    </table>
                {% else %}
                    {% block no_result_content %}
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    {% if not app.request.xmlHttpRequest %}
                                    <ul class=\"list-unstyled\">
                                        {% include 'SonataAdminBundle:Button:create_button.html.twig' %}
                                    </ul>
                                    {% endif %}
                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    {% endblock %}
                {% endif %}

                {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}
            </div>
            {% block list_footer %}
                {% if admin.datagrid.results|length > 0 %}
                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            {% if not app.request.isXmlHttpRequest %}
                                <div class=\"pull-left\">
                                    {% if admin.hasRoute('batch') and batchactions|length > 0  %}
                                        {% block batch %}
                                            <script>
                                                {% block batch_javascript %}
                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                {% endblock %}
                                            </script>

                                        {% block batch_actions %}
                                            <label class=\"checkbox\" for=\"{{ admin.uniqid }}_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"{{ admin.uniqid }}_all_elements\">
                                                {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}
                                                ({{ admin.datagrid.pager.nbresults }})
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                {% for action, options in batchactions %}
                                                    <option value=\"{{ action }}\">{{ options.label|trans({}, options.translation_domain|default(admin.translationDomain)) }}</option>
                                                {% endfor %}
                                            </select>
                                        {% endblock %}

                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}\">
                                        {% endblock %}
                                    {% endif %}
                                </div>


                                {# NEXT_MAJOR : remove this assignment #}
                                {% set export_formats = export_formats|default(admin.exportFormats) %}

                                <div class=\"pull-right\">
                                    {% if admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                {{ \"label_export_download\"|trans({}, \"SonataAdminBundle\") }}
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                {% for format in export_formats %}
                                                <li>
                                                    <a href=\"{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        {{ (\"export_format_\" ~ format)|trans({}, 'SonataAdminBundle') }}
                                                    </a>
                                                <li>
                                                {% endfor %}
                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    {% endif %}

                                    {% block pager_results %}
                                        {% include admin.getTemplate('pager_results') %}
                                    {% endblock %}
                                </div>
                            {% endif %}
                        </div>

                        {% block pager_links %}
                            {% if admin.datagrid.pager.haveToPaginate() %}
                                <hr/>
                                {% include admin.getTemplate('pager_links') %}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
        {% if admin.hasRoute('batch') and batchactions|length %}
            </form>
        {% endif %}
    </div>
{% endblock %}

{% block list_filters_actions %}
    {%- if admin.datagrid.filters|length %}
        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    {{ 'link_filters'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    {% for filter in admin.datagrid.filters if (filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null) %}
                        {% set filterActive = ((filter.isActive() or filter.options['show_filter']) and not admin.isDefaultFilter(filter.formName)) %}
                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                <i class=\"fa {{ (filter.isActive() or filter.options['show_filter']) ? 'fa-check-square-o' : 'fa-square-o' }}\"></i>{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </li>
        </ul>
    {% endif -%}
{% endblock %}

{% block list_filters %}
    {% if admin.datagrid.filters %}
        {% form_theme form admin.getTemplate('filter') %}

        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: {{ admin.datagrid.hasDisplayableFilters ? 'block' : 'none' }}\" id=\"filter-container-{{ admin.uniqid() }}\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}\" action=\"{{ admin.generateUrl('list') }}\" method=\"GET\" role=\"form\">
                        {{ form_errors(form) }}

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                {% set withAdvancedFilter = false %}
                                {% for filter in admin.datagrid.filters %}
                                    {% set filterActive = ((filter.isActive() and filter.options['show_filter'] is null) or (filter.options['show_filter'] is same as(true))) and not admin.isDefaultFilter(filter.formName) %}
                                    {% set filterVisible = filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null %}
                                    <div class=\"form-group {% block sonata_list_filter_group_class %}{% endblock %}\" id=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" sonata-filter=\"{{ filterVisible ? 'true' : 'false' }}\" style=\"display: {% if filterActive %}block{% else %}none{% endif %}\">
                                        {% if filter.label is not same as(false) %}
                                            <label for=\"{{ form.children[filter.formName].children['value'].vars.id }}\" class=\"col-sm-3 control-label\">{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}</label>
                                        {% endif %}
                                        {% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}

                                        <div class=\"col-sm-4 advanced-filter\">
                                            {{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}
                                        </div>

                                        <div class=\"col-sm-4\">
                                            {{ form_widget(form.children[filter.formName].children['value']) }}
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    {% if filter.options['advanced_filter'] %}
                                        {% set withAdvancedFilter = true %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                {% set foo = form.children['_page'].setRendered() %}
                                {{ form_rest(form) }}

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}
                                    </button>

                                    <a class=\"btn btn-default\" href=\"{{ admin.generateUrl('list', {filters: 'reset'}) }}\">
                                        {{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}
                                    </a>
                                </div>

                                {% if withAdvancedFilter %}
                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            {{ 'btn_advanced_filters'|trans({}, 'SonataAdminBundle') }}
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        {% for paramKey, paramValue in admin.persistentParameters %}
                            <input type=\"hidden\" name=\"{{ paramKey }}\" value=\"{{ paramValue }}\">
                        {% endfor %}
                    </form>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_list.html.twig", "D:\\xamppNew\\htdocs\\mtl_project\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_list.html.twig");
    }
}
