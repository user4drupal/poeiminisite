<?php

/* modules/contrib/colorbox/templates/colorbox-formatter.html.twig */
class __TwigTemplate_bf461e37f3b535dfef220d978ab86a0f8e645a927d55dfdef77e087561de1517 extends Twig_Template
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
        $__internal_7a066fcef7b94ec6e6f4adf2724748b396bc9a8dc80bfe18b6ab59ec7844f309 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a066fcef7b94ec6e6f4adf2724748b396bc9a8dc80bfe18b6ab59ec7844f309->enter($__internal_7a066fcef7b94ec6e6f4adf2724748b396bc9a8dc80bfe18b6ab59ec7844f309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/colorbox/templates/colorbox-formatter.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 16
        echo "<a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["image"] ?? null), "html", null, true));
        echo "</a>
";
        
        $__internal_7a066fcef7b94ec6e6f4adf2724748b396bc9a8dc80bfe18b6ab59ec7844f309->leave($__internal_7a066fcef7b94ec6e6f4adf2724748b396bc9a8dc80bfe18b6ab59ec7844f309_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/colorbox/templates/colorbox-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 16,);
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
 * Default theme implementation to display a formatted colorbox image field.
 *
 * Available variables:
 * - image: A collection of image data.
 * - url: An URL the image can be linked to.
 * - attributes: Link attributes.
 *
 * @see template_preprocess_colorbox_formatter()
 *
 * @ingroup themeable
 */
#}
<a href=\"{{ url }}\"{{ attributes }}>{{ image }}</a>
", "modules/contrib/colorbox/templates/colorbox-formatter.html.twig", "/var/www/html/poeiminisite/modules/contrib/colorbox/templates/colorbox-formatter.html.twig");
    }
}
