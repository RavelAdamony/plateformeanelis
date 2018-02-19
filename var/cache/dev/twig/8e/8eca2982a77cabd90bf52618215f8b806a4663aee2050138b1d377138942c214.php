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
        $__internal_636abbdf51366d86cf654a3362435ab494d4474f8fbc01fed9c7c395ad8b60d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636abbdf51366d86cf654a3362435ab494d4474f8fbc01fed9c7c395ad8b60d9->enter($__internal_636abbdf51366d86cf654a3362435ab494d4474f8fbc01fed9c7c395ad8b60d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle::standard_layout.html.twig"));

        $__internal_5730f74470002238ff841fcb48934547b12c5c56be255ed278682733d50da8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5730f74470002238ff841fcb48934547b12c5c56be255ed278682733d50da8e0->enter($__internal_5730f74470002238ff841fcb48934547b12c5c56be255ed278682733d50da8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle::standard_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_636abbdf51366d86cf654a3362435ab494d4474f8fbc01fed9c7c395ad8b60d9->leave($__internal_636abbdf51366d86cf654a3362435ab494d4474f8fbc01fed9c7c395ad8b60d9_prof);

        
        $__internal_5730f74470002238ff841fcb48934547b12c5c56be255ed278682733d50da8e0->leave($__internal_5730f74470002238ff841fcb48934547b12c5c56be255ed278682733d50da8e0_prof);

    }

    // line 2
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_8e1364ce80da69d44fa1dbc3a40470d4b28fd03973ceb519d1983f431acdc411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1364ce80da69d44fa1dbc3a40470d4b28fd03973ceb519d1983f431acdc411->enter($__internal_8e1364ce80da69d44fa1dbc3a40470d4b28fd03973ceb519d1983f431acdc411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_712c1ab1052df2e5b8404a17db5e1f4d6e87e5dc5661d83a33eecf70c358b45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712c1ab1052df2e5b8404a17db5e1f4d6e87e5dc5661d83a33eecf70c358b45a->enter($__internal_712c1ab1052df2e5b8404a17db5e1f4d6e87e5dc5661d83a33eecf70c358b45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

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
        
        $__internal_712c1ab1052df2e5b8404a17db5e1f4d6e87e5dc5661d83a33eecf70c358b45a->leave($__internal_712c1ab1052df2e5b8404a17db5e1f4d6e87e5dc5661d83a33eecf70c358b45a_prof);

        
        $__internal_8e1364ce80da69d44fa1dbc3a40470d4b28fd03973ceb519d1983f431acdc411->leave($__internal_8e1364ce80da69d44fa1dbc3a40470d4b28fd03973ceb519d1983f431acdc411_prof);

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
{% endblock %}", "AdminUserBundle::standard_layout.html.twig", "C:\\wamp64\\www\\plateformeanelis\\src\\Admin\\UserBundle/Resources/views/standard_layout.html.twig");
    }
}
