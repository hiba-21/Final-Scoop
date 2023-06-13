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

/* Client/sup.html.twig */
class __TwigTemplate_5f8b372898bf95899078cd59d4c3c7fcd92fcd067e50f1cd7ec4b51ccb5440e7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Client/sup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Client/sup.html.twig"));

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
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 47
            echo "\t\t\t\t\t\t\t<li class=\"menuListLi\">

\t\t\t\t\t\t\t\t<img src=\"/img/dish.png\"/>
\t\t\t\t\t\t\t\t<a href=\"/affProduit\" class=\"menu\">

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
        // line 59
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"menuList\">
\t\t\t\t\t\t<li class=\"menuListLi\">
\t\t\t\t\t\t\t<img src=\"/img/french-fries.png\"/>
\t\t\t\t\t\t\t<a href=\"/sup\" class=\"menu\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["supplements"]) || array_key_exists("supplements", $context) ? $context["supplements"] : (function () { throw new RuntimeError('Variable "supplements" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["supplement"]) {
            // line 76
            echo "\t\t\t\t\t\t\t<div class=\"Foodcard\">


\t\t\t\t\t\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["supplement"], "imgs", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["img"], "nom", [], "any", false, false, false, 80))), "square"), "html", null, true);
                echo "\" alt=\"Image\" class=\"imgp\"/>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t\t\t\t\t\t<div class=\"foodCard_secondSection\">


\t\t\t\t\t\t\t\t\t<strong>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplement"], "nom", [], "any", false, false, false, 85), "html", null, true);
            echo "</strong><br>

\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplement"], "prix", [], "any", false, false, false, 88), "html", null, true);
            echo "DT</strong>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => twig_get_attribute($this->env, $this->source, $context["supplement"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" class=\"orderBtn\">
\t\t\t\t\t\t\t\t\t\t<i><img src=\"img/Shopping Cart.png\" class=\"btnShopingcart\"/></i>
\t\t\t\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</body>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Client/sup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 97,  169 => 89,  165 => 88,  159 => 85,  154 => 82,  145 => 80,  141 => 79,  136 => 76,  132 => 75,  114 => 59,  102 => 53,  94 => 47,  90 => 46,  43 => 1,);
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
\t\t\t\t\t\t\t\t<a href=\"/affProduit\" class=\"menu\">

\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t{{categorie.nom}}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"menuList\">
\t\t\t\t\t\t<li class=\"menuListLi\">
\t\t\t\t\t\t\t<img src=\"/img/french-fries.png\"/>
\t\t\t\t\t\t\t<a href=\"/sup\" class=\"menu\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tSupplements
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"Foodcontainer\">

\t\t\t\t\t<div class=\"cardContainer\">

\t\t\t\t\t\t{% for supplement in supplements %}
\t\t\t\t\t\t\t<div class=\"Foodcard\">


\t\t\t\t\t\t\t\t{% for img in supplement.imgs %}
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('/uploads/' ~ img.nom)|imagine_filter('square')}}\" alt=\"Image\" class=\"imgp\"/>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t<div class=\"foodCard_secondSection\">


\t\t\t\t\t\t\t\t\t<strong>{{ supplement.nom }}</strong><br>

\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t{{supplement.prix}}DT</strong>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('panier_add',{'id':supplement.id})}}\" class=\"orderBtn\">
\t\t\t\t\t\t\t\t\t\t<i><img src=\"img/Shopping Cart.png\" class=\"btnShopingcart\"/></i>
\t\t\t\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</body>
\t</body>
</html>
", "Client/sup.html.twig", "C:\\laragon\\www\\scooptest\\templates\\Client\\sup.html.twig");
    }
}
