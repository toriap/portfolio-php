<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* addUser.twig */
class __TwigTemplate_3ddb9087d27ef90697df1fbcd46a49db6b2d521c8a8f75c17f92c90d0cc1e87b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "addUser.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
  <h1>Add User</h1>
  <divclass=\"alert alert-primary\"role=\"alert\">
    ";
        // line 7
        echo twig_escape_filter($this->env, ($context["responseMessage"] ?? null), "html", null, true);
        echo "
  </div>
  <form action=\"../users/add\"method=\"post\"enctype=\"multipart/form-data\">
    <label for=\"\">Email: </label>
    <input type=\"email\"name=\"email\"><br>
    <label for=\"\">Password: </label>
    <input type=\"password\"name=\"password\"><br>
    <button type=\"submit\">Save</button>
  </form>
";
    }

    public function getTemplateName()
    {
        return "addUser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block content %}

  <h1>Add User</h1>
  <divclass=\"alert alert-primary\"role=\"alert\">
    {{ responseMessage }}
  </div>
  <form action=\"../users/add\"method=\"post\"enctype=\"multipart/form-data\">
    <label for=\"\">Email: </label>
    <input type=\"email\"name=\"email\"><br>
    <label for=\"\">Password: </label>
    <input type=\"password\"name=\"password\"><br>
    <button type=\"submit\">Save</button>
  </form>
{% endblock %}", "addUser.twig", "C:\\xampp\\htdocs\\cursophp\\views\\addUser.twig");
    }
}
