<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_fdc7c0a6d92ceb1825db7732cee4ff38d12e20042bfd83ae2c7da5f40061885c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_158f8be18c4eb83b49d5cd3862a427ba8b9aadbc0c23488d630b230a466363dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158f8be18c4eb83b49d5cd3862a427ba8b9aadbc0c23488d630b230a466363dc->enter($__internal_158f8be18c4eb83b49d5cd3862a427ba8b9aadbc0c23488d630b230a466363dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $__internal_44442b8ba60cafd53d992b54b74008c7fd2dbd801822617d5f7d506413e87209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44442b8ba60cafd53d992b54b74008c7fd2dbd801822617d5f7d506413e87209->enter($__internal_44442b8ba60cafd53d992b54b74008c7fd2dbd801822617d5f7d506413e87209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_158f8be18c4eb83b49d5cd3862a427ba8b9aadbc0c23488d630b230a466363dc->leave($__internal_158f8be18c4eb83b49d5cd3862a427ba8b9aadbc0c23488d630b230a466363dc_prof);

        
        $__internal_44442b8ba60cafd53d992b54b74008c7fd2dbd801822617d5f7d506413e87209->leave($__internal_44442b8ba60cafd53d992b54b74008c7fd2dbd801822617d5f7d506413e87209_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
", "SonataAdminBundle:CRUD:list_inner_row.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_inner_row.html.twig");
    }
}
