<?php  
 namespace Husain\Ali\Block;  
 class Link extends \Magento\Framework\View\Element\Html\Link  
 {  
  protected $_template = 'Husain_Ali::link.phtml';   
     
   public function getLabel()  
   {  
     return __('My Dashboard');
   }  
 }  
 ?>  