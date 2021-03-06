<?php

/* modules/contrib/geolocation/templates/geolocation-map-formatter.html.twig */
class __TwigTemplate_e122ee9ba31253dc04586176f4992d7986c95bfb1bf53e1cde4b7dc0013f3cd1 extends Twig_Template
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
        $__internal_afe6d9bb8dc1968d426c7a5fa867e4449f55a1cc355a2f3b5a3d13618fdae571 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe6d9bb8dc1968d426c7a5fa867e4449f55a1cc355a2f3b5a3d13618fdae571->enter($__internal_afe6d9bb8dc1968d426c7a5fa867e4449f55a1cc355a2f3b5a3d13618fdae571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/geolocation/templates/geolocation-map-formatter.html.twig"));

        $tags = array("if" => 15, "for" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
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
        echo "<div id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["uniqueid"] ?? null), "html", null, true));
        echo "\" class=\"geolocation-formatter-map-wrapper\" ";
        if ( !twig_test_empty(($context["latitude"] ?? null))) {
            echo " data-map-lat=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["latitude"] ?? null), "html", null, true));
            echo "\" ";
        }
        echo " ";
        if ( !twig_test_empty(($context["longitude"] ?? null))) {
            echo " data-map-lng=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["longitude"] ?? null), "html", null, true));
            echo "\" ";
        }
        echo ">
  <div class=\"geolocation-google-map\"></div>
  ";
        // line 17
        if ( !twig_test_empty(($context["locations"] ?? null))) {
            // line 18
            echo "    <div class=\"geolocation-common-map-locations\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 20
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $context["location"], "html", null, true));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    </div>
  ";
        }
        // line 24
        echo "</div>
";
        
        $__internal_afe6d9bb8dc1968d426c7a5fa867e4449f55a1cc355a2f3b5a3d13618fdae571->leave($__internal_afe6d9bb8dc1968d426c7a5fa867e4449f55a1cc355a2f3b5a3d13618fdae571_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/geolocation/templates/geolocation-map-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  82 => 22,  73 => 20,  69 => 19,  66 => 18,  64 => 17,  46 => 15,);
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
<div id=\"{{ uniqueid }}\" class=\"geolocation-formatter-map-wrapper\" {% if latitude is not empty %} data-map-lat=\"{{ latitude }}\" {% endif %} {% if longitude is not empty %} data-map-lng=\"{{ longitude }}\" {% endif %}>
  <div class=\"geolocation-google-map\"></div>
  {% if locations is not empty %}
    <div class=\"geolocation-common-map-locations\">
        {%  for location in locations %}
            {{ location }}
        {% endfor %}
    </div>
  {% endif %}
</div>
", "modules/contrib/geolocation/templates/geolocation-map-formatter.html.twig", "/var/www/html/poeiminisite/modules/contrib/geolocation/templates/geolocation-map-formatter.html.twig");
    }
}
