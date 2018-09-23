<?php

/* @rms/partials/header.html.twig */
class __TwigTemplate_f9f1f3067eb16a28b40c55911a41b92fc60b2797dc3d203f6d1ccab24e5e794f extends Twig_Template
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
        $functions = array("path" => 9);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array('path')
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
        echo "<script>
  // jQuery( document ).ready(function() {
  //   jQuery('ul.menu').prepend('<li class=\"home-link\"><a href=\"insurance\" class=\"active\"><img class=\"icon\" src=\"../";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true));
        echo "/_assets/images/icon-home-color.svg\"/></a></li>');
  // });
</script>
<header>
  <div class=\"container\">
    <!-- <div class=\"site-headline\">
      <a href=\"";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
        echo "insurance\">
        <h3>St. Anthony Insurance & Solutions</h3>
        <h1>Records Management System</h1>
      </a>
    </div> -->
    <ul class=\"menu\">
      <li class=\"home-link\"><a href=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
        echo "insurance\"><img class=\"icon\" src=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/_assets/images/icon-home-color.svg\"/></a></li>
      <li><a href=\"#\" id=\"menu-link-health\" name=\"Health\">Health<span>Insurance</span></a></li>
      <li><a href=\"#\" id=\"menu-link-life\" name=\"Life\">Life<span>Insurance</span></a></li>
      <li><a href=\"#\" id=\"menu-link-annuity\" name=\"Annuity\">Annuity <span>Plan</span></a></li>
      <li><a target=\"_blank\" href=\"https://apply.coveredca.com/static/lw-web/login?resource_url=https%3A%2F%2Fapply.coveredca.com%2Fapspahbx%2Fahbx.portal\">Covered<span>California</span></a></li>
      <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
        echo "/user/logout\"><strong>Logout</strong></a></li>
    </ul>
    <div class=\"clear\"></div>
  </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "@rms/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  65 => 15,  56 => 9,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@rms/partials/header.html.twig", "/Applications/MAMP/htdocs/rms-app/themes/rms/templates/partials/header.html.twig");
    }
}
