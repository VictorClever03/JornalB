<!-- top from php -->
<?php
use App\Helpers\Go;
use App\Helpers\Sessao;
use App\Helpers\ResumirTexto;

require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'navbar.php';
?>
<!-- ----------------------- -->
<!-- Aside from php -->
<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'aside.php';
?>


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Lista</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= URL ?>/admin">Home</a></li>
                <li class="breadcrumb-item active">Quadro de honra </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <?= Sessao::sms('honra') ?>
<a href="<?=URL?>/quadro" target="__blank" class="btn btn-primary mb-3"> Ver</a>
    <div class="row">

    <div class="card">
            <div class="card-body">
                <h5 class="card-title">Quadro de Honra</h5>
                <!-- data table -->
                <table class="table datatable table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Img</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Média</th>
                            <th scope="col">Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($dados) :
                            $i = 0;
                            foreach ($dados as $key => $value) : ?>

                                <tr>
                                    <th scope="row"><?= $i += 1 ?></th>
                                    <td><img src="<?=Go::getPublic($value['path'])?>" alt="" width="30" height="30" class=""></td>
                                    <td><?= $value['nome'] ?></td>
                                    <td><?= $value['curso'] ?></td>
                                    <td><?= $value['media'] ?></td>
                                    <td class=" d-flex gap-2">
                                        <a href="<?= URL ?>/admin/seeHonra/<?= $value['id'] ?>" class="btn btn-primary btn-sm" title='editar'>
                                        <i class="bi bi-pen"></i>
                                        </a>
                                        <form action="<?= URL ?>/admin/deleteHonra/<?= $value['id'] ?>" method="post">
                                            <button type="submit" name="delete" class="btn btn-danger btn-sm" title='Delectar' value='submit'>
                                                <i class="bi bi-x-circle"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                        <?php endforeach;
                        else :
                        endif; ?>
                    </tbody>
                </table>
            </div>
        </div> <!-- End Bordered Table -->

        
    </div>
    <!-- falta inserir alguamas imagens-->

</main>

<!-- footer from php -->
<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'footer.php';
?>
<!-- ----------------------- -->
