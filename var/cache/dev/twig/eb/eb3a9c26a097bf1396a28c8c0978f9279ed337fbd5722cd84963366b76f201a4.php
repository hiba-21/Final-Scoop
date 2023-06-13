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

/* responsable/dashboard/index1.html.twig */
class __TwigTemplate_ffc957db757243e6290fa8edaf0be0e246fc49ac43d4b01818e84ed531a78d09 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/index1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/dashboard/index1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>responsable | Chiffre d'affaire</title>

\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t<!-- Font Awesome -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- Ionicons -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<!-- Tempusdominus Bootstrap 4 -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
\t\t<!-- iCheck -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
\t\t<!-- JQVMap -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/jqvmap/jqvmap.min.css\">
\t\t<!-- Theme style -->
\t\t<link
\t\trel=\"stylesheet\" href=\"dist/css/adminlte.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
\t\t<!-- Daterange picker -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/daterangepicker/daterangepicker.css\">
\t\t<!-- summernote -->
\t\t<link rel=\"stylesheet\" href=\"plugins/summernote/summernote-bs4.min.css\">
\t</head>
\t<body class=\"hold-transition sidebar-mini layout-fixed\">
\t\t<div
\t\t\tclass=\"wrapper\">

\t\t\t<!-- Preloader -->
\t\t\t<div class=\"preloader flex-column justify-content-center align-items-center\">
\t\t\t\t<img class=\"animation__shake\" src=\"dist/img/AdminLTELogo.png\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
\t\t\t</div>

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t               with font-awesome or any other icon font library -->
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
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-calendar-alt\"></i>
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
\t\t\t\t\t\t\t\t<h1 class=\"m-0\">Chiffre d'affaire</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Chiffre d'affaire</li>
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
\t\t\t\t\t\t<!-- Small boxes (Stat box) -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t<div class=\"small-box bg-info\">
\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t<h3>150</h3>

\t\t\t\t\t\t\t\t\t\t<p>New Orders</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-bag\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t<div class=\"small-box bg-success\">
\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t<h3>53<sup style=\"font-size: 20px\">%</sup>
\t\t\t\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t\t\t\t<p>Bounce Rate</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-stats-bars\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t<div class=\"small-box bg-warning\">
\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t<h3>44</h3>

\t\t\t\t\t\t\t\t\t\t<p>User Registrations</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-person-add\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t<div class=\"small-box bg-danger\">
\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t<h3>65</h3>

\t\t\t\t\t\t\t\t\t\t<p>Unique Visitors</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-pie-graph\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t<!-- Main row -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t<!-- Left col -->
\t\t\t\t\t\t\t<section
\t\t\t\t\t\t\t\tclass=\"col-lg-7 connectedSortable\">
\t\t\t\t\t\t\t\t<!-- Custom tabs (Charts with tabs)-->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-chart-pie mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\tSales
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills ml-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"#revenue-chart\" data-toggle=\"tab\">Area</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#sales-chart\" data-toggle=\"tab\">Donut</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-content p-0\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Morris chart - Sales -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart tab-pane active\" id=\"revenue-chart\" style=\"position: relative; height: 300px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"revenue-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"sales-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->

\t\t\t\t\t\t\t\t<!-- DIRECT CHAT -->
\t\t\t\t\t\t\t\t<div class=\"card direct-chat direct-chat-primary\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Direct Chat</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<span title=\"3 New Messages\" class=\"badge badge-primary\">3</span>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" title=\"Contacts\" data-widget=\"chat-pane-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Conversations are loaded here -->
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-messages\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Message. Default to the left -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-left\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tIs this template really for free? That's unbelievable!
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t\t<!-- Message to the right -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-right\">Sarah Bullock</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tYou better believe it!
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t\t<!-- Message. Default to the left -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-left\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tWorking with AdminLTE on a great new app! Wanna join?
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t\t<!-- Message to the right -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-right\">Sarah Bullock</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tI would love to.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--/.direct-chat-messages-->

\t\t\t\t\t\t\t\t\t\t<!-- Contacts are loaded here -->
\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-contacts\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"contacts-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCount Dracula
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/28/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">How have you been? I was...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user7-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSarah Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/23/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">I will be waiting for...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNadia Jolie
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/20/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">I'll call you back at...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user5-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNora S. Vans
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/10/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Where is your new...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user6-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJohn K.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">1/27/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Can I take a look at...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKenneth M.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">1/4/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Never mind I found...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-pane -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Send</button>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-footer-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--/.direct-chat -->

