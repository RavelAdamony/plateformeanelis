<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_653eace44a2b1209c3c9216540e9105ee6f72c2bac3b357be8bcb188b70b1f30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db235d8a1dd97838da0d3ca9b7f7e7ada7951a0885979432ab31bd640319bdcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db235d8a1dd97838da0d3ca9b7f7e7ada7951a0885979432ab31bd640319bdcf->enter($__internal_db235d8a1dd97838da0d3ca9b7f7e7ada7951a0885979432ab31bd640319bdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_9e7c766e088e2b265a91b93b5016b3a9e6d20193c61ed5c651cb232b05b5280e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7c766e088e2b265a91b93b5016b3a9e6d20193c61ed5c651cb232b05b5280e->enter($__internal_9e7c766e088e2b265a91b93b5016b3a9e6d20193c61ed5c651cb232b05b5280e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db235d8a1dd97838da0d3ca9b7f7e7ada7951a0885979432ab31bd640319bdcf->leave($__internal_db235d8a1dd97838da0d3ca9b7f7e7ada7951a0885979432ab31bd640319bdcf_prof);

        
        $__internal_9e7c766e088e2b265a91b93b5016b3a9e6d20193c61ed5c651cb232b05b5280e->leave($__internal_9e7c766e088e2b265a91b93b5016b3a9e6d20193c61ed5c651cb232b05b5280e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
