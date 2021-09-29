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

/* resultat/showResultatById.html.twig */
class __TwigTemplate_5363681bf253c1ad82180aa59c2576f8d4e701c8e5fcf7c0fac888ed4c59a328 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resultat/showResultatById.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resultat/showResultatById.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "resultat/showResultatById.html.twig", 1);
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

        echo "L'information d'un resultat";
        
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
            max-width: 800px;
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
                        <th>medaille</th>
                        <th> rang</th>
                        <th> temps</th>
                        <th> ecart</th>
                        <th> vitesse</th>
                        <th>  poids</th>
                        <th> nombre participants</th>
                        <th> id athlete</th>
                        <th> id epreuve</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 41, $this->source); })()), "getMedaille", [], "method", false, false, false, 41), "html", null, true);
        echo "</td>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 42, $this->source); })()), "getRang", [], "method", false, false, false, 42), "html", null, true);
        echo "</td>
                        <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 43, $this->source); })()), "getTemps", [], "method", false, false, false, 43), "html", null, true);
        echo "</td>
                        <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 44, $this->source); })()), "getEcart", [], "method", false, false, false, 44), "html", null, true);
        echo "</td>
                        <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 45, $this->source); })()), "getVitesse", [], "method", false, false, false, 45), "html", null, true);
        echo "</td>
                        <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 46, $this->source); })()), "getPoids", [], "method", false, false, false, 46), "html", null, true);
        echo "</td>
                        <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 47, $this->source); })()), "getNombreParticipants", [], "method", false, false, false, 47), "html", null, true);
        echo "</td>
                        <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 48, $this->source); })()), "getIdAthlete", [], "method", false, false, false, 48), "html", null, true);
        echo "</td>
                        <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new RuntimeError('Variable "resultat" does not exist.', 49, $this->source); })()), "getIdEpreuve", [], "method", false, false, false, 49), "html", null, true);
        echo "</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "resultat/showResultatById.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 49,  154 => 48,  150 => 47,  146 => 46,  142 => 45,  138 => 44,  134 => 43,  130 => 42,  126 => 41,  106 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}L'information d'un resultat{% endblock %}

{% block body %}

    <style>
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
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
                        <th>medaille</th>
                        <th> rang</th>
                        <th> temps</th>
                        <th> ecart</th>
                        <th> vitesse</th>
                        <th>  poids</th>
                        <th> nombre participants</th>
                        <th> id athlete</th>
                        <th> id epreuve</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ resultat.getMedaille() }}</td>
                        <td>{{ resultat.getRang() }}</td>
                        <td>{{ resultat.getTemps() }}</td>
                        <td>{{ resultat.getEcart() }}</td>
                        <td>{{ resultat.getVitesse() }}</td>
                        <td>{{ resultat.getPoids() }}</td>
                        <td>{{ resultat.getNombreParticipants() }}</td>
                        <td>{{ resultat.getIdAthlete() }}</td>
                        <td>{{ resultat.getIdEpreuve() }}</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>


{% endblock %}
", "resultat/showResultatById.html.twig", "/home/sow/symfony/TP-Athletisme-crud-symfony/templates/resultat/showResultatById.html.twig");
    }
}
