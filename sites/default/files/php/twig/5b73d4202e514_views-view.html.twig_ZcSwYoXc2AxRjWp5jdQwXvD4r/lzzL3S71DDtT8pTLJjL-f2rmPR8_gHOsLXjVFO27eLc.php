<?php

/* themes/rms/templates/views-view.html.twig */
class __TwigTemplate_371538cd9006372dee96bf8024c24851233e20cb157df40712949471a68df07f extends Twig_Template
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
        $tags = array("if" => 50);
        $filters = array("render" => 50);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('render'),
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

        // line 28
        echo "


<div class=\"page-heading\">
  <div class=\"container\">
    <ul class=\"breadcrumbs\">
      <li class=\"home-breadcrumb\">
        <a href=\"insurance\">
          <!-- <img class=\"icon\" src=\"";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/_assets/images/icon-home.svg\"/> -->
          <span class=\"default-title\">Insurance Records</span>
          <div class=\"page-desc\">
            <p></p>
          </div>
        </a>
      </li>
    </ul>
  </div>
</div>
<section class=\"settings\">
  <div class=\"container\">
    <div class=\"component\">
      <div class=\"search-options\">
        ";
        // line 50
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["exposed"] ?? null))) {
            // line 51
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
        ";
        }
        // line 53
        echo "      </div>
      <div class=\"organize-fields-btn\">
        <div class=\"btn secondary dropdown-main-btn\" title=\"organize\">
          <div class=\"pop-counter hidden\"><span></span></div>
          Organize Fields
        </div>
        <div class=\"dropdown-body\">
          <img class=\"icon close\" src=\"";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/_assets/images/icon-close.svg\"/>
          <h3 class=\"dropdown-title\">Organize Fields</h3>
          <div class=\"search-container\">
            <input type=\"text\" class=\"field-search\" placeholder=\"Find a Field\"/>
            <button value=\"Apply\">
            </button>
          </div>
          <fieldset>
            <div class=\"field-list\">
            </div>
          </fieldset>
          <div class=\"dropdown-btns\">
            <a href=\"#\" class=\"btn reset third\">Reset</a>
            <a href=\"#\" class=\"btn apply\">Apply</a>
          </div>
        </div>
        <div class=\"tooltip\">
          <h3>Add/Remove Fields</h3>
          <p>Set field columns you would like to display.</p>
        </div>

        <div class=\"dimmer\"></div>
      </div>
      <div class=\"print-btn\">
        <div class=\"btn secondary with-icon dropdown-main-btn\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 31.148 29.201\">
            <defs>
              <style>
                .cls-1 {
                  fill: #007791;
                }
              </style>
            </defs>
            <g id=\"printer-\" transform=\"translate(0 -0.5)\">
              <g id=\"Group_540\" data-name=\"Group 540\" transform=\"translate(0 0.5)\">
                <path id=\"Path_82\" data-name=\"Path 82\" class=\"cls-1\" d=\"M4,14.393v5.84H19.574V10.5H4Zm1.947-1.947h11.68v1.947H5.947Zm0,3.893h11.68v1.947H5.947Z\" transform=\"translate(3.787 8.967)\"/>
                <path id=\"Path_83\" data-name=\"Path 83\" class=\"cls-1\" d=\"M19.574,6.34V.5H4v9.734H19.574Z\" transform=\"translate(3.787 -0.5)\"/>
                <path id=\"Path_84\" data-name=\"Path 84\" class=\"cls-1\" d=\"M27.254,3.5H25.308V9.34H5.84V3.5H3.893A4.187,4.187,0,0,0,0,7.393v9.734a4.187,4.187,0,0,0,3.893,3.893H5.84V15.18H25.308v5.84h1.947a4.187,4.187,0,0,0,3.893-3.893V7.393A4.187,4.187,0,0,0,27.254,3.5Z\" transform=\"translate(0 2.34)\"/>
              </g>
            </g>
          </svg>
        </div>
        <div class=\"dropdown-body\">
          <img class=\"icon close\" src=\"";
        // line 103
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/_assets/images/icon-close.svg\"/>
          <h3 class=\"dropdown-title\">Print Records</h3>
          <div class=\"dropdown-btns\">
            <a href=\"#\" class=\"btn\" id=\"print-report-btn\">Report</a>
            <a href=\"record-labels\" class=\"btn\" id=\"record-labels-page-btn\">Labels</a>
          </div>
          <div class=\"print-report-title\">
            <p><strong>Report Title</strong> (optional)</p>
            <input type=\"text\" placeholder=\"Enter report title\">
            <a class=\"btn\" id=\"print-preview-btn\">Continue to Print Preview</a>
          </div>
        </div>
        <div class=\"dimmer\"></div>
      </div>
      <a href=\"#\" class=\"btn\" id=\"print-labels-btn\">Print Labels</a>

      <div class=\"add-record-btn\">
        <a href=\"node/add/record\" class=\"btn\" target=\"_blank\"><img class=\"icon\" src=\"";
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/_assets/images/icon-add.svg\"/> Add Record</a>
      </div>
    </div>
  </div>
