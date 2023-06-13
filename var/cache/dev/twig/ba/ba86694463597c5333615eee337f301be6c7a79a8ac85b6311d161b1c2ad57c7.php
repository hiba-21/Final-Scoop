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

/* respo/produit/index.html.twig */
class __TwigTemplate_ff349168ae360118c601a20860c16abf2f1a1b3042c591506877dc09ed89c65b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "respo/produit/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "respo/produit/index.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<title>
\t\t\t";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
\t</head>
\t<body>
\t\t";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</body></html></body></html>
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

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t\t</body>
\t</html>
</div>
<h1>Gérer les Produits</h1>
<!--a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respo_produit_ajout");
        echo "\" class=\"btn blue\"-->
Ajouter un produit</a><div class=\"responsive-table\">
<table class=\"table striped\">
\t<thead>
\t\t<tr>
\t\t\t<th>ID</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Description</th>
\t\t\t<th>Prix</th>
\t\t\t<th>Date</th>
\t\t\t<th>Active</th>
\t\t\t<th>Actions</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 32
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "creaAt", [], "any", false, false, false, 37)), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "active", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t<td
\t\t\t\t\tclass=\"text-center\"><!--a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respo_produit_modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn blue\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tModifier</a-->
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "

\t</tbody>
</table></div><script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "respo/produit/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  169 => 45,  158 => 40,  153 => 38,  149 => 37,  145 => 36,  141 => 35,  137 => 34,  133 => 33,  130 => 32,  126 => 31,  108 => 16,  102 => 12,  92 => 11,  71 => 4,  60 => 48,  58 => 11,  52 => 7,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t\t<title>
\t\t\t{% block title %}Gérer les catégories

\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
\t</head>
\t<body>
\t\t{% block body %}
\t\t</body>
\t</html>
</div>
<h1>Gérer les Produits</h1>
<!--a href=\"{{path(\"respo_produit_ajout\")}}\" class=\"btn blue\"-->
Ajouter un produit</a><div class=\"responsive-table\">
<table class=\"table striped\">
\t<thead>
\t\t<tr>
\t\t\t<th>ID</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Description</th>
\t\t\t<th>Prix</th>
\t\t\t<th>Date</th>
\t\t\t<th>Active</th>
\t\t\t<th>Actions</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% for produit  in produits %}
\t\t\t<tr>
\t\t\t\t<td>{{produit.id}}</td>
\t\t\t\t<td>{{produit.nom}}</td>
\t\t\t\t<td>{{produit.description}}</td>
\t\t\t\t<td>{{produit.prix}}</td>
\t\t\t\t<td>{{produit.creaAt|date}}</td>
\t\t\t\t<td>{{produit.active}}</td>
\t\t\t\t<td
\t\t\t\t\tclass=\"text-center\"><!--a href=\"{{path(\"respo_produit_modifier\", {id: produit.id}) }}\" class=\"btn blue\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tModifier</a-->
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endfor %}


\t</tbody>
</table></div><script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>{% endblock %}</body></html></body></html>
", "respo/produit/index.html.twig", "C:\\laragon\\www\\scooptest\\templates\\respo\\produit\\index.html.twig");
    }
}
