<?php
/**
 * Copyright (c) Open Source Strategies Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
class Oxidian_OpenTaps_Block_Widget extends Mage_Adminhtml_Block_Template
{

	protected $requestData;
	protected $tagUrl;
    /**
     * Constructor. Set template.
     */
    protected function _construct()
    {
    	parent::_construct();
    	$this->requestData['data-domain'] = Mage::getStoreConfig('oxidian_opentaps/settings/domain', Mage::app()->getStore());
    	$this->requestData['data-authtoken'] = Mage::getStoreConfig('oxidian_opentaps/settings/auth_token', Mage::app()->getStore());
    	$this->requestData['data-canedit']='true';
    	$this->requestData['data-shownomore']='false';
    	$this->requestData['data-showreflinks']='true';
    	$this->requestData['style']='width:100%;';
 		$this->requestData['data-userparams']='';
		$this->requestData['data-queryparams']='';
		$this->tagUrl =  rawurlencode(Mage::helper('core/url')->getCurrentUrl());
		$this->requestData['data-tagurl']=$this->tagUrl;

        $this->setTemplate('oxidian_opentaps/widget.phtml');
    }

    public function getRequestData()
    {
    	return $this->requestData;
    }
}
