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

/* responsable/reglages/reglage.html.twig */
class __TwigTemplate_6b71531db5a12c7f2ca2e79fcb24ffa93c74175b054c5b02f0eb1030b2844261 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/reglages/reglage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/reglages/reglage.html.twig"));

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
\t\trel=\"stylesheet\" href=\"plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
\t\t<!-- iCheck -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
\t\t<!-- JQVMap -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/jqvmap/jqvmap.min.css\">
\t\t<!-- Theme style -->
\t\t<link
\t\trel=\"stylesheet\" href=\"dist/css/adminlte.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
\t\t<!-- Daterange picker -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/daterangepicker/daterangepicker.css\">
\t\t<!-- summernote -->
\t\t<link rel=\"stylesheet\" href=\"plugins/summernote/summernote-bs4.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">

\t</head>
\t<body>


\t\t<div class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t<i class=\"bi bi-gear-fill\"></i>
\t\t\t\t\t\t<h1 class=\"m-0\">Réglages</h1>
\t\t\t\t\t\t<h6>Configuration de votre boutique en ligne</h6>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Réglages</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- /.col -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->
\t\t\t</div>
\t\t\t<!-- /.container-fluid -->
\t\t\t<hr>
\t\t</div>

\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li></li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"/reglage\">Informations de la boutique</a>

\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link active\" href=\"/vac\">Vacances & Fermetures
\t\t\t\t</a>
\t\t\t</li>


\t\t</ul>
\t</body>
</html>
<div class=\"card card-primary\">
\t<div class=\"card-header\"></div>
\t<!-- /.card-header -->
\t<!-- form start -->
\t";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_start');
        echo "
\t<div class=\"card-body\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Description courte\">Nom</label>
\t\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "nom", [], "any", false, false, false, 88), 'widget');
        echo "
\t\t\t<!--textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter Description courte\"></textarea-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Description courte\">Description</label>
\t\t\t";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "descrip", [], "any", false, false, false, 93), 'widget');
        echo "
\t\t\t<!--textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter Description courte\"></textarea-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Description longue\">Type</label>
\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "type", [], "any", false, false, false, 98), 'widget');
        echo "
\t\t\t<!--textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter Description longue\"></textarea-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"exampleInputEmail1\">Email address</label>
\t\t\t";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "email", [], "any", false, false, false, 103), 'widget');
        echo "
\t\t\t<!--input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter email\"-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Description courte\">Tel</label>
\t\t\t";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "tel", [], "any", false, false, false, 108), 'widget');
        echo "
\t\t\t<!--textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter Description courte\"></textarea-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Capital\">
\t\t\t\tCapital
\t\t\t</label>
\t\t\t";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "capital", [], "any", false, false, false, 115), 'widget');
        echo "
\t\t\t<!--input type=\"text\" class=\"form-control\" id=\"Capital\" placeholder=\"Enter Capital\"-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Siret\">
\t\t\t\tSiret
\t\t\t</label>
\t\t\t";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "siret", [], "any", false, false, false, 122), 'widget');
        echo "
\t\t\t<!--input type=\"text\" class=\"form-control\" id=\"Siret\" placeholder=\"Enter Siret\"-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"RCS\">
\t\t\t\tRCS
\t\t\t</label>
\t\t\t";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "RCS", [], "any", false, false, false, 129), 'widget');
        echo "
\t\t\t<!--input type=\"text\" class=\"form-control\" id=\"RCS\" placeholder=\"Enter RCS\"-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Meta title\">Adresse</label>
\t\t\t";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "adresse", [], "any", false, false, false, 134), 'widget');
        echo "
\t\t\t<!--input type=\"text\" class=\"form-control\" id=\"Meta title\" placeholder=\"Meta title\"-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Meta Description\">
\t\t\t\tCode Postal
\t\t\t</label>
\t\t\t";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "code_postal", [], "any", false, false, false, 141), 'widget');
        echo "
\t\t\t<!--textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter Meta Description\"></textarea-->
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"TVA\">
\t\t\t\tVille
\t\t\t</label>
\t\t\t";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "ville", [], "any", false, false, false, 149), 'widget');
        echo "
