<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_cfae3a27b966c1e16f2db97015247b5f4cc6616a4a7faf18acfa507c0cd711fd extends Twig_Template
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
        $__internal_76fe2aca09ee2a5a7555d8d5f56c501bbf463c4a732287d6d31de383caf438dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76fe2aca09ee2a5a7555d8d5f56c501bbf463c4a732287d6d31de383caf438dd->enter($__internal_76fe2aca09ee2a5a7555d8d5f56c501bbf463c4a732287d6d31de383caf438dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_19c42be35027ef252b6b395af187ad19a74454d5ab7ad100fb5f8a2dc2e10bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c42be35027ef252b6b395af187ad19a74454d5ab7ad100fb5f8a2dc2e10bdf->enter($__internal_19c42be35027ef252b6b395af187ad19a74454d5ab7ad100fb5f8a2dc2e10bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_76fe2aca09ee2a5a7555d8d5f56c501bbf463c4a732287d6d31de383caf438dd->leave($__internal_76fe2aca09ee2a5a7555d8d5f56c501bbf463c4a732287d6d31de383caf438dd_prof);

        
        $__internal_19c42be35027ef252b6b395af187ad19a74454d5ab7ad100fb5f8a2dc2e10bdf->leave($__internal_19c42be35027ef252b6b395af187ad19a74454d5ab7ad100fb5f8a2dc2e10bdf_prof);

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
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
