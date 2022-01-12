<script src="<?php echo base_url(); ?>admin_assets/js/jquery-3.3.1.min.js"></script>

<script src="<?php echo base_url(); ?>admin_assets/js/popper.min.js"></script>

<script src="<?php echo base_url(); ?>admin_assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>admin_assets/js/main.js"></script>

<!-- The javascript plugin to display page loading on top-->

<script src="<?php echo base_url(); ?>admin_assets/js/plugins/pace.min.js"></script>

<!-- Page specific javascripts-->


<script type="text/javascript">
$(document).ready(function() {
$(".app-menu li a").each(function() {
var pageUrl = window.location.href.split(/[?#]/)[0];
if (this.href == pageUrl) {
$(this).addClass("active");
$(this).parent().addClass("active"); // add active to li of the current link
$(this).parent().parent().prev().addClass("active"); // add active class to an anchor
$(this).parent().parent().prev().click(); // click the item to make it drop
}
});
});
</script>

<!------>