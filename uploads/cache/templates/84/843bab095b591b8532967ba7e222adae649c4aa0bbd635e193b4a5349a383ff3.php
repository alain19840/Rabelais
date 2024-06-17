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

/* importer.twig.html */
class __TwigTemplate_c8f3c04394332fa47dff55e2079aef98ec3c8498de79c5ef38803963154bd194 extends Template
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
";
        // line 11
        if (($context["log"] ?? null)) {
            // line 12
            echo "    <h2>
        ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Import"), "html", null, true);
            echo "
    </h2>

    ";
            // line 16
            if (($context["ignoreErrors"] ?? null)) {
                // line 17
                echo "        ";
                echo $this->env->getFunction('formatUsing')->getCallable()("alert", $this->env->getFunction('__')->getCallable()("Imported with errors ignored."), "warning");
                echo "
    ";
            }
            // line 19
            echo "
    <table class='blank fullWidth' cellspacing='0'>\t
        <tr>
            <td width=\"50%\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Type"), "html", null, true);
            echo ":<br/>
                ";
            // line 24
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "
            </td>
            <td width=\"50%\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Date"), "html", null, true);
            echo ":<br/>
                ";
            // line 28
            echo $this->env->getFunction('formatUsing')->getCallable()("dateTime", twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "timestamp", [], "any", false, false, false, 28));
            echo "
            </td>
        </tr>
        <tr>
            <td width=\"50%\">
                ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Details"), "html", null, true);
            echo ":<br/>
                ";
            // line 34
            echo twig_escape_filter($this->env, ((($context["success"] ?? null)) ? ($this->env->getFunction('__')->getCallable()("Success")) : ($this->env->getFunction('__')->getCallable()("Failed"))), "html", null, true);
            echo "
            </td>
            <td width=\"50%\">
                ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("User"), "html", null, true);
            echo ":<br/>
                ";
            // line 38
            echo $this->env->getFunction('formatUsing')->getCallable()("name", "", twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "preferredName", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "surname", [], "any", false, false, false, 38), "Staff");
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "username", [], "any", false, false, false, 38), "html", null, true);
            echo ")
            </td>
        </tr>
    </table>
    <br/>
";
        }
        // line 44
        echo "
<table class='smallIntBorder' cellspacing='0' style=\"margin: 0 auto; width: 60%;\">
    <tr class=\"";
        // line 46
        echo ((($context["importSuccess"] ?? null)) ? ("current") : ("error"));
        echo "\">
        <td class=\"right\"  width=\"50%\">
            ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Reading File"), "html", null, true);
        echo ":
        </td>
        <td>
            ";
        // line 51
        echo twig_escape_filter($this->env, ((($context["importSuccess"] ?? null)) ? ($this->env->getFunction('__')->getCallable()("Success")) : ($this->env->getFunction('__')->getCallable()("Failed"))), "html", null, true);
        echo "
        </td>
    </tr>
    <tr>
        <td class=\"right\">
            ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Execution Time"), "html", null, true);
        echo ":
        </td>
        <td>
            ";
        // line 59
        echo twig_escape_filter($this->env, ($context["executionTime"] ?? null), "html", null, true);
        echo "
        </td>
    </tr>
    <tr>
        <td class=\"right\">
            ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Memory Usage"), "html", null, true);
        echo ":
        </td>
        <td>
            ";
        // line 67
        echo twig_escape_filter($this->env, ($context["memoryUsage"] ?? null), "html", null, true);
        echo "
        </td>
    </tr>
