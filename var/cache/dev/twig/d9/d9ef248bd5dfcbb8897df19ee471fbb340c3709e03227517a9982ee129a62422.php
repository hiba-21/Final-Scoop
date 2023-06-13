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

/* home/EditProfile.html.twig */
class __TwigTemplate_a80233e218ff66ada23715251565399dcd77d6d70ab3eba893c5f3420ecc6fda extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/EditProfile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/EditProfile.html.twig"));

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
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">

\t</head>
\t<body>

\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 39
            echo "\t\t\t<div class=\"p-3 my-2 rounded-2 success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t<div class=\"card card-secondary\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h3 class=\"card-title\">Modifer du profile de
\t\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "prenom", [], "any", false, false, false, 45), "html", null, true);
        echo "</h3>
\t\t\t</div><hr>
\t\t\t";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_start');
        echo "
\t\t\t<div class=\"form-horizontal\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Nom
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "nom", [], "any", false, false, false, 54), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Prenom
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "prenom", [], "any", false, false, false, 61), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"card-footer\">

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-secondary\">Valider</button>
\t\t\t\t\t\t";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        echo "

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t\t<a href=\"/profil/editpass\" class=\"col\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-secondary\">Modifer mot de passe</button>
\t\t\t</a>
\t\t</div>


\t\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/EditProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 68,  129 => 61,  119 => 54,  109 => 47,  104 => 45,  100 => 44,  95 => 41,  86 => 39,  82 => 38,  43 => 1,);
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
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/css/axentix.min.css\">

\t</head>
\t<body>

\t\t{% for message in app.flashes('message') %}
\t\t\t<div class=\"p-3 my-2 rounded-2 success\">{{message}}</div>
\t\t{% endfor %}
\t\t<div class=\"card card-secondary\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h3 class=\"card-title\">Modifer du profile de
\t\t\t\t\t{{app.user.nom}}
\t\t\t\t\t{{app.user.prenom}}</h3>
\t\t\t</div><hr>
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
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Prenom
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t{{form_widget(form.prenom)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"card-footer\">

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-secondary\">Valider</button>
\t\t\t\t\t\t{{form_end(form)}}

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t\t<a href=\"/profil/editpass\" class=\"col\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-secondary\">Modifer mot de passe</button>
\t\t\t</a>
\t\t</div>


\t\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.2.1/dist/js/axentix.min.js\"></script>
\t</body>
</html>
", "home/EditProfile.html.twig", "C:\\laragon\\www\\scooptest\\templates\\home\\EditProfile.html.twig");
    }
}
