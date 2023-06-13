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

/* vacance_fermeture/show.html.twig */
class __TwigTemplate_4013383ccfa3b85003b9163bae12a77d94b10bbc2a193c26e8cef38ab0131208 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vacance_fermeture/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vacance_fermeture/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vacance_fermeture/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "VacanceFermeture";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>VacanceFermeture</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacance_fermeture"]) || array_key_exists("vacance_fermeture", $context) ? $context["vacance_fermeture"] : (function () { throw new RuntimeError('Variable "vacance_fermeture" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacance_fermeture"]) || array_key_exists("vacance_fermeture", $context) ? $context["vacance_fermeture"] : (function () { throw new RuntimeError('Variable "vacance_fermeture" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Start</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["vacance_fermeture"]) || array_key_exists("vacance_fermeture", $context) ? $context["vacance_fermeture"] : (function () { throw new RuntimeError('Variable "vacance_fermeture" does not exist.', 20, $this->source); })()), "start", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacance_fermeture"]) || array_key_exists("vacance_fermeture", $context) ? $context["vacance_fermeture"] : (function () { throw new RuntimeError('Variable "vacance_fermeture" does not exist.', 20, $this->source); })()), "start", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>End</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["vacance_fermeture"]) || array_key_exists("vacance_fermeture", $context) ? $context["vacance_fermeture"] : (function () { throw new RuntimeError('Variable "vacance_fermeture" does not exist.', 24, $this->source); })()), "end", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacance_fermeture"]) || array_key_exists("vacance_fermeture", $context) ? $context["vacance_fermeture"] : (function () { throw new RuntimeError('Variable "vacance_fermeture" does not exist.', 24, $this->source); })()), "end", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>All_day</th>
                <td>";
        // line 28
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["vacance_fermeture"]) || array_key_exists("vacance_fermeture", $context) ? $context["vacance_fermeture"] : (function () { throw new RuntimeError('Variable "vacance_fermeture" does not exist.', 28, $this->source); })()), "allDay", [], "any", false, false, false, 28)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Background_color</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacance_fermeture"]) || array_key_exists("vacance_fermeture", $context) ? $context["vacance_fermeture"] : (function () { throw new RuntimeError('Variable "vacance_fermeture" does not exist.', 32, $this->source); })()), "backgroundColor", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Border_color</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacance_fermeture"]) || array_key_exists("vacance_fermeture", $context) ? $context["vacance_fermeture"] : (function () { throw new RuntimeError('Variable "vacance_fermeture" does not exist.', 36, $this->source); })()), "borderColor", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text_color</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vacance_fermeture"]) || array_key_exists("vacance_fermeture", $context) ? $context["vacance_fermeture"] : (function () { throw new RuntimeError('Variable "vacance_fermeture" does not exist.', 40, $this->source); })()), "textColor", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vacance_fermeture_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vacance_fermeture_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["vacance_fermeture"]) || array_key_exists("vacance_fermeture", $context) ? $context["vacance_fermeture"] : (function () { throw new RuntimeError('Variable "vacance_fermeture" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 49
        echo twig_include($this->env, $context, "vacance_fermeture/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vacance_fermeture/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  158 => 47,  153 => 45,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}VacanceFermeture{% endblock %}

{% block body %}
    <h1>VacanceFermeture</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ vacance_fermeture.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ vacance_fermeture.title }}</td>
            </tr>
            <tr>
                <th>Start</th>
                <td>{{ vacance_fermeture.start ? vacance_fermeture.start|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>End</th>
                <td>{{ vacance_fermeture.end ? vacance_fermeture.end|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>All_day</th>
                <td>{{ vacance_fermeture.allDay ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Background_color</th>
                <td>{{ vacance_fermeture.backgroundColor }}</td>
            </tr>
            <tr>
                <th>Border_color</th>
                <td>{{ vacance_fermeture.borderColor }}</td>
            </tr>
            <tr>
                <th>Text_color</th>
                <td>{{ vacance_fermeture.textColor }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('vacance_fermeture_index') }}\">back to list</a>

    <a href=\"{{ path('vacance_fermeture_edit', {'id': vacance_fermeture.id}) }}\">edit</a>

    {{ include('vacance_fermeture/_delete_form.html.twig') }}
{% endblock %}
", "vacance_fermeture/show.html.twig", "C:\\laragon\\www\\scooptest\\templates\\vacance_fermeture\\show.html.twig");
    }
}
