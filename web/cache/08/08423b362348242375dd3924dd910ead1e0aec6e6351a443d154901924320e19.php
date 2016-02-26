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
<div id=\"st-container\" class=\"st-container\">

\t<nav class=\"st-menu st-effect-1\" id=\"menu-1\">
\t\t<ul>
\t\t\t<li><a class=\"icon icon-data hvr-bounce-to-right\" href=\"#home\">Accueil</a></li>
\t\t\t<li><a class=\"icon icon-location hvr-bounce-to-right\" href=\"#studies\">Formations</a></li>
\t\t\t<li><a class=\"icon icon-location hvr-bounce-to-right\" href=\"#projects\">Projets</a></li>
\t\t\t<li><a class=\"icon icon-study hvr-bounce-to-right\" href=\"#skills\">Compétences</a></li>
\t\t\t<li><a class=\"icon icon-photo hvr-bounce-to-right\" href=\"#contact\">Contact</a></li>
\t\t</ul>
\t</nav>

\t<!-- content push wrapper -->
\t<div class=\"st-pusher\">

\t\t<div class=\"st-content container\">
\t\t\t<div class=\"st-content-inner\">

\t\t\t\t<header id=\"ha-header\" class=\"ha-header ha-header-large\">
\t\t\t\t\t<div class=\"ha-header-perspective\">
\t\t\t\t\t\t<div class=\"ha-header-front\">
\t\t\t\t\t\t\t<h1><span>Rémi FAIVRE</span></h1>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"st-trigger-effects\" class=\"column\">
\t\t\t\t\t\t\t\t<button data-effect=\"st-effect-1\" class=\"button-menu\">
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</header>

\t\t\t\t<div id=\"multiscroll\">

\t\t\t\t\t";
        // line 41
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "0")) {
            // line 42
            echo "\t\t\t\t\t    <div class=\"ms-left\">
\t\t\t\t\t    \t<!-- SECTION HOME -->
\t\t\t\t\t        <div class=\"ms-section\" data-anchor=\"home\">
\t\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t\t        \t</div>
\t\t\t\t\t        </div>
\t\t\t\t\t        <!-- END SECTION HOME -->
\t\t\t\t\t        <!-- SECTION STUDIES -->
\t\t\t\t\t        <div class=\"ms-section\" data-anchor=\"studies\">
\t\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t\t        \t\t<div class=\"section-container\">
\t\t\t\t\t        \t\t\t<h1>Formations</h1>
\t\t\t\t\t        \t\t\t
\t\t\t\t\t        \t\t</div>\t\t\t\t\t        \t\t
\t\t\t\t\t        \t</div>
\t\t\t\t        \t</div>
\t\t\t\t        \t<!-- END SECTION STUDIES -->
\t\t\t\t        \t<!-- SECTION SKILLS -->
\t\t\t\t\t        <div class=\"ms-section\" data-anchor=\"skills\">
\t\t\t\t\t\t    \t<div class=\"wrap-section\">\t\t\t\t\t    \t\t
\t\t\t\t\t\t    \t\t<div class=\"section-container\">
\t\t\t\t\t\t    \t\t\t<h1>Compétences</h1>
\t\t\t\t\t\t    \t\t\t
\t\t\t\t\t\t    \t\t</div>

\t\t\t\t\t\t    \t</div>
\t\t\t\t\t        </div>
\t\t\t\t\t        <!-- END SECTION SKILLS -->
\t\t\t\t\t        <!-- SECTION CONTACT -->
\t\t\t\t\t        <div class=\"ms-section\" data-anchor=\"contact\">
\t\t\t\t\t\t    \t<div class=\"wrap-section\">
\t\t\t\t\t\t    \t\t<div class=\"section-container\">
\t\t\t\t\t\t    \t\t\t<h1>Contact</h1>
\t\t\t\t\t\t    \t\t\t
\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t    \t\t
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t        </div>
\t\t\t\t\t        <!-- END SECTION CONTACT -->
\t\t\t\t\t    </div>
\t\t\t\t\t";
        }
        // line 83
        echo "
\t\t\t\t    <div class=\"ms-right\" id=\"fullpage\">

