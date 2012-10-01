<html>
<head>
<meta content="text/html; charset=ISO-8859-1"
http-equiv="content-type">
<title></title>
</head>
<body>
<h2 style="font-weight: bold;">Building a Currency Converter with
Ajax-PHP and Google’s Calculator API</h2>
<span
style="color: rgb(102, 102, 102); font-family: 'Lucida Grande','Lucida Sans Unicode',Verdana,sans-serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 22px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: rgb(255, 255, 255); display: inline ! important; float: none;"></span>
<ul>
</ul>
<span
style="color: rgb(102, 102, 102); font-family: 'Lucida Grande','Lucida Sans Unicode',Verdana,sans-serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 22px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: rgb(255, 255, 255); display: inline ! important; float: none;">Google’s
"<span style="font-weight: bold;">Currency calculator</span>"
web-service accepts an URL which is url-encoded with a string that
contains three values : (amount , from-currency and to-currency) . Then
it returns a Json-like string which can be parsed with PHP to extract
the converted value . &nbsp;”Json-like” (this is my definition) , means
that the string isn’t valid Json , so we can’t use PHP’s native&nbsp;</span><strong
style="margin: 0px; padding: 0px; font-weight: bold; color: rgb(102, 102, 102); font-family: 'Lucida Grande','Lucida Sans Unicode',Verdana,sans-serif; font-size: 16px; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 22px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: rgb(255, 255, 255);">json_decode</strong><span
style="color: rgb(102, 102, 102); font-family: 'Lucida Grande','Lucida Sans Unicode',Verdana,sans-serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 22px; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: rgb(255, 255, 255); display: inline ! important; float: none;"><span
class="Apple-converted-space">&nbsp;</span>function , instead , custom
code will be used to extract the information &nbsp;. A live
demonstration can be seen <a
href="http://test3.fcab.se/members/test/currency/currency.php">on this
link </a>. <br>
I would like to thank Patrick Idén for the efforts he made to edit the
layout of the script ( CSS ) and for maintaining the demo on his server
. <br>
<br>
</span>
<h3
style="border: 0px none ; margin: 20px 0px 10px; padding: 0px; font-weight: bold; font-size: 18px; cursor: text; position: relative; color: rgb(51, 51, 51); font-family: Helvetica,arial,freesans,clean,sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;">Requirements
:</h3>
<span
style="color: rgb(51, 51, 51); font-family: Helvetica,arial,freesans,clean,sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; background-color: rgb(255, 255, 255); display: inline ! important; float: none;">Actually
there are no special requirements to set-up these code snippets . A web
server that supports PHP 5+&nbsp; is adequate . The request to the
web-service can be made with PHP's <span style="font-weight: bold;">CURL-extension</span>&nbsp;
or<span style="font-weight: bold;"> file_get_contents()</span>&nbsp;
function .&nbsp; Some web-hosts have the <span
style="font-weight: bold;">CURL-extension&nbsp;</span> disabled&nbsp;
, so use the <span style="font-weight: bold;">file_get_contents()</span>&nbsp;
function instead .&nbsp; </span>Line 23&nbsp; /&nbsp; 26&nbsp; into
script&nbsp; "<span style="font-weight: bold;">currency-converter.php</span>"&nbsp;
define which method will be used to query the web-service&nbsp; . By
defauld , the CURL method is used . Wamp has CURL disabled by defauld ,
so you have to use the file_get_contents()&nbsp; function method&nbsp;
or enable the extension first . <br>
<br>
<h3>How does the script work ? </h3>
An&nbsp; article <a
href="http://tournasdimitrios1.wordpress.com/2012/08/27/building-a-currency-converter-with-ajax-php-and-googles-calculator-api/">on
this link</a>&nbsp; has a detailed&nbsp; description how this script
works . Comments and suggestions are always welcome !!!&nbsp; . <br>
<br>
<h3><span style="font-weight: bold;">Known bug&nbsp; : </span></h3>
The code has been tested on Chrome , Firefox , IE , Safari (Mac
Os)&nbsp; and Opera&nbsp; .All browsers including IE9 have passed the
test ,
except&nbsp; IE-8 (shadow effects and syles are not working as expected
) . <br>
<h3>Tools used during development : </h3>
<ul>
<li>An headless&nbsp; Linux box&nbsp; (CentOs 5.6) as web-server
(Apache 2 , PHP5.3.2) <br>
</li>
<li>Notepadd++</li>
<li>Phing for automated&nbsp; deployment to&nbsp; GitHub and for FTP
to the Linux box <br>
</li>
<li>Git-Bash&nbsp; for versioning of the code&nbsp;</li>
<li>Windows XP / 7&nbsp; and MacOs -Lion&nbsp; for testing the code
on different browsers . <br>
</li>
</ul>
<br>
<br>
<hr>
<h3>License :</h3>
/**<br>
&nbsp;* Infinite scrolling&nbsp; <br>
&nbsp;* <br>
&nbsp;* http://tournasdimitrios1.wordpress.com<br>
&nbsp;* <br>
&nbsp;* @copyright Tournas Dimitiros 2012<br>
&nbsp;* <br>
&nbsp;* This program is free software: you can redistribute it and/or
modify<br>
&nbsp;* it under the terms of the GNU General Public License as
published by<br>
&nbsp;* the Free Software Foundation, either version 3 of the License,
or<br>
&nbsp;* (at your option) any later version.<br>
&nbsp;* <br>
&nbsp;* This program is distributed in the hope that it will be useful,<br>
&nbsp;* but WITHOUT ANY WARRANTY; without even the implied warranty of<br>
&nbsp;* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.&nbsp; See
the<br>
&nbsp;* GNU General Public License for more details.<br>
&nbsp;* <br>
&nbsp;* You should have received a copy of the GNU General Public
License<br>
&nbsp;* along with this program.&nbsp; If not, see
&lt;http://www.gnu.org/licenses/&gt;.<br>
&nbsp;* <br>
&nbsp;* @author Tournas Dimitrios &lt;tournasdimitrios@gmail.com&gt;<br>
&nbsp;* @version 0.3<br>
&nbsp;* <br>
&nbsp;*/<br>
<br>
</body>
</html>