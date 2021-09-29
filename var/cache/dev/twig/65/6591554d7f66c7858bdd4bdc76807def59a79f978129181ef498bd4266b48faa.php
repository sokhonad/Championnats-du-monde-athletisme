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

/* epreuve/index.html.twig */
class __TwigTemplate_8dd70e1023385bd10b3fbd7848009d5532eb5747733b9ba11b6f03d70bc20f9b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "epreuve/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "epreuve/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "epreuve/index.html.twig", 1);
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

        echo "Liste de Epreuves";
        
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
            max-width: 900px;
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("epreuve_create");
        echo "\"><button type='button' class='btn btn-info'>crée nouvelle epreuve</button></a>        <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>id epreuve</th>
                        <th>nom </th>
                        <th>heure </th>
                        <th>medaille </th>
                        <th>id competition</th>
                        <th>id categorie</th>
                        <th>modiffier</th>
                        <th>supprimer</th>

                    </tr>
                </thead>
                <tbody>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["epreuves"]) || array_key_exists("epreuves", $context) ? $context["epreuves"] : (function () { throw new RuntimeError('Variable "epreuves" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["epreuve"]) {
            // line 39
            echo "                        <tr>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epreuve"], "getId", [], "method", false, false, false, 40), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epreuve"], "getNomEpreuve", [], "method", false, false, false, 41), "html", null, true);
            echo "</td>
";
            // line 43
            echo "                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epreuve"], "getHeureEpreuve", [], "method", false, false, false, 43), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epreuve"], "getMedailleEpreuve", [], "method", false, false, false, 44), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epreuve"], "getIdCompetition", [], "method", false, false, false, 45), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epreuve"], "getIdCategorie", [], "method", false, false, false, 46), "html", null, true);
            echo "</td>
                            <td><a  href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("epreuve_modification", ["id" => twig_get_attribute($this->env, $this->source, $context["epreuve"], "getId", [], "method", false, false, false, 47)]), "html", null, true);
            echo "\"><button type='button' class='btn btn-info'>modifier</button></a> </td>
                            <td><a  href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteById_epreuve", ["id" => twig_get_attribute($this->env, $this->source, $context["epreuve"], "getId", [], "method", false, false, false, 48)]), "html", null, true);
            echo "\"><button type='button' class='btn btn-danger'>supprimer</button></a> </td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['epreuve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
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
        return "epreuve/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 52,  161 => 48,  157 => 47,  153 => 46,  149 => 45,  145 => 44,  140 => 43,  136 => 41,  132 => 40,  129 => 39,  125 => 38,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste de Epreuves{% endblock %}

{% block body %}

    <style>
        .example-wrapper {
            margin: 1em auto;
            max-width: 900px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }

        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
    </style>

    <div class=\"example-wrapper\">
        <a  href=\"{{ path('epreuve_create') }}\"><button type='button' class='btn btn-info'>crée nouvelle epreuve</button></a>        <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>id epreuve</th>
                        <th>nom </th>
                        <th>heure </th>
                        <th>medaille </th>
                        <th>id competition</th>
                        <th>id categorie</th>
                        <th>modiffier</th>
                        <th>supprimer</th>

                    </tr>
                </thead>
                <tbody>
                    {% for epreuve in epreuves %}
                        <tr>
                            <td>{{ epreuve.getId() }}</td>
                            <td>{{ epreuve.getNomEpreuve() }}</td>
{#                            <td>{{ epreuve.getDescription() }}</td>#}
                            <td>{{ epreuve.getHeureEpreuve() }}</td>
                            <td>{{ epreuve.getMedailleEpreuve() }}</td>
                            <td>{{ epreuve.getIdCompetition() }}</td>
                            <td>{{ epreuve.getIdCategorie() }}</td>
                            <td><a  href=\"{{ path('epreuve_modification',{'id':epreuve.getId()}) }}\"><button type='button' class='btn btn-info'>modifier</button></a> </td>
                            <td><a  href=\"{{ path('deleteById_epreuve',{'id':epreuve.getId()}) }}\"><button type='button' class='btn btn-danger'>supprimer</button></a> </td>

                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

{% endblock %}
", "epreuve/index.html.twig", "/home/sokhona/L3_Informatique/semestre2/PHP/tp-symfony/TP-Athletisme-crud-symfony/templates/epreuve/index.html.twig");
    }
}
