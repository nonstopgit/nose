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

/* /home/vagrant/code/nose/themes/tomaznose/pages/author.htm */
class __TwigTemplate_c2fd7d511f92f4ead7e727ae767d226637c2dc7138fbeee999416514a20d9469 extends \Twig\Template
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
        $tags = array("if" => 41, "for" => 42);
        $filters = array("resize" => 43);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['resize'],
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
        echo "<p style=\"text-align: center;\"><img src=\"/storage/app/media/besedila/090612122433_splash-omeni.jpg\" class=\"fr-fic fr-dib img-fluid\"></p>

<h1>O meni</h1>
<div class=\"row\">
\t<div class=\"col-12 col-md-6\">

\t\t<p><strong>Datum rojstva:</strong> 21.4.1982<strong><u>&nbsp;</u></strong>
\t\t\t<br><strong>Prebivališče:</strong> Gabrje
\t\t\t<br><strong>Višina:</strong> 183
\t\t\t<br><strong>Teža:</strong> 62 kg
\t\t\t<br><strong>Kolesarim od leta:</strong> 1993
\t\t\t<br><strong>Prejšnji klubi:</strong> Krka, Krka-Telekom, Phonak
\t\t\t<br><strong>Član kluba v 2009:</strong> KK Adria Mobil
\t\t\t<br><strong>Nadimek:</strong> Nosko</p>

\t\t<p>Prihajam iz idilične vasice Gabrje pod Gorjanci. Mami Jožici, očetu Francu in sestri Nataši sem se pridružil 21.04.1982<em>.&nbsp;</em>Že kot majhen otrok sem se rad ukvarjal s športom, kolo pa je bilo moja obvezna prtljaga vsakega družinskega dopusta.</p>
\t</div>
\t<div class=\"col-12 col-md-6\">

\t\t<p>Resneje sem se s kolesarstvom začel ukvarjati leta 1993, ko sem postal član Kolesarskega kluba Krka iz Novega mesta. Moj prvi trener je bil Franc Zrimšek. Že takoj sem začutil, da sem rojen hribolazec, saj sem še istega leta na državnem prvenstvu na Trški gori osvojil tretje mesto.
\t\t\t<br>
\t\t\t<br>V naslednjih letih so se vrstili številni kolesarski uspehi, za katere so zaslužni prav vsi moji trenerji (poleg Franca Zrimška še Janez Jagodic, Sandi Papež, Bogdan Fink, Milan Eržen in ostali), za kar sem jim hvaležen, kakor tudi mojim staršem in prijateljem za vzpodbudo. Seveda pa brez vseh prevoženih kilometrov ne bi bilo uspehov.</p>
\t</div></div>

<p>
\t<br>
</p>
<div class=\"row\">
\t<div class=\"col-12 col-md-6\">

\t\t<p>Leta 2000 sem na mladinskem svetovnem prvenstvu v Franciji dosegel peto mesto, dve leti kasneje pa sem bil peti tudi na evropskem prvenstvu članov do 23. leta v Italiji. Član KK Krka sem bil tudi leta 2004, ko sem se izkazal na več dirkah za svetovni pokal mlajših članov in si tako utrl pot v svet tujih profesionalnih moštev. Oktobra istega leta sem postal član švicarskega kolesarskega kluba Phonak. Zaradi poškodb in posledično nezmožnosti dokazovanja svojega kolesarskega znanja na največjih svetovnih dirkah, sem se leta 2006 vrnil v matični klub Adria Mobil iz Novega mesta. Že v istem letu sem končal Dirko po Sloveniji kot zmagovalec in uspeh ponovil tudi naslednje leto. Na ta dva dosežka sem še posebej ponosen. Ponosen pa sem tudi na svoje zveste navijače, s katerimi smo nazdravljali ob vseh uspehih, ob strani pa so mi stali tudi v najtežjih trenutkih moje kariere. Takrat so me spomnili, da «Bit Podgurc je luksuz!« in vse je šlo lažje.</p>
\t</div>
\t<div class=\"col-12 col-md-6\">

\t\t<p>Med kolesarsko sezono prostega časa praktično nimam. Ko pa si le utegnem vzeti čas zase, ga najraje preživim s prijatelji. Pozimi grem rad smučat, poleti pa na kakšen krajši izlet na morje. Kar nekaj prostega časa mi vzame študij za izpite na Visoki šoli za upravljanje in poslovanje v Novem mestu, kjer imam status absolventa. Kadar želim imeti svoj mir, pa se zaprem v svojo sobo in preberem kakšno knjigo ali dober članek v revijah, namenjen športni prehrani.
\t\t\t<br>
\t\t\t<br>Pred mano so novi cilji in velike želje, ki bi jih želel uresničiti. Podobne cilje in želje pa imajo tudi številni kolesarji iz vsega sveta. Sam verjamem, da bom s trdim delom in kančkom sreče dosegel svoje sanje.</p>
\t</div></div>
<div class=\"row\">
\t";
        // line 41
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "images", [], "any", false, false, true, 41)) {
            echo "\t\t
\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "images", [], "any", false, false, true, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 43
                echo "\t\t\t<div class=\"col-2 thumbnail\" style=\"padding-top:100%; background:url(";
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 43), 43, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Gallery"] ?? null), "properties", [], "any", false, false, true, 43), "maxDimension", [], "any", false, false, true, 43), 43, $this->source)]);
                echo ") no-repeat 50% 50%;\">&nbsp;</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t";
        }
        // line 46
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/nose/themes/tomaznose/pages/author.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 46,  121 => 45,  112 => 43,  108 => 42,  103 => 41,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p style=\"text-align: center;\"><img src=\"/storage/app/media/besedila/090612122433_splash-omeni.jpg\" class=\"fr-fic fr-dib img-fluid\"></p>