</table><br/>
<table class='smallIntBorder' cellspacing='0' style=\"margin: 0 auto; width: 60%;\">
    <tr class=\"";
        // line 72
        echo ((($context["buildSuccess"] ?? null)) ? ("current") : ("error"));
        echo "\">
        <td class=\"right\" width=\"50%\">
            ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Validating Data"), "html", null, true);
        echo ":
        </td>
        <td>
            ";
        // line 77
        echo twig_escape_filter($this->env, ((($context["buildSuccess"] ?? null)) ? ($this->env->getFunction('__')->getCallable()("Success")) : ($this->env->getFunction('__')->getCallable()("Failed"))), "html", null, true);
        echo "
        </td>
    </tr>
    <tr>
        <td class=\"right\">
            ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Rows Processed"), "html", null, true);
        echo ":
        </td>
        <td>
            ";
        // line 85
        echo twig_escape_filter($this->env, ($context["rows"] ?? null), "html", null, true);
        echo "
        </td>
    </tr>
    <tr>
        <td class=\"right\">
            ";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Rows with Errors"), "html", null, true);
        echo ":
        </td>
        <td>
            ";
        // line 93
        echo twig_escape_filter($this->env, ($context["rowerrors"] ?? null), "html", null, true);
        echo "
        </td>
    </tr>
    <tr>
        <td class=\"right\">
            ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Total Errors"), "html", null, true);
        echo ":
        </td>
        <td>
            ";
        // line 101
        echo twig_escape_filter($this->env, ($context["errors"] ?? null), "html", null, true);
        echo "
        </td>
    </tr>
    ";
        // line 104
        if (($context["warnings"] ?? null)) {
            // line 105
            echo "    <tr>
        <td class=\"right\">
            ";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Total Warnings"), "html", null, true);
            echo ":
        </td>
        <td>
            ";
            // line 110
            echo twig_escape_filter($this->env, ($context["warnings"] ?? null), "html", null, true);
            echo "
        </td>
    </tr>
    ";
        }
        // line 114
        echo "</table><br/>

