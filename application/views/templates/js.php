<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
	$('.tabela').DataTable({
		"ordering": true,
		"paging": true,
		"searching": true,
		"oLanguage": {
			"sEmptyTable": "Nenhum registro encontrado na tabela",
			"sInfo": "Mostrar _START_ até _END_ de _TOTAL_ registros",
			"sInfoEmpty": "Mostrar 0 até 0 de 0 Registros",
			"sInfoFiltered": "(Filtrar de _MAX_ total registros)",
			"sInfoPostFix": "",
			"sInfoThousands": ".",
			"sLengthMenu": "Mostrar _MENU_ registros por pagina",
			"sLoadingRecords": "Carregando...",
			"sProcessing": "Processando...",
			"sZeroRecords": "Nenhum registro encontrado",
			"sSearch": "Pesquisar",
			"oPaginate": {
				"sNext": "Proximo",
				"sPrevious": "Anterior",
				"sFirst": "Primeiro",
				"sLast": "Ultimo"
			},
			"oAria": {
				"sSortAscending": ": Ordenar colunas de forma ascendente",
				"sSortDescending": ": Ordenar colunas de forma descendente"
			}
		}
	});
</script>

<script>
	$(document).ready(function() {
		const base_url = 'http://localhost/crudci';

		// Adicione essa função para obter os dados dos games por categoria
		function obterDadosGamesPorCategoria() {
			$.ajax({
				url: base_url + '/dashboard/gamesPerCategory',
				type: "GET",
				dataType: "json",
				success: function(resultado) {
					// Exibe o resultado no console
					console.log("Dados recebidos:", resultado);

					// Chama a função para gerar o gráfico
					geraGraficoBarras(resultado);
				},
				error: function(error) {
					console.error('Erro ao obter os dados dos games por categoria:', error);
				}
			});
		}

		// Função para gerar o gráfico de barras usando os dados recebidos
		function geraGraficoBarras(resultado) {
			// Extraia as categorias e contagens dos dados
			var labels = resultado.map(function(item) {
				return item.category;
			});

			var counts = resultado.map(function(item) {
				return item.count;
			});

			// Exibe as labels e counts no console
			console.log("Labels:", labels);
			console.log("Counts:", counts);
			// Gera cores aleatórias
			var randomColors = Array.from({
				length: labels.length
			}, () => getRandomColor());

			// Seu código Chart.js aqui
			const ctx = document.getElementById('myBarChart').getContext('2d');
			const myBarChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: labels,
					datasets: [{
						label: 'Quantidade de Jogos por Categoria',
						data: counts,
						backgroundColor: randomColors,
						borderColor: randomColors.map(color => color.replace('0.2', '1')), // Define a borda mais escura para cada cor de fundo
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true,

						},
						x: {
							title: {
								display: true,
								text: 'Categorias'
							}
						},
					}
				}
			});
		}

		obterDadosGamesPorCategoria();

		// Função para gerar uma cor aleatória
		function getRandomColor() {
			var letters = '0123456789ABCDEF';
			var color = '#';
			for (var i = 0; i < 6; i++) {
				color += letters[Math.floor(Math.random() * 16)];
			}
			return color;
		}
	});
</script>
</body>

</html>
