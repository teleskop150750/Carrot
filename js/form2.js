		$(document).ready(function () {
			$("#btnCom").bind("click", function () {
				console.log(4);
				var nameCom = $('#nameCom').val();
				var textCom = $('#textCom').val();
				console.log(nameCom);
				console.log(textCom);

				$('#nameCom').val('');
				$('#textCom').val('');

				$.ajax({
					url: "../php/form2.php",
					type: "POST",
					headers: {
						'Access-Control-Allow-Origin': '*'
					},
					data: {
						nameC: nameCom,
						textC: textCom,
					}, // Передаем данные для записи
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