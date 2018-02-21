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
        $__internal_b27dc2c3fbda3c9033941c8314f60853544d47a2ac3cec37cf6546185c25a11c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27dc2c3fbda3c9033941c8314f60853544d47a2ac3cec37cf6546185c25a11c->enter($__internal_b27dc2c3fbda3c9033941c8314f60853544d47a2ac3cec37cf6546185c25a11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_b01274db9dcaf42b876b37aa386b7011248b5e4ee12b97a3247c2b436ac08c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01274db9dcaf42b876b37aa386b7011248b5e4ee12b97a3247c2b436ac08c54->enter($__internal_b01274db9dcaf42b876b37aa386b7011248b5e4ee12b97a3247c2b436ac08c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_b27dc2c3fbda3c9033941c8314f60853544d47a2ac3cec37cf6546185c25a11c->leave($__internal_b27dc2c3fbda3c9033941c8314f60853544d47a2ac3cec37cf6546185c25a11c_prof);

        
        $__internal_b01274db9dcaf42b876b37aa386b7011248b5e4ee12b97a3247c2b436ac08c54->leave($__internal_b01274db9dcaf42b876b37aa386b7011248b5e4ee12b97a3247c2b436ac08c54_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_a239c6f263bc03eb71035a81abce73fb87f7821875e3c08602056f0f592c24f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a239c6f263bc03eb71035a81abce73fb87f7821875e3c08602056f0f592c24f1->enter($__internal_a239c6f263bc03eb71035a81abce73fb87f7821875e3c08602056f0f592c24f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_e450dfd77b2542ece3a430885c1115ea9212eb5d82d53e37b1a033cf39a591b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e450dfd77b2542ece3a430885c1115ea9212eb5d82d53e37b1a033cf39a591b6->enter($__internal_e450dfd77b2542ece3a430885c1115ea9212eb5d82d53e37b1a033cf39a591b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_e450dfd77b2542ece3a430885c1115ea9212eb5d82d53e37b1a033cf39a591b6->leave($__internal_e450dfd77b2542ece3a430885c1115ea9212eb5d82d53e37b1a033cf39a591b6_prof);

        
        $__internal_a239c6f263bc03eb71035a81abce73fb87f7821875e3c08602056f0f592c24f1->leave($__internal_a239c6f263bc03eb71035a81abce73fb87f7821875e3c08602056f0f592c24f1_prof);

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
", "SonataBlockBundle:Block:block_base.html.twig", "C:\\wamp64\\www\\mailing\\plateformeanelis\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
