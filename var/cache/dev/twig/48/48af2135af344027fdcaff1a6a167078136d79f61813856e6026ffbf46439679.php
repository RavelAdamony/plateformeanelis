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
        $__internal_2aadb24f44d4798d445a77591491ca9c7a771e2a078f21ccbd7db0630ac5838d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aadb24f44d4798d445a77591491ca9c7a771e2a078f21ccbd7db0630ac5838d->enter($__internal_2aadb24f44d4798d445a77591491ca9c7a771e2a078f21ccbd7db0630ac5838d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c44edb3a1bfd7a62154a4f16af044a5211d48c46e4c31af60368c0d916ab8ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44edb3a1bfd7a62154a4f16af044a5211d48c46e4c31af60368c0d916ab8ec7->enter($__internal_c44edb3a1bfd7a62154a4f16af044a5211d48c46e4c31af60368c0d916ab8ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aadb24f44d4798d445a77591491ca9c7a771e2a078f21ccbd7db0630ac5838d->leave($__internal_2aadb24f44d4798d445a77591491ca9c7a771e2a078f21ccbd7db0630ac5838d_prof);

        
        $__internal_c44edb3a1bfd7a62154a4f16af044a5211d48c46e4c31af60368c0d916ab8ec7->leave($__internal_c44edb3a1bfd7a62154a4f16af044a5211d48c46e4c31af60368c0d916ab8ec7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9ac4017f4f2a40b3f4e655cdbd629322de59f7b6e75b9377e08a24c66d5015c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac4017f4f2a40b3f4e655cdbd629322de59f7b6e75b9377e08a24c66d5015c2->enter($__internal_9ac4017f4f2a40b3f4e655cdbd629322de59f7b6e75b9377e08a24c66d5015c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c9a5c94fb95e3d3cc38f1cd3a06e1a95334850fac00d99254fcfe331f3800e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a5c94fb95e3d3cc38f1cd3a06e1a95334850fac00d99254fcfe331f3800e32->enter($__internal_c9a5c94fb95e3d3cc38f1cd3a06e1a95334850fac00d99254fcfe331f3800e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9a5c94fb95e3d3cc38f1cd3a06e1a95334850fac00d99254fcfe331f3800e32->leave($__internal_c9a5c94fb95e3d3cc38f1cd3a06e1a95334850fac00d99254fcfe331f3800e32_prof);

        
        $__internal_9ac4017f4f2a40b3f4e655cdbd629322de59f7b6e75b9377e08a24c66d5015c2->leave($__internal_9ac4017f4f2a40b3f4e655cdbd629322de59f7b6e75b9377e08a24c66d5015c2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b73a14c508baa1d8417b05effe919cfccd18536bd7e623b4fde6848b99bd137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b73a14c508baa1d8417b05effe919cfccd18536bd7e623b4fde6848b99bd137->enter($__internal_6b73a14c508baa1d8417b05effe919cfccd18536bd7e623b4fde6848b99bd137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c66a39ecbe92ba6d30ec9c6282eb9cb4f355dae93639c87b392b3104243de003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66a39ecbe92ba6d30ec9c6282eb9cb4f355dae93639c87b392b3104243de003->enter($__internal_c66a39ecbe92ba6d30ec9c6282eb9cb4f355dae93639c87b392b3104243de003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c66a39ecbe92ba6d30ec9c6282eb9cb4f355dae93639c87b392b3104243de003->leave($__internal_c66a39ecbe92ba6d30ec9c6282eb9cb4f355dae93639c87b392b3104243de003_prof);

        
        $__internal_6b73a14c508baa1d8417b05effe919cfccd18536bd7e623b4fde6848b99bd137->leave($__internal_6b73a14c508baa1d8417b05effe919cfccd18536bd7e623b4fde6848b99bd137_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea920b5d2c65d79532cdd217c037c388cc3fa8615ddef38727009a7f8806c712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea920b5d2c65d79532cdd217c037c388cc3fa8615ddef38727009a7f8806c712->enter($__internal_ea920b5d2c65d79532cdd217c037c388cc3fa8615ddef38727009a7f8806c712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_141675c06d27f4bc9da236982dd040d61db80b4a3e4f3acbaf24895a352a1b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141675c06d27f4bc9da236982dd040d61db80b4a3e4f3acbaf24895a352a1b82->enter($__internal_141675c06d27f4bc9da236982dd040d61db80b4a3e4f3acbaf24895a352a1b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_141675c06d27f4bc9da236982dd040d61db80b4a3e4f3acbaf24895a352a1b82->leave($__internal_141675c06d27f4bc9da236982dd040d61db80b4a3e4f3acbaf24895a352a1b82_prof);

        
        $__internal_ea920b5d2c65d79532cdd217c037c388cc3fa8615ddef38727009a7f8806c712->leave($__internal_ea920b5d2c65d79532cdd217c037c388cc3fa8615ddef38727009a7f8806c712_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
