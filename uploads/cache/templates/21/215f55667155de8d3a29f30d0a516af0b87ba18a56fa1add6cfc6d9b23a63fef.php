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

/* dutySchedule.twig.html */
class __TwigTemplate_525ae095551e623626b0faa91626daa02fe7a72ee54305349c0e7b9bd68dc963 extends Template
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
        // line 1
        if (($context["duty"] ?? null)) {
            // line 2
            echo "<div id=\"duty\" class=\"dutyContainer overflow-x-auto max-w-4xl font-sans\">

    <div style=\"width:";
            // line 4
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, ($context["duty"] ?? null)) * 16.5), "html", null, true);
            echo "rem\">

    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["duty"] ?? null));
            foreach ($context['_seq'] as $context["weekdayName"] => $context["dutyList"]) {
                // line 7
                echo "        <div class=\"float-left w-64 mr-2\">
        <h5 class=\"mt-0 p-0\">";
                // line 8
                echo twig_escape_filter($this->env, $context["weekdayName"], "html", null, true);
                echo "</h5>

        ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["dutyList"]);
                foreach ($context['_seq'] as $context["_key"] => $context["dutyItem"]) {
                    // line 11
                    echo "            <div class=\"bg-gray-200 p-2 mb-2 rounded-sm\" >
                <div class=\"flex justify-between text-sm mb-2\">
                    <span class=\"font-bold text-gray-700\">";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dutyItem"], "name", [], "any", false, false, false, 13), "html", null, true);
                    echo "</span>
                    <span class=\"text-xs text-gray-500\">";
                    // line 14
                    echo $this->env->getFunction('formatUsing')->getCallable()("timeRange", twig_get_attribute($this->env, $this->source, $context["dutyItem"], "timeStart", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, $context["dutyItem"], "timeEnd", [], "any", false, false, false, 14));
                    echo "</span>
                </div>

                <div class=\"dutySection\" style=\"min-height: 3.2rem;\" data-duty=\"";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dutyItem"], "gibbonStaffDutyID", [], "any", false, false, false, 17), "html", null, true);
                    echo "\" data-weekday=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dutyItem"], "gibbonDaysOfWeekID", [], "any", false, false, false, 17), "html", null, true);
                    echo "\">

                ";
                    // line 19
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dutyItem"], "roster", [], "any", false, false, false, 19));
                    foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                        // line 20
                        echo "                <div class=\"dutyPerson z-10 flex items-center bg-white shadow rounded-sm mb-2 p-2 text-sm border  ";
                        if (($context["canEdit"] ?? null)) {
                            echo "hover:bg-blue-100 hover:border-blue-500 cursor-move group";
                        }
                        echo "\" style=\"width: 15rem;\" data-person=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "gibbonStaffDutyPersonID", [], "any", false, false, false, 20), "html", null, true);
                        echo "\">
                    <div class=\"rounded-full w-8 h-8 mr-2 overflow-hidden cursor-move\" style=\"background-image: url('";
                        // line 21
                        echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                        echo "/themes/";
                        echo twig_escape_filter($this->env, ($context["gibbonThemeName"] ?? null), "html", null, true);
                        echo "/img/anonymous_75.jpg'); background-size: cover; background-position: 50% 45%;\">
                        ";
                        // line 22
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["person"], "image_240", [], "any", false, false, false, 22))) {
                            // line 23
                            echo "                        <img src=\"";
                            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "image_240", [], "any", false, false, false, 23), "html", null, true);
                            echo "\" class=\"w-full -mt-1\">
                        ";
                        }
                        // line 25
                        echo "                    </div>

                    ";
                        // line 27
                        echo $this->env->getFunction('formatUsing')->getCallable()("name", twig_get_attribute($this->env, $this->source, $context["person"], "title", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, $context["person"], "preferredName", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, $context["person"], "surname", [], "any", false, false, false, 27), "Staff", false, true);
                        echo "<br/>

                    ";
                        // line 29
                        if (($context["canEdit"] ?? null)) {
                            // line 30
                            echo "                    <a href=\"";
                            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                            echo "/fullscreen.php?q=/modules/Staff/staff_duty_delete.php&width=650&height=250&gibbonStaffDutyPersonID=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "gibbonStaffDutyPersonID", [], "any", false, false, false, 30), "html", null, true);
                            echo "\" class=\"thickbox flex-1 text-right hidden group-hover:block cursor-pointer\">
                        <img src=\"";
                            // line 31
                            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                            echo "/themes/";
                            echo twig_escape_filter($this->env, ($context["gibbonThemeName"] ?? null), "html", null, true);
                            echo "/img/garbage.png\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Delete"), "html", null, true);
                            echo "\" class=\"w-3 h-3 mr-2\">
                    </a>
                    ";
                        }
                        // line 34
                        echo "                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dutyItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "
        ";
                // line 40
                if (($context["canEdit"] ?? null)) {
                    // line 41
                    echo "        <a href=\"";
                    echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                    echo "/fullscreen.php?q=/modules/Staff/staff_duty_add.php&width=800&height=400&gibbonDaysOfWeekID=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, $context["dutyList"]), "gibbonDaysOfWeekID", [], "any", false, false, false, 41), "html", null, true);
                    echo "\" class=\"thickbox w-full bg-gray-200 p-2 mb-2 rounded-sm text-sm font-bold text-gray-700 opacity-50 hover:opacity-100 flex items-center justify-center\">
            <img src=\"";
                    // line 42
                    echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                    echo "/themes/";
                    echo twig_escape_filter($this->env, ($context["gibbonThemeName"] ?? null), "html", null, true);
                    echo "/img/page_new.png\" class=\"w-3 h-3 mr-2\">
            ";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Add Staff"), "html", null, true);
                    echo "
        </a>
        ";
                }
                // line 46
                echo "        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['weekdayName'], $context['dutyList'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
    </div>
