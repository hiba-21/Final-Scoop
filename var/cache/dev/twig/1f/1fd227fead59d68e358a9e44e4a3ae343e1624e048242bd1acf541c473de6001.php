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

/* responsable/dashboard/statistic.html.twig */
class __TwigTemplate_addf4602d777a2b5bb4c0f7d6137d0d029c6c4ba76386a7d7bd201f9fa374181 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/statistic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/statistic.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>ChartJS</title>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\">
\t</head>
\t<body>
\t\t<div class=\"container\" width=\"10\" height=\"10\">
\t\t\t<h1>Statistique</h1>
\t\t\t<canvas id=\"Clients\"></canvas>

\t\t</div>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js\" integrity=\"sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
\t\t<script>
\t\t\tlet Clients = document.querySelector(\"#Clients\")
let ClientGraph = new Chart(Clients, {
type: \"bar\",
data: {
labels: ";
        // line 20
        echo (isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 20, $this->source); })());
        echo ",
datasets: [
{
label: \"répartition des clients\",
data: ";
        // line 24
        echo (isset($context["clientcount"]) || array_key_exists("clientcount", $context) ? $context["clientcount"] : (function () { throw new RuntimeError('Variable "clientcount" does not exist.', 24, $this->source); })());
        echo ",
backgroundColor: [\"red\", \"green\"]
}
]
}
})
\t\t</script>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "responsable/dashboard/statistic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>ChartJS</title>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\">
\t</head>
\t<body>
\t\t<div class=\"container\" width=\"10\" height=\"10\">
\t\t\t<h1>Statistique</h1>
\t\t\t<canvas id=\"Clients\"></canvas>

\t\t</div>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js\" integrity=\"sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
\t\t<script>
\t\t\tlet Clients = document.querySelector(\"#Clients\")
let ClientGraph = new Chart(Clients, {
type: \"bar\",
data: {
labels: {{ dates|raw }},
datasets: [
{
label: \"répartition des clients\",
data: {{ clientcount|raw }},
backgroundColor: [\"red\", \"green\"]
}
]
}
})
\t\t</script>
\t</body>
</html>
", "responsable/dashboard/statistic.html.twig", "C:\\laragon\\www\\scooptest\\templates\\responsable\\dashboard\\statistic.html.twig");
    }
}
