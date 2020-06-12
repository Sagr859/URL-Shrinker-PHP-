<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
$(document).ready(function(e){
    e.preventDefault();
    var slug = $(this).attr('href').split('/');
    slug = slug[slug.length - 2];
    $.ajax({
        url: "getlink.php",
        method: "GET",
        data: {slugurl:slug},
        datatype:text,
        success: function (ogurl) {
                location.replace(ogurl);
        }
    });
});