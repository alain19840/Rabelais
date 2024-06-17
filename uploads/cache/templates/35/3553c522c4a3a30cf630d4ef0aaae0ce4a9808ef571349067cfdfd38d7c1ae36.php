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

/* formats/medicalConditions.twig.html */
class __TwigTemplate_3d6f1658771c20d22a20be659b9467e79d6c792f6102aa676f06c19ab5f7daf2 extends Template
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
        if ((($context["longTermMedication"] ?? null) == "Y")) {
            // line 15
            echo "
    <div style=\"border-left: 4px solid #939090; padding-left: 14px;\">
        <b><i>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Long Term Medication"), "html", null, true);
            echo ":</i></b> ";
            echo $this->env->getFunction('formatUsing')->getCallable()("yesNo", ($context["longTermMedication"] ?? null));
            echo "<br/>
        <u><i>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Details"), "html", null, true);
            echo ":</i></u> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "longTermMedicationDetails", [], "any", false, false, false, 18), "html", null, true);
            echo "<br/>
    </div>

    ";
            // line 21
            if (($context["medicalConditions"] ?? null)) {
                echo "<br/>";
            }
        }
        // line 23
        echo "

";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["medicalConditions"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
            // line 26
            echo "
<div style=\"border-left: 4px solid ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["condition"], "alertColor", [], "any", false, false, false, 27), "html", null, true);
            echo "; padding-left: 14px;\">

    <b><i>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Condition"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29), "html", null, true);
            echo ":</i></b> ";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["condition"], "name", [], "any", false, false, false, 29)), "html", null, true);
            echo "<br/>

    <u><i>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Risk"), "html", null, true);
            echo ":</i></u> <span style=\"color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["condition"], "alertColor", [], "any", false, false, false, 31), "html", null, true);
            echo ";font-weight: bold;\">";
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["condition"], "risk", [], "any", false, false, false, 31)), "html", null, true);
            echo "</span><br/>

    ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["condition"], "triggers", [], "any", false, false, false, 33)) {
                // line 34
                echo "        <u><i>";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Triggers"), "html", null, true);
                echo ":</i></u> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["condition"], "triggers", [], "any", false, false, false, 34), "html", null, true);
                echo "<br/>
    ";
            }
            // line 36
            echo "
    ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["condition"], "reaction", [], "any", false, false, false, 37)) {
                // line 38
                echo "        <u><i>";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Reaction"), "html", null, true);
                echo ":</i></u> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["condition"], "reaction", [], "any", false, false, false, 38), "html", null, true);
                echo "<br/>
    ";
            }
            // line 40
            echo "
    ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["condition"], "response", [], "any", false, false, false, 41)) {
                // line 42
                echo "        <u><i>";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Response"), "html", null, true);
                echo ":</i></u> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["condition"], "response", [], "any", false, false, false, 42), "html", null, true);
                echo "<br/>
    ";
            }
            // line 44
            echo "
    ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, $context["condition"], "medication", [], "any", false, false, false, 45)) {
                // line 46
                echo "        <u><i>";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Medication"), "html", null, true);
                echo ":</i></u> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["condition"], "medication", [], "any", false, false, false, 46), "html", null, true);
                echo "<br/>
    ";
            }
            // line 48
            echo "
    ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["condition"], "lastEpisode", [], "any", false, false, false, 49) || twig_get_attribute($this->env, $this->source, ($context["consition"] ?? null), "lastEpisodeTreatment", [], "any", false, false, false, 49))) {
                // line 50
                echo "        <u><i>";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Last Episode"), "html", null, true);
                echo ":</i></u> 
        ";
                // line 51
                echo $this->env->getFunction('formatUsing')->getCallable()("date", twig_get_attribute($this->env, $this->source, $context["condition"], "lastEpisode", [], "any", false, false, false, 51));
                echo "
        ";
                // line 52
                echo ((twig_get_attribute($this->env, $this->source, $context["condition"], "lastEpisode", [], "any", false, false, false, 52)) ? (" | ") : (""));
                echo "
        ";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["condition"], "lastEpisodeTreatment", [], "any", false, false, false, 53), "html", null, true);
                echo "<br/>
    ";
            }
            // line 55
            echo "
    ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, $context["condition"], "comment", [], "any", false, false, false, 56)) {
                // line 57
                echo "        <u><i>";
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Comment"), "html", null, true);
                echo ":</i></u> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["condition"], "comment", [], "any", false, false, false, 57), "html", null, true);
                echo "<br/>
    ";
            }
            // line 59
            echo "
</div>

";
            // line 62
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 62)) {
                echo "<br/>";
            }
            // line 63
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "formats/medicalConditions.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 63,  202 => 62,  197 => 59,  189 => 57,  187 => 56,  184 => 55,  179 => 53,  175 => 52,  171 => 51,  166 => 50,  164 => 49,  161 => 48,  153 => 46,  151 => 45,  148 => 44,  140 => 42,  138 => 41,  135 => 40,  127 => 38,  125 => 37,  122 => 36,  114 => 34,  112 => 33,  103 => 31,  94 => 29,  89 => 27,  86 => 26,  69 => 25,  65 => 23,  60 => 21,  52 => 18,  46 => 17,  42 => 15,  40 => 14,  37 => 13,);
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

{% if longTermMedication == 'Y' %}

    <div style=\"border-left: 4px solid #939090; padding-left: 14px;\">
        <b><i>{{ __('Long Term Medication') }}:</i></b> {{ formatUsing('yesNo', longTermMedication) }}<br/>
        <u><i>{{ __('Details') }}:</i></u> {{ condition.longTermMedicationDetails }}<br/>
    </div>

    {% if medicalConditions %}<br/>{% endif %}
{% endif %}


{% for condition in medicalConditions %}

<div style=\"border-left: 4px solid {{ condition.alertColor }}; padding-left: 14px;\">

    <b><i>{{ __('Condition') }} {{ loop.index }}:</i></b> {{ __(condition.name) }}<br/>

    <u><i>{{ __('Risk') }}:</i></u> <span style=\"color: {{ condition.alertColor }};font-weight: bold;\">{{ __(condition.risk) }}</span><br/>

    {% if condition.triggers %}
        <u><i>{{ __('Triggers') }}:</i></u> {{ condition.triggers }}<br/>
    {% endif %}

    {% if condition.reaction %}
        <u><i>{{ __('Reaction') }}:</i></u> {{ condition.reaction }}<br/>
    {% endif %}

    {% if condition.response %}
        <u><i>{{ __('Response') }}:</i></u> {{ condition.response }}<br/>
    {% endif %}

    {% if condition.medication %}
        <u><i>{{ __('Medication') }}:</i></u> {{ condition.medication }}<br/>
    {% endif %}

    {% if condition.lastEpisode or consition.lastEpisodeTreatment %}
        <u><i>{{ __('Last Episode') }}:</i></u> 
        {{ formatUsing('date', condition.lastEpisode) }}
        {{ condition.lastEpisode ? ' | ' : '' }}
        {{ condition.lastEpisodeTreatment }}<br/>
    {% endif %}

    {% if condition.comment %}
        <u><i>{{ __('Comment') }}:</i></u> {{ condition.comment }}<br/>
    {% endif %}

</div>

{% if not loop.last %}<br/>{% endif%}

{% endfor %}
", "formats/medicalConditions.twig.html", "C:\\xampp\\htdocs\\rabelais\\resources\\templates\\formats\\medicalConditions.twig.html");
    }
}
