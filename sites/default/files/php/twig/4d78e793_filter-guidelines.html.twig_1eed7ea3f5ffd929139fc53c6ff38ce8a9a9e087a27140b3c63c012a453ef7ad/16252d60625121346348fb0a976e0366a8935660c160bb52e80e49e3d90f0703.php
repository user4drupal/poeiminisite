<?php

/* core/themes/classy/templates/content-edit/filter-guidelines.html.twig */
class __TwigTemplate_4c88e5f596d2adee1e269c9ba0f7b51f208b17eaad505d125025d0b346e1feb8 extends Twig_Template
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
        $__internal_f0f56807b9d1af4eeedff0f04ab562e18eb7749081a1d36bdd9761bb628ac767 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f56807b9d1af4eeedff0f04ab562e18eb7749081a1d36bdd9761bb628ac767->enter($__internal_f0f56807b9d1af4eeedff0f04ab562e18eb7749081a1d36bdd9761bb628ac767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/content-edit/filter-guidelines.html.twig"));

        $tags = array("set" => 21);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
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

        // line 21
        $context["classes"] = array(0 => "filter-guidelines-item", 1 => ("filter-guidelines-" . $this->getAttribute(        // line 23
($context["format"] ?? null), "id", array())));
        // line 26
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  <h4 class=\"label\">";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["format"] ?? null), "label", array()), "html", null, true));
        echo "</h4>
  ";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["tips"] ?? null), "html", null, true));
        echo "
</div>
";
        
        $__internal_f0f56807b9d1af4eeedff0f04ab562e18eb7749081a1d36bdd9761bb628ac767->leave($__internal_f0f56807b9d1af4eeedff0f04ab562e18eb7749081a1d36bdd9761bb628ac767_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/filter-guidelines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 28,  54 => 27,  49 => 26,  47 => 23,  46 => 21,);
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
 * Theme override for guidelines for a text format.
 *
 * Available variables:
 * - format: Contains information about the current text format, including the
 *   following:
 *   - name: The name of the text format, potentially unsafe and needs to be
 *     escaped.
 *   - format: The machine name of the text format, e.g. 'basic_html'.
 * - attributes: HTML attributes for the containing element.
 * - tips: Descriptions and a CSS ID in the form of 'module-name/filter-id'
 *   (only used when 'long' is TRUE) for each filter in one or more text
 *   formats.
 *
 * @see template_preprocess_filter_tips()
 */
#}
{%
  set classes = [
    'filter-guidelines-item',
    'filter-guidelines-' ~ format.id,
  ]
%}
<div{{ attributes.addClass(classes) }}>
  <h4 class=\"label\">{{ format.label }}</h4>
  {{ tips }}
</div>
", "core/themes/classy/templates/content-edit/filter-guidelines.html.twig", "/var/www/html/poeiminisite/core/themes/classy/templates/content-edit/filter-guidelines.html.twig");
    }
}
