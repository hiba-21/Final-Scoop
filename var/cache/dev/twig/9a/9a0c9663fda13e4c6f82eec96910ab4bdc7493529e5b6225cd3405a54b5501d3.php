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

/* responsable/dashboard/methodeDePaiement.html.twig */
class __TwigTemplate_436eedfa659db96c617ee02da2744a9dacdcef46b112cd8b741aaa01c5b364a6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/methodeDePaiement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/methodeDePaiement.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>responsable| Methodes de paiement</title>

\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t<!-- Font Awesome Icons -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
\t\t<!-- Theme style -->
\t\t<link rel=\"stylesheet\" href=\"dist/css/adminlte.min.css\">
\t</head>
\t<body class=\"hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
\t\t<div
\t\t\tclass=\"wrapper\">

\t\t\t<!-- Preloader -->
\t\t\t<div class=\"preloader flex-column justify-content-center align-items-center\">
\t\t\t\t<img class=\"animation__wobble\" src=\"dist/img/AdminLTELogo.png\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
\t\t\t</div>

\t\t\t<!-- Navbar -->
\t\t\t<nav
\t\t\t\tclass=\"main-header navbar navbar-expand navbar-dark\">
\t\t\t\t<!-- Left navbar links -->
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t\t\t<a href=\"index3.html\" class=\"nav-link\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Contact</a>
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

\t\t\t\t\t<!-- Messages Dropdown Menu -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"far fa-comments\"></i>
\t\t\t\t\t\t\t<span class=\"badge badge-danger navbar-badge\">3</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\t\t\t\tBrad Diesel
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm\">Call me whenever you can...</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Message End -->
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\t\t\t\tJohn Pierce
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm\">I got your message bro</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Message End -->
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\t\t\t\tNora Silvester
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm\">The subject goes here</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Message End -->
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
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
\t\t\t\t<a href=\"index3.html\" class=\"brand-link\">
\t\t\t\t\t<img src=\"dist/img/AdminLTELogo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
\t\t\t\t\t<span class=\"brand-text font-weight-light\">AdminLTE 3</span>
\t\t\t\t</a>

