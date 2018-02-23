<?php

/* core/themes/stable/templates/admin/views-ui-view-preview-section.html.twig */
class __TwigTemplate_87ec8a3537e0d9eec5ad2e405775c1a8e1232cf178ce00f702f3017ec270e7bd extends Twig_Template
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
        $__internal_e95ffb0e447a9cce8655844423fdac3729caa22ed7c4d22f71a3ef29b870025e = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95ffb0e447a9cce8655844423fdac3729caa22ed7c4d22f71a3ef29b870025e->enter($__internal_e95ffb0e447a9cce8655844423fdac3729caa22ed7c4d22f71a3ef29b870025e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/views-ui-view-preview-section.html.twig"));

        $tags = array("if" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 14
        echo "<h1 class=\"section-title\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h1>
";
        // line 15
        if (($context["links"] ?? null)) {
            // line 16
            echo "  <div class=\"contextual\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["links"] ?? null), "html", null, true));
            echo "</div>
";
        }
        // line 18
        echo "<div class=\"preview-section\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "</div>
";
        
        $__internal_e95ffb0e447a9cce8655844423fdac3729caa22ed7c4d22f71a3ef29b870025e->leave($__internal_e95ffb0e447a9cce8655844423fdac3729caa22ed7c4d22f71a3ef29b870025e_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/views-ui-view-preview-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  53 => 16,  51 => 15,  46 => 14,);
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
 * Theme override for a views UI preview section.
 *
 * Available variables:
 * - title: The human readable section title.
 * - links: A list of contextual links.
 * - content: The content for this section preview.
 *
 * @see template_preprocess_views_ui_view_preview_section()
 */
#}
<h1 class=\"section-title\">{{ title }}</h1>
{% if links %}
  <div class=\"contextual\">{{ links }}</div>
{% endif %}
<div class=\"preview-section\">{{ content }}</div>
", "core/themes/stable/templates/admin/views-ui-view-preview-section.html.twig", "/var/www/html/poeiminisite/core/themes/stable/templates/admin/views-ui-view-preview-section.html.twig");
    }
}
