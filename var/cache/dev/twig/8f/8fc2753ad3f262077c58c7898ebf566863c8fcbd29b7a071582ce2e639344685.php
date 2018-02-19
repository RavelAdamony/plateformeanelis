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
        $__internal_4dafd9b968f9608b75108970ade1e0bad9aba6b9ca1fdb4b833ba012a6dacfde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dafd9b968f9608b75108970ade1e0bad9aba6b9ca1fdb4b833ba012a6dacfde->enter($__internal_4dafd9b968f9608b75108970ade1e0bad9aba6b9ca1fdb4b833ba012a6dacfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_009bf63ef67d97df051a400b648db0673a0291ba43be443f5037885441b31dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009bf63ef67d97df051a400b648db0673a0291ba43be443f5037885441b31dfb->enter($__internal_009bf63ef67d97df051a400b648db0673a0291ba43be443f5037885441b31dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dafd9b968f9608b75108970ade1e0bad9aba6b9ca1fdb4b833ba012a6dacfde->leave($__internal_4dafd9b968f9608b75108970ade1e0bad9aba6b9ca1fdb4b833ba012a6dacfde_prof);

        
        $__internal_009bf63ef67d97df051a400b648db0673a0291ba43be443f5037885441b31dfb->leave($__internal_009bf63ef67d97df051a400b648db0673a0291ba43be443f5037885441b31dfb_prof);

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
", "SonataAdminBundle:CRUD:list_string.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
