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

/* components/studentHistory.twig.html */
class __TwigTemplate_d8cfb009ed08644c9ef58f321c07dcaa7b150acabf589150c50045708e3dd03c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tableInner' => [$this, 'block_tableInner'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "components/dataTable.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $macros["attendance"] = $this->macros["attendance"] = $this;
        // line 11
        $this->parent = $this->loadTemplate("components/dataTable.twig.html", "components/studentHistory.twig.html", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_tableInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
    <div class=\"flex flex-wrap justify-center md:justify-between rounded bg-gray-100 border\">
        <div class=\"md:flex-1 p-4 text-sm text-gray-700\">
            <h3 class=\"mt-2 border-b-0\">
                ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Summary"), "html", null, true);
        echo "
            </h3>

            ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "total", [], "any", false, false, false, 22)) {
            // line 23
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "total", [], "any", false, false, false, 23) != ((twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "present", [], "any", false, false, false, 23) + twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "partial", [], "any", false, false, false, 23)) + twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "absent", [], "any", false, false, false, 23)))) {
                // line 24
                echo "                    <div class=\"italic mb-4 text-xs\">
                    ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("It appears that this student is missing attendance data for some school days:"), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 28
            echo "
                <div class=\"leading-snug\">
                    <strong>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Total number of school days to date:"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "total", [], "any", false, false, false, 30), "html", null, true);
            echo "</strong><br/>
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Total number of school days attended:"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "present", [], "any", false, false, false, 31) + twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "partial", [], "any", false, false, false, 31)), "html", null, true);
            echo "<br/>
                    ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Total number of school days absent:"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "absent", [], "any", false, false, false, 32), "html", null, true);
            echo "<br/>
                </div>
            ";
        }
        // line 35
        echo "        </div>

        ";
        // line 37
        if ( !($context["printView"] ?? null)) {
            // line 38
            echo "        <div class=\" p-4\">
            ";
            // line 39
            echo ($context["chart"] ?? null);
            echo "
        </div>
        ";
        }
        // line 42
        echo "    </div>


    <div id=\"studentHistory\">
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataSet"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 47
            echo "        <h4>
        ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["term"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo "
        </h4>

        ";
            // line 51
            $context["daysOfWeek"] = twig_get_attribute($this->env, $this->source, $context["term"], "daysOfWeek", [], "any", false, false, false, 51);
            // line 52
            echo "        ";
            $context["blockWidth"] = ("w-1/" . twig_length_filter($this->env, ($context["daysOfWeek"] ?? null)));
            // line 53
            echo "        ";
            $context["dayClass"] = "flex flex-col justify-center border-t border-b border-r py-2 px-1 -mt-px ";
            // line 54
            echo "
        <div class=\"flex flex-wrap border-t border-l border-gray-500\">

            ";
            // line 58
            echo "            <div class=\"w-full flex items-stretch text-xs text-center text-gray-700 font-bold bg-gray-200 border-b border-r border-gray-500\">
                ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["daysOfWeek"] ?? null));
            foreach ($context['_seq'] as $context["dayNameShort"] => $context["dayName"]) {
                // line 60
                echo "                    <div class=\"";
                echo twig_escape_filter($this->env, ($context["blockWidth"] ?? null), "html", null, true);
                echo " py-1\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()($context["dayName"]), "html", null, true);
                echo "\">
                        ";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()($context["dayNameShort"]), "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['dayNameShort'], $context['dayName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
                ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["daysOfWeek"] ?? null));
            foreach ($context['_seq'] as $context["dayNameShort"] => $context["dayName"]) {
                // line 66
                echo "                    <div class=\"hidden md:block ";
                echo twig_escape_filter($this->env, ($context["blockWidth"] ?? null), "html", null, true);
                echo " py-1\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()($context["dayName"]), "html", null, true);
                echo "\">
                        ";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()($context["dayNameShort"]), "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['dayNameShort'], $context['dayName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "            </div>

            ";
            // line 73
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["term"], "weeks", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["weekNumber"] => $context["week"]) {
                // line 74
                echo "                <div class=\"w-full md:w-1/2 flex items-stretch text-xxs text-center text-gray-600\" style=\"min-height: 55px;\">

                ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["week"]);
                foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                    // line 77
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["day"], "outsideTerm", [], "any", false, false, false, 77)) {
                        // line 78
                        echo "                        <div class=\"";
                        echo twig_escape_filter($this->env, ($context["blockWidth"] ?? null), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, ($context["dayClass"] ?? null), "html", null, true);
                        echo " bg-gray-400 border-gray-600 text-gray-500\">
                        </div>
                    ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 80
$context["day"], "beforeStartDate", [], "any", false, false, false, 80)) {
                        // line 81
                        echo "                        <div class=\"";
                        echo twig_escape_filter($this->env, ($context["blockWidth"] ?? null), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, ($context["dayClass"] ?? null), "html", null, true);
                        echo " bg-gray-400 border-gray-600 text-gray-500\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Before Start Date"), "html", null, true);
                        echo "\">
                            ";
                        // line 82
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "dateDisplay", [], "any", false, false, false, 82), "html", null, true);
                        echo "<br/>
                            ";
                        // line 83
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Before Start Date"), "html", null, true);
                        echo "
                        </div>
                    ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 85
