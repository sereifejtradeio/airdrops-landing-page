<?php class L {
const section1_line1 = '未来的加密货币交易所';
const section1_line2 = '现已开放预注册';
const section1_username_placeholder = '用户名';
const section1_email_placeholder = '电子邮箱';
const section1_password_placeholder = '密码';
const section1_confirm_password_placeholder = '重输密码';
const section1_pre_register_btn = '预注册';
const section1_json_register_success = '感谢您注册！';
const section2_line1 = '率先注册';
const section2_point1 = '简易账户验证';
const section2_point1_text = '针对全部新客户的高效注册。减少麻烦，更多惊喜！';
const section2_point2 = '每周7天每天24小时响应';
const section2_point2_text = '我们的客服专业人士每周7天每天24小时响应，您可通过 <a href=\'mailto:support@trade.io\'>电子邮件</a>、<a href=\'javascript:void(0)\' onclick=\'chatButton.onClick();\'>live chat</a> 或电话联系我们，几分钟内就可获得对可能遇到的问题的解答。';
const section2_point3 = '低入金费用';
const section2_point3_text = 'trade.io收取的出金费为市场最低，对入金无任何费用，每笔交易的佣金低至0.1%，因此能为您省下更多的自有资金。';
const section3_line1 = '我们的优势';
const section3_point1 = '清楚而明确的布局';
const section3_point2 = '可定制/可移动小工具';
const section3_point3 = '创建和保存最多达10个预设布局（可兼容多屏幕）';
const section3_point4 = '可定制组合、新闻馈送、聊天以及其他。';
const section4_point1 = '业内唯一可完全定制的平台';
const section4_point1_text = '具备强大的灵活性，在注册后短短几分钟就可以创建您喜欢的交易环境，同时保留性能或速度水准。';
const section4_point2 = '技术指标可助您交易';
const section4_point2_text = '我们默认的制图小工具和其他技术工具，将使您能够审查历史数据，从而帮助您定制自己的期货交易策略。';
const section4_point3 = '定期竞赛和派送';
const section4_point3_text = '有资格享受慷慨的派送和促销以赢取真实的奖励、VIP假期，还有高达100,000美元的消费资金。';
const section4_point4 = '全球范围的服务，实现快速交易，没有延迟';
const section4_point4_text = '我们深知您对强大能力和快捷交易速度的需求。为此，我们使用世界各地的服务器来维持最低的延迟，无论您选择在何处交易。';
const section5_title1 = '了解我们的测试版交易所平台';
const section6_title1 = '免费的加密货币教育';
const section6_title2 = '交易所加密货币交易培训系列';
const section6_video1_title = '探究加密货币';
const section6_video2_title = '离开此交易';
const section6_video3_title = '交易不同的加密货币类型';
const section7_title1 = '交易变革已经拉开帷幕！';
const section7_title2 = '立即预注册';
const section7_username_placeholder = '用户名';
const section7_email_placeholder = '电子邮箱';
const section7_password_placeholder = '密码';
const section7_confirm_password_placeholder = '重输密码';
const section7_pre_register_btn = '预注册';
const section7_json_register_success = '感谢您注册！';
const section8_risk_disclaimer_title = '风险免责声明';
const section8_risk_disclaimer_text = '使用基于互联网的交易系统存在相关风险，包括但不限于硬件、软件和互联网连接故障。您同意，我们对于您在通过本服务交易时遇到的所有通信故障、混乱、错误、失真或延迟，无论因何原因，都不承担任何责任。您投入的资金不应超过您可以承受的损失。在从事任何此类交易前，您应当确保自己完全了解有关风险，必要时应寻求独立建议。本信息不针对/用于分发给海外资产控制办公室制裁清单上的特定国家/司法管辖区的居民或供其使用，包括但不限于伊朗、朝鲜、中国、韩国和美国。条款和条件适用。';
const error_msgs_username = '* 用户名不能为空！';
const error_msgs_email = '* 电子邮件无效！';
const error_msgs_password = '* 密码必须有8个字符，一个小写字母、一个大写字母、一个数字和一个特殊字符！';
const error_msgs_confirm_password = '* 重输密码必须有8个字符，一个小写字母、一个大写字母、一个数字和一个特殊字符！';
const error_msgs_passwords_do_not_match = '* 密码和重输的密码不匹配！';
const error_msgs_captcha = '* 验证码无效！';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}