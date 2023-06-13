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

/* responsable/reglages/VacanceFermeture.html.twig */
class __TwigTemplate_e617b13f56142ff80503f4f36db595a70852418c924734cbb7290cfba0f7dce8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/reglages/VacanceFermeture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "responsable/reglages/VacanceFermeture.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t<!-- Font Awesome -->
\t\t<link
\t\trel=\"stylesheet\" href=\"../plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- fullCalendar -->
\t\t<link
\t\trel=\"stylesheet\" href=\"../plugins/fullcalendar/main.css\">
\t\t<!-- Theme style -->
\t\t<link rel=\"stylesheet\" href=\"../dist/css/adminlte.min.css\">

\t</head>
\t<body>

\t\t<div class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t<i class=\"bi bi-gear-fill\"></i>
\t\t\t\t\t\t<h1 class=\"m-0\">Réglages</h1>
\t\t\t\t\t\t<h6>Configuration de votre boutique en ligne</h6>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Réglages</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- /.col -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->
\t\t\t</div>
\t\t\t<!-- /.container-fluid -->
\t\t\t<hr>
\t\t</div>

\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"/reglage\">Informations de la boutique</a>
\t\t\t\t<ul></ul>
\t\t\t</li>

\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link active\" href=\"/vac\">Vacances & Fermetures
\t\t\t\t</a>
\t\t\t</li>
\t\t
\t\t</ul>

\t\t<!-- /.card-header -->
\t\t<div>
\t\t\t<label for=\"Code APE\">
\t\t\t\tHoraires
\t\t\t</label>
\t\t\t<form methode=\"post\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<th>Jours</th>
\t\t\t\t\t\t<th>Horaires d'ouvrerture</th>
\t\t\t\t\t\t<th>Horaires de fermeture</th>

\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>

\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t<td data-label=\"Jours\"><input class=\"form-check-input\" type=\"checkbox\" name=\"check\" value=\"Lundi\" id=\"flexCheck\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\" name=\"jour\">
\t\t\t\t\t\t\t\t\tLundi
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-label=\"Horaires d'ouvrerture\"><input type=\"time\" id=\"appt\" name=\"appt\" min=\"09:00\" max=\"18:00\"></td>
\t\t\t\t\t\t\t<td data-label=\"Horaires de fermeture\"><input type=\"time\" id=\"appt\" name=\"apptf\" min=\"09:00\" max=\"00:00\"></td>

\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-label=\"Jours\"><input class=\"form-check-input\" type=\"checkbox\" name=\"check\" value=\"Mardi\" id=\"flexCheck1\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\" name=\"jour\">
\t\t\t\t\t\t\t\t\tMardi
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-label=\"Horaires d'ouvrerture\"><input type=\"time\" id=\"appt\" name=\"appt\" min=\"09:00\" max=\"18:00\"></td>
\t\t\t\t\t\t\t<td data-label=\"Horaires de fermeture\"><input type=\"time\" id=\"appt\" name=\"apptf\" min=\"09:00\" max=\"00:00\"></td>

\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-label=\"Jours\"><input class=\"form-check-input\" type=\"checkbox\" name=\"check\" value=\"Mercredi\" id=\"flexCheck2\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\" name=\"jour\">
\t\t\t\t\t\t\t\t\tMercredi
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-label=\"Horaires d'ouvrerture\"><input type=\"time\" id=\"appt\" name=\"appt\" min=\"09:00\" max=\"18:00\"></td>
\t\t\t\t\t\t\t<td data-label=\"Horaires de fermeture\"><input type=\"time\" id=\"appt\" name=\"apptf\" min=\"09:00\" max=\"00:00\"></td>

