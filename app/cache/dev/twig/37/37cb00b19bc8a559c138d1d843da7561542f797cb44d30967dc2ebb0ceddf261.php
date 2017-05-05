<?php

/* publication/index.html.twig */
class __TwigTemplate_7360630b808af969326c6c37436f8e94c0315cb737fb2af5dcb046dfef0240a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "publication/index.html.twig", 1);
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
        $__internal_04a71144b215216a6e70853bcce9f6f13e5da4505cb3e6c2fbae6b484b49c57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a71144b215216a6e70853bcce9f6f13e5da4505cb3e6c2fbae6b484b49c57d->enter($__internal_04a71144b215216a6e70853bcce9f6f13e5da4505cb3e6c2fbae6b484b49c57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "publication/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04a71144b215216a6e70853bcce9f6f13e5da4505cb3e6c2fbae6b484b49c57d->leave($__internal_04a71144b215216a6e70853bcce9f6f13e5da4505cb3e6c2fbae6b484b49c57d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42c5dd59d0e4f882224765b3efd92df22772acb72f1918e3d39ff679575092dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c5dd59d0e4f882224765b3efd92df22772acb72f1918e3d39ff679575092dd->enter($__internal_42c5dd59d0e4f882224765b3efd92df22772acb72f1918e3d39ff679575092dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Publications list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publications"]) ? $context["publications"] : $this->getContext($context, "publications")));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publication_show", array("id" => $this->getAttribute($context["publication"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publication_show", array("id" => $this->getAttribute($context["publication"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publication_edit", array("id" => $this->getAttribute($context["publication"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publication_new");
        echo "\">Create a new publication</a>
        </li>
    </ul>
";
        
        $__internal_42c5dd59d0e4f882224765b3efd92df22772acb72f1918e3d39ff679575092dd->leave($__internal_42c5dd59d0e4f882224765b3efd92df22772acb72f1918e3d39ff679575092dd_prof);

    }

    public function getTemplateName()
    {
        return "publication/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Publications list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for publication in publications %}
            <tr>
                <td><a href=\"{{ path('publication_show', { 'id': publication.id }) }}\">{{ publication.id }}</a></td>
                <td>{{ publication.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('publication_show', { 'id': publication.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('publication_edit', { 'id': publication.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('publication_new') }}\">Create a new publication</a>
        </li>
    </ul>
{% endblock %}
", "publication/index.html.twig", "/var/www/html/symfony-project/symfony/app/Resources/views/publication/index.html.twig");
    }
}
