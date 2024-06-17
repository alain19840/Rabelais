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

/* profile/family.twig.html */
class __TwigTemplate_53566b3a315302c8cbc8c1aae5622d6cb3c7302f81c9d3adda216b25cd0eeb33 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["families"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["family"]) {
            // line 12
            echo "    ";
            echo (( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 12)) ? ("<hr class=\"my-8\">") : (""));
            echo "
    <table class='smallIntBorder' cellspacing='0' style='width: 100%'>
        <tr>
            <td style='width: 33%; vertical-align: top'>
                <span style='font-size: 115%; font-weight: bold'>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Family Name"), "html", null, true);
            echo "</span><br />
                ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["family"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "
            </td>
            <td style='width: 33%; vertical-align: top'>
                <span style='font-size: 115%; font-weight: bold'>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Family Status"), "html", null, true);
            echo "</span><br />
                ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["family"], "status", [], "any", false, false, false, 21)), "html", null, true);
            echo "
            </td>
            <td style='width: 34%; vertical-align: top' colspan=2>
                <span style='font-size: 115%; font-weight: bold'>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Home Languages"), "html", null, true);
            echo "</span><br />
                ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["family"], "languageHomePrimary", [], "any", false, false, false, 25)), "html", null, true);
            echo " <br />
                ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["family"], "languageHomeSecondary", [], "any", false, false, false, 26)), "html", null, true);
            echo "<br />
            </td>
        </tr>
        <tr>
            <td style='width: 33%; padding-top: 15px; vertical-align: top'>
                <span style='font-size: 115%; font-weight: bold'>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Address Name"), "html", null, true);
            echo "</span><br />
                ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["family"], "nameAddress", [], "any", false, false, false, 32), "html", null, true);
            echo "
            </td>
            <td style='width: 33%; padding-top: 15px; vertical-align: top'>
            </td>
            <td style='width: 33%; padding-top: 15px; vertical-align: top'>
            </td>
        </tr>

        <tr>
            <td style='width: 33%; padding-top: 15px; vertical-align: top'>
                <span style='font-size: 115%; font-weight: bold'>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Home Address"), "html", null, true);
            echo "</span><br />
                ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["family"], "homeAddress", [], "any", false, false, false, 43), "html", null, true);
            echo "
            </td>
            <td style='width: 33%; padding-top: 15px; vertical-align: top'>
                <span style='font-size: 115%; font-weight: bold'>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Home Address (District)"), "html", null, true);
            echo "</span><br />
                ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["family"], "homeAddressDistrict", [], "any", false, false, false, 47), "html", null, true);
            echo "
            </td>
            <td style='width: 33%; padding-top: 15px; vertical-align: top'>
                <span style='font-size: 115%; font-weight: bold'>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Home Address (Country)"), "html", null, true);
            echo "</span><br />
                ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["family"], "homeAddressCountry", [], "any", false, false, false, 51)), "html", null, true);
            echo "
            </td>
        </tr>
    </table>

    ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["family"], "adults", [], "any", false, false, false, 56));
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
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 57
                echo "
    <h4>
        ";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Adult"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 59), "html", null, true);
                echo "
    </h4>

    ";
                // line 62
                $context["class"] = (((twig_get_attribute($this->env, $this->source, $context["person"], "status", [], "any", false, false, false, 62) != "Full")) ? ("error") : (""));
                // line 63
                echo "
    <table class='smallIntBorder' cellspacing='0' style='width: 100%'>
        <tr>
            <td class=\"";
                // line 66
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" style='width: 33%; vertical-align: top' rowspan=2>
                ";
                // line 67
                echo $this->env->getFunction('formatUsing')->getCallable()("userPhoto", twig_get_attribute($this->env, $this->source, $context["person"], "image_240", [], "any", false, false, false, 67), 75);
                echo "
            </td>
            <td class=\"";
                // line 69
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" style='width: 33%; vertical-align: top'>
                <span style='font-size: 115%; font-weight: bold'>
                    ";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Name"), "html", null, true);
                echo "
                </span><br />
                ";
                // line 73
                echo $this->env->getFunction('formatUsing')->getCallable()("name", twig_get_attribute($this->env, $this->source, $context["person"], "title", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, $context["person"], "preferredName", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, $context["person"], "surname", [], "any", false, false, false, 73), "Parent");
                echo "

                ";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, $context["person"], "status", [], "any", false, false, false, 75) != "Full")) {
                    // line 76
                    echo "                <span style='font-weight: normal; font-style: italic'> (";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["person"], "status", [], "any", false, false, false, 76)), "html", null, true);
                    echo ")</span>
                ";
                }
                // line 78
                echo "
                <div style='font-size: 85%; font-style: italic'>
                ";
                // line 80
                if (twig_get_attribute($this->env, $this->source, $context["person"], "relationship", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["person"], "relationship", [], "any", false, false, false, 81)), "html", null, true);
                    echo "
                ";
                } elseif (                // line 82
($context["gibbonPersonIDStudent"] ?? null)) {
                    // line 83
                    echo "                    <i>";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Relationship Unknown"), "html", null, true);
                    echo "</i>
                ";
                }
                // line 85
                echo "                </div>
            </td>
            <td class=\"";
                // line 87
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" style='width: 34%; vertical-align: top' colspan=2>
                <span style='font-size: 115%; font-weight: bold'>";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Contact Priority"), "html", null, true);
                echo "</span><br />
                ";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "contactPriority", [], "any", false, false, false, 89), "html", null, true);
                echo "
            </td>
        </tr>
        <tr>
            <td class=\"";
                // line 93
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" style='width: 33%; padding-top: 15px; vertical-align: top'>
                <span style='font-size: 115%; font-weight: bold'>";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("First Language"), "html", null, true);
                echo "</span><br />
                ";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["person"], "languageFirst", [], "any", false, false, false, 95)), "html", null, true);
                echo "
            </td>
            <td class=\"";
                // line 97
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" style='width: 33%; padding-top: 15px; vertical-align: top'>
                <span style='font-size: 115%; font-weight: bold'>";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Second Language"), "html", null, true);
                echo "</span><br />
                ";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["person"], "languageSecond", [], "any", false, false, false, 99)), "html", null, true);
                echo "
            </td>
        </tr>
        <tr>
            <td class=\"";
                // line 103
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" style='width: 33%; padding-top: 15px; width: 33%; vertical-align: top'>
                <span style='font-size: 115%; font-weight: bold'>";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Contact By Phone"), "html", null, true);
                echo "</span><br />

                ";
                // line 106
                if ((twig_get_attribute($this->env, $this->source, $context["person"], "contactCall", [], "any", false, false, false, 106) == "N")) {
                    // line 107
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Do not contact by phone"), "html", null, true);
                    echo "

                ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 109
$context["person"], "contactCall", [], "any", false, false, false, 109) == "Y") && (((twig_get_attribute($this->env, $this->source, $context["person"], "phone1", [], "any", false, false, false, 109) || twig_get_attribute($this->env, $this->source, $context["person"], "phone2", [], "any", false, false, false, 109)) || twig_get_attribute($this->env, $this->source, $context["person"], "phone3", [], "any", false, false, false, 109)) || twig_get_attribute($this->env, $this->source, $context["person"], "phone4", [], "any", false, false, false, 109)))) {
                    // line 110
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 111
                        echo "                        ";
                        if ((($__internal_compile_0 = $context["person"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[("phone" . $context["i"])] ?? null) : null)) {
                            // line 112
                            echo "                        ";
                            echo $this->env->getFunction('formatUsing')->getCallable()("phone", (($__internal_compile_1 = $context["person"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[("phone" . $context["i"])] ?? null) : null), (($__internal_compile_2 = $context["person"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[(("phone" . $context["i"]) . "CountryCode")] ?? null) : null), (($__internal_compile_3 = $context["person"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[(("phone" . $context["i"]) . "Type")] ?? null) : null));
                            echo "
                        ";
                        }
                        // line 114
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 115
                    echo "                ";
                }
                // line 116
                echo "            </td>
            <td class=\"";
                // line 117
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" style='width: 33%; padding-top: 15px; width: 33%; vertical-align: top'>
                <span style='font-size: 115%; font-weight: bold'>";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Contact By SMS"), "html", null, true);
                echo "</span><br />
                ";
                // line 119
                if ((twig_get_attribute($this->env, $this->source, $context["person"], "contactSMS", [], "any", false, false, false, 119) == "N")) {
                    // line 120
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Do not contact by SMS"), "html", null, true);
                    echo "
                ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 121
$context["person"], "contactSMS", [], "any", false, false, false, 121) == "Y") && (((twig_get_attribute($this->env, $this->source, $context["person"], "phone1", [], "any", false, false, false, 121) || twig_get_attribute($this->env, $this->source, $context["person"], "phone2", [], "any", false, false, false, 121)) || twig_get_attribute($this->env, $this->source, $context["person"], "phone3", [], "any", false, false, false, 121)) || twig_get_attribute($this->env, $this->source, $context["person"], "phone4", [], "any", false, false, false, 121)))) {
                    // line 122
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 123
                        echo "                        ";
                        if (((($__internal_compile_4 = $context["person"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[("phone" . $context["i"])] ?? null) : null) && ((($__internal_compile_5 = $context["person"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[(("phone" . $context["i"]) . "Type")] ?? null) : null) == "Mobile"))) {
                            // line 124
                            echo "                        ";
                            echo $this->env->getFunction('formatUsing')->getCallable()("phone", (($__internal_compile_6 = $context["person"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[("phone" . $context["i"])] ?? null) : null), (($__internal_compile_7 = $context["person"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[(("phone" . $context["i"]) . "CountryCode")] ?? null) : null), (($__internal_compile_8 = $context["person"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[(("phone" . $context["i"]) . "Type")] ?? null) : null));
                            echo "
                        ";
                        }
                        // line 126
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo "                ";
                }
                // line 128
                echo "            </td>
            <td class=\"";
                // line 129
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" style='width: 33%; padding-top: 15px; width: 34%; vertical-align: top' colspan=2>
                <span style='font-size: 115%; font-weight: bold'>";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Contact By Email"), "html", null, true);
                echo "</span><br />
                ";
                // line 131
                if ((twig_get_attribute($this->env, $this->source, $context["person"], "contactEmail", [], "any", false, false, false, 131) == "N")) {
                    // line 132
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Do not contact by email"), "html", null, true);
                    echo "
                ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 133
$context["person"], "contactEmail", [], "any", false, false, false, 133) == "Y") && (twig_get_attribute($this->env, $this->source, $context["person"], "email", [], "any", false, false, false, 133) || twig_get_attribute($this->env, $this->source, $context["person"], "emailAlternate", [], "any", false, false, false, 133)))) {
                    // line 134
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["person"], "email", [], "any", false, false, false, 134)) {
                        // line 135
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Email"), "html", null, true);
                        echo ": <a href=\"mailto:";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "email", [], "any", false, false, false, 135), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "email", [], "any", false, false, false, 135), "html", null, true);
                        echo "</a><br />
                    ";
                    }
                    // line 137
                    echo "
                    ";
                    // line 138
                    if (twig_get_attribute($this->env, $this->source, $context["person"], "emailAlternate", [], "any", false, false, false, 138)) {
                        // line 139
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Email"), "html", null, true);
                        echo " 2: <a href=\"mailto:";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "emailAlternate", [], "any", false, false, false, 139), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "emailAlternate", [], "any", false, false, false, 139), "html", null, true);
                        echo "</a><br />
                    ";
                    }
                    // line 141
                    echo "                    <br />
                ";
                }
                // line 143
                echo "            </td>
        </tr>
        <tr>
            <td class=\"";
                // line 146
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" style='width: 33%; padding-top: 15px; vertical-align: top'>
                <span style='font-size: 115%; font-weight: bold'>";
                // line 147
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Profession"), "html", null, true);
                echo "</span><br />
                ";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "profession", [], "any", false, false, false, 148), "html", null, true);
                echo "
            </td>
            <td class=\"";
                // line 150
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" style='width: 33%; padding-top: 15px; vertical-align: top'>
                <span style='font-size: 115%; font-weight: bold'>";
                // line 151
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Employer"), "html", null, true);
                echo "</span><br />
                ";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "employer", [], "any", false, false, false, 152), "html", null, true);
                echo "
            </td>
            <td class=\"";
                // line 154
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" style='width: 33%; padding-top: 15px; vertical-align: top'>
                <span style='font-size: 115%; font-weight: bold'>";
                // line 155
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Job Title"), "html", null, true);
                echo "</span><br />
                ";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "jobTitle", [], "any", false, false, false, 156), "html", null, true);
                echo "
            </td>
        </tr>

        <tr>
            <td class=\"";
                // line 161
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" style='width: 33%; padding-top: 15px; vertical-align: top'>
                <span style='font-size: 115%; font-weight: bold'>";
                // line 162
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Vehicle Registration"), "html", null, true);
                echo "</span><br />
                ";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "vehicleRegistration", [], "any", false, false, false, 163), "html", null, true);
                echo "
            </td>
            <td class=\"";
                // line 165
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" style='width: 33%; padding-top: 15px; vertical-align: top'>

            </td>
            <td class=\"";
                // line 168
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" style='width: 33%; padding-top: 15px; vertical-align: top'>

            </td>
        </tr>

        ";
                // line 173
                if (twig_get_attribute($this->env, $this->source, $context["person"], "comment", [], "any", false, false, false, 173)) {
                    // line 174
                    echo "        <tr>
            <td class=\"";
                    // line 175
                    echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                    echo "\" style=\"width: 33%; vertical-align: top\" colspan=3>
                <span style=\"font-size: 115%; font-weight: bold\">";
                    // line 176
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Comment"), "html", null, true);
                    echo "</span><br />
                ";
                    // line 177
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "comment", [], "any", false, false, false, 177), "html", null, true);
                    echo "
            </td>
        </tr>
        ";
                }
                // line 181
                echo "    </table>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "

    ";
            // line 185
            if (twig_get_attribute($this->env, $this->source, $context["family"], "children", [], "any", false, false, false, 185)) {
                // line 186
                echo "    <h4>
        ";
                // line 187
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Children"), "html", null, true);
                echo "
    </h4>

    <div class=\"flex flex-wrap border bg-gray-100 rounded-sm p-2\">
        ";
                // line 191
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["family"], "children", [], "any", false, false, false, 191));
                foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                    // line 192
                    echo "
        <div class=\"text-center mr-8\">
            ";
                    // line 194
                    echo $this->env->getFunction('formatUsing')->getCallable()("userPhoto", twig_get_attribute($this->env, $this->source, $context["person"], "image_240", [], "any", false, false, false, 194), 75);
                    echo "

            <div class=\"pt-1 text-xs\">
                <b>
                    ";
                    // line 198
                    if ((twig_get_attribute($this->env, $this->source, $context["person"], "status", [], "any", false, false, false, 198) == "Full")) {
                        // line 199
                        echo "                    <a
                        href=\"index.php?q=/modules/Students/student_view_details.php&gibbonPersonID=";
                        // line 200
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "gibbonPersonID", [], "any", false, false, false, 200), "html", null, true);
                        echo "&allStudents=on\">
                        ";
                        // line 201
                        echo $this->env->getFunction('formatUsing')->getCallable()("name", "", twig_get_attribute($this->env, $this->source, $context["person"], "preferredName", [], "any", false, false, false, 201), twig_get_attribute($this->env, $this->source, $context["person"], "surname", [], "any", false, false, false, 201), "Student");
                        echo "
                    </a><br />
                    ";
                    } else {
                        // line 204
                        echo "                    ";
                        echo $this->env->getFunction('formatUsing')->getCallable()("name", "", twig_get_attribute($this->env, $this->source, $context["person"], "preferredName", [], "any", false, false, false, 204), twig_get_attribute($this->env, $this->source, $context["person"], "surname", [], "any", false, false, false, 204), "Student");
                        echo "<br />
                    ";
                    }
                    // line 206
                    echo "                </b>
                <span class=\"small emphasis text-gray-700\">";
                    // line 207
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Status"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["person"], "status", [], "any", false, false, false, 207)), "html", null, true);
                    echo "</span>
            </div>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                echo "    </div>
    ";
            }
            // line 213
            echo "
