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

/* /home/vagrant/code/nose/themes/tomaznose/partials/gallery.htm */
class __TwigTemplate_1a55b5d79b31581906913209c2bece54cd651bd27566f4823210c9d113854b21 extends \Twig\Template
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
        $tags = array("if" => 4, "for" => 5, "put" => 13);
        $filters = array("escape" => 3, "resize" => 7, "theme" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'put'],
                ['escape', 'resize', 'theme'],
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
        // line 2
        echo "<h2>Foto</h2>
<div class=\"row gallery\" id=\"lg-";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["galleryname"] ?? null), 3, $this->source), "html", null, true);
        echo "\">
\t";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "images", [], "any", false, false, true, 4)) {
            echo "\t\t
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "images", [], "any", false, false, true, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 6
                echo "\t\t\t<div class=\"col-6 col-sm-4 col-md-3 col-lg-2 cell\" data-src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "\" data-sub-html=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "\">
\t\t\t\t<a href=\"\" title=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                echo "\"><div class=\"box\" style=\"background:url(";
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 7), 7, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Gallery"] ?? null), "properties", [], "any", false, false, true, 7), "maxDimension", [], "any", false, false, true, 7), 7, $this->source)]);
                echo ") no-repeat 50% 50%; background-size: cover;\"></div></a>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t";
        }
        // line 11
        echo "</div>

";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 14
        echo "    <link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/lightgallery/dist/css/lightgallery.css");
        echo "\" rel=\"stylesheet\" />
";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 17
        echo "\t<script src=\"https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js\"></script>
\t<script>
\t\tlightGallery(document.getElementById('lg-";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["galleryname"] ?? null), 26, $this->source), "html", null, true);
        echo "'));
\t\t/*\$('#lightgallery').lightGallery({
\t\t\tthumbnail: true,
\t\t\tanimateThumb : true
\t\t}); */
\t</script>
";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/nose/themes/tomaznose/partials/gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 16,  124 => 26,  113 => 17,  111 => 16,  109 => 13,  104 => 14,  102 => 13,  98 => 11,  95 => 10,  84 => 7,  77 => 6,  73 => 5,  69 => 4,  65 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#<h2>--{{ galleryname }}--</h2>#}
<h2>Foto</h2>
<div class=\"row gallery\" id=\"lg-{{ galleryname }}\">
\t{% if gallery.images %}\t\t
\t\t{% for image in gallery.images %}
\t\t\t<div class=\"col-6 col-sm-4 col-md-3 col-lg-2 cell\" data-src=\"{{image.path}}\" data-sub-html=\"{{image.title}}\">
\t\t\t\t<a href=\"\" title=\"{{image.title}}\"><div class=\"box\" style=\"background:url({{image.path|resize(Gallery.properties.maxDimension)}}) no-repeat 50% 50%; background-size: cover;\"></div></a>
\t\t\t</div>
\t\t{% endfor %}
\t{% endif %}
</div>

{% put styles %}
    <link href=\"{{ 'assets/vendor/lightgallery/dist/css/lightgallery.css'|theme }}\" rel=\"stylesheet\" />
{% endput %}
{% put scripts %}
\t<script src=\"https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js\"></script>
\t<script>
\t\tlightGallery(document.getElementById('lg-{{ galleryname }}'));
\t\t/*\$('#lightgallery').lightGallery({
\t\t\tthumbnail: true,
\t\t\tanimateThumb : true
\t\t}); */
\t</script>
{% endput %}", "/home/vagrant/code/nose/themes/tomaznose/partials/gallery.htm", "");
    }
}
