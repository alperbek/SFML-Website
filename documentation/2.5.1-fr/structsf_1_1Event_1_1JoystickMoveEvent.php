<?php
    $version = '2.5.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Event::JoystickMoveEvent Struct Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Event.php">Event</a></li><li class="navelem"><a class="el" href="structsf_1_1Event_1_1JoystickMoveEvent.php">JoystickMoveEvent</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="structsf_1_1Event_1_1JoystickMoveEvent-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Event::JoystickMoveEvent Struct Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p><a class="el" href="classsf_1_1Joystick.php" title="Give access to the real-time state of the joysticks. ">Joystick</a> axis move event parameters (JoystickMoved)  
 <a href="structsf_1_1Event_1_1JoystickMoveEvent.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Event_8hpp_source.php">Event.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:a7bf2b2f2941a21ed26a67c95f5e4232f"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1Event_1_1JoystickMoveEvent.php#a7bf2b2f2941a21ed26a67c95f5e4232f">joystickId</a></td></tr>
<tr class="memdesc:a7bf2b2f2941a21ed26a67c95f5e4232f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Index of the joystick (in range [0 .. <a class="el" href="classsf_1_1Joystick.php#aee00dd432eacd8369d279b47c3ab4cc5a6e0a2a95bc1da277610c04d80f52715e" title="Maximum number of supported joysticks. ">Joystick::Count</a> - 1])  <a href="#a7bf2b2f2941a21ed26a67c95f5e4232f">More...</a><br /></td></tr>
<tr class="separator:a7bf2b2f2941a21ed26a67c95f5e4232f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:add22e8126b7974271991dc6380cbdee3"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">Joystick::Axis</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1Event_1_1JoystickMoveEvent.php#add22e8126b7974271991dc6380cbdee3">axis</a></td></tr>
<tr class="memdesc:add22e8126b7974271991dc6380cbdee3"><td class="mdescLeft">&#160;</td><td class="mdescRight">Axis on which the joystick moved.  <a href="#add22e8126b7974271991dc6380cbdee3">More...</a><br /></td></tr>
<tr class="separator:add22e8126b7974271991dc6380cbdee3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aba5a70815420161375fd2e756689c32a"><td class="memItemLeft" align="right" valign="top">float&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1Event_1_1JoystickMoveEvent.php#aba5a70815420161375fd2e756689c32a">position</a></td></tr>
<tr class="memdesc:aba5a70815420161375fd2e756689c32a"><td class="mdescLeft">&#160;</td><td class="mdescRight">New position on the axis (in range [-100 .. 100])  <a href="#aba5a70815420161375fd2e756689c32a">More...</a><br /></td></tr>
<tr class="separator:aba5a70815420161375fd2e756689c32a"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p><a class="el" href="classsf_1_1Joystick.php" title="Give access to the real-time state of the joysticks. ">Joystick</a> axis move event parameters (JoystickMoved) </p>

<p class="definition">Definition at line <a class="el" href="Event_8hpp_source.php#l00142">142</a> of file <a class="el" href="Event_8hpp_source.php">Event.hpp</a>.</p>
</div><h2 class="groupheader">Member Data Documentation</h2>
<a id="add22e8126b7974271991dc6380cbdee3"></a>
<h2 class="memtitle"><span class="permalink"><a href="#add22e8126b7974271991dc6380cbdee3">&#9670;&nbsp;</a></span>axis</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">Joystick::Axis</a> sf::Event::JoystickMoveEvent::axis</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Axis on which the joystick moved. </p>

<p class="definition">Definition at line <a class="el" href="Event_8hpp_source.php#l00145">145</a> of file <a class="el" href="Event_8hpp_source.php">Event.hpp</a>.</p>

</div>
</div>
<a id="a7bf2b2f2941a21ed26a67c95f5e4232f"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a7bf2b2f2941a21ed26a67c95f5e4232f">&#9670;&nbsp;</a></span>joystickId</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::Event::JoystickMoveEvent::joystickId</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Index of the joystick (in range [0 .. <a class="el" href="classsf_1_1Joystick.php#aee00dd432eacd8369d279b47c3ab4cc5a6e0a2a95bc1da277610c04d80f52715e" title="Maximum number of supported joysticks. ">Joystick::Count</a> - 1]) </p>

<p class="definition">Definition at line <a class="el" href="Event_8hpp_source.php#l00144">144</a> of file <a class="el" href="Event_8hpp_source.php">Event.hpp</a>.</p>

</div>
</div>
<a id="aba5a70815420161375fd2e756689c32a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aba5a70815420161375fd2e756689c32a">&#9670;&nbsp;</a></span>position</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">float sf::Event::JoystickMoveEvent::position</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>New position on the axis (in range [-100 .. 100]) </p>

<p class="definition">Definition at line <a class="el" href="Event_8hpp_source.php#l00146">146</a> of file <a class="el" href="Event_8hpp_source.php">Event.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="Event_8hpp_source.php">Event.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>