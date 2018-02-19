<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_653eace44a2b1209c3c9216540e9105ee6f72c2bac3b357be8bcb188b70b1f30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e2229548b3899533879158b2822297b64d2533e8e838515988b408f7f1bca4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2229548b3899533879158b2822297b64d2533e8e838515988b408f7f1bca4a->enter($__internal_0e2229548b3899533879158b2822297b64d2533e8e838515988b408f7f1bca4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_9c6ddf721cceb2d56940500ec641f30686c3b8f4f0e1ea391290ff2eac1b4ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6ddf721cceb2d56940500ec641f30686c3b8f4f0e1ea391290ff2eac1b4ee3->enter($__internal_9c6ddf721cceb2d56940500ec641f30686c3b8f4f0e1ea391290ff2eac1b4ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e2229548b3899533879158b2822297b64d2533e8e838515988b408f7f1bca4a->leave($__internal_0e2229548b3899533879158b2822297b64d2533e8e838515988b408f7f1bca4a_prof);

        
        $__internal_9c6ddf721cceb2d56940500ec641f30686c3b8f4f0e1ea391290ff2eac1b4ee3->leave($__internal_9c6ddf721cceb2d56940500ec641f30686c3b8f4f0e1ea391290ff2eac1b4ee3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
