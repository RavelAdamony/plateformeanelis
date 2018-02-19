<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_3110a9a0ed30786abcacfeabfeab78541bc785c04b7242081232e4424939dc4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23990e2ab24772566042b9b22777f4119c19ebf30ebe7c0247fa6b204deac0c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23990e2ab24772566042b9b22777f4119c19ebf30ebe7c0247fa6b204deac0c6->enter($__internal_23990e2ab24772566042b9b22777f4119c19ebf30ebe7c0247fa6b204deac0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

        $__internal_4aa0f28cdd6bfa278a7a16f058b0c3127bffb822d3c5923bf60c564bdc170adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa0f28cdd6bfa278a7a16f058b0c3127bffb822d3c5923bf60c564bdc170adc->enter($__internal_4aa0f28cdd6bfa278a7a16f058b0c3127bffb822d3c5923bf60c564bdc170adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_23990e2ab24772566042b9b22777f4119c19ebf30ebe7c0247fa6b204deac0c6->leave($__internal_23990e2ab24772566042b9b22777f4119c19ebf30ebe7c0247fa6b204deac0c6_prof);

        
        $__internal_4aa0f28cdd6bfa278a7a16f058b0c3127bffb822d3c5923bf60c564bdc170adc->leave($__internal_4aa0f28cdd6bfa278a7a16f058b0c3127bffb822d3c5923bf60c564bdc170adc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 15,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.hasAccess('list') and admin.hasRoute('list') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
", "SonataAdminBundle:Button:list_button.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/Button/list_button.html.twig");
    }
}
