<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_975638d3ed90dbc7095822a0bf5cf4bca587eddc870b97748f751334a2d01469 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_205d5f6f2767b07e5008a63a69e2cf0524c4d98398add25ab92472185265fc74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205d5f6f2767b07e5008a63a69e2cf0524c4d98398add25ab92472185265fc74->enter($__internal_205d5f6f2767b07e5008a63a69e2cf0524c4d98398add25ab92472185265fc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_79756378f02c4cbe51813867b1483396fd81aec106568b2039c3b072bb552dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79756378f02c4cbe51813867b1483396fd81aec106568b2039c3b072bb552dec->enter($__internal_79756378f02c4cbe51813867b1483396fd81aec106568b2039c3b072bb552dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_205d5f6f2767b07e5008a63a69e2cf0524c4d98398add25ab92472185265fc74->leave($__internal_205d5f6f2767b07e5008a63a69e2cf0524c4d98398add25ab92472185265fc74_prof);

        
        $__internal_79756378f02c4cbe51813867b1483396fd81aec106568b2039c3b072bb552dec->leave($__internal_79756378f02c4cbe51813867b1483396fd81aec106568b2039c3b072bb552dec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_316f29f10d25d351a6489013a4f464fc8bf199000f24cd749706c82845e3ef6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316f29f10d25d351a6489013a4f464fc8bf199000f24cd749706c82845e3ef6e->enter($__internal_316f29f10d25d351a6489013a4f464fc8bf199000f24cd749706c82845e3ef6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_08400744f9ae34c1206a9d343bdf99d04a843d9b5df9a5873bd5336761649961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08400744f9ae34c1206a9d343bdf99d04a843d9b5df9a5873bd5336761649961->enter($__internal_08400744f9ae34c1206a9d343bdf99d04a843d9b5df9a5873bd5336761649961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_08400744f9ae34c1206a9d343bdf99d04a843d9b5df9a5873bd5336761649961->leave($__internal_08400744f9ae34c1206a9d343bdf99d04a843d9b5df9a5873bd5336761649961_prof);

        
        $__internal_316f29f10d25d351a6489013a4f464fc8bf199000f24cd749706c82845e3ef6e->leave($__internal_316f29f10d25d351a6489013a4f464fc8bf199000f24cd749706c82845e3ef6e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d7a26774c093532094efd0017b068bab288a1b2b71d0f8f14caf5ef2a90124b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7a26774c093532094efd0017b068bab288a1b2b71d0f8f14caf5ef2a90124b->enter($__internal_9d7a26774c093532094efd0017b068bab288a1b2b71d0f8f14caf5ef2a90124b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b2d3455942143617a03d9e290968cb57a51ce00e9c5ab6dd566e6972681b9822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d3455942143617a03d9e290968cb57a51ce00e9c5ab6dd566e6972681b9822->enter($__internal_b2d3455942143617a03d9e290968cb57a51ce00e9c5ab6dd566e6972681b9822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b2d3455942143617a03d9e290968cb57a51ce00e9c5ab6dd566e6972681b9822->leave($__internal_b2d3455942143617a03d9e290968cb57a51ce00e9c5ab6dd566e6972681b9822_prof);

        
        $__internal_9d7a26774c093532094efd0017b068bab288a1b2b71d0f8f14caf5ef2a90124b->leave($__internal_9d7a26774c093532094efd0017b068bab288a1b2b71d0f8f14caf5ef2a90124b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_91871f19775acecf78a5bdead79ba6fb5cfc764591c7bd3c1a7d110440f81bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91871f19775acecf78a5bdead79ba6fb5cfc764591c7bd3c1a7d110440f81bb1->enter($__internal_91871f19775acecf78a5bdead79ba6fb5cfc764591c7bd3c1a7d110440f81bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e77970e0f00fda9faaaf886fa46b8c67a3770ae7abcfb73ad7c97341024f77c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77970e0f00fda9faaaf886fa46b8c67a3770ae7abcfb73ad7c97341024f77c1->enter($__internal_e77970e0f00fda9faaaf886fa46b8c67a3770ae7abcfb73ad7c97341024f77c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e77970e0f00fda9faaaf886fa46b8c67a3770ae7abcfb73ad7c97341024f77c1->leave($__internal_e77970e0f00fda9faaaf886fa46b8c67a3770ae7abcfb73ad7c97341024f77c1_prof);

        
        $__internal_91871f19775acecf78a5bdead79ba6fb5cfc764591c7bd3c1a7d110440f81bb1->leave($__internal_91871f19775acecf78a5bdead79ba6fb5cfc764591c7bd3c1a7d110440f81bb1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
