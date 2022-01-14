<?php

class Standard_action_accordion_a82ff74ea9de0e1eeb9d72ae67b02bce73b2d8ab extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['value'] = NULL;
$arguments7['name'] = NULL;
$arguments7['name'] = 'activeElement';
$array9 = array (
);$arguments7['value'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.default_element', $array9);
$renderChildrenClosure8 = ($arguments7['value'] !== null) ? function() use ($arguments7) { return $arguments7['value']; } : $renderChildrenClosure8;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['value'] = NULL;
$arguments10['name'] = NULL;
$arguments10['name'] = 'currentVariants';
$array12 = array (
);$arguments10['value'] = $renderingContext->getVariableProvider()->getByPath('variants', $array12);
$renderChildrenClosure11 = ($arguments10['value'] !== null) ? function() use ($arguments10) { return $arguments10['value']; } : $renderChildrenClosure11;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output6 .= '
        <div class="accordion" id="accordion-';
$array13 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array13)]);

$output6 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
                <div class="accordion-item">
                    <h4 class="accordion-header" id="accordion-heading-';
$array18 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array18)]);

$output17 .= '-';
$array19 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array19)]);

$output17 .= '">
                        <button class="accordion-button';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['0'] = $renderingContext->getVariableProvider()->getByPath('activeElement', $array23);
$array22['1'] = ' == ';
$array24 = array (
);$array22['2'] = $renderingContext->getVariableProvider()->getByPath('record.data.uid', $array24);

$expression25 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['else'] = ' collapsed';
$arguments20['__thenClosure'] = $renderChildrenClosure21;

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output17 .= '" type="button"
                            data-toggle="collapse"
                            data-target="#accordion-';
$array26 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array26)]);

$output17 .= '-';
$array27 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array27)]);

$output17 .= '"
                            data-parent="#accordion-';
$array28 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array28)]);

$output17 .= '"
                            data-bs-toggle="collapse"
                            data-bs-target="#accordion-';
$array29 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array29)]);

$output17 .= '-';
$array30 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array30)]);

$output17 .= '"
                            data-bs-parent="#accordion-';
$array31 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array31)]);

$output17 .= '"
                            aria-expanded="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('activeElement', $array35);
$array34['1'] = ' == ';
$array36 = array (
);$array34['2'] = $renderingContext->getVariableProvider()->getByPath('record.data.uid', $array36);

$expression37 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['then'] = 'true';
$arguments32['else'] = 'false';

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output17 .= '"
                            aria-controls="accordion-';
$array38 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array38)]);

$output17 .= '-';
$array39 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array39)]);

$output17 .= '"
                        >
                            ';
$array40 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.header', $array40)]);

$output17 .= '
                        </button>
                    </h4>
                    <div id="accordion-';
$array41 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array41)]);

$output17 .= '-';
$array42 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array42)]);

$output17 .= '" class="accordion-collapse collapse';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['0'] = $renderingContext->getVariableProvider()->getByPath('activeElement', $array46);
$array45['1'] = ' == ';
$array47 = array (
);$array45['2'] = $renderingContext->getVariableProvider()->getByPath('record.data.uid', $array47);

$expression48 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);
$arguments43['then'] = ' show';

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output17 .= '" aria-labelledby="accordion-heading-';
$array49 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array49)]);

$output17 .= '-';
$array50 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array50)]);

$output17 .= '" data-parent="#accordion-';
$array51 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array51)]);

$output17 .= '" data-bs-parent="#accordion-';
$array52 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array52)]);

$output17 .= '">
                        <div class="accordion-body">
                            <div class="accordion-content accordion-content-';
$array53 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.mediaorient', $array53)]);

