<?php
/*
 * This file is part of IRC2HTML <http://www.contex.me/>.
 *
 * IRC2HTML is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * IRC2HTML is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
include("functions.php");
echo "<table border='1' align='center' style='table-layout:fixed; border-style:solid;'>";
echo "<tr>";
echo "<th><h1>IRC to HTML</h1></th>";
echo "<th><h1>HTML to IRC</h1></th>";
echo "<th><h1>IRC to BBCode</h1></th>";
echo "<th><h1>BBCode to IRC</h1></th>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo 
parseToHTML("03(13:40:48) <04~Contex>  italic font<br>
03(13:40:48) <04~Contex>  bold font<br>
03(13:40:48) <04~Contex>  bold italic font<br>
3(13:40:48) <04~Contex> 0 white font color<br>
03(13:40:48) <04~Contex> 1 black font color<br>
03(13:40:48) <04~Contex> 2 dark blue font color<br>
03(13:40:48) <04~Contex> 3 green font color<br>
03(13:40:48) <04~Contex> 4 red font color<br>
03(13:40:48) <04~Contex> 5 brown font color<br>
03(13:40:48) <04~Contex> 6 purple font color<br>
03(13:40:48) <04~Contex> 7 orange font color<br>
03(13:40:48) <04~Contex> 8 yellow font color<br>
03(13:40:48) <04~Contex> 9 lime font color<br>
03(13:40:48) <04~Contex> 10 teal font color<br>
03(13:40:48) <04~Contex> 11 cyan font color<br>
03(13:40:48) <04~Contex> 12 blue font color<br>
03(13:40:48) <04~Contex> 13 pink font color<br>
03(13:40:48) <04~Contex> 14 light dark grey font color<br>
03(13:40:48) <04~Contex> 15 grey font color<br>
03(13:40:48) <04~Contex> 7,0 orange background with white font color<br>
03(13:40:48) <04~Contex> 7,1 orange background with black font color<br>
03(13:40:48) <04~Contex> 7,2 orange background with dark blue font color<br>
03(13:40:48) <04~Contex> 7,3 orange background with green font color<br>
03(13:40:48) <04~Contex> 7,4 orange background with red font color<br>
03(13:40:48) <04~Contex> 7,5 orange background with brown font color<br>
03(13:40:48) <04~Contex> 7,6 orange background with purple font color<br>
03(13:40:48) <04~Contex> 7,7 orange background with orange font color<br>
03(13:40:48) <04~Contex> 7,8 orange background with yellow font color<br>
03(13:40:48) <04~Contex> 7,9 orange background with lime font color<br>
03(13:40:48) <04~Contex> 7,10 orange background with teal font color<br>
03(13:40:48) <04~Contex> 7,11 orange background with cyan font color<br>
03(13:40:48) <04~Contex> 7,12 orange background with blue font color<br>
03(13:40:48) <04~Contex> 7,13 orange background with pink font color<br>
03(13:40:48) <04~Contex> 7,14 orange background with grey font color<br>
03(13:40:48) <04~Contex> 7,15 orange background with light grey font color<br>"); 
echo "</td>";

echo "<td>";
echo "<textarea rows='43' cols='50'>";
echo 
parseToIRC("<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> <i> italic font</font></i></b><br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> <b> bold font</font></i></b><br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> <b><i> bold italic font</font></i></b><br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: white;'> white font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: black;'> black font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: darkblue;'> dark blue font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: green;'> green font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: red;'> red font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: brown;'> brown font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: purple;'> purple font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: orange;'> orange font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: yellow;'> yellow font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: lime;'> lime font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: teal;'> teal font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: teal;'> cyan font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: blue;'> blue font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: pink;'> pink font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: grey;'> light dark grey font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='color: lightgrey;'> grey font color</font></i></b><br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: white;'> orange background with white font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: black;'> orange background with black font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: darkblue;'> orange background with dark blue font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: green;'> orange background with green font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: red;'> orange background with red font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: brown;'> orange background with brown font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: purple;'> orange background with purple font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: orange;'> orange background with orange font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: yellow;'> orange background with yellow font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: lime;'> orange background with lime font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: teal;'> orange background with teal font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: teal;'> orange background with cyan font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: blue;'> orange background with blue font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: pink;'> orange background with pink font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: grey;'> orange background with grey font color<br>
<b></font><font style='color: green;'>(13:40:48)</font></i></b> <</font><font style='color: red;'>~Contex</font></i></b>> </font><font style='background-color: orange;color: lightgrey;'> orange background with light grey font color</font></i></b><br>");
echo "</textarea>";
echo "</td>";

echo "<td>";
echo "<textarea rows='43' cols='50'>";
echo 
parseToBBCode("03(13:40:48) <04~Contex>  italic font
03(13:40:48) <04~Contex>  bold font
03(13:40:48) <04~Contex>  bold italic font
3(13:40:48) <04~Contex> 0 white font color
03(13:40:48) <04~Contex> 1 black font color
03(13:40:48) <04~Contex> 2 dark blue font color
03(13:40:48) <04~Contex> 3 green font color
03(13:40:48) <04~Contex> 4 red font color
03(13:40:48) <04~Contex> 5 brown font color
03(13:40:48) <04~Contex> 6 purple font color
03(13:40:48) <04~Contex> 7 orange font color
03(13:40:48) <04~Contex> 8 yellow font color
03(13:40:48) <04~Contex> 9 lime font color
03(13:40:48) <04~Contex> 10 teal font color
03(13:40:48) <04~Contex> 11 cyan font color
03(13:40:48) <04~Contex> 12 blue font color
03(13:40:48) <04~Contex> 13 pink font color
03(13:40:48) <04~Contex> 14 light dark grey font color
03(13:40:48) <04~Contex> 15 grey font color
03(13:40:48) <04~Contex> 7,0 orange background with white font color
03(13:40:48) <04~Contex> 7,1 orange background with black font color
03(13:40:48) <04~Contex> 7,2 orange background with dark blue font color
03(13:40:48) <04~Contex> 7,3 orange background with green font color
03(13:40:48) <04~Contex> 7,4 orange background with red font color
03(13:40:48) <04~Contex> 7,5 orange background with brown font color
03(13:40:48) <04~Contex> 7,6 orange background with purple font color
03(13:40:48) <04~Contex> 7,7 orange background with orange font color
03(13:40:48) <04~Contex> 7,8 orange background with yellow font color
03(13:40:48) <04~Contex> 7,9 orange background with lime font color
03(13:40:48) <04~Contex> 7,10 orange background with teal font color
03(13:40:48) <04~Contex> 7,11 orange background with cyan font color
03(13:40:48) <04~Contex> 7,12 orange background with blue font color
03(13:40:48) <04~Contex> 7,13 orange background with pink font color
03(13:40:48) <04~Contex> 7,14 orange background with grey font color
03(13:40:48) <04~Contex> 7,15 orange background with light grey font color"); 
echo "</textarea>";
echo "</td>";

echo "<td>";
echo "<textarea rows='43' cols='50'>";
echo 
parseToIRC("[b][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [i] italic font[/i]
[b][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [b] bold font[/b]
[b][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [b][i] bold italic font[/b][/i]
[b][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=white] white font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=black] black font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=darkblue] dark blue font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=green] green font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=red] red font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=brown] brown font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=purple] purple font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=orange] orange font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=yellow] yellow font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=lime] lime font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=teal] teal font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=cyan] cyan font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=blue] blue font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=pink] pink font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=grey] light dark grey font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=lightgrey] grey font color[/color]
[b][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=white] orange background with white font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=black] orange background with black font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=darkblue] orange background with dark blue font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=green] orange background with green font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=red] orange background with red font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=brown] orange background with brown font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=purple] orange background with purple font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=orange] orange background with orange font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=yellow] orange background with yellow font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=lime] orange background with lime font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=teal] orange background with teal font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=cyan] orange background with cyan font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=blue] orange background with blue font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=pink] orange background with pink font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=grey] orange background with grey font color
[b][/color][color=green](13:40:48)[/color][/b] <[color=red]~Contex[/color]> [color=lightgrey] orange background with light grey font color[/color]
"); 
echo "</textarea>";
echo "</td>";

echo "</tr>";
echo "</table>";
?>