\t\t\t\t\t\t\t\t<!-- TO DO List -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-clipboard mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\tTo Do List
\t\t\t\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"pagination pagination-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">&laquo;</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">1</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">2</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">3</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">&raquo;</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"todo-list\" data-widget=\"todo-list\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- drag handle -->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- checkbox -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo1\" id=\"todoCheck1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todoCheck1\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- todo text -->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Design a nice theme</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Emphasis label -->
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"badge badge-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t2 mins</small>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- General tools such as edit or delete-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo2\" id=\"todoCheck2\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todoCheck2\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Make the theme responsive</span>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"badge badge-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t4 hours</small>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo3\" id=\"todoCheck3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todoCheck3\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t1 day</small>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo4\" id=\"todoCheck4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todoCheck4\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"badge badge-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t3 days</small>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo5\" id=\"todoCheck5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todoCheck5\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Check your messages and notifications</span>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"badge badge-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t1 week</small>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo6\" id=\"todoCheck6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todoCheck6\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"badge badge-secondary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t1 month</small>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer clearfix\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary float-right\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\tAdd item</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<!-- /.Left col -->
\t\t\t\t\t\t\t<!-- right col (We are only adding the ID to make the widgets sortable)-->
\t\t\t\t\t\t\t<section
\t\t\t\t\t\t\t\tclass=\"col-lg-5 connectedSortable\">

\t\t\t\t\t\t\t\t<!-- Map card -->
\t\t\t\t\t\t\t\t<div class=\"card bg-gradient-primary\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\tVisitors
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<!-- card tools -->
\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm daterange\" title=\"Date range\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-calendar-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" data-card-widget=\"collapse\" title=\"Collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.card-tools -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body-->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer bg-transparent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sparkline-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white\">Visitors</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sparkline-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white\">Online</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sparkline-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white\">Sales</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->

\t\t\t\t\t\t\t\t<!-- solid sales graph -->
\t\t\t\t\t\t\t\t<div class=\"card bg-gradient-info\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-th mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\tSales Graph
\t\t\t\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<canvas class=\"chart\" id=\"line-chart\" style=\"min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;\"></canvas>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer bg-transparent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white\">Mail-Orders</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white\">Online</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white\">In-Store</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-footer -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->

\t\t\t\t\t\t\t\t<!-- Calendar -->
\t\t\t\t\t\t\t\t<div class=\"card bg-gradient-success\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0\">

\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-calendar-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\tCalendar
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<!-- tools card -->
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<!-- button with a dropdown -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\" data-offset=\"-52\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Add new event</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Clear events</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">View calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /. tools -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"card-body pt-0\">
\t\t\t\t\t\t\t\t\t\t<!--The calendar -->
\t\t\t\t\t\t\t\t\t\t<div id=\"calendar\" style=\"width: 100%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<!-- right col -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row (main row) -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.container-fluid -->
\t\t\t\t</section>
\t\t\t\t<!-- /.content -->
\t\t\t</div>
\t\t\t<!-- /.content-wrapper -->
\t\t\t<footer class=\"main-footer\">
\t\t\t\t<strong>Copyright &copy; 2014-2021
\t\t\t\t\t<a href=\"https://adminlte.io\">AdminLTE.io</a>.</strong>
\t\t\t\tAll rights reserved.
\t\t\t\t<div class=\"float-right d-none d-sm-inline-block\">
\t\t\t\t\t<b>Version</b>
\t\t\t\t\t3.1.0
\t\t\t\t</div>
\t\t\t</footer>

\t\t\t<!-- Control Sidebar -->
\t\t\t<aside
\t\t\t\tclass=\"control-sidebar control-sidebar-dark\"><!-- Control sidebar content goes here -->
\t\t\t</aside>
\t\t\t<!-- /.control-sidebar -->
\t\t</div>
\t\t<!-- ./wrapper -->

