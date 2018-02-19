<?php

/* AdminUserBundle:Form:user.html.twig */
class __TwigTemplate_a37e26144e88077afda19b8add9ea601c77e1b0f71691d1bf8e467dfa5219411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'admin_userbundle_user_widget' => array($this, 'block_admin_userbundle_user_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5f4262cfa33cc051762c6d74935261399c9be54bb298666529e78a649f8527d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f4262cfa33cc051762c6d74935261399c9be54bb298666529e78a649f8527d->enter($__internal_c5f4262cfa33cc051762c6d74935261399c9be54bb298666529e78a649f8527d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Form:user.html.twig"));

        $__internal_a0fb3b524aa971f0107deec6f33379eded1053a5a5e0498a7fa9e2afaf0dff4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0fb3b524aa971f0107deec6f33379eded1053a5a5e0498a7fa9e2afaf0dff4c->enter($__internal_a0fb3b524aa971f0107deec6f33379eded1053a5a5e0498a7fa9e2afaf0dff4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUserBundle:Form:user.html.twig"));

        // line 1
        $this->displayBlock('admin_userbundle_user_widget', $context, $blocks);
        
        $__internal_c5f4262cfa33cc051762c6d74935261399c9be54bb298666529e78a649f8527d->leave($__internal_c5f4262cfa33cc051762c6d74935261399c9be54bb298666529e78a649f8527d_prof);

        
        $__internal_a0fb3b524aa971f0107deec6f33379eded1053a5a5e0498a7fa9e2afaf0dff4c->leave($__internal_a0fb3b524aa971f0107deec6f33379eded1053a5a5e0498a7fa9e2afaf0dff4c_prof);

    }

    public function block_admin_userbundle_user_widget($context, array $blocks = array())
    {
        $__internal_5fe1b0b5b8aefb79a2f0285cf2d42580d4e6b8ea85ada21d07d2f863a1825565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe1b0b5b8aefb79a2f0285cf2d42580d4e6b8ea85ada21d07d2f863a1825565->enter($__internal_5fe1b0b5b8aefb79a2f0285cf2d42580d4e6b8ea85ada21d07d2f863a1825565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_userbundle_user_widget"));

        $__internal_8aebdbd92edb33fba35022d94641fe3d39211fec6ddf4e7269766e74616e4ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aebdbd92edb33fba35022d94641fe3d39211fec6ddf4e7269766e74616e4ecd->enter($__internal_8aebdbd92edb33fba35022d94641fe3d39211fec6ddf4e7269766e74616e4ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_userbundle_user_widget"));

        // line 2
        echo "<div class=\"form-horizontal\">
    ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"panel-body\">
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"domtabs\">
              <div class=\"row\">
                <div class=\"tab-container tab-left tab-danger\">
                  <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#profil\" data-toggle=\"tab\">Profil</a></li>
                    <li><a href=\"#social\" data-toggle=\"tab\">Social</a></li>
                    <li><a href=\"#perso\" data-toggle=\"tab\">Perso</a></li>
                    <li><a href=\"#newsletters\" data-toggle=\"tab\">Newsletters</a></li>
                </ul>
                <div class=\"tab-content\">
                    ";
        // line 16
        if (($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthday", array()), 'errors') ||  !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors')))) {
            // line 17
            echo "                        <div class=\"alert alert-dismissable alert-danger\">
                            <strong>Attention :</strong> Ce formulaire contient des erreurs. Vérifiez tous les onglets.
                        </div>
                    ";
        }
        // line 21
        echo "                    <div class=\"tab-pane active\" id=\"profil\">    
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">Login</label>
                            <div class=\"col-sm-6\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "\" disabled>
                            </div>
                        </div>
                        <div class=\"form-group";
        // line 28
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Email*"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">";
        // line 34
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">Nom</label>
                            <div class=\"col-sm-6\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
        echo "\" disabled>
                            </div>
                        </div>
                        <div class=\"form-group";
        // line 43
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "maritalName", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "maritalName", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom Marital"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "maritalName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-md-3\">
                                <p class=\"help-block\">";
        // line 49
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "maritalName", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">Prénom</label>
                            <div class=\"col-sm-6\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "surname", array()), "html", null, true);
        echo "\" disabled>
                            </div>
                        </div>
                        <div class=\"form-group";
        // line 58
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nickname", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nickname", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Surnom"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nickname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-sm-3\"><p class=\"help-block\">Limité à 60 caractères !</p></div>
                        </div>
                        <div class=\"form-group";
        // line 65
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genre", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Sexe"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">";
        // line 71
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genre", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"form-group";
        // line 74
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "promotion", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "promotion", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Promotion"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "promotion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">";
        // line 80
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "promotion", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"form-group";
        // line 83
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "filiere", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "filiere", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Filière"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "filiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">";
        // line 89
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "filiere", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                            </div>
                        </div>

                        <div class=\"form-group";
        // line 93
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Adresse"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">";
        // line 99
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                            </div>
                        </div>

                        <div class=\"form-group";
        // line 103
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postalcode", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postalcode", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Code postal"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postalcode", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">";
        // line 109
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "postalcode", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                            </div>
                        </div>

                        <div class=\"form-group";
        // line 113
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Ville"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">";
        // line 119
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                            </div>
                        </div>

                        <div class=\"form-group";
        // line 123
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Pays"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">";
        // line 129
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                            </div>
                        </div>

                        <div class=\"form-group";
        // line 133
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Téléphone"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 136
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">";
        // line 139
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"form-group";
        // line 142
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "website", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 143
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "website", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Site Web"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 145
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "website", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "http://")));
        echo "
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">";
        // line 148
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "website", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"form-group";
        // line 151
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "biography", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 152
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "biography", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Biographie"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "biography", array()), 'widget', array("attr" => array("class" => "form-control normal", "style" => "resize: vertical;", "rows" => "10")));
        echo "
                            </div>
                        </div>

                        <div class=\"form-group";
        // line 158
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "avatar", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "avatar", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Photo de profil"));
        echo "
                            <div class=\"col-sm-6\">
                                <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "avatar", array()), "webPath", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "\" style=\"height: 200px; width: auto;\" /> 
                                <span class=\"btn btn-default btn-file\">
                                    <span class=\"fileinput-new\">Choisir le fichier</span>
                                    ";
        // line 164
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "avatar", array()), "input", array()), 'widget');
        echo "
                                </span>
                            </div>
                            <div class=\"col-sm-3\"><p class=\"help-block\">Poids max : 2Mo</p></div>
                        </div>



                    </div>
                    <div class=\"tab-pane\" id=\"social\">

                        <div id=\"social-fields-list\">
                            <div class=\"form-group";
        // line 176
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialFacebook", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                                ";
        // line 177
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialFacebook", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Facebook"));
        echo "
                                <div class=\"col-sm-6\">
                                    ";
        // line 179
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialFacebook", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "http://")));
        echo "
                                </div>
                                <div class=\"col-md-3 has-error\">
                                    <p class=\"help-block\">";
        // line 182
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialFacebook", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                            <div class=\"form-group";
        // line 185
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialTwitter", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                                ";
        // line 186
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialTwitter", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Twitter"));
        echo "
                                <div class=\"col-sm-6\">
                                    ";
        // line 188
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialTwitter", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "http://")));
        echo "
                                </div>
                                <div class=\"col-md-3 has-error\">
                                    <p class=\"help-block\">";
        // line 191
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialTwitter", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                            <div class=\"form-group";
        // line 194
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialLinkedin", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                                ";
        // line 195
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialLinkedin", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Linkedin"));
        echo "
                                <div class=\"col-sm-6\">
                                    ";
        // line 197
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialLinkedin", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "http://")));
        echo "
                                </div>
                                <div class=\"col-md-3 has-error\">
                                    <p class=\"help-block\">";
        // line 200
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialLinkedin", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                            <div class=\"form-group";
        // line 203
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialGoogle", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                                ";
        // line 204
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialGoogle", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Google"));
        echo "
                                <div class=\"col-sm-6\">
                                    ";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialGoogle", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "http://")));
        echo "
                                </div>
                                <div class=\"col-md-3 has-error\">
                                    <p class=\"help-block\">";
        // line 209
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialGoogle", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                            <div class=\"form-group";
        // line 212
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialYoutube", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                                ";
        // line 213
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialYoutube", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Youtube"));
        echo "
                                <div class=\"col-sm-6\">
                                    ";
        // line 215
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialYoutube", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "http://")));
        echo "
                                </div>
                                <div class=\"col-md-3 has-error\">
                                    <p class=\"help-block\">";
        // line 218
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialYoutube", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                            <div class=\"form-group";
        // line 221
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialInstagram", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                                ";
        // line 222
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialInstagram", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Instagram"));
        echo "
                                <div class=\"col-sm-6\">
                                    ";
        // line 224
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialInstagram", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "http://")));
        echo "
                                </div>
                                <div class=\"col-md-3 has-error\">
                                    <p class=\"help-block\">";
        // line 227
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "socialInstagram", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"tab-pane\" id=\"perso\">
                        <div class=\"form-group";
        // line 234
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "maritalStatus", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "maritalStatus", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Statut Marital"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "maritalStatus", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">";
        // line 240
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "maritalStatus", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"form-group";
        // line 243
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "childrenNumber", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 244
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "childrenNumber", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nombre d'enfant(s)"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 246
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "childrenNumber", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">";
        // line 249
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "childrenNumber", array()), 'errors'), array("<li>" => "", "</li>" => "", "<ul>" => "", "</ul>" => "")), "html", null, true);
        echo "</p>
                            </div>
                        </div>

                        <div class=\"form-group";
        // line 253
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthday", array()), 'errors'))) {
            echo " has-error";
        }
        echo "\">
                            ";
        // line 254
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthday", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date de naissance"));
        echo "
                            <div class=\"col-sm-6\">
                                ";
        // line 256
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthday", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "yyyy-MM-dd")));
        echo "
                            </div>
                            ";
        // line 258
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthday", array()), 'errors'))) {
            // line 259
            echo "                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">Format: yyyy/MM/dd</p>
                            </div>
                            ";
        } else {
            // line 263
            echo "                            <div class=\"col-sm-3\"><p class=\"help-block\">Format: yyyy/MM/dd</p></div>
                            ";
        }
        // line 265
        echo "                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"newsletters\">
                        ";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "newsletters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["newsletter"]) {
            // line 269
            echo "                            
                             <div class=\"form-group\">
                                    ";
            // line 271
            echo nl2br($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["newsletter"], 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom de la newsletter 
 commentaire 
 Fréquence d'envoi")));
            echo "
                                <div >
                                    ";
            // line 273
            echo nl2br($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["newsletter"], 'label', array("label_attr" => array("class" => "col-sm-3 control-label")) + (twig_test_empty($_label_ = $context["newsletter"]) ? array() : array("label" => $_label_))));
            echo "
                                    <div class=\"col-sm-6\">
                                        ";
            // line 275
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["newsletter"], 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
";
        // line 287
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
            <p class=\"text-right\"><button class=\"btn-primary btn\">Enregistrer</button></p>

            ";
        // line 290
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>

</div>
</form>
<script>
if (!Modernizr.inputtypes['date']) {
    \$('input[type=date]').datepicker({
        dateFormat: 'yy-mm-dd'
    });   
}
</script>
";
        
        $__internal_8aebdbd92edb33fba35022d94641fe3d39211fec6ddf4e7269766e74616e4ecd->leave($__internal_8aebdbd92edb33fba35022d94641fe3d39211fec6ddf4e7269766e74616e4ecd_prof);

        
        $__internal_5fe1b0b5b8aefb79a2f0285cf2d42580d4e6b8ea85ada21d07d2f863a1825565->leave($__internal_5fe1b0b5b8aefb79a2f0285cf2d42580d4e6b8ea85ada21d07d2f863a1825565_prof);

    }

    public function getTemplateName()
    {
        return "AdminUserBundle:Form:user.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  697 => 290,  691 => 287,  682 => 280,  671 => 275,  666 => 273,  659 => 271,  655 => 269,  651 => 268,  646 => 265,  642 => 263,  636 => 259,  634 => 258,  629 => 256,  624 => 254,  618 => 253,  611 => 249,  605 => 246,  600 => 244,  594 => 243,  588 => 240,  582 => 237,  577 => 235,  571 => 234,  561 => 227,  555 => 224,  550 => 222,  544 => 221,  538 => 218,  532 => 215,  527 => 213,  521 => 212,  515 => 209,  509 => 206,  504 => 204,  498 => 203,  492 => 200,  486 => 197,  481 => 195,  475 => 194,  469 => 191,  463 => 188,  458 => 186,  452 => 185,  446 => 182,  440 => 179,  435 => 177,  429 => 176,  414 => 164,  406 => 161,  401 => 159,  395 => 158,  388 => 154,  383 => 152,  377 => 151,  371 => 148,  365 => 145,  360 => 143,  354 => 142,  348 => 139,  342 => 136,  337 => 134,  331 => 133,  324 => 129,  318 => 126,  313 => 124,  307 => 123,  300 => 119,  294 => 116,  289 => 114,  283 => 113,  276 => 109,  270 => 106,  265 => 104,  259 => 103,  252 => 99,  246 => 96,  241 => 94,  235 => 93,  228 => 89,  222 => 86,  217 => 84,  211 => 83,  205 => 80,  199 => 77,  194 => 75,  188 => 74,  182 => 71,  176 => 68,  171 => 66,  165 => 65,  158 => 61,  153 => 59,  147 => 58,  141 => 55,  132 => 49,  126 => 46,  121 => 44,  115 => 43,  109 => 40,  100 => 34,  94 => 31,  89 => 29,  83 => 28,  77 => 25,  71 => 21,  65 => 17,  63 => 16,  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block admin_userbundle_user_widget %}
<div class=\"form-horizontal\">
    {{ form_start(form) }}
        <div class=\"panel-body\">
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"domtabs\">
              <div class=\"row\">
                <div class=\"tab-container tab-left tab-danger\">
                  <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#profil\" data-toggle=\"tab\">Profil</a></li>
                    <li><a href=\"#social\" data-toggle=\"tab\">Social</a></li>
                    <li><a href=\"#perso\" data-toggle=\"tab\">Perso</a></li>
                    <li><a href=\"#newsletters\" data-toggle=\"tab\">Newsletters</a></li>
                </ul>
                <div class=\"tab-content\">
                    {% if form_errors(form.birthday) or form_errors(form.email) is not empty %}
                        <div class=\"alert alert-dismissable alert-danger\">
                            <strong>Attention :</strong> Ce formulaire contient des erreurs. Vérifiez tous les onglets.
                        </div>
                    {% endif %}
                    <div class=\"tab-pane active\" id=\"profil\">    
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">Login</label>
                            <div class=\"col-sm-6\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"{{ app.user.username }}\" disabled>
                            </div>
                        </div>
                        <div class=\"form-group{% if form_errors(form.email) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.email, \"Email*\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.email, { 'attr' : { 'class' : 'form-control' } }) }}
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">{{ form_errors(form.email)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">Nom</label>
                            <div class=\"col-sm-6\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"{{ app.user.name }}\" disabled>
                            </div>
                        </div>
                        <div class=\"form-group{% if form_errors(form.maritalName) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.maritalName, \"Nom Marital\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.maritalName, { 'attr' : { 'class' : 'form-control' } }) }}
                            </div>
                            <div class=\"col-md-3\">
                                <p class=\"help-block\">{{ form_errors(form.maritalName)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\">Prénom</label>
                            <div class=\"col-sm-6\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"{{ app.user.surname }}\" disabled>
                            </div>
                        </div>
                        <div class=\"form-group{% if form_errors(form.nickname) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.nickname, \"Surnom\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.nickname, { 'attr' : { 'class' : 'form-control' } }) }}
                            </div>
                            <div class=\"col-sm-3\"><p class=\"help-block\">Limité à 60 caractères !</p></div>
                        </div>
                        <div class=\"form-group{% if form_errors(form.genre) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.genre, \"Sexe\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.genre, { 'attr' : { 'class' : 'form-control' } }) }}
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">{{ form_errors(form.genre)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                            </div>
                        </div>
                        <div class=\"form-group{% if form_errors(form.promotion) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.promotion, \"Promotion\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.promotion, { 'attr' : { 'class' : 'form-control' } }) }}
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">{{ form_errors(form.promotion)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                            </div>
                        </div>
                        <div class=\"form-group{% if form_errors(form.filiere) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.filiere, \"Filière\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.filiere, { 'attr' : { 'class' : 'form-control' } }) }}
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">{{ form_errors(form.filiere)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                            </div>
                        </div>

                        <div class=\"form-group{% if form_errors(form.address) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.address, \"Adresse\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.address, { 'attr' : { 'class' : 'form-control' } }) }}
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">{{ form_errors(form.address)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                            </div>
                        </div>

                        <div class=\"form-group{% if form_errors(form.postalcode) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.postalcode, \"Code postal\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.postalcode, { 'attr' : { 'class' : 'form-control' } }) }}
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">{{ form_errors(form.postalcode)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                            </div>
                        </div>

                        <div class=\"form-group{% if form_errors(form.city) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.city, \"Ville\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.city, { 'attr' : { 'class' : 'form-control' } }) }}
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">{{ form_errors(form.city)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                            </div>
                        </div>

                        <div class=\"form-group{% if form_errors(form.country) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.country, \"Pays\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.country, { 'attr' : { 'class' : 'form-control' } }) }}
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">{{ form_errors(form.country)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                            </div>
                        </div>

                        <div class=\"form-group{% if form_errors(form.telephone) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.telephone, \"Téléphone\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.telephone, { 'attr' : { 'class' : 'form-control' } }) }}
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">{{ form_errors(form.telephone)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                            </div>
                        </div>
                        <div class=\"form-group{% if form_errors(form.website) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.website, \"Site Web\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.website, { 'attr': {'class': \"form-control\", 'placeholder': 'http://' } }) }}
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">{{ form_errors(form.website)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                            </div>
                        </div>
                        <div class=\"form-group{% if form_errors(form.biography) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.biography, \"Biographie\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.biography, { 'attr' : { 'class' : 'form-control normal', 'style' : 'resize: vertical;', 'rows' : '10' } }) }}
                            </div>
                        </div>

                        <div class=\"form-group{% if form_errors(form.avatar) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.avatar, \"Photo de profil\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                <img src=\"{{ asset(app.user.avatar.webPath) }}\" alt=\"{{ app.user.username }}\" style=\"height: 200px; width: auto;\" /> 
                                <span class=\"btn btn-default btn-file\">
                                    <span class=\"fileinput-new\">Choisir le fichier</span>
                                    {{ form_widget(form.avatar.input) }}
                                </span>
                            </div>
                            <div class=\"col-sm-3\"><p class=\"help-block\">Poids max : 2Mo</p></div>
                        </div>



                    </div>
                    <div class=\"tab-pane\" id=\"social\">

                        <div id=\"social-fields-list\">
                            <div class=\"form-group{% if form_errors(form.socialFacebook) is not empty %} has-error{% endif %}\">
                                {{ form_label(form.socialFacebook, \"Facebook\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                                <div class=\"col-sm-6\">
                                    {{ form_widget(form.socialFacebook, { 'attr': {'class': \"form-control\", 'placeholder': 'http://' } }) }}
                                </div>
                                <div class=\"col-md-3 has-error\">
                                    <p class=\"help-block\">{{ form_errors(form.socialFacebook)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                                </div>
                            </div>
                            <div class=\"form-group{% if form_errors(form.socialTwitter) is not empty %} has-error{% endif %}\">
                                {{ form_label(form.socialTwitter, \"Twitter\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                                <div class=\"col-sm-6\">
                                    {{ form_widget(form.socialTwitter, { 'attr': {'class': \"form-control\", 'placeholder': 'http://' } }) }}
                                </div>
                                <div class=\"col-md-3 has-error\">
                                    <p class=\"help-block\">{{ form_errors(form.socialTwitter)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                                </div>
                            </div>
                            <div class=\"form-group{% if form_errors(form.socialLinkedin) is not empty %} has-error{% endif %}\">
                                {{ form_label(form.socialLinkedin, \"Linkedin\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                                <div class=\"col-sm-6\">
                                    {{ form_widget(form.socialLinkedin, { 'attr': {'class': \"form-control\", 'placeholder': 'http://' } }) }}
                                </div>
                                <div class=\"col-md-3 has-error\">
                                    <p class=\"help-block\">{{ form_errors(form.socialLinkedin)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                                </div>
                            </div>
                            <div class=\"form-group{% if form_errors(form.socialGoogle) is not empty %} has-error{% endif %}\">
                                {{ form_label(form.socialGoogle, \"Google\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                                <div class=\"col-sm-6\">
                                    {{ form_widget(form.socialGoogle, { 'attr': {'class': \"form-control\", 'placeholder': 'http://' } }) }}
                                </div>
                                <div class=\"col-md-3 has-error\">
                                    <p class=\"help-block\">{{ form_errors(form.socialGoogle)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                                </div>
                            </div>
                            <div class=\"form-group{% if form_errors(form.socialYoutube) is not empty %} has-error{% endif %}\">
                                {{ form_label(form.socialYoutube, \"Youtube\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                                <div class=\"col-sm-6\">
                                    {{ form_widget(form.socialYoutube, { 'attr': {'class': \"form-control\", 'placeholder': 'http://' } }) }}
                                </div>
                                <div class=\"col-md-3 has-error\">
                                    <p class=\"help-block\">{{ form_errors(form.socialYoutube)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                                </div>
                            </div>
                            <div class=\"form-group{% if form_errors(form.socialInstagram) is not empty %} has-error{% endif %}\">
                                {{ form_label(form.socialInstagram, \"Instagram\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                                <div class=\"col-sm-6\">
                                    {{ form_widget(form.socialInstagram, { 'attr': {'class': \"form-control\", 'placeholder': 'http://' } }) }}
                                </div>
                                <div class=\"col-md-3 has-error\">
                                    <p class=\"help-block\">{{ form_errors(form.socialInstagram)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"tab-pane\" id=\"perso\">
                        <div class=\"form-group{% if form_errors(form.maritalStatus) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.maritalStatus, \"Statut Marital\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.maritalStatus, { 'attr' : { 'class' : 'form-control' } }) }}
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">{{ form_errors(form.maritalStatus)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                            </div>
                        </div>
                        <div class=\"form-group{% if form_errors(form.childrenNumber) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.childrenNumber, \"Nombre d'enfant(s)\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.childrenNumber, { 'attr' : { 'class' : 'form-control' } }) }}
                            </div>
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">{{ form_errors(form.childrenNumber)|replace({ '<li>': '', '</li>': '', '<ul>': '', '</ul>': ''}) }}</p>
                            </div>
                        </div>

                        <div class=\"form-group{% if form_errors(form.birthday) is not empty %} has-error{% endif %}\">
                            {{ form_label(form.birthday, \"Date de naissance\", { 'label_attr' : { 'class' : 'col-sm-3 control-label' } }) }}
                            <div class=\"col-sm-6\">
                                {{ form_widget(form.birthday, { 'attr': {'class': \"form-control\", 'placeholder': 'yyyy-MM-dd' } }) }}
                            </div>
                            {% if form_errors(form.birthday) is not empty %}
                            <div class=\"col-md-3 has-error\">
                                <p class=\"help-block\">Format: yyyy/MM/dd</p>
                            </div>
                            {% else %}
                            <div class=\"col-sm-3\"><p class=\"help-block\">Format: yyyy/MM/dd</p></div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"newsletters\">
                        {% for newsletter in form.newsletters %}
                            
                             <div class=\"form-group\">
                                    {{ form_label(newsletter, \"Nom de la newsletter \\n commentaire \\n Fréquence d'envoi\" , { 'label_attr' : { 'class' : 'col-sm-3 control-label' } })|nl2br }}
                                <div >
                                    {{ form_label(newsletter, newsletter , { 'label_attr' : { 'class' : 'col-sm-3 control-label' } })|nl2br }}
                                    <div class=\"col-sm-6\">
                                        {{ form_widget(newsletter, { 'attr' : { 'class' : 'form-control' } }) }}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{ form_rest(form) }}
            <p class=\"text-right\"><button class=\"btn-primary btn\">Enregistrer</button></p>

            {{ form_end(form) }}
        </div>

</div>
</form>
<script>
if (!Modernizr.inputtypes['date']) {
    \$('input[type=date]').datepicker({
        dateFormat: 'yy-mm-dd'
    });   
}
</script>
{% endblock %}", "AdminUserBundle:Form:user.html.twig", "C:\\wamp64\\www\\plateformeanelis\\src\\Admin\\UserBundle/Resources/views/Form/user.html.twig");
    }
}
