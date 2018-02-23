<?php

/* modules/address/templates/address-plain.html.twig */
class __TwigTemplate_58fdbdadd7d1603e9e83e3c2a826891db165f29db51e98bee1cdd9ec58ade571 extends Twig_Template
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
        $__internal_8c6a293e3b5206f7f95521ff0cb1c82366432f9bcdb4d2d00a034efa9391ded4 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6a293e3b5206f7f95521ff0cb1c82366432f9bcdb4d2d00a034efa9391ded4->enter($__internal_8c6a293e3b5206f7f95521ff0cb1c82366432f9bcdb4d2d00a034efa9391ded4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/address/templates/address-plain.html.twig"));

        $tags = array("if" => 36);
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

        // line 35
        echo "<p class=\"address\" translate=\"no\">
  ";
        // line 36
        if ((($context["given_name"] ?? null) || ($context["family_name"] ?? null))) {
            // line 37
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["given_name"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["family_name"] ?? null), "html", null, true));
            echo " <br>
  ";
        }
        // line 39
        echo "  ";
        if (($context["organization"] ?? null)) {
            // line 40
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["organization"] ?? null), "html", null, true));
            echo " <br>
  ";
        }
        // line 42
        echo "  ";
        if (($context["address_line1"] ?? null)) {
            // line 43
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["address_line1"] ?? null), "html", null, true));
            echo " <br>
  ";
        }
        // line 45
        echo "  ";
        if (($context["address_line2"] ?? null)) {
            // line 46
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["address_line2"] ?? null), "html", null, true));
            echo " <br>
  ";
        }
        // line 48
        echo "  ";
        if ($this->getAttribute(($context["dependent_locality"] ?? null), "code", array())) {
            // line 49
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["dependent_locality"] ?? null), "code", array()), "html", null, true));
            echo " <br>
  ";
        }
        // line 51
        echo "  ";
        if ((($this->getAttribute(($context["locality"] ?? null), "code", array()) || ($context["postal_code"] ?? null)) || $this->getAttribute(($context["administrative_area"] ?? null), "code", array()))) {
            // line 52
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["locality"] ?? null), "code", array()), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["postal_code"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["administrative_area"] ?? null), "code", array()), "html", null, true));
            echo " <br>
  ";
        }
        // line 54
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["country"] ?? null), "name", array()), "html", null, true));
        echo "
</p>
";
        
        $__internal_8c6a293e3b5206f7f95521ff0cb1c82366432f9bcdb4d2d00a034efa9391ded4->leave($__internal_8c6a293e3b5206f7f95521ff0cb1c82366432f9bcdb4d2d00a034efa9391ded4_prof);

    }

    public function getTemplateName()
    {
        return "modules/address/templates/address-plain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 54,  98 => 52,  95 => 51,  89 => 49,  86 => 48,  80 => 46,  77 => 45,  71 => 43,  68 => 42,  62 => 40,  59 => 39,  51 => 37,  49 => 36,  46 => 35,);
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
 * Default template for the 'plain' address formatter.
 *
 * Available variables:
 *   - given_name: Given name.
 *   - additional_name: Additional name.
 *   - family_name: Family name.
 *   - organization: Organization.
 *   - address_line1: First address line.
 *   - address_line2: Second address line.
 *   - postal_code: Postal code.
 *   - sorting_code: Sorting code.
 *   - dependent_locality: The dependent locality.
 *     - dependent_locality.code: Dependent locality code.
 *     - dependent_locality.name: Dependent locality name.
 *   - locality: The locality subdivision.
 *     - locality.code: Locality code.
 *     - locality.name: Locality name.
 *   - administrative_area: The administrative area subdivision.
 *     - administrative_area.code: Administrative area code.
 *     - administrative_area.name: Administrative area name.
 *   - country: The country.
 *     - country.code: Country code.
 *     - country.name: Country name.
 *
 * if a subdivision (dependent_locality, locality, administrative_area) was
 * entered, the array will always have a code. If it's a predefined subdivision,
 * it will also have a name. The code is always prefered.
 *
 * @ingroup themeable
 */
#}
<p class=\"address\" translate=\"no\">
  {% if given_name or family_name %}
    {{ given_name }} {{ family_name }} <br>
  {% endif %}
  {% if organization %}
    {{ organization }} <br>
  {% endif %}
  {% if address_line1 %}
    {{ address_line1 }} <br>
  {% endif %}
  {% if address_line2 %}
    {{ address_line2 }} <br>
  {% endif %}
  {% if dependent_locality.code %}
    {{ dependent_locality.code }} <br>
  {% endif %}
  {% if locality.code or postal_code or administrative_area.code %}
    {{ locality.code }} {{ postal_code }} {{ administrative_area.code }} <br>
  {% endif %}
  {{ country.name }}
</p>
", "modules/address/templates/address-plain.html.twig", "/var/www/html/poeiminisite/modules/address/templates/address-plain.html.twig");
    }
}
