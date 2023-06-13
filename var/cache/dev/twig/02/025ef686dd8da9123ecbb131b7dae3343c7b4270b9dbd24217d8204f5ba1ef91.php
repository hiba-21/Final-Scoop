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

/* respo/AffProduit.html.twig */
class __TwigTemplate_8ca65f5ff5ce3e7175e37360fa0beba9384659699c9e54a183820dbeed01e2e2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "respo/AffProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "respo/AffProduit.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produitcategories"]) || array_key_exists("produitcategories", $context) ? $context["produitcategories"] : (function () { throw new RuntimeError('Variable "produitcategories" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produitcategorie"]) {
            // line 2
            echo "

\t<div class=\"card shadow-1 fx-row\">

\t\t<div class=\"primary d-flex vcenter fx-center px-4\">

\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["produitcategorie"], "images", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 9
                echo "\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 9))), "square"), "html", null, true);
                echo "\" alt=\"Image\" width=\"150\"/>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
\t\t</div>
\t\t<div class=\"flex fx-col fx-grow\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<strong>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produitcategorie"], "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "</strong>
\t\t\t</div>
\t\t\t<div class=\"card-content\">

\t\t\t\t<p>
\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produitcategorie"], "description", [], "any", false, false, false, 20), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t<strong>
\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produitcategorie"], "prix", [], "any", false, false, false, 23), "html", null, true);
            echo "DT</strong>


\t\t\t</div>
\t\t</div>

\t</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produitcategorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "respo/AffProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  82 => 20,  74 => 15,  68 => 11,  59 => 9,  55 => 8,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for produitcategorie in produitcategories %}


\t<div class=\"card shadow-1 fx-row\">

\t\t<div class=\"primary d-flex vcenter fx-center px-4\">

\t\t\t{% for image in produitcategorie.images %}
\t\t\t\t<img src=\"{{ asset('/uploads/' ~ image.nom)|imagine_filter('square')}}\" alt=\"Image\" width=\"150\"/>
\t\t\t{% endfor %}

\t\t</div>
\t\t<div class=\"flex fx-col fx-grow\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<strong>{{ produitcategorie.nom }}</strong>
\t\t\t</div>
\t\t\t<div class=\"card-content\">

\t\t\t\t<p>
\t\t\t\t\t{{produitcategorie.description}}
\t\t\t\t</p>
\t\t\t\t<strong>
\t\t\t\t\t{{produitcategorie.prix}}DT</strong>


\t\t\t</div>
\t\t</div>

\t</div>


{% endfor %}
", "respo/AffProduit.html.twig", "C:\\laragon\\www\\scooptest\\templates\\respo\\AffProduit.html.twig");
    }
}
