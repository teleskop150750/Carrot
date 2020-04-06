		$(document).ready(function () {
			$("#btnComAdd").bind("click", function () {
				console.log(88);
				var count = $('#comBody > article').length;
				console.log(count);
				// console.log(textCom);

				$('#nameCom').val('');
				$('#textCom').val('');

				$.ajax({
					url: "../php/form3.php",
					type: "POST",
					headers: {
						'Access-Control-Allow-Origin': '*'
					},
					data: {
						count: count,
					}, 
					dataType: "json",
					success: function (result) {

						console.log(result);
						console.log(result.length);

						$('#comBody article').remove();
						$('#comBody').append(function () {
							var res = '';
							for (var i = 0; i < result.length; i++) {
								res += `<article class="comments__comment"><div class="comment__body"><p class="comment__name">${result[i]['name']}</p><p class="comment__text">${result[i]['text']}</p></div></article>`;
							}
							return res;
						});


						return false;
					}
				});
				return false;
			});
		});