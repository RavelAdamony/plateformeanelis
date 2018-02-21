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
        $__internal_72c5c96c9a450d61492636d459b67a82dafd1f97ad06eea6d0fd552da6c8eb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c5c96c9a450d61492636d459b67a82dafd1f97ad06eea6d0fd552da6c8eb60->enter($__internal_72c5c96c9a450d61492636d459b67a82dafd1f97ad06eea6d0fd552da6c8eb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7d8a8bd4d2ff76e03a5961538481f74487a85f76c48198e5484a86104ecb660c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8a8bd4d2ff76e03a5961538481f74487a85f76c48198e5484a86104ecb660c->enter($__internal_7d8a8bd4d2ff76e03a5961538481f74487a85f76c48198e5484a86104ecb660c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72c5c96c9a450d61492636d459b67a82dafd1f97ad06eea6d0fd552da6c8eb60->leave($__internal_72c5c96c9a450d61492636d459b67a82dafd1f97ad06eea6d0fd552da6c8eb60_prof);

        
        $__internal_7d8a8bd4d2ff76e03a5961538481f74487a85f76c48198e5484a86104ecb660c->leave($__internal_7d8a8bd4d2ff76e03a5961538481f74487a85f76c48198e5484a86104ecb660c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9d772817eccf1a3d1efcd4244be5254c63804e586441e741fea222928cecf13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d772817eccf1a3d1efcd4244be5254c63804e586441e741fea222928cecf13->enter($__internal_c9d772817eccf1a3d1efcd4244be5254c63804e586441e741fea222928cecf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_db0802a21b0f1f161d82815b82fbd1f31256612c05a028c16d61fb75cdc25d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0802a21b0f1f161d82815b82fbd1f31256612c05a028c16d61fb75cdc25d36->enter($__internal_db0802a21b0f1f161d82815b82fbd1f31256612c05a028c16d61fb75cdc25d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_db0802a21b0f1f161d82815b82fbd1f31256612c05a028c16d61fb75cdc25d36->leave($__internal_db0802a21b0f1f161d82815b82fbd1f31256612c05a028c16d61fb75cdc25d36_prof);

        
        $__internal_c9d772817eccf1a3d1efcd4244be5254c63804e586441e741fea222928cecf13->leave($__internal_c9d772817eccf1a3d1efcd4244be5254c63804e586441e741fea222928cecf13_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_76123c97b41009e18a80784333e8dd110c5146e7af70fcb352d6987904940ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76123c97b41009e18a80784333e8dd110c5146e7af70fcb352d6987904940ab3->enter($__internal_76123c97b41009e18a80784333e8dd110c5146e7af70fcb352d6987904940ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_381d9b0ee548041475a9203483a006d73642109fab3e28381d091e039223a7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381d9b0ee548041475a9203483a006d73642109fab3e28381d091e039223a7d9->enter($__internal_381d9b0ee548041475a9203483a006d73642109fab3e28381d091e039223a7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_381d9b0ee548041475a9203483a006d73642109fab3e28381d091e039223a7d9->leave($__internal_381d9b0ee548041475a9203483a006d73642109fab3e28381d091e039223a7d9_prof);

        
        $__internal_76123c97b41009e18a80784333e8dd110c5146e7af70fcb352d6987904940ab3->leave($__internal_76123c97b41009e18a80784333e8dd110c5146e7af70fcb352d6987904940ab3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6c001511d5e48b0cda95b7bc9c7425802856f186fb5e79694cc5593ece5d749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c001511d5e48b0cda95b7bc9c7425802856f186fb5e79694cc5593ece5d749->enter($__internal_b6c001511d5e48b0cda95b7bc9c7425802856f186fb5e79694cc5593ece5d749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0139665af3040662e0042e33d83153bbf02039a11760277d7f06884e7a68b8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0139665af3040662e0042e33d83153bbf02039a11760277d7f06884e7a68b8db->enter($__internal_0139665af3040662e0042e33d83153bbf02039a11760277d7f06884e7a68b8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0139665af3040662e0042e33d83153bbf02039a11760277d7f06884e7a68b8db->leave($__internal_0139665af3040662e0042e33d83153bbf02039a11760277d7f06884e7a68b8db_prof);

        
        $__internal_b6c001511d5e48b0cda95b7bc9c7425802856f186fb5e79694cc5593ece5d749->leave($__internal_b6c001511d5e48b0cda95b7bc9c7425802856f186fb5e79694cc5593ece5d749_prof);

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
