<?php

/* AdminUserBundle:Profile:user.edit.html.twig */
class __TwigTemplate_bc796c0742484707a7e1c40e06575a833b4de76be3fc1103bec4e82059085fe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::application.html.twig", "AdminUserBundle:Profile:user.edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::application.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb4f8a04455e42e972c2adcc3bae0eb504477b793e00b47f3713fc99280ba3b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb4f8a04455e42e972c2adcc3bae0eb504477b793e00b47f3713fc99280ba3b6->enter($__internal_cb4f8a04455e42e972c2adcc3bae0eb504477b793e00b47f3713fc99280ba3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Profile:user.edit.html.twig"));

        $__internal_833c6b0ceb4ecd25d155bb18117150fc8c096ed12ad2b6df5c39a87b49d1863b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833c6b0ceb4ecd25d155bb18117150fc8c096ed12ad2b6df5c39a87b49d1863b->enter($__internal_833c6b0ceb4ecd25d155bb18117150fc8c096ed12ad2b6df5c39a87b49d1863b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Profile:user.edit.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "AdminUserBundle:Form:user.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb4f8a04455e42e972c2adcc3bae0eb504477b793e00b47f3713fc99280ba3b6->leave($__internal_cb4f8a04455e42e972c2adcc3bae0eb504477b793e00b47f3713fc99280ba3b6_prof);

        
        $__internal_833c6b0ceb4ecd25d155bb18117150fc8c096ed12ad2b6df5c39a87b49d1863b->leave($__internal_833c6b0ceb4ecd25d155bb18117150fc8c096ed12ad2b6df5c39a87b49d1863b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e90ea37518a42fca0f266a76d27ccb19d9f8d3c03c15f96cbe30f51ca2c8e149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90ea37518a42fca0f266a76d27ccb19d9f8d3c03c15f96cbe30f51ca2c8e149->enter($__internal_e90ea37518a42fca0f266a76d27ccb19d9f8d3c03c15f96cbe30f51ca2c8e149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d492ceca8941a759ad72d1a45742a4661ad1136c88696dff9573da1d4ee0deb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d492ceca8941a759ad72d1a45742a4661ad1136c88696dff9573da1d4ee0deb5->enter($__internal_d492ceca8941a759ad72d1a45742a4661ad1136c88696dff9573da1d4ee0deb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon Compte";
        
        $__internal_d492ceca8941a759ad72d1a45742a4661ad1136c88696dff9573da1d4ee0deb5->leave($__internal_d492ceca8941a759ad72d1a45742a4661ad1136c88696dff9573da1d4ee0deb5_prof);

        
        $__internal_e90ea37518a42fca0f266a76d27ccb19d9f8d3c03c15f96cbe30f51ca2c8e149->leave($__internal_e90ea37518a42fca0f266a76d27ccb19d9f8d3c03c15f96cbe30f51ca2c8e149_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fbb6aa12b876c2f9dc85cc8a9868206c4dca10dad577f0ed3a0e51f30061d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fbb6aa12b876c2f9dc85cc8a9868206c4dca10dad577f0ed3a0e51f30061d62->enter($__internal_5fbb6aa12b876c2f9dc85cc8a9868206c4dca10dad577f0ed3a0e51f30061d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10aff74cc23d412f78a5541e5649642511f626bae326772840722ef64f569d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10aff74cc23d412f78a5541e5649642511f626bae326772840722ef64f569d18->enter($__internal_10aff74cc23d412f78a5541e5649642511f626bae326772840722ef64f569d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-content\">
  <div id='wrap'>
    <div id=\"page-heading\">
      <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_main_homepage");
        echo "\">Plateforme</a></li>
        <li class=\"active\">Mon Compte</li>
      </ol>
      <h1>Mon Compte</h1>
    </div>

    <div class=\"container\">      
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
              <h4>Mon Compte</h4>
            </div>
              ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
              <br>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

";
        
        $__internal_10aff74cc23d412f78a5541e5649642511f626bae326772840722ef64f569d18->leave($__internal_10aff74cc23d412f78a5541e5649642511f626bae326772840722ef64f569d18_prof);

        
        $__internal_5fbb6aa12b876c2f9dc85cc8a9868206c4dca10dad577f0ed3a0e51f30061d62->leave($__internal_5fbb6aa12b876c2f9dc85cc8a9868206c4dca10dad577f0ed3a0e51f30061d62_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:Profile:user.edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  77 => 10,  71 => 6,  62 => 5,  44 => 3,  34 => 1,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::application.html.twig\" %} 
{% form_theme form 'AdminUserBundle:Form:user.html.twig' %}
{% block title %}Mon Compte{% endblock %}

{% block body %}
<div id=\"page-content\">
  <div id='wrap'>
    <div id=\"page-heading\">
      <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('application_main_homepage') }}\">Plateforme</a></li>
        <li class=\"active\">Mon Compte</li>
      </ol>
      <h1>Mon Compte</h1>
    </div>

    <div class=\"container\">      
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
              <h4>Mon Compte</h4>
            </div>
              {{ form_widget(form) }}
              <br>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

{% endblock %}", "AdminUserBundle:Profile:user.edit.html.twig", "C:\\wamp64\\www\\plateformeanelis\\src\\Admin\\UserBundle/Resources/views/Profile/user.edit.html.twig");
    }
}
