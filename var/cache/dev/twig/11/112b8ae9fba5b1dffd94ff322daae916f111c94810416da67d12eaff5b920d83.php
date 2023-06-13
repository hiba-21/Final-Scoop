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

/* home/calandar.html.twig */
class __TwigTemplate_5c4f19be1581dfde962ea8233e0081f8751534e9aa149c66c92f8a5d6e3407ec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/calandar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/calandar.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t";
        // line 11
        echo "
\t\t";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "

\t</head>
\t<body>
\t\t";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "\t\t<script src=\"../plugins/jquery/jquery.min.js\"></script>
\t\t<!-- Bootstrap -->
\t\t<script src=\"../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- jQuery UI -->
\t\t<script src=\"../plugins/jquery-ui/jquery-ui.min.js\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"../dist/js/adminlte.min.js\"></script>
\t\t<!-- fullCalendar 2.2.5 -->
\t\t<script src=\"../plugins/moment/moment.min.js\"></script>
\t\t<script src=\"../plugins/fullcalendar/main.js\"></script>
\t\t<!-- AdminLTE for demo purposes -->
\t\t<script src=\"../dist/js/demo.js\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js\" integrity=\"sha256-ekrJn2FeZaiUFq99QswpQCUTME/HxaDfX7R8INzKJGE=\" crossorigin=\"anonymous\"></script>
\t\t";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 133
        echo "\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "calendrier
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"../plugins/fontawesome-free/css/all.min.css\">
\t\t\t<!-- fullCalendar -->
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"../plugins/fullcalendar/main.css\">
\t\t\t<!-- Google Font: Source Sans Pro -->
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t\t<!-- Font Awesome -->
\t\t\t<link rel=\"stylesheet\" href=\"../plugins/fontawesome-free/css/all.min.css\">


\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "
\t\t\t<div id=\"calendar\"></div>
\t\t\t<div id=\"external-events\">
\t\t\t\t<div class=\"external-event bg-warning\">Vacance</div>
\t\t\t\t<div class=\"external-event bg-danger\">Fermeture</div>
\t\t\t</div>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "\t\t\t<script>

\t\t\t\tvar date = new Date()
var d = date.getDate(),
m = date.getMonth(),
y = date.getFullYear()

var Calendar = FullCalendar.Calendar;
var Draggable = FullCalendar.Draggable;

var containerEl = document.getElementById('external-events');

var calendarEl = document.getElementById('calendar');
var calendar = new Calendar(calendarEl, {
initialView: 'dayGridMonth',
locale: 'fr',
headerToolbar: {
left: 'prev,next today',
center: 'title',
right: 'dayGridMonth,timeGridWeek,timeGridDay'
},

themeSystem: 'bootstrap',
// Random default events
events: ";
        // line 77
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 77, $this->source); })());
        echo ",
selectOverlap: function (event) {
return event.rendering === 'background';
},
dateClick: function (info) {
alert('Clicked on: ' + info.dateStr);
alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
alert('Current view: ' + info.view.type);
// change the day's background color just for fun
info.dayEl.style.backgroundColor = 'red';
},
eventClick: function (info) {
alert('Event: ' + info.event.title);
alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
alert('View: ' + info.view.type);

// change the border color just for fun
info.el.style.borderColor = 'red';
},

