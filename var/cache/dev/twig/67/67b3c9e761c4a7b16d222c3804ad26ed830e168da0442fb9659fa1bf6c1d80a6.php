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

/* responsable/dashboard/categories.html.twig */
class __TwigTemplate_f3a389c821d7652242a812e191178cbd08f7e2fbe8454908575347532a6f5767 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/categories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/categories.html.twig"));

        // line 1
        echo "<html>
\t<body>

\t\t<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"chart\">
\t\t\t\t<canvas id=\"produits\" height=\"120\" style=\"height: 120px;\" color=\"white\"></canvas>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js\" integrity=\"sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
\t\t<script>
\t\t\tlet produits = document.querySelector(\"#produits\")
let produitsGraph = new Chart(produits, {
type: \"bar\",
data: {
labels: ";
        // line 17
        echo (isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 17, $this->source); })());
        echo ",
datasets: [
{
label: \"répartition des produits\",
data: ";
        // line 21
        echo (isset($context["produitcount"]) || array_key_exists("produitcount", $context) ? $context["produitcount"] : (function () { throw new RuntimeError('Variable "produitcount" does not exist.', 21, $this->source); })());
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
        return "responsable/dashboard/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<body>

\t\t<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"chart\">
\t\t\t\t<canvas id=\"produits\" height=\"120\" style=\"height: 120px;\" color=\"white\"></canvas>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js\" integrity=\"sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
\t\t<script>
\t\t\tlet produits = document.querySelector(\"#produits\")
let produitsGraph = new Chart(produits, {
type: \"bar\",
data: {
labels: {{ dates|raw }},
datasets: [
{
label: \"répartition des produits\",
data: {{ produitcount|raw }},
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
", "responsable/dashboard/categories.html.twig", "C:\\laragon\\www\\scooptest\\templates\\responsable\\dashboard\\categories.html.twig");
    }
}
