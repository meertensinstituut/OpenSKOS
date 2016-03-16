<?php
/**
 * OpenSKOS
 *
 * LICENSE
 *
 * This source file is subject to the GPLv3 license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   OpenSKOS
 * @package    OpenSKOS
 * @copyright  Copyright (c) 2011 Pictura Database Publishing. (http://www.pictura-dp.nl)
 * @author     Mark Lindeman
 * @license    http://www.gnu.org/licenses/gpl-3.0.txt GPLv3
 */

class Api_InstitutionController extends OpenSKOS_Rest_Controller
{
    public function init()
    {
        parent::init();
        $this->_helper->contextSwitch()
            ->initContext($this->getRequest()->getParam('format', 'rdf'));
        
        if ('html' == $this->_helper->contextSwitch()->getCurrentContext()) {
            //enable layout:
            $this->getHelper('layout')->enableLayout();
        }
    }
    
    public function indexAction()
    {
    }
    
    public function getAction()
    {
        
    }
    
    public function postAction()
    {
        $request = $this->getPsrRequest();
        $api = $this->getDI()->make('\OpenSkos2\Api\Tenant');
        $response = $api->create($request);
        $this->emitResponse($response);
    }
    
    public function putAction()
    {
        $this->_501('put');
    }
    
    public function deleteAction()
    {
        $this->_501('delete');
    }
}