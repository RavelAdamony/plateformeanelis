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
        $__internal_71440736562e8abc42b8cb39d275f93cef187856ea9d09969b6aba071fa340d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71440736562e8abc42b8cb39d275f93cef187856ea9d09969b6aba071fa340d6->enter($__internal_71440736562e8abc42b8cb39d275f93cef187856ea9d09969b6aba071fa340d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Form:fields.html.twig"));

        $__internal_d9e14789bde7097aa2c0d22a3a06bdbf457eb3b3769455d7224d8c7fde67344d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e14789bde7097aa2c0d22a3a06bdbf457eb3b3769455d7224d8c7fde67344d->enter($__internal_d9e14789bde7097aa2c0d22a3a06bdbf457eb3b3769455d7224d8c7fde67344d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('tel_widget', $context, $blocks);
        
        $__internal_71440736562e8abc42b8cb39d275f93cef187856ea9d09969b6aba071fa340d6->leave($__internal_71440736562e8abc42b8cb39d275f93cef187856ea9d09969b6aba071fa340d6_prof);

        
        $__internal_d9e14789bde7097aa2c0d22a3a06bdbf457eb3b3769455d7224d8c7fde67344d->leave($__internal_d9e14789bde7097aa2c0d22a3a06bdbf457eb3b3769455d7224d8c7fde67344d_prof);

    }

    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_78460d61bc88af74d219e74134e8a1939481b2027b2ccd728bc3153966bb5824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78460d61bc88af74d219e74134e8a1939481b2027b2ccd728bc3153966bb5824->enter($__internal_78460d61bc88af74d219e74134e8a1939481b2027b2ccd728bc3153966bb5824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_ffd59525336f7f9964d627057ad09927faaf54033d495682c6d8badfb1abf6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd59525336f7f9964d627057ad09927faaf54033d495682c6d8badfb1abf6ef->enter($__internal_ffd59525336f7f9964d627057ad09927faaf54033d495682c6d8badfb1abf6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

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
        
        $__internal_ffd59525336f7f9964d627057ad09927faaf54033d495682c6d8badfb1abf6ef->leave($__internal_ffd59525336f7f9964d627057ad09927faaf54033d495682c6d8badfb1abf6ef_prof);

        
        $__internal_78460d61bc88af74d219e74134e8a1939481b2027b2ccd728bc3153966bb5824->leave($__internal_78460d61bc88af74d219e74134e8a1939481b2027b2ccd728bc3153966bb5824_prof);

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
