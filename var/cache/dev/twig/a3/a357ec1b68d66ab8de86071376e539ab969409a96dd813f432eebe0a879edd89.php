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

/* resultat/index.html.twig */
class __TwigTemplate_d41df9ca4b5c225d48b20353bacada0e0f12d7976ca94d0cdb2a15323b4d71bd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resultat/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resultat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "resultat/index.html.twig", 1);
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

        echo "Liste des Calendriers";
        
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
                        <th>medaille</th>
                        <th> rang</th>
                        <th> temps</th>
                        <th> ecart</th>
                        <th> vitesse</th>
                        <th> \$poids</th>
                        <th> nombre participants</th>
                         <th> id athlete</th>
                         <th> id epreuve</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultats"]) || array_key_exists("resultats", $context) ? $context["resultats"] : (function () { throw new RuntimeError('Variable "resultats" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["resultat"]) {
            // line 40
            echo "                        <tr>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getMedaille", [], "method", false, false, false, 41), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getRang", [], "method", false, false, false, 42), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getTemps", [], "method", false, false, false, 43), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getEcart", [], "method", false, false, false, 44), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getVitesse", [], "method", false, false, false, 45), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getPoids", [], "method", false, false, false, 46), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getNombreParticipants", [], "method", false, false, false, 47), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getIdAthlete", [], "method", false, false, false, 48), "html", null, true);
            echo "</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getIdEpreuve", [], "method", false, false, false, 49), "html", null, true);
            echo "</td>


                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
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
        return "resultat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 54,  163 => 49,  159 => 48,  155 => 47,  151 => 46,  147 => 45,  143 => 44,  139 => 43,  135 => 42,  131 => 41,  128 => 40,  124 => 39,  106 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Calendriers{% endblock %}

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
                        <th>medaille</th>
                        <th> rang</th>
                        <th> temps</th>
                        <th> ecart</th>
                        <th> vitesse</th>
                        <th> \$poids</th>
                        <th> nombre participants</th>
                         <th> id athlete</th>
                         <th> id epreuve</th>
                    </tr>
                </thead>
                <tbody>
                    {% for resultat in resultats %}
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
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>



{% endblock %}
", "resultat/index.html.twig", "/home/sow/symfony/TP-Athletisme-crud-symfony/templates/resultat/index.html.twig");
    }
}
