<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_46cd115a297e00f654aa0ee013e4531b5d97a675b61cfa1cc8fca57482bf272a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea6697aea6a4bb5902258784bbe2363eb10c17ce85531c56db17a7901f946ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6697aea6a4bb5902258784bbe2363eb10c17ce85531c56db17a7901f946ad5->enter($__internal_ea6697aea6a4bb5902258784bbe2363eb10c17ce85531c56db17a7901f946ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $__internal_95568ae04da92ecf0e5a0635841ff10f0da0fe7ea37eae8e25537749f1eac1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95568ae04da92ecf0e5a0635841ff10f0da0fe7ea37eae8e25537749f1eac1a8->enter($__internal_95568ae04da92ecf0e5a0635841ff10f0da0fe7ea37eae8e25537749f1eac1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea6697aea6a4bb5902258784bbe2363eb10c17ce85531c56db17a7901f946ad5->leave($__internal_ea6697aea6a4bb5902258784bbe2363eb10c17ce85531c56db17a7901f946ad5_prof);

        
        $__internal_95568ae04da92ecf0e5a0635841ff10f0da0fe7ea37eae8e25537749f1eac1a8->leave($__internal_95568ae04da92ecf0e5a0635841ff10f0da0fe7ea37eae8e25537749f1eac1a8_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_dad68aecbd0e987b3c02e92906dd56867c368761f83da9268a747da74382cbfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad68aecbd0e987b3c02e92906dd56867c368761f83da9268a747da74382cbfc->enter($__internal_dad68aecbd0e987b3c02e92906dd56867c368761f83da9268a747da74382cbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_4d8accb9489a6c78d796c6cb3d8d49ce00a94b757c05f11f353ca1e3ef4809be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8accb9489a6c78d796c6cb3d8d49ce00a94b757c05f11f353ca1e3ef4809be->enter($__internal_4d8accb9489a6c78d796c6cb3d8d49ce00a94b757c05f11f353ca1e3ef4809be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 15)->display($context);
        
        $__internal_4d8accb9489a6c78d796c6cb3d8d49ce00a94b757c05f11f353ca1e3ef4809be->leave($__internal_4d8accb9489a6c78d796c6cb3d8d49ce00a94b757c05f11f353ca1e3ef4809be_prof);

        
        $__internal_dad68aecbd0e987b3c02e92906dd56867c368761f83da9268a747da74382cbfc->leave($__internal_dad68aecbd0e987b3c02e92906dd56867c368761f83da9268a747da74382cbfc_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_b54ce93d60dc372f9f0ed4ca36696dcad7fc05857dddb31a4225a6a7da81b4e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54ce93d60dc372f9f0ed4ca36696dcad7fc05857dddb31a4225a6a7da81b4e3->enter($__internal_b54ce93d60dc372f9f0ed4ca36696dcad7fc05857dddb31a4225a6a7da81b4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_e8bbc401e16f6e0c4449d0956ed700d913c12c10b854cf6a0f150187cb2eddca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8bbc401e16f6e0c4449d0956ed700d913c12c10b854cf6a0f150187cb2eddca->enter($__internal_e8bbc401e16f6e0c4449d0956ed700d913c12c10b854cf6a0f150187cb2eddca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_e8bbc401e16f6e0c4449d0956ed700d913c12c10b854cf6a0f150187cb2eddca->leave($__internal_e8bbc401e16f6e0c4449d0956ed700d913c12c10b854cf6a0f150187cb2eddca_prof);

        
        $__internal_b54ce93d60dc372f9f0ed4ca36696dcad7fc05857dddb31a4225a6a7da81b4e3->leave($__internal_b54ce93d60dc372f9f0ed4ca36696dcad7fc05857dddb31a4225a6a7da81b4e3_prof);

    }

    // line 20
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_c983b4c9f361f7808e1545e6e916a727d697bfce9339768444446534fdff545f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c983b4c9f361f7808e1545e6e916a727d697bfce9339768444446534fdff545f->enter($__internal_c983b4c9f361f7808e1545e6e916a727d697bfce9339768444446534fdff545f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        $__internal_b65ffd6d17d25766ab438b0a0afca57615dac938918e751e90d1c1800afd25d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65ffd6d17d25766ab438b0a0afca57615dac938918e751e90d1c1800afd25d0->enter($__internal_b65ffd6d17d25766ab438b0a0afca57615dac938918e751e90d1c1800afd25d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 21
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 22
        $context["batchactions"] = $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "batchactions", array());
        // line 23
        echo "        ";
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))))) {
            // line 24
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\">
        ";
        }
        // line 27
        echo "
        ";
        // line 29
        echo "        <div class=\"box box-primary\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")))));
        echo "

                ";
        // line 33
        $this->displayBlock('list_header', $context, $blocks);
        // line 34
        echo "
                ";
        // line 35
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 36
            echo "                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        ";
            // line 37
            $this->displayBlock('table_header', $context, $blocks);
            // line 73
            echo "
                        ";
            // line 74
            $this->displayBlock('table_body', $context, $blocks);
            // line 79
            echo "
                        ";
            // line 80
            $this->displayBlock('table_footer', $context, $blocks);
            // line 82
            echo "                    </table>
                ";
        } else {
            // line 84
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 100
            echo "                ";
        }
        // line 101
        echo "
                ";
        // line 102
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")))));
        echo "
            </div>
            ";
        // line 104
        $this->displayBlock('list_footer', $context, $blocks);
        // line 201
        echo "        </div>
        ";
        // line 202
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))))) {
            // line 203
            echo "            </form>
        ";
        }
        // line 205
        echo "    </div>
