<?php

/* knp_menu.html.twig */
class __TwigTemplate_93334f3efbddbc3c26a12f9ecdf30f8f375d25b8bd191c8523f8060bc5560619 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ceb2fc81fd66c15b301710e5b1ce69b95fe759c077fff0d41ef229886a710fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ceb2fc81fd66c15b301710e5b1ce69b95fe759c077fff0d41ef229886a710fb->enter($__internal_7ceb2fc81fd66c15b301710e5b1ce69b95fe759c077fff0d41ef229886a710fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_1b242df8d25164296977b7b3f58cb39c06dfc8645f1aa02769872d51d9fc1ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b242df8d25164296977b7b3f58cb39c06dfc8645f1aa02769872d51d9fc1ddf->enter($__internal_1b242df8d25164296977b7b3f58cb39c06dfc8645f1aa02769872d51d9fc1ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ceb2fc81fd66c15b301710e5b1ce69b95fe759c077fff0d41ef229886a710fb->leave($__internal_7ceb2fc81fd66c15b301710e5b1ce69b95fe759c077fff0d41ef229886a710fb_prof);

        
        $__internal_1b242df8d25164296977b7b3f58cb39c06dfc8645f1aa02769872d51d9fc1ddf->leave($__internal_1b242df8d25164296977b7b3f58cb39c06dfc8645f1aa02769872d51d9fc1ddf_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_fca7aff8ca0521a3edc40cd959c0af2d7dc0292d27eb6529f8e5f02eaa761c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca7aff8ca0521a3edc40cd959c0af2d7dc0292d27eb6529f8e5f02eaa761c05->enter($__internal_fca7aff8ca0521a3edc40cd959c0af2d7dc0292d27eb6529f8e5f02eaa761c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_05842eee97216dd7c8e3f937b1cf37768e39be978bd708596ecfc80cef6ecb65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05842eee97216dd7c8e3f937b1cf37768e39be978bd708596ecfc80cef6ecb65->enter($__internal_05842eee97216dd7c8e3f937b1cf37768e39be978bd708596ecfc80cef6ecb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_05842eee97216dd7c8e3f937b1cf37768e39be978bd708596ecfc80cef6ecb65->leave($__internal_05842eee97216dd7c8e3f937b1cf37768e39be978bd708596ecfc80cef6ecb65_prof);

        
        $__internal_fca7aff8ca0521a3edc40cd959c0af2d7dc0292d27eb6529f8e5f02eaa761c05->leave($__internal_fca7aff8ca0521a3edc40cd959c0af2d7dc0292d27eb6529f8e5f02eaa761c05_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_ddde9d2fd8e93cb1e051ef01f0689f2d9c0327b91bc868cc74fcea514b01c21b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddde9d2fd8e93cb1e051ef01f0689f2d9c0327b91bc868cc74fcea514b01c21b->enter($__internal_ddde9d2fd8e93cb1e051ef01f0689f2d9c0327b91bc868cc74fcea514b01c21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_43f59f4e8220ed14df2f4e1883631f2300a1cc796a64f2f57b101cfccfcff395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f59f4e8220ed14df2f4e1883631f2300a1cc796a64f2f57b101cfccfcff395->enter($__internal_43f59f4e8220ed14df2f4e1883631f2300a1cc796a64f2f57b101cfccfcff395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_43f59f4e8220ed14df2f4e1883631f2300a1cc796a64f2f57b101cfccfcff395->leave($__internal_43f59f4e8220ed14df2f4e1883631f2300a1cc796a64f2f57b101cfccfcff395_prof);

        
        $__internal_ddde9d2fd8e93cb1e051ef01f0689f2d9c0327b91bc868cc74fcea514b01c21b->leave($__internal_ddde9d2fd8e93cb1e051ef01f0689f2d9c0327b91bc868cc74fcea514b01c21b_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_6c874200fbbf2573cf7e34412110d4b6c32ddb21d1ef226a2e0f748455ec9971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c874200fbbf2573cf7e34412110d4b6c32ddb21d1ef226a2e0f748455ec9971->enter($__internal_6c874200fbbf2573cf7e34412110d4b6c32ddb21d1ef226a2e0f748455ec9971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_d1c7d34daba08a267c2ef847a650d5c95dac24ebd5946ba678ceb7f4fbd8752c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c7d34daba08a267c2ef847a650d5c95dac24ebd5946ba678ceb7f4fbd8752c->enter($__internal_d1c7d34daba08a267c2ef847a650d5c95dac24ebd5946ba678ceb7f4fbd8752c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_d1c7d34daba08a267c2ef847a650d5c95dac24ebd5946ba678ceb7f4fbd8752c->leave($__internal_d1c7d34daba08a267c2ef847a650d5c95dac24ebd5946ba678ceb7f4fbd8752c_prof);

        
        $__internal_6c874200fbbf2573cf7e34412110d4b6c32ddb21d1ef226a2e0f748455ec9971->leave($__internal_6c874200fbbf2573cf7e34412110d4b6c32ddb21d1ef226a2e0f748455ec9971_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_4c86539e2d6882fff97f045d19c69abbbc3a4d8c4ae4fb2f2b234e09227954ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c86539e2d6882fff97f045d19c69abbbc3a4d8c4ae4fb2f2b234e09227954ec->enter($__internal_4c86539e2d6882fff97f045d19c69abbbc3a4d8c4ae4fb2f2b234e09227954ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_ca54735952c731887be23d96056ac0851dd3eb140345fa8b0a08e1a96d951bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca54735952c731887be23d96056ac0851dd3eb140345fa8b0a08e1a96d951bcd->enter($__internal_ca54735952c731887be23d96056ac0851dd3eb140345fa8b0a08e1a96d951bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = ($context["options"] ?? $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = ($context["item"] ?? $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = ($context["currentItem"] ?? $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = ($context["currentOptions"] ?? $this->getContext($context, "currentOptions"));
        
        $__internal_ca54735952c731887be23d96056ac0851dd3eb140345fa8b0a08e1a96d951bcd->leave($__internal_ca54735952c731887be23d96056ac0851dd3eb140345fa8b0a08e1a96d951bcd_prof);

        
        $__internal_4c86539e2d6882fff97f045d19c69abbbc3a4d8c4ae4fb2f2b234e09227954ec->leave($__internal_4c86539e2d6882fff97f045d19c69abbbc3a4d8c4ae4fb2f2b234e09227954ec_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_73c96b7cc9b0d0642be49b0bfb29d6f34a5506ca6666417ebd03f78c81535509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c96b7cc9b0d0642be49b0bfb29d6f34a5506ca6666417ebd03f78c81535509->enter($__internal_73c96b7cc9b0d0642be49b0bfb29d6f34a5506ca6666417ebd03f78c81535509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_cf1f1611d9e9e4456b027cd1f822ac04b9791b361ca83b5e414bb0fc0490e04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1f1611d9e9e4456b027cd1f822ac04b9791b361ca83b5e414bb0fc0490e04d->enter($__internal_cf1f1611d9e9e4456b027cd1f822ac04b9791b361ca83b5e414bb0fc0490e04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method") || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_cf1f1611d9e9e4456b027cd1f822ac04b9791b361ca83b5e414bb0fc0490e04d->leave($__internal_cf1f1611d9e9e4456b027cd1f822ac04b9791b361ca83b5e414bb0fc0490e04d_prof);

        
        $__internal_73c96b7cc9b0d0642be49b0bfb29d6f34a5506ca6666417ebd03f78c81535509->leave($__internal_73c96b7cc9b0d0642be49b0bfb29d6f34a5506ca6666417ebd03f78c81535509_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_8b68d7b3229a88127cf0f18f2c09bc06d9126b9c50c97d740a92b6a44593d039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b68d7b3229a88127cf0f18f2c09bc06d9126b9c50c97d740a92b6a44593d039->enter($__internal_8b68d7b3229a88127cf0f18f2c09bc06d9126b9c50c97d740a92b6a44593d039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_de3febb372c260e1b6db3abf3656f3519ccb527ccb12f3cf4bb652a6669b11fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3febb372c260e1b6db3abf3656f3519ccb527ccb12f3cf4bb652a6669b11fd->enter($__internal_de3febb372c260e1b6db3abf3656f3519ccb527ccb12f3cf4bb652a6669b11fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_de3febb372c260e1b6db3abf3656f3519ccb527ccb12f3cf4bb652a6669b11fd->leave($__internal_de3febb372c260e1b6db3abf3656f3519ccb527ccb12f3cf4bb652a6669b11fd_prof);

        
        $__internal_8b68d7b3229a88127cf0f18f2c09bc06d9126b9c50c97d740a92b6a44593d039->leave($__internal_8b68d7b3229a88127cf0f18f2c09bc06d9126b9c50c97d740a92b6a44593d039_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_b23b3ac7520157a8bd86f4e1035038fda1415b76d65764e0adf3d990fff9bc86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23b3ac7520157a8bd86f4e1035038fda1415b76d65764e0adf3d990fff9bc86->enter($__internal_b23b3ac7520157a8bd86f4e1035038fda1415b76d65764e0adf3d990fff9bc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_53195b3f12e1cefdd243e851d47155e4084e98657f6e8552f347f08cdb3d7f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53195b3f12e1cefdd243e851d47155e4084e98657f6e8552f347f08cdb3d7f7e->enter($__internal_53195b3f12e1cefdd243e851d47155e4084e98657f6e8552f347f08cdb3d7f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_53195b3f12e1cefdd243e851d47155e4084e98657f6e8552f347f08cdb3d7f7e->leave($__internal_53195b3f12e1cefdd243e851d47155e4084e98657f6e8552f347f08cdb3d7f7e_prof);

        
        $__internal_b23b3ac7520157a8bd86f4e1035038fda1415b76d65764e0adf3d990fff9bc86->leave($__internal_b23b3ac7520157a8bd86f4e1035038fda1415b76d65764e0adf3d990fff9bc86_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_b6c88841ad3eb7f9764fa5405db91eb3eca196ca401a88709cf01c04c26d8cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c88841ad3eb7f9764fa5405db91eb3eca196ca401a88709cf01c04c26d8cac->enter($__internal_b6c88841ad3eb7f9764fa5405db91eb3eca196ca401a88709cf01c04c26d8cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_90ae0a58963ee24b7aa202735777e9c659388c7a2f8209e3ee96918241fd0290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ae0a58963ee24b7aa202735777e9c659388c7a2f8209e3ee96918241fd0290->enter($__internal_90ae0a58963ee24b7aa202735777e9c659388c7a2f8209e3ee96918241fd0290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_90ae0a58963ee24b7aa202735777e9c659388c7a2f8209e3ee96918241fd0290->leave($__internal_90ae0a58963ee24b7aa202735777e9c659388c7a2f8209e3ee96918241fd0290_prof);

        
        $__internal_b6c88841ad3eb7f9764fa5405db91eb3eca196ca401a88709cf01c04c26d8cac->leave($__internal_b6c88841ad3eb7f9764fa5405db91eb3eca196ca401a88709cf01c04c26d8cac_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8aadd10b335b014f1c3a0cab871dae042b42f695fc74eccdd03199ba4d1d4c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_8aadd10b335b014f1c3a0cab871dae042b42f695fc74eccdd03199ba4d1d4c41->enter($__internal_8aadd10b335b014f1c3a0cab871dae042b42f695fc74eccdd03199ba4d1d4c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_14f260592de119dd23b81c11735d086920a3bf43432529c1e80d0552996d646e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_14f260592de119dd23b81c11735d086920a3bf43432529c1e80d0552996d646e->enter($__internal_14f260592de119dd23b81c11735d086920a3bf43432529c1e80d0552996d646e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_14f260592de119dd23b81c11735d086920a3bf43432529c1e80d0552996d646e->leave($__internal_14f260592de119dd23b81c11735d086920a3bf43432529c1e80d0552996d646e_prof);

            
            $__internal_8aadd10b335b014f1c3a0cab871dae042b42f695fc74eccdd03199ba4d1d4c41->leave($__internal_8aadd10b335b014f1c3a0cab871dae042b42f695fc74eccdd03199ba4d1d4c41_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu.html.twig");
    }
}
