<?php
namespace Haojing;

class RequestData
{
	public static function getUrlMatches($rule, $url, $path = null) {
		$req_str = strpos($rule, 'http') === 0 ? $url : (empty($path) ? parse_url($url, PHP_URL_PATH) : $path);
		if (empty($req_str)) {
			return null;
		}

		$rule = str_replace(['\\{', '\\}'], ['{', '}'], preg_quote($rule, '/'));
		$reg_exp = preg_replace('/\{([^\{\}]+)\}/', '(?<$1>[\.\-\_0-9a-zA-Z\x7f-\xff ]+)', $rule);
		if (preg_match('/^' . $reg_exp . '/', $req_str, $m)) {
			return $m;
		} else {
			return null;
		}
	}
}