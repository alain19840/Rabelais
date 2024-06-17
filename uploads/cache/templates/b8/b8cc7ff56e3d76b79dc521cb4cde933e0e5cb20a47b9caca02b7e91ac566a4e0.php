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

/* statusComment.twig.html */
class __TwigTemplate_ed5d233e4c31853d098a488054f9d0d1f7917a4f14c59f1c2c79e22df25c4969 extends Template
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
<div class=\"flex justify-between my-4 ";
        // line 11
        echo ((((twig_test_empty(($context["comment"] ?? null)) && twig_test_empty(($context["html"] ?? null))) && twig_test_empty(($context["message"] ?? null)))) ? ("sm:items-center") : (""));
        echo "\">
    
    ";
        // line 13
        if ((($context["photo"] ?? null) || ($context["icon"] ?? null))) {
            // line 14
            echo "    <div class=\"w-12 sm:w-16 mr-4 flex flex-col items-center\">
        <div class=\"";
            // line 15
            echo ((($context["photo"] ?? null)) ? ("flex-none") : ("flex items-center justify-center"));
            echo " overflow-hidden w-12 sm:w-16 h-12 sm:h-16 rounded-full bg-gray-200 border border-solid\">
            ";
            // line 16
            if (($context["photo"] ?? null)) {
                // line 17
                echo "                <img class=\"w-full\" src=\"";
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($context["photo"] ?? null), "html", null, true);
                echo "\" />
            ";
            } elseif (            // line 18
($context["icon"] ?? null)) {
                // line 19
                echo "                <img class=\"w-6 h-6\" src=\"";
                echo twig_escape_filter($this->env, ($context["absoluteURL"] ?? null), "html", null, true);
                echo "/themes/";
                echo twig_escape_filter($this->env, ($context["gibbonThemeName"] ?? null), "html", null, true);
                echo "/img/";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo ".png\" />
            ";
            }
            // line 21
            echo "        </div>
    </div>
    ";
        }
        // line 24
        echo "
    <div class=\"flex-1\">
        
        <div class=\"relative bg-gray-100 rounded text-gray-800 text-sm leading-snug border \">
            ";
        // line 28
        if ((($context["photo"] ?? null) || ($context["icon"] ?? null))) {
            // line 29
            echo "                <div class=\"absolute top-0 left-0 border-transparent\" style=\"margin: 15px 0 0 -18px; border-width: 9px; border-right-color: #d2d0d0;\"></div>
                <div class=\"absolute top-0 left-0 border-8 border-transparent\" style=\"margin: 16px 0 0 -16px; border-width: 8px; border-right-color: #fafafa;\"></div>
            ";
        }
        // line 32
        echo "
            <div class=\"px-4 py-3 text-gray-700 text-sm font-sans leading-relaxed\">
                <span class=\"inline-block font-semibold\">";
        // line 34
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["action"] ?? null)), "html", null, true);
        echo " <span class=\"whitespace-no-wrap\">";
        echo twig_lower_filter($this->env, ($context["date"] ?? null));
        echo "</span>

                ";
        // line 36
        if (($context["status"] ?? null)) {
            // line 37
            echo "                    <span class=\"mx-2 tag ";
            echo twig_escape_filter($this->env, ($context["tag"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
            echo "</span>
                ";
        }
        // line 39
        echo "
                ";
        // line 40
        if (($context["attachment"] ?? null)) {
            // line 41
            echo "                    <span class=\"tag px-0 break-all\">";
            echo ($context["attachment"] ?? null);
            echo "</span>
                ";
        }
        // line 43
        echo "            </div>

            ";
        // line 45
        if ((($context["comment"] ?? null) || ($context["html"] ?? null))) {
            // line 46
            echo "            <div class=\"p-4 bg-white border-t rounded-b\">
                ";
            // line 47
            echo ((($context["html"] ?? null)) ? (($context["html"] ?? null)) : (twig_nl2br(twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true))));
            echo "
                ";
            // line 48
            if (($context["html"] ?? null)) {
                echo "<div class=\"-mb-4\"></div>";
            }
            // line 49
            echo "            </div>
            ";
        }
        // line 51
        echo "
            ";
        // line 52
        if (($context["message"] ?? null)) {
            // line 53
            echo "            <div class=\"px-4 py-2 bg-white border-t rounded-b text-xs italic text-gray-600\">
                ";
            // line 54
            echo twig_nl2br(twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 57
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "statusComment.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 57,  156 => 54,  153 => 53,  151 => 52,  148 => 51,  144 => 49,  140 => 48,  136 => 47,  133 => 46,  131 => 45,  127 => 43,  121 => 41,  119 => 40,  116 => 39,  108 => 37,  106 => 36,  97 => 34,  93 => 32,  88 => 29,  86 => 28,  80 => 24,  75 => 21,  65 => 19,  63 => 18,  56 => 17,  54 => 16,  50 => 15,  47 => 14,  45 => 13,  40 => 11,  37 => 10,);
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

<div class=\"flex justify-between my-4 {{ comment is empty and html is empty and message is empty ? 'sm:items-center'}}\">
    
    {% if photo or icon %}
    <div class=\"w-12 sm:w-16 mr-4 flex flex-col items-center\">
        <div class=\"{{ photo ? 'flex-none' : 'flex items-center justify-center' }} overflow-hidden w-12 sm:w-16 h-12 sm:h-16 rounded-full bg-gray-200 border border-solid\">
            {% if photo %}
                <img class=\"w-full\" src=\"{{ absoluteURL }}/{{ photo }}\" />
            {% elseif icon %}
                <img class=\"w-6 h-6\" src=\"{{ absoluteURL }}/themes/{{ gibbonThemeName }}/img/{{ icon }}.png\" />
            {% endif %}
        </div>
    </div>
    {% endif %}

    <div class=\"flex-1\">
        
        <div class=\"relative bg-gray-100 rounded text-gray-800 text-sm leading-snug border \">
            {% if photo or icon %}
                <div class=\"absolute top-0 left-0 border-transparent\" style=\"margin: 15px 0 0 -18px; border-width: 9px; border-right-color: #d2d0d0;\"></div>
                <div class=\"absolute top-0 left-0 border-8 border-transparent\" style=\"margin: 16px 0 0 -16px; border-width: 8px; border-right-color: #fafafa;\"></div>
            {% endif %}

            <div class=\"px-4 py-3 text-gray-700 text-sm font-sans leading-relaxed\">
                <span class=\"inline-block font-semibold\">{{ name }}</span> {{ action|lower }} <span class=\"whitespace-no-wrap\">{{ date|lower|raw }}</span>

                {% if status %}
                    <span class=\"mx-2 tag {{ tag }}\">{{ status }}</span>
                {% endif %}

                {% if attachment %}
                    <span class=\"tag px-0 break-all\">{{ attachment|raw }}</span>
                {% endif %}
            </div>

            {% if comment or html %}
            <div class=\"p-4 bg-white border-t rounded-b\">
                {{ html ? html|raw : comment|nl2br }}
                {% if html %}<div class=\"-mb-4\"></div>{% endif %}
            </div>
            {% endif %}

            {% if message %}
            <div class=\"px-4 py-2 bg-white border-t rounded-b text-xs italic text-gray-600\">
                {{ message|nl2br }}
            </div>
            {% endif %}
        </div>
    </div>
</div>
", "statusComment.twig.html", "C:\\xampp\\htdocs\\rabelais\\modules\\Staff\\templates\\statusComment.twig.html");
    }
}
