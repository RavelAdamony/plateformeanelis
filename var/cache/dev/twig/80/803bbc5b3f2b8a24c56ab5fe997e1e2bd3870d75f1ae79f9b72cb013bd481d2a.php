<?php

/* SonataAdminBundle:CRUD:dashboard__action.html.twig */
class __TwigTemplate_c037bffdd155c9e345dce93b4c08ee6c5a7a4682a0b855d9c923af6610e8e5e3 extends Twig_Template
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
        $__internal_5bd237e77eba644c6966944f05b46c6c674cacd55e7dfecb6cd94c913d6adccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd237e77eba644c6966944f05b46c6c674cacd55e7dfecb6cd94c913d6adccd->enter($__internal_5bd237e77eba644c6966944f05b46c6c674cacd55e7dfecb6cd94c913d6adccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:dashboard__action.html.twig"));

        $__internal_d65bb9ba13d4ca1f507aab2894fbabf303a507295231ea9ace561bb9737bf390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65bb9ba13d4ca1f507aab2894fbabf303a507295231ea9ace561bb9737bf390->enter($__internal_d65bb9ba13d4ca1f507aab2894fbabf303a507295231ea9ace561bb9737bf390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:dashboard__action.html.twig"));

        // line 1
        echo "<a class=\"btn btn-link btn-flat\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", array()), "html", null, true);
        echo "\">
    <i class=\"fa fa-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute(($context["action"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_5bd237e77eba644c6966944f05b46c6c674cacd55e7dfecb6cd94c913d6adccd->leave($__internal_5bd237e77eba644c6966944f05b46c6c674cacd55e7dfecb6cd94c913d6adccd_prof);

        
        $__internal_d65bb9ba13d4ca1f507aab2894fbabf303a507295231ea9ace561bb9737bf390->leave($__internal_d65bb9ba13d4ca1f507aab2894fbabf303a507295231ea9ace561bb9737bf390_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:dashboard__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"btn btn-link btn-flat\" href=\"{{ action.url }}\">
    <i class=\"fa fa-{{ action.icon }}\" aria-hidden=\"true\"></i>
    {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
</a>
", "SonataAdminBundle:CRUD:dashboard__action.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/dashboard__action.html.twig");
    }
}
