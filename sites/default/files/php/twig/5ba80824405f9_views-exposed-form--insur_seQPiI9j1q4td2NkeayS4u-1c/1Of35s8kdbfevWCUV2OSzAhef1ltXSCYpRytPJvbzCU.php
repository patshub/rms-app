<?php

/* themes/rms/templates/views-exposed-form--insurance.html.twig */
class __TwigTemplate_4b2d2310ff9f8da13b22662dccec2b1a6a02353dff5b5204e742f60fa0ada4dc extends Twig_Template
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
        $tags = array("if" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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
        echo "





";
        // line 18
        if ( !twig_test_empty(($context["q"] ?? null))) {
            // line 19
            echo "  ";
            // line 23
            echo "
";
        }
        // line 25
        echo "

<div class=\"search-container\">
  ";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "combine", array()), "html", null, true));
        echo "
  <button value=\"Apply\">
    <img class=\"icon search\" src=\"";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/_assets/images/icon-search.svg\"/>
  </button>
  <img class=\"icon hidden search-close\" src=\"";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/_assets/images/icon-close.svg\"/>
</div>

<div class=\"filter-btn\">
  <div class=\"btn secondary with-icon dropdown-main-btn\" title=\"ASjdjandkandk\">
    <div class=\"pop-counter hidden\"><span></span></div>
    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 33.449 32.055\">
      <defs>
        <style>
          .cls-1 {
            fill: #007791;
          }
        </style>
      </defs>
      <g id=\"settings\" transform=\"translate(0 -0.001)\">
        <g id=\"Group_519\" data-name=\"Group 519\" transform=\"translate(0 22.299)\">
          <g id=\"Group_518\" data-name=\"Group 518\">
            <path id=\"Path_78\" data-name=\"Path 78\" class=\"cls-1\" d=\"M32.055,355.484H28.344a4.846,4.846,0,0,0-9.3,0H1.394a1.394,1.394,0,0,0,0,2.787H19.042a4.846,4.846,0,0,0,9.3,0h3.711a1.394,1.394,0,0,0,0-2.787Zm-8.362,3.484a2.091,2.091,0,1,1,2.091-2.091A2.093,2.093,0,0,1,23.693,358.969Z\" transform=\"translate(0 -352)\"/>
          </g>
        </g>
        <g id=\"Group_521\" data-name=\"Group 521\" transform=\"translate(0 0)\">
          <g id=\"Group_520\" data-name=\"Group 520\">
            <path id=\"Path_79\" data-name=\"Path 79\" class=\"cls-1\" d=\"M32.055,14.151H28.344a4.846,4.846,0,0,0-9.3,0H1.394a1.394,1.394,0,0,0,0,2.787H19.042a4.846,4.846,0,0,0,9.3,0h3.711a1.394,1.394,0,0,0,0-2.787Zm-8.362,3.484a2.091,2.091,0,1,1,2.091-2.091A2.093,2.093,0,0,1,23.693,17.635Z\" transform=\"translate(0 -10.667)\"/>
          </g>
        </g>
        <g id=\"Group_523\" data-name=\"Group 523\" transform=\"translate(0 11.15)\">
          <g id=\"Group_522\" data-name=\"Group 522\">
            <path id=\"Path_80\" data-name=\"Path 80\" class=\"cls-1\" d=\"M32.055,184.818H14.407a4.846,4.846,0,0,0-9.3,0H1.394a1.394,1.394,0,0,0,0,2.787H5.105a4.846,4.846,0,0,0,9.3,0H32.055a1.394,1.394,0,0,0,0-2.787ZM9.756,188.3a2.091,2.091,0,1,1,2.091-2.091A2.093,2.093,0,0,1,9.756,188.3Z\" transform=\"translate(0 -181.334)\"/>
          </g>
        </g>
      </g>
    </svg>
  </div>
  <div class=\"dropdown-body\">
    <img class=\"icon close\" src=\"";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/_assets/images/icon-close.svg\"/>
    <h3 class=\"dropdown-title\">Filter Options</h3>
    <div class=\"filter-container\">

      <div class=\"tab-menu\">
        <div class=\"item active\" tab-id=\"tab1\">General</div>
        <div class=\"item\" tab-id=\"tab2\">Health</div>
        <div class=\"item\" tab-id=\"tab3\">Life</div>
        <div class=\"item\" tab-id=\"tab4\">Annuity</div>
      </div>

      <div class=\"tab-body\">
        <div id=\"tab1\" class=\"active tab-item\">
          <label>Birth Month</label>
          <select id=\"birth_months\">
            <option selected value=\"All\" onchange=\"showselected(this.value);\">Select Month</option>
            <option value=\"January\">January</option>
            <option value=\"February\">February</option>
            <option value=\"March\">March</option>
            <option value=\"April\">April</option>
            <option value=\"May\">May</option>
            <option value=\"June\">June</option>
            <option value=\"July\">July</option>
            <option value=\"August\">August</option>
            <option value=\"September\">September</option>
            <option value=\"October\">October</option>
            <option value=\"November\">November</option>
            <option value=\"December\">December</option>
          </select>
          <div class=\"hidden\">";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_birth_month_value", array()), "html", null, true));
        echo "</div>

          <label>Age Expectation</label>
          <input id=\"field_age\" placeholder=\"Turning...\" type=\"number\" name=\"age\" min=\"1\" max=\"100\">
          <div class=\"hidden\">";
        // line 99
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_date_of_birth_value", array()), "html", null, true));
        echo "</div>
          <div class=\"hidden\">";
        // line 100
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_date_of_birth_value_min", array()), "html", null, true));
        echo "</div>

        </div>
        <div id=\"tab2\" class=\"tab-item\">
          <div class=\"hidden\">";
        // line 104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_insurance_type_value", array()), "html", null, true));
        echo "</div>
          ";
        // line 105
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_health_insurance_status_value", array()), "html", null, true));
        echo "
          ";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_health_insurance_value", array()), "html", null, true));
        echo "
          ";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_medicare_health_plan_value", array()), "html", null, true));
        echo "
          ";
        // line 108
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_medical_group_value", array()), "html", null, true));
        echo "
          ";
        // line 109
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_pcp_value", array()), "html", null, true));
        echo "
        </div>

        <div id=\"tab3\" class=\"tab-item\">
          ";
        // line 113
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_agency_value", array()), "html", null, true));
        echo "
          ";
        // line 114
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_life_carrier_value", array()), "html", null, true));
        echo "
          ";
        // line 115
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_life_product_value", array()), "html", null, true));
        echo "
          ";
        // line 116
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_life_product_term_value", array()), "html", null, true));
        echo "
          ";
        // line 117
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_life_product_type_value", array()), "html", null, true));
        echo "
        </div>
        <div id=\"tab4\" class=\"tab-item\">
          ";
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_annuity_carrier_value", array()), "html", null, true));
        echo "
          ";
        // line 121
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "field_annuity_product_value", array()), "html", null, true));
        echo "
        </div>
      </div>

    </div>
    <div class=\"dropdown-btns\">
      <input data-drupal-selector=\"edit-reset\" type=\"submit\" id=\"edit-reset\" name=\"op\" value=\"Reset\" class=\"button js-form-submit form-submit btn reset third\">
      <input data-drupal-selector=\"edit-submit-printer\" type=\"submit\" id=\"edit-submit-printer\" value=\"Apply\" class=\"button js-form-submit form-submit btn apply\">
    </div>
  </div>
  <div class=\"dimmer\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/rms/templates/views-exposed-form--insurance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 121,  210 => 120,  204 => 117,  200 => 116,  196 => 115,  192 => 114,  188 => 113,  181 => 109,  177 => 108,  173 => 107,  169 => 106,  165 => 105,  161 => 104,  154 => 100,  150 => 99,  143 => 95,  111 => 66,  74 => 32,  69 => 30,  64 => 28,  59 => 25,  55 => 23,  53 => 19,  51 => 18,  43 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/rms/templates/views-exposed-form--insurance.html.twig", "/Applications/MAMP/htdocs/rms-app/themes/rms/templates/views-exposed-form--insurance.html.twig");
    }
}