$output17 .= '">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                                    <div class="accordion-content-item accordion-content-media">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$array62 = array (
);return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.contentelements.accordion.{record.data.mediaorient}', $array62);
};
$arguments60 = array();
$arguments60['value'] = NULL;
$arguments60['name'] = NULL;
$arguments60['name'] = 'imageConfig';
$renderChildrenClosure61 = ($arguments60['value'] !== null) ? function() use ($arguments60) { return $arguments60['value']; } : $renderChildrenClosure61;
$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output59 .= '
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['as'] = NULL;
$arguments63['variants'] = NULL;
$arguments63['multiplier'] = NULL;
$arguments63['gutters'] = NULL;
$arguments63['corrections'] = NULL;
$arguments63['aspectRatio'] = NULL;
$arguments63['as'] = 'variants';
$array65 = array (
);$arguments63['variants'] = $renderingContext->getVariableProvider()->getByPath('currentVariants', $array65);
$array66 = array (
);$arguments63['multiplier'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.multiplier', $array66);
$array67 = array (
);$arguments63['gutters'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.gutters', $array67);
$array68 = array (
);$arguments63['corrections'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.corrections', $array68);

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output59 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['section'] = NULL;
$arguments69['partial'] = NULL;
$arguments69['delegate'] = NULL;
$arguments69['renderable'] = NULL;
$arguments69['arguments'] = array (
);
$arguments69['optional'] = false;
$arguments69['default'] = NULL;
$arguments69['contentAs'] = NULL;
$arguments69['debug'] = true;
$arguments69['partial'] = 'Media/Gallery';
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['files'] = $renderingContext->getVariableProvider()->getByPath('record.files', $array72);
$array73 = array (
);$array71['data'] = $renderingContext->getVariableProvider()->getByPath('record.data', $array73);
$array74 = array (
);$array71['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array74);
$array75 = array (
);$array71['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array75);
$arguments69['arguments'] = $array71;

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output59 .= '
                                    </div>
                                ';
return $output59;
};
$arguments54 = array();
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$arguments54['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array56 = array();
$array57 = array (
);$array56['0'] = $renderingContext->getVariableProvider()->getByPath('record.files', $array57);

$expression58 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments54['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)
					),
					$renderingContext
				);
$arguments54['__thenClosure'] = $renderChildrenClosure55;

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output17 .= '
                                <div class="accordion-content-item accordion-content-text">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$array78 = array (
);return $renderingContext->getVariableProvider()->getByPath('record.data.bodytext', $array78);
};
$arguments76 = array();
$arguments76['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output17 .= '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
return $output17;
};
$arguments14 = array();
$arguments14['each'] = NULL;
$arguments14['as'] = NULL;
$arguments14['key'] = NULL;
$arguments14['reverse'] = false;
$arguments14['iteration'] = NULL;
$array16 = array (
);$arguments14['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array16);
$arguments14['as'] = 'record';
$arguments14['iteration'] = 'iteration';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output6 .= '
        </div>
    ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('records', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
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
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output79 = '';

$output79 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['name'] = NULL;
$arguments80['name'] = 'Default';

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output79 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['value'] = NULL;
$arguments91['name'] = NULL;
$arguments91['name'] = 'activeElement';
$array93 = array (
);$arguments91['value'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.default_element', $array93);
$renderChildrenClosure92 = ($arguments91['value'] !== null) ? function() use ($arguments91) { return $arguments91['value']; } : $renderChildrenClosure92;
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);

$output90 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['value'] = NULL;
$arguments94['name'] = NULL;
$arguments94['name'] = 'currentVariants';
$array96 = array (
);$arguments94['value'] = $renderingContext->getVariableProvider()->getByPath('variants', $array96);
$renderChildrenClosure95 = ($arguments94['value'] !== null) ? function() use ($arguments94) { return $arguments94['value']; } : $renderChildrenClosure95;
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext)]);

$output90 .= '
        <div class="accordion" id="accordion-';
$array97 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array97)]);

$output90 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
                <div class="accordion-item">
                    <h4 class="accordion-header" id="accordion-heading-';
$array102 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array102)]);

$output101 .= '-';
$array103 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array103)]);

$output101 .= '">
                        <button class="accordion-button';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['then'] = NULL;
$arguments104['else'] = NULL;
$arguments104['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array106 = array();
$array107 = array (
);$array106['0'] = $renderingContext->getVariableProvider()->getByPath('activeElement', $array107);
$array106['1'] = ' == ';
$array108 = array (
);$array106['2'] = $renderingContext->getVariableProvider()->getByPath('record.data.uid', $array108);

$expression109 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments104['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression109(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array106)
					),
					$renderingContext
				);
$arguments104['else'] = ' collapsed';
$arguments104['__thenClosure'] = $renderChildrenClosure105;

$output101 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output101 .= '" type="button"
                            data-toggle="collapse"
                            data-target="#accordion-';
$array110 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array110)]);

$output101 .= '-';
$array111 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array111)]);

$output101 .= '"
                            data-parent="#accordion-';
$array112 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array112)]);

$output101 .= '"
                            data-bs-toggle="collapse"
                            data-bs-target="#accordion-';
$array113 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array113)]);

$output101 .= '-';
$array114 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array114)]);

$output101 .= '"
                            data-bs-parent="#accordion-';
$array115 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array115)]);

$output101 .= '"
                            aria-expanded="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('activeElement', $array119);
$array118['1'] = ' == ';
$array120 = array (
);$array118['2'] = $renderingContext->getVariableProvider()->getByPath('record.data.uid', $array120);

$expression121 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments116['then'] = 'true';
$arguments116['else'] = 'false';

$output101 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output101 .= '"
                            aria-controls="accordion-';
$array122 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array122)]);

$output101 .= '-';
$array123 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array123)]);

$output101 .= '"
                        >
                            ';
$array124 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.header', $array124)]);

$output101 .= '
                        </button>
                    </h4>
                    <div id="accordion-';
$array125 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array125)]);

