<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_69bd58818be7e0092af381be10515002201a239e04f28d07ceb5bd449fcf8b0c extends Twig_Template
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
        $__internal_78c32a84f51383debf321714ceafff87690578bc72c5d9f415691013cf0b558c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c32a84f51383debf321714ceafff87690578bc72c5d9f415691013cf0b558c->enter($__internal_78c32a84f51383debf321714ceafff87690578bc72c5d9f415691013cf0b558c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_5c529a042132fb9872bf01ff45e4e4f4b4c44e4413a41a64d3276e651c3e9bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c529a042132fb9872bf01ff45e4e4f4b4c44e4413a41a64d3276e651c3e9bf2->enter($__internal_5c529a042132fb9872bf01ff45e4e4f4b4c44e4413a41a64d3276e651c3e9bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (        $this->renderBlock("preview", $context, $blocks)) : (null));
        // line 12
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (        $this->renderBlock("form", $context, $blocks)) : (null));
        // line 13
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (        $this->renderBlock("show", $context, $blocks)) : (null));
        // line 14
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (        $this->renderBlock("list_table", $context, $blocks)) : (null));
        // line 15
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (        $this->renderBlock("list_filters", $context, $blocks)) : (null));
        // line 16
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (        $this->renderBlock("tab_menu", $context, $blocks)) : (null));
        // line 17
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (        $this->renderBlock("content", $context, $blocks)) : (null));
        // line 18
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (        $this->renderBlock("title", $context, $blocks)) : (null));
        // line 19
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (        $this->renderBlock("breadcrumb", $context, $blocks)) : (null));
        // line 20
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (        $this->renderBlock("actions", $context, $blocks)) : (null));
        // line 21
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (        $this->renderBlock("navbar_title", $context, $blocks)) : (null));
        // line 22
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (        $this->renderBlock("list_filters_actions", $context, $blocks)) : (null));
        // line 23
        echo "
<!DOCTYPE html>
<html ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
        <title>
        ";
        // line 85
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 111
        echo "        </title>
    </head>
    <body ";
        // line 113
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 117
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 216
        echo "
        ";
        // line 217
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 351
        echo "    </div>

    ";
        // line 353
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 354
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 360
            echo "    ";
        }
        // line 361
        echo "
    </body>
