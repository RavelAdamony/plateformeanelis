<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_7ae3ef04d62624c77cb27d2540a822bfb3d1aeb769ad1ba6f71bed146db7cf04 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb510f1732f509d7044967738f2d3d9098ddb5d5b96162db9e07be6e41448206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb510f1732f509d7044967738f2d3d9098ddb5d5b96162db9e07be6e41448206->enter($__internal_bb510f1732f509d7044967738f2d3d9098ddb5d5b96162db9e07be6e41448206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_70171eaf2249716592de22291ee481660d55721dddfa2a683da649f818e30314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70171eaf2249716592de22291ee481660d55721dddfa2a683da649f818e30314->enter($__internal_70171eaf2249716592de22291ee481660d55721dddfa2a683da649f818e30314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb510f1732f509d7044967738f2d3d9098ddb5d5b96162db9e07be6e41448206->leave($__internal_bb510f1732f509d7044967738f2d3d9098ddb5d5b96162db9e07be6e41448206_prof);

        
        $__internal_70171eaf2249716592de22291ee481660d55721dddfa2a683da649f818e30314->leave($__internal_70171eaf2249716592de22291ee481660d55721dddfa2a683da649f818e30314_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_af620bf9acbd0188db85661fa146e8a806484829b6e502aea55c22e1807a5699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af620bf9acbd0188db85661fa146e8a806484829b6e502aea55c22e1807a5699->enter($__internal_af620bf9acbd0188db85661fa146e8a806484829b6e502aea55c22e1807a5699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e9e273d50acf1b8599fbb33111a005b9306aa9a6f9776cba58dda844b63d2e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e273d50acf1b8599fbb33111a005b9306aa9a6f9776cba58dda844b63d2e75->enter($__internal_e9e273d50acf1b8599fbb33111a005b9306aa9a6f9776cba58dda844b63d2e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_e9e273d50acf1b8599fbb33111a005b9306aa9a6f9776cba58dda844b63d2e75->leave($__internal_e9e273d50acf1b8599fbb33111a005b9306aa9a6f9776cba58dda844b63d2e75_prof);

        
        $__internal_af620bf9acbd0188db85661fa146e8a806484829b6e502aea55c22e1807a5699->leave($__internal_af620bf9acbd0188db85661fa146e8a806484829b6e502aea55c22e1807a5699_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
