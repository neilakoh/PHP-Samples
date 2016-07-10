<html>
  <body>
    <div id="d_clip_button" class="clip_button" data-clipboard-target="clipboard_textarea" title="Click to copy." style="border:1px solid black; padding:20px;">Copy To Clipboard</div>

    <script type="text/javascript" src="ZeroClipboard.js"></script>
    <script type="text/javascript">
      var client = new ZeroClipboard( document.getElementById('d_clip_button') );
    </script>
	<textarea id="clipboard_textarea">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
  </body>
</html>