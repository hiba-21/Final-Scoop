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

/* responsable/dashboard/statCmd.html.twig */
class __TwigTemplate_ac3099b49c3c9eeca4fa5987581d40de2ed8e60e74bfa2d9753e9f3bdb84f111 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/statCmd.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/statCmd.html.twig"));

        // line 1
        echo "<html>
\t<body>

\t\t<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">

\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h5 class=\"card-title\">Statistique de commands</h5>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-header -->
\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"chart\">
\t\t\t\t\t\t\t<canvas id=\"panniers\" height=\"50\" style=\"height: 50px;\" color=\"white\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.card -->

\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js\" integrity=\"sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
\t\t<script>
\t\t\tlet panniers = document.querySelector(\"#panniers\")
let CmdGraph = new Chart(panniers, {
type: \"doughnut\",
data: {
labels: ";
        // line 33
        echo (isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 33, $this->source); })());
        echo ",
datasets: [
{
label: \"répartition des commandes\",
data: ";
        // line 37
        echo (isset($context["cmdcount"]) || array_key_exists("cmdcount", $context) ? $context["cmdcount"] : (function () { throw new RuntimeError('Variable "cmdcount" does not exist.', 37, $this->source); })());
        echo ",
backgroundColor: [
\"#dc3545\",
\"#17a2b8\",
'Orange',
'Yellow',
'Green',
'Blue'
],
color: \"white\"
}
]
}
})
\t\t</script>
\t\t<script src=\"plugins/jquery/jquery.min.js\"></script><!-- jQuery UI 1.11.4 --><script src=\"plugins/jquery-ui/jquery-ui.min.js\"></script><!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --><script>
\t\t\t\$.widget.bridge('uibutton', \$.ui.button)
\t\t</script><!-- Bootstrap 4 --><script src=\"plugins/bootstrap/js/bootstrap.bundle.min.js\"></script><!-- overlayScrollbars --><script src=\"plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script><!-- AdminLTE App --><script src=\"dist/js/adminlte.js\"></script><!-- AdminLTE for demo purposes --><script src=\"dist/js/demo.js\"></script>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "responsable/dashboard/statCmd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  77 => 33,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<body>

\t\t<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">

\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h5 class=\"card-title\">Statistique de commands</h5>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-header -->
\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"chart\">
\t\t\t\t\t\t\t<canvas id=\"panniers\" height=\"50\" style=\"height: 50px;\" color=\"white\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.card -->

\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js\" integrity=\"sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
\t\t<script>
\t\t\tlet panniers = document.querySelector(\"#panniers\")
let CmdGraph = new Chart(panniers, {
type: \"doughnut\",
data: {
labels: {{ dates|raw }},
datasets: [
{
label: \"répartition des commandes\",
data: {{ cmdcount|raw }},
backgroundColor: [
\"#dc3545\",
\"#17a2b8\",
'Orange',
'Yellow',
'Green',
'Blue'
],
color: \"white\"
}
]
}
})
\t\t</script>
\t\t<script src=\"plugins/jquery/jquery.min.js\"></script><!-- jQuery UI 1.11.4 --><script src=\"plugins/jquery-ui/jquery-ui.min.js\"></script><!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --><script>
\t\t\t\$.widget.bridge('uibutton', \$.ui.button)
\t\t</script><!-- Bootstrap 4 --><script src=\"plugins/bootstrap/js/bootstrap.bundle.min.js\"></script><!-- overlayScrollbars --><script src=\"plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script><!-- AdminLTE App --><script src=\"dist/js/adminlte.js\"></script><!-- AdminLTE for demo purposes --><script src=\"dist/js/demo.js\"></script>
\t</body>
</html>
", "responsable/dashboard/statCmd.html.twig", "C:\\laragon\\www\\scooptest\\templates\\responsable\\dashboard\\statCmd.html.twig");
    }
}