\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-label=\"Jours\"><input class=\"form-check-input\" type=\"checkbox\" name=\"check\" value=\"Jeudi\" id=\"flexCheck3\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\" name=\"jour\">
\t\t\t\t\t\t\t\t\tJeudi
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-label=\"Horaires d'ouvrerture\"><input type=\"time\" id=\"appt\" name=\"appt\" min=\"09:00\" max=\"18:00\"></td>
\t\t\t\t\t\t\t<td data-label=\"Horaires de fermeture\"><input type=\"time\" id=\"appt\" name=\"apptf\" min=\"09:00\" max=\"00:00\"></td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-label=\"Jours\"><input class=\"form-check-input\" type=\"checkbox\" name=\"check\" value=\"Vendredi\" id=\"flexCheck4\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\" name=\"jour\">
\t\t\t\t\t\t\t\t\tVendredi
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-label=\"Horaires d'ouvrerture\"><input type=\"time\" id=\"appt\" name=\"appt\" min=\"09:00\" max=\"18:00\"></td>
\t\t\t\t\t\t\t<td data-label=\"Horaires de fermeture\"><input type=\"time\" id=\"appt\" name=\"apptf\" min=\"09:00\" max=\"00:00\"></td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-label=\"Jours\"><input class=\"form-check-input\" type=\"checkbox\" name=\"check\" value=\"Samedi\" id=\"flexCheck5\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\" name=\"jour\">
\t\t\t\t\t\t\t\t\tSamedi
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-label=\"Horaires d'ouvrerture\"><input type=\"time\" id=\"appt\" name=\"appt\" min=\"09:00\" max=\"18:00\"></td>
\t\t\t\t\t\t\t<td data-label=\"Horaires de fermeture\"><input type=\"time\" id=\"appt\" name=\"apptf\" min=\"09:00\" max=\"00:00\"></td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-label=\"Jours\"><input class=\"form-check-input\" type=\"checkbox\" name=\"check\" value=\"Dimanche\" id=\"flexCheck6\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\" name=\"jour\">
\t\t\t\t\t\t\t\t\tDimanche
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-label=\"Horaires d'ouvrerture\"><input type=\"time\" id=\"appt\" name=\"appt\" min=\"09:00\" max=\"18:00\"></td>
\t\t\t\t\t\t\t<td data-label=\"Horaires de fermeture\"><input type=\"time\" id=\"appt\" name=\"apptf\" min=\"09:00\" max=\"00:00\"></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"/horaires\"><input type=\"submit\" name=\"submit\" value=\"Submit\"/></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</form>
\t\t</div>

\t\t<!-- /.col -->
\t\t<div class=\"col-md-9\">
\t\t\t<div class=\"card card-primary\">
\t\t\t\t<div
\t\t\t\t\tclass=\"card-body p-0\">
\t\t\t\t\t<!-- THE CALENDAR -->

\t\t\t\t\t<div id=\"calendar\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body -->
\t\t\t</div>
\t\t\t<!-- /.card -->
\t\t</div>
\t\t<!-- /.col -->
\t</body>
</html></div><!-- /.row --></div><!-- /.container-fluid --><script src=\"../plugins/jquery/jquery.min.js\"></script><!-- Bootstrap --><script src=\"../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script><!-- jQuery UI --><script src=\"../plugins/jquery-ui/jquery-ui.min.js\"></script><!-- AdminLTE App --><script src=\"../dist/js/adminlte.min.js\"></script><!-- fullCalendar 2.2.5 --><script src=\"../plugins/moment/moment.min.js\"></script><script src=\"../plugins/fullcalendar/main.js\"></script><!-- AdminLTE for demo purposes --><script src=\"../dist/js/demo.js\"></script><!-- Page specific script --><script>\$(function () { /* initialize the external events
       -----------------------------------------------------------------*/
function ini_events(ele) {
ele.each(function () {

// create an Event Object (https://fullcalendar.io/docs/event-object)
// it doesn't need to have a start or end
var eventObject = {
title: \$.trim(\$(this).text()) // use the element's text as the event title
}

// store the Event Object in the DOM element so we can get to it later
\$(this).data('eventObject', eventObject)

// make the event draggable using jQuery UI
\$(this).draggable({
zIndex: 1070, revert: true, // will cause the event to go back to its
revertDuration: 0 // original position after the drag
})

})
}

ini_events(\$('#external-events div.external-event'))

/* initialize the calendar
       -----------------------------------------------------------------*/