\t\t<!-- jQuery -->
\t\t<script src=\"plugins/jquery/jquery.min.js\"></script>
\t\t<!-- jQuery UI 1.11.4 -->
\t\t<script src=\"plugins/jquery-ui/jquery-ui.min.js\"></script>
\t\t<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
\t\t<script>
\t\t\t\$.widget.bridge('uibutton', \$.ui.button)
\t\t</script>
\t\t<!-- Bootstrap 4 -->
\t\t<script src=\"plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- ChartJS -->
\t\t<script src=\"plugins/chart.js/Chart.min.js\"></script>
\t\t<!-- Sparkline -->
\t\t<script src=\"plugins/sparklines/sparkline.js\"></script>
\t\t<!-- JQVMap -->
\t\t<script src=\"plugins/jqvmap/jquery.vmap.min.js\"></script>
\t\t<script src=\"plugins/jqvmap/maps/jquery.vmap.usa.js\"></script>
\t\t<!-- jQuery Knob Chart -->
\t\t<script src=\"plugins/jquery-knob/jquery.knob.min.js\"></script>
\t\t<!-- daterangepicker -->
\t\t<script src=\"plugins/moment/moment.min.js\"></script>
\t\t<script src=\"plugins/daterangepicker/daterangepicker.js\"></script>
\t\t<!-- Tempusdominus Bootstrap 4 -->
\t\t<script src=\"plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js\"></script>
\t\t<!-- Summernote -->
\t\t<script src=\"plugins/summernote/summernote-bs4.min.js\"></script>
\t\t<!-- overlayScrollbars -->
\t\t<script src=\"plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"dist/js/adminlte.js\"></script>
\t\t<!-- AdminLTE for demo purposes -->
\t\t<script src=\"dist/js/demo.js\"></script>
\t\t<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
\t\t<script src=\"dist/js/pages/dashboard.js\"></script>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "responsable/dashboard/index1.html.twig";
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
\t\t<title>responsable | Chiffre d'affaire</title>

\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t<!-- Font Awesome -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- Ionicons -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<!-- Tempusdominus Bootstrap 4 -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
\t\t<!-- iCheck -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
\t\t<!-- JQVMap -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/jqvmap/jqvmap.min.css\">
\t\t<!-- Theme style -->
\t\t<link
\t\trel=\"stylesheet\" href=\"dist/css/adminlte.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
\t\t<!-- Daterange picker -->
\t\t<link
\t\trel=\"stylesheet\" href=\"plugins/daterangepicker/daterangepicker.css\">
\t\t<!-- summernote -->
\t\t<link rel=\"stylesheet\" href=\"plugins/summernote/summernote-bs4.min.css\">
\t</head>
\t<body class=\"hold-transition sidebar-mini layout-fixed\">
\t\t<div
\t\t\tclass=\"wrapper\">

\t\t\t<!-- Preloader -->
\t\t\t<div class=\"preloader flex-column justify-content-center align-items-center\">
\t\t\t\t<img class=\"animation__shake\" src=\"dist/img/AdminLTELogo.png\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
\t\t\t</div>

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t               with font-awesome or any other icon font library -->
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
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-calendar-alt\"></i>
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
\t\t\t\t\t\t\t\t<h1 class=\"m-0\">Chiffre d'affaire</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Chiffre d'affaire</li>
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
\t\t\t\t\t\t<!-- Small boxes (Stat box) -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t<div class=\"small-box bg-info\">
\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t<h3>150</h3>

\t\t\t\t\t\t\t\t\t\t<p>New Orders</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-bag\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t<div class=\"small-box bg-success\">
\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t<h3>53<sup style=\"font-size: 20px\">%</sup>
\t\t\t\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t\t\t\t<p>Bounce Rate</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-stats-bars\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t<div class=\"small-box bg-warning\">
\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t<h3>44</h3>

\t\t\t\t\t\t\t\t\t\t<p>User Registrations</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-person-add\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t<!-- small box -->
\t\t\t\t\t\t\t\t<div class=\"small-box bg-danger\">
\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t<h3>65</h3>

