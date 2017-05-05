<?php

/* firstBundle:Content:hello.html.twig */
class __TwigTemplate_a93ca817ba0e03da37f8b5d226ce4e0a977c3dcbe935a13452068f7ed6492303 extends Twig_Template
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
        $__internal_406fc15dc227be7418d5e6ab7702ca382545cce6e3bbb78336002c0a5de735cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406fc15dc227be7418d5e6ab7702ca382545cce6e3bbb78336002c0a5de735cc->enter($__internal_406fc15dc227be7418d5e6ab7702ca382545cce6e3bbb78336002c0a5de735cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "firstBundle:Content:hello.html.twig"));

        // line 1
        echo "<% extends '::base.html.twig' %>
<h1>Hello ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
        
        $__internal_406fc15dc227be7418d5e6ab7702ca382545cce6e3bbb78336002c0a5de735cc->leave($__internal_406fc15dc227be7418d5e6ab7702ca382545cce6e3bbb78336002c0a5de735cc_prof);

    }

    public function getTemplateName()
    {
        return "firstBundle:Content:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<% extends '::base.html.twig' %>
<h1>Hello {{ name }}!</h1>
", "firstBundle:Content:hello.html.twig", "/var/www/html/symfony-project/symfony/src/Test/firstBundle/Resources/views/Content/hello.html.twig");
    }
}
