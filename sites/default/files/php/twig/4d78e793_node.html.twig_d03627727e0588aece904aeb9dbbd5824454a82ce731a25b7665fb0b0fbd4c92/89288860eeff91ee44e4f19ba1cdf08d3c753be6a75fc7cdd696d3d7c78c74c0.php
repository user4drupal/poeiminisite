<?php

/* themes/bootstrap_business/templates/node.html.twig */
class __TwigTemplate_38f79630ab231cbbef08b0b32802b939b00a9a958307c07344c8ce6e210accd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e31d02d10c80843c1cb0006ffe14f37406f6d780ab9fa161eb7dbe7249d961c = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e31d02d10c80843c1cb0006ffe14f37406f6d780ab9fa161eb7dbe7249d961c->enter($__internal_8e31d02d10c80843c1cb0006ffe14f37406f6d780ab9fa161eb7dbe7249d961c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap_business/templates/node.html.twig"));

        $tags = array("set" => 65, "if" => 79, "block" => 94);
        $filters = array("clean_class" => 67, "without" => 95);
        $functions = array("attach_library" => 75);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 'without'),
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

        // line 65
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 67
($context["node"] ?? null), "bundle", array()))), 2 => (($this->getAttribute(        // line 68
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 69
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 70
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 6 => "clearfix");
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->attachLibrary("classy/node"), "html", null, true));
        echo "
<article";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    <header>
      ";
        // line 78
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
      ";
        // line 79
        if ( !($context["page"] ?? null)) {
            // line 80
            echo "        <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title title"), "method"), "html", null, true));
            echo ">
          <a href=\"";
            // line 81
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
        </h2>
      ";
        }
        // line 84
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
      ";
        // line 85
        if (($context["display_submitted"] ?? null)) {
            // line 86
            echo "        <div class=\"meta submitted\">
          ";
            // line 87
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
          <span class=\"glyphicon glyphicon-calendar\"></span> ";
            // line 88
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 91
        echo "    </header>

    <div";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true));
        echo ">
      ";
        // line 94
        $this->displayBlock('content', $context, $blocks);
        // line 97
        echo "    </div>

    ";
        // line 99
        if ($this->getAttribute(($context["content"] ?? null), "links", array())) {
            // line 100
            echo "      <footer class=\"link-wrapper\">
        ";
            // line 101
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "links", array()), "html", null, true));
            echo "
      </footer>
    ";
        }
        // line 104
        echo "</article>";
        
        $__internal_8e31d02d10c80843c1cb0006ffe14f37406f6d780ab9fa161eb7dbe7249d961c->leave($__internal_8e31d02d10c80843c1cb0006ffe14f37406f6d780ab9fa161eb7dbe7249d961c_prof);

    }

    // line 94
    public function block_content($context, array $blocks = array())
    {
        $__internal_62b7d843ae762bfca061fd563f70b8d28c20843a7bb75145b4409d26731044e6 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b7d843ae762bfca061fd563f70b8d28c20843a7bb75145b4409d26731044e6->enter($__internal_62b7d843ae762bfca061fd563f70b8d28c20843a7bb75145b4409d26731044e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 95
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\twig_extender\TwigExtenderService')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "links"), "html", null, true));
        echo "
      ";
        
        $__internal_62b7d843ae762bfca061fd563f70b8d28c20843a7bb75145b4409d26731044e6->leave($__internal_62b7d843ae762bfca061fd563f70b8d28c20843a7bb75145b4409d26731044e6_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap_business/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 95,  134 => 94,  127 => 104,  121 => 101,  118 => 100,  116 => 99,  112 => 97,  110 => 94,  106 => 93,  102 => 91,  96 => 88,  92 => 87,  89 => 86,  87 => 85,  82 => 84,  74 => 81,  69 => 80,  67 => 79,  63 => 78,  58 => 76,  54 => 75,  52 => 71,  51 => 70,  50 => 69,  49 => 68,  48 => 67,  47 => 65,);
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
 * Bootstrap Business's theme implementation to display a node.
 *
 * Available variables:
 * - node: Full node entity.
 *   - id: The node ID.
 *   - bundle: The type of the node, for example, \"page\" or \"article\".
 *   - authorid: The user ID of the node author.
 *   - createdtime: Time the node was published formatted in Unix timestamp.
 *   - changedtime: Time the node was changed formatted in Unix timestamp.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}
{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
    'clearfix',
  ]
%}
{{ attach_library('classy/node') }}
<article{{ attributes.addClass(classes) }}>
    <header>
      {{ title_prefix }}
      {% if not page %}
        <h2{{ title_attributes.addClass('node__title title') }}>
          <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
        </h2>
      {% endif %}
      {{ title_suffix }}
      {% if display_submitted %}
        <div class=\"meta submitted\">
          {{ author_picture }}
          <span class=\"glyphicon glyphicon-calendar\"></span> {{ date }}
        </div>
      {% endif %}
    </header>

    <div{{ content_attributes.addClass('node__content', 'clearfix') }}>
      {% block content %}
        {{ content|without('links') }}
      {% endblock %}
    </div>

    {% if content.links %}
      <footer class=\"link-wrapper\">
        {{ content.links }}
      </footer>
    {% endif %}
</article>", "themes/bootstrap_business/templates/node.html.twig", "/var/www/html/poeiminisite/themes/bootstrap_business/templates/node.html.twig");
    }
}
