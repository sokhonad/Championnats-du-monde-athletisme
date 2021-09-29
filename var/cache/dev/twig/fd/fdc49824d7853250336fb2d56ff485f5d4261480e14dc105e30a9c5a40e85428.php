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
class __TwigTemplate_cdc31f72da8338474e17ea948643653364aaf7ab1b98813e4a86cb4d1f974582 extends Template
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
        <a  href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resultat_create");
        echo "\"><button type='button' class='btn btn-info'>crée nouvelle resultat</button></a>
        <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>medaille</th>
                        <th> rang</th>
                        <th> temps</th>
";
        // line 32
        echo "                        <th> poids</th>
                        <th> nombre participants</th>
                         <th> id athlete</th>
                         <th> id epreuve</th>
                        <th>moddifier</th>
                        <th>supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultats"]) || array_key_exists("resultats", $context) ? $context["resultats"] : (function () { throw new RuntimeError('Variable "resultats" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["resultat"]) {
            // line 42
            echo "                        <tr>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getMedaille", [], "method", false, false, false, 43), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getRang", [], "method", false, false, false, 44), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getTemps", [], "method", false, false, false, 45), "html", null, true);
            echo "</td>
";
            // line 48
            echo "                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getPoids", [], "method", false, false, false, 48), "html", null, true);
            echo "</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getNombreParticipants", [], "method", false, false, false, 49), "html", null, true);
            echo "</td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getIdAthlete", [], "method", false, false, false, 50), "html", null, true);
            echo "</td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resultat"], "getIdEpreuve", [], "method", false, false, false, 51), "html", null, true);
            echo "</td>
                            <td><a  href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resultat_modification", ["id" => twig_get_attribute($this->env, $this->source, $context["resultat"], "getId", [], "method", false, false, false, 52)]), "html", null, true);
            echo "\"><button type='button' class='btn btn-info'>modifier</button></a> </td>
                            <td><a  href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteById_resultat", ["id" => twig_get_attribute($this->env, $this->source, $context["resultat"], "getId", [], "method", false, false, false, 53)]), "html", null, true);
            echo "\"><button type='button' class='btn btn-danger'>supprimer</button></a> </td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
        return array (  178 => 57,  168 => 53,  164 => 52,  160 => 51,  156 => 50,  152 => 49,  147 => 48,  143 => 45,  139 => 44,  135 => 43,  132 => 42,  128 => 41,  117 => 32,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
        <a  href=\"{{ path('resultat_create') }}\"><button type='button' class='btn btn-info'>crée nouvelle resultat</button></a>
        <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>medaille</th>
                        <th> rang</th>
                        <th> temps</th>
{#                        <th> ecart</th>#}
{#                        <th> vitesse</th>#}
                        <th> poids</th>
                        <th> nombre participants</th>
                         <th> id athlete</th>
                         <th> id epreuve</th>
                        <th>moddifier</th>
                        <th>supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    {% for resultat in resultats %}
                        <tr>
                            <td>{{ resultat.getMedaille() }}</td>
                            <td>{{ resultat.getRang() }}</td>
                            <td>{{ resultat.getTemps() }}</td>
{#                            <td>{{ resultat.getEcart() }}</td>#}
{#                            <td>{{ resultat.getVitesse() }}</td>#}
                            <td>{{ resultat.getPoids() }}</td>
                            <td>{{ resultat.getNombreParticipants() }}</td>
                            <td>{{ resultat.getIdAthlete() }}</td>
                            <td>{{ resultat.getIdEpreuve() }}</td>
                            <td><a  href=\"{{ path('resultat_modification',{'id':resultat.getId()}) }}\"><button type='button' class='btn btn-info'>modifier</button></a> </td>
                            <td><a  href=\"{{ path('deleteById_resultat',{'id':resultat.getId()}) }}\"><button type='button' class='btn btn-danger'>supprimer</button></a> </td>

                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>



{% endblock %}
", "resultat/index.html.twig", "/home/sokhona/L3_Informatique/semestre2/PHP/tp-symfony/TP-Athletisme-crud-symfony/templates/resultat/index.html.twig");
    }
}
