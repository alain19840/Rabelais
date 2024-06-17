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

/* ui/archiveStudentHeader.twig.html */
class __TwigTemplate_dab619a0568269aa955ab13936c57312facb61a389f8cb976e0d737007ac22a6 extends Template
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
        <div class=\"flex h-32 justify-center sm:justify-start items-center text-xs text-center mt-4 sm:mt-0\">
            ";
        // line 14
        echo $this->env->getFunction('formatUsing')->getCallable()("userPhoto", twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "image_240", [], "any", false, false, false, 14), 75);
        echo "
        </div>

        <div class=\"flex-1 text-center sm:text-left sm:pl-6\">
            <div class=\"text-lg text-gray-800 leading-none mb-2 p-0\">";
        // line 18
        echo $this->env->getFunction('formatUsing')->getCallable()("name", twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "title", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "preferredName", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "surname", [], "any", false, false, false, 18), "Student", false, true);
        echo "</div>

            <div class=\"text-sm text-gray-600 mb-0\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "formGroup", [], "any", false, false, false, 20), "html", null, true);
        echo "</div>

            ";
        // line 22
        if (($context["status"] ?? null)) {
            // line 23
            echo "                <span class=\"tag ";
            echo twig_escape_filter($this->env, ((array_key_exists("tag", $context)) ? (_twig_default_filter(($context["tag"] ?? null), "success")) : ("success")), "html", null, true);
            echo " mt-2 mb-0\">";
            echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
            echo "</span>
            ";
        }
        // line 25
        echo "        </div>
    </div>
</div>

";
        // line 29
        if (($context["archiveInformation"] ?? null)) {
            // line 30
            echo "<p class=\"text-left mb-8\">";
            echo twig_nl2br(twig_escape_filter($this->env, ($context["archiveInformation"] ?? null), "html", null, true));
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "ui/archiveStudentHeader.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  76 => 29,  70 => 25,  62 => 23,  60 => 22,  55 => 20,  50 => 18,  43 => 14,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "ui/archiveStudentHeader.twig.html", "C:\\xampp\\htdocs\\rabelais\\modules\\Reports\\templates\\ui\\archiveStudentHeader.twig.html");
    }
}