\t\t\t\t\t\t\t\t\t\t<p>Unique Visitors</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-pie-graph\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"small-box-footer\">More info
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t<!-- Main row -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t<!-- Left col -->
\t\t\t\t\t\t\t<section
\t\t\t\t\t\t\t\tclass=\"col-lg-7 connectedSortable\">
\t\t\t\t\t\t\t\t<!-- Custom tabs (Charts with tabs)-->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-chart-pie mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\tSales
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills ml-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"#revenue-chart\" data-toggle=\"tab\">Area</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#sales-chart\" data-toggle=\"tab\">Donut</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-content p-0\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Morris chart - Sales -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart tab-pane active\" id=\"revenue-chart\" style=\"position: relative; height: 300px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"revenue-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"sales-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->

\t\t\t\t\t\t\t\t<!-- DIRECT CHAT -->
\t\t\t\t\t\t\t\t<div class=\"card direct-chat direct-chat-primary\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Direct Chat</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<span title=\"3 New Messages\" class=\"badge badge-primary\">3</span>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" title=\"Contacts\" data-widget=\"chat-pane-toggle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Conversations are loaded here -->
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-messages\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Message. Default to the left -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-left\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tIs this template really for free? That's unbelievable!
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t\t<!-- Message to the right -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-right\">Sarah Bullock</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tYou better believe it!
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t\t<!-- Message. Default to the left -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-left\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tWorking with AdminLTE on a great new app! Wanna join?
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t\t<!-- Message to the right -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-msg right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-infos clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-name float-right\">Sarah Bullock</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-infos -->
\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-img -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\tI would love to.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-text -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-msg -->

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--/.direct-chat-messages-->

\t\t\t\t\t\t\t\t\t\t<!-- Contacts are loaded here -->
\t\t\t\t\t\t\t\t\t\t<div class=\"direct-chat-contacts\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"contacts-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCount Dracula
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/28/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">How have you been? I was...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user7-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSarah Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/23/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">I will be waiting for...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNadia Jolie
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/20/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">I'll call you back at...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user5-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNora S. Vans
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">2/10/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Where is your new...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user6-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJohn K.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">1/27/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Can I take a look at...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"contacts-list-img\" src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"contacts-list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKenneth M.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"contacts-list-date float-right\">1/4/2015</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contacts-list-msg\">Never mind I found...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list-info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- End Contact Item -->
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.contacts-list -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.direct-chat-pane -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Send</button>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-footer-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--/.direct-chat -->

\t\t\t\t\t\t\t\t<!-- TO DO List -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ion ion-clipboard mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\tTo Do List
\t\t\t\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"pagination pagination-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">&laquo;</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">1</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">2</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">3</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"page-link\">&raquo;</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"todo-list\" data-widget=\"todo-list\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- drag handle -->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- checkbox -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo1\" id=\"todoCheck1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todoCheck1\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- todo text -->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Design a nice theme</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Emphasis label -->
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"badge badge-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t2 mins</small>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- General tools such as edit or delete-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo2\" id=\"todoCheck2\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todoCheck2\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Make the theme responsive</span>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"badge badge-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t4 hours</small>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo3\" id=\"todoCheck3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todoCheck3\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"badge badge-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t1 day</small>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo4\" id=\"todoCheck4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todoCheck4\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"badge badge-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t3 days</small>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo5\" id=\"todoCheck5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todoCheck5\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Check your messages and notifications</span>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"badge badge-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t1 week</small>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"handle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icheck-primary d-inline ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\" name=\"todo6\" id=\"todoCheck6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"todoCheck6\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Let theme shine like a star</span>
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"badge badge-secondary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t1 month</small>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer clearfix\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary float-right\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\tAdd item</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<!-- /.Left col -->
\t\t\t\t\t\t\t<!-- right col (We are only adding the ID to make the widgets sortable)-->
\t\t\t\t\t\t\t<section
\t\t\t\t\t\t\t\tclass=\"col-lg-5 connectedSortable\">

\t\t\t\t\t\t\t\t<!-- Map card -->
\t\t\t\t\t\t\t\t<div class=\"card bg-gradient-primary\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\tVisitors
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<!-- card tools -->
\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm daterange\" title=\"Date range\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-calendar-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" data-card-widget=\"collapse\" title=\"Collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.card-tools -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body-->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer bg-transparent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sparkline-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white\">Visitors</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sparkline-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white\">Online</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sparkline-3\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white\">Sales</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->

