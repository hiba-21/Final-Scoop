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

/* registration/insclient.html.twig */
class __TwigTemplate_740f16e1f4fbcb79b1e5e9142d550925867177277c635ba164e9777514ad81fc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/insclient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/insclient.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<link rel=\"stylesheet\" href=\"/css/order.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/conclient.css\">
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
\t\t\t\t\t\t<a href=\"appClient\">
\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/produit\">
\t\t\t\t\t\t\tMenu
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/panier\">
\t\t\t\t\t\t\t<img src=\"/img/Shopping Cart.png\" class=\"ShoppingCart\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/conclient\">
\t\t\t\t\t\t\t<button class=\"loginBtn navBtn\">Connexion</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">S'inscrire</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/etat\">
\t\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">L'etat</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "\t\t\t\t<div class=\"fromContainer\">
\t\t\t\t\t<div class=\"fromContainer_First\">
\t\t\t\t\t\t<div class=\"logPicture\">
\t\t\t\t\t\t\t<img src=\"/img/Group 7.svg\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 55
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t\t<div id=\"login-box\">
\t\t\t\t\t\t<div id=\"name\">
\t\t\t\t\t\t\t<div class=\"ins\">
\t\t\t\t\t\t\t\t<h1>S'inscrire</h1>

\t\t\t\t\t\t\t\t";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["insclientForm"]) || array_key_exists("insclientForm", $context) ? $context["insclientForm"] : (function () { throw new RuntimeError('Variable "insclientForm" does not exist.', 62, $this->source); })()), 'form_start');
        echo "

\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["insclientForm"]) || array_key_exists("insclientForm", $context) ? $context["insclientForm"] : (function () { throw new RuntimeError('Variable "insclientForm" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["insclientForm"]) || array_key_exists("insclientForm", $context) ? $context["insclientForm"] : (function () { throw new RuntimeError('Variable "insclientForm" does not exist.', 68, $this->source); })()), "Nom", [], "any", false, false, false, 68), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["insclientForm"]) || array_key_exists("insclientForm", $context) ? $context["insclientForm"] : (function () { throw new RuntimeError('Variable "insclientForm" does not exist.', 71, $this->source); })()), "numero", [], "any", false, false, false, 71), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["insclientForm"]) || array_key_exists("insclientForm", $context) ? $context["insclientForm"] : (function () { throw new RuntimeError('Variable "insclientForm" does not exist.', 75, $this->source); })()), "ville", [], "any", false, false, false, 75), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["insclientForm"]) || array_key_exists("insclientForm", $context) ? $context["insclientForm"] : (function () { throw new RuntimeError('Variable "insclientForm" does not exist.', 78, $this->source); })()), "code_postal", [], "any", false, false, false, 78), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"textbox\">

\t\t\t\t\t\t\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["insclientForm"]) || array_key_exists("insclientForm", $context) ? $context["insclientForm"] : (function () { throw new RuntimeError('Variable "insclientForm" does not exist.', 83, $this->source); })()), "plainPassword", [], "any", false, false, false, 83), 'row', ["label" => "Password"]);
        // line 85
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"textbox\">

\t\t\t\t\t\t\t\t\t";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["insclientForm"]) || array_key_exists("insclientForm", $context) ? $context["insclientForm"] : (function () { throw new RuntimeError('Variable "insclientForm" does not exist.', 89, $this->source); })()), "agreeTerms", [], "any", false, false, false, 89), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["insclientForm"]) || array_key_exists("insclientForm", $context) ? $context["insclientForm"] : (function () { throw new RuntimeError('Variable "insclientForm" does not exist.', 94, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</body>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/insclient.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 94,  191 => 89,  185 => 85,  183 => 83,  175 => 78,  169 => 75,  162 => 71,  156 => 68,  150 => 65,  144 => 62,  137 => 57,  128 => 55,  124 => 54,  116 => 48,  106 => 47,  94 => 102,  92 => 47,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<link rel=\"stylesheet\" href=\"/css/order.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/conclient.css\">
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
\t\t\t\t\t\t<a href=\"appClient\">
\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/produit\">
\t\t\t\t\t\t\tMenu
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/panier\">
\t\t\t\t\t\t\t<img src=\"/img/Shopping Cart.png\" class=\"ShoppingCart\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/conclient\">
\t\t\t\t\t\t\t<button class=\"loginBtn navBtn\">Connexion</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">S'inscrire</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"/etat\">
\t\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">L'etat</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t{% block body %}
\t\t\t\t<div class=\"fromContainer\">
\t\t\t\t\t<div class=\"fromContainer_First\">
\t\t\t\t\t\t<div class=\"logPicture\">
\t\t\t\t\t\t\t<img src=\"/img/Group 7.svg\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% for flashError in app.flashes('verify_email_error') %}
\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<div id=\"login-box\">
\t\t\t\t\t\t<div id=\"name\">
\t\t\t\t\t\t\t<div class=\"ins\">
\t\t\t\t\t\t\t\t<h1>S'inscrire</h1>

\t\t\t\t\t\t\t\t{{ form_start(insclientForm) }}

\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t{{ form_row(insclientForm.email) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t{{ form_row(insclientForm.Nom) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t{{ form_row(insclientForm.numero) }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t{{ form_row(insclientForm.ville) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t{{ form_row(insclientForm.code_postal) }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"textbox\">

\t\t\t\t\t\t\t\t\t{{ form_row(insclientForm.plainPassword, {
           \t\t\t\t\t\t\t\t label: 'Password'
       \t\t\t\t\t\t\t }) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"textbox\">

\t\t\t\t\t\t\t\t\t{{ form_row(insclientForm.agreeTerms) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enregister</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{{ form_end(insclientForm) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</body>
\t\t{% endblock %}
\t</body>
</html>
", "registration/insclient.html.twig", "C:\\laragon\\www\\scooptest\\templates\\registration\\insclient.html.twig");
    }
}
