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

/* index.twig */
class __TwigTemplate_dac295c263c75fbd86b80e88c19c39ecec35da3f1db6780041f3afd0f5a54220 extends Template
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
        echo "<!doctype html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

  <!-- Bootstrap CSS -->
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css\" integrity=\"sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B\"
    crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"style.css\">

  <title>Resume</title>
</head>

<body>
  <div class=\"container\">
    <div id=\"resume-header\" class=\"row\">
      <div class=\"col-3\">
        <img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
      </div>
      <div class=\"col\">
        <h1>";
        // line 24
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " </h1>
        <h2>PHP Developer</h2>
        <ul>
          <li>Mail: hector@mail.com</li>
          <li>Phone: 1234567890</li>
          <li>LinkedIn: https://linkedin.com</li>
          <li>Twitter: @hectorbenitez</li>
        </ul>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <h2 class=\"border-bottom-gray\" >Carrer Summary</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <div>
          <h3 class=\"border-bottom-gray\" >Work Experience</h3>
          <ul>
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jobs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 49
            echo "                  <li class=\"work-position\">
                  <h5>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 50), "html", null, true);
            echo "</h5>
                  <p>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 51), "html", null, true);
            echo "</p>
                  </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "  
          </ul>
        </div>
        <div>
            <h3 class=\"border-bottom-gray\">Projects</h3>
            <ul>
            <?php
            for(\$idx = 0; \$idx < count(\$projects); \$idx++){
              printElement(\$projects[\$idx]);
              }
              ?>
              </ul>

            <div class=\"project\">
                <h5>Project X</h5>
                <div class=\"row\">
                    <div class=\"col-3\">
                        <img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
                      </div>
                      <div class=\"col\">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class=\"badge badge-secondary\">PHP</span>
                        <span class=\"badge badge-secondary\">HTML</span>
                        <span class=\"badge badge-secondary\">CSS</span>
                      </div>
                </div>
            </div>
            <div class=\"project\">
                <h5>Project X</h5>
                <div class=\"row\">
                    <div class=\"col-3\">
                        <img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
                      </div>
                      <div class=\"col\">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class=\"badge badge-secondary\">PHP</span>
                        <span class=\"badge badge-secondary\">HTML</span>
                        <span class=\"badge badge-secondary\">CSS</span>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <div class=\"col-3\">
        <h3 class=\"border-bottom-gray\" >Skills & Tools</h3>
        <h4>Backend</h4>
        <ul>
          <li>PHP</li>
        </ul>
        <h4>Frontend</h4>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
        </ul>
        <h4>Frameworks</h4>
        <ul>
          <li>Laravel</li>
          <li>Bootstrap</li>
        </ul>
        <h3 class=\"border-bottom-gray\" >Languages</h3>
        <ul>
          <li>Spanish</li>
          <li>English</li>
        </ul>
      </div>
    </div>
    <div id=\"resume-footer\" class=\"row\">
      <div class=\"col\">
          Designed by @hectorbenitez
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js\" integrity=\"sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em\"
    crossorigin=\"anonymous\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 53,  100 => 51,  96 => 50,  93 => 49,  89 => 48,  62 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

  <!-- Bootstrap CSS -->
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css\" integrity=\"sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B\"
    crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"style.css\">

  <title>Resume</title>
</head>

<body>
  <div class=\"container\">
    <div id=\"resume-header\" class=\"row\">
      <div class=\"col-3\">
        <img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
      </div>
      <div class=\"col\">
        <h1>{{ name }} </h1>
        <h2>PHP Developer</h2>
        <ul>
          <li>Mail: hector@mail.com</li>
          <li>Phone: 1234567890</li>
          <li>LinkedIn: https://linkedin.com</li>
          <li>Twitter: @hectorbenitez</li>
        </ul>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <h2 class=\"border-bottom-gray\" >Carrer Summary</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        <div>
          <h3 class=\"border-bottom-gray\" >Work Experience</h3>
          <ul>
                {% for job in jobs %}
                  <li class=\"work-position\">
                  <h5>{{ job.title }}</h5>
                  <p>{{job.description}}</p>
                  </li>
                {% endfor %}  
          </ul>
        </div>
        <div>
            <h3 class=\"border-bottom-gray\">Projects</h3>
            <ul>
            <?php
            for(\$idx = 0; \$idx < count(\$projects); \$idx++){
              printElement(\$projects[\$idx]);
              }
              ?>
              </ul>

            <div class=\"project\">
                <h5>Project X</h5>
                <div class=\"row\">
                    <div class=\"col-3\">
                        <img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
                      </div>
                      <div class=\"col\">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class=\"badge badge-secondary\">PHP</span>
                        <span class=\"badge badge-secondary\">HTML</span>
                        <span class=\"badge badge-secondary\">CSS</span>
                      </div>
                </div>
            </div>
            <div class=\"project\">
                <h5>Project X</h5>
                <div class=\"row\">
                    <div class=\"col-3\">
                        <img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
                      </div>
                      <div class=\"col\">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class=\"badge badge-secondary\">PHP</span>
                        <span class=\"badge badge-secondary\">HTML</span>
                        <span class=\"badge badge-secondary\">CSS</span>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <div class=\"col-3\">
        <h3 class=\"border-bottom-gray\" >Skills & Tools</h3>
        <h4>Backend</h4>
        <ul>
          <li>PHP</li>
        </ul>
        <h4>Frontend</h4>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
        </ul>
        <h4>Frameworks</h4>
        <ul>
          <li>Laravel</li>
          <li>Bootstrap</li>
        </ul>
        <h3 class=\"border-bottom-gray\" >Languages</h3>
        <ul>
          <li>Spanish</li>
          <li>English</li>
        </ul>
      </div>
    </div>
    <div id=\"resume-footer\" class=\"row\">
      <div class=\"col\">
          Designed by @hectorbenitez
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js\" integrity=\"sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em\"
    crossorigin=\"anonymous\"></script>
</body>

</html>", "index.twig", "C:\\xampp\\htdocs\\cursophp\\views\\index.twig");
    }
}
