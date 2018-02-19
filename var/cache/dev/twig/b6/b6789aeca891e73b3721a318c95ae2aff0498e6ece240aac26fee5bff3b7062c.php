<?php

/* ::application.html.twig */
class __TwigTemplate_497a56df0ccbab320cdf91aea6a3197b7eb94e8a598b6dd077e2b5e241d4dcd4 extends Twig_Template
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
        $__internal_2d798a0b4d40842af5b28f4bebfb7b5b176701b938d1d7035c8d719612ba4f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d798a0b4d40842af5b28f4bebfb7b5b176701b938d1d7035c8d719612ba4f4c->enter($__internal_2d798a0b4d40842af5b28f4bebfb7b5b176701b938d1d7035c8d719612ba4f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::application.html.twig"));

        $__internal_c21175a807be8287ab9d69d1e4b837a0447006fd20038232086aafa1c469bd3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21175a807be8287ab9d69d1e4b837a0447006fd20038232086aafa1c469bd3d->enter($__internal_c21175a807be8287ab9d69d1e4b837a0447006fd20038232086aafa1c469bd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::application.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d798a0b4d40842af5b28f4bebfb7b5b176701b938d1d7035c8d719612ba4f4c->leave($__internal_2d798a0b4d40842af5b28f4bebfb7b5b176701b938d1d7035c8d719612ba4f4c_prof);

        
        $__internal_c21175a807be8287ab9d69d1e4b837a0447006fd20038232086aafa1c469bd3d->leave($__internal_c21175a807be8287ab9d69d1e4b837a0447006fd20038232086aafa1c469bd3d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8557bf4b4eadaac047b54d0a639cc5888e6986fdcd8c80e12b64a8d9d4a0a993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8557bf4b4eadaac047b54d0a639cc5888e6986fdcd8c80e12b64a8d9d4a0a993->enter($__internal_8557bf4b4eadaac047b54d0a639cc5888e6986fdcd8c80e12b64a8d9d4a0a993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f596d9c3a68cb91ea3ee3a77d1c434deaa0c274b299a8cd5ea93b0b6f2a8ee1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f596d9c3a68cb91ea3ee3a77d1c434deaa0c274b299a8cd5ea93b0b6f2a8ee1e->enter($__internal_f596d9c3a68cb91ea3ee3a77d1c434deaa0c274b299a8cd5ea93b0b6f2a8ee1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f596d9c3a68cb91ea3ee3a77d1c434deaa0c274b299a8cd5ea93b0b6f2a8ee1e->leave($__internal_f596d9c3a68cb91ea3ee3a77d1c434deaa0c274b299a8cd5ea93b0b6f2a8ee1e_prof);

        
        $__internal_8557bf4b4eadaac047b54d0a639cc5888e6986fdcd8c80e12b64a8d9d4a0a993->leave($__internal_8557bf4b4eadaac047b54d0a639cc5888e6986fdcd8c80e12b64a8d9d4a0a993_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0b3bda50ad84b49c5a96c96eca79c9b9da4a429a5f573470e44ed472e4ef465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b3bda50ad84b49c5a96c96eca79c9b9da4a429a5f573470e44ed472e4ef465->enter($__internal_d0b3bda50ad84b49c5a96c96eca79c9b9da4a429a5f573470e44ed472e4ef465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bcc8f455f62052d08890f168d2a3854baec07ef362e1973c2804059777948217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc8f455f62052d08890f168d2a3854baec07ef362e1973c2804059777948217->enter($__internal_bcc8f455f62052d08890f168d2a3854baec07ef362e1973c2804059777948217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "surname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
        echo "<i class=\"fa fa-caret-down\"></i></span>
                ";
        // line 37
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "avatar", array()), "extension", array()))) {
            // line 38
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "avatar", array()), "defaultWebPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "\" style=\"width: auto;\" />
                            ";
        } else {
            // line 40
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "avatar", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "\" style=\"width: auto;\" />
                            ";
        }
        // line 42
        echo "                </a>
                <ul class=\"dropdown-menu userinfo arrow\">
                    <li class=\"username\">
                        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show_profile", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">
                            <div class=\"pull-left\">
                            ";
        // line 47
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "avatar", array()), "extension", array()))) {
            // line 48
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "avatar", array()), "defaultWebPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "\" />
                            ";
        } else {
            // line 50
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "avatar", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "\" />
                            ";
        }
        // line 52
        echo "                            </div>
                            <div class=\"pull-right\"><h5>Salut ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "surname", array()), "html", null, true);
        echo " !</h5></div>
                        </a>
                    </li>
                    <li class=\"userlinks\">
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit_profile", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("ApplicationYearbookBundle:Default:yearbookMenu", array("userId" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))));
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
        
        $__internal_bcc8f455f62052d08890f168d2a3854baec07ef362e1973c2804059777948217->leave($__internal_bcc8f455f62052d08890f168d2a3854baec07ef362e1973c2804059777948217_prof);

        
        $__internal_d0b3bda50ad84b49c5a96c96eca79c9b9da4a429a5f573470e44ed472e4ef465->leave($__internal_d0b3bda50ad84b49c5a96c96eca79c9b9da4a429a5f573470e44ed472e4ef465_prof);

    }

    // line 109
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6b0cf36a1a6824e1c9c6c3de7fb5f1595392817ddd48af03bb07fee7001f1db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b0cf36a1a6824e1c9c6c3de7fb5f1595392817ddd48af03bb07fee7001f1db->enter($__internal_c6b0cf36a1a6824e1c9c6c3de7fb5f1595392817ddd48af03bb07fee7001f1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c80d9b2f7d98c2e2186daec7d94da31d342aaf5d53e1f1dfcd400728c0f085b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80d9b2f7d98c2e2186daec7d94da31d342aaf5d53e1f1dfcd400728c0f085b4->enter($__internal_c80d9b2f7d98c2e2186daec7d94da31d342aaf5d53e1f1dfcd400728c0f085b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_c80d9b2f7d98c2e2186daec7d94da31d342aaf5d53e1f1dfcd400728c0f085b4->leave($__internal_c80d9b2f7d98c2e2186daec7d94da31d342aaf5d53e1f1dfcd400728c0f085b4_prof);

        
        $__internal_c6b0cf36a1a6824e1c9c6c3de7fb5f1595392817ddd48af03bb07fee7001f1db->leave($__internal_c6b0cf36a1a6824e1c9c6c3de7fb5f1595392817ddd48af03bb07fee7001f1db_prof);

    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0192c40d65121cd5ae79a3771c8fb86dca5686db1c628380c612e05b27e9144b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0192c40d65121cd5ae79a3771c8fb86dca5686db1c628380c612e05b27e9144b->enter($__internal_0192c40d65121cd5ae79a3771c8fb86dca5686db1c628380c612e05b27e9144b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b3d0eb43d081c0729b9771f122237dc9f02bdeef735c823ea6baa3069ba499ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d0eb43d081c0729b9771f122237dc9f02bdeef735c823ea6baa3069ba499ea->enter($__internal_b3d0eb43d081c0729b9771f122237dc9f02bdeef735c823ea6baa3069ba499ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b3d0eb43d081c0729b9771f122237dc9f02bdeef735c823ea6baa3069ba499ea->leave($__internal_b3d0eb43d081c0729b9771f122237dc9f02bdeef735c823ea6baa3069ba499ea_prof);

        
        $__internal_0192c40d65121cd5ae79a3771c8fb86dca5686db1c628380c612e05b27e9144b->leave($__internal_0192c40d65121cd5ae79a3771c8fb86dca5686db1c628380c612e05b27e9144b_prof);

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
        return array (  362 => 131,  358 => 130,  354 => 129,  350 => 128,  346 => 127,  342 => 126,  339 => 125,  330 => 124,  312 => 109,  293 => 114,  287 => 110,  285 => 109,  279 => 105,  274 => 103,  271 => 102,  269 => 101,  261 => 95,  255 => 93,  253 => 92,  249 => 91,  245 => 90,  239 => 88,  235 => 84,  231 => 83,  207 => 62,  202 => 60,  198 => 59,  194 => 58,  186 => 53,  183 => 52,  175 => 50,  167 => 48,  165 => 47,  160 => 45,  155 => 42,  147 => 40,  139 => 38,  137 => 37,  131 => 36,  123 => 31,  116 => 26,  107 => 25,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  75 => 14,  69 => 11,  62 => 7,  58 => 6,  52 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}

    <link href='{{ asset('assets/demo/variations/default.css') }}' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
    <link href='{{ asset('assets/demo/variations/default.css') }}' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
    

    <!--[if lt IE 9]>
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/ie8.css') }}\">
        <script type=\"text/javascript\" src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <script type=\"text/javascript\" src=\"http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/charts-flot/excanvas.min.js') }}\"></script>
    <![endif]-->


    <link rel='stylesheet' type='text/css' href='{{ asset('assets/plugins/codeprettifier/prettify.css') }}' /> 
    <link rel='stylesheet' type='text/css' href='{{ asset('assets/plugins/form-toggle/toggles.css') }}' /> 
    <link rel='stylesheet' type='text/css' href='{{ asset('assets/fonts/glyphicons/css/glyphicons.min.css') }}' /> 
    <script src='{{ asset('assets/js/jquery-1.11.1.min.js')}}'></script>

{% endblock %}

{% block content %}

    <header class=\"navbar navbar-inverse navbar-fixed-top\" role=\"banner\">
        <a id=\"leftmenu-trigger\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Agrandir/Réduire le menu\"></a>

        <div class=\"navbar-header pull-left\">
            <a class=\"navbar-brand\" href=\"{{ path('application_main_homepage') }}\">ANELIS</a>
        </div>

        <ul class=\"nav navbar-nav pull-right toolbar\">
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle username\" data-toggle=\"dropdown\"><span class=\"hidden-xs\">{{ app.user.surname }} {{ app.user.name }}<i class=\"fa fa-caret-down\"></i></span>
                {% if app.user.avatar.extension is empty %}
                                <img src=\"{{ asset(app.user.avatar.defaultWebPath) }}\" alt=\"{{ app.user.username }}\" style=\"width: auto;\" />
                            {% else %}
                                <img src=\"{{ asset(app.user.avatar.webPath) }}\" alt=\"{{ app.user.username }}\" style=\"width: auto;\" />
                            {% endif %}
                </a>
                <ul class=\"dropdown-menu userinfo arrow\">
                    <li class=\"username\">
                        <a href=\"{{ path('user_show_profile', { 'id' : app.user.id }) }}\">
                            <div class=\"pull-left\">
                            {% if app.user.avatar.extension is empty %}
                                <img src=\"{{ asset(app.user.avatar.defaultWebPath) }}\" alt=\"{{ app.user.username }}\" />
                            {% else %}
                                <img src=\"{{ asset(app.user.avatar.webPath) }}\" alt=\"{{ app.user.username }}\" />
                            {% endif %}
                            </div>
                            <div class=\"pull-right\"><h5>Salut {{ app.user.surname }} !</h5></div>
                        </a>
                    </li>
                    <li class=\"userlinks\">
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ path('user_edit_profile', { 'id' : app.user.id }) }}\">Mon Compte <i class=\"pull-right fa fa-pencil\"></i></a></li>
                            <li><a href=\"{{ path('fos_user_change_password') }}\">Changer Mot de passe <i class=\"pull-right fa fa-exchange\"></i></a></li>
                            <li><a href=\"{{ path('application_main_help') }}\">Aide <i class=\"pull-right fa fa-question-circle\"></i></a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"{{ path('fos_user_security_logout') }}\" class=\"text-right\">Déconnexion</a></li>
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
                <li><a href=\"{{ path('application_main_homepage') }}\"><i class=\"fa fa-home\"></i> <span>Accueil</span></a></li>
                <li><a href=\"{{ path('application_annuaire_homepage') }}\"><i class=\"glyphicon glyphicon-search\"></i> <span>Annuaire</span></a></li>
                {#
                <li><a href=\"{{ path('offre_homepage') }}\"><i class=\"glyphicon glyphicon-bullhorn\"></i> <span>Partage d'annonces</span></a></li>
                #}
                <li><a href=\"{{ path('application_chat_homepage') }}\"><i class=\"glyphicon glyphicon-heart\"></i> <span>ZZ Chat</span></a></li>
                <li class=\"divider\"></li>
                <li><a href=\"{{ path('application_cotisation_homepage') }}\"><i class=\"fa fa-thumbs-o-up\"></i> <span>Mes Cotisations</span></a></li>
                <li><a href=\"{{ path('application_career_homepage') }}\"><i class=\"fa fa-list\"></i> <span>Mes Parcours</span></a></li>
                {% if is_yearbook_activated() == true %}
                {{ render(controller( 'ApplicationYearbookBundle:Default:yearbookMenu', { 'userId': app.user.id } )) }}
                {% endif %}

                <!--
                <li class=\"divider\"></li>
                <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> <span>Carte des ZZs</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-camera\"></i> <span> Galerie Photo</span> </a></li>
                -->
                {% if is_granted('ROLE_ADMIN') %}
                <li class=\"divider\"></li>
                <li><a href=\"{{ path('sonata_admin_dashboard')}}\" target=\"_blank\"><i class=\"fa fa-briefcase\"></i> <span>Administration</span></a></li>
                {% endif %}

            </ul>
        </nav>

{% block body %} {% endblock %}
    
<footer role=\"contentinfo\">
        <div class=\"clearfix\">
            <ul class=\"list-unstyled list-inline pull-left\">
                <li>ANELIS &copy; {{ \"now\"|date(\"Y\") }}</li>
            </ul>
            <button class=\"pull-right btn btn-inverse-alt btn-xs hidden-print\" id=\"back-to-top\"><i class=\"fa fa-arrow-up\"></i></button>
        </div>
    </footer>

</div> 

{% endblock %}

{% block javascripts %}

<script type='text/javascript' src='{{ asset('assets/js/jquery-1.10.2.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('assets/js/bootstrap.min.js') }}'></script> 
<script type='text/javascript' src='{{ asset('assets/js/enquire.js') }}'></script> 
<script type='text/javascript' src='{{ asset('assets/js/jquery.cookie.js') }}'></script> 
<script type='text/javascript' src='{{ asset('assets/js/jquery.nicescroll.min.js') }}'></script> 
<script type='text/javascript' src='{{ asset('assets/js/application.js') }}'></script> 
{% endblock %}", "::application.html.twig", "C:\\wamp64\\www\\plateformeanelis\\app/Resources\\views/application.html.twig");
    }
}
