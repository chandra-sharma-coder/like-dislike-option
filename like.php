<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<title>bootstrapfriendly - like dislike</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="reaction_loader"></div>
<div class="container p-4">
<section class="row ">
<h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>
<div class="row reaction pb-4">
<div class="col-lg-12 col-md-12">
<div class="graph-title mb-2">
<h4>Share Your Reaction</h4>
</div>
</div>
<div class="col-lg-1 col-md-1 col-sm-6 col-6 reaction_box_outer">
<div class="main-box " id="awesome_1">
<div class="graph-box">
<div class="box-start">
<div class="groth-num" id="awesome">13</div>
<div class="graph seven" style="height: 15px; background-color: #8bdb9c;">
</div>
</div>
</div>
<div class="emogi-icon " onclick="setLikeDislike('awesome','1')"><img src="reaction_icons/2.png"></div>
<p class="reaction_tag">AWESOME 1</p>
</div>
</div>
<div class="col-lg-1 col-md-1 col-sm-6 col-6 reaction_box_outer">
<div class="main-box " id="good_1">
<div class=" graph-box">
<div class="box-start">
<div class="groth-num" id="good">8</div>
<div class="graph seven" style="height: 10px; background-color: #8bdb9c;">
</div>
</div>
</div>
<div class="emogi-icon" onclick="setLikeDislike('good','1')"><img src=" reaction_icons/1.png"></div>
<p class="reaction_tag">GOOD</p>
</div>
</div>
<div class="col-lg-1 col-md-1 col-sm-6 col-6 reaction_box_outer">
<div class="main-box " id="ok_1">
<div class="graph-box">
<div class="box-start">
<div class="groth-num" id="ok">9</div>
<div class="graph seven" style="height: 11px; background-color: #8bdb9c;">
</div>
</div>
</div>
<div class="emogi-icon" onclick="setLikeDislike('ok','1')"><img src="reaction_icons/3.png"></div>
<p class="reaction_tag">OK</p>
</div>
</div>
<div class="col-lg-1 col-md-1 col-sm-6 col-6 reaction_box_outer">
<div class="main-box " id="not_good_1">
<div class="graph-box">
<div class="box-start">
<div class="groth-num" id="not_good">11</div>
<div class="graph seven" style="height: 13px; background-color: #8bdb9c;">
</div>
</div>
</div>
<div class="emogi-icon" onclick="setLikeDislike('not_good','1')"><img src="reaction_icons/4.png"></div>
<p class="reaction_tag">NOT GOOD</p>
</div>
</div>
<div class="col-lg-1 col-md-1 col-sm-6 col-6 reaction_box_outer">
<div class="main-box " id="fail_1">
<div class="graph-box">
<div class="box-start">
<div class="groth-num" id="fail">8</div>
<div class="graph seven" style="height: 10px;; background-color: #8bdb9c;">
</div>
</div>
</div>
<div class="emogi-icon" onclick="setLikeDislike('fail','1')"><img src="reaction_icons/5.png"></div>
<p class="reaction_tag">FAIL</p>
</div>
</div>
</div>
<h2>Lorem Ipsum is simply dummy text of the printing</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>
<div class="row reaction pb-4">
<div class="col-lg-12 col-md-12">
<div class="graph-title mb-2">
<h4>Share Your Reaction</h4>
</div>
</div>
<div class="col-lg-1 col-md-1 col-sm-6 col-6 reaction_box_outer">
<div class="main-box " id="awesome_2">
<div class="graph-box">
<div class="box-start">
<div class="groth-num" id="awesome">7</div>
<div class="graph seven" style="height: 9px; background-color: #8bdb9c;">
</div>
</div>
</div>
<div class="emogi-icon " onclick="setLikeDislike('awesome','2')"><img src="reaction_icons/2.png"></div>
<p class="reaction_tag">AWESOME 2</p>
</div>
</div>
<div class="col-lg-1 col-md-1 col-sm-6 col-6 reaction_box_outer">
<div class="main-box " id="good_2">
<div class=" graph-box">
<div class="box-start">
<div class="groth-num" id="good">13</div>
<div class="graph seven" style="height: 15px; background-color: #8bdb9c;">
</div>
</div>
</div>
<div class="emogi-icon" onclick="setLikeDislike('good','2')"><img src=" reaction_icons/1.png"></div>
<p class="reaction_tag">GOOD</p>
</div>
</div>
<div class="col-lg-1 col-md-1 col-sm-6 col-6 reaction_box_outer">
<div class="main-box " id="ok_2">
<div class="graph-box">
<div class="box-start">
<div class="groth-num" id="ok">5</div>
<div class="graph seven" style="height: 7px; background-color: #8bdb9c;">
</div>
</div>
</div>
<div class="emogi-icon" onclick="setLikeDislike('ok','2')"><img src="reaction_icons/3.png"></div>
<p class="reaction_tag">OK</p>
</div>
</div>
<div class="col-lg-1 col-md-1 col-sm-6 col-6 reaction_box_outer">
<div class="main-box " id="not_good_2">
<div class="graph-box">
<div class="box-start">
<div class="groth-num" id="not_good">3</div>
<div class="graph seven" style="height: 5px; background-color: #8bdb9c;">
</div>
</div>
</div>
<div class="emogi-icon" onclick="setLikeDislike('not_good','2')"><img src="reaction_icons/4.png"></div>
<p class="reaction_tag">NOT GOOD</p>
</div>
</div>
<div class="col-lg-1 col-md-1 col-sm-6 col-6 reaction_box_outer">
<div class="main-box " id="fail_2">
<div class="graph-box">
<div class="box-start">
<div class="groth-num" id="fail">9</div>
<div class="graph seven" style="height: 11px;; background-color: #8bdb9c;">
</div>
</div>
</div>
<div class="emogi-icon" onclick="setLikeDislike('fail','2')"><img src="reaction_icons/5.png"></div>
<p class="reaction_tag">FAIL</p>
</div>
</div>
</div>
</section>
</div>
<div class="container"> 
<div class="row">
<div class="col-md-12 pt-4">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1190033123418031" crossorigin="anonymous"></script>

