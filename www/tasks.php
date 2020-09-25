<!-- saved from url=(0052)https://corporateunderground.org/programmer_test.txt -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body><code><span style="color: #000000">
1&nbsp;-&nbsp;Explain&nbsp;the&nbsp;differences&nbsp;between&nbsp;HEAD,&nbsp;GET&nbsp;and&nbsp;POST&nbsp;in&nbsp;the&nbsp;HTTP<br><br>protocol.<br>
    <br>--------------------------------------------------------------------------<br><br>
    <br>2&nbsp;-&nbsp;Convert&nbsp;the&nbsp;following&nbsp;procedural&nbsp;PHP7&nbsp;code&nbsp;into&nbsp;object&nbsp;oriented&nbsp;style<br><br>code.<br><br><br>function&nbsp;make_astronaut(&nbsp;string&nbsp;$name,&nbsp;float&nbsp;$weight&nbsp;)&nbsp;{<br><br>&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;[&nbsp;'name'&nbsp;=&gt;&nbsp;$name,&nbsp;'weight'&nbsp;=&gt;&nbsp;$weight&nbsp;];<br><br>}<br><br><br>function&nbsp;add_weight_to_astronaut(&nbsp;array&nbsp;&amp;$astronaut,&nbsp;float&nbsp;$pounds&nbsp;)&nbsp;{<br><br>&nbsp;&nbsp;&nbsp;&nbsp;$astronaut['weight']&nbsp;+=&nbsp;$pounds;<br><br>}<br><br><br>function&nbsp;launch_astronaut(&nbsp;array&nbsp;$astronaut&nbsp;)&nbsp;{<br><br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(&nbsp;$astronaut['weight']&nbsp;&gt;&nbsp;200&nbsp;)&nbsp;{<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"{$astronaut['name']}&nbsp;too&nbsp;heavy,&nbsp;grounded.\n";<br><br>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"{$astronaut['name']}&nbsp;going&nbsp;where&nbsp;no&nbsp;human&nbsp;has&nbsp;gone&nbsp;before.\n";<br><br>&nbsp;&nbsp;&nbsp;&nbsp;}<br><br>}<br>
    <br>--------------------------------------------------------------------------<br><br>
    <br>3&nbsp;-&nbsp;You&nbsp;are&nbsp;given&nbsp;the&nbsp;following&nbsp;table&nbsp;in&nbsp;database&nbsp;`nasa`:<br><br>
    <br>CREATE&nbsp;TABLE&nbsp;astronaut&nbsp;(&nbsp;name&nbsp;text,&nbsp;weight&nbsp;int&nbsp;);<br><br>
    <br>Write&nbsp;a&nbsp;simple&nbsp;PHP&nbsp;page&nbsp;that&nbsp;displays&nbsp;a&nbsp;form&nbsp;to&nbsp;enter&nbsp;the&nbsp;name&nbsp;and<br>
    <br>weight&nbsp;of&nbsp;an&nbsp;astronaut&nbsp;and&nbsp;on&nbsp;submission&nbsp;enters&nbsp;those&nbsp;values&nbsp;into&nbsp;the<br>
    <br>database.&nbsp;(Simple&nbsp;in&nbsp;this&nbsp;case&nbsp;means&nbsp;you&nbsp;do&nbsp;not&nbsp;have&nbsp;to&nbsp;be&nbsp;<br>
    <br>fancy,&nbsp;but&nbsp;you&nbsp;still&nbsp;need&nbsp;to&nbsp;be&nbsp;complete&nbsp;and&nbsp;correct.&nbsp;Assume&nbsp;the&nbsp;database&nbsp;<br>
    <br>is&nbsp;running&nbsp;on&nbsp;the&nbsp;local&nbsp;host&nbsp;and&nbsp;use&nbsp;user&nbsp;nasa&nbsp;and&nbsp;password&nbsp;nasa&nbsp;to&nbsp;connect).<br>
    <br>Use&nbsp;a&nbsp;DB&nbsp;abstraction&nbsp;layer&nbsp;to&nbsp;write&nbsp;your&nbsp;code.&nbsp;Example:&nbsp;PDO&nbsp;or&nbsp;WPDB.&nbsp;Use&nbsp;prepared<br>
    <br>statements.<br><br>--------------------------------------------------------------------------<br>
    <br>4&nbsp;-&nbsp;You&nbsp;have&nbsp;a&nbsp;group&nbsp;of&nbsp;people&nbsp;that&nbsp;are&nbsp;taking&nbsp;courses&nbsp;from&nbsp;a&nbsp;given&nbsp;list<br>
    <br>of&nbsp;courses.&nbsp;Write&nbsp;ANSI&nbsp;compliant&nbsp;SQL&nbsp;statements&nbsp;that&nbsp;will&nbsp;do&nbsp;the&nbsp;following:<br><br>
    <br>-&nbsp;create&nbsp;the&nbsp;tables&nbsp;that&nbsp;allow&nbsp;any&nbsp;person&nbsp;to&nbsp;take&nbsp;any&nbsp;course,&nbsp;but<br>
    <br>&nbsp;&nbsp;only&nbsp;allow&nbsp;them&nbsp;to&nbsp;sign&nbsp;up&nbsp;for&nbsp;any&nbsp;given&nbsp;course&nbsp;once.<br>
    <br>-&nbsp;show&nbsp;all&nbsp;courses&nbsp;taken&nbsp;by&nbsp;a&nbsp;given&nbsp;person.<br>
    <br>-&nbsp;show&nbsp;all&nbsp;people&nbsp;and&nbsp;the&nbsp;number&nbsp;of&nbsp;courses&nbsp;they&nbsp;are&nbsp;taking.<br>
    <br>--------------------------------------------------------------------------<br>
    <br>5&nbsp;-&nbsp;Given&nbsp;the&nbsp;following&nbsp;string:<br><br>
    <br>$str&nbsp;=&nbsp;'drinking&nbsp;giving&nbsp;jogging&nbsp;喝&nbsp;喝&nbsp;passing&nbsp;制图&nbsp;giving&nbsp;跑步&nbsp;吃';<br><br>
    <br>Using&nbsp;PHP,&nbsp;write&nbsp;a&nbsp;function&nbsp;that:<br><br>
    <br>&nbsp;1.&nbsp;Moves&nbsp;all&nbsp;Chinese&nbsp;characters&nbsp;to&nbsp;the&nbsp;end&nbsp;of&nbsp;the&nbsp;string,&nbsp;reversing&nbsp;their&nbsp;current&nbsp;order.<br>
    <br>&nbsp;2.&nbsp;Removes&nbsp;duplicate&nbsp;English&nbsp;words.<br><br>&nbsp;3.&nbsp;Returns&nbsp;the&nbsp;modified&nbsp;string<br>
    <br>--------------------------------------------------------------------------<br>
    <br>6&nbsp;-&nbsp;Use&nbsp;a&nbsp;GitHub&nbsp;Branch&nbsp;as&nbsp;a&nbsp;Composer&nbsp;Dependency<br><br><br>Explain&nbsp;how&nbsp;you&nbsp;would&nbsp;configure&nbsp;composer&nbsp;to&nbsp;use&nbsp;`https://github.com/pressbooks/new-private-project`&nbsp;<br><br>with&nbsp;the&nbsp;branch&nbsp;`bugfixes`&nbsp;in&nbsp;your&nbsp;project.<br><br>--------------------------------------------------------------------------<br><br>7&nbsp;&nbsp;-&nbsp;Get&nbsp;Pressbooks&nbsp;working&nbsp;locally&nbsp;and&nbsp;attach&nbsp;a&nbsp;screenshot&nbsp;showing&nbsp;that&nbsp;you&nbsp;could&nbsp;do&nbsp;it.&nbsp;<br><br>If&nbsp;there&nbsp;are&nbsp;problems,&nbsp;document&nbsp;and&nbsp;fix&nbsp;them.&nbsp;<br><br><br>+&nbsp;https://docs.pressbooks.org/local-development/<br><br>+&nbsp;MacOS:&nbsp;https://docs.pressbooks.org/local-development/macos/<br><br>+&nbsp;Windows:&nbsp;https://docs.pressbooks.org/local-development/windows/<br><br>--------------------------------------------------------------------------<br><br>8&nbsp;-&nbsp;This&nbsp;string&nbsp;contains&nbsp;information&nbsp;about&nbsp;this&nbsp;test.&nbsp;Can&nbsp;you&nbsp;<br><br>determine&nbsp;what&nbsp;its&nbsp;significance&nbsp;is?<br><br></span>
</code><code>aXA6MTg2LjIyOS4yMzEuOCB0aW1lOjIwMjAtMDktMTggMTE6MTM6MzI=</code><br>
<br>--------------------------------------------------------------------------
</body>
</html>