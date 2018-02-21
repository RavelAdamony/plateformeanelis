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
        $__internal_55ac10dc523da6b6eadf435f657f07ade12764cec2ebba5bf7a74fba03863469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ac10dc523da6b6eadf435f657f07ade12764cec2ebba5bf7a74fba03863469->enter($__internal_55ac10dc523da6b6eadf435f657f07ade12764cec2ebba5bf7a74fba03863469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle::standard_layout.html.twig"));

        $__internal_a36411ce96574088620652f125976b2beb449498eb015154954a89122db511dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36411ce96574088620652f125976b2beb449498eb015154954a89122db511dd->enter($__internal_a36411ce96574088620652f125976b2beb449498eb015154954a89122db511dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle::standard_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55ac10dc523da6b6eadf435f657f07ade12764cec2ebba5bf7a74fba03863469->leave($__internal_55ac10dc523da6b6eadf435f657f07ade12764cec2ebba5bf7a74fba03863469_prof);

        
        $__internal_a36411ce96574088620652f125976b2beb449498eb015154954a89122db511dd->leave($__internal_a36411ce96574088620652f125976b2beb449498eb015154954a89122db511dd_prof);

    }

    // line 2
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_99f514921b42a44e108f634a64a57798fccc1fd68ce3df6c5681beca92e963d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f514921b42a44e108f634a64a57798fccc1fd68ce3df6c5681beca92e963d8->enter($__internal_99f514921b42a44e108f634a64a57798fccc1fd68ce3df6c5681beca92e963d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_161f5de0732f1a71e7476b1c49cfd2aa663e1102d3d88d11fff9e7b30da0acd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161f5de0732f1a71e7476b1c49cfd2aa663e1102d3d88d11fff9e7b30da0acd2->enter($__internal_161f5de0732f1a71e7476b1c49cfd2aa663e1102d3d88d11fff9e7b30da0acd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

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
        
        $__internal_161f5de0732f1a71e7476b1c49cfd2aa663e1102d3d88d11fff9e7b30da0acd2->leave($__internal_161f5de0732f1a71e7476b1c49cfd2aa663e1102d3d88d11fff9e7b30da0acd2_prof);

        
        $__internal_99f514921b42a44e108f634a64a57798fccc1fd68ce3df6c5681beca92e963d8->leave($__internal_99f514921b42a44e108f634a64a57798fccc1fd68ce3df6c5681beca92e963d8_prof);

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
