<?php

/* themes/bootstrap_business/templates/block--system-menu-block.html.twig */
class __TwigTemplate_d156143e1bfd55b45cf6eda7547ee0bc12bdcc4ec258459e5b8f9b93920662f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/block/block--system-menu-block.html.twig", "themes/bootstrap_business/templates/block--system-menu-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/block/block--system-menu-block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e53be8ba911d3ba76ec03c8f7a8fe6e23c4d3ea7f736dc3d649a4db247bcc69a = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53be8ba911d3ba76ec03c8f7a8fe6e23c4d3ea7f736dc3d649a4db247bcc69a->enter($__internal_e53be8ba911d3ba76ec03c8f7a8fe6e23c4d3ea7f736dc3d649a4db247bcc69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap_business/templates/block--system-menu-block.html.twig"));

        $tags = array("set" => 10, "trans" => 17);
        $filters = array("clean_id" => 10);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'trans'),
                array('clean_id'),
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
        $context["show_anchor"] = ("show-" . \Drupal\Component\Utility\Html::getId($this->getAttribute(($context["attributes"] ?? null), "id", array())));
        // line 11
        $context["hide_anchor"] = ("hide-" . \Drupal\Component\Utility\Html::getId($this->getAttribute(($context["attributes"] ?? null), "id", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e53be8ba911d3ba76ec03c8f7a8fe6e23c4d3ea7f736dc3d649a4db247bcc69a->leave($__internal_e53be8ba911d3ba76ec03c8f7a8fe6e23c4d3ea7f736dc3d649a4db247bcc69a_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_11815dcc3eaeb24e587008d63df72a3ba9b95729c3512a9bb7f84e926a29c28c = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_11815dcc3eaeb24e587008d63df72a3ba9b95729c3512a9bb7f84e926a29c28c->enter($__internal_11815dcc3eaeb24e587008d63df72a3ba9b95729c3512a9bb7f84e926a29c28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
    ";
        // line 15
        echo "    <div class=\"menu-toggle-target menu-toggle-target-show\" id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["show_anchor"] ?? null), "html", null, true));
        echo "\"></div>
    <div class=\"menu-toggle-target\" id=\"";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["hide_anchor"] ?? null), "html", null, true));
        echo "\"></div>
    <a class=\"menu-toggle\" href=\"#";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["show_anchor"] ?? null), "html", null, true));
        echo "\">";
        echo t("Show &mdash; @configuration.label", array("@configuration.label" => $this->getAttribute(($context["configuration"] ?? null), "label", array()), ));
        echo "</a>
    <a class=\"menu-toggle menu-toggle--hide\" href=\"#";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["hide_anchor"] ?? null), "html", null, true));
        echo "\">";
        echo t("Hide &mdash; @configuration.label", array("@configuration.label" => $this->getAttribute(($context["configuration"] ?? null), "label", array()), ));
        echo "</a>
    ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  </div>
";
        
        $__internal_11815dcc3eaeb24e587008d63df72a3ba9b95729c3512a9bb7f84e926a29c28c->leave($__internal_11815dcc3eaeb24e587008d63df72a3ba9b95729c3512a9bb7f84e926a29c28c_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap_business/templates/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 19,  89 => 18,  83 => 17,  79 => 16,  74 => 15,  69 => 13,  63 => 12,  56 => 1,  54 => 11,  52 => 10,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@classy/block/block--system-menu-block.html.twig\" %}
{#
/**
 * @file
 * Bootstrap Business's theme implementation for a menu block.
 *
 * @ingroup themeable
 */
#}
{% set show_anchor = \"show-\" ~ attributes.id|clean_id %}
{% set hide_anchor = \"hide-\" ~ attributes.id|clean_id %}
{% block content %}
  <div{{ content_attributes.addClass('content') }}>
    {# When rendering a menu without label, render a menu toggle. #}
    <div class=\"menu-toggle-target menu-toggle-target-show\" id=\"{{ show_anchor }}\"></div>
    <div class=\"menu-toggle-target\" id=\"{{ hide_anchor }}\"></div>
    <a class=\"menu-toggle\" href=\"#{{ show_anchor }}\">{% trans %} Show &mdash; {{ configuration.label }}{% endtrans %}</a>
    <a class=\"menu-toggle menu-toggle--hide\" href=\"#{{ hide_anchor }}\">{% trans %} Hide &mdash; {{ configuration.label }}{% endtrans %}</a>
    {{ content }}
  </div>
{% endblock %}
", "themes/bootstrap_business/templates/block--system-menu-block.html.twig", "/var/www/html/poeiminisite/themes/bootstrap_business/templates/block--system-menu-block.html.twig");
    }
}
