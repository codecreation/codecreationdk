<?php

/* {# inline_template_start #}<div class="group-hightlight-detail">
  <div class="group-inner">
    <div class="views-field views-field-title">{{ title }}</div>
    <div class="views-field views-field-body">{{ body }}</div>
   <a href="{{ path }}" class="views-field views-field-view-node">Live Preview</a>
 </div>
</div> */
class __TwigTemplate_e183fea87efe51220cdf8cf3274bf45bb11f4006661efe980c644705024b55ec extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div class=\"group-hightlight-detail\">
  <div class=\"group-inner\">
    <div class=\"views-field views-field-title\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</div>
    <div class=\"views-field views-field-body\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "</div>
   <a href=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true));
        echo "\" class=\"views-field views-field-view-node\">Live Preview</a>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"group-hightlight-detail\">
  <div class=\"group-inner\">
    <div class=\"views-field views-field-title\">{{ title }}</div>
    <div class=\"views-field views-field-body\">{{ body }}</div>
   <a href=\"{{ path }}\" class=\"views-field views-field-view-node\">Live Preview</a>
 </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 5,  57 => 4,  53 => 3,  49 => 1,);
    }
}
/* {# inline_template_start #}<div class="group-hightlight-detail">*/
/*   <div class="group-inner">*/
/*     <div class="views-field views-field-title">{{ title }}</div>*/
/*     <div class="views-field views-field-body">{{ body }}</div>*/
/*    <a href="{{ path }}" class="views-field views-field-view-node">Live Preview</a>*/
/*  </div>*/
/* </div>*/
