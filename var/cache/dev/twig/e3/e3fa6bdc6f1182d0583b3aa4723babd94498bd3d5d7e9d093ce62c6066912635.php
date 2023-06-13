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

/* home/avis.html.twig */
class __TwigTemplate_0509d16df3d8f6c9a6576d001870c12833f286d0aafb83e554e4f9a23d570b04 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/avis.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/avis.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/avis.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/footer.css\">
\t\t<link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
\t\t";
        // line 8
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "\t</head>
\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t\t<div class=\"container-fluid\">
\t\t\t<a class=\"navbar-brand\" href=\"/\">
\t\t\t\t<img src=\"/img/scoop.png\" alt=\"\" class=\"img-fluid\">
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t<a class=\"nav-link \" aria-current=\"page\" href=\"/\">Accueil
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/service\">Service</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"/avis\">Avis</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/contact\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/inscrire\">S'inscrir</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/connecter\">Connecter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">recherche</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<form class=\"d-flex\">
\t\t\t\t\t<input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</nav>
\t<body>
\t\t<div class=\"site-main\">
\t\t\t<div id=\"breadcrumbs\">
\t\t\t\t<span>
\t\t\t\t\t<span>
\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t<span class=\"bi bi-house-door-fill\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t&gt;
\t\t\t\t\t\t<span class=\"breadcrumb_last\" aria-current=\"page\">Avis</span>
\t\t\t\t\t</span>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<div class=\"header_agence\">
\t\t\t\t<div class=\"image-avis\"><img src=\"/img/avis.png\" alt=\"Témoignages Scoop\"/>
\t\t\t\t</div>
\t\t\t\t<div id=\"page-header-site\">
\t\t\t\t\t<h1>TÉMOIGNAGES</h1>
\t\t\t\t\t<h2>Nos clients sont satisfaits et ils nous le disent. N'hésitez pas à faire pareil en remplissant le formulaire ci-dessous.</h2>
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tclass=\"page-content contenu\">
\t\t\t\t\t<!--form method=\"post\" enctype=\"multipart/form-data\" id=\"gtestform_2\" action=\"\"-->
\t\t\t\t\t";
        // line 120
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t<div id=\"review_form_fields_2\" class=\"review_form_body\">

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"form-group\">
\t\t\t\t\t\t\t<!--label for=\"reviewed_by\">Nom, Prénom, Entreprise</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"textbox\"-->
\t\t\t\t\t\t\t";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "nom", [], "any", false, false, false, 127), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "nom", [], "any", false, false, false, 128), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--input type=\"text\" name=\"reviewed_by\" class=\"form-control\" id=\"reviewed_by\" required=\"\" -->
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"form-group\">
\t\t\t\t\t\t<!--label for=\"review_message\">Témoignage</label-->
\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "commentaire", [], "any", false, false, false, 136), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "commentaire", [], "any", false, false, false, 137), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--textarea name=\"review_message\" class=\"form-control\" rows=\"10\" id=\"review_message\" required=\"\"></textarea-->
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"form-group\">
\t\t\t\t\t\t<!--label for=\"ratingInput\">Note</label><input type=\"text\" name=\"note\" id=\"note\" value=\"0\" style=\"background: transparent;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    border: none;\"-->
\t\t\t\t\t\t<div class=\"textbox\">

\t\t\t\t\t\t\t";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "note", [], "any", false, false, false, 147), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "note", [], "any", false, false, false, 148), 'widget', ["attr" => ["class" => "notes"]]);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"stars\" style=\"font-size: x-large;\">
\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"1\"></i>
\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"2\"></i>
\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"3\"></i>
\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"4\"></i>
\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"5\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<button class=\" btn btn-primary\">Envoyer</button>
\t\t\t\t\t";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 161));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 162
            echo "\t\t\t\t\t\t<div class=\"flash-notice\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "\t\t\t\t\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), 'form_end');
        echo "


