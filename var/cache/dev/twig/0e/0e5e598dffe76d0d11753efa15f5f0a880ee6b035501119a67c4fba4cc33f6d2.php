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

/* Client/client.html.twig */
class __TwigTemplate_aa0dd9d481ee3c8d110a761bcc9c98ce29ac2ad6bbd353aa89dcfe0563c7145c extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Client/client.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Client/client.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "<!-- Axentix CSS minified version -->
<link
href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
<!-- CSS only -->
<link rel=\"stylesheet\" href=\"/css/client.css\"><link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
<link rel=\"icon\" href=\"img/scoop.png\" type=\"image/x-icon\"/>
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.2/css/all.css\"/>
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap\"/>
<link rel=\"stylesheet\" href=\"css/mdb.min.css\"/>
<link rel=\"stylesheet\" href=\"css/pannier.css\"/>
";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "\t<!-- Navbar -->
\t<nav
\t\tclass=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t<!-- Container wrapper -->
\t\t<div
\t\t\tclass=\"container-fluid\">
\t\t\t<!-- Toggle button -->
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-mdb-toggle=\"collapse\" data-mdb-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t</button>

\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>

\t\t\t<!-- Collapsible wrapper -->
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<!-- Navbar brand -->
\t\t\t\t<!-- Left links -->
\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\"> <li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">S'inscrire</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Se Connecter</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- Left links -->
\t\t\t</div>
\t\t\t<!-- Collapsible wrapper -->

\t\t\t<!-- Right elements -->
\t\t\t<div
\t\t\t\tclass=\"d-flex align-items-center\">
\t\t\t\t<!-- Icon -->
\t\t\t\t<a class=\"text-reset me-3\" href=\"/panier\">
\t\t\t\t\t<i class=\"fas fa-shopping-cart\"></i>
\t\t\t\t</a>
\t\t\t\t<a class=\"dropdown-toggle d-flex align-items-center hidden-arrow\" href=\"/panier\" id=\"navbarDropdownMenuLink\" role=\"button\" data-mdb-toggle=\"dropdown\" aria-expanded=\"false\"></a>
\t\t\t\t<a class=\"navbar-brand mt-2 mt-lg-0\" href=\"#\">
\t\t\t\t\t<img src=\"/img/scoop.png\" height=\"50\" alt=\"\" loading=\"lazy\"/>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<!-- Right elements -->
\t\t</div>
\t\t<!-- Container wrapper -->
\t</nav>
\t<div class=\"collapse\" id=\"navbarToggleExternalContent\">
\t\t<div class=\"bg-dark p-4\">
\t\t\t<h5 class=\"text-white h4\">Collapsed content</h5>
\t\t\t<span class=\"text-muted\">Toggleable via the navbar brand.</span>
\t\t</div>
\t</div>

\t<!-- Navbar -->
\t<div class=\"d-flex align-items-start\">
\t\t<div class=\"nav flex-column nav-pills me-3\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t<button class=\"nav-link\" id=\"v-pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Profile</button>

\t\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 75
            echo "\t\t\t\t<button class=\"nav-link\" id=\"v-pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-home\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 75), "html", null, true);
            echo "</button>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "

\t\t</div>

\t\t<div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\">
\t\t\t";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["boutique"]);
        foreach ($context['_seq'] as $context["_key"] => $context["boutique"]) {
            // line 83
            echo "

\t\t\t\t<div class=\"grix xs1 sm2 gutter-xs4 container\">
\t\t\t\t\t<div class=\"card shadow-1 rounded-3\">
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<div class=\"caroulix\" id=\"example-caroulix\" data-ax=\"caroulix\" data-ax-caroulix-autoplay-enabled=\"true\" data-caroulix-indicators-enabled=\"true\">
\t\t\t\t\t\t\t\t<div class=\"caroulix-arrow caroulix-prev\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-chevron-left\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"caroulix-arrow caroulix-next\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-chevron-right\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"caroulix-item\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/info/image/" . twig_get_attribute($this->env, $this->source, $context["boutique"], "image", [], "any", false, false, false, 96))), "html", null, true);
            echo "\" alt=\"\" width=\"150\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"caroulix-item\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/info/image/" . twig_get_attribute($this->env, $this->source, $context["boutique"], "image", [], "any", false, false, false, 99))), "html", null, true);
            echo "\" alt=\"\" width=\"150\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"caroulix-item\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/info/image/" . twig_get_attribute($this->env, $this->source, $context["boutique"], "image", [], "any", false, false, false, 102))), "html", null, true);
            echo "\" alt=\"\" width=\"150\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-header\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boutique"], "nom", [], "any", false, false, false, 105), "html", null, true);
            echo "<br>
