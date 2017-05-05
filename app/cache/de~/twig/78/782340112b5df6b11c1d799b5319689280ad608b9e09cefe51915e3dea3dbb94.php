<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9c2123a526ed40ab185ac8554eb31b813d7f4ccd7a23a9a73b2c1f756eea911f extends Twig_Template
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
        $__internal_17dd4256347e5d5d3378db6ea409bc70889b3d73138060c239217330e586684d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17dd4256347e5d5d3378db6ea409bc70889b3d73138060c239217330e586684d->enter($__internal_17dd4256347e5d5d3378db6ea409bc70889b3d73138060c239217330e586684d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17dd4256347e5d5d3378db6ea409bc70889b3d73138060c239217330e586684d->leave($__internal_17dd4256347e5d5d3378db6ea409bc70889b3d73138060c239217330e586684d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6552703ec3861430ee47c29cc73587136911077a43b082de8fb97217f15db654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6552703ec3861430ee47c29cc73587136911077a43b082de8fb97217f15db654->enter($__internal_6552703ec3861430ee47c29cc73587136911077a43b082de8fb97217f15db654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6552703ec3861430ee47c29cc73587136911077a43b082de8fb97217f15db654->leave($__internal_6552703ec3861430ee47c29cc73587136911077a43b082de8fb97217f15db654_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c28da04d5db0057d12697641b8ecf6ee2ecaad47a59357adae6a1b8b6711d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c28da04d5db0057d12697641b8ecf6ee2ecaad47a59357adae6a1b8b6711d0d->enter($__internal_2c28da04d5db0057d12697641b8ecf6ee2ecaad47a59357adae6a1b8b6711d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2c28da04d5db0057d12697641b8ecf6ee2ecaad47a59357adae6a1b8b6711d0d->leave($__internal_2c28da04d5db0057d12697641b8ecf6ee2ecaad47a59357adae6a1b8b6711d0d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fc5df3dadfe6bf618f887ee9c7b1cbf8d2e5629253d5b63b8a3958826753781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc5df3dadfe6bf618f887ee9c7b1cbf8d2e5629253d5b63b8a3958826753781->enter($__internal_0fc5df3dadfe6bf618f887ee9c7b1cbf8d2e5629253d5b63b8a3958826753781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0fc5df3dadfe6bf618f887ee9c7b1cbf8d2e5629253d5b63b8a3958826753781->leave($__internal_0fc5df3dadfe6bf618f887ee9c7b1cbf8d2e5629253d5b63b8a3958826753781_prof);

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
