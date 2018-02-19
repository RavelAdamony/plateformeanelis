<?php

/* AdminUserBundle::standard_layout.html.twig */
class __TwigTemplate_7acd169858669b158c490a0159a4e2d6df7f9f3ad52fcc48f675a3c4f6301f74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "AdminUserBundle::standard_layout.html.twig", 1);
        $this->blocks = array(
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        // line 3
        echo "    <li>
        <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_main_homepage");
        echo "\">
            <span class=\"fa fa-home\"></span> Retour à la plateforme
        </a>
    </li>
";
    }

    public function getTemplateName()
    {
        return "AdminUserBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminUserBundle::standard_layout.html.twig", "D:\\WAMP\\www\\plateformeanelis\\src\\Admin\\UserBundle/Resources/views/standard_layout.html.twig");
    }
}
