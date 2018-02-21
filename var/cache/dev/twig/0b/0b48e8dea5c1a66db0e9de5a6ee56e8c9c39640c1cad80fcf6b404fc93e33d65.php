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
        $__internal_1849215919cc539db8ae0687a1ed73a060c39d7e117ebe2cd13611dadbef29bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1849215919cc539db8ae0687a1ed73a060c39d7e117ebe2cd13611dadbef29bc->enter($__internal_1849215919cc539db8ae0687a1ed73a060c39d7e117ebe2cd13611dadbef29bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $__internal_f1a91bd8580b1d5b69d5a5eb47fadee77d4f4d091db00aac01dacd7477116234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a91bd8580b1d5b69d5a5eb47fadee77d4f4d091db00aac01dacd7477116234->enter($__internal_f1a91bd8580b1d5b69d5a5eb47fadee77d4f4d091db00aac01dacd7477116234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1849215919cc539db8ae0687a1ed73a060c39d7e117ebe2cd13611dadbef29bc->leave($__internal_1849215919cc539db8ae0687a1ed73a060c39d7e117ebe2cd13611dadbef29bc_prof);

        
        $__internal_f1a91bd8580b1d5b69d5a5eb47fadee77d4f4d091db00aac01dacd7477116234->leave($__internal_f1a91bd8580b1d5b69d5a5eb47fadee77d4f4d091db00aac01dacd7477116234_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2cbbdebdff20cfc5da1b143636df868e383fc47d3ebd8d85f651a24e8de391a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cbbdebdff20cfc5da1b143636df868e383fc47d3ebd8d85f651a24e8de391a7->enter($__internal_2cbbdebdff20cfc5da1b143636df868e383fc47d3ebd8d85f651a24e8de391a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_414f9ae63787138fb9e05aa46875759720afc369d40a0420cb88f890c83483eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414f9ae63787138fb9e05aa46875759720afc369d40a0420cb88f890c83483eb->enter($__internal_414f9ae63787138fb9e05aa46875759720afc369d40a0420cb88f890c83483eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_414f9ae63787138fb9e05aa46875759720afc369d40a0420cb88f890c83483eb->leave($__internal_414f9ae63787138fb9e05aa46875759720afc369d40a0420cb88f890c83483eb_prof);

        
        $__internal_2cbbdebdff20cfc5da1b143636df868e383fc47d3ebd8d85f651a24e8de391a7->leave($__internal_2cbbdebdff20cfc5da1b143636df868e383fc47d3ebd8d85f651a24e8de391a7_prof);

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
