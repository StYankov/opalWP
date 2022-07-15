jQuery(document).ready(function() {
    jQuery(document).on('click', '.fw-upload', function(evt){
        tb_show('', 'media-upload.php?type=image&TB_iframe=true');
        return false;
    });

    window.send_to_editor = function(html) {
        var imgurl = jQuery(html).attr('src');
        console.log(html);
        console.log(imgurl);
        jQuery('.fw-image-url').val(imgurl);
        tb_remove();
    }
})