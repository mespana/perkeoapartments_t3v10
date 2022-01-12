<?php

class Standard_action_vacationRental_afb3501fe9eeb2c77d520349941aad217bcab241 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
';

return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output6 = '';

$output6 .= '
  

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['data'] = NULL;
$arguments7['typoscriptObjectPath'] = NULL;
$arguments7['currentValueKey'] = NULL;
$arguments7['table'] = '';
$arguments7['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array10);
$array9['colPos'] = 8;
$array11 = array (
);$array9['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide', $array11);
$arguments7['data'] = $array9;
$renderChildrenClosure8 = ($arguments7['data'] !== null) ? function() use ($arguments7) { return $arguments7['data']; } : $renderChildrenClosure8;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '

    <div class="section section-default ftco-animate">
      
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['data'] = NULL;
$arguments12['typoscriptObjectPath'] = NULL;
$arguments12['currentValueKey'] = NULL;
$arguments12['table'] = '';
$arguments12['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array15);
$array14['colPos'] = 0;
$array16 = array (
);$array14['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide', $array16);
$arguments12['data'] = $array14;
$renderChildrenClosure13 = ($arguments12['data'] !== null) ? function() use ($arguments12) { return $arguments12['data']; } : $renderChildrenClosure13;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output6 .= '
    </div>    
   
    <section class="ftco-section bg-light">
      <div class="container-fluid px-md-0">
        <div class="row no-gutters justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
              <h2>Apartments</h2>
            </div>
          </div>
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img" style="background-image: url(../typo3conf/ext/vacation_rental/Resources/Public/Images/deluxe-1.jpg);"></a>
                          <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                                <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                                <h3 class="mb-3"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/deluxe-apartment">Deluxe Apartment</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Max:</span> 5 Persons</li>
                                    <li><span>Size:</span> 120 m2</li>
                                    <li><span>View:</span> Neckar Blick</li>
                                    <li><span>Bed:</span> 5</li>
                                </ul>
                                <p class="pt-1"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/deluxe-apartment" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="col-lg-6">
                  <div class="room-wrap d-md-flex">
                      <a href="#" class="img" style="background-image: url(../typo3conf/ext/vacation_rental/Resources/Public/Images/deluxe-3.jpg);"></a>
                      <div class="half left-arrow d-flex align-items-center">
                          <div class="text p-4 p-xl-5 text-center">
                              <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                              <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                              <h3 class="mb-3"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/deluxe-apartment">Deluxe Apartment</a></h3>
                                  <ul class="list-accomodation">
                                  <li><span>Max:</span> 5 Persons</li>
                                  <li><span>Size:</span> 120 m2</li>
                                  <li><span>View:</span> Neckar Blick</li>
                                  <li><span>Bed:</span> 5</li>
                              </ul>
                              <p class="pt-1"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/deluxe-apartment" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="room-wrap d-md-flex">
                      <a href="#" class="img order-md-last" style="background-image: url(../typo3conf/ext/vacation_rental/Resources/Public/Images/studio-2.jpg);"></a>
                      <div class="half right-arrow d-flex align-items-center">
                          <div class="text p-4 p-xl-5 text-center">
                              <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                              <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                              <h3 class="mb-3"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/studio-apartment-2">Studio apartment</a></h3>
                                  <ul class="list-accomodation">
                                  <li><span>Max:</span> 3 Persons</li>
                                  <li><span>Size:</span> 35 m2</li>
                                  <li><span>View:</span> zum Innenhof</li>
                                  <li><span>Bed:</span> 2</li>
                              </ul>
                              <p class="pt-1"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/studio-apartment-2" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="room-wrap d-md-flex">
                      <a href="#" class="img order-md-last" style="background-image: url(../typo3conf/ext/vacation_rental/Resources/Public/Images/studio-3.jpg);"></a>
                      <div class="half right-arrow d-flex align-items-center">
                          <div class="text p-4 p-xl-5 text-center">
                              <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                              <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                              <h3 class="mb-3"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/studio-apartment-3">Studio apartment</a></h3>
                                  <ul class="list-accomodation">
                                  <li><span>Max:</span> 3 Persons</li>
                                  <li><span>Size:</span> 35 m2</li>
                                  <li><span>View:</span> zum Innenhof</li>
                                  <li><span>Bed:</span> 2</li>
                              </ul>
                              <p class="pt-1"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/studio-apartment-3" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
    

  <div class="container ftco-animate">
    <div class="section-row">
        <div class="section-column section-column-third">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['data'] = NULL;
$arguments17['typoscriptObjectPath'] = NULL;
$arguments17['currentValueKey'] = NULL;
$arguments17['table'] = '';
$arguments17['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array20);
$array19['colPos'] = 30;
$array21 = array (
);$array19['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.30.slide', $array21);
$arguments17['data'] = $array19;
$renderChildrenClosure18 = ($arguments17['data'] !== null) ? function() use ($arguments17) { return $arguments17['data']; } : $renderChildrenClosure18;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output6 .= '
        </div>
        <div class="section-column section-column-third">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['data'] = NULL;
$arguments22['typoscriptObjectPath'] = NULL;
$arguments22['currentValueKey'] = NULL;
$arguments22['table'] = '';
$arguments22['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array25);
$array24['colPos'] = 31;
$array26 = array (
);$array24['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.31.slide', $array26);
$arguments22['data'] = $array24;
$renderChildrenClosure23 = ($arguments22['data'] !== null) ? function() use ($arguments22) { return $arguments22['data']; } : $renderChildrenClosure23;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output6 .= '
        </div>
        <div class="section-column section-column-third">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['data'] = NULL;
$arguments27['typoscriptObjectPath'] = NULL;
$arguments27['currentValueKey'] = NULL;
$arguments27['table'] = '';
$arguments27['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array30);
$array29['colPos'] = 32;
$array31 = array (
);$array29['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.32.slide', $array31);
$arguments27['data'] = $array29;
$renderChildrenClosure28 = ($arguments27['data'] !== null) ? function() use ($arguments27) { return $arguments27['data']; } : $renderChildrenClosure28;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output6 .= '
        </div>
    </div>
  </div>

    <div class="container ftco-animate">
        <div class="row no-gutters">
          <div class="section-column section-column-half">
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['data'] = NULL;
$arguments32['typoscriptObjectPath'] = NULL;
$arguments32['currentValueKey'] = NULL;
$arguments32['table'] = '';
$arguments32['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array35);
$array34['colPos'] = 33;
$array36 = array (
);$array34['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.33.slide', $array36);
$arguments32['data'] = $array34;
$renderChildrenClosure33 = ($arguments32['data'] !== null) ? function() use ($arguments32) { return $arguments32['data']; } : $renderChildrenClosure33;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output6 .= '
          </div>
          <div class="section-column section-column-half">
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['data'] = NULL;
$arguments37['typoscriptObjectPath'] = NULL;
$arguments37['currentValueKey'] = NULL;
$arguments37['table'] = '';
$arguments37['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array40);
$array39['colPos'] = 34;
$array41 = array (
);$array39['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.34.slide', $array41);
$arguments37['data'] = $array39;
$renderChildrenClosure38 = ($arguments37['data'] !== null) ? function() use ($arguments37) { return $arguments37['data']; } : $renderChildrenClosure38;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output6 .= '
          </div>
        </div>
    </div>
  </div>
  </section>

      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['data'] = NULL;
$arguments42['typoscriptObjectPath'] = NULL;
$arguments42['currentValueKey'] = NULL;
$arguments42['table'] = '';
$arguments42['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array45);
$array44['colPos'] = 9;
$array46 = array (
);$array44['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide', $array46);
$arguments42['data'] = $array44;
$renderChildrenClosure43 = ($arguments42['data'] !== null) ? function() use ($arguments42) { return $arguments42['data']; } : $renderChildrenClosure43;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output6 .= '

';

return $output6;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output47 = '';

$output47 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['section'] = NULL;
$arguments48['partial'] = NULL;
$arguments48['delegate'] = NULL;
$arguments48['renderable'] = NULL;
$arguments48['arguments'] = array (
);
$arguments48['optional'] = false;
$arguments48['default'] = NULL;
$arguments48['contentAs'] = NULL;
$arguments48['debug'] = true;
$arguments48['partial'] = 'Structure/FooterContent';
$arguments48['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
';

return $output47;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output51 = '';

$output51 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['name'] = NULL;
$arguments52['name'] = 'Default';

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output51 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
  
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['data'] = NULL;
$arguments57['typoscriptObjectPath'] = NULL;
$arguments57['currentValueKey'] = NULL;
$arguments57['table'] = '';
$arguments57['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array60);
$array59['colPos'] = 3;
$array61 = array (
);$array59['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.3.slide', $array61);
$arguments57['data'] = $array59;
$renderChildrenClosure58 = ($arguments57['data'] !== null) ? function() use ($arguments57) { return $arguments57['data']; } : $renderChildrenClosure58;
$output56 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
';
return $output56;
};
$arguments54 = array();
$arguments54['name'] = NULL;
$arguments54['name'] = 'Border';

$output51 .= NULL;

$output51 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
  

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['data'] = NULL;
$arguments65['typoscriptObjectPath'] = NULL;
$arguments65['currentValueKey'] = NULL;
$arguments65['table'] = '';
$arguments65['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array68);
$array67['colPos'] = 8;
$array69 = array (
);$array67['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide', $array69);
$arguments65['data'] = $array67;
$renderChildrenClosure66 = ($arguments65['data'] !== null) ? function() use ($arguments65) { return $arguments65['data']; } : $renderChildrenClosure66;
$output64 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '

    <div class="section section-default ftco-animate">
      
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['data'] = NULL;
$arguments70['typoscriptObjectPath'] = NULL;
$arguments70['currentValueKey'] = NULL;
$arguments70['table'] = '';
$arguments70['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array73);
$array72['colPos'] = 0;
$array74 = array (
);$array72['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide', $array74);
$arguments70['data'] = $array72;
$renderChildrenClosure71 = ($arguments70['data'] !== null) ? function() use ($arguments70) { return $arguments70['data']; } : $renderChildrenClosure71;
$output64 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output64 .= '
    </div>    
   
    <section class="ftco-section bg-light">
      <div class="container-fluid px-md-0">
        <div class="row no-gutters justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
              <h2>Apartments</h2>
            </div>
          </div>
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img" style="background-image: url(../typo3conf/ext/vacation_rental/Resources/Public/Images/deluxe-1.jpg);"></a>
                          <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                                <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                                <h3 class="mb-3"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/deluxe-apartment">Deluxe Apartment</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Max:</span> 5 Persons</li>
                                    <li><span>Size:</span> 120 m2</li>
                                    <li><span>View:</span> Neckar Blick</li>
                                    <li><span>Bed:</span> 5</li>
                                </ul>
                                <p class="pt-1"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/deluxe-apartment" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="col-lg-6">
                  <div class="room-wrap d-md-flex">
                      <a href="#" class="img" style="background-image: url(../typo3conf/ext/vacation_rental/Resources/Public/Images/deluxe-3.jpg);"></a>
                      <div class="half left-arrow d-flex align-items-center">
                          <div class="text p-4 p-xl-5 text-center">
                              <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                              <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                              <h3 class="mb-3"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/deluxe-apartment">Deluxe Apartment</a></h3>
                                  <ul class="list-accomodation">
                                  <li><span>Max:</span> 5 Persons</li>
                                  <li><span>Size:</span> 120 m2</li>
                                  <li><span>View:</span> Neckar Blick</li>
                                  <li><span>Bed:</span> 5</li>
                              </ul>
                              <p class="pt-1"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/deluxe-apartment" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="room-wrap d-md-flex">
                      <a href="#" class="img order-md-last" style="background-image: url(../typo3conf/ext/vacation_rental/Resources/Public/Images/studio-2.jpg);"></a>
                      <div class="half right-arrow d-flex align-items-center">
                          <div class="text p-4 p-xl-5 text-center">
                              <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                              <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                              <h3 class="mb-3"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/studio-apartment-2">Studio apartment</a></h3>
                                  <ul class="list-accomodation">
                                  <li><span>Max:</span> 3 Persons</li>
                                  <li><span>Size:</span> 35 m2</li>
                                  <li><span>View:</span> zum Innenhof</li>
                                  <li><span>Bed:</span> 2</li>
                              </ul>
                              <p class="pt-1"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/studio-apartment-2" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="room-wrap d-md-flex">
                      <a href="#" class="img order-md-last" style="background-image: url(../typo3conf/ext/vacation_rental/Resources/Public/Images/studio-3.jpg);"></a>
                      <div class="half right-arrow d-flex align-items-center">
                          <div class="text p-4 p-xl-5 text-center">
                              <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                              <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                              <h3 class="mb-3"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/studio-apartment-3">Studio apartment</a></h3>
                                  <ul class="list-accomodation">
                                  <li><span>Max:</span> 3 Persons</li>
                                  <li><span>Size:</span> 35 m2</li>
                                  <li><span>View:</span> zum Innenhof</li>
                                  <li><span>Bed:</span> 2</li>
                              </ul>
                              <p class="pt-1"><a href="https://typo3-project3.ddev.site/autogenerated-1/ferienwohnungen/studio-apartment-3" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
    

  <div class="container ftco-animate">
    <div class="section-row">
        <div class="section-column section-column-third">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['data'] = NULL;
$arguments75['typoscriptObjectPath'] = NULL;
$arguments75['currentValueKey'] = NULL;
$arguments75['table'] = '';
$arguments75['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array78);
$array77['colPos'] = 30;
$array79 = array (
);$array77['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.30.slide', $array79);
$arguments75['data'] = $array77;
$renderChildrenClosure76 = ($arguments75['data'] !== null) ? function() use ($arguments75) { return $arguments75['data']; } : $renderChildrenClosure76;
$output64 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output64 .= '
        </div>
        <div class="section-column section-column-third">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['data'] = NULL;
$arguments80['typoscriptObjectPath'] = NULL;
$arguments80['currentValueKey'] = NULL;
$arguments80['table'] = '';
$arguments80['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array83);
$array82['colPos'] = 31;
$array84 = array (
);$array82['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.31.slide', $array84);
$arguments80['data'] = $array82;
$renderChildrenClosure81 = ($arguments80['data'] !== null) ? function() use ($arguments80) { return $arguments80['data']; } : $renderChildrenClosure81;
$output64 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output64 .= '
        </div>
        <div class="section-column section-column-third">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['data'] = NULL;
$arguments85['typoscriptObjectPath'] = NULL;
$arguments85['currentValueKey'] = NULL;
$arguments85['table'] = '';
$arguments85['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array88);
$array87['colPos'] = 32;
$array89 = array (
);$array87['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.32.slide', $array89);
$arguments85['data'] = $array87;
$renderChildrenClosure86 = ($arguments85['data'] !== null) ? function() use ($arguments85) { return $arguments85['data']; } : $renderChildrenClosure86;
$output64 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output64 .= '
        </div>
    </div>
  </div>

    <div class="container ftco-animate">
        <div class="row no-gutters">
          <div class="section-column section-column-half">
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['data'] = NULL;
$arguments90['typoscriptObjectPath'] = NULL;
$arguments90['currentValueKey'] = NULL;
$arguments90['table'] = '';
$arguments90['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array93);
$array92['colPos'] = 33;
$array94 = array (
);$array92['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.33.slide', $array94);
$arguments90['data'] = $array92;
$renderChildrenClosure91 = ($arguments90['data'] !== null) ? function() use ($arguments90) { return $arguments90['data']; } : $renderChildrenClosure91;
$output64 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output64 .= '
          </div>
          <div class="section-column section-column-half">
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['data'] = NULL;
$arguments95['typoscriptObjectPath'] = NULL;
$arguments95['currentValueKey'] = NULL;
$arguments95['table'] = '';
$arguments95['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array98);
$array97['colPos'] = 34;
$array99 = array (
);$array97['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.34.slide', $array99);
$arguments95['data'] = $array97;
$renderChildrenClosure96 = ($arguments95['data'] !== null) ? function() use ($arguments95) { return $arguments95['data']; } : $renderChildrenClosure96;
$output64 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output64 .= '
          </div>
        </div>
    </div>
  </div>
  </section>

      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['data'] = NULL;
$arguments100['typoscriptObjectPath'] = NULL;
$arguments100['currentValueKey'] = NULL;
$arguments100['table'] = '';
$arguments100['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array103);
$array102['colPos'] = 9;
$array104 = array (
);$array102['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide', $array104);
$arguments100['data'] = $array102;
$renderChildrenClosure101 = ($arguments100['data'] !== null) ? function() use ($arguments100) { return $arguments100['data']; } : $renderChildrenClosure101;
$output64 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output64 .= '

';
return $output64;
};
$arguments62 = array();
$arguments62['name'] = NULL;
$arguments62['name'] = 'Main';

$output51 .= NULL;

$output51 .= '



';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['section'] = NULL;
$arguments108['partial'] = NULL;
$arguments108['delegate'] = NULL;
$arguments108['renderable'] = NULL;
$arguments108['arguments'] = array (
);
$arguments108['optional'] = false;
$arguments108['default'] = NULL;
$arguments108['contentAs'] = NULL;
$arguments108['debug'] = true;
$arguments108['partial'] = 'Structure/FooterContent';
$arguments108['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output107 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
';
return $output107;
};
$arguments105 = array();
$arguments105['name'] = NULL;
$arguments105['name'] = 'Footer';

$output51 .= NULL;

$output51 .= '

';

return $output51;
}


}
#