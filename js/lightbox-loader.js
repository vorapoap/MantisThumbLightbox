$(function() {
	$("div.bug-attachment-preview-image a img").each(function() {
		var $this = $(this);
		var $a = $this.parent();
		var $attachment = $a.parent().parent();
		$a.attr("data-lightbox", "preview").attr("data-title", $attachment.text().trim());
		$this.attr("src", "/plugins/MantisThumbLightbox/thumb_" + $this.attr("src"));
	})
	lightbox.option({
      'resizeDuration': 200,
      'alwaysShowNavOnTouchDevices': true,
      'fadeDuration': 600,
      'imageFadeDuration': 200,
      'resizeDuration': 200
    })
})
