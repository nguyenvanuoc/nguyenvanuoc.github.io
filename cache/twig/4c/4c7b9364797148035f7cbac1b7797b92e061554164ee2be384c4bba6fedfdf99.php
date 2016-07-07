<?php

/* error.html.twig */
class __TwigTemplate_cc9cea5db490e80e5636c6486804723a21f97cb8252453849e8032f3aec149f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "  <section class=\"error-404 not-found\">
    <header class=\"page-header\">
      <h1>Error ";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h1>
    </header>
    <div class=\"page-content\">
      ";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* {% block content %}*/
/*   <section class="error-404 not-found">*/
/*     <header class="page-header">*/
/*       <h1>Error {{ page.header.http_response_code }}</h1>*/
/*     </header>*/
/*     <div class="page-content">*/
/*       {{ page.content }}*/
/*     </div>*/
/*   </section>*/
/* {% endblock %}*/
/* */
