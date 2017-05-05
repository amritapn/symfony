<?php

/* base.html.twig */
class __TwigTemplate_3e165211ff588b497090814105fe3b0acc2e6dfb0295e8cd935c16ca521bf721 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ddc9d4100a6c9600ee661aca2d7e3a172dfe40464035e055e8c21c82eab0f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ddc9d4100a6c9600ee661aca2d7e3a172dfe40464035e055e8c21c82eab0f5b->enter($__internal_6ddc9d4100a6c9600ee661aca2d7e3a172dfe40464035e055e8c21c82eab0f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6ddc9d4100a6c9600ee661aca2d7e3a172dfe40464035e055e8c21c82eab0f5b->leave($__internal_6ddc9d4100a6c9600ee661aca2d7e3a172dfe40464035e055e8c21c82eab0f5b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_449e811bcae32e43abfc2cd75de7193076ba257e0a66af44b5df6bbc37da1f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449e811bcae32e43abfc2cd75de7193076ba257e0a66af44b5df6bbc37da1f05->enter($__internal_449e811bcae32e43abfc2cd75de7193076ba257e0a66af44b5df6bbc37da1f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_449e811bcae32e43abfc2cd75de7193076ba257e0a66af44b5df6bbc37da1f05->leave($__internal_449e811bcae32e43abfc2cd75de7193076ba257e0a66af44b5df6bbc37da1f05_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c86c50c225d094de1631942cec42780a26ff59f2b255ecfeaa9be4de9e7d9754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86c50c225d094de1631942cec42780a26ff59f2b255ecfeaa9be4de9e7d9754->enter($__internal_c86c50c225d094de1631942cec42780a26ff59f2b255ecfeaa9be4de9e7d9754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c86c50c225d094de1631942cec42780a26ff59f2b255ecfeaa9be4de9e7d9754->leave($__internal_c86c50c225d094de1631942cec42780a26ff59f2b255ecfeaa9be4de9e7d9754_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5521a8b0b6d83823c35c56164a02245bf80aa41306ae1854d6f926e39550c881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5521a8b0b6d83823c35c56164a02245bf80aa41306ae1854d6f926e39550c881->enter($__internal_5521a8b0b6d83823c35c56164a02245bf80aa41306ae1854d6f926e39550c881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5521a8b0b6d83823c35c56164a02245bf80aa41306ae1854d6f926e39550c881->leave($__internal_5521a8b0b6d83823c35c56164a02245bf80aa41306ae1854d6f926e39550c881_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_543cd41aaf70a8cc5506243ced30b1f89037597d62701430dc66348437a9e4ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543cd41aaf70a8cc5506243ced30b1f89037597d62701430dc66348437a9e4ec->enter($__internal_543cd41aaf70a8cc5506243ced30b1f89037597d62701430dc66348437a9e4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_543cd41aaf70a8cc5506243ced30b1f89037597d62701430dc66348437a9e4ec->leave($__internal_543cd41aaf70a8cc5506243ced30b1f89037597d62701430dc66348437a9e4ec_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/symfony-project/symfony/app/Resources/views/base.html.twig");
    }
}