$context["day"], "afterEndDate", [], "any", false, false, false, 85)) {
                        // line 86
                        echo "                        <div class=\"";
                        echo twig_escape_filter($this->env, ($context["blockWidth"] ?? null), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, ($context["dayClass"] ?? null), "html", null, true);
                        echo " bg-gray-400 border-gray-600 text-gray-500\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("After End Date"), "html", null, true);
                        echo "\">
                            ";
                        // line 87
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "dateDisplay", [], "any", false, false, false, 87), "html", null, true);
                        echo "<br/>
                            ";
                        // line 88
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("After End Date"), "html", null, true);
                        echo "
                        </div>
                    ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 90
$context["day"], "specialDay", [], "any", false, false, false, 90)) {
                        // line 91
                        echo "                        <div class=\"";
                        echo twig_escape_filter($this->env, ($context["blockWidth"] ?? null), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, ($context["dayClass"] ?? null), "html", null, true);
                        echo " bg-gray-400 border-gray-600 text-gray-500\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("School Closed"), "html", null, true);
                        echo "\">
                            ";
                        // line 92
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "specialDay", [], "any", false, false, false, 92), "html", null, true);
                        echo "
                        </div>
                    ";
                    } elseif ((twig_test_empty(twig_get_attribute($this->env, $this->source,                     // line 94
$context["day"], "logs", [], "any", false, false, false, 94)) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["day"], "classLogs", [], "any", false, false, false, 94)))) {
                        // line 95
                        echo "                        <div class=\"";
                        echo twig_escape_filter($this->env, ($context["blockWidth"] ?? null), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, ($context["dayClass"] ?? null), "html", null, true);
                        echo " bg-gray-200 border-gray-600 text-gray-700\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("No Data"), "html", null, true);
                        echo "\">
                            ";
                        // line 96
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "dateDisplay", [], "any", false, false, false, 96), "html", null, true);
                        echo "
                        </div>
                    ";
                    } else {
                        // line 99
                        echo "                        <a class=\"";
                        echo twig_escape_filter($this->env, ($context["blockWidth"] ?? null), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, ($context["dayClass"] ?? null), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["day"], "endOfDay", [], "any", false, false, false, 99), "statusClass", [], "any", false, false, false, 99), "html", null, true);
                        echo " relative z-10\" data-log=\"";
                        echo twig_call_macro($macros["attendance"], "macro_tooltip", [$context["day"]], 99, $context, $this->getSourceContext());
                        echo "\"
                            ";
                        // line 100
                        if (($context["canTakeAttendanceByPerson"] ?? null)) {
                            // line 101
                            echo "                                href=\"";
                            echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                            echo "/index.php?q=/modules/Attendance/attendance_take_byPerson.php&gibbonPersonID=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "gibbonPersonID", [], "any", false, false, false, 101), "html", null, true);
                            echo "&currentDate=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "date", [], "any", false, false, false, 101), "html", null, true);
                            echo "\"
                            ";
                        }
                        // line 102
                        echo ">

                            ";
                        // line 104
                        echo twig_call_macro($macros["attendance"], "macro_badge", [$context["day"]], 104, $context, $this->getSourceContext());
                        echo "

                            <span>";
                        // line 106
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "dateDisplay", [], "any", false, false, false, 106), "html", null, true);
                        echo "</span>
                            <span class=\"mt-1 font-bold\">";
                        // line 107
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["day"], "endOfDay", [], "any", false, false, false, 107), "type", [], "any", false, false, false, 107)), "html", null, true);
                        echo "</span>

                            ";
                        // line 109
                        if (($context["printView"] ?? null)) {
                            // line 110
                            echo "                                <span class=\"mt-1\">
                                ";
                            // line 111
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["day"], "logs", [], "any", false, false, false, 111));
                            $context['loop'] = [
                              'parent' => $context['_parent'],
                              'index0' => 0,
                              'index'  => 1,
                              'first'  => true,
                            ];
                            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                                $length = count($context['_seq']);
                                $context['loop']['revindex0'] = $length - 1;
                                $context['loop']['revindex'] = $length;
                                $context['loop']['length'] = $length;
                                $context['loop']['last'] = 1 === $length;
                            }
                            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                                // line 112
                                echo "                                    ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "code", [], "any", false, false, false, 112), "html", null, true);
                                // line 113
                                echo (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 113)) ? (" : ") : (""));
                                ++$context['loop']['index0'];
                                ++$context['loop']['index'];
                                $context['loop']['first'] = false;
                                if (isset($context['loop']['length'])) {
                                    --$context['loop']['revindex0'];
                                    --$context['loop']['revindex'];
                                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 115
                            echo "                                </span>
                            ";
                        }
                        // line 117
                        echo "                        </a>
                    ";
                    }
                    // line 119
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['weekNumber'], $context['week'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "    </div>


";
    }

    // line 192
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 193
        echo "

