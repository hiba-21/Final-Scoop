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

/* home/avis1.html.twig */
class __TwigTemplate_30eed0d788c93cfac036e1b1766e5f6d306649c9803fbed55c4e4e5c5a5a4520 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/avis1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/avis1.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/avis.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/footer.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" href=\"https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css\">

\t\t";
        // line 10
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "\t</head>

\t<body>
\t\t<nav class=\"nav\">
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"/appClient\">
\t\t\t\t\t<img src=\"img/scoop.png\" class=\"logoImg\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t\t<div>
\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\tAccueil
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a href=\"/service\">
\t\t\t\t\t\tServices
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a href=\"/avis1\">
\t\t\t\t\t\tAvis
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a href=\"/contact\">
\t\t\t\t\t\tContact
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a href=\"/login\">
\t\t\t\t\t\t<button class=\"loginBtn navBtn\">Connexion</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a href=\"/register\">
\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">S'inscrire</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</nav>
\t\t<div class=\"fromContainer\">
\t\t\t<div class=\"fromContainer_First\">
\t\t\t\t<div class=\"logPicture\">
\t\t\t\t\t<img src=\"/img/Group 8.svg\"/>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"login-box\">
\t\t\t\t<div id=\"name\">
\t\t\t\t\t<div class=\"main\">
\t\t\t\t\t\t<div id=\"name\">
\t\t\t\t\t\t\t<h1>TÉMOIGNAGES</h1>
\t\t\t\t\t\t\t<h2>Nos clients sont satisfaits et ils nous le disent. N'hésitez pas à faire pareil en remplissant le formulaire ci-dessous.</h2>

\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"page-contentcontenu\">
\t\t\t\t\t\t\t\t<!--form method=\"post\" enctype=\"multipart/form-data\" id=\"gtestform_2\" action=\"\"-->
\t\t\t\t\t\t\t\t";
        // line 118
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t<div id=\"review_form_fields_2\" class=\"review_form_body\">

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<!--label for=\"reviewed_by\">Nom, Prénom, Entreprise</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"textbox\"-->
\t\t\t\t\t\t\t\t\t\t";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "nom", [], "any", false, false, false, 125), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "nom", [], "any", false, false, false, 126), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--input type=\"text\" name=\"reviewed_by\" class=\"form-control\" id=\"reviewed_by\" required=\"\" -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"form-group\">
\t\t\t\t\t\t\t\t\t<!--label for=\"review_message\">Témoignage</label-->
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t<div class=\"eva1\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "evaluation", [], "any", false, false, false, 135), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"eva2\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "evaluation", [], "any", false, false, false, 138), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t\t\t\t\t<!--textarea name=\"review_message\" class=\"form-control\" rows=\"10\" id=\"review_message\" required=\"\"></textarea-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<!--label for=\"ratingInput\">Note</label><input type=\"text\" name=\"note\" id=\"note\" value=\"0\" style=\"background: transparent;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    border: none;\"-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"textbox\">

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "note", [], "any", false, false, false, 148), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "note", [], "any", false, false, false, 149), 'widget', ["attr" => ["class" => "notes"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"stars\" style=\"font-size: x-large;\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"5\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<!--label for=\"review_message\">Témoignage</label-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "commentaire", [], "any", false, false, false, 164), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "commentaire", [], "any", false, false, false, 165), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--textarea name=\"review_message\" class=\"form-control\" rows=\"10\" id=\"review_message\" required=\"\"></textarea-->
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<button class=\" btn btn-primary\">Envoyer</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 178, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 178));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 179
            echo "\t\t\t\t<div class=\"flash-notice\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "\t\t\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t\t<div class=\"hi\">
\t\t\t";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 184, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 185
            echo "\t\t\t\t<p>Publié par
\t\t\t\t\t";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "nom", [], "any", false, false, false, 186), "html", null, true);
            echo "
\t\t\t\t\tle(<small>";
            // line 187
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createAt", [], "any", false, false, false, 187), "d/m/Y H:i"), "html", null, true);
            echo "</small>)
\t\t\t\t</p>
\t\t\t\t<div>
\t\t\t\t\t";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comment"], "evaluation", [], "any", false, false, false, 190));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 191
                echo "\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "
\t\t\t\t\t<br>
\t\t\t\t\t";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentaire", [], "any", false, false, false, 195), "html", null, true);
            echo "
\t\t\t\t\t<br>
\t\t\t\t\tle note est
\t\t\t\t\t";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "note", [], "any", false, false, false, 198), "html", null, true);
            echo "
\t\t\t\t</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "
\t\t</div>
\t</body>
</html></body></html></body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
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
        return "home/avis1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 11,  294 => 10,  280 => 202,  270 => 198,  264 => 195,  260 => 193,  251 => 191,  247 => 190,  241 => 187,  237 => 186,  234 => 185,  230 => 184,  223 => 181,  214 => 179,  210 => 178,  194 => 165,  190 => 164,  172 => 149,  168 => 148,  155 => 138,  149 => 135,  137 => 126,  133 => 125,  123 => 118,  60 => 57,  58 => 10,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t\t<link rel=\"stylesheet\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/avis.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/footer.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/starrating/css/rating.css') }}\"/>
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

