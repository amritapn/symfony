<?php

/* issue/index.html.twig */
class __TwigTemplate_9f66de1258c35295d5d023f2ae87f7210c2a244074c02bc5bd173213a6094a24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "issue/index.html.twig", 1);
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
        $__internal_65fe11f89b3cd7f35a66eab3a20765ead5255ec8ec5a7da28f27ad30ded620d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65fe11f89b3cd7f35a66eab3a20765ead5255ec8ec5a7da28f27ad30ded620d9->enter($__internal_65fe11f89b3cd7f35a66eab3a20765ead5255ec8ec5a7da28f27ad30ded620d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "issue/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65fe11f89b3cd7f35a66eab3a20765ead5255ec8ec5a7da28f27ad30ded620d9->leave($__internal_65fe11f89b3cd7f35a66eab3a20765ead5255ec8ec5a7da28f27ad30ded620d9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4986b278929ac059093185bd38d0b7d54054f0544bf367e9f20466ece0ab6a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4986b278929ac059093185bd38d0b7d54054f0544bf367e9f20466ece0ab6a12->enter($__internal_4986b278929ac059093185bd38d0b7d54054f0544bf367e9f20466ece0ab6a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Issues list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Number</th>
                <th>Datepublication</th>
                <th>Cover</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["issues"]) ? $context["issues"] : $this->getContext($context, "issues")));
        foreach ($context['_seq'] as $context["_key"] => $context["issue"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("issue_show", array("id" => $this->getAttribute($context["issue"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["issue"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["issue"], "number", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["issue"], "datePublication", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["issue"], "datePublication", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["issue"], "cover", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("issue_show", array("id" => $this->getAttribute($context["issue"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("issue_edit", array("id" => $this->getAttribute($context["issue"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['issue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("issue_new");
        echo "\">Create a new issue</a>
        </li>
    </ul>
";
        
        $__internal_4986b278929ac059093185bd38d0b7d54054f0544bf367e9f20466ece0ab6a12->leave($__internal_4986b278929ac059093185bd38d0b7d54054f0544bf367e9f20466ece0ab6a12_prof);

    }

    public function getTemplateName()
    {
        return "issue/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  103 => 35,  91 => 29,  85 => 26,  78 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Issues list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Number</th>
                <th>Datepublication</th>
                <th>Cover</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for issue in issues %}
            <tr>
                <td><a href=\"{{ path('issue_show', { 'id': issue.id }) }}\">{{ issue.id }}</a></td>
                <td>{{ issue.number }}</td>
                <td>{% if issue.datePublication %}{{ issue.datePublication|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ issue.cover }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('issue_show', { 'id': issue.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('issue_edit', { 'id': issue.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('issue_new') }}\">Create a new issue</a>
        </li>
    </ul>
{% endblock %}
", "issue/index.html.twig", "/var/www/html/symfony-project/symfony/app/Resources/views/issue/index.html.twig");
    }
}
