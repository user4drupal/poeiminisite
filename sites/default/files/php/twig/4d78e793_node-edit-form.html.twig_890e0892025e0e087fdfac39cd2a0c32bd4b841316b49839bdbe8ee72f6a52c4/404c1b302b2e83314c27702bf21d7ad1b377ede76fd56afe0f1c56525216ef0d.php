<?php

/* core/themes/classy/templates/content-edit/node-edit-form.html.twig */
class __TwigTemplate_26758d9b37c3636298e03ff2bbf8a84d8df8b80791f4fab683309537468dbc5f extends Twig_Template
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
        $__internal_6e140022ca5ccd873b9dd8708d3dd9cd78954cbf56e1fa7c8053f974b3efa4b4 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e140022ca5ccd873b9dd8708d3dd9cd78954cbf56e1fa7c8053f974b3efa4b4->enter($__internal_6e140022ca5ccd873b9dd8708d3dd9cd78954cbf56e1fa7c8053f974b3efa4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/content-edit/node-edit-form.html.twig"));

        $tags = array();
        $filters = array("without" => 20);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('without'),
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

        // line 18
        echo "<div class=\"layout-node-form clearfix\">
  <div class=\"layout-region layout-region-node-main\">
    ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, twig_without(($context["form"] ?? null), "advanced", "actions"), "html", null, true));
        echo "
  </div>
  <div class=\"layout-region layout-region-node-secondary\">
    ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "advanced", array()), "html", null, true));
        echo "
  </div>
  <div class=\"layout-region layout-region-node-footer\">
    ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "actions", array()), "html", null, true));
        echo "
  </div>
</div>
";
        
        $__internal_6e140022ca5ccd873b9dd8708d3dd9cd78954cbf56e1fa7c8053f974b3efa4b4->leave($__internal_6e140022ca5ccd873b9dd8708d3dd9cd78954cbf56e1fa7c8053f974b3efa4b4_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/node-edit-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 26,  56 => 23,  50 => 20,  46 => 18,);
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
 * Theme override for a node edit form.
 *
 * Two column template for the node add/edit form.
 *
 * This template will be used when a node edit form specifies 'node_edit_form'
 * as its #theme callback.  Otherwise, by default, node add/edit forms will be
 * themed by form.html.twig.
 *
 * Available variables:
 * - form: The node add/edit form.
 *
 * @see seven_form_node_form_alter()
 */
#}
<div class=\"layout-node-form clearfix\">
  <div class=\"layout-region layout-region-node-main\">
    {{ form|without('advanced', 'actions') }}
  </div>
  <div class=\"layout-region layout-region-node-secondary\">
    {{ form.advanced }}
  </div>
  <div class=\"layout-region layout-region-node-footer\">
    {{ form.actions }}
  </div>
</div>
", "core/themes/classy/templates/content-edit/node-edit-form.html.twig", "/var/www/html/poeiminisite/core/themes/classy/templates/content-edit/node-edit-form.html.twig");
    }
}
