<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_71353d74c9947fd74696c9b9dbcccdedb0efaba61c6d5b5e2c5ad33b28c400f3 extends Twig_Template
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
        $__internal_e5eba63f52d443a5bf73e1b16d61b5ce668a1f23fa0e943cd4f98663cba16bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5eba63f52d443a5bf73e1b16d61b5ce668a1f23fa0e943cd4f98663cba16bce->enter($__internal_e5eba63f52d443a5bf73e1b16d61b5ce668a1f23fa0e943cd4f98663cba16bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5eba63f52d443a5bf73e1b16d61b5ce668a1f23fa0e943cd4f98663cba16bce->leave($__internal_e5eba63f52d443a5bf73e1b16d61b5ce668a1f23fa0e943cd4f98663cba16bce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_80a12293a1428e2f1b468a7e404f14b33c71b0887f9a65156e411cb262b277bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a12293a1428e2f1b468a7e404f14b33c71b0887f9a65156e411cb262b277bf->enter($__internal_80a12293a1428e2f1b468a7e404f14b33c71b0887f9a65156e411cb262b277bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_80a12293a1428e2f1b468a7e404f14b33c71b0887f9a65156e411cb262b277bf->leave($__internal_80a12293a1428e2f1b468a7e404f14b33c71b0887f9a65156e411cb262b277bf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_097816f0828de646ae85e724076eb590d648ba33999c3f34fc84044af3d15030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097816f0828de646ae85e724076eb590d648ba33999c3f34fc84044af3d15030->enter($__internal_097816f0828de646ae85e724076eb590d648ba33999c3f34fc84044af3d15030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_097816f0828de646ae85e724076eb590d648ba33999c3f34fc84044af3d15030->leave($__internal_097816f0828de646ae85e724076eb590d648ba33999c3f34fc84044af3d15030_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1318e09abd79911b2823decdad00de333429842a4454f1d5f43d184faf65e84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1318e09abd79911b2823decdad00de333429842a4454f1d5f43d184faf65e84f->enter($__internal_1318e09abd79911b2823decdad00de333429842a4454f1d5f43d184faf65e84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1318e09abd79911b2823decdad00de333429842a4454f1d5f43d184faf65e84f->leave($__internal_1318e09abd79911b2823decdad00de333429842a4454f1d5f43d184faf65e84f_prof);

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
