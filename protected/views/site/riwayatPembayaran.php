<?php
/* @var $this PembayaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array('Riwayat Pembayaran');

$this->menu = array(
    array('label' => 'Create Pembayaran', 'url' => array('create')),
    array('label' => 'Manage Pembayaran', 'url' => array('admin')),
);
?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Riwayat Pembayaran</h2>
        <form method="get" action="" class="d-flex">
            <input type="text" name="search" class="form-control me-2" placeholder="Cari No Tagihan" 
                   value="<?php echo CHtml::encode(Yii::app()->request->getQuery('search')); ?>">
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>
    </div>

    <div class="table-responsive rounded shadow-sm">
        <table class="table table-hover table-bordered align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Kunjungan</th>
                    <th>Total Tagihan</th>
                    <th>Jumlah Bayar</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Status Pembayaran</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php if (count($dataProvider->getData()) > 0): ?>
                    <?php foreach ($dataProvider->getData() as $index => $data): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo CHtml::encode($data->id_kunjungan); ?></td>
                            <td><?php echo CHtml::encode("Rp " . number_format($data->total_tagihan, 0, ',', '.')); ?></td>
                            <td><?php echo CHtml::encode("Rp " . number_format($data->jumlah_bayar, 0, ',', '.')); ?></td>
                            <td><?php echo CHtml::encode(date('d-m-Y', strtotime($data->tanggal_bayar))); ?></td>
                            <td>
                                <?php
                                if ($data->jumlah_bayar >= $data->total_tagihan) {
                                    echo "<span class='badge bg-success px-3 py-2'>Lunas</span>";
                                } else {
                                    echo "<span class='badge bg-warning text-dark px-3 py-2'>Belum Lunas</span>";
                                }
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-muted">Tidak ada data pembayaran ditemukan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        <?php
        $this->widget('CLinkPager', array(
            'pages' => $dataProvider->getPagination(),
            'nextPageLabel' => 'Next',
            'prevPageLabel' => 'Previous',
            'header' => '',
            'htmlOptions' => array('class' => 'pagination'),
        ));
        ?>
    </div>
</div>

<!-- Styling khusus tambahan -->
<style>
    .table th {
        background-color: #212529;
        color: #fff;
    }

    .table td, .table th {
        vertical-align: middle;
    }

    .pagination li a,
    .pagination li span {
        padding: 8px 12px;
        margin: 2px;
        border-radius: 6px;
        text-decoration: none;
        border: 1px solid #dee2e6;
    }

    .pagination li.active span {
        background-color: #0d6efd;
        color: white;
        border-color: #0d6efd;
    }

    .pagination li a:hover {
        background-color: #e2e6ea;
    }
</style>