";
        
        $__internal_b65ffd6d17d25766ab438b0a0afca57615dac938918e751e90d1c1800afd25d0->leave($__internal_b65ffd6d17d25766ab438b0a0afca57615dac938918e751e90d1c1800afd25d0_prof);

        
        $__internal_c983b4c9f361f7808e1545e6e916a727d697bfce9339768444446534fdff545f->leave($__internal_c983b4c9f361f7808e1545e6e916a727d697bfce9339768444446534fdff545f_prof);

    }

    // line 33
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_3cc52c9f996a86e50d4736d44fab37bed916fe21d557ca12bbb9f73fc8c25a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc52c9f996a86e50d4736d44fab37bed916fe21d557ca12bbb9f73fc8c25a20->enter($__internal_3cc52c9f996a86e50d4736d44fab37bed916fe21d557ca12bbb9f73fc8c25a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        $__internal_ee77f4b2ab1b347505eb470de59ca65cdf6fc3cc93be097328c27c63b703dd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee77f4b2ab1b347505eb470de59ca65cdf6fc3cc93be097328c27c63b703dd93->enter($__internal_ee77f4b2ab1b347505eb470de59ca65cdf6fc3cc93be097328c27c63b703dd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_ee77f4b2ab1b347505eb470de59ca65cdf6fc3cc93be097328c27c63b703dd93->leave($__internal_ee77f4b2ab1b347505eb470de59ca65cdf6fc3cc93be097328c27c63b703dd93_prof);

        
        $__internal_3cc52c9f996a86e50d4736d44fab37bed916fe21d557ca12bbb9f73fc8c25a20->leave($__internal_3cc52c9f996a86e50d4736d44fab37bed916fe21d557ca12bbb9f73fc8c25a20_prof);

    }

    // line 37
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_dbb64ae33af8b7faa8dc57cf1d9d46bd58857b1f1d02ca1ebb520f5f7704aa03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb64ae33af8b7faa8dc57cf1d9d46bd58857b1f1d02ca1ebb520f5f7704aa03->enter($__internal_dbb64ae33af8b7faa8dc57cf1d9d46bd58857b1f1d02ca1ebb520f5f7704aa03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        $__internal_8bed018c9eb38449c432390b506aff9b6be2149bea75420a0ea47cd81abc132e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bed018c9eb38449c432390b506aff9b6be2149bea75420a0ea47cd81abc132e->enter($__internal_8bed018c9eb38449c432390b506aff9b6be2149bea75420a0ea47cd81abc132e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 38
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 41
            echo "                                        ";
            if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))) > 0))) {
                // line 42
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute(            // line 45
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 46
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute(            // line 47
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 48
                echo "                                            ";
                // line 49
                echo "                                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 50
                echo "                                            ";
                // line 51
                echo "                                        ";
            } else {
                // line 52
                echo "                                            ";
                $context["sortable"] = false;
                // line 53
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 54
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 55
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 56
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute(($context["sort_parameters"] ?? $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 57
                    echo "                                                ";
                    $context["sort_active_class"] = ((($context["current"] ?? $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 58
                    echo "                                                ";
                    $context["sort_by"] = ((($context["current"] ?? $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 59
                    echo "                                            ";
                }
                // line 60
                echo "
                                            ";
                // line 61
                ob_start();
                // line 62
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if (($context["sortable"] ?? $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["sort_by"] ?? $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["sort_active_class"] ?? $this->getContext($context, "sort_active_class")), "html", null, true);
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
                // line 63
                if (($context["sortable"] ?? $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => ($context["sort_parameters"] ?? $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 64
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["field_description"], "label", array()), array(), $this->getAttribute($context["field_description"], "translationDomain", array())), "html", null, true);
                echo "
                                                    ";
                // line 65
                if (($context["sortable"] ?? $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 66
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 68
                echo "                                        ";
            }
            // line 69
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_8bed018c9eb38449c432390b506aff9b6be2149bea75420a0ea47cd81abc132e->leave($__internal_8bed018c9eb38449c432390b506aff9b6be2149bea75420a0ea47cd81abc132e_prof);

        
        $__internal_dbb64ae33af8b7faa8dc57cf1d9d46bd58857b1f1d02ca1ebb520f5f7704aa03->leave($__internal_dbb64ae33af8b7faa8dc57cf1d9d46bd58857b1f1d02ca1ebb520f5f7704aa03_prof);

    }

    // line 74
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_aa51ce961c67b20467e444c36630475f5b9e7188a3f1492249f23a75f6afb7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa51ce961c67b20467e444c36630475f5b9e7188a3f1492249f23a75f6afb7c6->enter($__internal_aa51ce961c67b20467e444c36630475f5b9e7188a3f1492249f23a75f6afb7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_1bad618f1310f81a18e21e153a2ce77ee79eb2e86e776c87fb00f389c5ea4771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bad618f1310f81a18e21e153a2ce77ee79eb2e86e776c87fb00f389c5ea4771->enter($__internal_1bad618f1310f81a18e21e153a2ce77ee79eb2e86e776c87fb00f389c5ea4771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 75
        echo "                            <tbody>
                                ";
        // line 76
        $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => ("outer_list_rows_" . $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method"))), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 76)->display($context);
        // line 77
        echo "                            </tbody>
                        ";
        
        $__internal_1bad618f1310f81a18e21e153a2ce77ee79eb2e86e776c87fb00f389c5ea4771->leave($__internal_1bad618f1310f81a18e21e153a2ce77ee79eb2e86e776c87fb00f389c5ea4771_prof);

        
        $__internal_aa51ce961c67b20467e444c36630475f5b9e7188a3f1492249f23a75f6afb7c6->leave($__internal_aa51ce961c67b20467e444c36630475f5b9e7188a3f1492249f23a75f6afb7c6_prof);

    }

    // line 80
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_e326d6aa57ed187cae40a4eb73183263b42c640a37a837a806e492b4afe7a285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e326d6aa57ed187cae40a4eb73183263b42c640a37a837a806e492b4afe7a285->enter($__internal_e326d6aa57ed187cae40a4eb73183263b42c640a37a837a806e492b4afe7a285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_e4ef9e5fd3753b33ac6455bbc4b60aec50fe929eaffb3dbd315848d33bc0b2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ef9e5fd3753b33ac6455bbc4b60aec50fe929eaffb3dbd315848d33bc0b2de->enter($__internal_e4ef9e5fd3753b33ac6455bbc4b60aec50fe929eaffb3dbd315848d33bc0b2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 81
        echo "                        ";
        
        $__internal_e4ef9e5fd3753b33ac6455bbc4b60aec50fe929eaffb3dbd315848d33bc0b2de->leave($__internal_e4ef9e5fd3753b33ac6455bbc4b60aec50fe929eaffb3dbd315848d33bc0b2de_prof);

        
        $__internal_e326d6aa57ed187cae40a4eb73183263b42c640a37a837a806e492b4afe7a285->leave($__internal_e326d6aa57ed187cae40a4eb73183263b42c640a37a837a806e492b4afe7a285_prof);

    }

    // line 84
    public function block_no_result_content($context, array $blocks = array())
    {
        $__internal_f1a9e19f7776b6ff0f93d14b9aff7037b67e810493be90069bc749b0ef020ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a9e19f7776b6ff0f93d14b9aff7037b67e810493be90069bc749b0ef020ac1->enter($__internal_f1a9e19f7776b6ff0f93d14b9aff7037b67e810493be90069bc749b0ef020ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        $__internal_8a26e54d6f723dd25f81fe6e9ebfcf5fbdccace50da7e858d377c4412899e442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a26e54d6f723dd25f81fe6e9ebfcf5fbdccace50da7e858d377c4412899e442->enter($__internal_8a26e54d6f723dd25f81fe6e9ebfcf5fbdccace50da7e858d377c4412899e442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        // line 85
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    ";
        // line 93
        if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "xmlHttpRequest", array())) {
            // line 94
            echo "                                        ";
            $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 94)->display($context);
            // line 95
            echo "                                    ";
        }
        // line 96
        echo "                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
        
        $__internal_8a26e54d6f723dd25f81fe6e9ebfcf5fbdccace50da7e858d377c4412899e442->leave($__internal_8a26e54d6f723dd25f81fe6e9ebfcf5fbdccace50da7e858d377c4412899e442_prof);

        
        $__internal_f1a9e19f7776b6ff0f93d14b9aff7037b67e810493be90069bc749b0ef020ac1->leave($__internal_f1a9e19f7776b6ff0f93d14b9aff7037b67e810493be90069bc749b0ef020ac1_prof);

    }

    // line 104
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_529fb5b71028c9d9fd69eb9a18a9e0f3d97de569908d53a571df45b91fc9e6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_529fb5b71028c9d9fd69eb9a18a9e0f3d97de569908d53a571df45b91fc9e6a6->enter($__internal_529fb5b71028c9d9fd69eb9a18a9e0f3d97de569908d53a571df45b91fc9e6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        $__internal_9ce9101fcb4e04958671ae0a1673638d4680475dba167a87c3dc7a08bc505ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce9101fcb4e04958671ae0a1673638d4680475dba167a87c3dc7a08bc505ee6->enter($__internal_9ce9101fcb4e04958671ae0a1673638d4680475dba167a87c3dc7a08bc505ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        // line 105
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 106
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 108
            if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
                // line 109
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 110
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))) > 0))) {
                    // line 111
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 158
                    echo "                                    ";
                }
                // line 159
                echo "                                </div>


                                <div class=\"pull-right\">
                                    ";
                // line 163
                if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getExportFormats", array(), "method")))) {
                    // line 164
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                ";
                    // line 167
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 171
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getExportFormats", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 172
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 173
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 175
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("export_format_" . $context["format"]), array(), "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                <li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 179
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 184
                echo "
                                    ";
                // line 185
                $this->displayBlock('pager_results', $context, $blocks);
                // line 188
                echo "                                </div>
                            ";
            }
            // line 190
            echo "                        </div>

                        ";
            // line 192
            $this->displayBlock('pager_links', $context, $blocks);
            // line 198
            echo "                    </div>
                ";
        }
        // line 200
        echo "            ";
        
        $__internal_9ce9101fcb4e04958671ae0a1673638d4680475dba167a87c3dc7a08bc505ee6->leave($__internal_9ce9101fcb4e04958671ae0a1673638d4680475dba167a87c3dc7a08bc505ee6_prof);

        
        $__internal_529fb5b71028c9d9fd69eb9a18a9e0f3d97de569908d53a571df45b91fc9e6a6->leave($__internal_529fb5b71028c9d9fd69eb9a18a9e0f3d97de569908d53a571df45b91fc9e6a6_prof);

    }

    // line 111
    public function block_batch($context, array $blocks = array())
    {
        $__internal_bd8b314109e12bddea85ee536dc7b76b14d145ea0ac156238176f2c641af77ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8b314109e12bddea85ee536dc7b76b14d145ea0ac156238176f2c641af77ef->enter($__internal_bd8b314109e12bddea85ee536dc7b76b14d145ea0ac156238176f2c641af77ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        $__internal_8c3119828948e0c7138984ce91b71418f0556f301e9753b31564c9a973a79d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c3119828948e0c7138984ce91b71418f0556f301e9753b31564c9a973a79d68->enter($__internal_8c3119828948e0c7138984ce91b71418f0556f301e9753b31564c9a973a79d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        // line 112
        echo "                                            <script>
                                                ";
        // line 113
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 140
        echo "                                            </script>

                                        ";
        // line 142
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 155
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_8c3119828948e0c7138984ce91b71418f0556f301e9753b31564c9a973a79d68->leave($__internal_8c3119828948e0c7138984ce91b71418f0556f301e9753b31564c9a973a79d68_prof);

        
        $__internal_bd8b314109e12bddea85ee536dc7b76b14d145ea0ac156238176f2c641af77ef->leave($__internal_bd8b314109e12bddea85ee536dc7b76b14d145ea0ac156238176f2c641af77ef_prof);

    }

    // line 113
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_62ffb4e5bb204395b7647a9a304ca4a9223e45d59656f2aec096863a897d1768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62ffb4e5bb204395b7647a9a304ca4a9223e45d59656f2aec096863a897d1768->enter($__internal_62ffb4e5bb204395b7647a9a304ca4a9223e45d59656f2aec096863a897d1768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        $__internal_ab48cd152317d51139b89981c6b70509a0f96bfe811479c13e90adf375d673ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab48cd152317d51139b89981c6b70509a0f96bfe811479c13e90adf375d673ff->enter($__internal_ab48cd152317d51139b89981c6b70509a0f96bfe811479c13e90adf375d673ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 114
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
        
        $__internal_ab48cd152317d51139b89981c6b70509a0f96bfe811479c13e90adf375d673ff->leave($__internal_ab48cd152317d51139b89981c6b70509a0f96bfe811479c13e90adf375d673ff_prof);

        
        $__internal_62ffb4e5bb204395b7647a9a304ca4a9223e45d59656f2aec096863a897d1768->leave($__internal_62ffb4e5bb204395b7647a9a304ca4a9223e45d59656f2aec096863a897d1768_prof);

    }

    // line 142
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_f117419890c83bd1ac3f47d1a75d19d610704803fc761a5b6a40bd5b4a215b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f117419890c83bd1ac3f47d1a75d19d610704803fc761a5b6a40bd5b4a215b23->enter($__internal_f117419890c83bd1ac3f47d1a75d19d610704803fc761a5b6a40bd5b4a215b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_8091a6f783977d9879249758cee00835fccda7a9f99bd1305e42e8fc93a3f613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8091a6f783977d9879249758cee00835fccda7a9f99bd1305e42e8fc93a3f613->enter($__internal_8091a6f783977d9879249758cee00835fccda7a9f99bd1305e42e8fc93a3f613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 143
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batchactions"] ?? $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 151
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["options"], "label", array()), array(), (($this->getAttribute($context["options"], "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["options"], "translation_domain", array()), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "                                            </select>
                                        ";
        
        $__internal_8091a6f783977d9879249758cee00835fccda7a9f99bd1305e42e8fc93a3f613->leave($__internal_8091a6f783977d9879249758cee00835fccda7a9f99bd1305e42e8fc93a3f613_prof);

        
        $__internal_f117419890c83bd1ac3f47d1a75d19d610704803fc761a5b6a40bd5b4a215b23->leave($__internal_f117419890c83bd1ac3f47d1a75d19d610704803fc761a5b6a40bd5b4a215b23_prof);

    }

    // line 185
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_12822c930e8f1ce0eb287e26ae6b9c406ac98e70b4e4076ff8cf91eabcc6e2b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12822c930e8f1ce0eb287e26ae6b9c406ac98e70b4e4076ff8cf91eabcc6e2b1->enter($__internal_12822c930e8f1ce0eb287e26ae6b9c406ac98e70b4e4076ff8cf91eabcc6e2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        $__internal_159657e2fdbf716b5eecb88bee63809a0e06b4a8a22b92cd3a2221f8b7cd13d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159657e2fdbf716b5eecb88bee63809a0e06b4a8a22b92cd3a2221f8b7cd13d6->enter($__internal_159657e2fdbf716b5eecb88bee63809a0e06b4a8a22b92cd3a2221f8b7cd13d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 186
        echo "                                        ";
        $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 186)->display($context);
        // line 187
        echo "                                    ";
        
        $__internal_159657e2fdbf716b5eecb88bee63809a0e06b4a8a22b92cd3a2221f8b7cd13d6->leave($__internal_159657e2fdbf716b5eecb88bee63809a0e06b4a8a22b92cd3a2221f8b7cd13d6_prof);

        
        $__internal_12822c930e8f1ce0eb287e26ae6b9c406ac98e70b4e4076ff8cf91eabcc6e2b1->leave($__internal_12822c930e8f1ce0eb287e26ae6b9c406ac98e70b4e4076ff8cf91eabcc6e2b1_prof);

    }

    // line 192
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_51651eb9f4b6f034ef831b65eb1cf388ee30beff2fe7bc4b626f706c12192dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51651eb9f4b6f034ef831b65eb1cf388ee30beff2fe7bc4b626f706c12192dbf->enter($__internal_51651eb9f4b6f034ef831b65eb1cf388ee30beff2fe7bc4b626f706c12192dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        $__internal_5f89b91ae3a23e7f0b43dff0704b8c784f685a4e330425c682875b9e14c4e607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f89b91ae3a23e7f0b43dff0704b8c784f685a4e330425c682875b9e14c4e607->enter($__internal_5f89b91ae3a23e7f0b43dff0704b8c784f685a4e330425c682875b9e14c4e607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 193
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 194
            echo "                                <hr/>
                                ";
            // line 195
            $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 195)->display($context);
            // line 196
            echo "                            ";
        }
        // line 197
        echo "                        ";
        
        $__internal_5f89b91ae3a23e7f0b43dff0704b8c784f685a4e330425c682875b9e14c4e607->leave($__internal_5f89b91ae3a23e7f0b43dff0704b8c784f685a4e330425c682875b9e14c4e607_prof);

        
        $__internal_51651eb9f4b6f034ef831b65eb1cf388ee30beff2fe7bc4b626f706c12192dbf->leave($__internal_51651eb9f4b6f034ef831b65eb1cf388ee30beff2fe7bc4b626f706c12192dbf_prof);

    }

    // line 208
    public function block_list_filters_actions($context, array $blocks = array())
    {
        $__internal_44ea9adb7ab212dd412c0d204a96529f3585debebe5a14682e65d577227695f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ea9adb7ab212dd412c0d204a96529f3585debebe5a14682e65d577227695f6->enter($__internal_44ea9adb7ab212dd412c0d204a96529f3585debebe5a14682e65d577227695f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        $__internal_422ebb8fe0001cdedfd70b39f2802a4010b902f671c93ab6438f996196e0f594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_422ebb8fe0001cdedfd70b39f2802a4010b902f671c93ab6438f996196e0f594->enter($__internal_422ebb8fe0001cdedfd70b39f2802a4010b902f671c93ab6438f996196e0f594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        // line 209
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))) {
            // line 210
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) {
                    // line 220
                    echo "                        ";
                    $context["filterActive"] = (($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")) &&  !$this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                    // line 221
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 222
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 223
                    echo ((($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        
        $__internal_422ebb8fe0001cdedfd70b39f2802a4010b902f671c93ab6438f996196e0f594->leave($__internal_422ebb8fe0001cdedfd70b39f2802a4010b902f671c93ab6438f996196e0f594_prof);

        
        $__internal_44ea9adb7ab212dd412c0d204a96529f3585debebe5a14682e65d577227695f6->leave($__internal_44ea9adb7ab212dd412c0d204a96529f3585debebe5a14682e65d577227695f6_prof);

    }

    // line 233
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_a8bb833712b2e5a0ad25b959cb6da8381cbaa43b004fee36dc31cc28b3948ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8bb833712b2e5a0ad25b959cb6da8381cbaa43b004fee36dc31cc28b3948ed5->enter($__internal_a8bb833712b2e5a0ad25b959cb6da8381cbaa43b004fee36dc31cc28b3948ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        $__internal_1f628d6b2bb99b8723181d6c7ba53d7275affff5fb279e57e6e5e8451de1f58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f628d6b2bb99b8723181d6c7ba53d7275affff5fb279e57e6e5e8451de1f58e->enter($__internal_1f628d6b2bb99b8723181d6c7ba53d7275affff5fb279e57e6e5e8451de1f58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 234
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 235
            echo "        ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "filter"), "method")));
            // line 236
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 237
            echo (($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 240
            echo ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 241
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 245
            $context["withAdvancedFilter"] = false;
            // line 246
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
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
                // line 247
                echo "                                    ";
                $context["filterActive"] = ((($this->getAttribute($context["filter"], "isActive", array(), "method") && (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) || ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true)) &&  !$this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                // line 248
                echo "                                    ";
                $context["filterVisible"] = (($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")));
                // line 249
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo ((($context["filterVisible"] ?? $this->getContext($context, "filterVisible"))) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if (($context["filterActive"] ?? $this->getContext($context, "filterActive"))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 250
                if ( !($this->getAttribute($context["filter"], "label", array()) === false)) {
                    // line 251
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 253
                echo "                                        ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 254
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 256
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 260
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 265
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 272
                if ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "advanced_filter", array(), "array")) {
                    // line 273
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 274
                    echo "                                    ";
                }
                // line 275
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
            // line 276
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 280
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 281
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> ";
            // line 285
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 289
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 293
            if (($context["withAdvancedFilter"] ?? $this->getContext($context, "withAdvancedFilter"))) {
                // line 294
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 297
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 301
            echo "                            </div>
                        </div>

                        ";
            // line 304
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 305
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
            // line 307
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_1f628d6b2bb99b8723181d6c7ba53d7275affff5fb279e57e6e5e8451de1f58e->leave($__internal_1f628d6b2bb99b8723181d6c7ba53d7275affff5fb279e57e6e5e8451de1f58e_prof);

        
        $__internal_a8bb833712b2e5a0ad25b959cb6da8381cbaa43b004fee36dc31cc28b3948ed5->leave($__internal_a8bb833712b2e5a0ad25b959cb6da8381cbaa43b004fee36dc31cc28b3948ed5_prof);

    }

    // line 249
    public function block_sonata_list_filter_group_class($context, array $blocks = array())
    {
        $__internal_9468c0ee6d932d15a4dde14209c8b30628eaf42692c2e92d2bfa178b290fc588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9468c0ee6d932d15a4dde14209c8b30628eaf42692c2e92d2bfa178b290fc588->enter($__internal_9468c0ee6d932d15a4dde14209c8b30628eaf42692c2e92d2bfa178b290fc588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        $__internal_9d78a4dae74514fc03d8fcb6a914b3c3e4d3d12a154e7ea4e506cd124666be93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d78a4dae74514fc03d8fcb6a914b3c3e4d3d12a154e7ea4e506cd124666be93->enter($__internal_9d78a4dae74514fc03d8fcb6a914b3c3e4d3d12a154e7ea4e506cd124666be93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        
        $__internal_9d78a4dae74514fc03d8fcb6a914b3c3e4d3d12a154e7ea4e506cd124666be93->leave($__internal_9d78a4dae74514fc03d8fcb6a914b3c3e4d3d12a154e7ea4e506cd124666be93_prof);

        
        $__internal_9468c0ee6d932d15a4dde14209c8b30628eaf42692c2e92d2bfa178b290fc588->leave($__internal_9468c0ee6d932d15a4dde14209c8b30628eaf42692c2e92d2bfa178b290fc588_prof);

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
        return array (  1035 => 249,  1020 => 307,  1009 => 305,  1005 => 304,  1000 => 301,  993 => 297,  988 => 294,  986 => 293,  979 => 289,  975 => 288,  969 => 285,  961 => 281,  959 => 280,  953 => 276,  939 => 275,  936 => 274,  933 => 273,  931 => 272,  917 => 265,  909 => 260,  902 => 256,  898 => 254,  895 => 253,  887 => 251,  885 => 250,  868 => 249,  865 => 248,  862 => 247,  844 => 246,  842 => 245,  835 => 241,  829 => 240,  821 => 237,  818 => 236,  815 => 235,  812 => 234,  803 => 233,  789 => 227,  776 => 223,  768 => 222,  765 => 221,  762 => 220,  757 => 219,  750 => 215,  743 => 210,  741 => 209,  732 => 208,  722 => 197,  719 => 196,  717 => 195,  714 => 194,  711 => 193,  702 => 192,  692 => 187,  689 => 186,  680 => 185,  669 => 153,  658 => 151,  654 => 150,  647 => 146,  643 => 145,  639 => 144,  634 => 143,  625 => 142,  590 => 114,  581 => 113,  569 => 156,  566 => 155,  564 => 142,  560 => 140,  558 => 113,  555 => 112,  546 => 111,  536 => 200,  532 => 198,  530 => 192,  526 => 190,  522 => 188,  520 => 185,  517 => 184,  510 => 179,  500 => 175,  495 => 173,  492 => 172,  488 => 171,  481 => 167,  476 => 164,  474 => 163,  468 => 159,  465 => 158,  462 => 111,  460 => 110,  457 => 109,  455 => 108,  451 => 106,  448 => 105,  439 => 104,  426 => 96,  423 => 95,  420 => 94,  418 => 93,  410 => 88,  405 => 85,  396 => 84,  386 => 81,  377 => 80,  366 => 77,  364 => 76,  361 => 75,  352 => 74,  340 => 70,  334 => 69,  331 => 68,  327 => 66,  323 => 65,  318 => 64,  312 => 63,  290 => 62,  288 => 61,  285 => 60,  282 => 59,  279 => 58,  276 => 57,  273 => 56,  270 => 55,  267 => 54,  264 => 53,  261 => 52,  258 => 51,  256 => 50,  253 => 49,  251 => 48,  249 => 47,  246 => 46,  244 => 45,  239 => 42,  236 => 41,  232 => 40,  228 => 38,  219 => 37,  202 => 33,  191 => 205,  187 => 203,  185 => 202,  182 => 201,  180 => 104,  175 => 102,  172 => 101,  169 => 100,  166 => 84,  162 => 82,  160 => 80,  157 => 79,  155 => 74,  152 => 73,  150 => 37,  147 => 36,  145 => 35,  142 => 34,  140 => 33,  135 => 31,  129 => 30,  122 => 29,  119 => 27,  114 => 25,  109 => 24,  106 => 23,  104 => 22,  101 => 21,  92 => 20,  74 => 18,  64 => 15,  55 => 14,  34 => 12,);
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
                                        {% include 'SonataAdminBundle:Button:create_button.html.twig' %}
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


                                <div class=\"pull-right\">
                                    {% if admin.hasRoute('export') and admin.isGranted('EXPORT') and admin.getExportFormats()|length %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                {{ \"label_export_download\"|trans({}, \"SonataAdminBundle\") }}
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                {% for format in admin.getExportFormats() %}
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
", "SonataAdminBundle:CRUD:base_list.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_list.html.twig");
    }
}
