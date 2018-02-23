<?php

/* core/themes/classy/templates/form/datetime-form.html.twig */
class __TwigTemplate_cc87defc69d62ee4b8417b3f09ff76a00e462fd83a0cd6593cf54039447ca7f3 extends Twig_Template
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
        $__internal_8ff264baa4219d20f8d907cac91809bf328bc26d6690564c8167cce7f561ea20 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff264baa4219d20f8d907cac91809bf328bc26d6690564c8167cce7f561ea20->enter($__internal_8ff264baa4219d20f8d907cac91809bf328bc26d6690564c8167cce7f561ea20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/datetime-form.html.twig"));

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

        // line 13
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "container-inline"), "method"), "html", null, true));
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
</div>
";
        
        $__internal_8ff264baa4219d20f8d907cac91809bf328bc26d6690564c8167cce7f561ea20->leave($__internal_8ff264baa4219d20f8d907cac91809bf328bc26d6690564c8167cce7f561ea20_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/datetime-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  46 => 13,);
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
 * Theme override of a datetime form element.
 *
 * Available variables:
 * - attributes: HTML attributes for the datetime form element.
 * - content: The datelist form element to be output.
 *
 * @see template_preprocess_datetime_form()
 */
#}
<div{{ attributes.addClass('container-inline') }}>
  {{ content }}
</div>
", "core/themes/classy/templates/form/datetime-form.html.twig", "/var/www/html/poeiminisite/core/themes/classy/templates/form/datetime-form.html.twig");
    }
}
