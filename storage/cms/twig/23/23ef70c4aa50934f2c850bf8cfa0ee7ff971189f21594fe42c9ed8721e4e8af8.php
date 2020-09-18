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

/* /home/vagrant/code/nose/themes/tomaznose/pages/novica.htm */
class __TwigTemplate_e3c53591956d466b2432258729e59a6fea0274c2f4d398da02f68b9b1117943a extends \Twig\Template
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
        $tags = array("for" => 9);
        $filters = array("escape" => 3, "date" => 4, "raw" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'date', 'raw'],
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
        echo "<div class=\"row\">
    <div class=\"col-12 col-md-8\">
        <h2>";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</h2>
        <p>";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 4), 4, $this->source), "d.m.Y"), "html", null, true);
        echo "</p>
        ";
        // line 5
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 5), 5, $this->source);
        echo "
    </div>
    <div class=\"col-12 col-md-4\">
        <ul>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</a><br>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "published_at", [], "any", false, false, true, 10), 10, $this->source), "d.m.Y"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </ul>
    <a href=\"/novice\">Arhiv novic</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/nose/themes/tomaznose/pages/novica.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 12,  85 => 10,  81 => 9,  74 => 5,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-12 col-md-8\">
        <h2>{{ post.title }}</h2>
        <p>{{ post.published_at|date(\"d.m.Y\") }}</p>
        {{ post.content_html | raw }}
    </div>
    <div class=\"col-12 col-md-4\">
        <ul>
        {% for post in posts %}
            <li><a href=\"{{ post.slug }}\">{{ post.title }}</a><br>{{ posts.published_at|date(\"d.m.Y\") }}</li>
        {% endfor %}
    </ul>
    <a href=\"/novice\">Arhiv novic</a>
    </div>
</div>", "/home/vagrant/code/nose/themes/tomaznose/pages/novica.htm", "");
    }
}
