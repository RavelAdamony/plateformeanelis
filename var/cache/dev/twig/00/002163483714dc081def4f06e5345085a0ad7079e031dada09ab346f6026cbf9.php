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
        $__internal_9537604381b9317f0f94c732bcefbe7f727392d3b42be9483431f429511fefd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9537604381b9317f0f94c732bcefbe7f727392d3b42be9483431f429511fefd2->enter($__internal_9537604381b9317f0f94c732bcefbe7f727392d3b42be9483431f429511fefd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $__internal_ecb4407f68484e79f0f34f66b2616bda8fbda1ad63e69d76b719efb6b383629a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb4407f68484e79f0f34f66b2616bda8fbda1ad63e69d76b719efb6b383629a->enter($__internal_ecb4407f68484e79f0f34f66b2616bda8fbda1ad63e69d76b719efb6b383629a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9537604381b9317f0f94c732bcefbe7f727392d3b42be9483431f429511fefd2->leave($__internal_9537604381b9317f0f94c732bcefbe7f727392d3b42be9483431f429511fefd2_prof);

        
        $__internal_ecb4407f68484e79f0f34f66b2616bda8fbda1ad63e69d76b719efb6b383629a->leave($__internal_ecb4407f68484e79f0f34f66b2616bda8fbda1ad63e69d76b719efb6b383629a_prof);

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
", "SonataAdminBundle:CRUD:list_inner_row.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_inner_row.html.twig");
    }
}
