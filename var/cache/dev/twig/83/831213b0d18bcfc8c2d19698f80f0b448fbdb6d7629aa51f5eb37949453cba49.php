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

/* responsable/dashboard/promotion.html.twig */
class __TwigTemplate_47f4e4d23c0802b1c6c795b0c1dd16c6c708dc6d6473356b19af50829dc49b12 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/promotion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/promotion.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">

\t<head>

\t\t<meta charset=\"utf-8\">

\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">


\t\t<!-- Google Font: Source Sans Pro -->

\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">

\t\t<!-- Font Awesome -->

\t\t<link
\t\trel=\"stylesheet\" href=\"../../plugins/fontawesome-free/css/all.min.css\">

\t\t<!-- Theme style -->

\t\t<link rel=\"stylesheet\" href=\"../../dist/css/adminlte.min.css\">

\t</head>

\t<body
\t\tclass=\"hold-transition sidebar-mini\">

\t\t<!-- general form elements disabled -->

\t\t<div class=\"card card-warning\">

\t\t\t<div class=\"card-header\">

\t\t\t\t<h3 class=\"card-title\">Ajouter une régle</h3>

\t\t\t</div>

\t\t\t<!-- /.card-header -->

\t\t\t<div class=\"card-body\">

\t\t\t\t<form>

\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-sm-6\">

\t\t\t\t\t\t\t<!-- text input -->

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Nom de la régle</label>

\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Nom sur la boutique</label>

\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>répétition(tous les X produits)</label>

\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Quantité de produits remisés</label>

\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Type de remise</label>

\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Montant de la remise</label>

\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-sm-6\">

\t\t\t\t\t\t\t\t\t<!-- select -->

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t<label>Choix du produit remisé</label>

\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\">

\t\t\t\t\t\t\t\t\t\t\t<option>option 1</option>

\t\t\t\t\t\t\t\t\t\t\t<option>option 2</option>

\t\t\t\t\t\t\t\t\t\t\t<option>option 3</option>

\t\t\t\t\t\t\t\t\t\t\t<option>option 4</option>

\t\t\t\t\t\t\t\t\t\t\t<option>option 5</option>

\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card-footer\">

\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>

\t\t\t\t\t\t</div>

\t\t\t\t\t</form>

\t\t\t\t</div>

\t\t\t\t<!-- /.card-body -->

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
        return "responsable/dashboard/promotion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\">

\t<head>

\t\t<meta charset=\"utf-8\">

\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">


\t\t<!-- Google Font: Source Sans Pro -->

\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">

\t\t<!-- Font Awesome -->

\t\t<link
\t\trel=\"stylesheet\" href=\"../../plugins/fontawesome-free/css/all.min.css\">

\t\t<!-- Theme style -->

\t\t<link rel=\"stylesheet\" href=\"../../dist/css/adminlte.min.css\">

\t</head>

\t<body
\t\tclass=\"hold-transition sidebar-mini\">

\t\t<!-- general form elements disabled -->

\t\t<div class=\"card card-warning\">

\t\t\t<div class=\"card-header\">

\t\t\t\t<h3 class=\"card-title\">Ajouter une régle</h3>

\t\t\t</div>

\t\t\t<!-- /.card-header -->

\t\t\t<div class=\"card-body\">

\t\t\t\t<form>

\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-sm-6\">

\t\t\t\t\t\t\t<!-- text input -->

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Nom de la régle</label>

\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Nom sur la boutique</label>

\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>répétition(tous les X produits)</label>

\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Quantité de produits remisés</label>

\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Type de remise</label>

\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Montant de la remise</label>

\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\">

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-sm-6\">

\t\t\t\t\t\t\t\t\t<!-- select -->

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t<label>Choix du produit remisé</label>

\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\">

\t\t\t\t\t\t\t\t\t\t\t<option>option 1</option>

\t\t\t\t\t\t\t\t\t\t\t<option>option 2</option>

\t\t\t\t\t\t\t\t\t\t\t<option>option 3</option>

\t\t\t\t\t\t\t\t\t\t\t<option>option 4</option>

\t\t\t\t\t\t\t\t\t\t\t<option>option 5</option>

\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card-footer\">

\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>

\t\t\t\t\t\t</div>

\t\t\t\t\t</form>

\t\t\t\t</div>

\t\t\t\t<!-- /.card-body -->

\t\t\t</div>
\t\t</body>
\t</body>
</html>
", "responsable/dashboard/promotion.html.twig", "C:\\laragon\\www\\scooptest\\templates\\responsable\\dashboard\\promotion.html.twig");
    }
}
