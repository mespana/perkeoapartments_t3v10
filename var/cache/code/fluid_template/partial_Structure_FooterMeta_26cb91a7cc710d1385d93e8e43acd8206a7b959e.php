<?php

class partial_Structure_FooterMeta_26cb91a7cc710d1385d93e8e43acd8206a7b959e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
    <section class="section footer-section footer-section-meta">
        <div class="frame frame-background-none frame-space-before-none frame-space-after-none">
            <div class="frame-group-container">
                <div class="frame-group-inner">
                    <div class="frame-container">
                        <div class="frame-inner">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return '
                                <div class="footer-meta">
                                
                                </div>
                            ';
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('theme.meta.enable', $array13);

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = $renderChildrenClosure11;

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
                           <!-- ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
                                <div class="footer-language">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['section'] = NULL;
$arguments21['partial'] = NULL;
$arguments21['delegate'] = NULL;
$arguments21['renderable'] = NULL;
$arguments21['arguments'] = array (
);
$arguments21['optional'] = false;
$arguments21['default'] = NULL;
$arguments21['contentAs'] = NULL;
$arguments21['debug'] = true;
$arguments21['partial'] = 'Navigation/Language';
$arguments21['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
                                </div>
                            ';
return $output20;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['0'] = $renderingContext->getVariableProvider()->getByPath('theme.language.enable', $array18);

$expression19 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);
$arguments15['__thenClosure'] = $renderChildrenClosure16;

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output9 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
                                <div class="footer-copyright">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['section'] = NULL;
$arguments30['partial'] = NULL;
$arguments30['delegate'] = NULL;
$arguments30['renderable'] = NULL;
$arguments30['arguments'] = array (
);
$arguments30['optional'] = false;
$arguments30['default'] = NULL;
$arguments30['contentAs'] = NULL;
$arguments30['debug'] = true;
$arguments30['partial'] = 'Structure/Copyright';
$arguments30['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
                                </div>
                            ';
return $output29;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('theme.copyright.enable', $array27);

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = $renderChildrenClosure25;

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output9 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
                                <div class="footer-sociallinks">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['section'] = NULL;
$arguments39['partial'] = NULL;
$arguments39['delegate'] = NULL;
$arguments39['renderable'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['optional'] = false;
$arguments39['default'] = NULL;
$arguments39['contentAs'] = NULL;
$arguments39['debug'] = true;
$arguments39['partial'] = 'Structure/SocialLinks';
$arguments39['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
                                </div>
                            ';
return $output38;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('theme.socialmedia.enable', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = $renderChildrenClosure34;

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output9 .= '-->

                            <!--<div class="w-100 mt-5 border-top py-5">-->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-8">

                                            <p class="copyright mb-0"><!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                                <!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. --></p>
                                        </div>
                            
                                        <div class="col-md-6 col-lg-4 text-md-right">
                                            
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['section'] = NULL;
$arguments42['partial'] = NULL;
$arguments42['delegate'] = NULL;
$arguments42['renderable'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['optional'] = false;
$arguments42['default'] = NULL;
$arguments42['contentAs'] = NULL;
$arguments42['debug'] = true;
$arguments42['partial'] = 'Navigation/Meta';
$arguments42['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output9 .= '
                                                <!--<a class="mr-md-3" href="#">Terms</a>
                                                <a class="mr-md-3" href="#">Privacy</a>
                                                <a class="mr-md-3" href="#">Compliances</a>-->
                                            
                                        </div>
                                  </div>
                                </div>
                            <!--</div>-->
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
';
return $output9;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('theme.meta.enable', $array4);
$array3['1'] = ' || ';
$array5 = array (
);$array3['2'] = $renderingContext->getVariableProvider()->getByPath('theme.language.enable', $array5);
$array3['3'] = ' || ';
$array6 = array (
);$array3['4'] = $renderingContext->getVariableProvider()->getByPath('theme.copyright.enable', $array6);
$array3['5'] = ' || ';
$array7 = array (
);$array3['6'] = $renderingContext->getVariableProvider()->getByPath('theme.socialmedia.enable', $array7);

$expression8 = function($context) {return (((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"])) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node6"]));};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression8(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#