<?php

/* {# inline_template_start #}<div class="action-items">
<a href="{{ view_node }}" class="item" target="_blank">View</p>
<a href="{{ edit_node }}" class="item" target="_blank">Edit</p>
<a href="{{ view_node }}#printme" class="item" target="_blank">Print</p>
</div> */
class __TwigTemplate_90fee8a7fdab0ab8cf7bfcd2541f3c3456a0eb0d8ddc56a7091f0c2a1aad46a1 extends Twig_Template
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
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div class=\"action-items\">
<a href=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\" class=\"item\" target=\"_blank\">View</p>
<a href=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["edit_node"] ?? null), "html", null, true));
        echo "\" class=\"item\" target=\"_blank\">Edit</p>
<a href=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "#printme\" class=\"item\" target=\"_blank\">Print</p>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"action-items\">
<a href=\"{{ view_node }}\" class=\"item\" target=\"_blank\">View</p>
<a href=\"{{ edit_node }}\" class=\"item\" target=\"_blank\">Edit</p>
<a href=\"{{ view_node }}#printme\" class=\"item\" target=\"_blank\">Print</p>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 4,  54 => 3,  50 => 2,  47 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"action-items\">
<a href=\"{{ view_node }}\" class=\"item\" target=\"_blank\">View</p>
<a href=\"{{ edit_node }}\" class=\"item\" target=\"_blank\">Edit</p>
<a href=\"{{ view_node }}#printme\" class=\"item\" target=\"_blank\">Print</p>
</div>", "");
    }
}
