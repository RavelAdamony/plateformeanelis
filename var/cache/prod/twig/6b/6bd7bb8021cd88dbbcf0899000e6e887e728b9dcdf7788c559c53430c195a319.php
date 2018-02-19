<?php

/* AdminUserBundle:Form:fields.html.twig */
class __TwigTemplate_729f70bd081e5520d24e1f1263c2209cd9287ad41021c9a12c8653ddb4c38788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tel_widget' => array($this, 'block_tel_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('tel_widget', $context, $blocks);
    }

    public function block_tel_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        $context["type"] = "tel";
        // line 4
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "AdminUserBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminUserBundle:Form:fields.html.twig", "D:\\WAMP\\www\\plateformeanelis\\src\\Admin\\UserBundle/Resources/views/Form/fields.html.twig");
    }
}
