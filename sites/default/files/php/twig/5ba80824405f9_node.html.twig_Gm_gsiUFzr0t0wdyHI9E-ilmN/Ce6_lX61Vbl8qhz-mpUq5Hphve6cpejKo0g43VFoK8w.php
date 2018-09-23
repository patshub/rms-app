<?php

/* themes/rms/templates/node.html.twig */
class __TwigTemplate_182eec4a05750cadf5e7638fe5082113bfe2f446dfaeb9583f6560043d5070c7 extends Twig_Template
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
        $tags = array("if" => 40);
        $filters = array("render" => 196);
        $functions = array("url" => 23);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('render'),
                array('url')
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

        // line 1
        echo "
<section class=\"print-heading\">
  <div class=\"container\">
    <div class=\"print-title\">
      <h2>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_first_name", array()), 0, array()), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_middle_name", array()), 0, array()), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_last_name", array()), 0, array()), "html", null, true));
        echo "</h2>
      <p id=\"date\"></p>
    </div>

    <div class=\"print-options\">
      <button class=\"btn third cancel\">Done</button>
      <button class=\"btn print\">Print</button>
    </div>
  </div>
</section>

<div class=\"page-heading\">
  <div class=\"container\">
    <div class=\"profile-title\">
      <span>Member ID: #";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["node"] ?? null), "id", array()), "html", null, true));
        echo "</span>
      <h1>";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_first_name", array()), 0, array()), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_middle_name", array()), 0, array()), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_last_name", array()), 0, array()), "html", null, true));
        echo "</h1>
    </div>
    <div class=\"profile-settings\">
      <a href=\"";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>")));
        echo "/edit\" class=\"btn edit-btn with-icon\">
        <img class=\"icon\" src=\"";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/_assets/images/icon-edit.svg\"/>
      </a>
      <div id=\"print-preview-btn\" class=\"btn single-print-btn with-icon\">
        <img class=\"icon\" src=\"";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/_assets/images/icon-printer-white.svg\"/>
      </div>
      <div class=\"btn trash-btn with-icon\">
        <a href=\"";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>")));
        echo "/delete\">
          <img class=\"icon\" src=\"";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/_assets/images/icon-trash.svg\"/>
        </a>
      </div>
    </div>

    <div class=\"tab-menu\">
      <div class=\"item back-btn\"></div>
      <div class=\"item active\" tab-id=\"tab1\">Client Information</div>

      ";
        // line 40
        if (((twig_in_filter("Health", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 0, array(), "array")) || twig_in_filter("Health", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 1, array(), "array"))) || twig_in_filter("Health", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 2, array(), "array")))) {
            // line 41
            echo "      <div class=\"item\" tab-id=\"tab2\">Health Insurance</div>
      ";
        }
        // line 43
        echo "
      ";
        // line 44
        if (((twig_in_filter("Life", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 0, array(), "array")) || twig_in_filter("Life", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 1, array(), "array"))) || twig_in_filter("Life", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 2, array(), "array")))) {
            // line 45
            echo "      <div class=\"item\" tab-id=\"tab3\">Life Insurance</div>
      ";
        }
        // line 47
        echo "
      ";
        // line 48
        if (((twig_in_filter("Annuity", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 0, array(), "array")) || twig_in_filter("Annuity", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 1, array(), "array"))) || twig_in_filter("Annuity", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 2, array(), "array")))) {
            // line 49
            echo "      <div class=\"item\" tab-id=\"tab4\">Annuity Plan</div>
      ";
        }
        // line 51
        echo "
    </div>
  </div>
</div>
<div class=\"clear\"></div>