\t\t\t\t\t\t\t\t";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boutique"], "pays", [], "any", false, false, false, 106), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boutique"], "descrip", [], "any", false, false, false, 108), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<p>

\t\t\t\t\t\t\t\t";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boutique"], "adresse", [], "any", false, false, false, 113), "html", null, true);
            echo "

\t\t\t\t\t\t\t\t";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boutique"], "ville", [], "any", false, false, false, 115), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boutique"], "tel", [], "any", false, false, false, 116), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boutique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "\t\t\t</div>

\t\t\t<div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">
\t\t\t\t<div class=\"container\" width=\"30\">
\t\t\t\t\t";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 127, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 128
            echo "\t\t\t\t\t\t<div class=\"card shadow-1 fx-row\">

\t\t\t\t\t\t\t<div class=\"primary d-flex vcenter fx-center px-4\">

\t\t\t\t\t\t\t\t";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["produit"], "images", [], "any", false, false, false, 132));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 133
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 133))), "square"), "html", null, true);
                echo "\" alt=\"Image\" width=\"150\"/>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"flex fx-col fx-grow\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<strong>";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 139), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tCatégorie :";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "categories", [], "any", false, false, false, 143), "nom", [], "any", false, false, false, 143), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 145), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 148), "html", null, true);
            echo "DT</strong>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 149)]), "html", null, true);
            echo "\" class=\"btn btn-primary float-right\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-shopping-cart mr-1\"></i>
\t\t\t\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>
\t<!-- JavaScript Bundle with Popper -->

\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
\t<script>
\t\tvar triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
triggerTabList.forEach(function (triggerEl) {
var tabTrigger = new bootstrap.Tab(triggerEl)

triggerEl.addEventListener('click', function (event) {
event.preventDefault()
tabTrigger.show()
})
})
var triggerEl = document.querySelector('#myTab a[href=\"#profile\"]')
bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name

var triggerFirstTabEl = document.querySelector('#myTab li:first-child a')
bootstrap.Tab.getInstance(triggerFirstTabEl).show() // Select first tab
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Client/client.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  329 => 159,  313 => 149,  309 => 148,  303 => 145,  298 => 143,  291 => 139,  285 => 135,  276 => 133,  272 => 132,  266 => 128,  262 => 127,  256 => 123,  243 => 116,  239 => 115,  234 => 113,  226 => 108,  221 => 106,  217 => 105,  211 => 102,  205 => 99,  199 => 96,  184 => 83,  180 => 82,  173 => 77,  164 => 75,  160 => 74,  99 => 15,  89 => 14,  79 => 3,  69 => 1,  59 => 14,  47 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block title
 %}
 {% endblock %}
<!-- Axentix CSS minified version -->
<link
href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
<!-- CSS only -->
<link rel=\"stylesheet\" href=\"/css/client.css\"><link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
<link rel=\"icon\" href=\"img/scoop.png\" type=\"image/x-icon\"/>
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.2/css/all.css\"/>
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap\"/>
<link rel=\"stylesheet\" href=\"css/mdb.min.css\"/>
<link rel=\"stylesheet\" href=\"css/pannier.css\"/>
{% block body %}
\t<!-- Navbar -->
\t<nav
\t\tclass=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t<!-- Container wrapper -->
\t\t<div
\t\t\tclass=\"container-fluid\">
\t\t\t<!-- Toggle button -->
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-mdb-toggle=\"collapse\" data-mdb-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t</button>

\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>

\t\t\t<!-- Collapsible wrapper -->
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<!-- Navbar brand -->
\t\t\t\t<!-- Left links -->
\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\"> <li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">S'inscrire</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Se Connecter</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- Left links -->
\t\t\t</div>
\t\t\t<!-- Collapsible wrapper -->