";
        // line 199
        echo "<style>
    .tooltip-reset {
        background: #ffffff !important;
        min-width: 16rem;
    }
    .w-1\\/7 {
        width: 14.28%;
    }
</style>
<script>
\$('#studentHistory').tooltip({
    items: \"a[data-log]\",
    show: 800,
    hide: false,
    content: function () {
        return \$(this).data('log');
    },
    tooltipClass: \"tooltip-reset\",
    position: {
        my: \"center bottom-5\",
        at: \"center top\",
        using: function (position, feedback) {
            \$(this).css(position);
            \$(\"<div>\").
                addClass(\"arrow\").
                addClass(feedback.vertical).
                addClass(feedback.horizontal).
                appendTo(this);
        }
    }
});
</script>

";
    }

    // line 133
    public function macro_tooltip($__day__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "day" => $__day__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 134
            echo "    <section class='-mx-2 p-4 border text-center ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "endOfDay", [], "any", false, false, false, 134), "statusClass", [], "any", false, false, false, 134), "html", null, true);
            echo "'>
        ";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "dateDisplay", [], "any", false, false, false, 135), "html", null, true);
            echo "<br/>
        
        <span class='font-bold text-base leading-normal'>";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "endOfDay", [], "any", false, false, false, 137), "type", [], "any", false, false, false, 137)), "html", null, true);
            echo "</span><br/>

        ";
            // line 139
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "endOfDay", [], "any", false, false, false, 139), "reason", [], "any", false, false, false, 139)) {
                // line 140
                echo "            <span class='mt-1 text-xs'>";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "endOfDay", [], "any", false, false, false, 140), "reason", [], "any", false, false, false, 140)), "html", null, true);
                echo "</span><br/>
        ";
            }
            // line 142
            echo "
        <ul class='list-none ml-0 mt-4 text-xs text-left'>
            <li class='text-xxs  font-bold'>";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("School Attendance"), "html", null, true);
            echo ":</li>
            ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "logs", [], "any", false, false, false, 145));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 146
                echo "                <li class='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "statusClass", [], "any", false, false, false, 146), "html", null, true);
                echo " leading-relaxed'>
                    ";
                // line 147
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "timestampTaken", [], "any", false, false, false, 147), (((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "timestampTaken", [], "any", false, false, false, 147), "Y-m-d") == twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "date", [], "any", false, false, false, 147))) ? ("H:i") : ("H:i Y-m-d"))), "html", null, true);
                echo " -
                    ";
                // line 148
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 148)), "html", null, true);
                ((twig_get_attribute($this->env, $this->source, $context["log"], "reason", [], "any", false, false, false, 148)) ? (print (twig_escape_filter($this->env, (", " . $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["log"], "reason", [], "any", false, false, false, 148))), "html", null, true))) : (print ("")));
                echo " - 
                    ";
                // line 149
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["log"], "contextName", [], "any", false, false, false, 149)) ? (twig_get_attribute($this->env, $this->source, $context["log"], "contextName", [], "any", false, false, false, 149)) : ($this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["log"], "context", [], "any", false, false, false, 149)))), "html", null, true);
                echo "
                </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 152
                echo "                <li class='text-xxs'>";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Not Available"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "
        ";
            // line 155
            if (twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "classLogs", [], "any", false, false, false, 155)) {
                // line 156
                echo "            <li class='text-xxs  font-bold mt-2'>";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Class Attendance"), "html", null, true);
                echo ":</li>
            ";
                // line 157
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "classLogs", [], "any", false, false, false, 157));
                foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                    // line 158
                    echo "                <li class='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "statusClass", [], "any", false, false, false, 158), "html", null, true);
                    echo " leading-relaxed'>
                    ";
                    // line 159
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "timestampTaken", [], "any", false, false, false, 159), (((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "timestampTaken", [], "any", false, false, false, 159), "Y-m-d") == twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "date", [], "any", false, false, false, 159))) ? ("H:i") : ("H:i Y-m-d"))), "html", null, true);
                    echo " -
                    ";
                    // line 160
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 160)), "html", null, true);
                    ((twig_get_attribute($this->env, $this->source, $context["log"], "reason", [], "any", false, false, false, 160)) ? (print (twig_escape_filter($this->env, (", " . $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["log"], "reason", [], "any", false, false, false, 160))), "html", null, true))) : (print ("")));
                    echo " - 
                    ";
                    // line 161
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["log"], "contextName", [], "any", false, false, false, 161)) ? (twig_get_attribute($this->env, $this->source, $context["log"], "contextName", [], "any", false, false, false, 161)) : ($this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["log"], "context", [], "any", false, false, false, 161)))), "html", null, true);
                    echo "
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 164
                echo "        ";
            }
            // line 165
            echo "    </section>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 173
    public function macro_badge($__day__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "day" => $__day__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 174
            echo "    ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "absentCount", [], "any", false, false, false, 174) > 0) || (twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "partialCount", [], "any", false, false, false, 174) > 0)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "endOfDay", [], "any", false, false, false, 174), "status", [], "any", false, false, false, 174) == "present"))) {
                // line 175
                echo "    <div class=\"absolute top-0 right-0 mt-1 mr-1 z-10 rounded-full bg-gray-600 text-white no-underline leading-tight font-sans\" style=\"padding: 1px 3px; font-size: 8px\">
        ";
                // line 176
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "absentCount", [], "any", false, false, false, 176) + twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "partialCount", [], "any", false, false, false, 176)), "html", null, true);
                echo "
    </div>

    ";
            } elseif ((((twig_get_attribute($this->env, $this->source,             // line 179
($context["day"] ?? null), "presentCount", [], "any", false, false, false, 179) > 0) || (twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "partialCount", [], "any", false, false, false, 179) > 0)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "endOfDay", [], "any", false, false, false, 179), "status", [], "any", false, false, false, 179) == "absent"))) {
                // line 180
                echo "    <div class=\"absolute top-0 right-0 mt-1 mr-1 z-10 rounded-full bg-gray-600 text-white no-underline leading-tight font-sans\" style=\"padding: 1px 3px; font-size: 8px\">
        ";
                // line 181
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "presentCount", [], "any", false, false, false, 181) + twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "partialCount", [], "any", false, false, false, 181)), "html", null, true);
                echo "
    </div>

    ";
            } elseif ((((twig_get_attribute($this->env, $this->source,             // line 184
($context["day"] ?? null), "presentCount", [], "any", false, false, false, 184) > 0) || (twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "absentCount", [], "any", false, false, false, 184) > 0)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "endOfDay", [], "any", false, false, false, 184), "status", [], "any", false, false, false, 184) == "partial"))) {
                // line 185
                echo "    <div class=\"absolute top-0 right-0 mt-1 mr-1 z-10 rounded-full bg-gray-600 text-white no-underline leading-tight font-sans\" style=\"padding: 1px 3px; font-size: 8px\">
        ";
                // line 186
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "presentCount", [], "any", false, false, false, 186) + twig_get_attribute($this->env, $this->source, ($context["day"] ?? null), "absentCount", [], "any", false, false, false, 186)), "html", null, true);
                echo "
    </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "components/studentHistory.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  629 => 186,  626 => 185,  624 => 184,  618 => 181,  615 => 180,  613 => 179,  607 => 176,  604 => 175,  601 => 174,  588 => 173,  578 => 165,  575 => 164,  566 => 161,  561 => 160,  557 => 159,  552 => 158,  548 => 157,  543 => 156,  541 => 155,  538 => 154,  529 => 152,  521 => 149,  516 => 148,  512 => 147,  507 => 146,  502 => 145,  498 => 144,  494 => 142,  488 => 140,  486 => 139,  481 => 137,  476 => 135,  471 => 134,  458 => 133,  421 => 199,  417 => 193,  413 => 192,  406 => 124,  399 => 122,  392 => 120,  386 => 119,  382 => 117,  378 => 115,  364 => 113,  361 => 112,  344 => 111,  341 => 110,  339 => 109,  334 => 107,  330 => 106,  325 => 104,  321 => 102,  311 => 101,  309 => 100,  298 => 99,  292 => 96,  283 => 95,  281 => 94,  276 => 92,  267 => 91,  265 => 90,  260 => 88,  256 => 87,  247 => 86,  245 => 85,  240 => 83,  236 => 82,  227 => 81,  225 => 80,  217 => 78,  214 => 77,  210 => 76,  206 => 74,  201 => 73,  197 => 70,  188 => 67,  181 => 66,  177 => 65,  174 => 64,  165 => 61,  158 => 60,  154 => 59,  151 => 58,  146 => 54,  143 => 53,  140 => 52,  138 => 51,  132 => 48,  129 => 47,  125 => 46,  119 => 42,  113 => 39,  110 => 38,  108 => 37,  104 => 35,  96 => 32,  90 => 31,  84 => 30,  80 => 28,  74 => 25,  71 => 24,  68 => 23,  66 => 22,  60 => 19,  54 => 15,  50 => 14,  45 => 11,  43 => 12,  36 => 11,);
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

