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
					url: "form2.php",
					type: "POST",
					headers: {
						'Access-Control-Allow-Origin': '*'
					},
					data: {
						name: nameCom,
						text: textCom,
					}, // Передаем данные для записи
					dataType: "json",
					success: function (res) {

						console.log(5);
					}
				});
				return false;
			});
		});