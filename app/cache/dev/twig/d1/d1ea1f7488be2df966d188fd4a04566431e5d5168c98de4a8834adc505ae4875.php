<?php

/* SymfonyMagazineBundle:Default:index.html.twig */
class __TwigTemplate_1d1067cf31f2663c2ff3dfc331d922dd4ca204fbc563c369438c172b0f1c85f7 extends Twig_Template
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
        $__internal_f0f7a377617a6a67572a789f539b948892a74b940e95ebfb16db5d4959122030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f7a377617a6a67572a789f539b948892a74b940e95ebfb16db5d4959122030->enter($__internal_f0f7a377617a6a67572a789f539b948892a74b940e95ebfb16db5d4959122030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfonyMagazineBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_f0f7a377617a6a67572a789f539b948892a74b940e95ebfb16db5d4959122030->leave($__internal_f0f7a377617a6a67572a789f539b948892a74b940e95ebfb16db5d4959122030_prof);

    }

    public function getTemplateName()
    {
        return "SymfonyMagazineBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "SymfonyMagazineBundle:Default:index.html.twig", "/var/www/html/symfony-project/symfony/src/Symfony/MagazineBundle/Resources/views/Default/index.html.twig");
    }
}
