<?php
defined('IN_ECJIA') or exit('No permission resources.');

class sms_module extends api_admin implements api_interface {
    public function handleRequest(\Royalcms\Component\HttpKernel\Request $request) {
	    //sms_get_validate 
    
		$type = $this->requestData('type');
		$value = $this->requestData('mobile', '');
		if (empty($type) || empty($value)) {
			return new ecjia_error( 'invalid_parameter', RC_Lang::get ('system::system.invalid_parameter' ));
		}
		
		$code = rand(100001, 999999);
	    $chars = "/^1(3|4|5|7|8)\d{9}$/s";
	    if (!preg_match($chars, $value)) {
	        return new ecjia_error('mobile_error', '手机号码格式错误');
	    }
	    if (RC_Time::gmtime() - $_SESSION['captcha']['sms']['sendtime'] < 60) {
	        return new ecjia_error('send_error', '发送频率过高，请一分钟后再试');
	    }
	    
	    //type
	    //staff_modify_mobile(员工修改手机（包含配送员）)
	    $common_template = array('staff_modify_mobile');
	    
	    if (in_array($type, $common_template)) {
	        
	    }
		
	    //发送短信
	    $options = array(
    		'mobile' => $value,
    		'event'	 => 'sms_get_validate',
    		'value'  =>array(
    			'code' 			=> $code,
    			'service_phone' => ecjia::config('service_phone'),
    		),
	    );
	    
	    $_SESSION['captcha']['sms'][$type] = array(
    		'value' => $value,
    		'code' => $code,
    		'lifetime' => RC_Time::gmtime() + 1800,
    		'sendtime' => RC_Time::gmtime(),
	    );
	    $_SESSION['captcha']['sms']['sendtime'] = RC_Time::gmtime();
	    
	    $response = RC_Api::api('sms', 'send_event_sms', $options);
	    if (is_ecjia_error($response)) {
	    	return new ecjia_error('sms_error', '短信发送失败！');//$response['description']
	    } else {
			return array();
	    }
	}
}


// end