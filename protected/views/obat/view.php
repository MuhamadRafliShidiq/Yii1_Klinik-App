<?php
/* @var $this ObatController */
/* @var $model Obat */

$this->breadcrumbs = array(
    'Obats' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List Obat', 'url' => array('index')),
    array('label' => 'Create Obat', 'url' => array('create')),
    array('label' => 'Update Obat', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Obat', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Obat', 'url' => array('admin')),
);
?>

<div class="container mt-10 px-6 py-10">
    <div class="bg-gradient-to-r from-green-500 to-blue-500 text-black p-8 rounded-xl shadow-lg mb-8">
        <h1 class="text-4xl font-bold text-center text-black mb-6">Detail Obat #<?php echo $model->id; ?></h1>
        <table class="table table-bordered table-hover table-striped detail-view-table">
            <thead class="thead" style="background-color: #28a745; color: white;">
                <tr>
                    <th style="padding: 10px 15px;">Attribute</th>
                    <th style="padding: 10px 15px;">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 12px 15px; font-weight: bold;">ID</td>
                    <td style="padding: 12px 15px;"><?php echo htmlspecialchars($model->id); ?></td>
                </tr>
                <tr>
                    <td style="padding: 12px 15px; font-weight: bold;">Nama Obat</td>
                    <td style="padding: 12px 15px;"><?php echo htmlspecialchars($model->nama); ?></td>
                </tr>
                <tr>
                    <td style="padding: 12px 15px; font-weight: bold;">Stok</td>
                    <td style="padding: 12px 15px;"><?php echo htmlspecialchars($model->stok); ?></td>
                </tr>
                <tr>
                    <td style="padding: 12px 15px; font-weight: bold;">Satuan</td>
                    <td style="padding: 12px 15px;"><?php echo htmlspecialchars($model->satuan); ?></td>
                </tr>
                <tr>
                    <td style="padding: 12px 15px; font-weight: bold;">Harga</td>
                    <td style="padding: 12px 15px;"><?php echo 'Rp. ' . number_format($model->harga, 0, ',', '.'); ?></td>
                </tr>
				<tr>
					<td style="padding: 12px 15px; font-weight: bold;">Keterangan</td>
					<td style="padding: 12px 15px;"><?php echo htmlspecialchars($model->keterangan); ?></td>
				</tr>
            </tbody>
        </table>
    </div>

    <div class="action-buttons mt-8 text-center">
        <a href="<?php echo Yii::app()->createUrl('obat/update', ['id' => $model->id]); ?>" class="btn btn-warning mx-2 mt-4">Edit</a>
        <a href="<?php echo Yii::app()->createUrl('obat/index'); ?>" class="btn btn-secondary mx-2 mt-4">Kembali</a>
    </div>
</div>

<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    h1 {
        color: #fff;
        font-family: 'Poppins', sans-serif;
        font-size: 2.5rem;
    }

    .detail-view-table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
    }

    .detail-view-table td, .detail-view-table th {
        padding: 16px;
        font-size: 1rem;
        color: #333;
    }

    .detail-view-table th {
        background-color: #28a745;
        color: white;
        text-align: left;
    }

    .detail-view-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .action-buttons a {
        padding: 12px 24px;
        border-radius: 30px;
        font-weight: bold;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .btn-warning {
        background-color: #ffc107;
        color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-warning:hover {
        background-color: #e0a800;
        transform: translateY(-2px);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
    }

    .btn-secondary {
        background-color: #6c757d;
        color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        transform: translateY(-2px);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
    }

    @media (max-width: 768px) {
        .container {
            padding: 20px;
        }

        h1 {
            font-size: 2rem;
        }

        .action-buttons a {
            font-size: 14px;
            padding: 10px 20px;
        }
    }
</style>
