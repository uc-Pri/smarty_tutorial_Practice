<html>
  <head>
    <title>Practice</title>
  </head>

  <style>
    #Name {
      background-color: skyblue;
      color: #fff;
      font-size: 16px;
      text-align: center;
      font-weight: 800;
    }
  </style>

  <body>
    <pre>
        <div id="Name">
User Information:

Name: {$Name}

<!-- comment -->
{*comment*}

<!-- Custom fucntions -->
{counter start=0 skip=20}<br />
{counter}<br />
{counter}<br />
{counter}<br />

<!-- FUNCTIONS, ARRAYS,LOOPS -->
{assign var=foo value=[1,2,3]}
{foreach $foo as $f}
{$f}<br>
{/foreach}

<!-- ATTRUBUTES -->
{assign var=foo1 value=substr($bar,2,5)}
{$foo1}


<!-- user defined Function  -->
{function  name=menu }
  <ul>
    <li class="item1">dsjfj</li>
    <li class="item2">jksd</li>
    <li class="item3">jasb</li>
    <li class="item4">jzb</li>
    <li class="item5">jsadjks</li>
  </ul>
{/function}

<!-- Calling  multiple times -->
{menu}   {menu} 


<!-- Math numbers -->
{assign var=math value="`$code+$rollno`"}
{$math}

<!-- Array call by indexes -->
{$Contacts[0]}<br />
{$Contacts[1]}<br />
{* you can print arrays of arrays as well *}
{$Contacts[2][0]}<br />
{$Contacts[2][1]}<br />

<!-- Javascript -->
<button onclick="foobar()">Alert</button>
<button onclick="bazzy()">Prompt</button>


<!-- variables loaded from config files -->
{config_load file='Config.conf'} 
<table border="{#tableBorderSize#}" bgcolor="{#tableBgColor#}" style="margin: auto;">
<tr bgcolor="{#rowBgColor#}"> 
    <td >First</td>
    <td>Last</td>
    <td>Address</td>
</tr>
</table>

<!-- Reserved vaiable  -->
{$smarty.now|date_format:'%d-%m-%Y %H:%M:%S'}
Powered by Smarty {$smarty.version}

<!-- Variable emodifiers -->
{$Movie2|capitalize} ----capitalize
{$Movie2|lower} ----lower
{$Movie2|upper}  ----upper
{$Movie|count_sentences}  ---count sentences
{$Movie2|cat:"Added"}  ----cat
{$Movie2|count_characters} --- count_characters 
{$Movie2|truncate:5}  -----truncate
{$Movie2|indent}  -----indent
{$Movie|wordwrap:30}  -----wordwrap


<!-- Combining modifiers -->
{$Movie2|upper|spacify} ----upper&spacify


<!-- Built in functions  -->
<!-- 1.for each loop  -->
{$colors = ['red','blue','green','purple']}
{foreach $colors as $color}
{$color}<br>
{/foreach}

<!-- 2.append -->
{append var='name' value='Bob' index='first'} 
{append 'name' 'Meyer' index='last'} {* short-hand *}

The first name is {$name.first}.<br>
The last name is {$name.last}.

<!-- 3.capture  -->
{capture append="cap"}hello{/capture}I say just {capture append="cap"}world{/capture}
{foreach $cap as $text}{$text} {/foreach}

<!-- 4. a)for  -->
<ul>
  {for $forloop=1 to 3}
      <li>{$forloop}</li>
  {/for}
  </ul>

<!-- 4. b)for else  -->
<ul>
  {for $frel=$start to $to}
      <li>{$frel}</li>
  {forelse}
    no iteration
  {/for}
  </ul>

  <!-- if-else  -->
  {$data = [1,2,3,4,5]}
  {foreach $data as $value}
  {if $value == 2}
  {continue}
  {/if}
    {if $value == 4}
      {* abort iterating the array *}
      {break}
    {/if}
    {$value}
  {/foreach}

  <!-- fetch -->
  {fetch file='https://www.google.com/'}

  <!-- html_checkboxes  -->
{html_checkboxes name='id' options=$cust_checkboxes selected=$customer_id separator='<br />'}

<!-- html_options  -->
{html_options name=foo options=$myOptions selected=$mySelect}

<!-- html radio -->
{html_radios name='id' options=$cust_radios
     selected=$customer_id separator='<br />'}

<!-- html_date -->
{html_select_date  start_year='-5'
   end_year='+1' }

<!-- Chapter 14 -->
<!-- Add directory -->




 

</div>
</pre>
  </body>

  <script>
    // the following braces are ignored by Smarty
    // since they are surrounded by whitespace
    function bazzy() {
      prompt("Hello!");
    }
  </script>

  <script src="script.js"></script>
</html>