\t\t\t\t<!-- Sidebar -->
\t\t\t\t<div
\t\t\t\t\tclass=\"sidebar\">
\t\t\t\t\t<!-- Sidebar user panel (optional) -->
\t\t\t\t\t<div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t<img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle elevation-2\" alt=\"User Image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block\">Alexander Pierce</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t               with font-awesome or any other icon font library -->
\t\t\t\t\t\t\t<li class=\"nav-item menu-open\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link active\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t\t\t<i class=\"right fas fa-angle-left\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/index1\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Chiffre d'affaire</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/utilisateurs\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Utilisateurs</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/categories\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Categories</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/commands\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Commmandes</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/paiement\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Methodes de paiement</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/platforme\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Platformes</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"pages/widgets.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-th\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tWidgets
\t\t\t\t\t\t\t\t\t\t<span class=\"right badge badge-danger\">New</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-copy\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLayout Options
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-info right\">6</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/top-nav.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Top Navigation</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/top-nav-sidebar.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Top Navigation + Sidebar</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/boxed.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Boxed</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/fixed-sidebar.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Fixed Sidebar</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/fixed-sidebar-custom.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Fixed Sidebar
\t\t\t\t\t\t\t\t\t\t\t\t<small>+ Custom Area</small>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/fixed-topnav.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Fixed Navbar</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/fixed-footer.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Fixed Footer</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/collapsed-sidebar.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Collapsed Sidebar</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-chart-pie\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tCharts
\t\t\t\t\t\t\t\t\t\t<i class=\"right fas fa-angle-left\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/charts/chartjs.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>ChartJS</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/charts/flot.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Flot</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/charts/inline.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Inline</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/charts/uplot.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>uPlot</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tree\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tUI Elements
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/general.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>General</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/icons.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Icons</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/buttons.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Buttons</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/sliders.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Sliders</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/modals.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Modals & Alerts</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/navbar.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Navbar & Tabs</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/timeline.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Timeline</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/ribbons.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Ribbons</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tForms
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/forms/general.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>General Elements</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/forms/advanced.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Advanced Elements</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/forms/editors.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Editors</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/forms/validation.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Validation</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-table\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tTables
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/tables/simple.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Simple Tables</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/tables/data.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>DataTables</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/tables/jsgrid.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>jsGrid</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-header\">EXAMPLES</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"pages/calendar.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-calendar-alt\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tCalendar
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-info right\">2</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"pages/gallery.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-image\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tGallery
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"pages/kanban.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-columns\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tKanban Board
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tMailbox
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/mailbox/mailbox.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Inbox</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/mailbox/compose.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Compose</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/mailbox/read-mail.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Read</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-book\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tPages
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Invoice</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/profile.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Profile</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/e-commerce.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>E-commerce</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/projects.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Projects</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/project-add.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Project Add</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/project-edit.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Project Edit</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/project-detail.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Project Detail</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/contacts.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Contacts</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/faq.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>FAQ</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/contact-us.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Contact us</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-plus-square\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tExtras
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tLogin & Register v1
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/login.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Login v1</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/register.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Register v1</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/forgot-password.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Forgot Password v1</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/recover-password.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Recover Password v1</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tLogin & Register v2
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/login-v2.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Login v2</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/register-v2.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Register v2</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/forgot-password-v2.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Forgot Password v2</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/recover-password-v2.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Recover Password v2</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/lockscreen.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Lockscreen</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/legacy-user-menu.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Legacy User Menu</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/language-menu.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Language Menu</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/404.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Error 404</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/500.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Error 500</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/pace.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Pace</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/blank.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Blank Page</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"starter.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Starter Page</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tSearch
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/search/simple.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Simple Search</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/search/enhanced.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Enhanced</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-header\">MISCELLANEOUS</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"iframe.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-ellipsis-h\"></i>
\t\t\t\t\t\t\t\t\t<p>Tabbed IFrame Plugin</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"https://adminlte.io/docs/3.1/\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-file\"></i>
\t\t\t\t\t\t\t\t\t<p>Documentation</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-header\">MULTI LEVEL EXAMPLE</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t<p>Level 1</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-circle\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLevel 1
\t\t\t\t\t\t\t\t\t\t<i class=\"right fas fa-angle-left\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Level 2</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tLevel 2
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"right fas fa-angle-left\"></i>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-dot-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Level 3</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-dot-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Level 3</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-dot-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Level 3</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Level 2</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t<p>Level 1</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-header\">LABELS</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-circle text-danger\"></i>
\t\t\t\t\t\t\t\t\t<p class=\"text\">Important</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-circle text-warning\"></i>
\t\t\t\t\t\t\t\t\t<p>Warning</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-circle text-info\"></i>
\t\t\t\t\t\t\t\t\t<p>Informational</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- /.sidebar-menu -->
\t\t\t\t</div>
\t\t\t\t<!-- /.sidebar -->
\t\t\t</aside>

\t\t\t<!-- Content Wrapper. Contains page content -->
\t\t\t<div
\t\t\t\tclass=\"content-wrapper\">
\t\t\t\t<!-- Content Header (Page header) -->
\t\t\t\t<div class=\"content-header\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<h1 class=\"m-0\">Methodes de paiement</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Methodes de paiement</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.container-fluid -->
\t\t\t\t</div>
\t\t\t\t<!-- /.content-header -->

\t\t\t\t<!-- Main content -->
\t\t\t\t<section class=\"content\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container-fluid\">
\t\t\t\t\t\t<!-- Info boxes -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"info-box\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon bg-info elevation-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cog\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">CPU Traffic</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">
\t\t\t\t\t\t\t\t\t\t\t10
\t\t\t\t\t\t\t\t\t\t\t<small>%</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"info-box mb-3\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon bg-danger elevation-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thumbs-up\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">Likes</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">41,410</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->

\t\t\t\t\t\t\t<!-- fix for small devices only -->
\t\t\t\t\t\t\t<div class=\"clearfix hidden-md-up\"></div>

