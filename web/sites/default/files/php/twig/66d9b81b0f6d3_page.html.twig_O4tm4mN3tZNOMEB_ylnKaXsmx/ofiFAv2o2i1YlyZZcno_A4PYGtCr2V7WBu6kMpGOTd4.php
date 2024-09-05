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

/* themes/custom/mytheme/templates/layout/page.html.twig */
class __TwigTemplate_8f7245c9d43ca58e61b3acd1f115404f extends Template
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
        // line 46
        yield "<div class=\"layout-container\">

\t<header role=\"banner\">
\t\t";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        yield "
\t</header>

\t";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        yield "
\t";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        yield "

\t";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        yield "

\t";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        yield "

\t";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        yield "

\t<main role=\"main\">
\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t";
        // line 64
        yield "
\t\t<div class=\"layout-content\">
\t\t\t";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        yield "
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"title-bar\">
\t\t\t\t\t<h2>Lorem ipsum dolor sit amet</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"tabs-container\">
\t\t\t\t\t<ul class=\"tabs\">
\t\t\t\t\t\t<li class=\"tab\" data-target=\"#tab1\">Featured Conferences<div class=\"tab-active-shape\"></div></li>
\t\t\t\t\t\t<li class=\"tab\" data-target=\"#tab2\">Recommended Conferences<div class=\"tab-active-shape\"></div</li>
\t\t\t\t\t\t<li class=\"tab\" data-target=\"#tab3\">Past Conferences<div class=\"tab-active-shape\"></div</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab1\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"slider\">
\t\t\t\t\t\t\t\t<div class=\"slider-card\">
\t\t\t\t\t\t\t\t\t<div class=\"slider-card__wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"slider-card__image\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 84
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 84, $this->source), "html", null, true);
        yield "/images/conference.png\" alt=\"conference\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"slider-card__tag\">Free</button>
\t\t\t\t\t\t\t\t\t\t\t<div class='triangle-shape'><img src=\"";
        // line 86
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 86, $this->source), "html", null, true);
        yield "/images/triangle.png\" alt=\"shape\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"slider-card__content\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Southampton Industries Conference 2016</h3>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 91, $this->source), "html", null, true);
        yield "/images/tag.svg\" alt=\"tag\">Management Leadership</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 92
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 92, $this->source), "html", null, true);
        yield "/images/calander.svg\" alt=\"calander\">11 May 2016</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 93
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 93, $this->source), "html", null, true);
        yield "/images/location.svg\" alt=\"location\">Park Plaza Hotel Banglore, India</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"slider-card__footer\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 98
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 98, $this->source), "html", null, true);
        yield "/images/heart.svg\" alt=\"heart\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 99
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 99, $this->source), "html", null, true);
        yield "/images/download.svg\" alt=\"download\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 100, $this->source), "html", null, true);
        yield "/images/share.svg\" alt=\"share-link\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"view-link\"><a href=\"#\">View Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"slider-card\">
\t\t\t\t\t\t\t\t\t<div class=\"slider-card__wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"slider-card__image\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 109
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 109, $this->source), "html", null, true);
        yield "/images/dummy1.jpeg\" alt=\"dummy1\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"slider-card__tag\">Free</button>
\t\t\t\t\t\t\t\t\t\t\t<div class='triangle-shape'><img src=\"";
        // line 111
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 111, $this->source), "html", null, true);
        yield "/images/triangle.png\" alt=\"shape\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"slider-card__content\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Southampton Industries Conference 2016</h3>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 116
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 116, $this->source), "html", null, true);
        yield "/images/tag.svg\" alt=\"tag\">Management Leadership</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 117
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 117, $this->source), "html", null, true);
        yield "/images/calander.svg\" alt=\"calander\">11 May 2016</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 118
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 118, $this->source), "html", null, true);
        yield "/images/location.svg\" alt=\"location\">Park Plaza Hotel Banglore, India</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"slider-card__footer\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 123, $this->source), "html", null, true);
        yield "/images/heart.svg\" alt=\"heart\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 124
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 124, $this->source), "html", null, true);
        yield "/images/download.svg\" alt=\"download\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 125
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 125, $this->source), "html", null, true);
        yield "/images/share.svg\" alt=\"share-link\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"view-link\"><a href=\"#\">View Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"slider-card\">
\t\t\t\t\t\t\t\t\t<div class=\"slider-card__wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"slider-card__image\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 134
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 134, $this->source), "html", null, true);
        yield "/images/dummy2.jpeg\" alt=\"dummy\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"slider-card__tag\">Free</button>
