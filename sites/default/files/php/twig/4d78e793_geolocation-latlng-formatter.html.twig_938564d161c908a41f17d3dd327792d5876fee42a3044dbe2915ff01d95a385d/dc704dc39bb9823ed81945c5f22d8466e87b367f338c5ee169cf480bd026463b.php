<?php

/* modules/contrib/geolocation/templates/geolocation-latlng-formatter.html.twig */
class __TwigTemplate_d77b283191dbaf77df79d3883972c28ddf5984c5f5c27edbc778a1c1f6528455 extends Twig_Template
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
        $__internal_f5dc23b45008455914bdc75fa9163c15f9a4d26ea95c3883be7a2e51eb4f0b3b = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5dc23b45008455914bdc75fa9163c15f9a4d26ea95c3883be7a2e51eb4f0b3b->enter($__internal_f5dc23b45008455914bdc75fa9163c15f9a4d26ea95c3883be7a2e51eb4f0b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/geolocation/templates/geolocation-latlng-formatter.html.twig"));

        $tags = array("spaceless" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('spaceless'),
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

        // line 15
        ob_start();
        // line 16
        echo "  <span itemscope itemtype=\"http://schema.org/GeoCoordinates\">
    <meta itemprop=\"latitude\" content=\"";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["lat"] ?? null), "html", null, true));
        echo "\">
    <meta itemprop=\"longitude\" content=\"";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["lng"] ?? null), "html", null, true));
        echo "\">
    <span class=\"geolocation-latlng\">";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["lat"] ?? null), "html", null, true));
        echo ", ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["lng"] ?? null), "html", null, true));
        echo "</span>
  </span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f5dc23b45008455914bdc75fa9163c15f9a4d26ea95c3883be7a2e51eb4f0b3b->leave($__internal_f5dc23b45008455914bdc75fa9163c15f9a4d26ea95c3883be7a2e51eb4f0b3b_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/geolocation/templates/geolocation-latlng-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  55 => 18,  51 => 17,  48 => 16,  46 => 15,);
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
 * Default microdata theme implementation for a geolocation with latitude, longitude.
 *
 * Available variables:
 * - lat: The latitude value.
 * - lng: The longitude value.
 *
 * @see template_preprocess()
 *
 * @ingroup themeable
 */
#}
{% spaceless %}
  <span itemscope itemtype=\"http://schema.org/GeoCoordinates\">
    <meta itemprop=\"latitude\" content=\"{{ lat }}\">
    <meta itemprop=\"longitude\" content=\"{{ lng }}\">
    <span class=\"geolocation-latlng\">{{ lat }}, {{ lng }}</span>
  </span>
{% endspaceless %}
", "modules/contrib/geolocation/templates/geolocation-latlng-formatter.html.twig", "/var/www/html/poeiminisite/modules/contrib/geolocation/templates/geolocation-latlng-formatter.html.twig");
    }
}
