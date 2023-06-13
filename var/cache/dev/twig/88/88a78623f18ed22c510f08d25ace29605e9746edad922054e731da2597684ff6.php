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

/* respo/promotion/index.html.twig */
class __TwigTemplate_8bacc3bf1043e72aae30843b999e64335f7d1b8ee32c9d1c1db8ce64bed1ff8d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "respo/promotion/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "respo/promotion/index.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<title>
\t\t\t";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"/css/categorie.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
\t</head>
\t<body>
\t\t";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gérer les Promotions

\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
\t\t\t<h1>Gérer les Promotions</h1>
\t\t\t<div class=\"col\">
\t\t\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promotion_ajout_promotion");
        echo "\" class=\"btn blue\">
\t\t\t\t\tAjouter un promotion
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"responsive-table\">
\t\t\t\t<table class=\"table striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Nom de la régle</th>
\t\t\t\t\t\t\t<th>Nom sur la boutique</th>
\t\t\t\t\t\t\t<th>Répétition</th>
\t\t\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t<th>Montant
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>Choix
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
            // line 39
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "firstName", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "lastNAme", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "repetition", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "quantite", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "type", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "Montant", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">

\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promotion_modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"btn blue\" id=\"edit\">

\t\t\t\t\t\t\t\t\t\tModifier</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn rounded-1 primary press modal-trigger\" data-target=\"modal-delete\" data-id=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\" data-nom=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "firstName", [], "any", false, false, false, 54), "html", null, true);
            echo "\" id=\"supprimer\">Supprimer</a>

\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"modal shadow-1 white falling\" id=\"modal-delete\" data-ax=\"modal\">
\t\t\t\t\t<div class=\"modal-header\">Supprimer un promotion</div>

\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t<div class=\"modal-content\"></div>

\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t<div class=\"modal-footer \">

\t\t\t\t\t\t<a href=\"\" class=\"btn red\">Valider</a>
\t\t\t\t\t\t<button data-target=\"modal-delete\" class=\"ml-auto btn shadow-1 rounded-1 small primary modal-trigger\">Close</button>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "\t\t\t<script>
\t\t\t\twindow.onload = () => {
let modal = new Axentix.Modal('#modal-delete');
let activer = document.querySelectorAll(\"[type=checkbox]\")
for (let bouton of activer) {
bouton.addEventListener(\"click\", function () {
let xmlhttp = new XMLHttpRequest;
xmlhttp.open(\"get\", `/respo/Categories/activer/\${
this.dataset.id
}`)
xmlhttp.send()
})
}

let supprimer = document.querySelectorAll(\".modal-trigger\")
for (let bouton of supprimer) {
bouton.addEventListener(\"click\", function () {
document.querySelector(\".modal-footer a\").href = `/promotion/supprimer/\${
this.dataset.id
}`
document.querySelector(\".modal-content\").innerText = `Etes-vous sur(e) de vouloir supprimer le promotion \"\${
this.dataset.firstName
}\"`
})
}


}
\t\t\t</script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "respo/promotion/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  238 => 83,  228 => 82,  197 => 60,  183 => 54,  177 => 51,  170 => 47,  165 => 45,  161 => 44,  157 => 43,  153 => 42,  149 => 41,  145 => 40,  142 => 39,  138 => 38,  113 => 16,  108 => 13,  98 => 12,  77 => 4,  65 => 113,  62 => 82,  60 => 12,  53 => 7,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t\t<title>
\t\t\t{% block title %}Gérer les Promotions

\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"/css/categorie.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
\t</head>
\t<body>
\t\t{% block body %}

\t\t\t<h1>Gérer les Promotions</h1>
\t\t\t<div class=\"col\">
\t\t\t\t<a href=\"{{path(\"promotion_ajout_promotion\")}}\" class=\"btn blue\">
\t\t\t\t\tAjouter un promotion
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"responsive-table\">
\t\t\t\t<table class=\"table striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Nom de la régle</th>
\t\t\t\t\t\t\t<th>Nom sur la boutique</th>
\t\t\t\t\t\t\t<th>Répétition</th>
\t\t\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t<th>Montant
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>Choix
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for promo  in promotions %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{promo.id}}</td>
\t\t\t\t\t\t\t\t<td>{{promo.firstName}}</td>
\t\t\t\t\t\t\t\t<td>{{promo.lastNAme}}</td>
\t\t\t\t\t\t\t\t<td>{{promo.repetition}}</td>
\t\t\t\t\t\t\t\t<td>{{promo.quantite}}</td>
\t\t\t\t\t\t\t\t<td>{{promo.type}}</td>

\t\t\t\t\t\t\t\t<td>{{promo.Montant}}</td>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">

\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"promotion_modifier\", {id: promo.id}) }}\" class=\"btn blue\" id=\"edit\">

\t\t\t\t\t\t\t\t\t\tModifier</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn rounded-1 primary press modal-trigger\" data-target=\"modal-delete\" data-id=\"{{promo.id}}\" data-nom=\"{{promo.firstName}}\" id=\"supprimer\">Supprimer</a>

\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"modal shadow-1 white falling\" id=\"modal-delete\" data-ax=\"modal\">
\t\t\t\t\t<div class=\"modal-header\">Supprimer un promotion</div>

\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t<div class=\"modal-content\"></div>

\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t<div class=\"modal-footer \">

\t\t\t\t\t\t<a href=\"\" class=\"btn red\">Valider</a>
\t\t\t\t\t\t<button data-target=\"modal-delete\" class=\"ml-auto btn shadow-1 rounded-1 small primary modal-trigger\">Close</button>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>
\t\t{% endblock %}
\t\t{% block javascripts %}
\t\t\t<script>
\t\t\t\twindow.onload = () => {
let modal = new Axentix.Modal('#modal-delete');
let activer = document.querySelectorAll(\"[type=checkbox]\")
for (let bouton of activer) {
bouton.addEventListener(\"click\", function () {
let xmlhttp = new XMLHttpRequest;
xmlhttp.open(\"get\", `/respo/Categories/activer/\${
this.dataset.id
}`)
xmlhttp.send()
})
}

let supprimer = document.querySelectorAll(\".modal-trigger\")
for (let bouton of supprimer) {
bouton.addEventListener(\"click\", function () {
document.querySelector(\".modal-footer a\").href = `/promotion/supprimer/\${
this.dataset.id
}`
document.querySelector(\".modal-content\").innerText = `Etes-vous sur(e) de vouloir supprimer le promotion \"\${
this.dataset.firstName
}\"`
})
}


}
\t\t\t</script>
\t\t{% endblock %}
\t</body>
</html>
", "respo/promotion/index.html.twig", "C:\\laragon\\www\\scooptest\\templates\\respo\\promotion\\index.html.twig");
    }
}
