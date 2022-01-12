<?php

class Standard_action_contact_a86c869d265c901f8fcfd5fee987ae9f6c7662f7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Border
 */
public function section_5d10d3f42121c3aa0d7923d1f05cccf56ef176e5(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['data'] = NULL;
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array4);
$array3['colPos'] = 3;
$array5 = array (
);$array3['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.3.slide', $array5);
$arguments1['data'] = $array3;
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

    <section class="hero-wrap hero-wrap-2" style="background-image: url( );" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs mb-2"><span class="mr-2">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return '<span>Perkeo</span>Apartments';
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['aria'] = NULL;
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['target'] = NULL;
$arguments6['rel'] = NULL;
$arguments6['pageUid'] = NULL;
$arguments6['pageType'] = NULL;
$arguments6['noCache'] = NULL;
$arguments6['language'] = NULL;
$arguments6['noCacheHash'] = NULL;
$arguments6['section'] = NULL;
$arguments6['linkAccessRestrictedPages'] = NULL;
$arguments6['additionalParams'] = NULL;
$arguments6['absolute'] = NULL;
$arguments6['addQueryString'] = NULL;
$arguments6['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments6['addQueryStringMethod'] = NULL;
$arguments6['pageUid'] = 1;
// Rendering Array
$array8 = array();
// Rendering Array
$array9 = array();
$array9['foo'] = 'bar';
$array8['extension_key'] = $array9;
$arguments6['additionalParams'] = $array8;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
                 <i class="fa fa-chevron-right"></i></span> <span>Kontakt <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Kontakt</h1>
        </div>
      </div>
    </div>
  </section>

';

return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output10 = '';

$output10 .= '

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['data'] = NULL;
$arguments11['typoscriptObjectPath'] = NULL;
$arguments11['currentValueKey'] = NULL;
$arguments11['table'] = '';
$arguments11['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array14);
$array13['colPos'] = 8;
$array15 = array (
);$array13['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide', $array15);
$arguments11['data'] = $array13;
$renderChildrenClosure12 = ($arguments11['data'] !== null) ? function() use ($arguments11) { return $arguments11['data']; } : $renderChildrenClosure12;
$output10 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '

<div class="section section-default ftco-animate">
      
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['data'] = NULL;
$arguments16['typoscriptObjectPath'] = NULL;
$arguments16['currentValueKey'] = NULL;
$arguments16['table'] = '';
$arguments16['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array19);
$array18['colPos'] = 0;
$array20 = array (
);$array18['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide', $array20);
$arguments16['data'] = $array18;
$renderChildrenClosure17 = ($arguments16['data'] !== null) ? function() use ($arguments16) { return $arguments16['data']; } : $renderChildrenClosure17;
$output10 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output10 .= '
            
</div>    
   

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row no-gutters">              

                        <div class="col-md-8">

                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['data'] = NULL;
$arguments21['typoscriptObjectPath'] = NULL;
$arguments21['currentValueKey'] = NULL;
$arguments21['table'] = '';
$arguments21['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array24);
$array23['colPos'] = 14;
$array25 = array (
);$array23['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.14.slide', $array25);
$arguments21['data'] = $array23;
$renderChildrenClosure22 = ($arguments21['data'] !== null) ? function() use ($arguments21) { return $arguments21['data']; } : $renderChildrenClosure22;
$output10 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output10 .= '
                        </div>
        
                        <div class="col-md-4 p-4 p-md-5 bg-white">
                    
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['data'] = NULL;
$arguments26['typoscriptObjectPath'] = NULL;
$arguments26['currentValueKey'] = NULL;
$arguments26['table'] = '';
$arguments26['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array29);
$array28['colPos'] = 15;
$array30 = array (
);$array28['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.15.slide', $array30);
$arguments26['data'] = $array28;
$renderChildrenClosure27 = ($arguments26['data'] !== null) ? function() use ($arguments26) { return $arguments26['data']; } : $renderChildrenClosure27;
$output10 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output10 .= '
                        </div>
        </div>
    </div>
   
    <div class="container ftco-animate">
        <div class="row no-gutters">

          <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
            <div class="contact-wrap w-100 p-md-5 p-4">
                <h3 class="mb-4">Get in touch</h3> 
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['data'] = NULL;
$arguments31['typoscriptObjectPath'] = NULL;
$arguments31['currentValueKey'] = NULL;
$arguments31['table'] = '';
$arguments31['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array34);
$array33['colPos'] = 16;
$array35 = array (
);$array33['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.16.slide', $array35);
$arguments31['data'] = $array33;
$renderChildrenClosure32 = ($arguments31['data'] !== null) ? function() use ($arguments31) { return $arguments31['data']; } : $renderChildrenClosure32;
$output10 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output10 .= '
            </div>
          </div>

          <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
            <div class="info-wrap bg-primary w-100 p-md-5 p-4">
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['data'] = NULL;
$arguments36['typoscriptObjectPath'] = NULL;
$arguments36['currentValueKey'] = NULL;
$arguments36['table'] = '';
$arguments36['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array39);
$array38['colPos'] = 17;
$array40 = array (
);$array38['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.17.slide', $array40);
$arguments36['data'] = $array38;
$renderChildrenClosure37 = ($arguments36['data'] !== null) ? function() use ($arguments36) { return $arguments36['data']; } : $renderChildrenClosure37;
$output10 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output10 .= '
          </div>
          </div>
        </div>
    </div>
</section>

      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['data'] = NULL;
$arguments41['typoscriptObjectPath'] = NULL;
$arguments41['currentValueKey'] = NULL;
$arguments41['table'] = '';
$arguments41['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array44);
$array43['colPos'] = 9;
$array45 = array (
);$array43['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide', $array45);
$arguments41['data'] = $array43;
$renderChildrenClosure42 = ($arguments41['data'] !== null) ? function() use ($arguments41) { return $arguments41['data']; } : $renderChildrenClosure42;
$output10 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output10 .= '

';

return $output10;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output46 = '';

$output46 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['section'] = NULL;
$arguments47['partial'] = NULL;
$arguments47['delegate'] = NULL;
$arguments47['renderable'] = NULL;
$arguments47['arguments'] = array (
);
$arguments47['optional'] = false;
$arguments47['default'] = NULL;
$arguments47['contentAs'] = NULL;
$arguments47['debug'] = true;
$arguments47['partial'] = 'Structure/FooterContent';
$arguments47['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
';

return $output46;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output50 = '';

$output50 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['name'] = NULL;
$arguments51['name'] = 'Default';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output50 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['data'] = NULL;
$arguments56['typoscriptObjectPath'] = NULL;
$arguments56['currentValueKey'] = NULL;
$arguments56['table'] = '';
$arguments56['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array59);
$array58['colPos'] = 3;
$array60 = array (
);$array58['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.3.slide', $array60);
$arguments56['data'] = $array58;
$renderChildrenClosure57 = ($arguments56['data'] !== null) ? function() use ($arguments56) { return $arguments56['data']; } : $renderChildrenClosure57;
$output55 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '

    <section class="hero-wrap hero-wrap-2" style="background-image: url( );" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs mb-2"><span class="mr-2">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return '<span>Perkeo</span>Apartments';
};
$arguments61 = array();
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['aria'] = NULL;
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['target'] = NULL;
$arguments61['rel'] = NULL;
$arguments61['pageUid'] = NULL;
$arguments61['pageType'] = NULL;
$arguments61['noCache'] = NULL;
$arguments61['language'] = NULL;
$arguments61['noCacheHash'] = NULL;
$arguments61['section'] = NULL;
$arguments61['linkAccessRestrictedPages'] = NULL;
$arguments61['additionalParams'] = NULL;
$arguments61['absolute'] = NULL;
$arguments61['addQueryString'] = NULL;
$arguments61['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments61['addQueryStringMethod'] = NULL;
$arguments61['pageUid'] = 1;
// Rendering Array
$array63 = array();
// Rendering Array
$array64 = array();
$array64['foo'] = 'bar';
$array63['extension_key'] = $array64;
$arguments61['additionalParams'] = $array63;

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output55 .= '
                 <i class="fa fa-chevron-right"></i></span> <span>Kontakt <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Kontakt</h1>
        </div>
      </div>
    </div>
  </section>

';
return $output55;
};
$arguments53 = array();
$arguments53['name'] = NULL;
$arguments53['name'] = 'Border';

$output50 .= NULL;

$output50 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['data'] = NULL;
$arguments68['typoscriptObjectPath'] = NULL;
$arguments68['currentValueKey'] = NULL;
$arguments68['table'] = '';
$arguments68['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array70 = array();
$array71 = array (
);$array70['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array71);
$array70['colPos'] = 8;
$array72 = array (
);$array70['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide', $array72);
$arguments68['data'] = $array70;
$renderChildrenClosure69 = ($arguments68['data'] !== null) ? function() use ($arguments68) { return $arguments68['data']; } : $renderChildrenClosure69;
$output67 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '

<div class="section section-default ftco-animate">
      
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['data'] = NULL;
$arguments73['typoscriptObjectPath'] = NULL;
$arguments73['currentValueKey'] = NULL;
$arguments73['table'] = '';
$arguments73['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array76);
$array75['colPos'] = 0;
$array77 = array (
);$array75['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide', $array77);
$arguments73['data'] = $array75;
$renderChildrenClosure74 = ($arguments73['data'] !== null) ? function() use ($arguments73) { return $arguments73['data']; } : $renderChildrenClosure74;
$output67 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output67 .= '
            
</div>    
   

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row no-gutters">              

                        <div class="col-md-8">

                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['data'] = NULL;
$arguments78['typoscriptObjectPath'] = NULL;
$arguments78['currentValueKey'] = NULL;
$arguments78['table'] = '';
$arguments78['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array81);
$array80['colPos'] = 14;
$array82 = array (
);$array80['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.14.slide', $array82);
$arguments78['data'] = $array80;
$renderChildrenClosure79 = ($arguments78['data'] !== null) ? function() use ($arguments78) { return $arguments78['data']; } : $renderChildrenClosure79;
$output67 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output67 .= '
                        </div>
        
                        <div class="col-md-4 p-4 p-md-5 bg-white">
                    
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['data'] = NULL;
$arguments83['typoscriptObjectPath'] = NULL;
$arguments83['currentValueKey'] = NULL;
$arguments83['table'] = '';
$arguments83['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array86);
$array85['colPos'] = 15;
$array87 = array (
);$array85['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.15.slide', $array87);
$arguments83['data'] = $array85;
$renderChildrenClosure84 = ($arguments83['data'] !== null) ? function() use ($arguments83) { return $arguments83['data']; } : $renderChildrenClosure84;
$output67 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output67 .= '
                        </div>
        </div>
    </div>
   
    <div class="container ftco-animate">
        <div class="row no-gutters">

          <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
            <div class="contact-wrap w-100 p-md-5 p-4">
                <h3 class="mb-4">Get in touch</h3> 
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['data'] = NULL;
$arguments88['typoscriptObjectPath'] = NULL;
$arguments88['currentValueKey'] = NULL;
$arguments88['table'] = '';
$arguments88['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array91);
$array90['colPos'] = 16;
$array92 = array (
);$array90['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.16.slide', $array92);
$arguments88['data'] = $array90;
$renderChildrenClosure89 = ($arguments88['data'] !== null) ? function() use ($arguments88) { return $arguments88['data']; } : $renderChildrenClosure89;
$output67 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output67 .= '
            </div>
          </div>

          <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
            <div class="info-wrap bg-primary w-100 p-md-5 p-4">
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['data'] = NULL;
$arguments93['typoscriptObjectPath'] = NULL;
$arguments93['currentValueKey'] = NULL;
$arguments93['table'] = '';
$arguments93['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array96);
$array95['colPos'] = 17;
$array97 = array (
);$array95['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.17.slide', $array97);
$arguments93['data'] = $array95;
$renderChildrenClosure94 = ($arguments93['data'] !== null) ? function() use ($arguments93) { return $arguments93['data']; } : $renderChildrenClosure94;
$output67 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output67 .= '
          </div>
          </div>
        </div>
    </div>
</section>

      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['data'] = NULL;
$arguments98['typoscriptObjectPath'] = NULL;
$arguments98['currentValueKey'] = NULL;
$arguments98['table'] = '';
$arguments98['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array101);
$array100['colPos'] = 9;
$array102 = array (
);$array100['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide', $array102);
$arguments98['data'] = $array100;
$renderChildrenClosure99 = ($arguments98['data'] !== null) ? function() use ($arguments98) { return $arguments98['data']; } : $renderChildrenClosure99;
$output67 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output67 .= '

';
return $output67;
};
$arguments65 = array();
$arguments65['name'] = NULL;
$arguments65['name'] = 'Main';

$output50 .= NULL;

$output50 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['section'] = NULL;
$arguments106['partial'] = NULL;
$arguments106['delegate'] = NULL;
$arguments106['renderable'] = NULL;
$arguments106['arguments'] = array (
);
$arguments106['optional'] = false;
$arguments106['default'] = NULL;
$arguments106['contentAs'] = NULL;
$arguments106['debug'] = true;
$arguments106['partial'] = 'Structure/FooterContent';
$arguments106['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
';
return $output105;
};
$arguments103 = array();
$arguments103['name'] = NULL;
$arguments103['name'] = 'Footer';

$output50 .= NULL;

$output50 .= '

';

return $output50;
}


}
#