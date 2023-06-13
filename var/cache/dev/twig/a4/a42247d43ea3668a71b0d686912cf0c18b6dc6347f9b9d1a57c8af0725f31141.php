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

/* respo/supplements/index.html.twig */
class __TwigTemplate_364c8a0d9fc74a1cd713b79f1810852c48f1698a8f943eaab428709b827bc80c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "respo/supplements/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "respo/supplements/index.html.twig"));

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
        // line 79
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 108
        echo "
\t</body>
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

        echo "Supplements

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
        echo "\t\t\t<h1>Gérer les supplements</h1>
\t\t\t<div class=\"col\">
\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_supplement");
        echo "\" class=\"btn blue\" -->
\t\t\t\t\tAjouter supplement</a>
\t\t\t</div>
\t\t\t<div class=\"responsive-table\">
\t\t\t\t<table class=\"table striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t<th>Active</th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["supplements"]) || array_key_exists("supplements", $context) ? $context["supplements"] : (function () { throw new RuntimeError('Variable "supplements" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["supplement"]) {
            // line 32
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplement"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplement"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplement"], "prix", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["supplement"], "imgs", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["img"], "nom", [], "any", false, false, false, 39))), "html", null, true);
                echo "\" alt=\"Image\" width=\"150\">

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplement"], "Active", [], "any", false, false, false, 44), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<label class=\"form-switch mt-2\">

\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" ";
            // line 47
            echo ((twig_get_attribute($this->env, $this->source, $context["supplement"], "Active", [], "any", false, false, false, 47)) ? ("checked") : (""));
            echo " data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplement"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"slider\"></span>

\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-centre\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn primary press modal-trigger\" data-target=\"modal-delete\" data-id=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplement"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\" data-nom=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["supplement"], "nom", [], "any", false, false, false, 54), "html", null, true);
            echo "\" id=\"supprimer\">Supprimer</a>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"modal shadow-1 white falling\" id=\"modal-delete\">
\t\t\t\t\t<div class=\"modal-header\">Supprimer un supplement</div>

\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t<div class=\"modal-content\"></div>

\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<a href=\"\" class=\"btn red\">valider</a>
\t\t\t\t\t\t<button data-target=\"modal-delete\" class=\"ml-auto btn shadow-1 rounded-1 small primary modal-trigger\">Close</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>
\t\t\t<script>
\t\t\t\twindow.onload = () => {
let modal = new Axentix.Modal('#modal-delete');
let Activer = document.querySelectorAll(\"[type=checkbox]\")
for (let bouton of Activer) {
bouton.addEventListener(\"click\", function () {
let xmlhttp = new XMLHttpRequest;
xmlhttp.open(\"get\", `/activer/\${
this.dataset.id
}`)
xmlhttp.send()
})
}
let supprimer = document.querySelectorAll(\".modal-trigger\")
for (let bouton of supprimer) {
bouton.addEventListener(\"click\", function () {
document.querySelector(\".modal-footer a\").href = `/supprimer/\${
this.dataset.id
}`
document.querySelector(\".modal-content\").innerText = `étes-vous sur de vouloir supprimer le supplement\"\${
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
        return "respo/supplements/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  242 => 80,  232 => 79,  203 => 59,  190 => 54,  178 => 47,  172 => 44,  169 => 43,  159 => 39,  156 => 38,  152 => 37,  147 => 35,  143 => 34,  139 => 33,  136 => 32,  132 => 31,  113 => 15,  109 => 13,  99 => 12,  78 => 4,  65 => 108,  62 => 79,  60 => 12,  53 => 7,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t\t<title>
\t\t\t{% block title %}Supplements

\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"/css/categorie.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
\t</head>
\t<body>
\t\t{% block body %}
\t\t\t<h1>Gérer les supplements</h1>
\t\t\t<div class=\"col\">
\t\t\t\t<a href=\"{{path(\"ajout_supplement\")}}\" class=\"btn blue\" -->
\t\t\t\t\tAjouter supplement</a>
\t\t\t</div>
\t\t\t<div class=\"responsive-table\">
\t\t\t\t<table class=\"table striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t<th>Active</th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for supplement  in supplements %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{supplement.id}}</td>
\t\t\t\t\t\t\t\t<td>{{supplement.nom}}</td>
\t\t\t\t\t\t\t\t<td>{{supplement.prix}}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% for img in supplement.imgs %}
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('/uploads/' ~ img.nom)}}\" alt=\"Image\" width=\"150\">

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>{{supplement.Active}}
\t\t\t\t\t\t\t\t\t<label class=\"form-switch mt-2\">

\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" {{ (supplement.Active) ? 'checked' : ''}} data-id=\"{{supplement.id}}\">
\t\t\t\t\t\t\t\t\t\t<span class=\"slider\"></span>

\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-centre\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn primary press modal-trigger\" data-target=\"modal-delete\" data-id=\"{{supplement.id}}\" data-nom=\"{{supplement.nom}}\" id=\"supprimer\">Supprimer</a>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"modal shadow-1 white falling\" id=\"modal-delete\">
\t\t\t\t\t<div class=\"modal-header\">Supprimer un supplement</div>

\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t<div class=\"modal-content\"></div>

\t\t\t\t\t<div class=\"divider\"></div>

\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<a href=\"\" class=\"btn red\">valider</a>
\t\t\t\t\t\t<button data-target=\"modal-delete\" class=\"ml-auto btn shadow-1 rounded-1 small primary modal-trigger\">Close</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endblock %}
\t\t{% block javascripts %}
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>
\t\t\t<script>
\t\t\t\twindow.onload = () => {
let modal = new Axentix.Modal('#modal-delete');
let Activer = document.querySelectorAll(\"[type=checkbox]\")
for (let bouton of Activer) {
bouton.addEventListener(\"click\", function () {
let xmlhttp = new XMLHttpRequest;
xmlhttp.open(\"get\", `/activer/\${
this.dataset.id
}`)
xmlhttp.send()
})
}
let supprimer = document.querySelectorAll(\".modal-trigger\")
for (let bouton of supprimer) {
bouton.addEventListener(\"click\", function () {
document.querySelector(\".modal-footer a\").href = `/supprimer/\${
this.dataset.id
}`
document.querySelector(\".modal-content\").innerText = `étes-vous sur de vouloir supprimer le supplement\"\${
this.dataset.nom
}\"`
})
}
}
\t\t\t</script>
\t\t{% endblock %}

\t</body>
</html>
", "respo/supplements/index.html.twig", "C:\\laragon\\www\\scooptest\\templates\\respo\\supplements\\index.html.twig");
    }
}
