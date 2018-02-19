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
        $__internal_7e7ec31b021676e11ade1b9c1da210c2ab80fb55c91bfc7a8c0ce1d2ff0267ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7ec31b021676e11ade1b9c1da210c2ab80fb55c91bfc7a8c0ce1d2ff0267ec->enter($__internal_7e7ec31b021676e11ade1b9c1da210c2ab80fb55c91bfc7a8c0ce1d2ff0267ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_38b002f7e7b9e2c0d744894d057578181e81a5161b7168df87c0ec19288991ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b002f7e7b9e2c0d744894d057578181e81a5161b7168df87c0ec19288991ef->enter($__internal_38b002f7e7b9e2c0d744894d057578181e81a5161b7168df87c0ec19288991ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e7ec31b021676e11ade1b9c1da210c2ab80fb55c91bfc7a8c0ce1d2ff0267ec->leave($__internal_7e7ec31b021676e11ade1b9c1da210c2ab80fb55c91bfc7a8c0ce1d2ff0267ec_prof);

        
        $__internal_38b002f7e7b9e2c0d744894d057578181e81a5161b7168df87c0ec19288991ef->leave($__internal_38b002f7e7b9e2c0d744894d057578181e81a5161b7168df87c0ec19288991ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc4d076b06cbc01f5c093e35b62eecc7c799150c125d2ee05dbfd5b06909a64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4d076b06cbc01f5c093e35b62eecc7c799150c125d2ee05dbfd5b06909a64e->enter($__internal_dc4d076b06cbc01f5c093e35b62eecc7c799150c125d2ee05dbfd5b06909a64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f0174d1029035976ca8b71763067a9a5f5a64eda90fa8411c34d037d2f84c128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0174d1029035976ca8b71763067a9a5f5a64eda90fa8411c34d037d2f84c128->enter($__internal_f0174d1029035976ca8b71763067a9a5f5a64eda90fa8411c34d037d2f84c128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f0174d1029035976ca8b71763067a9a5f5a64eda90fa8411c34d037d2f84c128->leave($__internal_f0174d1029035976ca8b71763067a9a5f5a64eda90fa8411c34d037d2f84c128_prof);

        
        $__internal_dc4d076b06cbc01f5c093e35b62eecc7c799150c125d2ee05dbfd5b06909a64e->leave($__internal_dc4d076b06cbc01f5c093e35b62eecc7c799150c125d2ee05dbfd5b06909a64e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee8432c920cbccc4a42184f62fde6e2006a1df29824b03076e6c70467dde99ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8432c920cbccc4a42184f62fde6e2006a1df29824b03076e6c70467dde99ef->enter($__internal_ee8432c920cbccc4a42184f62fde6e2006a1df29824b03076e6c70467dde99ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d5a6cb6e26dc7900745f8779a3787308201b8b99679b1716d703c911847948b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a6cb6e26dc7900745f8779a3787308201b8b99679b1716d703c911847948b8->enter($__internal_d5a6cb6e26dc7900745f8779a3787308201b8b99679b1716d703c911847948b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d5a6cb6e26dc7900745f8779a3787308201b8b99679b1716d703c911847948b8->leave($__internal_d5a6cb6e26dc7900745f8779a3787308201b8b99679b1716d703c911847948b8_prof);

        
        $__internal_ee8432c920cbccc4a42184f62fde6e2006a1df29824b03076e6c70467dde99ef->leave($__internal_ee8432c920cbccc4a42184f62fde6e2006a1df29824b03076e6c70467dde99ef_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82babbcdcc63f3b27ca5b56ab07595f321ca131731267df1a999eaf02fd42b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82babbcdcc63f3b27ca5b56ab07595f321ca131731267df1a999eaf02fd42b35->enter($__internal_82babbcdcc63f3b27ca5b56ab07595f321ca131731267df1a999eaf02fd42b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6cafa426d0f58b86321c8d4a42d947daf8414227dc940237ee751c58e1c7b843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cafa426d0f58b86321c8d4a42d947daf8414227dc940237ee751c58e1c7b843->enter($__internal_6cafa426d0f58b86321c8d4a42d947daf8414227dc940237ee751c58e1c7b843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6cafa426d0f58b86321c8d4a42d947daf8414227dc940237ee751c58e1c7b843->leave($__internal_6cafa426d0f58b86321c8d4a42d947daf8414227dc940237ee751c58e1c7b843_prof);

        
        $__internal_82babbcdcc63f3b27ca5b56ab07595f321ca131731267df1a999eaf02fd42b35->leave($__internal_82babbcdcc63f3b27ca5b56ab07595f321ca131731267df1a999eaf02fd42b35_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
