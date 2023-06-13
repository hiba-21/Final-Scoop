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

/* home/inscrire.html.twig */
class __TwigTemplate_4719c4ceef3d4fca0c49999a6e335ffdda5c14b9ea9f23ceebb16006b502ee17 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/inscrire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/inscrire.html.twig"));

        // line 1
        echo "<head>
\t<link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t<link rel=\"stylesheet\" href=\"/css/inscrire.css\">
\t<link rel=\"stylesheet\" href=\"/css/footer.css\">
</head>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand\" href=\"/\">
\t\t\t<img src=\"/img/scoop.png\" alt=\"\" class=\"img-fluid\">
\t\t</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t<a class=\"nav-link \" aria-current=\"page\" href=\"/\">Accueil
\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/service\">Service</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/avis1\">Avis</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/contact\">Contact</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link active\" href=\"/inscrire\">S'inscrir</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/connecter\">Connecter</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">recherche</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<form class=\"d-flex\">
\t\t\t\t<input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
\t\t\t</form>
\t\t</div>
\t</div>
</nav>
";
        // line 48
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

        // line 49
        echo "\t<body>
\t\t<div class=\"site-main\">
\t\t\t<div id=\"breadcrumbs\">
\t\t\t\t<span>
\t\t\t\t\t<span>
\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t<span class=\"bi bi-house-door-fill\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t&gt;
\t\t\t\t\t\t<span class=\"breadcrumb_last\" aria-current=\"page\">Inscrire</span>
\t\t\t\t\t</span>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<!--script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfunction switchVisible() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById('login-box').style.display = 'none';
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById('Div2').style.display = 'block';
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tconsole.log('bhbhjbhvhv');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script-->
\t\t\t<div id=\"login-box\">
\t\t\t\t<div id=\"name\">
\t\t\t\t\t<div class=\"main\">
\t\t\t\t\t\t<h1>S'inscrire</h1>

\t\t\t\t\t\t";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_start');
        echo "


\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "email", [], "any", false, false, false, 81), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "email", [], "any", false, false, false, 82), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "username", [], "any", false, false, false, 85), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "username", [], "any", false, false, false, 86), 'widget');
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "password", [], "any", false, false, false, 90), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "password", [], "any", false, false, false, 91), 'widget');
        echo "
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<button class=\" btn btn-primary\">
\t\t\t\t\t\t\tEnvoyer
\t\t\t\t\t\t</button>
\t\t\t\t\t\t";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 99
            echo "\t\t\t\t\t\t\t<div class=\"flash-notice\">
\t\t\t\t\t\t\t\t";
            // line 100
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "\t\t\t\t\t\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        echo "


\t\t\t\t\t\t<!--onclick=\"switchVisible()\"-->
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<footer id=\"colophon\" class=\"luke-site-footer\">
\t\t\t\t<div class=\"footer-main-contents\">
\t\t\t\t\t<div class=\"container footersize\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t<section id=\"text-1\" class=\"widget widget_text\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">À Propos de Scoop</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget\">
\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: justify;\"></p>
\t\t\t\t\t\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t<section id=\"custom_html-8\" class=\"widget_text widget widget_custom_html\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">Services</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"services/developpement-web-sur-mesure\">Développement your app sur mesure
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t<section id=\"custom_html-7\" class=\"widget_text widget widget_custom_html\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">Contactez-nous</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"contact-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:+216 36 152 153\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-telephone-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tTéléphone:(+216)53 098 895</a><br>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:contact@etcinfo.fr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-envelope-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tEmail:contactScoop21@gmail.com</a>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-geo-alt-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tHiboun Mahdia - TUNISIE</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t<section id=\"custom_html-9\" class=\"widget_text widget widget_custom_html\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">Suivez-nous</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com\" target=\"_blank\" rel=\"noopener noreferrer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tFacebook</a>
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/img/scoop.png\" class=\"image-footer\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<span class=\"site-info\">Copyright 2021 by Scoop</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"footer-bottom-widget\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--div id=\"cookie-notice\" role=\"banner\" class=\"cookie-revoke-hidden cn-position-bottom cn-effect-fade cookie-notice-visible\" aria-label=\"Cookie Notice\" style=\"background-color: #000;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cookie-notice-container\" style=\"color: #fff;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"cn-notice-text\" class=\"cn-text-container\">Nous utilisons des cookies pour vous garantir la meilleure expérience sur notre site web. Si vous continuez à utiliser ce site, nous supposerons que vous en êtes satisfait.</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"cn-notice-buttons\" class=\"cn-buttons-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" id=\"cn-accept-cookie\" data-cookie-set=\"accept\" class=\"cn-set-cookie cn-button bootstrap button\">Ok</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0\" crossorigin=\"anonymous\"></script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- / Cookie Notice plugin -->
\t\t</body>
\t</body>
</div></body>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/inscrire.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  200 => 103,  191 => 100,  188 => 99,  184 => 98,  174 => 91,  170 => 90,  163 => 86,  159 => 85,  153 => 82,  149 => 81,  142 => 77,  112 => 49,  93 => 48,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
\t<link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t<link rel=\"stylesheet\" href=\"/css/inscrire.css\">
\t<link rel=\"stylesheet\" href=\"/css/footer.css\">
</head>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand\" href=\"/\">
\t\t\t<img src=\"/img/scoop.png\" alt=\"\" class=\"img-fluid\">
\t\t</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t<a class=\"nav-link \" aria-current=\"page\" href=\"/\">Accueil
\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/service\">Service</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/avis1\">Avis</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/contact\">Contact</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link active\" href=\"/inscrire\">S'inscrir</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/connecter\">Connecter</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">recherche</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<form class=\"d-flex\">
\t\t\t\t<input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
\t\t\t</form>
\t\t</div>
\t</div>
</nav>
{% block body%}
\t<body>
\t\t<div class=\"site-main\">
\t\t\t<div id=\"breadcrumbs\">
\t\t\t\t<span>
\t\t\t\t\t<span>
\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t<span class=\"bi bi-house-door-fill\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t&gt;
\t\t\t\t\t\t<span class=\"breadcrumb_last\" aria-current=\"page\">Inscrire</span>
\t\t\t\t\t</span>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<!--script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfunction switchVisible() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById('login-box').style.display = 'none';
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.getElementById('Div2').style.display = 'block';
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tconsole.log('bhbhjbhvhv');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script-->
\t\t\t<div id=\"login-box\">
\t\t\t\t<div id=\"name\">
\t\t\t\t\t<div class=\"main\">
\t\t\t\t\t\t<h1>S'inscrire</h1>

