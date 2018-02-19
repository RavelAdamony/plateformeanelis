<?php

/* ::base.html.twig */
class __TwigTemplate_3d615a213e9b0e4d36e79c351bb88230c9ee899221b526fe0c129df3f9245816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'optbody' => array($this, 'block_optbody'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf8d02b67d49b27d3348c1221de0f1f54e0c1b25664880256207f09c6bdd9316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf8d02b67d49b27d3348c1221de0f1f54e0c1b25664880256207f09c6bdd9316->enter($__internal_bf8d02b67d49b27d3348c1221de0f1f54e0c1b25664880256207f09c6bdd9316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7d2fdf4996e8be44659f738143dd38a00a9034c2336b5b20cef661e45df3bfa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2fdf4996e8be44659f738143dd38a00a9034c2336b5b20cef661e45df3bfa8->enter($__internal_7d2fdf4996e8be44659f738143dd38a00a9034c2336b5b20cef661e45df3bfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - Plateforme ANELIS</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Plateforme ANELIS\">
        <meta name=\"author\" content=\"David Santiago\">
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" />

        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/less/styles.less"), "html", null, true);
        echo "\" rel=\"stylesheet/less\" media=\"all\"> 
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>


        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/less.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body";
        // line 21
        $this->displayBlock('optbody', $context, $blocks);
        echo ">
        ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-59532264-1', 'auto');
  ga('send', 'pageview');
 
</script>
    </body>
</html>";
        
        $__internal_bf8d02b67d49b27d3348c1221de0f1f54e0c1b25664880256207f09c6bdd9316->leave($__internal_bf8d02b67d49b27d3348c1221de0f1f54e0c1b25664880256207f09c6bdd9316_prof);

        
        $__internal_7d2fdf4996e8be44659f738143dd38a00a9034c2336b5b20cef661e45df3bfa8->leave($__internal_7d2fdf4996e8be44659f738143dd38a00a9034c2336b5b20cef661e45df3bfa8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_649e08828dea5a03eeabcca0a97b7006a1966fe77fb6455e6960b2fa1fdc6a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_649e08828dea5a03eeabcca0a97b7006a1966fe77fb6455e6960b2fa1fdc6a9c->enter($__internal_649e08828dea5a03eeabcca0a97b7006a1966fe77fb6455e6960b2fa1fdc6a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a762fae5c1615238442816ffac784c402ee2241959e371cb8ea21c9f8c08858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a762fae5c1615238442816ffac784c402ee2241959e371cb8ea21c9f8c08858->enter($__internal_0a762fae5c1615238442816ffac784c402ee2241959e371cb8ea21c9f8c08858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0a762fae5c1615238442816ffac784c402ee2241959e371cb8ea21c9f8c08858->leave($__internal_0a762fae5c1615238442816ffac784c402ee2241959e371cb8ea21c9f8c08858_prof);

        
        $__internal_649e08828dea5a03eeabcca0a97b7006a1966fe77fb6455e6960b2fa1fdc6a9c->leave($__internal_649e08828dea5a03eeabcca0a97b7006a1966fe77fb6455e6960b2fa1fdc6a9c_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05cafa5c0fdf62879dc3c2ade90fae1324c4f16b9ed943e4334de555205c1300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05cafa5c0fdf62879dc3c2ade90fae1324c4f16b9ed943e4334de555205c1300->enter($__internal_05cafa5c0fdf62879dc3c2ade90fae1324c4f16b9ed943e4334de555205c1300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bd08f415ba54ef4b6ece9597908f72a29677de2809a2219c0f89f1247441cfde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd08f415ba54ef4b6ece9597908f72a29677de2809a2219c0f89f1247441cfde->enter($__internal_bd08f415ba54ef4b6ece9597908f72a29677de2809a2219c0f89f1247441cfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bd08f415ba54ef4b6ece9597908f72a29677de2809a2219c0f89f1247441cfde->leave($__internal_bd08f415ba54ef4b6ece9597908f72a29677de2809a2219c0f89f1247441cfde_prof);

        
        $__internal_05cafa5c0fdf62879dc3c2ade90fae1324c4f16b9ed943e4334de555205c1300->leave($__internal_05cafa5c0fdf62879dc3c2ade90fae1324c4f16b9ed943e4334de555205c1300_prof);

    }

    // line 21
    public function block_optbody($context, array $blocks = array())
    {
        $__internal_83e98d0708f0b21525d5d1352e191eddda7dfa488d9693687806b6502b69a422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e98d0708f0b21525d5d1352e191eddda7dfa488d9693687806b6502b69a422->enter($__internal_83e98d0708f0b21525d5d1352e191eddda7dfa488d9693687806b6502b69a422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optbody"));

        $__internal_05c23aaa04b0d1fea73d4971af65d9bdba2b97be3ec46fc8bbdb7a14a9503ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c23aaa04b0d1fea73d4971af65d9bdba2b97be3ec46fc8bbdb7a14a9503ee2->enter($__internal_05c23aaa04b0d1fea73d4971af65d9bdba2b97be3ec46fc8bbdb7a14a9503ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "optbody"));

        
        $__internal_05c23aaa04b0d1fea73d4971af65d9bdba2b97be3ec46fc8bbdb7a14a9503ee2->leave($__internal_05c23aaa04b0d1fea73d4971af65d9bdba2b97be3ec46fc8bbdb7a14a9503ee2_prof);

        
        $__internal_83e98d0708f0b21525d5d1352e191eddda7dfa488d9693687806b6502b69a422->leave($__internal_83e98d0708f0b21525d5d1352e191eddda7dfa488d9693687806b6502b69a422_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_85570082e37f59e70529903683ed1576bef88f3a6165c5b46cf262e543c531e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85570082e37f59e70529903683ed1576bef88f3a6165c5b46cf262e543c531e3->enter($__internal_85570082e37f59e70529903683ed1576bef88f3a6165c5b46cf262e543c531e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e3cba0598c0c741f35ed9681d3a24086f74d0eca389cbc127a670f798fd6577d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3cba0598c0c741f35ed9681d3a24086f74d0eca389cbc127a670f798fd6577d->enter($__internal_e3cba0598c0c741f35ed9681d3a24086f74d0eca389cbc127a670f798fd6577d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e3cba0598c0c741f35ed9681d3a24086f74d0eca389cbc127a670f798fd6577d->leave($__internal_e3cba0598c0c741f35ed9681d3a24086f74d0eca389cbc127a670f798fd6577d_prof);

        
        $__internal_85570082e37f59e70529903683ed1576bef88f3a6165c5b46cf262e543c531e3->leave($__internal_85570082e37f59e70529903683ed1576bef88f3a6165c5b46cf262e543c531e3_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5dbdc3501a4494ac46511a86e8c02193fa9ba60ed1de402adfa70b399bd94d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dbdc3501a4494ac46511a86e8c02193fa9ba60ed1de402adfa70b399bd94d80->enter($__internal_5dbdc3501a4494ac46511a86e8c02193fa9ba60ed1de402adfa70b399bd94d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_52339b6060c9056db0ff4acc2409cc7f928c5874b50a77d71d8316efc2f60792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52339b6060c9056db0ff4acc2409cc7f928c5874b50a77d71d8316efc2f60792->enter($__internal_52339b6060c9056db0ff4acc2409cc7f928c5874b50a77d71d8316efc2f60792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_52339b6060c9056db0ff4acc2409cc7f928c5874b50a77d71d8316efc2f60792->leave($__internal_52339b6060c9056db0ff4acc2409cc7f928c5874b50a77d71d8316efc2f60792_prof);

        
        $__internal_5dbdc3501a4494ac46511a86e8c02193fa9ba60ed1de402adfa70b399bd94d80->leave($__internal_5dbdc3501a4494ac46511a86e8c02193fa9ba60ed1de402adfa70b399bd94d80_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 23,  152 => 22,  135 => 21,  118 => 17,  101 => 5,  79 => 24,  76 => 23,  74 => 22,  70 => 21,  65 => 19,  62 => 18,  60 => 17,  53 => 13,  48 => 11,  44 => 10,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{% endblock %} - Plateforme ANELIS</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Plateforme ANELIS\">
        <meta name=\"author\" content=\"David Santiago\">
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('favicon.png') }}\" />

        <link href=\"{{ asset('assets/less/styles.less') }}\" rel=\"stylesheet/less\" media=\"all\"> 
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>


        {% block stylesheets %}{% endblock %}

        <script type=\"text/javascript\" src=\"{{ asset('assets/js/less.js') }}\"></script>
    </head>
    <body{% block optbody %}{% endblock %}>
        {% block content %}{% endblock %}
        {% block javascripts %}{% endblock %}

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-59532264-1', 'auto');
  ga('send', 'pageview');
 
</script>
    </body>
</html>", "::base.html.twig", "C:\\wamp64\\www\\plateformeanelis\\app/Resources\\views/base.html.twig");
    }
}
