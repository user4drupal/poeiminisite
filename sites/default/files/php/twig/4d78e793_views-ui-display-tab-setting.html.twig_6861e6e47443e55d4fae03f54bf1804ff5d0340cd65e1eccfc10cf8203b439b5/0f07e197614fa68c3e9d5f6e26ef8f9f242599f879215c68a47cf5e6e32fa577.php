<?php

/* core/themes/stable/templates/admin/views-ui-display-tab-setting.html.twig */
class __TwigTemplate_a2da1c185ec8c6ca8c274c7d772a5d40a278e472cd2212670602f8696344e145 extends Twig_Template
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
        $__internal_ff19fa20a86c78b8d49bc7ec28aac5e85cb78a51895c52781815b45b0270b903 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff19fa20a86c78b8d49bc7ec28aac5e85cb78a51895c52781815b45b0270b903->enter($__internal_ff19fa20a86c78b8d49bc7ec28aac5e85cb78a51895c52781815b45b0270b903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/views-ui-display-tab-setting.html.twig"));

        $tags = array("set" => 20, "if" => 29);
        $filters = array("safe_join" => 33);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('safe_join'),
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

        // line 20
        $context["classes"] = array(0 => "views-display-setting", 1 => "clearfix", 2 => "views-ui-display-tab-setting", 3 => ((        // line 24
($context["defaulted"] ?? null)) ? ("defaulted") : ("")), 4 => ((        // line 25
($context["overridden"] ?? null)) ? ("overridden") : ("")));
        // line 28
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 29
        if (($context["description"] ?? null)) {
            // line 30
            echo "<span class=\"label\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true));
            echo "</span>";
        }
        // line 32
        echo "  ";
        if (($context["settings_links"] ?? null)) {
            // line 33
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->renderVar($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->safeJoin($this->env, ($context["settings_links"] ?? null), "<span class=\"label\">&nbsp;|&nbsp;</span>")));
            echo "
  ";
        }
        // line 35
        echo "</div>
";
        
        $__internal_ff19fa20a86c78b8d49bc7ec28aac5e85cb78a51895c52781815b45b0270b903->leave($__internal_ff19fa20a86c78b8d49bc7ec28aac5e85cb78a51895c52781815b45b0270b903_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/views-ui-display-tab-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 35,  65 => 33,  62 => 32,  57 => 30,  55 => 29,  50 => 28,  48 => 25,  47 => 24,  46 => 20,);
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
 * Theme override for Views UI display tab settings.
 *
 * Template for each row inside the \"boxes\" on the display query edit screen.
 *
 * Available variables:
 * - attributes: HTML attributes such as class for the container.
 * - description: The description or label for this setting.
 * - settings_links: A list of links for this setting.
 * - defaulted: A boolean indicating the setting is in its default state.
 * - overridden: A boolean indicating the setting has been overridden from the
 *   default.
 *
 * @see template_preprocess_views_ui_display_tab_setting()
 */
#}
{%
  set classes = [
    'views-display-setting',
    'clearfix',
    'views-ui-display-tab-setting',
    defaulted ? 'defaulted',
    overridden ? 'overridden',
]
%}
<div{{ attributes.addClass(classes) }}>
  {% if description -%}
    <span class=\"label\">{{ description }}</span>
  {%- endif %}
  {% if settings_links %}
    {{ settings_links|safe_join('<span class=\"label\">&nbsp;|&nbsp;</span>') }}
  {% endif %}
</div>
", "core/themes/stable/templates/admin/views-ui-display-tab-setting.html.twig", "/var/www/html/poeiminisite/core/themes/stable/templates/admin/views-ui-display-tab-setting.html.twig");
    }
}
