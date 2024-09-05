<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/stable/templates/form/form-element.html.twig */
class __TwigTemplate_10cb532fc1d019ccc4f4f49149d00fbb extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        $context["classes"] = ["js-form-item", "form-item", ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 51
($context["type"] ?? null), 51, $this->source))), ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["name"] ?? null), 52, $this->source))), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["name"] ?? null), 53, $this->source))), ((!CoreExtension::inFilter(        // line 54
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 55
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), ((        // line 56
($context["errors"] ?? null)) ? ("form-item--error") : (""))];
        // line 60
        $context["description_classes"] = ["description", (((        // line 62
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 65
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
        yield ">
  ";
        // line 66
        if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
            // line 67
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 67, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 69
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) {
            // line 70
            yield "    <span class=\"field-prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 70, $this->source), "html", null, true);
            yield "</span>
  ";
        }
        // line 72
        yield "  ";
        if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 72))) {
            // line 73
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            yield ">
      ";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 77
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 77, $this->source), "html", null, true);
        yield "
  ";
        // line 78
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) {
            // line 79
            yield "    <span class=\"field-suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 79, $this->source), "html", null, true);
            yield "</span>
  ";
        }
        // line 81
        yield "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 82
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 82, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 84
        yield "  ";
        if (($context["errors"] ?? null)) {
            // line 85
            yield "    <div class=\"form-item--error-message\">
      ";
            // line 86
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 86, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 89
        yield "  ";
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 89))) {
            // line 90
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 90), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 90), 90, $this->source), "html", null, true);
            yield ">
      ";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 94
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "name", "title_display", "disabled", "errors", "description_display", "attributes", "label_display", "label", "prefix", "description", "children", "suffix"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/stable/templates/form/form-element.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  135 => 94,  129 => 91,  124 => 90,  121 => 89,  115 => 86,  112 => 85,  109 => 84,  103 => 82,  100 => 81,  94 => 79,  92 => 78,  87 => 77,  81 => 74,  76 => 73,  73 => 72,  67 => 70,  64 => 69,  58 => 67,  56 => 66,  51 => 65,  49 => 62,  48 => 60,  46 => 56,  45 => 55,  44 => 54,  43 => 53,  42 => 52,  41 => 51,  40 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/stable/templates/form/form-element.html.twig", "/app/web/themes/contrib/stable/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "if" => 66);
        static $filters = array("clean_class" => 51, "escape" => 65);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                [],
                $this->source
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
}
