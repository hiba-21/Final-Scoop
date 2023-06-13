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

/* Client/test.html.twig */
class __TwigTemplate_8ed0bbf68aca09431646142312112bca9f6a5ac1517841b646ef62adf4eabcf8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Client/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Client/test.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<link rel=\"stylesheet\" href=\"/css/navclient.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t</head>
\t<body>
\t\t<div class=\"home\">
\t\t\t<img src=\"/img/blob.png\" class=\"blob\"/>
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
\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"showNav()\" class=\"icon\" id=\"icon\">
\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t</a>
\t\t\t</nav>
\t\t\t<aside class=\"aside\" id='responsivNav'>
\t\t\t\t<div class=\"asideFirstSection\">
\t\t\t\t\t<i class=\"fa fa-times\" aria-hidden=\"true\" style=\"color: white;\" onclick=\"closeNav();\"></i>


\t\t\t\t</div>
\t\t\t\t<nav class=\"ResponsiveNav\">
\t\t\t\t\t<ul class=\"ResponsiveMenu\">
\t\t\t\t\t\t<a to='#about'>Home</a>
\t\t\t\t\t\t<a to='#discover'>Menu</a>
\t\t\t\t\t\t<a class=\"loginBtn navBtn\">Login</a>


\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"responsiveSignIn\">
\t\t\t\t\t\t<a to='#'>
\t\t\t\t\t\t\tSign In</a>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</aside>


\t\t</nav>
\t\t<div class=\"homeSecondSection\">
\t\t\t<div class=\"LeftSection\">
\t\t\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["boutique"]);
        foreach ($context['_seq'] as $context["_key"] => $context["boutique"]) {
            // line 79
            echo "
\t\t\t\t\t<h1>
\t\t\t\t\t\t";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boutique"], "nom", [], "any", false, false, false, 81), "html", null, true);
            echo "
\t\t\t\t\t</h1><br>
\t\t\t\t\t<h3>
\t\t\t\t\t\t";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boutique"], "descrip", [], "any", false, false, false, 84), "html", null, true);
            echo "</h3><br>
\t\t\t\t\t<h4>
\t\t\t\t\t\t";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boutique"], "adresse", [], "any", false, false, false, 86), "html", null, true);
            echo "<br>
\t\t\t\t\t\t";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boutique"], "tel", [], "any", false, false, false, 87), "html", null, true);
            echo "</h4>
\t\t\t\t\t<a href=\"/produit\" class=\"\">
\t\t\t\t\t\t<button class=\"orderNow\">Commandez maintenant</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"RightSection\">
\t\t\t\t\t\t<img src=\"/img/food.png\" class=\"food\"/>
\t\t\t\t\t\t<img src=\"/img/lunch-box.png\" class=\"food1\">
\t\t\t\t\t\t";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["boutique"], "photos", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 95
                echo "
\t\t\t\t\t\t\t<img src=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 96))), "html", null, true);
                echo "\" class=\"res\" alt=\"Image\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boutique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t\t</div>
\t\t</div>
\t\t<script>
\t\t\tfunction myFunction(x) {
var ite = document.getElementById(\"myItem\");
var respItem = document.getElementById(\"ResItem\");

if (x.matches) { // If media query matches
ite.style.display = 'none';


} else {
ite.style.display = 'flex';


}
}
function showNav() {
var respItem = document.getElementById(\"responsivNav\");
respItem.style.display = 'grid';
}
function closeNav() {
var ite = document.getElementById(\"responsivNav\");
ite.style.display = 'none';
}
var x = window.matchMedia(\"(max-width: 1107px)\")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
\t\t</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Client/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 100,  171 => 99,  162 => 96,  159 => 95,  155 => 94,  145 => 87,  141 => 86,  136 => 84,  130 => 81,  126 => 79,  122 => 78,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<link rel=\"stylesheet\" href=\"/css/navclient.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t</head>
\t<body>
\t\t<div class=\"home\">
\t\t\t<img src=\"/img/blob.png\" class=\"blob\"/>
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
\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"showNav()\" class=\"icon\" id=\"icon\">
\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t</a>
\t\t\t</nav>
\t\t\t<aside class=\"aside\" id='responsivNav'>
\t\t\t\t<div class=\"asideFirstSection\">
\t\t\t\t\t<i class=\"fa fa-times\" aria-hidden=\"true\" style=\"color: white;\" onclick=\"closeNav();\"></i>


\t\t\t\t</div>
\t\t\t\t<nav class=\"ResponsiveNav\">
\t\t\t\t\t<ul class=\"ResponsiveMenu\">
\t\t\t\t\t\t<a to='#about'>Home</a>
\t\t\t\t\t\t<a to='#discover'>Menu</a>
\t\t\t\t\t\t<a class=\"loginBtn navBtn\">Login</a>


\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"responsiveSignIn\">
\t\t\t\t\t\t<a to='#'>
\t\t\t\t\t\t\tSign In</a>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</aside>


\t\t</nav>
\t\t<div class=\"homeSecondSection\">
\t\t\t<div class=\"LeftSection\">
\t\t\t\t{% for boutique in boutique %}

\t\t\t\t\t<h1>
\t\t\t\t\t\t{{boutique.nom}}
\t\t\t\t\t</h1><br>
\t\t\t\t\t<h3>
\t\t\t\t\t\t{{boutique.descrip}}</h3><br>
\t\t\t\t\t<h4>
\t\t\t\t\t\t{{boutique.adresse}}<br>
\t\t\t\t\t\t{{boutique.tel}}</h4>
\t\t\t\t\t<a href=\"/produit\" class=\"\">
\t\t\t\t\t\t<button class=\"orderNow\">Commandez maintenant</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"RightSection\">
\t\t\t\t\t\t<img src=\"/img/food.png\" class=\"food\"/>
\t\t\t\t\t\t<img src=\"/img/lunch-box.png\" class=\"food1\">
\t\t\t\t\t\t{% for image in boutique.photos %}

\t\t\t\t\t\t\t<img src=\"{{ asset('/uploads/' ~ image.nom)}}\" class=\"res\" alt=\"Image\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t\t<script>
\t\t\tfunction myFunction(x) {
var ite = document.getElementById(\"myItem\");
var respItem = document.getElementById(\"ResItem\");

if (x.matches) { // If media query matches
ite.style.display = 'none';


} else {
ite.style.display = 'flex';


}
}
function showNav() {
var respItem = document.getElementById(\"responsivNav\");
respItem.style.display = 'grid';
}
function closeNav() {
var ite = document.getElementById(\"responsivNav\");
ite.style.display = 'none';
}
var x = window.matchMedia(\"(max-width: 1107px)\")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
\t\t</script>
</body>
</html>
", "Client/test.html.twig", "C:\\laragon\\www\\scooptest\\templates\\Client\\test.html.twig");
    }
}
