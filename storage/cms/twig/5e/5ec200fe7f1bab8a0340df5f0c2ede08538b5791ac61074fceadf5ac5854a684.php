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

/* /home/vagrant/code/nose/themes/tomaznose/partials/navbar.htm */
class __TwigTemplate_03a19817772834e4a3d6c5860cc00c4438d94e59e25c63cedce5b7f9699dd56b extends \Twig\Template
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
        $tags = array("for" => 11, "if" => 12);
        $filters = array("escape" => 13);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
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
        echo "<section>\t
\t<nav class=\"navbar navbar-expand-md fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand font-weight-bold\" href=\"/\">Tomaž Nose</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<!--span class=\"navbar-toggler-icon\"></span-->
\t\t\t\t<div class=\"animated-icon\"><span></span><span></span><span></span></div>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"nav navbar-nav ml-auto\">
\t\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "\t\t\t\t\t\t<li class=\"nav-item";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, true, 12) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, true, 12))) {
                echo " active";
            }
            echo "\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/nose/themes/tomaznose/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 16,  85 => 13,  78 => 12,  74 => 11,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>\t
\t<nav class=\"navbar navbar-expand-md fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand font-weight-bold\" href=\"/\">Tomaž Nose</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<!--span class=\"navbar-toggler-icon\"></span-->
\t\t\t\t<div class=\"animated-icon\"><span></span><span></span><span></span></div>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"nav navbar-nav ml-auto\">
\t\t\t\t\t{% for item in staticMenu.menuItems %}
\t\t\t\t\t\t<li class=\"nav-item{% if item.isActive or item.isChildActive %} active{% endif %}\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ item.url }}\">{{ item.title }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</section>", "/home/vagrant/code/nose/themes/tomaznose/partials/navbar.htm", "");
    }
}
