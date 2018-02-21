<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_7ae3ef04d62624c77cb27d2540a822bfb3d1aeb769ad1ba6f71bed146db7cf04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7903efbbf795a76b039310163b1d61ff304e51b1fbc23efa973beb0e6385fe0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7903efbbf795a76b039310163b1d61ff304e51b1fbc23efa973beb0e6385fe0f->enter($__internal_7903efbbf795a76b039310163b1d61ff304e51b1fbc23efa973beb0e6385fe0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_3f3e4cca4f3475b249d487566de0577d7a3a5afe67c42765e34dc0f345d29ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3e4cca4f3475b249d487566de0577d7a3a5afe67c42765e34dc0f345d29ddd->enter($__internal_3f3e4cca4f3475b249d487566de0577d7a3a5afe67c42765e34dc0f345d29ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7903efbbf795a76b039310163b1d61ff304e51b1fbc23efa973beb0e6385fe0f->leave($__internal_7903efbbf795a76b039310163b1d61ff304e51b1fbc23efa973beb0e6385fe0f_prof);

        
        $__internal_3f3e4cca4f3475b249d487566de0577d7a3a5afe67c42765e34dc0f345d29ddd->leave($__internal_3f3e4cca4f3475b249d487566de0577d7a3a5afe67c42765e34dc0f345d29ddd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_80e48a1495df62c24e5dbc7a9f76509c503e19f45f7b2cc87c10681e9ccad665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e48a1495df62c24e5dbc7a9f76509c503e19f45f7b2cc87c10681e9ccad665->enter($__internal_80e48a1495df62c24e5dbc7a9f76509c503e19f45f7b2cc87c10681e9ccad665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_85d50a3d5033d7a701ba227292d228190a1f7ffd1074779a58c6ebd4bcf2fade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d50a3d5033d7a701ba227292d228190a1f7ffd1074779a58c6ebd4bcf2fade->enter($__internal_85d50a3d5033d7a701ba227292d228190a1f7ffd1074779a58c6ebd4bcf2fade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_85d50a3d5033d7a701ba227292d228190a1f7ffd1074779a58c6ebd4bcf2fade->leave($__internal_85d50a3d5033d7a701ba227292d228190a1f7ffd1074779a58c6ebd4bcf2fade_prof);

        
        $__internal_80e48a1495df62c24e5dbc7a9f76509c503e19f45f7b2cc87c10681e9ccad665->leave($__internal_80e48a1495df62c24e5dbc7a9f76509c503e19f45f7b2cc87c10681e9ccad665_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
