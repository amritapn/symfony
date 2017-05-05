<?php

/* firstBundle:Content:hello.html.twig */
class __TwigTemplate_1830d9a9793eea564c0bf7acea636082eaf35175d649f781b16817a9ec53bc66 extends Twig_Template
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
        // line 1
        echo "<% extends '::base.html.twig' %>
<h1>Hello ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!</h1>
";
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
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "firstBundle:Content:hello.html.twig", "/var/www/html/symfony-project/symfony/src/Test/firstBundle/Resources/views/Content/hello.html.twig");
    }
}
