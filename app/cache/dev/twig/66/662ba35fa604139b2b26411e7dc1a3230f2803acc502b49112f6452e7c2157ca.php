<?php

/* publication/show.html.twig */
class __TwigTemplate_e5eac384a9d141e5b6c3a7b8f7895798750e51f88771d6833eafbf27685d3bbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "publication/show.html.twig", 1);
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
        $__internal_53091bb83e77fac38fe14480f0bcdb5112b8ce52e6378a3ebf34cbe5c4e70d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53091bb83e77fac38fe14480f0bcdb5112b8ce52e6378a3ebf34cbe5c4e70d20->enter($__internal_53091bb83e77fac38fe14480f0bcdb5112b8ce52e6378a3ebf34cbe5c4e70d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "publication/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53091bb83e77fac38fe14480f0bcdb5112b8ce52e6378a3ebf34cbe5c4e70d20->leave($__internal_53091bb83e77fac38fe14480f0bcdb5112b8ce52e6378a3ebf34cbe5c4e70d20_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ba63b35a6607d602cde3a2d33bdf91577ea5e45a072ae443d8f14c47a27741b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba63b35a6607d602cde3a2d33bdf91577ea5e45a072ae443d8f14c47a27741b->enter($__internal_6ba63b35a6607d602cde3a2d33bdf91577ea5e45a072ae443d8f14c47a27741b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Publication</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publication_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publication_edit", array("id" => $this->getAttribute((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6ba63b35a6607d602cde3a2d33bdf91577ea5e45a072ae443d8f14c47a27741b->leave($__internal_6ba63b35a6607d602cde3a2d33bdf91577ea5e45a072ae443d8f14c47a27741b_prof);

    }

    public function getTemplateName()
    {
        return "publication/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Publication</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ publication.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ publication.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('publication_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('publication_edit', { 'id': publication.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "publication/show.html.twig", "/var/www/html/symfony-project/symfony/app/Resources/views/publication/show.html.twig");
    }
}
