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
        $__internal_2b3a95076e44bc4e7d3ea0458126bd181b441dedfb0cdadd6e5b71638c601236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3a95076e44bc4e7d3ea0458126bd181b441dedfb0cdadd6e5b71638c601236->enter($__internal_2b3a95076e44bc4e7d3ea0458126bd181b441dedfb0cdadd6e5b71638c601236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_07d06907a80d785255cd5b9592fda6debd7c848c1e1f45bac370405538b72fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d06907a80d785255cd5b9592fda6debd7c848c1e1f45bac370405538b72fe6->enter($__internal_07d06907a80d785255cd5b9592fda6debd7c848c1e1f45bac370405538b72fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b3a95076e44bc4e7d3ea0458126bd181b441dedfb0cdadd6e5b71638c601236->leave($__internal_2b3a95076e44bc4e7d3ea0458126bd181b441dedfb0cdadd6e5b71638c601236_prof);

        
        $__internal_07d06907a80d785255cd5b9592fda6debd7c848c1e1f45bac370405538b72fe6->leave($__internal_07d06907a80d785255cd5b9592fda6debd7c848c1e1f45bac370405538b72fe6_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_012bf81f677ec552553acd2628d902660d7209c72f61ec4f063274ea6117ff6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_012bf81f677ec552553acd2628d902660d7209c72f61ec4f063274ea6117ff6d->enter($__internal_012bf81f677ec552553acd2628d902660d7209c72f61ec4f063274ea6117ff6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_d78c3016c6d3cf5e5cb4357356df1b02d9e0c972cb910dce9363ec2dfa46400d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78c3016c6d3cf5e5cb4357356df1b02d9e0c972cb910dce9363ec2dfa46400d->enter($__internal_d78c3016c6d3cf5e5cb4357356df1b02d9e0c972cb910dce9363ec2dfa46400d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_d78c3016c6d3cf5e5cb4357356df1b02d9e0c972cb910dce9363ec2dfa46400d->leave($__internal_d78c3016c6d3cf5e5cb4357356df1b02d9e0c972cb910dce9363ec2dfa46400d_prof);

        
        $__internal_012bf81f677ec552553acd2628d902660d7209c72f61ec4f063274ea6117ff6d->leave($__internal_012bf81f677ec552553acd2628d902660d7209c72f61ec4f063274ea6117ff6d_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_561c4d1393b7acb29f2338ab83496ab1fc3f3133fecf6362d2389d3a002b7d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561c4d1393b7acb29f2338ab83496ab1fc3f3133fecf6362d2389d3a002b7d53->enter($__internal_561c4d1393b7acb29f2338ab83496ab1fc3f3133fecf6362d2389d3a002b7d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_eeba0bfcc45763215f35560479aa5f18c48327b81b4dace89ee0cdc9cc25e086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeba0bfcc45763215f35560479aa5f18c48327b81b4dace89ee0cdc9cc25e086->enter($__internal_eeba0bfcc45763215f35560479aa5f18c48327b81b4dace89ee0cdc9cc25e086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

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
        
        $__internal_eeba0bfcc45763215f35560479aa5f18c48327b81b4dace89ee0cdc9cc25e086->leave($__internal_eeba0bfcc45763215f35560479aa5f18c48327b81b4dace89ee0cdc9cc25e086_prof);

        
        $__internal_561c4d1393b7acb29f2338ab83496ab1fc3f3133fecf6362d2389d3a002b7d53->leave($__internal_561c4d1393b7acb29f2338ab83496ab1fc3f3133fecf6362d2389d3a002b7d53_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_7a523718b5e401b057c86211f111908ccaaef7f58abaee6cf5b63c22ad05316e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a523718b5e401b057c86211f111908ccaaef7f58abaee6cf5b63c22ad05316e->enter($__internal_7a523718b5e401b057c86211f111908ccaaef7f58abaee6cf5b63c22ad05316e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_789e5ec1ac1cf43838e1eec863501510b69c2aec926ff554ce253982e2b26887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789e5ec1ac1cf43838e1eec863501510b69c2aec926ff554ce253982e2b26887->enter($__internal_789e5ec1ac1cf43838e1eec863501510b69c2aec926ff554ce253982e2b26887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

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
        
        $__internal_789e5ec1ac1cf43838e1eec863501510b69c2aec926ff554ce253982e2b26887->leave($__internal_789e5ec1ac1cf43838e1eec863501510b69c2aec926ff554ce253982e2b26887_prof);

        
        $__internal_7a523718b5e401b057c86211f111908ccaaef7f58abaee6cf5b63c22ad05316e->leave($__internal_7a523718b5e401b057c86211f111908ccaaef7f58abaee6cf5b63c22ad05316e_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_2a780cc48418677bd90d6f272a0688c84ea1b3e4fa084f4486d4759d9535f3b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a780cc48418677bd90d6f272a0688c84ea1b3e4fa084f4486d4759d9535f3b6->enter($__internal_2a780cc48418677bd90d6f272a0688c84ea1b3e4fa084f4486d4759d9535f3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_b483660e963b517a16e65fb6c75b3d3102ae9b5d5396b29ed2bee43cf8a7e8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b483660e963b517a16e65fb6c75b3d3102ae9b5d5396b29ed2bee43cf8a7e8a3->enter($__internal_b483660e963b517a16e65fb6c75b3d3102ae9b5d5396b29ed2bee43cf8a7e8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

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
        
        $__internal_b483660e963b517a16e65fb6c75b3d3102ae9b5d5396b29ed2bee43cf8a7e8a3->leave($__internal_b483660e963b517a16e65fb6c75b3d3102ae9b5d5396b29ed2bee43cf8a7e8a3_prof);

        
        $__internal_2a780cc48418677bd90d6f272a0688c84ea1b3e4fa084f4486d4759d9535f3b6->leave($__internal_2a780cc48418677bd90d6f272a0688c84ea1b3e4fa084f4486d4759d9535f3b6_prof);

    }

    // line 51
    public function block_label($context, array $blocks = array())
    {
        $__internal_2ab491603b79d52ae890a05040a2efdf8b84a68ea63cc8ecbfb22d105649895b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab491603b79d52ae890a05040a2efdf8b84a68ea63cc8ecbfb22d105649895b->enter($__internal_2ab491603b79d52ae890a05040a2efdf8b84a68ea63cc8ecbfb22d105649895b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_3c0ca023c0cf50d8bf0ef809d2f307941e80ecb8ffbd4c5c4ba71da2b83db643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0ca023c0cf50d8bf0ef809d2f307941e80ecb8ffbd4c5c4ba71da2b83db643->enter($__internal_3c0ca023c0cf50d8bf0ef809d2f307941e80ecb8ffbd4c5c4ba71da2b83db643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && ($context["is_link"] ?? $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_3c0ca023c0cf50d8bf0ef809d2f307941e80ecb8ffbd4c5c4ba71da2b83db643->leave($__internal_3c0ca023c0cf50d8bf0ef809d2f307941e80ecb8ffbd4c5c4ba71da2b83db643_prof);

        
        $__internal_2ab491603b79d52ae890a05040a2efdf8b84a68ea63cc8ecbfb22d105649895b->leave($__internal_2ab491603b79d52ae890a05040a2efdf8b84a68ea63cc8ecbfb22d105649895b_prof);

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
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