</html>
";
        
        $__internal_78c32a84f51383debf321714ceafff87690578bc72c5d9f415691013cf0b558c->leave($__internal_78c32a84f51383debf321714ceafff87690578bc72c5d9f415691013cf0b558c_prof);

        
        $__internal_5c529a042132fb9872bf01ff45e4e4f4b4c44e4413a41a64d3276e651c3e9bf2->leave($__internal_5c529a042132fb9872bf01ff45e4e4f4b4c44e4413a41a64d3276e651c3e9bf2_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_8d7b3f04125c6825365c3a1fc7ee74775591e6241f61c59142114fd644fdbdc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7b3f04125c6825365c3a1fc7ee74775591e6241f61c59142114fd644fdbdc7->enter($__internal_8d7b3f04125c6825365c3a1fc7ee74775591e6241f61c59142114fd644fdbdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_03ec1229328aae029e4588e76bc956cbaf1dc3f0f68b1678d4a92498ac7b74c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ec1229328aae029e4588e76bc956cbaf1dc3f0f68b1678d4a92498ac7b74c1->enter($__internal_03ec1229328aae029e4588e76bc956cbaf1dc3f0f68b1678d4a92498ac7b74c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_03ec1229328aae029e4588e76bc956cbaf1dc3f0f68b1678d4a92498ac7b74c1->leave($__internal_03ec1229328aae029e4588e76bc956cbaf1dc3f0f68b1678d4a92498ac7b74c1_prof);

        
        $__internal_8d7b3f04125c6825365c3a1fc7ee74775591e6241f61c59142114fd644fdbdc7->leave($__internal_8d7b3f04125c6825365c3a1fc7ee74775591e6241f61c59142114fd644fdbdc7_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_25f1d62a961d3b9588448a3cfbfb8823c8f276b256fd220ffc9e75c16b2c8d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f1d62a961d3b9588448a3cfbfb8823c8f276b256fd220ffc9e75c16b2c8d04->enter($__internal_25f1d62a961d3b9588448a3cfbfb8823c8f276b256fd220ffc9e75c16b2c8d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_5e5004d786d9b56f2d14b415e3af6499292d88be2d66c576eb10e29bcb7c6761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5004d786d9b56f2d14b415e3af6499292d88be2d66c576eb10e29bcb7c6761->enter($__internal_5e5004d786d9b56f2d14b415e3af6499292d88be2d66c576eb10e29bcb7c6761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_5e5004d786d9b56f2d14b415e3af6499292d88be2d66c576eb10e29bcb7c6761->leave($__internal_5e5004d786d9b56f2d14b415e3af6499292d88be2d66c576eb10e29bcb7c6761_prof);

        
        $__internal_25f1d62a961d3b9588448a3cfbfb8823c8f276b256fd220ffc9e75c16b2c8d04->leave($__internal_25f1d62a961d3b9588448a3cfbfb8823c8f276b256fd220ffc9e75c16b2c8d04_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b50aa5f49e13697c43b0e5a26f783ba4a1beaa6be818332cdd56e790f0954c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b50aa5f49e13697c43b0e5a26f783ba4a1beaa6be818332cdd56e790f0954c2->enter($__internal_5b50aa5f49e13697c43b0e5a26f783ba4a1beaa6be818332cdd56e790f0954c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e0b2d040d38a2f38594936da86c3406f1fcb3a926c59328e9846652cd10fcba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b2d040d38a2f38594936da86c3406f1fcb3a926c59328e9846652cd10fcba5->enter($__internal_e0b2d040d38a2f38594936da86c3406f1fcb3a926c59328e9846652cd10fcba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 35
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        
        $__internal_e0b2d040d38a2f38594936da86c3406f1fcb3a926c59328e9846652cd10fcba5->leave($__internal_e0b2d040d38a2f38594936da86c3406f1fcb3a926c59328e9846652cd10fcba5_prof);

        
        $__internal_5b50aa5f49e13697c43b0e5a26f783ba4a1beaa6be818332cdd56e790f0954c2->leave($__internal_5b50aa5f49e13697c43b0e5a26f783ba4a1beaa6be818332cdd56e790f0954c2_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38e3de1876064f5dac97f9cd117f33145eaab6cde68be91445fbeba4e8ce6f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e3de1876064f5dac97f9cd117f33145eaab6cde68be91445fbeba4e8ce6f6e->enter($__internal_38e3de1876064f5dac97f9cd117f33145eaab6cde68be91445fbeba4e8ce6f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dcf0a43fa804c31004f9f2d0c83245bae90d1f21393cee1f4e7ac911096c7570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf0a43fa804c31004f9f2d0c83245bae90d1f21393cee1f4e7ac911096c7570->enter($__internal_dcf0a43fa804c31004f9f2d0c83245bae90d1f21393cee1f4e7ac911096c7570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 60
        echo "
            ";
        // line 61
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 66
        echo "
            ";
        // line 67
        $context["locale"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 68
        echo "            ";
        // line 69
        echo "            ";
        if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 70
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(($context["locale"] ?? $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 72
        echo "
            ";
        // line 74
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 75
            echo "                ";
            if ((($context["locale"] ?? $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 76
            echo "
                ";
            // line 78
            echo "                ";
            if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 79
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter(($context["locale"] ?? $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 81
            echo "            ";
        }
        // line 82
        echo "        ";
        
        $__internal_dcf0a43fa804c31004f9f2d0c83245bae90d1f21393cee1f4e7ac911096c7570->leave($__internal_dcf0a43fa804c31004f9f2d0c83245bae90d1f21393cee1f4e7ac911096c7570_prof);

        
        $__internal_38e3de1876064f5dac97f9cd117f33145eaab6cde68be91445fbeba4e8ce6f6e->leave($__internal_38e3de1876064f5dac97f9cd117f33145eaab6cde68be91445fbeba4e8ce6f6e_prof);

    }

    // line 40
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_2ad41a2efa9b91bc2ac8e03f2069ae6e053b967526b4c3cb35062568a1fab7e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad41a2efa9b91bc2ac8e03f2069ae6e053b967526b4c3cb35062568a1fab7e3->enter($__internal_2ad41a2efa9b91bc2ac8e03f2069ae6e053b967526b4c3cb35062568a1fab7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_29ec6f2166a3f5fd7e9ae3adb06787ecc4a832336d9ea9c8c0d834b47233ddfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ec6f2166a3f5fd7e9ae3adb06787ecc4a832336d9ea9c8c0d834b47233ddfe->enter($__internal_29ec6f2166a3f5fd7e9ae3adb06787ecc4a832336d9ea9c8c0d834b47233ddfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 41
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 43
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 47
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT:  '";
        // line 49
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
        
        $__internal_29ec6f2166a3f5fd7e9ae3adb06787ecc4a832336d9ea9c8c0d834b47233ddfe->leave($__internal_29ec6f2166a3f5fd7e9ae3adb06787ecc4a832336d9ea9c8c0d834b47233ddfe_prof);

        
        $__internal_2ad41a2efa9b91bc2ac8e03f2069ae6e053b967526b4c3cb35062568a1fab7e3->leave($__internal_2ad41a2efa9b91bc2ac8e03f2069ae6e053b967526b4c3cb35062568a1fab7e3_prof);

    }

    // line 61
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_1e0b56352ade75a2b2ed51c0ef36080186525fcb9d7d5987c336ae90180cd72a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e0b56352ade75a2b2ed51c0ef36080186525fcb9d7d5987c336ae90180cd72a->enter($__internal_1e0b56352ade75a2b2ed51c0ef36080186525fcb9d7d5987c336ae90180cd72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_25e5e82b2dbcacff86ea226e56c336df70d0c6df02fd3aa01c29bbab2b8abc20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e5e82b2dbcacff86ea226e56c336df70d0c6df02fd3aa01c29bbab2b8abc20->enter($__internal_25e5e82b2dbcacff86ea226e56c336df70d0c6df02fd3aa01c29bbab2b8abc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 62
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 63
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            ";
        
        $__internal_25e5e82b2dbcacff86ea226e56c336df70d0c6df02fd3aa01c29bbab2b8abc20->leave($__internal_25e5e82b2dbcacff86ea226e56c336df70d0c6df02fd3aa01c29bbab2b8abc20_prof);

        
        $__internal_1e0b56352ade75a2b2ed51c0ef36080186525fcb9d7d5987c336ae90180cd72a->leave($__internal_1e0b56352ade75a2b2ed51c0ef36080186525fcb9d7d5987c336ae90180cd72a_prof);

    }

    // line 85
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_9bd02f0d3c100343a8ec02f749681cb35761ffb03b52e55067daa4f2dac8a0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd02f0d3c100343a8ec02f749681cb35761ffb03b52e55067daa4f2dac8a0b4->enter($__internal_9bd02f0d3c100343a8ec02f749681cb35761ffb03b52e55067daa4f2dac8a0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_eba2c50c94d489190b88f10b8cc3e141f93a310958b9e6e94509638827a8f1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba2c50c94d489190b88f10b8cc3e141f93a310958b9e6e94509638827a8f1f1->enter($__internal_eba2c50c94d489190b88f10b8cc3e141f93a310958b9e6e94509638827a8f1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 86
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 88
        if ( !twig_test_empty(($context["_title"] ?? $this->getContext($context, "_title")))) {
            // line 89
            echo "                ";
            echo ($context["_title"] ?? $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 91
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 92
                echo "                    -
                    ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
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
                    // line 94
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 95
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 96
                            echo "                                &gt;
                            ";
                        }
                        // line 99
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 100
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 101
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 102
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 105
                        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 107
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
                // line 108
                echo "                ";
            }
            // line 109
            echo "            ";
        }
        // line 110
        echo "        ";
        
        $__internal_eba2c50c94d489190b88f10b8cc3e141f93a310958b9e6e94509638827a8f1f1->leave($__internal_eba2c50c94d489190b88f10b8cc3e141f93a310958b9e6e94509638827a8f1f1_prof);

        
        $__internal_9bd02f0d3c100343a8ec02f749681cb35761ffb03b52e55067daa4f2dac8a0b4->leave($__internal_9bd02f0d3c100343a8ec02f749681cb35761ffb03b52e55067daa4f2dac8a0b4_prof);

    }

    // line 113
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_0f96bbbe076b6c5dd565c771251953b81dbe19ee6374caeed2f943a0ef9ead80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f96bbbe076b6c5dd565c771251953b81dbe19ee6374caeed2f943a0ef9ead80->enter($__internal_0f96bbbe076b6c5dd565c771251953b81dbe19ee6374caeed2f943a0ef9ead80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_292ec66493bfbbcce81e28e957fbd07ea6078c6e9162932cc2d6f0e8f5ae1ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292ec66493bfbbcce81e28e957fbd07ea6078c6e9162932cc2d6f0e8f5ae1ade->enter($__internal_292ec66493bfbbcce81e28e957fbd07ea6078c6e9162932cc2d6f0e8f5ae1ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_292ec66493bfbbcce81e28e957fbd07ea6078c6e9162932cc2d6f0e8f5ae1ade->leave($__internal_292ec66493bfbbcce81e28e957fbd07ea6078c6e9162932cc2d6f0e8f5ae1ade_prof);

        
        $__internal_0f96bbbe076b6c5dd565c771251953b81dbe19ee6374caeed2f943a0ef9ead80->leave($__internal_0f96bbbe076b6c5dd565c771251953b81dbe19ee6374caeed2f943a0ef9ead80_prof);

    }

    // line 117
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_a62fac222f307bd3b0ec1f4e37096091cf3eeab7c2187a1c512510cd9b9e05f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62fac222f307bd3b0ec1f4e37096091cf3eeab7c2187a1c512510cd9b9e05f3->enter($__internal_a62fac222f307bd3b0ec1f4e37096091cf3eeab7c2187a1c512510cd9b9e05f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_b67688ad78d9b70bc4706c524fe909382ed8e12b6fbcbc18219a912e39fa09e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67688ad78d9b70bc4706c524fe909382ed8e12b6fbcbc18219a912e39fa09e5->enter($__internal_b67688ad78d9b70bc4706c524fe909382ed8e12b6fbcbc18219a912e39fa09e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 118
        echo "            <header class=\"main-header\">
                ";
        // line 119
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 126
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 138
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 214
        echo "            </header>
        ";
        
        $__internal_b67688ad78d9b70bc4706c524fe909382ed8e12b6fbcbc18219a912e39fa09e5->leave($__internal_b67688ad78d9b70bc4706c524fe909382ed8e12b6fbcbc18219a912e39fa09e5_prof);

        
        $__internal_a62fac222f307bd3b0ec1f4e37096091cf3eeab7c2187a1c512510cd9b9e05f3->leave($__internal_a62fac222f307bd3b0ec1f4e37096091cf3eeab7c2187a1c512510cd9b9e05f3_prof);

    }

    // line 119
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_e8c67ddfe5b097609769bdc0359d800e16fb88a736ca383ec57ec1a8e82e0892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c67ddfe5b097609769bdc0359d800e16fb88a736ca383ec57ec1a8e82e0892->enter($__internal_e8c67ddfe5b097609769bdc0359d800e16fb88a736ca383ec57ec1a8e82e0892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_601d6c8a6b4bfece14eebd0836c5081d0a09ef7dfc2d138a9bc7cb1fe174c291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_601d6c8a6b4bfece14eebd0836c5081d0a09ef7dfc2d138a9bc7cb1fe174c291->enter($__internal_601d6c8a6b4bfece14eebd0836c5081d0a09ef7dfc2d138a9bc7cb1fe174c291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 120
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_601d6c8a6b4bfece14eebd0836c5081d0a09ef7dfc2d138a9bc7cb1fe174c291->leave($__internal_601d6c8a6b4bfece14eebd0836c5081d0a09ef7dfc2d138a9bc7cb1fe174c291_prof);

        
        $__internal_e8c67ddfe5b097609769bdc0359d800e16fb88a736ca383ec57ec1a8e82e0892->leave($__internal_e8c67ddfe5b097609769bdc0359d800e16fb88a736ca383ec57ec1a8e82e0892_prof);

    }

    // line 126
    public function block_logo($context, array $blocks = array())
    {
        $__internal_6dd995c7a3bb06d5fb49ef8526261fd43ef10700daa7a0670fcd8ee53adc0ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd995c7a3bb06d5fb49ef8526261fd43ef10700daa7a0670fcd8ee53adc0ff6->enter($__internal_6dd995c7a3bb06d5fb49ef8526261fd43ef10700daa7a0670fcd8ee53adc0ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_785ba6d548bafeadf6d68221f922e4ecf9200110d13b314aa443ac8f1832a6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785ba6d548bafeadf6d68221f922e4ecf9200110d13b314aa443ac8f1832a6c2->enter($__internal_785ba6d548bafeadf6d68221f922e4ecf9200110d13b314aa443ac8f1832a6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 127
        echo "                    ";
        ob_start();
        // line 128
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 129
        if ((("single_image" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 130
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 132
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 133
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 135
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 137
        echo "                ";
        
        $__internal_785ba6d548bafeadf6d68221f922e4ecf9200110d13b314aa443ac8f1832a6c2->leave($__internal_785ba6d548bafeadf6d68221f922e4ecf9200110d13b314aa443ac8f1832a6c2_prof);

        
        $__internal_6dd995c7a3bb06d5fb49ef8526261fd43ef10700daa7a0670fcd8ee53adc0ff6->leave($__internal_6dd995c7a3bb06d5fb49ef8526261fd43ef10700daa7a0670fcd8ee53adc0ff6_prof);

    }

    // line 138
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_86663c3fac6e172be05b69a0a3968e6af808779c5326a09c231d1c3d39a1425c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86663c3fac6e172be05b69a0a3968e6af808779c5326a09c231d1c3d39a1425c->enter($__internal_86663c3fac6e172be05b69a0a3968e6af808779c5326a09c231d1c3d39a1425c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_1f8c137910765b1f60f90b0d2cf31cb7dfd9455dd5e5216c7236058d4aab9aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8c137910765b1f60f90b0d2cf31cb7dfd9455dd5e5216c7236058d4aab9aea->enter($__internal_1f8c137910765b1f60f90b0d2cf31cb7dfd9455dd5e5216c7236058d4aab9aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 139
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 145
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 184
        echo "                        </div>

                        ";
        // line 186
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 212
        echo "                    </nav>
                ";
        
        $__internal_1f8c137910765b1f60f90b0d2cf31cb7dfd9455dd5e5216c7236058d4aab9aea->leave($__internal_1f8c137910765b1f60f90b0d2cf31cb7dfd9455dd5e5216c7236058d4aab9aea_prof);

        
        $__internal_86663c3fac6e172be05b69a0a3968e6af808779c5326a09c231d1c3d39a1425c->leave($__internal_86663c3fac6e172be05b69a0a3968e6af808779c5326a09c231d1c3d39a1425c_prof);

    }

    // line 145
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_5a50fc1346dfec50c3cd526417bce85ab403220ad24145802eadedb6b17592eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a50fc1346dfec50c3cd526417bce85ab403220ad24145802eadedb6b17592eb->enter($__internal_5a50fc1346dfec50c3cd526417bce85ab403220ad24145802eadedb6b17592eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_55870eb5902d650860fc42707ce5ba9c4ffaf7dc3d9f7dcdeaac818c483da28b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55870eb5902d650860fc42707ce5ba9c4ffaf7dc3d9f7dcdeaac818c483da28b->enter($__internal_55870eb5902d650860fc42707ce5ba9c4ffaf7dc3d9f7dcdeaac818c483da28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 146
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 147
        if (( !twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 148
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 149
            if (twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb")))) {
                // line 150
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 151
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
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
                        // line 152
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 153
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 154
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 155
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 158
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 159
                            echo "                                                            <li>
                                                                ";
                            // line 160
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 161
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 162
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 163
                                    echo ($context["label"] ?? $this->getContext($context, "label"));
                                } else {
                                    // line 165
                                    echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 167
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 169
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 171
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 173
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 175
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
                    // line 176
                    echo "                                                ";
                }
                // line 177
                echo "                                            ";
            } else {
                // line 178
                echo "                                                ";
                echo ($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 180
            echo "                                        </ol>
                                    ";
        }
        // line 182
        echo "                                </div>
                            ";
        
        $__internal_55870eb5902d650860fc42707ce5ba9c4ffaf7dc3d9f7dcdeaac818c483da28b->leave($__internal_55870eb5902d650860fc42707ce5ba9c4ffaf7dc3d9f7dcdeaac818c483da28b_prof);

        
        $__internal_5a50fc1346dfec50c3cd526417bce85ab403220ad24145802eadedb6b17592eb->leave($__internal_5a50fc1346dfec50c3cd526417bce85ab403220ad24145802eadedb6b17592eb_prof);

    }

    // line 186
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_0673a43be0ae673423561dd107c40eb2cc5972575ee89da9ae4e14f8c7c7fd91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0673a43be0ae673423561dd107c40eb2cc5972575ee89da9ae4e14f8c7c7fd91->enter($__internal_0673a43be0ae673423561dd107c40eb2cc5972575ee89da9ae4e14f8c7c7fd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_e9046a85fb3358d5faf27208e09f07d841cbd80e219425e3672ee7c576e3fb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9046a85fb3358d5faf27208e09f07d841cbd80e219425e3672ee7c576e3fb33->enter($__internal_e9046a85fb3358d5faf27208e09f07d841cbd80e219425e3672ee7c576e3fb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 187
        echo "                            ";
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 188
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 190
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 198
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 208
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 211
        echo "                        ";
        
        $__internal_e9046a85fb3358d5faf27208e09f07d841cbd80e219425e3672ee7c576e3fb33->leave($__internal_e9046a85fb3358d5faf27208e09f07d841cbd80e219425e3672ee7c576e3fb33_prof);

        
        $__internal_0673a43be0ae673423561dd107c40eb2cc5972575ee89da9ae4e14f8c7c7fd91->leave($__internal_0673a43be0ae673423561dd107c40eb2cc5972575ee89da9ae4e14f8c7c7fd91_prof);

    }

    // line 190
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_b19dfa9652a1bcc978dfb8be2da76ebfe99ec7638ec00fe61781112374502713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b19dfa9652a1bcc978dfb8be2da76ebfe99ec7638ec00fe61781112374502713->enter($__internal_b19dfa9652a1bcc978dfb8be2da76ebfe99ec7638ec00fe61781112374502713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_656912bf269e3faeff63c15658999c631faaecde22e1894f69015d99ac47bfb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656912bf269e3faeff63c15658999c631faaecde22e1894f69015d99ac47bfb6->enter($__internal_656912bf269e3faeff63c15658999c631faaecde22e1894f69015d99ac47bfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 191
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 195
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 195)->display($context);
        // line 196
        echo "                                            </li>
                                        ";
        
        $__internal_656912bf269e3faeff63c15658999c631faaecde22e1894f69015d99ac47bfb6->leave($__internal_656912bf269e3faeff63c15658999c631faaecde22e1894f69015d99ac47bfb6_prof);

        
        $__internal_b19dfa9652a1bcc978dfb8be2da76ebfe99ec7638ec00fe61781112374502713->leave($__internal_b19dfa9652a1bcc978dfb8be2da76ebfe99ec7638ec00fe61781112374502713_prof);

    }

    // line 198
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_bb536a7b818f6ad0493ed1799c7f8393f0dcb6a5423e6d3482e92bd1d766dc90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb536a7b818f6ad0493ed1799c7f8393f0dcb6a5423e6d3482e92bd1d766dc90->enter($__internal_bb536a7b818f6ad0493ed1799c7f8393f0dcb6a5423e6d3482e92bd1d766dc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_e381c4b5fd0607ae508511ea430081a409995201386b13b081ec5a9b105d3393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e381c4b5fd0607ae508511ea430081a409995201386b13b081ec5a9b105d3393->enter($__internal_e381c4b5fd0607ae508511ea430081a409995201386b13b081ec5a9b105d3393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 199
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 204
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 204)->display($context);
        // line 205
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_e381c4b5fd0607ae508511ea430081a409995201386b13b081ec5a9b105d3393->leave($__internal_e381c4b5fd0607ae508511ea430081a409995201386b13b081ec5a9b105d3393_prof);

        
        $__internal_bb536a7b818f6ad0493ed1799c7f8393f0dcb6a5423e6d3482e92bd1d766dc90->leave($__internal_bb536a7b818f6ad0493ed1799c7f8393f0dcb6a5423e6d3482e92bd1d766dc90_prof);

    }

    // line 217
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_db29b4a25d5489daabbb2af257584dd4c80a3b5010497c6c446639eeabe33164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db29b4a25d5489daabbb2af257584dd4c80a3b5010497c6c446639eeabe33164->enter($__internal_db29b4a25d5489daabbb2af257584dd4c80a3b5010497c6c446639eeabe33164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_0abd25c978ed77ab1c70533a190a99e8fd45c43ed8aa026849f0e052bed6f8bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0abd25c978ed77ab1c70533a190a99e8fd45c43ed8aa026849f0e052bed6f8bd->enter($__internal_0abd25c978ed77ab1c70533a190a99e8fd45c43ed8aa026849f0e052bed6f8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 218
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 250
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 252
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 349
        echo "            </div>
        ";
        
        $__internal_0abd25c978ed77ab1c70533a190a99e8fd45c43ed8aa026849f0e052bed6f8bd->leave($__internal_0abd25c978ed77ab1c70533a190a99e8fd45c43ed8aa026849f0e052bed6f8bd_prof);

        
        $__internal_db29b4a25d5489daabbb2af257584dd4c80a3b5010497c6c446639eeabe33164->leave($__internal_db29b4a25d5489daabbb2af257584dd4c80a3b5010497c6c446639eeabe33164_prof);

    }

    // line 218
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_aee12402adae0ad22db02560a05115b3adfff87c21420fcf5494249a46769434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aee12402adae0ad22db02560a05115b3adfff87c21420fcf5494249a46769434->enter($__internal_aee12402adae0ad22db02560a05115b3adfff87c21420fcf5494249a46769434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_25a069ef4ae942f275228e87479c19968b315fef4714cdbb4c4610ede5ab16c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a069ef4ae942f275228e87479c19968b315fef4714cdbb4c4610ede5ab16c8->enter($__internal_25a069ef4ae942f275228e87479c19968b315fef4714cdbb4c4610ede5ab16c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 219
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 221
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 247
        echo "                    </section>
                </aside>
            ";
        
        $__internal_25a069ef4ae942f275228e87479c19968b315fef4714cdbb4c4610ede5ab16c8->leave($__internal_25a069ef4ae942f275228e87479c19968b315fef4714cdbb4c4610ede5ab16c8_prof);

        
        $__internal_aee12402adae0ad22db02560a05115b3adfff87c21420fcf5494249a46769434->leave($__internal_aee12402adae0ad22db02560a05115b3adfff87c21420fcf5494249a46769434_prof);

    }

    // line 221
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_946c494a4b20437ceb2416159312bec9db34dda0fd4ba2adbee5f6a090d988a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946c494a4b20437ceb2416159312bec9db34dda0fd4ba2adbee5f6a090d988a7->enter($__internal_946c494a4b20437ceb2416159312bec9db34dda0fd4ba2adbee5f6a090d988a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_e0dddcdc1c2da94414c0fba3a6f070eee331aa4fc0d1af5d133e3eeab9229709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0dddcdc1c2da94414c0fba3a6f070eee331aa4fc0d1af5d133e3eeab9229709->enter($__internal_e0dddcdc1c2da94414c0fba3a6f070eee331aa4fc0d1af5d133e3eeab9229709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 222
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 234
        echo "
                            ";
        // line 235
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 236
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 239
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 246
        echo "                        ";
        
        $__internal_e0dddcdc1c2da94414c0fba3a6f070eee331aa4fc0d1af5d133e3eeab9229709->leave($__internal_e0dddcdc1c2da94414c0fba3a6f070eee331aa4fc0d1af5d133e3eeab9229709_prof);

        
        $__internal_946c494a4b20437ceb2416159312bec9db34dda0fd4ba2adbee5f6a090d988a7->leave($__internal_946c494a4b20437ceb2416159312bec9db34dda0fd4ba2adbee5f6a090d988a7_prof);

    }

    // line 222
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_8127ad8b1b32ec9f4adbd89f74553aeba7974897219d8f56620eeed01347f076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8127ad8b1b32ec9f4adbd89f74553aeba7974897219d8f56620eeed01347f076->enter($__internal_8127ad8b1b32ec9f4adbd89f74553aeba7974897219d8f56620eeed01347f076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_2bcd987a723f8a080ca32ece16ac332f165c45929fcdbdb471d0d2cafd73d9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcd987a723f8a080ca32ece16ac332f165c45929fcdbdb471d0d2cafd73d9c5->enter($__internal_2bcd987a723f8a080ca32ece16ac332f165c45929fcdbdb471d0d2cafd73d9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 223
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
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
        
        $__internal_2bcd987a723f8a080ca32ece16ac332f165c45929fcdbdb471d0d2cafd73d9c5->leave($__internal_2bcd987a723f8a080ca32ece16ac332f165c45929fcdbdb471d0d2cafd73d9c5_prof);

        
        $__internal_8127ad8b1b32ec9f4adbd89f74553aeba7974897219d8f56620eeed01347f076->leave($__internal_8127ad8b1b32ec9f4adbd89f74553aeba7974897219d8f56620eeed01347f076_prof);

    }

    // line 235
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_613bdb79ca9c5929418f069505fffc9e2a3f85f6891b2609af1abe9eb1c5aa31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613bdb79ca9c5929418f069505fffc9e2a3f85f6891b2609af1abe9eb1c5aa31->enter($__internal_613bdb79ca9c5929418f069505fffc9e2a3f85f6891b2609af1abe9eb1c5aa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_8c63c5a7bc2adc7a485b9f64a3300076c1e672a4c16ac4e44b2074b03be85378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c63c5a7bc2adc7a485b9f64a3300076c1e672a4c16ac4e44b2074b03be85378->enter($__internal_8c63c5a7bc2adc7a485b9f64a3300076c1e672a4c16ac4e44b2074b03be85378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_8c63c5a7bc2adc7a485b9f64a3300076c1e672a4c16ac4e44b2074b03be85378->leave($__internal_8c63c5a7bc2adc7a485b9f64a3300076c1e672a4c16ac4e44b2074b03be85378_prof);

        
        $__internal_613bdb79ca9c5929418f069505fffc9e2a3f85f6891b2609af1abe9eb1c5aa31->leave($__internal_613bdb79ca9c5929418f069505fffc9e2a3f85f6891b2609af1abe9eb1c5aa31_prof);

    }

    // line 236
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_a08c3265878249d28a38132ca6bce809108d5fa3d397dc89c5ff35ddc46a15b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08c3265878249d28a38132ca6bce809108d5fa3d397dc89c5ff35ddc46a15b2->enter($__internal_a08c3265878249d28a38132ca6bce809108d5fa3d397dc89c5ff35ddc46a15b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_0aadfcae79b132f43648f111e4cf5c7e8c77466b4e83c34d59a1b711cebcf5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aadfcae79b132f43648f111e4cf5c7e8c77466b4e83c34d59a1b711cebcf5e2->enter($__internal_0aadfcae79b132f43648f111e4cf5c7e8c77466b4e83c34d59a1b711cebcf5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 237
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_0aadfcae79b132f43648f111e4cf5c7e8c77466b4e83c34d59a1b711cebcf5e2->leave($__internal_0aadfcae79b132f43648f111e4cf5c7e8c77466b4e83c34d59a1b711cebcf5e2_prof);

        
        $__internal_a08c3265878249d28a38132ca6bce809108d5fa3d397dc89c5ff35ddc46a15b2->leave($__internal_a08c3265878249d28a38132ca6bce809108d5fa3d397dc89c5ff35ddc46a15b2_prof);

    }

    // line 239
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_9d85ad5dccf8bc949ca947b539ebd374d8f0d495ce2c7231ca531d6da12f2028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d85ad5dccf8bc949ca947b539ebd374d8f0d495ce2c7231ca531d6da12f2028->enter($__internal_9d85ad5dccf8bc949ca947b539ebd374d8f0d495ce2c7231ca531d6da12f2028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_a2f56056f3953bf1cc93c477db000ee454e8e890a28fa476fd2bf590aaef9a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f56056f3953bf1cc93c477db000ee454e8e890a28fa476fd2bf590aaef9a9e->enter($__internal_a2f56056f3953bf1cc93c477db000ee454e8e890a28fa476fd2bf590aaef9a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 240
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 241
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 244
        echo "                                </p>
                            ";
        
        $__internal_a2f56056f3953bf1cc93c477db000ee454e8e890a28fa476fd2bf590aaef9a9e->leave($__internal_a2f56056f3953bf1cc93c477db000ee454e8e890a28fa476fd2bf590aaef9a9e_prof);

        
        $__internal_9d85ad5dccf8bc949ca947b539ebd374d8f0d495ce2c7231ca531d6da12f2028->leave($__internal_9d85ad5dccf8bc949ca947b539ebd374d8f0d495ce2c7231ca531d6da12f2028_prof);

    }

    // line 241
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_b9a5e781d6f1040e1d2a472c8175e350ba14aafce006ca4639cada6fca657d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a5e781d6f1040e1d2a472c8175e350ba14aafce006ca4639cada6fca657d98->enter($__internal_b9a5e781d6f1040e1d2a472c8175e350ba14aafce006ca4639cada6fca657d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_cb3789d219eb5f503e5db6d912fc4bb55e580fe808bfcbec98edd335a9b48f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3789d219eb5f503e5db6d912fc4bb55e580fe808bfcbec98edd335a9b48f24->enter($__internal_cb3789d219eb5f503e5db6d912fc4bb55e580fe808bfcbec98edd335a9b48f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 242
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_cb3789d219eb5f503e5db6d912fc4bb55e580fe808bfcbec98edd335a9b48f24->leave($__internal_cb3789d219eb5f503e5db6d912fc4bb55e580fe808bfcbec98edd335a9b48f24_prof);

        
        $__internal_b9a5e781d6f1040e1d2a472c8175e350ba14aafce006ca4639cada6fca657d98->leave($__internal_b9a5e781d6f1040e1d2a472c8175e350ba14aafce006ca4639cada6fca657d98_prof);

    }

    // line 252
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_2f9e7b86743cdf68040a1a80bc197c1553582c5e852103cf7551f871f52ff69c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9e7b86743cdf68040a1a80bc197c1553582c5e852103cf7551f871f52ff69c->enter($__internal_2f9e7b86743cdf68040a1a80bc197c1553582c5e852103cf7551f871f52ff69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_96e2d1b534c86f9f418d12332e92a24c7c21050582b87017fc153da2fe4be872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e2d1b534c86f9f418d12332e92a24c7c21050582b87017fc153da2fe4be872->enter($__internal_96e2d1b534c86f9f418d12332e92a24c7c21050582b87017fc153da2fe4be872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 253
        echo "                    <section class=\"content-header\">

                        ";
        // line 255
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 309
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 312
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 347
        echo "                    </section>
                ";
        
        $__internal_96e2d1b534c86f9f418d12332e92a24c7c21050582b87017fc153da2fe4be872->leave($__internal_96e2d1b534c86f9f418d12332e92a24c7c21050582b87017fc153da2fe4be872_prof);

        
        $__internal_2f9e7b86743cdf68040a1a80bc197c1553582c5e852103cf7551f871f52ff69c->leave($__internal_2f9e7b86743cdf68040a1a80bc197c1553582c5e852103cf7551f871f52ff69c_prof);

    }

    // line 255
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_7b0a206b0d73c2c7b8b7562d713ff8e5927cf3eef76d0e9bcecce851f39a95c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0a206b0d73c2c7b8b7562d713ff8e5927cf3eef76d0e9bcecce851f39a95c3->enter($__internal_7b0a206b0d73c2c7b8b7562d713ff8e5927cf3eef76d0e9bcecce851f39a95c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_2a3d918f3d558bf8260e1b9f8333ed1cf76913a709bff7d42cff277444d49161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3d918f3d558bf8260e1b9f8333ed1cf76913a709bff7d42cff277444d49161->enter($__internal_2a3d918f3d558bf8260e1b9f8333ed1cf76913a709bff7d42cff277444d49161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 256
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 308
        echo "                        ";
        
        $__internal_2a3d918f3d558bf8260e1b9f8333ed1cf76913a709bff7d42cff277444d49161->leave($__internal_2a3d918f3d558bf8260e1b9f8333ed1cf76913a709bff7d42cff277444d49161_prof);

        
        $__internal_7b0a206b0d73c2c7b8b7562d713ff8e5927cf3eef76d0e9bcecce851f39a95c3->leave($__internal_7b0a206b0d73c2c7b8b7562d713ff8e5927cf3eef76d0e9bcecce851f39a95c3_prof);

    }

    // line 256
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_e7531052f18920b25dbc3a44d87325052c113c2c7c72e536a7a9936f42220df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7531052f18920b25dbc3a44d87325052c113c2c7c72e536a7a9936f42220df5->enter($__internal_e7531052f18920b25dbc3a44d87325052c113c2c7c72e536a7a9936f42220df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_47814df331d1002175fbb9847289bac33b257be91afb119a88f0677426213120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47814df331d1002175fbb9847289bac33b257be91afb119a88f0677426213120->enter($__internal_47814df331d1002175fbb9847289bac33b257be91afb119a88f0677426213120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 257
        echo "                                ";
        if ((( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty(($context["_actions"] ?? $this->getContext($context, "_actions")))) ||  !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"))))) {
            // line 258
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 260
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 267
            echo "
                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 270
            if ( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu")))) {
                // line 271
                echo "                                                        ";
                echo ($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 273
            echo "                                                </div>

                                                ";
            // line 275
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 276
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 277
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 278
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
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
                // line 280
                echo "                                                    </div>
                                                ";
            }
            // line 282
            echo "
                                                ";
            // line 283
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 299
            echo "
                                                ";
            // line 300
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 301
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 303
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 307
        echo "                            ";
        
        $__internal_47814df331d1002175fbb9847289bac33b257be91afb119a88f0677426213120->leave($__internal_47814df331d1002175fbb9847289bac33b257be91afb119a88f0677426213120_prof);

        
        $__internal_e7531052f18920b25dbc3a44d87325052c113c2c7c72e536a7a9936f42220df5->leave($__internal_e7531052f18920b25dbc3a44d87325052c113c2c7c72e536a7a9936f42220df5_prof);

    }

    // line 260
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_29b01403e02243c4ed2361433badd5756671e224a632e83ecd2ab8b434b300bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b01403e02243c4ed2361433badd5756671e224a632e83ecd2ab8b434b300bf->enter($__internal_29b01403e02243c4ed2361433badd5756671e224a632e83ecd2ab8b434b300bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_c4502f815202081b26addd42fd6df65083fe0d2bdd451a4f5eee17e0db53572d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4502f815202081b26addd42fd6df65083fe0d2bdd451a4f5eee17e0db53572d->enter($__internal_c4502f815202081b26addd42fd6df65083fe0d2bdd451a4f5eee17e0db53572d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 261
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title")))) {
            // line 262
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 263
            echo ($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 266
        echo "                                            ";
        
        $__internal_c4502f815202081b26addd42fd6df65083fe0d2bdd451a4f5eee17e0db53572d->leave($__internal_c4502f815202081b26addd42fd6df65083fe0d2bdd451a4f5eee17e0db53572d_prof);

        
        $__internal_29b01403e02243c4ed2361433badd5756671e224a632e83ecd2ab8b434b300bf->leave($__internal_29b01403e02243c4ed2361433badd5756671e224a632e83ecd2ab8b434b300bf_prof);

    }

    // line 283
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_647c43348f9e2c5cf3f809490aa8b6ea81211eb2d246a59167a9f426f1daa40b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_647c43348f9e2c5cf3f809490aa8b6ea81211eb2d246a59167a9f426f1daa40b->enter($__internal_647c43348f9e2c5cf3f809490aa8b6ea81211eb2d246a59167a9f426f1daa40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_d4aded5f013f3e5b32d774edcfdadc26196e3386e693da2fa27128ec10463e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4aded5f013f3e5b32d774edcfdadc26196e3386e693da2fa27128ec10463e39->enter($__internal_d4aded5f013f3e5b32d774edcfdadc26196e3386e693da2fa27128ec10463e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 284
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter(($context["_actions"] ?? $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 285
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 286
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 287
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 288
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 290
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 294
                echo "                                                            ";
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 296
            echo "                                                        </ul>
                                                    ";
        }
        // line 298
        echo "                                                ";
        
        $__internal_d4aded5f013f3e5b32d774edcfdadc26196e3386e693da2fa27128ec10463e39->leave($__internal_d4aded5f013f3e5b32d774edcfdadc26196e3386e693da2fa27128ec10463e39_prof);

        
        $__internal_647c43348f9e2c5cf3f809490aa8b6ea81211eb2d246a59167a9f426f1daa40b->leave($__internal_647c43348f9e2c5cf3f809490aa8b6ea81211eb2d246a59167a9f426f1daa40b_prof);

    }

    // line 312
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_a5c5b9b9ce0a4b27ec411c7a10cf10e16096c91727d64107c409187dbfd280db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c5b9b9ce0a4b27ec411c7a10cf10e16096c91727d64107c409187dbfd280db->enter($__internal_a5c5b9b9ce0a4b27ec411c7a10cf10e16096c91727d64107c409187dbfd280db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_93b7e4861f15fb867c609f73d1e336fd5ce9c32381a15ec72df4cf51d0bbb4ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b7e4861f15fb867c609f73d1e336fd5ce9c32381a15ec72df4cf51d0bbb4ba->enter($__internal_93b7e4861f15fb867c609f73d1e336fd5ce9c32381a15ec72df4cf51d0bbb4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 313
        echo "
                            ";
        // line 314
        $this->displayBlock('notice', $context, $blocks);
        // line 317
        echo "
                            ";
        // line 318
        if ( !twig_test_empty(($context["_preview"] ?? $this->getContext($context, "_preview")))) {
            // line 319
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 321
        echo "
                            ";
        // line 322
        if ( !twig_test_empty(($context["_content"] ?? $this->getContext($context, "_content")))) {
            // line 323
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 325
        echo "
                            ";
        // line 326
        if ( !twig_test_empty(($context["_show"] ?? $this->getContext($context, "_show")))) {
            // line 327
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 329
        echo "
                            ";
        // line 330
        if ( !twig_test_empty(($context["_form"] ?? $this->getContext($context, "_form")))) {
            // line 331
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 333
        echo "
                            ";
        // line 334
        if (( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table"))) ||  !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters"))))) {
            // line 335
            echo "                                ";
            if (twig_trim_filter(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
                // line 336
                echo "                                    <div class=\"row\">
                                        ";
                // line 337
                echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
                echo "
                                    </div>
                                ";
            }
            // line 340
            echo "
                                <div class=\"row\">
                                    ";
            // line 342
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
                                </div>

                            ";
        }
        // line 346
        echo "                        ";
        
        $__internal_93b7e4861f15fb867c609f73d1e336fd5ce9c32381a15ec72df4cf51d0bbb4ba->leave($__internal_93b7e4861f15fb867c609f73d1e336fd5ce9c32381a15ec72df4cf51d0bbb4ba_prof);

        
        $__internal_a5c5b9b9ce0a4b27ec411c7a10cf10e16096c91727d64107c409187dbfd280db->leave($__internal_a5c5b9b9ce0a4b27ec411c7a10cf10e16096c91727d64107c409187dbfd280db_prof);

    }

    // line 314
    public function block_notice($context, array $blocks = array())
    {
        $__internal_0653bae436a463c438d4b4593af5424f5bd3b5466062b14ccefe097cae63077a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0653bae436a463c438d4b4593af5424f5bd3b5466062b14ccefe097cae63077a->enter($__internal_0653bae436a463c438d4b4593af5424f5bd3b5466062b14ccefe097cae63077a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_3f8b8f6ef2b275e5427369fba039bd5486f86e9abcfdeb8f27c9d09c4cea519e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8b8f6ef2b275e5427369fba039bd5486f86e9abcfdeb8f27c9d09c4cea519e->enter($__internal_3f8b8f6ef2b275e5427369fba039bd5486f86e9abcfdeb8f27c9d09c4cea519e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 315
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 315)->display($context);
        // line 316
        echo "                            ";
        
        $__internal_3f8b8f6ef2b275e5427369fba039bd5486f86e9abcfdeb8f27c9d09c4cea519e->leave($__internal_3f8b8f6ef2b275e5427369fba039bd5486f86e9abcfdeb8f27c9d09c4cea519e_prof);

        
        $__internal_0653bae436a463c438d4b4593af5424f5bd3b5466062b14ccefe097cae63077a->leave($__internal_0653bae436a463c438d4b4593af5424f5bd3b5466062b14ccefe097cae63077a_prof);

    }

    // line 354
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_187af137d93fe6df5d7db0d17cc06659b5c547453afa1abe85ca5cd828a9c476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187af137d93fe6df5d7db0d17cc06659b5c547453afa1abe85ca5cd828a9c476->enter($__internal_187af137d93fe6df5d7db0d17cc06659b5c547453afa1abe85ca5cd828a9c476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_15c8de058f0960ba5033423ce0fcaa357649effc4224217beee1892802b0d9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c8de058f0960ba5033423ce0fcaa357649effc4224217beee1892802b0d9db->enter($__internal_15c8de058f0960ba5033423ce0fcaa357649effc4224217beee1892802b0d9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 355
        echo "            ";
        // line 356
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_15c8de058f0960ba5033423ce0fcaa357649effc4224217beee1892802b0d9db->leave($__internal_15c8de058f0960ba5033423ce0fcaa357649effc4224217beee1892802b0d9db_prof);

        
        $__internal_187af137d93fe6df5d7db0d17cc06659b5c547453afa1abe85ca5cd828a9c476->leave($__internal_187af137d93fe6df5d7db0d17cc06659b5c547453afa1abe85ca5cd828a9c476_prof);

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
        return array (  1452 => 356,  1450 => 355,  1441 => 354,  1431 => 316,  1428 => 315,  1419 => 314,  1409 => 346,  1402 => 342,  1398 => 340,  1392 => 337,  1389 => 336,  1386 => 335,  1384 => 334,  1381 => 333,  1375 => 331,  1373 => 330,  1370 => 329,  1364 => 327,  1362 => 326,  1359 => 325,  1353 => 323,  1351 => 322,  1348 => 321,  1342 => 319,  1340 => 318,  1337 => 317,  1335 => 314,  1332 => 313,  1323 => 312,  1313 => 298,  1309 => 296,  1303 => 294,  1296 => 290,  1291 => 288,  1288 => 287,  1286 => 286,  1283 => 285,  1280 => 284,  1271 => 283,  1261 => 266,  1255 => 263,  1252 => 262,  1249 => 261,  1240 => 260,  1230 => 307,  1224 => 303,  1218 => 301,  1216 => 300,  1213 => 299,  1211 => 283,  1208 => 282,  1204 => 280,  1189 => 278,  1185 => 277,  1182 => 276,  1180 => 275,  1176 => 273,  1170 => 271,  1168 => 270,  1163 => 267,  1161 => 260,  1157 => 258,  1154 => 257,  1145 => 256,  1135 => 308,  1132 => 256,  1123 => 255,  1112 => 347,  1110 => 312,  1105 => 309,  1103 => 255,  1099 => 253,  1090 => 252,  1079 => 242,  1070 => 241,  1059 => 244,  1057 => 241,  1054 => 240,  1045 => 239,  1032 => 237,  1023 => 236,  1005 => 235,  984 => 225,  978 => 223,  969 => 222,  959 => 246,  956 => 239,  953 => 236,  951 => 235,  948 => 234,  945 => 222,  936 => 221,  924 => 247,  922 => 221,  918 => 219,  909 => 218,  898 => 349,  896 => 252,  892 => 250,  889 => 218,  880 => 217,  868 => 205,  866 => 204,  859 => 199,  850 => 198,  839 => 196,  837 => 195,  831 => 191,  822 => 190,  812 => 211,  807 => 208,  804 => 198,  802 => 190,  798 => 188,  795 => 187,  786 => 186,  775 => 182,  771 => 180,  765 => 178,  762 => 177,  759 => 176,  745 => 175,  739 => 173,  735 => 171,  729 => 169,  725 => 167,  722 => 165,  719 => 163,  717 => 162,  712 => 161,  710 => 160,  707 => 159,  705 => 158,  702 => 155,  700 => 154,  698 => 153,  696 => 152,  678 => 151,  675 => 150,  673 => 149,  670 => 148,  668 => 147,  665 => 146,  656 => 145,  645 => 212,  643 => 186,  639 => 184,  637 => 145,  629 => 139,  620 => 138,  610 => 137,  606 => 135,  600 => 133,  597 => 132,  589 => 130,  587 => 129,  582 => 128,  579 => 127,  570 => 126,  556 => 122,  552 => 120,  543 => 119,  532 => 214,  529 => 138,  526 => 126,  524 => 119,  521 => 118,  512 => 117,  494 => 113,  484 => 110,  481 => 109,  478 => 108,  464 => 107,  459 => 105,  456 => 102,  454 => 101,  452 => 100,  450 => 99,  446 => 96,  443 => 95,  440 => 94,  423 => 93,  420 => 92,  417 => 91,  411 => 89,  409 => 88,  403 => 86,  394 => 85,  384 => 65,  375 => 63,  370 => 62,  361 => 61,  340 => 49,  336 => 47,  330 => 46,  322 => 45,  314 => 44,  306 => 43,  302 => 41,  293 => 40,  283 => 82,  280 => 81,  274 => 79,  271 => 78,  268 => 76,  263 => 75,  260 => 74,  257 => 72,  251 => 70,  248 => 69,  246 => 68,  244 => 67,  241 => 66,  239 => 61,  236 => 60,  233 => 40,  224 => 39,  214 => 37,  205 => 35,  200 => 34,  191 => 33,  178 => 28,  169 => 27,  151 => 25,  138 => 361,  135 => 360,  132 => 354,  130 => 353,  126 => 351,  124 => 217,  121 => 216,  119 => 117,  112 => 113,  108 => 111,  106 => 85,  102 => 83,  100 => 39,  97 => 38,  95 => 33,  92 => 32,  90 => 27,  85 => 25,  81 => 23,  79 => 22,  77 => 21,  75 => 20,  73 => 19,  71 => 18,  69 => 17,  67 => 16,  65 => 15,  63 => 14,  61 => 13,  59 => 12,  57 => 11,);
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
{% set _preview              = block('preview') is defined ? block('preview') : null %}
{% set _form                 = block('form') is defined ? block('form') : null %}
{% set _show                 = block('show') is defined ? block('show') : null %}
{% set _list_table           = block('list_table') is defined ? block('list_table') : null %}
{% set _list_filters         = block('list_filters') is defined ? block('list_filters') : null %}
{% set _tab_menu             = block('tab_menu') is defined ? block('tab_menu') : null %}
{% set _content              = block('content') is defined ? block('content') : null %}
{% set _title                = block('title') is defined ? block('title') : null %}
{% set _breadcrumb           = block('breadcrumb') is defined ? block('breadcrumb') : null %}
{% set _actions              = block('actions') is defined ? block('actions') : null %}
{% set _navbar_title         = block('navbar_title') is defined ? block('navbar_title') : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions') : null %}

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
                        CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
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
                <script src=\"{{ asset('bundles/sonatacore/vendor/moment/locale/' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
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
                            {%  if loop.index != 2 %}
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
            {% endif%}
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

                                                        {% if not loop.last  %}
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
                                                                    {{ label }}
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
                                                <div class=\"navbar-left\">
                                                    {% if _tab_menu is not empty %}
                                                        {{ _tab_menu|raw }}
                                                    {% endif %}
                                                </div>

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

                            {% if _list_table is not empty or _list_filters is not empty %}
                                {% if _list_filters|trim %}
                                    <div class=\"row\">
                                        {{ _list_filters|raw }}
                                    </div>
                                {% endif %}

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
", "SonataAdminBundle::standard_layout.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
