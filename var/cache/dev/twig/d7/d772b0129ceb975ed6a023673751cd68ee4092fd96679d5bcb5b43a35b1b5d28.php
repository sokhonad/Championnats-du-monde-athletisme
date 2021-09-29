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

/* athlete/index1.html.twig */
class __TwigTemplate_16c5171045277175ad8a11b519372e6c567d8f9c856a4087d69b0cd912b24585 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "athlete/index1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "athlete/index1.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "athlete/index1.html.twig", 1);
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



    <div align=\"center\">

        <h1> Bienvenue sur notre site web Championnats du monde d'athlétisme</h1>


        <h2 align=\"justify\"></h2>

        <h3 align=\"justify\"> Les Championnats du monde d'athlétisme sont une compétition biennale en plein air organisée
            par la WA qui
            désigne un champion du monde pour chaque discipline majeure de l'athlétisme. Il s'agit du troisième plus
            grand événement sportif
            dans le monde après les Jeux olympiques et la Coupe du monde de football en termes de téléspectateurs et
            d'impact médiatique. À leur
            création en 1983, les championnats avaient lieu tous les quatre ans, ils ont lieu tous les deux ans depuis
            1991. Par ailleurs, les Championnats
            du monde d'athlétisme en salle et les Championnats du monde juniors sont disputés en alternance.
            Allyson Felix est l'athlète la plus titrée des championnats du monde, avec seize médailles, dont treize en
            or remportées entre 2005
            et 2019. Chez les hommes, le record appartient à Usain Bolt avec onze titres de 2009 à 2017, alors que le
            perchiste Sergueï Bubka est le
            seul champion du monde à avoir conservé un titre pendant six championnats consécutifs. </h3>

    </div>

    <style>
        .aut {
            align-content: center;
            background-color: cyan;
            border: 2px solid black;
            font-style: italic;
            font-weight: bold;
            text-shadow: 6px 6px 6px black;
            float: left;
            bottom: 0;

            width: 40%;
            height: 20%;
        }
    </style>
    <div class=\"aut\">
        <h5> Auteurs du site </h5>

        <h1> Diakarou Sokhona</h1> <br/>

        <h1> Sow Ibrahima</h1>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "athlete/index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Calendriers{% endblock %}

{% block body %}




    <div align=\"center\">

        <h1> Bienvenue sur notre site web Championnats du monde d'athlétisme</h1>


        <h2 align=\"justify\"></h2>

        <h3 align=\"justify\"> Les Championnats du monde d'athlétisme sont une compétition biennale en plein air organisée
            par la WA qui
            désigne un champion du monde pour chaque discipline majeure de l'athlétisme. Il s'agit du troisième plus
            grand événement sportif
            dans le monde après les Jeux olympiques et la Coupe du monde de football en termes de téléspectateurs et
            d'impact médiatique. À leur
            création en 1983, les championnats avaient lieu tous les quatre ans, ils ont lieu tous les deux ans depuis
            1991. Par ailleurs, les Championnats
            du monde d'athlétisme en salle et les Championnats du monde juniors sont disputés en alternance.
            Allyson Felix est l'athlète la plus titrée des championnats du monde, avec seize médailles, dont treize en
            or remportées entre 2005
            et 2019. Chez les hommes, le record appartient à Usain Bolt avec onze titres de 2009 à 2017, alors que le
            perchiste Sergueï Bubka est le
            seul champion du monde à avoir conservé un titre pendant six championnats consécutifs. </h3>

    </div>

    <style>
        .aut {
            align-content: center;
            background-color: cyan;
            border: 2px solid black;
            font-style: italic;
            font-weight: bold;
            text-shadow: 6px 6px 6px black;
            float: left;
            bottom: 0;

            width: 40%;
            height: 20%;
        }
    </style>
    <div class=\"aut\">
        <h5> Auteurs du site </h5>

        <h1> Diakarou Sokhona</h1> <br/>

        <h1> Sow Ibrahima</h1>
    </div>
{% endblock %}
", "athlete/index1.html.twig", "/home/sow/symfony/TP-Athletisme-crud-symfony/templates/athlete/index1.html.twig");
    }
}
