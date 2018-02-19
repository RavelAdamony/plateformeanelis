<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_09fa4f9bc7e85441983477515cb5fb6ae1e4dd02c82212d411aa27db4d9669d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78b33af4114397f5a9bd0b126f818a10c18df6ed95fa67995733f1bd628d46da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b33af4114397f5a9bd0b126f818a10c18df6ed95fa67995733f1bd628d46da->enter($__internal_78b33af4114397f5a9bd0b126f818a10c18df6ed95fa67995733f1bd628d46da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_23e4006725504172cbde734b718560a21156b92c51068bce911c59c1b2f952b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e4006725504172cbde734b718560a21156b92c51068bce911c59c1b2f952b3->enter($__internal_23e4006725504172cbde734b718560a21156b92c51068bce911c59c1b2f952b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_78b33af4114397f5a9bd0b126f818a10c18df6ed95fa67995733f1bd628d46da->leave($__internal_78b33af4114397f5a9bd0b126f818a10c18df6ed95fa67995733f1bd628d46da_prof);

        
        $__internal_23e4006725504172cbde734b718560a21156b92c51068bce911c59c1b2f952b3->leave($__internal_23e4006725504172cbde734b718560a21156b92c51068bce911c59c1b2f952b3_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_63e52af078d74774c6d3f7ba579208a3eea9a7c3741d1e17ce998fd5098d0c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e52af078d74774c6d3f7ba579208a3eea9a7c3741d1e17ce998fd5098d0c5e->enter($__internal_63e52af078d74774c6d3f7ba579208a3eea9a7c3741d1e17ce998fd5098d0c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_94aade6850f4bdfd6ea8f0e96faa7c78e98cb8ba3dc11063a469a21e8d56147e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94aade6850f4bdfd6ea8f0e96faa7c78e98cb8ba3dc11063a469a21e8d56147e->enter($__internal_94aade6850f4bdfd6ea8f0e96faa7c78e98cb8ba3dc11063a469a21e8d56147e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_94aade6850f4bdfd6ea8f0e96faa7c78e98cb8ba3dc11063a469a21e8d56147e->leave($__internal_94aade6850f4bdfd6ea8f0e96faa7c78e98cb8ba3dc11063a469a21e8d56147e_prof);

        
        $__internal_63e52af078d74774c6d3f7ba579208a3eea9a7c3741d1e17ce998fd5098d0c5e->leave($__internal_63e52af078d74774c6d3f7ba579208a3eea9a7c3741d1e17ce998fd5098d0c5e_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_94e64556108292238eb16c389621d0e35ce00ff535d57e3f1aaa8a631500a626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e64556108292238eb16c389621d0e35ce00ff535d57e3f1aaa8a631500a626->enter($__internal_94e64556108292238eb16c389621d0e35ce00ff535d57e3f1aaa8a631500a626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_b654450cae55a24e43cf8aa20de660f202eeb4973d68a6efa07bd92fcbb96c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b654450cae55a24e43cf8aa20de660f202eeb4973d68a6efa07bd92fcbb96c02->enter($__internal_b654450cae55a24e43cf8aa20de660f202eeb4973d68a6efa07bd92fcbb96c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_b654450cae55a24e43cf8aa20de660f202eeb4973d68a6efa07bd92fcbb96c02->leave($__internal_b654450cae55a24e43cf8aa20de660f202eeb4973d68a6efa07bd92fcbb96c02_prof);

        
        $__internal_94e64556108292238eb16c389621d0e35ce00ff535d57e3f1aaa8a631500a626->leave($__internal_94e64556108292238eb16c389621d0e35ce00ff535d57e3f1aaa8a631500a626_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_94bed40f12da9bf4ee67e8914647fd5adcefda48063ab2fcd980451d5839be13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94bed40f12da9bf4ee67e8914647fd5adcefda48063ab2fcd980451d5839be13->enter($__internal_94bed40f12da9bf4ee67e8914647fd5adcefda48063ab2fcd980451d5839be13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_4190c9b51b074ab6b98aaa94f811ecdb06b72ac7884a2259f1b9263294f2d6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4190c9b51b074ab6b98aaa94f811ecdb06b72ac7884a2259f1b9263294f2d6b6->enter($__internal_4190c9b51b074ab6b98aaa94f811ecdb06b72ac7884a2259f1b9263294f2d6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            // line 28
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_4190c9b51b074ab6b98aaa94f811ecdb06b72ac7884a2259f1b9263294f2d6b6->leave($__internal_4190c9b51b074ab6b98aaa94f811ecdb06b72ac7884a2259f1b9263294f2d6b6_prof);

        
        $__internal_94bed40f12da9bf4ee67e8914647fd5adcefda48063ab2fcd980451d5839be13->leave($__internal_94bed40f12da9bf4ee67e8914647fd5adcefda48063ab2fcd980451d5839be13_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  133 => 28,  131 => 27,  123 => 26,  119 => 25,  115 => 24,  108 => 23,  99 => 22,  88 => 19,  85 => 18,  76 => 17,  60 => 13,  51 => 12,  41 => 22,  38 => 21,  36 => 17,  33 => 16,  31 => 12,  28 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{- per_page -}}
            </option>
        {% endfor %}
    </select>
{% endblock %}
", "SonataAdminBundle:Pager:base_results.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}
