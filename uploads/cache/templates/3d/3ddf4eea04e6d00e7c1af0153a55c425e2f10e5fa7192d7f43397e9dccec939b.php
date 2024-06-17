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

/* formats/familyAddresses.twig.html */
class __TwigTemplate_284c9bc18af4fdd715388f8c7c06856d95d5c5dc3e9038f53641d508e9ea55cc extends Template
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
            // line 15
            echo "
    ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 16) > 1)) {
                // line 17
                echo "        <u>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["family"], "name", [], "any", false, false, false, 17), "html", null, true);
                echo "</u><br/>
    ";
            }
            // line 19
            echo "
    ";
            // line 20
            if (($context["includeAddressName"] ?? null)) {
                // line 21
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["family"], "nameAddress", [], "any", false, false, false, 21), "html", null, true);
                echo "<br/>
    ";
            }
            // line 23
            echo "
    ";
            // line 24
            echo $this->env->getFunction('formatUsing')->getCallable()("address", twig_get_attribute($this->env, $this->source, $context["family"], "homeAddress", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, $context["family"], "homeAddressDistrict", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, $context["family"], "homeAddressCountry", [], "any", false, false, false, 24));
            echo "

    ";
            // line 26
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 26)) {
                echo "<br/><br/>";
            }
            // line 27
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
            // line 29
            echo "
    ";
            // line 30
            echo $this->env->getFunction('formatUsing')->getCallable()("address", twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "address1", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "address1District", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "address1Country", [], "any", false, false, false, 30));
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['family'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "formats/familyAddresses.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  106 => 29,  92 => 27,  88 => 26,  83 => 24,  80 => 23,  74 => 21,  72 => 20,  69 => 19,  63 => 17,  61 => 16,  58 => 15,  40 => 14,  37 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "formats/familyAddresses.twig.html", "C:\\xampp\\htdocs\\rabelais\\resources\\templates\\formats\\familyAddresses.twig.html");
    }
}
