<?php

/* issue/show.html.twig */
class __TwigTemplate_4f633a272df62e40a64d7b6c899c1d3367c043899aa16580996ceb98d98bc7eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "issue/show.html.twig", 1);
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
        $__internal_142205a04e56466a976d8871cc95dedaab7721e0359a26ae148ca3175dcad31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142205a04e56466a976d8871cc95dedaab7721e0359a26ae148ca3175dcad31f->enter($__internal_142205a04e56466a976d8871cc95dedaab7721e0359a26ae148ca3175dcad31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "issue/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_142205a04e56466a976d8871cc95dedaab7721e0359a26ae148ca3175dcad31f->leave($__internal_142205a04e56466a976d8871cc95dedaab7721e0359a26ae148ca3175dcad31f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4910e9ac091165d45ad98a97d33be85c4c18d49e1147f5a32855fb1bc7a66ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4910e9ac091165d45ad98a97d33be85c4c18d49e1147f5a32855fb1bc7a66ab3->enter($__internal_4910e9ac091165d45ad98a97d33be85c4c18d49e1147f5a32855fb1bc7a66ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Issue</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["issue"]) ? $context["issue"] : $this->getContext($context, "issue")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Number</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["issue"]) ? $context["issue"] : $this->getContext($context, "issue")), "number", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datepublication</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["issue"]) ? $context["issue"] : $this->getContext($context, "issue")), "datePublication", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["issue"]) ? $context["issue"] : $this->getContext($context, "issue")), "datePublication", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Cover</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["issue"]) ? $context["issue"] : $this->getContext($context, "issue")), "cover", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("issue_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("issue_edit", array("id" => $this->getAttribute((isset($context["issue"]) ? $context["issue"] : $this->getContext($context, "issue")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4910e9ac091165d45ad98a97d33be85c4c18d49e1147f5a32855fb1bc7a66ab3->leave($__internal_4910e9ac091165d45ad98a97d33be85c4c18d49e1147f5a32855fb1bc7a66ab3_prof);

    }

    public function getTemplateName()
    {
        return "issue/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  87 => 32,  81 => 29,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Issue</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ issue.id }}</td>
            </tr>
            <tr>
                <th>Number</th>
                <td>{{ issue.number }}</td>
            </tr>
            <tr>
                <th>Datepublication</th>
                <td>{% if issue.datePublication %}{{ issue.datePublication|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Cover</th>
                <td>{{ issue.cover }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('issue_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('issue_edit', { 'id': issue.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "issue/show.html.twig", "/var/www/html/symfony-project/symfony/app/Resources/views/issue/show.html.twig");
    }
}
