<?php

/* core/themes/classy/templates/content/taxonomy-term.html.twig */
class __TwigTemplate_a4f5f3225d67c5153f71a8e58d5db440b2d15c14360d22b756fe5af741ab509a extends Twig_Template
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
        $__internal_304bb7e6160176d8a14ab745c9794146c610682d46a199982e51cab67988984b = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_304bb7e6160176d8a14ab745c9794146c610682d46a199982e51cab67988984b->enter($__internal_304bb7e6160176d8a14ab745c9794146c610682d46a199982e51cab67988984b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/content/taxonomy-term.html.twig"));

        $tags = array("set" => 27, "if" => 34);
        $filters = array("clean_class" => 29);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 27
        $context["classes"] = array(0 => "taxonomy-term", 1 => ("vocabulary-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 29
($context["term"] ?? null), "bundle", array()))));
        // line 32
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "setAttribute", array(0 => "id", 1 => ("taxonomy-term-" . $this->getAttribute(($context["term"] ?? null), "id", array()))), "method"), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 34
        if ( !($context["page"] ?? null)) {
            // line 35
            echo "    <h2><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true));
            echo "</a></h2>
  ";
        }
        // line 37
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  <div class=\"content\">
    ";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  </div>
</div>
";
        
        $__internal_304bb7e6160176d8a14ab745c9794146c610682d46a199982e51cab67988984b->leave($__internal_304bb7e6160176d8a14ab745c9794146c610682d46a199982e51cab67988984b_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content/taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 39,  68 => 37,  60 => 35,  58 => 34,  54 => 33,  49 => 32,  47 => 29,  46 => 27,);
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
 * Theme override to display a taxonomy term.
 *
 * Available variables:
 * - url: URL of the current term.
 * - name: Name of the current term.
 * - content: Items for the content of the term (fields and description).
 *   Use 'content' to print them all, or print a subset such as
 *   'content.description'. Use the following code to exclude the
 *   printing of a given child element:
 *   @code
 *   {{ content|without('description') }}
 *   @endcode
 * - attributes: HTML attributes for the wrapper.
 * - page: Flag for the full page state.
 * - term: The taxonomy term entity, including:
 *   - id: The ID of the taxonomy term.
 *   - bundle: Machine name of the current vocabulary.
 * - view_mode: View mode, e.g. 'full', 'teaser', etc.
 *
 * @see template_preprocess_taxonomy_term()
 */
#}
{%
  set classes = [
    'taxonomy-term',
    'vocabulary-' ~ term.bundle|clean_class,
  ]
%}
<div{{ attributes.setAttribute('id', 'taxonomy-term-' ~ term.id).addClass(classes) }}>
  {{ title_prefix }}
  {% if not page %}
    <h2><a href=\"{{ url }}\">{{ name }}</a></h2>
  {% endif %}
  {{ title_suffix }}
  <div class=\"content\">
    {{ content }}
  </div>
</div>
", "core/themes/classy/templates/content/taxonomy-term.html.twig", "/var/www/html/poeiminisite/core/themes/classy/templates/content/taxonomy-term.html.twig");
    }
}
