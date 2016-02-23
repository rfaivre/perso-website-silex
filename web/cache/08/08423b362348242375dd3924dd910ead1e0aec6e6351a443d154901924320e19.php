<?php

/* index.twig */
class __TwigTemplate_d49e3191323811334c40741cec5126c18145944b10c658233cc778484d65de90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
\t<!--<div id=\"st-container\" class=\"st-container\">

\t<nav class=\"st-menu st-effect-1\" id=\"menu-1\">
\t\t<h2 class=\"icon icon-stack\">Sidebar</h2>
\t\t<ul>
\t\t\t<li><a class=\"icon icon-data\" href=\"#accueil\">Accueil</a></li>
\t\t\t<li><a class=\"icon icon-location\" href=\"#formations\">Formations</a></li>
\t\t\t<li><a class=\"icon icon-study\" href=\"#competences\">Compétences</a></li>
\t\t\t<li><a class=\"icon icon-photo\" href=\"#contact\">Contact</a></li>
\t\t</ul>
\t</nav>

\t-->
\t<!-- content push wrapper -->
\t<!--
\t<div class=\"st-pusher\">

\t\t<div class=\"st-content\">
\t\t\t<div class=\"st-content-inner\">

\t\t\t\t<div id=\"st-trigger-effects\" class=\"column\" style=\"position:absolute\">
\t\t\t\t\t<button data-effect=\"st-effect-1\">Reveal</button>
\t\t\t\t</div>
\t\t\t-->
\t\t\t\t<div id=\"multiscroll\">
\t\t\t\t    <div class=\"ms-left\">
\t\t\t\t        <div class=\"ms-section\">
\t\t\t\t\t        <div class=\"wrap\">
\t\t\t\t\t        \tSection gauche 1
\t\t\t\t\t        </div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"ms-section\">
\t\t\t\t        \t<div class=\"wrap\">
\t\t\t\t        \t\tSection gauche 2
\t\t\t\t        \t</div>
\t\t\t        \t</div>
\t\t\t\t        <div class=\"ms-section\">
\t\t\t\t\t        <div class=\"wrap\">
\t\t\t\t\t    \t\tSection gauche 3    \t
\t\t\t\t\t        </div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"ms-section\">
\t\t\t\t\t        <div class=\"wrap\">
\t\t\t\t\t    \t\tSection gauche 4    \t
\t\t\t\t\t        </div>
\t\t\t\t        </div>
\t\t\t\t    </div>
\t\t\t\t    <div class=\"ms-right\">
\t\t\t\t        <div class=\"ms-section\">
\t\t\t\t        \t<div class=\"wrap\">
\t\t\t\t        \t\tSection droite 1\t        \t\t
\t\t\t\t        \t</div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"ms-section\">
\t\t\t\t        \t<div class=\"wrap\">
\t\t\t\t        \t\tSection droite 2\t        \t\t
\t\t\t\t        \t</div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"ms-section\">
\t\t\t\t        \t<div class=\"wrap\">
\t\t\t\t        \t\tSection droite 3\t        \t\t
\t\t\t\t        \t</div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"ms-section\">
\t\t\t\t        \t<div class=\"wrap\">
\t\t\t\t        \t\tSection droite 4\t        \t\t
\t\t\t\t        \t</div>
\t\t\t\t        </div>
\t\t\t\t    </div>
\t\t\t\t</div>

\t\t\t\t<div id=\"multiscroll-nav\" class=\"right\">
\t\t\t\t\t<ul id=\"myMenu\">
\t\t\t\t\t    <li data-menuanchor=\"accueil\" class=\"active\"><a href=\"#accueil\">+</a></li>
\t\t\t\t\t    <li data-menuanchor=\"formations\"><a href=\"#formations\">+</a></li>
\t\t\t\t\t    <li data-menuanchor=\"competences\"><a href=\"#competences\">+</a></li>
\t\t\t\t\t    <li data-menuanchor=\"contact\"><a href=\"#contact\">+</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t<!--</div>
\t\t</div>

