<?php

/* @Twig/Exception/error500.html.twig */
class __TwigTemplate_8a989aa81228a194013d8a3deb9e615d8aebe8115278a9f4264dcc2e954954de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Twig/Exception/error500.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'optbody' => array($this, 'block_optbody'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "500 - Page introuvable";
    }

    // line 7
    public function block_optbody($context, array $blocks = array())
    {
        // line 8
        echo "            class=\"focusedform\"
        ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "            <div class=\"verticalcenter\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_main_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/anelis-logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"brand\" /></a>
                <div class=\"panel panel-primary\">
                    <div class=\"panel-body\">
                        <h4 class=\"text-center\" style=\"margin-bottom: 25px;\">Oh ! Une erreur s'est produite :'(</h4>
                        <div class=\"text-center\">
                            <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_main_homepage");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-arrow-left\"></i> Retour</a>
                        </div>
                    </div>
                </div>
            </div>

        ";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  50 => 13,  47 => 12,  44 => 11,  39 => 8,  36 => 7,  30 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error500.html.twig", "D:\\WAMP\\www\\plateformeanelis\\app\\Resources\\TwigBundle\\views\\Exception\\error500.html.twig");
    }
}
