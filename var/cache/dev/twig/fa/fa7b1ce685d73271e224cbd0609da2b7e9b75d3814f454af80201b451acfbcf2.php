<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_590462ed4c11446f06eadfef35de1501c82f1a19f440d473feda6edbc81e59a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f0909bcbfb1f2c2ce681a5a79b42b3c5eb1e52d493a8f48767937172d9242416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0909bcbfb1f2c2ce681a5a79b42b3c5eb1e52d493a8f48767937172d9242416->enter($__internal_f0909bcbfb1f2c2ce681a5a79b42b3c5eb1e52d493a8f48767937172d9242416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_00e02d1be0add1c7b4fd8b5648e9370a339cc3924c048ea48dcbdd47170b429c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e02d1be0add1c7b4fd8b5648e9370a339cc3924c048ea48dcbdd47170b429c->enter($__internal_00e02d1be0add1c7b4fd8b5648e9370a339cc3924c048ea48dcbdd47170b429c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0909bcbfb1f2c2ce681a5a79b42b3c5eb1e52d493a8f48767937172d9242416->leave($__internal_f0909bcbfb1f2c2ce681a5a79b42b3c5eb1e52d493a8f48767937172d9242416_prof);

        
        $__internal_00e02d1be0add1c7b4fd8b5648e9370a339cc3924c048ea48dcbdd47170b429c->leave($__internal_00e02d1be0add1c7b4fd8b5648e9370a339cc3924c048ea48dcbdd47170b429c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4629f5083e1b2087061635c645fb0e049d84637ef4d48d65914ee0c5c217001e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4629f5083e1b2087061635c645fb0e049d84637ef4d48d65914ee0c5c217001e->enter($__internal_4629f5083e1b2087061635c645fb0e049d84637ef4d48d65914ee0c5c217001e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0b0065a3319c4b30d2bb0a604a1102653e1a701d3d83816f87a2391bbb5de42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0065a3319c4b30d2bb0a604a1102653e1a701d3d83816f87a2391bbb5de42d->enter($__internal_0b0065a3319c4b30d2bb0a604a1102653e1a701d3d83816f87a2391bbb5de42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0b0065a3319c4b30d2bb0a604a1102653e1a701d3d83816f87a2391bbb5de42d->leave($__internal_0b0065a3319c4b30d2bb0a604a1102653e1a701d3d83816f87a2391bbb5de42d_prof);

        
        $__internal_4629f5083e1b2087061635c645fb0e049d84637ef4d48d65914ee0c5c217001e->leave($__internal_4629f5083e1b2087061635c645fb0e049d84637ef4d48d65914ee0c5c217001e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a4ef55794aac911f229b04fe3ead48e284a85558bec6f12117f1cc25807e7b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4ef55794aac911f229b04fe3ead48e284a85558bec6f12117f1cc25807e7b5->enter($__internal_1a4ef55794aac911f229b04fe3ead48e284a85558bec6f12117f1cc25807e7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_28ff6fefdac6f97982ecb181c08bfd219590c4bcdc3d1f5bda22febcd81672df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ff6fefdac6f97982ecb181c08bfd219590c4bcdc3d1f5bda22febcd81672df->enter($__internal_28ff6fefdac6f97982ecb181c08bfd219590c4bcdc3d1f5bda22febcd81672df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_28ff6fefdac6f97982ecb181c08bfd219590c4bcdc3d1f5bda22febcd81672df->leave($__internal_28ff6fefdac6f97982ecb181c08bfd219590c4bcdc3d1f5bda22febcd81672df_prof);

        
        $__internal_1a4ef55794aac911f229b04fe3ead48e284a85558bec6f12117f1cc25807e7b5->leave($__internal_1a4ef55794aac911f229b04fe3ead48e284a85558bec6f12117f1cc25807e7b5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b821e158d693b0f133d444529bc82de70299b068754eb7ae660485eb9767d6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b821e158d693b0f133d444529bc82de70299b068754eb7ae660485eb9767d6a6->enter($__internal_b821e158d693b0f133d444529bc82de70299b068754eb7ae660485eb9767d6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a4f3061c4caf1662069600296aa34374708786953eff99ecf349a1059ca5e642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f3061c4caf1662069600296aa34374708786953eff99ecf349a1059ca5e642->enter($__internal_a4f3061c4caf1662069600296aa34374708786953eff99ecf349a1059ca5e642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a4f3061c4caf1662069600296aa34374708786953eff99ecf349a1059ca5e642->leave($__internal_a4f3061c4caf1662069600296aa34374708786953eff99ecf349a1059ca5e642_prof);

        
        $__internal_b821e158d693b0f133d444529bc82de70299b068754eb7ae660485eb9767d6a6->leave($__internal_b821e158d693b0f133d444529bc82de70299b068754eb7ae660485eb9767d6a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