</section>

<section class=\"print-heading\">
  <div class=\"container\">
    <div class=\"print-title\">
      <h2></h2>
      <p class=\"date\"></p>
    </div>

    <div class=\"print-options\">
      <button class=\"btn third cancel\">Done</button>
      <button class=\"btn print\">Print</button>
    </div>
  </div>
</section>
<section id=\"records-block\">
  <div class=\"container\">
    <div class=\"filter-active component\">
    </div>
    <p class=\"record-count component\">
      ";
        // line 144
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["header"] ?? null))) {
            // line 145
            echo "        <strong>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
            echo "</strong> record(s) found.
      ";
        }
        // line 147
        echo "    </p>

    ";
        // line 149
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["pager"] ?? null))) {
            // line 150
            echo "      <div class=\"rms-pager\">
          ";
            // line 151
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 154
        echo "    ";
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["rows"] ?? null))) {
            // line 155
            echo "        <div class=\"view-content\">
          ";
            // line 156
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
          <div class=\"clear\"></div>
        </div>
    ";
        } elseif ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(        // line 159
($context["empty"] ?? null))) {
            // line 160
            echo "        <div class=\"view-empty\">
          ";
            // line 161
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
            echo "
        </div>
    ";
        }
        // line 164
        echo "    ";
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["pager"] ?? null))) {
            // line 165
            echo "      <div class=\"rms-pager\">
          ";
            // line 166
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 169
        echo "  </div>
</section>

<div class=\"";
        // line 172
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["classes"] ?? null), "html", null, true));
        echo "\">
    ";
        // line 173
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    ";
        // line 174
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["title"] ?? null))) {
            // line 175
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "
    ";
        }
        // line 177
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "






    ";
        // line 184
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["attachment_before"] ?? null))) {
            // line 185
            echo "        <div class=\"attachment attachment-before\">
          ";
            // line 186
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
            echo "
        </div>
    ";
        }
        // line 189
        echo "




    ";
        // line 194
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["attachment_after"] ?? null))) {
            // line 195
            echo "        <div class=\"attachment attachment-after\">
          ";
            // line 196
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
            echo "
        </div>
    ";
        }
        // line 199
        echo "
    ";
        // line 200
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["more"] ?? null))) {
            // line 201
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
            echo "
    ";
        }
        // line 203
        echo "
    ";
        // line 204
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["footer"] ?? null))) {
            // line 205
            echo "        <div class=\"view-footer\">
          ";
            // line 206
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
            echo "
        </div>
    ";
        }
        // line 209
        echo "
    ";
        // line 210
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["feed_icon"] ?? null))) {
            // line 211
            echo "        <div class=\"feed-icon\">
            ";
            // line 212
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feed_icon"] ?? null), "html", null, true));
            echo "
        </div>
    ";
        }
        // line 215
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/rms/templates/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 215,  332 => 212,  329 => 211,  327 => 210,  324 => 209,  318 => 206,  315 => 205,  313 => 204,  310 => 203,  304 => 201,  302 => 200,  299 => 199,  293 => 196,  290 => 195,  288 => 194,  281 => 189,  275 => 186,  272 => 185,  270 => 184,  259 => 177,  253 => 175,  251 => 174,  247 => 173,  243 => 172,  238 => 169,  232 => 166,  229 => 165,  226 => 164,  220 => 161,  217 => 160,  215 => 159,  209 => 156,  206 => 155,  203 => 154,  197 => 151,  194 => 150,  192 => 149,  188 => 147,  182 => 145,  180 => 144,  153 => 120,  133 => 103,  87 => 60,  78 => 53,  72 => 51,  70 => 50,  53 => 36,  43 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/rms/templates/views-view.html.twig", "/Applications/MAMP/htdocs/rms-app/themes/rms/templates/views-view.html.twig");
    }
}