\t\t\t\t\t\t\t\t\t\t\t<div class='triangle-shape'><img src=\"";
        // line 136
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 136, $this->source), "html", null, true);
        yield "/images/triangle.png\" alt=\"shape\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"slider-card__content\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Southampton Industries Conference 2016</h3>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 141
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 141, $this->source), "html", null, true);
        yield "/images/tag.svg\" alt=\"tag\">Management Leadership</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 142
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 142, $this->source), "html", null, true);
        yield "/images/calander.svg\" alt=\"calander\">11 May 2016</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 143
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 143, $this->source), "html", null, true);
        yield "/images/location.svg\" alt=\"location\">Park Plaza Hotel Banglore, India</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"slider-card__footer\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 148
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 148, $this->source), "html", null, true);
        yield "/images/heart.svg\" alt=\"heart\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 149
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 149, $this->source), "html", null, true);
        yield "/images/download.svg\" alt=\"download\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 150
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 150, $this->source), "html", null, true);
        yield "/images/share.svg\" alt=\"share-link\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"view-link\"><a href=\"#\">View Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"slider-card\">
\t\t\t\t\t\t\t\t\t<div class=\"slider-card__wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"slider-card__image\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 159
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 159, $this->source), "html", null, true);
        yield "/images/conference.png\" alt=\"conference\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"slider-card__tag\">Free</button>
\t\t\t\t\t\t\t\t\t\t\t<div class='triangle-shape'><img src=\"";
        // line 161
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 161, $this->source), "html", null, true);
        yield "/images/triangle.png\" alt=\"shape\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"slider-card__content\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Southampton Industries Conference 2016</h3>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 166
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 166, $this->source), "html", null, true);
        yield "/images/tag.svg\" alt=\"tag\">Management Leadership</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 167
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 167, $this->source), "html", null, true);
        yield "/images/calander.svg\" alt=\"calander\">11 May 2016</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 168
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 168, $this->source), "html", null, true);
        yield "/images/location.svg\" alt=\"location\">Park Plaza Hotel Banglore, India</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"slider-card__footer\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 173
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 173, $this->source), "html", null, true);
        yield "/images/heart.svg\" alt=\"heart\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 174
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 174, $this->source), "html", null, true);
        yield "/images/download.svg\" alt=\"download\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 175
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 175, $this->source), "html", null, true);
        yield "/images/share.svg\" alt=\"share-link\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"view-link\"><a href=\"#\">View Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab2\" class=\"tab-pane\">
\t\t\t\t\t\t\t<h2>LoremIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab3\" class=\"tab-pane\">
\t\t\t\t\t\t\t<h2>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is</h2>
\t\t\t\t\t\t\t<p>This is the content for the third tab.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 194
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 194)) {
            // line 195
            yield "\t\t\t\t<aside class=\"layout-sidebar-first\" role=\"complementary\">
\t\t\t\t\t";
            // line 196
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
            yield "
\t\t\t\t</aside>
\t\t\t";
        }
        // line 199
        yield "
\t\t\t";
        // line 200
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 200)) {
            // line 201
            yield "\t\t\t\t<aside class=\"layout-sidebar-second\" role=\"complementary\">
\t\t\t\t\t";
            // line 202
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
            yield "
\t\t\t\t</aside>
\t\t\t";
        }
        // line 205
        yield "
\t\t</main>

\t\t";
        // line 208
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 208)) {
            // line 209
            yield "\t\t\t<footer role=\"contentinfo\">
\t\t\t\t";
            // line 210
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 210), 210, $this->source), "html", null, true);
            yield "
\t\t\t</footer>
\t\t";
        }
        // line 213
        yield "
\t</div>
\t";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "directory"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/layout/page.html.twig";
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
        return array (  349 => 213,  343 => 210,  340 => 209,  338 => 208,  333 => 205,  327 => 202,  324 => 201,  322 => 200,  319 => 199,  313 => 196,  310 => 195,  308 => 194,  286 => 175,  282 => 174,  278 => 173,  270 => 168,  266 => 167,  262 => 166,  254 => 161,  249 => 159,  237 => 150,  233 => 149,  229 => 148,  221 => 143,  217 => 142,  213 => 141,  205 => 136,  200 => 134,  188 => 125,  184 => 124,  180 => 123,  172 => 118,  168 => 117,  164 => 116,  156 => 111,  151 => 109,  139 => 100,  135 => 99,  131 => 98,  123 => 93,  119 => 92,  115 => 91,  107 => 86,  102 => 84,  81 => 66,  77 => 64,  70 => 59,  65 => 57,  60 => 55,  55 => 53,  51 => 52,  45 => 49,  40 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/mytheme/templates/layout/page.html.twig", "/app/web/themes/custom/mytheme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 194);
        static $filters = array("escape" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
