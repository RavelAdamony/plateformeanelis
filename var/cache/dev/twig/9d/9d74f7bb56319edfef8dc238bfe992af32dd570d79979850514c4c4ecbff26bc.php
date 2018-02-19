<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_eb2c7a5a7fd0b776e7b82450b2a7e35506af44e7a5f836674bb817eceebfa7c0 extends Twig_Template
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
        $__internal_a9e459788d7926e0bb62e94bc545702e8ae1d65503d6a3a973905ed88d9d1a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e459788d7926e0bb62e94bc545702e8ae1d65503d6a3a973905ed88d9d1a40->enter($__internal_a9e459788d7926e0bb62e94bc545702e8ae1d65503d6a3a973905ed88d9d1a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        $__internal_43d72685bda8b34189039cb50913ccfc55e8e0a715a48544b3f483b10fecd597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d72685bda8b34189039cb50913ccfc55e8e0a715a48544b3f483b10fecd597->enter($__internal_43d72685bda8b34189039cb50913ccfc55e8e0a715a48544b3f483b10fecd597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        // line 1
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_a9e459788d7926e0bb62e94bc545702e8ae1d65503d6a3a973905ed88d9d1a40->leave($__internal_a9e459788d7926e0bb62e94bc545702e8ae1d65503d6a3a973905ed88d9d1a40_prof);

        
        $__internal_43d72685bda8b34189039cb50913ccfc55e8e0a715a48544b3f483b10fecd597->leave($__internal_43d72685bda8b34189039cb50913ccfc55e8e0a715a48544b3f483b10fecd597_prof);

    }

    public function block_form($context, array $blocks = array())
    {
        $__internal_1fb566204986403a681d513d72f24612710a8bf681574facd03dc4fdb9998313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb566204986403a681d513d72f24612710a8bf681574facd03dc4fdb9998313->enter($__internal_1fb566204986403a681d513d72f24612710a8bf681574facd03dc4fdb9998313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_469c2266de082afe7663c322b71a4f6738a53cd41ca5c3f660718b3637532999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469c2266de082afe7663c322b71a4f6738a53cd41ca5c3f660718b3637532999->enter($__internal_469c2266de082afe7663c322b71a4f6738a53cd41ca5c3f660718b3637532999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 2
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "

    ";
        // line 4
        $context["url"] = (( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) ? ("edit") : ("create"));
        // line 5
        echo "
    ";
        // line 6
        if ( !$this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => ($context["url"] ?? $this->getContext($context, "url"))), "method")) {
            // line 7
            echo "        <div>
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 11
            echo "        <form
              ";
            // line 12
            if (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 13
            echo "              role=\"form\"
              action=\"";
            // line 14
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 15
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 16
            echo "              method=\"POST\"
              ";
            // line 17
            if ( !$this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 18
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 19
            echo "              >

            ";
            // line 21
            echo twig_include($this->env, $context, "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig");
            echo "

            ";
            // line 23
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 26
            echo "
            ";
            // line 27
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 59
            echo "
            ";
            // line 60
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 63
            echo "
            ";
            // line 64
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
            echo "

            ";
            // line 66
            $this->displayBlock('formactions', $context, $blocks);
            // line 110
            echo "        </form>
    ";
        }
        // line 112
        echo "
    ";
        // line 113
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "

";
        
        $__internal_469c2266de082afe7663c322b71a4f6738a53cd41ca5c3f660718b3637532999->leave($__internal_469c2266de082afe7663c322b71a4f6738a53cd41ca5c3f660718b3637532999_prof);

        
        $__internal_1fb566204986403a681d513d72f24612710a8bf681574facd03dc4fdb9998313->leave($__internal_1fb566204986403a681d513d72f24612710a8bf681574facd03dc4fdb9998313_prof);

    }

    // line 14
    public function block_sonata_form_action_url($context, array $blocks = array())
    {
        $__internal_deec2b70f9923b7a45a0dffafd0bb3eda8f3fe2bfd1fd657bc2eb59af2501bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deec2b70f9923b7a45a0dffafd0bb3eda8f3fe2bfd1fd657bc2eb59af2501bb1->enter($__internal_deec2b70f9923b7a45a0dffafd0bb3eda8f3fe2bfd1fd657bc2eb59af2501bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        $__internal_4b399a74fb7dcfdc48acd58f458062a7d8dcd9eff4aa9de1de97390db6d3ea14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b399a74fb7dcfdc48acd58f458062a7d8dcd9eff4aa9de1de97390db6d3ea14->enter($__internal_4b399a74fb7dcfdc48acd58f458062a7d8dcd9eff4aa9de1de97390db6d3ea14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => ($context["url"] ?? $this->getContext($context, "url")), 1 => array("id" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        
        $__internal_4b399a74fb7dcfdc48acd58f458062a7d8dcd9eff4aa9de1de97390db6d3ea14->leave($__internal_4b399a74fb7dcfdc48acd58f458062a7d8dcd9eff4aa9de1de97390db6d3ea14_prof);

        
        $__internal_deec2b70f9923b7a45a0dffafd0bb3eda8f3fe2bfd1fd657bc2eb59af2501bb1->leave($__internal_deec2b70f9923b7a45a0dffafd0bb3eda8f3fe2bfd1fd657bc2eb59af2501bb1_prof);

    }

    // line 18
    public function block_sonata_form_attributes($context, array $blocks = array())
    {
        $__internal_b9c721037339916dc130ff88c9b4003eb15dfd325b22d2e8de9580637b00a906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c721037339916dc130ff88c9b4003eb15dfd325b22d2e8de9580637b00a906->enter($__internal_b9c721037339916dc130ff88c9b4003eb15dfd325b22d2e8de9580637b00a906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        $__internal_f4a8eba089ea84315440631cba6fec18bf05a4bd4b9c226a01ff539f3d8b71b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a8eba089ea84315440631cba6fec18bf05a4bd4b9c226a01ff539f3d8b71b4->enter($__internal_f4a8eba089ea84315440631cba6fec18bf05a4bd4b9c226a01ff539f3d8b71b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        
        $__internal_f4a8eba089ea84315440631cba6fec18bf05a4bd4b9c226a01ff539f3d8b71b4->leave($__internal_f4a8eba089ea84315440631cba6fec18bf05a4bd4b9c226a01ff539f3d8b71b4_prof);

        
        $__internal_b9c721037339916dc130ff88c9b4003eb15dfd325b22d2e8de9580637b00a906->leave($__internal_b9c721037339916dc130ff88c9b4003eb15dfd325b22d2e8de9580637b00a906_prof);

    }

    // line 23
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        $__internal_b9f0a0e14fcf700e1c6a05ce539061aba233826fe1df628e24d5d779c4738742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f0a0e14fcf700e1c6a05ce539061aba233826fe1df628e24d5d779c4738742->enter($__internal_b9f0a0e14fcf700e1c6a05ce539061aba233826fe1df628e24d5d779c4738742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        $__internal_36cc336656256831aa04b1b4d29fff8f50c11c1c50116a6981d695f2ed646ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36cc336656256831aa04b1b4d29fff8f50c11c1c50116a6981d695f2ed646ba7->enter($__internal_36cc336656256831aa04b1b4d29fff8f50c11c1c50116a6981d695f2ed646ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 24
        echo "                <div class=\"row\">
            ";
        
        $__internal_36cc336656256831aa04b1b4d29fff8f50c11c1c50116a6981d695f2ed646ba7->leave($__internal_36cc336656256831aa04b1b4d29fff8f50c11c1c50116a6981d695f2ed646ba7_prof);

        
        $__internal_b9f0a0e14fcf700e1c6a05ce539061aba233826fe1df628e24d5d779c4738742->leave($__internal_b9f0a0e14fcf700e1c6a05ce539061aba233826fe1df628e24d5d779c4738742_prof);

    }

    // line 27
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        $__internal_626bd537f37c68b30acf2ccbd8c525de61fb0bdf96a1d9a3178de65c8e718b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626bd537f37c68b30acf2ccbd8c525de61fb0bdf96a1d9a3178de65c8e718b05->enter($__internal_626bd537f37c68b30acf2ccbd8c525de61fb0bdf96a1d9a3178de65c8e718b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        $__internal_044c041cca4d7642fb48bd4845fafa9dabb408a6f30d5ee5faaf5c171b6dab6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044c041cca4d7642fb48bd4845fafa9dabb408a6f30d5ee5faaf5c171b6dab6e->enter($__internal_044c041cca4d7642fb48bd4845fafa9dabb408a6f30d5ee5faaf5c171b6dab6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 28
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array())) > 1));
        // line 29
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 31
        if (($context["has_tab"] ?? $this->getContext($context, "has_tab"))) {
            // line 32
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array()));
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
                // line 35
                echo "                                    <li";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#tab_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), (($this->getAttribute($context["form_tab"], "translation_domain", array())) ? ($this->getAttribute($context["form_tab"], "translation_domain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
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
            // line 37
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array()));
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
                // line 40
                echo "                                    <div class=\"tab-pane fade";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\" id=\"tab_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 43
                if (($this->getAttribute($context["form_tab"], "description", array()) != false)) {
                    // line 44
                    echo "                                                    <p>";
                    echo $this->getAttribute($context["form_tab"], "description", array());
                    echo "</p>
                                                ";
                }
                // line 46
                echo "
                                                ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute(($context["form_helper"] ?? $this->getContext($context, "form_helper")), "render_groups", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["form"] ?? $this->getContext($context, "form")), 2 => $this->getAttribute($context["form_tab"], "groups", array(), "array"), 3 => ($context["has_tab"] ?? $this->getContext($context, "has_tab"))), "method"), "html", null, true);
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
            // line 52
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 55
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form_helper"] ?? $this->getContext($context, "form_helper")), "render_groups", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["form"] ?? $this->getContext($context, "form")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array()), "default", array(), "array"), "groups", array()), 3 => ($context["has_tab"] ?? $this->getContext($context, "has_tab"))), "method"), "html", null, true);
            echo "
                    ";
        }
        // line 57
        echo "                </div>
            ";
        
        $__internal_044c041cca4d7642fb48bd4845fafa9dabb408a6f30d5ee5faaf5c171b6dab6e->leave($__internal_044c041cca4d7642fb48bd4845fafa9dabb408a6f30d5ee5faaf5c171b6dab6e_prof);

        
        $__internal_626bd537f37c68b30acf2ccbd8c525de61fb0bdf96a1d9a3178de65c8e718b05->leave($__internal_626bd537f37c68b30acf2ccbd8c525de61fb0bdf96a1d9a3178de65c8e718b05_prof);

    }

    // line 60
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        $__internal_8dd3ac3522c7036cbf29533d0cd1456534ca9659a8355436a4f298ce845888e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dd3ac3522c7036cbf29533d0cd1456534ca9659a8355436a4f298ce845888e2->enter($__internal_8dd3ac3522c7036cbf29533d0cd1456534ca9659a8355436a4f298ce845888e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        $__internal_3338ca7b9ad4b62206e2c85b38fa4679d4a655735dbb406c8a4f156f9478890e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3338ca7b9ad4b62206e2c85b38fa4679d4a655735dbb406c8a4f156f9478890e->enter($__internal_3338ca7b9ad4b62206e2c85b38fa4679d4a655735dbb406c8a4f156f9478890e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 61
        echo "                </div>
            ";
        
        $__internal_3338ca7b9ad4b62206e2c85b38fa4679d4a655735dbb406c8a4f156f9478890e->leave($__internal_3338ca7b9ad4b62206e2c85b38fa4679d4a655735dbb406c8a4f156f9478890e_prof);

        
        $__internal_8dd3ac3522c7036cbf29533d0cd1456534ca9659a8355436a4f298ce845888e2->leave($__internal_8dd3ac3522c7036cbf29533d0cd1456534ca9659a8355436a4f298ce845888e2_prof);

    }

    // line 66
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_3a1c5797f5046613a8cff9bbe29d014cf708ad51fc78b61abe038828de11a037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1c5797f5046613a8cff9bbe29d014cf708ad51fc78b61abe038828de11a037->enter($__internal_3a1c5797f5046613a8cff9bbe29d014cf708ad51fc78b61abe038828de11a037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_731284e3935011d1cb88e2223461070dcd3f3e6031902c4847d84f4e056612fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731284e3935011d1cb88e2223461070dcd3f3e6031902c4847d84f4e056612fe->enter($__internal_731284e3935011d1cb88e2223461070dcd3f3e6031902c4847d84f4e056612fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 67
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 68
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 108
        echo "                </div>
            ";
        
        $__internal_731284e3935011d1cb88e2223461070dcd3f3e6031902c4847d84f4e056612fe->leave($__internal_731284e3935011d1cb88e2223461070dcd3f3e6031902c4847d84f4e056612fe_prof);

        
        $__internal_3a1c5797f5046613a8cff9bbe29d014cf708ad51fc78b61abe038828de11a037->leave($__internal_3a1c5797f5046613a8cff9bbe29d014cf708ad51fc78b61abe038828de11a037_prof);

    }

    // line 68
    public function block_sonata_form_actions($context, array $blocks = array())
    {
        $__internal_45b40225c8770033bbf64d859ead5c52f480af4bc85bcb03db2a444290f9ac6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b40225c8770033bbf64d859ead5c52f480af4bc85bcb03db2a444290f9ac6f->enter($__internal_45b40225c8770033bbf64d859ead5c52f480af4bc85bcb03db2a444290f9ac6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        $__internal_391672044864661a31d9d5836b23aa91816a450dd98e10e374f80be2c938d3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391672044864661a31d9d5836b23aa91816a450dd98e10e374f80be2c938d3ab->enter($__internal_391672044864661a31d9d5836b23aa91816a450dd98e10e374f80be2c938d3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        // line 69
        echo "                    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isxmlhttprequest", array())) {
            // line 70
            echo "                        ";
            if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                // line 71
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 73
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 75
            echo "                    ";
        } else {
            // line 76
            echo "                        ";
            if ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "supportsPreviewMode", array())) {
                // line 77
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                ";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 82
            echo "                        ";
            if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                // line 83
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 85
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 86
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 88
                echo "
                            ";
                // line 89
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "delete"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "DELETE", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                    // line 90
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 93
                echo "
                            ";
                // line 94
                if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "MASTER", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                    // line 95
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 97
                echo "                        ";
            } else {
                // line 98
                echo "                            ";
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT"), "method"))) {
                    // line 99
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 101
                echo "                            ";
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 102
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 104
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 106
            echo "                    ";
        }
        // line 107
        echo "                ";
        
        $__internal_391672044864661a31d9d5836b23aa91816a450dd98e10e374f80be2c938d3ab->leave($__internal_391672044864661a31d9d5836b23aa91816a450dd98e10e374f80be2c938d3ab_prof);

        
        $__internal_45b40225c8770033bbf64d859ead5c52f480af4bc85bcb03db2a444290f9ac6f->leave($__internal_45b40225c8770033bbf64d859ead5c52f480af4bc85bcb03db2a444290f9ac6f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  522 => 107,  519 => 106,  513 => 104,  507 => 102,  504 => 101,  498 => 99,  495 => 98,  492 => 97,  484 => 95,  482 => 94,  479 => 93,  472 => 91,  467 => 90,  465 => 89,  462 => 88,  456 => 86,  454 => 85,  448 => 83,  445 => 82,  439 => 79,  435 => 77,  432 => 76,  429 => 75,  423 => 73,  417 => 71,  414 => 70,  411 => 69,  402 => 68,  391 => 108,  389 => 68,  386 => 67,  377 => 66,  366 => 61,  357 => 60,  346 => 57,  340 => 55,  335 => 52,  316 => 47,  313 => 46,  307 => 44,  305 => 43,  292 => 40,  275 => 39,  271 => 37,  246 => 35,  229 => 34,  225 => 32,  223 => 31,  219 => 29,  216 => 28,  207 => 27,  196 => 24,  187 => 23,  170 => 18,  152 => 14,  139 => 113,  136 => 112,  132 => 110,  130 => 66,  125 => 64,  122 => 63,  120 => 60,  117 => 59,  115 => 27,  112 => 26,  110 => 23,  105 => 21,  101 => 19,  98 => 18,  94 => 17,  91 => 16,  87 => 15,  83 => 14,  80 => 13,  76 => 12,  73 => 11,  67 => 8,  64 => 7,  62 => 6,  59 => 5,  57 => 4,  51 => 2,  33 => 1,);
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

                            {% if admin.hasroute('list') and admin.isGranted('LIST') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_update_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}

                            {% if admin.hasroute('delete') and admin.isGranted('DELETE', object) %}
                                {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}
                                <a class=\"btn btn-danger\" href=\"{{ admin.generateObjectUrl('delete', object) }}\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}

                            {% if admin.isAclEnabled() and admin.hasroute('acl') and admin.isGranted('MASTER', object) %}
                                <a class=\"btn btn-info\" href=\"{{ admin.generateObjectUrl('acl', object) }}\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}
                        {% else %}
                            {% if admin.hasroute('edit') and admin.isGranted('EDIT') %}
                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            {% if admin.hasroute('list') and admin.isGranted('LIST') %}
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
", "SonataAdminBundle:CRUD:base_edit_form.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_edit_form.html.twig");
    }
}
