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
        $__internal_829c0fd78525680ad33f1b6253d837487f900f0a104dcf8307c98a00f7751cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829c0fd78525680ad33f1b6253d837487f900f0a104dcf8307c98a00f7751cda->enter($__internal_829c0fd78525680ad33f1b6253d837487f900f0a104dcf8307c98a00f7751cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_75571cd556ab58d67f9f988e72f384d0eff343502cb5d1946bff3da3d5b57fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75571cd556ab58d67f9f988e72f384d0eff343502cb5d1946bff3da3d5b57fd1->enter($__internal_75571cd556ab58d67f9f988e72f384d0eff343502cb5d1946bff3da3d5b57fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_829c0fd78525680ad33f1b6253d837487f900f0a104dcf8307c98a00f7751cda->leave($__internal_829c0fd78525680ad33f1b6253d837487f900f0a104dcf8307c98a00f7751cda_prof);

        
        $__internal_75571cd556ab58d67f9f988e72f384d0eff343502cb5d1946bff3da3d5b57fd1->leave($__internal_75571cd556ab58d67f9f988e72f384d0eff343502cb5d1946bff3da3d5b57fd1_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_46ae472b55284dbb9fb58f2f0b31c89ef9509ed30f3ff654cb04b590fb05f12f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ae472b55284dbb9fb58f2f0b31c89ef9509ed30f3ff654cb04b590fb05f12f->enter($__internal_46ae472b55284dbb9fb58f2f0b31c89ef9509ed30f3ff654cb04b590fb05f12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_ffd78e34ed44f6b3af3e9d2fab6d62529a3c100b41e2d2e86c0c20b4d939b9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd78e34ed44f6b3af3e9d2fab6d62529a3c100b41e2d2e86c0c20b4d939b9b0->enter($__internal_ffd78e34ed44f6b3af3e9d2fab6d62529a3c100b41e2d2e86c0c20b4d939b9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ffd78e34ed44f6b3af3e9d2fab6d62529a3c100b41e2d2e86c0c20b4d939b9b0->leave($__internal_ffd78e34ed44f6b3af3e9d2fab6d62529a3c100b41e2d2e86c0c20b4d939b9b0_prof);

        
        $__internal_46ae472b55284dbb9fb58f2f0b31c89ef9509ed30f3ff654cb04b590fb05f12f->leave($__internal_46ae472b55284dbb9fb58f2f0b31c89ef9509ed30f3ff654cb04b590fb05f12f_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_7cf4ab831877e1aac0a40f85749e9ba89eba076ca76cdc90dd76636d1927a0da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf4ab831877e1aac0a40f85749e9ba89eba076ca76cdc90dd76636d1927a0da->enter($__internal_7cf4ab831877e1aac0a40f85749e9ba89eba076ca76cdc90dd76636d1927a0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_d71f66620a8642bf0965332b76300add2a284bc994b939f0681ce612bc81f80e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71f66620a8642bf0965332b76300add2a284bc994b939f0681ce612bc81f80e->enter($__internal_d71f66620a8642bf0965332b76300add2a284bc994b939f0681ce612bc81f80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_d71f66620a8642bf0965332b76300add2a284bc994b939f0681ce612bc81f80e->leave($__internal_d71f66620a8642bf0965332b76300add2a284bc994b939f0681ce612bc81f80e_prof);

        
        $__internal_7cf4ab831877e1aac0a40f85749e9ba89eba076ca76cdc90dd76636d1927a0da->leave($__internal_7cf4ab831877e1aac0a40f85749e9ba89eba076ca76cdc90dd76636d1927a0da_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_f0362e53454e7a5566c751cade5cd5572c0a91d498d7edfd84463fb87427ab1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0362e53454e7a5566c751cade5cd5572c0a91d498d7edfd84463fb87427ab1f->enter($__internal_f0362e53454e7a5566c751cade5cd5572c0a91d498d7edfd84463fb87427ab1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_0bde1b67b5191a1f397bcf34831aabac660eb580f61a3ee586b9885f89e8e00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bde1b67b5191a1f397bcf34831aabac660eb580f61a3ee586b9885f89e8e00a->enter($__internal_0bde1b67b5191a1f397bcf34831aabac660eb580f61a3ee586b9885f89e8e00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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
        
        $__internal_0bde1b67b5191a1f397bcf34831aabac660eb580f61a3ee586b9885f89e8e00a->leave($__internal_0bde1b67b5191a1f397bcf34831aabac660eb580f61a3ee586b9885f89e8e00a_prof);

        
        $__internal_f0362e53454e7a5566c751cade5cd5572c0a91d498d7edfd84463fb87427ab1f->leave($__internal_f0362e53454e7a5566c751cade5cd5572c0a91d498d7edfd84463fb87427ab1f_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_6b3644dcf398ffa96a4c4d2a1fac1707ef7ba87a2a3175643f2ab56ac798a819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3644dcf398ffa96a4c4d2a1fac1707ef7ba87a2a3175643f2ab56ac798a819->enter($__internal_6b3644dcf398ffa96a4c4d2a1fac1707ef7ba87a2a3175643f2ab56ac798a819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_1346e8f80691ccfa247fc196f409b8fefad842453bf3281a16a428527f7d48fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1346e8f80691ccfa247fc196f409b8fefad842453bf3281a16a428527f7d48fe->enter($__internal_1346e8f80691ccfa247fc196f409b8fefad842453bf3281a16a428527f7d48fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

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
        
        $__internal_1346e8f80691ccfa247fc196f409b8fefad842453bf3281a16a428527f7d48fe->leave($__internal_1346e8f80691ccfa247fc196f409b8fefad842453bf3281a16a428527f7d48fe_prof);

        
        $__internal_6b3644dcf398ffa96a4c4d2a1fac1707ef7ba87a2a3175643f2ab56ac798a819->leave($__internal_6b3644dcf398ffa96a4c4d2a1fac1707ef7ba87a2a3175643f2ab56ac798a819_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_a89fc17f92ab3560e2270003c6413a5b6a27a7c99a4870ba65fecc107eefe8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89fc17f92ab3560e2270003c6413a5b6a27a7c99a4870ba65fecc107eefe8b6->enter($__internal_a89fc17f92ab3560e2270003c6413a5b6a27a7c99a4870ba65fecc107eefe8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_b91f44d9f0423dbbe4df6bee179000c43b32b04a5edd082b7e76ce88e696c736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91f44d9f0423dbbe4df6bee179000c43b32b04a5edd082b7e76ce88e696c736->enter($__internal_b91f44d9f0423dbbe4df6bee179000c43b32b04a5edd082b7e76ce88e696c736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

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
        
        $__internal_b91f44d9f0423dbbe4df6bee179000c43b32b04a5edd082b7e76ce88e696c736->leave($__internal_b91f44d9f0423dbbe4df6bee179000c43b32b04a5edd082b7e76ce88e696c736_prof);

        
        $__internal_a89fc17f92ab3560e2270003c6413a5b6a27a7c99a4870ba65fecc107eefe8b6->leave($__internal_a89fc17f92ab3560e2270003c6413a5b6a27a7c99a4870ba65fecc107eefe8b6_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_586138cb880677014a935dfa46ee87adc4e5e8f6b6544eda56cc0923be50fbee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586138cb880677014a935dfa46ee87adc4e5e8f6b6544eda56cc0923be50fbee->enter($__internal_586138cb880677014a935dfa46ee87adc4e5e8f6b6544eda56cc0923be50fbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_336ea3dffbd1f96d417c37dcffafc6ccc39bfa96920f4e22f2d2bb0ecb1ff147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336ea3dffbd1f96d417c37dcffafc6ccc39bfa96920f4e22f2d2bb0ecb1ff147->enter($__internal_336ea3dffbd1f96d417c37dcffafc6ccc39bfa96920f4e22f2d2bb0ecb1ff147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_336ea3dffbd1f96d417c37dcffafc6ccc39bfa96920f4e22f2d2bb0ecb1ff147->leave($__internal_336ea3dffbd1f96d417c37dcffafc6ccc39bfa96920f4e22f2d2bb0ecb1ff147_prof);

        
        $__internal_586138cb880677014a935dfa46ee87adc4e5e8f6b6544eda56cc0923be50fbee->leave($__internal_586138cb880677014a935dfa46ee87adc4e5e8f6b6544eda56cc0923be50fbee_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_482aa6f852345336c8c3c8a482ff94653bc90c59fa1a48004a36ef6c9515b445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482aa6f852345336c8c3c8a482ff94653bc90c59fa1a48004a36ef6c9515b445->enter($__internal_482aa6f852345336c8c3c8a482ff94653bc90c59fa1a48004a36ef6c9515b445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_dc64e0219ef9534a48f7cc6af7506019e5a530b05f4c7f83b0aeca41d008bf17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc64e0219ef9534a48f7cc6af7506019e5a530b05f4c7f83b0aeca41d008bf17->enter($__internal_dc64e0219ef9534a48f7cc6af7506019e5a530b05f4c7f83b0aeca41d008bf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_dc64e0219ef9534a48f7cc6af7506019e5a530b05f4c7f83b0aeca41d008bf17->leave($__internal_dc64e0219ef9534a48f7cc6af7506019e5a530b05f4c7f83b0aeca41d008bf17_prof);

        
        $__internal_482aa6f852345336c8c3c8a482ff94653bc90c59fa1a48004a36ef6c9515b445->leave($__internal_482aa6f852345336c8c3c8a482ff94653bc90c59fa1a48004a36ef6c9515b445_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_1619d3f6b229cef0f944ed590953bd3a149a21a3f2f3282b9c0c35ddfe8f48d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1619d3f6b229cef0f944ed590953bd3a149a21a3f2f3282b9c0c35ddfe8f48d1->enter($__internal_1619d3f6b229cef0f944ed590953bd3a149a21a3f2f3282b9c0c35ddfe8f48d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_6ca962a236ff483c88ca41af937e1c0ddb712fa142f8365c0866faf2b883280a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca962a236ff483c88ca41af937e1c0ddb712fa142f8365c0866faf2b883280a->enter($__internal_6ca962a236ff483c88ca41af937e1c0ddb712fa142f8365c0866faf2b883280a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_6ca962a236ff483c88ca41af937e1c0ddb712fa142f8365c0866faf2b883280a->leave($__internal_6ca962a236ff483c88ca41af937e1c0ddb712fa142f8365c0866faf2b883280a_prof);

        
        $__internal_1619d3f6b229cef0f944ed590953bd3a149a21a3f2f3282b9c0c35ddfe8f48d1->leave($__internal_1619d3f6b229cef0f944ed590953bd3a149a21a3f2f3282b9c0c35ddfe8f48d1_prof);

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
            $__internal_ce2b1e4a64cf2710a7090000e93b41dbd8887dab59ef58b212eeea9b7168e372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ce2b1e4a64cf2710a7090000e93b41dbd8887dab59ef58b212eeea9b7168e372->enter($__internal_ce2b1e4a64cf2710a7090000e93b41dbd8887dab59ef58b212eeea9b7168e372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_7457618dbaf7592c4aa22dc237c543b1a0bbf287d5006894b3f12553bf1c787f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7457618dbaf7592c4aa22dc237c543b1a0bbf287d5006894b3f12553bf1c787f->enter($__internal_7457618dbaf7592c4aa22dc237c543b1a0bbf287d5006894b3f12553bf1c787f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

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
            
            $__internal_7457618dbaf7592c4aa22dc237c543b1a0bbf287d5006894b3f12553bf1c787f->leave($__internal_7457618dbaf7592c4aa22dc237c543b1a0bbf287d5006894b3f12553bf1c787f_prof);

            
            $__internal_ce2b1e4a64cf2710a7090000e93b41dbd8887dab59ef58b212eeea9b7168e372->leave($__internal_ce2b1e4a64cf2710a7090000e93b41dbd8887dab59ef58b212eeea9b7168e372_prof);

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
", "knp_menu.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu.html.twig");
    }
}
