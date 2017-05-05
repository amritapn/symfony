<?php

/* base.html.twig */
class __TwigTemplate_e02ecc2657670bad7c5601614fdf6ef868d7c3a52028790df5aa394a11aec4b2 extends Twig_Template
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
        $__internal_93e13edc19fc02592109d2c470a14ad90daa0c2954364037bcf28e30fbdb1909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e13edc19fc02592109d2c470a14ad90daa0c2954364037bcf28e30fbdb1909->enter($__internal_93e13edc19fc02592109d2c470a14ad90daa0c2954364037bcf28e30fbdb1909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_93e13edc19fc02592109d2c470a14ad90daa0c2954364037bcf28e30fbdb1909->leave($__internal_93e13edc19fc02592109d2c470a14ad90daa0c2954364037bcf28e30fbdb1909_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a14a986f2e6066b6b07b5e524559941b1dd8dd866ed66d923202051d6f9a3662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14a986f2e6066b6b07b5e524559941b1dd8dd866ed66d923202051d6f9a3662->enter($__internal_a14a986f2e6066b6b07b5e524559941b1dd8dd866ed66d923202051d6f9a3662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a14a986f2e6066b6b07b5e524559941b1dd8dd866ed66d923202051d6f9a3662->leave($__internal_a14a986f2e6066b6b07b5e524559941b1dd8dd866ed66d923202051d6f9a3662_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1862ed7b65adc7519213666b0ed14a9082eb7f1ea2b5895e68ef3497b22802e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1862ed7b65adc7519213666b0ed14a9082eb7f1ea2b5895e68ef3497b22802e2->enter($__internal_1862ed7b65adc7519213666b0ed14a9082eb7f1ea2b5895e68ef3497b22802e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1862ed7b65adc7519213666b0ed14a9082eb7f1ea2b5895e68ef3497b22802e2->leave($__internal_1862ed7b65adc7519213666b0ed14a9082eb7f1ea2b5895e68ef3497b22802e2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e54c477b73c02b80eb5ab06bc492259bd5bd1ed504ee45f10a2bc7f2de3a6aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54c477b73c02b80eb5ab06bc492259bd5bd1ed504ee45f10a2bc7f2de3a6aa2->enter($__internal_e54c477b73c02b80eb5ab06bc492259bd5bd1ed504ee45f10a2bc7f2de3a6aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e54c477b73c02b80eb5ab06bc492259bd5bd1ed504ee45f10a2bc7f2de3a6aa2->leave($__internal_e54c477b73c02b80eb5ab06bc492259bd5bd1ed504ee45f10a2bc7f2de3a6aa2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b33658674101ae5496a5851dff74d80dfbc5e2584cd45fe2ebd77641e1cc0606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33658674101ae5496a5851dff74d80dfbc5e2584cd45fe2ebd77641e1cc0606->enter($__internal_b33658674101ae5496a5851dff74d80dfbc5e2584cd45fe2ebd77641e1cc0606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b33658674101ae5496a5851dff74d80dfbc5e2584cd45fe2ebd77641e1cc0606->leave($__internal_b33658674101ae5496a5851dff74d80dfbc5e2584cd45fe2ebd77641e1cc0606_prof);

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
