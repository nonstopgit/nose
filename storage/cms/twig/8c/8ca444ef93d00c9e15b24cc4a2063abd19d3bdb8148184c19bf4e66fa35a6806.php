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

/* /home/vagrant/code/nose/plugins/sqwk/gallery/components/gallery/default.htm */
class __TwigTemplate_d9fc3d244ab1b8e5b2b1c0648a5552a41d4573b556c150178041bd6844d1e063 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("for" => 2, "if" => 4);
        $filters = array("escape" => 7, "resize" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'resize'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<ul class=\"gallery\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "gallery", [], "any", false, false, true, 2), "images", [], "any", false, false, true, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 3
            echo "\t\t<li>
\t\t\t";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 4)) {
                // line 5
                echo "\t\t\t\t<figure>
\t\t\t\t\t";
                // line 6
                if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "imageResizerInstalled", [], "any", false, false, true, 6)) {
                    // line 7
                    echo "\t\t\t\t\t\t<img title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                    echo "\" src=\"";
                    echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 7), 7, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "maxDimension"], "method", false, false, true, 7), 7, $this->source)]);
                    echo "\" alt=\"\">
\t\t\t\t\t";
                } else {
                    // line 9
                    echo "\t\t\t\t\t\t<img title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t";
                }
                // line 11
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 11)) {
                    // line 12
                    echo "\t\t\t\t\t\t<figcaption>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                    echo "</figcaption>
\t\t\t\t\t";
                } else {
                    // line 14
                    echo "\t\t\t\t\t\t<figcaption>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                    echo "</figcaption>
\t\t\t\t\t";
                }
                // line 16
                echo "\t\t\t\t</figure>
\t\t\t";
            } else {
                // line 18
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "imageResizerInstalled", [], "any", false, false, true, 18)) {
                    // line 19
                    echo "\t\t\t\t\t<img src=\"";
                    echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 19), 19, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "maxDimension"], "method", false, false, true, 19), 19, $this->source)]);
                    echo "\" alt=\"\">
\t\t\t\t";
                } else {
                    // line 21
                    echo "\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t";
                }
                // line 23
                echo "\t\t\t";
            }
            // line 24
            echo "
\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/nose/plugins/sqwk/gallery/components/gallery/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 27,  134 => 24,  131 => 23,  125 => 21,  119 => 19,  116 => 18,  112 => 16,  106 => 14,  98 => 12,  95 => 11,  87 => 9,  79 => 7,  77 => 6,  74 => 5,  72 => 4,  69 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"gallery\">
\t{% for image in __SELF__.gallery.images %}
\t\t<li>
\t\t\t{% if image.title %}
\t\t\t\t<figure>
\t\t\t\t\t{% if __SELF__.imageResizerInstalled %}
\t\t\t\t\t\t<img title=\"{{image.title}}\" src=\"{{image.path|resize(__SELF__.property('maxDimension'))}}\" alt=\"\">
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<img title=\"{{image.title}}\" src=\"{{image.path}}\" alt=\"\">
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if image.description %}
\t\t\t\t\t\t<figcaption>{{image.title}}: {{image.description}}</figcaption>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<figcaption>{{image.title}}</figcaption>
\t\t\t\t\t{% endif %}
\t\t\t\t</figure>
\t\t\t{% else %}
\t\t\t\t{% if __SELF__.imageResizerInstalled %}
\t\t\t\t\t<img src=\"{{image.path|resize(__SELF__.property('maxDimension'))}}\" alt=\"\">
\t\t\t\t{% else %}
\t\t\t\t\t<img src=\"{{image.path}}\" alt=\"\">
\t\t\t\t{% endif %}
\t\t\t{% endif %}

\t\t</li>
\t{% endfor %}
</ul>
", "/home/vagrant/code/nose/plugins/sqwk/gallery/components/gallery/default.htm", "");
    }
}
