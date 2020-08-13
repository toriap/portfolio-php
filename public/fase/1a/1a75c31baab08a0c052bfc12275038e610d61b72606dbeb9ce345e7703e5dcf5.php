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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html>
<head>
  <meta charset=\"utf-8\">
  <meta  name=\"viewport\"content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <link rel=\"stylesheet\"href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css\"integrity=\"sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B\"
    crossorigin=\"anonymous\">
  <link rel=\"stylesheet\"href=\"style.css\">\t
\t<title>Add Project</title>
</head>
<body>
\t<h1>Add Project</h1>
\t<form action=\"/cursophp/Projects/add\"method=\"post\">
\t\t<label for=\"title\">Title</label>
\t\t<input type=\"text\"name=\"title\"><br>
\t\t<label for=\"description\">Description</label>
\t\t<input type=\"\"name=\"description\"><br>
\t\t<button type=\"submit\">Save</button>
\t</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "addProject.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
  <meta charset=\"utf-8\">
  <meta  name=\"viewport\"content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <link rel=\"stylesheet\"href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css\"integrity=\"sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B\"
    crossorigin=\"anonymous\">
  <link rel=\"stylesheet\"href=\"style.css\">\t
\t<title>Add Project</title>
</head>
<body>
\t<h1>Add Project</h1>
\t<form action=\"/cursophp/Projects/add\"method=\"post\">
\t\t<label for=\"title\">Title</label>
\t\t<input type=\"text\"name=\"title\"><br>
\t\t<label for=\"description\">Description</label>
\t\t<input type=\"\"name=\"description\"><br>
\t\t<button type=\"submit\">Save</button>
\t</form>
</body>
</html>", "addProject.twig", "C:\\xampp\\htdocs\\cursophp\\views\\addProject.twig");
    }
}
