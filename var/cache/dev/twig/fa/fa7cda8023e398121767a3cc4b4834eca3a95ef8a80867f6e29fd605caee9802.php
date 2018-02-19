<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_37db6976f5e8ffb0fdb8a84511019faa2f4973b0c7418f48e7c68e090bae5586 extends Twig_Template
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
        $__internal_f6be9d63964e696af709db3249c606c8e666de24b83247fedfc6447ea2e4f930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6be9d63964e696af709db3249c606c8e666de24b83247fedfc6447ea2e4f930->enter($__internal_f6be9d63964e696af709db3249c606c8e666de24b83247fedfc6447ea2e4f930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:create_button.html.twig"));

        $__internal_231e7bc32684920d2d0fe2437fc708d5a728877a3f6cb246d5cc88febc3b9a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231e7bc32684920d2d0fe2437fc708d5a728877a3f6cb246d5cc88febc3b9a03->enter($__internal_231e7bc32684920d2d0fe2437fc708d5a728877a3f6cb246d5cc88febc3b9a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:create_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "create"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "subClasses", array()))) {
                // line 14
                echo "        <a class=\"sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <li class=\"divider\" role=\"presentation\"></li>
        ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "subclasses", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 20
                    echo "            <li>
                <a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
                    echo "\">
                    <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                    ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                    echo "
                </a>
            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "        <li class=\"divider\" role=\"presentation\"></li>
    ";
            }
        }
        
        $__internal_f6be9d63964e696af709db3249c606c8e666de24b83247fedfc6447ea2e4f930->leave($__internal_f6be9d63964e696af709db3249c606c8e666de24b83247fedfc6447ea2e4f930_prof);

        
        $__internal_231e7bc32684920d2d0fe2437fc708d5a728877a3f6cb246d5cc88febc3b9a03->leave($__internal_231e7bc32684920d2d0fe2437fc708d5a728877a3f6cb246d5cc88febc3b9a03_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  59 => 23,  54 => 21,  51 => 20,  47 => 19,  44 => 18,  39 => 16,  33 => 14,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.hasAccess('create') and admin.hasRoute('create') %}
    {% if admin.subClasses is empty %}
        <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('create') }}\">
            <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
            {{ 'link_action_create'|trans({}, 'SonataAdminBundle') }}</a>
    {% else %}
        <li class=\"divider\" role=\"presentation\"></li>
        {% for subclass in admin.subclasses|keys %}
            <li>
                <a href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">
                    <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                    {{ 'link_action_create'|trans({}, 'SonataAdminBundle') }} {{ subclass|trans({}, admin.translationdomain) }}
                </a>
            </li>
        {% endfor %}
        <li class=\"divider\" role=\"presentation\"></li>
    {% endif %}
{% endif %}
", "SonataAdminBundle:Button:create_button.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/Button/create_button.html.twig");
    }
}