<table class='smallIntBorder' cellspacing='0' style=\"margin: 0 auto; width: 60%;\">
    <tr class=\"";
        // line 117
        echo ((($context["databaseSuccess"] ?? null)) ? ("current") : ("error"));
        echo "\">
        <td class=\"right\" width=\"50%\">
            ";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Querying Database"), "html", null, true);
        echo ":
        </td>
        <td>
            ";
        // line 122
        echo twig_escape_filter($this->env, ((($context["databaseSuccess"] ?? null)) ? ($this->env->getFunction('__')->getCallable()("Success")) : ($this->env->getFunction('__')->getCallable()("Failed"))), "html", null, true);
        echo "
        </td>
    </tr>
    <tr>
        <td class=\"right\">
            ";
        // line 127
        (((($context["step"] ?? null) == 3)) ? (print (twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Simulated"), "html", null, true))) : (print ("")));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Database Inserts"), "html", null, true);
        echo ":
        </td>
        <td>
            ";
        // line 130
        echo twig_escape_filter($this->env, ($context["inserts"] ?? null), "html", null, true);
        echo "
            ";
        // line 131
        if (($context["inserts_skipped"] ?? null)) {
            echo "(";
            echo twig_escape_filter($this->env, ($context["inserts_skipped"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("skipped"), "html", null, true);
            echo ")";
        }
        // line 132
        echo "        </td>
    </tr>

    <tr>
        <td class=\"right\">
            ";
        // line 137
        (((($context["step"] ?? null) == 3)) ? (print (twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Simulated"), "html", null, true))) : (print ("")));
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Database Updates"), "html", null, true);
        echo ":
        </td>
        <td>
            ";
        // line 140
        echo twig_escape_filter($this->env, ($context["updates"] ?? null), "html", null, true);
        echo "
            ";
        // line 141
        if (($context["updates_skipped"] ?? null)) {
            echo "(";
            echo twig_escape_filter($this->env, ($context["updates_skipped"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("skipped"), "html", null, true);
            echo ")";
        }
        // line 142
        echo "        </td>
    </tr>

</table><br/>
";
    }

    public function getTemplateName()
    {
        return "importer.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 142,  304 => 141,  300 => 140,  292 => 137,  285 => 132,  277 => 131,  273 => 130,  265 => 127,  257 => 122,  251 => 119,  246 => 117,  241 => 114,  234 => 110,  228 => 107,  224 => 105,  222 => 104,  216 => 101,  210 => 98,  202 => 93,  196 => 90,  188 => 85,  182 => 82,  174 => 77,  168 => 74,  163 => 72,  155 => 67,  149 => 64,  141 => 59,  135 => 56,  127 => 51,  121 => 48,  116 => 46,  112 => 44,  101 => 38,  97 => 37,  91 => 34,  87 => 33,  79 => 28,  75 => 27,  69 => 24,  65 => 23,  59 => 19,  53 => 17,  51 => 16,  45 => 13,  42 => 12,  40 => 11,  37 => 10,);
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

{% if log %}
    <h2>
        {{ __('Import') }}
    </h2>

    {% if ignoreErrors %}
        {{ formatUsing('alert', __('Imported with errors ignored.'), 'warning')|raw }}
    {% endif %}

    <table class='blank fullWidth' cellspacing='0'>\t
        <tr>
            <td width=\"50%\">
                {{ __('Type') }}:<br/>
                {{ name }}
            </td>
            <td width=\"50%\">
                {{ __('Date')}}:<br/>
                {{ formatUsing('dateTime', log.timestamp) }}
            </td>
        </tr>
        <tr>
            <td width=\"50%\">
                {{ __('Details') }}:<br/>
                {{ success ? __('Success') : __('Failed')}}
            </td>
            <td width=\"50%\">
                {{ __('User') }}:<br/>
                {{ formatUsing('name', '', log.preferredName, log.surname, 'Staff')}} ({{ log.username }})
            </td>
        </tr>
    </table>
    <br/>
{% endif %}

<table class='smallIntBorder' cellspacing='0' style=\"margin: 0 auto; width: 60%;\">
    <tr class=\"{{ importSuccess ? \"current\" : \"error\" }}\">
        <td class=\"right\"  width=\"50%\">
            {{ __('Reading File') }}:
        </td>
        <td>
            {{ importSuccess ? __('Success') : __('Failed') }}
        </td>
    </tr>
    <tr>
        <td class=\"right\">
            {{ __('Execution Time') }}:
        </td>
        <td>
            {{ executionTime }}
        </td>
    </tr>
    <tr>
        <td class=\"right\">
            {{ __('Memory Usage') }}:
        </td>
        <td>
            {{ memoryUsage }}
        </td>
    </tr>
</table><br/>
<table class='smallIntBorder' cellspacing='0' style=\"margin: 0 auto; width: 60%;\">
    <tr class=\"{{ buildSuccess ? \"current\" : \"error\" }}\">
        <td class=\"right\" width=\"50%\">
            {{ __('Validating Data') }}:
        </td>
        <td>
            {{ buildSuccess ? __('Success') : __('Failed') }}
        </td>
    </tr>
    <tr>
        <td class=\"right\">
            {{ __('Rows Processed') }}:
        </td>
        <td>
            {{ rows }}
        </td>
    </tr>
    <tr>
        <td class=\"right\">
            {{ __('Rows with Errors') }}:
        </td>
        <td>
            {{ rowerrors }}
        </td>
    </tr>
    <tr>
        <td class=\"right\">
            {{ __('Total Errors') }}:
        </td>
        <td>
            {{ errors }}
        </td>
    </tr>
    {% if warnings %}
    <tr>
        <td class=\"right\">
            {{ __('Total Warnings') }}:
        </td>
        <td>
            {{ warnings }}
        </td>
    </tr>
    {% endif %}
</table><br/>

<table class='smallIntBorder' cellspacing='0' style=\"margin: 0 auto; width: 60%;\">
    <tr class=\"{{ databaseSuccess ? \"current\" : \"error\" }}\">
        <td class=\"right\" width=\"50%\">
            {{ __('Querying Database') }}:
        </td>
        <td>
            {{ databaseSuccess ? __('Success') : __('Failed') }}
        </td>
    </tr>
    <tr>
        <td class=\"right\">
            {{ step == 3 ? __('Simulated') }} {{ __('Database Inserts') }}:
        </td>
        <td>
            {{ inserts }}
            {% if inserts_skipped %}({{ inserts_skipped }} {{ __('skipped') }}){% endif %}
        </td>
    </tr>

    <tr>
        <td class=\"right\">
            {{ step == 3 ? __('Simulated') }}  {{__('Database Updates') }}:
        </td>
        <td>
            {{ updates }}
            {% if updates_skipped %}({{ updates_skipped }} {{ __('skipped') }}){% endif %}
        </td>
    </tr>

</table><br/>
", "importer.twig.html", "C:\\xampp\\htdocs\\rabelais\\resources\\templates\\importer.twig.html");
    }
}
