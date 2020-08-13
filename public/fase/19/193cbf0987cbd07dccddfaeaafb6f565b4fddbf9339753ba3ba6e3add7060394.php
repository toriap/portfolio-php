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

/* addJob.twig */
class __TwigTemplate_d7fb28b6fac98b56ef723b96151faf08ca6ec3c50180c8833cdc3af2ceb44224 extends Template
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
      <title>Add Job</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css\" integrity=\"sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B\"
          crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"style.css\">
    </head>
    <body>
    <h1>Add Job</h1>
      <form action=\"/cursophp/jobs/add\" method=\"post\">
        <label for=\"\">Title</label>
        <input type=\"text\" name=\"title\"><br>
        <label for=\"\">Description</label>
        <input type=\"text\" name=\"description\"><br>
        <button type=\"submit\">Save</button>
      </form>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "addJob.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
      <title>Add Job</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css\" integrity=\"sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B\"
          crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"style.css\">
    </head>
    <body>
    <h1>Add Job</h1>
      <form action=\"/cursophp/jobs/add\" method=\"post\">
        <label for=\"\">Title</label>
        <input type=\"text\" name=\"title\"><br>
        <label for=\"\">Description</label>
        <input type=\"text\" name=\"description\"><br>
        <button type=\"submit\">Save</button>
      </form>
    </body>
</html>", "addJob.twig", "C:\\xampp\\htdocs\\cursophp\\views\\addJob.twig");
    }
}