editable: true,
eventResizableFromStart: true,
selectable: true,
droppable: true, // this allows things to be dropped onto the calendar !!!

})
calendar.on('eventChange', (e) => {
let url = '/api/\${e.event.id}/edit'
let donnees = {
\"title\": e.event.title,
\"start\": e.event.start,
\"end\": e.event.end,
\"backgroundColor\": e.event.backgroundColor,
\"borderColor\": e.event.borderColor,
\"textColor\": e.event.textColor,
\"allDay\": e.event.allDay yt
}
let xm = new XMLHttpRequest();
xm.open(\"PUT\", url),
xm.send(JSON.stringify(donnees));
})
calendar.render();
new Draggable(containerEl, {
itemSelector: '.external-event',
eventData: function (events) {
return {
title: events.innerText,
backgroundColor: window.getComputedStyle(events, null).getPropertyValue('background-color'),
borderColor: window.getComputedStyle(events, null).getPropertyValue('background-color'),
textColor: window.getComputedStyle(events, null).getPropertyValue('color')
};
}
});
\t\t\t</script>

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/calandar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  216 => 77,  190 => 53,  180 => 52,  164 => 32,  154 => 31,  131 => 13,  121 => 12,  101 => 6,  89 => 133,  87 => 52,  72 => 39,  70 => 31,  64 => 27,  62 => 12,  59 => 11,  56 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}calendrier
\t\t\t{% endblock %}
\t\t</title>
\t\t{# Run `composer require symfony/webpack-encore-bundle`
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t           and uncomment the following Encore helpers to start using Symfony UX #}

\t\t{% block stylesheets %}
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"../plugins/fontawesome-free/css/all.min.css\">
\t\t\t<!-- fullCalendar -->
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"../plugins/fullcalendar/main.css\">
\t\t\t<!-- Google Font: Source Sans Pro -->
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
\t\t\t<!-- Font Awesome -->
\t\t\t<link rel=\"stylesheet\" href=\"../plugins/fontawesome-free/css/all.min.css\">


\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
\t\t{% endblock %}


\t</head>
\t<body>
\t\t{% block body %}

\t\t\t<div id=\"calendar\"></div>
\t\t\t<div id=\"external-events\">
\t\t\t\t<div class=\"external-event bg-warning\">Vacance</div>
\t\t\t\t<div class=\"external-event bg-danger\">Fermeture</div>
\t\t\t</div>
\t\t{% endblock %}
\t\t<script src=\"../plugins/jquery/jquery.min.js\"></script>
\t\t<!-- Bootstrap -->
\t\t<script src=\"../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- jQuery UI -->
\t\t<script src=\"../plugins/jquery-ui/jquery-ui.min.js\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"../dist/js/adminlte.min.js\"></script>
\t\t<!-- fullCalendar 2.2.5 -->
\t\t<script src=\"../plugins/moment/moment.min.js\"></script>
\t\t<script src=\"../plugins/fullcalendar/main.js\"></script>
\t\t<!-- AdminLTE for demo purposes -->
\t\t<script src=\"../dist/js/demo.js\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js\" integrity=\"sha256-ekrJn2FeZaiUFq99QswpQCUTME/HxaDfX7R8INzKJGE=\" crossorigin=\"anonymous\"></script>
\t\t{% block javascripts %}
\t\t\t<script>

\t\t\t\tvar date = new Date()
var d = date.getDate(),
m = date.getMonth(),
y = date.getFullYear()

var Calendar = FullCalendar.Calendar;
var Draggable = FullCalendar.Draggable;

var containerEl = document.getElementById('external-events');

var calendarEl = document.getElementById('calendar');
var calendar = new Calendar(calendarEl, {
initialView: 'dayGridMonth',
locale: 'fr',
headerToolbar: {
left: 'prev,next today',
center: 'title',
right: 'dayGridMonth,timeGridWeek,timeGridDay'
},

themeSystem: 'bootstrap',
// Random default events
events: {{ data|raw }},
selectOverlap: function (event) {
return event.rendering === 'background';
},
dateClick: function (info) {
alert('Clicked on: ' + info.dateStr);
alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
alert('Current view: ' + info.view.type);
// change the day's background color just for fun
info.dayEl.style.backgroundColor = 'red';
},
eventClick: function (info) {
alert('Event: ' + info.event.title);
alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
alert('View: ' + info.view.type);

// change the border color just for fun
info.el.style.borderColor = 'red';
},

editable: true,
eventResizableFromStart: true,
selectable: true,
droppable: true, // this allows things to be dropped onto the calendar !!!

})
calendar.on('eventChange', (e) => {
let url = '/api/\${e.event.id}/edit'
let donnees = {
\"title\": e.event.title,
\"start\": e.event.start,
\"end\": e.event.end,
\"backgroundColor\": e.event.backgroundColor,
\"borderColor\": e.event.borderColor,
\"textColor\": e.event.textColor,
\"allDay\": e.event.allDay yt
}
let xm = new XMLHttpRequest();
xm.open(\"PUT\", url),
xm.send(JSON.stringify(donnees));
})
calendar.render();
new Draggable(containerEl, {
itemSelector: '.external-event',
eventData: function (events) {
return {
title: events.innerText,
backgroundColor: window.getComputedStyle(events, null).getPropertyValue('background-color'),
borderColor: window.getComputedStyle(events, null).getPropertyValue('background-color'),
textColor: window.getComputedStyle(events, null).getPropertyValue('color')
};
}
});
\t\t\t</script>

\t\t{% endblock %}
\t</body>
</html>
", "home/calandar.html.twig", "C:\\laragon\\www\\scooptest\\templates\\home\\calandar.html.twig");
    }
}
