<div class="container-fluid">
    
                 <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h2 class="m-0 font-weight-bold text-primary">Keranjang Belanja</h2>
                            <div class="card-body pb-0">
                    		<div class="row">
                    		<div class="col-sm-12">
                    			<?php echo form_open('belanja/Update'); ?>

								<table class="table" cellpadding="6" cellspacing="1" style="width:100%" >

								<tr>
								        <th width="90px">Jumlah</th>
								        <th>Nama Barang</th>
								        <th style="text-align:center">Harga Barang</th>
								        <th style="text-align:center">Sub-Total</th>
								        <th class="text-center">Action</th>
								</tr>

								<?php $i = 1; ?>

								<?php foreach ($this->cart->contents() as $items): ?>					       
								        <tr>
								                <td><?php echo form_input(array(
								                	'name' => $i.'[qty]', 
								                	'value' => $items['qty'], 
								                	'maxlength' => '3', 
								                	'min' => '0',
								                	'size' => '5', 
								                	'type' => 'number',
								                	'class' => 'form-control'

								                	)); ?></td>
								                <td><?php echo $items['name']; ?></td>
								                <td style="text-align:center">Rp.<?php echo $this->cart->format_number($items['price']); ?></td>
								                <td style="text-align:center">Rp.<?php echo $this->cart->format_number($items['subtotal']); ?></td>
								                <td class="text-center">
								                	<a href="<?= base_url('belanja/delete/'.$items['rowid']) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
								                </td>
								        </tr>

								<?php $i++; ?>

								<?php endforeach; ?>

								<tr>
								        <td colspan="2"> </td>
								        <td class="right"><h4><strong>Total : </strong></h4>
								        <td class="right"><h4><strong>Rp.<?php echo $this->cart->format_number($this->cart->total()); ?></strong></h4></td>
								</tr>

								</table>
								<div class="float-right">
									<button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Update Belanjaan</button>
								<a href="" class="btn btn-success btn-flat"><i class="fa fa-check-square"></i> Check Out</a>
								</div>
								<?php echo form_close(); ?>
                    		</div>
                    	</div>
                    	</div>
                        </div>
                    </div>

 </div>