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

/* registration/register.html.twig */
class __TwigTemplate_0f0c953e20135c6cc2fc6b2536d91bc2ca3fd6e1951eafe53775aa8bf0cf3da9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>

\t\t<link rel=\"stylesheet\" href=\"/css/connecter.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t</head>
\t<body>
\t\t<div class=\"home\">

\t\t\t<nav class=\"nav\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"/appClient\">
\t\t\t\t\t\t<img src=\"img/scoop.png\" class=\"logoImg\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/service\">
\t\t\t\t\t\t\tServices
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/avis1\">
\t\t\t\t\t\t\tAvis
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/contact\">
\t\t\t\t\t\t\tContact
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/login\">
\t\t\t\t\t\t\t<button class=\"loginBtn navBtn\">Connexion</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/register\">
\t\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">S'inscrire</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t";
        // line 51
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

        // line 52
        echo "\t\t\t\t<div class=\"fromContainer\">
\t\t\t\t\t<div class=\"fromContainer_First\">
\t\t\t\t\t\t<div class=\"logPicture\">
\t\t\t\t\t\t\t<img src=\"/img/inscrire.svg\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"site-main\">

\t\t\t\t\t\t";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 61
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t\t\t\t<div id=\"login-box\">
\t\t\t\t\t\t\t<div id=\"name\">
\t\t\t\t\t\t\t\t<div class=\"main\">
\t\t\t\t\t\t\t\t\t<h1>S'inscrire</h1>

\t\t\t\t\t\t\t\t\t";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), 'form_start');
        echo "

\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "nom", [], "any", false, false, false, 71), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "prenom", [], "any", false, false, false, 74), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "domaine", [], "any", false, false, false, 77), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "email", [], "any", false, false, false, 80), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "tel", [], "any", false, false, false, 83), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), "cin", [], "any", false, false, false, 86), 'row');
        echo "

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">

\t\t\t\t\t\t\t\t\t\t";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 91, $this->source); })()), "plainPassword", [], "any", false, false, false, 91), 'row', ["label" => "Password"]);
        // line 93
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">


\t\t\t\t\t\t\t\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 98, $this->source); })()), "confirm_password", [], "any", false, false, false, 98), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">

\t\t\t\t\t\t\t\t\t\t";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 102, $this->source); })()), "agreeTerms", [], "any", false, false, false, 102), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Register</button>
\t\t\t\t\t\t\t\t\t";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 105, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0\" crossorigin=\"anonymous\"></script>
\t\t\t\t</body>
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  211 => 105,  205 => 102,  198 => 98,  191 => 93,  189 => 91,  181 => 86,  175 => 83,  169 => 80,  163 => 77,  157 => 74,  151 => 71,  145 => 68,  138 => 63,  129 => 61,  125 => 60,  115 => 52,  96 => 51,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>

\t\t<link rel=\"stylesheet\" href=\"/css/connecter.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t</head>
\t<body>
\t\t<div class=\"home\">

\t\t\t<nav class=\"nav\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"/appClient\">
\t\t\t\t\t\t<img src=\"img/scoop.png\" class=\"logoImg\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/service\">
\t\t\t\t\t\t\tServices
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/avis1\">
\t\t\t\t\t\t\tAvis
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/contact\">
\t\t\t\t\t\t\tContact
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/login\">
\t\t\t\t\t\t\t<button class=\"loginBtn navBtn\">Connexion</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/register\">
\t\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">S'inscrire</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t{% block body %}
\t\t\t\t<div class=\"fromContainer\">
\t\t\t\t\t<div class=\"fromContainer_First\">
\t\t\t\t\t\t<div class=\"logPicture\">
\t\t\t\t\t\t\t<img src=\"/img/inscrire.svg\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"site-main\">

\t\t\t\t\t\t{% for flashError in app.flashes('verify_email_error') %}
\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<div id=\"login-box\">
\t\t\t\t\t\t\t<div id=\"name\">
\t\t\t\t\t\t\t\t<div class=\"main\">
\t\t\t\t\t\t\t\t\t<h1>S'inscrire</h1>

\t\t\t\t\t\t\t\t\t{{ form_start(registrationForm) }}

\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.nom) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.prenom) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.domaine) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.email) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.tel) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.cin) }}

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">

\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.plainPassword, {
           \t\t\t\t\t\t\t\t label: 'Password'
       \t\t\t\t\t\t\t }) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">


\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.confirm_password)  }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">

\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.agreeTerms) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Register</button>
\t\t\t\t\t\t\t\t\t{{ form_end(registrationForm) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0\" crossorigin=\"anonymous\"></script>
\t\t\t\t</body>
\t\t\t{% endblock %}
", "registration/register.html.twig", "C:\\laragon\\www\\scooptest\\templates\\registration\\register.html.twig");
    }
}
