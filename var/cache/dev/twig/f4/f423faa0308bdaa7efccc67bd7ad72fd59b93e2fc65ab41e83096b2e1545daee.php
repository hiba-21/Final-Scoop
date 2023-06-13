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

/* responsable/dashboard/commands.html.twig */
class __TwigTemplate_4e2e626594170cf1e194ddd0eb9ce8fbb33d932d0984b6ccc309289fb2b418eb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/commands.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/commands.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<title>
\t\t\t";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/tabcmd.css\">
\t</head>
\t<body>
\t\t";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "\t\t<script>
\t\t\twindow.onload = () => {
let modal = new Axentix.Modal('#modal-delete');
let aa = document.querySelectorAll(\"#aa\")
for (let bouton of aa) {
bouton.addEventListener(\"click\", function () {
let xmlhttp = new XMLHttpRequest;
xmlhttp.open(\"get\", `/aa/\${
this.dataset.id
}`)
xmlhttp.send()
})
}
let prepare = document.querySelectorAll(\"#pp\")
for (let bouton of prepare) {
bouton.addEventListener(\"click\", function () {
let xmlhttp = new XMLHttpRequest;
xmlhttp.open(\"get\", `/prepare/\${
this.dataset.id
}`)
xmlhttp.send()
})
}
}
\t\t</script>
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

        echo "les commandes


\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
\t\t\t<h1>les commandes
\t\t\t</h1>
\t\t\t<div class=\"responsive-table\">
\t\t\t\t<table class=\"table striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Numero</th>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Nom de produit</th>
\t\t\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t<th>Accept/Refus</th>
\t\t\t\t\t\t\t<th>Etat</th>


\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cmd"]);
        foreach ($context['_seq'] as $context["_key"] => $context["cmd"]) {
            // line 35
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cmd"], "client", [], "any", false, false, false, 37), "Nom", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "quantite", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "prix", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "total", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"form-switch mt-2\">
\t\t\t\t\t\t\t\t\t\trefuse
\t\t\t\t\t\t\t\t\t\t<input id=\"aa\" type=\"checkbox\" ";
            // line 46
            echo ((twig_get_attribute($this->env, $this->source, $context["cmd"], "activer", [], "any", false, false, false, 46)) ? ("checked") : (""));
            echo " data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"slider\"></span>
\t\t\t\t\t\t\t\t\t\taccept
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"form-switch mt-2\">
\t\t\t\t\t\t\t\t\t\tEn cours
\t\t\t\t\t\t\t\t\t\t<input id=\"pp\" type=\"checkbox\" ";
            // line 54
            echo ((twig_get_attribute($this->env, $this->source, $context["cmd"], "prepare", [], "any", false, false, false, 54)) ? ("checked") : (""));
            echo " data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmd"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"slider\"></span>
\t\t\t\t\t\t\t\t\t\tPreparer
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "responsable/dashboard/commands.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  216 => 62,  200 => 54,  187 => 46,  180 => 42,  176 => 41,  171 => 39,  167 => 38,  163 => 37,  159 => 36,  156 => 35,  152 => 34,  130 => 14,  120 => 13,  98 => 4,  61 => 69,  59 => 13,  52 => 8,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t\t<title>
\t\t\t{% block title %}les commandes


\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/tabcmd.css\">
\t</head>
\t<body>
\t\t{% block body %}

\t\t\t<h1>les commandes
\t\t\t</h1>
\t\t\t<div class=\"responsive-table\">
\t\t\t\t<table class=\"table striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Numero</th>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Nom de produit</th>
\t\t\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t<th>Accept/Refus</th>
\t\t\t\t\t\t\t<th>Etat</th>


\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for cmd  in cmd %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{cmd.id}}</td>
\t\t\t\t\t\t\t\t<td>{{cmd.client.Nom}}</td>
\t\t\t\t\t\t\t\t<td>{{cmd.nom}}</td>
\t\t\t\t\t\t\t\t<td>{{cmd.quantite}}</td>

\t\t\t\t\t\t\t\t<td>{{cmd.prix}}</td>
\t\t\t\t\t\t\t\t<td>{{cmd.total}}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"form-switch mt-2\">
\t\t\t\t\t\t\t\t\t\trefuse
\t\t\t\t\t\t\t\t\t\t<input id=\"aa\" type=\"checkbox\" {{(cmd.activer) ? 'checked' : ''}} data-id=\"{{cmd.id}}\">
\t\t\t\t\t\t\t\t\t\t<span class=\"slider\"></span>
\t\t\t\t\t\t\t\t\t\taccept
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"form-switch mt-2\">
\t\t\t\t\t\t\t\t\t\tEn cours
\t\t\t\t\t\t\t\t\t\t<input id=\"pp\" type=\"checkbox\" {{(cmd.prepare) ? 'checked' : ''}} data-id=\"{{cmd.id}}\">
\t\t\t\t\t\t\t\t\t\t<span class=\"slider\"></span>
\t\t\t\t\t\t\t\t\t\tPreparer
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>
\t\t{% endblock %}
\t\t<script>
\t\t\twindow.onload = () => {
let modal = new Axentix.Modal('#modal-delete');
let aa = document.querySelectorAll(\"#aa\")
for (let bouton of aa) {
bouton.addEventListener(\"click\", function () {
let xmlhttp = new XMLHttpRequest;
xmlhttp.open(\"get\", `/aa/\${
this.dataset.id
}`)
xmlhttp.send()
})
}
let prepare = document.querySelectorAll(\"#pp\")
for (let bouton of prepare) {
bouton.addEventListener(\"click\", function () {
let xmlhttp = new XMLHttpRequest;
xmlhttp.open(\"get\", `/prepare/\${
this.dataset.id
}`)
xmlhttp.send()
})
}
}
\t\t</script>
\t</body>
</html>
", "responsable/dashboard/commands.html.twig", "C:\\laragon\\www\\scooptest\\templates\\responsable\\dashboard\\commands.html.twig");
    }
}
