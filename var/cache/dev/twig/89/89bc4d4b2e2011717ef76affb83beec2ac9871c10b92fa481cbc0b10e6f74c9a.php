<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_694c4b579d50d238ea45df81aa55c0045fd224894d9be164a2f54a5fce5e2129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f2eaaf96d06f4f6f7c007425e2a0f911804caca25ba6125a53c4f2b21cf6ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f2eaaf96d06f4f6f7c007425e2a0f911804caca25ba6125a53c4f2b21cf6ad0->enter($__internal_3f2eaaf96d06f4f6f7c007425e2a0f911804caca25ba6125a53c4f2b21cf6ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e58bec696accc700b2908e1c09242418b25c4c4be70acb54526135fd6cbd96a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58bec696accc700b2908e1c09242418b25c4c4be70acb54526135fd6cbd96a7->enter($__internal_e58bec696accc700b2908e1c09242418b25c4c4be70acb54526135fd6cbd96a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f2eaaf96d06f4f6f7c007425e2a0f911804caca25ba6125a53c4f2b21cf6ad0->leave($__internal_3f2eaaf96d06f4f6f7c007425e2a0f911804caca25ba6125a53c4f2b21cf6ad0_prof);

        
        $__internal_e58bec696accc700b2908e1c09242418b25c4c4be70acb54526135fd6cbd96a7->leave($__internal_e58bec696accc700b2908e1c09242418b25c4c4be70acb54526135fd6cbd96a7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_40f7d2a5cd595a5634d2b39e6ebcaaaca0d5bbc4fbfd0c0438ee13abf1ce8fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f7d2a5cd595a5634d2b39e6ebcaaaca0d5bbc4fbfd0c0438ee13abf1ce8fe9->enter($__internal_40f7d2a5cd595a5634d2b39e6ebcaaaca0d5bbc4fbfd0c0438ee13abf1ce8fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_40a6f1623273bf003d2cdac0cde3cbf192577d8da76941a7a095deeb4bb3f0fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a6f1623273bf003d2cdac0cde3cbf192577d8da76941a7a095deeb4bb3f0fd->enter($__internal_40a6f1623273bf003d2cdac0cde3cbf192577d8da76941a7a095deeb4bb3f0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_40a6f1623273bf003d2cdac0cde3cbf192577d8da76941a7a095deeb4bb3f0fd->leave($__internal_40a6f1623273bf003d2cdac0cde3cbf192577d8da76941a7a095deeb4bb3f0fd_prof);

        
        $__internal_40f7d2a5cd595a5634d2b39e6ebcaaaca0d5bbc4fbfd0c0438ee13abf1ce8fe9->leave($__internal_40f7d2a5cd595a5634d2b39e6ebcaaaca0d5bbc4fbfd0c0438ee13abf1ce8fe9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4387d2b750ec1a8469cdc63eee4d65a185005865a76cc1f11888f06d7ba67950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4387d2b750ec1a8469cdc63eee4d65a185005865a76cc1f11888f06d7ba67950->enter($__internal_4387d2b750ec1a8469cdc63eee4d65a185005865a76cc1f11888f06d7ba67950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_07bf1317502032e71eff654db79f5097a167f8d0fbf16f14b69f7116fc335f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bf1317502032e71eff654db79f5097a167f8d0fbf16f14b69f7116fc335f4e->enter($__internal_07bf1317502032e71eff654db79f5097a167f8d0fbf16f14b69f7116fc335f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_07bf1317502032e71eff654db79f5097a167f8d0fbf16f14b69f7116fc335f4e->leave($__internal_07bf1317502032e71eff654db79f5097a167f8d0fbf16f14b69f7116fc335f4e_prof);

        
        $__internal_4387d2b750ec1a8469cdc63eee4d65a185005865a76cc1f11888f06d7ba67950->leave($__internal_4387d2b750ec1a8469cdc63eee4d65a185005865a76cc1f11888f06d7ba67950_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d5729bcfe1c54b2da09b9963ec0cf0cd93623f6aac8c4d4425e538af182a035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5729bcfe1c54b2da09b9963ec0cf0cd93623f6aac8c4d4425e538af182a035->enter($__internal_8d5729bcfe1c54b2da09b9963ec0cf0cd93623f6aac8c4d4425e538af182a035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23291650a24154ea64ff113811d7d895dad9356c718f883583277425b83c8932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23291650a24154ea64ff113811d7d895dad9356c718f883583277425b83c8932->enter($__internal_23291650a24154ea64ff113811d7d895dad9356c718f883583277425b83c8932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_23291650a24154ea64ff113811d7d895dad9356c718f883583277425b83c8932->leave($__internal_23291650a24154ea64ff113811d7d895dad9356c718f883583277425b83c8932_prof);

        
        $__internal_8d5729bcfe1c54b2da09b9963ec0cf0cd93623f6aac8c4d4425e538af182a035->leave($__internal_8d5729bcfe1c54b2da09b9963ec0cf0cd93623f6aac8c4d4425e538af182a035_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