// Date for the calendar events (dummy data)
var date = new Date()
var d = date.getDate(),
m = date.getMonth(),
y = date.getFullYear()

var Calendar = FullCalendar.Calendar;
var Draggable = FullCalendar.Draggable;

var containerEl = document.getElementById('external-events');

var calendarEl = document.getElementById('calendar');

// initialize the external events
// -----------------------------------------------------------------

new Draggable(containerEl, {
itemSelector: '.external-event',
eventData: function (eventEl) {
return {
title: eventEl.innerText,
backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color')
};
}
});

var calendar = new Calendar(calendarEl, {
initialView: 'timeGridWeek',
locale: 'fr',
headerToolbar: {
left: 'prev,next today',
center: 'title',
right: 'dayGridMonth,timeGridWeek,timeGridDay'
},
themeSystem: 'bootstrap',
// Random default events
events: [
{
title: 'All Day Event',
start: new Date(y, m, 1),
backgroundColor: '#f56954', // red
borderColor: '#f56954', // red
allDay: true
},

],
editable: true,
droppable: true, // this allows things to be dropped onto the calendar !!!

});

calendar.render();
// \$('#calendar').fullCalendar()

/* ADDING EVENTS */
var currColor = '#3c8dbc'
// Red by default
// Color chooser button
\$('#color-chooser > li > a').click(function (e) {
e.preventDefault()
// Save color
currColor = \$(this).css('color')
// Add color effect to button
\$('#add-new-event').css({'background-color': currColor, 'border-color': currColor})
})
\$('#add-new-event').click(function (e) {
e.preventDefault()
// Get value and make sure it is not null
var val = \$('#new-event').val()
if (val.length == 0) {
return
}

// Create events
var event = \$('<div />')
event.css({'background-color': currColor, 'border-color': currColor, 'color': '#fff'}).addClass('external-event')
event.text(val)
\$('#external-events').prepend(event)

// Add draggable funtionality
ini_events(event)

// Remove event from text input
\$('#new-event').val('')
})
})</script><!-- /.content-header --></body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "responsable/reglages/VacanceFermeture.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t<!-- Font Awesome -->
\t\t<link
\t\trel=\"stylesheet\" href=\"../plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- fullCalendar -->
\t\t<link
\t\trel=\"stylesheet\" href=\"../plugins/fullcalendar/main.css\">
\t\t<!-- Theme style -->
\t\t<link rel=\"stylesheet\" href=\"../dist/css/adminlte.min.css\">

\t</head>
\t<body>

\t\t<div class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t<i class=\"bi bi-gear-fill\"></i>
\t\t\t\t\t\t<h1 class=\"m-0\">Réglages</h1>
\t\t\t\t\t\t<h6>Configuration de votre boutique en ligne</h6>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Réglages</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- /.col -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->
\t\t\t</div>
\t\t\t<!-- /.container-fluid -->
\t\t\t<hr>
\t\t</div>

\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"/reglage\">Informations de la boutique</a>
\t\t\t\t<ul></ul>
\t\t\t</li>

\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link active\" href=\"/vac\">Vacances & Fermetures
\t\t\t\t</a>
\t\t\t</li>
\t\t
\t\t</ul>

\t\t<!-- /.card-header -->
\t\t<div>
\t\t\t<label for=\"Code APE\">
\t\t\t\tHoraires
\t\t\t</label>
\t\t\t<form methode=\"post\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<th>Jours</th>
\t\t\t\t\t\t<th>Horaires d'ouvrerture</th>
\t\t\t\t\t\t<th>Horaires de fermeture</th>

\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>

\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t<td data-label=\"Jours\"><input class=\"form-check-input\" type=\"checkbox\" name=\"check\" value=\"Lundi\" id=\"flexCheck\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\" name=\"jour\">
\t\t\t\t\t\t\t\t\tLundi
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-label=\"Horaires d'ouvrerture\"><input type=\"time\" id=\"appt\" name=\"appt\" min=\"09:00\" max=\"18:00\"></td>
\t\t\t\t\t\t\t<td data-label=\"Horaires de fermeture\"><input type=\"time\" id=\"appt\" name=\"apptf\" min=\"09:00\" max=\"00:00\"></td>