$output101 .= '-';
$array126 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array126)]);

$output101 .= '" class="accordion-collapse collapse';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['then'] = NULL;
$arguments127['else'] = NULL;
$arguments127['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array129 = array();
$array130 = array (
);$array129['0'] = $renderingContext->getVariableProvider()->getByPath('activeElement', $array130);
$array129['1'] = ' == ';
$array131 = array (
);$array129['2'] = $renderingContext->getVariableProvider()->getByPath('record.data.uid', $array131);

$expression132 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments127['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)
					),
					$renderingContext
				);
$arguments127['then'] = ' show';

$output101 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output101 .= '" aria-labelledby="accordion-heading-';
$array133 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array133)]);

$output101 .= '-';
$array134 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array134)]);

$output101 .= '" data-parent="#accordion-';
$array135 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array135)]);

$output101 .= '" data-bs-parent="#accordion-';
$array136 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array136)]);

$output101 .= '">
                        <div class="accordion-body">
                            <div class="accordion-content accordion-content-';
$array137 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.mediaorient', $array137)]);

$output101 .= '">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
                                    <div class="accordion-content-item accordion-content-media">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$array146 = array (
);return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.contentelements.accordion.{record.data.mediaorient}', $array146);
};
$arguments144 = array();
$arguments144['value'] = NULL;
$arguments144['name'] = NULL;
$arguments144['name'] = 'imageConfig';
$renderChildrenClosure145 = ($arguments144['value'] !== null) ? function() use ($arguments144) { return $arguments144['value']; } : $renderChildrenClosure145;
$output143 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext)]);

$output143 .= '
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['as'] = NULL;
$arguments147['variants'] = NULL;
$arguments147['multiplier'] = NULL;
$arguments147['gutters'] = NULL;
$arguments147['corrections'] = NULL;
$arguments147['aspectRatio'] = NULL;
$arguments147['as'] = 'variants';
$array149 = array (
);$arguments147['variants'] = $renderingContext->getVariableProvider()->getByPath('currentVariants', $array149);
$array150 = array (
);$arguments147['multiplier'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.multiplier', $array150);
$array151 = array (
);$arguments147['gutters'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.gutters', $array151);
$array152 = array (
);$arguments147['corrections'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.corrections', $array152);

$output143 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext)]);

$output143 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['section'] = NULL;
$arguments153['partial'] = NULL;
$arguments153['delegate'] = NULL;
$arguments153['renderable'] = NULL;
$arguments153['arguments'] = array (
);
$arguments153['optional'] = false;
$arguments153['default'] = NULL;
$arguments153['contentAs'] = NULL;
$arguments153['debug'] = true;
$arguments153['partial'] = 'Media/Gallery';
// Rendering Array
$array155 = array();
$array156 = array (
);$array155['files'] = $renderingContext->getVariableProvider()->getByPath('record.files', $array156);
$array157 = array (
);$array155['data'] = $renderingContext->getVariableProvider()->getByPath('record.data', $array157);
$array158 = array (
);$array155['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array158);
$array159 = array (
);$array155['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array159);
$arguments153['arguments'] = $array155;

$output143 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output143 .= '
                                    </div>
                                ';
return $output143;
};
$arguments138 = array();
$arguments138['then'] = NULL;
$arguments138['else'] = NULL;
$arguments138['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array140 = array();
$array141 = array (
);$array140['0'] = $renderingContext->getVariableProvider()->getByPath('record.files', $array141);

$expression142 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments138['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression142(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array140)
					),
					$renderingContext
				);
$arguments138['__thenClosure'] = $renderChildrenClosure139;

$output101 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output101 .= '
                                <div class="accordion-content-item accordion-content-text">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$array162 = array (
);return $renderingContext->getVariableProvider()->getByPath('record.data.bodytext', $array162);
};
$arguments160 = array();
$arguments160['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output101 .= '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
return $output101;
};
$arguments98 = array();
$arguments98['each'] = NULL;
$arguments98['as'] = NULL;
$arguments98['key'] = NULL;
$arguments98['reverse'] = false;
$arguments98['iteration'] = NULL;
$array100 = array (
);$arguments98['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array100);
$arguments98['as'] = 'record';
$arguments98['iteration'] = 'iteration';

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output90 .= '
        </div>
    ';
return $output90;
};
$arguments85 = array();
$arguments85['then'] = NULL;
$arguments85['else'] = NULL;
$arguments85['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['0'] = $renderingContext->getVariableProvider()->getByPath('records', $array88);

$expression89 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments85['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression89(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)
					),
					$renderingContext
				);
$arguments85['__thenClosure'] = $renderChildrenClosure86;

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '

';
return $output84;
};
$arguments82 = array();
$arguments82['name'] = NULL;
$arguments82['name'] = 'Main';

$output79 .= NULL;

$output79 .= '

';

return $output79;
}


}
#