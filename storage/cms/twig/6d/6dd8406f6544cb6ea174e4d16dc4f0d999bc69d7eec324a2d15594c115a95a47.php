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

/* /home/vagrant/code/nose/themes/tomaznose/partials/kariera_rnd-img.htm */
class __TwigTemplate_8ecba166a7954c9ff08a4ab2498bb694f2041fc014451083bdfc8a091942421e extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 1);
        $functions = array("random" => 1);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['random']
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
        echo "<img src=\"/storage/app/media/kariera/";
        echo twig_escape_filter($this->env, twig_random($this->env, [0 => "splash_desno2.jpg", 1 => "splash_desno3.jpg", 2 => "splash_desno4.jpg", 3 => "splash-desno_16-6-09-1.jpg", 4 => "splash-desno_16-6-09-2.jpg", 5 => "splash-desno_16-6-09-3.jpg", 6 => "splash-desno_16-6-09-4.jpg", 7 => "splash-desno_16-6-09-5.jpg", 8 => "splash-desno_16-6-09-6.jpg", 9 => "splash-desno_16-6-09-7.jpg", 10 => "splash-desno_16-6-09-8.jpg", 11 => "splash-desno_16-6-09-9.jpg", 12 => "splash-desno_16-6-09-10.jpg", 13 => "splash-desno_16-6-09-11.jpg", 14 => "splash-desno_16-6-09-13.jpg", 15 => "splash-desno_16-6-09-14.jpg"]), "html", null, true);
        // line 16
        echo "\" class=\"fr-fic fr-dib img-fluid\">";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/nose/themes/tomaznose/partials/kariera_rnd-img.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<img src=\"/storage/app/media/kariera/{{ random(['splash_desno2.jpg',
    'splash_desno3.jpg',
    'splash_desno4.jpg',
    'splash-desno_16-6-09-1.jpg',
    'splash-desno_16-6-09-2.jpg',
    'splash-desno_16-6-09-3.jpg',
    'splash-desno_16-6-09-4.jpg',
    'splash-desno_16-6-09-5.jpg',
    'splash-desno_16-6-09-6.jpg',
    'splash-desno_16-6-09-7.jpg',
    'splash-desno_16-6-09-8.jpg',
    'splash-desno_16-6-09-9.jpg',
    'splash-desno_16-6-09-10.jpg',
    'splash-desno_16-6-09-11.jpg',
    'splash-desno_16-6-09-13.jpg',
    'splash-desno_16-6-09-14.jpg']) }}\" class=\"fr-fic fr-dib img-fluid\">", "/home/vagrant/code/nose/themes/tomaznose/partials/kariera_rnd-img.htm", "");
    }
}
