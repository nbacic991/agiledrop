<?php

/* themes/custom/onboarding_agile/templates/node/page--events.html.twig */
class __TwigTemplate_2d76a02cda918e8f1fb115b05fa50cba0c5266e97e3ce90315fd42330e2c86f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 74);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 45
        echo "<div class=\"layout-container\">
  <section id=\"highlighted\" class=\"highlighted\">
    ";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "
  </section>
    ";
        // line 50
        echo "  <div class=\"navigation\">
      ";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
      ";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
        echo "
      <div class=\"mobile-menu\">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
      </div>
  </div>

  <header role=\"banner\">
      ";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
  </header>
  <div class=\"exposed-filters\">
      ";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_bottom", array()), "html", null, true));
        echo "
  </div>
    ";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 73
        echo "    <section class=\"main-section\">
     ";
        // line 74
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 75
            echo "         <aside class=\"layout-sidebar-first\" role=\"complementary\">
             ";
            // line 76
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
         </aside>
     ";
        }
        // line 79
        echo "
      <div class=\"events-content\">
          ";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
      </div>";
        // line 83
        echo "
    </section>
  </main>

    ";
        // line 87
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_one", array())) {
            // line 88
            echo "      <div class=\"featured-events\" role=\"complementary\">
          ";
            // line 89
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_one", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 92
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_two", array())) {
            // line 93
            echo "      <div class=\"featured-companies\" role=\"complementary\">
          ";
            // line 94
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_two", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 97
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_three", array())) {
            // line 98
            echo "      <div class=\"featured-service\" role=\"complementary\">
          ";
            // line 99
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_three", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 102
        echo "
  <footer class=\"site-footer\">
    <div class=\"layout-container\">
        ";
        // line 105
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 106
            echo "          <div class=\"site-footer__top clearfix\">
              ";
            // line 107
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
              ";
            // line 108
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "
              ";
            // line 109
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
            echo "
              ";
            // line 110
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 113
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array())) {
            // line 114
            echo "          <div class=\"site-footer__bottom\">
              ";
            // line 115
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 118
        echo "    </div>
  </footer>


</div>";
        // line 123
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/onboarding_agile/templates/node/page--events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 123,  194 => 118,  188 => 115,  185 => 114,  182 => 113,  176 => 110,  172 => 109,  168 => 108,  164 => 107,  161 => 106,  159 => 105,  154 => 102,  148 => 99,  145 => 98,  142 => 97,  136 => 94,  133 => 93,  130 => 92,  124 => 89,  121 => 88,  119 => 87,  113 => 83,  109 => 81,  105 => 79,  99 => 76,  96 => 75,  94 => 74,  91 => 73,  85 => 69,  80 => 67,  74 => 64,  59 => 52,  55 => 51,  52 => 50,  47 => 47,  43 => 45,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"layout-container\">
  <section id=\"highlighted\" class=\"highlighted\">
    {{ page.highlighted }}
  </section>
    {#{{ page.highlighted }}#}
  <div class=\"navigation\">
      {{ page.primary_menu }}
      {{ page.secondary_menu }}
      <div class=\"mobile-menu\">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
      </div>
  </div>

  <header role=\"banner\">
      {{ page.header }}
  </header>
  <div class=\"exposed-filters\">
      {{ page.header_bottom }}
  </div>
    {{ page.help }}

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
    <section class=\"main-section\">
     {% if page.sidebar_first %}
         <aside class=\"layout-sidebar-first\" role=\"complementary\">
             {{ page.sidebar_first }}
         </aside>
     {% endif %}

      <div class=\"events-content\">
          {{ page.content }}
      </div>{# /.layout-content #}

    </section>
  </main>

    {% if page.featured_one %}
      <div class=\"featured-events\" role=\"complementary\">
          {{ page.featured_one }}
      </div>
    {% endif %}
    {% if page.featured_two %}
      <div class=\"featured-companies\" role=\"complementary\">
          {{ page.featured_two }}
      </div>
    {% endif %}
    {% if page.featured_three %}
      <div class=\"featured-service\" role=\"complementary\">
          {{ page.featured_three }}
      </div>
    {% endif %}

  <footer class=\"site-footer\">
    <div class=\"layout-container\">
        {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
          <div class=\"site-footer__top clearfix\">
              {{ page.footer_first }}
              {{ page.footer_second }}
              {{ page.footer_third }}
              {{ page.footer_fourth }}
          </div>
        {% endif %}
        {% if page.footer_fifth %}
          <div class=\"site-footer__bottom\">
              {{ page.footer_fifth }}
          </div>
        {% endif %}
    </div>
  </footer>


</div>{# /.layout-container #}

";
    }
}
