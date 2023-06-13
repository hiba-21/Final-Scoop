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

/* Client/panier.html.twig */
class __TwigTemplate_de8fc9ad0e64e0f0a613a7998e022cf20852a23445b6bb9cdd6e145b9b881a18 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Client/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Client/panier.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>

\t\t<link rel=\"stylesheet\" href=\"/css/panier.css\"/>
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.2/css/all.css\"/>
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
\t\t<!-- CSS only -->
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/client.css\"><link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
\t</head>

\t<body>
\t\t<div class=\"home\">
\t\t\t<nav class=\"nav\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"/appClient\">
\t\t\t\t\t\t<img src=\"img/scoop.png\" class=\"logoImg\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"appClient\">
\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/produit\">
\t\t\t\t\t\t\tMenu
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/panier\">
\t\t\t\t\t\t\t<img src=\"/img/Shopping Cart.png\" class=\"ShoppingCart\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/conclient\">
\t\t\t\t\t\t\t<button class=\"loginBtn navBtn\">Connexion</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/insclient\">
\t\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">S'inscrire</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/etat\">
\t\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">L'etat</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t";
        // line 59
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 59, $this->source); })())), 0))) {
            // line 60
            echo "\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 70, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 71
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 72), "nom", [], "any", false, false, false, 72), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 73), "prix", [], "any", false, false, false, 73), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 74), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 75
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 75), "prix", [], "any", false, false, false, 75) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 75)), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"3\" class=\"text-right\">Total :
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 88, $this->source); })()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>

\t\t\t\t<div class=\"button\">


\t\t\t\t\t<button class=\"login navBtn  modal-trigger\" data-target=\"modal-example\">Valider</button>


\t\t\t\t\t<a href=\"/produit\">
\t\t\t\t\t\t<button class=\"signUp navBtn\">Continuer achats</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 106
            echo "\t\t\t<div class=\"main\">
\t\t\t\t<p>Surprise c'est vide !</p>
\t\t\t</div>
\t\t";
        }
        // line 110
        echo "\t\t<div class=\"modal shadow-1 white falling\" id=\"modal-example\" data-ax=\"modal\">
\t\t\t<div class=\"modal-header LeftSection homeSecondSection\">
\t\t\t\t<h3>Passer la commande</h3>
\t\t\t</div>

\t\t\t<div class=\"divider\"></div>

\t\t\t<div class=\"modal-content\">
\t\t\t\t";
        // line 118
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118)) {
            // line 119
            echo "\t\t\t\t\t<div class=\"homeSecondSection\">
\t\t\t\t\t\t<div class=\"LeftSection\">
\t\t\t\t\t\t\t<h4>Nom:
\t\t\t\t\t\t\t\t";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "Nom", [], "any", false, false, false, 122), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tAdresse:
\t\t\t\t\t\t\t\t";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126), "ville", [], "any", false, false, false, 126), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tNumero:
\t\t\t\t\t\t\t\t";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "numero", [], "any", false, false, false, 130), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 134
        echo "\t\t\t\t<br/>
\t\t\t\t<div class=\"panier\">
\t\t\t\t\t";
        // line 136
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 136, $this->source); })())), 0))) {
            // line 137
            echo "\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 147, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 148
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 149), "nom", [], "any", false, false, false, 149), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 150), "prix", [], "any", false, false, false, 150), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 151), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 152
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 152), "prix", [], "any", false, false, false, 152) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 152)), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"3\" class=\"text-right\">Total :
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 160
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 160, $this->source); })()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>

\t\t\t\t\t\t</table>

\t\t\t\t\t";
        }
        // line 168
        echo "

\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"divider\"></div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<a href=\"\" class=\"login navBtn\">Confirmer</a>
\t\t\t\t<button data-target=\"modal-example\" class=\"ml-auto btn shadow-1 rounded-1 small primary modal-trigger\">Close</button>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>

