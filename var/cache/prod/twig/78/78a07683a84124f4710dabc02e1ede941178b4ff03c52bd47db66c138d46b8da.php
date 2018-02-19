<?php

/* AdminUserBundle:CRUD:list__action_mailjetexport.html.twig */
class __TwigTemplate_4ad9325aa227b3516a6a637c2b1624b172c7dab83df9c53e3e2bf4c85831d5da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SonataAdmin/standard_layout.html.twig", "AdminUserBundle:CRUD:list__action_mailjetexport.html.twig", 1);
        $this->blocks = array(
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 4
        echo "    <a class=\"btn btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateObjectUrl", array(0 => "mailjetexport", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
        echo "\">mailjetexport</a>
";
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
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminUserBundle:CRUD:list__action_mailjetexport.html.twig", "D:\\WAMP\\www\\plateformeanelis\\src\\Admin\\UserBundle/Resources/views/CRUD/list__action_mailjetexport.html.twig");
    }
}
