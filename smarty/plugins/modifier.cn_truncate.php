<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty truncate modifier plugin
 *
 * Type:     modifier<br>
 * Name:     truncate<br>
 * Purpose:  Truncate a string to a certain length if necessary,
 *           optionally splitting in the middle of a word, and
 *           appending the $etc string or inserting $etc into the middle.
 * @link     http://www.hbcms.com/
 * @author   http://www.hbcms.com/
 * @param string
 * @param integer
 * @param string
 * @param boolean $keep_first_style �Ƿ�����һ��style
 * @return string

 * $keep_first_style ��ⷶ����

$s = '<A HREF="http://www.hbcms.com/"><FONT COLOR="red"><U><B>�격<U>����</U>��<B>��</B>ϵ &nbsp;ͳ&nbsp;
<P>
<FONT SIZE="2" COLOR="blue">HBCMS</FONT> ��һ���������ʹ�õ����ݹ���ϵͳ��������������<A HREF="http://www.hbcms.com/">��������ҵ��վ</A>��������鿴��ϸ��Ȩ˵��

<BR>&nbsp;<BR>
�Ƿ��д���
<HR>
��֪bug����ȡ��<FONT SIZE="2" COLOR="blue">��ľ��ľ��<U>ľ��ľ</U>��ľ��ľ��ľ��ľ��ľ</font>���쳣
<P>
ϣ����Ҹ���</B></U></FONT></A>';
echo $s . '<hr><HR><HR>smarty_modifier_cn_truncate:<HR>';
echo smarty_modifier_cn_truncate($s,30,'������',1);
exit();
 */

function smarty_modifier_cn_truncate($string, $strlen = 20, $etc = '...',
                                  $keep_first_style = false)
{
    $strlen = $strlen*2;
    $string = trim($string);
    if ( strlen($string) <= $strlen )    {
        return $string;
    }
    $str = strip_tags($string);
    $j = 0;
    for($i=0;$i<$strlen;$i++) {
      if(ord(substr($str,$i,1))>0xa0) $j++; 
    }
    if($j%2!=0) $strlen++; 
    $rstr=substr($str,0,$strlen);
    if (strlen($str)>$strlen  ) {$rstr .= $etc;} 

    if ( $keep_first_style == true && ereg('^<(.*)>$',$string) )    {
        if ( strlen($str) <= $strlen )    {
            return $string;
        }
        $start_pos = strpos($string,substr($str,0,4));
        $end_pos = strpos($string,substr($str,-4));
        $end_pos = $end_pos+4;
        $rstr = substr($string,0,$start_pos) . $rstr . substr($string,$end_pos,strlen($string));
    }

    return $rstr; 

}

/* vim: set expandtab: */

?>