\t\t\t<!--input type=\"text\" class=\"form-control\" id=\"TVA\" placeholder=\"Enter TVA\"-->
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"Code APE\">
\t\t\t\tPays
\t\t\t</label>
\t\t\t";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "pays", [], "any", false, false, false, 157), 'widget');
        echo "
\t\t\t<!--input type=\"text\" class=\"form-control\" id=\"Code APE\" placeholder=\"Enter Code APE\"-->
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"Code APE\">
\t\t\t\tImages
\t\t\t</label>
\t\t\t";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "photos", [], "any", false, false, false, 165), 'widget');
        echo "
\t\t\t<!--input type=\"text\" class=\"form-control\" id=\"Code APE\" placeholder=\"Enter Code APE\"-->
\t\t</div>
\t</div>
\t<!-- /.card-body -->

\t<div class=\"card-footer\">
\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t</div>
\t";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 174));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 175
            echo "\t\t<div class=\"flash-notice\">
\t\t\t";
            // line 176
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "\t";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "vars", [], "any", false, false, false, 179), "valid", [], "any", false, false, false, 179)) {
            // line 180
            echo "\t\t<ul
\t\t\tclass=\"alert alert-danger\">
\t\t\t";
            // line 183
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "vars", [], "any", false, false, false, 183), "errors", [], "any", false, false, false, 183));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 184
                echo "\t\t\t\t<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 184), "html", null, true);
                echo "</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "\t\t\t";
            // line 187
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "children", [], "any", false, false, false, 187));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 188
                echo "\t\t\t\t";
                // line 189
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 189), "errors", [], "any", true, true, false, 189)) {
                    // line 190
                    echo "\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 190), "errors", [], "any", false, false, false, 190));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 191
                        echo "\t\t\t\t\t\t<li>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 191), "label", [], "any", false, false, false, 191), "html", null, true);
                        echo "

\t\t\t\t\t\t\t";
                        // line 193
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 193), "html", null, true);
                        echo "
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                        // line 196
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 197
                    echo "\t\t\t\t";
                }
                // line 198
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "\t\t</ul>
\t";
        }
        // line 201
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), 'form_end');
        echo "</div><!-- /.content-header --></body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "responsable/reglages/reglage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 201,  340 => 199,  334 => 198,  331 => 197,  325 => 196,  320 => 193,  314 => 191,  309 => 190,  306 => 189,  304 => 188,  299 => 187,  297 => 186,  288 => 184,  283 => 183,  279 => 180,  276 => 179,  267 => 176,  264 => 175,  260 => 174,  248 => 165,  237 => 157,  226 => 149,  215 => 141,  205 => 134,  197 => 129,  187 => 122,  177 => 115,  167 => 108,  159 => 103,  151 => 98,  143 => 93,  135 => 88,  128 => 84,  43 => 1,);
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
\t\trel=\"stylesheet\" href=\"plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
\t\t<!-- iCheck -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
\t\t<!-- JQVMap -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/jqvmap/jqvmap.min.css\">
\t\t<!-- Theme style -->
\t\t<link
\t\trel=\"stylesheet\" href=\"dist/css/adminlte.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
\t\t<!-- Daterange picker -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/daterangepicker/daterangepicker.css\">
\t\t<!-- summernote -->
\t\t<link rel=\"stylesheet\" href=\"plugins/summernote/summernote-bs4.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">

\t</head>
\t<body>


\t\t<div class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t<i class=\"bi bi-gear-fill\"></i>
\t\t\t\t\t\t<h1 class=\"m-0\">Réglages</h1>
\t\t\t\t\t\t<h6>Configuration de votre boutique en ligne</h6>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Réglages</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- /.col -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->
\t\t\t</div>
\t\t\t<!-- /.container-fluid -->
\t\t\t<hr>
\t\t</div>

\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li></li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"/reglage\">Informations de la boutique</a>

\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link active\" href=\"/vac\">Vacances & Fermetures
\t\t\t\t</a>
\t\t\t</li>


