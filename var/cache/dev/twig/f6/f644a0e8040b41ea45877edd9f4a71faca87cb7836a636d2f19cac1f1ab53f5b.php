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
        $__internal_cee05af1a3033563db25103f0a5d56cb81caf8ad68419f832e3a687824e76e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee05af1a3033563db25103f0a5d56cb81caf8ad68419f832e3a687824e76e3d->enter($__internal_cee05af1a3033563db25103f0a5d56cb81caf8ad68419f832e3a687824e76e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_35d1184ccc1c28189b18f4131a9b159025667c4a880b7d7ce7bd38d39eee14a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d1184ccc1c28189b18f4131a9b159025667c4a880b7d7ce7bd38d39eee14a5->enter($__internal_35d1184ccc1c28189b18f4131a9b159025667c4a880b7d7ce7bd38d39eee14a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

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
        
        $__internal_cee05af1a3033563db25103f0a5d56cb81caf8ad68419f832e3a687824e76e3d->leave($__internal_cee05af1a3033563db25103f0a5d56cb81caf8ad68419f832e3a687824e76e3d_prof);

        
        $__internal_35d1184ccc1c28189b18f4131a9b159025667c4a880b7d7ce7bd38d39eee14a5->leave($__internal_35d1184ccc1c28189b18f4131a9b159025667c4a880b7d7ce7bd38d39eee14a5_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_3cb9cd33d7748269884d47c18fe5e4bacf03af8640efc734ab9da29048ec3df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb9cd33d7748269884d47c18fe5e4bacf03af8640efc734ab9da29048ec3df7->enter($__internal_3cb9cd33d7748269884d47c18fe5e4bacf03af8640efc734ab9da29048ec3df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_3e1a047e522d80c8c1a4336553ce46c5243e9ad71998e1f1a1f6ac2281dd4fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1a047e522d80c8c1a4336553ce46c5243e9ad71998e1f1a1f6ac2281dd4fff->enter($__internal_3e1a047e522d80c8c1a4336553ce46c5243e9ad71998e1f1a1f6ac2281dd4fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_3e1a047e522d80c8c1a4336553ce46c5243e9ad71998e1f1a1f6ac2281dd4fff->leave($__internal_3e1a047e522d80c8c1a4336553ce46c5243e9ad71998e1f1a1f6ac2281dd4fff_prof);

        
        $__internal_3cb9cd33d7748269884d47c18fe5e4bacf03af8640efc734ab9da29048ec3df7->leave($__internal_3cb9cd33d7748269884d47c18fe5e4bacf03af8640efc734ab9da29048ec3df7_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_03998dc69ad3d51f944a681a316d63d163a91a4ef9a23e1a2290541fc2e68e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03998dc69ad3d51f944a681a316d63d163a91a4ef9a23e1a2290541fc2e68e9f->enter($__internal_03998dc69ad3d51f944a681a316d63d163a91a4ef9a23e1a2290541fc2e68e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_71d07931a9105300f67475c276818e02403003447d28f9996cd0b5665bbf1530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d07931a9105300f67475c276818e02403003447d28f9996cd0b5665bbf1530->enter($__internal_71d07931a9105300f67475c276818e02403003447d28f9996cd0b5665bbf1530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_71d07931a9105300f67475c276818e02403003447d28f9996cd0b5665bbf1530->leave($__internal_71d07931a9105300f67475c276818e02403003447d28f9996cd0b5665bbf1530_prof);

        
        $__internal_03998dc69ad3d51f944a681a316d63d163a91a4ef9a23e1a2290541fc2e68e9f->leave($__internal_03998dc69ad3d51f944a681a316d63d163a91a4ef9a23e1a2290541fc2e68e9f_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94b8bf7ec21016043f619ac3d04db4f2773f7833cdb3442832c4d142795f069c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b8bf7ec21016043f619ac3d04db4f2773f7833cdb3442832c4d142795f069c->enter($__internal_94b8bf7ec21016043f619ac3d04db4f2773f7833cdb3442832c4d142795f069c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5ae28ca85954c60bc2b8d8c08f96f9e11b94fdc56e18d80524f7adfcff2ffa47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae28ca85954c60bc2b8d8c08f96f9e11b94fdc56e18d80524f7adfcff2ffa47->enter($__internal_5ae28ca85954c60bc2b8d8c08f96f9e11b94fdc56e18d80524f7adfcff2ffa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5ae28ca85954c60bc2b8d8c08f96f9e11b94fdc56e18d80524f7adfcff2ffa47->leave($__internal_5ae28ca85954c60bc2b8d8c08f96f9e11b94fdc56e18d80524f7adfcff2ffa47_prof);

        
        $__internal_94b8bf7ec21016043f619ac3d04db4f2773f7833cdb3442832c4d142795f069c->leave($__internal_94b8bf7ec21016043f619ac3d04db4f2773f7833cdb3442832c4d142795f069c_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88e88b46f53d8b094834bfddb0e57334166154f6a9d6933dbd8312f9d685bd8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e88b46f53d8b094834bfddb0e57334166154f6a9d6933dbd8312f9d685bd8a->enter($__internal_88e88b46f53d8b094834bfddb0e57334166154f6a9d6933dbd8312f9d685bd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_afa31535bd978d0687d39b49ba72fed1e4da55e67f920cb3456ed7ef46369226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa31535bd978d0687d39b49ba72fed1e4da55e67f920cb3456ed7ef46369226->enter($__internal_afa31535bd978d0687d39b49ba72fed1e4da55e67f920cb3456ed7ef46369226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_afa31535bd978d0687d39b49ba72fed1e4da55e67f920cb3456ed7ef46369226->leave($__internal_afa31535bd978d0687d39b49ba72fed1e4da55e67f920cb3456ed7ef46369226_prof);

        
        $__internal_88e88b46f53d8b094834bfddb0e57334166154f6a9d6933dbd8312f9d685bd8a->leave($__internal_88e88b46f53d8b094834bfddb0e57334166154f6a9d6933dbd8312f9d685bd8a_prof);

    }

    // line 40
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_f0e34ada773498dfbe1158687b50af0bf3e27cf59cd4f3ed12d394392d393bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e34ada773498dfbe1158687b50af0bf3e27cf59cd4f3ed12d394392d393bd1->enter($__internal_f0e34ada773498dfbe1158687b50af0bf3e27cf59cd4f3ed12d394392d393bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_7688ba8029007027817b4fccddf5b33bf1a9c3c96a0484c6b3c59023f344d0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7688ba8029007027817b4fccddf5b33bf1a9c3c96a0484c6b3c59023f344d0b7->enter($__internal_7688ba8029007027817b4fccddf5b33bf1a9c3c96a0484c6b3c59023f344d0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

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
        
        $__internal_7688ba8029007027817b4fccddf5b33bf1a9c3c96a0484c6b3c59023f344d0b7->leave($__internal_7688ba8029007027817b4fccddf5b33bf1a9c3c96a0484c6b3c59023f344d0b7_prof);

        
        $__internal_f0e34ada773498dfbe1158687b50af0bf3e27cf59cd4f3ed12d394392d393bd1->leave($__internal_f0e34ada773498dfbe1158687b50af0bf3e27cf59cd4f3ed12d394392d393bd1_prof);

    }

    // line 61
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_e1e12f7279f373a9f0d74600ab72e0a85604e2c96ec26882d4f786d48433868d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1e12f7279f373a9f0d74600ab72e0a85604e2c96ec26882d4f786d48433868d->enter($__internal_e1e12f7279f373a9f0d74600ab72e0a85604e2c96ec26882d4f786d48433868d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_6acfd5bfc908e7e52ebfce462ef41fda7c92bb0c679016a72c2745c3dc8cbf44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6acfd5bfc908e7e52ebfce462ef41fda7c92bb0c679016a72c2745c3dc8cbf44->enter($__internal_6acfd5bfc908e7e52ebfce462ef41fda7c92bb0c679016a72c2745c3dc8cbf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

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
        
        $__internal_6acfd5bfc908e7e52ebfce462ef41fda7c92bb0c679016a72c2745c3dc8cbf44->leave($__internal_6acfd5bfc908e7e52ebfce462ef41fda7c92bb0c679016a72c2745c3dc8cbf44_prof);

        
        $__internal_e1e12f7279f373a9f0d74600ab72e0a85604e2c96ec26882d4f786d48433868d->leave($__internal_e1e12f7279f373a9f0d74600ab72e0a85604e2c96ec26882d4f786d48433868d_prof);

    }

    // line 85
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_11bfd3067912f9935a417db4057090873d9aff57a95b33256a84446345032a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11bfd3067912f9935a417db4057090873d9aff57a95b33256a84446345032a77->enter($__internal_11bfd3067912f9935a417db4057090873d9aff57a95b33256a84446345032a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_8851ea9b44327443d484bfa6b73e90318de144c23f1d0e6ca6aff3e0f974c5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8851ea9b44327443d484bfa6b73e90318de144c23f1d0e6ca6aff3e0f974c5c7->enter($__internal_8851ea9b44327443d484bfa6b73e90318de144c23f1d0e6ca6aff3e0f974c5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

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
        
        $__internal_8851ea9b44327443d484bfa6b73e90318de144c23f1d0e6ca6aff3e0f974c5c7->leave($__internal_8851ea9b44327443d484bfa6b73e90318de144c23f1d0e6ca6aff3e0f974c5c7_prof);

        
        $__internal_11bfd3067912f9935a417db4057090873d9aff57a95b33256a84446345032a77->leave($__internal_11bfd3067912f9935a417db4057090873d9aff57a95b33256a84446345032a77_prof);

    }

    // line 113
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_44348ebba6323fc08af90ae82c7222f897a85a0295e5c3d83570f4a3200c60d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44348ebba6323fc08af90ae82c7222f897a85a0295e5c3d83570f4a3200c60d0->enter($__internal_44348ebba6323fc08af90ae82c7222f897a85a0295e5c3d83570f4a3200c60d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_a357c2d4f319f4aca971e4885b469d66ae7cc1cedd1eaaebe823143334939fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a357c2d4f319f4aca971e4885b469d66ae7cc1cedd1eaaebe823143334939fc6->enter($__internal_a357c2d4f319f4aca971e4885b469d66ae7cc1cedd1eaaebe823143334939fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_a357c2d4f319f4aca971e4885b469d66ae7cc1cedd1eaaebe823143334939fc6->leave($__internal_a357c2d4f319f4aca971e4885b469d66ae7cc1cedd1eaaebe823143334939fc6_prof);

        
        $__internal_44348ebba6323fc08af90ae82c7222f897a85a0295e5c3d83570f4a3200c60d0->leave($__internal_44348ebba6323fc08af90ae82c7222f897a85a0295e5c3d83570f4a3200c60d0_prof);

    }

    // line 117
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_e18b540f9e011e56cba86e9e5a5fdc780df3f2f602219e92158f577863b786da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18b540f9e011e56cba86e9e5a5fdc780df3f2f602219e92158f577863b786da->enter($__internal_e18b540f9e011e56cba86e9e5a5fdc780df3f2f602219e92158f577863b786da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_4f027f4d92ed2046cd1d2f8c36c610f2c1eb6f5418f10e0b2a6dce00e58b3bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f027f4d92ed2046cd1d2f8c36c610f2c1eb6f5418f10e0b2a6dce00e58b3bf1->enter($__internal_4f027f4d92ed2046cd1d2f8c36c610f2c1eb6f5418f10e0b2a6dce00e58b3bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

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
        
        $__internal_4f027f4d92ed2046cd1d2f8c36c610f2c1eb6f5418f10e0b2a6dce00e58b3bf1->leave($__internal_4f027f4d92ed2046cd1d2f8c36c610f2c1eb6f5418f10e0b2a6dce00e58b3bf1_prof);

        
        $__internal_e18b540f9e011e56cba86e9e5a5fdc780df3f2f602219e92158f577863b786da->leave($__internal_e18b540f9e011e56cba86e9e5a5fdc780df3f2f602219e92158f577863b786da_prof);

    }

    // line 119
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_09056b08f4999fe0876b38f557cc0049ad96aba6a03be1bf5114b1ebd1804bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09056b08f4999fe0876b38f557cc0049ad96aba6a03be1bf5114b1ebd1804bd2->enter($__internal_09056b08f4999fe0876b38f557cc0049ad96aba6a03be1bf5114b1ebd1804bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_3d09fc903f7f60e7cd8bdf969c6c715f27c2502c07367fcc800e366c0f068754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d09fc903f7f60e7cd8bdf969c6c715f27c2502c07367fcc800e366c0f068754->enter($__internal_3d09fc903f7f60e7cd8bdf969c6c715f27c2502c07367fcc800e366c0f068754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

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
        
        $__internal_3d09fc903f7f60e7cd8bdf969c6c715f27c2502c07367fcc800e366c0f068754->leave($__internal_3d09fc903f7f60e7cd8bdf969c6c715f27c2502c07367fcc800e366c0f068754_prof);

        
        $__internal_09056b08f4999fe0876b38f557cc0049ad96aba6a03be1bf5114b1ebd1804bd2->leave($__internal_09056b08f4999fe0876b38f557cc0049ad96aba6a03be1bf5114b1ebd1804bd2_prof);

    }

    // line 126
    public function block_logo($context, array $blocks = array())
    {
        $__internal_8f2f2eecae654267f21807a6f9387be45c61a14bf3a20f70b796cda298075773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f2f2eecae654267f21807a6f9387be45c61a14bf3a20f70b796cda298075773->enter($__internal_8f2f2eecae654267f21807a6f9387be45c61a14bf3a20f70b796cda298075773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_a41caa33d8dfd41fbd59d39b91b1d370eec0ecbc7dc2196abe6877772bf0163a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41caa33d8dfd41fbd59d39b91b1d370eec0ecbc7dc2196abe6877772bf0163a->enter($__internal_a41caa33d8dfd41fbd59d39b91b1d370eec0ecbc7dc2196abe6877772bf0163a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

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
        
        $__internal_a41caa33d8dfd41fbd59d39b91b1d370eec0ecbc7dc2196abe6877772bf0163a->leave($__internal_a41caa33d8dfd41fbd59d39b91b1d370eec0ecbc7dc2196abe6877772bf0163a_prof);

        
        $__internal_8f2f2eecae654267f21807a6f9387be45c61a14bf3a20f70b796cda298075773->leave($__internal_8f2f2eecae654267f21807a6f9387be45c61a14bf3a20f70b796cda298075773_prof);

    }

    // line 138
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_43519cb9ef9c55ff5956e35f018560f5eea4be16d19e8595409094ffb34333f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43519cb9ef9c55ff5956e35f018560f5eea4be16d19e8595409094ffb34333f7->enter($__internal_43519cb9ef9c55ff5956e35f018560f5eea4be16d19e8595409094ffb34333f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_1fd834f67e27032adfe1c539238f701d99cef8f352f2c6121334a806772623f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd834f67e27032adfe1c539238f701d99cef8f352f2c6121334a806772623f4->enter($__internal_1fd834f67e27032adfe1c539238f701d99cef8f352f2c6121334a806772623f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

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
        
        $__internal_1fd834f67e27032adfe1c539238f701d99cef8f352f2c6121334a806772623f4->leave($__internal_1fd834f67e27032adfe1c539238f701d99cef8f352f2c6121334a806772623f4_prof);

        
        $__internal_43519cb9ef9c55ff5956e35f018560f5eea4be16d19e8595409094ffb34333f7->leave($__internal_43519cb9ef9c55ff5956e35f018560f5eea4be16d19e8595409094ffb34333f7_prof);

    }

    // line 145
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_e2c03f5c200acf5611c547ed3635d474f20c5841086b17a3db19acb1f7c8f7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c03f5c200acf5611c547ed3635d474f20c5841086b17a3db19acb1f7c8f7b9->enter($__internal_e2c03f5c200acf5611c547ed3635d474f20c5841086b17a3db19acb1f7c8f7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_ba733539d7823eeff3c97a860f808e52a28df4aed2968d3ddb3042fecfb9543e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba733539d7823eeff3c97a860f808e52a28df4aed2968d3ddb3042fecfb9543e->enter($__internal_ba733539d7823eeff3c97a860f808e52a28df4aed2968d3ddb3042fecfb9543e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

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
        
        $__internal_ba733539d7823eeff3c97a860f808e52a28df4aed2968d3ddb3042fecfb9543e->leave($__internal_ba733539d7823eeff3c97a860f808e52a28df4aed2968d3ddb3042fecfb9543e_prof);

        
        $__internal_e2c03f5c200acf5611c547ed3635d474f20c5841086b17a3db19acb1f7c8f7b9->leave($__internal_e2c03f5c200acf5611c547ed3635d474f20c5841086b17a3db19acb1f7c8f7b9_prof);

    }

    // line 186
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_f2ed7823b6bddfaf0f4f581178ce0aa58958580dc3715ee715ec2e0837cffa90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ed7823b6bddfaf0f4f581178ce0aa58958580dc3715ee715ec2e0837cffa90->enter($__internal_f2ed7823b6bddfaf0f4f581178ce0aa58958580dc3715ee715ec2e0837cffa90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_7a3f802512ea1e5a2e7560ada77719bd4b1daa405177c91e71ac50c74ecdf3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3f802512ea1e5a2e7560ada77719bd4b1daa405177c91e71ac50c74ecdf3bc->enter($__internal_7a3f802512ea1e5a2e7560ada77719bd4b1daa405177c91e71ac50c74ecdf3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

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
        
        $__internal_7a3f802512ea1e5a2e7560ada77719bd4b1daa405177c91e71ac50c74ecdf3bc->leave($__internal_7a3f802512ea1e5a2e7560ada77719bd4b1daa405177c91e71ac50c74ecdf3bc_prof);

        
        $__internal_f2ed7823b6bddfaf0f4f581178ce0aa58958580dc3715ee715ec2e0837cffa90->leave($__internal_f2ed7823b6bddfaf0f4f581178ce0aa58958580dc3715ee715ec2e0837cffa90_prof);

    }

    // line 190
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_cd7e08c3c976506088df1b279098b6920ca8c684e079e0b29ca553d3b685f4ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7e08c3c976506088df1b279098b6920ca8c684e079e0b29ca553d3b685f4ea->enter($__internal_cd7e08c3c976506088df1b279098b6920ca8c684e079e0b29ca553d3b685f4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_84700d8632e4d62ece1d56b6ac13bcf011fb1bb42f98527a09fd7ad74bbee482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84700d8632e4d62ece1d56b6ac13bcf011fb1bb42f98527a09fd7ad74bbee482->enter($__internal_84700d8632e4d62ece1d56b6ac13bcf011fb1bb42f98527a09fd7ad74bbee482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

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
        
        $__internal_84700d8632e4d62ece1d56b6ac13bcf011fb1bb42f98527a09fd7ad74bbee482->leave($__internal_84700d8632e4d62ece1d56b6ac13bcf011fb1bb42f98527a09fd7ad74bbee482_prof);

        
        $__internal_cd7e08c3c976506088df1b279098b6920ca8c684e079e0b29ca553d3b685f4ea->leave($__internal_cd7e08c3c976506088df1b279098b6920ca8c684e079e0b29ca553d3b685f4ea_prof);

    }

    // line 198
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_e9a440be27a32097da9b5bd0269969f0ae079348b1f7f67153dda2284c36a847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a440be27a32097da9b5bd0269969f0ae079348b1f7f67153dda2284c36a847->enter($__internal_e9a440be27a32097da9b5bd0269969f0ae079348b1f7f67153dda2284c36a847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_38b1878a070043f1e4941934764f3548533d24f4e5ba214f55e44bd8bcf2359f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b1878a070043f1e4941934764f3548533d24f4e5ba214f55e44bd8bcf2359f->enter($__internal_38b1878a070043f1e4941934764f3548533d24f4e5ba214f55e44bd8bcf2359f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

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
        
        $__internal_38b1878a070043f1e4941934764f3548533d24f4e5ba214f55e44bd8bcf2359f->leave($__internal_38b1878a070043f1e4941934764f3548533d24f4e5ba214f55e44bd8bcf2359f_prof);

        
        $__internal_e9a440be27a32097da9b5bd0269969f0ae079348b1f7f67153dda2284c36a847->leave($__internal_e9a440be27a32097da9b5bd0269969f0ae079348b1f7f67153dda2284c36a847_prof);

    }

    // line 217
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_a05a3ebe88a2f9314fc40653175e8597c94f38baf5aa293d518daa6ec4b0829f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05a3ebe88a2f9314fc40653175e8597c94f38baf5aa293d518daa6ec4b0829f->enter($__internal_a05a3ebe88a2f9314fc40653175e8597c94f38baf5aa293d518daa6ec4b0829f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_ea9e74faf18552d5a93ab94e1a002decfe416373107a2759e2c5ae0a0d73870a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9e74faf18552d5a93ab94e1a002decfe416373107a2759e2c5ae0a0d73870a->enter($__internal_ea9e74faf18552d5a93ab94e1a002decfe416373107a2759e2c5ae0a0d73870a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_ea9e74faf18552d5a93ab94e1a002decfe416373107a2759e2c5ae0a0d73870a->leave($__internal_ea9e74faf18552d5a93ab94e1a002decfe416373107a2759e2c5ae0a0d73870a_prof);

        
        $__internal_a05a3ebe88a2f9314fc40653175e8597c94f38baf5aa293d518daa6ec4b0829f->leave($__internal_a05a3ebe88a2f9314fc40653175e8597c94f38baf5aa293d518daa6ec4b0829f_prof);

    }

    // line 218
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_46d8cd9a2dc600c51115e4022d1556b0ee53d7728ded2eed15388a31880015a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d8cd9a2dc600c51115e4022d1556b0ee53d7728ded2eed15388a31880015a6->enter($__internal_46d8cd9a2dc600c51115e4022d1556b0ee53d7728ded2eed15388a31880015a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_a8dc83f85aae1a551bc62a7c5e8d3cd48bf8423a3b6d770cbe18759663385a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8dc83f85aae1a551bc62a7c5e8d3cd48bf8423a3b6d770cbe18759663385a03->enter($__internal_a8dc83f85aae1a551bc62a7c5e8d3cd48bf8423a3b6d770cbe18759663385a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

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
        
        $__internal_a8dc83f85aae1a551bc62a7c5e8d3cd48bf8423a3b6d770cbe18759663385a03->leave($__internal_a8dc83f85aae1a551bc62a7c5e8d3cd48bf8423a3b6d770cbe18759663385a03_prof);

        
        $__internal_46d8cd9a2dc600c51115e4022d1556b0ee53d7728ded2eed15388a31880015a6->leave($__internal_46d8cd9a2dc600c51115e4022d1556b0ee53d7728ded2eed15388a31880015a6_prof);

    }

    // line 221
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_3d4633ee709d82712c5ee4c487ace058e3e9d78df42169d08133ba2423c72b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4633ee709d82712c5ee4c487ace058e3e9d78df42169d08133ba2423c72b1e->enter($__internal_3d4633ee709d82712c5ee4c487ace058e3e9d78df42169d08133ba2423c72b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_143cff5173c271a7b96093eb27005e374f47cddcce1053adceb89a727bc134db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143cff5173c271a7b96093eb27005e374f47cddcce1053adceb89a727bc134db->enter($__internal_143cff5173c271a7b96093eb27005e374f47cddcce1053adceb89a727bc134db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

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
        
        $__internal_143cff5173c271a7b96093eb27005e374f47cddcce1053adceb89a727bc134db->leave($__internal_143cff5173c271a7b96093eb27005e374f47cddcce1053adceb89a727bc134db_prof);

        
        $__internal_3d4633ee709d82712c5ee4c487ace058e3e9d78df42169d08133ba2423c72b1e->leave($__internal_3d4633ee709d82712c5ee4c487ace058e3e9d78df42169d08133ba2423c72b1e_prof);

    }

    // line 222
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_4af9665468b8b411545c063ead59844689987bc037edc37c813cede381af72a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af9665468b8b411545c063ead59844689987bc037edc37c813cede381af72a6->enter($__internal_4af9665468b8b411545c063ead59844689987bc037edc37c813cede381af72a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_0f2ebc9851ba8ef67765a12e4c6401cab3b5a9fcba699d240ff6850a7567a497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2ebc9851ba8ef67765a12e4c6401cab3b5a9fcba699d240ff6850a7567a497->enter($__internal_0f2ebc9851ba8ef67765a12e4c6401cab3b5a9fcba699d240ff6850a7567a497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

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
        
        $__internal_0f2ebc9851ba8ef67765a12e4c6401cab3b5a9fcba699d240ff6850a7567a497->leave($__internal_0f2ebc9851ba8ef67765a12e4c6401cab3b5a9fcba699d240ff6850a7567a497_prof);

        
        $__internal_4af9665468b8b411545c063ead59844689987bc037edc37c813cede381af72a6->leave($__internal_4af9665468b8b411545c063ead59844689987bc037edc37c813cede381af72a6_prof);

    }

    // line 235
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_0509446f195f95dcf012e3bd131fe2bd7a1c586699001beaba361ecd84a9485e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0509446f195f95dcf012e3bd131fe2bd7a1c586699001beaba361ecd84a9485e->enter($__internal_0509446f195f95dcf012e3bd131fe2bd7a1c586699001beaba361ecd84a9485e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_a03ea65b731804f6740b7e7340058cbb54af8e267c07f3d4a23c9887d793ffd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03ea65b731804f6740b7e7340058cbb54af8e267c07f3d4a23c9887d793ffd6->enter($__internal_a03ea65b731804f6740b7e7340058cbb54af8e267c07f3d4a23c9887d793ffd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_a03ea65b731804f6740b7e7340058cbb54af8e267c07f3d4a23c9887d793ffd6->leave($__internal_a03ea65b731804f6740b7e7340058cbb54af8e267c07f3d4a23c9887d793ffd6_prof);

        
        $__internal_0509446f195f95dcf012e3bd131fe2bd7a1c586699001beaba361ecd84a9485e->leave($__internal_0509446f195f95dcf012e3bd131fe2bd7a1c586699001beaba361ecd84a9485e_prof);

    }

    // line 236
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_5af20003c00ff57f1870c6244c7d4f118cd28ffbd13c45a4b1e411f42b68cd09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af20003c00ff57f1870c6244c7d4f118cd28ffbd13c45a4b1e411f42b68cd09->enter($__internal_5af20003c00ff57f1870c6244c7d4f118cd28ffbd13c45a4b1e411f42b68cd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_5481029066a320463719f2528f89195d1d53a12047107f73cb6f456626a5fe45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5481029066a320463719f2528f89195d1d53a12047107f73cb6f456626a5fe45->enter($__internal_5481029066a320463719f2528f89195d1d53a12047107f73cb6f456626a5fe45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 237
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_5481029066a320463719f2528f89195d1d53a12047107f73cb6f456626a5fe45->leave($__internal_5481029066a320463719f2528f89195d1d53a12047107f73cb6f456626a5fe45_prof);

        
        $__internal_5af20003c00ff57f1870c6244c7d4f118cd28ffbd13c45a4b1e411f42b68cd09->leave($__internal_5af20003c00ff57f1870c6244c7d4f118cd28ffbd13c45a4b1e411f42b68cd09_prof);

    }

    // line 239
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_093a7e1fb4e4fcac4cd8f61ddd3594613b9f480f1521a9e787629517ff74c072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093a7e1fb4e4fcac4cd8f61ddd3594613b9f480f1521a9e787629517ff74c072->enter($__internal_093a7e1fb4e4fcac4cd8f61ddd3594613b9f480f1521a9e787629517ff74c072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_14af758e83cadb2e8949336dbf1127181ebcebc178f781f336e148e19f63e436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14af758e83cadb2e8949336dbf1127181ebcebc178f781f336e148e19f63e436->enter($__internal_14af758e83cadb2e8949336dbf1127181ebcebc178f781f336e148e19f63e436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 240
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 241
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 244
        echo "                                </p>
                            ";
        
        $__internal_14af758e83cadb2e8949336dbf1127181ebcebc178f781f336e148e19f63e436->leave($__internal_14af758e83cadb2e8949336dbf1127181ebcebc178f781f336e148e19f63e436_prof);

        
        $__internal_093a7e1fb4e4fcac4cd8f61ddd3594613b9f480f1521a9e787629517ff74c072->leave($__internal_093a7e1fb4e4fcac4cd8f61ddd3594613b9f480f1521a9e787629517ff74c072_prof);

    }

    // line 241
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_d25702a6fa93c024434c9dc2e9533acd431c4c5cf610cb32d7471574bd1f7823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25702a6fa93c024434c9dc2e9533acd431c4c5cf610cb32d7471574bd1f7823->enter($__internal_d25702a6fa93c024434c9dc2e9533acd431c4c5cf610cb32d7471574bd1f7823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_f808ef61f60104ff1d1d7fffb25d7391d265891176597d9b08fbe10dfa629333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f808ef61f60104ff1d1d7fffb25d7391d265891176597d9b08fbe10dfa629333->enter($__internal_f808ef61f60104ff1d1d7fffb25d7391d265891176597d9b08fbe10dfa629333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 242
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_f808ef61f60104ff1d1d7fffb25d7391d265891176597d9b08fbe10dfa629333->leave($__internal_f808ef61f60104ff1d1d7fffb25d7391d265891176597d9b08fbe10dfa629333_prof);

        
        $__internal_d25702a6fa93c024434c9dc2e9533acd431c4c5cf610cb32d7471574bd1f7823->leave($__internal_d25702a6fa93c024434c9dc2e9533acd431c4c5cf610cb32d7471574bd1f7823_prof);

    }

    // line 252
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_0c37160d0f392f1eca63c53eb51ab5b8484380cbb1b58679f4fcebaf7b650934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c37160d0f392f1eca63c53eb51ab5b8484380cbb1b58679f4fcebaf7b650934->enter($__internal_0c37160d0f392f1eca63c53eb51ab5b8484380cbb1b58679f4fcebaf7b650934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_e6c0b07d24d330243d3aef25d33e58a7b57367e28a59c6eed0af897e86c040c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c0b07d24d330243d3aef25d33e58a7b57367e28a59c6eed0af897e86c040c9->enter($__internal_e6c0b07d24d330243d3aef25d33e58a7b57367e28a59c6eed0af897e86c040c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

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
        
        $__internal_e6c0b07d24d330243d3aef25d33e58a7b57367e28a59c6eed0af897e86c040c9->leave($__internal_e6c0b07d24d330243d3aef25d33e58a7b57367e28a59c6eed0af897e86c040c9_prof);

        
        $__internal_0c37160d0f392f1eca63c53eb51ab5b8484380cbb1b58679f4fcebaf7b650934->leave($__internal_0c37160d0f392f1eca63c53eb51ab5b8484380cbb1b58679f4fcebaf7b650934_prof);

    }

    // line 255
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_83c23aa7e13f337037ec4fff35e88f2ef4de1b6a95860f5ffd48f72ff5fdc477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c23aa7e13f337037ec4fff35e88f2ef4de1b6a95860f5ffd48f72ff5fdc477->enter($__internal_83c23aa7e13f337037ec4fff35e88f2ef4de1b6a95860f5ffd48f72ff5fdc477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_5f201c62441f58c4161416970bebcdf56968188d73acadeea8b6838eabd7d649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f201c62441f58c4161416970bebcdf56968188d73acadeea8b6838eabd7d649->enter($__internal_5f201c62441f58c4161416970bebcdf56968188d73acadeea8b6838eabd7d649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 256
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 308
        echo "                        ";
        
        $__internal_5f201c62441f58c4161416970bebcdf56968188d73acadeea8b6838eabd7d649->leave($__internal_5f201c62441f58c4161416970bebcdf56968188d73acadeea8b6838eabd7d649_prof);

        
        $__internal_83c23aa7e13f337037ec4fff35e88f2ef4de1b6a95860f5ffd48f72ff5fdc477->leave($__internal_83c23aa7e13f337037ec4fff35e88f2ef4de1b6a95860f5ffd48f72ff5fdc477_prof);

    }

    // line 256
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_0215a528c4600ee4159c69f9fe9effe26261c0677919db13d75f33db6c135201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0215a528c4600ee4159c69f9fe9effe26261c0677919db13d75f33db6c135201->enter($__internal_0215a528c4600ee4159c69f9fe9effe26261c0677919db13d75f33db6c135201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_d593829c40e71a0f53c72521e9c0dbfc69a916b61e680966b33f7197966b1cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d593829c40e71a0f53c72521e9c0dbfc69a916b61e680966b33f7197966b1cdb->enter($__internal_d593829c40e71a0f53c72521e9c0dbfc69a916b61e680966b33f7197966b1cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

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
        
        $__internal_d593829c40e71a0f53c72521e9c0dbfc69a916b61e680966b33f7197966b1cdb->leave($__internal_d593829c40e71a0f53c72521e9c0dbfc69a916b61e680966b33f7197966b1cdb_prof);

        
        $__internal_0215a528c4600ee4159c69f9fe9effe26261c0677919db13d75f33db6c135201->leave($__internal_0215a528c4600ee4159c69f9fe9effe26261c0677919db13d75f33db6c135201_prof);

    }

    // line 260
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_02087556107dbd2c1d4f3c842ccc69a60a1ba3bcefde1522466a89ed0ceb81cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02087556107dbd2c1d4f3c842ccc69a60a1ba3bcefde1522466a89ed0ceb81cf->enter($__internal_02087556107dbd2c1d4f3c842ccc69a60a1ba3bcefde1522466a89ed0ceb81cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_7ceb49b73543ee4f08bf46a6989d97a74c0a896f12775351d17693aefe39664c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ceb49b73543ee4f08bf46a6989d97a74c0a896f12775351d17693aefe39664c->enter($__internal_7ceb49b73543ee4f08bf46a6989d97a74c0a896f12775351d17693aefe39664c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

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
        
        $__internal_7ceb49b73543ee4f08bf46a6989d97a74c0a896f12775351d17693aefe39664c->leave($__internal_7ceb49b73543ee4f08bf46a6989d97a74c0a896f12775351d17693aefe39664c_prof);

        
        $__internal_02087556107dbd2c1d4f3c842ccc69a60a1ba3bcefde1522466a89ed0ceb81cf->leave($__internal_02087556107dbd2c1d4f3c842ccc69a60a1ba3bcefde1522466a89ed0ceb81cf_prof);

    }

    // line 283
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_7988818396696ae7431fe02073080c872b7340a188851ab56a21930a40f0f18c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7988818396696ae7431fe02073080c872b7340a188851ab56a21930a40f0f18c->enter($__internal_7988818396696ae7431fe02073080c872b7340a188851ab56a21930a40f0f18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_2b507a322e23dfe3876a7f2605c922ce2488bc42636ef13a7d2203910c2f631c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b507a322e23dfe3876a7f2605c922ce2488bc42636ef13a7d2203910c2f631c->enter($__internal_2b507a322e23dfe3876a7f2605c922ce2488bc42636ef13a7d2203910c2f631c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

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
        
        $__internal_2b507a322e23dfe3876a7f2605c922ce2488bc42636ef13a7d2203910c2f631c->leave($__internal_2b507a322e23dfe3876a7f2605c922ce2488bc42636ef13a7d2203910c2f631c_prof);

        
        $__internal_7988818396696ae7431fe02073080c872b7340a188851ab56a21930a40f0f18c->leave($__internal_7988818396696ae7431fe02073080c872b7340a188851ab56a21930a40f0f18c_prof);

    }

    // line 312
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_51563dd47f8846bf454d8a542796978c1aec1a2c5a57fc15ced0b06266a0cb35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51563dd47f8846bf454d8a542796978c1aec1a2c5a57fc15ced0b06266a0cb35->enter($__internal_51563dd47f8846bf454d8a542796978c1aec1a2c5a57fc15ced0b06266a0cb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_1db191c92b63538a032264b90b2ce444224722339769a74bafe24b88a41d9ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db191c92b63538a032264b90b2ce444224722339769a74bafe24b88a41d9ef3->enter($__internal_1db191c92b63538a032264b90b2ce444224722339769a74bafe24b88a41d9ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

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
        
        $__internal_1db191c92b63538a032264b90b2ce444224722339769a74bafe24b88a41d9ef3->leave($__internal_1db191c92b63538a032264b90b2ce444224722339769a74bafe24b88a41d9ef3_prof);

        
        $__internal_51563dd47f8846bf454d8a542796978c1aec1a2c5a57fc15ced0b06266a0cb35->leave($__internal_51563dd47f8846bf454d8a542796978c1aec1a2c5a57fc15ced0b06266a0cb35_prof);

    }

    // line 314
    public function block_notice($context, array $blocks = array())
    {
        $__internal_f06843f366d7fcea29ecf9db8bcf1527e7d109d5f2f414f4f77531cc67fb7a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06843f366d7fcea29ecf9db8bcf1527e7d109d5f2f414f4f77531cc67fb7a35->enter($__internal_f06843f366d7fcea29ecf9db8bcf1527e7d109d5f2f414f4f77531cc67fb7a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_06f030b22fed03265818c4ef1f42368a99248a04e0ed8ac30852254643b9addc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f030b22fed03265818c4ef1f42368a99248a04e0ed8ac30852254643b9addc->enter($__internal_06f030b22fed03265818c4ef1f42368a99248a04e0ed8ac30852254643b9addc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 315
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 315)->display($context);
        // line 316
        echo "                            ";
        
        $__internal_06f030b22fed03265818c4ef1f42368a99248a04e0ed8ac30852254643b9addc->leave($__internal_06f030b22fed03265818c4ef1f42368a99248a04e0ed8ac30852254643b9addc_prof);

        
        $__internal_f06843f366d7fcea29ecf9db8bcf1527e7d109d5f2f414f4f77531cc67fb7a35->leave($__internal_f06843f366d7fcea29ecf9db8bcf1527e7d109d5f2f414f4f77531cc67fb7a35_prof);

    }

    // line 354
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_c51b53a30ce5f0788ab8aabff220560ea252efc81b5c8fb407f27085d44b27ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51b53a30ce5f0788ab8aabff220560ea252efc81b5c8fb407f27085d44b27ca->enter($__internal_c51b53a30ce5f0788ab8aabff220560ea252efc81b5c8fb407f27085d44b27ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_85c35f77fd3c3e199b7770d5ef9e0b39b7e2690f147ec0d95ed849d008094e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c35f77fd3c3e199b7770d5ef9e0b39b7e2690f147ec0d95ed849d008094e77->enter($__internal_85c35f77fd3c3e199b7770d5ef9e0b39b7e2690f147ec0d95ed849d008094e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 355
        echo "            ";
        // line 356
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_85c35f77fd3c3e199b7770d5ef9e0b39b7e2690f147ec0d95ed849d008094e77->leave($__internal_85c35f77fd3c3e199b7770d5ef9e0b39b7e2690f147ec0d95ed849d008094e77_prof);

        
        $__internal_c51b53a30ce5f0788ab8aabff220560ea252efc81b5c8fb407f27085d44b27ca->leave($__internal_c51b53a30ce5f0788ab8aabff220560ea252efc81b5c8fb407f27085d44b27ca_prof);

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
