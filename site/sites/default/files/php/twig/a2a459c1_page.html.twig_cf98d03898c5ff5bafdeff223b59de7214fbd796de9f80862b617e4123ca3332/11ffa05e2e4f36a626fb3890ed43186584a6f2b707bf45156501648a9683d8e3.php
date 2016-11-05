<?php

/* themes/lapurd/templates/page.html.twig */
class __TwigTemplate_3092660f0e3ead212e84681fea74cb9984d7ebe2b7cfa329a9aa20d2f45d85e7 extends Twig_Template
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
        $tags = array("if" => 3);
        $filters = array("raw" => 1, "t" => 11);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('raw', 't'),
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
        echo "<div id=\"page\" class=\"page\" ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["page_css"]) ? $context["page_css"] : null)));
        echo " >

  ";
        // line 3
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "show_skins_menu", array())) {
            // line 4
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "show_skins_menu", array())));
            echo "
  ";
        }
        // line 6
        echo "
  <a id=\"Top\"></a>
  <header id=\"header\">
    <div class=\"container\">
      ";
        // line 10
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 11
            echo "        <a id=\"logo\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
          <img src=\"";
            // line 12
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\"/>
        </a>
      ";
        }
        // line 15
        echo "
      ";
        // line 16
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 17
            echo "        <div class=\"name-and-slogan\">

          ";
            // line 20
            echo "          ";
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 21
                echo "            <strong class=\"site-name\">
              <a href=\"";
                // line 22
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
            </strong>
          ";
            } else {
                // line 25
                echo "            <h1 class=\"site-name\">
              <a href=\"";
                // line 26
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
            </h1>
          ";
            }
            // line 29
            echo "
          ";
            // line 30
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 31
                echo "            <div class=\"site-slogan\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>
          ";
            }
            // line 33
            echo "        </div>
      ";
        }
        // line 35
        echo "      <span class=\"btn-close\"></span>
      <button class=\"navbar-toggle\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
      </button>
      ";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "

    </div>
  </header>

  ";
        // line 46
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array())) {
            // line 47
            echo "    <section id=\"banner\">
      <div class=\"container-fluid\">
        ";
            // line 49
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array())) {
            // line 55
            echo "    <section id=\"featured\">
      <div class=\"container\">
        ";
            // line 57
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 61
        echo "
 

 ";
        // line 64
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 65
            echo "    <section id=\"hightlight\">
      <div class=\"container-fluid\">
        ";
            // line 67
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 71
        echo "
  <section id=\"main\">
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">

        <div id=\"main-content\" class=\"content col-lg-";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true));
        echo " col-md-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true));
        echo " col-sm-12 col-xs-12\">
          ";
        // line 78
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 79
            echo "              <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
                ";
            // line 80
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "
              </nav>
          ";
        }
        // line 83
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "

          ";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
          ";
        // line 86
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 87
            echo "            <h1>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
          ";
        }
        // line 89
        echo "          ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

          ";
        // line 91
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 92
            echo "              <ul class=\"action-links\">
                ";
            // line 93
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "
              </ul>
          ";
        }
        // line 96
        echo "          ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>


        ";
        // line 100
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 101
            echo "          <aside class=\"sidebar-first sidebar col-lg-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first_width", array()), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first_width", array()), "html", null, true));
            echo " col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 102
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 105
        echo "      </div>
    </div>
  </section>

  ";
        // line 109
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first", array())) {
            // line 110
            echo "    <section id=\"panel_first\">
      <div class=\"container-fluid\">
        ";
            // line 112
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 116
        echo "
  ";
        // line 117
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second", array())) {
            // line 118
            echo "    <section id=\"panel_second\">
      <div class=\"container\">
        ";
            // line 120
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 124
        echo "
  ";
        // line 125
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_third", array())) {
            // line 126
            echo "    <section id=\"panel_third\">
      <div class=\"container\">
        ";
            // line 128
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_third", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 132
        echo "

  ";
        // line 134
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 135
            echo "    <footer id=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 137
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
        // line 141
        echo "<a href=\"#\" class=\"btn-btt\">Back to top</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/lapurd/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 141,  342 => 137,  338 => 135,  336 => 134,  332 => 132,  325 => 128,  321 => 126,  319 => 125,  316 => 124,  309 => 120,  305 => 118,  303 => 117,  300 => 116,  293 => 112,  289 => 110,  287 => 109,  281 => 105,  275 => 102,  268 => 101,  266 => 100,  258 => 96,  252 => 93,  249 => 92,  247 => 91,  241 => 89,  235 => 87,  233 => 86,  229 => 85,  223 => 83,  217 => 80,  212 => 79,  210 => 78,  204 => 77,  196 => 71,  189 => 67,  185 => 65,  183 => 64,  178 => 61,  171 => 57,  167 => 55,  165 => 54,  162 => 53,  155 => 49,  151 => 47,  149 => 46,  141 => 41,  133 => 35,  129 => 33,  123 => 31,  121 => 30,  118 => 29,  108 => 26,  105 => 25,  95 => 22,  92 => 21,  89 => 20,  85 => 17,  83 => 16,  80 => 15,  72 => 12,  65 => 11,  63 => 10,  57 => 6,  51 => 4,  49 => 3,  43 => 1,);
    }
}
/* <div id="page" class="page" {{ page_css |raw }} >*/
/* */
/*   {% if page.show_skins_menu %}*/
/*     {{ page.show_skins_menu |raw }}*/
/*   {% endif %}*/
/* */
/*   <a id="Top"></a>*/
/*   <header id="header">*/
/*     <div class="container">*/
/*       {% if logo %}*/
/*         <a id="logo" href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">*/
/*           <img src="{{ logo }}" alt="{{ 'Home'|t }}"/>*/
/*         </a>*/
/*       {% endif %}*/
/* */
/*       {% if site_name or site_slogan %}*/
/*         <div class="name-and-slogan">*/
/* */
/*           {# Use h1 when the content title is empty #}*/
/*           {% if title %}*/
/*             <strong class="site-name">*/
/*               <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*             </strong>*/
/*           {% else %}*/
/*             <h1 class="site-name">*/
/*               <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*             </h1>*/
/*           {% endif %}*/
/* */
/*           {% if site_slogan %}*/
/*             <div class="site-slogan">{{ site_slogan }}</div>*/
/*           {% endif %}*/
/*         </div>*/
/*       {% endif %}*/
/*       <span class="btn-close"></span>*/
/*       <button class="navbar-toggle">*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*       </button>*/
/*       {{ page.header }}*/
/* */
/*     </div>*/
/*   </header>*/
/* */
/*   {% if page.banner %}*/
/*     <section id="banner">*/
/*       <div class="container-fluid">*/
/*         {{ page.banner }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if page.featured %}*/
/*     <section id="featured">*/
/*       <div class="container">*/
/*         {{ page.featured }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*  */
/* */
/*  {% if page.highlighted %}*/
/*     <section id="hightlight">*/
/*       <div class="container-fluid">*/
/*         {{ page.highlighted }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   <section id="main">*/
/*     <a id="main-content"></a>*/
/*     <div class="container">*/
/*       <div class="row">*/
/* */
/*         <div id="main-content" class="content col-lg-{{ page.main_content_width }} col-md-{{ page.main_content_width }} col-sm-12 col-xs-12">*/
/*           {% if tabs %}*/
/*               <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*                 {{ tabs }}*/
/*               </nav>*/
/*           {% endif %}*/
/*             {{ page.help }}*/
/* */
/*           {{ title_prefix }}*/
/*           {% if title %}*/
/*             <h1>{{ title }}</h1>*/
/*           {% endif %}*/
/*           {{ title_suffix }}*/
/* */
/*           {% if action_links %}*/
/*               <ul class="action-links">*/
/*                 {{ action_links }}*/
/*               </ul>*/
/*           {% endif %}*/
/*           {{ page.content }}*/
/*         </div>*/
/* */
/* */
/*         {% if page.sidebar_first %}*/
/*           <aside class="sidebar-first sidebar col-lg-{{ page.sidebar_first_width }} col-md-{{ page.sidebar_first_width }} col-sm-12 col-xs-12" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </section>*/
/* */
/*   {% if page.panel_first %}*/
/*     <section id="panel_first">*/
/*       <div class="container-fluid">*/
/*         {{ page.panel_first }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if page.panel_second %}*/
/*     <section id="panel_second">*/
/*       <div class="container">*/
/*         {{ page.panel_second }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if page.panel_third %}*/
/*     <section id="panel_third">*/
/*       <div class="container">*/
/*         {{ page.panel_third }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/* */
/*   {% if page.footer %}*/
/*     <footer id="footer" role="contentinfo">*/
/*       <div class="container">*/
/*         {{ page.footer }}*/
/*       </div>*/
/*     </footer>*/
/*   {% endif %}*/
/* <a href="#" class="btn-btt">Back to top</a>*/
/* </div>*/
/* */
