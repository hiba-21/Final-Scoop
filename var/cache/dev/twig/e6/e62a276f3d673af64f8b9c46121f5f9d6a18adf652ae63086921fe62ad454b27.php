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

/* Client/affproduit.html.twig */
class __TwigTemplate_252855105b2657b3cf6915d26e51b8377a59b55227162bfe0d10023d4a9eedcf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Client/affproduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Client/affproduit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<link rel=\"stylesheet\" href=\"/css/order.css\"></head>
\t<body>
\t\t<div class=\"home\">
\t\t\t<nav class=\"nav\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"/appClient\">
\t\t\t\t\t\t<img src=\"/img/scoop.png\" class=\"logoImg\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div>
\t\t\t\t\t\tAccueil
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
\t\t\t\t\t\t<button class=\"loginBtn navBtn\">Connexion</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">S'inscrire</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/etat\">
\t\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">L'etat</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<div class=\"orderContainer\">
\t\t\t\t<div class=\"menuNav\">
\t\t\t\t\t<h2>Menu</h2>
\t\t\t\t\t<ul class=\"menuList\">
\t\t\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 45
            echo "\t\t\t\t\t\t\t<li class=\"menuListLi\">

\t\t\t\t\t\t\t\t<img src=\"/img/dish.png\"/>


\t\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afpd", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"menu\">

\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 53), "html", null, true);
            echo "

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t\t\t\t<li class=\"menuListLi\">
\t\t\t\t\t\t\t<img src=\"/img/french-fries.png\"/>
\t\t\t\t\t\t\t<a href=\"/supplements\" class=\"menu\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tSupplements
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"Foodcontainer\">

\t\t\t\t\t<div class=\"cardContainer\">

\t\t\t\t\t\t";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produitcategories"]) || array_key_exists("produitcategories", $context) ? $context["produitcategories"] : (function () { throw new RuntimeError('Variable "produitcategories" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produitcategorie"]) {
            // line 76
            echo "
\t\t\t\t\t\t\t<div class=\"Foodcard\">
\t\t\t\t\t\t\t\t";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["produitcategorie"], "images", [], "any", false, false, false, 78));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 79
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 79))), "square"), "html", null, true);
                echo "\" alt=\"Image\" width=\"150\"/>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t\t\t\t\t\t\t<div class=\"foodCard_secondSection\">
\t\t\t\t\t\t\t\t\t<h4>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produitcategorie"], "nom", [], "any", false, false, false, 82), "html", null, true);
            echo "</h4>

\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produitcategorie"], "description", [], "any", false, false, false, 85), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produitcategorie"], "prix", [], "any", false, false, false, 88), "html", null, true);
            echo "DT</strong>


\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => twig_get_attribute($this->env, $this->source, $context["produitcategorie"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            echo "\" class=\"orderBtn\">

\t\t\t\t\t\t\t\t\t\t<i><img src=\"/img/Shopping Cart.png\" class=\"btnShopingcart\"/></i>
\t\t\t\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produitcategorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</body>
\t\t</html>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Client/affproduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 102,  177 => 91,  171 => 88,  165 => 85,  159 => 82,  156 => 81,  147 => 79,  143 => 78,  139 => 76,  135 => 75,  119 => 61,  105 => 53,  99 => 50,  92 => 45,  88 => 44,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<link rel=\"stylesheet\" href=\"/css/order.css\"></head>
\t<body>
\t\t<div class=\"home\">
\t\t\t<nav class=\"nav\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"/appClient\">
\t\t\t\t\t\t<img src=\"/img/scoop.png\" class=\"logoImg\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div>
\t\t\t\t\t\tAccueil
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
\t\t\t\t\t\t<button class=\"loginBtn navBtn\">Connexion</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">S'inscrire</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/etat\">
\t\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">L'etat</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<div class=\"orderContainer\">
\t\t\t\t<div class=\"menuNav\">
\t\t\t\t\t<h2>Menu</h2>
\t\t\t\t\t<ul class=\"menuList\">
\t\t\t\t\t\t{% for categorie in categories %}
\t\t\t\t\t\t\t<li class=\"menuListLi\">

\t\t\t\t\t\t\t\t<img src=\"/img/dish.png\"/>


\t\t\t\t\t\t\t\t<a href=\"{{path(\"afpd\", {id: categorie.id}) }}\" class=\"menu\">

\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t{{categorie.nom}}

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<li class=\"menuListLi\">
\t\t\t\t\t\t\t<img src=\"/img/french-fries.png\"/>
\t\t\t\t\t\t\t<a href=\"/supplements\" class=\"menu\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tSupplements
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"Foodcontainer\">

\t\t\t\t\t<div class=\"cardContainer\">

\t\t\t\t\t\t{% for produitcategorie in produitcategories %}

\t\t\t\t\t\t\t<div class=\"Foodcard\">
\t\t\t\t\t\t\t\t{% for image in produitcategorie.images %}
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('/uploads/' ~ image.nom)|imagine_filter('square')}}\" alt=\"Image\" width=\"150\"/>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t<div class=\"foodCard_secondSection\">
\t\t\t\t\t\t\t\t\t<h4>{{ produitcategorie.nom }}</h4>

\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t{{produitcategorie.description}}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t{{produitcategorie.prix}}DT</strong>


\t\t\t\t\t\t\t\t\t<a href=\"{{path('panier_add',{'id':produitcategorie.id})}}\" class=\"orderBtn\">

\t\t\t\t\t\t\t\t\t\t<i><img src=\"/img/Shopping Cart.png\" class=\"btnShopingcart\"/></i>
\t\t\t\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</body>
\t\t</html>
\t</body>
</html>
", "Client/affproduit.html.twig", "C:\\laragon\\www\\scooptest\\templates\\Client\\affproduit.html.twig");
    }
}
