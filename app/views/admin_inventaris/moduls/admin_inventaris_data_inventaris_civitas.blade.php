 <!-- Edited by Kazelord 070514-->
{{HTML::script('js/jquery.min.js')}}
{{HTML::script('js/angular.min.js')}}
{{HTML::script('js/bootstrap.min.js')}}

<style type="text/css">
	#tbl_h {
		cursor: pointer;
	}
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$(".pull-downs").each(function(){
			$(this).css('margin-top', $(this).parent().height() - $(this).height());
		});
	});
</script>

<div ng-controller="AdminInventarisCivitasController" id="div-controller">
	<!-- awal title -->
	<div class="row broccoli-rowKepala">
		<h1> Inventaris Civitas  <small> Akses dan Modifikasi data-data inventaris civitas PNJ </small> </h1>
		<br>
	</div><!--/broccoli-rowKepala-->
	<!-- akhir title -->
	<!-- awal tombol tambah -->
	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-1" style="padding-left:0px;">
			<button type="submit" class="btn btn-success" ng-click="modal_tambah_inventaris_civitas()"> <span class="glyphicon glyphicon-plus-sign"></span> Tambah</button>
		</div><!--/navigasiKiri-->
		<div class="col-md-2">
		</div><!--/navgasi jurusan-->
		<div class="col-md-2">
		</div><!--/div for gap-->
		<div class="col-md-3">
		</div><!--/navigasiCombo-->
		<div class="col-md-3" style="padding-right:0px;">
		</div><!--/navigasiKanan-->
	</div>
	<!-- akhir tombol tambah -->
	<!-- awal content -->
	<div class="row broccoli-rowIsi" >
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">Kode Inventaris &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">Nama Inventaris &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="23%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">Kondisi Inventaris &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">Tahun Anggaran &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;"> ... </th>
					
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="ic in inventariscivitas">
					<td class="text-center" width="5%">@{{ $index+1}}</td>
					<td class="text-center" width="15%">@{{ ic.kode_inventaris }}</td>
					<td class="text-left" width="15%">@{{ ic.nama_inventaris }}</td>
					<td class="text-left" width="23%">@{{ ic.kondisi_inventaris }}</td>
					<td class="text-left" width="15%">@{{ ic.tahun_anggaran_inventaris }}</td>
					<td class="text-center" width="15%"> 
						<div class="btn-group">
					 		<button class="btn btn-success btn-md" ng-click=""> <span class="glyphicon glyphicon-edit"></span></button>
					 		<button class="btn btn-danger btn-md" ng-click=""> <span class="glyphicon glyphicon-trash"></span></button> 
						</div>
					</td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div><!--/broccoli-rowIsi-->
	<!-- akhir content -->
</div>