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

/* @vani/template-parts/header.html.twig */
class __TwigTemplate_2fda0a5fee02023b5c6450394e7fe6e2bd02ac170fbff94a12fa431ea029df13 extends \Twig\Template
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
        $tags = array("if" => 9, "include" => 33);
        $filters = array("escape" => 18);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
        echo "<header class=\"header clear\">
  <div class=\"header-cicle header-cicle1\"></div>
  <div class=\"header-cicle header-cicle3\"></div>
  <div class=\"header-cicle header-cicle4\"></div>
  <div class=\"header-cicle header-cicle6\"></div>
  <div class=\"header-cicle header-cicle7\"></div>
  <div class=\"header-cicle header-cicle8\"></div>
  <div class=\"header-cicle header-cicle10\"></div>
  ";
        // line 9
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 10
            echo "  <div class=\"header-cicle header-cicle2\"></div>
  <div class=\"header-cicle header-cicle5\"></div>
  <div class=\"header-cicle header-cicle9\"></div>
  ";
        }
        // line 14
        echo "  <div class=\"container\">
  <div class=\"header-main\">
    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 16)) {
            // line 17
            echo "      <div class=\"site-brand\">
        ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
      </div> <!--/.site-branding -->
    ";
        }
        // line 21
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 21) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 21))) {
            // line 22
            echo "      <div class=\"header-main-right\">
        ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 23)) {
                // line 24
                echo "          <div class=\"mobile-menu\"><i class=\"icon-menu\"></i></div> ";
                // line 25
                echo "          <div class=\"primary-menu-wrapper\">
            <div class=\"menu-wrap\">
              <div class=\"close-mobile-menu\">x</div>
              ";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "
            </div> <!-- /.menu-wrap -->
          </div> <!-- /.primary-menu-wrapper -->
        ";
            }
            // line 32
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 32)) {
                // line 33
                echo "          ";
                $this->loadTemplate("@vani/template-parts/search.html.twig", "@vani/template-parts/header.html.twig", 33)->display($context);
                // line 34
                echo "        ";
            }
            // line 35
            echo "      </div> <!-- /.header-right -->
    ";
        }
        // line 37
        echo "  </div><!-- /header-main -->
  </div><!-- /container -->
  ";
        // line 39
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 40
            echo "    ";
            $this->loadTemplate("@vani/template-parts/slider.html.twig", "@vani/template-parts/header.html.twig", 40)->display($context);
            // line 41
            echo "  ";
        } elseif ( !($context["is_front"] ?? null)) {
            // line 42
            echo "    ";
            $this->loadTemplate("@vani/template-parts/page_header.html.twig", "@vani/template-parts/header.html.twig", 42)->display($context);
            // line 43
            echo "  ";
        }
        // line 44
        echo "</header>
";
    }

    public function getTemplateName()
    {
        return "@vani/template-parts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 44,  145 => 43,  142 => 42,  139 => 41,  136 => 40,  134 => 39,  130 => 37,  126 => 35,  123 => 34,  120 => 33,  117 => 32,  110 => 28,  105 => 25,  103 => 24,  101 => 23,  98 => 22,  95 => 21,  89 => 18,  86 => 17,  84 => 16,  80 => 14,  74 => 10,  72 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vani/template-parts/header.html.twig", "C:\\xampp\\htdocs\\drupal\\drupal-jcub-cms\\themes\\vani\\templates\\template-parts\\header.html.twig");
    }
}
