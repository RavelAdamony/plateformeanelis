<?php

/* AdminUserBundle::standard_layout.html.twig */
class __TwigTemplate_2c3e97534a58697b71f74d64bf11380712442537e771521756572f19076f4f75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "AdminUserBundle::standard_layout.html.twig", 1);
        $this->blocks = array(
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_beb8caeecc0e783d5f8f92f5a5116be177c5978f680e1a08b99f6542c8a80d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb8caeecc0e783d5f8f92f5a5116be177c5978f680e1a08b99f6542c8a80d59->enter($__internal_beb8caeecc0e783d5f8f92f5a5116be177c5978f680e1a08b99f6542c8a80d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle::standard_layout.html.twig"));

        $__internal_0eff5f4b6aedafaef1be483f75ae139b24f16a045aa0c4089d6ca1bdebaaeb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eff5f4b6aedafaef1be483f75ae139b24f16a045aa0c4089d6ca1bdebaaeb14->enter($__internal_0eff5f4b6aedafaef1be483f75ae139b24f16a045aa0c4089d6ca1bdebaaeb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle::standard_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_beb8caeecc0e783d5f8f92f5a5116be177c5978f680e1a08b99f6542c8a80d59->leave($__internal_beb8caeecc0e783d5f8f92f5a5116be177c5978f680e1a08b99f6542c8a80d59_prof);

        
        $__internal_0eff5f4b6aedafaef1be483f75ae139b24f16a045aa0c4089d6ca1bdebaaeb14->leave($__internal_0eff5f4b6aedafaef1be483f75ae139b24f16a045aa0c4089d6ca1bdebaaeb14_prof);

    }

    // line 2
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_64fe3ab854d7921c8c41b721ff731ab778897e1b9c51f1da6876b9774c9107d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64fe3ab854d7921c8c41b721ff731ab778897e1b9c51f1da6876b9774c9107d6->enter($__internal_64fe3ab854d7921c8c41b721ff731ab778897e1b9c51f1da6876b9774c9107d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_0d509991e63f4be00759013173a4c00bfe777c62db61fc8ebfd96667f12ba47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d509991e63f4be00759013173a4c00bfe777c62db61fc8ebfd96667f12ba47a->enter($__internal_0d509991e63f4be00759013173a4c00bfe777c62db61fc8ebfd96667f12ba47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 3
        echo "    <li>
        <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_main_homepage");
        echo "\">
            <span class=\"fa fa-home\"></span> Retour à la plateforme
        </a>
    </li>
";
        
        $__internal_0d509991e63f4be00759013173a4c00bfe777c62db61fc8ebfd96667f12ba47a->leave($__internal_0d509991e63f4be00759013173a4c00bfe777c62db61fc8ebfd96667f12ba47a_prof);

        
        $__internal_64fe3ab854d7921c8c41b721ff731ab778897e1b9c51f1da6876b9774c9107d6->leave($__internal_64fe3ab854d7921c8c41b721ff731ab778897e1b9c51f1da6876b9774c9107d6_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle::standard_layout.html.twig' %}
{% block side_bar_after_nav %}
    <li>
        <a href=\"{{ path('application_main_homepage') }}\">
            <span class=\"fa fa-home\"></span> Retour à la plateforme
        </a>
    </li>
{% endblock %}", "AdminUserBundle::standard_layout.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\src\\Admin\\UserBundle/Resources/views/standard_layout.html.twig");
    }
}
