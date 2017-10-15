<?php
//
//    ______         ______           __         __         ______
//   /\  ___\       /\  ___\         /\_\       /\_\       /\  __ \
//   \/\  __\       \/\ \____        \/\_\      \/\_\      \/\ \_\ \
//    \/\_____\      \/\_____\     /\_\/\_\      \/\_\      \/\_\ \_\
//     \/_____/       \/_____/     \/__\/_/       \/_/       \/_/ /_/
//
//   上海商创网络科技有限公司
//
//  ---------------------------------------------------------------------------------
//
//   一、协议的许可和权利
//
//    1. 您可以在完全遵守本协议的基础上，将本软件应用于商业用途；
//    2. 您可以在协议规定的约束和限制范围内修改本产品源代码或界面风格以适应您的要求；
//    3. 您拥有使用本产品中的全部内容资料、商品信息及其他信息的所有权，并独立承担与其内容相关的
//       法律义务；
//    4. 获得商业授权之后，您可以将本软件应用于商业用途，自授权时刻起，在技术支持期限内拥有通过
//       指定的方式获得指定范围内的技术支持服务；
//
//   二、协议的约束和限制
//
//    1. 未获商业授权之前，禁止将本软件用于商业用途（包括但不限于企业法人经营的产品、经营性产品
//       以及以盈利为目的或实现盈利产品）；
//    2. 未获商业授权之前，禁止在本产品的整体或在任何部分基础上发展任何派生版本、修改版本或第三
//       方版本用于重新开发；
//    3. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回并承担相应法律责任；
//
//   三、有限担保和免责声明
//
//    1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的；
//    2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未获得商业授权之前，我们不承
//       诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任；
//    3. 上海商创网络科技有限公司不对使用本产品构建的商城中的内容信息承担责任，但在不侵犯用户隐
//       私信息的前提下，保留以任何方式获取用户信息及商品信息的权利；
//
//   有关本产品最终用户授权协议、商业授权与技术服务的详细内容，均由上海商创网络科技有限公司独家
//   提供。上海商创网络科技有限公司拥有在不事先通知的情况下，修改授权协议的权力，修改后的协议对
//   改变之日起的新授权用户生效。电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和
//   等同的法律效力。您一旦开始修改、安装或使用本产品，即被视为完全理解并接受本协议的各项条款，
//   在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本
//   授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
//
//  ---------------------------------------------------------------------------------
//
/**
 * ErrorCase类，封闭异常
 **/
class ErrorCase 
{
    protected static $errorMsg = array(
        '100000' => '缺少参数response_type或response_type非法。',
        '100001' => '缺少参数client_id。',
        '100002' => '缺少参数client_secret。',
        '100003' => 'http head中缺少Authorization。',
        '100004' => '缺少参数grant_type或grant_type非法。',
        '100005' => '缺少参数code。',
        '100006' => '缺少refresh token。',
        '100007' => '缺少access token。',
        '100008' => '该appid不存在。',
        '100009' => 'client_secret（即appkey）非法。',
        '100010' => '回调地址不合法。',
        '100011' => 'APP不处于上线状态。',
        '100012' => 'HTTP请求非post方式。',
        '100013' => 'access token非法。',
        '100014' => 'access token过期。 token过期时间为3个月。',
        '100015' => 'access token废除。 token被回收，或者被用户删除。',
        '100016' => 'access token验证失败。',
        '100017' => '获取appid失败。',
        '100018' => '获取code值失败。',
        '100019' => 'access token非法。',
        '100015' => '用code换取access token值失败。',
        '100020' => 'code被重复使用。',
        '100021' => '获取access token值失败。',
        '100022' => '获取refresh token值失败。',
        '100023' => '获取app具有的权限列表失败。',
        '100024' => '获取某OpenID对某appid的权限列表失败。',
        '100025' => '获取全量api信息、全量分组信息。',
        '100026' => '设置用户对某app授权api列表失败。',
        '100027' => '设置用户对某app授权时间失败。',
        '100028' => '缺少参数which。',
        '100029' => '错误的http请求。',
        '100030' => '用户没有对该api进行授权，或用户在腾讯侧删除了该api的权限。请用户重新走登录、授权流程，对该api进行授权。',
        '100031' => '第三方应用没有对该api操作的权限。',
        '100032' => '过载，一开始未细分时可以用。',
        '100033' => '缺少UIN参数。',
        '100034' => '100034',
        '100035' => '用户未登录。',
        '100036' => 'RefreshToken失效。',
        '100037' => 'RefreshToken已过期',
        '100038' => 'RefreshToken已废除',
        '100038' => '获取refresh token值失败。',
        '100039' => 'RefreshToken到达调用上限。',
        '100040' => 'RefreshToken的AppKey非法。',
        '100041' => 'RefreshToken,AppID非法。',
        '100042' => 'RefreshToken非法。',
        '100043' => 'APP处于暂停状态。',
        '100044' => 'Md5校验失败。',
        '100045' => '用户改密token失效。',
        '100046' => 'g_tk校验失败。',
        '100048' => '没有设置companyID。',
        '100049' => 'APPID没有权限(get_unionid)',
        '100050' => 'OPENID解密失败，一般是openid和appid不匹配。',
        '100051' => '调试模式无权限。',
        
        "20001" => "配置文件损坏或无法读取，请重新执行intall",
        "30001" => "The state does not match. You may be a victim of CSRF.",
        "50001" => "可能是服务器无法请求https协议</h2>可能未开启curl支持,请尝试开启curl支持，重启web服务器，如果问题仍未解决，请联系我们"
        
    );

    /**
     * showError
     * 显示错误信息
     * @param int $code 错误代码
     * @return string 描述信息
     */
    public static function showError($code)
    {
        return array_get(self::$errorMsg, $code);
    }

}

// end