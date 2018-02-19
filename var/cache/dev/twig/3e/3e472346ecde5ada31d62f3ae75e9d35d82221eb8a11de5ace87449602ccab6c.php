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
        $__internal_193b2499b8938495e3fa69feff2230d78aa1aa580bb8192f7077f34c0627d757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193b2499b8938495e3fa69feff2230d78aa1aa580bb8192f7077f34c0627d757->enter($__internal_193b2499b8938495e3fa69feff2230d78aa1aa580bb8192f7077f34c0627d757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_4ad22ecb8dc6d0b419522bdfd8c19d539e1b5b196742384876f5f91eca5690f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad22ecb8dc6d0b419522bdfd8c19d539e1b5b196742384876f5f91eca5690f3->enter($__internal_4ad22ecb8dc6d0b419522bdfd8c19d539e1b5b196742384876f5f91eca5690f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_193b2499b8938495e3fa69feff2230d78aa1aa580bb8192f7077f34c0627d757->leave($__internal_193b2499b8938495e3fa69feff2230d78aa1aa580bb8192f7077f34c0627d757_prof);

        
        $__internal_4ad22ecb8dc6d0b419522bdfd8c19d539e1b5b196742384876f5f91eca5690f3->leave($__internal_4ad22ecb8dc6d0b419522bdfd8c19d539e1b5b196742384876f5f91eca5690f3_prof);

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
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
