<?php

/* publication/new.html.twig */
class __TwigTemplate_d292f726f53d321efb179393ea2eca4f34e2a80e456687b03e0bf61f408574ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "publication/new.html.twig", 1);
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
        $__internal_7a1c1d8ae8fdda8a1d18adf4ef205d9ad753c255492a8d4f286aebe2977ae9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1c1d8ae8fdda8a1d18adf4ef205d9ad753c255492a8d4f286aebe2977ae9c9->enter($__internal_7a1c1d8ae8fdda8a1d18adf4ef205d9ad753c255492a8d4f286aebe2977ae9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "publication/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a1c1d8ae8fdda8a1d18adf4ef205d9ad753c255492a8d4f286aebe2977ae9c9->leave($__internal_7a1c1d8ae8fdda8a1d18adf4ef205d9ad753c255492a8d4f286aebe2977ae9c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f04db996280f56ad3e06973b4d98a035ce0299ecf4934989499dcd3d28bf7f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04db996280f56ad3e06973b4d98a035ce0299ecf4934989499dcd3d28bf7f80->enter($__internal_f04db996280f56ad3e06973b4d98a035ce0299ecf4934989499dcd3d28bf7f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Publication creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publication_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f04db996280f56ad3e06973b4d98a035ce0299ecf4934989499dcd3d28bf7f80->leave($__internal_f04db996280f56ad3e06973b4d98a035ce0299ecf4934989499dcd3d28bf7f80_prof);

    }

    public function getTemplateName()
    {
        return "publication/new.html.twig";
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
    <h1>Publication creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('publication_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "publication/new.html.twig", "/var/www/html/symfony-project/symfony/app/Resources/views/publication/new.html.twig");
    }
}