\t\t\t<!-- Right elements -->
\t\t\t<div
\t\t\t\tclass=\"d-flex align-items-center\">
\t\t\t\t<!-- Icon -->
\t\t\t\t<a class=\"text-reset me-3\" href=\"/panier\">
\t\t\t\t\t<i class=\"fas fa-shopping-cart\"></i>
\t\t\t\t</a>
\t\t\t\t<a class=\"dropdown-toggle d-flex align-items-center hidden-arrow\" href=\"/panier\" id=\"navbarDropdownMenuLink\" role=\"button\" data-mdb-toggle=\"dropdown\" aria-expanded=\"false\"></a>
\t\t\t\t<a class=\"navbar-brand mt-2 mt-lg-0\" href=\"#\">
\t\t\t\t\t<img src=\"/img/scoop.png\" height=\"50\" alt=\"\" loading=\"lazy\"/>
\t\t\t\t</a>

\t\t\t</div>
\t\t\t<!-- Right elements -->
\t\t</div>
\t\t<!-- Container wrapper -->
\t</nav>
\t<div class=\"collapse\" id=\"navbarToggleExternalContent\">
\t\t<div class=\"bg-dark p-4\">
\t\t\t<h5 class=\"text-white h4\">Collapsed content</h5>
\t\t\t<span class=\"text-muted\">Toggleable via the navbar brand.</span>
\t\t</div>
\t</div>

\t<!-- Navbar -->
\t<div class=\"d-flex align-items-start\">
\t\t<div class=\"nav flex-column nav-pills me-3\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t<button class=\"nav-link\" id=\"v-pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Profile</button>

\t\t\t{% for categorie in categories %}
\t\t\t\t<button class=\"nav-link\" id=\"v-pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-home\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">{{categorie.nom}}</button>
\t\t\t{% endfor %}


\t\t</div>

\t\t<div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\">
\t\t\t{% for boutique in boutique %}


\t\t\t\t<div class=\"grix xs1 sm2 gutter-xs4 container\">
\t\t\t\t\t<div class=\"card shadow-1 rounded-3\">
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<div class=\"caroulix\" id=\"example-caroulix\" data-ax=\"caroulix\" data-ax-caroulix-autoplay-enabled=\"true\" data-caroulix-indicators-enabled=\"true\">
\t\t\t\t\t\t\t\t<div class=\"caroulix-arrow caroulix-prev\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-chevron-left\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"caroulix-arrow caroulix-next\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-chevron-right\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"caroulix-item\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('/info/image/' ~ boutique.image)}}\" alt=\"\" width=\"150\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"caroulix-item\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('/info/image/' ~ boutique.image)}}\" alt=\"\" width=\"150\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"caroulix-item\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('/info/image/' ~ boutique.image)}}\" alt=\"\" width=\"150\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-header\">{{boutique.nom}}<br>
\t\t\t\t\t\t\t\t{{boutique.pays}}</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{{boutique.descrip}}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<p>

\t\t\t\t\t\t\t\t{{boutique.adresse}}

\t\t\t\t\t\t\t\t{{boutique.ville}}
\t\t\t\t\t\t\t\t{{boutique.tel}}
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t{% endfor %}
\t\t\t</div>

\t\t\t<div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">
\t\t\t\t<div class=\"container\" width=\"30\">
\t\t\t\t\t{% for produit in produits %}
\t\t\t\t\t\t<div class=\"card shadow-1 fx-row\">

\t\t\t\t\t\t\t<div class=\"primary d-flex vcenter fx-center px-4\">

\t\t\t\t\t\t\t\t{% for image in produit.images %}
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('/uploads/' ~ image.nom)|imagine_filter('square')}}\" alt=\"Image\" width=\"150\"/>
\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"flex fx-col fx-grow\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<strong>{{ produit.nom }}</strong>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tCatégorie :{{produit.categories.nom}}</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t{{produit.description}}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t{{produit.prix}}DT</strong>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('panier_add',{'id':produit.id})}}\" class=\"btn btn-primary float-right\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-shopping-cart mr-1\"></i>
\t\t\t\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>
\t<!-- JavaScript Bundle with Popper -->

\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
\t<script>
\t\tvar triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
triggerTabList.forEach(function (triggerEl) {
var tabTrigger = new bootstrap.Tab(triggerEl)

triggerEl.addEventListener('click', function (event) {
event.preventDefault()
tabTrigger.show()
})
})
var triggerEl = document.querySelector('#myTab a[href=\"#profile\"]')
bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name

var triggerFirstTabEl = document.querySelector('#myTab li:first-child a')
bootstrap.Tab.getInstance(triggerFirstTabEl).show() // Select first tab
\t</script>
{% endblock %}
", "Client/client.html.twig", "C:\\laragon\\www\\scooptest\\templates\\Client\\client.html.twig");
    }
}
