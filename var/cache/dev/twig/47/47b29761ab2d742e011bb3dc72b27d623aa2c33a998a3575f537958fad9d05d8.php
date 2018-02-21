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
        $__internal_3745d6fc52bf93b453851cdf266e75718239d21ec13a0df52d5275dccbc3799a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3745d6fc52bf93b453851cdf266e75718239d21ec13a0df52d5275dccbc3799a->enter($__internal_3745d6fc52bf93b453851cdf266e75718239d21ec13a0df52d5275dccbc3799a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_711d8b5e245cc37d72367d029e159bd2510d405a8b8405333cbaf0938c93c50c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711d8b5e245cc37d72367d029e159bd2510d405a8b8405333cbaf0938c93c50c->enter($__internal_711d8b5e245cc37d72367d029e159bd2510d405a8b8405333cbaf0938c93c50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3745d6fc52bf93b453851cdf266e75718239d21ec13a0df52d5275dccbc3799a->leave($__internal_3745d6fc52bf93b453851cdf266e75718239d21ec13a0df52d5275dccbc3799a_prof);

        
        $__internal_711d8b5e245cc37d72367d029e159bd2510d405a8b8405333cbaf0938c93c50c->leave($__internal_711d8b5e245cc37d72367d029e159bd2510d405a8b8405333cbaf0938c93c50c_prof);

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