\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-label=\"Jours\"><input class=\"form-check-input\" type=\"checkbox\" name=\"check\" value=\"Mardi\" id=\"flexCheck1\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\" name=\"jour\">
\t\t\t\t\t\t\t\t\tMardi
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-label=\"Horaires d'ouvrerture\"><input type=\"time\" id=\"appt\" name=\"appt\" min=\"09:00\" max=\"18:00\"></td>
\t\t\t\t\t\t\t<td data-label=\"Horaires de fermeture\"><input type=\"time\" id=\"appt\" name=\"apptf\" min=\"09:00\" max=\"00:00\"></td>

\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-label=\"Jours\"><input class=\"form-check-input\" type=\"checkbox\" name=\"check\" value=\"Mercredi\" id=\"flexCheck2\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\" name=\"jour\">
\t\t\t\t\t\t\t\t\tMercredi
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-label=\"Horaires d'ouvrerture\"><input type=\"time\" id=\"appt\" name=\"appt\" min=\"09:00\" max=\"18:00\"></td>
\t\t\t\t\t\t\t<td data-label=\"Horaires de fermeture\"><input type=\"time\" id=\"appt\" name=\"apptf\" min=\"09:00\" max=\"00:00\"></td>

\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-label=\"Jours\"><input class=\"form-check-input\" type=\"checkbox\" name=\"check\" value=\"Jeudi\" id=\"flexCheck3\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\" name=\"jour\">
\t\t\t\t\t\t\t\t\tJeudi
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-label=\"Horaires d'ouvrerture\"><input type=\"time\" id=\"appt\" name=\"appt\" min=\"09:00\" max=\"18:00\"></td>
\t\t\t\t\t\t\t<td data-label=\"Horaires de fermeture\"><input type=\"time\" id=\"appt\" name=\"apptf\" min=\"09:00\" max=\"00:00\"></td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-label=\"Jours\"><input class=\"form-check-input\" type=\"checkbox\" name=\"check\" value=\"Vendredi\" id=\"flexCheck4\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\" name=\"jour\">
\t\t\t\t\t\t\t\t\tVendredi
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-label=\"Horaires d'ouvrerture\"><input type=\"time\" id=\"appt\" name=\"appt\" min=\"09:00\" max=\"18:00\"></td>
\t\t\t\t\t\t\t<td data-label=\"Horaires de fermeture\"><input type=\"time\" id=\"appt\" name=\"apptf\" min=\"09:00\" max=\"00:00\"></td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-label=\"Jours\"><input class=\"form-check-input\" type=\"checkbox\" name=\"check\" value=\"Samedi\" id=\"flexCheck5\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\" name=\"jour\">
\t\t\t\t\t\t\t\t\tSamedi
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-label=\"Horaires d'ouvrerture\"><input type=\"time\" id=\"appt\" name=\"appt\" min=\"09:00\" max=\"18:00\"></td>
\t\t\t\t\t\t\t<td data-label=\"Horaires de fermeture\"><input type=\"time\" id=\"appt\" name=\"apptf\" min=\"09:00\" max=\"00:00\"></td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-label=\"Jours\"><input class=\"form-check-input\" type=\"checkbox\" name=\"check\" value=\"Dimanche\" id=\"flexCheck6\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\" name=\"jour\">
\t\t\t\t\t\t\t\t\tDimanche
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-label=\"Horaires d'ouvrerture\"><input type=\"time\" id=\"appt\" name=\"appt\" min=\"09:00\" max=\"18:00\"></td>
\t\t\t\t\t\t\t<td data-label=\"Horaires de fermeture\"><input type=\"time\" id=\"appt\" name=\"apptf\" min=\"09:00\" max=\"00:00\"></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"/horaires\"><input type=\"submit\" name=\"submit\" value=\"Submit\"/></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</form>
\t\t</div>

