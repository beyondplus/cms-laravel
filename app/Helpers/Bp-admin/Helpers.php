<?php
function module($sectionId)
{
    $user_type = Auth::user()->user_type;
    $query = bp_module::select('*');
    if($user_type == 0) $query = $query->where('group_access->user', '1');
   // if($user_type == 2) $query = $query->where('group_access->admin', '1');
    return $query->whereSection($sectionId)->whereParent_id(0)->with('child')->get();
}
function custom()
{
    $query = bp_custom::get();
    return $query;
}
function bp_tax()
{
    $query = bp_tax::where('tax_type','cat')->with('translate')->where('translate_id',0)->get();
    return $query;
}
function bp_post($limitId)
{
    $post = bp_post::where('post_type','post')->with('translate')->orderby('id','desc')->paginate($limitId);
    return $post;
}

function bp_post_detail($postId)
{
    $post = bp_post::where('post_type','post')->with('translate')->orderby('id','desc')->first();
    return $post;
}

function bp_select_posts()
{
    $posts = bp_post::where('post_type','post')->where('translate_id',0)->pluck('title','id');
    $posts[0] = 'Master';
    return $posts;
}

function bp_select_pages()
{
    $pages = bp_post::where('post_type','page')->where('translate_id',0)->pluck('title','id');
    $pages[0] = 'Master';
    return $pages;
}

function bp_select_taxes()
{
    $taxes = bp_tax::where('tax_type','cat')->where('translate_id',0)->pluck('tax_name','tax_id');
    $taxes[0] = 'None';
    return $taxes;
}

function bp_menu()
{
    $menu = bp_menu::with('children')->where('parent_id',1)->orderBy('menu_weight')->get();
    return $menu;
}
function bp_slider()
{
    $banner = bp_slider::orderBy('slider_id')->get();
    return $banner;
}
function bp_cat($tax_id,$limit_id)
{
    $tax = bp_tax::with('posts')->where('tax_id',$tax_id)->where('tax_type','cat')->orderby('tax_id','desc')->paginate($limit_id);
    return $tax;
}

function tax_parent() {
    $parent = bp_tax::get()->pluck('tax_name','tax_id');   
    $parent[0] = 'None';
    return $parent;
}


function lang_dropdown($url) {
    if(Session::get('applocale') == "mm") {
        return '
        <ul class="lang nav navbar-nav">
        <li>
        <a href="javascript:void(0)" class="dropdown-anchor"><img src="'.$url.'/img/flag/mm.jpg" alt="English"> | ျမန္မာ <img src="'.$url.'/img/down-arrow-white.png" alt="Drop down" height="15px"></a>
        <div class="lang-box">
        <ul>
        <a href="'.$url.'/lang/en"><li>
        <img src="'.$url.'/img/flag/en.png" alt="အဂၤလိပ္">
        အဂၤလိပ္
        </li></a>
        </ul>
        </div>
        </li>
        </ul>
        ';   
    } else {
        return '
        <ul class="lang nav navbar-nav">
        <li>
        <a href="javascript:void(0)" class="dropdown-anchor"><img src="'.$url.'/img/flag/en.png" alt="English"> | English <img src="'.$url.'/img/down-arrow-white.png" alt="Drop down" height="15px"></a> 
        <div class="lang-box">
        <ul>
        <a href="'.$url.'/lang/mm"><li>
        <img src="'.$url.'/img/flag/mm.jpg" alt="ဗမာ">
        Myanmar
        </li></a>
        </ul>
        </div>
        </li>
        </ul>
        ';
    }
}


