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
        $__internal_4919bee1db7bdfc6f3fed8cd0889f07babc8ce335eb965ce06f166d1803040ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4919bee1db7bdfc6f3fed8cd0889f07babc8ce335eb965ce06f166d1803040ec->enter($__internal_4919bee1db7bdfc6f3fed8cd0889f07babc8ce335eb965ce06f166d1803040ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_660f612dfae0ae9cf4f9be1d4b20297e54fc0c2bf86bac5dd4646f53f640118d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660f612dfae0ae9cf4f9be1d4b20297e54fc0c2bf86bac5dd4646f53f640118d->enter($__internal_660f612dfae0ae9cf4f9be1d4b20297e54fc0c2bf86bac5dd4646f53f640118d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4919bee1db7bdfc6f3fed8cd0889f07babc8ce335eb965ce06f166d1803040ec->leave($__internal_4919bee1db7bdfc6f3fed8cd0889f07babc8ce335eb965ce06f166d1803040ec_prof);

        
        $__internal_660f612dfae0ae9cf4f9be1d4b20297e54fc0c2bf86bac5dd4646f53f640118d->leave($__internal_660f612dfae0ae9cf4f9be1d4b20297e54fc0c2bf86bac5dd4646f53f640118d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ffc6863cae266dda1c981176bf84577877e20a33a092368f312d0cd251c71895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffc6863cae266dda1c981176bf84577877e20a33a092368f312d0cd251c71895->enter($__internal_ffc6863cae266dda1c981176bf84577877e20a33a092368f312d0cd251c71895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c09c506d717e4e9875d5c407e1ae86f5eec0b5d0f4e87276f6f0b4fc77096cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09c506d717e4e9875d5c407e1ae86f5eec0b5d0f4e87276f6f0b4fc77096cf2->enter($__internal_c09c506d717e4e9875d5c407e1ae86f5eec0b5d0f4e87276f6f0b4fc77096cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c09c506d717e4e9875d5c407e1ae86f5eec0b5d0f4e87276f6f0b4fc77096cf2->leave($__internal_c09c506d717e4e9875d5c407e1ae86f5eec0b5d0f4e87276f6f0b4fc77096cf2_prof);

        
        $__internal_ffc6863cae266dda1c981176bf84577877e20a33a092368f312d0cd251c71895->leave($__internal_ffc6863cae266dda1c981176bf84577877e20a33a092368f312d0cd251c71895_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd6e2a0769c7ef7559122c97cf4f64534bb816ffe62d2dec9b57c527d6123e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6e2a0769c7ef7559122c97cf4f64534bb816ffe62d2dec9b57c527d6123e46->enter($__internal_dd6e2a0769c7ef7559122c97cf4f64534bb816ffe62d2dec9b57c527d6123e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e7cd62ca011e7e1f8474ba07b8a7f5c11aa0d5cb1c8269b7302746b4663d80b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cd62ca011e7e1f8474ba07b8a7f5c11aa0d5cb1c8269b7302746b4663d80b4->enter($__internal_e7cd62ca011e7e1f8474ba07b8a7f5c11aa0d5cb1c8269b7302746b4663d80b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e7cd62ca011e7e1f8474ba07b8a7f5c11aa0d5cb1c8269b7302746b4663d80b4->leave($__internal_e7cd62ca011e7e1f8474ba07b8a7f5c11aa0d5cb1c8269b7302746b4663d80b4_prof);

        
        $__internal_dd6e2a0769c7ef7559122c97cf4f64534bb816ffe62d2dec9b57c527d6123e46->leave($__internal_dd6e2a0769c7ef7559122c97cf4f64534bb816ffe62d2dec9b57c527d6123e46_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3953e0399d3a04f2190b4c43cbb5dab88a0a62af4aa28777ce337986c0a28c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3953e0399d3a04f2190b4c43cbb5dab88a0a62af4aa28777ce337986c0a28c23->enter($__internal_3953e0399d3a04f2190b4c43cbb5dab88a0a62af4aa28777ce337986c0a28c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22c87a73fe2a4f0a3ccb90e71151f7c7864a6584ab8f6084d77b7cc55a6c4d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c87a73fe2a4f0a3ccb90e71151f7c7864a6584ab8f6084d77b7cc55a6c4d63->enter($__internal_22c87a73fe2a4f0a3ccb90e71151f7c7864a6584ab8f6084d77b7cc55a6c4d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_22c87a73fe2a4f0a3ccb90e71151f7c7864a6584ab8f6084d77b7cc55a6c4d63->leave($__internal_22c87a73fe2a4f0a3ccb90e71151f7c7864a6584ab8f6084d77b7cc55a6c4d63_prof);

        
        $__internal_3953e0399d3a04f2190b4c43cbb5dab88a0a62af4aa28777ce337986c0a28c23->leave($__internal_3953e0399d3a04f2190b4c43cbb5dab88a0a62af4aa28777ce337986c0a28c23_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