\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"info-box mb-3\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon bg-success elevation-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">Sales</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">760</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"info-box mb-3\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon bg-warning elevation-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-users\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">New Members</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">2,000</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row -->

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Monthly Recap Report</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Action</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Another action</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Something else here</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-divider\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Separated link</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"chart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Sales Chart Canvas -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"salesChart\" height=\"180\" style=\"height: 180px;\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.chart-responsive -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Goal Completion</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\tAdd Products to Cart
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>160</b>/200</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" style=\"width: 80%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.progress-group -->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\tComplete Purchase
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>310</b>/400</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" style=\"width: 75%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.progress-group -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-text\">Visit Premium Page</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>480</b>/800</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" style=\"width: 60%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.progress-group -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSend Inquiries
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>250</b>/500</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.progress-group -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- ./card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"description-block border-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-percentage text-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-caret-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t17%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\">\$35,210.43</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-text\">TOTAL REVENUE</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.description-block -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"description-block border-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-percentage text-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-caret-left\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t0%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\">\$10,390.90</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-text\">TOTAL COST</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.description-block -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"description-block border-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-percentage text-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-caret-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t20%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\">\$24,813.53</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-text\">TOTAL PROFIT</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.description-block -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"description-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-percentage text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-caret-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t18%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\">1200</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-text\">GOAL COMPLETIONS</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.description-block -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-footer -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row -->

\t\t\t\t\t\t<!-- Main row -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t<!-- Left col -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-md-8\">
\t\t\t\t\t\t\t\t<!-- MAP & BOX PANE -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">US-Visitors Report</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-md-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"p-1 flex-fill\" style=\"overflow: hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Map will be created here -->
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"world-map-markers\" style=\"height: 325px; overflow: hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"map\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-pane-right bg-success pt-2 pb-2 pl-4 pr-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"description-block mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar pad\" data-color=\"#fff\">90,70,90,70,75,80,70</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\">8390</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-text\">Visits</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.description-block -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"description-block mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\">30%</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-text\">Referrals</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.description-block -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"description-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\">70%</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-text\">Organic</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.description-block -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-pane-right -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.d-md-flex -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<!-- DIRECT CHAT -->
\t\t\t\t\t\t\t\t\t\t<div class=\"card direct-chat direct-chat-warning\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Direct Chat</h3>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span title=\"3 New Messages\" class=\"badge badge-warning\">3</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" title=\"Contacts\" data-widget=\"chat-pane-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Conversations are loaded here -->
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-messages\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message. Default to the left -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-left\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIs this template really for free? That's unbelievable!
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message to the right -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-right\">Sarah Bullock</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tYou better believe it!
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message. Default to the left -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-left\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWorking with AdminLTE on a great new app! Wanna join?
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message to the right -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-right\">Sarah Bullock</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tI would love to.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--/.direct-chat-messages-->

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Contacts are loaded here -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-contacts\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"contacts-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCount Dracula
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/28/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">How have you been? I was...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user7-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSarah Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/23/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">I will be waiting for...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNadia Jolie
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/20/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">I'll call you back at...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user5-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNora S. Vans
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/10/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Where is your new...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user6-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJohn K.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">1/27/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Can I take a look at...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKenneth M.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">1/4/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Never mind I found...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-pane -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\">Send</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-footer-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--/.direct-chat -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<!-- USERS LIST -->
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Latest Members</h3>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\">8 New Members</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"users-list clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user1-128x128.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">Today</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user8-128x128.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">Norman</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">Yesterday</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user7-128x128.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">Jane</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">12 Jan</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user6-128x128.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">John</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">12 Jan</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user2-160x160.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">Alexander</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">13 Jan</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user5-128x128.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">Sarah</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">14 Jan</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user4-128x128.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">Nora</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">15 Jan</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user3-128x128.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">Nadia</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">15 Jan</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.users-list -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-footer text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:\">View All Users</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-footer -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--/.card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.row -->

\t\t\t\t\t\t\t\t<!-- TABLE: LATEST ORDERS -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header border-transparent\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Latest Orders</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Order ID</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Item</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Popularity</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">OR9842</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Call of Duty IV</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Shipped</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">90,80,90,-70,61,-83,63</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">OR1848</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Samsung Smart TV</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning\">Pending</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">90,80,-90,70,61,-83,68</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">OR7429</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>iPhone 6 Plus</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\">Delivered</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">90,-80,90,70,-61,83,63</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">OR7429</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Samsung Smart TV</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-info\">Processing</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar\" data-color=\"#00c0ef\" data-height=\"20\">90,80,-90,70,-61,83,63</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">OR1848</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Samsung Smart TV</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning\">Pending</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">90,80,-90,70,61,-83,68</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">OR7429</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>iPhone 6 Plus</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\">Delivered</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">90,-80,90,70,-61,83,63</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">OR9842</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Call of Duty IV</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Shipped</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">90,80,90,-70,61,-83,63</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.table-responsive -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer clearfix\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-info float-left\">Place New Order</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-secondary float-right\">View All Orders</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-footer -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->