if(!function_exists('formatMoney')){
    function formatMoney($number, $fractional=false) {
        if ($fractional) {
            $number = sprintf('%.2f', $number);
        }
        while (true) {
            $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
            if ($replaced != $number) {
                $number = $replaced;
            } else {
                break;
            }
        }
        return $number;
    }
}
/*
Developer Profile
https://github.com/moeseth/myanmar_numeral_converter
*/
function english_to_myanmar_digits($english_digits) {
    $myanmar_digits = $english_digits;
    $myanmar_digits = str_replace("0", "\xE1\x81\x80", $english_digits);
    $myanmar_digits = str_replace("1", "\xE1\x81\x81", $myanmar_digits);
    $myanmar_digits = str_replace("2", "\xE1\x81\x82", $myanmar_digits);
    $myanmar_digits = str_replace("3", "\xE1\x81\x83", $myanmar_digits);
    $myanmar_digits = str_replace("4", "\xE1\x81\x84", $myanmar_digits);
    $myanmar_digits = str_replace("5", "\xE1\x81\x85", $myanmar_digits);
    $myanmar_digits = str_replace("6", "\xE1\x81\x86", $myanmar_digits);
    $myanmar_digits = str_replace("7", "\xE1\x81\x87", $myanmar_digits);
    $myanmar_digits = str_replace("8", "\xE1\x81\x88", $myanmar_digits);
    $myanmar_digits = str_replace("9", "\xE1\x81\x89", $myanmar_digits);
    return $myanmar_digits;
}
function english_digits_to_myanmar_words($english_digits) {
    $utf_8_for_creaky_tone = "\xE1\x80\xB7"; // ့
    $myanmar_counting_number_array = array("သုည", "တစ်", "နှစ်", "သုံး", "လေး", "ငါး", "ခြောက်", "ခုနစ်", "ရှစ်", "ကိုး");
    $myanmar_counting_number_suffixes_array = array("ဆယ်", "ရာ", "ထောင်", "သောင်း", "သိန်း");
    $english_int_digits = intval($english_digits);
    $count = 5;
    $myanmar_words = "";
    while ($english_int_digits >= 10) {
        $powered_10 = pow(10, $count);
        if ($english_int_digits >= $powered_10) {
            $prefix_int = intval($english_int_digits/$powered_10);
            // minus found value from original value
            $english_int_digits = $english_int_digits - intval($powered_10 * $prefix_int);
            $suffix = "";
            if ($english_int_digits > 0 && $count > 0 && $count < 4) {
                $suffix = $utf_8_for_creaky_tone;
            }
            if ($prefix_int > 9) {
                $myanmar_words = $myanmar_words . english_digits_to_myanmar_words($prefix_int);
            } else {
                $myanmar_words = $myanmar_words . $myanmar_counting_number_array[$prefix_int];
            }
            $myanmar_words = $myanmar_words . $myanmar_counting_number_suffixes_array[$count - 1] . $suffix;
        }
        $count = $count - 1;
    }
    if ($english_int_digits > 0) {
        $myanmar_words = $myanmar_words . $myanmar_counting_number_array[$english_int_digits];
    }
    return $myanmar_words;
}
/*
Developer Profile
https://github.com/Rabbit-Converter/Rabbit-PHP
*/
function uni2zg($unicode)
{
    $rule = json_decode("[ { \"from\": \"\u1004\u103a\u1039\", \"to\": \"\u1064\" }, { \"from\": \"\u1039\u1010\u103d\", \"to\": \"\u1096\" }, { \"from\": \"\u1014(?=[\u1030\u103d\u103e\u102f\u1039])\", \"to\": \"\u108f\" }, { \"from\": \"\u102b\u103a\", \"to\": \"\u105a\" }, { \"from\": \"\u100b\u1039\u100c\", \"to\": \"\u1092\" }, { \"from\": \"\u102d\u1036\", \"to\": \"\u108e\" }, { \"from\": \"\u104e\u1004\u103a\u1038\", \"to\": \"\u104e\" }, { \"from\": \"[\u1025\u1009](?=[\u1039\u102f\u1030])\", \"to\": \"\u106a\" }, { \"from\": \"[\u1025\u1009](?=[\u103a])\", \"to\": \"\u1025\" }, { \"from\": \"\u100a(?=[\u1039\u102f\u1030\u103d])\", \"to\": \"\u106b\" }, { \"from\": \"(\u1039[\u1000-\u1021])(\u102D){0,1}\u102f\", \"to\": \"$1$2\u1033\" }, { \"from\": \"(\u1039[\u1000-\u1021])\u1030\", \"to\": \"$1\u1034\" }, { \"from\": \"\u1039\u1000\", \"to\": \"\u1060\" }, { \"from\": \"\u1039\u1001\", \"to\": \"\u1061\" }, { \"from\": \"\u1039\u1002\", \"to\": \"\u1062\" }, { \"from\": \"\u1039\u1003\", \"to\": \"\u1063\" }, { \"from\": \"\u1039\u1005\", \"to\": \"\u1065\" }, { \"from\": \"\u1039\u1006\", \"to\": \"\u1066\" }, { \"from\": \"\u1039\u1007\", \"to\": \"\u1068\" }, { \"from\": \"\u1039\u1008\", \"to\": \"\u1069\" }, { \"from\": \"\u100a(?=[\u1039\u102f\u1030])\", \"to\": \"\u106b\" }, { \"from\": \"\u1039\u100b\", \"to\": \"\u106c\" }, { \"from\": \"\u1039\u100c\", \"to\": \"\u106d\" }, { \"from\": \"\u100d\u1039\u100d\", \"to\": \"\u106e\" }, { \"from\": \"\u100e\u1039\u100d\", \"to\": \"\u106f\" }, { \"from\": \"\u1039\u100f\", \"to\": \"\u1070\" }, { \"from\": \"\u1039\u1010\", \"to\": \"\u1071\" }, { \"from\": \"\u1039\u1011\", \"to\": \"\u1073\" }, { \"from\": \"\u1039\u1012\", \"to\": \"\u1075\" }, { \"from\": \"\u1039\u1013\", \"to\": \"\u1076\" }, { \"from\": \"\u1039\u1013\", \"to\": \"\u1076\" }, { \"from\": \"\u1039\u1014\", \"to\": \"\u1077\" }, { \"from\": \"\u1039\u1015\", \"to\": \"\u1078\" }, { \"from\": \"\u1039\u1016\", \"to\": \"\u1079\" }, { \"from\": \"\u1039\u1017\", \"to\": \"\u107a\" }, { \"from\": \"\u1039\u1018\", \"to\": \"\u107b\" }, { \"from\": \"\u1039\u1019\", \"to\": \"\u107c\" }, { \"from\": \"\u1039\u101c\", \"to\": \"\u1085\" }, { \"from\": \"\u103f\", \"to\": \"\u1086\" }, { \"from\": \"(\u103c)\u103e\", \"to\": \"$1\u1087\" }, { \"from\": \"\u103d\u103e\", \"to\": \"\u108a\" }, { \"from\": \"(\u1064)([\u1031]?)([\u103c]?)([\u1000-\u1021])\u102d\", \"to\": \"$2$3$4\u108b\" }, { \"from\": \"(\u1064)([\u1031]?)([\u103c]?)([\u1000-\u1021])\u102e\", \"to\": \"$2$3$4\u108c\" }, { \"from\": \"(\u1064)([\u1031]?)([\u103c]?)([\u1000-\u1021])\u1036\", \"to\": \"$2$3$4\u108d\" }, { \"from\": \"(\u1064)([\u1031]?)([\u103c]?)([\u1000-\u1021])\", \"to\": \"$2$3$4$1\" }, { \"from\": \"\u101b(?=[\u102f\u1030\u103d\u108a])\", \"to\": \"\u1090\" }, { \"from\": \"\u100f\u1039\u100d\", \"to\": \"\u1091\" }, { \"from\": \"\u100b\u1039\u100b\", \"to\": \"\u1097\" }, { \"from\": \"([\u1000-\u1021\u108f\u1029\u1090])([\u1060-\u1069\u106c\u106d\u1070-\u107c\u1085\u108a])?([\u103b-\u103e]*)?\u1031\", \"to\": \"\u1031$1$2$3\" }, { \"from\": \"([\u1000-\u1021\u1029])([\u1060-\u1069\u106c\u106d\u1070-\u107c\u1085])?(\u103c)\", \"to\": \"$3$1$2\" }, { \"from\": \"\u103a\", \"to\": \"\u1039\" }, { \"from\": \"\u103b\", \"to\": \"\u103a\" }, { \"from\": \"\u103c\", \"to\": \"\u103b\" }, { \"from\": \"\u103d\", \"to\": \"\u103c\" }, { \"from\": \"\u103e\", \"to\": \"\u103d\" }, { \"from\": \"\u103d\u102f\", \"to\": \"\u1088\" }, { \"from\": \"([\u102f\u1030\u1014\u101b\u103c\u108a\u103d\u1088])([\u1032\u1036]{0,1})\u1037\", \"to\": \"$1$2\u1095\" }, { \"from\": \"\u102f\u1095\", \"to\": \"\u102f\u1094\" }, { \"from\": \"([\u1014\u101b])([\u1032\u1036\u102d\u102e\u108b\u108c\u108d\u108e])\u1037\", \"to\": \"$1$2\u1095\" }, { \"from\": \"\u1095\u1039\", \"to\": \"\u1094\u1039\" }, { \"from\": \"([\u103a\u103b])([\u1000-\u1021])([\u1036\u102d\u102e\u108b\u108c\u108d\u108e]?)\u102f\", \"to\": \"$1$2$3\u1033\" }, { \"from\": \"([\u103a\u103b])([\u1000-\u1021])([\u1036\u102d\u102e\u108b\u108c\u108d\u108e]?)\u1030\", \"to\": \"$1$2$3\u1034\" }, { \"from\": \"\u103a\u102f\", \"to\": \"\u103a\u1033\" }, { \"from\": \"\u103a([\u1036\u102d\u102e\u108b\u108c\u108d\u108e])\u102f\", \"to\": \"\u103a$1\u1033\" }, { \"from\": \"([\u103a\u103b])([\u1000-\u1021])\u1030\", \"to\": \"$1$2\u1034\" }, { \"from\": \"\u103a\u1030\", \"to\": \"\u103a\u1034\" }, { \"from\": \"\u103a([\u1036\u102d\u102e\u108b\u108c\u108d\u108e])\u1030\", \"to\": \"\u103a$1\u1034\" }, { \"from\": \"\u103d\u1030\", \"to\": \"\u1089\" }, { \"from\": \"\u103b([\u1000\u1003\u1006\u100f\u1010\u1011\u1018\u101a\u101c\u101a\u101e\u101f])\", \"to\": \"\u107e$1\" }, { \"from\": \"\u107e([\u1000\u1003\u1006\u100f\u1010\u1011\u1018\u101a\u101c\u101a\u101e\u101f])([\u103c\u108a])([\u1032\u1036\u102d\u102e\u108b\u108c\u108d\u108e])\", \"to\": \"\u1084$1$2$3\" }, { \"from\": \"\u107e([\u1000\u1003\u1006\u100f\u1010\u1011\u1018\u101a\u101c\u101a\u101e\u101f])([\u103c\u108a])\", \"to\": \"\u1082$1$2\" }, { \"from\": \"\u107e([\u1000\u1003\u1006\u100f\u1010\u1011\u1018\u101a\u101c\u101a\u101e\u101f])([\u1033\u1034]?)([\u1032\u1036\u102d\u102e\u108b\u108c\u108d\u108e])\", \"to\": \"\u1080$1$2$3\" }, { \"from\": \"\u103b([\u1000-\u1021])([\u103c\u108a])([\u1032\u1036\u102d\u102e\u108b\u108c\u108d\u108e])\", \"to\": \"\u1083$1$2$3\" }, { \"from\": \"\u103b([\u1000-\u1021])([\u103c\u108a])\", \"to\": \"\u1081$1$2\" }, { \"from\": \"\u103b([\u1000-\u1021])([\u1033\u1034]?)([\u1032\u1036\u102d\u102e\u108b\u108c\u108d\u108e])\", \"to\": \"\u107f$1$2$3\" }, { \"from\": \"\u103a\u103d\", \"to\": \"\u103d\u103a\" }, { \"from\": \"\u103a([\u103c\u108a])\", \"to\": \"$1\u107d\" }, { \"from\": \"([\u1033\u1034])\u1094\", \"to\": \"$1\u1095\" }, { \"from\": \"\u108F\u1071\", \"to\" : \"\u108F\u1072\" }, { \"from\": \"([\u1000-\u1021])([\u107B\u1066])\u102C\", \"to\": \"$1\u102C$2\" }, { \"from\": \"\u102C([\u107B\u1066])\u1037\", \"to\": \"\u102C$1\u1094\" }]", true);
    return replaceWithRule($rule, $unicode);
}
/**
 * Convert zawgyi string to unicode.
 *
 * @param  string $unicode
 * @return string
 */
