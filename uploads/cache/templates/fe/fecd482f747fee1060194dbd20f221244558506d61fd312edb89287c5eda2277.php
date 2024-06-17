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

/* librarySearch.twig.html */
class __TwigTemplate_b484b8b60d6c68749d830990a52e5d5897910143ceef44bf62cef2cc1d2145c5 extends Template
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
        echo "
";
        // line 2
        $macros["searchItemViewer"] = $this->macros["searchItemViewer"] = $this;
        // line 3
        if (($context["searchItems"] ?? null)) {
            // line 4
            echo "    <div id=\"librarySearch\" class=\"searchLibraryContainer overflow-y-auto w-full\">
        <h3>Showing results for: 
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["searchTerms"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
                // line 7
                echo "                ";
                if (((($__internal_compile_0 = ($context["searchTerms"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["term"]] ?? null) : null) != "")) {
                    // line 8
                    echo "                ";
                    echo twig_escape_filter($this->env, $context["term"], "html", null, true);
                    echo ": \"";
                    echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["searchTerms"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["term"]] ?? null) : null), "html", null, true);
                    echo "\"
                ";
                }
                // line 10
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            ...
        </h3>
        <div class=\"flex flex-wrap p-3 gap-4 columns-auto w-full overflow-y-auto overscroll-contain max-h-screen border-2 border-transparent bg-gray-100 bg-opacity-50\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["searchItems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "            ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "imageLocation", [], "any", false, false, false, 15))) {
                    // line 16
                    echo "                <a data-log=\"";
                    echo twig_call_macro($macros["searchItemViewer"], "macro_tooltip", [$context["item"]], 16, $context, $this->getSourceContext());
                    echo "\">
                    <img src=\"";
                    // line 17
                    echo twig_escape_filter($this->env, ((twig_in_filter("?", twig_get_attribute($this->env, $this->source, $context["item"], "imageLocation", [], "any", false, false, false, 17))) ? ((twig_get_attribute($this->env, $this->source, $context["item"], "imageLocation", [], "any", false, false, false, 17) . "&fife=w200")) : (twig_get_attribute($this->env, $this->source, $context["item"], "imageLocation", [], "any", false, false, false, 17))), "html", null, true);
                    echo "\" class=\"transition shadow-xl ease-out duration-300 border-2 border-transparent hover hover:border-purple-600 transform hover:-translate-y-1 hover:scale-105 hover:shadow-2xl w-40 h-64\">
                </a>
            ";
                }
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </div>
    </div>

    <script>
    \$('#librarySearch').tooltip({
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
    <style>
        .tooltip-reset {
            min-width: 20rem;
        }
    </style>
";
        } else {
            // line 53
            echo "<h3>No results for: 
    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["searchTerms"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
                // line 55
                echo "        ";
                if (((($__internal_compile_2 = ($context["searchTerms"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["term"]] ?? null) : null) != "")) {
                    // line 56
                    echo "        ";
                    echo twig_escape_filter($this->env, $context["term"], "html", null, true);
                    echo ": \"";
                    echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["searchTerms"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["term"]] ?? null) : null), "html", null, true);
                    echo "\"
        ";
                }
                // line 58
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "    ...
</h3>

";
        }
        // line 63
        echo "
";
    }

    // line 64
    public function macro_tooltip($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 65
            echo "    <section class='flex flex-row p-1 w-auto'>
        <div class='flex-1'>
            <h4 class='mt-2 text-white'>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 67), "html", null, true);
            echo "</h4>
            <p class='text-white'>by: ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "producer", [], "any", false, false, false, 68), "html", null, true);
            echo "</p>
            <p class='text-white'>Location: ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "spaceName", [], "any", false, false, false, 69), "html", null, true);
            echo "</p>
            <p class='text-white'>Location Detail: ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "locationDetail", [], "any", false, false, false, 70), "html", null, true);
            echo "</p>
        
            
            ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "status", [], "any", false, false, false, 73) == "Available")) {
                // line 74
                echo "                <div><p class='text-green-500'>Status: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "status", [], "any", false, false, false, 74), "html", null, true);
                echo "</p></div>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 75
($context["item"] ?? null), "status", [], "any", false, false, false, 75) == "On Loan")) {
                // line 76
                echo "                <div><p class='text-red-500'>Status: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "status", [], "any", false, false, false, 76), "html", null, true);
                echo "</p></div>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 77
($context["item"] ?? null), "status", [], "any", false, false, false, 77) == "Reserved")) {
                // line 78
                echo "                <div><p class='text-yellow-500'>Status: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "status", [], "any", false, false, false, 78), "html", null, true);
                echo "</p></div>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 79
($context["item"] ?? null), "status", [], "any", false, false, false, 79) == "Repair")) {
                // line 80
                echo "                <div><p class='text-Orange-500'>Status: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "status", [], "any", false, false, false, 80), "html", null, true);
                echo "</p></div>
            ";
            }
            // line 82
            echo "        </div>
        <div class='toolTipDescription flex-1 pl-2'>
            <h5 class='mt-2 text-white'>Description:</h5>
            <p class='text-white'>";
            // line 85
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description", [], "any", false, false, false, 85), 0, 200), "html", null, true);
            echo "...</p>
        </div>
    </section>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "librarySearch.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 85,  231 => 82,  225 => 80,  223 => 79,  218 => 78,  216 => 77,  211 => 76,  209 => 75,  204 => 74,  202 => 73,  196 => 70,  192 => 69,  188 => 68,  184 => 67,  180 => 65,  167 => 64,  162 => 63,  156 => 59,  150 => 58,  142 => 56,  139 => 55,  135 => 54,  132 => 53,  98 => 21,  92 => 20,  86 => 17,  81 => 16,  78 => 15,  74 => 14,  69 => 11,  63 => 10,  55 => 8,  52 => 7,  48 => 6,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "librarySearch.twig.html", "C:\\xampp\\htdocs\\rabelais\\modules\\Library\\templates\\librarySearch.twig.html");
    }
}