</div>
";
        } else {
            // line 52
            echo "    <div class=\"h-48 rounded-sm border bg-gray-100 shadow-inner overflow-hidden\">
        ";
            // line 53
            echo twig_include($this->env, $context, "components/blankSlate.twig.html");
            echo "
    </div>
";
        }
        // line 56
        echo "
";
        // line 57
        if (($context["canEdit"] ?? null)) {
            // line 58
            echo "<script>

\$('#duty .dutySection').sortable({
    tolerance: 5,
    cursor: \"move\",
    items: \".dutyPerson\",
    connectWith: \".dutySection\",
    zIndex: 20,
    containment: \"#duty\",
    
});

\$('#duty .dutySection').droppable({
    accept: '.dutyPerson',

    over: function(event, ui) {
        },
        out: function(event, ui) {
        },
        deactivate: function(event, ui) {
        },

        drop: function(event, ui) {
            \$.ajax({
                url: '";
            // line 82
            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
            echo "/modules/Staff/staff_duty_ajaxProcess.php',
                data: {
                    gibbonStaffDutyPersonID: \$(ui.draggable).data('person'),
                    gibbonStaffDutyID: \$(this).data('duty'),
                    gibbonDaysOfWeekID: \$(this).data('weekday'),
                },
                type: 'POST',
                complete: function (data) {

                },
                
            });
        },
});
    
</script>

";
        }
    }

    public function getTemplateName()
    {
        return "dutySchedule.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 82,  208 => 58,  206 => 57,  203 => 56,  197 => 53,  194 => 52,  188 => 48,  181 => 46,  175 => 43,  169 => 42,  162 => 41,  160 => 40,  157 => 39,  149 => 36,  142 => 34,  132 => 31,  125 => 30,  123 => 29,  118 => 27,  114 => 25,  106 => 23,  104 => 22,  98 => 21,  89 => 20,  85 => 19,  78 => 17,  72 => 14,  68 => 13,  64 => 11,  60 => 10,  55 => 8,  52 => 7,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dutySchedule.twig.html", "C:\\xampp\\htdocs\\rabelais\\modules\\Staff\\templates\\dutySchedule.twig.html");
    }
}
