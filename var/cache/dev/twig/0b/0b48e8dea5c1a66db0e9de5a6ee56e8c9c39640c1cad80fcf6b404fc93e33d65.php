<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_246a7a62bb1b2a8591a35bc63a0a5345736d384212c3b2c831531d2dcb65c4ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e98f06bb50e97d1e468c63713a9639d0737d1def41985f87a52ead933c584c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98f06bb50e97d1e468c63713a9639d0737d1def41985f87a52ead933c584c2d->enter($__internal_e98f06bb50e97d1e468c63713a9639d0737d1def41985f87a52ead933c584c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $__internal_68907e30d721b3f9b19108183b036d83dc2bed9f5c3480823eba92a336780c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68907e30d721b3f9b19108183b036d83dc2bed9f5c3480823eba92a336780c5d->enter($__internal_68907e30d721b3f9b19108183b036d83dc2bed9f5c3480823eba92a336780c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e98f06bb50e97d1e468c63713a9639d0737d1def41985f87a52ead933c584c2d->leave($__internal_e98f06bb50e97d1e468c63713a9639d0737d1def41985f87a52ead933c584c2d_prof);

        
        $__internal_68907e30d721b3f9b19108183b036d83dc2bed9f5c3480823eba92a336780c5d->leave($__internal_68907e30d721b3f9b19108183b036d83dc2bed9f5c3480823eba92a336780c5d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_21d80fcfcbab283e6fca01508d85cd1de40c0a9657ca250a47b8ca79973a1e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d80fcfcbab283e6fca01508d85cd1de40c0a9657ca250a47b8ca79973a1e49->enter($__internal_21d80fcfcbab283e6fca01508d85cd1de40c0a9657ca250a47b8ca79973a1e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_157ebe6c82e83776ef4b93b5b060dbf55ca1c0e75dabcce0997e0f79fc598d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157ebe6c82e83776ef4b93b5b060dbf55ca1c0e75dabcce0997e0f79fc598d2a->enter($__internal_157ebe6c82e83776ef4b93b5b060dbf55ca1c0e75dabcce0997e0f79fc598d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "SonataAdminBundle:CRUD:list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_157ebe6c82e83776ef4b93b5b060dbf55ca1c0e75dabcce0997e0f79fc598d2a->leave($__internal_157ebe6c82e83776ef4b93b5b060dbf55ca1c0e75dabcce0997e0f79fc598d2a_prof);

        
        $__internal_21d80fcfcbab283e6fca01508d85cd1de40c0a9657ca250a47b8ca79973a1e49->leave($__internal_21d80fcfcbab283e6fca01508d85cd1de40c0a9657ca250a47b8ca79973a1e49_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  71 => 18,  68 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <div class=\"btn-group\">
        {% for actions in field_description.options.actions %}
            {% include actions.template %}
        {% endfor %}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:list__action.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__action.html.twig");
    }
}
