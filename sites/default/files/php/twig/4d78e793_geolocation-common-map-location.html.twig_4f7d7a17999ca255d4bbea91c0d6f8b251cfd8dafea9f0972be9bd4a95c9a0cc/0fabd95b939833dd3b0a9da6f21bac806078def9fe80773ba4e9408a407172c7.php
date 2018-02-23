<?php

/* modules/contrib/geolocation/templates/geolocation-common-map-location.html.twig */
class __TwigTemplate_016c79fb743e8d93a1d8d09a802261721ebbbae30482c2e3319c417d94ca5cd2 extends Twig_Template
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
        $__internal_82ca5beb927eca31fe835610d24429b6c7e764e8dc20dd1ce9829f33a9d2e1f2 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ca5beb927eca31fe835610d24429b6c7e764e8dc20dd1ce9829f33a9d2e1f2->enter($__internal_82ca5beb927eca31fe835610d24429b6c7e764e8dc20dd1ce9829f33a9d2e1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/geolocation/templates/geolocation-common-map-location.html.twig"));

        $tags = array("if" => 10);
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

        // line 10
        echo "<div class=\"geolocation\" data-lat=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["position"] ?? null), "lat", array()), "html", null, true));
        echo "\" data-lng=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["position"] ?? null), "lng", array()), "html", null, true));
        echo "\" ";
        if ( !twig_test_empty(($context["icon"] ?? null))) {
            echo " data-icon=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["icon"] ?? null), "html", null, true));
            echo "\" ";
        }
        echo " ";
        if ( !twig_test_empty(($context["location_id"] ?? null))) {
            echo " data-location-id=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["location_id"] ?? null), "html", null, true));
            echo "\" ";
        }
        echo ">
    <h2 class=\"location-title\">";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h2>
    <div class=\"location-content\">";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "</div>
</div>
";
        
        $__internal_82ca5beb927eca31fe835610d24429b6c7e764e8dc20dd1ce9829f33a9d2e1f2->leave($__internal_82ca5beb927eca31fe835610d24429b6c7e764e8dc20dd1ce9829f33a9d2e1f2_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/geolocation/templates/geolocation-common-map-location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  65 => 11,  46 => 10,);
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
  When overriding this template, make sure to preserve
  - CSS-classes
  - parent - children hierarchy
  - data-lng and data-lat attributes
  or the attached Geolocation Javascript will fail.

  Changing the HTML tags, adding classes or adding content around or within the existing structure is no problem.
#}
<div class=\"geolocation\" data-lat=\"{{ position.lat }}\" data-lng=\"{{ position.lng }}\" {% if icon is not empty %} data-icon=\"{{ icon }}\" {% endif %} {% if location_id is not empty %} data-location-id=\"{{ location_id }}\" {% endif %}>
    <h2 class=\"location-title\">{{ title }}</h2>
    <div class=\"location-content\">{{ content }}</div>
</div>
", "modules/contrib/geolocation/templates/geolocation-common-map-location.html.twig", "/var/www/html/poeiminisite/modules/contrib/geolocation/templates/geolocation-common-map-location.html.twig");
    }
}