<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1190033123418031" data-ad-slot="5335471635" data-ad-format="auto" data-full-width-responsive="true"></ins>
<script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
</div>
</div>
</div>
<script>
		function setLikeDislike(type, id) {
			jQuery.ajax({
				url: 'include/setLikeDislike.php',
				type: 'post',
				data: 'type=' + type + '&id=' + id,
				beforeSend: function() {
					// Show image container
					$("#reaction_loader").show();
					//alert ("yyy");
				},
				success: function(result) {
					result = jQuery.parseJSON(result);
					console.log(result.opertion);
					if (result.opertion == 'awesome') {
						jQuery('#awesome_' + id).addClass('awesome_c');
						jQuery('#good_' + id).removeClass('good_c');
						jQuery('#ok_' + id).removeClass('ok_c');
						jQuery('#not_good_' + id).removeClass('not_good_c');
						jQuery('#fail_' + id).removeClass('fail_c');
					}

					if (result.opertion == 'good') {
						jQuery('#awesome_' + id).removeClass('awesome_c');
						jQuery('#good_' + id).addClass('good_c');
						jQuery('#ok_' + id).removeClass('ok_c');
						jQuery('#not_good_' + id).removeClass('not_good_c');
						jQuery('#fail_' + id).removeClass('fail_c');
					}

					if (result.opertion == 'ok') {
						jQuery('#awesome_' + id).removeClass('awesome_c');
						jQuery('#good_' + id).removeClass('good_c');
						jQuery('#ok_' + id).addClass('ok_c');
						jQuery('#not_good_' + id).removeClass('not_good_c');
						jQuery('#fail_' + id).removeClass('fail_c');
					}
					if (result.opertion == 'not_good') {
						jQuery('#awesome_' + id).removeClass('awesome_c');
						jQuery('#good_' + id).removeClass('good_c');
						jQuery('#ok_' + id).removeClass('ok_c');
						jQuery('#not_good_' + id).addClass('not_good_c');
						jQuery('#fail_' + id).removeClass('fail_c');
					}
					if (result.opertion == 'fail') {
						jQuery('#awesome_' + id).removeClass('awesome_c');
						jQuery('#good_' + id).removeClass('good_c');
						jQuery('#ok_' + id).removeClass('ok_c');
						jQuery('#not_good_' + id).removeClass('not_good_c');
						jQuery('#fail_' + id).addClass('fail_c');
					}

					if (result.opertion == 'un_awesome' || result.opertion == 'un_good' || result.opertion == 'un_ok' || result.opertion == 'un_not_good' || result.opertion == 'un_fail') {
						jQuery('#awesome_' + id).removeClass('awesome_c');
						jQuery('#good_' + id).removeClass('good_c');
						jQuery('#ok_' + id).removeClass('ok_c');
						jQuery('#not_good_' + id).removeClass('not_good_c');
						jQuery('#fail_' + id).removeClass('fail_c');
					}

					jQuery('#awesome_' + id + ' #awesome').html(result.awesome);
					jQuery('#good_' + id + ' #good').html(result.good);
					jQuery('#ok_' + id + ' #ok').html(result.ok);
					jQuery('#not_good_' + id + ' #not_good').html(result.not_good);
					jQuery('#fail_' + id + ' #fail').html(result.fail);
				},

				complete: function(data) {
					// Hide image container
					$("#reaction_loader").hide();
				}

			});
		}
	</script>
</body>
</html>
