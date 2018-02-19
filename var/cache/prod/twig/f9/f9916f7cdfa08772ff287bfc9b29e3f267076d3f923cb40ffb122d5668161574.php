<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a67a71045eee4cf4af68374a740eeda0c4d669f7e8cdae86029f7a4dd199e647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "Identification
";
    }

    // line 8
    public function block_optbody($context, array $blocks = array())
    {
        // line 9
        echo " class=\"focusedform\"
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
<div class=\"verticalcenter\">
    <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_main_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/anelis-logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"brand\" /></a>
    <div class=\"panel panel-primary\">

        <form class=\"form-horizontal\" action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />

        <div class=\"panel-body\">
            <h4 class=\"text-center\" style=\"margin-bottom: 25px;\">S'identifier</h4>
            ";
        // line 23
        if (($context["error"] ?? null)) {
            // line 24
            echo "                <div class=\"alert alert-danger\">Erreur login et/ou password</div>
            ";
        }
        // line 26
        echo "                        <div class=\"form-group\">
                            <div class=\"col-sm-12\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Nom d'utilisateur: prenom.nom.promo\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\">
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-12\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
                                    <input class=\"form-control\" placeholder=\"Mot de passe\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                                </div>
                            </div>
                        </div>
                        <div class=\"clearfix\">
                            <div class=\"pull-right\"><label><input type=\"checkbox\" style=\"margin-bottom: 20px\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> Se souvenir de moi</label></div>

                        </div>
                    
        </div>
        <div class=\"panel-footer\">
            <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" class=\"pull-left btn btn-link\" style=\"padding-left:0\">Mot de passe oublié?</a>
            
            <div class=\"pull-right\">
                <input class=\"btn-default btn\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Se connecter\" />
            </div>
        </div>
        </form>
    </div>
 </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 50,  84 => 30,  78 => 26,  74 => 24,  72 => 23,  65 => 19,  61 => 18,  53 => 15,  49 => 13,  46 => 12,  41 => 9,  38 => 8,  33 => 5,  30 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login.html.twig", "D:\\WAMP\\www\\plateformeanelis\\src\\Admin\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
