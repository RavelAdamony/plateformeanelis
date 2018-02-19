<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_9f28d477b535b0ee1f7f5bdc8ada400208b4e52e332e9c8a2348b5ebb292eac3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31be0f1a7c78f45b504b1e2699a72193614c9893a9f4e5aae39f26b8f3c2c85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31be0f1a7c78f45b504b1e2699a72193614c9893a9f4e5aae39f26b8f3c2c85f->enter($__internal_31be0f1a7c78f45b504b1e2699a72193614c9893a9f4e5aae39f26b8f3c2c85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $__internal_ca7f0b18cd42fe3d5eb84866e228e26b7e10f4881c4d3c44aa7459bd81090453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7f0b18cd42fe3d5eb84866e228e26b7e10f4881c4d3c44aa7459bd81090453->enter($__internal_ca7f0b18cd42fe3d5eb84866e228e26b7e10f4881c4d3c44aa7459bd81090453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31be0f1a7c78f45b504b1e2699a72193614c9893a9f4e5aae39f26b8f3c2c85f->leave($__internal_31be0f1a7c78f45b504b1e2699a72193614c9893a9f4e5aae39f26b8f3c2c85f_prof);

        
        $__internal_ca7f0b18cd42fe3d5eb84866e228e26b7e10f4881c4d3c44aa7459bd81090453->leave($__internal_ca7f0b18cd42fe3d5eb84866e228e26b7e10f4881c4d3c44aa7459bd81090453_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