";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 215
            echo "    <div class=\"h-48 rounded-sm border bg-gray-100 shadow-inner overflow-hidden\">
        ";
            // line 216
            echo twig_include($this->env, $context, "components/blankSlate.twig.html");
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['family'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "profile/family.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 216,  616 => 215,  602 => 213,  598 => 211,  586 => 207,  583 => 206,  577 => 204,  571 => 201,  567 => 200,  564 => 199,  562 => 198,  555 => 194,  551 => 192,  547 => 191,  540 => 187,  537 => 186,  535 => 185,  531 => 183,  516 => 181,  509 => 177,  505 => 176,  501 => 175,  498 => 174,  496 => 173,  488 => 168,  482 => 165,  477 => 163,  473 => 162,  469 => 161,  461 => 156,  457 => 155,  453 => 154,  448 => 152,  444 => 151,  440 => 150,  435 => 148,  431 => 147,  427 => 146,  422 => 143,  418 => 141,  408 => 139,  406 => 138,  403 => 137,  393 => 135,  390 => 134,  388 => 133,  383 => 132,  381 => 131,  377 => 130,  373 => 129,  370 => 128,  367 => 127,  361 => 126,  355 => 124,  352 => 123,  347 => 122,  345 => 121,  340 => 120,  338 => 119,  334 => 118,  330 => 117,  327 => 116,  324 => 115,  318 => 114,  312 => 112,  309 => 111,  304 => 110,  302 => 109,  296 => 107,  294 => 106,  289 => 104,  285 => 103,  278 => 99,  274 => 98,  270 => 97,  265 => 95,  261 => 94,  257 => 93,  250 => 89,  246 => 88,  242 => 87,  238 => 85,  232 => 83,  230 => 82,  225 => 81,  223 => 80,  219 => 78,  213 => 76,  211 => 75,  206 => 73,  201 => 71,  196 => 69,  191 => 67,  187 => 66,  182 => 63,  180 => 62,  172 => 59,  168 => 57,  151 => 56,  143 => 51,  139 => 50,  133 => 47,  129 => 46,  123 => 43,  119 => 42,  106 => 32,  102 => 31,  94 => 26,  90 => 25,  86 => 24,  80 => 21,  76 => 20,  70 => 17,  66 => 16,  58 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/family.twig.html", "C:\\xampp\\htdocs\\rabelais\\resources\\templates\\profile\\family.twig.html");
    }
}
