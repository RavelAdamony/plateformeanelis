<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_7350dd32bbeb591e94d0a956fa445ffa1e0abcb48be424501d052c5074f4e300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4503d7402fd63d57d21c75d2a1b4d690e5521d6bdfe497e5415c42e96c5dde2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4503d7402fd63d57d21c75d2a1b4d690e5521d6bdfe497e5415c42e96c5dde2b->enter($__internal_4503d7402fd63d57d21c75d2a1b4d690e5521d6bdfe497e5415c42e96c5dde2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_996ab5bdb509a7eecacd15be3056a8a5a3b41436c314297220b14f316ab733d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996ab5bdb509a7eecacd15be3056a8a5a3b41436c314297220b14f316ab733d4->enter($__internal_996ab5bdb509a7eecacd15be3056a8a5a3b41436c314297220b14f316ab733d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4503d7402fd63d57d21c75d2a1b4d690e5521d6bdfe497e5415c42e96c5dde2b->leave($__internal_4503d7402fd63d57d21c75d2a1b4d690e5521d6bdfe497e5415c42e96c5dde2b_prof);

        
        $__internal_996ab5bdb509a7eecacd15be3056a8a5a3b41436c314297220b14f316ab733d4->leave($__internal_996ab5bdb509a7eecacd15be3056a8a5a3b41436c314297220b14f316ab733d4_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_dea4ac3500db034f0578ab31cc62f4dea629df3feef7b0d3e60146cf42731b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea4ac3500db034f0578ab31cc62f4dea629df3feef7b0d3e60146cf42731b82->enter($__internal_dea4ac3500db034f0578ab31cc62f4dea629df3feef7b0d3e60146cf42731b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_7b2ad543ab93404c3caa3ea43ab179cb557c244b483109b49c08ee11a871ef4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2ad543ab93404c3caa3ea43ab179cb557c244b483109b49c08ee11a871ef4c->enter($__internal_7b2ad543ab93404c3caa3ea43ab179cb557c244b483109b49c08ee11a871ef4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_7b2ad543ab93404c3caa3ea43ab179cb557c244b483109b49c08ee11a871ef4c->leave($__internal_7b2ad543ab93404c3caa3ea43ab179cb557c244b483109b49c08ee11a871ef4c_prof);

        
        $__internal_dea4ac3500db034f0578ab31cc62f4dea629df3feef7b0d3e60146cf42731b82->leave($__internal_dea4ac3500db034f0578ab31cc62f4dea629df3feef7b0d3e60146cf42731b82_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_2ab14f7a64d5b2f1f07e13accb543df6cc1e74ea027fd847493a38b5375ef1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab14f7a64d5b2f1f07e13accb543df6cc1e74ea027fd847493a38b5375ef1fc->enter($__internal_2ab14f7a64d5b2f1f07e13accb543df6cc1e74ea027fd847493a38b5375ef1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_80d32f937188f61d81c9859df6b057218d07fcbfd750a465fe5f261a620cbd80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d32f937188f61d81c9859df6b057218d07fcbfd750a465fe5f261a620cbd80->enter($__internal_80d32f937188f61d81c9859df6b057218d07fcbfd750a465fe5f261a620cbd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter(($context["display"] ?? $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_80d32f937188f61d81c9859df6b057218d07fcbfd750a465fe5f261a620cbd80->leave($__internal_80d32f937188f61d81c9859df6b057218d07fcbfd750a465fe5f261a620cbd80_prof);

        
        $__internal_2ab14f7a64d5b2f1f07e13accb543df6cc1e74ea027fd847493a38b5375ef1fc->leave($__internal_2ab14f7a64d5b2f1f07e13accb543df6cc1e74ea027fd847493a38b5375ef1fc_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_2520caebaa09b36fe59375e4672f663b043774ef8a1698ed3725eedfeae7c4b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2520caebaa09b36fe59375e4672f663b043774ef8a1698ed3725eedfeae7c4b4->enter($__internal_2520caebaa09b36fe59375e4672f663b043774ef8a1698ed3725eedfeae7c4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_50e00943f16ef567d7c98f691e0efaa6633d445545a6c6baf841701d5da961fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e00943f16ef567d7c98f691e0efaa6633d445545a6c6baf841701d5da961fa->enter($__internal_50e00943f16ef567d7c98f691e0efaa6633d445545a6c6baf841701d5da961fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 29
            echo "            ";
            $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method"), ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_50e00943f16ef567d7c98f691e0efaa6633d445545a6c6baf841701d5da961fa->leave($__internal_50e00943f16ef567d7c98f691e0efaa6633d445545a6c6baf841701d5da961fa_prof);

        
        $__internal_2520caebaa09b36fe59375e4672f663b043774ef8a1698ed3725eedfeae7c4b4->leave($__internal_2520caebaa09b36fe59375e4672f663b043774ef8a1698ed3725eedfeae7c4b4_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_0fa5b8b41c9e0e69cc9db8cefecc74db767f2547f574afa7a125329a25e70b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa5b8b41c9e0e69cc9db8cefecc74db767f2547f574afa7a125329a25e70b56->enter($__internal_0fa5b8b41c9e0e69cc9db8cefecc74db767f2547f574afa7a125329a25e70b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_e9ff68cbcee0db0d3b26bbace328e7daf071d51c4b343eef37ffa60ffbb60017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ff68cbcee0db0d3b26bbace328e7daf071d51c4b343eef37ffa60ffbb60017->enter($__internal_e9ff68cbcee0db0d3b26bbace328e7daf071d51c4b343eef37ffa60ffbb60017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo ($context["icon"] ?? $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        echo "
            <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
        </a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e9ff68cbcee0db0d3b26bbace328e7daf071d51c4b343eef37ffa60ffbb60017->leave($__internal_e9ff68cbcee0db0d3b26bbace328e7daf071d51c4b343eef37ffa60ffbb60017_prof);

        
        $__internal_0fa5b8b41c9e0e69cc9db8cefecc74db767f2547f574afa7a125329a25e70b56->leave($__internal_0fa5b8b41c9e0e69cc9db8cefecc74db767f2547f574afa7a125329a25e70b56_prof);

    }

    // line 51
    public function block_label($context, array $blocks = array())
    {
        $__internal_8d504c1c0087b3c5075ed61bc0cc0bb01913d19e5b7d1914cb1e14ea09830022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d504c1c0087b3c5075ed61bc0cc0bb01913d19e5b7d1914cb1e14ea09830022->enter($__internal_8d504c1c0087b3c5075ed61bc0cc0bb01913d19e5b7d1914cb1e14ea09830022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_773c0d7467c40ea51a09ca06e25c56b78603b8b639c7a34f397782539e624058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773c0d7467c40ea51a09ca06e25c56b78603b8b639c7a34f397782539e624058->enter($__internal_773c0d7467c40ea51a09ca06e25c56b78603b8b639c7a34f397782539e624058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && ($context["is_link"] ?? $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_773c0d7467c40ea51a09ca06e25c56b78603b8b639c7a34f397782539e624058->leave($__internal_773c0d7467c40ea51a09ca06e25c56b78603b8b639c7a34f397782539e624058_prof);

        
        $__internal_8d504c1c0087b3c5075ed61bc0cc0bb01913d19e5b7d1914cb1e14ea09830022->leave($__internal_8d504c1c0087b3c5075ed61bc0cc0bb01913d19e5b7d1914cb1e14ea09830022_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 51,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
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

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set translation_domain = item.extra('translation_domain', 'messages') %}
            {% set icon = item.attribute('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
