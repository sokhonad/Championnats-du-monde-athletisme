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

/* athlete/index.html.twig */
class __TwigTemplate_89b0ada5e3b42866ef123aed4a3584eba5f656d964ed636027eef97b52bb9e74 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "athlete/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "athlete/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "athlete/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des athletes";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <style>
        .example-wrapper {
            margin: 1em auto;
            max-width: 990px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }

        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
    </style>

    <div class=\"example-wrapper\">
        ";
        // line 23
        echo "        <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>sexe</th>
                        <th>nationalité</th>
                        <th>poids</th>
                        <th>code pays</th>
                        <th>taille</th>
                        <th>ville</th>


                    </tr>
                </thead>
                <tbody>
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["athletes"]) || array_key_exists("athletes", $context) ? $context["athletes"] : (function () { throw new RuntimeError('Variable "athletes" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["athlete"]) {
            // line 42
            echo "                        <tr>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "getId", [], "method", false, false, false, 43), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "getNomAthlete", [], "method", false, false, false, 44), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "getPrenomAthlete", [], "method", false, false, false, 45), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "getSexeAthlete", [], "method", false, false, false, 46), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "getNationaliteAthlete", [], "method", false, false, false, 47), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "getPoidsAthlete", [], "method", false, false, false, 48), "html", null, true);
            echo "</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "getCodePaysAthlete", [], "method", false, false, false, 49), "html", null, true);
            echo "</td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "getTailleAthlete", [], "method", false, false, false, 50), "html", null, true);
            echo "</td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["athlete"], "getVilleAthlete", [], "method", false, false, false, 51), "html", null, true);
            echo "</td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['athlete'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "athlete/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 55,  165 => 51,  161 => 50,  157 => 49,  153 => 48,  149 => 47,  145 => 46,  141 => 45,  137 => 44,  133 => 43,  130 => 42,  126 => 41,  106 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des athletes{% endblock %}

{% block body %}

    <style>
        .example-wrapper {
            margin: 1em auto;
            max-width: 990px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }

        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
    </style>

    <div class=\"example-wrapper\">
        {# <h1>Hello {{ athletes }}! ✅</h1> #}
        <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>sexe</th>
                        <th>nationalité</th>
                        <th>poids</th>
                        <th>code pays</th>
                        <th>taille</th>
                        <th>ville</th>


                    </tr>
                </thead>
                <tbody>
                    {% for athlete in athletes %}
                        <tr>
                            <td>{{ athlete.getId() }}</td>
                            <td>{{ athlete.getNomAthlete() }}</td>
                            <td>{{ athlete.getPrenomAthlete() }}</td>
                            <td>{{ athlete.getSexeAthlete() }}</td>
                            <td>{{ athlete.getNationaliteAthlete() }}</td>
                            <td>{{ athlete.getPoidsAthlete() }}</td>
                            <td>{{ athlete.getCodePaysAthlete() }}</td>
                            <td>{{ athlete.getTailleAthlete() }}</td>
                            <td>{{ athlete.getVilleAthlete() }}</td>

                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>


{% endblock %}
", "athlete/index.html.twig", "/home/sow/symfony/TP-Athletisme-crud-symfony/templates/athlete/index.html.twig");
    }
}
