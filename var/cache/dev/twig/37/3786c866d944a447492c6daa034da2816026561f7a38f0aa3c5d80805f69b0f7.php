<?php

/* SonataAdminBundle:Core:tab_menu_template.html.twig */
class __TwigTemplate_0c1207d030ea8d413826cf69e42b67c4c9787b4438ada919b0d36bb55b65baa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4391f2c99e7197408efd3873d4342296683e4657f5036894df311d4c65d5fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4391f2c99e7197408efd3873d4342296683e4657f5036894df311d4c65d5fc5->enter($__internal_c4391f2c99e7197408efd3873d4342296683e4657f5036894df311d4c65d5fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:tab_menu_template.html.twig"));

        $__internal_04cf0967bda78a396a4a91f35e31ed10181f919b687b2f3029917e98d7d4748f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04cf0967bda78a396a4a91f35e31ed10181f919b687b2f3029917e98d7d4748f->enter($__internal_04cf0967bda78a396a4a91f35e31ed10181f919b687b2f3029917e98d7d4748f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:tab_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4391f2c99e7197408efd3873d4342296683e4657f5036894df311d4c65d5fc5->leave($__internal_c4391f2c99e7197408efd3873d4342296683e4657f5036894df311d4c65d5fc5_prof);

        
        $__internal_04cf0967bda78a396a4a91f35e31ed10181f919b687b2f3029917e98d7d4748f->leave($__internal_04cf0967bda78a396a4a91f35e31ed10181f919b687b2f3029917e98d7d4748f_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_0fd92cc3380ee76904e0a2dd23c98212a8314c9c2c3a56b1883b4fe6c54af69b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd92cc3380ee76904e0a2dd23c98212a8314c9c2c3a56b1883b4fe6c54af69b->enter($__internal_0fd92cc3380ee76904e0a2dd23c98212a8314c9c2c3a56b1883b4fe6c54af69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_fcd02e93b3249c1c908d4c8f1a0dfd8eb31be25b7b421b64d1d987014f95db92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd02e93b3249c1c908d4c8f1a0dfd8eb31be25b7b421b64d1d987014f95db92->enter($__internal_fcd02e93b3249c1c908d4c8f1a0dfd8eb31be25b7b421b64d1d987014f95db92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 4);
        // line 5
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 6
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 7
            $context["is_dropdown"] = (($this->getAttribute(($context["attributes"] ?? null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "dropdown", array()), false)) : (false));
            // line 8
            $context["divider_prepend"] = (($this->getAttribute(($context["attributes"] ?? null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "divider_prepend", array()), false)) : (false));
            // line 9
            $context["divider_append"] = (($this->getAttribute(($context["attributes"] ?? null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "divider_append", array()), false)) : (false));
            // line 10
            echo "
";
            // line 12
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if (($context["divider_prepend"] ?? $this->getContext($context, "divider_prepend"))) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
";
            // line 19
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 21
            if (array_key_exists("matcher", $context)) {
                echo " ";
                // line 22
                if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                    // line 23
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 24
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array())), "method")) {
                    // line 25
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
                }
            } else {
                // line 27
                echo " ";
                // line 28
                if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "current", array())) {
                    // line 29
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 30
($context["item"] ?? $this->getContext($context, "item")), "currentAncestor", array())) {
                    // line 31
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
                }
            }
            // line 35
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 36
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 38
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 39
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 41
            echo "
";
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 44
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 45
            echo "
";
            // line 47
            if (($context["is_dropdown"] ?? $this->getContext($context, "is_dropdown"))) {
                // line 48
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => "dropdown"));
                // line 49
                $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
            }
            // line 51
            echo "
";
            // line 53
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 54
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 56
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 57
            echo "
