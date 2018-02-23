<?php

/* core/themes/stable/templates/admin/views-ui-display-tab-bucket.html.twig */
class __TwigTemplate_dda85959599ab2fad9cc51cb16401b9dea7ed3adac3c23e5fd6180a27b76ea7e extends Twig_Template
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
        $__internal_44cf068b9f9daa6f12804e08f9e4f4a6a4d2ce4aae326a9c6e3d13b3e36a1a7b = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cf068b9f9daa6f12804e08f9e4f4a6a4d2ce4aae326a9c6e3d13b3e36a1a7b->enter($__internal_44cf068b9f9daa6f12804e08f9e4f4a6a4d2ce4aae326a9c6e3d13b3e36a1a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/views-ui-display-tab-bucket.html.twig"));

        $tags = array("set" => 19, "if" => 26);
        $filters = array("clean_class" => 21);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 19
        $context["classes"] = array(0 => "views-ui-display-tab-bucket", 1 => ((        // line 21
($context["name"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass(($context["name"] ?? null))) : ("")), 2 => ((        // line 22
($context["overridden"] ?? null)) ? ("overridden") : ("")));
        // line 25
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 26
        if (($context["title"] ?? null)) {
            // line 27
            echo "<h3 class=\"views-ui-display-tab-bucket__title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h3>";
        }
        // line 29
        echo "  ";
        if (($context["actions"] ?? null)) {
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["actions"] ?? null), "html", null, true));
        }
        // line 32
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
</div>
";
        
        $__internal_44cf068b9f9daa6f12804e08f9e4f4a6a4d2ce4aae326a9c6e3d13b3e36a1a7b->leave($__internal_44cf068b9f9daa6f12804e08f9e4f4a6a4d2ce4aae326a9c6e3d13b3e36a1a7b_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/views-ui-display-tab-bucket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 32,  65 => 30,  62 => 29,  57 => 27,  55 => 26,  50 => 25,  48 => 22,  47 => 21,  46 => 19,);
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
 * Theme override for each \"box\" on the display query edit screen.
 *
 * Available variables:
 * - attributes: HTML attributes to apply to the container element.
 * - actions: Action links such as \"Add\", \"And/Or, Rearrange\" for the content.
 * - title: The title of the bucket, e.g. \"Fields\", \"Filter Criteria\", etc.
 * - content: Content items such as fields or settings in this container.
 * - name: The name of the bucket, e.g. \"Fields\", \"Filter Criteria\", etc.
 * - overridden: A boolean indicating the setting has been overridden from the
 *   default.
 *
 * @see template_preprocess_views_ui_display_tab_bucket()
 */
#}
{%
  set classes = [
    'views-ui-display-tab-bucket',
    name ? name|clean_class,
    overridden ? 'overridden',
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {% if title -%}
    <h3 class=\"views-ui-display-tab-bucket__title\">{{ title }}</h3>
  {%- endif %}
  {% if actions -%}
    {{ actions }}
  {%- endif %}
  {{ content }}
</div>
", "core/themes/stable/templates/admin/views-ui-display-tab-bucket.html.twig", "/var/www/html/poeiminisite/core/themes/stable/templates/admin/views-ui-display-tab-bucket.html.twig");
    }
}
