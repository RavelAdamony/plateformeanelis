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
        $__internal_ef6bf73a5592d0ded9d3ebd833339443fd8ff88492d0dbc8a84c74a9f9892e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6bf73a5592d0ded9d3ebd833339443fd8ff88492d0dbc8a84c74a9f9892e27->enter($__internal_ef6bf73a5592d0ded9d3ebd833339443fd8ff88492d0dbc8a84c74a9f9892e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_f99e88de2d8d2b2973187040b56483148778413bdad9f3f1c8ebb73b80574fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99e88de2d8d2b2973187040b56483148778413bdad9f3f1c8ebb73b80574fa5->enter($__internal_f99e88de2d8d2b2973187040b56483148778413bdad9f3f1c8ebb73b80574fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

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
        
        $__internal_ef6bf73a5592d0ded9d3ebd833339443fd8ff88492d0dbc8a84c74a9f9892e27->leave($__internal_ef6bf73a5592d0ded9d3ebd833339443fd8ff88492d0dbc8a84c74a9f9892e27_prof);

        
        $__internal_f99e88de2d8d2b2973187040b56483148778413bdad9f3f1c8ebb73b80574fa5->leave($__internal_f99e88de2d8d2b2973187040b56483148778413bdad9f3f1c8ebb73b80574fa5_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_88be9661f29b219bdca3b2906815e44646536c7e1495aac96be5c3d7d0645e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88be9661f29b219bdca3b2906815e44646536c7e1495aac96be5c3d7d0645e4c->enter($__internal_88be9661f29b219bdca3b2906815e44646536c7e1495aac96be5c3d7d0645e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_c798a65857a913282c10f6f42587be39fd92c096cd5d676f8e30d6c055361c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c798a65857a913282c10f6f42587be39fd92c096cd5d676f8e30d6c055361c26->enter($__internal_c798a65857a913282c10f6f42587be39fd92c096cd5d676f8e30d6c055361c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_c798a65857a913282c10f6f42587be39fd92c096cd5d676f8e30d6c055361c26->leave($__internal_c798a65857a913282c10f6f42587be39fd92c096cd5d676f8e30d6c055361c26_prof);

        
        $__internal_88be9661f29b219bdca3b2906815e44646536c7e1495aac96be5c3d7d0645e4c->leave($__internal_88be9661f29b219bdca3b2906815e44646536c7e1495aac96be5c3d7d0645e4c_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_beee9cfcd25fbc7ea9fd3f7726466aa316f9a0395f8d088e01676dc280a00e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beee9cfcd25fbc7ea9fd3f7726466aa316f9a0395f8d088e01676dc280a00e27->enter($__internal_beee9cfcd25fbc7ea9fd3f7726466aa316f9a0395f8d088e01676dc280a00e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_12056d977b6319ae622079610490aa16c7f12842288783f320cdcfe2ab982b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12056d977b6319ae622079610490aa16c7f12842288783f320cdcfe2ab982b34->enter($__internal_12056d977b6319ae622079610490aa16c7f12842288783f320cdcfe2ab982b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_12056d977b6319ae622079610490aa16c7f12842288783f320cdcfe2ab982b34->leave($__internal_12056d977b6319ae622079610490aa16c7f12842288783f320cdcfe2ab982b34_prof);

        
        $__internal_beee9cfcd25fbc7ea9fd3f7726466aa316f9a0395f8d088e01676dc280a00e27->leave($__internal_beee9cfcd25fbc7ea9fd3f7726466aa316f9a0395f8d088e01676dc280a00e27_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_02c369a4d103c54625d2b935b643775352230ddf3171ca12cd3492d396bf14b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c369a4d103c54625d2b935b643775352230ddf3171ca12cd3492d396bf14b8->enter($__internal_02c369a4d103c54625d2b935b643775352230ddf3171ca12cd3492d396bf14b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_18c868bc55f09f5bf95319506573f69f4dbc69eb67226ed8378c028bf5a1d463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c868bc55f09f5bf95319506573f69f4dbc69eb67226ed8378c028bf5a1d463->enter($__internal_18c868bc55f09f5bf95319506573f69f4dbc69eb67226ed8378c028bf5a1d463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

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
        
        $__internal_18c868bc55f09f5bf95319506573f69f4dbc69eb67226ed8378c028bf5a1d463->leave($__internal_18c868bc55f09f5bf95319506573f69f4dbc69eb67226ed8378c028bf5a1d463_prof);

        
        $__internal_02c369a4d103c54625d2b935b643775352230ddf3171ca12cd3492d396bf14b8->leave($__internal_02c369a4d103c54625d2b935b643775352230ddf3171ca12cd3492d396bf14b8_prof);

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
", "SonataAdminBundle:Pager:base_results.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}
