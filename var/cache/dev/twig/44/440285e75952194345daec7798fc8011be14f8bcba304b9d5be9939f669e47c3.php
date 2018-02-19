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
        $__internal_941651289c386d605a67068049f09216e6ebdec845912b4418d48f720e0d5c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941651289c386d605a67068049f09216e6ebdec845912b4418d48f720e0d5c0f->enter($__internal_941651289c386d605a67068049f09216e6ebdec845912b4418d48f720e0d5c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_2571a004eb9ff25329b413aa7b71b93f4ac652dc55d90724a7117ae5b0d07637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2571a004eb9ff25329b413aa7b71b93f4ac652dc55d90724a7117ae5b0d07637->enter($__internal_2571a004eb9ff25329b413aa7b71b93f4ac652dc55d90724a7117ae5b0d07637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_941651289c386d605a67068049f09216e6ebdec845912b4418d48f720e0d5c0f->leave($__internal_941651289c386d605a67068049f09216e6ebdec845912b4418d48f720e0d5c0f_prof);

        
        $__internal_2571a004eb9ff25329b413aa7b71b93f4ac652dc55d90724a7117ae5b0d07637->leave($__internal_2571a004eb9ff25329b413aa7b71b93f4ac652dc55d90724a7117ae5b0d07637_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_dfa6308273520d923c939955e47ec190686345e598cd57871a0ebade68606dfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa6308273520d923c939955e47ec190686345e598cd57871a0ebade68606dfa->enter($__internal_dfa6308273520d923c939955e47ec190686345e598cd57871a0ebade68606dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_674c0609dcc7b3256eef937ef12eec2118535688aaa7f654e5d5451a3b225ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674c0609dcc7b3256eef937ef12eec2118535688aaa7f654e5d5451a3b225ddf->enter($__internal_674c0609dcc7b3256eef937ef12eec2118535688aaa7f654e5d5451a3b225ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_674c0609dcc7b3256eef937ef12eec2118535688aaa7f654e5d5451a3b225ddf->leave($__internal_674c0609dcc7b3256eef937ef12eec2118535688aaa7f654e5d5451a3b225ddf_prof);

        
        $__internal_dfa6308273520d923c939955e47ec190686345e598cd57871a0ebade68606dfa->leave($__internal_dfa6308273520d923c939955e47ec190686345e598cd57871a0ebade68606dfa_prof);

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
", "SonataAdminBundle:CRUD:list__batch.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
