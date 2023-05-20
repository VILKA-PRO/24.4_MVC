

<div class="container">

	<div class="row game-card justify-content-md-center align-items-center myRow ">
		<div class="col-8">
			<div class="card text-center ">
				<div class="card-header">
					<h1 class="m-0 ">Портфолио</h1>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-12 ">

							<h3 class="card-title mt-3"> А проекты у меня от бога
							</h3>
							<p>
							<table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">Год</th>
									<th scope="col">Проект</th>
									<th scope="col">Описание</th>
								</tr>
							</thead>
								<?php

								foreach ($data as $row) {
									echo '<tr><td scope="row">' . $row['Year'] . '</td><td>' . $row['Site'] . '</td><td>' . $row['Description'] . '</td></tr>';
								}

								?>
							</table>
							</p>
						</div>

					</div>
					<div class="row justify-content-md-center mt-3  text-left">
						<p>
							<span></span>
						</p>
					</div>
				</div>
			</div>
		</div>

	</div>