<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_9fd99803a116fd5f0e2269902b469f216cd92eca201ab11b33d2eee8923db4cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c28c322a453da74e2491b0719e7a14fcec1c1b4186554f1788fc870ca05c35ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28c322a453da74e2491b0719e7a14fcec1c1b4186554f1788fc870ca05c35ba->enter($__internal_c28c322a453da74e2491b0719e7a14fcec1c1b4186554f1788fc870ca05c35ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_cd3d09e981d491e9037e54ac18fa631b03c3041108a1a2894a0124e587025d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3d09e981d491e9037e54ac18fa631b03c3041108a1a2894a0124e587025d0e->enter($__internal_cd3d09e981d491e9037e54ac18fa631b03c3041108a1a2894a0124e587025d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_c28c322a453da74e2491b0719e7a14fcec1c1b4186554f1788fc870ca05c35ba->leave($__internal_c28c322a453da74e2491b0719e7a14fcec1c1b4186554f1788fc870ca05c35ba_prof);

        
        $__internal_cd3d09e981d491e9037e54ac18fa631b03c3041108a1a2894a0124e587025d0e->leave($__internal_cd3d09e981d491e9037e54ac18fa631b03c3041108a1a2894a0124e587025d0e_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_base.html.twig");
    }
}
