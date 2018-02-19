<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a90c99ed91e9274c89ebc73e79742217dc75c673cee9fc4951bf4dd35c0235ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56038cd29b3ed0562aba2a1dc2fdebbceeb89a9c619f2891f2764a5ccbe28679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56038cd29b3ed0562aba2a1dc2fdebbceeb89a9c619f2891f2764a5ccbe28679->enter($__internal_56038cd29b3ed0562aba2a1dc2fdebbceeb89a9c619f2891f2764a5ccbe28679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e2c6110247a48c84556736c5207ee4c66ba4122de06d838f247514a97ed69e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c6110247a48c84556736c5207ee4c66ba4122de06d838f247514a97ed69e2e->enter($__internal_e2c6110247a48c84556736c5207ee4c66ba4122de06d838f247514a97ed69e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56038cd29b3ed0562aba2a1dc2fdebbceeb89a9c619f2891f2764a5ccbe28679->leave($__internal_56038cd29b3ed0562aba2a1dc2fdebbceeb89a9c619f2891f2764a5ccbe28679_prof);

        
        $__internal_e2c6110247a48c84556736c5207ee4c66ba4122de06d838f247514a97ed69e2e->leave($__internal_e2c6110247a48c84556736c5207ee4c66ba4122de06d838f247514a97ed69e2e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_227070b361ad62b3e09674a5cc52eed180de43d1e1f881d3f2ca90096d93e159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227070b361ad62b3e09674a5cc52eed180de43d1e1f881d3f2ca90096d93e159->enter($__internal_227070b361ad62b3e09674a5cc52eed180de43d1e1f881d3f2ca90096d93e159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5fdbfef3c9b8fba681886cf3d436dd0fe128577fc2a18f55eb1b59901ba6e815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdbfef3c9b8fba681886cf3d436dd0fe128577fc2a18f55eb1b59901ba6e815->enter($__internal_5fdbfef3c9b8fba681886cf3d436dd0fe128577fc2a18f55eb1b59901ba6e815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5fdbfef3c9b8fba681886cf3d436dd0fe128577fc2a18f55eb1b59901ba6e815->leave($__internal_5fdbfef3c9b8fba681886cf3d436dd0fe128577fc2a18f55eb1b59901ba6e815_prof);

        
        $__internal_227070b361ad62b3e09674a5cc52eed180de43d1e1f881d3f2ca90096d93e159->leave($__internal_227070b361ad62b3e09674a5cc52eed180de43d1e1f881d3f2ca90096d93e159_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
