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

/* /home/vagrant/code/nose/plugins/rainlab/blog/components/post/default.htm */
class __TwigTemplate_842ca1ed5bdd39fdaca05e5ec11b8be41496abee4c45145938fb594397c8b886 extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 5, "for" => 7);
        $filters = array("raw" => 3, "escape" => 10, "join" => 21, "map" => 21, "trans" => 23, "date" => 24);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['raw', 'escape', 'join', 'map', 'trans', 'date'],
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post", [], "any", false, false, true, 1);
        // line 2
        echo "
<div class=\"content\">";
        // line 3
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 3), 3, $this->source);
        echo "</div>

";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 5), "count", [], "any", false, false, true, 5)) {
            // line 6
            echo "    <div class=\"featured-images text-center\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 8
                echo "            <p>
                <img
                    data-src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "\"
                    src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\"
                    alt=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "\"
                    style=\"max-width: 100%\" />
            </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </div>
";
        }
        // line 18
        echo "
<p class=\"info\">
    ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 20), "count", [], "any", false, false, true, 20)) {
            // line 21
            echo "        ";
            $context["categoryLinks"] = twig_join_filter(twig_array_map($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 21), 21, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 21), 21, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 21), 21, $this->source)) . "</a>"); }), ", ");
            // line 22
            echo "
        ";
            // line 23
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 24
($context["post"] ?? null), "published_at", [], "any", false, false, true, 24), 24, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"])), "categories" =>             // line 25
($context["categoryLinks"] ?? null)]]);
            // line 26
            echo "
    ";
        } else {
            // line 28
            echo "        ";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 29
($context["post"] ?? null), "published_at", [], "any", false, false, true, 29), 29, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
            // line 30
            echo "
    ";
        }
        // line 32
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/nose/plugins/rainlab/blog/components/post/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 32,  131 => 30,  129 => 29,  127 => 28,  123 => 26,  121 => 25,  120 => 24,  119 => 23,  116 => 22,  113 => 21,  111 => 20,  107 => 18,  103 => 16,  93 => 12,  89 => 11,  85 => 10,  81 => 8,  77 => 7,  74 => 6,  72 => 5,  67 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = __SELF__.post %}

<div class=\"content\">{{ post.content_html | raw }}</div>

{% if post.featured_images.count %}
    <div class=\"featured-images text-center\">
        {% for image in post.featured_images %}
            <p>
                <img
                    data-src=\"{{ image.filename }}\"
                    src=\"{{ image.path }}\"
                    alt=\"{{ image.description }}\"
                    style=\"max-width: 100%\" />
            </p>
        {% endfor %}
    </div>
{% endif %}

<p class=\"info\">
    {% if post.categories.count %}
        {% set categoryLinks = post.categories | map(c => \"<a href=\\\"#{c.url}\\\">#{c.name}</a>\") | join(', ') %}

        {{ 'rainlab.blog::lang.post.posted_byline' | trans({
            date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans),
            categories: categoryLinks
        }) }}
    {% else %}
        {{ 'rainlab.blog::lang.post.posted_byline_no_categories' | trans({
            date: post.published_at | date('rainlab.blog::lang.post.date_format'|trans)
        }) }}
    {% endif %}
</p>
", "/home/vagrant/code/nose/plugins/rainlab/blog/components/post/default.htm", "");
    }
}
