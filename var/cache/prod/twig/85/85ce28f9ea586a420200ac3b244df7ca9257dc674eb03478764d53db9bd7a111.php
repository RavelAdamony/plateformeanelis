<?php

/* ::application.html.twig */
class __TwigTemplate_1d2a57a5e061ef1d2f487f95cc3999838ad1a4203d9d5143250937c3e5fad1d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::application.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link href='";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/demo/variations/default.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
    <link href='";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/demo/variations/default.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
    

    <!--[if lt IE 9]>
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ie8.css"), "html", null, true);
        echo "\">
        <script type=\"text/javascript\" src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <script type=\"text/javascript\" src=\"http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/charts-flot/excanvas.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->


    <link rel='stylesheet' type='text/css' href='";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/codeprettifier/prettify.css"), "html", null, true);
        echo "' /> 
    <link rel='stylesheet' type='text/css' href='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/form-toggle/toggles.css"), "html", null, true);
        echo "' /> 
    <link rel='stylesheet' type='text/css' href='";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fonts/glyphicons/css/glyphicons.min.css"), "html", null, true);
        echo "' /> 
    <script src='";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "'></script>

";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "
    <header class=\"navbar navbar-inverse navbar-fixed-top\" role=\"banner\">
        <a id=\"leftmenu-trigger\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Agrandir/Réduire le menu\"></a>

        <div class=\"navbar-header pull-left\">
            <a class=\"navbar-brand\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_main_homepage");
        echo "\">ANELIS</a>
        </div>

        <ul class=\"nav navbar-nav pull-right toolbar\">
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle username\" data-toggle=\"dropdown\"><span class=\"hidden-xs\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "surname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "name", array()), "html", null, true);
        echo "<i class=\"fa fa-caret-down\"></i></span>
                ";
        // line 37
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "avatar", array()), "extension", array()))) {
            // line 38
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "avatar", array()), "defaultWebPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "\" style=\"width: auto;\" />
                            ";
        } else {
            // line 40
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "avatar", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "\" style=\"width: auto;\" />
                            ";
        }
        // line 42
        echo "                </a>
                <ul class=\"dropdown-menu userinfo arrow\">
                    <li class=\"username\">
                        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show_profile", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
        echo "\">
                            <div class=\"pull-left\">
                            ";
        // line 47
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "avatar", array()), "extension", array()))) {
            // line 48
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "avatar", array()), "defaultWebPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "\" />
                            ";
        } else {
            // line 50
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "avatar", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "\" />
                            ";
        }
        // line 52
        echo "                            </div>
                            <div class=\"pull-right\"><h5>Salut ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "surname", array()), "html", null, true);
        echo " !</h5></div>
                        </a>
                    </li>
                    <li class=\"userlinks\">
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit_profile", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
        echo "\">Mon Compte <i class=\"pull-right fa fa-pencil\"></i></a></li>
                            <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Changer Mot de passe <i class=\"pull-right fa fa-exchange\"></i></a></li>
                            <li><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_main_help");
        echo "\">Aide <i class=\"pull-right fa fa-question-circle\"></i></a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"text-right\">Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </header>

    <div id=\"page-container\">
        <nav id=\"page-leftbar\" role=\"navigation\">
            <ul class=\"acc-menu\" id=\"sidebar\">
                <!--
                <li id=\"search\">
                    <a href=\"javascript:;\"><i class=\"fa fa-search opacity-control\"></i></a>
                     <form>
                        <input type=\"text\" class=\"search-query\" placeholder=\"Rechercher ...\">
                        <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                    </form>
                </li>
                -->
                <li class=\"divider\"></li>
                <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_main_homepage");
        echo "\"><i class=\"fa fa-home\"></i> <span>Accueil</span></a></li>
                <li><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_annuaire_homepage");
        echo "\"><i class=\"glyphicon glyphicon-search\"></i> <span>Annuaire</span></a></li>
                ";
        // line 88
        echo "                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_chat_homepage");
        echo "\"><i class=\"glyphicon glyphicon-heart\"></i> <span>ZZ Chat</span></a></li>
                <li class=\"divider\"></li>
                <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_cotisation_homepage");
        echo "\"><i class=\"fa fa-thumbs-o-up\"></i> <span>Mes Cotisations</span></a></li>
                <li><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_career_homepage");
        echo "\"><i class=\"fa fa-list\"></i> <span>Mes Parcours</span></a></li>
                ";
        // line 92
        if (($this->env->getExtension('Application\YearbookBundle\Twig\Extension\YearbookExtension')->getStatus() == true)) {
            // line 93
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("ApplicationYearbookBundle:Default:yearbookMenu", array("userId" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))));
            echo "
                ";
        }
        // line 95
        echo "
                <!--
                <li class=\"divider\"></li>
                <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> <span>Carte des ZZs</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-camera\"></i> <span> Galerie Photo</span> </a></li>
                -->
                ";
        // line 101
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 102
            echo "                <li class=\"divider\"></li>
                <li><a href=\"";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
            echo "\" target=\"_blank\"><i class=\"fa fa-briefcase\"></i> <span>Administration</span></a></li>
                ";
        }
        // line 105
        echo "
            </ul>
        </nav>

";
        // line 109
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "    
<footer role=\"contentinfo\">
        <div class=\"clearfix\">
            <ul class=\"list-unstyled list-inline pull-left\">
                <li>ANELIS &copy; ";
        // line 114
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</li>
            </ul>
            <button class=\"pull-right btn btn-inverse-alt btn-xs hidden-print\" id=\"back-to-top\"><i class=\"fa fa-arrow-up\"></i></button>
        </div>
    </footer>

</div> 

";
    }

    // line 109
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        // line 125
        echo "
<script type='text/javascript' src='";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "'></script> 
<script type='text/javascript' src='";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/enquire.js"), "html", null, true);
        echo "'></script> 
<script type='text/javascript' src='";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.cookie.js"), "html", null, true);
        echo "'></script> 
<script type='text/javascript' src='";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.min.js"), "html", null, true);
        echo "'></script> 
<script type='text/javascript' src='";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/application.js"), "html", null, true);
        echo "'></script> 
";
    }

    public function getTemplateName()
    {
        return "::application.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 131,  304 => 130,  300 => 129,  296 => 128,  292 => 127,  288 => 126,  285 => 125,  282 => 124,  276 => 109,  263 => 114,  257 => 110,  255 => 109,  249 => 105,  244 => 103,  241 => 102,  239 => 101,  231 => 95,  225 => 93,  223 => 92,  219 => 91,  215 => 90,  209 => 88,  205 => 84,  201 => 83,  177 => 62,  172 => 60,  168 => 59,  164 => 58,  156 => 53,  153 => 52,  145 => 50,  137 => 48,  135 => 47,  130 => 45,  125 => 42,  117 => 40,  109 => 38,  107 => 37,  101 => 36,  93 => 31,  86 => 26,  83 => 25,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  57 => 14,  51 => 11,  44 => 7,  40 => 6,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::application.html.twig", "D:\\WAMP\\www\\plateformeanelis\\app/Resources\\views/application.html.twig");
    }
}
