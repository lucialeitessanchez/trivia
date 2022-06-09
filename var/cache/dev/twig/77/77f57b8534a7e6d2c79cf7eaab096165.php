<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pregunta/show.html.twig */
class __TwigTemplate_dfd4e0d54afcabc0c8db140c9d97f796 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pregunta/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pregunta/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pregunta/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pregunta";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Pregunta</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Idpregunta</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["preguntum"]) || array_key_exists("preguntum", $context) ? $context["preguntum"] : (function () { throw new RuntimeError('Variable "preguntum" does not exist.', 12, $this->source); })()), "idpregunta", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Parametromedicion</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["preguntum"]) || array_key_exists("preguntum", $context) ? $context["preguntum"] : (function () { throw new RuntimeError('Variable "preguntum" does not exist.', 16, $this->source); })()), "parametromedicion", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rojo</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["preguntum"]) || array_key_exists("preguntum", $context) ? $context["preguntum"] : (function () { throw new RuntimeError('Variable "preguntum" does not exist.', 20, $this->source); })()), "rojo", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Amarillo</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["preguntum"]) || array_key_exists("preguntum", $context) ? $context["preguntum"] : (function () { throw new RuntimeError('Variable "preguntum" does not exist.', 24, $this->source); })()), "amarillo", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Verde</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["preguntum"]) || array_key_exists("preguntum", $context) ? $context["preguntum"] : (function () { throw new RuntimeError('Variable "preguntum" does not exist.', 28, $this->source); })()), "verde", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 32
        ((twig_get_attribute($this->env, $this->source, (isset($context["preguntum"]) || array_key_exists("preguntum", $context) ? $context["preguntum"] : (function () { throw new RuntimeError('Variable "preguntum" does not exist.', 32, $this->source); })()), "fecha", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["preguntum"]) || array_key_exists("preguntum", $context) ? $context["preguntum"] : (function () { throw new RuntimeError('Variable "preguntum" does not exist.', 32, $this->source); })()), "fecha", [], "any", false, false, false, 32), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pregunta_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pregunta_edit", ["idpregunta" => twig_get_attribute($this->env, $this->source, (isset($context["preguntum"]) || array_key_exists("preguntum", $context) ? $context["preguntum"] : (function () { throw new RuntimeError('Variable "preguntum" does not exist.', 39, $this->source); })()), "idpregunta", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "pregunta/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pregunta/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 41,  144 => 39,  139 => 37,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pregunta{% endblock %}

{% block body %}
    <h1>Pregunta</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Idpregunta</th>
                <td>{{ preguntum.idpregunta }}</td>
            </tr>
            <tr>
                <th>Parametromedicion</th>
                <td>{{ preguntum.parametromedicion }}</td>
            </tr>
            <tr>
                <th>Rojo</th>
                <td>{{ preguntum.rojo }}</td>
            </tr>
            <tr>
                <th>Amarillo</th>
                <td>{{ preguntum.amarillo }}</td>
            </tr>
            <tr>
                <th>Verde</th>
                <td>{{ preguntum.verde }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{ preguntum.fecha ? preguntum.fecha|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_pregunta_index') }}\">back to list</a>

    <a href=\"{{ path('app_pregunta_edit', {'idpregunta': preguntum.idpregunta}) }}\">edit</a>

    {{ include('pregunta/_delete_form.html.twig') }}
{% endblock %}
", "pregunta/show.html.twig", "/home/lucia/public_html/trivia/templates/pregunta/show.html.twig");
    }
}
