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

/* roleActions.twig.html */
class __TwigTemplate_465c3b4b4406050e1b312c8ba00f80b9deb63432fe23b2c3e524b47f360e4b51 extends Template
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
<h2>
    ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Actions"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["role"] ?? null), "name", [], "any", false, false, false, 12)), "html", null, true);
        echo "
</h2>

";
        // line 15
        if ((($context["actionCount"] ?? null) < 1)) {
            // line 16
            echo "<div class=\"warning\">
    ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("There are no records to display."), "html", null, true);
            echo "
</div>
";
        } else {
            // line 20
            echo "<div class=\"column-2 mb-8\">
";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["moduleName"] => $context["moduleActions"]) {
                // line 22
                echo "    <div class=\"column-no-break\">
        <h5 class=\"border-0 mb-1\">
            ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()($context["moduleName"]), "html", null, true);
                echo "
        </h5>

        <ul>
        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["moduleActions"]);
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 29
                    echo "            <li>
                <span title=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["action"], "description", [], "any", false, false, false, 30)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 30)), "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "        </ul>
    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['moduleName'], $context['moduleActions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "roleActions.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 36,  96 => 33,  85 => 30,  82 => 29,  78 => 28,  71 => 24,  67 => 22,  63 => 21,  60 => 20,  54 => 17,  51 => 16,  49 => 15,  41 => 12,  37 => 10,);
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

<h2>
    {{ __('Actions') }}: {{ __(role.name) }}
</h2>

{% if actionCount < 1 %}
<div class=\"warning\">
    {{ __('There are no records to display.') }}
</div>
{% else %}
<div class=\"column-2 mb-8\">
{% for moduleName, moduleActions in actions %}
    <div class=\"column-no-break\">
        <h5 class=\"border-0 mb-1\">
            {{ __(moduleName) }}
        </h5>

        <ul>
        {% for action in moduleActions %}
            <li>
                <span title=\"{{ __(action.description) }}\">{{ __(action.name) }}</span>
            </li>
        {% endfor %}
        </ul>
    </div>
{% endfor %}
</div>
{% endif %}
", "roleActions.twig.html", "C:\\xampp\\htdocs\\rabelais\\modules\\User Admin\\templates\\roleActions.twig.html");
    }
}