";
            // line 59
            echo "    <li";
            echo $context["macros"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 60
            if (($context["is_dropdown"] ?? $this->getContext($context, "is_dropdown"))) {
                // line 61
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 62
($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "current", array()) || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 63
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if (($context["divider_append"] ?? $this->getContext($context, "divider_append"))) {
                // line 72
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
        
        $__internal_fcd02e93b3249c1c908d4c8f1a0dfd8eb31be25b7b421b64d1d987014f95db92->leave($__internal_fcd02e93b3249c1c908d4c8f1a0dfd8eb31be25b7b421b64d1d987014f95db92_prof);

        
        $__internal_0fd92cc3380ee76904e0a2dd23c98212a8314c9c2c3a56b1883b4fe6c54af69b->leave($__internal_0fd92cc3380ee76904e0a2dd23c98212a8314c9c2c3a56b1883b4fe6c54af69b_prof);

    }

    // line 77
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_e0136d6e9a07616c915c2b81cd459351f0a878a3c608bdfacb372199d5033005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0136d6e9a07616c915c2b81cd459351f0a878a3c608bdfacb372199d5033005->enter($__internal_e0136d6e9a07616c915c2b81cd459351f0a878a3c608bdfacb372199d5033005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        $__internal_58c6a6aa71dc3ee5795f03c46dcd7d3aab3577f10032b007a3cfbb4e7088fb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c6a6aa71dc3ee5795f03c46dcd7d3aab3577f10032b007a3cfbb4e7088fb98->enter($__internal_58c6a6aa71dc3ee5795f03c46dcd7d3aab3577f10032b007a3cfbb4e7088fb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 78
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>
";
        }
        
        $__internal_58c6a6aa71dc3ee5795f03c46dcd7d3aab3577f10032b007a3cfbb4e7088fb98->leave($__internal_58c6a6aa71dc3ee5795f03c46dcd7d3aab3577f10032b007a3cfbb4e7088fb98_prof);

        
        $__internal_e0136d6e9a07616c915c2b81cd459351f0a878a3c608bdfacb372199d5033005->leave($__internal_e0136d6e9a07616c915c2b81cd459351f0a878a3c608bdfacb372199d5033005_prof);

    }

    // line 85
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_bad9e19cdd2234987d33aa635f0fa58eec19d05746733f164ea17d468e0544dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad9e19cdd2234987d33aa635f0fa58eec19d05746733f164ea17d468e0544dc->enter($__internal_bad9e19cdd2234987d33aa635f0fa58eec19d05746733f164ea17d468e0544dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_a9b439f62973046d346d9d9719726ce5b093115a4b2774fcf4bb9e46617bae05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b439f62973046d346d9d9719726ce5b093115a4b2774fcf4bb9e46617bae05->enter($__internal_a9b439f62973046d346d9d9719726ce5b093115a4b2774fcf4bb9e46617bae05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 86
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array())), "method");
        echo ">
        ";
        // line 87
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 88
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 90
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_a9b439f62973046d346d9d9719726ce5b093115a4b2774fcf4bb9e46617bae05->leave($__internal_a9b439f62973046d346d9d9719726ce5b093115a4b2774fcf4bb9e46617bae05_prof);

        
        $__internal_bad9e19cdd2234987d33aa635f0fa58eec19d05746733f164ea17d468e0544dc->leave($__internal_bad9e19cdd2234987d33aa635f0fa58eec19d05746733f164ea17d468e0544dc_prof);

    }

    // line 94
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_51777549f0d21d142b5c38d8809c5f706e1fb43d207a03cd8348eed71f23c881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51777549f0d21d142b5c38d8809c5f706e1fb43d207a03cd8348eed71f23c881->enter($__internal_51777549f0d21d142b5c38d8809c5f706e1fb43d207a03cd8348eed71f23c881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_58a967bfad7ea2cd855cd45f2481f7bcd28a54c776dea0d45af4c8a84ee87cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a967bfad7ea2cd855cd45f2481f7bcd28a54c776dea0d45af4c8a84ee87cc7->enter($__internal_58a967bfad7ea2cd855cd45f2481f7bcd28a54c776dea0d45af4c8a84ee87cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 95
        echo "    <span ";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array())), "method");
        echo ">
        ";
        // line 96
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 97
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 99
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
        
        $__internal_58a967bfad7ea2cd855cd45f2481f7bcd28a54c776dea0d45af4c8a84ee87cc7->leave($__internal_58a967bfad7ea2cd855cd45f2481f7bcd28a54c776dea0d45af4c8a84ee87cc7_prof);

        
        $__internal_51777549f0d21d142b5c38d8809c5f706e1fb43d207a03cd8348eed71f23c881->leave($__internal_51777549f0d21d142b5c38d8809c5f706e1fb43d207a03cd8348eed71f23c881_prof);

    }

    // line 103
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_bf7c1e3f6868add397008bbb11baaf2e7b302e97bf67217f60b0c5856a17172d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf7c1e3f6868add397008bbb11baaf2e7b302e97bf67217f60b0c5856a17172d->enter($__internal_bf7c1e3f6868add397008bbb11baaf2e7b302e97bf67217f60b0c5856a17172d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        $__internal_f41ec0e141e2036880c582719765ffbd96a7de80ff9f37911a505a5e718831ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41ec0e141e2036880c582719765ffbd96a7de80ff9f37911a505a5e718831ea->enter($__internal_f41ec0e141e2036880c582719765ffbd96a7de80ff9f37911a505a5e718831ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 104
        $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 105
        $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => "dropdown-toggle"));
        // line 106
        $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array());
        // line 107
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
        // line 108
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("data-toggle" => "dropdown"));
        // line 109
        echo "    <a href=\"#\"";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => ($context["attributes"] ?? $this->getContext($context, "attributes"))), "method");
        echo ">
        ";
        // line 110
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 111
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 113
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
        
        $__internal_f41ec0e141e2036880c582719765ffbd96a7de80ff9f37911a505a5e718831ea->leave($__internal_f41ec0e141e2036880c582719765ffbd96a7de80ff9f37911a505a5e718831ea_prof);

        
        $__internal_bf7c1e3f6868add397008bbb11baaf2e7b302e97bf67217f60b0c5856a17172d->leave($__internal_bf7c1e3f6868add397008bbb11baaf2e7b302e97bf67217f60b0c5856a17172d_prof);

    }

    // line 118
    public function block_label($context, array $blocks = array())
    {
        $__internal_c044d14f50579150fbe35abf5556d5794ae6da91df453b61df8f964ed072dc51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c044d14f50579150fbe35abf5556d5794ae6da91df453b61df8f964ed072dc51->enter($__internal_c044d14f50579150fbe35abf5556d5794ae6da91df453b61df8f964ed072dc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_7bdcfb13118b1fee95de034daeb2f28f91caced6f96b1aeb93b8cce225cfbb81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bdcfb13118b1fee95de034daeb2f28f91caced6f96b1aeb93b8cce225cfbb81->enter($__internal_7bdcfb13118b1fee95de034daeb2f28f91caced6f96b1aeb93b8cce225cfbb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 120
($context["item"] ?? $this->getContext($context, "item")), "label", array()), $this->getAttribute(        // line 121
($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute(        // line 122
($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "translation_domain", 1 => (($this->getAttribute(        // line 124
($context["item"] ?? $this->getContext($context, "item")), "getParent", array(), "method")) ? ($this->getAttribute($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getParent", array(), "method"), "getExtra", array(0 => "translation_domain"), "method")) : (null))), "method")), "html", null, true);
        
        $__internal_7bdcfb13118b1fee95de034daeb2f28f91caced6f96b1aeb93b8cce225cfbb81->leave($__internal_7bdcfb13118b1fee95de034daeb2f28f91caced6f96b1aeb93b8cce225cfbb81_prof);

        
        $__internal_c044d14f50579150fbe35abf5556d5794ae6da91df453b61df8f964ed072dc51->leave($__internal_c044d14f50579150fbe35abf5556d5794ae6da91df453b61df8f964ed072dc51_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 124,  346 => 122,  345 => 121,  344 => 120,  343 => 119,  334 => 118,  319 => 113,  313 => 111,  311 => 110,  306 => 109,  304 => 108,  302 => 107,  300 => 106,  298 => 105,  296 => 104,  287 => 103,  273 => 99,  267 => 97,  265 => 96,  260 => 95,  251 => 94,  237 => 90,  231 => 88,  229 => 87,  222 => 86,  213 => 85,  201 => 81,  197 => 79,  195 => 78,  186 => 77,  173 => 72,  171 => 71,  166 => 68,  162 => 65,  158 => 63,  156 => 62,  153 => 61,  151 => 60,  147 => 59,  144 => 57,  142 => 56,  139 => 54,  137 => 53,  134 => 51,  131 => 49,  129 => 48,  127 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  114 => 39,  112 => 38,  109 => 36,  107 => 35,  103 => 31,  101 => 30,  99 => 29,  97 => 28,  95 => 27,  91 => 25,  89 => 24,  87 => 23,  85 => 22,  82 => 21,  80 => 19,  77 => 17,  73 => 15,  71 => 14,  69 => 12,  66 => 10,  64 => 9,  62 => 8,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block item %}
{% import \"knp_menu.html.twig\" as macros %}
{% if item.displayed %}
    {%- set attributes = item.attributes %}
    {%- set is_dropdown = attributes.dropdown|default(false) %}
    {%- set divider_prepend = attributes.divider_prepend|default(false) %}
    {%- set divider_append = attributes.divider_append|default(false) %}

{# unset bootstrap specific attributes #}
    {%- set attributes = attributes|merge({'dropdown': null, 'divider_prepend': null, 'divider_append': null }) %}

    {%- if divider_prepend %}
        {{ block('dividerElement') }}
    {%- endif %}

{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}

    {%- if matcher is defined %} {# KnpMenu 2.0#}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- else %} {# KnpMenu 1.X #}
        {%- if item.current %}
        {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif item.currentAncestor %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- endif %}

    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

{# building the class of the children #}
    {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
    {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}

{# adding classes for dropdown #}
    {%- if is_dropdown %}
        {%- set classes = classes|merge(['dropdown']) %}
        {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}
    {%- endif %}

{# putting classes together #}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}

{# displaying the item #}
    <li{{ macros.attributes(attributes) }}>
        {%- if is_dropdown %}
            {{ block('dropdownElement') }}
        {%- elseif item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {{ block('list') }}
    </li>

    {%- if divider_append %}
        {{ block('dividerElement') }}
    {%- endif %}
{% endif %}
{% endblock %}

{% block dividerElement %}
{% if item.level == 1 %}
    <li class=\"divider-vertical\"></li>
{% else %}
    <li class=\"divider\"></li>
{% endif %}
{% endblock %}

{% block linkElement %}
    <a href=\"{{ item.uri }}\"{{ macros.attributes(item.linkAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </a>
{% endblock %}

{% block spanElement %}
    <span {{ macros.attributes(item.labelAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </span>
{% endblock %}

{% block dropdownElement %}
    {%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}
    {%- set classes = classes|merge(['dropdown-toggle']) %}
    {%- set attributes = item.linkAttributes %}
    {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- set attributes = attributes|merge({'data-toggle': 'dropdown'}) %}
    <a href=\"#\"{{ macros.attributes(attributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
        <b class=\"caret\"></b>
    </a>
{% endblock %}

{% block label %}
{{-
    item.label|trans(
        item.getExtra('translation_params', {}),
        item.getExtra(
            'translation_domain',
            item.getParent() ? item.getParent().getExtra('translation_domain') : null
        )
    )
-}}
{% endblock %}
", "SonataAdminBundle:Core:tab_menu_template.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/Core/tab_menu_template.html.twig");
    }
}