\t\t<!-- /.col -->
\t\t<div class=\"col-md-9\">
\t\t\t<div class=\"card card-primary\">
\t\t\t\t<div
\t\t\t\t\tclass=\"card-body p-0\">
\t\t\t\t\t<!-- THE CALENDAR -->

\t\t\t\t\t<div id=\"calendar\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card-body -->
\t\t\t</div>
\t\t\t<!-- /.card -->
\t\t</div>
\t\t<!-- /.col -->
\t</body>
</html></div><!-- /.row --></div><!-- /.container-fluid --><script src=\"../plugins/jquery/jquery.min.js\"></script><!-- Bootstrap --><script src=\"../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script><!-- jQuery UI --><script src=\"../plugins/jquery-ui/jquery-ui.min.js\"></script><!-- AdminLTE App --><script src=\"../dist/js/adminlte.min.js\"></script><!-- fullCalendar 2.2.5 --><script src=\"../plugins/moment/moment.min.js\"></script><script src=\"../plugins/fullcalendar/main.js\"></script><!-- AdminLTE for demo purposes --><script src=\"../dist/js/demo.js\"></script><!-- Page specific script --><script>\$(function () { /* initialize the external events
       -----------------------------------------------------------------*/
function ini_events(ele) {
ele.each(function () {

// create an Event Object (https://fullcalendar.io/docs/event-object)
// it doesn't need to have a start or end
var eventObject = {
title: \$.trim(\$(this).text()) // use the element's text as the event title
}

// store the Event Object in the DOM element so we can get to it later
\$(this).data('eventObject', eventObject)

// make the event draggable using jQuery UI
\$(this).draggable({
zIndex: 1070, revert: true, // will cause the event to go back to its
revertDuration: 0 // original position after the drag
})

})
}

ini_events(\$('#external-events div.external-event'))

/* initialize the calendar
       -----------------------------------------------------------------*/
// Date for the calendar events (dummy data)
var date = new Date()
var d = date.getDate(),
m = date.getMonth(),
y = date.getFullYear()

var Calendar = FullCalendar.Calendar;
var Draggable = FullCalendar.Draggable;

var containerEl = document.getElementById('external-events');

var calendarEl = document.getElementById('calendar');

// initialize the external events
// -----------------------------------------------------------------

new Draggable(containerEl, {
itemSelector: '.external-event',
eventData: function (eventEl) {
return {
title: eventEl.innerText,
backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color')
};
}
});

var calendar = new Calendar(calendarEl, {
initialView: 'timeGridWeek',
locale: 'fr',
headerToolbar: {
left: 'prev,next today',
center: 'title',
right: 'dayGridMonth,timeGridWeek,timeGridDay'
},
themeSystem: 'bootstrap',
// Random default events
events: [
{
title: 'All Day Event',
start: new Date(y, m, 1),
backgroundColor: '#f56954', // red
borderColor: '#f56954', // red
allDay: true
},

],
editable: true,
droppable: true, // this allows things to be dropped onto the calendar !!!

});

calendar.render();
// \$('#calendar').fullCalendar()

/* ADDING EVENTS */
var currColor = '#3c8dbc'
// Red by default
// Color chooser button
\$('#color-chooser > li > a').click(function (e) {
e.preventDefault()
// Save color
currColor = \$(this).css('color')
// Add color effect to button
\$('#add-new-event').css({'background-color': currColor, 'border-color': currColor})
})
\$('#add-new-event').click(function (e) {
e.preventDefault()
// Get value and make sure it is not null
var val = \$('#new-event').val()
if (val.length == 0) {
return
}

// Create events
var event = \$('<div />')
event.css({'background-color': currColor, 'border-color': currColor, 'color': '#fff'}).addClass('external-event')
event.text(val)
\$('#external-events').prepend(event)

// Add draggable funtionality
ini_events(event)

// Remove event from text input
\$('#new-event').val('')
})
})</script><!-- /.content-header --></body></html>
", "responsable/reglages/VacanceFermeture.html.twig", "C:\\laragon\\www\\scooptest\\templates\\responsable\\reglages\\VacanceFermeture.html.twig");
    }
}
