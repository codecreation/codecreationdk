<?php

/* themes/lapurd/templates/views/views-view-unformatted--hightlight-detail--block-1.html.twig */
class __TwigTemplate_327384c4d41333f61e09d03ed3e196dc045e5681767c4e2d5a587bc7812bc5d2 extends Twig_Template
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
        $tags = array("if" => 21, "for" => 26, "set" => 28);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 20
        echo "
";
        // line 21
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 22
            echo "  <h3>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
";
        }
        // line 24
        echo "
<div id=\"thumbslider-container\">
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 27
            echo "  ";
            // line 28
            $context["row_classes"] = array(0 => ((            // line 29
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")));
            // line 32
            echo "  <li";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => (isset($context["row_classes"]) ? $context["row_classes"] : null)), "method"), "html", null, true));
            echo ">
  \t";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/lapurd/templates/views/views-view-unformatted--hightlight-detail--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 36,  72 => 33,  67 => 32,  65 => 29,  64 => 28,  62 => 27,  58 => 26,  54 => 24,  48 => 22,  46 => 21,  43 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a view of unformatted rows.*/
/*  **/
/*  * Available variables:*/
/*  * - title: The title of this group of rows. May be empty.*/
/*  * - rows: A list of the view's row items.*/
/*  *   - attributes: The row's HTML attributes.*/
/*  *   - content: The row's content.*/
/*  * - view: The view object.*/
/*  * - default_row_class: A flag indicating whether default classes should be*/
/*  *   used on rows.*/
/*  **/
/*  * @see template_preprocess_views_view_unformatted()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* {% if title %}*/
/*   <h3>{{ title }}</h3>*/
/* {% endif %}*/
/* */
/* <div id="thumbslider-container">*/
/* {% for row in rows %}*/
/*   {%*/
/*     set row_classes = [*/
/*       default_row_class ? 'views-row',*/
/*     ]*/
/*   %}*/
/*   <li{{ row.attributes.addClass(row_classes) }}>*/
/*   	{{row.content}}*/
/*   </li>*/
/* {% endfor %}*/
/* </div>*/