\t</div>
</div>-->


\t

\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t    \$('#multiscroll').multiscroll();
\t\t});
\t</script>
";
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
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* 	<!--<div id="st-container" class="st-container">*/
/* */
/* 	<nav class="st-menu st-effect-1" id="menu-1">*/
/* 		<h2 class="icon icon-stack">Sidebar</h2>*/
/* 		<ul>*/
/* 			<li><a class="icon icon-data" href="#accueil">Accueil</a></li>*/
/* 			<li><a class="icon icon-location" href="#formations">Formations</a></li>*/
/* 			<li><a class="icon icon-study" href="#competences">Compétences</a></li>*/
/* 			<li><a class="icon icon-photo" href="#contact">Contact</a></li>*/
/* 		</ul>*/
/* 	</nav>*/
/* */
/* 	-->*/
/* 	<!-- content push wrapper -->*/
/* 	<!--*/
/* 	<div class="st-pusher">*/
/* */
/* 		<div class="st-content">*/
/* 			<div class="st-content-inner">*/
/* */
/* 				<div id="st-trigger-effects" class="column" style="position:absolute">*/
/* 					<button data-effect="st-effect-1">Reveal</button>*/
/* 				</div>*/
/* 			-->*/
/* 				<div id="multiscroll">*/
/* 				    <div class="ms-left">*/
/* 				        <div class="ms-section">*/
/* 					        <div class="wrap">*/
/* 					        	Section gauche 1*/
/* 					        </div>*/
/* 				        </div>*/
/* 				        <div class="ms-section">*/
/* 				        	<div class="wrap">*/
/* 				        		Section gauche 2*/
/* 				        	</div>*/
/* 			        	</div>*/
/* 				        <div class="ms-section">*/
/* 					        <div class="wrap">*/
/* 					    		Section gauche 3    	*/
/* 					        </div>*/
/* 				        </div>*/
/* 				        <div class="ms-section">*/
/* 					        <div class="wrap">*/
/* 					    		Section gauche 4    	*/
/* 					        </div>*/
/* 				        </div>*/
/* 				    </div>*/
/* 				    <div class="ms-right">*/
/* 				        <div class="ms-section">*/
/* 				        	<div class="wrap">*/
/* 				        		Section droite 1	        		*/
/* 				        	</div>*/
/* 				        </div>*/
/* 				        <div class="ms-section">*/
/* 				        	<div class="wrap">*/
/* 				        		Section droite 2	        		*/
/* 				        	</div>*/
/* 				        </div>*/
/* 				        <div class="ms-section">*/
/* 				        	<div class="wrap">*/
/* 				        		Section droite 3	        		*/
/* 				        	</div>*/
/* 				        </div>*/
/* 				        <div class="ms-section">*/
/* 				        	<div class="wrap">*/
/* 				        		Section droite 4	        		*/
/* 				        	</div>*/
/* 				        </div>*/
/* 				    </div>*/
/* 				</div>*/
/* */
/* 				<div id="multiscroll-nav" class="right">*/
/* 					<ul id="myMenu">*/
/* 					    <li data-menuanchor="accueil" class="active"><a href="#accueil">+</a></li>*/
/* 					    <li data-menuanchor="formations"><a href="#formations">+</a></li>*/
/* 					    <li data-menuanchor="competences"><a href="#competences">+</a></li>*/
/* 					    <li data-menuanchor="contact"><a href="#contact">+</a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* */
/* 			<!--</div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* </div>-->*/
/* */
/* */
/* 	*/
/* */
/* 	<script type="text/javascript">*/
/* 		$(document).ready(function() {*/
/* 		    $('#multiscroll').multiscroll();*/
/* 		});*/
/* 	</script>*/
/* {% endblock %}*/
/* */
/* */