function zg2uni($zawgyi)
{
    $rule = json_decode("[ { \"from\":\"\u200B\", \"to\" : \"\" }, { \"from\": \"(\u103d|\u1087)\", \"to\": \"\u103e\" }, { \"from\": \"\u103c\", \"to\": \"\u103d\" }, { \"from\": \"(\u103b|\u107e|\u107f|\u1080|\u1081|\u1082|\u1083|\u1084)\", \"to\": \"\u103c\" }, { \"from\": \"(\u103a|\u107d)\", \"to\": \"\u103b\" }, { \"from\": \"\u1039\", \"to\": \"\u103a\" }, { \"from\": \"(\u1066|\u1067)\", \"to\": \"\u1039\u1006\" }, { \"from\": \"\u106a\", \"to\": \"\u1009\" }, { \"from\": \"\u106b\", \"to\": \"\u100a\" }, { \"from\": \"\u106c\", \"to\": \"\u1039\u100b\" }, { \"from\": \"\u106d\", \"to\": \"\u1039\u100c\" }, { \"from\": \"\u106e\", \"to\": \"\u100d\u1039\u100d\" }, { \"from\": \"\u106f\", \"to\": \"\u100d\u1039\u100e\" }, { \"from\": \"\u1070\", \"to\": \"\u1039\u100f\" }, { \"from\": \"(\u1071|\u1072)\", \"to\": \"\u1039\u1010\" }, { \"from\": \"\u1060\", \"to\": \"\u1039\u1000\" }, { \"from\": \"\u1061\", \"to\": \"\u1039\u1001\" }, { \"from\": \"\u1062\", \"to\": \"\u1039\u1002\" }, { \"from\": \"\u1063\", \"to\": \"\u1039\u1003\" }, { \"from\": \"\u1065\", \"to\": \"\u1039\u1005\" }, { \"from\": \"\u1068\", \"to\": \"\u1039\u1007\" }, { \"from\": \"\u1069\", \"to\": \"\u1039\u1008\" }, { \"from\": \"(\u1073|\u1074)\", \"to\": \"\u1039\u1011\" }, { \"from\": \"\u1075\", \"to\": \"\u1039\u1012\" }, { \"from\": \"\u1076\", \"to\": \"\u1039\u1013\" }, { \"from\": \"\u1077\", \"to\": \"\u1039\u1014\" }, { \"from\": \"\u1078\", \"to\": \"\u1039\u1015\" }, { \"from\": \"\u1079\", \"to\": \"\u1039\u1016\" }, { \"from\": \"\u107a\", \"to\": \"\u1039\u1017\" }, { \"from\": \"\u107c\", \"to\": \"\u1039\u1019\" }, { \"from\": \"\u1085\", \"to\": \"\u1039\u101c\" }, { \"from\": \"\u1033\", \"to\": \"\u102f\" }, { \"from\": \"\u1034\", \"to\": \"\u1030\" }, { \"from\": \"\u103f\", \"to\": \"\u1030\" }, { \"from\": \"\u1086\", \"to\": \"\u103f\" }, { \"from\": \"\u1036\u1088\", \"to\": \"\u1088\u1036\" }, { \"from\": \"\u1088\", \"to\": \"\u103e\u102f\" }, { \"from\": \"\u1089\", \"to\": \"\u103e\u1030\" }, { \"from\": \"\u108a\", \"to\": \"\u103d\u103e\" }, { \"from\": \"([\u1000-\u1021])\u1064\", \"to\": \"\u1004\u103a\u1039$1\" }, { \"from\": \"([\u1000-\u1021])\u108b\", \"to\": \"\u1004\u103a\u1039$1\u102d\" }, { \"from\": \"([\u1000-\u1021])\u108c\", \"to\": \"\u1004\u103a\u1039$1\u102e\" }, { \"from\": \"([\u1000-\u1021])\u108d\", \"to\": \"\u1004\u103a\u1039$1\u1036\" }, { \"from\": \"\u108e\", \"to\": \"\u102d\u1036\" }, { \"from\": \"\u108f\", \"to\": \"\u1014\" }, { \"from\": \"\u1090\", \"to\": \"\u101b\" }, { \"from\": \"\u1091\", \"to\": \"\u100f\u1039\u100d\" }, { \"from\": \"\u1019\u102c(\u107b|\u1093)\", \"to\": \"\u1019\u1039\u1018\u102c\" }, { \"from\": \"(\u107b|\u1093)\", \"to\": \"\u1039\u1018\" }, { \"from\": \"(\u1094|\u1095)\", \"to\": \"\u1037\" }, { \"from\": \"\u1096\", \"to\": \"\u1039\u1010\u103d\" }, { \"from\": \"\u1097\", \"to\": \"\u100b\u1039\u100b\" }, { \"from\": \"\u103c([\u1000-\u1021])([\u1000-\u1021])?\", \"to\": \"$1\u103c$2\" }, { \"from\": \"([\u1000-\u1021])\u103c\u103a\", \"to\": \"\u103c$1\u103a\" }, { \"from\": \"\u1047(?=[\u102c-\u1030\u1032\u1036-\u1038\u103d\u1038])\", \"to\": \"\u101b\" }, { \"from\": \"\u1031\u1047\", \"to\": \"\u1031\u101b\" }, { \"from\": \"\u1040(\u102e|\u102f|\u102d\u102f|\u1030|\u1036|\u103d|\u103e)\", \"to\": \"\u101d$1\" }, { \"from\": \"([^\u1040\u1041\u1042\u1043\u1044\u1045\u1046\u1047\u1048\u1049])\u1040\u102b\", \"to\": \"$1\u101d\u102b\" }, { \"from\": \"([\u1040\u1041\u1042\u1043\u1044\u1045\u1046\u1047\u1048\u1049])\u1040\u102b(?!\u1038)\", \"to\": \"$1\u101d\u102b\" }, { \"from\": \"^\u1040(?=\u102b)\", \"to\": \"\u101d\" }, { \"from\": \"\u1040\u102d(?!\u0020?/)\", \"to\": \"\u101d\u102d\" }, { \"from\": \"([^\u1040-\u1049])\u1040([^\u1040-\u1049\u0020]|[\u104a\u104b])\", \"to\": \"$1\u101d$2\" }, { \"from\": \"([^\u1040-\u1049])\u1040(?=[\\f\\n\\r])\", \"to\": \"$1\u101d\" }, { \"from\": \"([^\u1040-\u1049])\u1040$\", \"to\": \"$1\u101d\" }, { \"from\": \"\u1031([\u1000-\u1021])(\u103e)?(\u103b)?\", \"to\": \"$1$2$3\u1031\" }, { \"from\": \"([\u1000-\u1021])\u1031([\u103b\u103c\u103d\u103e]+)\", \"to\": \"$1$2\u1031\" }, { \"from\": \"\u1032\u103d\", \"to\": \"\u103d\u1032\" }, { \"from\": \"\u103d\u103b\", \"to\": \"\u103b\u103d\" }, { \"from\": \"\u103a\u1037\", \"to\": \"\u1037\u103a\" }, { \"from\": \"\u102f(\u102d|\u102e|\u1036|\u1037)\u102f\", \"to\": \"\u102f$1\" }, { \"from\": \"\u102f\u102f\", \"to\": \"\u102f\" }, { \"from\": \"(\u102f|\u1030)(\u102d|\u102e)\", \"to\": \"$2$1\" }, { \"from\": \"(\u103e)(\u103b|\u103c)\", \"to\": \"$2$1\" }, { \"from\": \"\u1025(\u103a|\u102c)\", \"to\": \"\u1009$1\" }, { \"from\": \"\u1025\u102e\", \"to\": \"\u1026\" }, { \"from\": \"\u1005\u103b\", \"to\": \"\u1008\" }, { \"from\": \"\u1036(\u102f|\u1030)\", \"to\": \"$1\u1036\" }, { \"from\": \"\u1031\u1037\u103e\", \"to\": \"\u103e\u1031\u1037\" }, { \"from\": \"\u1031\u103e\u102c\", \"to\": \"\u103e\u1031\u102c\" }, { \"from\": \"\u105a\", \"to\": \"\u102b\u103a\" }, { \"from\": \"\u1031\u103b\u103e\", \"to\": \"\u103b\u103e\u1031\" }, { \"from\": \"(\u102d|\u102e)(\u103d|\u103e)\", \"to\": \"$2$1\" }, { \"from\": \"\u102c\u1039([\u1000-\u1021])\", \"to\": \"\u1039$1\u102c\" }, { \"from\": \"\u103c\u1004\u103a\u1039([\u1000-\u1021])\", \"to\": \"\u1004\u103a\u1039$1\u103c\" }, { \"from\": \"\u1039\u103c\u103a\u1039([\u1000-\u1021])\", \"to\": \"\u103a\u1039$1\u103c\" }, { \"from\": \"\u103c\u1039([\u1000-\u1021])\", \"to\": \"\u1039$1\u103c\" }, { \"from\": \"\u1036\u1039([\u1000-\u1021])\", \"to\": \"\u1039$1\u1036\" }, { \"from\": \"\u1092\", \"to\": \"\u100b\u1039\u100c\" }, { \"from\": \"\u104e\", \"to\": \"\u104e\u1004\u103a\u1038\" }, { \"from\": \"\u1040(\u102b|\u102c|\u1036)\", \"to\": \"\u101d$1\" }, { \"from\": \"\u1025\u1039\", \"to\": \"\u1009\u1039\" }, { \"from\": \"([\u1000-\u1021])\u103c\u1031\u103d\", \"to\": \"$1\u103c\u103d\u1031\" }, { \"from\": \"([\u1000-\u1021])\u103b\u1031\u103d(\u103e)?\", \"to\": \"$1\u103b\u103d$2\u1031\" }, { \"from\": \"([\u1000-\u1021])\u103d\u1031\u103b\", \"to\": \"$1\u103b\u103d\u1031\" }, { \"from\": \"([\u1000-\u1021])\u1031(\u1039[\u1000-\u1021])\", \"to\": \"$1$2\u1031\" }, { \"from\": \"\u1038\u103a\", \"to\": \"\u103a\u1038\" }, { \"from\": \"\u102d\u103a|\u103a\u102d\", \"to\": \"\u102d\" }, { \"from\": \"\u102d\u102f\u103a\", \"to\": \"\u102d\u102f\" }, { \"from\": \"\u0020\u1037\", \"to\": \"\u1037\" }, { \"from\": \"\u1037\u1036\", \"to\": \"\u1036\u1037\" }, { \"from\": \"\u102d\u102d\", \"to\": \"\u102d\" }, { \"from\": \"\u102e\u102e\", \"to\": \"\u102e\" }, { \"from\": \"\u102d\u102e|\u102e\u102d\", \"to\": \"\u102e\" }, { \"from\": \"\u102f\u102f\", \"to\": \"\u102f\" }, { \"from\": \"\u102f\u102d\", \"to\": \"\u102d\u102f\" }, { \"from\": \"\u1037\u1037\", \"to\": \"\u1037\" }, { \"from\": \"\u1032\u1032\", \"to\": \"\u1032\" }, { \"from\": \"\u1044\u1004\u103a\u1038\", \"to\": \"\u104E\u1004\u103a\u1038\" }, { \"from\": \"\u103a\u103a\", \"to\": \"\u103a\" }, { \"from\" : \" \u1037\", \"to\": \"\u1037\" }]", true);
    return replaceWithRule($rule, $zawgyi);
}
/**
     * Replace the string with rules.
     *
     * @param  array $rule
     * @param  string $output
     * @return string
     */
function replaceWithRule($rule, $output)
{
    foreach ($rule as $data) {
        $from = "~".json_decode('"'.$data["from"].'"')."~u";
        $to = json_decode('"'.$data["to"].'"');
        $output = preg_replace($from, $to, $output);
    }
    return $output;
}
function custom_menu()
{
    $lang = App\Models\Bp_custom::get()->toArray();
    $languages = [];
    foreach ($lang as $key => $value) {
       $languages[$key]['custom_name'] = $value['custom_name'];
       $languages[$key]['custom_link'] = $value['custom_link'];
   }
   return $languages;
}

function formatUrl($path){
    $string = strtolower(str_replace(" ","-",$path));
    $string = str_replace("'", '', $string);
    $string = str_replace('"', '', $string);
    $string = str_replace(';', '', $string);
    //preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    return preg_replace( '/[~!@#$%^&*()_+={}[]|:;&lt;&gt;.?]/',  '', $string );
}

function uploadPath() {
    return public_path().'/uploads/';
}

function role_type() {
    $role_type = [1=>'user',2=>'staff',3=>'admin',4=>'superadmin'];
    return $role_type;
}

function langauge() {
    $langauge = [1=>'English', 2=>'Myanmar'];
    return $langauge;
}

