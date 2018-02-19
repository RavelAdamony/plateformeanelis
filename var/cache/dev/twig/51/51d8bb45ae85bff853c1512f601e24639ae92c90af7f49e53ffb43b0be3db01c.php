<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_801a179f86a34a70597a3c07421cda7f53a81e4ef109345e6b022d55ceadd505 extends Twig_Template
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
        $__internal_c4d1b615a7460e5df7488c7dcbb4bb37546f9ae4d5a5814fa66568a343ed02ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d1b615a7460e5df7488c7dcbb4bb37546f9ae4d5a5814fa66568a343ed02ca->enter($__internal_c4d1b615a7460e5df7488c7dcbb4bb37546f9ae4d5a5814fa66568a343ed02ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_db4fb48315793829633cefb0b6c12c7b9b386871659669e287233f62852d9c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4fb48315793829633cefb0b6c12c7b9b386871659669e287233f62852d9c9a->enter($__internal_db4fb48315793829633cefb0b6c12c7b9b386871659669e287233f62852d9c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_c4d1b615a7460e5df7488c7dcbb4bb37546f9ae4d5a5814fa66568a343ed02ca->leave($__internal_c4d1b615a7460e5df7488c7dcbb4bb37546f9ae4d5a5814fa66568a343ed02ca_prof);

        
        $__internal_db4fb48315793829633cefb0b6c12c7b9b386871659669e287233f62852d9c9a->leave($__internal_db4fb48315793829633cefb0b6c12c7b9b386871659669e287233f62852d9c9a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "D:\\WAMP\\www\\plateformeanelis\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
