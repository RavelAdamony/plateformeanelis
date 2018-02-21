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
        $__internal_4534a8cb935786082b115b3b1315d93d8085adfb2e49d306a7d36937d8cdf130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4534a8cb935786082b115b3b1315d93d8085adfb2e49d306a7d36937d8cdf130->enter($__internal_4534a8cb935786082b115b3b1315d93d8085adfb2e49d306a7d36937d8cdf130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Form:fields.html.twig"));

        $__internal_0e13d1fb62f93af7e544bbac26e0ade4d9d97733d65591c249e0598e72ba7915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e13d1fb62f93af7e544bbac26e0ade4d9d97733d65591c249e0598e72ba7915->enter($__internal_0e13d1fb62f93af7e544bbac26e0ade4d9d97733d65591c249e0598e72ba7915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('tel_widget', $context, $blocks);
        
        $__internal_4534a8cb935786082b115b3b1315d93d8085adfb2e49d306a7d36937d8cdf130->leave($__internal_4534a8cb935786082b115b3b1315d93d8085adfb2e49d306a7d36937d8cdf130_prof);

        
        $__internal_0e13d1fb62f93af7e544bbac26e0ade4d9d97733d65591c249e0598e72ba7915->leave($__internal_0e13d1fb62f93af7e544bbac26e0ade4d9d97733d65591c249e0598e72ba7915_prof);

    }

    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_53f9c3ff6e4e516eb97bb321096e40ba1234e4e850e2cb566cd0c67aec66baa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f9c3ff6e4e516eb97bb321096e40ba1234e4e850e2cb566cd0c67aec66baa3->enter($__internal_53f9c3ff6e4e516eb97bb321096e40ba1234e4e850e2cb566cd0c67aec66baa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_3bcf438d860fee5ca8c0ed2bbc4ee731b0d8a0a94f57781167b024006c21087e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bcf438d860fee5ca8c0ed2bbc4ee731b0d8a0a94f57781167b024006c21087e->enter($__internal_3bcf438d860fee5ca8c0ed2bbc4ee731b0d8a0a94f57781167b024006c21087e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

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
        
        $__internal_3bcf438d860fee5ca8c0ed2bbc4ee731b0d8a0a94f57781167b024006c21087e->leave($__internal_3bcf438d860fee5ca8c0ed2bbc4ee731b0d8a0a94f57781167b024006c21087e_prof);

        
        $__internal_53f9c3ff6e4e516eb97bb321096e40ba1234e4e850e2cb566cd0c67aec66baa3->leave($__internal_53f9c3ff6e4e516eb97bb321096e40ba1234e4e850e2cb566cd0c67aec66baa3_prof);

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
", "AdminUserBundle:Form:fields.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\src\\Admin\\UserBundle/Resources/views/Form/fields.html.twig");
    }
}
