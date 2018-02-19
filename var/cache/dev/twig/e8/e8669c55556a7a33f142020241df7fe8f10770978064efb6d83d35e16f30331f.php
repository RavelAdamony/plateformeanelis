<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_aeff98ca3e873697b4c4f37a6150e47aa2d3d0aac15f9faf0c6b1904db4d5d3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_865d4c803524d1eaf984e22f4c82dfc334823fa60ac4cf56e59e29493059a3f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865d4c803524d1eaf984e22f4c82dfc334823fa60ac4cf56e59e29493059a3f0->enter($__internal_865d4c803524d1eaf984e22f4c82dfc334823fa60ac4cf56e59e29493059a3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_b0e16b471c7226337a3a0c7ce623e7273e3ee223d3f149948b2caf55c5aba577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e16b471c7226337a3a0c7ce623e7273e3ee223d3f149948b2caf55c5aba577->enter($__internal_b0e16b471c7226337a3a0c7ce623e7273e3ee223d3f149948b2caf55c5aba577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_865d4c803524d1eaf984e22f4c82dfc334823fa60ac4cf56e59e29493059a3f0->leave($__internal_865d4c803524d1eaf984e22f4c82dfc334823fa60ac4cf56e59e29493059a3f0_prof);

        
        $__internal_b0e16b471c7226337a3a0c7ce623e7273e3ee223d3f149948b2caf55c5aba577->leave($__internal_b0e16b471c7226337a3a0c7ce623e7273e3ee223d3f149948b2caf55c5aba577_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_d367c2054fec7f97f8db604bdbbf6f79f3b223dfe88c33c97814834397a6e22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d367c2054fec7f97f8db604bdbbf6f79f3b223dfe88c33c97814834397a6e22f->enter($__internal_d367c2054fec7f97f8db604bdbbf6f79f3b223dfe88c33c97814834397a6e22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0b645e2ffecce585b7b0454ee9c2ba5d2896b4ff001126b365aff30b53d93f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b645e2ffecce585b7b0454ee9c2ba5d2896b4ff001126b365aff30b53d93f7->enter($__internal_e0b645e2ffecce585b7b0454ee9c2ba5d2896b4ff001126b365aff30b53d93f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_e0b645e2ffecce585b7b0454ee9c2ba5d2896b4ff001126b365aff30b53d93f7->leave($__internal_e0b645e2ffecce585b7b0454ee9c2ba5d2896b4ff001126b365aff30b53d93f7_prof);

        
        $__internal_d367c2054fec7f97f8db604bdbbf6f79f3b223dfe88c33c97814834397a6e22f->leave($__internal_d367c2054fec7f97f8db604bdbbf6f79f3b223dfe88c33c97814834397a6e22f_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_79a54169bbb8311ac650f8bd1a180702013f86e5b730b037ce878f640d323cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a54169bbb8311ac650f8bd1a180702013f86e5b730b037ce878f640d323cde->enter($__internal_79a54169bbb8311ac650f8bd1a180702013f86e5b730b037ce878f640d323cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_4b9a74601a554e8c672bef83a1b719f0c2740b66ece77597f5a8258e34957853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9a74601a554e8c672bef83a1b719f0c2740b66ece77597f5a8258e34957853->enter($__internal_4b9a74601a554e8c672bef83a1b719f0c2740b66ece77597f5a8258e34957853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4b9a74601a554e8c672bef83a1b719f0c2740b66ece77597f5a8258e34957853->leave($__internal_4b9a74601a554e8c672bef83a1b719f0c2740b66ece77597f5a8258e34957853_prof);

        
        $__internal_79a54169bbb8311ac650f8bd1a180702013f86e5b730b037ce878f640d323cde->leave($__internal_79a54169bbb8311ac650f8bd1a180702013f86e5b730b037ce878f640d323cde_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_76b2529cfe57a4d9384bd6d7a4ba7cbf65b7cdbbfb1ac5c91d1541c6c1b9d4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b2529cfe57a4d9384bd6d7a4ba7cbf65b7cdbbfb1ac5c91d1541c6c1b9d4ce->enter($__internal_76b2529cfe57a4d9384bd6d7a4ba7cbf65b7cdbbfb1ac5c91d1541c6c1b9d4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_74056a08e539082d79148f5b176b221124204112f44cc5fe015befc07f39f46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74056a08e539082d79148f5b176b221124204112f44cc5fe015befc07f39f46b->enter($__internal_74056a08e539082d79148f5b176b221124204112f44cc5fe015befc07f39f46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_74056a08e539082d79148f5b176b221124204112f44cc5fe015befc07f39f46b->leave($__internal_74056a08e539082d79148f5b176b221124204112f44cc5fe015befc07f39f46b_prof);

        
        $__internal_76b2529cfe57a4d9384bd6d7a4ba7cbf65b7cdbbfb1ac5c91d1541c6c1b9d4ce->leave($__internal_76b2529cfe57a4d9384bd6d7a4ba7cbf65b7cdbbfb1ac5c91d1541c6c1b9d4ce_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_b977186eb763ba732d9e74798b896ce06418adcd3ae1b2c5726428df6b08667f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b977186eb763ba732d9e74798b896ce06418adcd3ae1b2c5726428df6b08667f->enter($__internal_b977186eb763ba732d9e74798b896ce06418adcd3ae1b2c5726428df6b08667f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_d8820e96c4e6486d53fbd468eac5f1cfa3ac20695c84bd02e19d2cb7cda3f4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8820e96c4e6486d53fbd468eac5f1cfa3ac20695c84bd02e19d2cb7cda3f4df->enter($__internal_d8820e96c4e6486d53fbd468eac5f1cfa3ac20695c84bd02e19d2cb7cda3f4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_d8820e96c4e6486d53fbd468eac5f1cfa3ac20695c84bd02e19d2cb7cda3f4df->leave($__internal_d8820e96c4e6486d53fbd468eac5f1cfa3ac20695c84bd02e19d2cb7cda3f4df_prof);

        
        $__internal_b977186eb763ba732d9e74798b896ce06418adcd3ae1b2c5726428df6b08667f->leave($__internal_b977186eb763ba732d9e74798b896ce06418adcd3ae1b2c5726428df6b08667f_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_e305b6199a9e5cb46987d7fda12561966f67f26bda8917ac0c7a1fe5657e2a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e305b6199a9e5cb46987d7fda12561966f67f26bda8917ac0c7a1fe5657e2a4a->enter($__internal_e305b6199a9e5cb46987d7fda12561966f67f26bda8917ac0c7a1fe5657e2a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_621e44c9788594a5bd17248ec070724cabf499a098675862850548fb8bab5a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621e44c9788594a5bd17248ec070724cabf499a098675862850548fb8bab5a9d->enter($__internal_621e44c9788594a5bd17248ec070724cabf499a098675862850548fb8bab5a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_621e44c9788594a5bd17248ec070724cabf499a098675862850548fb8bab5a9d->leave($__internal_621e44c9788594a5bd17248ec070724cabf499a098675862850548fb8bab5a9d_prof);

        
        $__internal_e305b6199a9e5cb46987d7fda12561966f67f26bda8917ac0c7a1fe5657e2a4a->leave($__internal_e305b6199a9e5cb46987d7fda12561966f67f26bda8917ac0c7a1fe5657e2a4a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 36,  155 => 35,  137 => 30,  127 => 27,  118 => 26,  105 => 23,  96 => 22,  82 => 18,  76 => 16,  73 => 15,  64 => 14,  54 => 12,  52 => 33,  40 => 12,  12 => 32,);
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

{% extends base_template %}

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}
{% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
