<?php

/* layout.twig */
class __TwigTemplate_c9b31bbfaea6302ac72c154e4c2286cc977acabe79d6dcc304612e7fd16492d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">
<head>
\t<meta charset=\"utf-8\" />
\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t<title>Rémi FAIVRE</title>
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css\">
      
</head>
<body>
\t";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "</body>
</html>";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "\t";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  40 => 12,  35 => 14,  33 => 12,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html class="no-js" lang="en">*/
/* <head>*/
/* 	<meta charset="utf-8" />*/
/* 	<meta http-equiv="x-ua-compatible" content="ie=edge">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/* 	<title>Rémi FAIVRE</title>*/
/* 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css">*/
/*       */
/* </head>*/
/* <body>*/
/* 	{% block body %}*/
/* 	{% endblock %}*/
/* </body>*/
/* </html>*/
