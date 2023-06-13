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

/* responsable/dashboard/cataloge.html.twig */
class __TwigTemplate_1c50a0e10cb0e5890852cb90a40a2a761d63571d651ac17e52eef51bc526cace extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/cataloge.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/cataloge.html.twig"));

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
        // line 73
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
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

        echo "Gérer les catégories

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
        echo "\t\t\t<h1>Gérer les catégories</h1>
\t\t\t<div class=\"col\">
\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respo_categories_ajout");
        echo "\" class=\"btn blue\">
\t\t\t\t\tAjouter une catégorie</a>
\t\t\t</div>
\t\t\t<div class=\"responsive-table\">
\t\t\t\t<table class=\"table striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Parent</th>
\t\t\t\t\t\t\t<th>Couleur</th>
\t\t\t\t\t\t\t<th>Active</th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 32
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "parents", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "couleur", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"form-switch mt-2\">

\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" ";
            // line 40
            echo ((twig_get_attribute($this->env, $this->source, $context["categorie"], "active", [], "any", false, false, false, 40)) ? ("checked") : (""));
            echo " data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"slider\"></span>

\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respo_Categories_modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn blue\" id=\"edit\">
\t\t\t\t\t\t\t\t\t\tModifier</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn rounded-1 primary press modal-trigger\" data-target=\"modal-delete-cat\" data-id=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\" data-nom=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 49), "html", null, true);
            echo "\" id=\"supprimer\">Supprimer</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t\t</tbody>

\t\t\t\t</table>
\t\t\t\t<div class=\"modal shadow-1 white falling\" id=\"modal-delete-cat\" data-ax=\"modal\">
\t\t\t\t\t<div class=\"modal-header\">Supprimer une categorie</div>

\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t<div class=\"modal-content\"></div>

\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<a href=\"\" class=\"btn red\">Valider</a>
\t\t\t\t\t\t<button data-target=\"modal-delete-cat\" class=\"ml-auto btn shadow-1 rounded-1 small primary modal-trigger\">Close</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "\t\t\t<script>
\t\t\t\twindow.onload = () => {

let modal = new Axentix.Modal('#modal-delete-cat');
let activer = document.querySelectorAll(\"[type=checkbox]\")
for (let bouton of activer) {
bouton.addEventListener(\"click\", function () {
let xmlhttp = new XMLHttpRequest;
xmlhttp.open(\"get\", `/respo/Categories/activerCat/\${
this.dataset.id
}`)
xmlhttp.send()
})
}

let supprimerCat = document.querySelectorAll(\".modal-trigger\")
for (let bouton of supprimerCat) {
bouton.addEventListener(\"click\", function () {
document.querySelector(\".modal-footer a\").href = `/respo/Categories/supprimerCat/\${
this.dataset.id
}`
document.querySelector(\".modal-content\").innerText = `Etes-vous sur(e) de vouloir supprimer la categorie \"\${
this.dataset.nom
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
        return "responsable/dashboard/cataloge.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  225 => 74,  215 => 73,  186 => 53,  174 => 49,  169 => 47,  157 => 40,  150 => 36,  146 => 35,  142 => 34,  138 => 33,  135 => 32,  131 => 31,  112 => 15,  108 => 13,  98 => 12,  77 => 4,  65 => 104,  62 => 73,  60 => 12,  53 => 7,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t\t<title>
\t\t\t{% block title %}Gérer les catégories

\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"/css/categorie.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
\t</head>
\t<body>
\t\t{% block body %}
\t\t\t<h1>Gérer les catégories</h1>
\t\t\t<div class=\"col\">
\t\t\t\t<a href=\"{{path(\"respo_categories_ajout\")}}\" class=\"btn blue\">
\t\t\t\t\tAjouter une catégorie</a>
\t\t\t</div>
\t\t\t<div class=\"responsive-table\">
\t\t\t\t<table class=\"table striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Parent</th>
\t\t\t\t\t\t\t<th>Couleur</th>
\t\t\t\t\t\t\t<th>Active</th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for categorie  in categories %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{categorie.id}}</td>
\t\t\t\t\t\t\t\t<td>{{categorie.nom}}</td>
\t\t\t\t\t\t\t\t<td>{{categorie.parents}}</td>
\t\t\t\t\t\t\t\t<td>{{categorie.couleur}}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"form-switch mt-2\">

\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" {{(categorie.active) ? 'checked' : ''}} data-id=\"{{categorie.id}}\">
\t\t\t\t\t\t\t\t\t\t<span class=\"slider\"></span>

\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"respo_Categories_modifier\", {id: categorie.id}) }}\" class=\"btn blue\" id=\"edit\">
\t\t\t\t\t\t\t\t\t\tModifier</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn rounded-1 primary press modal-trigger\" data-target=\"modal-delete-cat\" data-id=\"{{categorie.id}}\" data-nom=\"{{categorie.nom}}\" id=\"supprimer\">Supprimer</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>

\t\t\t\t</table>
\t\t\t\t<div class=\"modal shadow-1 white falling\" id=\"modal-delete-cat\" data-ax=\"modal\">
\t\t\t\t\t<div class=\"modal-header\">Supprimer une categorie</div>

\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t<div class=\"modal-content\"></div>

\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<a href=\"\" class=\"btn red\">Valider</a>
\t\t\t\t\t\t<button data-target=\"modal-delete-cat\" class=\"ml-auto btn shadow-1 rounded-1 small primary modal-trigger\">Close</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>
\t\t{% endblock %}
\t\t{% block javascripts %}
\t\t\t<script>
\t\t\t\twindow.onload = () => {

let modal = new Axentix.Modal('#modal-delete-cat');
let activer = document.querySelectorAll(\"[type=checkbox]\")
for (let bouton of activer) {
bouton.addEventListener(\"click\", function () {
let xmlhttp = new XMLHttpRequest;
xmlhttp.open(\"get\", `/respo/Categories/activerCat/\${
this.dataset.id
}`)
xmlhttp.send()
})
}

let supprimerCat = document.querySelectorAll(\".modal-trigger\")
for (let bouton of supprimerCat) {
bouton.addEventListener(\"click\", function () {
document.querySelector(\".modal-footer a\").href = `/respo/Categories/supprimerCat/\${
this.dataset.id
}`
document.querySelector(\".modal-content\").innerText = `Etes-vous sur(e) de vouloir supprimer la categorie \"\${
this.dataset.nom
}\"`
})
}

}
\t\t\t</script>
\t\t{% endblock %}
\t</body>
</html>
", "responsable/dashboard/cataloge.html.twig", "C:\\laragon\\www\\scooptest\\templates\\responsable\\dashboard\\cataloge.html.twig");
    }
}
