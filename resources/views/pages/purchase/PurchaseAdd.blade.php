@extends('layouts.master')
@section('title','Add New Purchase')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add Purchase 
                        <a href="{{ route('purchase.view') }}" class="btn btn-sm btn-success float-right">Purchases</a>
                    </h3>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">Something want wrong !</div>
                @endif
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Date</label>
                                <input type="text" name="date" class="form-control datepicker" id="date" placeholder="YYYY-MM-DD">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="purchase_no">Purchase No</label>
                                <input type="text" name="purchase_no" class="form-control" id="purchase_no" placeholder="Purchase No">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Supplier Name</label>
                                <select class="form-control select2" name="supplier_id" id="supplier_id" style="width: 100%;">
                                    <option selected value="" disabled>Select Supplier Name</option>
                                    @foreach ($supplier as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category Name</label>
                                <select class="form-control select2" name="category_id" id="category_id" style="width: 100%;">
                                    <option selected value="" disabled>Select Category Name</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <select class="form-control select2" name="product_id" id="product_id" style="width: 100%;">
                                    <option selected value="" disabled>Select Product Name</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <button class="btn btn-sm btn-primary addEventMore" id="addEventMore">Add Item</button>
                </div>
                <div class="card-body">
                    <form action="{{ route('purchase.store') }}" method="POST" id="myForm">
                        @csrf
                        <table class="table-sm table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Product Name</th>
                                    <th width="7%">Pcs/Kg</th>
                                    <th width="10%">Unit Price</th>
                                    <th>Description</th>
                                    <th width="15%">Total Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="addRow" class="addRow">

                            </tbody>
                            <tbody>
                                <tr>
                                    <td colspan="5"></td>
                                    <td>
                                        <input type="text" name="estimated_amount" value="0" id="estimated_amount" class="form-control form-control-sm text-right estimated_amount" readonly style="background-color: #D8FDBA">
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" id="storeButtol">Purchase Store</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->
@endsection
@section('scripts')
<script id="document-template" type="text/x-handlebars-template">
    <tr class="delete-add-more-item" id="delete-add-more-item">
        <input type="hidden" name="date[]" value="@{{ date }}">
        <input type="hidden" name="purchase_no[]" value="@{{ purchase_no }}">
        <input type="hidden" name="supplier_id[]" value="@{{ supplier_id }}">
        <td>
            <input type="hidden" name="category_id[]" value="@{{ category_id }}">
            @{{ category_name }}
        </td>
        <td>
            <input type="hidden" name="product_id[]" value="@{{ product_id }}">
            @{{ product_name }}
        </td>
        <td>
            <input type="number" min="1" class="form-control text-right buying_qty" name="buying_qty[]" value="1">
        </td>
        <td>
            <input type="number" class="form-control text-right unit_price" name="unit_price[]" value="">
        </td>
        <td>
            <input type="text" class="form-control" name="description[]" value="">
        </td>
        <td>
            <input type="number" class="form-control text-right buying_price" name="buying_price[]" value="0" readonly>
        </td>
        <td><i class="btn btn-danger btn-sm fa fa-window-close removeEventMore"></i></td>
    </tr>
</script>
<script>
    $(document).ready(function () {
        $(document).on('click','.addEventMore', function () {
            var date = $('#date').val();
            var purchase_no = $('#purchase_no').val();
            var supplier_id = $('#supplier_id').val();
            var category_id = $('#category_id').val();
            var category_name = $('#category_id').find('option:selected').text();
            var product_id = $('#product_id').val();
            var product_name = $('#product_id').find('option:selected').text();
            if (date == '') {
                Swal.fire({
                    position: 'top-end',
                    title: 'Date is required',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
            else if (purchase_no == '') {
                Swal.fire({
                    position: 'top-end',
                    title: 'Purchase is required',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
            else if (supplier_id == '') {
                Swal.fire({
                    position: 'top-end',
                    title: 'Supplier is required',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
            else if (category_name == 'Select Category Name') {
                Swal.fire({
                    position: 'top-end',
                    title: 'Category is required',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
            else if (product_name == 'Select Product Name') {
                Swal.fire({
                    position: 'top-end',
                    title: 'Product is required',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
            else{
                var source = $('#document-template').html();
                var template = Handlebars.compile(source);
                var data = {
                    date:date,
                    purchase_no:purchase_no,
                    supplier_id:supplier_id,
                    category_id:category_id,
                    category_name:category_name,
                    product_id:product_id,
                    product_name:product_name
                };
                var html = template(data);
                $('#addRow').append(html);
            } 
        });
        $(document).on('click','.removeEventMore', function (event) {
            $(this).closest('.delete-add-more-item').remove();
            totalAmountPrice()
        });
        $(document).on('keyup click','.unit_price, .buying_qty', function () {
            var unit_price = $(this).closest('tr').find('input.unit_price').val();
            var buying_qty = $(this).closest('tr').find('input.buying_qty').val();
            var total = unit_price * buying_qty;
            $(this).closest('tr').find('input.buying_price').val(total);
            totalAmountPrice()
        });
        function totalAmountPrice(){
            var sum = 0;
            $('.buying_price').each(function () {
                var value = $(this).val();
                if (!isNaN(value) && value.length != 0) {
                    sum += parseFloat(value);
                }
            });
            $('#estimated_amount').val(sum);
        }
    });
</script>
<script>
    $(document).on('change','#supplier_id',function(){
        var supplier_id = $(this).val();
        $.ajax({
            url : "{{ route('get-category') }}",
            type: "GET",
            data : {supplier_id : supplier_id},
            success:function(data){
                var html = '<option selected disabled>Select Category Name</option>';
                $.each(data,function(key,v){
                    html += '<option value="'+v.category_id+'">'+v.category.name+'</option>'
                });
                $('#category_id').html(html);
            }
        });
    });
</script>
<script>
    $(document).on('change','#category_id',function(){
        var category_id = $(this).val();
        $.ajax({
            url : "{{ route('get-product') }}",
            type: "GET",
            data : {category_id : category_id},
            success:function(data){
                var html = '<option selected disabled>Select Product Name</option>';
                $.each(data,function(key,v){
                    html += '<option value="'+v.id+'">'+v.name+'</option>'
                });
                $('#product_id').html(html);
            }
        });
    });
</script>
<script>
    $('.datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        format : 'yyyy-mm-dd'
    });
</script>
<!-- /.row (main row) -->
<script type="text/javascript">
    $(document).ready(function () {
      $('#quickForm').validate({
        rules: {
          date: {
            required: true,
          },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
    </script>  
@endsection