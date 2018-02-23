<?php

/* core/themes/classy/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_5e453432771a49f7bdd1a5f7af7bf7c8913271d7366166abf87d985b23320d7f extends Twig_Template
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
        $__internal_9fc7408f938fdb6038527229257d5b1c3bb3ee6ac00017b715e3c29814f47bad = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc7408f938fdb6038527229257d5b1c3bb3ee6ac00017b715e3c29814f47bad->enter($__internal_9fc7408f938fdb6038527229257d5b1c3bb3ee6ac00017b715e3c29814f47bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/views/views-mini-pager.html.twig"));

        $tags = array("if" => 12, "trans" => 26);
        $filters = array("t" => 14, "without" => 18, "default" => 20);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('t', 'without', 'default'),
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

        // line 12
        if (($this->getAttribute(($context["items"] ?? null), "previous", array()) || $this->getAttribute(($context["items"] ?? null), "next", array()))) {
            // line 13
            echo "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 class=\"pager__heading visually-hidden\">";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->renderVar(t("Pagination")));
            echo "</h4>
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 16
            if ($this->getAttribute(($context["items"] ?? null), "previous", array())) {
                // line 17
                echo "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 18
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array()), "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->renderVar(t("Go to previous page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array()), "attributes", array()), "href", "title", "rel"), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 19
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->renderVar(t("Previous page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 20
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array(), "any", false, true), "text", array()), t("‹‹"))) : (t("‹‹"))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 24
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "current", array())) {
                // line 25
                echo "        <li class=\"pager__item is-active\">
          ";
                // line 26
                echo t("Page @items.current", array("@items.current" => $this->getAttribute(                // line 27
($context["items"] ?? null), "current", array()), ));
                // line 29
                echo "        </li>
      ";
            }
            // line 31
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "next", array())) {
                // line 32
                echo "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 33
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array()), "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->renderVar(t("Go to next page")));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array()), "attributes", array()), "href", "title", "rel"), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 34
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->renderVar(t("Next page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 35
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array(), "any", false, true), "text", array()), t("››"))) : (t("››"))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 39
            echo "    </ul>
  </nav>
";
        }
        
        $__internal_9fc7408f938fdb6038527229257d5b1c3bb3ee6ac00017b715e3c29814f47bad->leave($__internal_9fc7408f938fdb6038527229257d5b1c3bb3ee6ac00017b715e3c29814f47bad_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  111 => 35,  107 => 34,  99 => 33,  96 => 32,  93 => 31,  89 => 29,  87 => 27,  86 => 26,  83 => 25,  80 => 24,  73 => 20,  69 => 19,  61 => 18,  58 => 17,  56 => 16,  51 => 14,  48 => 13,  46 => 12,);
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
 * Theme override for a views mini-pager.
 *
 * Available variables:
 * - items: List of pager items.
 *
 * @see template_preprocess_views_mini_pager()
 */
#}
{% if items.previous or items.next %}
  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 class=\"pager__heading visually-hidden\">{{ 'Pagination'|t }}</h4>
    <ul class=\"pager__items js-pager__items\">
      {% if items.previous %}
        <li class=\"pager__item pager__item--previous\">
          <a href=\"{{ items.previous.href }}\" title=\"{{ 'Go to previous page'|t }}\" rel=\"prev\"{{ items.previous.attributes|without('href', 'title', 'rel') }}>
            <span class=\"visually-hidden\">{{ 'Previous page'|t }}</span>
            <span aria-hidden=\"true\">{{ items.previous.text|default('‹‹'|t) }}</span>
          </a>
        </li>
      {% endif %}
      {% if items.current %}
        <li class=\"pager__item is-active\">
          {% trans %}
            Page {{ items.current }}
          {% endtrans %}
        </li>
      {% endif %}
      {% if items.next %}
        <li class=\"pager__item pager__item--next\">
          <a href=\"{{ items.next.href }}\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\"{{ items.next.attributes|without('href', 'title', 'rel') }}>
            <span class=\"visually-hidden\">{{ 'Next page'|t }}</span>
            <span aria-hidden=\"true\">{{ items.next.text|default('››'|t) }}</span>
          </a>
        </li>
      {% endif %}
    </ul>
  </nav>
{% endif %}
", "core/themes/classy/templates/views/views-mini-pager.html.twig", "/var/www/html/poeiminisite/core/themes/classy/templates/views/views-mini-pager.html.twig");
    }
}
