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
        $__internal_7a5540eec0a342f4cd7597ef1480364a56982f412ac03162b4f408cd1ef8d3f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5540eec0a342f4cd7597ef1480364a56982f412ac03162b4f408cd1ef8d3f8->enter($__internal_7a5540eec0a342f4cd7597ef1480364a56982f412ac03162b4f408cd1ef8d3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_248dd155a4fb93905c3cf9742c2d1c66b1ffee8e9db7f255a71d27c61c38eaf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248dd155a4fb93905c3cf9742c2d1c66b1ffee8e9db7f255a71d27c61c38eaf5->enter($__internal_248dd155a4fb93905c3cf9742c2d1c66b1ffee8e9db7f255a71d27c61c38eaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

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
        
        $__internal_7a5540eec0a342f4cd7597ef1480364a56982f412ac03162b4f408cd1ef8d3f8->leave($__internal_7a5540eec0a342f4cd7597ef1480364a56982f412ac03162b4f408cd1ef8d3f8_prof);

        
        $__internal_248dd155a4fb93905c3cf9742c2d1c66b1ffee8e9db7f255a71d27c61c38eaf5->leave($__internal_248dd155a4fb93905c3cf9742c2d1c66b1ffee8e9db7f255a71d27c61c38eaf5_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_e107924644d5f2aefcbe8bfce9779d17590ddb86b42f105b3211ef6565f56912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e107924644d5f2aefcbe8bfce9779d17590ddb86b42f105b3211ef6565f56912->enter($__internal_e107924644d5f2aefcbe8bfce9779d17590ddb86b42f105b3211ef6565f56912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_89c090be70cbdbcc6c8425c4e1a227691e03b2d5a2f073e74de7e11ddfe1e240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c090be70cbdbcc6c8425c4e1a227691e03b2d5a2f073e74de7e11ddfe1e240->enter($__internal_89c090be70cbdbcc6c8425c4e1a227691e03b2d5a2f073e74de7e11ddfe1e240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_89c090be70cbdbcc6c8425c4e1a227691e03b2d5a2f073e74de7e11ddfe1e240->leave($__internal_89c090be70cbdbcc6c8425c4e1a227691e03b2d5a2f073e74de7e11ddfe1e240_prof);

        
        $__internal_e107924644d5f2aefcbe8bfce9779d17590ddb86b42f105b3211ef6565f56912->leave($__internal_e107924644d5f2aefcbe8bfce9779d17590ddb86b42f105b3211ef6565f56912_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_e686c19def068bb1be5d311872c6cb9d4397f6a424654e0b8065635cadbf5dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e686c19def068bb1be5d311872c6cb9d4397f6a424654e0b8065635cadbf5dee->enter($__internal_e686c19def068bb1be5d311872c6cb9d4397f6a424654e0b8065635cadbf5dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_f4ef6cec3791d012d823068c4bc1e4458f5bff6ce3a40ed5f8d548890431c2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ef6cec3791d012d823068c4bc1e4458f5bff6ce3a40ed5f8d548890431c2c0->enter($__internal_f4ef6cec3791d012d823068c4bc1e4458f5bff6ce3a40ed5f8d548890431c2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_f4ef6cec3791d012d823068c4bc1e4458f5bff6ce3a40ed5f8d548890431c2c0->leave($__internal_f4ef6cec3791d012d823068c4bc1e4458f5bff6ce3a40ed5f8d548890431c2c0_prof);

        
        $__internal_e686c19def068bb1be5d311872c6cb9d4397f6a424654e0b8065635cadbf5dee->leave($__internal_e686c19def068bb1be5d311872c6cb9d4397f6a424654e0b8065635cadbf5dee_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_d265af26d630eaf1b1518e23a890a87f137de49fd61e364be69b9d619131b262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d265af26d630eaf1b1518e23a890a87f137de49fd61e364be69b9d619131b262->enter($__internal_d265af26d630eaf1b1518e23a890a87f137de49fd61e364be69b9d619131b262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_9aedd96d84bd4198acdd52bf261bb8dd6a43cf485de543ea66cd7e5ba943e5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aedd96d84bd4198acdd52bf261bb8dd6a43cf485de543ea66cd7e5ba943e5c4->enter($__internal_9aedd96d84bd4198acdd52bf261bb8dd6a43cf485de543ea66cd7e5ba943e5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

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
        
        $__internal_9aedd96d84bd4198acdd52bf261bb8dd6a43cf485de543ea66cd7e5ba943e5c4->leave($__internal_9aedd96d84bd4198acdd52bf261bb8dd6a43cf485de543ea66cd7e5ba943e5c4_prof);

        
        $__internal_d265af26d630eaf1b1518e23a890a87f137de49fd61e364be69b9d619131b262->leave($__internal_d265af26d630eaf1b1518e23a890a87f137de49fd61e364be69b9d619131b262_prof);

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
