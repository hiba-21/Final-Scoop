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

/* responsable/temp.html.twig */
class __TwigTemplate_0a09e0e0fdfc7276acaa2fe73f040aa9f69336d4dd5b262a544d4a5475448363 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/temp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/temp.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>responsable | Accueil
\t\t</title>
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\">
\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t<!-- Font Awesome -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- Theme style -->
\t\t<link
\t\trel=\"stylesheet\" href=\"dist/css/adminlte.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
\t\t<!-- Ionicons -->
\t\t<link rel=\"stylesheet\" href=\"/css/temp.css\">
\t\t<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t</head>
\t<body class=\"hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
\t\t<div
\t\t\tclass=\"wrapper\">

\t\t\t<!-- Navbar -->
\t\t\t<nav
\t\t\t\tclass=\"main-header navbar navbar-expand navbar-white navbar-light\">
\t\t\t\t<!-- Left navbar links -->
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t\t\t<a href=\"/temp\" class=\"nav-link\">Accueil</a>
\t\t\t\t\t</li>

\t\t\t\t</ul>

\t\t\t\t<!-- Right navbar links -->
\t\t\t\t<ul
\t\t\t\t\tclass=\"navbar-nav ml-auto\">
\t\t\t\t\t<!-- Navbar Search -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"navbar-search-block\">
\t\t\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-navbar\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- Notifications Dropdown Menu -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"far fa-bell\"></i>
\t\t\t\t\t\t\t<span class=\"badge badge-warning navbar-badge\">15</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t\t\t\t<span class=\"dropdown-item dropdown-header\">15 Notifications</span>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope mr-2\"></i>
\t\t\t\t\t\t\t\t4 new messages
\t\t\t\t\t\t\t\t<span class=\"float-right text-muted text-sm\">3 mins</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-users mr-2\"></i>
\t\t\t\t\t\t\t\t8 friend requests
\t\t\t\t\t\t\t\t<span class=\"float-right text-muted text-sm\">12 hours</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-file mr-2\"></i>
\t\t\t\t\t\t\t\t3 new reports
\t\t\t\t\t\t\t\t<span class=\"float-right text-muted text-sm\">2 days</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-expand-arrows-alt\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-th-large\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- /.navbar -->

\t\t\t<!-- Main Sidebar Container -->
\t\t\t<aside
\t\t\t\tclass=\"main-sidebar sidebar-dark-primary elevation-4\">
\t\t\t\t<!-- Brand Logo -->
\t\t\t\t<a href=\"/temp\" class=\"brand-link\">
\t\t\t\t\t<img src=\"/img/scoop.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
\t\t\t\t\t<span class=\"brand-text font-weight-light\">Scoop</span>
\t\t\t\t</a>

\t\t\t\t<!-- Sidebar -->
\t\t\t\t<div
\t\t\t\t\tclass=\"sidebar\">


\t\t\t\t\t<!-- SidebarSearch Form -->
\t\t\t\t\t<div class=\"form-inline\">
\t\t\t\t\t\t<div class=\"input-group\" data-widget=\"sidebar-search\">
\t\t\t\t\t\t\t<input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-sidebar\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-fw\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Sidebar Menu -->
\t\t\t\t\t<nav class=\"mt-2\">
\t\t\t\t\t\t<ul
\t\t\t\t\t\t\tclass=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
\t\t\t\t\t\t\t<!-- Add icons to the links using the .nav-icon class
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t               with font-awesome or any other icon font library -->
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"/reglage\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-th\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tReglages
\t\t\t\t\t\t\t\t\t\t<span class=\"right badge badge-danger\">New</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t\t\t<i class=\"right fas fa-angle-left\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">

\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/utilisateurs\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Statistique de Clients</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/categories\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Produits</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/stat\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tStatistique de Commmandes</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-plus-square\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tCatalogue
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tCategories
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/respo/Categories/ajout\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Ajouter un categorie</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/respo/Categories/cat\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>gestion des categories</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 221, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 222
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respo_Categories_aff_Produit", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 225)]), "html", null, true);
            echo "\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-th\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 228), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"right badge badge-danger\">New</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "

