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

/* /home/vagrant/code/nose/themes/tomaznose/layouts/kariera.htm */
class __TwigTemplate_e57c871eeaf7a55a2fb0fac9622facb5e4fab2a2a7693c4fd859aa4f23a65d4c extends \Twig\Template
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
        $tags = array("styles" => 18, "partial" => 23, "page" => 38, "framework" => 55, "scripts" => 56);
        $filters = array("theme" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'page', 'framework', 'scripts'],
                ['theme'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/bootstrap/dist/css/bootstrap.min.css", 1 => "assets/vendor/font-awesome/css/font-awesome.min.css", 2 => "assets/vendor/animate.css/animate.min.css", 3 => "assets/vendor/plyr/dist/plyr.css", 4 => "assets/css/custom.css"]);
        // line 14
        echo "\" rel=\"stylesheet\">
    
    <link href=\"https://fonts.googleapis.com/css2?family=Special+Elite&display=swap\" rel=\"stylesheet\">

    ";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 19
        echo "
  </head>
  <body>
  
    ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "
    ";
        // line 26
        echo "
  <section id=\"page\">

    <div class=\"container\">

      <br><br><br><br>
      ";
        // line 38
        echo "      ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 39
        echo "
    </div>

  </section>

  ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "
    <script src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery/dist/jquery.min.js", 1 => "assets/vendor/tether/dist/js/tether.min.js", 2 => "assets/vendor/bootstrap/dist/js/bootstrap.min.js", 3 => "assets/vendor/wow/dist/wow.min.js", 4 => "assets/vendor/holderjs/holder.min.js", 5 => "assets/vendor/plyr/dist/plyr.js", 6 => "assets/js/scripts.js"]);
        // line 54
        echo "\"></script>
    ";
        // line 55
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 56
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 57
        echo "    <script>
      \$(document).ready(() => {
        let url = location.href.replace(/\\/\$/, \"\");
      
        if (location.hash) {
          const hash = url.split(\"#\");
          \$('#pills-tab a[href=\"#'+hash[1]+'\"]').tab(\"show\");
          url = location.href.replace(/\\/#/, \"#\");
          history.replaceState(null, null, url);
          setTimeout(() => {
            \$(window).scrollTop(0);
          }, 400);
        } 
        
        \$('a[data-toggle=\"tab\"]').on(\"click\", function() {
          let newUrl;
          const hash = \$(this).attr(\"href\");
          if(hash == \"#home\") {
            newUrl = url.split(\"#\")[0];
          } else {
            newUrl = url.split(\"#\")[0] + hash;
          }
          newUrl += \"/\";
          history.replaceState(null, null, newUrl);
        });
      });

        \$(document).ready(function () {

            \$('.navbar-toggler').on('click', function () {

                \$('.animated-icon').toggleClass('open');
            });

        });
        /*\$(function () {
            \$('#myList a:last-child').tab('show')
        })*/
    </script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/nose/themes/tomaznose/layouts/kariera.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 57,  136 => 56,  125 => 55,  122 => 54,  120 => 46,  117 => 45,  113 => 44,  106 => 39,  103 => 38,  95 => 26,  92 => 24,  88 => 23,  82 => 19,  79 => 18,  73 => 14,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"{{ [
      'assets/vendor/bootstrap/dist/css/bootstrap.min.css',
      'assets/vendor/font-awesome/css/font-awesome.min.css',
      'assets/vendor/animate.css/animate.min.css',
      'assets/vendor/plyr/dist/plyr.css',
      'assets/css/custom.css'
    ]|theme }}\" rel=\"stylesheet\">
    
    <link href=\"https://fonts.googleapis.com/css2?family=Special+Elite&display=swap\" rel=\"stylesheet\">

    {% styles %}

  </head>
  <body>
  
    {% partial 'navbar' %}

    {#% partial 'jumbotron' %#}

  <section id=\"page\">

    <div class=\"container\">

      <br><br><br><br>
      {#% set mylist = [1,2,3,4,5] %}
      <h1>
        {% for i in mylist %}
          {{ i }}, 
        {% endfor %}
      </h1>#}
      {% page %}

    </div>

  </section>

  {% partial 'footer' %}

    <script src=\"{{ [
      'assets/vendor/jquery/dist/jquery.min.js',
      'assets/vendor/tether/dist/js/tether.min.js',
      'assets/vendor/bootstrap/dist/js/bootstrap.min.js',
      'assets/vendor/wow/dist/wow.min.js',
      'assets/vendor/holderjs/holder.min.js',
      'assets/vendor/plyr/dist/plyr.js',
      'assets/js/scripts.js'
    ]|theme }}\"></script>
    {% framework extras %}
    {% scripts %}
    <script>
      \$(document).ready(() => {
        let url = location.href.replace(/\\/\$/, \"\");
      
        if (location.hash) {
          const hash = url.split(\"#\");
          \$('#pills-tab a[href=\"#'+hash[1]+'\"]').tab(\"show\");
          url = location.href.replace(/\\/#/, \"#\");
          history.replaceState(null, null, url);
          setTimeout(() => {
            \$(window).scrollTop(0);
          }, 400);
        } 
        
        \$('a[data-toggle=\"tab\"]').on(\"click\", function() {
          let newUrl;
          const hash = \$(this).attr(\"href\");
          if(hash == \"#home\") {
            newUrl = url.split(\"#\")[0];
          } else {
            newUrl = url.split(\"#\")[0] + hash;
          }
          newUrl += \"/\";
          history.replaceState(null, null, newUrl);
        });
      });

        \$(document).ready(function () {

            \$('.navbar-toggler').on('click', function () {

                \$('.animated-icon').toggleClass('open');
            });

        });
        /*\$(function () {
            \$('#myList a:last-child').tab('show')
        })*/
    </script>
  </body>
</html>", "/home/vagrant/code/nose/themes/tomaznose/layouts/kariera.htm", "");
    }
}