\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-md-4\">
\t\t\t\t\t\t\t\t<!-- Info Boxes Style 2 -->
\t\t\t\t\t\t\t\t<div class=\"info-box mb-3 bg-warning\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tag\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">Inventory</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">5,200</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->
\t\t\t\t\t\t\t\t<div class=\"info-box mb-3 bg-success\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-heart\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">Mentions</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">92,050</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->
\t\t\t\t\t\t\t\t<div class=\"info-box mb-3 bg-danger\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cloud-download-alt\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">Downloads</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">114,381</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->
\t\t\t\t\t\t\t\t<div class=\"info-box mb-3 bg-info\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-comment\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">Direct Messages</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">163,921</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->

\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Browser Usage</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"pieChart\" height=\"150\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- ./chart-responsive -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"chart-legend clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle text-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tChrome</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tIE</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFireFox</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle text-info\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSafari</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tOpera</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle text-secondary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNavigator</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer bg-light p-0\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\tUnited States of America
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-down text-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t12%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\tIndia
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-up text-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t4%
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\tChina
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-left text-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t0%
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.footer -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->

\t\t\t\t\t\t\t\t<!-- PRODUCT LIST -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Recently Added Products</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"products-list product-list-in-card pl-2 pr-2\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"product-title\">Samsung TV
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning float-right\">\$1800</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSamsung 32\" 1080p 60Hz LED Smart HDTV.
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.item -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"product-title\">Bicycle
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-info float-right\">\$700</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t26\" Mongoose Dolomite Men's 7-speed, Navy Blue.
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.item -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"product-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tXbox One
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$350
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tXbox One Console Bundle with Halo Master Chief Collection.
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.item -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"product-title\">PlayStation 4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success float-right\">\$399</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tPlayStation 4 500GB Console (PS4)
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.item -->
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"uppercase\">View All Products</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-footer -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/. container-fluid -->
\t\t\t\t</section>
\t\t\t\t<!-- /.content -->
\t\t\t</div>
\t\t\t<!-- /.content-wrapper -->

\t\t\t<!-- Control Sidebar -->
\t\t\t<aside
\t\t\t\tclass=\"control-sidebar control-sidebar-dark\"><!-- Control sidebar content goes here -->
\t\t\t</aside>
\t\t\t<!-- /.control-sidebar -->

\t\t\t<!-- Main Footer -->
\t\t\t<footer class=\"main-footer\">
\t\t\t\t<strong>Copyright &copy; 2014-2021
\t\t\t\t\t<a href=\"https://adminlte.io\">AdminLTE.io</a>.</strong>
\t\t\t\tAll rights reserved.
\t\t\t\t<div class=\"float-right d-none d-sm-inline-block\">
\t\t\t\t\t<b>Version</b>
\t\t\t\t\t3.1.0
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t\t<!-- ./wrapper -->

\t\t<!-- REQUIRED SCRIPTS -->
\t\t<!-- jQuery --><script src=\"plugins/jquery/jquery.min.js\"> </script>
\t\t<!-- Bootstrap -->
\t\t<script src=\"plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- overlayScrollbars -->
\t\t<script src=\"plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"dist/js/adminlte.js\"></script>

\t\t<!-- PAGE PLUGINS -->
\t\t<!-- jQuery Mapael -->
\t\t<script src=\"plugins/jquery-mousewheel/jquery.mousewheel.js\"></script>
\t\t<script src=\"plugins/raphael/raphael.min.js\"></script>
\t\t<script src=\"plugins/jquery-mapael/jquery.mapael.min.js\"></script>
\t\t<script src=\"plugins/jquery-mapael/maps/usa_states.min.js\"></script>
\t\t<!-- ChartJS -->
\t\t<script src=\"plugins/chart.js/Chart.min.js\"></script>

\t\t<!-- AdminLTE for demo purposes -->
\t\t<script src=\"dist/js/demo.js\"></script>
\t\t<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
\t\t<script src=\"dist/js/pages/dashboard2.js\"></script>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "responsable/dashboard/methodeDePaiement.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>responsable| Methodes de paiement</title>

\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t<!-- Font Awesome Icons -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
\t\t<!-- Theme style -->
\t\t<link rel=\"stylesheet\" href=\"dist/css/adminlte.min.css\">
\t</head>
\t<body class=\"hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
\t\t<div
\t\t\tclass=\"wrapper\">

