<?php

/* SonataAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_3c525a02033387f8b221570e14d3d50e8863ce2d4579bc162509f12bbdf45b61 extends Twig_Template
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
        $__internal_c645eaa3c161755b0d8b5e996554015e46ca1f004fdeab6e6b3c8a9deae0527b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c645eaa3c161755b0d8b5e996554015e46ca1f004fdeab6e6b3c8a9deae0527b->enter($__internal_c645eaa3c161755b0d8b5e996554015e46ca1f004fdeab6e6b3c8a9deae0527b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:filter_admin_fields.html.twig"));

        $__internal_1682158d10dedaea2d99c15d37fead22725cdc282b900337c388d8c6dd632b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1682158d10dedaea2d99c15d37fead22725cdc282b900337c388d8c6dd632b30->enter($__internal_1682158d10dedaea2d99c15d37fead22725cdc282b900337c388d8c6dd632b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c645eaa3c161755b0d8b5e996554015e46ca1f004fdeab6e6b3c8a9deae0527b->leave($__internal_c645eaa3c161755b0d8b5e996554015e46ca1f004fdeab6e6b3c8a9deae0527b_prof);

        
        $__internal_1682158d10dedaea2d99c15d37fead22725cdc282b900337c388d8c6dd632b30->leave($__internal_1682158d10dedaea2d99c15d37fead22725cdc282b900337c388d8c6dd632b30_prof);

    }

    // line 18
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_109879f728cebbd335d68f4b37c3fa2248d0ceefe839ebd569c95827f45f50ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_109879f728cebbd335d68f4b37c3fa2248d0ceefe839ebd569c95827f45f50ae->enter($__internal_109879f728cebbd335d68f4b37c3fa2248d0ceefe839ebd569c95827f45f50ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0b660416904a685961de1ef8d746c57739afce0120738f90d9ae6c1a9c15e05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b660416904a685961de1ef8d746c57739afce0120738f90d9ae6c1a9c15e05f->enter($__internal_0b660416904a685961de1ef8d746c57739afce0120738f90d9ae6c1a9c15e05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 20
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_0b660416904a685961de1ef8d746c57739afce0120738f90d9ae6c1a9c15e05f->leave($__internal_0b660416904a685961de1ef8d746c57739afce0120738f90d9ae6c1a9c15e05f_prof);

        
        $__internal_109879f728cebbd335d68f4b37c3fa2248d0ceefe839ebd569c95827f45f50ae->leave($__internal_109879f728cebbd335d68f4b37c3fa2248d0ceefe839ebd569c95827f45f50ae_prof);

    }

    // line 23
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_88f079b2517b1d30deeda315e637d391562029f91c46d49fbf4fe13f6d2c8ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f079b2517b1d30deeda315e637d391562029f91c46d49fbf4fe13f6d2c8ddf->enter($__internal_88f079b2517b1d30deeda315e637d391562029f91c46d49fbf4fe13f6d2c8ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_c5785f7c0894da49b58cfb456599eee8767a66ab690941004068e626557e4fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5785f7c0894da49b58cfb456599eee8767a66ab690941004068e626557e4fba->enter($__internal_c5785f7c0894da49b58cfb456599eee8767a66ab690941004068e626557e4fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 25
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_c5785f7c0894da49b58cfb456599eee8767a66ab690941004068e626557e4fba->leave($__internal_c5785f7c0894da49b58cfb456599eee8767a66ab690941004068e626557e4fba_prof);

        
        $__internal_88f079b2517b1d30deeda315e637d391562029f91c46d49fbf4fe13f6d2c8ddf->leave($__internal_88f079b2517b1d30deeda315e637d391562029f91c46d49fbf4fe13f6d2c8ddf_prof);

    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ec3d26db98231d8faf5a774973c9e80024d926611b0cc4a6eaee5f56d28058ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3d26db98231d8faf5a774973c9e80024d926611b0cc4a6eaee5f56d28058ed->enter($__internal_ec3d26db98231d8faf5a774973c9e80024d926611b0cc4a6eaee5f56d28058ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d4bd042f9ee2d09af62489a61ba4bacbe7d92404d852c8aa1cb3c1121f034aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bd042f9ee2d09af62489a61ba4bacbe7d92404d852c8aa1cb3c1121f034aae->enter($__internal_d4bd042f9ee2d09af62489a61ba4bacbe7d92404d852c8aa1cb3c1121f034aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 29
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 30
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_d4bd042f9ee2d09af62489a61ba4bacbe7d92404d852c8aa1cb3c1121f034aae->leave($__internal_d4bd042f9ee2d09af62489a61ba4bacbe7d92404d852c8aa1cb3c1121f034aae_prof);

        
        $__internal_ec3d26db98231d8faf5a774973c9e80024d926611b0cc4a6eaee5f56d28058ed->leave($__internal_ec3d26db98231d8faf5a774973c9e80024d926611b0cc4a6eaee5f56d28058ed_prof);

    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5429d16e99398fe23a7ef2794625048fea82bbd6085f350df07ef2a8b56143c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5429d16e99398fe23a7ef2794625048fea82bbd6085f350df07ef2a8b56143c5->enter($__internal_5429d16e99398fe23a7ef2794625048fea82bbd6085f350df07ef2a8b56143c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_51d58f51c8e7d54643e8da7ee7cc85510a5a08ab4fb0c9f65d201bbb1b1639cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d58f51c8e7d54643e8da7ee7cc85510a5a08ab4fb0c9f65d201bbb1b1639cd->enter($__internal_51d58f51c8e7d54643e8da7ee7cc85510a5a08ab4fb0c9f65d201bbb1b1639cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 36
        echo "        ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "class", array()) . " ") . (((array_key_exists("widget_type", $context) && (($context["widget_type"] ?? $this->getContext($context, "widget_type")) != ""))) ? (((((($context["multiple"] ?? $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")) . "-") . ($context["widget_type"] ?? $this->getContext($context, "widget_type")))) : ("")))));
        // line 37
        echo "        ";
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 38
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 39
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
        }
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "            ";
            if ((array_key_exists("widget_type", $context) && (($context["widget_type"] ?? $this->getContext($context, "widget_type")) != "inline"))) {
                // line 43
                echo "                <div class=\"";
                echo ((($context["multiple"] ?? $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio"));
                echo "\">
            ";
            }
            // line 45
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => (($this->getAttribute(($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "widget_class", array()), "")) : ("")))));
            echo "
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </label>
            ";
            // line 49
            if ((array_key_exists("widget_type", $context) && (($context["widget_type"] ?? $this->getContext($context, "widget_type")) != "inline"))) {
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
        $this->displayBlock("form_message", $context, $blocks);
        echo "
        ";
        // line 54
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 55
            echo "            </div>
        ";
        }
        // line 57
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_51d58f51c8e7d54643e8da7ee7cc85510a5a08ab4fb0c9f65d201bbb1b1639cd->leave($__internal_51d58f51c8e7d54643e8da7ee7cc85510a5a08ab4fb0c9f65d201bbb1b1639cd_prof);

        
        $__internal_5429d16e99398fe23a7ef2794625048fea82bbd6085f350df07ef2a8b56143c5->leave($__internal_5429d16e99398fe23a7ef2794625048fea82bbd6085f350df07ef2a8b56143c5_prof);

    }

    // line 60
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c4a81f3b73569c60723ace97342cb9fd9f1eb986041fa55c2c87120d5363af0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a81f3b73569c60723ace97342cb9fd9f1eb986041fa55c2c87120d5363af0c->enter($__internal_c4a81f3b73569c60723ace97342cb9fd9f1eb986041fa55c2c87120d5363af0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_da9a40d310c7076fe3fe1c59781e4969972276a7b0f102a31b1d7da90a644d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9a40d310c7076fe3fe1c59781e4969972276a7b0f102a31b1d7da90a644d9a->enter($__internal_da9a40d310c7076fe3fe1c59781e4969972276a7b0f102a31b1d7da90a644d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 61
        echo "    ";
        ob_start();
        // line 62
        echo "        ";
        if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
            // line 63
            echo "            ";
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            // line 64
            echo "        ";
        }
        // line 65
        echo "        ";
        if ((($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 66
            echo "            <div class=\"checkbox\">
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if (((($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) && array_key_exists("label_render", $context))) {
            // line 70
            echo "            <label class=\"";
            if ((array_key_exists("inline", $context) && ($context["inline"] ?? $this->getContext($context, "inline")))) {
                echo "checkbox-inline";
            }
            echo "\">
        ";
        }
        // line 72
        echo "
        <input type=\"checkbox\" ";
        // line 73
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 74
        if ((($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 75
            echo "            ";
            if ((array_key_exists("label_render", $context) && twig_in_filter(($context["widget_checkbox_label"] ?? $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget")))) {
                // line 76
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 79
            echo "        ";
        }
        // line 80
        echo "        ";
        if ((($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 81
            echo "            </div>
            ";
            // line 82
            $this->displayBlock("form_message", $context, $blocks);
            echo "
        ";
        }
        // line 84
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_da9a40d310c7076fe3fe1c59781e4969972276a7b0f102a31b1d7da90a644d9a->leave($__internal_da9a40d310c7076fe3fe1c59781e4969972276a7b0f102a31b1d7da90a644d9a_prof);

        
        $__internal_c4a81f3b73569c60723ace97342cb9fd9f1eb986041fa55c2c87120d5363af0c->leave($__internal_c4a81f3b73569c60723ace97342cb9fd9f1eb986041fa55c2c87120d5363af0c_prof);

    }

    // line 87
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_e7617be7d0a9622306365fd25a64159137712626bd1e2cef39155902f8d85f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7617be7d0a9622306365fd25a64159137712626bd1e2cef39155902f8d85f87->enter($__internal_e7617be7d0a9622306365fd25a64159137712626bd1e2cef39155902f8d85f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        $__internal_cf7442e39fd39bc81644006440c2595890275b133903ccf5600ba5cebf9b94da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7442e39fd39bc81644006440c2595890275b133903ccf5600ba5cebf9b94da->enter($__internal_cf7442e39fd39bc81644006440c2595890275b133903ccf5600ba5cebf9b94da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 88
        echo "    ";
        $this->loadTemplate(($context["template"] ?? $this->getContext($context, "template")), "SonataAdminBundle:Form:filter_admin_fields.html.twig", 88)->display($context);
        
        $__internal_cf7442e39fd39bc81644006440c2595890275b133903ccf5600ba5cebf9b94da->leave($__internal_cf7442e39fd39bc81644006440c2595890275b133903ccf5600ba5cebf9b94da_prof);

        
        $__internal_e7617be7d0a9622306365fd25a64159137712626bd1e2cef39155902f8d85f87->leave($__internal_e7617be7d0a9622306365fd25a64159137712626bd1e2cef39155902f8d85f87_prof);

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
        return array (  325 => 88,  316 => 87,  305 => 84,  300 => 82,  297 => 81,  294 => 80,  291 => 79,  284 => 76,  281 => 75,  279 => 74,  267 => 73,  264 => 72,  256 => 70,  254 => 69,  251 => 68,  247 => 66,  244 => 65,  241 => 64,  238 => 63,  235 => 62,  232 => 61,  223 => 60,  212 => 57,  208 => 55,  206 => 54,  201 => 53,  195 => 52,  191 => 50,  189 => 49,  184 => 47,  180 => 46,  164 => 45,  158 => 43,  155 => 42,  150 => 41,  144 => 39,  141 => 38,  138 => 37,  135 => 36,  132 => 35,  129 => 34,  120 => 33,  107 => 30,  104 => 29,  95 => 28,  82 => 25,  79 => 24,  70 => 23,  57 => 20,  54 => 19,  45 => 18,  11 => 12,);
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
        {{ block('form_message') }}
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
            {{ block('form_message') }}
        {% endif %}
    {% endspaceless %}
{% endblock checkbox_widget %}

{% block sonata_type_model_autocomplete_widget %}
    {% include template %}
{% endblock sonata_type_model_autocomplete_widget %}
", "SonataAdminBundle:Form:filter_admin_fields.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