\t<body>
\t\t<nav class=\"nav\">
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"/appClient\">
\t\t\t\t\t<img src=\"img/scoop.png\" class=\"logoImg\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t\t<div>
\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\tAccueil
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a href=\"/service\">
\t\t\t\t\t\tServices
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a href=\"/avis1\">
\t\t\t\t\t\tAvis
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a href=\"/contact\">
\t\t\t\t\t\tContact
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a href=\"/login\">
\t\t\t\t\t\t<button class=\"loginBtn navBtn\">Connexion</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<a href=\"/register\">
\t\t\t\t\t\t<button class=\"signUpBtn navBtn\">S'inscrire</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</nav>
\t\t<div class=\"fromContainer\">
\t\t\t<div class=\"fromContainer_First\">
\t\t\t\t<div class=\"logPicture\">
\t\t\t\t\t<img src=\"/img/Group 8.svg\"/>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"login-box\">
\t\t\t\t<div id=\"name\">
\t\t\t\t\t<div class=\"main\">
\t\t\t\t\t\t<div id=\"name\">
\t\t\t\t\t\t\t<h1>TÉMOIGNAGES</h1>
\t\t\t\t\t\t\t<h2>Nos clients sont satisfaits et ils nous le disent. N'hésitez pas à faire pareil en remplissant le formulaire ci-dessous.</h2>

\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"page-contentcontenu\">
\t\t\t\t\t\t\t\t<!--form method=\"post\" enctype=\"multipart/form-data\" id=\"gtestform_2\" action=\"\"-->
\t\t\t\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t\t\t<div id=\"review_form_fields_2\" class=\"review_form_body\">

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<!--label for=\"reviewed_by\">Nom, Prénom, Entreprise</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"textbox\"-->
\t\t\t\t\t\t\t\t\t\t{{form_label(form.nom)}}
\t\t\t\t\t\t\t\t\t\t{{form_widget(form.nom)}}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--input type=\"text\" name=\"reviewed_by\" class=\"form-control\" id=\"reviewed_by\" required=\"\" -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"form-group\">
\t\t\t\t\t\t\t\t\t<!--label for=\"review_message\">Témoignage</label-->
\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t<div class=\"eva1\">
\t\t\t\t\t\t\t\t\t\t\t{{form_label(form.evaluation)}}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"eva2\">
\t\t\t\t\t\t\t\t\t\t\t{{form_widget(form.evaluation)}}
\t\t\t\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t\t\t\t\t<!--textarea name=\"review_message\" class=\"form-control\" rows=\"10\" id=\"review_message\" required=\"\"></textarea-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<!--label for=\"ratingInput\">Note</label><input type=\"text\" name=\"note\" id=\"note\" value=\"0\" style=\"background: transparent;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    border: none;\"-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"textbox\">

\t\t\t\t\t\t\t\t\t\t\t\t{{form_label(form.note)}}
\t\t\t\t\t\t\t\t\t\t\t\t{{form_widget(form.note, {'attr': {'class': 'notes'}})}}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"stars\" style=\"font-size: x-large;\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"lar  la-star\" data-value=\"5\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<!--label for=\"review_message\">Témoignage</label-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t\t\t\t\t\t\t{{form_label(form.commentaire)}}
\t\t\t\t\t\t\t\t\t\t\t\t{{form_widget(form.commentaire)}}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--textarea name=\"review_message\" class=\"form-control\" rows=\"10\" id=\"review_message\" required=\"\"></textarea-->
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<button class=\" btn btn-primary\">Envoyer</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% for message in app.flashes('notice') %}
\t\t\t\t<div class=\"flash-notice\">{{ message }}</div>
\t\t\t{% endfor %}
\t\t\t{{form_end(form)}}
\t\t</div>
\t\t<div class=\"hi\">
\t\t\t{% for comment in comments %}
\t\t\t\t<p>Publié par
\t\t\t\t\t{{comment.nom}}
\t\t\t\t\tle(<small>{{comment.createAt|date(\"d/m/Y H:i\")}}</small>)
\t\t\t\t</p>
\t\t\t\t<div>
\t\t\t\t\t{% for item in comment.evaluation %}
\t\t\t\t\t\t<li>{{ item }}</li>
\t\t\t\t\t{% endfor %}

\t\t\t\t\t<br>
\t\t\t\t\t{{comment.commentaire}}
\t\t\t\t\t<br>
\t\t\t\t\tle note est
\t\t\t\t\t{{comment.note}}
\t\t\t\t</div>

\t\t\t{% endfor %}

\t\t</div>
\t</body>
</html></body></html></body></html>
", "home/avis1.html.twig", "C:\\laragon\\www\\scooptest\\templates\\home\\avis1.html.twig");
    }
}