\t\t\t\t        <div class=\"ms-section section section-home\" data-anchor=\"home\">
\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t\t        \t
\t\t\t\t\t        \ttergfretr
\t\t\t\t        \t\t
\t\t\t\t        \t</div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"ms-section section section-studies\" data-anchor=\"studies\">
\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t        \t\tSection droite 2
\t\t\t\t        \t\t
\t\t\t\t        \t</div>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"ms-section section section-skills\" data-anchor=\"skills\">
\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t        \t\tSection droite 3
\t\t\t\t        \t\t
\t\t\t\t        \t</div>
\t\t\t\t        </div>
\t\t\t\t        ";
        // line 105
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "0")) {
            // line 106
            echo "\t\t\t\t\t        <div class=\"ms-section section section-contact\" data-anchor=\"contact\">
\t\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t\t\t\t\t\tSection droite 4
\t\t\t\t\t        \t</div>
\t\t\t\t\t        </div>
\t\t\t\t\t    ";
        } else {
            // line 112
            echo "\t\t\t\t\t    \t<div class=\"ms-section section section-contact\" data-anchor=\"contact\">
\t\t\t\t\t    \t\t<div class=\"slide\">
\t\t\t\t\t\t        \t<div class=\"wrap-section\">
\t\t\t\t\t\t\t\t\t\tftrfdgrvfgr
\t\t\t\t\t\t        \t</div>
\t\t\t\t\t    \t\t\t
\t\t\t\t\t    \t\t</div>
\t\t\t\t\t    \t\t<div class=\"slide\">
\t\t\t\t\t    \t\t\t<div class=\"wrap-section\">
\t\t\t\t\t\t\t\t\t\tazdedferefre
\t\t\t\t\t\t        \t</div>
\t\t\t\t\t    \t\t\t
\t\t\t\t\t    \t\t</div>
\t\t\t\t\t        </div>

\t\t\t\t\t    ";
        }
        // line 128
        echo "\t\t\t\t    </div>
\t\t\t\t</div>

