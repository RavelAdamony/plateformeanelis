<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_36cb522f1d077bf1f2f7a50a20686c4a15d1d8ba1b14230ffe9cb199b54ae566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97f9d38b7df8a37cc904c77a58b20b0932f633d0abc5aa2db5a8787cdd7a92f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f9d38b7df8a37cc904c77a58b20b0932f633d0abc5aa2db5a8787cdd7a92f3->enter($__internal_97f9d38b7df8a37cc904c77a58b20b0932f633d0abc5aa2db5a8787cdd7a92f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_0e6785f66dfef0f8431c7d9a3ae4df904d4da5b8169af457863b8e05c77741ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6785f66dfef0f8431c7d9a3ae4df904d4da5b8169af457863b8e05c77741ca->enter($__internal_0e6785f66dfef0f8431c7d9a3ae4df904d4da5b8169af457863b8e05c77741ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_97f9d38b7df8a37cc904c77a58b20b0932f633d0abc5aa2db5a8787cdd7a92f3->leave($__internal_97f9d38b7df8a37cc904c77a58b20b0932f633d0abc5aa2db5a8787cdd7a92f3_prof);

        
        $__internal_0e6785f66dfef0f8431c7d9a3ae4df904d4da5b8169af457863b8e05c77741ca->leave($__internal_0e6785f66dfef0f8431c7d9a3ae4df904d4da5b8169af457863b8e05c77741ca_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_1a5a0248c894dedc329f7cfc1d922845cd2bc0916f89bf0bf5a79e5147eeeac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5a0248c894dedc329f7cfc1d922845cd2bc0916f89bf0bf5a79e5147eeeac3->enter($__internal_1a5a0248c894dedc329f7cfc1d922845cd2bc0916f89bf0bf5a79e5147eeeac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_0651277f2faf0a04e7c84173167b9257ccc15da85c04f48b66a55bbd5b0825a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0651277f2faf0a04e7c84173167b9257ccc15da85c04f48b66a55bbd5b0825a4->enter($__internal_0651277f2faf0a04e7c84173167b9257ccc15da85c04f48b66a55bbd5b0825a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_0651277f2faf0a04e7c84173167b9257ccc15da85c04f48b66a55bbd5b0825a4->leave($__internal_0651277f2faf0a04e7c84173167b9257ccc15da85c04f48b66a55bbd5b0825a4_prof);

        
        $__internal_1a5a0248c894dedc329f7cfc1d922845cd2bc0916f89bf0bf5a79e5147eeeac3->leave($__internal_1a5a0248c894dedc329f7cfc1d922845cd2bc0916f89bf0bf5a79e5147eeeac3_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "C:\\wamp64\\www\\plateformeanelis\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
