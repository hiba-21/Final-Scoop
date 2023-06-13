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

/* respo/produit/ajout.html.twig */
class __TwigTemplate_67f58d9c4a0cb364d1dde1c489a514e2a96cf5a83a985843129299d9b7311704 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "respo/produit/ajout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "respo/produit/ajout.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t<!-- Font Awesome -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- Ionicons -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<!-- Tempusdominus Bootstrap 4 -->
\t\t<link
\t\trel=\"stylesheet\" href=\"/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
\t\t<!-- iCheck -->
\t\t<link
\t\trel=\"stylesheet\" href=\"/plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
\t\t<!-- JQVMap -->
\t\t<link
\t\trel=\"stylesheet\" href=\"/plugins/jqvmap/jqvmap.min.css\">
\t\t<!-- Theme style -->
\t\t<link
\t\trel=\"stylesheet\" href=\"/dist/css/adminlte.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link
\t\trel=\"stylesheet\" href=\"/plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
\t\t<!-- Daterange picker -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/daterangepicker/daterangepicker.css\">
\t\t<!-- summernote -->
\t\t<link rel=\"stylesheet\" href=\"plugins/summernote/summernote-bs4.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/ajout.css\">

\t</head>
\t<body>


\t\t<div class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t<div class=\"col-sm-6\">


\t\t\t\t\t\t<i class=\"bi bi-gear-fill\"></i>
\t\t\t\t\t\t<h1 class=\"m-0\">Produits</h1>
\t\t\t\t\t\t<h6>Ajouter un  Produit</h6>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Produits</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- /.col -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->
\t\t\t</div>
\t\t\t<!-- /.container-fluid -->
\t\t\t<hr>
\t\t</div>
\t\t<div class=\"card card-secondary\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h3 class=\"card-title\">Ajouter un produit</h3>
\t\t\t</div>
\t\t\t";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_start');
        echo "
\t\t\t<div class=\"form-horizontal\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Nom
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "nom", [], "any", false, false, false, 77), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Description
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "description", [], "any", false, false, false, 84), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Prix
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "prix", [], "any", false, false, false, 91), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Categories
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "categories", [], "any", false, false, false, 98), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Image
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "images", [], "any", false, false, false, 105), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-secondary\">Valider</button>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>
\t\t";
        // line 116
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "vars", [], "any", false, false, false, 116), "valid", [], "any", false, false, false, 116)) {
            // line 117
            echo "\t\t\t<ul
\t\t\t\tclass=\"alert alert-danger\">
\t\t\t\t";
            // line 120
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "vars", [], "any", false, false, false, 120), "errors", [], "any", false, false, false, 120));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 121
                echo "\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 121), "html", null, true);
                echo "</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "\t\t\t\t";
            // line 124
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "children", [], "any", false, false, false, 124));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 125
                echo "\t\t\t\t\t";
                // line 126
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 126), "errors", [], "any", true, true, false, 126)) {
                    // line 127
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 127), "errors", [], "any", false, false, false, 127));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 128
                        echo "\t\t\t\t\t\t\t<li>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 128), "label", [], "any", false, false, false, 128), "html", null, true);
                        echo "

\t\t\t\t\t\t\t\t";
                        // line 130
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 130), "html", null, true);
                        echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                        // line 133
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 134
                    echo "\t\t\t\t\t";
                }
                // line 135
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "\t\t\t</ul>
\t\t";
        }
        // line 138
        echo "\t\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), 'form_end');
        echo "


\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "respo/produit/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 138,  241 => 136,  235 => 135,  232 => 134,  226 => 133,  221 => 130,  215 => 128,  210 => 127,  207 => 126,  205 => 125,  200 => 124,  198 => 123,  189 => 121,  184 => 120,  180 => 117,  178 => 116,  164 => 105,  154 => 98,  144 => 91,  134 => 84,  124 => 77,  114 => 70,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t<!-- Font Awesome -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- Ionicons -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<!-- Tempusdominus Bootstrap 4 -->
\t\t<link
\t\trel=\"stylesheet\" href=\"/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
\t\t<!-- iCheck -->
\t\t<link
\t\trel=\"stylesheet\" href=\"/plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
\t\t<!-- JQVMap -->
\t\t<link
\t\trel=\"stylesheet\" href=\"/plugins/jqvmap/jqvmap.min.css\">
\t\t<!-- Theme style -->
\t\t<link
\t\trel=\"stylesheet\" href=\"/dist/css/adminlte.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link
\t\trel=\"stylesheet\" href=\"/plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
\t\t<!-- Daterange picker -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/daterangepicker/daterangepicker.css\">
\t\t<!-- summernote -->
\t\t<link rel=\"stylesheet\" href=\"plugins/summernote/summernote-bs4.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/ajout.css\">

\t</head>
\t<body>


\t\t<div class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t<div class=\"col-sm-6\">


\t\t\t\t\t\t<i class=\"bi bi-gear-fill\"></i>
\t\t\t\t\t\t<h1 class=\"m-0\">Produits</h1>
\t\t\t\t\t\t<h6>Ajouter un  Produit</h6>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Produits</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- /.col -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->
\t\t\t</div>
\t\t\t<!-- /.container-fluid -->
\t\t\t<hr>
\t\t</div>
\t\t<div class=\"card card-secondary\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h3 class=\"card-title\">Ajouter un produit</h3>
\t\t\t</div>
\t\t\t{{form_start(form)}}
\t\t\t<div class=\"form-horizontal\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Nom
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t{{form_widget(form.nom)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Description
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t{{form_widget(form.description)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Prix
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t{{form_widget(form.prix)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Categories
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t{{form_widget(form.categories)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Image
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t{{form_widget(form.images)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-secondary\">Valider</button>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>
\t\t{% if not form.vars.valid %}
\t\t\t<ul
\t\t\t\tclass=\"alert alert-danger\">
\t\t\t\t{# on affiche en premier les erreurs globales (cas classiques) #}
\t\t\t\t{% for error in form.vars.errors %}
\t\t\t\t\t<li>{{error.message}}</li>
\t\t\t\t{% endfor %}
\t\t\t\t{# ainsi que les erreurs concernant chaque champs #}
\t\t\t\t{% for child in form.children %}
\t\t\t\t\t{# si le champ à des erreur #}
\t\t\t\t\t{% if child.vars.errors is defined %}
\t\t\t\t\t\t{% for error in child.vars.errors %}
\t\t\t\t\t\t\t<li>{{child.vars.label}}

\t\t\t\t\t\t\t\t{{error.message}}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{# on ajoute le label du champ devant l'erreur pour plus de précisions. #}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t{% endif %}
\t\t{{form_end(form)}}


\t</body>
</html>
", "respo/produit/ajout.html.twig", "C:\\laragon\\www\\scooptest\\templates\\respo\\produit\\ajout.html.twig");
    }
}
