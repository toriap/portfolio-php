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

/* addProject.twig */
class __TwigTemplate_36f6d695598b4ba9aacc201a5df5c736a11393e09a880e0b3b54e4c525f12060 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "addProject.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<h1>Add Project</h1>
\t<form action=\"/cursophp/Projects/add\"method=\"post\">
\t\t<label for=\"title\">Title</label>
\t\t<input type=\"text\"name=\"title\"><br>
\t\t<label for=\"description\">Description</label>
\t\t<input type=\"\"name=\"description\"><br>
\t\t<button type=\"submit\">Save</button>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "addProject.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block content  %}
\t<h1>Add Project</h1>
\t<form action=\"/cursophp/Projects/add\"method=\"post\">
\t\t<label for=\"title\">Title</label>
\t\t<input type=\"text\"name=\"title\"><br>
\t\t<label for=\"description\">Description</label>
\t\t<input type=\"\"name=\"description\"><br>
\t\t<button type=\"submit\">Save</button>
\t</form>
{% endblock %}", "addProject.twig", "C:\\xampp\\htdocs\\cursophp\\views\\addProject.twig");
    }
}
