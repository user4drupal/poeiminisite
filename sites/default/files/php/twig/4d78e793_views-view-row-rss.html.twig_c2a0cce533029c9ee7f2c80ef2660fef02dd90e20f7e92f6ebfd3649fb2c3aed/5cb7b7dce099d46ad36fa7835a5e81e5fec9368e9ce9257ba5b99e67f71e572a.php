<?php

/* core/themes/classy/templates/views/views-view-row-rss.html.twig */
class __TwigTemplate_bdf65f6f9fca5b37bbd8715f65de825ef11bc46b95082e4e8889a27e3aa30cb9 extends Twig_Template
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
        $__internal_f4b9d66f9e7ccf56ab13b057574549be9318e7d4246ec5b604e06fcee49d09a3 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b9d66f9e7ccf56ab13b057574549be9318e7d4246ec5b604e06fcee49d09a3->enter($__internal_f4b9d66f9e7ccf56ab13b057574549be9318e7d4246ec5b604e06fcee49d09a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/views/views-view-row-rss.html.twig"));

        $tags = array("for" => 22, "if" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 18
        echo "<item>
  <title>";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</title>
  <link>";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["link"] ?? null), "html", null, true));
        echo "</link>
  <description>";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true));
        echo "</description>
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["item_elements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "<";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute($context["item"], "key", array()), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
            // line 24
            if ($this->getAttribute($context["item"], "value", array())) {
                // line 25
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true));
                echo "</";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute($context["item"], "key", array()), "html", null, true));
                echo ">
    ";
            } else {
                // line 27
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->renderVar(" />"));
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</item>
";
        
        $__internal_f4b9d66f9e7ccf56ab13b057574549be9318e7d4246ec5b604e06fcee49d09a3->leave($__internal_f4b9d66f9e7ccf56ab13b057574549be9318e7d4246ec5b604e06fcee49d09a3_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/views/views-view-row-rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  79 => 27,  71 => 25,  69 => 24,  65 => 23,  61 => 22,  57 => 21,  53 => 20,  49 => 19,  46 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override to display an item in a views RSS feed.
 *
 * Available variables:
 * - title: RSS item title.
 * - link: RSS item link.
 * - description: RSS body text.
 * - item_elements: RSS item elements to be rendered as XML (pubDate, creator,
 *   guid).
 *
 * @see template_preprocess_views_view_row_rss()
 *
 * @ingroup themeable
 */
#}
<item>
  <title>{{ title }}</title>
  <link>{{ link }}</link>
  <description>{{ description }}</description>
  {% for item in item_elements -%}
  <{{ item.key }}{{ item.attributes -}}
  {% if item.value -%}
  >{{ item.value }}</{{ item.key }}>
    {% else -%}
  {{ ' />' }}
    {% endif %}
  {%- endfor %}
</item>
", "core/themes/classy/templates/views/views-view-row-rss.html.twig", "/var/www/html/poeiminisite/core/themes/classy/templates/views/views-view-row-rss.html.twig");
    }
}