\t\t\t<!-- Preloader -->
\t\t\t<div class=\"preloader flex-column justify-content-center align-items-center\">
\t\t\t\t<img class=\"animation__wobble\" src=\"dist/img/AdminLTELogo.png\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
\t\t\t</div>

\t\t\t<!-- Navbar -->
\t\t\t<nav
\t\t\t\tclass=\"main-header navbar navbar-expand navbar-dark\">
\t\t\t\t<!-- Left navbar links -->
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t\t\t<a href=\"index3.html\" class=\"nav-link\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Contact</a>
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

\t\t\t\t\t<!-- Messages Dropdown Menu -->
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"far fa-comments\"></i>
\t\t\t\t\t\t\t<span class=\"badge badge-danger navbar-badge\">3</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\t\t\t\tBrad Diesel
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm\">Call me whenever you can...</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Message End -->
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\t\t\t\tJohn Pierce
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm\">I got your message bro</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Message End -->
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<!-- Message Start -->
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\t\t\t\t\t\t\t\tNora Silvester
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-sm text-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm\">The subject goes here</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-sm text-muted\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t4 Hours Ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Message End -->
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
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
\t\t\t\t<a href=\"index3.html\" class=\"brand-link\">
\t\t\t\t\t<img src=\"dist/img/AdminLTELogo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
\t\t\t\t\t<span class=\"brand-text font-weight-light\">AdminLTE 3</span>
\t\t\t\t</a>

\t\t\t\t<!-- Sidebar -->
\t\t\t\t<div
\t\t\t\t\tclass=\"sidebar\">
\t\t\t\t\t<!-- Sidebar user panel (optional) -->
\t\t\t\t\t<div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t<img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle elevation-2\" alt=\"User Image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block\">Alexander Pierce</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t               with font-awesome or any other icon font library -->
\t\t\t\t\t\t\t<li class=\"nav-item menu-open\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link active\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t\t\t<i class=\"right fas fa-angle-left\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/index1\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Chiffre d'affaire</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/utilisateurs\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Utilisateurs</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/categories\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Categories</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/commands\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Commmandes</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/paiement\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Methodes de paiement</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/platforme\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Platformes</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"pages/widgets.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-th\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tWidgets
\t\t\t\t\t\t\t\t\t\t<span class=\"right badge badge-danger\">New</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-copy\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLayout Options
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-info right\">6</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/top-nav.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Top Navigation</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/top-nav-sidebar.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Top Navigation + Sidebar</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/boxed.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Boxed</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/fixed-sidebar.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Fixed Sidebar</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/fixed-sidebar-custom.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Fixed Sidebar
\t\t\t\t\t\t\t\t\t\t\t\t<small>+ Custom Area</small>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/fixed-topnav.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Fixed Navbar</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/fixed-footer.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Fixed Footer</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/layout/collapsed-sidebar.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Collapsed Sidebar</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-chart-pie\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tCharts
\t\t\t\t\t\t\t\t\t\t<i class=\"right fas fa-angle-left\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/charts/chartjs.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>ChartJS</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/charts/flot.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Flot</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/charts/inline.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Inline</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/charts/uplot.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>uPlot</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tree\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tUI Elements
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/general.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>General</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/icons.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Icons</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/buttons.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Buttons</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/sliders.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Sliders</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/modals.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Modals & Alerts</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/navbar.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Navbar & Tabs</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/timeline.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Timeline</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/UI/ribbons.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Ribbons</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tForms
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/forms/general.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>General Elements</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/forms/advanced.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Advanced Elements</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/forms/editors.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Editors</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/forms/validation.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Validation</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-table\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tTables
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/tables/simple.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Simple Tables</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/tables/data.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>DataTables</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/tables/jsgrid.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>jsGrid</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-header\">EXAMPLES</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"pages/calendar.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-calendar-alt\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tCalendar
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-info right\">2</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"pages/gallery.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-image\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tGallery
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"pages/kanban.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-columns\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tKanban Board
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tMailbox
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/mailbox/mailbox.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Inbox</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/mailbox/compose.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Compose</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/mailbox/read-mail.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Read</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-book\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tPages
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Invoice</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/profile.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Profile</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/e-commerce.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>E-commerce</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/projects.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Projects</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/project-add.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Project Add</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/project-edit.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Project Edit</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/project-detail.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Project Detail</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/contacts.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Contacts</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/faq.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>FAQ</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/contact-us.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Contact us</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-plus-square\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tExtras
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tLogin & Register v1
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/login.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Login v1</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/register.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Register v1</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/forgot-password.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Forgot Password v1</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/recover-password.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Recover Password v1</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tLogin & Register v2
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/login-v2.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Login v2</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/register-v2.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Register v2</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/forgot-password-v2.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Forgot Password v2</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/recover-password-v2.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Recover Password v2</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/lockscreen.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Lockscreen</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/legacy-user-menu.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Legacy User Menu</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/language-menu.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Language Menu</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/404.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Error 404</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/500.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Error 500</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/pace.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Pace</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/blank.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Blank Page</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"starter.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Starter Page</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tSearch
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/search/simple.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Simple Search</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"pages/search/enhanced.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Enhanced</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-header\">MISCELLANEOUS</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"iframe.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-ellipsis-h\"></i>
\t\t\t\t\t\t\t\t\t<p>Tabbed IFrame Plugin</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"https://adminlte.io/docs/3.1/\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-file\"></i>
\t\t\t\t\t\t\t\t\t<p>Documentation</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-header\">MULTI LEVEL EXAMPLE</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t<p>Level 1</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-circle\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLevel 1
\t\t\t\t\t\t\t\t\t\t<i class=\"right fas fa-angle-left\"></i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Level 2</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tLevel 2
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"right fas fa-angle-left\"></i>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-dot-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Level 3</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-dot-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Level 3</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-dot-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Level 3</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<p>Level 2</p>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t<p>Level 1</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-header\">LABELS</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-circle text-danger\"></i>
\t\t\t\t\t\t\t\t\t<p class=\"text\">Important</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-circle text-warning\"></i>
\t\t\t\t\t\t\t\t\t<p>Warning</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-circle text-info\"></i>
\t\t\t\t\t\t\t\t\t<p>Informational</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- /.sidebar-menu -->
\t\t\t\t</div>
\t\t\t\t<!-- /.sidebar -->
\t\t\t</aside>

