<?php

/* AdminUserBundle:Form:fields.html.twig */
class __TwigTemplate_43b876b3100b7dd53906fa349a1e564549002dd17523468b101c6f9861a55cbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tel_widget' => array($this, 'block_tel_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_699cbd6cbdb58dd1647ba9425749552b8845337d6d137c1f76fc907a341ce185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699cbd6cbdb58dd1647ba9425749552b8845337d6d137c1f76fc907a341ce185->enter($__internal_699cbd6cbdb58dd1647ba9425749552b8845337d6d137c1f76fc907a341ce185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Form:fields.html.twig"));

        $__internal_235a2d7da8540a0206d8753bcb3c3048ba287391e2f3ffa544b8aad6ebab3392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235a2d7da8540a0206d8753bcb3c3048ba287391e2f3ffa544b8aad6ebab3392->enter($__internal_235a2d7da8540a0206d8753bcb3c3048ba287391e2f3ffa544b8aad6ebab3392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('tel_widget', $context, $blocks);
        
        $__internal_699cbd6cbdb58dd1647ba9425749552b8845337d6d137c1f76fc907a341ce185->leave($__internal_699cbd6cbdb58dd1647ba9425749552b8845337d6d137c1f76fc907a341ce185_prof);

        
        $__internal_235a2d7da8540a0206d8753bcb3c3048ba287391e2f3ffa544b8aad6ebab3392->leave($__internal_235a2d7da8540a0206d8753bcb3c3048ba287391e2f3ffa544b8aad6ebab3392_prof);

    }

    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_ee1b04a22a6fcef2cf424b7fc3c8028150f4b7f27905f6e500f28193167e0004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1b04a22a6fcef2cf424b7fc3c8028150f4b7f27905f6e500f28193167e0004->enter($__internal_ee1b04a22a6fcef2cf424b7fc3c8028150f4b7f27905f6e500f28193167e0004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_6b050ba6892d053c2e2db768ca0cdc2e88285b7475d2ddd171ea50a2685dd382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b050ba6892d053c2e2db768ca0cdc2e88285b7475d2ddd171ea50a2685dd382->enter($__internal_6b050ba6892d053c2e2db768ca0cdc2e88285b7475d2ddd171ea50a2685dd382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        $context["type"] = "tel";
        // line 4
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6b050ba6892d053c2e2db768ca0cdc2e88285b7475d2ddd171ea50a2685dd382->leave($__internal_6b050ba6892d053c2e2db768ca0cdc2e88285b7475d2ddd171ea50a2685dd382_prof);

        
        $__internal_ee1b04a22a6fcef2cf424b7fc3c8028150f4b7f27905f6e500f28193167e0004->leave($__internal_ee1b04a22a6fcef2cf424b7fc3c8028150f4b7f27905f6e500f28193167e0004_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block tel_widget %}
    {% spaceless %}
        {% set type = 'tel' %}
        {{ block('form_widget_simple') }}

    {% endspaceless %}
{% endblock %}
", "AdminUserBundle:Form:fields.html.twig", "C:\\wamp64\\www\\plateformeanelis\\src\\Admin\\UserBundle/Resources/views/Form/fields.html.twig");
    }
}