<h1>O meni</h1>
<div class=\"row\">
\t<div class=\"col-12 col-md-6\">

\t\t<p><strong>Datum rojstva:</strong> 21.4.1982<strong><u>&nbsp;</u></strong>
\t\t\t<br><strong>Prebivališče:</strong> Gabrje
\t\t\t<br><strong>Višina:</strong> 183
\t\t\t<br><strong>Teža:</strong> 62 kg
\t\t\t<br><strong>Kolesarim od leta:</strong> 1993
\t\t\t<br><strong>Prejšnji klubi:</strong> Krka, Krka-Telekom, Phonak
\t\t\t<br><strong>Član kluba v 2009:</strong> KK Adria Mobil
\t\t\t<br><strong>Nadimek:</strong> Nosko</p>

\t\t<p>Prihajam iz idilične vasice Gabrje pod Gorjanci. Mami Jožici, očetu Francu in sestri Nataši sem se pridružil 21.04.1982<em>.&nbsp;</em>Že kot majhen otrok sem se rad ukvarjal s športom, kolo pa je bilo moja obvezna prtljaga vsakega družinskega dopusta.</p>
\t</div>
\t<div class=\"col-12 col-md-6\">

\t\t<p>Resneje sem se s kolesarstvom začel ukvarjati leta 1993, ko sem postal član Kolesarskega kluba Krka iz Novega mesta. Moj prvi trener je bil Franc Zrimšek. Že takoj sem začutil, da sem rojen hribolazec, saj sem še istega leta na državnem prvenstvu na Trški gori osvojil tretje mesto.
\t\t\t<br>
\t\t\t<br>V naslednjih letih so se vrstili številni kolesarski uspehi, za katere so zaslužni prav vsi moji trenerji (poleg Franca Zrimška še Janez Jagodic, Sandi Papež, Bogdan Fink, Milan Eržen in ostali), za kar sem jim hvaležen, kakor tudi mojim staršem in prijateljem za vzpodbudo. Seveda pa brez vseh prevoženih kilometrov ne bi bilo uspehov.</p>
\t</div></div>

<p>
\t<br>
</p>
<div class=\"row\">
\t<div class=\"col-12 col-md-6\">

\t\t<p>Leta 2000 sem na mladinskem svetovnem prvenstvu v Franciji dosegel peto mesto, dve leti kasneje pa sem bil peti tudi na evropskem prvenstvu članov do 23. leta v Italiji. Član KK Krka sem bil tudi leta 2004, ko sem se izkazal na več dirkah za svetovni pokal mlajših članov in si tako utrl pot v svet tujih profesionalnih moštev. Oktobra istega leta sem postal član švicarskega kolesarskega kluba Phonak. Zaradi poškodb in posledično nezmožnosti dokazovanja svojega kolesarskega znanja na največjih svetovnih dirkah, sem se leta 2006 vrnil v matični klub Adria Mobil iz Novega mesta. Že v istem letu sem končal Dirko po Sloveniji kot zmagovalec in uspeh ponovil tudi naslednje leto. Na ta dva dosežka sem še posebej ponosen. Ponosen pa sem tudi na svoje zveste navijače, s katerimi smo nazdravljali ob vseh uspehih, ob strani pa so mi stali tudi v najtežjih trenutkih moje kariere. Takrat so me spomnili, da «Bit Podgurc je luksuz!« in vse je šlo lažje.</p>
\t</div>
\t<div class=\"col-12 col-md-6\">

\t\t<p>Med kolesarsko sezono prostega časa praktično nimam. Ko pa si le utegnem vzeti čas zase, ga najraje preživim s prijatelji. Pozimi grem rad smučat, poleti pa na kakšen krajši izlet na morje. Kar nekaj prostega časa mi vzame študij za izpite na Visoki šoli za upravljanje in poslovanje v Novem mestu, kjer imam status absolventa. Kadar želim imeti svoj mir, pa se zaprem v svojo sobo in preberem kakšno knjigo ali dober članek v revijah, namenjen športni prehrani.
\t\t\t<br>
\t\t\t<br>Pred mano so novi cilji in velike želje, ki bi jih želel uresničiti. Podobne cilje in želje pa imajo tudi številni kolesarji iz vsega sveta. Sam verjamem, da bom s trdim delom in kančkom sreče dosegel svoje sanje.</p>
\t</div></div>
<div class=\"row\">
\t{#{ d(Gallery.properties.maxDimension) }#}
\t{% if gallery.images %}\t\t
\t\t{% for image in gallery.images %}
\t\t\t<div class=\"col-2 thumbnail\" style=\"padding-top:100%; background:url({{image.path|resize(Gallery.properties.maxDimension)}}) no-repeat 50% 50%;\">&nbsp;</div>
\t\t{% endfor %}
\t{% endif %}
</div>", "/home/vagrant/code/nose/themes/tomaznose/pages/author.htm", "");
    }
}