\t\t\t<!-- Content Wrapper. Contains page content -->
\t\t\t<div
\t\t\t\tclass=\"content-wrapper\">
\t\t\t\t<!-- Content Header (Page header) -->
\t\t\t\t<div class=\"content-header\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<h1 class=\"m-0\">Methodes de paiement</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Methodes de paiement</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.container-fluid -->
\t\t\t\t</div>
\t\t\t\t<!-- /.content-header -->

\t\t\t\t<!-- Main content -->
\t\t\t\t<section class=\"content\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container-fluid\">
\t\t\t\t\t\t<!-- Info boxes -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"info-box\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon bg-info elevation-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cog\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">CPU Traffic</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">
\t\t\t\t\t\t\t\t\t\t\t10
\t\t\t\t\t\t\t\t\t\t\t<small>%</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"info-box mb-3\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon bg-danger elevation-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thumbs-up\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">Likes</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">41,410</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->

\t\t\t\t\t\t\t<!-- fix for small devices only -->
\t\t\t\t\t\t\t<div class=\"clearfix hidden-md-up\"></div>

\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"info-box mb-3\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon bg-success elevation-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">Sales</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">760</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"info-box mb-3\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon bg-warning elevation-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-users\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">New Members</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">2,000</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row -->

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Monthly Recap Report</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Action</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Another action</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Something else here</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-divider\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Separated link</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"chart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Sales Chart Canvas -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"salesChart\" height=\"180\" style=\"height: 180px;\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.chart-responsive -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Goal Completion</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\tAdd Products to Cart
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>160</b>/200</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" style=\"width: 80%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.progress-group -->

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\tComplete Purchase
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>310</b>/400</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" style=\"width: 75%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.progress-group -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-text\">Visit Premium Page</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>480</b>/800</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" style=\"width: 60%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.progress-group -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSend Inquiries
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>250</b>/500</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.progress-group -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- ./card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"description-block border-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-percentage text-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-caret-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t17%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\">\$35,210.43</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-text\">TOTAL REVENUE</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.description-block -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"description-block border-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-percentage text-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-caret-left\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t0%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\">\$10,390.90</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-text\">TOTAL COST</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.description-block -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"description-block border-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-percentage text-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-caret-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t20%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\">\$24,813.53</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-text\">TOTAL PROFIT</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.description-block -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"description-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-percentage text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-caret-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t18%</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\">1200</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-text\">GOAL COMPLETIONS</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.description-block -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-footer -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row -->

