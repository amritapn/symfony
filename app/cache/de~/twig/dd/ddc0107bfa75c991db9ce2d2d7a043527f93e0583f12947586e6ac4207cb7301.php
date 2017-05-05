<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_88914a43d15b1bdaeccfb88fb25e8ace2c9612b1296c20145ad52676fbd1a912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_833d2c05df92e2cbb31b2f3234b6dd7faa18027b237731a1ee015e340914664d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833d2c05df92e2cbb31b2f3234b6dd7faa18027b237731a1ee015e340914664d->enter($__internal_833d2c05df92e2cbb31b2f3234b6dd7faa18027b237731a1ee015e340914664d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_833d2c05df92e2cbb31b2f3234b6dd7faa18027b237731a1ee015e340914664d->leave($__internal_833d2c05df92e2cbb31b2f3234b6dd7faa18027b237731a1ee015e340914664d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e5499dd818755f0cd6acf4184f9efe82900479808e0ebbfb1ff9ad1f1b9096e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5499dd818755f0cd6acf4184f9efe82900479808e0ebbfb1ff9ad1f1b9096e->enter($__internal_2e5499dd818755f0cd6acf4184f9efe82900479808e0ebbfb1ff9ad1f1b9096e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e5499dd818755f0cd6acf4184f9efe82900479808e0ebbfb1ff9ad1f1b9096e->leave($__internal_2e5499dd818755f0cd6acf4184f9efe82900479808e0ebbfb1ff9ad1f1b9096e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79ec7fe1f92261dc99bca83ee4cc4e4aa9a02154d09bc8b2c09150d8bd6fa911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ec7fe1f92261dc99bca83ee4cc4e4aa9a02154d09bc8b2c09150d8bd6fa911->enter($__internal_79ec7fe1f92261dc99bca83ee4cc4e4aa9a02154d09bc8b2c09150d8bd6fa911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_79ec7fe1f92261dc99bca83ee4cc4e4aa9a02154d09bc8b2c09150d8bd6fa911->leave($__internal_79ec7fe1f92261dc99bca83ee4cc4e4aa9a02154d09bc8b2c09150d8bd6fa911_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bed806fb6a1c4fc2f39e481604f21dec9665ec085820e1904e84a63722d74977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed806fb6a1c4fc2f39e481604f21dec9665ec085820e1904e84a63722d74977->enter($__internal_bed806fb6a1c4fc2f39e481604f21dec9665ec085820e1904e84a63722d74977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bed806fb6a1c4fc2f39e481604f21dec9665ec085820e1904e84a63722d74977->leave($__internal_bed806fb6a1c4fc2f39e481604f21dec9665ec085820e1904e84a63722d74977_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfony-project/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
