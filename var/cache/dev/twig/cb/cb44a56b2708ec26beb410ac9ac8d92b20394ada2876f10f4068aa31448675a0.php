<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_e59bd855148200dcd326c97f2c1143772bbf510e1bee1a5f611942240786acfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2572f74ac9d275f4391032e19480322a3a6b053b2221879b498ea8fd28d77d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2572f74ac9d275f4391032e19480322a3a6b053b2221879b498ea8fd28d77d0f->enter($__internal_2572f74ac9d275f4391032e19480322a3a6b053b2221879b498ea8fd28d77d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $__internal_e0cf77bdebe632b3fbe3eaf8119bba5170033aa106db11b182c9f60b080a865b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0cf77bdebe632b3fbe3eaf8119bba5170033aa106db11b182c9f60b080a865b->enter($__internal_e0cf77bdebe632b3fbe3eaf8119bba5170033aa106db11b182c9f60b080a865b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2572f74ac9d275f4391032e19480322a3a6b053b2221879b498ea8fd28d77d0f->leave($__internal_2572f74ac9d275f4391032e19480322a3a6b053b2221879b498ea8fd28d77d0f_prof);

        
        $__internal_e0cf77bdebe632b3fbe3eaf8119bba5170033aa106db11b182c9f60b080a865b->leave($__internal_e0cf77bdebe632b3fbe3eaf8119bba5170033aa106db11b182c9f60b080a865b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