\t\t\t\t\t\t<!-- Main row -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t<!-- Left col -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-md-8\">
\t\t\t\t\t\t\t\t<!-- MAP & BOX PANE -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">US-Visitors Report</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-md-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"p-1 flex-fill\" style=\"overflow: hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Map will be created here -->
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"world-map-markers\" style=\"height: 325px; overflow: hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"map\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-pane-right bg-success pt-2 pb-2 pl-4 pr-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"description-block mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar pad\" data-color=\"#fff\">90,70,90,70,75,80,70</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\">8390</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-text\">Visits</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.description-block -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"description-block mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\">30%</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-text\">Referrals</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.description-block -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"description-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar pad\" data-color=\"#fff\">90,50,90,70,61,83,63</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\">70%</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"description-text\">Organic</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.description-block -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-pane-right -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.d-md-flex -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<!-- DIRECT CHAT -->
\t\t\t\t\t\t\t\t\t\t<div class=\"card direct-chat direct-chat-warning\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Direct Chat</h3>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span title=\"3 New Messages\" class=\"badge badge-warning\">3</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" title=\"Contacts\" data-widget=\"chat-pane-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Conversations are loaded here -->
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-messages\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message. Default to the left -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-left\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIs this template really for free? That's unbelievable!
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message to the right -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-right\">Sarah Bullock</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tYou better believe it!
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message. Default to the left -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-left\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWorking with AdminLTE on a great new app! Wanna join?
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Message to the right -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-right\">Sarah Bullock</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tI would love to.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--/.direct-chat-messages-->

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Contacts are loaded here -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-contacts\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"contacts-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCount Dracula
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/28/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">How have you been? I was...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user7-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSarah Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/23/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">I will be waiting for...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNadia Jolie
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/20/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">I'll call you back at...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user5-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNora S. Vans
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/10/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Where is your new...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user6-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJohn K.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">1/27/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Can I take a look at...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKenneth M.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">1/4/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Never mind I found...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-pane -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\">Send</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-footer-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--/.direct-chat -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<!-- USERS LIST -->
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Latest Members</h3>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\">8 New Members</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"users-list clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user1-128x128.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">Alexander Pierce</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">Today</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user8-128x128.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">Norman</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">Yesterday</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user7-128x128.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">Jane</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">12 Jan</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user6-128x128.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">John</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">12 Jan</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user2-160x160.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">Alexander</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">13 Jan</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user5-128x128.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">Sarah</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">14 Jan</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user4-128x128.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">Nora</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">15 Jan</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/user3-128x128.jpg\" alt=\"User Image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"users-list-name\" href=\"#\">Nadia</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"users-list-date\">15 Jan</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.users-list -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-footer text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:\">View All Users</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.card-footer -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--/.card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.row -->

\t\t\t\t\t\t\t\t<!-- TABLE: LATEST ORDERS -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header border-transparent\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Latest Orders</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Order ID</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Item</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Popularity</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">OR9842</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Call of Duty IV</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Shipped</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">90,80,90,-70,61,-83,63</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">OR1848</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Samsung Smart TV</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning\">Pending</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">90,80,-90,70,61,-83,68</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">OR7429</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>iPhone 6 Plus</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\">Delivered</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">90,-80,90,70,-61,83,63</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">OR7429</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Samsung Smart TV</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-info\">Processing</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar\" data-color=\"#00c0ef\" data-height=\"20\">90,80,-90,70,-61,83,63</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">OR1848</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Samsung Smart TV</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning\">Pending</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar\" data-color=\"#f39c12\" data-height=\"20\">90,80,-90,70,61,-83,68</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">OR7429</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>iPhone 6 Plus</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\">Delivered</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar\" data-color=\"#f56954\" data-height=\"20\">90,-80,90,70,-61,83,63</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages/examples/invoice.html\">OR9842</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Call of Duty IV</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">Shipped</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sparkbar\" data-color=\"#00a65a\" data-height=\"20\">90,80,90,-70,61,-83,63</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.table-responsive -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer clearfix\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-info float-left\">Place New Order</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-secondary float-right\">View All Orders</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-footer -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->

