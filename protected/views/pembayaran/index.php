<?php
/* @var $this PembayaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Pembayarans',
);

$this->menu=array(
    array('label'=>'Create Pembayaran', 'url'=>array('create')),
    array('label'=>'Manage Pembayaran', 'url'=>array('admin')),
);
?>

<h1>Pembayaran</h1>

<!-- Tabel Pembayaran -->
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>No Tagihan</th>
                <th>Total Tagihan</th>
                <th>Jumlah Bayar</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dataProvider->getData() as $index => $data): ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo CHtml::encode($data->id_kunjungan); ?></td>
                <td><?php echo CHtml::encode("Rp " . number_format($data->total_tagihan, 0, ',', '.')); ?></td>
                <td><?php echo CHtml::encode("Rp " . number_format($data->jumlah_bayar, 0, ',', '.')); ?></td>
                <td><?php echo CHtml::encode(date('d-m-Y', strtotime($data->tanggal_bayar))); ?></td>
				<td><?php echo CHtml::encode(date('d-m-Y', strtotime($data->status_pembayaran))); ?></td>
                <td>
                    <a href="<?php echo Yii::app()->createUrl('pembayaran/view', array('id' => $data->id)); ?>" class="btn btn-info btn-sm">Detail</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Pagination -->
<div class="pagination">
    <?php
    $this->widget('CLinkPager', array(
        'pages' => $dataProvider->getPagination(),
        'nextPageLabel' => 'Next',
        'prevPageLabel' => 'Previous',
        'header' => '',
    ));
    ?>
</div>
