<?php

/* SonataAdminBundle:CRUD:list__action_edit.html.twig */
class __TwigTemplate_6cf248e2d198b16e837b3d16494478dbf1dc63a7177c93d8b6709037bdf29d59 extends Twig_Template
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
        $__internal_cbc2d731e72b41b5b9b1549780d8b52dcec47533225317f0af40328462277851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc2d731e72b41b5b9b1549780d8b52dcec47533225317f0af40328462277851->enter($__internal_cbc2d731e72b41b5b9b1549780d8b52dcec47533225317f0af40328462277851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_edit.html.twig"));

        $__internal_085ae19cb462e1dbef4ab5469fa85959ec56cba039c1c25b4a55239d4a000d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085ae19cb462e1dbef4ab5469fa85959ec56cba039c1c25b4a55239d4a000d40->enter($__internal_085ae19cb462e1dbef4ab5469fa85959ec56cba039c1c25b4a55239d4a000d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_edit.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default edit_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_cbc2d731e72b41b5b9b1549780d8b52dcec47533225317f0af40328462277851->leave($__internal_cbc2d731e72b41b5b9b1549780d8b52dcec47533225317f0af40328462277851_prof);

        
        $__internal_085ae19cb462e1dbef4ab5469fa85959ec56cba039c1c25b4a55239d4a000d40->leave($__internal_085ae19cb462e1dbef4ab5469fa85959ec56cba039c1c25b4a55239d4a000d40_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.isGranted('EDIT', object) and admin.hasRoute('edit') %}
    <a href=\"{{ admin.generateObjectUrl('edit', object) }}\" class=\"btn btn-sm btn-default edit_link\" title=\"{{ 'action_edit'|trans({}, 'SonataAdminBundle') }}\">
        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
        {{ 'action_edit'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endif %}
", "SonataAdminBundle:CRUD:list__action_edit.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__action_edit.html.twig");
    }
}
