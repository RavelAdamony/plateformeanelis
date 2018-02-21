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
        $__internal_8b80eefc0fefa6e17e8b8e4f99298b4193de1997d76c0fc1c7563dcc401b21e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b80eefc0fefa6e17e8b8e4f99298b4193de1997d76c0fc1c7563dcc401b21e7->enter($__internal_8b80eefc0fefa6e17e8b8e4f99298b4193de1997d76c0fc1c7563dcc401b21e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_028dee444160d3dfbbf94d3c6c7e246b2989c11e8d7ac0e922323dcc929ff97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028dee444160d3dfbbf94d3c6c7e246b2989c11e8d7ac0e922323dcc929ff97a->enter($__internal_028dee444160d3dfbbf94d3c6c7e246b2989c11e8d7ac0e922323dcc929ff97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

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
        
        $__internal_8b80eefc0fefa6e17e8b8e4f99298b4193de1997d76c0fc1c7563dcc401b21e7->leave($__internal_8b80eefc0fefa6e17e8b8e4f99298b4193de1997d76c0fc1c7563dcc401b21e7_prof);

        
        $__internal_028dee444160d3dfbbf94d3c6c7e246b2989c11e8d7ac0e922323dcc929ff97a->leave($__internal_028dee444160d3dfbbf94d3c6c7e246b2989c11e8d7ac0e922323dcc929ff97a_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_f020eaf26f76b8ebaea5035c86808e717e1b4f4eab73c1a7e570153f28240e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f020eaf26f76b8ebaea5035c86808e717e1b4f4eab73c1a7e570153f28240e47->enter($__internal_f020eaf26f76b8ebaea5035c86808e717e1b4f4eab73c1a7e570153f28240e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_36895b28ba55c85faa7b306f26038d43c968c168aecf9bb14015dcf8a7ed5a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36895b28ba55c85faa7b306f26038d43c968c168aecf9bb14015dcf8a7ed5a3e->enter($__internal_36895b28ba55c85faa7b306f26038d43c968c168aecf9bb14015dcf8a7ed5a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_36895b28ba55c85faa7b306f26038d43c968c168aecf9bb14015dcf8a7ed5a3e->leave($__internal_36895b28ba55c85faa7b306f26038d43c968c168aecf9bb14015dcf8a7ed5a3e_prof);

        
        $__internal_f020eaf26f76b8ebaea5035c86808e717e1b4f4eab73c1a7e570153f28240e47->leave($__internal_f020eaf26f76b8ebaea5035c86808e717e1b4f4eab73c1a7e570153f28240e47_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_e1e0d814e547432f32b73d2ebdfb31ed64cd13ccf885c7ddb8d17daa4f931081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1e0d814e547432f32b73d2ebdfb31ed64cd13ccf885c7ddb8d17daa4f931081->enter($__internal_e1e0d814e547432f32b73d2ebdfb31ed64cd13ccf885c7ddb8d17daa4f931081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_0680447165dfc821cb34f11527cc13da51fb84adb3f0180e7c3231462af87a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0680447165dfc821cb34f11527cc13da51fb84adb3f0180e7c3231462af87a67->enter($__internal_0680447165dfc821cb34f11527cc13da51fb84adb3f0180e7c3231462af87a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_0680447165dfc821cb34f11527cc13da51fb84adb3f0180e7c3231462af87a67->leave($__internal_0680447165dfc821cb34f11527cc13da51fb84adb3f0180e7c3231462af87a67_prof);

        
        $__internal_e1e0d814e547432f32b73d2ebdfb31ed64cd13ccf885c7ddb8d17daa4f931081->leave($__internal_e1e0d814e547432f32b73d2ebdfb31ed64cd13ccf885c7ddb8d17daa4f931081_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_42d835d392074c73b2ec84497ee885174a9ee42f745a0b84b789187f398cd3f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d835d392074c73b2ec84497ee885174a9ee42f745a0b84b789187f398cd3f4->enter($__internal_42d835d392074c73b2ec84497ee885174a9ee42f745a0b84b789187f398cd3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f5f982e04ea01161d725d6c008ae4c642531a5128488cb9741a572ef114c4eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f982e04ea01161d725d6c008ae4c642531a5128488cb9741a572ef114c4eda->enter($__internal_f5f982e04ea01161d725d6c008ae4c642531a5128488cb9741a572ef114c4eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f5f982e04ea01161d725d6c008ae4c642531a5128488cb9741a572ef114c4eda->leave($__internal_f5f982e04ea01161d725d6c008ae4c642531a5128488cb9741a572ef114c4eda_prof);

        
        $__internal_42d835d392074c73b2ec84497ee885174a9ee42f745a0b84b789187f398cd3f4->leave($__internal_42d835d392074c73b2ec84497ee885174a9ee42f745a0b84b789187f398cd3f4_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fae794c17a3d84b8bc5f21b26fe4d44f9fdca5a347abca7060861fe1ed797de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae794c17a3d84b8bc5f21b26fe4d44f9fdca5a347abca7060861fe1ed797de2->enter($__internal_fae794c17a3d84b8bc5f21b26fe4d44f9fdca5a347abca7060861fe1ed797de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e8818b09d1905377668809f1794ef884060a3503c9f3f6959f6260a39918ce40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8818b09d1905377668809f1794ef884060a3503c9f3f6959f6260a39918ce40->enter($__internal_e8818b09d1905377668809f1794ef884060a3503c9f3f6959f6260a39918ce40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e8818b09d1905377668809f1794ef884060a3503c9f3f6959f6260a39918ce40->leave($__internal_e8818b09d1905377668809f1794ef884060a3503c9f3f6959f6260a39918ce40_prof);

        
        $__internal_fae794c17a3d84b8bc5f21b26fe4d44f9fdca5a347abca7060861fe1ed797de2->leave($__internal_fae794c17a3d84b8bc5f21b26fe4d44f9fdca5a347abca7060861fe1ed797de2_prof);

    }

    // line 40
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_29ff89d2b52499971b02902b332dde23c5e3680e7a9ba740bd588742b5d51ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ff89d2b52499971b02902b332dde23c5e3680e7a9ba740bd588742b5d51ba8->enter($__internal_29ff89d2b52499971b02902b332dde23c5e3680e7a9ba740bd588742b5d51ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_b8c1ee41e531004ff9e9156eb9c6e88657515bb3dba5502d0a393e25b87d870e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c1ee41e531004ff9e9156eb9c6e88657515bb3dba5502d0a393e25b87d870e->enter($__internal_b8c1ee41e531004ff9e9156eb9c6e88657515bb3dba5502d0a393e25b87d870e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

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
        
        $__internal_b8c1ee41e531004ff9e9156eb9c6e88657515bb3dba5502d0a393e25b87d870e->leave($__internal_b8c1ee41e531004ff9e9156eb9c6e88657515bb3dba5502d0a393e25b87d870e_prof);

        
        $__internal_29ff89d2b52499971b02902b332dde23c5e3680e7a9ba740bd588742b5d51ba8->leave($__internal_29ff89d2b52499971b02902b332dde23c5e3680e7a9ba740bd588742b5d51ba8_prof);

    }

    // line 61
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_9f5935bd2d8d673d953151a77f36c6626db6f07eda21a6b51f7d837d6f34b6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5935bd2d8d673d953151a77f36c6626db6f07eda21a6b51f7d837d6f34b6b1->enter($__internal_9f5935bd2d8d673d953151a77f36c6626db6f07eda21a6b51f7d837d6f34b6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_4d7f948d8ca362cb940da392723d37c65fa763149dcdaa80f3848f00af498909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7f948d8ca362cb940da392723d37c65fa763149dcdaa80f3848f00af498909->enter($__internal_4d7f948d8ca362cb940da392723d37c65fa763149dcdaa80f3848f00af498909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

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
        
        $__internal_4d7f948d8ca362cb940da392723d37c65fa763149dcdaa80f3848f00af498909->leave($__internal_4d7f948d8ca362cb940da392723d37c65fa763149dcdaa80f3848f00af498909_prof);

        
        $__internal_9f5935bd2d8d673d953151a77f36c6626db6f07eda21a6b51f7d837d6f34b6b1->leave($__internal_9f5935bd2d8d673d953151a77f36c6626db6f07eda21a6b51f7d837d6f34b6b1_prof);

    }

    // line 85
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_d11e5128d6835ed90d3e678d15f5a5cc23b0168995e2fbf798e61ce460c4c958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11e5128d6835ed90d3e678d15f5a5cc23b0168995e2fbf798e61ce460c4c958->enter($__internal_d11e5128d6835ed90d3e678d15f5a5cc23b0168995e2fbf798e61ce460c4c958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_302affe606ef940f0fcd895faf56203ad2061ca0b3123bd59649321c28ce16d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302affe606ef940f0fcd895faf56203ad2061ca0b3123bd59649321c28ce16d1->enter($__internal_302affe606ef940f0fcd895faf56203ad2061ca0b3123bd59649321c28ce16d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

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
        
        $__internal_302affe606ef940f0fcd895faf56203ad2061ca0b3123bd59649321c28ce16d1->leave($__internal_302affe606ef940f0fcd895faf56203ad2061ca0b3123bd59649321c28ce16d1_prof);

        
        $__internal_d11e5128d6835ed90d3e678d15f5a5cc23b0168995e2fbf798e61ce460c4c958->leave($__internal_d11e5128d6835ed90d3e678d15f5a5cc23b0168995e2fbf798e61ce460c4c958_prof);

    }

    // line 113
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_1d547787409b5aec1bd49d7ded9f09dc8d63fca9180f251d313311adeace41a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d547787409b5aec1bd49d7ded9f09dc8d63fca9180f251d313311adeace41a4->enter($__internal_1d547787409b5aec1bd49d7ded9f09dc8d63fca9180f251d313311adeace41a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_f251328d2a9bcd8a5a81d911c3b90a6f5abcd0a57006f04cbc5fec453a80d548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f251328d2a9bcd8a5a81d911c3b90a6f5abcd0a57006f04cbc5fec453a80d548->enter($__internal_f251328d2a9bcd8a5a81d911c3b90a6f5abcd0a57006f04cbc5fec453a80d548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_f251328d2a9bcd8a5a81d911c3b90a6f5abcd0a57006f04cbc5fec453a80d548->leave($__internal_f251328d2a9bcd8a5a81d911c3b90a6f5abcd0a57006f04cbc5fec453a80d548_prof);

        
        $__internal_1d547787409b5aec1bd49d7ded9f09dc8d63fca9180f251d313311adeace41a4->leave($__internal_1d547787409b5aec1bd49d7ded9f09dc8d63fca9180f251d313311adeace41a4_prof);

    }

    // line 117
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_5e1534211b3c2909871aa6d08dd36b98b4f551c9b4e0c493734cd8c4cc7380f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1534211b3c2909871aa6d08dd36b98b4f551c9b4e0c493734cd8c4cc7380f0->enter($__internal_5e1534211b3c2909871aa6d08dd36b98b4f551c9b4e0c493734cd8c4cc7380f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_df4ba539d5b85231e09ac52bc1d03f79243faa38f6b548528ac84fce1aaaca50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4ba539d5b85231e09ac52bc1d03f79243faa38f6b548528ac84fce1aaaca50->enter($__internal_df4ba539d5b85231e09ac52bc1d03f79243faa38f6b548528ac84fce1aaaca50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

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
        
        $__internal_df4ba539d5b85231e09ac52bc1d03f79243faa38f6b548528ac84fce1aaaca50->leave($__internal_df4ba539d5b85231e09ac52bc1d03f79243faa38f6b548528ac84fce1aaaca50_prof);

        
        $__internal_5e1534211b3c2909871aa6d08dd36b98b4f551c9b4e0c493734cd8c4cc7380f0->leave($__internal_5e1534211b3c2909871aa6d08dd36b98b4f551c9b4e0c493734cd8c4cc7380f0_prof);

    }

    // line 119
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_dd72bbb0565ccea28bdf11f2eebe2ea6dafeeb17bf108670f2e5429f1a0899cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd72bbb0565ccea28bdf11f2eebe2ea6dafeeb17bf108670f2e5429f1a0899cc->enter($__internal_dd72bbb0565ccea28bdf11f2eebe2ea6dafeeb17bf108670f2e5429f1a0899cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_b3fca9cff197eff6ce787eb1f6f44a4f2838a71911f9b53c2fd8f13a28847b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fca9cff197eff6ce787eb1f6f44a4f2838a71911f9b53c2fd8f13a28847b7e->enter($__internal_b3fca9cff197eff6ce787eb1f6f44a4f2838a71911f9b53c2fd8f13a28847b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

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
        
        $__internal_b3fca9cff197eff6ce787eb1f6f44a4f2838a71911f9b53c2fd8f13a28847b7e->leave($__internal_b3fca9cff197eff6ce787eb1f6f44a4f2838a71911f9b53c2fd8f13a28847b7e_prof);

        
        $__internal_dd72bbb0565ccea28bdf11f2eebe2ea6dafeeb17bf108670f2e5429f1a0899cc->leave($__internal_dd72bbb0565ccea28bdf11f2eebe2ea6dafeeb17bf108670f2e5429f1a0899cc_prof);

    }

    // line 126
    public function block_logo($context, array $blocks = array())
    {
        $__internal_97ed242238780b6e7f18a0f54bdab66e052ed98c8e798669d06143e35b5f3cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ed242238780b6e7f18a0f54bdab66e052ed98c8e798669d06143e35b5f3cef->enter($__internal_97ed242238780b6e7f18a0f54bdab66e052ed98c8e798669d06143e35b5f3cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_14220c6ee26f8855d54509e4517b7a7bedde74c8731359b9e02f0cc6b3ea35b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14220c6ee26f8855d54509e4517b7a7bedde74c8731359b9e02f0cc6b3ea35b9->enter($__internal_14220c6ee26f8855d54509e4517b7a7bedde74c8731359b9e02f0cc6b3ea35b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

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
        
        $__internal_14220c6ee26f8855d54509e4517b7a7bedde74c8731359b9e02f0cc6b3ea35b9->leave($__internal_14220c6ee26f8855d54509e4517b7a7bedde74c8731359b9e02f0cc6b3ea35b9_prof);

        
        $__internal_97ed242238780b6e7f18a0f54bdab66e052ed98c8e798669d06143e35b5f3cef->leave($__internal_97ed242238780b6e7f18a0f54bdab66e052ed98c8e798669d06143e35b5f3cef_prof);

    }

    // line 138
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_2fda196f37046b92d19add149a7a3301e772ba7ae7801d1af8568c8fdc1aabf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fda196f37046b92d19add149a7a3301e772ba7ae7801d1af8568c8fdc1aabf1->enter($__internal_2fda196f37046b92d19add149a7a3301e772ba7ae7801d1af8568c8fdc1aabf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_a835b9b6e7886d78729795ec961082c6c6af166be5bd22c4c82c243662be9e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a835b9b6e7886d78729795ec961082c6c6af166be5bd22c4c82c243662be9e64->enter($__internal_a835b9b6e7886d78729795ec961082c6c6af166be5bd22c4c82c243662be9e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

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
        
        $__internal_a835b9b6e7886d78729795ec961082c6c6af166be5bd22c4c82c243662be9e64->leave($__internal_a835b9b6e7886d78729795ec961082c6c6af166be5bd22c4c82c243662be9e64_prof);

        
        $__internal_2fda196f37046b92d19add149a7a3301e772ba7ae7801d1af8568c8fdc1aabf1->leave($__internal_2fda196f37046b92d19add149a7a3301e772ba7ae7801d1af8568c8fdc1aabf1_prof);

    }

    // line 145
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_a3872292cadb2e9dfa2ba5544e3a5f3acd8b194d83db66840ff974569cc54846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3872292cadb2e9dfa2ba5544e3a5f3acd8b194d83db66840ff974569cc54846->enter($__internal_a3872292cadb2e9dfa2ba5544e3a5f3acd8b194d83db66840ff974569cc54846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_5c655859342d05f616519aaa8a36c3e024aa214b1ec37f319a34d1ea4a4dd83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c655859342d05f616519aaa8a36c3e024aa214b1ec37f319a34d1ea4a4dd83b->enter($__internal_5c655859342d05f616519aaa8a36c3e024aa214b1ec37f319a34d1ea4a4dd83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

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
        
        $__internal_5c655859342d05f616519aaa8a36c3e024aa214b1ec37f319a34d1ea4a4dd83b->leave($__internal_5c655859342d05f616519aaa8a36c3e024aa214b1ec37f319a34d1ea4a4dd83b_prof);

        
        $__internal_a3872292cadb2e9dfa2ba5544e3a5f3acd8b194d83db66840ff974569cc54846->leave($__internal_a3872292cadb2e9dfa2ba5544e3a5f3acd8b194d83db66840ff974569cc54846_prof);

    }

    // line 186
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_e4cfcb1824f654d53f717cc0ba56bd052f5dc368d5d309190bffae12780c0acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4cfcb1824f654d53f717cc0ba56bd052f5dc368d5d309190bffae12780c0acb->enter($__internal_e4cfcb1824f654d53f717cc0ba56bd052f5dc368d5d309190bffae12780c0acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_fe819fc408f586a5c95b61467eca4f807e6842a551c8876102ad2eab69b3aa72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe819fc408f586a5c95b61467eca4f807e6842a551c8876102ad2eab69b3aa72->enter($__internal_fe819fc408f586a5c95b61467eca4f807e6842a551c8876102ad2eab69b3aa72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

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
        
        $__internal_fe819fc408f586a5c95b61467eca4f807e6842a551c8876102ad2eab69b3aa72->leave($__internal_fe819fc408f586a5c95b61467eca4f807e6842a551c8876102ad2eab69b3aa72_prof);

        
        $__internal_e4cfcb1824f654d53f717cc0ba56bd052f5dc368d5d309190bffae12780c0acb->leave($__internal_e4cfcb1824f654d53f717cc0ba56bd052f5dc368d5d309190bffae12780c0acb_prof);

    }

    // line 190
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_355eccf0e39e99afdbea271a787ccded4817530cd919c2856f70f699ee05657b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355eccf0e39e99afdbea271a787ccded4817530cd919c2856f70f699ee05657b->enter($__internal_355eccf0e39e99afdbea271a787ccded4817530cd919c2856f70f699ee05657b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_f6794b043b5fdf35921e7294b9490d00e0fd5cb8f9a99b4bfa2e93040114fed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6794b043b5fdf35921e7294b9490d00e0fd5cb8f9a99b4bfa2e93040114fed7->enter($__internal_f6794b043b5fdf35921e7294b9490d00e0fd5cb8f9a99b4bfa2e93040114fed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

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
        
        $__internal_f6794b043b5fdf35921e7294b9490d00e0fd5cb8f9a99b4bfa2e93040114fed7->leave($__internal_f6794b043b5fdf35921e7294b9490d00e0fd5cb8f9a99b4bfa2e93040114fed7_prof);

        
        $__internal_355eccf0e39e99afdbea271a787ccded4817530cd919c2856f70f699ee05657b->leave($__internal_355eccf0e39e99afdbea271a787ccded4817530cd919c2856f70f699ee05657b_prof);

    }

    // line 198
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_a7d3535a8c854a7c784d2da8c9d29f9af523cb0fc00cd0a6088cbca625807f14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d3535a8c854a7c784d2da8c9d29f9af523cb0fc00cd0a6088cbca625807f14->enter($__internal_a7d3535a8c854a7c784d2da8c9d29f9af523cb0fc00cd0a6088cbca625807f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_385c78bdb5110d5f51b9648ba011678e514b72ec409069bc441a59cfac1e252a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385c78bdb5110d5f51b9648ba011678e514b72ec409069bc441a59cfac1e252a->enter($__internal_385c78bdb5110d5f51b9648ba011678e514b72ec409069bc441a59cfac1e252a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

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
        
        $__internal_385c78bdb5110d5f51b9648ba011678e514b72ec409069bc441a59cfac1e252a->leave($__internal_385c78bdb5110d5f51b9648ba011678e514b72ec409069bc441a59cfac1e252a_prof);

        
        $__internal_a7d3535a8c854a7c784d2da8c9d29f9af523cb0fc00cd0a6088cbca625807f14->leave($__internal_a7d3535a8c854a7c784d2da8c9d29f9af523cb0fc00cd0a6088cbca625807f14_prof);

    }

    // line 217
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_2cb4e63bcccbd119286b6d571c5802e64cbd735110089acb71de4a106c6763a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cb4e63bcccbd119286b6d571c5802e64cbd735110089acb71de4a106c6763a8->enter($__internal_2cb4e63bcccbd119286b6d571c5802e64cbd735110089acb71de4a106c6763a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_d25f3a06f857aee7a2b998868d6834f77e3990aefc3f8fc1571f554b3130b289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25f3a06f857aee7a2b998868d6834f77e3990aefc3f8fc1571f554b3130b289->enter($__internal_d25f3a06f857aee7a2b998868d6834f77e3990aefc3f8fc1571f554b3130b289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_d25f3a06f857aee7a2b998868d6834f77e3990aefc3f8fc1571f554b3130b289->leave($__internal_d25f3a06f857aee7a2b998868d6834f77e3990aefc3f8fc1571f554b3130b289_prof);

        
        $__internal_2cb4e63bcccbd119286b6d571c5802e64cbd735110089acb71de4a106c6763a8->leave($__internal_2cb4e63bcccbd119286b6d571c5802e64cbd735110089acb71de4a106c6763a8_prof);

    }

    // line 218
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_d5176295ea981a308060d50e6a9ef4248dce5ec597610b6207190b690dae6192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5176295ea981a308060d50e6a9ef4248dce5ec597610b6207190b690dae6192->enter($__internal_d5176295ea981a308060d50e6a9ef4248dce5ec597610b6207190b690dae6192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_0cc66b502396ed70541243895685575d003e79633d8a77a49dc194e81282ef46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc66b502396ed70541243895685575d003e79633d8a77a49dc194e81282ef46->enter($__internal_0cc66b502396ed70541243895685575d003e79633d8a77a49dc194e81282ef46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

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
        
        $__internal_0cc66b502396ed70541243895685575d003e79633d8a77a49dc194e81282ef46->leave($__internal_0cc66b502396ed70541243895685575d003e79633d8a77a49dc194e81282ef46_prof);

        
        $__internal_d5176295ea981a308060d50e6a9ef4248dce5ec597610b6207190b690dae6192->leave($__internal_d5176295ea981a308060d50e6a9ef4248dce5ec597610b6207190b690dae6192_prof);

    }

    // line 221
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_f02b96527b2170c997f6d84ee4fadecb361c65e6e697996395138bb46c084407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02b96527b2170c997f6d84ee4fadecb361c65e6e697996395138bb46c084407->enter($__internal_f02b96527b2170c997f6d84ee4fadecb361c65e6e697996395138bb46c084407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_2b080107c8970e51c6e8c5f33ae4b20f717b749a9d61c7c1a8de05c1eda0b469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b080107c8970e51c6e8c5f33ae4b20f717b749a9d61c7c1a8de05c1eda0b469->enter($__internal_2b080107c8970e51c6e8c5f33ae4b20f717b749a9d61c7c1a8de05c1eda0b469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

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
        
        $__internal_2b080107c8970e51c6e8c5f33ae4b20f717b749a9d61c7c1a8de05c1eda0b469->leave($__internal_2b080107c8970e51c6e8c5f33ae4b20f717b749a9d61c7c1a8de05c1eda0b469_prof);

        
        $__internal_f02b96527b2170c997f6d84ee4fadecb361c65e6e697996395138bb46c084407->leave($__internal_f02b96527b2170c997f6d84ee4fadecb361c65e6e697996395138bb46c084407_prof);

    }

    // line 222
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_599f9943357a8d25b523cea278255afa78c8ffa7760a8802b71f2394f3dc9c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_599f9943357a8d25b523cea278255afa78c8ffa7760a8802b71f2394f3dc9c38->enter($__internal_599f9943357a8d25b523cea278255afa78c8ffa7760a8802b71f2394f3dc9c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_23dad4102c23c6a36b5bc51c3dd77055484dc1fec225085b097ec0f2be488709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23dad4102c23c6a36b5bc51c3dd77055484dc1fec225085b097ec0f2be488709->enter($__internal_23dad4102c23c6a36b5bc51c3dd77055484dc1fec225085b097ec0f2be488709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

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
        
        $__internal_23dad4102c23c6a36b5bc51c3dd77055484dc1fec225085b097ec0f2be488709->leave($__internal_23dad4102c23c6a36b5bc51c3dd77055484dc1fec225085b097ec0f2be488709_prof);

        
        $__internal_599f9943357a8d25b523cea278255afa78c8ffa7760a8802b71f2394f3dc9c38->leave($__internal_599f9943357a8d25b523cea278255afa78c8ffa7760a8802b71f2394f3dc9c38_prof);

    }

    // line 235
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_4ef93975aa7b40f6943327fcdcc80795789c0b50ebaea3bc97f9786926733114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef93975aa7b40f6943327fcdcc80795789c0b50ebaea3bc97f9786926733114->enter($__internal_4ef93975aa7b40f6943327fcdcc80795789c0b50ebaea3bc97f9786926733114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_b71590f8780aa13d048e2115c68e90621c54fc8a6452f43195928f20821226bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71590f8780aa13d048e2115c68e90621c54fc8a6452f43195928f20821226bb->enter($__internal_b71590f8780aa13d048e2115c68e90621c54fc8a6452f43195928f20821226bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_b71590f8780aa13d048e2115c68e90621c54fc8a6452f43195928f20821226bb->leave($__internal_b71590f8780aa13d048e2115c68e90621c54fc8a6452f43195928f20821226bb_prof);

        
        $__internal_4ef93975aa7b40f6943327fcdcc80795789c0b50ebaea3bc97f9786926733114->leave($__internal_4ef93975aa7b40f6943327fcdcc80795789c0b50ebaea3bc97f9786926733114_prof);

    }

    // line 236
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_94f4f1e8e4eab27ef3cdf49f15c7860467eca444fc122890ec5f348657d4a289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f4f1e8e4eab27ef3cdf49f15c7860467eca444fc122890ec5f348657d4a289->enter($__internal_94f4f1e8e4eab27ef3cdf49f15c7860467eca444fc122890ec5f348657d4a289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_eee36bbbc103aca2b9da954607a8b08a2d1317423d88d96b5190aaf9728bfc10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee36bbbc103aca2b9da954607a8b08a2d1317423d88d96b5190aaf9728bfc10->enter($__internal_eee36bbbc103aca2b9da954607a8b08a2d1317423d88d96b5190aaf9728bfc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 237
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_eee36bbbc103aca2b9da954607a8b08a2d1317423d88d96b5190aaf9728bfc10->leave($__internal_eee36bbbc103aca2b9da954607a8b08a2d1317423d88d96b5190aaf9728bfc10_prof);

        
        $__internal_94f4f1e8e4eab27ef3cdf49f15c7860467eca444fc122890ec5f348657d4a289->leave($__internal_94f4f1e8e4eab27ef3cdf49f15c7860467eca444fc122890ec5f348657d4a289_prof);

    }

    // line 239
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_5bb9cc430a251f3af9422d124df0dda6667ed03d748afa55df76d0cad1f604cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb9cc430a251f3af9422d124df0dda6667ed03d748afa55df76d0cad1f604cc->enter($__internal_5bb9cc430a251f3af9422d124df0dda6667ed03d748afa55df76d0cad1f604cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_6299f0b2c67d4fd8d6680dc41edfcc4ad7d64a3043207264604ca732ee9bb886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6299f0b2c67d4fd8d6680dc41edfcc4ad7d64a3043207264604ca732ee9bb886->enter($__internal_6299f0b2c67d4fd8d6680dc41edfcc4ad7d64a3043207264604ca732ee9bb886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 240
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 241
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 244
        echo "                                </p>
                            ";
        
        $__internal_6299f0b2c67d4fd8d6680dc41edfcc4ad7d64a3043207264604ca732ee9bb886->leave($__internal_6299f0b2c67d4fd8d6680dc41edfcc4ad7d64a3043207264604ca732ee9bb886_prof);

        
        $__internal_5bb9cc430a251f3af9422d124df0dda6667ed03d748afa55df76d0cad1f604cc->leave($__internal_5bb9cc430a251f3af9422d124df0dda6667ed03d748afa55df76d0cad1f604cc_prof);

    }

    // line 241
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_ad4ec35f3b7ffa2151cf161e06931aba1f4fff4bec23ec549ea1c79256b5b4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad4ec35f3b7ffa2151cf161e06931aba1f4fff4bec23ec549ea1c79256b5b4d4->enter($__internal_ad4ec35f3b7ffa2151cf161e06931aba1f4fff4bec23ec549ea1c79256b5b4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_50de86aa4b85f7645a8377b35cff9626473d99d5f4224b983741072efa11d89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50de86aa4b85f7645a8377b35cff9626473d99d5f4224b983741072efa11d89c->enter($__internal_50de86aa4b85f7645a8377b35cff9626473d99d5f4224b983741072efa11d89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 242
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_50de86aa4b85f7645a8377b35cff9626473d99d5f4224b983741072efa11d89c->leave($__internal_50de86aa4b85f7645a8377b35cff9626473d99d5f4224b983741072efa11d89c_prof);

        
        $__internal_ad4ec35f3b7ffa2151cf161e06931aba1f4fff4bec23ec549ea1c79256b5b4d4->leave($__internal_ad4ec35f3b7ffa2151cf161e06931aba1f4fff4bec23ec549ea1c79256b5b4d4_prof);

    }

    // line 252
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_aa60b7bb88ca4fa2f3c1cdfcdc105915115fe09c95313a2ad79bb4fde262dd53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa60b7bb88ca4fa2f3c1cdfcdc105915115fe09c95313a2ad79bb4fde262dd53->enter($__internal_aa60b7bb88ca4fa2f3c1cdfcdc105915115fe09c95313a2ad79bb4fde262dd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_49793fbf2a7ef4b6a57f7d19742de2e0f17f1979497e957e857cdc9cb68d4fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49793fbf2a7ef4b6a57f7d19742de2e0f17f1979497e957e857cdc9cb68d4fe5->enter($__internal_49793fbf2a7ef4b6a57f7d19742de2e0f17f1979497e957e857cdc9cb68d4fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

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
        
        $__internal_49793fbf2a7ef4b6a57f7d19742de2e0f17f1979497e957e857cdc9cb68d4fe5->leave($__internal_49793fbf2a7ef4b6a57f7d19742de2e0f17f1979497e957e857cdc9cb68d4fe5_prof);

        
        $__internal_aa60b7bb88ca4fa2f3c1cdfcdc105915115fe09c95313a2ad79bb4fde262dd53->leave($__internal_aa60b7bb88ca4fa2f3c1cdfcdc105915115fe09c95313a2ad79bb4fde262dd53_prof);

    }

    // line 255
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_4c7e06748f1d63439a990aeb87f959ea128de9d1a66d9dbcf3a577d77897f20c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7e06748f1d63439a990aeb87f959ea128de9d1a66d9dbcf3a577d77897f20c->enter($__internal_4c7e06748f1d63439a990aeb87f959ea128de9d1a66d9dbcf3a577d77897f20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_c919a633d97270d8c8d9990777a995a25164dddb2c739afd5a8ef77701c7608f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c919a633d97270d8c8d9990777a995a25164dddb2c739afd5a8ef77701c7608f->enter($__internal_c919a633d97270d8c8d9990777a995a25164dddb2c739afd5a8ef77701c7608f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 256
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 308
        echo "                        ";
        
        $__internal_c919a633d97270d8c8d9990777a995a25164dddb2c739afd5a8ef77701c7608f->leave($__internal_c919a633d97270d8c8d9990777a995a25164dddb2c739afd5a8ef77701c7608f_prof);

        
        $__internal_4c7e06748f1d63439a990aeb87f959ea128de9d1a66d9dbcf3a577d77897f20c->leave($__internal_4c7e06748f1d63439a990aeb87f959ea128de9d1a66d9dbcf3a577d77897f20c_prof);

    }

    // line 256
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_c0e0f5ca2830bb1654dda5856dc3f5db9772469790b1908b2a9a811dadb2e58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e0f5ca2830bb1654dda5856dc3f5db9772469790b1908b2a9a811dadb2e58d->enter($__internal_c0e0f5ca2830bb1654dda5856dc3f5db9772469790b1908b2a9a811dadb2e58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_0e6a57d1e6093154f320d1a84c84766e32808fc5e4c78e1bff58f3a58f360617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6a57d1e6093154f320d1a84c84766e32808fc5e4c78e1bff58f3a58f360617->enter($__internal_0e6a57d1e6093154f320d1a84c84766e32808fc5e4c78e1bff58f3a58f360617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

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
        
        $__internal_0e6a57d1e6093154f320d1a84c84766e32808fc5e4c78e1bff58f3a58f360617->leave($__internal_0e6a57d1e6093154f320d1a84c84766e32808fc5e4c78e1bff58f3a58f360617_prof);

        
        $__internal_c0e0f5ca2830bb1654dda5856dc3f5db9772469790b1908b2a9a811dadb2e58d->leave($__internal_c0e0f5ca2830bb1654dda5856dc3f5db9772469790b1908b2a9a811dadb2e58d_prof);

    }

    // line 260
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_6b3492aa9e411c15bec4115dead2828515f4e3a303dca743cd1a361a9b479221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3492aa9e411c15bec4115dead2828515f4e3a303dca743cd1a361a9b479221->enter($__internal_6b3492aa9e411c15bec4115dead2828515f4e3a303dca743cd1a361a9b479221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_3e630a9eccae3857b4cda9cd599b43d8dc6ad3176fc9a2ae8091db289bfca975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e630a9eccae3857b4cda9cd599b43d8dc6ad3176fc9a2ae8091db289bfca975->enter($__internal_3e630a9eccae3857b4cda9cd599b43d8dc6ad3176fc9a2ae8091db289bfca975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

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
        
        $__internal_3e630a9eccae3857b4cda9cd599b43d8dc6ad3176fc9a2ae8091db289bfca975->leave($__internal_3e630a9eccae3857b4cda9cd599b43d8dc6ad3176fc9a2ae8091db289bfca975_prof);

        
        $__internal_6b3492aa9e411c15bec4115dead2828515f4e3a303dca743cd1a361a9b479221->leave($__internal_6b3492aa9e411c15bec4115dead2828515f4e3a303dca743cd1a361a9b479221_prof);

    }

    // line 283
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_477cd374c6bf948b15bbc6911311c259d5418853aaf81033944d9aa25136615f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477cd374c6bf948b15bbc6911311c259d5418853aaf81033944d9aa25136615f->enter($__internal_477cd374c6bf948b15bbc6911311c259d5418853aaf81033944d9aa25136615f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_a6ac6505cbecf280305a255db9095d2b90362d0ed00c3279da3cb78548145c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ac6505cbecf280305a255db9095d2b90362d0ed00c3279da3cb78548145c22->enter($__internal_a6ac6505cbecf280305a255db9095d2b90362d0ed00c3279da3cb78548145c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

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
        
        $__internal_a6ac6505cbecf280305a255db9095d2b90362d0ed00c3279da3cb78548145c22->leave($__internal_a6ac6505cbecf280305a255db9095d2b90362d0ed00c3279da3cb78548145c22_prof);

        
        $__internal_477cd374c6bf948b15bbc6911311c259d5418853aaf81033944d9aa25136615f->leave($__internal_477cd374c6bf948b15bbc6911311c259d5418853aaf81033944d9aa25136615f_prof);

    }

    // line 312
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_5b7a8f494ba08f139ba3fc225eae8dbad3913184fcb5b60d63992f1ee2357a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b7a8f494ba08f139ba3fc225eae8dbad3913184fcb5b60d63992f1ee2357a7b->enter($__internal_5b7a8f494ba08f139ba3fc225eae8dbad3913184fcb5b60d63992f1ee2357a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_b265ee05feb596aec2945f13f6d19e4258666c994a77801509fe3f2e788fb276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b265ee05feb596aec2945f13f6d19e4258666c994a77801509fe3f2e788fb276->enter($__internal_b265ee05feb596aec2945f13f6d19e4258666c994a77801509fe3f2e788fb276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

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
        
        $__internal_b265ee05feb596aec2945f13f6d19e4258666c994a77801509fe3f2e788fb276->leave($__internal_b265ee05feb596aec2945f13f6d19e4258666c994a77801509fe3f2e788fb276_prof);

        
        $__internal_5b7a8f494ba08f139ba3fc225eae8dbad3913184fcb5b60d63992f1ee2357a7b->leave($__internal_5b7a8f494ba08f139ba3fc225eae8dbad3913184fcb5b60d63992f1ee2357a7b_prof);

    }

    // line 314
    public function block_notice($context, array $blocks = array())
    {
        $__internal_5c72e2213396dba7b0205cb1dc417f5b0f6e9e4b908c135d0c8bb52d15a55b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c72e2213396dba7b0205cb1dc417f5b0f6e9e4b908c135d0c8bb52d15a55b08->enter($__internal_5c72e2213396dba7b0205cb1dc417f5b0f6e9e4b908c135d0c8bb52d15a55b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_9eb9a54b13620ebf08ecdeb6971353d26f686c51336dab5020ab7d05130ff666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb9a54b13620ebf08ecdeb6971353d26f686c51336dab5020ab7d05130ff666->enter($__internal_9eb9a54b13620ebf08ecdeb6971353d26f686c51336dab5020ab7d05130ff666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 315
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 315)->display($context);
        // line 316
        echo "                            ";
        
        $__internal_9eb9a54b13620ebf08ecdeb6971353d26f686c51336dab5020ab7d05130ff666->leave($__internal_9eb9a54b13620ebf08ecdeb6971353d26f686c51336dab5020ab7d05130ff666_prof);

        
        $__internal_5c72e2213396dba7b0205cb1dc417f5b0f6e9e4b908c135d0c8bb52d15a55b08->leave($__internal_5c72e2213396dba7b0205cb1dc417f5b0f6e9e4b908c135d0c8bb52d15a55b08_prof);

    }

    // line 354
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_4e81c94f98ad06c047618c404598c617b289b9edf328cedf1eac0b23919d88bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e81c94f98ad06c047618c404598c617b289b9edf328cedf1eac0b23919d88bb->enter($__internal_4e81c94f98ad06c047618c404598c617b289b9edf328cedf1eac0b23919d88bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_b05983941b3c5734b07e67b5e109e5969e0e62acd249753c4f828f38fefd3f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05983941b3c5734b07e67b5e109e5969e0e62acd249753c4f828f38fefd3f01->enter($__internal_b05983941b3c5734b07e67b5e109e5969e0e62acd249753c4f828f38fefd3f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 355
        echo "            ";
        // line 356
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_b05983941b3c5734b07e67b5e109e5969e0e62acd249753c4f828f38fefd3f01->leave($__internal_b05983941b3c5734b07e67b5e109e5969e0e62acd249753c4f828f38fefd3f01_prof);

        
        $__internal_4e81c94f98ad06c047618c404598c617b289b9edf328cedf1eac0b23919d88bb->leave($__internal_4e81c94f98ad06c047618c404598c617b289b9edf328cedf1eac0b23919d88bb_prof);

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
", "SonataAdminBundle::standard_layout.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
