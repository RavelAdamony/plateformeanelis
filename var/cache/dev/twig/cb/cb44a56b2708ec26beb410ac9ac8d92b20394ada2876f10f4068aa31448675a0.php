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
        $__internal_2fa37128154090c800b3d15a26ac94488f5100ef61a350b69edfbeca7c68ead3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa37128154090c800b3d15a26ac94488f5100ef61a350b69edfbeca7c68ead3->enter($__internal_2fa37128154090c800b3d15a26ac94488f5100ef61a350b69edfbeca7c68ead3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $__internal_ec83cf55c6f0cbe32d591fbfa89c3c6b5bf050beca5d49bc47be2205866aafb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec83cf55c6f0cbe32d591fbfa89c3c6b5bf050beca5d49bc47be2205866aafb6->enter($__internal_ec83cf55c6f0cbe32d591fbfa89c3c6b5bf050beca5d49bc47be2205866aafb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fa37128154090c800b3d15a26ac94488f5100ef61a350b69edfbeca7c68ead3->leave($__internal_2fa37128154090c800b3d15a26ac94488f5100ef61a350b69edfbeca7c68ead3_prof);

        
        $__internal_ec83cf55c6f0cbe32d591fbfa89c3c6b5bf050beca5d49bc47be2205866aafb6->leave($__internal_ec83cf55c6f0cbe32d591fbfa89c3c6b5bf050beca5d49bc47be2205866aafb6_prof);

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