\t\t\t\t</div>
\t\t\t\t<!--footer-->
\t\t\t\t<footer id=\"colophon\" class=\"luke-site-footer\">
\t\t\t\t\t<div class=\"footer-main-contents\">
\t\t\t\t\t\t<div class=\"container footersize\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t\t<section id=\"text-1\" class=\"widget widget_text\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">À Propos de Scoop</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget\">
\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: justify;\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t\t<section id=\"custom_html-8\" class=\"widget_text widget widget_custom_html\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">Services</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services/developpement-web-sur-mesure\">Développement your app sur mesure
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t\t<section id=\"custom_html-7\" class=\"widget_text widget widget_custom_html\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">Contactez-nous</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contact-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:+216 36 152 153\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-telephone-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tTéléphone:(+216)53 098 895</a><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:contact@etcinfo.fr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-envelope-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tEmail:contactScoop21@gmail.com</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-geo-alt-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tHiboun Mahdia - TUNISIE</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t\t<section id=\"custom_html-9\" class=\"widget_text widget widget_custom_html\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">Suivez-nous</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com\" target=\"_blank\" rel=\"noopener noreferrer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFacebook</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/img/scoop.png\" class=\"image-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t\t<div class=\"footer-bottom\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<span class=\"site-info\">Copyright 2021 by Scoop</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"footer-bottom-widget\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"cookie-notice\" role=\"banner\" class=\"cookie-revoke-hidden cn-position-bottom cn-effect-fade cookie-notice-visible\" aria-label=\"Cookie Notice\" style=\"background-color: #000;\">
\t\t\t\t\t<div class=\"cookie-notice-container\" style=\"color: #fff;\">
\t\t\t\t\t\t<span id=\"cn-notice-text\" class=\"cn-text-container\">Nous utilisons des cookies pour vous garantir la meilleure expérience sur notre site web. Si vous continuez à utiliser ce site, nous supposerons que vous en êtes satisfait.</span>
\t\t\t\t\t\t<span id=\"cn-notice-buttons\" class=\"cn-buttons-container\">
\t\t\t\t\t\t\t<a href=\"#\" id=\"cn-accept-cookie\" data-cookie-set=\"accept\" class=\"cn-set-cookie cn-button bootstrap button\">Ok</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0\" crossorigin=\"anonymous\"></script>
\t\t\t\t<!-- / Cookie Notice plugin -->
\t\t\t</body>
\t\t</html>
\t</body>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "\t\t\t<script>
\t\t\t\twindow.onload = () => { // on va charcher toutes les etoiles
const stars = document.querySelectorAll(\".la-star\");
// on va chercher l'input
const note = document.querySelector(\".notes\");
// on boucle sur les etoiles pour le ajouter des ecouteurs d'evenements

for (star of stars) { // on ecoute le survol
star.addEventListener(\"mouseover\", function () {
resetStars();
this.style.color = \"rgba(255,174,0,1)\";
this.classList.add(\"las\");
this.classList.remove(\"lar\");

// l'element precedent dans les DOM(de meme niveau,balise soeur)

let previousStar = this.previousElementSibling;

while (previousStar) { // on passe l'etoile qui precede en jaune
previousStar.style.color = \"rgba(255,174,0,1)\";
previousStar.classList.add(\"las\");
previousStar.classList.remove(\"lar\");

// on recupere l'etoile qui la precede
previousStar = previousStar.previousElementSibling;
}


});
// on ecoute le clic
star.addEventListener(\"click\", function () {
note.value = this.dataset.value;

});
}
function resetStars() {
for (star of stars) {
star.style.color = \"black\";
star.classList.add(\"lar\");
star.classList.remove(\"las\");

}
}
}
\t\t\t</script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/avis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 9,  306 => 8,  197 => 164,  188 => 162,  184 => 161,  168 => 148,  164 => 147,  151 => 137,  147 => 136,  136 => 128,  132 => 127,  122 => 120,  55 => 55,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t\t<link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/avis.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/footer.css\">
\t\t<link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">
\t\t{% block javascripts %}
\t\t\t<script>
\t\t\t\twindow.onload = () => { // on va charcher toutes les etoiles
const stars = document.querySelectorAll(\".la-star\");
// on va chercher l'input
const note = document.querySelector(\".notes\");
// on boucle sur les etoiles pour le ajouter des ecouteurs d'evenements

for (star of stars) { // on ecoute le survol
star.addEventListener(\"mouseover\", function () {
resetStars();
this.style.color = \"rgba(255,174,0,1)\";
this.classList.add(\"las\");
this.classList.remove(\"lar\");

// l'element precedent dans les DOM(de meme niveau,balise soeur)

let previousStar = this.previousElementSibling;

while (previousStar) { // on passe l'etoile qui precede en jaune
previousStar.style.color = \"rgba(255,174,0,1)\";
previousStar.classList.add(\"las\");
previousStar.classList.remove(\"lar\");

// on recupere l'etoile qui la precede
previousStar = previousStar.previousElementSibling;
}


});
// on ecoute le clic
star.addEventListener(\"click\", function () {
note.value = this.dataset.value;

});
}
function resetStars() {
for (star of stars) {
star.style.color = \"black\";
star.classList.add(\"lar\");
star.classList.remove(\"las\");

}
}
}
\t\t\t</script>
\t\t{% endblock %}
\t</head>
\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t\t<div class=\"container-fluid\">
\t\t\t<a class=\"navbar-brand\" href=\"/\">
\t\t\t\t<img src=\"/img/scoop.png\" alt=\"\" class=\"img-fluid\">
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t<a class=\"nav-link \" aria-current=\"page\" href=\"/\">Accueil
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/service\">Service</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"/avis\">Avis</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/contact\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/inscrire\">S'inscrir</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/connecter\">Connecter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">recherche</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<form class=\"d-flex\">
\t\t\t\t\t<input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</nav>
\t<body>
\t\t<div class=\"site-main\">
\t\t\t<div id=\"breadcrumbs\">
\t\t\t\t<span>
\t\t\t\t\t<span>
\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t<span class=\"bi bi-house-door-fill\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t&gt;
\t\t\t\t\t\t<span class=\"breadcrumb_last\" aria-current=\"page\">Avis</span>
\t\t\t\t\t</span>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<div class=\"header_agence\">
\t\t\t\t<div class=\"image-avis\"><img src=\"/img/avis.png\" alt=\"Témoignages Scoop\"/>
\t\t\t\t</div>
\t\t\t\t<div id=\"page-header-site\">
\t\t\t\t\t<h1>TÉMOIGNAGES</h1>
\t\t\t\t\t<h2>Nos clients sont satisfaits et ils nous le disent. N'hésitez pas à faire pareil en remplissant le formulaire ci-dessous.</h2>
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tclass=\"page-content contenu\">
\t\t\t\t\t<!--form method=\"post\" enctype=\"multipart/form-data\" id=\"gtestform_2\" action=\"\"-->
\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t<div id=\"review_form_fields_2\" class=\"review_form_body\">

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"form-group\">
\t\t\t\t\t\t\t<!--label for=\"reviewed_by\">Nom, Prénom, Entreprise</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"textbox\"-->
\t\t\t\t\t\t\t{{form_label(form.nom)}}
\t\t\t\t\t\t\t{{form_widget(form.nom)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--input type=\"text\" name=\"reviewed_by\" class=\"form-control\" id=\"reviewed_by\" required=\"\" -->
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"form-group\">
\t\t\t\t\t\t<!--label for=\"review_message\">Témoignage</label-->
\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t{{form_label(form.commentaire)}}
\t\t\t\t\t\t\t{{form_widget(form.commentaire)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--textarea name=\"review_message\" class=\"form-control\" rows=\"10\" id=\"review_message\" required=\"\"></textarea-->
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"form-group\">
\t\t\t\t\t\t<!--label for=\"ratingInput\">Note</label><input type=\"text\" name=\"note\" id=\"note\" value=\"0\" style=\"background: transparent;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    border: none;\"-->
\t\t\t\t\t\t<div class=\"textbox\">

\t\t\t\t\t\t\t{{form_label(form.note)}}
\t\t\t\t\t\t\t{{form_widget(form.note, {'attr': {'class': 'notes'}})}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"stars\" style=\"font-size: x-large;\">
\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"1\"></i>
\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"2\"></i>
\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"3\"></i>
\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"4\"></i>
\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"5\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<button class=\" btn btn-primary\">Envoyer</button>
\t\t\t\t\t{% for message in app.flashes('notice') %}
\t\t\t\t\t\t<div class=\"flash-notice\">{{ message }}</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{{form_end(form)}}


\t\t\t\t</div>
\t\t\t\t<!--footer-->
\t\t\t\t<footer id=\"colophon\" class=\"luke-site-footer\">
\t\t\t\t\t<div class=\"footer-main-contents\">
\t\t\t\t\t\t<div class=\"container footersize\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t\t<section id=\"text-1\" class=\"widget widget_text\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">À Propos de Scoop</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget\">
\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: justify;\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t\t<section id=\"custom_html-8\" class=\"widget_text widget widget_custom_html\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">Services</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"services/developpement-web-sur-mesure\">Développement your app sur mesure
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t\t<section id=\"custom_html-7\" class=\"widget_text widget widget_custom_html\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">Contactez-nous</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contact-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:+216 36 152 153\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-telephone-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tTéléphone:(+216)53 098 895</a><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:contact@etcinfo.fr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-envelope-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tEmail:contactScoop21@gmail.com</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-geo-alt-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tHiboun Mahdia - TUNISIE</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-widget-box\">
\t\t\t\t\t\t\t\t\t\t<section id=\"custom_html-9\" class=\"widget_text widget widget_custom_html\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget-title\">Suivez-nous</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"textwidget custom-html-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com\" target=\"_blank\" rel=\"noopener noreferrer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFacebook</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/img/scoop.png\" class=\"image-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t\t<div class=\"footer-bottom\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<span class=\"site-info\">Copyright 2021 by Scoop</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"footer-bottom-widget\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"cookie-notice\" role=\"banner\" class=\"cookie-revoke-hidden cn-position-bottom cn-effect-fade cookie-notice-visible\" aria-label=\"Cookie Notice\" style=\"background-color: #000;\">
\t\t\t\t\t<div class=\"cookie-notice-container\" style=\"color: #fff;\">
\t\t\t\t\t\t<span id=\"cn-notice-text\" class=\"cn-text-container\">Nous utilisons des cookies pour vous garantir la meilleure expérience sur notre site web. Si vous continuez à utiliser ce site, nous supposerons que vous en êtes satisfait.</span>
\t\t\t\t\t\t<span id=\"cn-notice-buttons\" class=\"cn-buttons-container\">
\t\t\t\t\t\t\t<a href=\"#\" id=\"cn-accept-cookie\" data-cookie-set=\"accept\" class=\"cn-set-cookie cn-button bootstrap button\">Ok</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0\" crossorigin=\"anonymous\"></script>
\t\t\t\t<!-- / Cookie Notice plugin -->
\t\t\t</body>
\t\t</html>
\t</body>

", "home/avis.html.twig", "C:\\laragon\\www\\scooptest\\templates\\home\\avis.html.twig");
    }
}
