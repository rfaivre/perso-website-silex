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
<html>
<head>
\t<title>test</title>
</head>
<body>
\t";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 9
        echo "</body>
</html>";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  35 => 7,  30 => 9,  28 => 7,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<title>test</title>*/
/* </head>*/
/* <body>*/
/* 	{% block body %}*/
/* 	{% endblock %}*/
/* </body>*/
/* </html>*/