<div>
  <div class=\"container\">
    <div id=\"profile-block\">

      <div class=\"tab-body\">

        <div id=\"tab1\" class=\"active tab-item\">
          <h2 class=\"tab-title\">Client Information</h2>
          <div class=\"col-6\">
            <div class=\"col\">
              <div class=\"info-set\">
                <h3>Identification</h3>
                <div class=\"info-set-item\">
                  <p>First Name</p>
                  <p><strong>";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_first_name", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>
                <div class=\"info-set-item\">
                  <p>Last Name</p>
                  <p><strong>";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_last_name", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Middle Name</p>
                  <p><strong>";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_middle_name", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Date of Birth</p>
                  <p><strong>";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_date_of_birth", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Gender</p>
                  <p><strong>";
        // line 90
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_gender", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Immigration Status</p>
                  <p><strong>";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_immigration_status", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Nationality</p>
                  <p><strong>";
        // line 100
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_nationality", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>1st Language</p>
                  <p><strong>";
        // line 105
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_1st_language", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>2nd Language</p>
                  <p><strong>";
        // line 110
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_2nd_language", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Social Security Number</p>
                  <p><strong>";
        // line 115
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_social_security_number", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Medicare Number</p>
                  <p><strong>";
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_medicare_number", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

              </div>

              <div class=\"info-set\">
                <h3>Household</h3>

                <div class=\"info-set-item\">
                  <p>Marital Status</p>
                  <p><strong>";
        // line 130
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_marital_status", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Spouse/Partner Name</p>
                  <p><strong>";
        // line 135
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_partner_name", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Spouse/Partner DOB</p>
                  <p><strong>";
        // line 140
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_partner_dob", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Family Members</p>
                  <p><strong>";
        // line 145
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_family_members", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Contact Name</p>
                  <p><strong>";
        // line 150
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_contact_name", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Relationship to Member</p>
                  <p><strong>";
        // line 155
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_relationship_to_member", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Referred By</p>
                  <p><strong>";
        // line 160
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_referred_by", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Household Annual Income</p>
                  <p><strong>";
        // line 165
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_household_annual_income", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Tax Filing Status</p>
                  <p><strong>";
        // line 170
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_tax_filing_status", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Job/Occupation</p>
                  <p><strong>";
        // line 175
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_occupation", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Company Name</p>
                  <p><strong>";
        // line 180
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_company_name", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>EIN #</p>
                  <p><strong>";
        // line 185
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_ein", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

              </div>
            </div>
          </div>
          <div class=\"col-6\">
            <div class=\"col\">
              <div class=\"info-set\">
                <h3>Contact Info</h3>

                ";
        // line 196
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_phone_home", array()))) {
            // line 197
            echo "                <div class=\"info-set-item\">
                  <p>Phone Number <span>Home</span></p>
                  <p><strong>";
            // line 199
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_phone_home", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>
                ";
        }
        // line 202
        echo "                ";
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_phone_mobile", array()))) {
            // line 203
            echo "                <div class=\"info-set-item\">
                  <p>Phone Number <span>Mobile</span></p>
                  <p><strong>";
            // line 205
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_phone_mobile", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>
                ";
        }
        // line 208
        echo "                ";
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_phone_work", array()))) {
            // line 209
            echo "                <div class=\"info-set-item\">
                  <p>Phone Number <span>Work</span></p>
                  <p><strong>";
            // line 211
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_phone_work", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>
                ";
        }
        // line 214
        echo "
                <div class=\"info-set-item\">
                  <p>Email Adress</p>
                  <p><strong>";
        // line 217
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_email_address", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

              </div>

              <div class=\"info-set\">
                <h3>Home Address</h3>

                <div class=\"info-set-item\">
                  <p>Street</p>
                  <p><strong>";
        // line 227
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_street", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>City</p>
                  <p><strong>";
        // line 232
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_city", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>State</p>
                  <p><strong>";
        // line 237
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_state", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Zipcode</p>
                  <p><strong>";
        // line 242
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_zipcode", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>County</p>
                  <p><strong>";
        // line 247
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_county", array()), 0, array()), "html", null, true));
        echo "</strong></p>
                </div>
              </div>

              ";
        // line 251
        if (twig_in_filter("Off", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_same_as_mailing_address", array()), 0, array(), "array"))) {
            // line 252
            echo "                <div class=\"info-set\">
                  <h3>Mailing Address</h3>
                  <div class=\"info-set-item\">
                    <p>Street <span>Mailing</span></p>
                    <p><strong>";
            // line 256
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_mailing_street", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>City <span>Mailing</span></p>
                    <p><strong>";
            // line 261
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_mailing_city", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>State <span>Mailing</span></p>
                    <p><strong>";
            // line 266
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_mailing_state", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>Zipcode <span>Mailing</span></p>
                    <p><strong>";
            // line 271
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_mailing_zipcode", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>County <span>Mailing</span></p>
                    <p><strong>";
            // line 276
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_mailing_county", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>
                </div>
              ";
        }
        // line 280
        echo "
            </div>
          </div>
        </div>

        ";
        // line 285
        if (((twig_in_filter("Health", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 0, array(), "array")) || twig_in_filter("Health", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 1, array(), "array"))) || twig_in_filter("Health", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 2, array(), "array")))) {
            // line 286
            echo "        <div id=\"tab2\" class=\"tab-item\">
          <h2 class=\"tab-title\">Health Insurance</h2>

          <div class=\"col-6\">
            <div class=\"col\">
              <div class=\"info-set\">
                <h3>Insurance Details</h3>

                <div class=\"info-set-item\">
                  <p>Status</p>
                  <p><strong>";
            // line 296
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_health_insurance_status", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                ";
            // line 299
            if (twig_in_filter("Inactive", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_health_insurance_status", array()), 0, array(), "array"))) {
                // line 300
                echo "                  <div class=\"info-set-item\">
                    <p>Reason for Inactivity</p>
                    <p><strong>";
                // line 302
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_health_inactive_reason", array()), 0, array()), "html", null, true));
                echo "</strong></p>
                  </div>
                  <div class=\"info-set-item\">
                    <p>Date of Cancellation</p>
                    <p><strong>";
                // line 306
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_health_cancel_date", array()), 0, array()), "html", null, true));
                echo "</strong></p>
                  </div>
                ";
            }
            // line 309
            echo "              </div>

            </div>
          </div>

          <div class=\"clear\"></div>


          ";
            // line 317
            if (twig_in_filter("IFP", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_health_insurance", array()), 0, array(), "array"))) {
                // line 318
                echo "          <style>
            #col-ifp{ opacity: 1; }
            #col-medicare{ opacity: .2; }
          </style>
          ";
            } elseif (twig_in_filter("Medicare", $this->getAttribute($this->getAttribute(            // line 322
($context["content"] ?? null), "field_health_insurance", array()), 0, array(), "array"))) {
                // line 323
                echo "          <style>
            #col-ifp{ opacity: .2; }
            #col-medicare{ opacity: 1; }
          </style>
          ";
            } else {
                // line 328
                echo "          <style>
            #col-ifp{ opacity: .2; }
            #col-medicare{ opacity: .2; }
          </style>
          ";
            }
            // line 333
            echo "

          <div id=\"col-ifp\" class=\"col-6\">
            <div class=\"col\">
              <div class=\"info-set\">
                <h3>Individual Family Plan (IFP)</h3>

                <div class=\"info-set-item\">
                  <p>IFP Category</p>
                  <p><strong>";
            // line 342
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_ifp_category", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Individual Family Plan</p>
                  <p><strong>";
            // line 347
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_ifp", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Metal Tier</p>
                  <p><strong>";
            // line 352
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_metal_tier", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Previous Coverage</p>
                  <p><strong>";
            // line 357
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_ifp_previous_coverage", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Effective Date</p>
                  <p><strong>";
            // line 362
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_ifp_effective_date", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Gross Monthly Premium</p>
                  <p><strong>";
            // line 367
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_gross_monthly_premium", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Net Monthly Premium</p>
                  <p><strong>";
            // line 372
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_net_monthly_premium", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Premium Assistance</p>
                  <p><strong>";
            // line 377
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_premium_assistance", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Dental Plan</p>
                  <p><strong>";
            // line 382
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_dental_plan", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Dental Monthly Premium</p>
                  <p><strong>";
            // line 387
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_dental_monthly_premium", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Vision Plan</p>
                  <p><strong>";
            // line 392
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_vision_plan", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Vision Monthly Premium</p>
                  <p><strong>";
            // line 397
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_vision_monthly_premium", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>


              </div>
            </div>
          </div>

          <div id=\"col-medicare\" class=\"col-6\">
            <div class=\"col\">
              <div class=\"info-set\">
                <h3>Medicare</h3>

                <div class=\"info-set-item\">
                  <p>Health Plan</p>
                  <p><strong>";
            // line 412
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_medicare_health_plan", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Medical Group</p>
                  <p><strong>";
            // line 417
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_medical_group", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Personal Care Physician (PCP)</p>
                  <p><strong>";
            // line 422
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_pcp", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Previous Coverage</p>
                  <p><strong>";
            // line 427
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_previous_coverage", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

                <div class=\"info-set-item\">
                  <p>Effective Date</p>
                  <p><strong>";
            // line 432
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_medicare_effective_date", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                </div>

              </div>
            </div>
          </div>

          <div class=\"col-7\">
            <div class=\"info-set\">
              <h3>";
            // line 441
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_health_commissions_year", array()), 0, array()), "html", null, true));
            echo " Health Commissions</h3>
              <table class=\"commissions\">
                <thead>
                  <tr>
                    <th>Month</th>
                    <th>Health</th>
                    <th>Dental</th>
                    <th>Vision</th>
                  <tr/>
                </thead>
                <tbody>
                  <tr>
                    <td class=\"commission-months\">
                      <div class=\"info-set-item\"><p>January</p></div>
                      <div class=\"info-set-item\"><p>February</p></div>
                      <div class=\"info-set-item\"><p>March</p></div>
                      <div class=\"info-set-item\"><p>April</p></div>
                      <div class=\"info-set-item\"><p>May</p></div>
                      <div class=\"info-set-item\"><p>June</p></div>
                      <div class=\"info-set-item\"><p>July</p></div>
                      <div class=\"info-set-item\"><p>August</p></div>
                      <div class=\"info-set-item\"><p>September</p></div>
                      <div class=\"info-set-item\"><p>October</p></div>
                      <div class=\"info-set-item\"><p>November</p></div>
                      <div class=\"info-set-item\"><p>December</p></div>
                      <div class=\"info-set-item\"><p>Bonus</p></div>
                      <div class=\"info-set-item commissions-total\"><p><strong>Total</strong></p></div>
                    </td>
                    <td class=\"health-commissions\">";
            // line 469
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_health_commissions", array()), 0, array()), "html", null, true));
            echo "</td>
                    <td class=\"dental-commissions\">";
            // line 470
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_dental_commissions", array()), 0, array()), "html", null, true));
            echo "</td>
                    <td class=\"vision-commissions\">";
            // line 471
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_vision_commissions", array()), 0, array()), "html", null, true));
            echo "</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        ";
        }
        // line 479
        echo "
        ";
        // line 480
        if (((twig_in_filter("Life", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 0, array(), "array")) || twig_in_filter("Life", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 1, array(), "array"))) || twig_in_filter("Life", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 2, array(), "array")))) {
            // line 481
            echo "        <div id=\"tab3\" class=\"tab-item\">
          <h2 class=\"tab-title\">Life Insurance</h2>

          <div>
            <div class=\"col-5\">
              <div class=\"col\">
                <div class=\"info-set\">
                  <h3>Insurance Details</h3>
                  <div class=\"info-set-item\">
                    <p>Agency</p>
                    <p><strong>";
            // line 491
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_agency", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>Carrier</p>
                    <p><strong>";
            // line 496
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_life_carrier", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>Product Type</p>
                    <p><strong>";
            // line 501
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_life_product_type", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>Product Term</p>
                    <p><strong>";
            // line 506
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_life_product_term", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>Product</p>
                    <p><strong>";
            // line 511
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_life_product", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>Policy Number</p>
                    <p><strong>";
            // line 516
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_policy_number", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>Face Amount</p>
                    <p><strong>";
            // line 521
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_life_face_amount", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>Total Death Benefit</p>
                    <p><strong>";
            // line 526
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_total_death_benefit", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>Monthly Premium</p>
                    <p><strong>";
            // line 531
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_life_monthly_premium", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>Effective Date</p>
                    <p><strong>";
            // line 536
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_life_effective_date", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"col-7\">
              <div class=\"col\">
                <div class=\"info-set\">
                  <h3>";
            // line 545
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_life_commissions_year", array()), 0, array()), "html", null, true));
            echo " Life Commissions</h3>
                  <table class=\"commissions\">
                    <thead>
                      <tr>
                        <th>Month</th>
                        <th>Life</th>
                        <th>Renewal</th>
                        <th>Override</th>
                      <tr/>
                    </thead>
                    <tbody>
                      <tr>
                        <td class=\"commission-months\">
                          <div class=\"info-set-item\"><p>January</p></div>
                          <div class=\"info-set-item\"><p>February</p></div>
                          <div class=\"info-set-item\"><p>March</p></div>
                          <div class=\"info-set-item\"><p>April</p></div>
                          <div class=\"info-set-item\"><p>May</p></div>
                          <div class=\"info-set-item\"><p>June</p></div>
                          <div class=\"info-set-item\"><p>July</p></div>
                          <div class=\"info-set-item\"><p>August</p></div>
                          <div class=\"info-set-item\"><p>September</p></div>
                          <div class=\"info-set-item\"><p>October</p></div>
                          <div class=\"info-set-item\"><p>November</p></div>
                          <div class=\"info-set-item\"><p>December</p></div>
                          <div class=\"info-set-item\"><p>Bonus</p></div>
                          <div class=\"info-set-item commissions-total\"><p><strong>Total</strong></p></div>
                        </td>
                        <td class=\"life-commissions\">";
            // line 573
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_life_commissions", array()), 0, array()), "html", null, true));
            echo "</td>
                        <td class=\"life-renewal\">";
            // line 574
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_life_renewal", array()), 0, array()), "html", null, true));
            echo "</td>
                        <td class=\"life-override\">";
            // line 575
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_life_override", array()), 0, array()), "html", null, true));
            echo "</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        ";
        }
        // line 585
        echo "
        ";
        // line 586
        if (((twig_in_filter("Annuity", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 0, array(), "array")) || twig_in_filter("Annuity", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 1, array(), "array"))) || twig_in_filter("Annuity", $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_insurance_type", array()), 2, array(), "array")))) {
            // line 587
            echo "        <div id=\"tab4\" class=\"tab-item\">
          <h2 class=\"tab-title\">Annuity Plan</h2>

          <div>
            <div class=\"col-6\">
              <div class=\"col\">
                <div class=\"info-set\">
                  <h3>Insurance Details</h3>

                  <div class=\"info-set-item\">
                    <p>Carrier</p>
                    <p><strong>";
            // line 598
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_annuity_carrier", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>Product</p>
                    <p><strong>";
            // line 603
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_annuity_product", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>Initial Commission</p>
                    <p><strong>";
            // line 608
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_initial_commission", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>

                  <div class=\"info-set-item\">
                    <p>Effective Date</p>
                    <p><strong>";
            // line 613
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_annuity_effective_date", array()), 0, array()), "html", null, true));
            echo "</strong></p>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"col-6\">
              <div class=\"col\">
                <div class=\"info-set\">
                  <h3>";
            // line 622
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_annuity_commissions_year", array()), 0, array()), "html", null, true));
            echo " Annuity Commissions</h3>
                  <table class=\"commissions\">
                    <thead>
                      <tr>
                        <th>Month</th>
                        <th>Annuity</th>
                      <tr/>
                    </thead>
                    <tbody>
                      <tr>
                        <td class=\"commission-months\">
                          <div class=\"info-set-item\"><p>January</p></div>
                          <div class=\"info-set-item\"><p>February</p></div>
                          <div class=\"info-set-item\"><p>March</p></div>
                          <div class=\"info-set-item\"><p>April</p></div>
                          <div class=\"info-set-item\"><p>May</p></div>
                          <div class=\"info-set-item\"><p>June</p></div>
                          <div class=\"info-set-item\"><p>July</p></div>
                          <div class=\"info-set-item\"><p>August</p></div>
                          <div class=\"info-set-item\"><p>September</p></div>
                          <div class=\"info-set-item\"><p>October</p></div>
                          <div class=\"info-set-item\"><p>November</p></div>
                          <div class=\"info-set-item\"><p>December</p></div>
                          <div class=\"info-set-item\"><p>Bonus</p></div>
                          <div class=\"info-set-item commissions-total\"><p><strong>Total</strong></p></div>
                        </td>
                        <td class=\"annuity-commissions\">";
            // line 648
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_annuity_commissions", array()), 0, array()), "html", null, true));
            echo "</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        ";
        }
        // line 658
        echo "      </div>

    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/rms/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1038 => 658,  1025 => 648,  996 => 622,  984 => 613,  976 => 608,  968 => 603,  960 => 598,  947 => 587,  945 => 586,  942 => 585,  929 => 575,  925 => 574,  921 => 573,  890 => 545,  878 => 536,  870 => 531,  862 => 526,  854 => 521,  846 => 516,  838 => 511,  830 => 506,  822 => 501,  814 => 496,  806 => 491,  794 => 481,  792 => 480,  789 => 479,  778 => 471,  774 => 470,  770 => 469,  739 => 441,  727 => 432,  719 => 427,  711 => 422,  703 => 417,  695 => 412,  677 => 397,  669 => 392,  661 => 387,  653 => 382,  645 => 377,  637 => 372,  629 => 367,  621 => 362,  613 => 357,  605 => 352,  597 => 347,  589 => 342,  578 => 333,  571 => 328,  564 => 323,  562 => 322,  556 => 318,  554 => 317,  544 => 309,  538 => 306,  531 => 302,  527 => 300,  525 => 299,  519 => 296,  507 => 286,  505 => 285,  498 => 280,  491 => 276,  483 => 271,  475 => 266,  467 => 261,  459 => 256,  453 => 252,  451 => 251,  444 => 247,  436 => 242,  428 => 237,  420 => 232,  412 => 227,  399 => 217,  394 => 214,  388 => 211,  384 => 209,  381 => 208,  375 => 205,  371 => 203,  368 => 202,  362 => 199,  358 => 197,  356 => 196,  342 => 185,  334 => 180,  326 => 175,  318 => 170,  310 => 165,  302 => 160,  294 => 155,  286 => 150,  278 => 145,  270 => 140,  262 => 135,  254 => 130,  241 => 120,  233 => 115,  225 => 110,  217 => 105,  209 => 100,  201 => 95,  193 => 90,  185 => 85,  177 => 80,  169 => 75,  162 => 71,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  127 => 45,  125 => 44,  122 => 43,  118 => 41,  116 => 40,  104 => 31,  100 => 30,  94 => 27,  88 => 24,  84 => 23,  74 => 20,  70 => 19,  49 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/rms/templates/node.html.twig", "/Applications/MAMP/htdocs/rms-app/themes/rms/templates/node.html.twig");
    }
}