\t\t";
        // line 183
        $this->displayBlock('javascripts', $context, $blocks);
        // line 208
        echo "\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 183
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 184
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
document.querySelector(\".modal-footer a\").href = `/Valider/add`
document.querySelector(\".modal-content\").innerText
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
        return "Client/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 184,  321 => 183,  309 => 208,  307 => 183,  290 => 168,  279 => 160,  271 => 154,  263 => 152,  259 => 151,  255 => 150,  251 => 149,  248 => 148,  244 => 147,  232 => 137,  230 => 136,  226 => 134,  219 => 130,  212 => 126,  205 => 122,  200 => 119,  198 => 118,  188 => 110,  182 => 106,  161 => 88,  154 => 83,  142 => 77,  137 => 75,  133 => 74,  129 => 73,  125 => 72,  122 => 71,  118 => 70,  106 => 60,  104 => 59,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>

\t\t<link rel=\"stylesheet\" href=\"/css/panier.css\"/>
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.2/css/all.css\"/>
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
\t\t<!-- CSS only -->
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/client.css\"><link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
\t</head>

\t<body>
\t\t<div class=\"home\">
\t\t\t<nav class=\"nav\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"/appClient\">
\t\t\t\t\t\t<img src=\"img/scoop.png\" class=\"logoImg\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"appClient\">
\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/produit\">
\t\t\t\t\t\t\tMenu
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/panier\">
\t\t\t\t\t\t\t<img src=\"/img/Shopping Cart.png\" class=\"ShoppingCart\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/conclient\">
\t\t\t\t\t\t\t<button class=\"loginBtn navBtn\">Connexion</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/insclient\">
\t\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">S'inscrire</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/etat\">
\t\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">L'etat</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t{% if items | length >0 %}
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for item in items %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{item.produit.nom}}</td>
\t\t\t\t\t\t\t\t<td>{{item.produit.prix}}</td>
\t\t\t\t\t\t\t\t<td>{{item.quantity}}</td>
\t\t\t\t\t\t\t\t<td>{{item.produit.prix * item.quantity}}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('panier_remove',{'id': item.produit.id})}}\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"3\" class=\"text-right\">Total :
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{total}}</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>

\t\t\t\t<div class=\"button\">


\t\t\t\t\t<button class=\"login navBtn  modal-trigger\" data-target=\"modal-example\">Valider</button>


\t\t\t\t\t<a href=\"/produit\">
\t\t\t\t\t\t<button class=\"signUp navBtn\">Continuer achats</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"main\">
\t\t\t\t<p>Surprise c'est vide !</p>
\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"modal shadow-1 white falling\" id=\"modal-example\" data-ax=\"modal\">
\t\t\t<div class=\"modal-header LeftSection homeSecondSection\">
\t\t\t\t<h3>Passer la commande</h3>
\t\t\t</div>

\t\t\t<div class=\"divider\"></div>

\t\t\t<div class=\"modal-content\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t<div class=\"homeSecondSection\">
\t\t\t\t\t\t<div class=\"LeftSection\">
\t\t\t\t\t\t\t<h4>Nom:
\t\t\t\t\t\t\t\t{{ app.user.Nom}}</h4>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tAdresse:
\t\t\t\t\t\t\t\t{{ app.user.ville}}</h4>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tNumero:
\t\t\t\t\t\t\t\t{{ app.user.numero}}</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<br/>
\t\t\t\t<div class=\"panier\">
\t\t\t\t\t{% if items | length >0 %}
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% for item in items %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>{{item.produit.nom}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{item.produit.prix}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{item.quantity}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{item.produit.prix * item.quantity}}</td>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"3\" class=\"text-right\">Total :
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>{{total}}</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>

\t\t\t\t\t\t</table>

\t\t\t\t\t{% endif %}


\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"divider\"></div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<a href=\"\" class=\"login navBtn\">Confirmer</a>
\t\t\t\t<button data-target=\"modal-example\" class=\"ml-auto btn shadow-1 rounded-1 small primary modal-trigger\">Close</button>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>

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
document.querySelector(\".modal-footer a\").href = `/Valider/add`
document.querySelector(\".modal-content\").innerText
})
}
}
\t\t\t</script>
\t\t{% endblock %}
\t</body>
</html>
", "Client/panier.html.twig", "C:\\laragon\\www\\scooptest\\templates\\Client\\panier.html.twig");
    }
}
