<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-4">
                <h2 class="heading-section"></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="h5 mb-4 text-center">Mensagem de produtos encontrados ou não</h3>
                <div class="w-70 p-3 table-wrap">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr>
                                <th>&nbsp;</th>
                                <th>Carro</th>
                                <th>Caracaterísticas</th>
                                <th>Custo diário</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tuples as $tuple) : ?>
                                <div>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div>
                                                <img src="product-3.png" alt="" class="card-img rounded-0 img-fluid">
                                                <p>IMAGEM</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <p>Ano: <?= $tuple['ano']; ?></p>
                                                <p>Cor: <?= $tuple['cor']; ?></p>
                                            </div>
                                        </td>
                                        <td><?= $tuple['custo_dia']; ?></td>
                                        <td>
                                        <td>
                                        <a class="btn btn-secondary" href="/?page=home_reserva&action=reservar">Reservar</a>
                                        </td>
                                    </tr>
                                </div>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>