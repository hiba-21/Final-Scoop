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

/* commande/index.html.twig */
class __TwigTemplate_b1a519fc9008cb37c063b95f241b5bb7b8e3e1e229ce2df4c1f70710f0dc1810 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        // line 1
        echo "<head>
\t<link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t<link rel=\"stylesheet\" href=\"/css/insclient.css\">
\t<link rel=\"stylesheet\" href=\"/css/footer.css\">
</head>
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<body>
\t\t<div id=\"login-box\">
\t\t\t<div id=\"name\">
\t\t\t\t<div class=\"main\">
\t\t\t\t\t<h1>Passer Commande</h1>

\t\t\t\t\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 14, $this->source); })()), 'form_start');
        echo "

\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 17, $this->source); })()), "Nom", [], "any", false, false, false, 17), 'row');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 20, $this->source); })()), "adresse", [], "any", false, false, false, 20), 'row');
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 24, $this->source); })()), "numero", [], "any", false, false, false, 24), 'row');
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div></div>
\t\t\t\t\t<div class=\"panier\">
\t\t\t\t\t\t";
        // line 29
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 29, $this->source); })())), 0))) {
            // line 30
            echo "\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 42), "nom", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 43), "prix", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 45
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 45), "prix", [], "any", false, false, false, 45) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 45)), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\" class=\"text-right\">Total :
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 53, $this->source); })()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>

\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t\t\t\t<p>Surprise c'est vide !</p>

\t\t\t\t\t\t";
        }
        // line 63
        echo "

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"btn\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commande/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  180 => 71,  170 => 63,  165 => 60,  155 => 53,  147 => 47,  139 => 45,  135 => 44,  131 => 43,  127 => 42,  124 => 41,  120 => 40,  108 => 30,  106 => 29,  98 => 24,  91 => 20,  85 => 17,  79 => 14,  71 => 8,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
\t<link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t<link rel=\"stylesheet\" href=\"/css/insclient.css\">
\t<link rel=\"stylesheet\" href=\"/css/footer.css\">
</head>
{% block body %}
\t<body>
\t\t<div id=\"login-box\">
\t\t\t<div id=\"name\">
\t\t\t\t<div class=\"main\">
\t\t\t\t\t<h1>Passer Commande</h1>

\t\t\t\t\t{{ form_start(commandeForm) }}

\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t{{ form_row(commandeForm.Nom) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t{{ form_row(commandeForm.adresse) }}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t{{ form_row(commandeForm.numero) }}
\t\t\t\t\t</div>

\t\t\t\t\t<div></div>
\t\t\t\t\t<div class=\"panier\">
\t\t\t\t\t\t{% if items | length >0 %}
\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for item in items %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>{{item.produit.nom}}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{item.produit.prix}}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{item.quantity}}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{item.produit.prix * item.quantity}}</td>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\" class=\"text-right\">Total :
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>{{total}}</td>
\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>

\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p>Surprise c'est vide !</p>

\t\t\t\t\t\t{% endif %}


\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"btn\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
\t\t\t\t\t</div>
\t\t\t\t\t{{ form_end(commandeForm) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</body>
{% endblock %}
", "commande/index.html.twig", "C:\\laragon\\www\\scooptest\\templates\\commande\\index.html.twig");
    }
}