\t\t\t\t\t\t{{form_start(form)}}


\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t{{form_label(form.email)}}
\t\t\t\t\t\t\t{{form_widget(form.email)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t{{form_label(form.username)}}
\t\t\t\t\t\t\t{{form_widget(form.username)}}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t{{form_label(form.password)}}
\t\t\t\t\t\t\t{{form_widget(form.password)}}
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<button class=\" btn btn-primary\">
\t\t\t\t\t\t\tEnvoyer
\t\t\t\t\t\t</button>
\t\t\t\t\t\t{% for message in app.flashes('notice') %}
\t\t\t\t\t\t\t<div class=\"flash-notice\">
\t\t\t\t\t\t\t\t{{ message }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{{form_end(form)}}


\t\t\t\t\t\t<!--onclick=\"switchVisible()\"-->
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<footer id=\"colophon\" class=\"luke-site-footer\">
\t\t\t\t<div class=\"footer-main-contents\">
\t\t\t\t\t<div class=\"container footersize\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t<section id=\"text-1\" class=\"widget widget_text\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">À Propos de Scoop</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget\">
\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: justify;\"></p>
\t\t\t\t\t\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t<section id=\"custom_html-8\" class=\"widget_text widget widget_custom_html\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">Services</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"services/developpement-web-sur-mesure\">Développement your app sur mesure
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t<section id=\"custom_html-7\" class=\"widget_text widget widget_custom_html\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">Contactez-nous</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"contact-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:+216 36 152 153\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-telephone-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tTéléphone:(+216)53 098 895</a><br>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:contact@etcinfo.fr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-envelope-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tEmail:contactScoop21@gmail.com</a>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-geo-alt-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tHiboun Mahdia - TUNISIE</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t<section id=\"custom_html-9\" class=\"widget_text widget widget_custom_html\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">Suivez-nous</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com\" target=\"_blank\" rel=\"noopener noreferrer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tFacebook</a>
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/img/scoop.png\" class=\"image-footer\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<span class=\"site-info\">Copyright 2021 by Scoop</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"footer-bottom-widget\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--div id=\"cookie-notice\" role=\"banner\" class=\"cookie-revoke-hidden cn-position-bottom cn-effect-fade cookie-notice-visible\" aria-label=\"Cookie Notice\" style=\"background-color: #000;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cookie-notice-container\" style=\"color: #fff;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"cn-notice-text\" class=\"cn-text-container\">Nous utilisons des cookies pour vous garantir la meilleure expérience sur notre site web. Si vous continuez à utiliser ce site, nous supposerons que vous en êtes satisfait.</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"cn-notice-buttons\" class=\"cn-buttons-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" id=\"cn-accept-cookie\" data-cookie-set=\"accept\" class=\"cn-set-cookie cn-button bootstrap button\">Ok</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0\" crossorigin=\"anonymous\"></script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- / Cookie Notice plugin -->
\t\t</body>
\t</body>
</div></body>{% endblock %}
", "home/inscrire.html.twig", "C:\\laragon\\www\\scooptest\\templates\\home\\inscrire.html.twig");
    }
}