\t\t\t\t";
        // line 131
        if (((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")) == "0")) {
            // line 132
            echo "
\t\t\t\t\t<div id=\"multiscroll-nav\" class=\"animated slideInRight multiscroll-nav-class\">
\t\t\t\t\t\t<ul id=\"multiscroll-menu\">\t\t\t\t\t\t    
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 138
        echo "

\t\t\t</div>
\t\t</div>

\t</div>
</div>

\t<script type=\"text/javascript\">
\t\tvar isMobile = \"";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")), "html", null, true);
        echo "\"; 
\t</script>
\t<script type=\"text/javascript\" src=\"ressources/js/main.js\"></script>
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
        return array (  193 => 147,  182 => 138,  174 => 132,  172 => 131,  167 => 128,  149 => 112,  141 => 106,  139 => 105,  115 => 83,  72 => 42,  70 => 41,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* <div id="st-container" class="st-container">*/
/* */
/* 	<nav class="st-menu st-effect-1" id="menu-1">*/
/* 		<ul>*/
/* 			<li><a class="icon icon-data hvr-bounce-to-right" href="#home">Accueil</a></li>*/
/* 			<li><a class="icon icon-location hvr-bounce-to-right" href="#studies">Formations</a></li>*/
/* 			<li><a class="icon icon-location hvr-bounce-to-right" href="#projects">Projets</a></li>*/
/* 			<li><a class="icon icon-study hvr-bounce-to-right" href="#skills">Compétences</a></li>*/
/* 			<li><a class="icon icon-photo hvr-bounce-to-right" href="#contact">Contact</a></li>*/
/* 		</ul>*/
/* 	</nav>*/
/* */
/* 	<!-- content push wrapper -->*/
/* 	<div class="st-pusher">*/
/* */
/* 		<div class="st-content container">*/
/* 			<div class="st-content-inner">*/
/* */
/* 				<header id="ha-header" class="ha-header ha-header-large">*/
/* 					<div class="ha-header-perspective">*/
/* 						<div class="ha-header-front">*/
/* 							<h1><span>Rémi FAIVRE</span></h1>*/
/* 								*/
/* 							<div id="st-trigger-effects" class="column">*/
/* 								<button data-effect="st-effect-1" class="button-menu">*/
/* 									<i></i>*/
/* 									<i></i>*/
/* 									<i></i>*/
/* 								</button>*/
/* 							</div>*/
/* 						</div>						*/
/* 					</div>*/
/* 				</header>*/
/* */
/* 				<div id="multiscroll">*/
/* */
/* 					{% if isMobile == "0" %}*/
/* 					    <div class="ms-left">*/
/* 					    	<!-- SECTION HOME -->*/
/* 					        <div class="ms-section" data-anchor="home">*/
/* 					        	<div class="wrap-section">*/
/* 					        	</div>*/
/* 					        </div>*/
/* 					        <!-- END SECTION HOME -->*/
/* 					        <!-- SECTION STUDIES -->*/
/* 					        <div class="ms-section" data-anchor="studies">*/
/* 					        	<div class="wrap-section">*/
/* 					        		<div class="section-container">*/
/* 					        			<h1>Formations</h1>*/
/* 					        			*/
/* 					        		</div>					        		*/
/* 					        	</div>*/
/* 				        	</div>*/
/* 				        	<!-- END SECTION STUDIES -->*/
/* 				        	<!-- SECTION SKILLS -->*/
/* 					        <div class="ms-section" data-anchor="skills">*/
/* 						    	<div class="wrap-section">					    		*/
/* 						    		<div class="section-container">*/
/* 						    			<h1>Compétences</h1>*/
/* 						    			*/
/* 						    		</div>*/
/* */
/* 						    	</div>*/
/* 					        </div>*/
/* 					        <!-- END SECTION SKILLS -->*/
/* 					        <!-- SECTION CONTACT -->*/
/* 					        <div class="ms-section" data-anchor="contact">*/
/* 						    	<div class="wrap-section">*/
/* 						    		<div class="section-container">*/
/* 						    			<h1>Contact</h1>*/
/* 						    			*/
/* 						    		</div>*/
/* 						    		*/
/* 						    	</div>*/
/* 					        </div>*/
/* 					        <!-- END SECTION CONTACT -->*/
/* 					    </div>*/
/* 					{% endif %}*/
/* */
/* 				    <div class="ms-right" id="fullpage">*/
/* */
/* 				        <div class="ms-section section section-home" data-anchor="home">*/
/* 				        	<div class="wrap-section">*/
/* 					        	*/
/* 					        	tergfretr*/
/* 				        		*/
/* 				        	</div>*/
/* 				        </div>*/
/* 				        <div class="ms-section section section-studies" data-anchor="studies">*/
/* 				        	<div class="wrap-section">*/
/* 				        		Section droite 2*/
/* 				        		*/
/* 				        	</div>*/
/* 				        </div>*/
/* 				        <div class="ms-section section section-skills" data-anchor="skills">*/
/* 				        	<div class="wrap-section">*/
/* 				        		Section droite 3*/
/* 				        		*/
/* 				        	</div>*/
/* 				        </div>*/
/* 				        {% if isMobile == "0" %}*/
/* 					        <div class="ms-section section section-contact" data-anchor="contact">*/
/* 					        	<div class="wrap-section">*/
/* 									Section droite 4*/
/* 					        	</div>*/
/* 					        </div>*/
/* 					    {% else %}*/
/* 					    	<div class="ms-section section section-contact" data-anchor="contact">*/
/* 					    		<div class="slide">*/
/* 						        	<div class="wrap-section">*/
/* 										ftrfdgrvfgr*/
/* 						        	</div>*/
/* 					    			*/
/* 					    		</div>*/
/* 					    		<div class="slide">*/
/* 					    			<div class="wrap-section">*/
/* 										azdedferefre*/
/* 						        	</div>*/
/* 					    			*/
/* 					    		</div>*/
/* 					        </div>*/
/* */
/* 					    {% endif %}*/
/* 				    </div>*/
/* 				</div>*/
/* */
/* 				{% if isMobile == "0" %}*/
/* */
/* 					<div id="multiscroll-nav" class="animated slideInRight multiscroll-nav-class">*/
/* 						<ul id="multiscroll-menu">						    */
/* 						</ul>*/
/* 					</div>*/
/* 				{% endif %}*/
/* */
/* */
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* 	<script type="text/javascript">*/
/* 		var isMobile = "{{ isMobile }}"; */
/* 	</script>*/
/* 	<script type="text/javascript" src="ressources/js/main.js"></script>*/
/* {% endblock %}*/
/* */
/* */
