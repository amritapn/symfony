<?php

/* issue/new.html.twig */
class __TwigTemplate_90b6b843d147217c2013ee4fbdbb9fd0ee0f7ef31a5f6866a16cbea468f2adad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "issue/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c7a5d3b314cab569927fd1c6aa9ebe2fd71afff19fabda4a45f3681beb69fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7a5d3b314cab569927fd1c6aa9ebe2fd71afff19fabda4a45f3681beb69fc4->enter($__internal_8c7a5d3b314cab569927fd1c6aa9ebe2fd71afff19fabda4a45f3681beb69fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "issue/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c7a5d3b314cab569927fd1c6aa9ebe2fd71afff19fabda4a45f3681beb69fc4->leave($__internal_8c7a5d3b314cab569927fd1c6aa9ebe2fd71afff19fabda4a45f3681beb69fc4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f0ce542af5c02ca9be6e18c0c565bba0127946aa82e273385c39b65f0741e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0ce542af5c02ca9be6e18c0c565bba0127946aa82e273385c39b65f0741e9b->enter($__internal_0f0ce542af5c02ca9be6e18c0c565bba0127946aa82e273385c39b65f0741e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Issue creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("issue_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0f0ce542af5c02ca9be6e18c0c565bba0127946aa82e273385c39b65f0741e9b->leave($__internal_0f0ce542af5c02ca9be6e18c0c565bba0127946aa82e273385c39b65f0741e9b_prof);

    }

    public function getTemplateName()
    {
        return "issue/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Issue creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('issue_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "issue/new.html.twig", "/var/www/html/symfony-project/symfony/app/Resources/views/issue/new.html.twig");
    }
}
