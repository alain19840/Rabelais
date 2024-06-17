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

/* staffCard.twig.html */
class __TwigTemplate_4ff2502aeee1debea82e9e6c47a649b2cdc313556721e4569c9be495e903f64a extends Template
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
        // line 10
        echo "
<div class=\"border rounded bg-gray-100 my-4\">
    <div class=\"p-4 flex flex-wrap items-center\">
        <div class=\"w-full sm:w-1/2 text-center sm:text-left\">
            <div class=\"text-lg text-gray-800 leading-none mb-2 p-0\">";
        // line 14
        echo $this->env->getFunction('formatUsing')->getCallable()("name", twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "title", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "preferredName", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "surname", [], "any", false, false, false, 14), "Staff", false, true);
        echo "</div>

            <div class=\"text-sm text-gray-600 mb-0\">";
        // line 16
        echo twig_escape_filter($this->env, twig_trim_filter(twig_join_filter([twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "jobTitle", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, ($context["formGroup"] ?? null), "name", [], "any", false, false, false, 16)], ", "), ", "), "html", null, true);
        echo "</div>

            ";
        // line 18
        if (($context["status"] ?? null)) {
            // line 19
            echo "                <span class=\"tag ";
            echo twig_escape_filter($this->env, ((array_key_exists("tag", $context)) ? (_twig_default_filter(($context["tag"] ?? null), "success")) : ("success")), "html", null, true);
            echo " mt-2 mb-0\">";
            echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
            echo "</span>
            ";
        }
        // line 21
        echo "        </div>

        <div class=\"w-full sm:w-1/2 flex flex-grow justify-between sm:justify-end items-center text-xs text-center mt-4 sm:mt-0\">
            ";
        // line 24
        if (($context["canViewProfile"] ?? null)) {
            // line 25
            echo "                <a class=\"px-0 sm:px-2 w-20\" href=\"";
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/index.php?q=/modules/Staff/staff_view_details.php&gibbonPersonID=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "gibbonPersonID", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
                    <img class=\"\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/themes/Default/img/plus.png\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Profile"), "html", null, true);
            echo "\" width=\"25\" height=\"25\">
                    <div class=\"mt-1\">";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Profile"), "html", null, true);
            echo "</div>
                </a>
            ";
        }
        // line 30
        echo "
            ";
        // line 31
        if (($context["canViewAbsences"] ?? null)) {
            // line 32
            echo "                <a class=\"px-0 sm:px-2 w-20\" href=\"";
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/index.php?q=/modules/Staff/absences_view_byPerson.php&gibbonPersonID=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "gibbonPersonID", [], "any", false, false, false, 32), "html", null, true);
            echo "\">
                    <img class=\"\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/themes/Default/img/planner.png\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Absences"), "html", null, true);
            echo "\" width=\"25\" height=\"25\">
                    <div class=\"mt-1\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Absences"), "html", null, true);
            echo "</div>
                </a>
            ";
        }
        // line 37
        echo "
            ";
        // line 38
        if (($context["canViewTimetable"] ?? null)) {
            // line 39
            echo "                <a class=\"px-0 sm:px-2 w-20\" href=\"";
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/index.php?q=/modules/Timetable/tt_view.php&gibbonPersonID=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "gibbonPersonID", [], "any", false, false, false, 39), "html", null, true);
            echo "&allUsers=on\">
                    <img class=\"\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/themes/Default/img/markbook.png\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Timetable"), "html", null, true);
            echo "\" width=\"25\" height=\"25\">
                    <div class=\"mt-1\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Timetable"), "html", null, true);
            echo "</div>
                </a>
            ";
        }
        // line 44
        echo "
            ";
        // line 45
        if ((($context["canViewFormGroups"] ?? null) && ($context["formGroup"] ?? null))) {
            // line 46
            echo "                <a class=\"px-0 sm:px-2 w-20\" href=\"";
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/index.php?q=/modules/Form Groups/formGroups_details.php&gibbonFormGroupID=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["formGroup"] ?? null), "gibbonFormGroupID", [], "any", false, false, false, 46), "html", null, true);
            echo "\">
                    <img class=\"\" src=\"";
            // line 47
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/themes/Default/img/attendance.png\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Homeroom"), "html", null, true);
            echo "\" width=\"25\" height=\"25\">
                    <div class=\"mt-1\">";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Homeroom"), "html", null, true);
            echo "</div>
                </a>
            ";
        }
        // line 51
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "staffCard.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 51,  155 => 48,  149 => 47,  142 => 46,  140 => 45,  137 => 44,  131 => 41,  125 => 40,  118 => 39,  116 => 38,  113 => 37,  107 => 34,  101 => 33,  94 => 32,  92 => 31,  89 => 30,  83 => 27,  77 => 26,  70 => 25,  68 => 24,  63 => 21,  55 => 19,  53 => 18,  48 => 16,  43 => 14,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#<!--
Gibbon: the flexible, open school platform
Founded by Ross Parker at ICHK Secondary. Built by Ross Parker, Sandra Kuipers and the Gibbon community (https://gibbonedu.org/about/)
Copyright © 2010, Gibbon Foundation
Gibbon™, Gibbon Education Ltd. (Hong Kong)

This is a Gibbon template file, written in HTML and Twig syntax.
For info about editing, see: https://twig.symfony.com/doc/2.x/
-->#}

<div class=\"border rounded bg-gray-100 my-4\">
    <div class=\"p-4 flex flex-wrap items-center\">
        <div class=\"w-full sm:w-1/2 text-center sm:text-left\">
            <div class=\"text-lg text-gray-800 leading-none mb-2 p-0\">{{ formatUsing('name', staff.title, staff.preferredName, staff.surname, 'Staff', false, true) }}</div>

            <div class=\"text-sm text-gray-600 mb-0\">{{ [staff.jobTitle, formGroup.name]|join(\", \")|trim(\", \") }}</div>

            {% if status %}
                <span class=\"tag {{ tag|default('success') }} mt-2 mb-0\">{{ status }}</span>
            {% endif %}
        </div>

        <div class=\"w-full sm:w-1/2 flex flex-grow justify-between sm:justify-end items-center text-xs text-center mt-4 sm:mt-0\">
            {% if canViewProfile %}
                <a class=\"px-0 sm:px-2 w-20\" href=\"{{ absoluteURL }}/index.php?q=/modules/Staff/staff_view_details.php&gibbonPersonID={{ staff.gibbonPersonID }}\">
                    <img class=\"\" src=\"{{ absoluteURL }}/themes/Default/img/plus.png\" title=\"{{ __('Profile') }}\" width=\"25\" height=\"25\">
                    <div class=\"mt-1\">{{ __('Profile') }}</div>
                </a>
            {% endif %}

            {% if canViewAbsences %}
                <a class=\"px-0 sm:px-2 w-20\" href=\"{{ absoluteURL }}/index.php?q=/modules/Staff/absences_view_byPerson.php&gibbonPersonID={{ staff.gibbonPersonID }}\">
                    <img class=\"\" src=\"{{ absoluteURL }}/themes/Default/img/planner.png\" title=\"{{ __('Absences') }}\" width=\"25\" height=\"25\">
                    <div class=\"mt-1\">{{ __('Absences') }}</div>
                </a>
            {% endif %}

            {% if canViewTimetable %}
                <a class=\"px-0 sm:px-2 w-20\" href=\"{{ absoluteURL }}/index.php?q=/modules/Timetable/tt_view.php&gibbonPersonID={{ staff.gibbonPersonID }}&allUsers=on\">
                    <img class=\"\" src=\"{{ absoluteURL }}/themes/Default/img/markbook.png\" title=\"{{ __('Timetable') }}\" width=\"25\" height=\"25\">
                    <div class=\"mt-1\">{{ __('Timetable') }}</div>
                </a>
            {% endif %}

            {% if canViewFormGroups and formGroup %}
                <a class=\"px-0 sm:px-2 w-20\" href=\"{{ absoluteURL }}/index.php?q=/modules/Form Groups/formGroups_details.php&gibbonFormGroupID={{ formGroup.gibbonFormGroupID }}\">
                    <img class=\"\" src=\"{{ absoluteURL }}/themes/Default/img/attendance.png\" title=\"{{ __('Homeroom') }}\" width=\"25\" height=\"25\">
                    <div class=\"mt-1\">{{ __('Homeroom') }}</div>
                </a>
            {% endif %}
        </div>
    </div>
</div>
", "staffCard.twig.html", "C:\\xampp\\htdocs\\rabelais\\modules\\Staff\\templates\\staffCard.twig.html");
    }
}
