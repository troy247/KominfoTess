
<x-templates.default>
    <div class="card">
                <div class="box-border with-border mt-2">
                  <a href="{{route('category.create')}}" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus-circle"></i> Tambah</a>
                </div>
                <div class="card-header mb-2">
                  <h3 class="card-title">Semua Data</h3>
                </div>
                
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap datatable" id="dataTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Slug</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                  </table>
                </div>
                {{--Notif Delete --}}
              <div class="modal modal-blur fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-status bg-danger"></div>
                    <div class="modal-body text-center py-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v2m0 4v.01" /><path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" /></svg>
                      <h3>Are you sure?</h3>
                      <div class="text-muted">Do you really want to Delete? </div>
                    </div>
                    <div class="modal-footer">
                      <div class="w-100">
                        <div class="row">
                          <div class="col"><button type="button" class="btn btn-white w-100" data-bs-dismiss="modal">
                              Cancel
                            </a></div>
                          <div class="col"><button type="button" data-id="" id="confirmDelete" class="btn btn-danger w-100" data-bs-dismiss="modal">
                              Delete
                            </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              </div>

             

              @push('extra-scripts')
              <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
              <script>
                $(function() {
                    $('#dataTable').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: '{!! route('category.index') !!}',
                        columns: [
                            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable:false },
                            { data: 'name', name: 'name' },
                            { data: 'slug', name: 'slug' },
                            { data: 'action', name: 'actions' },
                    
                        ]
                    });
                });

                $('#dataTable').on('click','a#delete', function(e){
                  e.preventDefault();
                  var id = $(this).data('id');
                  $('#confirmDelete').attr('data-id', id);
                  $('#deleteModal').modal('show');
                })

                $('#confirmDelete').click(function(e){
                  e.preventDefault()
                  var id = $(this).data('id');

                  $.ajax({
                  type: 'DELETE',
                  url: ' category/'+id,
                  data:{
                    '_token': "{{ csrf_token() }}"
                  },
                  success: function(response){
                    
                   if(response.success){
                      window.location.href = ''
                   }
                  },
                  })
                })
             </script>

            
            @endpush

<x-slot name="title">Data Kategori</x-slot>     
</x-templates.default>
