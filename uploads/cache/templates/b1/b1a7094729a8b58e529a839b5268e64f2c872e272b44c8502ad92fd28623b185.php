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

/* formats/medicalForm.twig.html */
class __TwigTemplate_305f14727a2bdd473e236ece131889af3d396084fb0516db1de7ab5a4ab16f7b extends Template
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
        // line 13
        echo "
";
        // line 14
        if (($context["gibbonPersonMedicalID"] ?? null)) {
            // line 15
            echo "
    <i>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Medication"), "html", null, true);
            echo ":</i> ";
            echo $this->env->getFunction('formatUsing')->getCallable()("yesNo", ($context["longTermMedication"] ?? null));
            echo "<br/>

    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customFields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 19
                echo "        ";
                if ((($__internal_compile_0 = ($context["fields"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["field"], "gibbonCustomFieldID", [], "any", false, false, false, 19)] ?? null) : null)) {
                    // line 20
                    echo "        <i>";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 20)), "html", null, true);
                    echo ":</i> ";
                    echo (($__internal_compile_1 = ($context["fields"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["field"], "gibbonCustomFieldID", [], "any", false, false, false, 20)] ?? null) : null);
                    echo "<br/>
        ";
                }
                // line 22
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "

";
        } else {
            // line 26
            echo "
    <span style=\"color: #ff0000; font-weight: bold\">";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("No"), "html", null, true);
            echo "</span>

";
        }
    }

    public function getTemplateName()
    {
        return "formats/medicalForm.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  78 => 26,  73 => 23,  67 => 22,  59 => 20,  56 => 19,  52 => 18,  45 => 16,  42 => 15,  40 => 14,  37 => 13,);
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

Page Foot: Outputs the contents of the HTML <head> tag. This includes 
all stylesheets and scripts with a 'head' context.
-->#}

{% if gibbonPersonMedicalID %}

    <i>{{ __('Medication') }}:</i> {{ formatUsing('yesNo', longTermMedication) }}<br/>

    {% for field in customFields %}
        {% if fields[field.gibbonCustomFieldID] %}
        <i>{{ __(field.name) }}:</i> {{ fields[field.gibbonCustomFieldID] | raw }}<br/>
        {% endif %}
    {% endfor %}


{% else %}

    <span style=\"color: #ff0000; font-weight: bold\">{{ __('No') }}</span>

{% endif %}
", "formats/medicalForm.twig.html", "C:\\xampp\\htdocs\\rabelais\\resources\\templates\\formats\\medicalForm.twig.html");
    }
}
