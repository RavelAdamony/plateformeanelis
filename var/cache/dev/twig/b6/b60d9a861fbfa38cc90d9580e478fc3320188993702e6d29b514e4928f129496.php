<?php

/* AdminUserBundle:CRUD:list__action_mailjetexport.html.twig */
class __TwigTemplate_343dd5e2aae14de0f69f2527253f73395cdf7ae9499e6bf3e2a26432e8845bd9 extends Twig_Template
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
        $__internal_808f022a4f081436b6ccdcac117a9502498a219cdfa34c019aef9f029431416d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808f022a4f081436b6ccdcac117a9502498a219cdfa34c019aef9f029431416d->enter($__internal_808f022a4f081436b6ccdcac117a9502498a219cdfa34c019aef9f029431416d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:CRUD:list__action_mailjetexport.html.twig"));

        $__internal_ba567015f72d2e57a7c01f0dd6471abced86900f3397322a3736a4230d6b41f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba567015f72d2e57a7c01f0dd6471abced86900f3397322a3736a4230d6b41f1->enter($__internal_ba567015f72d2e57a7c01f0dd6471abced86900f3397322a3736a4230d6b41f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:CRUD:list__action_mailjetexport.html.twig"));

        // line 1
        echo "<a class=\"btn btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "mailjetexport", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">Mailjet Export</a>";
        
        $__internal_808f022a4f081436b6ccdcac117a9502498a219cdfa34c019aef9f029431416d->leave($__internal_808f022a4f081436b6ccdcac117a9502498a219cdfa34c019aef9f029431416d_prof);

        
        $__internal_ba567015f72d2e57a7c01f0dd6471abced86900f3397322a3736a4230d6b41f1->leave($__internal_ba567015f72d2e57a7c01f0dd6471abced86900f3397322a3736a4230d6b41f1_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:CRUD:list__action_mailjetexport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"btn btn-sm\" href=\"{{ admin.generateObjectUrl('mailjetexport', object) }}\">Mailjet Export</a>", "AdminUserBundle:CRUD:list__action_mailjetexport.html.twig", "C:\\wamp64\\www\\plateformeanelis\\src\\Admin\\UserBundle/Resources/views/CRUD/list__action_mailjetexport.html.twig");
    }
}
