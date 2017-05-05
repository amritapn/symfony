<?php

/* SymfonyMagazineBundle:Default:index.html.twig */
class __TwigTemplate_19e7b6f2706563ca4cd42b2e2aa42cbb7a84a6093a4ed3a76b55b48a086cf8dc extends Twig_Template
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
        echo "Hello World!
";
    }

    public function getTemplateName()
    {
        return "SymfonyMagazineBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SymfonyMagazineBundle:Default:index.html.twig", "/var/www/html/symfony-project/symfony/src/Symfony/MagazineBundle/Resources/views/Default/index.html.twig");
    }
}
