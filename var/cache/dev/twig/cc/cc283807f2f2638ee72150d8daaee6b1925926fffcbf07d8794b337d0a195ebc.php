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

/* responsable/dashboard/produit.html.twig */
class __TwigTemplate_2b939b657330f9f107c55ef14904446c27685c583b8a193333b7a5d02aba09ea extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/produit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/produit.html.twig"));

        // line 1
        echo "<html >
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
        // line 92
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
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

        echo "Gérer les produits

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
\t\t\t<h1>Gérer les Produits</h1>
\t\t\t<div class=\"col\">
\t\t\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respo_Categories_ajoutProduit");
        echo "\" class=\"btn blue\">
\t\t\t\t\tAjouter un produit
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"responsive-table\">
\t\t\t\t<table class=\"table striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t<th>Active</th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 36
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "creaAt", [], "any", false, false, false, 41)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["produit"], "images", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 44
                echo "\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 45))), "html", null, true);
                echo "\" alt=\"Image\" width=\"150\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respo_Categories_produit_delete_image", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" data-delete data-token=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 46))), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"form-switch mt-2\">

\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" ";
            // line 54
            echo ((twig_get_attribute($this->env, $this->source, $context["produit"], "active", [], "any", false, false, false, 54)) ? ("checked") : (""));
            echo " data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"slider\"></span>

\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respo_Categories_modifierProduit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"btn blue\" id=\"edit\">

\t\t\t\t\t\t\t\t\t\tModifier</a>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn rounded-1 primary press modal-trigger\" data-target=\"modal-delete\" data-id=\"";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\" data-nom=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 64), "html", null, true);
            echo "\" id=\"supprimer\">Supprimer</a>

\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"modal shadow-1 white falling\" id=\"modal-delete\" data-ax=\"modal\">
\t\t\t\t\t<div class=\"modal-header\">Supprimer un produit</div>

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

    // line 92
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
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
document.querySelector(\".modal-footer a\").href = `/respo/Categories/supprimer/\${
this.dataset.id
}`
document.querySelector(\".modal-content\").innerText = `Etes-vous sur(e) de vouloir supprimer le produit \"\${
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
        return "responsable/dashboard/produit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  265 => 93,  255 => 92,  224 => 70,  210 => 64,  203 => 60,  192 => 54,  185 => 49,  174 => 46,  170 => 45,  167 => 44,  163 => 43,  158 => 41,  154 => 40,  150 => 39,  146 => 38,  142 => 37,  139 => 36,  135 => 35,  113 => 16,  108 => 13,  98 => 12,  77 => 4,  65 => 123,  62 => 92,  60 => 12,  53 => 7,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html >
\t<head>
\t\t<title>
\t\t\t{% block title %}Gérer les produits

\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"/css/categorie.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
\t</head>
\t<body>
\t\t{% block body %}

\t\t\t<h1>Gérer les Produits</h1>
\t\t\t<div class=\"col\">
\t\t\t\t<a href=\"{{path(\"respo_Categories_ajoutProduit\")}}\" class=\"btn blue\">
\t\t\t\t\tAjouter un produit
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"responsive-table\">
\t\t\t\t<table class=\"table striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t<th>Active</th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for produit  in produits %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{produit.id}}</td>
\t\t\t\t\t\t\t\t<td>{{produit.nom}}</td>
\t\t\t\t\t\t\t\t<td>{{produit.description}}</td>
\t\t\t\t\t\t\t\t<td>{{produit.prix}}</td>
\t\t\t\t\t\t\t\t<td>{{produit.creaAt|date}}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% for image in produit.images %}
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('/uploads/' ~ image.nom)}}\" alt=\"Image\" width=\"150\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('respo_Categories_produit_delete_image', {'id': image.id}) }}\" data-delete data-token=\"{{ csrf_token('delete' ~ image.id) }}\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"form-switch mt-2\">

\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" {{(produit.active) ? 'checked' : ''}} data-id=\"{{produit.id}}\">
\t\t\t\t\t\t\t\t\t\t<span class=\"slider\"></span>

\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"respo_Categories_modifierProduit\", {id: produit.id}) }}\" class=\"btn blue\" id=\"edit\">

\t\t\t\t\t\t\t\t\t\tModifier</a>

\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn rounded-1 primary press modal-trigger\" data-target=\"modal-delete\" data-id=\"{{produit.id}}\" data-nom=\"{{produit.nom}}\" id=\"supprimer\">Supprimer</a>

\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"modal shadow-1 white falling\" id=\"modal-delete\" data-ax=\"modal\">
\t\t\t\t\t<div class=\"modal-header\">Supprimer un produit</div>

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
document.querySelector(\".modal-footer a\").href = `/respo/Categories/supprimer/\${
this.dataset.id
}`
document.querySelector(\".modal-content\").innerText = `Etes-vous sur(e) de vouloir supprimer le produit \"\${
this.dataset.nom
}\"`
})
}


}
\t\t\t</script>
\t\t{% endblock %}
\t</body>
</html>
", "responsable/dashboard/produit.html.twig", "C:\\laragon\\www\\scooptest\\templates\\responsable\\dashboard\\produit.html.twig");
    }
}
