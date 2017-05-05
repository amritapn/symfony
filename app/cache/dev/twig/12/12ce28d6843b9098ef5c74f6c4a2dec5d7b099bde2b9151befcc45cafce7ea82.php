<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_94da57c69d956df977b3e58f5fd1510c42ffa30d4196ed571e5bb21e4cbb6aa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65ccf3087994ada2986ed3997f1e9a6d3924123aafb38042b19c19aeda79d7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ccf3087994ada2986ed3997f1e9a6d3924123aafb38042b19c19aeda79d7ef->enter($__internal_65ccf3087994ada2986ed3997f1e9a6d3924123aafb38042b19c19aeda79d7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65ccf3087994ada2986ed3997f1e9a6d3924123aafb38042b19c19aeda79d7ef->leave($__internal_65ccf3087994ada2986ed3997f1e9a6d3924123aafb38042b19c19aeda79d7ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dfe1d31eefcc00753447094f04ef7bbfee6a3102a9e967430151140ac8312090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe1d31eefcc00753447094f04ef7bbfee6a3102a9e967430151140ac8312090->enter($__internal_dfe1d31eefcc00753447094f04ef7bbfee6a3102a9e967430151140ac8312090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dfe1d31eefcc00753447094f04ef7bbfee6a3102a9e967430151140ac8312090->leave($__internal_dfe1d31eefcc00753447094f04ef7bbfee6a3102a9e967430151140ac8312090_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_17a99fa9676709e2b221e38fced59d88454417320e739d14eb9f08769dfdd9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a99fa9676709e2b221e38fced59d88454417320e739d14eb9f08769dfdd9db->enter($__internal_17a99fa9676709e2b221e38fced59d88454417320e739d14eb9f08769dfdd9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_17a99fa9676709e2b221e38fced59d88454417320e739d14eb9f08769dfdd9db->leave($__internal_17a99fa9676709e2b221e38fced59d88454417320e739d14eb9f08769dfdd9db_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5a1cd3bc9bb76c180371031e954b8b4d59d391ea8a5e2ff11e6bea26f50b030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a1cd3bc9bb76c180371031e954b8b4d59d391ea8a5e2ff11e6bea26f50b030->enter($__internal_c5a1cd3bc9bb76c180371031e954b8b4d59d391ea8a5e2ff11e6bea26f50b030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c5a1cd3bc9bb76c180371031e954b8b4d59d391ea8a5e2ff11e6bea26f50b030->leave($__internal_c5a1cd3bc9bb76c180371031e954b8b4d59d391ea8a5e2ff11e6bea26f50b030_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfony-project/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