\t\t</ul>
\t</body>
</html>
<div class=\"card card-primary\">
\t<div class=\"card-header\"></div>
\t<!-- /.card-header -->
\t<!-- form start -->
\t{{form_start(form)}}
\t<div class=\"card-body\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Description courte\">Nom</label>
\t\t\t{{form_widget(form.nom)}}
\t\t\t<!--textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter Description courte\"></textarea-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Description courte\">Description</label>
\t\t\t{{form_widget(form.descrip)}}
\t\t\t<!--textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter Description courte\"></textarea-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Description longue\">Type</label>
\t\t\t{{form_widget(form.type)}}
\t\t\t<!--textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter Description longue\"></textarea-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"exampleInputEmail1\">Email address</label>
\t\t\t{{form_widget(form.email)}}
\t\t\t<!--input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter email\"-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Description courte\">Tel</label>
\t\t\t{{form_widget(form.tel)}}
\t\t\t<!--textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter Description courte\"></textarea-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Capital\">
\t\t\t\tCapital
\t\t\t</label>
\t\t\t{{form_widget(form.capital)}}
\t\t\t<!--input type=\"text\" class=\"form-control\" id=\"Capital\" placeholder=\"Enter Capital\"-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Siret\">
\t\t\t\tSiret
\t\t\t</label>
\t\t\t{{form_widget(form.siret)}}
\t\t\t<!--input type=\"text\" class=\"form-control\" id=\"Siret\" placeholder=\"Enter Siret\"-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"RCS\">
\t\t\t\tRCS
\t\t\t</label>
\t\t\t{{form_widget(form.RCS)}}
\t\t\t<!--input type=\"text\" class=\"form-control\" id=\"RCS\" placeholder=\"Enter RCS\"-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Meta title\">Adresse</label>
\t\t\t{{form_widget(form.adresse)}}
\t\t\t<!--input type=\"text\" class=\"form-control\" id=\"Meta title\" placeholder=\"Meta title\"-->
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"Meta Description\">
\t\t\t\tCode Postal
\t\t\t</label>
\t\t\t{{form_widget(form.code_postal)}}
\t\t\t<!--textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter Meta Description\"></textarea-->
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"TVA\">
\t\t\t\tVille
\t\t\t</label>
\t\t\t{{form_widget(form.ville)}}
\t\t\t<!--input type=\"text\" class=\"form-control\" id=\"TVA\" placeholder=\"Enter TVA\"-->
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"Code APE\">
\t\t\t\tPays
\t\t\t</label>
\t\t\t{{form_widget(form.pays)}}
\t\t\t<!--input type=\"text\" class=\"form-control\" id=\"Code APE\" placeholder=\"Enter Code APE\"-->
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"Code APE\">
\t\t\t\tImages
\t\t\t</label>
\t\t\t{{form_widget(form.photos)}}
\t\t\t<!--input type=\"text\" class=\"form-control\" id=\"Code APE\" placeholder=\"Enter Code APE\"-->
\t\t</div>
\t</div>
\t<!-- /.card-body -->

\t<div class=\"card-footer\">
\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t</div>
\t{% for message in app.flashes('notice') %}
\t\t<div class=\"flash-notice\">
\t\t\t{{ message }}
\t\t</div>
\t{% endfor %}
\t{% if not form.vars.valid %}
\t\t<ul
\t\t\tclass=\"alert alert-danger\">
\t\t\t{# on affiche en premier les erreurs globales (cas classiques) #}
\t\t\t{% for error in form.vars.errors %}
\t\t\t\t<li>{{error.message}}</li>
\t\t\t{% endfor %}
\t\t\t{# ainsi que les erreurs concernant chaque champs #}
\t\t\t{% for child in form.children %}
\t\t\t\t{# si le champ à des erreur #}
\t\t\t\t{% if child.vars.errors is defined %}
\t\t\t\t\t{% for error in child.vars.errors %}
\t\t\t\t\t\t<li>{{child.vars.label}}

\t\t\t\t\t\t\t{{error.message}}
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{# on ajoute le label du champ devant l'erreur pour plus de précisions. #}
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</ul>
\t{% endif %}
\t{{form_end(form)}}</div><!-- /.content-header --></body></html>
", "responsable/reglages/reglage.html.twig", "C:\\laragon\\www\\scooptest\\templates\\responsable\\reglages\\reglage.html.twig");
    }
}