{% extends \"components/dataTable.twig.html\" %}
{% import _self as attendance  %}

{% block tableInner %}

    <div class=\"flex flex-wrap justify-center md:justify-between rounded bg-gray-100 border\">
        <div class=\"md:flex-1 p-4 text-sm text-gray-700\">
            <h3 class=\"mt-2 border-b-0\">
                {{ __('Summary') }}
            </h3>

            {% if summary.total %}
                {% if summary.total != (summary.present + summary.partial + summary.absent) %}
                    <div class=\"italic mb-4 text-xs\">
                    {{ __('It appears that this student is missing attendance data for some school days:') }}
                    </div>
                {% endif %}

                <div class=\"leading-snug\">
                    <strong>{{ __('Total number of school days to date:') }} {{ summary.total }}</strong><br/>
                    {{ __('Total number of school days attended:') }} {{ summary.present + summary.partial }}<br/>
                    {{ __('Total number of school days absent:') }} {{ summary.absent }}<br/>
                </div>
            {% endif %}
        </div>

        {% if not printView %}
        <div class=\" p-4\">
            {{ chart|raw }}
        </div>
        {% endif %}
    </div>


    <div id=\"studentHistory\">
    {% for term in dataSet %}
        <h4>
        {{ term.name }}
        </h4>

        {% set daysOfWeek = term.daysOfWeek %}
        {% set blockWidth = \"w-1/\" ~ daysOfWeek|length %}
        {% set dayClass = \"flex flex-col justify-center border-t border-b border-r py-2 px-1 -mt-px \" %}

        <div class=\"flex flex-wrap border-t border-l border-gray-500\">

            {#<!-- Days of the Week Header: only shows one week on mobile -->#}
            <div class=\"w-full flex items-stretch text-xs text-center text-gray-700 font-bold bg-gray-200 border-b border-r border-gray-500\">
                {% for dayNameShort, dayName in daysOfWeek %}
                    <div class=\"{{ blockWidth }} py-1\" title=\"{{ __(dayName) }}\">
                        {{ __(dayNameShort) }}
                    </div>
                {% endfor %}

                {% for dayNameShort, dayName in daysOfWeek %}
                    <div class=\"hidden md:block {{ blockWidth }} py-1\" title=\"{{ __(dayName) }}\">
                        {{ __(dayNameShort) }}
                    </div>
                {% endfor %}
            </div>

            {#<!-- Attendance Days: grouped by week -->#}
            {% for weekNumber, week in term.weeks %}
                <div class=\"w-full md:w-1/2 flex items-stretch text-xxs text-center text-gray-600\" style=\"min-height: 55px;\">

                {% for day in week %}
                    {% if day.outsideTerm %}
                        <div class=\"{{ blockWidth }} {{ dayClass }} bg-gray-400 border-gray-600 text-gray-500\">
                        </div>
                    {% elseif day.beforeStartDate %}
                        <div class=\"{{ blockWidth }} {{ dayClass }} bg-gray-400 border-gray-600 text-gray-500\" title=\"{{ __('Before Start Date') }}\">
                            {{ day.dateDisplay }}<br/>
                            {{ __('Before Start Date') }}
                        </div>
                    {% elseif day.afterEndDate %}
                        <div class=\"{{ blockWidth }} {{ dayClass }} bg-gray-400 border-gray-600 text-gray-500\" title=\"{{ __('After End Date') }}\">
                            {{ day.dateDisplay }}<br/>
                            {{ __('After End Date') }}
                        </div>
                    {% elseif day.specialDay %}
                        <div class=\"{{ blockWidth }} {{ dayClass }} bg-gray-400 border-gray-600 text-gray-500\" title=\"{{ __('School Closed') }}\">
                            {{ day.specialDay }}
                        </div>
                    {% elseif day.logs is empty and day.classLogs is empty %}
                        <div class=\"{{ blockWidth }} {{ dayClass }} bg-gray-200 border-gray-600 text-gray-700\" title=\"{{ __('No Data') }}\">
                            {{ day.dateDisplay }}
                        </div>
                    {% else %}
                        <a class=\"{{ blockWidth }} {{ dayClass }} {{ day.endOfDay.statusClass }} relative z-10\" data-log=\"{{ attendance.tooltip(day) }}\"
                            {% if canTakeAttendanceByPerson %}
                                href=\"{{ absoluteURL }}/index.php?q=/modules/Attendance/attendance_take_byPerson.php&gibbonPersonID={{ day.gibbonPersonID }}&currentDate={{ day.date }}\"
                            {% endif %}>

                            {{ attendance.badge(day) }}

                            <span>{{ day.dateDisplay }}</span>
                            <span class=\"mt-1 font-bold\">{{ __(day.endOfDay.type) }}</span>

                            {% if printView %}
                                <span class=\"mt-1\">
                                {% for log in day.logs %}
                                    {{ log.code }}
                                    {{- not loop.last ? \" : \" -}}
                                {% endfor %}
                                </span>
                            {% endif %}
                        </a>
                    {% endif %}
                {% endfor %}
            </div>
            {% endfor %}
        </div>
    {% endfor %}
    </div>


{% endblock tableInner %}

{#<!--
    Tooltip Macro: 
    Display a tooltip of attendance data for a single day. Should not contain \" double quotes.
-->#}
{% macro tooltip(day) %}
    <section class='-mx-2 p-4 border text-center {{ day.endOfDay.statusClass }}'>
        {{ day.dateDisplay }}<br/>
        
        <span class='font-bold text-base leading-normal'>{{ __(day.endOfDay.type) }}</span><br/>

        {% if day.endOfDay.reason %}
            <span class='mt-1 text-xs'>{{ __(day.endOfDay.reason) }}</span><br/>
        {% endif %}

        <ul class='list-none ml-0 mt-4 text-xs text-left'>
            <li class='text-xxs  font-bold'>{{ __('School Attendance') }}:</li>
            {% for log in day.logs %}
                <li class='{{ log.statusClass }} leading-relaxed'>
                    {{ log.timestampTaken|date( log.timestampTaken|date('Y-m-d') == day.date ? 'H:i' : 'H:i Y-m-d') }} -
                    {{ __(log.type) }} {{- log.reason ? ', ' ~ __(log.reason) }} - 
                    {{ log.contextName ? log.contextName : __(log.context) }}
                </li>
            {% else %}
                <li class='text-xxs'>{{ __('Not Available') }}</li>
            {% endfor %}

        {%if day.classLogs %}
            <li class='text-xxs  font-bold mt-2'>{{ __('Class Attendance') }}:</li>
            {% for log in day.classLogs %}
                <li class='{{ log.statusClass }} leading-relaxed'>
                    {{ log.timestampTaken|date( log.timestampTaken|date('Y-m-d') == day.date ? 'H:i' : 'H:i Y-m-d') }} -
                    {{ __(log.type) }} {{- log.reason ? ', ' ~ __(log.reason) }} - 
                    {{ log.contextName ? log.contextName : __(log.context) }}
                </li>
            {% endfor %}
        {% endif %}
    </section>
{% endmacro tooltip %}


{#<!--
    Badge Macro:
    Display a badge number for attendance days with partial absence / presence.
-->#}
{% macro badge(day) %}
    {% if (day.absentCount > 0 or day.partialCount > 0) and day.endOfDay.status == \"present\" %}
    <div class=\"absolute top-0 right-0 mt-1 mr-1 z-10 rounded-full bg-gray-600 text-white no-underline leading-tight font-sans\" style=\"padding: 1px 3px; font-size: 8px\">
        {{ day.absentCount + day.partialCount }}
    </div>

    {% elseif (day.presentCount > 0 or day.partialCount > 0) and day.endOfDay.status == \"absent\" %}
    <div class=\"absolute top-0 right-0 mt-1 mr-1 z-10 rounded-full bg-gray-600 text-white no-underline leading-tight font-sans\" style=\"padding: 1px 3px; font-size: 8px\">
        {{ day.presentCount + day.partialCount }}
    </div>

    {% elseif (day.presentCount > 0 or day.absentCount > 0) and day.endOfDay.status == \"partial\" %}
    <div class=\"absolute top-0 right-0 mt-1 mr-1 z-10 rounded-full bg-gray-600 text-white no-underline leading-tight font-sans\" style=\"padding: 1px 3px; font-size: 8px\">
        {{ day.presentCount + day.absentCount }}
    </div>
    {% endif %}
{% endmacro badge %}


{% block footer %}


{#<!--
    Configure a custom tooltip for Student History. This ensures it doesn't 
    conflict with existing tooltips, and also displays on mobile devices.
-->#}
<style>
    .tooltip-reset {
        background: #ffffff !important;
        min-width: 16rem;
    }
    .w-1\\/7 {
        width: 14.28%;
    }
</style>
<script>
\$('#studentHistory').tooltip({
    items: \"a[data-log]\",
    show: 800,
    hide: false,
    content: function () {
        return \$(this).data('log');
    },
    tooltipClass: \"tooltip-reset\",
    position: {
        my: \"center bottom-5\",
        at: \"center top\",
        using: function (position, feedback) {
            \$(this).css(position);
            \$(\"<div>\").
                addClass(\"arrow\").
                addClass(feedback.vertical).
                addClass(feedback.horizontal).
                appendTo(this);
        }
    }
});
</script>

{% endblock footer %}
", "components/studentHistory.twig.html", "C:\\xampp\\htdocs\\rabelais\\resources\\templates\\components\\studentHistory.twig.html");
    }
}
