<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e99964099ac5c97e42bf775513771bb905382d3ec68de2f435bd098382b74afc extends Twig_Template
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
        $__internal_1c31f5dac8285f670465fb892688812607eac3dd083ef5ec47a95fa7907a5d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c31f5dac8285f670465fb892688812607eac3dd083ef5ec47a95fa7907a5d8b->enter($__internal_1c31f5dac8285f670465fb892688812607eac3dd083ef5ec47a95fa7907a5d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_535c29402a31f3499a78ede7ee39a0c3eee18dffc049b8ec69c3cc8403eb4ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535c29402a31f3499a78ede7ee39a0c3eee18dffc049b8ec69c3cc8403eb4ca2->enter($__internal_535c29402a31f3499a78ede7ee39a0c3eee18dffc049b8ec69c3cc8403eb4ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c31f5dac8285f670465fb892688812607eac3dd083ef5ec47a95fa7907a5d8b->leave($__internal_1c31f5dac8285f670465fb892688812607eac3dd083ef5ec47a95fa7907a5d8b_prof);

        
        $__internal_535c29402a31f3499a78ede7ee39a0c3eee18dffc049b8ec69c3cc8403eb4ca2->leave($__internal_535c29402a31f3499a78ede7ee39a0c3eee18dffc049b8ec69c3cc8403eb4ca2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6267719f2812c685ecc5eaf12f219a6f70537c00c3ad3b60851fd55004e3d803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6267719f2812c685ecc5eaf12f219a6f70537c00c3ad3b60851fd55004e3d803->enter($__internal_6267719f2812c685ecc5eaf12f219a6f70537c00c3ad3b60851fd55004e3d803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_01ed7c1dae0a904c35948c1fcced664ca23af438150f0b4886ed937d414754ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ed7c1dae0a904c35948c1fcced664ca23af438150f0b4886ed937d414754ea->enter($__internal_01ed7c1dae0a904c35948c1fcced664ca23af438150f0b4886ed937d414754ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_01ed7c1dae0a904c35948c1fcced664ca23af438150f0b4886ed937d414754ea->leave($__internal_01ed7c1dae0a904c35948c1fcced664ca23af438150f0b4886ed937d414754ea_prof);

        
        $__internal_6267719f2812c685ecc5eaf12f219a6f70537c00c3ad3b60851fd55004e3d803->leave($__internal_6267719f2812c685ecc5eaf12f219a6f70537c00c3ad3b60851fd55004e3d803_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd803099f3aa996ed974f4ffd56ac6333353252673bd4299691d47241c57e80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd803099f3aa996ed974f4ffd56ac6333353252673bd4299691d47241c57e80e->enter($__internal_cd803099f3aa996ed974f4ffd56ac6333353252673bd4299691d47241c57e80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a2a0083256729fbfab5208abb58cd57df286d637377f9f4206d6690ab3ab422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2a0083256729fbfab5208abb58cd57df286d637377f9f4206d6690ab3ab422->enter($__internal_8a2a0083256729fbfab5208abb58cd57df286d637377f9f4206d6690ab3ab422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8a2a0083256729fbfab5208abb58cd57df286d637377f9f4206d6690ab3ab422->leave($__internal_8a2a0083256729fbfab5208abb58cd57df286d637377f9f4206d6690ab3ab422_prof);

        
        $__internal_cd803099f3aa996ed974f4ffd56ac6333353252673bd4299691d47241c57e80e->leave($__internal_cd803099f3aa996ed974f4ffd56ac6333353252673bd4299691d47241c57e80e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c58877f46136846f3e43b7ccaa811a99f933ff6436d30efd591e76b2739a4221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58877f46136846f3e43b7ccaa811a99f933ff6436d30efd591e76b2739a4221->enter($__internal_c58877f46136846f3e43b7ccaa811a99f933ff6436d30efd591e76b2739a4221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cf126699f2d59283d42d3f77cd85ff252ace68952518e6b2116a640e3c1fefa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf126699f2d59283d42d3f77cd85ff252ace68952518e6b2116a640e3c1fefa->enter($__internal_0cf126699f2d59283d42d3f77cd85ff252ace68952518e6b2116a640e3c1fefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0cf126699f2d59283d42d3f77cd85ff252ace68952518e6b2116a640e3c1fefa->leave($__internal_0cf126699f2d59283d42d3f77cd85ff252ace68952518e6b2116a640e3c1fefa_prof);

        
        $__internal_c58877f46136846f3e43b7ccaa811a99f933ff6436d30efd591e76b2739a4221->leave($__internal_c58877f46136846f3e43b7ccaa811a99f933ff6436d30efd591e76b2739a4221_prof);

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
", "@Twig/Exception/exception_full.html.twig", "D:\\WAMP\\www\\plateformeanelis\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
