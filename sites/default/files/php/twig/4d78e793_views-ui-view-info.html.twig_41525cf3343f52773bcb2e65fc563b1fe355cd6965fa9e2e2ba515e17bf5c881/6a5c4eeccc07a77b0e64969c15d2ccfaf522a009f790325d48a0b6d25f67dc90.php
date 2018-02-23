<?php

/* core/themes/stable/templates/admin/views-ui-view-info.html.twig */
class __TwigTemplate_cf2cd53ebee3d07f23386e805feeea58ad1f49239b54eeea23500b1632c8ff17 extends Twig_Template
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
        $__internal_0306222a011846624adff92ee3b84685c2323dded47f254fc35b36ea498c8d90 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_0306222a011846624adff92ee3b84685c2323dded47f254fc35b36ea498c8d90->enter($__internal_0306222a011846624adff92ee3b84685c2323dded47f254fc35b36ea498c8d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/views-ui-view-info.html.twig"));

        $tags = array("if" => 12, "trans" => 13);
        $filters = array("safe_join" => 18, "t" => 20);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('safe_join', 't'),
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

        // line 10
        echo "<h3 class=\"views-ui-view-title\" data-drupal-selector=\"views-table-filter-text-source\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["view"] ?? null), "label", array()), "html", null, true));
        echo "</h3>
<div class=\"views-ui-view-displays\">
  ";
        // line 12
        if (($context["displays"] ?? null)) {
            // line 13
            echo "    ";
            echo \Drupal::translation()->formatPlural(abs(            // line 15
($context["displays"] ?? null)), "Display", "Displays", array());
            // line 17
            echo ":
    <em>";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->renderVar($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->safeJoin($this->env, ($context["displays"] ?? null), ", ")));
            echo "</em>
  ";
        } else {
            // line 20
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->renderVar(t("None")));
            echo "
  ";
        }
        // line 22
        echo "</div>
<div class=\"views-ui-view-machine-name\">
  ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->renderVar(t("Machine name:")));
        echo "
  <span data-drupal-selector=\"views-table-filter-text-source\">";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["view"] ?? null), "id", array()), "html", null, true));
        echo "</span>
</div>
";
        
        $__internal_0306222a011846624adff92ee3b84685c2323dded47f254fc35b36ea498c8d90->leave($__internal_0306222a011846624adff92ee3b84685c2323dded47f254fc35b36ea498c8d90_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/views-ui-view-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  76 => 24,  72 => 22,  66 => 20,  61 => 18,  58 => 17,  56 => 15,  54 => 13,  52 => 12,  46 => 10,);
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
 * Theme override for basic administrative info about a View.
 *
 * Available variables:
 * - displays: List of displays.
 */
#}
<h3 class=\"views-ui-view-title\" data-drupal-selector=\"views-table-filter-text-source\">{{ view.label }}</h3>
<div class=\"views-ui-view-displays\">
  {% if displays %}
    {% trans %}
      Display
    {% plural displays %}
      Displays
    {% endtrans %}:
    <em>{{ displays|safe_join(', ') }}</em>
  {% else %}
    {{ 'None'|t }}
  {% endif %}
</div>
<div class=\"views-ui-view-machine-name\">
  {{ 'Machine name:'|t }}
  <span data-drupal-selector=\"views-table-filter-text-source\">{{ view.id }}</span>
</div>
", "core/themes/stable/templates/admin/views-ui-view-info.html.twig", "/var/www/html/poeiminisite/core/themes/stable/templates/admin/views-ui-view-info.html.twig");
    }
}
