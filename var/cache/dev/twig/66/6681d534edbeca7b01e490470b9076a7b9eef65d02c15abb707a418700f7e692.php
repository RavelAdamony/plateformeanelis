<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_9fd99803a116fd5f0e2269902b469f216cd92eca201ab11b33d2eee8923db4cb extends Twig_Template
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
        $__internal_65213af030d70cc2cab5d6c9652a2330654d742371996261b2a10c33c5122361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65213af030d70cc2cab5d6c9652a2330654d742371996261b2a10c33c5122361->enter($__internal_65213af030d70cc2cab5d6c9652a2330654d742371996261b2a10c33c5122361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_b450374788da4bcd29220d0669609979264fbaf314eb015ba69d021ec9f939d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b450374788da4bcd29220d0669609979264fbaf314eb015ba69d021ec9f939d3->enter($__internal_b450374788da4bcd29220d0669609979264fbaf314eb015ba69d021ec9f939d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_65213af030d70cc2cab5d6c9652a2330654d742371996261b2a10c33c5122361->leave($__internal_65213af030d70cc2cab5d6c9652a2330654d742371996261b2a10c33c5122361_prof);

        
        $__internal_b450374788da4bcd29220d0669609979264fbaf314eb015ba69d021ec9f939d3->leave($__internal_b450374788da4bcd29220d0669609979264fbaf314eb015ba69d021ec9f939d3_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_base.html.twig");
    }
}
