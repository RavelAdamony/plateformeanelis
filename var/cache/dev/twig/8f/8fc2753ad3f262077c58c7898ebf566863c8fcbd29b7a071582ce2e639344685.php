<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_484bef3ad09e347510dd2ae7d8831b8171e6ea471240c1bdd4b8c4604aff1528 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bfb5bb8ff6da5423df282b11417f4b28efe3f776460337f8d707aae3ec4bbe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bfb5bb8ff6da5423df282b11417f4b28efe3f776460337f8d707aae3ec4bbe7->enter($__internal_4bfb5bb8ff6da5423df282b11417f4b28efe3f776460337f8d707aae3ec4bbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_3218a321bb269cdd06560276db90ab098d8e8069b44aa44ac71e8cc72204923c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3218a321bb269cdd06560276db90ab098d8e8069b44aa44ac71e8cc72204923c->enter($__internal_3218a321bb269cdd06560276db90ab098d8e8069b44aa44ac71e8cc72204923c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bfb5bb8ff6da5423df282b11417f4b28efe3f776460337f8d707aae3ec4bbe7->leave($__internal_4bfb5bb8ff6da5423df282b11417f4b28efe3f776460337f8d707aae3ec4bbe7_prof);

        
        $__internal_3218a321bb269cdd06560276db90ab098d8e8069b44aa44ac71e8cc72204923c->leave($__internal_3218a321bb269cdd06560276db90ab098d8e8069b44aa44ac71e8cc72204923c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
", "SonataAdminBundle:CRUD:list_string.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
