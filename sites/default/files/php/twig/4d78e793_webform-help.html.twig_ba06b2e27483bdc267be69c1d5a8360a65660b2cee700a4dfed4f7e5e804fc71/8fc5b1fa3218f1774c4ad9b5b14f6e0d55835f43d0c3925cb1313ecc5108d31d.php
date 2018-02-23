<?php

/* modules/contrib/webform/templates/webform-help.html.twig */
class __TwigTemplate_f3241358f70b2a684f7599799f60e55213aa6428b4a34cad9942384d66049066 extends Twig_Template
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
        $__internal_c79a9dac73981bd8e5a80e748eb94d251d425844d4ebabdf1bda486441965bb7 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79a9dac73981bd8e5a80e748eb94d251d425844d4ebabdf1bda486441965bb7->enter($__internal_c79a9dac73981bd8e5a80e748eb94d251d425844d4ebabdf1bda486441965bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/webform/templates/webform-help.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array("attach_library" => 17);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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

        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->attachLibrary("webform/webform.help"), "html", null, true));
        echo "
";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["help"] ?? null), "html", null, true));
        echo "
";
        
        $__internal_c79a9dac73981bd8e5a80e748eb94d251d425844d4ebabdf1bda486441965bb7->leave($__internal_c79a9dac73981bd8e5a80e748eb94d251d425844d4ebabdf1bda486441965bb7_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  46 => 17,);
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
 * Theme implementation for webform help.
 *
 * Available variables
 * - title: Help title.
 * - content: Help content.
 * - youtube_id: YouTube video id.
 * - help: A render array content help title and content inside a details element.
 *
 * @see template_preprocess_webform_help()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('webform/webform.help') }}
{{ help }}
", "modules/contrib/webform/templates/webform-help.html.twig", "/var/www/html/poeiminisite/modules/contrib/webform/templates/webform-help.html.twig");
    }
}