\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-md-4\">
\t\t\t\t\t\t\t\t<!-- Info Boxes Style 2 -->
\t\t\t\t\t\t\t\t<div class=\"info-box mb-3 bg-warning\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tag\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">Inventory</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">5,200</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->
\t\t\t\t\t\t\t\t<div class=\"info-box mb-3 bg-success\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-heart\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">Mentions</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">92,050</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->
\t\t\t\t\t\t\t\t<div class=\"info-box mb-3 bg-danger\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cloud-download-alt\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">Downloads</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">114,381</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->
\t\t\t\t\t\t\t\t<div class=\"info-box mb-3 bg-info\">
\t\t\t\t\t\t\t\t\t<span class=\"info-box-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-comment\"></i>
\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t<div class=\"info-box-content\">
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-text\">Direct Messages</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"info-box-number\">163,921</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.info-box-content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.info-box -->

\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Browser Usage</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"pieChart\" height=\"150\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- ./chart-responsive -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"chart-legend clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle text-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tChrome</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tIE</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFireFox</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle text-info\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSafari</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tOpera</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle text-secondary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNavigator</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer bg-light p-0\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\tUnited States of America
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-down text-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t12%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\tIndia
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-up text-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t4%
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\tChina
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right text-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-left text-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t0%
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.footer -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->

\t\t\t\t\t\t\t\t<!-- PRODUCT LIST -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Recently Added Products</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"products-list product-list-in-card pl-2 pr-2\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"product-title\">Samsung TV
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning float-right\">\$1800</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSamsung 32\" 1080p 60Hz LED Smart HDTV.
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.item -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"product-title\">Bicycle
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-info float-right\">\$700</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t26\" Mongoose Dolomite Men's 7-speed, Navy Blue.
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.item -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"product-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tXbox One
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$350
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tXbox One Console Bundle with Halo Master Chief Collection.
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.item -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"dist/img/default-150x150.png\" alt=\"Product Image\" class=\"img-size-50\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"product-title\">PlayStation 4
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success float-right\">\$399</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tPlayStation 4 500GB Console (PS4)
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.item -->
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"uppercase\">View All Products</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-footer -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/. container-fluid -->
\t\t\t\t</section>
\t\t\t\t<!-- /.content -->
\t\t\t</div>
\t\t\t<!-- /.content-wrapper -->

\t\t\t<!-- Control Sidebar -->
\t\t\t<aside
\t\t\t\tclass=\"control-sidebar control-sidebar-dark\"><!-- Control sidebar content goes here -->
\t\t\t</aside>
\t\t\t<!-- /.control-sidebar -->

\t\t\t<!-- Main Footer -->
\t\t\t<footer class=\"main-footer\">
\t\t\t\t<strong>Copyright &copy; 2014-2021
\t\t\t\t\t<a href=\"https://adminlte.io\">AdminLTE.io</a>.</strong>
\t\t\t\tAll rights reserved.
\t\t\t\t<div class=\"float-right d-none d-sm-inline-block\">
\t\t\t\t\t<b>Version</b>
\t\t\t\t\t3.1.0
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t\t<!-- ./wrapper -->

\t\t<!-- REQUIRED SCRIPTS -->
\t\t<!-- jQuery --><script src=\"plugins/jquery/jquery.min.js\"> </script>
\t\t<!-- Bootstrap -->
\t\t<script src=\"plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- overlayScrollbars -->
\t\t<script src=\"plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"dist/js/adminlte.js\"></script>

\t\t<!-- PAGE PLUGINS -->
\t\t<!-- jQuery Mapael -->
\t\t<script src=\"plugins/jquery-mousewheel/jquery.mousewheel.js\"></script>
\t\t<script src=\"plugins/raphael/raphael.min.js\"></script>
\t\t<script src=\"plugins/jquery-mapael/jquery.mapael.min.js\"></script>
\t\t<script src=\"plugins/jquery-mapael/maps/usa_states.min.js\"></script>
\t\t<!-- ChartJS -->
\t\t<script src=\"plugins/chart.js/Chart.min.js\"></script>

\t\t<!-- AdminLTE for demo purposes -->
\t\t<script src=\"dist/js/demo.js\"></script>
\t\t<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
\t\t<script src=\"dist/js/pages/dashboard2.js\"></script>
\t</body>
</html>
", "responsable/dashboard/methodeDePaiement.html.twig", "C:\\laragon\\www\\scooptest\\templates\\responsable\\dashboard\\methodeDePaiement.html.twig");
    }
}