\t\t\t\t\t\t\t\t<!-- solid sales graph -->
\t\t\t\t\t\t\t\t<div class=\"card bg-gradient-info\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-th mr-1\"></i>
\t\t\t\t\t\t\t\t\t\t\tSales Graph
\t\t\t\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<canvas class=\"chart\" id=\"line-chart\" style=\"min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;\"></canvas>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-footer bg-transparent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white\">Mail-Orders</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white\">Online</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\" data-fgcolor=\"#39CCCC\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white\">In-Store</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- ./col -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-footer -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->

\t\t\t\t\t\t\t\t<!-- Calendar -->
\t\t\t\t\t\t\t\t<div class=\"card bg-gradient-success\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0\">

\t\t\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-calendar-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\tCalendar
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<!-- tools card -->
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"card-tools\">
\t\t\t\t\t\t\t\t\t\t\t<!-- button with a dropdown -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\" data-offset=\"-52\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Add new event</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Clear events</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">View calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /. tools -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"card-body pt-0\">
\t\t\t\t\t\t\t\t\t\t<!--The calendar -->
\t\t\t\t\t\t\t\t\t\t<div id=\"calendar\" style=\"width: 100%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<!-- right col -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.row (main row) -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.container-fluid -->
\t\t\t\t</section>
\t\t\t\t<!-- /.content -->
\t\t\t</div>
\t\t\t<!-- /.content-wrapper -->
\t\t\t<footer class=\"main-footer\">
\t\t\t\t<strong>Copyright &copy; 2014-2021
\t\t\t\t\t<a href=\"https://adminlte.io\">AdminLTE.io</a>.</strong>
\t\t\t\tAll rights reserved.
\t\t\t\t<div class=\"float-right d-none d-sm-inline-block\">
\t\t\t\t\t<b>Version</b>
\t\t\t\t\t3.1.0
\t\t\t\t</div>
\t\t\t</footer>

\t\t\t<!-- Control Sidebar -->
\t\t\t<aside
\t\t\t\tclass=\"control-sidebar control-sidebar-dark\"><!-- Control sidebar content goes here -->
\t\t\t</aside>
\t\t\t<!-- /.control-sidebar -->
\t\t</div>
\t\t<!-- ./wrapper -->

\t\t<!-- jQuery -->
\t\t<script src=\"plugins/jquery/jquery.min.js\"></script>
\t\t<!-- jQuery UI 1.11.4 -->
\t\t<script src=\"plugins/jquery-ui/jquery-ui.min.js\"></script>
\t\t<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
\t\t<script>
\t\t\t\$.widget.bridge('uibutton', \$.ui.button)
\t\t</script>
\t\t<!-- Bootstrap 4 -->
\t\t<script src=\"plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- ChartJS -->
\t\t<script src=\"plugins/chart.js/Chart.min.js\"></script>
\t\t<!-- Sparkline -->
\t\t<script src=\"plugins/sparklines/sparkline.js\"></script>
\t\t<!-- JQVMap -->
\t\t<script src=\"plugins/jqvmap/jquery.vmap.min.js\"></script>
\t\t<script src=\"plugins/jqvmap/maps/jquery.vmap.usa.js\"></script>
\t\t<!-- jQuery Knob Chart -->
\t\t<script src=\"plugins/jquery-knob/jquery.knob.min.js\"></script>
\t\t<!-- daterangepicker -->
\t\t<script src=\"plugins/moment/moment.min.js\"></script>
\t\t<script src=\"plugins/daterangepicker/daterangepicker.js\"></script>
\t\t<!-- Tempusdominus Bootstrap 4 -->
\t\t<script src=\"plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js\"></script>
\t\t<!-- Summernote -->
\t\t<script src=\"plugins/summernote/summernote-bs4.min.js\"></script>
\t\t<!-- overlayScrollbars -->
\t\t<script src=\"plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"dist/js/adminlte.js\"></script>
\t\t<!-- AdminLTE for demo purposes -->
\t\t<script src=\"dist/js/demo.js\"></script>
\t\t<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
\t\t<script src=\"dist/js/pages/dashboard.js\"></script>
\t</body>
</html>
", "responsable/dashboard/index1.html.twig", "C:\\laragon\\www\\scooptest\\templates\\responsable\\dashboard\\index1.html.twig");
    }
}
