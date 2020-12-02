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

/* themes/vani/templates/layout/page--front.html.twig */
class __TwigTemplate_d64af869c43543db14ac5105650afab6a261555118e726514ab5eca2410e5eac extends \Twig\Template
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
        $tags = array("include" => 11, "if" => 26);
        $filters = array("escape" => 19);
        $functions = array("attach_library" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                ['attach_library']
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
        // line 11
        $this->loadTemplate("@vani/template-parts/header.html.twig", "themes/vani/templates/layout/page--front.html.twig", 11)->display($context);
        // line 12
        $this->loadTemplate("@vani/template-parts/highlighted.html.twig", "themes/vani/templates/layout/page--front.html.twig", 12)->display($context);
        // line 13
        echo "<div id=\"main-wrapper\" class=\"main-wrapper clear\">
  ";
        // line 14
        $this->loadTemplate("@vani/template-parts/content_home.html.twig", "themes/vani/templates/layout/page--front.html.twig", 14)->display($context);
        // line 15
        echo "  <div class=\"container clear\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 17
        echo "    <main id=\"home-main\" class=\"page-content home-content clear\">
      ";
        // line 18
        $this->loadTemplate("@vani/template-parts/content_top.html.twig", "themes/vani/templates/layout/page--front.html.twig", 18)->display($context);
        // line 19
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
      ";
        // line 21
        echo "      ";
        $this->loadTemplate("@vani/template-parts/content_bottom.html.twig", "themes/vani/templates/layout/page--front.html.twig", 21)->display($context);
        // line 22
        echo "    </main>
  </div> ";
        // line 24
        echo "</div>";
        // line 25
        $this->loadTemplate("@vani/template-parts/footer.html.twig", "themes/vani/templates/layout/page--front.html.twig", 25)->display($context);
        // line 26
        if (($context["slider_show"] ?? null)) {
            // line 27
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/slider"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/vani/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 27,  94 => 26,  92 => 25,  90 => 24,  87 => 22,  84 => 21,  79 => 19,  77 => 18,  74 => 17,  71 => 15,  69 => 14,  66 => 13,  64 => 12,  62 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/vani/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\drupal\\drupal-jcub-cms\\themes\\vani\\templates\\layout\\page--front.html.twig");
    }
}
