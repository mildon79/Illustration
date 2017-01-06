<?php

/* default.phtml */
class __TwigTemplate_39506a1a612d0f134c884544e2af4e3e3a14f16a4bbd4956c8afea5332099968 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
\t<title>Ukázka zdrojového kódu</title>

\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
</head>
<body>
<h1>Test layout</h1>
<?php echo \$test ?>

<script type=\"text/javascript\" src=\"/js/bundle.js\" charset=\"utf-8\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "default.phtml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default.phtml", "C:\\xampp\\htdocs\\illustration\\app\\layout\\default.phtml");
    }
}
