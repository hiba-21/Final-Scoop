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

/* respo/promotion/ajout.html.twig */
class __TwigTemplate_59b0cf7dd3cb69426acae01dc2b6ecb74a1eb2ea3f426209e8a831a10e7ac0cb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "respo/promotion/ajout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "respo/promotion/ajout.html.twig"));

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
\t\t<link rel=\"stylesheet\" href=\"/css/ajout.css\">
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
\t\t\t\t";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_start');
        echo "
\t\t\t\t<form>

\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-sm-6\">

\t\t\t\t\t\t\t<!-- text input -->

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Nom de la régle</label>

\t\t\t\t\t\t\t\t<!--input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"-->

\t\t\t\t\t\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "firstName", [], "any", false, false, false, 61), 'widget');
        echo "

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Nom sur la boutique</label>

\t\t\t\t\t\t\t\t<!--input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"-->
\t\t\t\t\t\t\t\t";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "lastNAme", [], "any", false, false, false, 74), 'widget');
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>répétition(tous les X produits)</label>
\t\t\t\t\t\t\t\t";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "repetition", [], "any", false, false, false, 84), 'widget');
        echo "
\t\t\t\t\t\t\t\t<!--input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"-->

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Quantité de produits remisés</label>
\t\t\t\t\t\t\t\t";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "quantite", [], "any", false, false, false, 96), 'widget');
        echo "
\t\t\t\t\t\t\t\t<!--input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"-->

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Type de remise</label>
\t\t\t\t\t\t\t\t";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "type", [], "any", false, false, false, 108), 'widget');
        echo "
\t\t\t\t\t\t\t\t<!--input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"-->

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Montant de la remise</label>
\t\t\t\t\t\t\t\t";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "Montant", [], "any", false, false, false, 120), 'widget');
        echo "
\t\t\t\t\t\t\t\t<!--input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"-->

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-sm-6\">

\t\t\t\t\t\t\t\t\t<!-- select -->

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t<label>Choix du produit remisé</label>

\t\t\t\t\t\t\t\t\t\t";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "produits", [], "any", false, false, false, 140), 'widget');
        echo "

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card-footer\">

\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>

\t\t\t\t\t\t</div>

\t\t\t\t\t</form>
\t\t\t\t\t";
        // line 157
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), 'form_end');
        echo "

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
        return "respo/promotion/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 157,  205 => 140,  182 => 120,  167 => 108,  152 => 96,  137 => 84,  124 => 74,  108 => 61,  89 => 45,  43 => 1,);
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
\t\t<link rel=\"stylesheet\" href=\"/css/ajout.css\">
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
\t\t\t\t{{form_start(form)}}
\t\t\t\t<form>

\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-sm-6\">

\t\t\t\t\t\t\t<!-- text input -->

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Nom de la régle</label>

\t\t\t\t\t\t\t\t<!--input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"-->

\t\t\t\t\t\t\t\t{{form_widget(form.firstName)}}

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Nom sur la boutique</label>

\t\t\t\t\t\t\t\t<!--input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"-->
\t\t\t\t\t\t\t\t{{form_widget(form.lastNAme)}}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>répétition(tous les X produits)</label>
\t\t\t\t\t\t\t\t{{form_widget(form.repetition)}}
\t\t\t\t\t\t\t\t<!--input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"-->

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Quantité de produits remisés</label>
\t\t\t\t\t\t\t\t{{form_widget(form.quantite)}}
\t\t\t\t\t\t\t\t<!--input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"-->

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Type de remise</label>
\t\t\t\t\t\t\t\t{{form_widget(form.type)}}
\t\t\t\t\t\t\t\t<!--input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"-->

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t<label>Montant de la remise</label>
\t\t\t\t\t\t\t\t{{form_widget(form.Montant)}}
\t\t\t\t\t\t\t\t<!--input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"-->

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-sm-6\">

\t\t\t\t\t\t\t\t\t<!-- select -->

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t<label>Choix du produit remisé</label>

\t\t\t\t\t\t\t\t\t\t{{form_widget(form.produits)}}

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card-footer\">

\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>

\t\t\t\t\t\t</div>

\t\t\t\t\t</form>
\t\t\t\t\t{{form_end(form)}}

\t\t\t\t</div>

\t\t\t\t<!-- /.card-body -->

\t\t\t</div>
\t\t</body>
\t</body>
</html>
", "respo/promotion/ajout.html.twig", "C:\\laragon\\www\\scooptest\\templates\\respo\\promotion\\ajout.html.twig");
    }
}
