<?php

/* ApplicationMainBundle:Default:index.html.twig */
class __TwigTemplate_b729641a88b9ec9830b4ef3cd8c237b047489018216a42120d5304b25be9a25a extends Twig_Template
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
        $__internal_92dbea520140b18650d48860e9b36ae1df4f58db336eec105ca899b29edc6e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92dbea520140b18650d48860e9b36ae1df4f58db336eec105ca899b29edc6e52->enter($__internal_92dbea520140b18650d48860e9b36ae1df4f58db336eec105ca899b29edc6e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApplicationMainBundle:Default:index.html.twig"));

        $__internal_69127025d299c1acb4059894613a83821e0351f9d6114ca264c6287b3bae4e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69127025d299c1acb4059894613a83821e0351f9d6114ca264c6287b3bae4e4f->enter($__internal_69127025d299c1acb4059894613a83821e0351f9d6114ca264c6287b3bae4e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApplicationMainBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92dbea520140b18650d48860e9b36ae1df4f58db336eec105ca899b29edc6e52->leave($__internal_92dbea520140b18650d48860e9b36ae1df4f58db336eec105ca899b29edc6e52_prof);

        
        $__internal_69127025d299c1acb4059894613a83821e0351f9d6114ca264c6287b3bae4e4f->leave($__internal_69127025d299c1acb4059894613a83821e0351f9d6114ca264c6287b3bae4e4f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9275d64b984109cd9eb0ac986d7fba3ecffd75d84f1f7ca4c1baf4024dc8e1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9275d64b984109cd9eb0ac986d7fba3ecffd75d84f1f7ca4c1baf4024dc8e1c4->enter($__internal_9275d64b984109cd9eb0ac986d7fba3ecffd75d84f1f7ca4c1baf4024dc8e1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad180600bd4f6932bff57b4629b5ad787751445694b58f8248d75a90d219c4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad180600bd4f6932bff57b4629b5ad787751445694b58f8248d75a90d219c4c0->enter($__internal_ad180600bd4f6932bff57b4629b5ad787751445694b58f8248d75a90d219c4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_ad180600bd4f6932bff57b4629b5ad787751445694b58f8248d75a90d219c4c0->leave($__internal_ad180600bd4f6932bff57b4629b5ad787751445694b58f8248d75a90d219c4c0_prof);

        
        $__internal_9275d64b984109cd9eb0ac986d7fba3ecffd75d84f1f7ca4c1baf4024dc8e1c4->leave($__internal_9275d64b984109cd9eb0ac986d7fba3ecffd75d84f1f7ca4c1baf4024dc8e1c4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_98014e5098b05af460c64009d8a0b18e9ecf2b7123e4442bed260ee8cdd6324e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98014e5098b05af460c64009d8a0b18e9ecf2b7123e4442bed260ee8cdd6324e->enter($__internal_98014e5098b05af460c64009d8a0b18e9ecf2b7123e4442bed260ee8cdd6324e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cd4f5774b8d263721b4989814ef108483b020c101ddcd10d345b80012e735a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd4f5774b8d263721b4989814ef108483b020c101ddcd10d345b80012e735a8->enter($__internal_3cd4f5774b8d263721b4989814ef108483b020c101ddcd10d345b80012e735a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if (twig_in_filter("@poste.isima.fr", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()))) {
            // line 14
            echo "                        <div class=\"alert alert-dismissable alert-danger\">
                            <strong>Attention :</strong> Vous utilisez une adresse email @poste.isima.fr, pensez à la <strong><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit_profile", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
        echo ($context["welcomeText"] ?? $this->getContext($context, "welcomeText"));
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
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
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
        echo twig_escape_filter($this->env, ($context["users"] ?? $this->getContext($context, "users")), "html", null, true);
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
        
        $__internal_3cd4f5774b8d263721b4989814ef108483b020c101ddcd10d345b80012e735a8->leave($__internal_3cd4f5774b8d263721b4989814ef108483b020c101ddcd10d345b80012e735a8_prof);

        
        $__internal_98014e5098b05af460c64009d8a0b18e9ecf2b7123e4442bed260ee8cdd6324e->leave($__internal_98014e5098b05af460c64009d8a0b18e9ecf2b7123e4442bed260ee8cdd6324e_prof);

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
        return array (  186 => 77,  178 => 62,  171 => 58,  160 => 49,  153 => 47,  149 => 46,  140 => 45,  134 => 44,  129 => 43,  125 => 42,  121 => 40,  115 => 38,  113 => 37,  100 => 27,  89 => 18,  83 => 15,  80 => 14,  78 => 13,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

{% block title %}Accueil{% endblock %}
    {% block body %}
        <div id=\"page-content\">
            <div id='wrap'>
                <div id=\"page-heading\" class=\"hidden-print\">
                    <ol class=\"breadcrumb\">
                        <li class=\"active\">Accueil</li>
                    </ol>
                    <h1>Bienvenue</h1>
                </div>
        {% if \"@poste.isima.fr\" in app.user.email %}
                        <div class=\"alert alert-dismissable alert-danger\">
                            <strong>Attention :</strong> Vous utilisez une adresse email @poste.isima.fr, pensez à la <strong><a href=\"{{ path('user_edit_profile', { 'id' : app.user.id }) }}\" title=\"Edition du profil\">changer</a></strong>. Cette adresse sera obsolète quand vous ne serez plus dans l'école !
                        </div>
                    {% endif %}
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            <div class=\"panel panel-primary\">
                              <div class=\"panel-heading\">
                                <h4>Bienvenue</h4>
                              </div>
                            <div class=\"panel-body\">
                                <p>
                                    {{ welcomeText | raw}}

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-5\">
                        <div class=\"panel panel-primary\">
                          <div class=\"panel-heading\">
                            <h4>Prochains évènements</h4>
                              {% if is_granted(\"ROLE_ADMIN\") %}
                                  <div align=\"right\"><a class=\"btn btn-primary\" href={{ path('admin_admin_user_events_list') }}><i class=\"fa fa-gear\"></i></a></div>
                              {% endif %}
                        </div>
                        <div class=\"panel-body\">
                            {% for event in events %}
                                {{ event.date|date(\"d/m/Y\") }} :
                                {% if event.link|length != 0 %}<a href=\"{{ event.link }}\"> {% endif %}
                                    {{ event.title }}, {{ event.place }}, {{ event.date|date(\"H\\\\hi\") }}
                                {% if event.link|length != 0 %}</a>{% endif %}
                                <br>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row hidden-print\">
                <div class=\"col-md-12\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-xs-12 col-sm-6\">
                            <a class=\"info-tiles tiles-orange\" href=\"{{ path('application_annuaire_homepage') }}\">
                                <div class=\"tiles-heading\">Membres</div>
                                <div class=\"tiles-body-alt\">
                                    <i class=\"fa fa-group\"></i>
                                    <div class=\"text-center\">{{ users }}</div>
                                    <small>Elèves et Anciens</small>
                                </div>
                            </a>
                        </div>
                        {#<div class=\"col-md-3 col-xs-12 col-sm-6\">
                            <a class=\"info-tiles tiles-toyo\" href=\"{{ path('offre_homepage') }}\">
                                <div class=\"tiles-heading\">Annonces</div>
                                <div class=\"tiles-body-alt\">
                                    <i class=\"fa fa-bullhorn\"></i>
                                    <div class=\"text-center\">{{ offers }}</div>
                                    <small>Jobs, Stages, Logements, ...</small>
                                </div>
                            </a>
                        </div>#}
                        <div class=\"col-md-3 col-xs-12 col-sm-6\">
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
{% endblock %}
", "ApplicationMainBundle:Default:index.html.twig", "C:\\wamp64\\www\\plateformeanelis\\src\\Application\\MainBundle/Resources/views/Default/index.html.twig");
    }
}