\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tProduits
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/respo/produit/ajout\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Ajouter un produit</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/respo/Categories/produit\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>gestion des produits</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/promotion/promo\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Promotion</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/supplements\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tSuppléments
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"/commands\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon \"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tCommandes
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"/tab/clients\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tree\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tClients
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- /.sidebar-menu -->
\t\t\t\t</div>
\t\t\t\t<!-- /.sidebar -->
\t\t\t</aside>

\t\t\t<!-- Content Wrapper. Contains page content -->
\t\t\t<div class=\"content-wrapper iframe-mode\" data-widget=\"iframe\" data-loading-screen=\"750\">
\t\t\t\t<div class=\"nav navbar navbar-expand navbar-white navbar-light border-bottom p-0\">
\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link bg-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Close</a>
\t\t\t\t\t\t<div class=\"dropdown-menu mt-0\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-widget=\"iframe-close\" data-type=\"all\">Close All</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-widget=\"iframe-close\" data-type=\"all-other\">Close All Other</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"nav-link bg-light\" href=\"#\" data-widget=\"iframe-scrollleft\">
\t\t\t\t\t\t<i class=\"fas fa-angle-double-left\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"navbar-nav overflow-hidden\" role=\"tablist\"></ul>
\t\t\t\t\t<a class=\"nav-link bg-light\" href=\"#\" data-widget=\"iframe-scrollright\">
\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"nav-link bg-light\" href=\"#\" data-widget=\"iframe-fullscreen\">
\t\t\t\t\t\t<i class=\"fas fa-expand\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t<div class=\"tab-empty\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<section class=\"content\">
\t\t\t\t\t\t\t\t<div class=\"container-fluid\">

\t\t\t\t\t\t\t\t\t<div class=\"content-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 342
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 342, $this->source); })()), "user", [], "any", false, false, false, 342)) {
            // line 343
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_edit");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-file-person\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 346
            echo "ne peut pas modifier son profil
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 348
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"m-0\">Mon Profil</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 350
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 350, $this->source); })()), "user", [], "any", false, false, false, 350)) {
            // line 351
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBienvenue";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 351, $this->source); })()), "user", [], "any", false, false, false, 351), "nom", [], "any", false, false, false, 351), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 352
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 352, $this->source); })()), "user", [], "any", false, false, false, 352), "prenom", [], "any", false, false, false, 352), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tà votre profile.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 355
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div><hr>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Catégories</h3>

\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Pour gérer votre catégories et leurs disponibilité.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-bag\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/respo/Categories/cat\" class=\"small-box-footer\">Plus info
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-success\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Produits
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Pour gérer votre produits et leurs disponibilité.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-stats-bars\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/respo/Categories/produit\" class=\"small-box-footer\">Plus info
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Commandes</h3>

\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Pour suivre vos commandes du jour , l'historique ou celles à venir.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-person-add\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/commands\" class=\"small-box-footer\">Plus info
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Promotion</h3>

\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Pour gérer votre promotion et leurs disponibilité.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-pie-graph\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/promotion/promo\" class=\"small-box-footer\">Plus  info
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Statistique Clients</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"Clients\" height=\"180\" style=\"height: 180px;\" color=\"white\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Autres Statistiques</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-group\" color=\"#00bc8c\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"colorr\">Les Statistiques de produits
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.progress-group -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/categories\" class=\"color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLes Statistiques de commandes
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-loading\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h2 class=\"display-4\">Tab is loading
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-sync fa-spin\"></i>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<aside class=\"control-sidebar control-sidebar-dark\"></aside>

