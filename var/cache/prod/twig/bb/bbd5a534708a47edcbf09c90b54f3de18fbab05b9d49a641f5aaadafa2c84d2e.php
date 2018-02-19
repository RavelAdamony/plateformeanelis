<?php

/* ApplicationMainBundle:Default:index.html.twig */
class __TwigTemplate_8b677ee85cfbae3f53aed6a119249bc399ac6e27b28f2dbfbb69cd96bdfe4233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::application.html.twig", "ApplicationMainBundle:Default:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "        <div id=\"page-content\">
            <div id='wrap'>
                <div id=\"page-heading\" class=\"hidden-print\">
                    <ol class=\"breadcrumb\">
                        <li class=\"active\">Accueil</li>
                    </ol>
                    <h1>Bienvenue</h1>
                </div>
        ";
        // line 13
        if (twig_in_filter("@poste.isima.fr", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "email", array()))) {
            // line 14
            echo "                        <div class=\"alert alert-dismissable alert-danger\">
                            <strong>Attention :</strong> Vous utilisez une adresse email @poste.isima.fr, pensez à la <strong><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit_profile", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "\" title=\"Edition du profil\">changer</a></strong>. Cette adresse sera obsolète quand vous ne serez plus dans l'école !
                        </div>
                    ";
        }
        // line 18
        echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            <div class=\"panel panel-primary\">
                              <div class=\"panel-heading\">
                                <h4>Bienvenue</h4>
                              </div>
                            <div class=\"panel-body\">
                                <p>
                                    ";
        // line 27
        echo ($context["welcomeText"] ?? null);
        echo "

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-5\">
                        <div class=\"panel panel-primary\">
                          <div class=\"panel-heading\">
                            <h4>Prochains évènements</h4>
                              ";
        // line 37
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 38
            echo "                                  <div align=\"right\"><a class=\"btn btn-primary\" href=";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_user_events_list");
            echo "><i class=\"fa fa-gear\"></i></a></div>
                              ";
        }
        // line 40
        echo "                        </div>
                        <div class=\"panel-body\">
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 43
            echo "                                ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "date", array()), "d/m/Y"), "html", null, true);
            echo " :
                                ";
            // line 44
            if ((twig_length_filter($this->env, $this->getAttribute($context["event"], "link", array())) != 0)) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "link", array()), "html", null, true);
                echo "\"> ";
            }
            // line 45
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "title", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "place", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "date", array()), "H\\hi"), "html", null, true);
            echo "
                                ";
            // line 46
            if ((twig_length_filter($this->env, $this->getAttribute($context["event"], "link", array())) != 0)) {
                echo "</a>";
            }
            // line 47
            echo "                                <br>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row hidden-print\">
                <div class=\"col-md-12\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-xs-12 col-sm-6\">
                            <a class=\"info-tiles tiles-orange\" href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_annuaire_homepage");
        echo "\">
                                <div class=\"tiles-heading\">Membres</div>
                                <div class=\"tiles-body-alt\">
                                    <i class=\"fa fa-group\"></i>
                                    <div class=\"text-center\">";
        // line 62
        echo twig_escape_filter($this->env, ($context["users"] ?? null), "html", null, true);
        echo "</div>
                                    <small>Elèves et Anciens</small>
                                </div>
                            </a>
                        </div>
                        ";
        // line 77
        echo "                        <div class=\"col-md-3 col-xs-12 col-sm-6\">
                            <a class=\"info-tiles tiles-toyo\" href=\"#\">
                                <div class=\"tiles-heading\">Annonces</div>
                                <div class=\"tiles-body-alt\">
                                    <i class=\"fa fa-bullhorn\"></i>
                                    <div class=\"text-center\"><i class=\"fa fa-code\"></i></div>
                                    <small>Fonctionnalité à venir !</small>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-md-3 col-xs-12 col-sm-6\">
                            <a class=\"info-tiles tiles-success\" href=\"#\">
                                <div class=\"tiles-heading\">Récrées</div>
                                <div class=\"tiles-body-alt\">
                                    <i class=\"fa fa-video-camera\"></i>
                                    <div class=\"text-center\"><i class=\"fa fa-code\"></i></div>
                                    <small>Fonctionnalité à venir !</small>
                                </div>
                            </a>
                        </div>

                        <div class=\"col-md-3 col-xs-12 col-sm-6\">
                            <a class=\"info-tiles tiles-alizarin\" href=\"#\">
                                <div class=\"tiles-heading\">Photos</div>
                                <div class=\"tiles-body-alt\">
                                    <i class=\"fa fa-camera\"></i>
                                    <div class=\"text-center\"><i class=\"fa fa-code\"></i></div>
                                    <small>Fonctionnalité à venir !</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div> <!--wrap -->
</div> <!-- page-content -->
";
    }

    public function getTemplateName()
    {
        return "ApplicationMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 77,  148 => 62,  141 => 58,  130 => 49,  123 => 47,  119 => 46,  110 => 45,  104 => 44,  99 => 43,  95 => 42,  91 => 40,  85 => 38,  83 => 37,  70 => 27,  59 => 18,  53 => 15,  50 => 14,  48 => 13,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ApplicationMainBundle:Default:index.html.twig", "D:\\WAMP\\www\\plateformeanelis\\src\\Application\\MainBundle/Resources/views/Default/index.html.twig");
    }
}
