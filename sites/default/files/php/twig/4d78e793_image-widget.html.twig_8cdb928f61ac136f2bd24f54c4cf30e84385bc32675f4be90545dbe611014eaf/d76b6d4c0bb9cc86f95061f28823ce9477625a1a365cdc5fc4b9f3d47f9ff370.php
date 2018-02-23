<?php

/* core/themes/classy/templates/content-edit/image-widget.html.twig */
class __TwigTemplate_7de8a44ee52afe361b22379bd813ca906f7329604aa3e5cc66196fb880fdac39 extends Twig_Template
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
        $__internal_82b3fe0515eb69343d386ab3c9c28c141104c19395ba9f8e7f8b4d61c7f1ad8e = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b3fe0515eb69343d386ab3c9c28c141104c19395ba9f8e7f8b4d61c7f1ad8e->enter($__internal_82b3fe0515eb69343d386ab3c9c28c141104c19395ba9f8e7f8b4d61c7f1ad8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/content-edit/image-widget.html.twig"));

        $tags = array("if" => 15);
        $filters = array("without" => 22);
        $functions = array("attach_library" => 13);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('without'),
                array('attach_library')
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->attachLibrary("classy/image-widget"), "html", null, true));
        echo "
<div";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 15
        if ($this->getAttribute(($context["data"] ?? null), "preview", array())) {
            // line 16
            echo "    <div class=\"image-preview\">
      ";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["data"] ?? null), "preview", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 20
        echo "  <div class=\"image-widget-data\">
    ";
        // line 22
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, twig_without(($context["data"] ?? null), "preview"), "html", null, true));
        echo "
  </div>
</div>
";
        
        $__internal_82b3fe0515eb69343d386ab3c9c28c141104c19395ba9f8e7f8b4d61c7f1ad8e->leave($__internal_82b3fe0515eb69343d386ab3c9c28c141104c19395ba9f8e7f8b4d61c7f1ad8e_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/image-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  65 => 20,  59 => 17,  56 => 16,  54 => 15,  50 => 14,  46 => 13,);
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
 * Theme override for an image field widget.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - data: Render elements of the image widget.
 *
 * @see template_preprocess_image_widget()
 */
#}
{{ attach_library('classy/image-widget') }}
<div{{ attributes }}>
  {% if data.preview %}
    <div class=\"image-preview\">
      {{ data.preview }}
    </div>
  {% endif %}
  <div class=\"image-widget-data\">
    {# Render widget data without the image preview that was output already. #}
    {{ data|without('preview') }}
  </div>
</div>
", "core/themes/classy/templates/content-edit/image-widget.html.twig", "/var/www/html/poeiminisite/core/themes/classy/templates/content-edit/image-widget.html.twig");
    }
}