\t\t\t</div>
\t\t</div>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js\" integrity=\"sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
\t\t<script>
\t\t\tlet Clients = document.querySelector(\"#Clients\")
let ClientGraph = new Chart(Clients, {
type: \"bar\",
data: {
labels: ";
        // line 498
        echo (isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 498, $this->source); })());
        echo ",
datasets: [
{
label: \"répartition des clients\",
data: ";
        // line 502
        echo (isset($context["clientcount"]) || array_key_exists("clientcount", $context) ? $context["clientcount"] : (function () { throw new RuntimeError('Variable "clientcount" does not exist.', 502, $this->source); })());
        echo ",
backgroundColor: [
\"#dc3545\", \"#17a2b8\"
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
        return "responsable/temp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 502,  578 => 498,  433 => 355,  427 => 352,  422 => 351,  420 => 350,  416 => 348,  412 => 346,  404 => 343,  402 => 342,  293 => 235,  280 => 228,  274 => 225,  269 => 222,  265 => 221,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>responsable | Accueil
\t\t</title>
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\">
\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t<!-- Font Awesome -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- Theme style -->
\t\t<link
\t\trel=\"stylesheet\" href=\"dist/css/adminlte.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
\t\t<!-- Ionicons -->
\t\t<link rel=\"stylesheet\" href=\"/css/temp.css\">
\t\t<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">
\t</head>
\t<body class=\"hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
\t\t<div
\t\t\tclass=\"wrapper\">

\t\t\t<!-- Navbar -->
\t\t\t<nav
\t\t\t\tclass=\"main-header navbar navbar-expand navbar-white navbar-light\">
\t\t\t\t<!-- Left navbar links -->
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t\t\t<a href=\"/temp\" class=\"nav-link\">Accueil</a>
\t\t\t\t\t</li>

\t\t\t\t</ul>

\t\t\t\t<!-- Right navbar links -->
\t\t\t\t<ul
\t\t\t\t\tclass=\"navbar-nav ml-auto\">
\t\t\t\t\t<!-- Navbar Search -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"navbar-search-block\">
\t\t\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-navbar\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- Notifications Dropdown Menu -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"far fa-bell\"></i>
\t\t\t\t\t\t\t<span class=\"badge badge-warning navbar-badge\">15</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t\t\t\t<span class=\"dropdown-item dropdown-header\">15 Notifications</span>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope mr-2\"></i>
\t\t\t\t\t\t\t\t4 new messages
\t\t\t\t\t\t\t\t<span class=\"float-right text-muted text-sm\">3 mins</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-users mr-2\"></i>
\t\t\t\t\t\t\t\t8 friend requests
\t\t\t\t\t\t\t\t<span class=\"float-right text-muted text-sm\">12 hours</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-file mr-2\"></i>
\t\t\t\t\t\t\t\t3 new reports
\t\t\t\t\t\t\t\t<span class=\"float-right text-muted text-sm\">2 days</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-expand-arrows-alt\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-th-large\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- /.navbar -->

\t\t\t<!-- Main Sidebar Container -->
\t\t\t<aside
\t\t\t\tclass=\"main-sidebar sidebar-dark-primary elevation-4\">
\t\t\t\t<!-- Brand Logo -->
\t\t\t\t<a href=\"/temp\" class=\"brand-link\">
\t\t\t\t\t<img src=\"/img/scoop.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
\t\t\t\t\t<span class=\"brand-text font-weight-light\">Scoop</span>
\t\t\t\t</a>

\t\t\t\t<!-- Sidebar -->
\t\t\t\t<div
\t\t\t\t\tclass=\"sidebar\">


\t\t\t\t\t<!-- SidebarSearch Form -->
\t\t\t\t\t<div class=\"form-inline\">
\t\t\t\t\t\t<div class=\"input-group\" data-widget=\"sidebar-search\">
\t\t\t\t\t\t\t<input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-sidebar\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-fw\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Sidebar Menu -->
\t\t\t\t\t<nav class=\"mt-2\">
\t\t\t\t\t\t<ul
\t\t\t\t\t\t\tclass=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
\t\t\t\t\t\t\t<!-- Add icons to the links using the .nav-icon class
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t               with font-awesome or any other icon font library -->
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"/reglage\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-th\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tReglages
\t\t\t\t\t\t\t\t\t\t<span class=\"right badge badge-danger\">New</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t\t\t<i class=\"right fas fa-angle-left\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">

\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/utilisateurs\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Statistique de Clients</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/categories\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Produits</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/stat\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tStatistique de Commmandes</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-plus-square\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tCatalogue
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tCategories
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/respo/Categories/ajout\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Ajouter un categorie</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/respo/Categories/cat\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>gestion des categories</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% for categorie in categories %}


\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"respo_Categories_aff_Produit\", {id: categorie.id}) }}\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-th\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{categorie.nom}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"right badge badge-danger\">New</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tProduits
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/respo/produit/ajout\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Ajouter un produit</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/respo/Categories/produit\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>gestion des produits</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/promotion/promo\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Promotion</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/supplements\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tSuppléments
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"/commands\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon \"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tCommandes
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"/tab/clients\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tree\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tClients
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- /.sidebar-menu -->
\t\t\t\t</div>
\t\t\t\t<!-- /.sidebar -->
\t\t\t</aside>

\t\t\t<!-- Content Wrapper. Contains page content -->
\t\t\t<div class=\"content-wrapper iframe-mode\" data-widget=\"iframe\" data-loading-screen=\"750\">
\t\t\t\t<div class=\"nav navbar navbar-expand navbar-white navbar-light border-bottom p-0\">
\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link bg-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Close</a>
\t\t\t\t\t\t<div class=\"dropdown-menu mt-0\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-widget=\"iframe-close\" data-type=\"all\">Close All</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-widget=\"iframe-close\" data-type=\"all-other\">Close All Other</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"nav-link bg-light\" href=\"#\" data-widget=\"iframe-scrollleft\">
\t\t\t\t\t\t<i class=\"fas fa-angle-double-left\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"navbar-nav overflow-hidden\" role=\"tablist\"></ul>
\t\t\t\t\t<a class=\"nav-link bg-light\" href=\"#\" data-widget=\"iframe-scrollright\">
\t\t\t\t\t\t<i class=\"fas fa-angle-double-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"nav-link bg-light\" href=\"#\" data-widget=\"iframe-fullscreen\">
\t\t\t\t\t\t<i class=\"fas fa-expand\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t<div class=\"tab-empty\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<section class=\"content\">
\t\t\t\t\t\t\t\t<div class=\"container-fluid\">

\t\t\t\t\t\t\t\t\t<div class=\"content-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('profil_edit')}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-file-person\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}ne peut pas modifier son profil
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"m-0\">Mon Profil</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBienvenue{{ app.user.nom}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ app.user.prenom}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tà votre profile.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div><hr>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Catégories</h3>

\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Pour gérer votre catégories et leurs disponibilité.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-bag\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/respo/Categories/cat\" class=\"small-box-footer\">Plus info
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-success\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Produits
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Pour gérer votre produits et leurs disponibilité.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-stats-bars\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/respo/Categories/produit\" class=\"small-box-footer\">Plus info
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Commandes</h3>

\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Pour suivre vos commandes du jour , l'historique ou celles à venir.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-person-add\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/commands\" class=\"small-box-footer\">Plus info
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small-box bg-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Promotion</h3>

\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Pour gérer votre promotion et leurs disponibilité.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-pie-graph\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/promotion/promo\" class=\"small-box-footer\">Plus  info
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Statistique Clients</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"Clients\" height=\"180\" style=\"height: 180px;\" color=\"white\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Autres Statistiques</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-group\" color=\"#00bc8c\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"colorr\">Les Statistiques de produits
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.progress-group -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/categories\" class=\"color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLes Statistiques de commandes
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-loading\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h2 class=\"display-4\">Tab is loading
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-sync fa-spin\"></i>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<aside class=\"control-sidebar control-sidebar-dark\"></aside>

\t\t\t</div>
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
backgroundColor: [
\"#dc3545\", \"#17a2b8\"
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
", "responsable/temp.html.twig", "C:\\laragon\\www\\scooptest\\templates\\responsable\\temp.html.twig");
    }
}
