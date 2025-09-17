


$("#btn-mailer").on("click", function(e) {
	$("#loader").addClass("fa fa-refresh fa-spin");
	var t = $("#fname").val(),
		a = $("#lname").val(),
		s = $("#company_name").val(),
		o = $("#subject").val(),
		i = $("#message").val(),
		n = jQuery("input[type='number']").val(),
		r = jQuery("input[type='number']").val(),
		l = jQuery("input[type='email']").val(),
		p = $("#country option:selected").text();
	"" != t && "" != a && "" != l && $.ajax({
		type: "POST",
		url: "sendEmail.php",
		data: {
			fname: t,
			lname: a,
			email: l,
			message: i,
			subject: o,
			company: s,
			phone: n,
			fax: r,
			country: p
		},
		dataType: "json",
		success: function(e) {
			$("#mailer-form").trigger("reset")
		},
		error: function(e) {
			console.log("Request Status: " + e.status + " Status Text: " + e.statusText + " " + e.responseText), $("#mailer-form").trigger("reset")
		}
	}), e.preventDefault()
});
var swiper = new Swiper(".promo-swiper", {
	autoplay: !0,
	pagination: {
		el: ".swiper-pagination",
		clickable: !0
	}
});
$(".icon-box").length > 6 && ($(".icon-box:gt(5)").hide(), $(".show-more").show()), $(".show-more").on("click", function() {
	$(".icon-box:gt(5)").slideToggle(200), "View More" === $(this).text() ? $(this).text("View Less") : $(this).text("View More")
});